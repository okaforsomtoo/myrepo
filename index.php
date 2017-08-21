<?php
	// making a connection to the database
	$conn = mysqli_connect('localhost', 'root', '', 'hnginterns');

	// checking if connection was successful and if not, end the page
	if (! $conn) {
	 			  die('Error connecting to Database');
	 } 

	// querying the database, interns table to retrieve all the records
	 $result = mysqli_query($conn, "select * from interns");

	//checking if the records were found
	if ($result) {
		//looping through the records to show them on the page.
		//for easy way to view, we will use a html table here.

		echo 
			'<table>
		<tr>
			<th>S/N</th> <th>Name</th> <th>Slack Username</th>
		</tr>';
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<tr><td>' . $row['id'] . '</td>';
			echo '<td>' . $row['name'] . '</td>';
			echo '<td>' . $row['slack_name'] . '</td></tr>';
		}
		echo '</table>';
	}
 ?>
