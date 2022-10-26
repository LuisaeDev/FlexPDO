<?php

	require_once __DIR__ . '/vendor/autoload.php';

	use LuisaeDev\FlexPDO\FlexPDO;

	// FlexPDO instance
	$fpdo =  new FlexPDO([
		'dbname' => 'mydb',
		'user' => 'root',
		'password' => ''
	]);

	// Execution of SQL statement
	$fpdo
		->prepare('SELECT * FROM users WHERE id = :id')
		->bind(':id', 1, 'int')
		->execute();

	// Result obtained
	while ($row = $sPDO->fetch()) {
		print_r($row);
	}
?>