<?php
include("headerView.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Responsive Food/Resturant Website Design Tutorial</title>
    <link rel="stylesheet" href="fonts/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/google-fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
</head>
<body>
  <style>
     #contact {
  min-height: 100vh;
  width: 100vw;
  background: url(../images/back.png) no-repeat;
  background-size: cover;
  background-position: center;
}

#contact .heading h1 {
  font-size: 4rem;
  color: #000;
  padding-top: 7rem;
  margin-bottom: 2rem;
}

#contact .heading h1 span {
  color: #FFF200;
}

#contact form {
  background: #fff;
  padding-top: 2rem;
  margin: 1rem 2rem;
  border-radius: 1rem;
  -webkit-box-shadow: 0 0 2rem #333;
          box-shadow: 0 0 2rem #333;
}

#contact form .inputBox {
  position: relative;
  text-align: center;
}

#contact form .inputBox input, #contact form .inputBox textarea {
  outline: none;
  border: .2rem solid #333;
  border-radius: .2rem;
  margin: 2rem 0;
  padding: 0 1rem;
  background: none;
  height: 4rem;
  width: 90%;
  font-size: 2rem;
}

#contact form .inputBox input:focus ~ h3,
#contact form .inputBox input:valid ~ h3, #contact form .inputBox textarea:focus ~ h3,
#contact form .inputBox textarea:valid ~ h3 {
  font-size: 1.6rem;
  left: 6%;
  top: -.5rem;
  color: #ff3300;
}

#contact form .inputBox textarea {
  padding: 1rem;
  resize: none;
  height: 20rem;
}

#contact form .inputBox h3 {
  position: absolute;
  top: 3rem;
  left: 7%;
}

#contact form input[type="submit"] {
  outline: none;
  border: none;
  border-radius: 5rem;
  color: #333;
  font-size: 1.6rem;
  font-weight: bold;
  text-transform: capitalize;
  letter-spacing: .2rem;
  cursor: pointer;
  position: relative;
  z-index: 1;
  overflow: hidden;
  height: 4rem;
  width: 12rem;
  margin-bottom: 2rem;
  margin-left: 4%;
  background: #333;
  color: #fff;
}

#contact form input[type="submit"]::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  background: #FFF200;
  height: 100%;
  width: 0%;
  -webkit-transition: .2s;
  transition: .2s;
  z-index: -1;
}

#contact form input[type="submit"]:hover::before {
  width: 100%;
}

#contact form input[type="submit"]:hover {
  color: #333;
  background: #FFF200;
}

#footer {
  background: #333;
}

#footer h1 {
  font-size: 2rem;
  margin: 0;
  padding: 2rem 0;
  text-align: center;
  color: #fff;
}

#footer h1 span {
  color: #FFF200;
}

#footer .brand {
  text-align: center;
  margin-top: 2rem;
}

#footer .brand a .logo img {
  height: 4rem;
}

#footer .brand .icons a {
  font-size: 2rem;
  margin: 2rem 1rem;
  color: #fff;
}

#footer .brand .icons a:hover {
  color: #FFF200;
}

#footer .footer-links {
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-flow: column;
          flex-flow: column;
  margin: 1rem 0;
}

#footer .footer-links h3 {
  font-size: 2.2rem;
  color: #FFF200;
}

#footer .footer-links a {
  color: #fff;
  font-size: 1.7rem;
}

#footer .letter h2 {
  font-size: 2rem;
  margin: 2rem 0;
  color: #fff;
}

#footer .letter input[type="text"] {
  border: .2rem solid #fff;
  outline: none;
  background: none;
  height: 4rem;
  width: 22rem;
  padding: 0 1rem;
  font-size: 1.3rem;
  color: #fff;
}

#footer .letter input[type="submit"] {
  outline: none;
  border: none;
  border-radius: 5rem;
  color: #333;
  font-size: 1.6rem;
  font-weight: bold;
  text-transform: capitalize;
  letter-spacing: .2rem;
  cursor: pointer;
  position: relative;
  z-index: 1;
  overflow: hidden;
  height: 4rem;
  width: 12rem;
  margin: 1rem 0;
}

#footer .letter input[type="submit"]::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  background: #FFF200;
  height: 100%;
  width: 0%;
  -webkit-transition: .2s;
  transition: .2s;
  z-index: -1;
}

#footer .letter input[type="submit"]:hover::before {
  width: 100%;
}

#footer .letter input[type="submit"]:hover {
  color: #333;
  background: #FFF200;
}

.fa-times {
  -webkit-transform: skew(-180deg) rotate(180deg);
          transform: skew(-180deg) rotate(180deg);
}

@media (max-width: 768px) {
  html {
    font-size: 50%;
  }
  #header .fa-hamburger {
    display: block;
  }
  #header nav {
    position: fixed;
    top: 0;
    left: -120%;
    height: 100vh;
    width: 35rem;
    background: #000;
  }
  #header nav ul {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-flow: column;
            flex-flow: column;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    height: 100%;
  }
  #header nav ul li {
    margin: 2rem 0;
  }
  #header nav ul li a {
    font-size: 3.5rem;
    border-radius: 5rem;
  }
  #header nav ul li a:hover {
    padding: .5rem 7.5rem;
    color: #333;
    background: #FFF200;
  }
  #header .nav-toggle {
    left: 0%;
  }
  #about .image {
    text-align: center;
  }
  #about .image img {
    width: 70vw;
  }
} 
/*# sourceMappingURL=style.css.map */
</style>


 <section id="contact" class="container-fluid">

    <div class="heading text-center">
        <h1><span>contact</span> us</h1>
    </div>

    <div class="row justify-content-center">

        <form action="" class="col-md-7">

            <div class="inputBox">
                <input type="text" required>
                <h3>full name</h3>
            </div>

            <div class="inputBox">
                <input type="email" required>
                <h3>e-mail</h3>
            </div>

            <div class="inputBox">
                <textarea required name="" id="" cols="30" rows="10"></textarea>
                <h3>message</h3>
            </div>

            <input type="submit" value="send">

        </form>

    </div>

</section> -->

</body>
</html>
   
