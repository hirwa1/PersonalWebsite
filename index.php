<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevCynthia Portfolio Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

    <!-- Update these with your own fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

echo "successfully";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br />"; 
     }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 
$query=$conn->prepare("INSERT INTO contacts (first, last, email, message) VALUES (?,?,?,?)");

$query->bindParam(1, $first);
$query->bindParam(2, $last);
$query->bindParam(3, $email);
$query->bindParam(4, $message);
 
$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email']; 
$subject = $_POST['subject']
$message=$_POST['message'];

$query->execute();

$conn = null;
 
echo 'Hi '.$_POST['first'].' ' .$_POST['last'] .' thanks for your interest.</br>';
echo 'We will contact you at '. $_POST['email'].' soon.</br>';
?>
    <header>
        <div class="logo">
            <img src="img/devjane.png" alt="">
        </div>
        <button class="nav-toggle" aria-label="toggle navigation">
            <span class="hamburger"></span>
        </button>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="#services" class="nav__link">My Services</a></li>
                <li class="nav__item"><a href="#about" class="nav__link">About me</a></li>
                <li class="nav__item"><a href="#work" class="nav__link">My Work</a></li>
                <li class="nav__item"><a href="#contactUs" class="nav__link">News</a></li>
                <li class="nav__item"><a href="#contactUs" class="nav__link">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Introduction -->
    <section class="intro" id="home">
        <h1 class="section__title section__title--intro">
            Hi, I am <strong>Cynthia Iradukunda</strong>
        </h1>
        <p class="section__subtitle section__subtitle--intro">front-end dev</p>
        <img class="intro__img" src="img/Cynthia.jpg" alt="a picture of Jane Smith smiling">
    </section>


    <!-- My services -->
    <section class="my-services" id="services">
        <h2 class="section__title section__title--services">What I do</h2>
        <div class="services">
            <div class="service">
                <h3>Design + Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div> <!-- / service -->

            <div class="service">
                <h3>E-Commerce</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div> <!-- / service -->

            <div class="service">
                <h3>WordPress</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div> <!-- / service -->
        </div> <!-- / services -->

        <a href="#work" class="btn">My Work</a>
    </section>


    <!-- About me -->
    <section class="about-me" id="about">
        <h2 class="section__title section__title--about">Who I am</h2>
        <p class="section__subtitle section__subtitle--about">Designer & developer based out of NYC</p>

        <div class="about-me__body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <img class="about-me__img" src="img/dev-jane-02.jpg" alt="Jane leaning against a bus">
    </section>

    <!-- My Work -->
    <section class="my-work" id="work">
        <h2 class="section__title section__title--work">My work</h2>
        <p class="section__subtitle section__subtitle--work">A selection of my range of work</p>

        <div class="portfolio">
            <!-- Portfolio item 01 -->
            <div href="#" class="portfolio__item">
                <img src="img/portfolio-01.jpg" alt="" class="portfolio__img">

                <div class="overlay">

                    <h3 class="text">Pig Game</h3>

                    <a class="btn" href="https://github.com/ciradu2204">Github Link</a>


                </div>
            </div>

            <!-- Portfolio item 02 -->
            <div href="#" class="portfolio__item">
                <img src="img/portfolio-02.jpg" alt="" class="portfolio__img">

                <div class="overlay">

                    <h3 class="text">UnitConverter App</h3>

                    <a class="btn" href="https://github.com/ciradu2204">Github Link</a>


                </div>
            </div>

            <!-- Portfolio item 03 -->
            <div href="#" class="portfolio__item">
                <img src="img/portfolio-03.jpg" alt="" class="portfolio__img">

                <div class="overlay">

                    <h3 class="text">Pig Game</h3>

                    <a class="btn" href="https://github.com/ciradu2204">Github Link</a>


                </div>
            </div>

            <!-- Portfolio item 04 -->
            <div href="#" class="portfolio__item">
                <img src="img/portfolio-04.jpg" alt="" class="portfolio__img">

                <div class="overlay">

                    <h3 class="text">Pig Game</h3>

                    <a class="btn" href="https://github.com/ciradu2204">Github Link</a>


                </div>
            </div>

            <!-- Portfolio item 05 -->
            <div class="portfolio__item">
                <img src="img/portfolio-05.jpg" alt="" class="portfolio__img">

                <div class="overlay">

                    <h3 class="text">Pig Game</h3>

                    <a class="btn" href="https://github.com/ciradu2204">Github Link</a>


                </div>
            </div>

            <!-- Portfolio item 06 -->
            <div class="portfolio__item">
                <img src="img/portfolio-06.jpg" alt="" class="portfolio__img">

                <div class="overlay">

                    <h3 class="text">Pig Game</h3>

                    <a class="btn" href="https://github.com/ciradu2204">Github Link</a>


                </div>
            </div>

            <!-- Portfolio item 07 -->
            <div class="portfolio__item">
                <img src="img/portfolio-07.jpg" alt="" class="portfolio__img">

                <div class="overlay">

                    <h3 class="text">Pig Game</h3>

                    <a class="btn" href="https://github.com/ciradu2204">Github Link</a>


                </div>
            </div>

            <!-- Portfolio item 08 -->
            <div  class="portfolio__item">
                <img src="img/portfolio-08.jpg" alt="" class="portfolio__img">

                <div class="overlay">
                    
                     <h3 class="text">Pig Game</h3>
                    
                     <a  class="btn" href="https://github.com/ciradu2204">Github Link</a>
                      

                </div>   
               
            </div>

           
        </div>
    </section>


    <!-- news -->

    <section class="news" id="news">

        <h2 class="section__title section__title-news">Blogs</h2>

        <div id="retainable-rss-embed" 
             data-rss="https://medium.com/feed/@c.iradukund"
             data-maxcols="2"
             data-layout="grid"
             data-poststyle="inline"
             data-readmore="Read the rest"
             data-buttonclass="btn btn-primary"
             data-offset="-500"></div>
</section>

    <!--contact Us -->

    <section class="contact" id="contactUs">

        <h2 class="section__title section__title-contactUs">Contact Us</h2>

        <div class="contactDetails">

            <div class="contactDetails__item">

                <h3>Contact Info</h3>

                <p>
                    There are many variations of passages of Lorem Ipsum available,
                    but the et majori have suffered alteration in some form, by injected humour,
                    Domised words which don't look even slightly believable. If you are going to use a pas of Lorem Ipsum,
                    you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <div class="contactInfo">


                    <div class="contactInfo__item">

                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>

                        </div>

                        <div class="details">

                            <h3>ADDRESS</h3>
                            <p>Freedom Way, Jersey City, NJ 07305, USA</p>

                        </div>

                    </div>


                    <div class="contactInfo__item">

                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>

                        </div>

                        <div class="details">

                            <h3> SKYPE</h3>
                            <p>sumon.backpiper</p>

                        </div>

                    </div>

                    <div class="contactInfo__item">

                        <div class="icon">
                            <i class="far fa-envelope"></i>

                        </div>

                        <div class="details">
                            <h3>Email</h3>
                            <p>backpiper.com@gmail.com</p>
                        </div>

                    </div>




                </div>



            </div>

            <div class="contactDetails__item">


                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


                    <h3>Send Message</h3>

                    <input type="text" id="fname" name="fname" value="First Name" /><br>
                    <input type="text" id="lname" name="lname" value="Last Name" /><br>
                    <input type="email" id="email" name="email" value="email" /><br>
                    <input type="text" id="subject" name="subject" value="Subject" /><br>
                    <textarea type="text" id="message" name="message" value="write message"> Write message
                   </textarea><br /><br>

                    <button name="save">Send Message</button>

                </form>

            </div>
        </div>



    </section>


    <!-- Footer -->
    <footer>
        <!-- replace with your own email address -->
        <a href="mailto:ciradukunda2204@gmail.com" class="footer__link">ciradukunda2204@gmail.com</a>
        <ul class="social-list">

            <li class="social-list__item">
                <a class="social-list__link" href="http://www.linkedin.com/in/ciradu2204">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a class="social-list__link" href="https://twitter.com">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a class="social-list__link" href="https://github.com/ciradu2204">
                    <i class="fab fa-github"></i>
                </a>
            </li>
        </ul>
    </footer>

    <script src="index.js"></script>
    <script src="https://www.twilik.com/assets/retainable/rss-embed/retainable-rss-embed.js"></script>
</body>
</html>