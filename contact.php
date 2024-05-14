<!DOCTYPE html>
<html>
    <head>
        <title>Contact Me</title>
        <meta charset="utf-8">
        <meta lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="shortcut icon" href="images/Iconslogo/rsz_logo_1-150x150.png" />
        <link href="css/contact.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Audiowide|Baloo+Tamma|Kelly+Slab|Neucha|Righteous&display=swap" rel="stylesheet">
        <style>
        .toggle{
            height: 0px;
            background-color: #2e2e2e;
        }
        #open{
            color: aliceblue;
        }
        @media only screen and (max-width: 800px){
            .toggle{
                height: 50px;
            }
            
        }
    </style>
    </head>
    <body>
        <div class="toggle">
            <span style="font-size:40px;cursor:pointer;margin-left: 10px;" onclick="openNav()" id="open">&#9776; </span>
        </div>
       <div id="myNav" class="navbar" style="background-color: rgba(0,0,0,0.9);">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="close">&times;</a>
          <div class="navbar-content">
            <a href="home.php">Home</a>
            <a href="resume.php">CV</a>
            <a href="blog.php">Blog</a>
            <a href="gallery.php" id="active">Contact</a>
          </div>
        </div>
        
        <div class="contact-area" id="contact">
            <div class="text-part">
                <h1>Contact Me</h1>
                <fieldset>
                    <legend>Contact Form</legend>
                    <div class="cont-form">
                    <form onsubmit="return validateForm()">
                    <input type="text" id="name" placeholder="Name *"><br>
                    <input type="text" id="email" placeholder="Email *">
                    <input type="text" id="subject" placeholder="Subject *"><br>
                    <input type="text" placeholder="Phone No (Optional)" id="phone"><br>
                    <textarea id="message" placeholder="Message *"></textarea><br>
                    <button type="submit" id="btn-submit">Send</button>
                    <div class="soci-contact">
                       <a href="https://m.me/gilbranid" target="_blank">
                        <div class="messenger">
                            <img src="images/Iconslogo/messengerf.png">
                            <div class="text">Meet me in Messenger</div>
                        </div>
                        </a>
                        <a href="mailto:gilbranbambimboo@gmail.com?subject=Site_Message&body=Assalamualaikum Permisi" target="_blank">
                        <div class="email">
                             <img src="images/Iconslogo/envelope.png">
                            <div class="text">Send Me Email</div>
                        </div>
                        </a>
                    </div>
                    </form>
                </div>
                </fieldset>
            </div>
        </div>
        <!--This is for playing alert sound-->
        <audio id="alert" src="sound/alerts.mp3" preload="auto"></audio>
        <audio id="success" src="sound/success.mp3" preload="auto"></audio>

        <!--Copyright Information-->
        <div class="copyright">
            <p>&copy; <?php  echo date("Y"); ?> Developed by <a href="https://adhikarikrishna1.com.np">gilbranid</a></p>
        </div>
        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/formValidate.js" type="text/javascript"></script>
    </body>
</html>