<?php
if(isset($_POST['g-recaptcha-response'])){
$secretKey ="6Ld5ZAcdAAAAACWJNVLLEYIqdQmiJ-vb9WkkkUEq";
$ip= $_SERVER['REMOTE_ADDR'];
$response = $_POST['g-recaptcha-response'];
$url= "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$ip";
$fire=file_get_contents($url);
// echo $fire;
$data=json_decode($fire);
if($data->success==true){
    echo"success";
}else{
    echo"please fill recaptcha";
}


}else
{
    echo "error recaptch not found";
}

?>