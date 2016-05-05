<?php require_once("/includes/dbconn.php");?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>  
<script src="js/custom.js"></script>

<link rel="stylesheet" href="css/banner.css" media="screen" />
<link rel="stylesheet" href="css/settings.css" media="screen" />

 
  <meta charset="utf-8">
  <title>BCA Project- WMO</title>
  <meta name="description" content="">
  <meta name="author" content="">  
<?php include_once "/includes/css.php";?>
</head>
<body>
<?php include_once("/includes/header.php");?>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->




<!-- - - - - - - - - - - - - Slider - - - - - - - - - - - - - - - --> 
  
  <div class="fullwidthbanner-container"> 
    
    <div class="fullwidthbanner">
      
      <ul>  

        <!-- FADE -->
    
      
        <li data-transition="fade" data-slotamount="7" data-thumb="images/thumbs/thumb2.jpg"> 

          <img src="images/slides/slide-2.jpg" alt="">
                  
          <div class="caption lft big_yellow_dark_back"  data-x="20" data-y="100" data-speed="400" data-start="1300" data-easing="easeOutExpo">Whatever it takes to do</div>
          <div class="caption lft big_white_back"  data-x="20" data-y="146" data-speed="300" data-start="1550" data-easing="easeOutExpo">whatever God says</div>
          <div class="caption sfb medium_text"  data-x="20" data-y="240" data-speed="800" data-start="1800" data-easing="easeOutBack">Lorem ipsum dolor consectetur adipiscing</div>
          <div class="caption sfb medium_text"  data-x="20" data-y="276" data-speed="800" data-start="1800" data-easing="easeOutBack">nulla aliquet varius purus</div>
        </li>
           
           <li data-transition="fade" data-slotamount="10">                     

          <img src="images/slides/thumb1.jpg" alt=""  data-thumb="images/thumbs/thumb1.jpg">
          
          <div class="caption sfb" data-x="150" data-y="-50" data-speed="900" data-easing="easeOutSine" data-start="500"><img src="images/slides/cloud.jpg" alt=""></div>
          <div class="caption lfr" data-x="365" data-y="20" data-speed="400" data-start="800"><img src="images/slides/men.png" alt=""></div>
          <div class="caption sft big_black2"  data-x="20" data-y="140" data-speed="900" data-start="1300" data-easing="easeOutBack">Shared on www.MafiaShare.net</style></div>
          <div class="caption sft small_text"  data-x="20" data-y="210" data-speed="900" data-start="1500" data-easing="easeOutBack">Lorem ipsum dolor sit amet, consectetur adipisc nulla iaculis aliquet augue, eu varius purus.</div>
          <div class="caption sfb" data-x="20" data-y="320" data-speed="750" data-start="1900" data-easing="easeOutExpo"><a class="button dark small" href="#">Learn More</a></div>
        </li>
            

           <li data-transition="fade" data-slotamount="10">                     

          <img src="images/slides/slide-5.jpg" alt=""  data-thumb="images/thumbs/thumb1.jpg">
          
          <div class="caption sfb" data-x="200" data-y="-50" data-speed="900" data-easing="easeOutSine" data-start="500"><img src="images/slides/cloud.jpg" alt=""></div>
          <div class="caption lfr" data-x="520" data-y="20" data-speed="400" data-start="800"><img src="images/slides/men2.png" alt=""></div>
          <div class="caption sft big_black"  data-x="10" data-y="190" data-speed="900" data-start="1300" data-easing="easeOutBack">Shared on www.MafiaShare.net</div>
          <div class="caption sft medium_black"  data-x="10" data-y="240" data-speed="900" data-start="1300" data-easing="easeOutBack">Start a New Way of Living!</div>
    
        </li>

            
        <!-- SLIDELEFT -->                
      </ul>
      
    </div><!--/ .fullwidthbanner--> 
    
  </div><!--/ .fullwidthbanner-container-->

  <!-- - - - - - - - - - - - - end Slider - - - - - - - - - - - - - - -->



  
  <div class="container">
    
<section id="middle">
    <div class="row line"></div>
    <div class="row">
        <div class="two-thirds column left">
            <p>WMO Arts And Science College, an institution run by backward minority community was established in 1995 by Wayand muslim orphanage responding to the local needs on higher level Education affliated to the University of Calicut . Majority of the people of this area belongs to scheduled caste, scheduled tribe, muslims and other backward communities, as they were not in a position to acquire higher learning. At this moment orphanage committee rose to a situation to plan and start a college . Hence the aim of this college is to uplift the educational level of all citizens irrespective of caste, creed, religion of general and backward minorities, orphans and destitute in particular.</p>
            <p>The department of Computer science was established in the year 1995 along with the inception of the college, at that initial stage it offered complementary courses to Physics, Mathematics and Electronics. The BCA degree course was started in the year 2013 and the department was formed into a unique Computer learning department upgrading the department of Computer science, at present department of Computer science provide 24 seats for BCA course.</p>
        </div>
        <div class="one-third column right">
        <h5><u>Notifications</u></h5>
          <ul class="notifications scroll">
            <marquee  direction="down" scrollamount="3">
              <?php
                $sql = "SELECT * FROM notifications";
                if($result = mysqli_query($conn, $sql)){
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){  
                        $id=$row['id']; 
                        $title=$row['title'];                       
                         echo "<li><a href=\"notifications.php?id=$id\">" . $title . "</a></li>";                         
                    }
                 // Close result set
                    mysqli_free_result($result);
                  } else{
                 echo "No New Notifications";
                    }
                } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
          
                // Close connection
               mysqli_close($conn);
              ?>   
            </marquee>
</ul>
<div class="container">
            <h5><u>Login</u></h5>
            <div class="row loginform">
            <form class="loginform" method="post" action="auth.php">
              <div class="row">
                 <label for="username">Email</label>
                    <input class="u-full-width" type="text" placeholder="username" id="username" name="username">
              </div>
              <div class="row">
                  <label for="password">Password</label>
                    <input class="u-full-width" type="password" placeholder="password" id="password" name="password">
              </div>
               <input class="button-primary" type="submit" value="Login">
            </form>
            </div><!--login form row end--> 
</div>
        </div>
    </div>
</section>
</div>
<!--end of container-->
<?php include_once("includes/footer.php");?>

