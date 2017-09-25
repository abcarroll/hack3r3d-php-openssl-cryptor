<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';

use Crypto\Cryptor;

$data = 'Good things come in small packages.';
$key = '9901:io=[<>602vV03&Whb>9J&M~Oq';

$encrypted = Cryptor::Encrypt($data, $key);

echo "'$data' (" . strlen($data) . ") => '$encrypted'\n\n";

$decrypted = Cryptor::Decrypt($encrypted, $key);

echo "'$encrypted' => '$decrypted' (" . strlen($decrypted) . ")\n";
