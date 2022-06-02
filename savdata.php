<?php
              
if(isset($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['message']))
{
$data=PHP_EOL . filter_var($_POST['fname'], FILTER_SANITIZE_STRING) . " : " . filter_var($_POST['lname'], FILTER_SANITIZE_STRING) . " : " . filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) . " : " . filter_var($_POST['message'], FILTER_SANITIZE_STRING); 
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>

<html>
    <head>
         <title>Contact</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/styles/default1.css">
        <link rel="stylesheet" href="/styles/savdata.css">
        <script src="cform.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&family=Square+Peg&display=swap" rel="stylesheet">
        <img src="/images/head6.jpg" class="headimg">
   <div class="topnav" id="myTopnav">
        <nav>
            <div class="links">
            <a class="mainlink" href="/index.html">James Mountford</a>
            <a class="toplink" href="/about.html">About</a>
            <a class="toplink" href="/teaching.html">Teaching</a>
            <a class="toplink" href="/performances.html">Performances</a>
            <a class="toplink" href="/photos.html">Photos</a>
            <a class="toplink" href="/contact.html">Contact</a>
            <a class="toplink" href="/blog.html">Blog</a>
            </div>
            <div class="timg" id="myTimg">
                <a href="https://www.facebook.com/james.mountford.507/" target="_blank"><img src="/images/f_logo_RGB-White_58.png"></a>
                <a href="https://www.instagram.com/jmm_saxophone/" target="_blank"><img src="/images/icon-ffffff-logo-instagram-bw-symbol-number-text-stencil-transparent-png-88524.png"></a>
                <a href="https://www.youtube.com/channel/UCZDm9Aap-Yw4g-_Us37M-vg" target="_blank"><img src="/images/395070.png" class="yt"></a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="navDisplay()">
                <i class="fa fa-bars"></i></a>
            <script src="/scripts/index.js"></script>
            </nav>
        </div>
    </head>
    <header>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        <body>
            <p>Thank you for reaching out! I'll be in touch soon.</p>
        </body>
    <footer>
        <p>Copyright James Mountford, 2022.</p>
        <div class="fimg">
            <a href="https://www.facebook.com/james.mountford.507/" target="_blank"><img src="/images/f_logo_RGB-Black_1024.png"></a>
            <a href="https://www.instagram.com/jmm_saxophone/" target="_blank"><img src="/images/glyph-logo_May2016.png"></a>
            <a href="https://www.youtube.com/channel/UCZDm9Aap-Yw4g-_Us37M-vg" target="_blank"><img src="/images/yt_icon_mono_light.png"></a>
        </div>
    </footer>
</html>