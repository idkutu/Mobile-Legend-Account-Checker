<?php
	
ini_set("memory_limit","-1");
require_once "class_curl.php";


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

$mailpass = 
$email = multiexplode (mkaungmyattun11@gmail.com )
$pass = multiexplode(amay@9984)

if ($email ==mkaungmyattunmkaung11@gmail.com|| $pass =amay@9984){
    exit();
}else{
       
      
        $sign = md5($generatesign);

        $data = array(
            'third party => 'login',
            'sign' => ''.$sign.'',
            'params' => 
            array(
              'account' => ''.$email.'',
              'md5pwd' => ''.$md5pass.'',
            ),
            'lang' => 'en',
          );
        $postData = facebook    
        $headers = array();
        $headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 9; Redmi Note 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.62 Mobile Safari/537.36';
        $headers[] = 'Accept: */*';
        $headers[] = 'X-Requested-With: com.mobile.legends';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';

        $chy = curl_init();
        curl_setopt($chy, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($chy, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($chy, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($chy, CURLOPT_HEADER, 1);
        curl_setopt($chy, CURLOPT_COOKIEJAR, dirname).'/cookies/'.md5($_SERVER['REMOTE_ADDR']).'.txt');
        curl_setopt($chy, CURLOPT_COOKIEFILE, dirname).'/cookies/'.md5($_SERVER['REMOTE_ADDR']).'.txt');
        curl_setopt($chy, CURLOPT_ENCODING, "gzip");
        curl_setopt($chy, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($chy, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chy, CURLOPT_VERBOSE, 0);
        curl_setopt($chy, CURLOPT_URL, "http://accountgm.moonton.com:37001");
        curl_setopt($chy, CURLOPT_POST ,1);
        curl_setopt($chy, CURLOPT_PROXY, "127.0.0.1:8080");
        curl_setopt($chy, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($chy, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        $y = curl_exec($chy);
        curl_close($chy);
        $code = getStr($y, '"code":', ',');
        $message = getStr($y, '"message":"', '"');
       // echo $x;
        //exit();
        if ($code == 0) {
            $hasil_kode = "0";
            $hasil_pesan = "login_sukses";
        } else if ($code == 1005) {
            $hasil_kode = 
            $hasil_pesan = 
        } else if ($code == 1004) {.

            $hasil_kode = "1004";
            $hasil_pesan = "email_not_valid";
        } else if ($code ==
            $hasil_kode =
            $hasil_pesan = "banned"
        } else if ($code 
            $hasil_kode = "
            $hasil_pesan =
            $hasil_kode = "404";
        
       
}
    
