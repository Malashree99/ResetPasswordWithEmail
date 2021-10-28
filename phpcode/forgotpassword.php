<?php

include'connect.php';

if(isset($_POST['sub']))
{
    $u=$_POST['user'];


 $query="select * from reg where username='$u'"; 
  $result=mysqli_query($con, $query);
if($result)
{
  if(mysqli_num_rows($result)==1)
  {
$reset_token=bin2hex(random_bytes(16));
date_default_timezone_set('Asia/kolkata');
$date=date("Y-m-d");
$query="UPDATE `reg` SET `resettoken`='$reset_token',`resettokenexpire`='$date' WHERE `username`='$_POST[user]'" ;
if(mysqli_query($con,$query) )
{
  $u=$_POST['user'];
  $subject = "password link";
   $body    = "we got link for you 
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
            }

else{
    echo"
    <script>
   alert('server done');
    window.location.href='sendmail.php';
   </script>
   ";

  }
}
  
  else{
    echo"
    <script>
   alert('email not found');
    window.location.href='sendmail.php';
   </script>
   ";

  }
}
else{
echo"
 <script>
alert('cannot run query');
 window.location.href='sendmail.php';
</script>
";
}
}
?>