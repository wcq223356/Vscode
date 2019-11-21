<?php


class PrintWater
{

    /**图片水印
     * @param $imageUrl
     * @param $waterPath
     * @param $savePath
     */
    public function pigWater ($pigPath, $waterPath, $savePath) {
        //图片水印
        $imageUrl = $pigPath;

        $imageInfo = getimagesize($imageUrl);

        $imageType = image_type_to_extension($imageInfo[2], false);

        $fun = "imagecreatefrom$imageType"; //创建图片的函数名

        $image = $fun($imageUrl);

        $mark = imagecreatefrompng($waterPath);

        //合并图片
        imagecopy($image, $mark, 0, 0, 0, 0, 49, 48);

        imagedestroy($mark); //销毁水印图片

        $funs = "image$imageType";

        $funs($image, $savePath);


        imagedestroy($image);

    }

    /**
     * 随机四字图片
     * @param $fontStr
     * @param $num
     */
    public function fontPrint ($fontStr, $num)
    {

        session_start();

        //文字水印

        // Set the content-type
        header('Content-Type: image/png');

        // Create the image
        $im = imagecreatetruecolor(200, 50);

        // Create some colors
        $white = imagecolorallocate($im, 255, 255, 255);
        $grey = imagecolorallocate($im, 128, 128, 128);
        $black = imagecolorallocate($im, 0, 0, 0);
        imagefilledrectangle($im, 0, 0, 199, 49, $white);

        // The text to draw
        $text = '';
        for ($i = 0; $i < $num; $i++){
            $text .= mb_substr($fontStr, mt_rand(0, mb_strlen($fontStr) -1), 1);
        }
        $_SESSION["fontCode"] = $text;

        // Replace path by your own font path
        $font = 'e:\Vscode\project\PHP\gd\img\AdobeSongStd-Light.otf';

        // Add some shadow to the text
        imagettftext($im, 16, 6, 31, 31, $grey, $font, $text);

        // Add the text
        imagettftext($im, 16, 5, 30, 30, $black, $font, $text);

        for ($i = 0; $i < 80; $i++) {
            imagesetpixel($im, rand(0, 200), rand(0, 50), $black);
        }

        // Using imagepng() results in clearer text compared with imagejpeg()
        imagepng($im);
        imagedestroy($im);

    }

    public function fontWater ($fontStr)
    {
        //文字水印

        // Set the content-type
        header('Content-Type: image/png');

        // Create the image
        $im = imagecreatetruecolor(400, 30);

        // Create some colors
        $white = imagecolorallocate($im, 255, 255, 255);
        $grey = imagecolorallocate($im, 128, 128, 128);
        $black = imagecolorallocate($im, 0, 0, 0);
        imagefilledrectangle($im, 0, 0, 399, 29, $white);

        // The text to draw
        $text = 'Testing...';
        // Replace path by your own font path
        $font = 'e:\Vscode\project\PHP\gd\img\arialbi.ttf';

        // Add some shadow to the text
        imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);

        // Add the text
        imagettftext($im, 20, 0, 10, 20, $black, $font, $text);

        // Using imagepng() results in clearer text compared with imagejpeg()
        imagepng($im);
        imagedestroy($im);
    }

    /**
     * 自定义大小压缩图片
     * @param $pigPath
     * @param $savePath
     * @param $size
     */
    public function pigZip ($pigPath, $savePath, $size)
    {
        //压缩图片

        $imgUrl = $pigPath;

        $imgInfo = getimagesize($imgUrl);

        $imgType = image_type_to_extension($imgInfo[2], false);

        $fun = "imagecreatefrom$imgType";

        $image = $fun($imgUrl);

//判断原始图片的宽高比例

        if ($imgInfo[0] > $imgInfo[1]) { //宽大
            $w = $size;
            $h = $size / $imgInfo[0] * $imgInfo[1];
        } else { //高
            $h = $size;
            $w = $size / $imgInfo[1] * $imgInfo[0];
        }

        //在内存创建新的图片
        $images = imagecreatetruecolor($w, $h);

        //将原始图片复制到新图
        imagecopyresampled($images, $image, 0,0,0,0, $w, $h, $imgInfo[0], $imgInfo[1]);

        //销毁原图
        imagedestroy($image);

        header("Content-Type:".$imgInfo['mime']);

        imagejpeg($images, $savePath);

        imagedestroy($images);


    }

}
