<!-- Gurjit Kaur 8622642 -->
<!-- Part - 2 -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
  $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];
   
    
    
    // check if firstname or lastname or age is empty
    if(empty($fname) || empty($lname) || empty($age))
    {
        echo "Blank entry not allowed<br/>";
    }
    
    else
    {
//        check for age
        if(!is_numeric($age))
        {
        echo "Age should be numeric<br/>";
        
        }
       
        else
         {
            echo "Thank you for the submission<br/>";
            echo "<b>First Name: </b>".$fname."<br/><b> Last Name: </b>".$lname."<br/><b> Age: </b>".$age."<br/>";
        }
    }
    
//    checking for newsletter
    if(isset($_POST['newsletter'])){
        $newsletter= $_POST['newsletter']; 
        echo "Newsletter: ".$newsletter;
    }
    else{
//        displaying message
        echo "Please fill the newsletter";
    }
    

     
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form action="a1p2.php" method="POST">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value="<?PHP 
		if(isset($_POST['firstname'])){
			echo $_POST['firstname'];
		}
	
	?>"></label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40" value="<?PHP 
		if(isset($_POST['lastname'])){
			echo $_POST['lastname'];
		}
	
	?>"></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40" value="<?PHP 
		if(isset($_POST['age'])){
			echo $_POST['age'];
		}
	
	?>"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p style="align=center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>