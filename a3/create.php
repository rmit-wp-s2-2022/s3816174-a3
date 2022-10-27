<?php require_once("functions.php");
$title = "Create Student"; ?>

<?php require_once("header.php"); ?>



<main class="appointment-list">
    <h1>Create Student</h1>
    <div class="form" style="margin-top: 30px;">
        <?php
            if(isset($_POST['button'])) {
                $ch_sid = check_sid($_POST['StudentID']);
                $ch_fname = check_name($_POST['FirstName']);
                $ch_lname = check_name($_POST['LastName']);
                $ch_phone = check_phone($_POST['MobilePhone']);
                if ($ch_sid && $ch_fname && $ch_lname && $ch_phone) {
                    header("Location: ./index.php");
                    die();
                }
                // header("Location: ./index.php");
                // die();
            }
        ?>
        <form class="form-horizontal create_form" role="form" method="post">
            <div class="form-group">
                <label class="col-sm-2 control-label">Student ID</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="StudentID">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="FirstName">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="LastName">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Mobile Phone</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="MobilePhone">
                </div>
            </div>
            <div class="form-group">
                <input class="" type="submit" name="button" value="Submit"/>
            </div>
        </form>
    

        <!-- <form action="#" id="postForm" method="post">
            <div class="item">
                <label>Student ID</label>
                <input type="text" class="input" name="username"
                       value="<?= $username == null ? '' : $username ?>"/>

                <?php
                if ($username_err != null) {
                    echo '<div style="color: red;">
                    <div style="text-align: center">' . $username_err . '</div>
                </div>';
                }
                ?>

            </div>
        </form> -->
    </div>
</main>

<?php require_once("footer.php"); ?>
