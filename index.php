<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--ICONS LINK-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!--BOOTSTRAP LINK-->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <!-- LINK FOR AOS-->
    <link rel="stylesheet" href="aos.css">
    <script src="aos.js"></script>

    <!--MAIN.CSS LINK-->
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>

  <!--SOCIAL MEDIA BAR-->
    <div class="above">
      <a href="https://www.instagram.com/ucoe_mumbai/"><span class="fab fa-instagram"></span>
      <a href="https://www.facebook.com/UCoEKaman/"><span class="fab fa-facebook-f"></span>
      <a href="#twitter"><span class="fab fa-twitter"></span>
    </div>

    <!--NAVIGATION BAR-->
    <div class="header">
      <a href="#default" class="logo">Universal College of Engineering</a>
      <div class="header-right">
        <a class="active" href="#home">Home</a>
        <a class="seminar" href="seminar.php">Seminar</a>
        <a class="apply" href="apply.php">Apply</a>
        <a href="#contact">Contact</a>
        <a href="#aboutus">About</a>
      </div>
    </div>

    <!--WALLPAPER-->
    <div class="wallpaper" style="position: relative;">
    <img
      class="fill"
      src="photo-1454165804606-c3d57bc86b40.jpg"
      alt="office"
      style="width: 100%; height: auto; z-index: -1; position: relative"
    />
    <div class="overlay">
      Get ready for industry
      <p style="font-size: 24px;font-weight: 500;"> Get adequate training for company from industry experts </p>
    </div>
    </div>
    <br />

    <!--CARDS-->
    <div class="row" style="margin: -70px 30px 0px 30px; z-index: 3">
      <div class="column">
        <div class="card" style="background-color: #00334e">
          <span class="far fa-building"></span>
          <h3>45</h3>
          <p>Companies</p>
        </div>
      </div>

      <div class="column">
        <div class="card" style="background-color: #145374">
          <span class="fas fa-user-tie"></span>
          <h3>2000+</h3>
          <p>Students</p>
        </div>
      </div>

      <div class="column">
        <div class="card" style="background-color: #00334e">
          <span class="fas fa-headset"></span>
          <h3>300+</h3>
          <p>Seminar</p>
        </div>
      </div>

      <div class="column">
        <div class="card" style="background-color: #145374">
          <span class="far fa-clipboard"></span>
          <h3>3000+</h3>
          <p>Applicants</p>
        </div>
      </div>
    </div>
    <br /><br />


    <!--ABOUT US -->
    <div data-aos="fade-up">
    <div class="container" id="aboutus">
      <h1 class="element">ABOUT US</h1>
      <br />
      <div class="row">
        <div class="col-md-6">
          <img src="induction.jpg" alt="Induction" style="width: 100%" />
        </div>

        <div class="col-md-6" id="aboutustxt">
          The Training and Placement (T&P) department is located at Universal
          College of Engineering, Kaman-Vasai. The T&P department centrally
          handles placement for the students graduating in engineering programs.
          The T&P department provides complete support to the visiting companies
          at every stage of the placement process and arranging for
          pre-placement talks, online tests, written tests, interviews and group
          discussions are made as per the requirements.
          <br />We welcome all aspirants to create an incredible legacy in the
          field of Computer, Civil, Electronics, Information Technology and
          Electronics and Telecommunication Engineering. <br /><br />
          <button class="btn btn-light">
            Read More <span class="fa fa-angle-right"></span>
          </button>
        </div>
      </div>
</div>
</div>
<br><br>
      <!--PROMINENT RECRUTIERS-->

      <div data-aos="fade-up">
      <div class="container" id="aboutus">
      <h1 class="element">OUR PROMINENT RECRUTIERS</h1>
      <br />
      <div class="row">
        <div class="col-md-6" id="aboutustxt">
          UCOE has an enviable record in placement of students. The institute
          has been accredited by major companies like Infosys, Tata Consultancy
          Services, Accenture, iGate and Tech-Mahindra etc.<br /><br>
          At present more than 45 companies are visiting for campus recruitment
          every year and almost all eligible students are placed through campus.
          Special efforts are also taken to place the noneligible students.
<br><br>
         <a href = "apply.php"> <button class="btn btn-primary" style="background-color: #145374;">Apply for Company</button></a>
        </div>

        <div class="col-md-6">
          <img id="myImg" src="company1.jpg"/>
        </div>
      </div>
    </div>
</div>

<!-- The Modal to open up an image-->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>


<!--JS CODE TO OPEN UP MODAL-->
<script>
var modal = document.getElementById("myModal");

var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
  modal.style.display = "none";
}
</script>
  

<br><br>

<!--PREVIOUS YEAR REPORTS-->
<div data-aos="fade-up">
<h1 class="element">PREVIOUS YEAR REPORTS</h1>
<div class="slideshow-container">

<div class="mySlides ">
  <div class="numbertext">1 / 4</div>
  <img src="g1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides ">
  <div class="numbertext">2 / 4</div>
  <img src="g2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides ">
  <div class="numbertext">3 / 4</div>
  <img src="g3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides ">
  <div class="numbertext">4 / 4</div>
  <img src="g4.jpg" style="width:100%">
  <div class="text"></div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
</div>


<!--JS CODE FOR SLIDESHOW-->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

//SCROLLING JS 
AOS.init();
</script>
<br><br>
<!--CONTACT US -->
<div data-aos="fade-up" id="contact">
<div class="container"  id="aboutus">
  <h1 class="element">CONTACT US</h1>
<br>

<div class="row">
  <div class="col-md-6" >
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.429316804004!2d72.91444451490541!3d19.350554786931003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a56dd564fc65%3A0xdedc6f62731ee7eb!2sUniversal%20College%20of%20Engineering%20Mumbai!5e0!3m2!1sen!2sin!4v1600005804412!5m2!1sen!2sin" width="470" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>

  <div class="col-md-1" id="contactdetails style="background-color:#00334E;padding-top:60px;">
  <p><span class="fas fa-map-marker-alt"> </span></p><br>
  <p><span class="fas fa-phone"> </span></p><br>
  <p><span class="fas fa-envelope"> </span></p><br>
  </div>
  
  <div class="col-md-5" style="margin-left: -40px;">
  Near Bhajansons & Punyadham Kaman, Bhiwandi Rd, Vasai-Virar, Maharashtra 401208 <br><br>
  <p>080070 00755</p><br>
  <p>universal@gmail.com</p>
  </div>
  </div>
</div>
</div>


<footer>
  Copyright Reserved @2020 proudly created by Universal College of Engineering.
</footer>
</body>
</html>
