<?php

$sign=['おひつじ座' => '牡羊座' ,'おうし座' => '牡牛座','ふたご座' => '双子座','かに座' => '蟹座','しし座' => '獅子座','おとめ座' => '乙女座','てんびん座' => '天秤座','さそり座' => '蠍座','いて座' =>'射手座','やぎ座' => '山羊座','みずがめ座' => '水瓶座','うお座'=> '魚座'];

$hobby=['音楽ライブ','カラオケ','楽器演奏','映画鑑賞','アニメ','天体観測','筋トレ','ヨガ','温泉巡り','カフェ巡り','サーフィン','ゴルフ' ,'登山' ,'キャンプ' ,'釣り' ,'テレビゲーム' ,'スマホゲーム' ,'DIY' ,'料理' ,'プラモデル' ,'ガーデニング（園芸）' ,'食べ歩き' ,'カメラ' ,'ドライブ' ,'バイク' ,'デッサン' ,'漫画' ,'ファッション'];

$address_list = ['北海道','青森県','岩手県','宮城県','秋田県','山形県','福島県',
'茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県',
'新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県',
'静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県',
'奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県',
'徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県',
'熊本県','大分県','宮崎県','鹿児島県','沖縄県'
];
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
<h1>会員登録</h1>
<article>
<h2>下記の項目を入力してください。</h2>
    <section>
    <h3>&nbsp;</h3>
    <form action="post.php" method="post">
        <dl>
            <dt>名前:</dt>
            <dd><input type="text" name="account[name]" placeholder="ここに入力して下さい">
            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i></dd>

            <dt>生年月日:</dt>
            <dd><input type="date" min="1995-01-01" max="2003-01-01" value="2000-01-01" name="account[birthday]"><i class="fas fa-birthday-cake fa-lg fa-fw"></i></dd>

            <dt>メールアドレス:</dt>
            <dd><input type="text" name="account[mail_address]" placeholder="ここに入力して下さい"><i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i></dd>

            <dt>血液型:</dt>
            <dd>
            <select name="account[blood]">
            <option value="" hidden><span>ここに入力して下さい</span></option>
            <option value="A">A型</option>
            <option value="B">B型</option>
            <option value="O">O型</option>
            <option value="AB">AB型</option>
            </select><i class="fas fa-heartbeat fa-lg fa-fw"></i></dd>

            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript" src="jquery.zip2addr.js"></script>
            <dt>郵便番号:</dt>
            <dd><input type="text" name="account[postal_cord]" id="post" maxlength="3" size="3" placeholder="ここに">-<i class="fas fa-mail-bulk fa-lg fa-fw"></i>
            <input type="text" name="account[postal_cord2]" id="post2" maxlength="4" size="9" placeholder="入力して下さい"></dd>

            <dt>住所:</dt>

            <dd>
            <i class="fas fa-map-marker-alt fa-lg fa-fw"></i>
            <select name="account[pref]" id="address">
            <?php foreach($address_list as $address_list_key): {?>
            <option><?php echo $address_list_key ?></option>
            <?php } endforeach ?>
            </select>&nbsp;
            <input type="text" name="account[pref2]" id="address2"size="30"></dd>
            <script>
            $('#post').zip2addr({
                zip1:'#post',
                zip2:'#post2',
                pref:'#address',
                addr:'#address2'
            })
            </script>

            <dt>星座:</dt>
            <dd>
            <i class="fas fa-star fa-lg fa-fw"></i>
            <select name="account[horoscope]">
            <?php foreach($sign as $sign_key => $sign_val): ?>
                <option value="<?php echo $sign_val ?>"><?php echo $sign_key ?></option>
            <?php endforeach;?>
            </select></dd>
            
            <dt>趣味:</dt>
            <dd>
            <input type="hidden" name="account[hobby]" value="無趣味"><?php foreach($hobby as $hobby_key): ?><label class="ECM_CheckboxInput">
            <input class="ECM_CheckboxInput-Input" type="checkbox" name="account[hobby]" id ="<?php echo $hobby_key?>" value="<?php echo $hobby_key ?>"><span class="ECM_CheckboxInput-DummyInput"></span><span class="ECM_CheckboxInput-LabelText"><label for="<?php echo $hobby_key?>"><?php echo $hobby_key ?></label></span></label>
            <?php  endforeach;?>
            </dd>
        </dl>

        <p>
        <label class="ECM_CheckboxInput"><input class="ECM_CheckboxInput-Input" type="checkbox" required="required"><span class="ECM_CheckboxInput-DummyInput"></span><span class="ECM_CheckboxInput-LabelText">利用規約およびプライバシーポリシーに同意します。</span></label></p>
        
        <p><button class="button1">
        <i class="fas fa-envelope"></i>
        <input type="submit" value="送信する">
        </button></p>
        
    </form>
    </section>
</article>
</div>


</body>
</html>


