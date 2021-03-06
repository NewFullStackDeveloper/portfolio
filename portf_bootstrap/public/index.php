<?php

if(isset($_POST['submit'])){
    $to = "email5@disbox.net";
    $from = $_POST['email']; // Email user
    $first_name = $_POST['prenume'];
    $last_name = $_POST['nume'];
    $phone = $_POST['phone'];
    $subject = "You have received a message";
    $subject2 = "Sent message";
    $message = $first_name . " " . $last_name . " who has phone number ".$phone." has sent the following message:" . "\n\n" . $_POST['mesaj'];
    $message2 = "Message sent by " . $first_name . "\n\n" . $_POST['mesaj'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // trimte o copie expeditorului
    echo "Messae successfully sent " . $first_name . ", we will contact you soon";
    header('Location: index.php'); 
    }


?>





<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" width="200" height="50" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                      </li>
                  </ul>
                </div>
              </nav>
         
                <br>
                <div class="img-container">
                    <img class="img-fluid" src="img/cup02.jpg">
                    <div class="overlay">
                      <span>  Hi, I am Laura <br> 
                      I'm a Full Stack Web Developer</span>
                    </div>
                  </div>

                  <br>
                  <br>

                 <div class="row first">
                    <div class="col-sm-3">
                      <h1>Discover</h1>
                      <p>Tell me about your project and we brainstorm together the features to create a plan for your product to launch.</p>
                    </div>


                    <div class="col-sm-3">
                      <h1>Design</h1>
                      <p>We design the wireframe and agree together how to create the best experience for your users to present your brand.</p>

                    </div>


                    <div class="col-sm-3">
                        <h1> Deploy</h1>
                        <p>We protoype and develop your product. We work together intensily to incorporate your feedback.</p>

                    </div>

                    <div class="col-sm-3">
                      <h1>Be ready</h1>
                      <p>We deploy your product and now your website is ready to get the traction. Get out there and grow your audience.</p>
                    </div>

                 </div> 

                 <br>
            
            <section id="skills">
              <h1>MY SKILLS</h1>
        
              <div class="progress">
                <div class="label">HTML</div>
                <div class="bar">
                  <div class="percent" style="width: 90%"></div>
                </div>
              </div>
              
              <div class="progress">
                <div class="label">CSS, SASS</div>
                <div class="bar">
                  <div class="percent" style="width: 85%"></div>
                </div>
              </div>
        
              <div class="progress">
                <div class="label">JavaScript</div>
                <div class="bar">
                  <div class="percent" style="width: 45%"></div>
                </div>
              </div>
        
              <div class="progress">
                <div class="label">React</div>
                <div class="bar">
                  <div class="percent" style="width: 15%"></div>
                </div>
              </div>
        
              <div class="progress">
                <div class="label">jQuery</div>
                <div class="bar">
                  <div class="percent" style="width: 40%"></div>
                </div>
              </div>
        
              <div class="progress">
                <div class="label">PHP</div>
                <div class="bar">
                  <div class="percent" style="width: 20%"></div>
                </div>
              </div>
        
              <div class="progress">
                <div class="label">Laravel</div>
                <div class="bar">
                  <div class="percent" style="width: 10%"></div>
                </div>
              </div>
        
              <div class="progress">
                <div class="label">UX</div>
                <div class="bar">
                  <div class="percent" style="width:70%"></div>
                </div>
              </div>
            </section>
        
            
              <h1>MY PORTFOLIO</h1>

              <div class="container portfolio" id="portfolio"> 
               
              <div class="card-deck"> 

              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="img/preview.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit </p>
                  </div>
              </div>


              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="img/preview.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                  </div>
              </div>

              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="img/preview.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit...</p>
                  </div>
              </div>

            </div>


            <div class="card-deck"> 

                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/preview.png" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit...</p>
                    </div>
                </div>
  
  
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/preview.png" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
  
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/preview.png" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
  
              </div>
          
            </div>
          



        
            <h1 class="me" id="about"> ABOUT ME </h1>

            <div class="row about">  
                <div class="col-sm-3">

                  <img class="rounded-circle" src="img/portrait1.jpg" alt="My photo">
                 
                </div>    


                <div class="col-sm-2">


                </div>

                  <div class="col-sm-7">
                      <p>My name is Laura. I am a full-stack web developer and I like learning new things.</p>
                      <p>I am currently based in Prague, Czech Republic.</p> 
                    
                      <p>I like travelling, taking pictures.</p> 
                    
                      <p>Get in touch to work on something great together.</p>

                  </div>

                </div>

            
        
 
 <br>
 
 
          

<div class="container contact" id="contact"> 
  
    <h1>CONTACT ME </h1>
  
<form action="" method="post">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control modified" name="prenume" placeholder="First name">
    </div>
    
    <div class="col">
      <input type="text" class="form-control modified" name="nume" placeholder="Last name">
    </div>
    
  </div>
    
  <br>
  
  <div class="form-row">
    <div class="col">
      <input type="email" class="form-control modified" name="email" placeholder="Email">
    </div>
    
    <div class="col">
      <input type="text" class="form-control modified" name="phone" placeholder="Phone">
    </div>
  
  </div>
  
  <br>
    
   <div class="form-row"> 
    <label for="exampleTextarea">My message</label>
    <textarea class="form-control" name="mesaj" id="exampleTextarea" rows="3"></textarea>
    </div>
    
    <br>

    <div class="form-row"> 
      <div class="col"> 
           <button type="submit" name="submit" class="btn btn-dark full">Send my message</button>
      </div>

    </div>
</form>

</div> 
        
            <footer id="footer">
                    <h1>Nice to meet you</h1>
              
                   <div class="centered"> 
                    <i class="fab fa-linkedin"></i>

                    <i class="fab fa-github-square"></i>

                  </div>


            </footer>
          </div>
    </body>
</html>