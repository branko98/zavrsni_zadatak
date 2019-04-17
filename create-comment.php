<?php
    include("db.php");

    if(!empty($_POST)){
        $author = $_POST['author'];
        $comment = $_POST['comment'];
        $id = $_POST['id'];

        $sqlInsert = "INSERT INTO comments (author, text, post_id) VALUES ('{$author}', '{$comment}', {$id});";
        // echo $sqlInsert;
        $statementInsert = $connection->prepare($sqlInsert);
        // echo 1;
        $statementInsert->execute();
        // echo 1;
        $statementInsert->setFetchMode(PDO::FETCH_ASSOC);
        // echo 1;
    }

    header("Location: http://localhost:8000/single-post.php?post_id=$id");
    // exit;
?>