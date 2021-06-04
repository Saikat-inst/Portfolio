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
        <link rel='stylesheet' href='styles/style1.css' type='text/css'>
        <script src='scripts/theme.js'></script>
        <!--Text Animation-->
        <link rel="stylesheet" href='styles/animated-text.css' type='text/css'>
        <!--FontAwesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- ALERTIFY CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="styles/animate.css">
 <!-- Default theme -->
 <script src='scripts/js/wow.min.js'></script>
    </head>
<?php include "includes/nav.php";?>
<style>
        
        .get_in_touch{
  max-width: 1100px;
  margin: 50px auto;
  position: relative;
  box-shadow: 0px 14px 30px 15px rgba(0,0,0,0.1);
  padding: 30px;
} 

.get_in_touch .title {
  text-transform: uppercase;
  text-align: center;
  letter-spacing: 3px;
  font-size: 3em;
  line-height: 48px;
  padding-top: 20px;
  color: #5543ca;
  background:linear-gradient(to right,#f4524d 0%,#5543ca 100%);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;

}
.get_in_touch .contact-info{
  background-image: url("img/blackbg.jpg");
   height: 500px;  
}
.icon-heading{
  color: white;
  padding-left: 15px;
}
.icon p{
  color:white;
  margin-left: 15px;
}
 .fa-address-book , .fa-phone-square, .fa-envelope{
  margin-right:20px;
}
.get_in_touch .info-heading {
  text-transform: uppercase;
  text-align: center;
  letter-spacing: 2px;
  font-size: 2em;
  line-height: 58px;
  padding-top: 20px;
  color: #5543ca;
  background:linear-gradient(to right,#f4524d 0%,#5543ca 100%);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;

}
.google-map{
  width: 100%;
  height: 100%;
}

.contact-form .form-field{
  position: relative;
  margin: 32px 0;

}
 @media screen and (max-width: 750px) {
  .contact-form{
    width: 100%;
    display: block;
  }
  .get_in_touch .contact-info{
    height:300px;
  }
}
@media screen and (max-width: 750px) {
  .google-map iframe{
    width: 100%;
    height: 350px;
  }
}


.contact-form .input-text{
  display: block;
  width: 100%;
  height: 36px;
  border-width:0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus{
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label{
  transform: translateY(-24px); 
}

.contact-form .label{
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 35px;
  color: #5543ca;
  cursor: text;
  text-transform: capitalize;
  transition: transform 0.2s ease-in-out;
   font-weight: 400;
}
.contact-form .submit-btn{
  display: inline-block;
  background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing:2px;
  font-size: 16px;
  padding:8px 16px;
  border:none;
  width: 200px;
  cursor: pointer;
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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
        
   
       
        </style>
    <!--About Section-->
    
                   
    
            <div class="container"style="margin-top:80px;" >
            <section class="get_in_touch" style='background-color:#ffffff'>
      <div class="container-fluid">
      <div class="row">
  <div class="contact-info col-lg-4 col-sm-12">
    <h4 class="info-heading">Contact Info</h4>
    <div class="icon">
      <h5 class="icon-heading"><i class="fa fa-address-book" aria-hidden="true"></i></i>Address</h5>
      <P>Deshbandupara,Siliguri | Gamma1,Greater Noida</p>
    </div>
    <div class="icon">
      <h5 class="icon-heading"><i class="fa fa-phone-square" aria-hidden="true"></i>Phone</h5>
      <p>6295250331 | 7865029157</p>
    </div>
    <div class="icon">
      <h5 class="icon-heading"><i class="fa fa-envelope" aria-hidden="true"></i>Email</h5>
      <p>Saikatpaul406@gmail.com</p>
    </div>
  </div>
  <div class="col-lg-8 col-sm-12">
  <h4 class="title">Contact us</h4>
  
       
    <div class="contact-form row">
      <div class="form-field col-lg-12">
      <form id="test" action="" method="POST">
        <input id="name" type="text" class="input-text" placeholder="Enter Name" name="name" required>
      
      </div>
      <div class="form-field col-lg-12">
         <input id="email" type="email" class="input-text" placeholder="Enter Email" name="email" required>
       
      </div>
      <div class="form-field col-lg-12">
         <input id="message" type="text" class="input-text" placeholder="Enter Message" name="message" required>
        
      </div>
      <div class="form-field col-lg-12 d-flex justify-content-center align-item-center">
      <input type="submit" value="submit" name="submit" class="submit-btn"></button>
      </div>
    </div>
   </form>
    
</div>
    </div>
    

     
  
</section>

<script>
        $(document).ready(function(){
            $('#test').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:'includes/data.php',
                    method:'post',
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    success:function(ob){
                    alertify.success(ob);
                    }

                })



            })




        });
           
</script>

   

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="scripts/animated-text.js"></script>
    <script src= "scripts/travel.js"></script>
  
</body>
</html>