<?php

$url = 'https://toph.co/login';

$data = [
    'handle'=> 'ajudge.bd',
    'password' => 'aj199273'
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true,);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');

$loginResponse = curl_exec($ch);

curl_close($ch);

//echo $loginResponse;