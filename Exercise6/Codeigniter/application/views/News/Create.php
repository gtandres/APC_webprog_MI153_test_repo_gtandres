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

<h1>SEND A MESSAGE HERE</h1>

	<?php echo validation_errors(); ?>
	<?php echo form_open('news/create'); ?>
	
    <table align = center>
        <tr>
            <td><label for="Name">Name</label></td>
            <td><input type="text" name="name" rows="10" cols="40"></input></td>
        </tr>
		
        <tr>
            <td><label for="Nickname">Nickname</label></td>
            <td><input type="text" name="n_name" rows="10" cols="40"></input></td>
        </tr>
		
		<tr>
            <td><label for="Email">Email</label></td>
            <td><input type="text" name="email" rows="10" cols="40"></input></td>
        </tr>
		
		<tr>
            <td><label for="Home_Address">Home Address</label></td>
            <td><input type="text" name="homeA" rows="10" cols="40"></input></td>
        </tr>
		
		<tr>
            <td><label for="Gender">Gender</label></td>
            <td><input type="text" name="gender" rows="10" cols="40"></input></td>
        </tr>
		
		<tr>
            <td><label for="Cp_Num">Cellphone number</label></td>
            <td><input type="text" name="cellno" rows="10" cols="40"></input></td>
        </tr>
		
		<tr>
            <td><label for="Comment">Comment</label></td>
            <td><input type="text" name="comment" rows="10" cols="40"></input></td>
        </tr>
		
        <tr>
            <td></td>
            <td><input type="submit" class="button" name="submit" value="SUBMIT" /></td>
        </tr>
    </table>    
</form>