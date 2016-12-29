<html>

	<head>
		
	<style>

		body{
			background-image: url(<?=base_url()?>Images/Orangy.jpg);
			color: white;
		}
		body {
color: white;
font-family: "simplifica";
font-size: 40px;
}
a:link {
    color: white;
    background-color: transparent;
    text-decoration: none;
}
a:visited {
    color: white;
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
    width: 55%;
}

th {
    height: 50px;
} 
td {
	text-align: center;
    font-size: 40px;
}

		#q1, #q2, #q3, #q4, #q5{
			color: white;
		}
		button {
    background-color: transparent;
    color: white;
    border: white;
	font-family: simplifica;
	font-size: 32px;
}

button:hover {
    background-color: black;
    color: white;
	
}
		
		#Visitors{
		}

		.error {color:}
	</style>
	</head>

		<body>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href= "https://www.facebook.com"><img border="0" alt="Facebook" src="
			<?php echo base_url('Images/you.jpg');?>" width=400 height=400></a>
		
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

			<center>
			<p>
			<br>Favorite things to do:
			<br><img border="0" alt="Youtube" src="<?php echo base_url('Images/Turntable.jpg');?>" width=200 height=200></a>
			<img border="0" alt="Facebook" src="<?php echo base_url('Images/Ps4.jpg');?>" width=200 height=200></a>
			<img border="0" alt="Twitter" src="<?php echo base_url('Images/Bball.jpg');?>" width=200 height=200></a>
			</p>
			<p>
			Favorite games:
			<br><img border="0" alt="League of Legends" src="<?php echo base_url('Images/Smite.jpg');?>" width=200 height=200></a>
			<img border="0" alt="Magic:The Gathering" src="<?php echo base_url('Images/FFXV.jpg');?>" 
			width=200 height=200>
			<img border="0" alt="Minecraft" src="<?php echo base_url('Images/GTA.jpg');?>" width=200 height=200></a>
			</p>
			</center>
			<center>
			<h2> About: </h2>

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
			

			</center>

<div id = "Visitors">
<h2><?php echo $title; ?></h2>

<table border='1' cellpadding='4'>
    <tr>
        <td>&nbsp;&nbsp;&nbsp;<strong>Name</strong>&nbsp;&nbsp;&nbsp;</td>
        <td><strong>Nickname</strong></td>
		<td><strong>Email</strong></td>
        <td>&nbsp;&nbsp;<strong>Home_Address</strong>&nbsp;&nbsp;</td>
		<td><strong>Gender</strong></td>
        <td><strong>Cp_Num</strong></td>
        <td><strong>Comment</strong></td>
		<td><strong>Action</strong></td>
    </tr>
<?php foreach ($userinfo as $news_item): ?>
        <tr>
            <td><font size = 5px><?php echo $news_item['Name']; ?></td>
			<td><font size = 5px><?php echo $news_item['Nickname']; ?></td>
			<td><font size = 5px><?php echo $news_item['Email']; ?></td>
			<td><font size = 5px><?php echo $news_item['Home_Address']; ?></td>
			<td><font size = 5px><?php echo $news_item['Gender']; ?></td>
			<td><font size = 5px><?php echo $news_item['Cp_Num']; ?></td>
			<td><font size = 5px><?php echo $news_item['Comment']; ?></td>
            <td>
                <a href="<?php echo site_url('news/'.$news_item['User_ID']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item['User_ID']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['User_ID']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</div>
<center>
<a href="<?php echo site_url('news/create'); ?>">Click here to Sign up!</a>
</center>
