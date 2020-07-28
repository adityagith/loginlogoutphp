<?php
$r="";
$i1 = "<div class='card' style='width: 13vw;height: 11vw;'><a href='cards.html'><img src ='a"; 
$i3 ="class='card-img-top' alt='...' style='width: 13vw;height: 9vw;'>Someitemsayups</a></div>";
for($i=1;$i<=8;$i++)
{
   
   $i2 = $i.".jpg' "; 
   $r = $r.$i1.$i2.$i3;   
}
//$r = $a.$r.$b;
$k=0;
    $a =  "<!doctype html>
    <html lang='en'>
    
    <head>
      <!-- Required meta tags -->
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    
      <!-- Bootstrap CSS -->
      <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    
      <title>Welcome To Indian Shatabdi News</title>
      <style>
          #search
          {
              width:400px;
              margin: 0px 20px;
          }
          .containera
          {
              display:flex;
              flex-direction: row;
          }
          .box
          {
              height: 43vw;
              border: 2px solid black;
          }
          #box1
          {
              width: 15%;
          }
          #box2
          {
            width: 65%;
          }
          #box3
          {
            width: 20%;
          }
          #search,#searchbtn
          {
              margin:20px 0px 20px 40px;
          }
          .card
          {
              /* height: 30vw;
              width:80vw; */
              display:inline-block;
              margin-left: 20px; 
              margin-top: 20px; 
          }
          a
          {
              text-decoration: none;
          }
          #h
          {
              display:none;
          }
      </style>
    </head>    
    <body>
      <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
          aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
          <ul class='navbar-nav mr-auto'>
            <li class='nav-item active'>
              <a class='nav-link' href='#'>Home <span class='sr-only'>(current)</span></a>
            </li>
            <li class='nav-item active'>
                <a class='nav-link' href='asignin.php'>Signin <span class='sr-only'>(current)</span></a>
              </li>
              <li class='nav-item active'>
                <a class='nav-link' href='#'>About Us <span class='sr-only'>(current)</span></a>
              </li>
              <li class='nav-item active'>
                <a class='nav-link' href='#'>Contact us <span class='sr-only'>(current)</span></a>
              </li>
            
          </ul>";
          $c = "</div>
          </nav>
          <!-- <div class='container my-3'></div> -->
          <div class='containera'>
              <div class='box' id='box1'>
                  <div id='box11'>
                      Navigation 
                  </div>
                  <div id='box12'>
                      Select any below category
                  </div>
              </div>
              <div class='box' id='box2'>
                <form class='form-inline my-1 my-lg-0'>
                    <input id='search' class='form-control mr-sm-' type='search' placeholder='Search an item' aria-label='Search'>
                    <button id = 'searchbtn' class='btn btn-outline-success my-1 my-sm-0' type='submit' class='formc'>Search</button>
                  </form>";
                  
            $d = $r;
                

                    $e = "</div> <div class='box' id='box3'>
                         <!-- <div id='box31'>a</div>
                         <div id='box32'>p</div> --><marquee direction='up'>
                         <div class='card' style='width: 13vw;height: 11vw;'>
                            
                            <img src='gym.png' class='card-img-top' alt='...' style='width: 13vw;height: 9vw;'>
                                <center>Someitemsayups</center>
                                </img>
                            </marquee>
                           </div>
                     </div>
                      </div><!--containera-->
                  </div>
          <script src='inddel.js'></script>
        </body>
        </html>
        ";
    include("database.php");
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $email=$_POST['Email'];
        $pass = $_POST['password'];
        $sql2 = "SELECT * FROM `userdata` WHERE Email='$email' AND password='$pass'";
        $status2 = mysqli_query($conn,$sql2);
        $num = mysqli_num_rows($status2);
        if($num==1)
        {
        //   echo "Welcome user";
        //   session_start();
        //   $_SESSION['loggedin'] = true;
        //   $_SESSION['email']=$email;
        //   header("location:aloginuser.php");
        $b  = " Welcome '$email'<button onclick='submit' class='btn btn-outline-success my-2 my-sm-0' class='formc'>Logout</button>";    
        echo $a.$b.$c.$d.$e;
        $k=1;
          //header("location:amain.php");
        }
        else
        {
          echo "Wrong Credentials Entered";
        }
    }
      $b = "<form class='form-inline my-2 my-lg-0' method='POST' action='aloginuser.php'>
             <input name = 'Email' class='form-control mr-sm-2' type='search' placeholder='Username' aria-label='Search'>
             <input name = 'password' class='form-control mr-sm-2' type='search' placeholder='Password' aria-label='Search'>
             <button onclick='submit' class='btn btn-outline-success my-2 my-sm-0' class='formc'>Login</button>
             </form></div></nav>";
      
if($k!=1)
{
    echo $a.$b.$c.$d.$e;
}
?>