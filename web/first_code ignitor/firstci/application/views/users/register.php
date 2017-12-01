<html>
	<head>
		<title></title>
	</head>
	<body>
		<!-- <form> -->
		<?php echo form_open_multipart("users/register"); ?>	
			<input name="username" placeholder="Username" /><br />
			<input name="password" type="password" placeholder="Password"/><br />
			Gender:
			<input type="radio" name="gender" value="M" checked/>Male&nbsp;&nbsp;
			<input type="radio" name="gender" value="F"/>Female<br />
			<input type="file" name="prof_pic"/><br />
			<select>
				<?php foreach ($countries as $country): ?>
					<option><?= $country["name"] ?></option>
				<?php endforeach ?>	
			</select>
			
			<input type="submit" value="Register" />		
		</form>
	</body>
</html>