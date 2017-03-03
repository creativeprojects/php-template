<?php

// This is a very lame script, just to make sure you can connect to the database
$db_name = getenv("MYSQL_DATABASE");
$db_user = getenv("MYSQL_USER");
$db_password = getenv("MYSQL_PASSWORD");

// The name of your mysql server is the name given in the services list in the docker compose file.
$mysqli = new mysqli("db", $db_user, $db_password, $db_name);

if ($mysqli->connect_error) {
    die("Unable to connect to MySQL: " . mysqli_connect_error());
}

// We make sure the seed script ran
if ($result = $mysqli->query("SELECT `name` FROM `user`")) {
    if ($result->num_rows != 1) {
        die("Warning: Table `user` should contain one row after the seed ran. But it contains " . $result->num_rows . " row(s) instead.");
    }
    $result->close();
}

$mysqli->close();

echo "Congratulations! your development environment is now ready to go!";
