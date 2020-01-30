<!-- Gurjit Kaur 8622642 -->
<!-- Part - 3 -->

<!-- Part3 (A) -->

<?php
$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo "<b>Part-3(A)<br/><br/>The Previous String is: </b><p>$string</p><br/> ";
$array = explode(" ",$string);
sort($array);
$array = implode(" ",$array);
echo "<b>The Sorted array is: </b><br/>$array<br/> ";


?>



<!-- Part3 (B) -->

<?php
echo "<br/><br/><b>Part-3(B)<br/><br/>";

//create function 
function unique($str){
    for($i = 0; $i <strlen($str); $i++)
    {
        for($j = $i+1; $j <strlen($str); $j++)
        {
            if($str[$i] == $str[$j])
            {
                return true;
            }
        }
    }
    return false;
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
//    check for firstname 
    if(!empty($_POST['firstname'])){
        $check = unique($_POST['firstname']);
        if($check == true){
            echo "<p>Duplicate characters</p>";
        }
        else
        {
                        echo "<p>No Duplicate characters</p>";

        }
    }
    else{
                    echo "<p>Please fill the value</p>";

    }
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p style="align=center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>