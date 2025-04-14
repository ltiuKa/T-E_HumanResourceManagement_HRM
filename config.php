<?php

	//$conn = mysqli_connect("localhost", "root", "", "quanly_nhansu");
	//$conn = mysqli_connect("am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "itsiajvhn4a184io", "qeh0dyxjt8lrj1gs", "qzjiq6mzfi02utjx");
	$conn = mysqli_connect("p2d0untihotgr5f6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", //host
							"q6eozefo5y6pr4so", //username
							"l5bx0kfzdy2wsa0d", //password
							"usrwvkzhhhfj2drg"); //database
	// cau hinh database: mysql -u q6eozefo5y6pr4so -p -h p2d0untihotgr5f6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com
	// password: l5bx0kfzdy2wsa0d
	// "C:\Users\Karen\Downloads\quanly_nhansu.sql"

	//database: usrwvkzhhhfj2drg


	if (!$conn) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	
	// Set timezone 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	// set char set
	mysqli_set_charset($conn, 'utf8');
	

?>