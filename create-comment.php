<?php

    if($_POST){
    $author = $_POST['author'];
    $comment = $_POST['comment'];
    $id = $_POST['id'];

    $sqlInsert = "INSERT INTO comments (author, text, post_id) VALUES ({$author}, {$comment}, {$id})";

    $statementInsert = $connection->prepare($sqlInsert);

    $statementInsert->execute();

    $statementInsert->setFetchMode(PDO::FETCH_ASSOC);

}
?>