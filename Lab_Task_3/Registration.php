<?php 
include "control/Result.php";
 ?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<h1>Registration Form</h1> 
<hr>
<form action="" method="post">
<table>
<tr>
<td>Full Name:</td> 
<td>
<input type="text" name="fname"> <?php echo $validatename; ?> </td>
</tr>
<tr>
<td>Email:</td> 
<td><input type="email" name="email"> <?php echo $validateemail; ?></td>
</tr>
<tr>
<td>Password:</td> 
<td><input type="password" name="password"> <?php echo $validatepassword; ?> </td>
</tr>
<tr>
<td>Comment:</td> 
<td><textarea rows="5" cols="40" name="comment"></textarea></td>
</tr>
<br>
<tr>
<td>Gender:</td>
<td>
<input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  <?php echo $validateradio; ?>
</td>
</tr>
<br>
<tr>
<td>Please choose a Hobby</td> 
<td>
<input type="checkbox" id="hobby1" name="hobby1" value="Singing">
Singing
<input type="checkbox" id="hobby2" name="hobby2" value="Reading">
Reading
<input type="checkbox" id="hobby3" name="hobby3" value="Dancing">
Dancing
<?php echo $validatecheckbox; ?>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
<br>

</td>
</tr>
<tr>
<td>Please Choose a File</td> 
<td>
<input type="file" id="myfile" name="myfile">
</td>
</tr>
</table>

<input type="Submit" value="Submit">
<input type="reset">


</form>
</body>
</html>