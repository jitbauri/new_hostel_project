<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Hostel Management System</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>

<body onscroll="changecolor()">

  <script type="text/javascript">
    function rtohome() {
      window.location.href = "index.php";
    }
    function change() {
      window.location.href = "registration.php";
    }
    function change1(){
      window.location.href = "gallery.php";
    }
    window.onscroll = function () {
      var top = window.scrollY;
      if (top >= 50) {
        document.getElementById("Nav1").style.backgroundColor = "white";
        document.getElementById("linkcolor").style.color = "black";
        document.getElementById("linkcolor1").style.color = "black";
        document.getElementById("linkcolor2").style.color = "black";
        document.getElementById("linkcolor3").style.color = "black";
        document.getElementById("linkcolor4").style.color = "black";
      }
      else {
        document.getElementById("Nav1").style.backgroundColor = "transparent";
        document.getElementById("linkcolor").style.color = "white";
        document.getElementById("linkcolor1").style.color = "white";
        document.getElementById("linkcolor2").style.color = "white";
        document.getElementById("linkcolor3").style.color = "white";
        document.getElementById("linkcolor4").style.color = "white";
      }
    }

  </script>
  <div class="Nav" id="Nav1">
    <div class="NavbarContainer">
      <img src="images/logo.png" alt="" class="NavLogo" onclick="rtohome()">
      <div class="MobileIcon">
        <i class="fa fa-bars"></i>
      </div>
      <ul class="NavMenu ">
        <li class="NavItem"><a id="linkcolor"  class="NavLinks" href="#about">About</a></li>
        <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">Pricing</a></li>
        <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="#contact">Contact Us</a></li>
        <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
        <li class="NavItem"><a id="linkcolor4" class="NavLinks" href="https://tdbcollege.in/student_login.aspx">College Login</a></li>
      </ul>
      <div class="NavBtn">
        <button type="button" name="button" class="NavBtnLink" onclick="change()">Signup</button>
      </div>

    </div>
  </div>

  <!-- Hero section -->
  <div class="HeroContainer">
    <div class="HeroBg">
      <video muted autoplay="autoplay" loop class="VideoBg">
        <source src="videos/hostel video.mp4" type="video/mp4">
      </video>
    </div>
    <div class="HeroContent">
      <h1 class="HeroH1">Hostel Management System</h1>
      <p class="HeroP">TDB BOYS' HOSTEL</p>
      <div class="HeroBtnWrapper">
        <button type="button" name="button" class="NavBtnLink" onclick="change()">Get Started</button>
      </div>
    </div>

  </div>



  <!-- infosection1 -->

  <div class="InfoContainer" id="about">
    <div class="InfoWrapper">

      <div class="InfoRow">
        <div class="Column1">
          <div class="TextWrapper">
            <p class="TopLine">World class facilities</p>
            <h1 class="Heading">Best facilities with less prices</h1>
            <p class="Subtitle">Cherish your hostel life with our hostels</p>
            <div class="BtnWrap">
              <button type="button" name="button" class="NavBtnLink" onclick="change1()">Get Started</button>
            </div>
          </div>
        </div>

        <div class="Column2">
          <div class="ImgWrap">
            <img class="Img" src="images/infosectionpic1.svg" alt="">
          </div>
        </div>
      </div>
    </div>

  </div>




  <!-- infosection2 -->

  <div class="InfoContainer">
    <div class="InfoWrapper">

      <div class="InfoRow" style="grid-template-areas:'col1 col2' ;">
        <div class="Column1">
          <div class="TextWrapper">
            <p class="TopLine">Best food</p>
            <h1 class="Heading">Unlimited variety of dishes</h1>
            <p class="Subtitle">Taste dishes across the world </p>
            <div class="BtnWrap">
              <button type="button" name="button" class="NavBtnLink">Get Started</button>
            </div>
          </div>
        </div>

        <div class="Column2">
          <div class="ImgWrap">
            <img class="Img" src="images/infosectionpic2.svg" alt="">
          </div>
        </div>


      </div>
    </div>

  </div>

  <!-- footer -->
  <div class="FooterContainer" id="contact">
    <div class="FooterWrap">
      <div class="FooterLinksContainer">
        <div class="FooterLinksWrapper">
          <div class="FooterLinkItems">
            <h1 class="FooterLinkTitle">About Us</h1>
            <a href="aboutme.php" class="FooterLink">Developers</a>
            <a href="#about" class="FooterLink">Services</a>
            <a href="pricing.php" class="FooterLink">Pricing</a>
            <a href="admin/adminlogin.php" class="FooterLink">Admin</a>
          </div>
        </div>
      </div>

      <div class="SocialMedia">
        <div class="SocialMediaWrap">
          <a href="#" class="SocialLogo">HMS</a>
          <p class="WebsiteRights">TDB BOYS' HOSTEL © 2025</p>
          <div class="SocialIcons">
            <a href="https://www.facebook.com/tdbcollege.in" class="SocialIconLink"><i class="fab fa-facebook-f"></i></a>
               
            <a href="https://tdbcollege.in/student_login.aspx"
              class="SocialIconLink"><i class="fa fa-user" aria-hidden="true"></i></a>
            <a href="https://tdbcollege.ac.in/#" class="SocialIconLink"> <i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
             
            <a href="https://www.youtube.com/channel/UC_hRiLOhocQ0o1_hUMEkUAQ/videos" class="SocialIconLink"><i class="fab fa-youtube"></i></a>
              
          </div>
        </div>

      </div>

    </div>
  </div>


</body>

</html>