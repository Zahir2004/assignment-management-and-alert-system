<?php
session_start();
 require 'db_auth.php';
 
 require 'dbconnect.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="event_admin.css">

    <title>Event</title>
  </head>
  <body>
    <marquee scrollamount="7" bgcolor="yellow" direction="left" height="30px" hspace="100px" vspace="10px" behavior="alternate">Mega Blood Donation camp will be organised in the upcoming month of November.</marquee>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-sm fixed-top">
        <a href="" class="navbar-brand">event</a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="teacher_dashboard.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>
                <li class="nav-item"><a href="" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="" class="nav-link">Create</a></li>

            </ul>
        </div>
    </nav>

    <!--Header Section-->
    <div class="header">
        <div class="img-parent">
            <div class="img">
                <img src="party.jpg">
            </div>
            <div class="img-overlay"></div>
        </div>
        <div class="img-content">
            <h2>GIET UNIVERSITY</h2>
            <span>GIET University, Gunupur (formerly known as Gandhi Institute of Engineering and Technology) was established by “Vidya Bharati Educational Trust,” Gunupur, Odisha, India in the year 1997. UGC approved GIET University is one of the leading universities in Odisha, located amongst the lush greenery and foothills of the Eastern Ghats of India with the scenic Bansadhara River flowing through its territory.

                Since its establishment, GIET University has emerged at the forefront with its advanced technological developments and teaching methods. The University has made a mark in the global scenario with its state-of-the-art infrastructure, quality education and world-class facilities. The University strives to provide a disciplined and progressive education system to all.</span>
        </div>
    </div>
    
    <!--EVENT SECTION-->
<div class="event" style="">
    <div class="row justify-content-left text-left">
        <div class="col-sm-4">
            <img src="nbd.jpg" width="300px" height="200px" alt="">
            <div class="event-content">
            <span style="text-align: center;"><br>
                <h4>Techno-Cultural Fest 👨‍💻</h4>
                We are glad to share that the CSE department is conducting a workshop for Graphic Designing for the departmental fest AVYAKT 2.O . 
                <br>We encourage you to wholeheartedly join in the workshop to upskill your knowledge in graphic designing from scratch.
                This graphic designing workshop is a hands-on  practice fundamental skills of photoshop. <br>
                It includes exercises in design concepts, along with principles to help build confidence and awareness of guidelines and theories, and how they impact layout, type and color. 
                <br>In this one-day graphic designing workshop, you will discover how to apply design by structuring a visual hierarchy using space and type. 
                <br>No previous design experience is necessary, and this workshop will serves as a useful foundation for individuals.
                <br>
                Must visit our site for further details 
                <a href="https://csefest.in/"></a>
            
            <p style="text-align: center;"><a href="">Register</a></p>
        </span>     
            </div>
        </div>
 <div class="col-sm-4">
    <div class="row justify-content-center text-center">
    <img src="tech-fest.jpg" width="300px" height="200px" alt="">
    <div class="event-content">  
        <span style="text-align: center;"><br>
            <h4>Mega Blood Donation Camp👨‍💻</h4>
            We are glad to share that the NSS club is conducting the MEGA BLOOD DONATION CAMP on the ocassion of NSS day. 
            <h6>A donation of blood means a few minutes to you, but a lifetime for somebody else.</h6>
            <br>We encourage you wholeheartedly to join in the camp and coopearte with us to complete our goal.<br>
            A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole blood components). Donation may be of whole blood, or of specific components directly (apheresis). Blood banks often participate in the collection process as well as the procedures that follow it.
            <br>The amount of blood drawn and the methods vary. The collection can be done manually or with automated equipment that takes only specific components of the blood.Neither of your blood will get waste and will remain protected.
            <h6>Must visit our site for further details</h6>
            <a href="https://csefest.in/"></a>
        
        <p style="text-align: center;"><a href="">Register</a></p>
    </span>
    
</div> 
    </div>

</div>
<div class="col-sm-4">
    <div class="row justify-content-left text-left">
    <img src="aids day.jfif" width="300px" height="200px" alt="">
    <div class="event-content">  
        <span style="text-align: center;"><br>
            <h4>Aids Day 🎗️</h4>
            We are glad to share that the NSS club is conducting a rally on the eve of the AIDS DAY. 
            <br>World AIDS Day, designated on 1 December every year since 1988 , is an international day dedicated to raising awareness of the AIDS pandemic caused by the spread of HIV infection and mourning those who have died of the disease. The ACQUIRED IMMUNO DEFICIENCY SYNDROME(AIDS) is a life-threatening condition caused by the HUMAN IMMUNO DEFICIENCY VIRUS(HIV). The HIV virus attacks the immune system of the patient and reduces its resistance to other 'diseases'.
            <br>We need to aware the people who dont have any idea of it.So we need your support for doing the event successfully
            <br>
            Must visit our site for further details 
            <a href="https://csefest.in/"></a>
        
        <p style="text-align: center;"><a href="">Register</a></p>
    </span>
</div> 
    </div>
</div>
<div class="col-sm-4">
    <div class="row justify-content-center text-center">
    <img src="tree plantation.jpg" width="300px" height="200px" alt="">
    <div class="event-content">  
        <span style="text-align: center;"><br>
            <h4>Tree Plantation 🌱</h4>
            We are glad to share that the NSS club is conducting Tree Planatation event inside and outside the university.
            <br>Van Mahotsav or Vanamahotsava, lit. 'Forest festival', is an annual one-week tree-planting festival in India which is celebrated in the first week of July.By encouraging Indians to support tree planting and tending, festival organizers hope to create more forests in the country. It would provide alternative fuels, increase production of food resources, create shelter-belts around fields to increase productivity, provide food and shade for cattle, offer shade and decorative landscapes, reduce drought, and help to prevent soil erosion. The first week of July is just the right time for planting trees in most parts of India since it coincides with the monsoon.
             <br>Trees and forests play a very crucial role in maintaining an ecological balance and providing oxygen to human beings on the planet. The Van Mahotsav week is a reminder that we must protect forests and stop deforestation and practice the 3R rule- Reduce, reuse and recycle.
            
            <br>
            <br>
            Must visit our site for further details 
            <a href="https://csefest.in/"></a>
        
        <p style="text-align: center;"><a href="">Register</a></p>
    </span>
</div> 
    </div>
    <!-- <div class="col-sm-4">
        <div class="row justify-content-right text-right">
        <img src="ahimsa ratha.jpg" width="300px" height="200px" alt="">
        <div class="event-content"></div>  
            <span style="text-align: center;"><br>
                <h4>Ahimsa Ratha ✋🏻</h4>
                We are glad to share that the CSE department is conducting a workshop for Graphic Designing for the departmental fest AVYAKT 2.O . 
                <br>We encourage you to wholeheartedly join in the workshop to upskill your knowledge in graphic designing from scratch.
                This graphic designing workshop is a hands-on  practice fundamental skills of photoshop. <br>
                It includes exercises in design concepts, along with principles to help build confidence and awareness of guidelines and theories, and how they impact layout, type and color. 
                <br>In this one-day graphic designing workshop, you will discover how to apply design by structuring a visual hierarchy using space and type. 
                <br>No previous design experience is necessary, and this workshop will serves as a useful foundation for individuals.
                <br><br>
                Must visit our site for further details 
                <a href="https://csefest.in/"></a>
            <br><br>
            <p style="text-align: center;"><a href="">Register</a></p>
        </span>
        </div>
    </div> -->
</div>
<div class="col-sm-4">
    <div class="row justify-content-right text-right">
    <img src="rally.jpg" width="300px" height="200px" alt="">
    <div class="event-content"> 
        <span style="text-align: center;"><br>
            <h4>Rally🚶</h4>
            <br>A rally is a large public meeting that is held in order to show support for something such as a political party. About three thousand people held a rally to mark international human rights day.GIET organises rally for various events like Independence Day,National Unity Day, Amrit Rathj and etc.We need active mass participation of all the students of our entire university. 
            <br>
            Must visit our site for further details 
            <a href="https://csefest.in/"></a>
        <br><br>
        <p style="text-align: center;"><a href="">Register</a></p>
    </span>
</div> 
    </div>
</div>
</div>
<!--FOOTER-->
<footer>
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-sm-2">
                <h6>Help!</h6>
                <span>Report Bug</span><br>
            </div>
        </div>
    </div>
</footer>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

    <!--JAVASCRIPT-->
    <script>
        $(document).scroll(function({
            $("navbar").toggleClass("scroll",$(this).scrollTop() > $(
                ".navbar").height());
            )
        )
    </script>
    
  </body>
</html>