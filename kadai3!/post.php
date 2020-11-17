<?php

// $name = $_POST["name"];
// $birthday = $_POST["birthday"];
// $mail_address = $_POST["mail_address"];
// $blood = $_POST["blood"];
// $postal_cord = $_POST["postal_cord"];
// $postal_cord2 = $_POST["postal_cord2"];
// $pref = $_POST["pref"];
// $pref2 = $_POST["pref2"];
// $horoscope = $_POST["horoscope"];
// $hobby = $_POST["hobby"];

$account = $_POST['account'];
$profile =
['名前' => 'name','生年月日' => 'birthday','メールアドレス' => 'mail_address','血液型'=>'blood','郵便番号'=>'postal_cord','郵便番号','postal_cord2','住所'=>'pref','住所'=>'pref2','星座'=>'horoscope','趣味'=>'hobby']

 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>nͨyͣoͬmͥnͨyͣoͬmͥ ̫ ͡chͧicͫkͣe͠n</title>
<link href="layout.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400&display=swap" rel="stylesheet">
</head>
<body>

<div id="wrapper">
<h1>登録内容</h1>

<article>
<h2>入力情報確認</h2>
    <section>
    <h3>内容を確認してください</h3>
        <dl>
        <?php foreach($profile as $profile_key => $profile_val):?>
        <dt><?php echo $profile_key ?>:</dt>
        <dd><?php echo ($account['$profile_val']) ?></dd>
        <?php endforeach;?>
        <?php var_dump($account); ?>

        </dl>
        
        <form action="" method="post">
        <p>
        <button class="button1">
        <i class="fas fa-envelope"></i>
        <input type="submit" value="登録する">
        </p>
        </form>
    </section>

</article>
</div>

</table>
</body>
</html>


