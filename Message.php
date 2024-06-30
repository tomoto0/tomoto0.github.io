<?php
// メールの送信先
$to = "T.Masuda@sussex.ac.uk";

// フォームのデータを受け取る
$name = $_POST["Name"];
$email = $_POST["Email"];
$subject = $_POST["Subject"];
$message = $_POST["Message"];

// メールのヘッダーを作成
$headers = "From: $email" . "\r\n" .
"Reply-To: $email" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

// メールの本文を作成
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Subject: $subject\n";
$body .= "Message: $message\n";

// メールを送信
mail($to, $subject, $body, $headers);
?>
