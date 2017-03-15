<?php 
    session_start();
    require_once("../include/configdb.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="This is the official website for the Desoto Central Highschool Robotics Club">
  <meta name="keywords" content="DCHS, Robotics, Robotics Club, Desoto Central">
  <meta name="author" content="Blake Hastings">    
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>DCHS Robotics Club</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">    
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.css?ver=<?php echo filemtime('css/materialize.css');?>">
 <link rel="stylesheet" type="text/css" href="css/style.css?ver=<?php echo filemtime('css/style.css');?>">    
<!-- AOS -->
<!-- JavaScript -->
   
</head>
<body>
<!-- NavBar -->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large light-blue" href="#modal1">
      <i class="large material-icons">comment</i>
    </a>
  </div>

  <!-- Modal1 Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h3 class="select center">Contact Form</h3>
    <div class="divider" style="margin-bottom: 10%;"></div>
      <div class="row">
    <form class="col s12" action="email.php" method="post">
      <div class="row">
        <div class="input-field col s12">
          <input name="name" id="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 ">
          <input name="email" id="email" type="email" class="validate">
          <label for="email" data-error="Must be a valid email">Email</label>
        </div>
        
      </div>
      <div class="row">
        <div class="row">
        <div class="input-field col s12">
          <textarea name="message" id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
      </div>
        <?php
         if(isset($_GET['em'])) { 
             if($_GET['em'] == 2) {
              echo '
              <div class="row">
               <div class="col s12 m6 offset-m3 failedlogin-cont">
                <h6 class="center failedlogin">Illegitimate Name Or Email!</h6>
                </div>
              </div>    
                ';
             }else{
              if($_GET['em'] == 1) {
              echo '
              <div class="row">
               <div class="col s12 m6 offset-m3 successMessage-cont">
                <h6 class="center successMessage">Successfully Sent Email!</h6>
                </div>
              </div>    
                ';
             }
             }
          };
        ?>   
  </div>
      </div>
    <div class="modal-footer" style="padding: 0!important; margin: 0!important;">
      <div class="row login-submit" style="height: 100%;">
        <div class=" col s12 center login-submit" style="height: 100%;">
            <input value="SUBMIT"class="login-submit" type="submit" style="margin-top: 1%; height:100%;">
        </div>
        </div>
  </div>
      </form>
      
</div>
    </div>
  <!-- Modal2 Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h2 class="join-select center">Enter Username and Password</h2> 
      <div class="divider"></div>
      
      <div class="row" style="">
        <form action="login.php" method="post">
        
        <div class="input-field col s12 m4 offset-m4">
         <input id="username" type="text" name="uid">
         <label for="username">Username</label>
        
        </div>
        
        <div class="input-field col s12 m4 offset-m4">
         <input id="password" type="password" name="pwd">
         <label for="password">Password</label>
        
        </div>
        </div>
        <?php 
          
          if(isset($_GET['result'])) { 
             if($_GET['result'] == 1)
              echo '
              <div class="row">
               <div class="col s12 m6 offset-m3 failedlogin-cont">
                <h6 class="center failedlogin">Inorrect Username or Password!</h6>
                </div>
              </div>    
                ';
             
              
          };
        ?>  
        <div class="row login-submit">
        <div class=" col s12 center login-submit">
            <input value="SUBMIT"class="login-submit" type="submit" style="margin-top: 1%;">
        </div>
        </div>
          </form>
</div>
    </div>
  <!--Modal3 Structure-->
  <div id="modal3" class="modal">
    <div class="modal-content">
      <h2 class="join-select center">Customize your profile card</h2> 
      <div class="divider"></div>
      <form action="profile.php" method="post" enctype="multipart/form-data" style="padding-top: 10px;">
        
    <div class="row">    
        <div class="col s12 m6 offset-m3">
        <h4 class="join-select center">Identification</h4>
            <div class="divider"></div>
        </div>
    </div>
          
    <div class="row">
        <div class="input-field col s12 m3 offset-m3">
         <input id="first" type="text" name="first">
         <label for="first">First Name</label>
        
        </div>
        
        <div class="input-field col s12 m3 ">
         <input id="last" type="text" name="last">
         <label for="last">Last</label>
        
        </div>
     </div>
          
    <div class="row">
        <div class="input-field col s12 m6 offset-m3">
         <input id="position" type="text" name="pos">
         <label for="position">Position</label>
        </div>
    </div>
          
    <div class="row">    
        <div class="col s12 m6 offset-m3">
        <h4 class="join-select center">Profile Picture</h4>
            <div class="divider"></div>
        </div>
    </div>
          
    <div class="row">
        <div class="input-field col s12 m6 offset-m3">
             <div class="file-field input-field">
               <div class="btn">
                 <span>File</span>
                 <input type="file" name="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
              </div>
        </div>
            
        </div>
    
        <div class="row login-submit">
        <div class=" col s12 center login-submit">
            <input value="SUBMIT"class="login-submit" type="submit" style="margin-top: 1%;">
        </div>
        </div>
          </form>
</div>
    </div>
  <!--Modal4 Structure-->
   <div id="modal4" class="modal">
    <div class="modal-content">
      <h4 class="center">ATTENTION</h4>
      <p class="flow-text">Keep in mind this site is not finished and is being actively worked on. Most content on the site is currently filler until the actual content is added. Any bugs will be fixed by the end of the development period.<br> -Blake Hastings</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">ok!</a>
    </div>
  </div>    
    <!--header image-->
    
<div class="header">
<video autoplay loop poster="background4.png" id="bgvid">
    <source src="header-vid1.mp4" tyle="video/mp4">
</video>
    </div>

    
  


    <div class="section z-depth-4">
    <h3 class="center select">Select One</h3>
    <div class="divider"></div>
      <!--   Icon Section   -->
      <div class="row " style="margin: 0;">
        <div id="event" class="col s12 m4 navbut ">
          <div class="">
            <h2 class="center light-blue-text"><i class="material-icons large icon cursorP">assistant_photo</i></h2>
              <h5 class="center cursorP">Events</h5>
          </div>
        </div>

        <div id="about" class="col s12 m4 navbut">
                 <div class=" ">
            <h2 class="center light-blue-text"><i class="material-icons large icon cursorP">info</i></h2>
            <h5 class="center cursorP">About Us</h5>
          </div>
        </div>

        <div id="members" class="col s12 m4 navbut">
                <div class="  ">
            <h2 class="center light-blue-text"><i class="material-icons large icon cursorP">supervisor_account</i></h2>
            <h5 class="center cursorP">Members</h5>
          </div>
        </div>
      </div>
<!--Second Row-->
    <div class="row " style="margin: 0;">
        <div id="join" class="col s12 m4 navbut ">
          <div class="">
            <h2 class="center light-blue-text"><i class="material-icons large icon cursorP">person_add</i></h2>
              <h5 class="center cursorP">Join Us</h5>
          </div>
        </div>
          <div id="sponsor" class="col s12 m4 navbut" >
            <h2 class="center light-blue-text"><i class="material-icons large icon cursorP">settings</i></h2>
              <h5 class="center cursorP">Sponsors</h5>
        </div>
    <div id="media" class="col s12 m4 navbut ">
          <div class="">
            <h2 class="center light-blue-text"><i class="material-icons large icon cursorP">camera</i></h2>
              <h5 class="center cursorP">Media</h5>
          </div>
        </div>
    </div>
    </div>
 <!--Start of event-dis-->   
<div id="event-dis" class="event-dis" style="padding: 0px; margin-bottom: 0;">
<div class="divider"></div>
<div class="row"> 
    <ul class="tabs center">
        <li class="tab col s12"><a class="blue-text active">Events</a></li>
        <div class="indicator blue" style="z-index:1"></div>
    </ul>
    </div>
      <div id="comp" class="event-wrapper">
    <div class="row">
        <!--
        <div class="col s12 m6 l4">
            <div class="card horizontal event-card hoverable">
            <div class="card-image">
              <img class="responsive-img" src="img/robo.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
                <i class="material-icons small">date_range</i>
                <div class="divider"></div>
                <p clas="card-date">2/21/17 &nbsp;&nbsp;&nbsp;6:30p-8:00pm</p>
                <i class="material-icons small">info_outline</i>
                <div class="divider"></div>
                <p class="">We are hosting an open house for the community and our sponsors
                    to see our new lab!</p>
                <!--<div class="divider"></div>
                    <a target="_blank" href="http://www.firstinspires.org/robotics/ftc/game-and-season" class="">MORE INFO</a>
            </div>
          </div>
        </div> 
        -->
    <div class="col s12 m4  offset-m4">    
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="img/robo.png" alt="DCHS Robotics Logo">
            </div>
            <div class="card-content center">
              <span class="card-title activator grey-text text-darken-4">Open House<i class="material-icons right">more_vert</i></span>
             
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Open House<i class="material-icons right">close</i></span>
              <div class="row center" style="margin-top: 10%;">
                <div class="col s12 l12">
                 <i class="material-icons small">date_range</i>
                <div class="divider"></div>
                <p clas="card-date">2/21/17<br>6:30p-8:00pm</p> 
                </div>
                
                <div class="col s12 l12">
                 <i class="material-icons small">info_outline</i>
                <div class="divider"></div>
                <p clas="card-date">We are hosting an open house at the Desoto Central Highschool campus to show all sponsors the lab the students will be using to construct the various contraptions required by competitions. </p> 
                </div>  
              </div>
                
            </div>
        </div>
    </div>
  <!--
        <div class="col s12 m6 l4">
                     <div class="card horizontal event-card hoverable">
            <div class="card-image">
              <img class="responsive-img" src="vortex.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
                <i class="material-icons small">date_range</i>
                <div class="divider"></div>
                <p clas="card-date">1/28/16</p>
                <i class="material-icons small">info_outline</i>
                <div class="divider"></div>
                <p class="">Velocity Vortex is the first event<br> sponsored by qualcom</p>
                <div class="divider"></div>
                    <a target="_blank" href="http://www.firstinspires.org/robotics/ftc/game-and-season" class="">MORE INFO</a>
            </div>
          </div>
        </div>
-->
    </div>
    </div>
    </div>
    
<!-- Start of About-Dis -->
<div id="about-dis" class="about-dis">
    <div class="divider"></div>
<div class="row"> 
    <ul class="tabs center">
        <li class="tab col s12"><a class="blue-text active">About</a></li>
        <div class="indicator blue" style="z-index:1"></div>
    </ul>
    </div>

<div class="row"> 
    <h3 class="select center">General</h3>
    <hr>
    <div class="col s12 m4">
        <div class="card  join-card-top center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">map</i>
            <h3 class="center join-select">Location</h3>
            <div class="divider"></div> 
            <p class="flow-text">Desoto Central Highschool, <br> 2911 Central Parkway <br> Southaven, MS 38672</p>
            </div>
       </div>
        </div>
    <div class="col s12 m4">
        <div class="card  join-card-top center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">people</i>
            <h3 class="center join-select">People</h3>
            <div class="divider"></div> 
            <p class="flow-text">All students that are active in the robotics club are in grades 10-12. To see the full list navigate to the Members Tab.</p>
            </div>
       </div>
        </div>
    
    <div class="col s12 m4">
        <div class="card  join-card-top center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">assignment</i>
            <h3 class="center join-select">Meetings </h3>
            <div class="divider"></div> 
            <p class="flow-text">All meetings are displayed under the events section, and announced on Our Edmodo</p>
            </div>
       </div>
        </div>
    <h3 class="select center">In Depth</h3>
    <hr>
    
    <div class="col s12 m4">
        <div class="card  join-card-top center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">build</i>
            <h3 class="center join-select">What We do</h3>
            <div class="divider"></div> 
            <p class="flow-text">The DCHS Robotics team builds various physics and robotics based contramptions in an attempt to beat other teams at the various competitions and further their knowledge in the STEM field.</p>
            </div>
       </div>
        </div>
    <!--
    <div class="col s12 m4">
        <div class="card  join-card-top center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">build</i>
            <h3 class="center join-select">What We do</h3>
            <div class="divider"></div> 
            <p class="flow-text">All students that want to join DCHS robotics must have A's & B's. This must persist throughout the school year.</p>
            </div>
       </div>
        </div>
    
    <div class="col s12 m4">
        <div class="card  join-card-top center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">build</i>
            <h3 class="center join-select">What We do</h3>
            <div class="divider"></div> 
            <p class="flow-text">All students that want to join DCHS robotics must have A's & B's. This must persist throughout the school year.</p>
            </div>
       </div>
        </div>
    
    <div class="col s12 m4">
        <div class="card  join-card-top center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">build</i>
            <h3 class="center join-select">What We do</h3>
            <div class="divider"></div> 
            <p class="flow-text">All students that want to join DCHS robotics must have A's & B's. This must persist throughout the school year.</p>
            </div>
       </div>
        </div>
    -->
    </div>
    </div>
<!-- Start of members-dis-->    
<div id="members-dis" class="members-dis">
   <div class="divider"></div>
<div class="row" style="margin=0px;"> 
    <ul class="tabs center">
        <li class="tab col s12"><a class="blue-text active">Members</a></li>
        <div class="indicator blue" style="z-index:1"></div>
    </ul>
    </div>
    <!-- Profiles-->     
        <div class="input-field col s12">
          <input id="search" type="text" onkeyup="searchFunction()">
          <label for="search">Search</label>
        </div>
    <div class="profiles">
                <div class="row">
<!--Mrs Foucault -->     
    <div class="col s12 m4 offset-m2 ">
    <div class="card teachers-cards horizontal">
      <div class="card-image">
        <img src="foucault.png" alt="temporary image of Mrs. Foucalt">
      </div>
      <div class="card-stacked">
        <div class="card-content">
         <i class="material-icons">face</i>
        <div class="divider"></div>
        <p>Mrs.Foucault</p>  
        <i class="material-icons">format_quote</i>   
        <div class="divider"></div> 
        <p>THIS YEAR WILL BE GREAT</p>
        
        
        <i class="material-icons">link</i>
        <div class="divider"></div>
           <a target="_blank" href="http://www.firstinspires.org/robotics/ftc/game-and-season" class="">WEBSITE</a>
        </div>
      </div>
    </div>
  </div>
<!--Ms.Webb -->            
<div class="col s12 m4">
    <div class="card teachers-cards horizontal">
      <div class="card-image">
        <img src="webb.jpg" alt="Temporary image of Mrs. Webb">
      </div>
      <div class="card-stacked">
        <div class="card-content">
         <i class="material-icons">face</i>
        <div class="divider"></div>
        <p>Mrs.Foucault</p>  
        <i class="material-icons">format_quote</i>   
        <div class="divider"></div> 
        <p>THIS YEAR WILL BE GREAT</p>
        
        
        <i class="material-icons">link</i>
        <div class="divider"></div>
           <a target="_blank" href="http://www.firstinspires.org/robotics/ftc/game-and-season" class="">WEBSITE</a>
        </div>
      </div>
    </div>
  </div>
        </div>
        <div id="row1" class="row profile-row ">
<!--Profile card generator-->
<?php
   

    $sql = "SELECT * FROM prcard";
    $result = mysqli_query($conn, $sql);
            
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $sql = "SELECT * FROM prcard";
            $result = mysqli_query($conn, $sql);
            $id = $row[0];
            $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
            $resultImg = mysqli_query($conn, $sqlImg);
     while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        $id = $row[0];
         $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
         $resultImg = mysqli_query($conn, $sqlImg);
         $rowImg = mysqli_fetch_array($resultImg, MYSQLI_NUM);
        
        echo ' <div class="col s12 m6 l3" style="margin=0;">    
        <div class="profile z-depth-2 ">
            <div class="row">
                <div class="col s4 m3 ">
                    ';
        
                        if ($rowImg[2] == 1) {
                           
                        $file = "'uploads/profile".$id.".png'";     
                            echo  '  <div class="" style="
                            margin: 7px 0 6px 0;
                            width: 80px;
                            height: 80px;
                            overflow: hidden;
                            background-image: url('.$file.');
                            border-radius: 50%;
                            background-position: center; background-size: cover; background-repeat: no-repeat;"></div>';
                        }else{
                           echo '<img class=" profile-img  circle" src="uploads/default.png" alt="profile image">';
                        }
                    
                    
        echo    '
                </div>
            <div class="col s8 m8 name-wrapper">
                <h6 class="center position">'. $row[3] .'</h6>
                <div class="divider"></div>
                <p class="name center"> '. $row[1] .' '. $row[2] .'</p>
            </div>
            </div>
        </div>
      </div>';
            
    
            
    }
    }
    }
            
?>
        

        </div>
    </div>
    </div>
    
    
<!--Start of join-dis-->
 <div id="join-dis" class="join-dis">
    <div class="divider"></div>
     <div class="row"> 
    <ul class="tabs center">
        <li class="tab col s12"><a class="blue-text active">Join</a></li>
        <div class="indicator blue" style="z-index:1"></div>
    </ul>
    </div>
    <div class="row">
    <h3 class="select center">Requirements</h3>
    <hr>
   <div class="col s12 m4">
        <div class="card  join-card-top center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">school</i>
            <h3 class="center join-select">Grades</h3>
            <div class="divider"></div> 
            <p class="flow-text">All students that want to join DCHS robotics must have A's & B's. This must persist throughout the school year.</p>
            </div>
       </div>
        </div>
        <div class="col s12 m4">
        <div class="card join-card-top  center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">directions_car</i>
            <h3 class="center join-select">Attendance</h3>
            <div class="divider"></div> 
            <p class="flow-text">All students that want to join DCHS robotics must attend a meeting every tuesday 4:00pm-6:00pm</p>
            </div>
       </div>
        </div>
        <div class="col s12 m4">
        <div class="card  join-card-top center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">attach_money</i>
            <h3 class="center join-select">Fee</h3>
            <div class="divider"></div> 
            <p class="flow-text">All students that want to join DCHS robotics must pay a fee of $$$</p>
            </div>
       </div>
        </div>
     </div>
     <div class="row ">
    <h3 class="select center">Sign up</h3>
    <hr>
    <div class="col s12 m4">
        <div class="card  join-card center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">directions</i>
            <h3 class="center join-select">Where</h3>
            <div class="divider"></div> 
            <p class="flow-text">You may sign up for the robotics club in Mrs.Foucalt's classroom B-12</p>
            </div>
       </div>
        </div>
         <div class="col s12 m4">
        <div class="card  join-card center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">date_range</i>
            <h3 class="center join-select">When</h3>
            <div class="divider"></div> 
            <p class="flow-text">Mrs. Foucalt is in her class room any block 1st-4th. Please come before or after school.</p>
            </div>
       </div>
        </div>
         <div class="col s12 m4">
        <div class="card  join-card center">
            <div class="card-content">
            <i class="material-icons large light-blue-text">help</i>
            <h3 class="center join-select">Why</h3>
            <div class="divider"></div> 
            <p class="flow-text">Robotics club students gain thousands in scholarships for college and develop/refign their skills with the many events they attend.</p>
            </div>
       </div>
        </div>
     </div>
</div> 
<!--start of media-->
 <div id="media-dis" class="media-dis">
     <div class="divider"></div>
<div class="row"> 
    <ul class="tabs center">
        <li class="tab col s12"><a class="blue-text active">Media</a></li>
        <div class="indicator blue" style="z-index:1"></div>
    </ul>
    </div>
    <h1>media</h1>
</div>
<!--Start of sponsor-dis-->
<div id="sponsor-dis" class="contact-dis">
   <div class="divider"></div>
    <div class="row"> 
    <ul class="tabs center">
        <li class="tab col s12"><a class="blue-text active">Media</a></li>
        <div class="indicator blue" style="z-index:1"></div>
    </ul>
    </div>
        <div class="row">
    <h3 class="select center">Jaguar Partner<br></h3>
    <hr>
    <h4 class="select center">&gt$1000</h4>        
    
   <div class="col s12 m4 offset-m4">
        <div class="  sponsor-card center">
            <div class="card-content">
            <img src="img/Filler-Logo.png" alt="DCHS Robotics Logo">
            <h3 class="center sponsor-select">Your Name Here</h3>
            <h5 class="select">$$$</h5>
            </div>
       </div>
        </div>
            
    </div>
    <div class="row">
        <h3 class="select center">Jaguar Benefactor<br></h3>
    <hr>
    <h4 class="select center">$400-$900</h4>        
    
   <div class="col s12 m4 offset-m4">
        <div class="  sponsor-card center">
            <div class="card-content">
            <img src="img/sponsors/benefactor1.png" alt="DCHS Robotics Logo">
            <h3 class="center sponsor-select">Farist Installation Company</h3>
            <h5 class="select"></h5>
            </div>
       </div>
        </div>
    
    <!--<div class="col s12 m4 ">
        <div class="  sponsor-card center">
            <div class="card-content">
            <img src="img/Filler-Logo.png">
            <h3 class="center sponsor-select">Your Name Here</h3>
            <h5 class="select">$$$</h5>
            </div>
       </div>
        </div>
        
    <div class="col s12 m4 ">
        <div class="  sponsor-card center">
            <div class="card-content">
            <img src="img/Filler-Logo.png">
            <h3 class="center sponsor-select">Your Name Here</h3>
            <h5 class="select">$$$</h5>
            </div>
       </div>
        </div>    
          -->  
    </div>
    <div class="row">
    <h3 class="select center">Jaguar Contributor<br></h3>
    <hr>
    <h4 class="select center">$100-$399</h4>        
    
   <div class="col s12 m4 ">
        <div class="  sponsor-card center">
            <div class="card-content">
            <img src="img/Filler-Logo.png" alt="DCHS Robotics Logo">
            <h3 class="center sponsor-select">Your Name Here</h3>
            <h5 class="select">$$$</h5>
            </div>
       </div>
        </div>
    
    <div class="col s12 m4 ">
        <div class="  sponsor-card center">
            <div class="card-content">
            <img src="img/Filler-Logo.png" alt="DCHS Robotics Logo">
            <h3 class="center sponsor-select">Your Name Here</h3>
            <h5 class="select">$$$</h5>
            </div>
       </div>
        </div>
        
    <div class="col s12 m4 ">
        <div class="  sponsor-card center">
            <div class="card-content">
            <img src="img/Filler-Logo.png" alt="DCHS Robotics Logo">
            <h3 class="center sponsor-select">Your Name Here</h3>
            <h5 class="select">$$$</h5>
            </div>
       </div>
        </div>    
            
    </div>
    
    <div class="row">
    <h3 class="select center">Jaguar Friend<br></h3>
    <hr>
    <h4 class="select center">$1-$99</h4>        
    
   <div class="col s12 m4 ">
        <div class="sponsor-card center">
            <div class="card-content">
            <img src="img/Filler-Logo.png" alt="DCHS Robotics Logo">
            <h3 class="center sponsor-select">Your Name Here</h3>
            <h5 class="select">$$$</h5>
            </div>
       </div>
        </div>
    
    <div class="col s12 m4 ">
        <div class="  sponsor-card center">
            <div class="card-content">
            <img src="img/Filler-Logo.png" alt="DCHS Robotics Logo">
            <h3 class="center sponsor-select">Your Name Here</h3>
            <h5 class="select">$$$</h5>
            </div>
       </div>
        </div>
        
    <div class="col s12 m4 ">
        <div class="  sponsor-card center">
            <div class="card-content">
            <img src="img/Filler-Logo.png" alt="DCHS Robotics Logo">
            <h3 class="center sponsor-select">Your Name Here</h3>
            <h5 class="select">$$$</h5>
            </div>
       </div>
        </div>    
            
    </div>
</div> 
 <!-- Footer -->
  <footer class="page-footer light-blue">
    <div class="container">
      <div class="row">
        <div class="col l12 s12">
<?php
    if (isset($_SESSION['id'])) {
        echo "<p class='login-text'>You are logged in as:</p>"
            . $_SESSION['uid'] . "";
        echo '
        </div>
         <div class="row">
          <div class="col s12 m6 center" style="padding: 0">
            <form action="logout.php">
                <button class=" waves-effect waves-light btn-flat center" style="width: 100%; margin: 0; padding: 0;">LOG OUT</button>
            </form> 
          </div>
          <div class="col s12 m6 center" style="padding: 0">
            <a href="#modal3" class="waves-effect waves-light btn-flat center" style="width: 100%;  margin: 0;" >Customize</a>
          </div>
         </div>    
            ';
    } else {
        echo '<a id="login" class="login" href="#modal2">Login</a>';
    }
?>
        </div>
        <div class="col l3 s12">
         
        </div>
    </div>
      </div>
      
    <div class="footer-copyright">
      <div class="container">
          Made by Blake Hastings Using the <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize Framework</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js">
    </script>
    <script type="text/javascript" src="js/scripts.js"></script>

  </body>
</html>
