<style>
	table,h1,input{
		font-family: simplifica;
		text-align: center;
	}
	
	table{
		font-size: 38px;
	}
	
	input{
		font-size: 38px;
	}
	
	.button{
		background-color: white;
		color: black;
		border: white;
		font-family: simplifica;
		font-size: 32px;
		text-align: center;
	}
	
	.button:hover{
		background-color: white;
		color: red;
	}
		</style>
				
	
					<h1>Update your account!</h1>
					<?php echo validation_errors(); ?>
					<?php echo form_open('news/edit/'.$news_item['User_ID']); ?>
					<br><br>
					<div id="content">
						<form method="post">
							<b class="lft">Name</b>
								 <td><input type="text" name="name" rows="10" cols="40"><?php echo $news_item['name'] ?></input></td>
							<b class="lft">Nickname</b>
							 <td><input type="text" name="n_name" rows="10" cols="40"><?php echo $news_item['Nickname'] ?></input></td>
						
	
							<b class="lft">Email</b>
							 <td><input type="text" name="email" rows="10" cols="40"><?php echo $news_item['Email'] ?></input></td>
		
    
							<b class="lft">Home Address</b>
							 <td><input type="text" name="homeA" rows="10" cols="40"><?php echo $news_item['HomeAddress'] ?></input></td>
								
							<b class="lft">Gender</b>
								 <td><input type="text" name="gender" rows="10" cols="40"><?php echo $news_item['Gender'] ?></input></td>
						
	
							<b class="lft">Comments</b>
								 <td><input type="text" name="comment" rows="10" cols="40"><?php echo $news_item['Comment'] ?></input></td>
							
							<b class="lft">CellNo</b>
							 <td><input type="text" name="cellno" rows="10" cols="40"><?php echo $news_item['CellNo'] ?></input></td>
						
						
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