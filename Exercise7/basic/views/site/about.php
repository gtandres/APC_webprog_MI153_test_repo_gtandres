<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About the user';
$this->params['breadcrumbs'][] = $this->title;
?>
	<style>
		body{
			
			color: Black;
		}
		table, th, td {
			border: 4px solid black;
			color: Black;
			height: 10%
			width: 50%;
		}
		
	</style>
<div class="site-about">
			<table id="table" align="center">
			<tr>
				<th>Field</th>
				<th>Information</th>
			</tr>
			<tr>
				<td>Name</td>
				<td>Giomar Andres</td>
			</tr>
			<tr>
				<td>Nickname:</td>
				<td>Gio</td>
			</tr>
			<tr>
				<td>Birthdate:</td>
				<td>April 24, 1999</td>
			</tr>
			<tr>
				<td>Age:</td>
				<td>17</td>
			</tr>
			<tr>
				<td>Course:</td>
				<td>BS Information Technology, Specializing in mobile and internet technology</td>
			</tr>
			</table>
			
			<p><center>
			<br>:FAVORATE THINGS TO DO:
			<br><img border="0" alt="Youtube" src=<?php echo Yii::$app->request->baseUrl . "/Images/Turntable.jpg";?> width=200 height=200></a>
			<img border="0" alt="Facebook" src=<?php echo Yii::$app->request->baseUrl . "/Images/Ps4.jpg";?> width=200 height=200></a>
			<img border="0" alt="Twitter" src=<?php echo Yii::$app->request->baseUrl . "/Images/Bball.jpg";?> width=200 height=200></a>
			</p>

			<p>
			<br>Favorite games:
			<br><img border="0" alt="League of Legends" src=<?php echo Yii::$app->request->baseUrl . "/Images/GTA.jpg";?> width=200 height=180></a>
			<img border="0" alt="Magic:The Gathering" src=<?php echo Yii::$app->request->baseUrl . "/Images/SMITE.jpg";?> width=200 height=180></a>
			<<img border="0" alt="Minecraft" src=<?php echo Yii::$app->request->baseUrl . "/Images/FFXV.jpg";?> width=200 height=180></a>
			</p>
</div>
