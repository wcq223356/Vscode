<?php


$ralphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890 !,.:;?~@#$%^&*()_+-=][}{/><";
$alphabet = $ralphabet . $ralphabet;


//加密
function encrypt($password, $strtoencrypt)
{
    global $ralphabet;
    global $alphabet;

    for ($i = 0; $i < strlen($password); $i++) {
        $cur_pswd_ltr = substr($password, $i, 1);  //a b c
        $pos_alpha_ary[] = substr(strstr($alphabet, $cur_pswd_ltr), 0, strlen($ralphabet));
    }

    $i = 0;
    $n = 0;
    $nn = strlen($password);  //3
    $c = strlen($strtoencrypt);  //4
    $encrypted_string = '';
    while ($i < $c) {

        $encrypted_string .= substr($pos_alpha_ary[$n], strpos($ralphabet, substr($strtoencrypt, $i, 1)), 1);

        $n++;
        if ($n == $nn) $n = 0;
        $i++;
    }

    return $encrypted_string;
}

//#6$#
function decrypt($password, $strtodecrypt)
{
    global $ralphabet;
    global $alphabet;

    for ($i = 0; $i < strlen($password); $i++) {
        $cur_pswd_ltr = substr($password, $i, 1);
        $pos_alpha_ary[] = substr(strstr($alphabet, $cur_pswd_ltr), 0, strlen($ralphabet));
    }

    $i = 0;
    $n = 0;
    $nn = strlen($password);
    $c = strlen($strtodecrypt);
    $decrypted_string = '';
    while ($i < $c) {
        $decrypted_string .= substr($ralphabet, strpos($pos_alpha_ary[$n], substr($strtodecrypt, $i, 1)), 1);


        $n++;
        if ($n == $nn) $n = 0;
        $i++;
    }

    return $decrypted_string;
}

$str = "test";

$a = encrypt("abc", $str);
$b = decrypt("abc", $a);

echo $a . "<br/>" . $b;
