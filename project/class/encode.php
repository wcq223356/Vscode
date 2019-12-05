<?php

class Encode
{
    private $ralphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890 !,.:;?~@#$%^&*()_+-=][}{/><";
    private $alphabet;
    private $password = 'qnmlgb';

    public function __construct()
    {
        $this->alphabet = $this->ralphabet.$this->ralphabet;
    }

    public function encrypt($strtoencrypt)
    {
        for ($i = 0; $i < strlen($this->password); $i++) {
            $cur_pswd_ltr = substr($this->password, $i, 1);  //a b c
            $pos_alpha_ary[] = substr(strstr($this->alphabet, $cur_pswd_ltr), 0, strlen($this->ralphabet));
        }

        $i = 0;
        $n = 0;
        $nn = strlen($this->password);  //3
        $c = strlen($strtoencrypt);  //4
        $encrypted_string = '';
        while ($i < $c) {

            $encrypted_string .= substr($pos_alpha_ary[$n], strpos($this->ralphabet, substr($strtoencrypt, $i, 1)), 1);

            $n++;
            if ($n == $nn) $n = 0;
            $i++;
        }

        return $encrypted_string;
    }

    public function decrypt($strtodecrypt)
    {
        for ($i = 0; $i < strlen($this->password); $i++) {
            $cur_pswd_ltr = substr($this->password, $i, 1);
            $pos_alpha_ary[] = substr(strstr($this->alphabet, $cur_pswd_ltr), 0, strlen($this->ralphabet));
        }

        $i = 0;
        $n = 0;
        $nn = strlen($this->password);
        $c = strlen($strtodecrypt);
        $decrypted_string = '';
        while ($i < $c) {
            $decrypted_string .= substr($this->ralphabet, strpos($pos_alpha_ary[$n], substr($strtodecrypt, $i, 1)), 1);


            $n++;
            if ($n == $nn) $n = 0;
            $i++;
        }

        return $decrypted_string;

    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}

$Encode = new Encode();
$Encode->password = 'ssss'.'qnmlgb'.'oooo';
echo $Encode->encrypt('weichaoqun');
echo $Encode->decrypt($Encode->encrypt('weichaoqun'));