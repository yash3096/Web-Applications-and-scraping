<html>
	<head>
		<title></title>
	</head>
	<body>
		<div align="center">
			<h3>User List</h3>
			<table>
				<tr>
					<th>Username</th>
					<th>Gender</th>
				</tr>
				<?php	foreach ($result as $row): /*{*/?>
					<tr>
						<td><?= $row["username"] ?></td>
						<td><?= $row["gender"] ?></td>
					</tr>
				<?php endforeach /*}*/?>
			</table>
		</div>
	</body>
</html>