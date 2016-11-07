<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $name = $_POST['name'];
 $email = $_POST['email'];
 $homeA = $_POST['homeA'];
 $comment = $_POST['comment'];
 $gender = $_POST['gender'];
 // variables for input data

 // sql query for update data into database
$sql_query = "UPDATE users SET name = '$name' , email = '$email' , 
		homeA = '$homeA' , gender = '$gender', message = '$comment' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
if(mysqli_query($con,$sql_query))
		{
?>
			<script type="text/javascript">
				alert('SUCCESFULLY UPDATED');
				window.location.href='index.php';
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
				alert('ERROR OCCURRED');
			</script>
			<?php
		}
		// sql query execution function
	}
		if(isset($_POST['btn-cancel']))
	{
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>UPDATE</title>
			<style>
				label{
					font-family: simplifica;
					font-size: 50px;
					color: red;
				}
	
				input{
					font-family: simplifica;
					font-size: 32px;
				}
				
				button{
					background-color: white;
					color: black;
					border: white;
					font-family: simplifica;
					font-size: 32px;
					text-align: center;
				}
				
				button:hover{
					background-color: white;
					color: red;
				}
	
				.lft{
					font-family: simplifica;
					font-size: 23px;
					display: inline-block;
					width: 150px;
					clear: both;
					text-align: right;
				}
				
				content.input{
					width: 100%;
					clear: both;
				}
			</style>
		</head>
			<body>
				<center>
					<label>NEED TO CHANGE SOMETHING? CHANGE IT HERE!</label>
					<br><br>
					<div id="content">
						<form method="post">
							<b class="lft">Name</b>
								<input type="text" name="name" value="<?php echo $fetched_row['name']; ?>"/></br></br>
	
							<b class="lft">Email</b>
								<input type="text" name="email" value="<?php echo $fetched_row['email']; ?>"/></br></br>
    
							<b class="lft">homeA</b>
								<input type="text" name="homeA" value="<?php echo $fetched_row['homeA']; ?>" /></br></br>
	
							<b class="lft">Gender</b>
								<input type="text" name="gender" value="<?php echo $fetched_row['gender']; ?>"  /></br></br>
	
							<b class="lft">Comments</b>
								<input type="text" name="comment" value="<?php echo $fetched_row['comment']; ?>"  /></br></br>
						
							<table align="center">
								<td>								
								<button type="submit" name="btn-update"><strong>UPDATE</strong></button>
								<button type="submit" name="btn-cancel"><strong>CANCEL</strong></button>
								</td>
							</table>
						</form>
					</div>
				</center>
			</body>
	</html>