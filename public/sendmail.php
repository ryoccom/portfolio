<?php
session_start();

if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  die('This access is not valid.');
}

if ($_POST['token'] !== $_SESSION['csrf_hash']) {
  echo json_encode([
    'status' => 'Error',
    'message' => '再読み込み後に送信してください。'
  ]);
  return;
}

// --------------------------
// 個別設定項目（３つ）
// --------------------------
// 送信先メールアドレス
$to = 'ryo.samantha@gmail.com';
// メールタイトル
$subject = 'まさかのHPよりお問い合わせ';
// adminメールタイトル
$adminsubject = 'ホームページより問い合わせ';
// ドメイン（リファラチェックと送信元メールアドレスに利用）
$domain = 'ryoccom.com';

// 入力項目
$name = '';   // 名前
$mail = '';   // メールアドレス
$text = '';   // テキスト内容

// 画面からのデータを取得
if (isset($_POST['name'])) {
  $name = $_POST['name'];
}
if (isset($_POST['mail'])) {
  $mail = $_POST['mail'];
}
if (isset($_POST['text'])) {
  $text = $_POST['text'];
}

// 必須チェック
if ($name == '' || $mail == '' || $text == '') {
  echo json_encode([
    'status' => 'Error',
    'message' => '<p id="errmsg">【エラー】名前・メールアドレス・内容は必須項目です。</p>'
  ]);
  return;
}

// メールアドレスチェック
if (!preg_match("/^[\.!#%&\-_0-9a-zA-Z\?\/\+]+\@[!#%&\-_0-9a-z]+(\.[!#%&\-_0-9a-z]+)+$/", $mail) || count(explode('@', $mail)) != 2) {
  echo json_encode([
    'status' => 'Error',
    'message' => '<p id="errmsg">【エラー】メールアドレスの形式が正しくありません。</p>'
  ]);
  return;
}

// メールデータ作成
$message = $name . '様' . "\r\n\r\n";
$message .= 'この度はお問い合わせいただきありがとうございました。' . "\r\n";
$message .= 'お問合せ内容を確認し、近日中にご連絡致しますので今しばらくお待ちくださいませ。' . "\r\n";
$message .= 'お問い合わせ内容は以下になります。' . "\r\n";
$message .= "\r\n――――――――――――――――――――――――――――――\r\n\r\n";
$message .= '【 名前 】' . $name . "\r\n";
$message .= '【 メールアドレス 】' . $mail . "\r\n";
$message .= $text . "\r\n";
$message .= "\r\n――――――――――――――――――――――――――――――\r\n\r\n";
$adminmessage = 'お問い合わせ内容は以下になります。' . "\r\n";
$adminmessage .= "\r\n――――――――――――――――――――――――――――――\r\n\r\n";
$adminmessage .= '【 名前 】' . $name . "\r\n";
$adminmessage .= '【 メールアドレス 】' . $mail . "\r\n";
$adminmessage .= $text . "\r\n";
$adminmessage .= "\r\n――――――――――――――――――――――――――――――\r\n\r\n";
$header = 'From: ' . mb_encode_mimeheader('Ryoccom') . "<no-reply@${domain}>" . "\r\n";
$header .= 'Reply-To: no-reply@' . $domain . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion();

// メール送信
$to_admin_mail = mail($to, $adminsubject, $adminmessage, $header);
$to_user_mail = mail($mail, $subject, $message, $header);

// 送信結果の判定
if (!$to_admin_mail || !$to_user_mail) {
  echo json_encode([
    'status' => 'Error',
    'message' => '<p id="errmsg">【エラー】メール送信に失敗しました。</p>'
  ]);
  return;
}

echo json_encode([
  'status' => 'Success',
  'message' => '<p class="success">入力ありがとうございました。3日以内にご連絡いたします。</p>'
]);

session_destroy();

// HTMLエスケープ処理
function hsc_utf8($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
