<!DOCTYPE html>
<html>

<head>
  <title>gilbran - Tech Lover, Web Developer</title>
  <meta charset="utf-8" />
  <meta lang="en" />
  <meta name="author" content="Radenta Gilbran" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="images/Iconslogo/rsz_logo_1-150x150.png" />
  <!--The below code is for importing google web fonts in html-->
  <link href="https://fonts.googleapis.com/css?family=Audiowide|Baloo+Tamma|Kelly+Slab|Neucha|Righteous&display=swap"
    rel="stylesheet" />
  <link href="css/style.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="css/workslider.css" type="text/css" />
  <script src="js/formValidate.js" type="text/javascript"></script>
  <script src="js/main.js" type="text/javascript"></script>
</head>
<style>
  /*Internal CSS*/
  #time {
    float: right;
    font-size: 30px;
    margin: 10px;
    font-family: "kelly slab";
    margin-right: 20px;
    font-weight: bold;
  }

  @media only screen and (max-width: 800px) {
    #greet {
      visibility: hidden;
    }

    #time {
      margin: auto;
      font-family: "kelly slab";
    }
  }

  #greet {
    font-size: 25px;
    font-family: audiowide;
    position: absolute;
    left: 50%;
    top: 2%;
    font-weight: bold;
  }

  #center {
    text-align: center;
    padding: 30px;
  }
</style>

<body>
  <!--Header Section-->

  <!--Navigation Section-->
  <div id="myNav" class="navbar">
    <div class="header">
      <!--Inline css in below line-->
      <span style="font-size: 40px; cursor: pointer; margin-left: 10px" onclick="openNav()" id="open">&#9776;
      </span>
      <span class="greeting" id="greet"></span>
      <span id="time"></span>
    </div>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="close">&times;</a>
    <div class="navbar-content">
      <a href="#home" id="active">Home</a>
      <a href="resume.html">CV</a>
      <a href="blog.html">Blog</a>
      <a href="contact.html">Contact</a>
    </div>
  </div>

  <!--Banner Section-->
  <div class="banner-area" id="home">
    <div class="title-image"></div>
    <div class="title-name">
      <p class="name">
        <span id="">Radenta Gilbran Salsyarizki</span><br />
        <span class="subtitle1" id="subtitle1">Techh Lover, Freelancer</span>
        <span class="subtitle2" id="subtitle2">Web &nbsp;Developer</span>
      </p>
    </div>
  </div>

  <!--Services Section-->
  <div class="service-area" id="services">
    <div class="text-part">
      <h1 id="center">What can I do?</h1>
      <div class="container">
        <div class="box">
          <div class="icon"></div>
          <div class="content">
            <h3>Website Development</h3>
            <p>
              Can design, and develop attractive, secure, fast, multi
              functional and responsive websites for organization or
              individuals according to users requirement.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="icon"></div>
          <div class="content">
            <h3>Mobile App Development</h3>
            <p>
              Can create native, smooth, user friendly application for android
              and IOS devices and publish them in Google Play Store and App
              Stores.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="icon"></div>
          <div class="content">
            <h3>Domain & Hosting</h3>
            <p>
              Having own hosting servers, we can provide ssd and cloud hosting
              for secure and fast websites and register your custom domain at
              minimal cost with 24/7 support.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Who do I work with, Section-->
  <!-- <div class="corpwork-area" id="corpwork">
    <div class="text-part">
      Aligning header to center using inline css
      <h1 style="text-align: center">Who do I work with?</h1>
      <center>
        <div class="imgrel fade">
          <img src="images/Iconslogo/circle-cropped-1-150x150.png" />
          <p>International Youth Society</p>
        </div>

        <div class="imgrel fade">
          <img src="images/Iconslogo/wya.png" />
          <p>World Youth Alliance, Nepal</p>
        </div>

        <div class="imgrel fade">
          <img src="images/Iconslogo/circle-cropped-150x150.png" />
          <p>AgriTech Nepal</p>
        </div>

        <div class="imgrel fade">
          <img src="images/Iconslogo/rsz_logo_1-150x150.png" />
          <p>ForkhakiTech</p>
        </div>
      </center>

      <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
      </div>
    </div>
  </div> -->

  <!--About Section-->
  <div class="about-area" id="about">
    <div class="text-part-abt">
      <h1 style="text-align: center; padding-bottom: 10px">
        <span style="
              font-size: 80px;
              text-decoration: none;
              border-bottom: 2px solid rgb(230, 173, 30);
              color: rgb(230, 173, 30);
            ">A</span>bout Me
      </h1>
      <div class="about">
        <div class="abt-content">
          <div class="rem-part">
            <div class="social-media">
              <div class="icons">
                <a href="https://www.facebook.com/gilbran.salsyarizkinew/" target="
                            "><img src="images/Iconslogo/facebook.png" /></a>
                <a href="https://twitter.com/gilbranid" target="_blank"><img src="images/Iconslogo/twitter.png" /></a>
                <a href="https://www.instagram.com/gilbran_id" target="_blank"><img
                    src="images/Iconslogo/instagram.png" /></a>
              </div>
            </div>
            <div class="left-part">
              <span class="h2">I'm
                <span style="color: orangered">Radenta Gilbran Salsyarizki</span></span><br />
              <span class="h3">Developer, Freelancer & Programmer</span>
              <hr />
              <p style="font-size: 25px">
                I am a vocational school student, and currently I am studying Javascript, React, and API.
                
                <span style="font-size: 25px; color: chocolate"><b style="text-decoration: underline"></b></span>
                I started freelancing myself from elementary school,
                and until now I still receive several projects from my clients.
              </p>
            </div>
            <div class="abt-btn">
              <button type="button" onclick="window.location.href='resume.html';" class="button1">
                View My CV
              </button>
              <button type="button" onclick="window.location.href='#contact';" class="button2">
                Hire Me
              </button>
            </div>
          </div>
          <div class="img-part">
            <div class="img"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Testimonial Section-->
  <!-- <div class="testimonial-area" id="testimonial">
    <div class="testimonials">
      <div class="inner">
        <h1>Testimonials</h1>
        <div class="border"></div>
        <div class="row">
          <div class="col">
            <div class="testimonial">
              <div class="head-testi">
                <img src="images/ujbh.jpg" alt="Md Tech101" />
                <div class="name-testi">Ujjwal Bhandari</div>
                <div class="subname-testi">
                  Managing Director <br />Tech101
                </div>
                <div class="stars">
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gray.png" />
                </div>
              </div>
              <div class="testi-content">
                <p>
                  My experience with krishna adhikari has been refreshingly
                  different from many of my experiences. He is extremely clear
                  in outlining the project and scope of his work so there was
                  never any confusion.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="testimonial">
              <div class="head-testi">
                <img src="images/jankimam.jpg" alt="Janaki Gurung" />
                <div class="name-testi">Janaki Gurung</div>
                <div class="subname-testi">Regional Director<br />IYS</div>
                <div class="stars">
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gray.png" />
                </div>
              </div>
              <div class="testi-content">
                <p>
                  I’m always impressed with the dedication I find when
                  interacting with Krishna. As part of global community, I
                  will recommend you to friends and families of my circle as
                  you listen carefully and understand the context quickly.
                </p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <div class="head-testi">
                <img src="images/ajay.jpg" alt="Ajay" />
                <div class="name-testi">Ajay Yadav</div>
                <div class="subname-testi">Program Coordinator<br />IYS</div>
                <div class="stars">
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gold.png" />
                  <img src="images/Iconslogo/star_gold.png" />
                </div>
              </div>
              <div class="testi-content">
                <p>
                  I feel get prevelage to work with you Mr. Krishna. The way
                  you get my job is awesome and literally attractive. I look
                  forward to work with you in coming days. Best wishes for
                  your upcoming days.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="divider"></div>
  <div class="contact-area" id="contact">
    <div class="text-part">
      <h1>Contact Me</h1>
      <div class="cont-form">
        <form onsubmit="return validateForm()">
          <input type="text" id="name" placeholder="Name *" /><br />
          <input type="text" id="email" placeholder="Email *" />
          <input type="text" id="subject" placeholder="Subject *" /><br />
          <input type="text" placeholder="Phone No (Optional)" id="phone" /><br />
          <textarea id="message" placeholder="Message *"></textarea><br />
          <button type="submit" id="btn-submit">Send</button>
        </form>
      </div>
    </div>
  </div>
  <!--This is for playing alert sound-->
  <audio id="alert" src="sound/alerts.mp3" preload="auto"></audio>
  <audio id="success" src="sound/success.mp3" preload="auto"></audio>

  <div class="cta hide" id="goup">
    <a href="#home"><img src="images/Iconslogo/arrup.png" /></a>
  </div>

  <!--Copyright Information-->
  <div class="copyright">
    <p>
      &copy; <?php  echo date("Y"); ?> Developed by
      <a href="https://gilbranidsoftwareengnr.blogspot.com">gilbranid</a>
    </p>
  </div>
  <script>
    //handles goup button
    myID = document.getElementById("goup");

    var myScrollFunc = function () {
      var y = window.scrollY;
      if (y >= 800) {
        myID.className = "cta show";
      } else {
        myID.className = "cta hide";
      }
    };
    window.addEventListener("scroll", myScrollFunc);

    //The below line dynamically change the name in banner area.
    document.getElementById("iden-name").innerHTML = "gilbran id";

    /*
              The below code is used to slide/change image infinitely using for loop.
              A single image will be available only for 2.5s and after that it automatically changes another image
          */
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("imgrel");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2500);
    }

    //The below is used to make navigation bar sticky
    //when we scroll up the navigation bar will stick on top of page
    window.onscroll = function () {
      stickFunction();
    };
    var navbar = document.getElementById("myNav");
    var sticky = navbar.offsetTop;

    function stickFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>
</body>

</html>