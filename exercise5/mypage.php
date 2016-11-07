<?php
	include_once 'dbconfig.php';
	if(isset($_POST['submit']))
		{
			// variables for input data
			$name = $_POST['name'];
			$email = $_POST['email'];
			$homeA = $_POST['homeA'];
			$comment = $_POST['comment'];
			$gender = $_POST['gender'];
			// variables for input data
			
			// sql query for inserting data into database			 
			$sql_query = "INSERT INTO users(name,email,homeA,gender, message) VALUES ('$name','$email','$homeA','$gender', '$comment')";
			mysqli_query($con,$sql_query);
			// sql query for inserting data into database
		}
?>
<html xmlns="http://www.w3.org/1999/xhtml">       
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
	<head>      
	<title> My Webpage
	</title>    
	<style>
	<html>
	<head>
	<title> My Webpage
	</title>
	<style>
	header{
color: black;
text-align : Center;
font-family: "simplifica";
font-size: 50px;
}
body{
 background-image: url("Orangy.jpg");
 }
body {
color: white;
text-align : Center;
font-family: "simplifica";
font-size: 50px;
}
a:link {
    color: black;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: black;
    background-color: transparent;
    text-decoration: none;
}
a:hover {
    color: red;
    background-color: transparent;
    text-decoration: none;
}
a:active {
    color: black;
    background-color: transparent;
    text-decoration: none;
}
table, th, td {
   border: 1px solid white;
}
table {
    border-collapse: collapse;
    width: 50%;
}

th {
    height: 50px;
} 
td {
	text-align: center;
    font-size: 40px;
}
button {
    background-color: black;
    color: white;
    border: white;
	font-family: simplifica;
	font-size: 32px;
}

button:hover {
    background-color: transparent;
    color: white;
	
}
audio{
	display:none;
}
button{
	background-color: transparent;
}


</style>
</head>
<header>
<h2 style= "background-color:rgb(255, 165, 0)">
GIOMAR T. ANDRES
</h2>
</header>
<body>
</br>
<img src = "You.jpg" style = "width: 400px; height: 400px">


<table align ="Right">

<tr>
<td>HOBBIES</td>
<td>INTERESTS</td>
</tr>

<td>Video Games</td>
<td>PROGRAMMING </td>
</tr>

<tr>
<td>MUSIC</td>
<td>BASKETBALL</td>
</tr>

<tr>
<td>DRAWING</td>
<td>Disco Junkie (DJ) </td>
</tr>
</table>
</br>
</br>
</br>
</br>

<h id="Q1">What do you often do when you're home?</h>
<button type="button" onclick="document.getElementById('Q1').innerHTML = 'Video Games, Mix Music, Draw'">CLICK</button>
</br>
<h id="Q2">What country do you want to visit the most?</h>
<button type="button" onclick="document.getElementById('Q2').innerHTML = 'JAPAN'">CLICK</button>
</br>
<h id="Q3">What other professions do you want?</h>
<button type="button" onclick="document.getElementById('Q3').innerHTML = 'Professional DJ, Character Designer, Game Analyst, Professional Basketball player'">CLICK</button>
</br>
<h id="Q4">What do you find most satisfying?</h>
<button type="button" onclick="document.getElementById('Q4').innerHTML = 'Winning'">CLICK</button>
</br>
<h id="Q5">Best Trait?</h>
<button type="button" onclick="document.getElementById('Q5').innerHTML = 'Chill'">CLICK</button>
</br>
<audio controls autoplay>
  
  <source src="Dillon Francis - Anywhere (ft. Will Heard).mp3" type="audio/mpeg">
  <source src="All we know.mp3" type="audio/mpeg">
  <source src="Dillon Francis - Anywhere (ft. Will Heard).mp3" type="audio/mpeg">
</audio>


<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $homeAErr = "";
$name = $email = $gender = $comment = $homeA = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["homeA"])) {
    $homeA = "";
  } else {
    $homeA = test_input($_POST["homeA"]);
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Fill up your online life now!</h2>
<form method="post" >
			<div class="input">
				<div class="col1">
					Name: <input type="text" name="name" value="<?php echo $name;?>">
					<span class="error">* <?php echo $nameErr;?></span>
					<br><br>
					Email: <input type="text" name="email" value="<?php echo $email;?>">
					<span class="error">* <?php echo $emailErr;?></span>
					<br><br>
					homeA: <input type="text" name="homeA" value="<?php echo $homeA;?>">
					<span class="error"><?php echo $homeAErr;?></span>
					<br><br>
					Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
					<br><br>
					Gender:
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
					<span class="error">* <?php echo $genderErr;?></span>
					<br><br>
					<input type="submit" name="submit" value="Submit">  
				</div>
			</div>
</form>
<a href="index.php" class=button>MESSAGES ARE HERE DUDE!</a>
</body>
</html>
