<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KK</title>
	<style>
		ul.st{
			list-style-type: none;
		}
		.st>li{
			display: inline-block;
			width: 100px;
			border: 1px solid black;
			height: 100px;
			margin:0 5px;
		}
	</style>
</head>
<body>
	<form>
		<table border="1px">
				<tr>
					<td colspan="2"><h1>Register Form</h1></td>
				</tr>
				<tr>
					<td>Full Name</td>
					<td><input type="text" id="name" name="name"></input></td>
				</tr>
				<tr>
					<td>Sex</td>
					<td>
						<label><input type="radio" id="male" name="sex"></input>Male</label>
						<label><input type="radio" id="female" name="sex"></input>Female</label>
					</td>
				</tr>
				<tr>
					<td>Nation</td>
					<td><input type="text" id="nation" name="nation"></input></td>
				</tr>
				<tr>
					<td>Language</td>
					<td>
						<label><input type="checkbox" id="kh" name="kh"></input>KHMER</label>
						<label><input type="checkbox" id="en" name="en"></input>ENGLISH</label>
						<label><input type="checkbox" id="ch" name="ch"></input>CHINA</label>
						<label><input type="checkbox" id="other" name="other"></input>Other</label>
					</td>
				</tr>
				<tr>
					<td>Date of birth</td>
					<td><input type="date" id="date" name="date"></input></td>
				</tr>
				<tr>
					<td>Place of birth</td>
					<td><textarea id="pob" name="pob"></textarea></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" id="email"></input></td>

				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pw" id="pw"></input></td>
				</tr>
			
			
		</table>
	</form>
	<button id="click">Shuffle</button>
	<ul class="st">
		<?php

			$arr=['red','blue','green','black','pink','grey'];
		function shuffleItem($item){
			shuffle($item);
			for ($i=0; $i < count($item); $i++) { 
				echo '<li style="background: '.$item[$i].'"></li>';
			}
			
		}
		shuffleItem($arr);

		?>
	</ul>
</body>
</html>