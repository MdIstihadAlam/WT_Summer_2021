<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
  </head>
  <body>
  <form action="backend" method="POST">
    <fieldset>
      <legend><h2>Registration Form</h2></legend>
    
    <table >
      <tr>
       
        <td>Full Name </td>
		<td></td>
		<td></td>
        <td><input name="User name" type="text"></td>		
      </tr>
      <tr>
       
        <td>Email </td>
		<td></td>
		<td></td>
        <td><input name="Email" type="email"></td>
      </tr>
	  
	   <tr>
        
        <td>Password </td>
		<td></td>
		<td></td>
        <td><input name="pass" type="password"></td>
      </tr>
	  
	  <tr>
       
        <td>Comment </td>
		<td></td>
		<td></td>
        <td><textarea name="Basak" id="5" cols="40" rows="6"></textarea></td>
      </tr>
	  <tr>
        
        <td>Gender </td>
		<td></td>
		<td></td>
		<td>
        <input type="radio" name="gender">Female
		<input type="radio" name="gender">Male
		<input type="radio" name="gender">Other
		</td>
      </tr>
	  
	   <tr>
        
        <td>Please Choose a hobby </td>
		<td></td>
		<td></td>
        <td>
		<input type="checkbox">Singing
		<input type="checkbox">Danching
		<input type="checkbox">Reading
		</td>
      </tr>
	  
	  <tr>
       
        <td>Please Choose a file </td>
		<td></td>
		<td></td>
        <td> <input type="file"</td>
      </tr>
    </table>
	
	  <input type="submit" value="Submit">
	  <input type="reset">
	  
	</fieldset>
  </form>
  </body>
</html>