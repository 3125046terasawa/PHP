<!doctype html">
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会員登録</title>

</head>
<body>
<?php
    $nickname=$_POST['nickname'];
    $email=$_POST['email'];
    $goiken=$_POST['goiken'];
   
    $nickname= htmlspecialchars($nickname);
    $email= htmlspecialchars($email);
    $goiken= htmlspecialchars($goiken);
 
    if($nickname=='') {
        print 'ニックネームが入力されていません。<br>';
    } else {
        print 'ようこそ';
        print $nickname;
        print '様'; print '<br>';
    }
    if($email=='') {
        print 'メールアドレスが入力されていません。<br>';
    } else {
        print 'メールアドレス:';
        print $email;
        print '<br>';
    }
    if($goiken=='') {
        print 'ご意見が入力されていません。<br>';
    } else {
        print 'ご意見[';
        print $goiken;
        print '] <br>';
    }
    if($nickname==''||$email==''||$goiken=='') {
        print'<form>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
    } else {
        print'<form method="post" action="thanks.php">';
        print'<input name="nickname" type="hidden" value="'.$nickname.'">';
        print'<input name="email" type="hidden" value="'.$email.'">';
        print'<input name="goiken" type="hidden" value="'.$goiken.'">';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'<input type="submit" value="OK">';
        print'</form>';
    }    
?>
</body>
</html>
</head>
<body>
    <?php
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $address=$_POST['address'];
   
    $name= htmlspecialchars($name);
    $pass= htmlspecialchars($pass);
    $email= htmlspecialchars($email);
    $address= htmlspecialchars($address);

    print '下記の内容で登録しました。<br>';
    print '氏名：';
    print $name;
    print 'パスワード：';
    print $pass
    print 'メールアドレス：’；
    print $email;
    print '住所：';
    print $address;
    print 'にメールを送りましたのでご確認ください。';
  
?>
</body>
</html>