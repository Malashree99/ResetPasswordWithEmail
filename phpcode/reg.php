<?php

include 'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['city'];
    $g=$_POST['gen'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    $i="insert into reg(name,username,password,city,image,gender)value('$t','$u','$p','$c','$img','$g')";
   // mysqli_query($con, $i);
   $result   = mysqli_query($con, $i);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='reg.php'>registration</a> again.</p>
                  </div>";
        }
}
?>

<html>
    <head>
       
        <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <form  class="form" method="POST" enctype="multipart/form-data">
        <h1 class="login-title">Registration</h1>
         <table>
                <tr>
                    <td>
                        Name
                        <input class="login-input" type="text" name="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        Username
                        <input class="login-input" type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                        <input  class="login-input" type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        city
                        <select class="login-input" name="city">
                            <option value="">-select-</option>
                            <option value="knp">kanpur</option>
                            <option value="lko">lucknow</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender
                        <input type="radio"name="gen" id="gen" value="male">male
                        <input type="radio" name="gen" id="gen" value="female">female
                    </td>
                </tr>
                <tr>
                    <td>
                        Image
                        <input type="file" name="f1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="login-button" value="Register" name="sub">
                               
                    </td>
                </tr>
            </table>
    </body>
</html>
