<?php
    include_once('system/data.php');

    session_start();
    $questionID = $_SESSION['questionID'];
    $userID = $_SESSION['userID'];

    $result = get_answers($questionID, $userID);
    
    while($answer = mysqli_fetch_assoc($result)){
        echo $answer['answer'].'<br>';
    }

?>