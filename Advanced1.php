<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<title>Basic IV</title>
</head>

<body>

	<table>
		<tr>
		<th>User #</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Full Name</th>
		<th>Full Name in upper case</th>
		<th>Length of name</th>
		</tr>

	<?php
		$users = array( 
		   array('first_name' => 'Michael', 'last_name' => ' Choi '),
		   array('first_name' => 'John', 'last_name' => 'Supsupin'),
		   array('first_name' => 'Mark', 'last_name' => ' Guillen'),
		   array('first_name' => 'KB', 'last_name' => 'Tonel') 
		);

		//add 10 more users to the $users array
		$users[] = array('first_name' => 'David', 'last_name' =>'Ethier');
		$users[] = array('first_name' => 'Leslie', 'last_name' =>'Knope');
		$users[] = array('first_name' => 'George', 'last_name' =>'Bush');
		$users[] = array('first_name' => 'Spungebob', 'last_name' =>'Squarepants');
		$users[] = array('first_name' => 'Patrick', 'last_name' =>'Lahie');
		$users[] = array('first_name' => 'Bernie', 'last_name' =>'Sanders');
		$users[] = array('first_name' => 'Franklin', 'last_name' =>'Roosevelt');
		$users[] = array('first_name' => 'Mohandas', 'last_name' =>'Gandhi');
		$users[] = array('first_name' => 'Oprah', 'last_name' =>'Winfrey');
		$users[] = array('first_name' => 'Albert', 'last_name' =>'Einstein');
				   
		

		$i =1;//counter for the number of users

		foreach($users as $user){

			$full_name = trim($user['first_name'])." ".trim($user['last_name']);


			//every fifth row applies the "black" css class on the row
			if($i%5==0){

				echo "<tr class='black'><td>" . $i . "</td><td>" . $user['first_name'] . "</td><td>" . $user['last_name'] . "</td><td>" . $full_name .
				 "</td>" . "<td>" . strtoupper($full_name) . "</td><td>" .  strlen($full_name) . "</td>    </tr>";
				 $i++;

			}

			else{

				echo "<tr><td>" . $i . "</td><td>" . $user['first_name'] . "</td><td>" . $user['last_name'] . "</td><td>" . $full_name .
				 "</td>" . "<td>" . strtoupper($full_name) . "</td><td>" .  strlen($full_name) . "</td>    </tr>";

				$i++;
			}

		}


	

	?>

	</table>

</body>
</html>