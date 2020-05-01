<?php

$cc = base_convert('01012355678', 10, 36);
$key = md5('my secret key');
$iv = '12345678';

$cipher = mcrypt_module_open(MCRYPT_BLOWFISH,'','cbc','');

mcrypt_generic_init($cipher, $key, $iv);
$encrypted = mcrypt_generic($cipher,$cc);
mcrypt_generic_deinit($cipher);

$readablecypher = bin2hex($encrypted);

mcrypt_generic_init($cipher, $key, $iv);
$decrypted = mdecrypt_generic($cipher,hex2bin($readablecypher));
mcrypt_generic_deinit($cipher);

echo "encrypted : ". $readablecypher;
echo "<br>";
echo "decrypted : 0".base_convert($decrypted, 36, 10);
?>