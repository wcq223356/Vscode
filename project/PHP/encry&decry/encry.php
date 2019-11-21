<?php

//chr();  //返回 ASCII值
//ord();  //返回字符串中，首个字符的ASCII值

$str = 'aaahjksh';

//加密


function foo ($str, $num)
{
    $newstr = '';
    for ($i = 0; $i < strlen($str); $i++) {

          $strascll = (ord($str[$i]) + $num) % 126;

          if ($strascll < 32) {

          $strascll = $strascll + 31;
        }
          $strascll = chr($strascll);
          $newstr = $newstr .$strascll;

    }
    echo$newstr;
}
foo($str, 5);

echo '<br>';

//解密

function goo ($str, $num)
{

    for ($i = 0; $i < strlen($str); $i++) {

        $strascll = ord($str[$i]) - $num;

        if ($strascll < 32) {

            $strascll = 127 - (32 - $strascll) ;

        }
       echo $strascll = chr($strascll);
    }

}
goo('fffmopxm', 5);
