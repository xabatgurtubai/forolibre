<?php
$usuario = "";
$password = "";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.forocoches.com/foro/login.php?do=login');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'vb_login_username='.$usuario.'jdt&cookieuser=1&vb_login_password='.$password.'&s=&securitytoken=guest&do=login&vb_login_md5password=&vb_login_md5password_utf=');
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');

curl_exec($ch);
curl_close($ch);

?>
