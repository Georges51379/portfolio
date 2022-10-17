<?php
session_start();
include('db/connection.php');

$titlesql = mysqli_query($con, "SELECT titleName FROM title WHERE titleStatus = 'Active' ");
$rw = mysqli_fetch_array($titlesql);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="logo.png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css" >
  <title><?php echo htmlentities($rw['titleName']); ?></title>
</head>
<body>

  <div class="header">
    <section class="banner">
      <div class="banner--content">
        <h3 class="name">georges boutros</h3>
        <h1 class="designation">full stack developer</h1>
        <p class="tagline">Writing code that a computer can understand? No!! Writing a code that a human can understand? Sure.</p>
      </div>
    </section>
  </div><!-- .banner -->
  <div class="navbar-wrapper" id="navbar-wrapper">
        <div class="navbar-container">
            <div class="logo">
                <a href="index.php">gib</a>
            </div>
            <nav class="navbar">
                <div class="navbar-mobile">
                    <a href="#" id="navbar-toggle">
                        <span class="bars"></span>
                    </a>
                </div>
                <ul class="navbar-list">
                    <li class="navbar-li"><a href="#about" class="navbar-links">about</a></li>
                    <li class="navbar-li"><a href="#skill" class="navbar-links">skills</a></li>
                    <li class="navbar-li"><a href="#service" class="navbar-links">services</a></li>
                    <li class="navbar-li"><a href="#portfolio" class="navbar-links">portfolio</a></li>
                    <li class="navbar-li"><a href="#feedbacks" class="navbar-links">feedbacks</a></li>
                    <li class="navbar-li"><a href="#pricing" class="navbar-links">pricing</a></li>
                    <li class="navbar-li"><a href="#contact" class="navbar-links">contact</a></li>
                </ul>
            </nav>
        </div>
    </div><!--END NAVBAR-->
  <section class="promo">
    <div class="content">
      <h2>If today you're the same as yesterday, do some progress.</h2>
      <p>Gathering complicated ideas and visions into a well structered piece of code.</p>
    </div>
  </section>
  <section id="about">
    <div class="content">
      <div class="about-container">
        <div class="about-container-left">
          <h2>About Me</h2>
          <center><button>
            <a href="download/CV-Georges-Boutros.pdf" download class="download-cv">download my cv</a>
          </button></center>
          <h3>describe me in 3 words:</h3>
          <ul>
            <li>hard worker</li>
            <li>eager to learn</li>
            <li>fast learner</li>
          </ul>
          <p>I am always eager to learn new technologies and frameworks as this field is always evolving. Moreover, I discover my weakpoints and work on getting better and better.</p>
          <h4>Hobbies</h4>
          <p>My break time is about gaming or doing sports. I play sports like football, basketball, volleyball, swimming, running and going to gym. On the other hand, I play games like GTA V, NBA2K, FIFA, BattleField, PUBG, Forza Horizon, Generals.</p>
        </div>
        <div class="about-container-right">
          <img src="assets/images/profile.png" alt="Georges Boutros">
        </div>
      </div>
    </div>
  </section><!-- #about -->
  <section id="skill">
    <div class="content skill--content">
      <div class="left">
        <h2>My skills &amp; expertise</h2>
        <p>I am passionate towards coding and problem solving.<br>
             After completing my BS degree, I continued learning from tutorials online and participating in bootcamps. Moreover,
             I understand that computer science field is always evolving, so I should always be ready to learn new technologies and frameworks.
             <br>
             On the other hand, as I am a gamer, my favorite game is GTA V. Which lead me to make a plan for myself which includes parts to be
             updated in my new game that I am thinking of doing that will look like GTA V but with some extra features and updates.
             For example, licensed cars is a big plus, Deduct money from players that break trees, lights and so on. Make effects while shooting
             on a building. Ability to drive a yacht and damage it if to close to shore.
             <br>
             For more programming languages, kindly check my CV.
           </p>
      </div>
      <div class="right">
        <div class="item">
          <img src="assets/images/web-dev.png" alt="WebDev">
          <h3>web developer</h3>
          <p>Using: HTML5, CSS3, BootStrap, JavaScript, jQuery, PHP, MySQL, AJAX, jSON .</p>
        </div>
        <div class="item">
          <img src="assets/images/data-engineer.png" alt="DataEngineer">
          <h3>data engineer</h3>
          <p>Using: Python, Java, Microsoft Server SQL, Spark, PySpark.</p>
        </div>
        <div class="item">
          <img src="assets/images/game-dev.png" alt="GameDev">
          <h3>game developer</h3>
          <p>Using: C++, C#.</p>
        </div>
      </div>
    </div>
  </section><!-- #skill -->
  <section id="service">
    <h2>Services I offer</h2>
    <div class="content service--content">
      <div class="item">
        <h3>web development</h3>
        <img src="assets/images/web-dev-idea.png" alt="Web Dev">
        <p>building websites from scratch or update existing websites!</p>
        <a href="#contact">Hire Me</a>
      </div><!-- .item -->
      <div class="item">
        <h3>data engineering</h3>
        <img src="assets/images/data-engineer-idea.png" alt="Data Engineering">
        <p>using ETL tools at your services.</p>
        <a href="#contact">Hire Me</a>
      </div><!-- .item -->
      <div class="item">
        <h3>game ideas</h3>
        <img src="assets/images/game-idea.png" alt="Game Ideas">
        <p>giving creative and easy to use and develop game ideas.</p>
        <a href="#contact">Hire Me</a>
      </div><!-- .item -->
    </div>
  </section><!-- #service -->
  <section id="portfolio">
    <h2 class="center">Portfolio -My past work samples</h2>
    <h1>
      Check my GitHub repository for more information about the below projects.
      <br>
      <a href="https://github.com/Georges51379" class="lnk-github" target="_blank">check repository</a>
    </h1>
    <div class="content portfolio--content">
      <div class="item">
        <h3>titan gamers</h3>
        <img src="assets/images/titan-logo.png" alt="logo design">
      </div><!-- item -->
      <div class="item">
        <h3>book managment system</h3>
        <img src="assets/images/book-system-logo.png" alt="logo design">
      </div><!-- item -->
      <div class="item">
        <h3>boogle</h3>
        <img src="assets/images/boogle-logo.png" alt="logo design">
      </div><!-- item -->
      <div class="item">
        <h3>scroll load</h3>
        <img src="assets/images/scroll-logo.png" alt="logo design">
      </div><!-- item -->
      <div class="item">
        <h3>login system</h3>
        <img src="assets/images/login-logo.png" alt="logo design">
      </div><!-- item -->
      <div class="item">
        <h3>first web project</h3>
        <img src="assets/images/project-web-logo.png" alt="logo design">
      </div><!-- item -->
    </div>
  </section><!-- portfolio -->
  <section id="feedbacks">
    <h2>Feedbacks -What clients are saying about me</h2>
    <div class="content testimonial--content">
      <div class="item">
        <figure>
          <blockquote cite="https://www.huxley.net/bnw/four.html">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cumque quibusdam libero! Aperiam qui unde dolores iste eos, odit laboriosam optio sunt commodi aliquid pariatur nobis dolore! Excepturi, harum possimus.</p>
          </blockquote>
          <figcaption>—John Doe, <cite>CEO, Lorem Digital</cite></figcaption>
        </figure>
      </div><!-- item -->
      <div class="item">
        <figure>
          <blockquote cite="https://www.huxley.net/bnw/four.html">
              <p>Sit amet consectetur adipisicing elit. Neque cumque quibusdam libero! Aperiam qui unde dolores iste eos, odit laboriosam optio sunt commodi aliquid pariatur nobis dolore! Excepturi, harum possimus.</p>
          </blockquote>
          <figcaption>—John Doe, <cite>CEO, Lorem Digital</cite></figcaption>
        </figure>
      </div><!-- item -->
      <div class="item">
        <figure>
          <blockquote cite="https://www.huxley.net/bnw/four.html">
              <p>Consectetur adipisicing elit. Neque cumque quibusdam libero! Aperiam qui unde dolores iste eos, odit laboriosam optio sunt commodi aliquid pariatur nobis dolore! Excepturi, harum possimus.</p>
          </blockquote>
          <figcaption>—John Doe, <cite>CEO, Lorem Digital</cite></figcaption>
        </figure>
      </div><!-- item -->
      <div class="item">
        <figure>
          <blockquote cite="https://www.huxley.net/bnw/four.html">
              <p>Adipisicing elit. Neque cumque quibusdam libero! Aperiam qui unde dolores iste eos, odit laboriosam optio sunt commodi aliquid pariatur nobis dolore! Excepturi, harum possimus.</p>
          </blockquote>
          <figcaption>—John Doe, <cite>CEO, Lorem Digital</cite></figcaption>
        </figure>
      </div><!-- item -->
    </div><!-- .testimonial-content -->
  </section><!-- testimonial -->
  <section id="pricing">
    <h2 class="center">Pricing</h2>
    <p class="center">I charge $25/hour (USD). But if you need any of the following tasks done, see the fixed price below.</p>
    <div class="pricing--content">
      <div class="item">
        <h3>web dev</h3>
        <p class="price">$1500</p>
        <img src="assets/images/web-dev-idea.png" alt="web development price">
        <p class="description">complete website from scratch.</p>
        <a href="#contact">Hire me</a>
      </div><!-- item -->
      <div class="item">
        <h3>small tasks or projects</h3>
        <p class="price">$100 - $300</p>
        <img src="assets/images/taks.png" alt="tasks / projects price">
        <p class="description">can make new or exisitng projects or tasks.</p>
        <a href="#contact">Hire me</a>
      </div><!-- item -->
      <div class="item">
        <h3>game ideas</h3>
        <p class="price">$1500</p>
        <img src="assets/images/game-idea.png" alt="game idea price">
        <p class="description">game ideas and develop existing games.</p>
        <a href="#contact">Hire me</a>
      </div><!-- item -->
    </div><!-- pricing-content -->
  </section><!-- #pricing-->
  <section id="contact">
    <div class="content">
      <h2 class="center">Contact Me</h2>
      <p class="center contact-detail">I am available anytime you want to contact me either by phone or email.
      If you have any further information or details, do not hesitate to contact me and ask whatever you want.
      I do not charge a person if he/she wants help or he/she wants to know more information and details.</p>
      <address>
        <p>Email Me: <a href="mailto:boutros.georges513@gmail.com">boutros.georges513@gmail.com</a></p>
        <p></p>Call me: <a href="tel:+96176126703">+96176126703</a></p>
        <p>Lebanon<br>
          North-Lebanon, Chekka.</p>
      </address>
    </div>
  </section>

  <footer class="site-footer">
    <div class="content site-footer--content">
      <div class="footer-left">
        <p>I am always eager to learn new technologies and frameworks as this field is always evolving. Moreover, I discover my weakpoints and work on getting better and better.

Hobbies
My break time is about gaming or doing sports. I play sports like football, basketball, volleyball, swimming, running and going to gym. On the other hand, I play games like GTA V, NBA2K, FIFA, BattleField, PUBG, Forza Horizon, Generals.</p>
      </div>
      <div class="footer-right">
        <address>
          <p>Email Me: <a href="mailto:boutros.georges513@gmail.com">boutros.georges513@gmail.com</a></p>
          <p></p>Call me: <a href="tel:+96176126703">+96176126703</a></p>
          <p>Lebanon<br>
            North-Lebanon, Chekka.</p>
        </address>
      </div>
    </div>
    <div class="copyright-notice">
      <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script>. All rights reserved.</p>
    </div>
  </footer>
  <?php include 'includes/arrow_to_top.inc.php'; ?>
  <?php include 'includes/progress.inc.php'; ?>
  <script src="js/script.js"></script>
</body>
</html>
