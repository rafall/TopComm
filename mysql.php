<?php
/**
 * Test MySQL connection / inserting
 *
 * Test db table
 *
  CREATE  TABLE `test`.`test_log` (
   `id` INT NOT NULL AUTO_INCREMENT ,
   `message` VARCHAR(255) NULL ,
    PRIMARY KEY (`id`) )
	ENGINE = InnoDB;
  
 * 
 */
 
// Handle errors and warnings
function exceptions_error_handler($severity, $message, $filename, $lineNo)
{
	throw new ErrorException($message, 0, $severity, $filename, $lineNo);
}
set_error_handler('exceptions_error_handler');
 
/**
 * @param mysqli $mysql
 *
 * @return mysqli_result
 */
function get_messages(mysqli $mysql)
{
	$logs = $mysql->query('SELECT id, message FROM test_log');
 
	if($mysql->error)
	{
		die($mysql->error . "\n");
	}
 
	return $logs;
}
 
try
{
	$mysql = new mysqli('localhost', 'rafall', 'secret_pass', 'test');
}
catch (Exception $e)
{
	die($e->getMessage() . "\n");
}
 
$logs = get_messages($mysql);
 
if($logs->num_rows === 0)
{
	// No rows in the DB. We will insert 5 rows. 
	
	$insertQuery = 'INSERT INTO test_log (message) VALUES ("message %s")';
	for($x = 0; $x < 5; $x++)
	{
		$mysql->query(sprintf($insertQuery, $x));
	}
 
	$logs = get_messages($mysql);
}
 
 
 
$mysql->close();
 
?>
 
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>MySQL test</title>
</head>
<body>
 
<table>
	<?php while($log = $logs->fetch_object()): ?>
	<tr>
		<th><?php echo $log->id ?></th>
		<td><?php echo $log->message ?></td>
	</tr>
	<?php endwhile; $logs->free(); ?>
</table>
 
</body>
</html>