<?php
include'connect.php';
     $s="select*from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    ?>
<html>
    <head>
    <title>home</title>
    <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
<table class="form">
    <th>
 <img src="<?php
echo $f['image'];?>"  width="100px" height="100px"></th>
    <tr class="login-input">
        <td>
            Name
        </td><td>
            
<?php echo $f['name'];?>
            </td>
    </tr>
    <tr class="login-input">
    <td> Username</td>
    
    <td>
            
<?php
echo $f['username'];?>
        </td></tr>
<tr class="login-input"><td> Password</td>
    <td>
<?php
echo $f['password']."<br>";?>
    </td></tr>
  <tr class="login-input"><td> City </td>   <td>           
 <?php
 echo $f['city']."<br>";?></td></tr>
  <tr class="login-input">
      <td>Gender</td>
      <td><?php
echo $f['gender']."<br>";?></td>
  </tr>
  
</table>
<tr>
<!--<a href="edit.php">Edit</a>-->
<center>
<a href="edit.php">
 <button type="submit" class="login-button" style=" margin: 50px auto;
    width: 300px; text-align:center;
    padding: 30px 30px;">update</button></a>
    <a href="logout.php">
 <button type="submit" class="login-button" style=" margin: 50px auto;
    width: 300px;
    padding: 30px 30px;">Logout</button></a>
</center>

    </body>
</html>