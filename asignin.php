<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in Page</title>
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
    include("database.php");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $email=$_POST['email'];
            $pass = $_POST['password'];
            $cpass = $_POST['cpassword'];
            $sql3 = "SELECT * FROM `userdata` WHERE Email='$email'";
            $status = mysqli_query($conn,$sql3);
            $num = mysqli_num_rows($status);
            if($num==1)
            {
              echo "User already exists";
              header("location:asignin.php");
            }
            elseif($pass!=$cpass)
            {
              echo "Passwords not mactching";
            }
            elseif($pass!=$cpass)
            {
              echo "Enter the correct password";
            }
            elseif($pass==$cpass)
            {
              $sql1 = "INSERT INTO `userdata` (`Serial Number`, `Email`, `password`) VALUES (NULL, '$email', '$pass');";
              $status = mysqli_query($conn,$sql1);
              if($status)
              {
                echo "Details added Successfully";
              }
            }
        }
    ?>
    <div class="wrapper">
    <form action="asignin.php" method="POST">
            <div class="form-group">
              Enter email id<input type="name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" name="email">
              Enter your Password:<input type="password" class="form-control" id="exampleInputname" aria-describedby="emailHelp" name="password">
              Confirm your Password:<input type="password" class="form-control" id="exampleInputname" aria-describedby="emailHelp" name="cpassword">
              <br>
            <button onclick="submit" class="btn btn-primary btn-lg">Submit</button>
          </form>
    </div>
</body>
<script>
</script>
</html>