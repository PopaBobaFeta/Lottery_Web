<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "lotterydb";
//class Notif{
//    public $desc;
//    public $id;
//    public $date;
//    public $status;
//
//    function __construct($id,$desc,$date,$status) {
//        $this->id = $id;
//        $this->desc = $desc;
//        $this->date = $date;
//        $this->status = $status;
//    }
//
//    function get_id(){
//        return $this->id;
//    }
//
//    function get_desc(){
//        return $this->desc;
//    }
//
//    function set_desc($descr){
//        $this->desc = $descr;
//    }
//
//    function set_status($stat){
//        $this->status = $stat;
//    }
//
//    function get_status(){
//        return $this->status;
//    }
//
//    function get_date(){
//        return $this->date;
//    }
//}
    //Create connection
    $con = mysqli_connect($serverName, $userName, $password, $dbName);
    if (mysqli_connect_errno()){
        echo "Failed to connect! ";
        exit();
    }

    if (isset($_POST["post_delete"])){
        $id = $_POST["deleteId"];
        $sql = "DELETE FROM notifications WHERE Id = '$id';";
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "lotterydb";
        $con = mysqli_connect($serverName, $userName, $password, $dbName);
        $res = mysqli_query($con,$sql) or die("OWIBKA" . mysqli_error($con));
        mysqli_close($con);
        header("location:index.php");
    }

    if (isset($_POST["submit_user"])){
        if(isset($_POST["userName"])) {
            $user_name = $_POST["userName"];
            $sql = "SELECT * FROM users WHERE userName = ?;";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL Statement Failure !";
            } else {
                //Bind parameter for the placeholder
                mysqli_stmt_bind_param($stmt, "s",$user_name);
                //Run parameters
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $uName = "";
                $uPass = "";
                $uBalance = 0;
                while ($row = mysqli_fetch_assoc($result)){
                    $uName = $row['UserName'];
                    $uPass = $row['UserPassword'];
                    $uBalance = $row['Balance'];
                }
            }
            if($uName == $_POST['userName'] && $uPass == $_POST['userPassword']){
                session_start();
                $_SESSION['Auth'] = $uName.",".$uPass;
                $_SESSION['Balance'] = $uBalance;
            }
            header("location:index.php");
        }
    }

    if(isset($_POST["submit_comment"])){
        $commentAuthor = "";
        $commentText = "";
        $commentAuthor = $_POST["author"];
        $commentText = $_POST["comment_text"];
        $gameIdd = 1;
        $sqll = "INSERT INTO comments (game_id,user_name,comment_text) VALUES($gameIdd,'$commentAuthor','$commentText')";
//        $stmt = mysqli_stmt_init($con);
//        if (!mysqli_stmt_prepare($stmt, $sql)) {
//            echo "SQL Statement Failure !";
//        } else {
//            mysqli_stmt_execute($stmt);
//        }
        $conn = new mysqli($serverName, $userName, $password, $dbName);
        if ($conn->query($sqll) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sqll . "<br>" . $conn->error;
        }
        header("location:preGame.php");
    }
class Comment{
        public $gameId;
        public $text;
        public $user_name;

    function __construct($gameId,$text,$user_name) {
        $this->gameId = $gameId;
        $this->text = $text;
        $this->user_name = $user_name;
    }

    function get_id(){
        return $this->gameId;
    }

    function get_text(){
        return $this->text;
    }

    function get_userName(){
        return $this->user_name;
    }

}
    function get_comments(){
        $comments = array();
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "lotterydb";
        $con = mysqli_connect($serverName, $userName, $password, $dbName);
        $sql = "SELECT * FROM comments WHERE game_id = 1;";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL Statement Failure !";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $gameId = 0;
            $user = "";
            $text=  "";
            while ($row = mysqli_fetch_assoc($result)){
                $gameId = $row['game_id'];
                $user = $row['user_name'];
                $text = $row['comment_text'];
                array_push($comments,new Comment($gameId,$text,$user));
            }
        }
        return $comments;

    }

    function getNotification()
    {
//        if (isset($_GET['get_notif'])) {
//            $sql = "SELECT * FROM notifications WHERE checkField = ?";
//            $serverName = "localhost";
//            $userName = "root";
//            $password = "";
//            $dbName = "lotterydb";
//            $con = mysqli_connect($serverName, $userName, $password, $dbName);
//            $stmt = mysqli_stmt_init($con);
//            $vara = "unchecked";
//            if (!mysqli_stmt_prepare($stmt, $sql)) {
//                echo "SQL Statement Failure !";
//            } else {
//                //Bind parameter for the placeholder
//                mysqli_stmt_bind_param($stmt, "s", $vara);
//                //Run parameters
//                mysqli_stmt_execute($stmt);
//                $result = mysqli_stmt_get_result($stmt);
//                $id = 0;
//                $desc = "";
//                $date = "";
//                $status = "";
//                $notifArray = array();
//                while ($row = mysqli_fetch_assoc($result)) {
//                    $id = $row['id'];
//                    $desc = $row['notifDesc'];
//                    $date = $row['notifDate'];
//                    $status = $row['notifCheck'];
//                    array_push($notifArray, new Notif($id, $desc, $date, $status));
//                }
//                session_start();
//                $_SESSION['notifArray'] = $notifArray;
//            }
            header("location:index.php");
//        }
    }





?>