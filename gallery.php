<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Saikat Portfolio</title>
        <!--jQuery--->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <!--External Libraries-->
        <script src='scripts/theme.js'></script>
        <!--Text Animation-->
        <link rel="stylesheet" href='styles/animated-text.css' type='text/css'>
        <!--FontAwesome-->
        <link rel='stylesheet' href='styles/style.css' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- ALERTIFY CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="styles/animate.css">
 <!-- Default theme -->
 <script src='scripts/js/wow.min.js'></script>
    </head>
<?php include "includes/nav.php";?>
 <style>
  body{
    background-color:black;
  }
 .flex-container{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  position: relative;
}

.flex-container .image{
  margin: 7px;
  position: relative;
  }
.flex-container .image div{
  visibility: hidden;
   position: absolute;
   bottom: 0;
   right: 0;
 background: black;
 color: white;
 font-weight: bold;
 margin-bottom: 5px;
 opacity: 0;
 visibility: hidden;

  }

.flex-container image:hover{
 cursor: pointer;
}

.flex-container .image:hover div{
 width: 100px;
padding: 9px 15px;
 visibility: visible;
 opacity: 0.9;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.sidenav1 .openbtn{
      font-size:40px;
      float:right;
      margin-top:-90px;
      text-decoration: none;
      color:white;
      

  }
.point{
    cursor:pointer;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
        
   


 </style>

 <body>

 
 <div class="container"style="margin-top:80px;">
   <center><h2 style="font-size:30px;color:white"> Gallery </h2></center>
 <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
<div class="flex-container pt-3">
  <div class="image wow fadeInLeft animated">
    <img src="img/Guddu1.jpg" alt="First slide" style="height: 200px;  width: 300px; cursor:pointer;" data-target="#carouselExample" data-slide-to="0">
    <div class="point">Click here</div>
  </div>
  <div class="image wow fadeInLeft animated">
    <img src="img/Guddu.jpg" alt="First slide" style="height: 200px;  width: 300px; cursor:pointer;" data-target="#carouselExample" data-slide-to="1">
    <div class="point">Click here</div>
  </div>
  <div class="image wow fadeInLeft animated">
    <img src="img/Guddu2.jpg" alt="First slide" style="height: 200px;  width: 300px; cursor:pointer;" data-target="#carouselExample" data-slide-to="2">
    <div class="point">Click here</div>
  </div>
  <div class="image wow fadeInLeft animated">
    <img src="img/Guddu3.jpg" alt="First slide" style="height: 200px;  width: 300px; cursor:pointer;" data-target="#carouselExample" data-slide-to="3">
    <div class="point">Click here</div>
  </div>
  <div class="image wow fadeInLeft animated">
    <img src="img/Guddu4.jpg" alt="First slide" style="height: 200px;  width: 300px; cursor:pointer;" data-target="#carouselExample" data-slide-to="4">
    <div class="point">Click here</div>
  </div>
  <div class="imagewow fadeInLeft animated">
    <img src="img/Guddu5.jpg" alt="First slide" style="height: 200px;  width: 300px; cursor:pointer;" data-target="#carouselExample" data-slide-to="5">
    <div class="point">Click here</div>
  </div>
  <div class="image wow fadeInLeft animated">
    <img src="img/Guddu6.jpg" alt="First slide" style="height: 200px;  width: 300px; cursor:pointer;" data-target="#carouselExample" data-slide-to="6">
    <div class="point">Click here</div>
  </div>
  <div class="image wow fadeInLeft animated">
    <img src="img/Guddu1.jpg" alt="First slide" style="height: 200px;  width: 300px; cursor:pointer;" data-target="#carouselExample" data-slide-to="7">
    <div class="point">Click here</div>
  </div>
  <div class="image wow fadeInLeft animated">
    <img src="img/Guddu5.jpg" alt="First slide" style="height: 200px;  width: 300px; cursor:pointer;" data-target="#carouselExample" data-slide-to="7">
    <div class="point">Click here</div>
  </div>
</div>
</div>


<!-- Modal -->
<!-- 
This part is straight out of Bootstrap docs. Just a carousel inside a modal.
-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
            <li data-target="#carouselExample" data-slide-to="3"></li>
            <li data-target="#carouselExample" data-slide-to="4"></li>
            <li data-target="#carouselExample" data-slide-to="5"></li>
            <li data-target="#carouselExample" data-slide-to="6"></li>
            <li data-target="#carouselExample" data-slide-to="7"></li>
            <li data-target="#carouselExample" data-slide-to="8"></li>
           
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/Guddu1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/Guddu.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/Guddu2.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/Guddu3.jpg" alt="Fourth slide">
            </div>
           <div class="carousel-item">
              <img class="d-block w-100" src="img/Guddu4.jpg" alt="Fifth slide">
            </div>
           <div class="carousel-item">
              <img class="d-block w-100" src="img/Guddu5.jpg" alt="sixth slide">
            </div>
           <div class="carousel-item">
              <img class="d-block w-100" src="img/Guddu6.jpg" alt="seventh slide">
            </div>
           <div class="carousel-item">
              <img class="d-block w-100" src="img/Guddu1.jpg" alt="eighth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/Guddu5.jpg" alt="eighth slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





 </body>
    <script src= "scripts/travel.js"></script>
  
</body>
</html>