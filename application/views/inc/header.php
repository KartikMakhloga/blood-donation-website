<head>

     <title>Blood Donation Portal</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     <style>
.dropbtn {
  background-color: #a5c422;
  color: white;
  padding: 16px;
  font-size: 12px;
  border: none;
  border-radius: 28px;
  font-weight: bolder;
  margin: 2px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

</head>

<header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to Blood donation Portal</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 1800 890 6027</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 9:00 AM - 5:00 PM (Mon-Sat)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@gehu.com</a></span>
                    </div>

               </div>
          </div>
     </header>
        <!-- MENU -->
        <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->

                    <a href="<?php echo MAINSITE; ?>" class="navbar-brand">Blood Donation</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="http://localhost/new_project/" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <li class=""><a href="#appointment" style="color:red;font-weight:bolder;">Donate Blood</a></li>
                         <!-- Example single danger button -->
                         <?php if($this->session->userdata('sess_user_id')>0){?>
                         <div class="dropdown">
                         <button class="dropbtn">Settings</button>
                         <div class="dropdown-content">
                         <a href="<?php echo MAINSITE.'profile'; ?>">Profile</a>
                         <a href="<?php echo MAINSITE.'change_password'; ?>">Change Password</a>
   
                         <a href="<?php echo MAINSITE.'index.php/logout'; ?>" class="smoothScroll">Logout</a>
                        
                         </div>
                         </div>
                         <?php }?>
                      
                    </ul>
                    
               </div>
               
               

          </div>
     </section>
     <!-- appointment-btn -->
     