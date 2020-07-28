<?php
include("database.php");
$kartstatus = Array(0,0,0,0,0,0,0,0);
// check how to clear php inside in an echo
// how to use variables of include and not print them
// how to use multiple forms in a single php
// take input from user without using php
//$images = Array(0,0,0,0,0,0,0,0);
$email = "";
$pass="";
$in = 0;//login ke liye
$k=0;
$out=0;//logout flag tabhi possible jab login possible
$kart=0;//tabhi dikhega jab login kiya gaya ho
$img = 0;//tabhi jab login ho gaya ho
$r = "<form action='loggedin.php' method='POST'>
<div class='card' style='width: 16vw;height: 14vw;'>
<img src ='a1.jpg' class='card-img-top' alt='...' style='width: 16vw;height: 9vw;'><b>Image1</b><br>
<input class='bts' type='submit' value='Buy' name='im11'>
<input class='bts' type='submit' value='Not Buy' name='im12'>
</div>
<div class='card' style='width: 16vw;height: 14vw;'>
<img src ='a2.jpg' class='card-img-top' alt='...' style='width: 16vw;height: 9vw;'><b>Image2</b><br>
<input class='bts' type='submit' value='Buy' name='im21'>
<input class='bts' type='submit' value='Not Buy' name='im22'>
</div>
<div class='card' style='width: 16vw;height: 14vw;'>
<img src ='a3.jpg' class='card-img-top' alt='...' style='width: 16vw;height: 9vw;'><b>Image1</b><br>
<input class='bts' type='submit' value='Buy' name='im31'>
<input class='bts' type='submit' value='Not Buy' name='im32'>
</div>
<div class='card' style='width: 16vw;height: 14vw;'>
<img src ='a4.jpg' class='card-img-top' alt='...' style='width: 16vw;height: 9vw;'><b>Image2</b><br>
<input class='bts' type='submit' value='Buy' name='im41'>
<input class='bts' type='submit' value='Not Buy' name='im42'>
</div>

<div class='card' style='width: 16vw;height: 14vw;'>
<img src ='a5.jpg' class='card-img-top' alt='...' style='width: 16vw;height: 9vw;'><b>Image1</b><br>
<input class='bts' type='submit' value='Buy' name='im51'>
<input class='bts' type='submit' value='Not Buy' name='im52'>
</div>
<div class='card' style='width: 16vw;height: 14vw;'>
<img src ='a6.jpg' class='card-img-top' alt='...' style='width: 16vw;height: 9vw;'><b>Image2</b><br>
<input class='bts' type='submit' value='Buy' name='im61'>
<input class='bts' type='submit' value='Not Buy' name='im62'>
</div>
<div class='card' style='width: 16vw;height: 14vw;'>
<img src ='a7.jpg' class='card-img-top' alt='...' style='width: 16vw;height: 9vw;'><b>Image1</b><br>
<input class='bts' type='submit' value='Buy' name='im71'>
<input class='bts' type='submit' value='Not Buy' name='im72'>
</div>
<div class='card' style='width: 16vw;height: 14vw;'>
<img src ='a8.jpg' class='card-img-top' alt='...' style='width: 16vw;height: 9vw;'><b>Image2</b><br>
<input class='bts' type='submit' value='Buy' name='im81'>
<input class='bts' type='submit' value='Not Buy' name='im82'>
</div>
</form>";
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
          .bts{
            background:white;
            border:2px solid black;
            margin:2px 0px;
         }
         .bts:hover {
            background:gray;
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
        $b = "<a href='acart.php'>My Cart</a><a href='aout.php'>Logout</a>";
        echo $a.$b.$c.$d.$e;
        $k=1;
        //..jab button pe dabae tabhi run karo 
        if(isset($_POST['im11'])) 
        { 
          $images[0]=1;
          echo "This is Button1 that is selected"; 
        } 
        if(isset($_POST['im12'])) 
        { 
          $images[0]=0;
          echo "This is Button2 that is selected"; 
        }  
        if(isset($_POST['im21'])) 
        { 
          $images[1]=1;
          echo "This is Button1 that is selected"; 
        } 
        if(isset($_POST['im22'])) 
        { 
          $images[1]=0;
          echo "This is Button2 that is selected"; 
        } 
//         if(isset($_POST['logout']))
//         {
// //    session_start();
// //    session_reset();
// //    session_destroy();
//           header("location:aout.php");
//         }     
//         if(isset($_POST['mycart']))
//         {
//             header("location:acart.php");
//         }     