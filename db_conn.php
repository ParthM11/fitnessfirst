<?php  
	// session_start();
	$dbHost     = "localhost";
	$dbUsername = "root";//restopos2022;
	$dbPassword = "";//parth6969%;
	$dbName     = "app";


$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	echo "Connection Failed!";
//	exit();
}

function pr($arr)
{
	echo '<pre>';
	print_r($arr);
}

function prx($arr)
{

	echo '<pre>';
	print_r($arr);
}

function getSafeValue($conn,$str)
{
	if($str!='')
	{
		$str = trim($str);
		return strip_tags(mysqli_real_escape_string($conn,$str));
	}
}

function encrypt($value='')
{

$simple_string = "$value";

// Store the cipher method
$ciphering = "AES-128-CTR";

// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';

// Store the encryption key
$encryption_key = "fitness";

// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($simple_string, $ciphering,
			$encryption_key, $options, $encryption_iv);

 return $encryption;
}

function decrypt($encryption='')
{

// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';

$options = 0;

$ciphering = "AES-128-CTR";

// Store the decryption key
$decryption_key = "fitness";

// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryption, $ciphering,
		$decryption_key, $options, $decryption_iv);

// Display the decrypted string
return $decryption;
}

