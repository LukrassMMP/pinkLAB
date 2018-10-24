<?php

    include_once('system/data.php');

    session_start();
    $_SESSION['questionID'] = 2;
    $_SESSION['wsID'] = 1;
    $_SESSION['userID'] = 2;


    $questionID = $_SESSION['questionID'];
    $wsID = $_SESSION['wsID'];
    $userID = $_SESSION['userID'];

    $question = get_question_by_id($questionID);
    $question = mysqli_fetch_assoc($question);
    $question = $question['questionText'];

    if(isset($_POST['create_submit'])){
        $answer = $_POST['eingabe'];
        write_answer($answer, $questionID, $wsID, $userID);
    };
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/my_script.js"></script>
        <title>pinkLAB</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div>
                <label for="id_eingabe"><?php echo $question?></label>
                <input type="text" name="eingabe" id="id_eingabe">
            </div>
            <input type="submit" name="create_submit" value="Antwort eintragen">
        </form>
        <h3>Antworten</h3>
        <p id="show"></p>
    </body>
</html>



    
