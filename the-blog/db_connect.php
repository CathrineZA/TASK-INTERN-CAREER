<?php

// connect to the database
	$conn = mysqli_connect('localhost', 'cathy', 'test2468', 'the_pizza_blog');

	// check connection
	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}

    ?>