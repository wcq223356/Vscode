<?php


class MyException extends Exception
{

    public function returnMsg()
    {
        return '在'. $this->getFile() . '文件的第' . $this->getLine() .
            '行存在错误：' . $this->getMessage() . ',错误编号为' . $this->getCode();
    }
}

//使用例子

$num = 10;

try
{
    if($num < 20) {
        throw new MyException('num小于20', '401');
    } else {
        echo 'num大于等于20';
    }
} catch (MyException $e) {
    echo $e-> returnMsg();
}


