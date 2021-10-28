<?php
include'connect.php';
if(isset($_POST['sub'])){
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $s= "select * from reg where username='$u' and password= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:home.php');
   }
   else{
       echo 'username or password does not exist';
   }
  
}
else{


?>
<html>
      
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <form class="form" method="POST" enctype="multipart/form-data">
            <table>
                
                <tr>
                    <td>
                        Username
                        <input type="text" class="login-input" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                        <input type="password" class="login-input" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="login-button" name="sub" value="login">
                    </td>
                   
                </tr>
                <tr>
                <td>
                    <a href="sendmail.php">forget Password?</a>

                    <a href="reg.php" class="login-button" style="color:black">Singn Up</a>
</td>
</tr>
               
                

            </table>
            <?php
    }
?>
    </body>
</html>
