<!DOCTYPE html>
<html>
<head>
       <title>Make an Appointment</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css" href="styleee.css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//code.jquery.com/jquery-migrate-1.4.1.js"></script>

             <script
                    src="http://code.jquery.com/jquery-2.2.4.min.js"
                    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                    crossorigin="anonymous">
                    
            </script>-->
     


</head>
<body>
       <header>
              <div id="header-inner">
                     <nav>
                            <ul>
                                 <li>Address Street, Barber City GS23 </li>
                                 <li>Call us on 386 40 556 558 </li>
                                 <li>info@barber.com</li>

                             </ul>
                     </nav> 
              </div>

       
              <div id="header-inner2">
                     <nav >
                            <ul>
                                 <li id="header-inner3"><a href="index.php">Home</a></li>
                                 <li id="header-inner3"><a href="gallery.php">Gallery</a></li>
                                 <li id="header-inner3"><a href="Price.php">Price</a></li>
                                 <li id="header-inner3"><a href="appoinment.php">Book An Appoinment</a></li>
                             </ul>
                     </nav> 
              </div>

       </header>

       <section id ="book">
                 <h2>BOOKING</h2>


       </section>
       <!--End of headers-->

       <section class="inner-wraper">

                  <article id="location">
                                     <h4><span id ="find">MAKE RESERVATION AND FIND US</span></h4>
                                      <p id="map"><span id = "making">Making a last-minute salon appointment is something we dread, especially when<br> there's a not-so-friendly receptionist on the other end of the phone line. In these<br> cases, we've been known to simply hang up and try our backup. But what if you<br> have no idea of who to dial next or where to even begin searching?</span><br><br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.4606791033075!2d-0.9359155844838649!3d52.235015579761246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48770e51880b4e83%3A0xa73e7f6b6a365515!2sSixfields+Stadium!5e0!3m2!1sro!2suk!4v1519594536387" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></p>
                  </article>
                
                 <aside id="location">
                                  <h4><span id ="find">Book An Appoinment NOW</span></h4>
                                   <div class="container">
 <form action="" method="post" name="form1">
                                          <div class="row">
                                          <div class="col-25">
                                                              <label for="fname">First Name</label>
                                          </div>
                                          <div class="col-75">
                                                              <input type="text" id="fname" name="FirstName" placeholder="Your name..">
                                          </div>
                                          </div>

                                           <div class="row">
                                           <div class="col-25">
                                                              <label for="lname">Last Name</label>
                                           </div>
                                           <div class="col-75">
                                           <input type="text" id="lname" name="LastName" placeholder="Your last name..">
                                          </div>
                                          </div>

                                          <div class="row">
                                           <div class="col-25">
                                                              <label for="lname">Email</label>
                                           </div>
                                           <div class="col-75">
                                           <input type="text" id="lname" name="Email" placeholder="Your Email">
                                          </div>
                                          </div>

                                          <div class="row">
                                           <div class="col-25">
                                                              <label for="lname">Phone number</label>
                                           </div>
                                           <div class="col-75">
                                           <input type="text" id="lname" name="PhoneNumber" placeholder="Your phone number">
                                          </div>
                                          </div>

                                          <div class="row">
                                          <div class="col-25">
                                                             <label for="country">Gender</label>
                                          </div>
                                                <div class="col-75">
                                                <select id="country" name="Gender">
                                                <option name="Gender" value="male">Male</option>
                                                <option  name="Gender" value="female">Female</option>
        
                                               </select>
                                          </div>
                                          </div>
                                                   <div class="row">
                                                   <div class="col-25">
                                                   <label>Book a time</label>
                                                   </div>
                                                 <div class="col-75">
                                                 <select name="BookTime">
                                                 <option name="BookTime" value="08:00">08:00</option> 
                                                 <option name="BookTime" value="09:00">09:00</option>
                                                 <option name="BookTime" value="10:00">10:00</option>
                                                 <option name="BookTime" value="11:00">11:00</option>
                                                 <option name="BookTime" value="12:00">12:00</option>
                                                 <option name="BookTime" value="13:00">13:00</option>
                                                 <option name="BookTime" value="14:00">14:00</option>
                                                 <option name="BookTime" value="15:00">15:00</option>
                                                 <option name="BookTime" value="16:00">16:00</option>
                                                 <option name="BookTime" value="17:00">17:00</option>
                                                   </select> 
                                                  </div>
                                                  </div>

                                                   <div class="row">
                                                   <div class="col-25">
                                                   <label>Pick a day</label>
                                                   </div>
                                                <div class="col-75">
                                                 <select name="day">
                                                 <option name="day" value="Monday">Monday</option> 
                                                 <option name="day" value="Tuesday">Tuesday</option>
                                                 <option  name="day" value="Wednesday">Wednesday</option>
                                                 <option name="day"  value="Thursday">Thursday</option>
                                                 <option name="day"  value="Friday">Friday</option>
                                                 <option name="day"    value="Saturday">Saturday</option>
                                                  </select> 
                                                  </div>
                                                  </div>





                                              <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="Message" placeholder="Write something.." style="height:50px"></textarea>
      </div>
    </div>


             






                                          <div class="row">
                                          <input type="submit" name="submit" value="Submit">
                                           </div>

                                      





                                   </form> 
</div>

                        
                 </aside>
       </section>
       <!-- Rezervation and location ends  -->

          <section class="inner-wraper2">

              <section class="one-third">
                        <h3>OUR INSTAGRAM FEED</h3>
                         <img src="https://images.pexels.com/photos/46710/pexels-photo-46710.jpeg?h=350&auto=compress&cs=tinysrgb" width="70" height="70">
                         <img src="https://www.nationalgeographic.com/content/dam/travel/2016-digital/canada/alberta/alberta-road-trip/icefields-parkway-lake-louise-alberta-canada.adapt.1190.1.jpg" width="70" height="70">
                         <img src="https://thumbs.dreamstime.com/z/hipster-girl-laptop-cup-coffee-ona-wooden-table-close-up-60691062.jpg" width="70" height="70"><br>
                         <img src="https://images.pexels.com/photos/296879/pexels-photo-296879.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" width="70" height="70">
                         <img src="https://cdn-images-1.medium.com/max/2000/1*ZBXLF0FmRoZWdHW8yfLbeA.jpeg" width="70" height="70">
                         <img src="https://funalive.com/uploads/files/article/images/funny-interesting-pictures_24sep16-4.jpg" width="70" height="70"><br>
                         <img src =  "https://brashiermiddlecollegenews.org/wp-content/uploads/2017/01/nice.png" width="70" height="70">
                         <img src =  "https://cdn.tinybuddha.com/wp-content/uploads/2015/06/Happy-Woman.jpg" width="70" height="70">
                         <img src =  "https://thehappypharmacist.files.wordpress.com/2016/03/1024x768-data-uploads-35-401510-im-happy-best-wallpaper.jpg" width="70" height="70">
          	
              </section>

                <section class="one-third">
                        <h3>ABOUT US</h3>
                         
                                             <p id = "totedd">Barber Saloon is a vintage design<br> barber that focuses on your beard's<br> best experience.<br>
                                                 (+386) 40 123 456<p>
                                                  

                                                <p id = "totedd"><span class="fa fa-envelope" style="font-size:20px"></span>info@barber.com</p>
                                                <p id = "totedd"> <span class="fa fa-phone" style="font-size:20px"></span>www.barber.com</p>
                </section>

                <section class="one-third">
                        <h3>OPENING TIMES</h3>
                                                  <p id = "totedd">Monday <span id = "asas"> 10:00 - 16:00</span></p>
                                                  <p id = "totedd">Tuesday <span id = "asas"> 10:00 - 16:00</span></p> 
                                                  <p id = "totedd">Wednesday  <span id = "asas"> 08:00 - 15:00</span></p>
                                                  <p id = "totedd">Thursday <span id = "asas">  08:00 - 18:00</span></p>
                                                  <p id = "totedd">Friday <span id = "asas">  07:00 - 19:00</span></p>
                                                  <p id = "totedd">Saturday  <span id = "asas"> CLOSED</span></p>
                                                  <p id = "totedd">Sunday    <span id = "asas">CLOSED</span></p>
                       
                </section>


            </section>

            <footer>
                     <h5 id = "bottome3">TRIM YOUR BEARD AT  THE BARBER SALOON</h5>
                     <h5 id = "bottome4">TRIM YOUR BEARD AT  THE BARBER SALOON</h5>
                     <button onclick="topFunction()" id="show">Go to top</button> 
            </footer>

            <!--End  footer section-->

            <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("show");
    } else {
        document.getElementById("show");
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;




}

</script>


<?php
         $servername ="localhost";
         $username   ="root";
         $password   ="";
         $dbname     ="barber";

         $conn = new mysqli ($servername,$username,$password,$dbname);

      if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
       }
        if(isset($_POST['submit'])){
          $FirstName = $_POST['FirstName'];
           $LastName = $_POST['LastName'];
            $Email = $_POST['Email'];
             $PhoneNumber = $_POST['PhoneNumber'];
              $Gender = $_POST['Gender'];
               $BookTime= $_POST['BookTime'];
               
                $Message = $_POST['Message'];
                $day = $_POST['day'];
           if(isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Email']) && isset($_POST['PhoneNumber']) && isset($_POST['Gender']) && isset($_POST['BookTime']) && isset($_POST['Message']) && isset($_POST['day'])){

             if(!empty($_POST['FirstName']) && !empty($_POST['LastName'])  && !empty($_POST['Email']) && !empty($_POST['PhoneNumber']) && !empty($_POST['Gender'])&& !empty($_POST['BookTime'])&& !empty($_POST['Message'])&& !empty($_POST['day'])){

                  $query = "INSERT INTO appointment(FirstName,LastName,Email,PhoneNumber,Gender,BookTime,Message,day) VALUES ('$FirstName','$LastName','$Email','$PhoneNumber','$Gender','$BookTime','$Message','$day')";
               

                       if(mysqli_query($conn,$query) === true){
          
              echo "<script type='text/javascript'>alert('Data added successfully.');</script>";
               }else{
                 echo "Eror!";
               }
             }else{
             echo "<script type='text/javascript'>alert('All parameters must to filled in.');</script>";
             }
           }else{
             
             echo "<script type='text/javascript'>alert('All parameter must be sent.');</script>";
           }

          }
                
   
 
   ?>










</body>


</html>
