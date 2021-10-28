
    <html>
    <title>reset</title>
    <link rel="stylesheet" href="style.css"/>
    <head></head>
    <boday>
<form method="POST"  class="form">
            <table>
                
                <tr>
                    <td>
                        Username
                        <input type="text" class="login-input" name="user" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                       New password
                        <input type="password" class="login-input" name="pass" value="">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit"  class="login-button" value="update" name="sub">
                               
                    </td>
                </tr>
            </table>
</form>           
      </body>
  </html>
  
<?php
include'connect.php';
if(isset($_POST['sub'])){
   
    $u=$_POST['user'];
    $p=$_POST['pass'];
   
    $i="update reg set username='$u',password='$p' where username='$_POST[user]'";
    mysqli_query($con, $i);
    echo"
              <script>
             alert('updated scuessful');
              window.location.href='login.php';
             </script>
             ";
   // header('location:sendmail.php');
}
     $s="select * from reg  where username='$_POST[user]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);

    ?> 