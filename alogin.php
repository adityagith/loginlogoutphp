<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
body {
    margin:0px 0px;
  background: #fff;
}

.wrapper {
  /* background: url("https://images.unsplash.com/photo-1465146633011-14f8e0781093?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3450&q=80"); */
  margin:-60px 0px;
  color: black;
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  perspective: 1000px;
  perspective-origin: 50% 50%;
}
.form-control
{
    border:1px solid black;
    width: 40vw;
}
</style>
</head>
<body>
    <?php
    $email = "";
    $pass = "";
    $k=0;
    include("database.php");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $email=$_POST['email'];
            $pass = $_POST['password'];
            $sql2 = "SELECT * FROM `userdata` WHERE Email='$email' AND password='$pass'";
            $status2 = mysqli_query($conn,$sql2);
            $num = mysqli_num_rows($status2);
            if($num==1)
            {
              $k=1;
              echo "$k";
              header("location:aloginuser.php");
              // session_start();
              // $_SESSION['loggedin'] = true;
              // $_SESSION['email']=$email;
              // header("location:aloginuser.php");

              //header("location:amain.php");
            }
            else
            {
              echo "Wrong Credentials Entered";
            }
        }
    ?>
    <div class="wrapper">
    <form action="alogin.php" method="POST">
            <div class="form-group">
              <center><h1>Login</h1></center><br>
              Enter email id<input type="name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" name="email">
              Enter your Password:<input type="password" class="form-control" id="exampleInputname" aria-describedby="emailHelp" name="password">
              <br>
            <button onclick="submit" class="btn btn-primary btn-lg">Submit</button>
          </form>
    </div>
</body>
<script>
</script>
</html>