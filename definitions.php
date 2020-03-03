<?php

require_once('/home/sjamieso/config-dating.php');

$dbh = null;

try {
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
} catch(PDOException $e) {
    echo $e->getMessage();
    return null;
}

$searchVal = $_POST['word'];

$sql = "SELECT definition FROM ajax WHERE word = '$searchVal'";

$statement = $dbh->prepare($sql);

$statement->execute();

$result = $statement->fetch();

echo "<p><strong>$searchVal: </strong>{$result['definition']}</p>";