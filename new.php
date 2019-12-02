<?php
session_start(); // starta en session
include 'include/db.php';

$filteredId = "";

if(isset($_POST['submit'])) {
    echo "<pre>" . print_r ($_POST, 1) . "</pre>";

    $filteredId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);


$sth = $dbh->prepare('INSERT INTO story (body) VALUES :filteredBody");
$sth->bindParam(':filteredBody' , $filteredBody );
$sth->execute();
}

$page_title = "Soloäventyr - Start";

include 'views/index_layout.php';

?>