
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
   


    * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-family: 'Exo 2', sans-serif;
  text-transform: capitalize;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}

html {
  font-size: 62.5%;
  scroll-behavior: smooth;
}

body {
  overflow-x: hidden;
}

#header {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 2rem 4rem;
  z-index: 1000;
}

#header .fa-hamburger {
  font-size: 4rem;
  z-index: 10000;
  color: #FFF200;
  cursor: pointer;
  display: none;
}

#header .logo img {
  height: 5rem;
}

#header nav ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  list-style: none;
}

#header nav ul li {
  margin-right: 4rem;
}

#header nav ul li a {
  color: #fff;
  font-size: 2rem;
}

#header nav ul li a:hover {
  color: #FFF200;
  text-decoration: none;
}

.header-active {
  background: #333;
  height: 6rem;
  -webkit-box-shadow: .2rem 0 .5rem #000;
          box-shadow: .2rem 0 .5rem #000;
}

.header-active nav ul {
  margin: 0;
}

#home {
  background: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, 0.6)), to(rgba(0, 0, 0, 0.6)));
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6));
  position: relative;
}

#home .content h1 {
  font-size: 5rem;
  font-family: 'lemonada',sans-serif;
  font-weight: bolder;
  text-shadow: .1rem .1rem .3rem #333;
  color: #FFF200;
}

#home .content h2 {
  font-size: 3.5rem;
  font-family: 'lemonada',sans-serif;
  font-weight: bolder;
  text-shadow: .1rem .1rem .3rem #333;
  color: #fff;
  margin: 1rem 0;
}

#home .content p {
  font-size: 1.6rem;
  color: #ccc;
}

#home .content button {
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
  width: 14rem;
  background: #fff;
}

#home .content button::before {
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

#home .content button:hover::before {
  width: 100%;
}

#home .video-container {
  position: absolute;
  top: 0;
  left: 0;
  height: 100vh;
  width: 100%;
  z-index: -1;
}

#home .video-container .vid {
  position: absolute;
  height: 100vh;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  display: none;
}

#home .video-container .vid1 {
  display: block;
}

#home .controls {
  position: absolute;
  bottom: 14%;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

#home .controls .dots {
  height: 2rem;
  width: 2rem;
  cursor: pointer;
  background: #FFF200;
  margin: 0 1rem;
}

#home .controls .dots:hover {
  background: #fff;
}

#special {
  background: #000;
  min-height: 100vh;
}

#special .heading h1 {
  font-size: 4rem;
  color: #000;
  padding-top: 7rem;
  margin-bottom: 2rem;
  color: #fff;
}

#special .heading h1 span {
  color: #FFF200;
}

#special .heading p {
  color: #ccc;
  font-size: 2rem;
}

#special .card-container {
  width: 95%;
  margin: 7rem auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

#special .card-container .card {
  height: 40rem;
  width: 30rem;
  background: #fff;
  padding: 1rem;
  margin: 2rem;
  text-align: center;
}

#special .card-container .card img {
  height: 50%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

#special .card-container .card p {
  font-size: 1.4rem;
  margin: 2rem 0;
}

#special .card-container .card button {
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
  height: 3.5rem;
  width: 14rem;
  background: #333;
  color: #fff;
}

#special .card-container .card button::before {
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

#special .card-container .card button:hover::before {
  width: 100%;
}

#special .card-container .card button:hover {
  color: #333;
}

#special .card-container .card:hover {
  -webkit-transform: scale(0.9);
          transform: scale(0.9);
}

#about .heading h1 {
  font-size: 4rem;
  color: #000;
  padding-top: 7rem;
  margin-bottom: 2rem;
}

#about .heading h1 span {
  color: #FFF200;
}

#about .content {
  margin: 5rem auto;
}

#about .content p {
  font-size: 2rem;
}

#about .content button {
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
  width: 14rem;
  background: #333;
  color: #fff;
}

#about .content button::before {
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

#about .content button:hover::before {
  width: 100%;
}

#about .content button:hover {
  color: #333;
}

#about .image img {
  width: 30vw;
}

#dish {
  min-height: 100vh;
  width: 100vw;
}

#dish .heading h1 {
  font-size: 4rem;
  color: #000;
  padding-top: 7rem;
  margin-bottom: 2rem;
}

#dish .heading h1 span {
  color: #FFF200;
}

#dish .box-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: 1rem auto;
  width: 90%;
}

#dish .box-container .box {
  height: 20rem;
  width: 25rem;
  border-radius: .5rem;
  margin: 2rem;
  cursor: pointer;
  overflow: hidden;
  position: relative;
  -webkit-box-shadow: 0 0 .5rem #333;
          box-shadow: 0 0 .5rem #333;
}

#dish .box-container .box img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

#dish .box-container .box .info {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(51, 51, 51, 0.6);
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-flow: column;
          flex-flow: column;
  color: #fff;
  -webkit-transform: scale(0);
          transform: scale(0);
}

#dish .box-container .box .info h3 {
  font-size: 3rem;
}

#dish .box-container .box .info p {
  font-size: 1.3rem;
  border-bottom: 0.2rem solid #FFF200;
  border-top: 0.2rem solid #FFF200;
  margin: 1rem 2rem;
}

#dish .box-container .box .info button {
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
  width: 14rem;
}

#dish .box-container .box .info button::before {
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

#dish .box-container .box .info button:hover::before {
  width: 100%;
}

#dish .box-container .box:hover .info {
  -webkit-transform: scale(1);
          transform: scale(1);
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

    </style>

<!-- header section starts -->

<header id="header">

 <nav>
    <ul>
        <li><a href="#home">home</a></li>
        <li><a href="#special">special</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#dish">dishes</a></li>
        <li>
        
      <li class="nav-item"><a href="changePasswordUserView.php" class="nav-link">Change Password</a></li>
        <li class="nav-item"><a href="Home_Page.php" class="nav-link">Back</a></li>
    </ul>
</nav> 

<div class="fas fa-hamburger"></div>



</header>

<!-- header section ends -->


<!-- home section starts  -->

<section id="home" class="container-fluid">

<div class="row min-vh-100 align-items-center">
    
<div class="col-md-8 ml-md-5 text-md-left text-center content">
    <h1>food that you can't resist</h1>
    <h2>enjoy the marvelous taste</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta vel quisquam nostrum cum minima nobis consequatur alias eius omnis dolorem.</p>
    <a href="#special"><button>get started</button></a>
</div>

<div class="video-container">
    <video src="images/vid1.mp4" autoplay loop class="vid vid1"></video>
    <video src="images/vid2.mp4" autoplay loop class="vid vid2"></video>
    <video src="images/vid3.mp4" autoplay loop class="vid vid3"></video>
</div>

<div class="controls">
    <div class="dots dot1"></div>
    <div class="dots dot2"></div>
    <div class="dots dot3"></div>
</div>

</div>

</section>

<!-- home section ends  -->


<!-- special card section starts  -->

<section id="special" class="container-fluid">

<div class="heading text-center">
<h1>our <span>special</span></h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, atque.</p>
</div>


<div class="card-container">

    <div class="card">
        <img src="Capture1.PNG" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eum nam, officia porro dicta molestiae! Veniam, nemo aliquid. Repellat, iste.</p>
        <a href="#"><button>read more</button></a>
    </div>

    <div class="card">
        <img src="Capture11.PNG" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eum nam, officia porro dicta molestiae! Veniam, nemo aliquid. Repellat, iste.</p>
        <a href="#"><button>read more</button></a>
    </div>

    <div class="card">
        <img src="Capture9.PNG" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque eum nam, officia porro dicta molestiae! Veniam, nemo aliquid. Repellat, iste.</p>
        <a href="#"><button>read more</button></a>
    </div>

</div>

</section>

<!-- special card section ends  -->

<!-- about section starts  -->

<section id="about" class="container">

    <div class="heading text-center">
    <h1><span>about</span> us</h1>
    </div>

    <div class="row min-vh-100">

        <div class="col-md-6 text-center text-md-left align-self-center content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi recusandae iusto, perferendis earum laboriosam rerum et quisquam iste vel commodi corporis praesentium porro impedit ullam!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci iure aliquam illum quaerat quia voluptate.</p>
            <a href="#"><button>learn more</button></a>
        </div>

        <div class="col-md-6 image">
            <img src="Capture2.PNG" alt="">
        </div>

    </div>

</section>

<!-- about section ends  -->


<!-- dish section starts  -->

<section id="dish" class="container">

    <div class="heading text-center">
        <h1>our <span>Special Dishes</span></h1>
    </div>

    <div class="box-container">

        <div class="box">
            <img src="Capture12.PNG" alt="">
            <div class="info">
                <h3>dish1</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="menu.php"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="Capture13.PNG" alt="">
            <div class="info">
                <h3>dish2</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="menu.php"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="Capture10.PNG" alt="">
            <div class="info">
                <h3>dish3</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="menu.php"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="Capture4.PNG" alt="">
            <div class="info">
                <h3>dish4</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="menu.php"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="Capture5.PNG" alt="">
            <div class="info">
                <h3>dish5</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="menu.php"><button>view</button></a>
            </div>
        </div>

        <div class="box">
            <img src="Capture8.PNG" alt="">
            <div class="info">
                <h3>dish6</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, nihil.</p>
                <a href="menu.php"><button>view</button></a>
            </div>
        </div>

    </div>

</section>



<section id="footer" class="container-fluid">

<div class="row align-items-center">

<div class="col-md-4 brand">

<a href="#" class="logo"><img src="Capture.PNG" alt=""></a>

<div class="icons">
    <a href="#" class="fab fa-facebook-square"></a>
    <a href="#" class="fab fa-twitter-square"></a>
    <a href="#" class="fab fa-instagram-square"></a>
    <a href="#" class="fab fa-pinterest-square"></a>
</div>

</div>

<div class="col-md-4 footer-links">
<h3>links:</h3>
<a href="#home">home</a>
<a href="#special">special</a>
<a href="#about">about</a>
<a href="#dish">dish</a>
<a href="#contact">contact</a>
</div>


</div>
<h1>&copy; copyright @ 2020 by <span>Rakhi</span></h1>



</section>
















</script>

</body> 
</html>