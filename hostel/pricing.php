<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pricing</title>
    <link rel="stylesheet" href="css\pricing.css">

    <script type="text/javascript">
      function change(){
        window.location.href ="registration.html";
      }
      function rtohome(){
        window.location.href ="index.html";
      }
    </script>
  </head>

  <body>
    <div class="Nav" id="Nav1">
      <div class="NavbarContainer">
        <img src="images/logo.png" alt="" class="NavLogo" onclick="rtohome()">
        <div class="MobileIcon">
        <i class="fa fa-bars"></i>
        </div>
        <ul class="NavMenu ">
          <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="index.html#about">About</a></li>
          <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.html">Pricing</a></li>
          <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="index.html">Contact Us</a></li>
          <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.html">Sign in</a></li>
        </ul>
        <div class="NavBtn">
          <button type="button" name="button" class="NavBtnLink" onclick="change()">Signup</button>
        </div>

      </div>
    </div>



    <div class="pricingcontainer">
      <div class="pricingwrapper">
        <div class="columns">
  <ul class="price">
    <li class="header">BOYS HOSTEL</li>
    <div class="imagewrapper">
    <img style="height:150px; width:250px;" src="images/hostel.jpeg" alt="">
    </div>

    <li class="grey">4500/ year</li>
    <li>Best Internet</li>
    <li>Well Room</li>
    <li>Best Mess</li>
    <li>World class facilities</li>
    <li class="grey"><a href="signin.html" class="button">Select</a></li>
  </ul>
</div>

      </div>
    </div>

  </body>
</html>