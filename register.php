
<?php include 'config.php'; ?>
<?php
$db=new mysqli("$dbhost","$dbuser","$dbpass");
$db->select_db("$dbname");
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>Liquid Beauty</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="css/vendor.css">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="css/utility.css">

    <!--====== App ======-->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="costum-css/costum.css">
 </head>



<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
</head>

<body lang=EN-US style='tab-interval:.5in'>

<div class=WordSection1>

<div align=center>
<!-- register form section start -->
<form action="" method="post" name="register">
<table class=MsoNormalTable border=0 cellpadding=0 style='mso-cellspacing:1.5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'><a href="login.php">Login</a></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><b><span style='font-size:8.5pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>Registration : </span></b></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:1'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>UserName : </span></b></p>
  </td>
  <u1:p></u1:p>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" NAME="username"></span></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:2'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Email : </span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" NAME="email"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:3'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>First Name : </span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" NAME="fname"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:4'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Last Name : </span></b><o:p></o:p></p>
  </td>
  <u1:p></u1:p>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" NAME="lname"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:5'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Adress : </span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="text" NAME="country"></span><o:p></o:p></p>
  </td>
 </tr>
 <u1:p></u1:p>
 <!-- <tr style='mso-yfti-irow:6'>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><b><span
  style='font-size:8.5pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'>Password</span></b><o:p></o:p></p>
  </td>
  <td style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman"'><INPUT TYPE="password" NAME="password"></span><o:p></o:p></p>
  </td>
 </tr> -->
 <u1:p></u1:p>
 <u1:p></u1:p>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes'>
  <td colspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman"'><INPUT TYPE="submit" VALUE="Register" NAME="register" Onclick="return done(this.form);" /></span></p>
  </td>
 </tr>
 <u1:p></u1:p>
</table>
</form> <!-- register form section end -->
</div>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto'><u1:p>&nbsp;</u1:p></p>

</div>

</body>

</html>
<!-- code :p -->
<?php

$str=rand();
$result = md5($str);
$password = $result;


  if(isset($_POST['register']))
  {
   $name=$_POST['name'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $username=$_POST['username'];
   $country=$_POST['country'];
// Query
   if ($db->query("INSERT INTO users
    (username,email,name,lname,country,password)
    VALUES ('$username','$email','$name','$lname','$country','$password')"))
    print "<script>alert('Account created! check your email for verification.');</script>";
    print "<script>document.write($password);</script>";
    echo $password; 
// 
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v3/sandbox742045923f1743df92c7c12c00baf699.mailgun.org/messages');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$post = array(
    'from' => "Liquid Beauty",
    'to' => $email,
    'subject' => "Hello! Welcome to liquid beauty. ",
    'text' => "Hello! you registred to Liquid beauty shopping website your temporary password is", $result,
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_USERPWD, 'api' . ':' . '5ae619a82822e1579756bfee22002038-38029a9d-eacda5b2');

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);


  }


 ?>


        <!--====== Main Footer ======-->
        <footer>
            <div class="outer-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">

                                <span class="outer-footer__content-title">Contact Us : </span>
                                <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                    <span>Solicode, Tangier - Morocco</span></div>
                                <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                    <span>(+0) 000 000 000</span></div>
                                <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                    <span>github.com/tba-adnan</span></div>
                                <div class="outer-footer__social">
                                    <ul>
                                        <li>

                                            <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li>

                                            <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li>

                                            <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li>

                                            <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li>

                                            <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">

                                        <span class="outer-footer__content-title">Information : </span>
                                        <div class="outer-footer__list-wrap">
                                            <ul>
                                                <li>

                                                    <a href="register.php">register</a></li>
                                                <li>

                                                    <a href="login.php">login</a></li>
                                                <li>

                                                    <a href="index.html#">Go back</a></li>
                                                <li>

                                                    
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="outer-footer__content">

                                <span class="outer-footer__content-title">Join our Newsletter</span>
                                <form class="newsletter">
                                    <div class="u-s-m-b-15">
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="male" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="male">Male</label></div>
                                        </div>
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="female" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="female">Female</label></div>
                                        </div>
                                    </div>
                                    <div class="newsletter__group">

                                        <label for="newsletter"></label>

                                        <input class="input-text input-text--only-white" type="text" id="newsletter" placeholder="Enter your Email">

                                        <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button></div>

                                    <span class="newsletter__text">Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="lower-footer__content">
                                <div class="lower-footer__copyright">

                                    <span>Copyright © 2022 - by Cutie & ADN</span>


                                    <span>All Right Reserved</span></div>
                                <div class="lower-footer__payment">
                                    <ul>
                                        <li><i class="fab fa-cc-stripe"></i></li>
                                        <li><i class="fab fa-cc-paypal"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><i class="fab fa-cc-discover"></i></li>
                                        <li><i class="fab fa-cc-amex"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>