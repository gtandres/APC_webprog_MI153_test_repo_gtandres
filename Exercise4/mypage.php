	<html>
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


<table align ="right">

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
<button type="button" onclick="document.getElementById('Q4').innerHTML = 'Breathing'">CLICK</button>
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
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

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
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Fill up your online life now!</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>
