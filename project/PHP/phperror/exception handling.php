<?php

//异常处理

//例子：

$num = 10;

//try{
//    if($num <20) {
//        throw new \Exception('num小于20');  //在类前面加\ 表示的是PHP中自带的类
//    } else {
//        echo '大于等于20';
//    }
//} catch (Exception $e) {
//    echo $e->getMessage();
//}


//嵌套catch

try{

    try{
        if ($num < 20) {
            throw new Exception('num小于20');
        }
    } catch (Exception $e) {            //正常情况，异常时抛给第一个try中的catch，因此需要在catch中再继续将异常抛出
                                        //  第二个try中的catch才能接收到异常信息
        throw new Exception($e->getMessage());
    }

} catch (Exception $e) {
    echo '这是另外一个'.$e->getMessage();
}