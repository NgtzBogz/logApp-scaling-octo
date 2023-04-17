<?php
	// Create Connection
	$conn = mysqli_connect("localhost", "root", "root", "elizaldecorp");

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
	}