<?php



class Myclass
{
    private $handle = null;


    /**
     * 判断文件是否存在
     * @param $filePath 文件的路径
     * @return bool true 文件存在 ；false 文件不存在
     */
    public function isFileExist ($filePath)
    {
        if (file_exists($filePath)) {
            return true;
        }
        return false;
    }


    /**
     * 创建文件
     * @param $filePath 文件路径
     * @return bool  true 创建成功 ； false 创建失败
     *
     */
    public function createFile($filePath)
    {
        if($this->isFileExist($filePath)) {
            return false;
        }
        if(touch($filePath)) {
            return true;
        }
        return false;
    }

    /**
     * 删除文件
     * @param $filePath 文件路径
     * @return bool true 删除成功 ； false删除失败
     */
    public function deleteFile($filePath)
    {
        if($this->isFileExist($filePath)) {   //如果文件存在，就可以执行删除，不存在直接return false
            if (unlink($filePath)){
               return true;
            }
        }
        return false;
    }

    /**
     * 获取文件
     * @param $filePath  文件路径
     * @return bool|false|string   false获取失败；string 直接返回文件内容
     *
     */
    public function getFile($filePath)
    {
        if ($this->isFileExist($filePath)) {

            return   file_get_contents($filePath);
        }
        return false;
    }

    /**
     * 修改内容（覆盖式修改）
     * @param $filePath 文件路径
     * @param $content  要修改的内容
     * @return bool   true 修改成功   false修改失败
     */
    public function reviseFile($filePath, $content)
    {
        if ($this->isFileExist($filePath)) {
            if(file_put_contents($filePath, $content)) {
                return true;
            }
            return false;
        }
        return false;
    }

    /**
     * 复制文件
     * @param $filePath 源文件路径
     * @param $filePath2 要复制到的路径
     * @return bool  true复制成功 ；  false复制失败
     */
    public function copyFile($filePath, $filePath2)
    {
        if($this->isFileExist($filePath) && !$this->isFileExist($filePath2)) {
            if(copy($filePath, $filePath2)){
                return true;
            }
            return false;
        }
        return false;
    }

    /**
     * 剪切或者重命名
     * @param $filePath     源文件路径（原文件名）
     * @param $filePath2    要移到的路径（新文件名）
     * @return bool     true成功   false失败
     */
    public function shearFile($filePath, $filePath2)
    {
        if($this->isFileExist($filePath) && !$this->isFileExist($filePath2)) {
            if(rename($filePath, $filePath2)){
                return true;
            }
            return false;
        }
        return false;
    }

    /**
     * 获取文件总行数
     * @param $filePath   文件路径
     * @return bool|int     false 表示失败    int则返回行数
     */
    public function getFileAllLines ($filePath)
    {
       if($this->openFile($filePath) === false) {
           return false;
       }
        $line = 0;
        while (stream_get_line($this->handle,8192, '
')) {
            $line++;
        }
        $this->closeFile();
        return $line;
    }

    /**
     * 获取指定行数的内容
     * @param $filePath  文件路径
     * @param $line      要获取的行数
     * @return bool|string   false 获取失败   否则返回要获取的内容
     *
     */
    public function getLineContent ($filePath, $line)
    {

        if($line < 1 || $line > $this->getFileAllLines($filePath)) {
            return false;
        }
        //这里有个问题，为什么这个条件放在上面时，该方法会失效呢....
        if($this->openFile($filePath) === false) {
            return false;
        }

        $nowLine = 0;
        while (!feof($this->handle)) {

            $nowLine++;
            if($nowLine == $line) {
                return fgets($this->handle);
            }
            fgets($this->handle);
        }
        $this->closeFile();
    }



    /**
     * 打开文件获取句柄
     * @param $filePath 文件路径
     * @param string $type 打开方式（r, r+, w, w+, a, a+...）
     * @return bool|resource   false 表示打开失败，否则表示文件已经打开
     */
    private function openFile ($filePath, $type = 'r')
    {
        if (!$this->isFileExist($filePath)) {

            return false;
        }
        $this->handle =  fopen($filePath, $type);
        return true;
    }

    /**
     * 关闭文件句柄
     */
    private function closeFile ()
    {
        if (!is_null($this->handle)) {
            fclose($this->handle);
            $this->handle = null;
        }
    }

    /**
     * 判断目录是否存在
     * @param $dirPath string 目录路径
     * @return bool true:存在 false:不存在
     */
    public function isDirExists($dirPath)
    {
        if (is_dir($dirPath)) {
            return true;
        }
        return false;
    }

    /**
     * 获取目录内容
     * @param $dirPath string 目录路径
     * @return array|bool
     */
    public function readDir($dirPath)
    {
        if (!$this->isDirExists($dirPath)) {
            return false;
        }

        $this->handle = opendir($dirPath);
        $items = [];
        while (false != ($item = readdir($this->handle))) {
            if ($item != '.' && $item != '..') {
                $onePath = $dirPath . '/' . $item;
                if (is_dir($onePath)) {
                    $items['dir'][] = $item;
                }
                if (is_file($onePath)) {
                    $items['file'][] = $item;
                }
            }
        }
        $this->closeDir();
        return $items;
    }

    /**
     * 获取目录大小
     * @param $dirPath  目录路径
     * @return bool|false|int   true返回大小，false失败
     */
    public function getDirSize ($dirPath)
    {
        if (!$this->isDirExists($dirPath)) {
            return false;
        }

        $this->handle = opendir($dirPath);
        $size = 0;
        while (false != ($item = readdir($this->handle))) {
            if ($item != '.' && $item != '..') {
                $onePath = $dirPath . '/' . $item;
                if (is_dir($onePath)) {
                   $size += $this->getDirSize($onePath);
                }
                if (is_file($onePath)) {
                  $size += filesize($onePath);
                }
            }
        }
        $this->closeDir();
        return $size;
    }



    /**
     * 关闭目录句柄
     */
    private function closeDir ()
    {
        if (!is_null($this->handle)) {
            closedir($this->handle);
            $this->handle = null;
        }
    }








}
