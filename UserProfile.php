<?php
include_once "_header.php";
include_once "_navbar.php";
include_once "connect_userdb.php";
?>

<div class="container">
    <h1>UserProfile</h1>
    <?php
                $query = "SELECT `Name`, `Email`, `Phone`, `BirthDay`, `Photo` FROM `tbl_users`";
                //ADO.NET Command
                $sth = $dbh->prepare($query);
                //run
                $sth->execute();
                //reader - read data 
                
                while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                    echo '
                    <div class="row profile">
                    <div class="col-md-3">
                        <div class="profile-sidebar">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src=' . $row["Photo"] . ' class="img-responsive" alt="">
                            </div>
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name">
                                ' . $row["Name"] . '
                                </div>
                                <div class="profile-usertitle-job">
                                ' . $row["Email"] . '
                                </div>
                                <div class="profile-usertitle-job">
                                ' . $row["Phone"] . '
                                </div><div class="profile-usertitle-job">
                                ' . $row["BirthDay"] . '
                                </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                        </div>
                    </div>
                </div>
       
        ';
                }
                ?>
   
</div>

<?php
include_once "_scripts.php";
include_once "_footer.php";
?>