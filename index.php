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
        <link rel='stylesheet' href='styles/style.css' type='text/css'>
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
 
    </head>
 <?php include "includes/nav.php";?>
   <style>
  
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
 
    

        


    </style>
    <body>
        
      
                    <section class="header">
                        <div classs="container">
                       
                       
                        <div class="home">
                   
                    <img src='img/Guddu.jpg' class='wow fadeInDown animated'>
                    <div class="animated-text" >
                        <h3 class='welcome_text' style="color:white">Hello,my name is</h3>
                        <h1 class='text-2 wow fadeInLeft animated' style="color:white">Saikat Paul Chowdhury</h1>
                        <h4 class='welcome_text' style="color:white">And i'm a</h4><br>
                        <h2 class="ml4">
                            <span class="letters letters-1">Web Developer</span>
                           

                        </h2>
                       
                           <a href="#"  class='btn btn-success home-btn show_popup_form' style="width:30%;margin-top:40px">Hire Me</a>
                    </div>
               
                      
                    </div>
                   </div>
                 </section>
 <div class="modal popup_form" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
      
      <div class="container-fluid bg-dark" style="color:white; padding: 35px;" id="registration-form">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" >&times;</span>
        </button>
	<h3 class="text-center">Book a Demo</h3>
	<h5 class="text-center text-warning">Fill in your details below</h5>
	
	<div class="row">
		<div class="col-sm-12">
       <form id="test1" method="POST" action='' enctype="multipart/form-data">
          <div class="form-group">
            <label>Name</label>
            <input type='text' name='name' class='form-control'  placeholder="Enter Name"  required >
        </div>
          <div class="form-group">
            <label>Email</label>
            <input type='text' name='email' class='form-control'  placeholder="Enter Email" required >
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea type='text' name='message' class='form-control'  placeholder="Enter Message" required ></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
          </div>
          </div>
        </form>
<script>
$(document).ready(function(){
  $('.show_popup_form').click(function(){
    $('.popup_form').modal('show');
    
    
  })



});
</script>

<script>
        $(document).ready(function(){
            $('#test1').submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:'includes/data.php',
                    method:'POST',
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

        <script src= "scripts/travel.js"></script>
    </body>
</html>