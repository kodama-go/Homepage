<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "rajang.lao.shanlung@gmail.com";
  $subject = "お問い合わせ";
  $message = "お名前: " . $_POST["お名前"] . "\r\n"
           . "電話番号: " . $_POST["電話番号"] . "\r\n"
           . "メールアドレス: " . $_POST["メールアドレス"] . "\r\n"
           . "お問い合わせ詳細: " . $_POST["お問い合わせ詳細"];
  $headers = "From: " . $_POST["メールアドレス"];

  mail($to, $subject, $message, $headers);
  echo "メールを送信しました。";
}
?>