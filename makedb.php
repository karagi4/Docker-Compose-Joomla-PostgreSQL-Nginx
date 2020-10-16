<?php
// Args: 0 => makedb.php, 1 => "$JOOMLA_DB_HOST", 2 => "$JOOMLA_DB_USER", 3 => "$JOOMLA_DB_PASSWORD", 4 => "$JOOMLA_DB_NAME"
$stderr = fopen('php://stderr', 'w');
fwrite($stderr, "\nEnsuring Joomla database is present\n");

if (strpos($argv[1], ':') !== false)
{
	list($host, $port) = explode(':', $argv[1], 2);
}
else
{
	$host = $argv[1];
	$port = 5432;
}

$user = $argv[2];
$password = $argv[3];
$db = $argv[4];

$connection = "host={$host} port={$port} dbname={$db} user={$user} password={$password}";
fwrite($stderr, $connection);

$dbconn = pg_connect($connection)
	or die('Connection Error: ' . pg_last_error());

fwrite($stderr, "\nDatabase Created\n");

pg_close($dbconn);
