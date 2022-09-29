<!DOCTYPE html>
 <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>

 <body>
    <h1>お問い合わせ内容確認</h1> 
    <div class="confirm">お問い合わせ内容はこちらで宜しいでしょうか？<br>
         宜しければ「送信する」ボタンを押して下さい。<br><br>

        <div class="name">
            <label>名前</label>
            <br>
            <?php
                echo $_POST['name'];
            ?>
            <br>
        </div>

        <div class="mail">
            <label>メールアドレス</label>
            <br>
            <?php
                echo $_POST['mail'];
            ?>
            <br>
        </div>

        <div class="age">
            <label>年齢</label>
            <br>
            <?php
                echo $_POST['age']."歳";
            ?>
        </div>

        <div class="comments">
            <label>コメント</label>
            <br>
            <?php
                echo $_POST['comments'];
            ?>
        </div><br>
        
        <div class="rewrite">
            <form action="index.html">
                <input type="submit" value="戻って編集する">
            </form>
        </div>

        <div class="submit">
            <form action="insert.php" method="post">
                <input type="submit" value="登録する">
                <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
                <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
                <input type="hidden" value="<?php echo $_POST['comments']?>" name="comments">
            </form>
        </div>
    </div>
 </body>
 </html>