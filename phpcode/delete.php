<?php
include 'connect.php';
$sq="delete from reg where id='$_SESSION[id]'";
mysqli_query($con,$sq);
header('location:add_district.php');
?>
    //Set email format to HTML
            $u=$_POST['user'];
            $subject = 'password link';
             $body    = "we got link for you <b>!</b><br> 
             Clickhere<br>
             <a href='http://localhost/phpcodertech/updatepassword.php?email=$u&reset_token=$reset_token' >
             Reset password</a>";
             $headers ="From: malapatil99@gmail.com";
             if(mail($u,$subject,$body,$headers))
             {
echo "email sent";
             }
             else{
                 echo "faild";
             }

             

<?php
        if(isset($_POST['updatepassword']))
        {
            $pass=password_hash($_POST['password'],PASSWORD_BCRYPT);
            $update="UPDATE `reg` SET `password`='$pass',`resettoken`=NULL,`resettokenexpire`=NULL WHERE `username`=$_POST[user]";
           if(mysqli_query($con, $update))
           {
              echo"
              <script>
             alert('updated scuessful');
              window.location.href='sendmail.php';
             </script>
             ";
           }
           else{
              echo"
              <script>
             alert('server down');
              window.location.href='sendmail.php';
             </script>
             ";
  
           }
  
        }
        ?>