<?php

use function PHPSTORM_META\sql_injection_subst;

 include ('partials/menu.php'); ?>

<div class="main-content">
<div class="wrapper">
<h1> Add Admin</h1>

<br><br>

<form action="" method="POST">

<table class="tbl-30">
<tr>
    <td>Full Name: </td>
    <td>
        <input type="" name="full_name" placeholder="Enter Your Name">
    </td>
</tr>

<tr>
    <td>Username</td>
    <td>
        <input type=""name="username" placeholder="Your Username">
    </td>
</tr>

<tr>
    <td>Password</td>
    <td><input type="password"name="password" placeholder="Your Password"></td>
</tr>

<tr>
    <td colspan="2">   
        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
    </td>
</tr>

</table>

</form>



</div>
</div>

<?php include ('partials/footer.php'); ?>
<?php
if(isset($_POSt['submit']))
{
    // Button Clicked
    // echo "button clicked"
    // Get the data from form

   $full_name = $_POST['full_name'];
   $username = $_POST['username'];
   $password = md5($_POST['password']);

    $sql = "INSERT INTO tbl_admin SET
        full_name = '$full_name',
      username = '$username',
        password = '$password'
    ";

        $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
        $db_select = mysqli_select_db($conn, 'FoodDeliverySystem') or die(mysqli_error());
    }


?>