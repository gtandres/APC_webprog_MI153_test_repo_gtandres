<html>
	<head>
		<style>
			header{
				color: black;
				text-align : Center;
				font-family: "simplifica";
				font-size: 40px;
				}
			body{
				background-image: url("Orangy.jpg");
				}
			body {
				color: white;
				text-align : Center;
				font-family: "simplifica";
				font-size: 40px;
				}
			a:link {
				color: white;
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
						width: 40%;
						}

						th {
							height: 50px;
							} 
							td {
						text-align: center;
						font-size: 40px;
								}
					button {
							background-color: transparent;
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
					.button{
						background-color: transparent;
		
							}
						</style>
					</head>

		<body>
		<center>
			header>
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

		
		<a href="<?php echo site_url('news/create'); ?>">WANT TO SEND A MESSAGE? CLICK HERE!</a><br>
		

<h2>MESSAGES</h2>

<table align="center">
    <tr>
		
        <td>NAME</td>
        <td>NICKNAME</td>
		<td>EMAIL</td>
        <td>ADDRESS</td>
		<td>GENDER</td>
        <td>PHONE NUMBER</td>
        <td>COMMENT</td>
		<td>OPERATIONS</td>
		
	</tr>
<?php foreach ($userinfo as $news_item): ?>
        <tr>
            <td><?php echo $news_item['name']; ?></td>
			<td><?php echo $news_item['n_name']; ?></td>
			<td><?php echo $news_item['email']; ?></td>
			<td><?php echo $news_item['homeA']; ?></td>
			<td><?php echo $news_item['gender']; ?></td>
			<td><?php echo $news_item['cellno']; ?></td>
			<td><?php echo $news_item['comment']; ?></td>
            <td>
                <a href="<?php echo site_url('news/edit/'.$news_item['User_ID']); ?>">EDIT</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['User_ID']); ?>" onClick="return confirm('Are you sure you want to delete?')">DELETE</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</div>