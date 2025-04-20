<!-- Purpose: connect to the database -->

<?php
	//check if the database file exists
	if(!is_file('database/chesterfield.db')){
		file_put_contents('database/chesterfield.db', null);
	}
	// database connection
	$connection = new PDO('sqlite:database/chesterfield.db');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
