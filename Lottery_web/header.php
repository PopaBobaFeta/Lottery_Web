<nav class="navbar nav_color navbar-expand-lg sticky-top">
    <?php include "db.php" ?>
    <?php
    session_start();
    class Notif{
        public $desc;
        public $id;
        public $date;
        public $status;

        function __construct($id,$desc,$date,$status) {
            $this->id = $id;
            $this->desc = $desc;
            $this->date = $date;
            $this->status = $status;
        }

        function get_id(){
            return $this->id;
        }

        function get_desc(){
            return $this->desc;
        }

        function set_desc($descr){
            $this->desc = $descr;
        }

        function set_status($stat){
            $this->status = $stat;
        }

        function get_status(){
            return $this->status;
        }

        function get_date(){
            return $this->date;
        }
    }

    $sql = "SELECT * FROM notifications WHERE notifCheck = ?;";
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "lotterydb";
    $con = mysqli_connect($serverName, $userName, $password, $dbName);
    $stmt = mysqli_stmt_init($con);
    $vara = 'unchecked';
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL Statement Failure !";
    } else {
        //Bind parameter for the placeholder
        mysqli_stmt_bind_param($stmt, "s", $vara);
        //Run parameters
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $id = 0;
        $desc = "";
        $date = "";
        $status = "";
        $notifArray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['Id'];
            $desc = $row['notifDesc'];
            $date = $row['notifDate'];
            $status = $row['notifCheck'];
            array_push($notifArray, new Notif($id, $desc, $date, $status));
        }
    }
        $_SESSION['nArray'] = $notifArray;


    ?>
    <a class="navbar-brand" href="#"><img src="logo.png" style="height: 45px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse pos_nav" id="#navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="games.php">GAMES</a>
      </li>
      <?php
        if(!isset($_SESSION['Auth'])){
      ?>
      <li class="nav-item">
        <div class="dropdown">
          <button class="btn btn_nav_color" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: 400; font-family: 'Rubik', sans-serif !important; ">
          LOG IN
          </button>
              <form class="dropdown-menu p-4" action="db.php" method="post">
                  <div class="form-group">
                    <label for="exampleDropdownFormEmail2">Email address</label>
                    <input type="text" class="form-control" id="exampleDropdownFormEmail2" placeholder="Nickname" name="userName">
                  </div>
                  <div class="form-group">
                    <label for="exampleDropdownFormPassword2">Password</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" name="userPassword">
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                      <label class="form-check-label" for="dropdownCheck2">
                        Remember me
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit_user">Log in</button>
              </form>
              <!-- <div class="dropdown-menu drp_dwn_color" aria-labelledby="dropdownMenuButton"> -->
            <!-- <a class="dropdown-item" href="#">My Profile</a> -->
            <!-- <div class="dropdown-divider"></div> -->
            <!-- <a class="dropdown-item" href="#">Log Out</a> -->
              <!-- </div> -->
        </div>
    </li>
        <?php } else {
            $str = $_SESSION['Auth'];
            $str = explode(",",$str);
            $name = $str[0];
            $balance = $_SESSION['Balance'];
            ?>
            <li class="nav-item">
<!--                <button type="button" class="btn btn-dark">--><?//=$name?><!--</button>-->
                <div class="dropdown">
                    <button class="btn btn-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: 400; font-family: 'Rubik', sans-serif !important; ">
                        <?=$name?>
                    </button>
                    <div class="dropdown-menu p-4">
                        <div class="badge badge-primary text-wrap m-2">
                            Balance : <?=$balance?> $
                        </div>
                        <a class="btn btn-dark" href="#" role="button">My profile</a>
                        <a class="btn btn-danger mt-3" href="#" role="button">LOG OUT</a>
                    </div>
                    <!-- <div class="dropdown-menu drp_dwn_color" aria-labelledby="dropdownMenuButton"> -->
                    <!-- <a class="dropdown-item" href="#">My Profile</a> -->
                    <!-- <div class="dropdown-divider"></div> -->
                    <!-- <a class="dropdown-item" href="#">Log Out</a> -->
                    <!-- </div> -->
                </div>
            </li>
            <?php
        }
      ?>
        <li class="nav-item">
        <a class="nav-link" href="results.php">RESULTS</a>
      </li>
    <?php
        if (isset($_COOKIE['Auth'])){
    ?>
    <li class="nav-item">
        <a class="nav-link" href="registration.php">REGISTRATION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">ADMIN</a>
      </li>
    <?php
        }
    ?>
        <?php
            if (isset($_SESSION['Auth'])){
                ?>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="get_notif">
                            Notifications
                        </button>
                        <div class="dropdown-menu p-2" aria-labelledby="dropdownMenu2" style="width: 300px;">
                            <?php
                            if(!isset($_SESSION['nArray'])){
                            ?>
                                No new notifications
                            <?php
                            } else{
                                if(isset($_SESSION['nArray'])){
                                    $array = $_SESSION['nArray'];

                                for ($i = 0; $i < sizeof($array); $i++){
                            ?>

                                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
                                        <div class="toast-header">
                                            <strong class="mr-auto">Administration</strong>
                                            <small><?=$array[$i]->get_date()?></small>
                                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="toast-body">
                                            <?=$array[$i]->get_desc()?>
                                            <form action="db.php" method="post">
                                                <input type="hidden" value="<?=$array[$i]->get_id()?>" name="deleteId">
                                                <button class="btn btn-primary btn-sm mt-1" type="submit" name="post_delete">Understood</button>
                                            </form>
                                        </div>
                                    </div>
                            <?php
                                        }
                                    }
                            }
                            ?>
                            <script>
                                $('.toast').toast('show');
                            </script>
                        </div>
                    </div>
                </li>
        <?php
            }
        ?>
    </ul>
  </div>
</nav>