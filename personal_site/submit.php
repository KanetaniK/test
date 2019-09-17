<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>春草の夢 -chuncao meng-</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@chuncaomeng">
        <meta property="og:url" content="http://chuncao.starfree.jp/">
        <meta property="og:title" content="春草の夢 -chuncao meng-">
        <meta property="og:description" content="同人サークル『春草の夢』/白南風桃梨の公式ページです。">
        <meta property="og:image" content="http://chuncao.starfree.jp/capcha.PNG">
        
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="favicon.png" type="image/png">
        <link rel="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    </head>
    <body>
        <nav>
            <p class="sidebtn">
                close
            </p>
            <ul>
                <li><a href="index.html#works">WORKS</a></li>
                <li><a href="index.html#sojin">千国捜神記</a></li>
                <li><a href="index.html#nanasi">単発キャラ</a></li>
                <li><a href="index.html#tama">百村千代のたま散歩</a></li>
                <li><a href="index.html#fanart">ファンアート</a></li>
                <li><a href="index.html#gallery">GALLERY</a></li>
                <li><a href="index.html#about">ABOUT US</a></li>
                <li><a href="index.html#event">EVENT LOGS</a></li>
            </ul>
        </nav>
        <header>
            <div class="container">
                <div class="logo">
                    <a href="index.html"><img src="logo_s.png"></a>
                </div>
                <p class="sidebtn">
                    <i class="fas fa-bars"></i>
                </p>
            </div>
            <div class="sns">
                    <ul>
                        <li><a href="https://twitter.com/chuncaomeng" target=”_blank”><img src="Twitter_Social_Icon_Circle_Color.png" alt="Twitter"></a></li>
                        <li><a href="https://www.pixiv.net/member.php?id=4818341" target=”_blank”><img src="logo_icon_r.png" alt="pixiv"></a></li>
                    </ul>
                </div>
        </header>
        <main>
            <div class="mailform">
                <form action="index.html">
                    <?php
                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\Exception;

                        require './phpmailer/src/Exception.php';
                        require './phpmailer/src/PHPMailer.php';
                        require './phpmailer/src/SMTP.php';

                        $username = $_POST['username'];
                        $mailadd = $_POST['mailadd'];
                        $yoken = $_POST['yoken'];
                        $mailtext = $_POST['mailtext'];

                        $to = "foxtouri@gmail.com";      //宛先
                        $subject = "【春草の夢】連絡です";         //件名
                        $body = "名前：".$username."\r\nメアド：".$mailadd."\r\n用件：".$yoken."\r\n本文：".$mailtext;      //本文

                        $mail = new PHPMailer();
                        $mail->CharSet = "iso-2022-jp";
                        $mail->Encoding = "7bit";
                        $mail->IsSMTP();               //「SMTPサーバーを使うよ」設定
                        $mail->SMTPAuth = TRUE;        //「SMTP認証を使うよ」設定
                        $mail->SMTPSecure = 'tls';
                        $mail->Host = 'smtp.gmail.com:587';   // SMTPサーバーアドレス:ポート番号
                        $mail->Username = 'foxtouri@gmail.com';      // SMTP認証用のユーザーID
                        $mail->Password = 'xxijeqwydsokylvd';  // SMTP認証用のパスワード

                        $mail->AddAddress($to); 
                        $mail->From = $from;
                        $mail->FromName = mb_encode_mimeheader(mb_convert_encoding($fromname,"JIS","UTF-8"));
                        $mail->Subject = mb_encode_mimeheader(mb_convert_encoding($subject,"JIS","UTF-8"));
                        $mail->Body = mb_convert_encoding($body,"JIS","UTF-8");

                        if (!$mail->send()) {
                            echo "Mailer Error: " . $mail->ErrorInfo;
                        } else {
                            echo "<p>送信完了しました！</p>";
                        }
                    ?>
                    <input type="submit" value="完了してトップに戻る" class="btn">
                </form>
            </div>
        </main>
        <footer>
            <div class="container">
                <div class="biglogo">
                    <img src="logo.png">
                    <p>(c)2013-2019 chuncao meng</p>
                </div>
                <div class="sitemap">
                    <ul>
                        <li><a href="index.html#works">WORKS</a></li>
                        <li><a href="index.html#sojin">千国捜神記</a></li>
                        <li><a href="index.html#nanasi">単発キャラ</a></li>
                        <li><a href="index.html#tama">百村千代のたま散歩</a></li>
                        <li><a href="index.html#fanart">ファンアート</a></li>
                        <li><a href="index.html#gallery">GALLERY</a></li>
                        <li><a href="index.html#about">ABOUT US</a></li>
                        <li><a href="index.html#event">EVENT LOGS</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <div class="contact">
            <ul>
                <li><a href="http://twitter.com/share?url=http://chuncao.starfree.jp/" id="share" target="_blank"><img src="Twitter_Social_Icon_Circle_Color.png" alt="Twitter"><p>ツイート<br>でシェア</p></a></li>
                <li><a href="mailform.html"><i class="far fa-envelope"></i></a></li>
                <li><a href="loginform.html" id="login">会員さま<br>ログイン</a></li>
            </ul>
        </div>
        
<!--        フォント読み込み開始-->
        <script>
          (function(d) {
            var config = {
              kitId: 'ydc3fqj',
              scriptTimeout: 3000,
              async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
          })(document);
        </script>
<!--        フォント読み込み終了-->
        
<!--        自動スクロール-->
        <script>
            $(function(){
              $('a[href^="#"]').click(function(){
                var speed = 700;
                var href= $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                var position = target.offset().top;
                $("html, body").animate({scrollTop:position}, speed, "swing");
                return false;
              });
            });
        </script>
<!--        自動スクロール-->
        
<!--        サイドメニュー開閉-->
        <script>
		$(function(){
            $('.sidebtn').click(function(){
                $('nav').toggleClass('open');
            });
        })
        $(function(){
            $('nav a').click(function(){
                $('nav').toggleClass('open');
            });
        })
        </script>
<!--        サイドメニュー開閉-->
    </body>
</html>