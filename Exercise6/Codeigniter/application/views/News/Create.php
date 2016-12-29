<html>
<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
<style>
	body{
			background-image: url(<?=base_url()?>Images/Orangy.jpg);
			color: white;
		}
		</style>
 
<?php echo form_open('news/create'); ?>    
    <table>
        <tr>
            <td><label for="Name">Name</label></td>
            <td><textarea name="Name" rows="1" cols="40"></textarea></td>
        </tr>
        <tr>
            <td><label for="Nickname">Nickname</label></td>
            <td><textarea name="Nickname" rows="1" cols="40"></textarea></td>
        </tr>
		<tr>
            <td><label for="Email">Email</label></td>
            <td><textarea name="Email" rows="1" cols="40"></textarea></td>
        </tr>
		<tr>
            <td><label for="Home_Address">Home Address</label></td>
            <td><textarea name="Home_Address" rows="2" cols="40"></textarea></td>
        </tr>
		<tr>
            <td><label for="Gender">Gender</label></td>
            <td><textarea name="Gender" rows="1" cols="10"></textarea></td>
        </tr>
		<tr>
            <td><label for="Cp_Num">Cellphone number</label></td>
            <td><textarea name="Cp_Num" rows="1" cols="20"></textarea></td>
        </tr>
		<tr>
            <td><label for="Comment">Comment</label></td>
            <td><textarea name="Comment" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create news item" /></td>
        </tr>
    </table>    
</form>
