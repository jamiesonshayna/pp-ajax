<?php

//require_once('/home/sjamieso/config-dating.php');

$dbh = null;

define("DB_DSN", "mysql:dbname=sjamieso_grc");
define("DB_USERNAME", "sjamieso_grcuser");
define("DB_PASSWORD", 'Bubblegum.69');

try {
    $dbh = PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    echo "connecte!";
} catch(PDOException $e) {
    echo $e->getMessage();
    return null;
}

$searchVal = $_POST['word'];

$terms = array('ajax' => 'a Greek hero in the Trojan War who kills himself because the armor of Achilles is awarded to Odysseus.',
    'button' => 'a small disk or knob sewn on to a garment, either to fasten it by being pushed through a slit made for the purpose or for decoration.',
    'load' => 'a heavy or bulky thing that is being carried or is about to be carried.',
    'input' => 'what is put in, taken in, or operated on by any process or system.',
    'doctype' => 'a doctype or document type declaration is an instruction which tells the web browser about the markup language in which the current page is written.'
);

//echo "<p><strong>$searchVal: </strong>{$terms[$searchVal]}</p>";