<?php
    function get_db_connection()
	   {
        $db = mysqli_connect('localhost','521772_6_1','GsSxKkgjhABU','521772_6_1');
        if (mysqli_connect_error()) {
            die('Verbindungsfehler (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }
        mysqli_query($db, "SET NAMES 'utf8'");
        return $db;
	}



//    function get_db_connection()
//	   {
//        $db = mysqli_connect('localhost','521772_6_2','4XuDcxVWy6ak','521772_6_2');
//        if (mysqli_connect_error()) {
//            die('Verbindungsfehler (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
//        }
//        mysqli_query($db, "SET NAMES 'utf8'");
//        return $db;
//	}

    function get_result($sql)
	{
		$db = get_db_connection();
    //echo $sql ."<br>";
		$result = mysqli_query($db, $sql);
		mysqli_close($db);
		return $result;
	}

    function get_question_by_id($id){
		$sql = "SELECT * FROM question WHERE questionID=$id;";
		return get_result($sql);
	}

    function get_answers($id, $userID){
		$sql = "SELECT * FROM answer WHERE questionID=$id AND userID=$userID;";
		return get_result($sql);
	}


    function write_answer($answer, $questionID, $wsID, $userID){
		$sql = "INSERT INTO answer (answer, questionID, wsID, userID) VALUES ('$answer', $questionID, $wsID, $userID);";
		return get_result($sql);
	}



?>