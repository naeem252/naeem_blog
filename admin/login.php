<?php include "../share/initialize.php"; ?>
<?php include "../share/includes/admin_header.php";?>
<?php

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $sql="SELECT * FROM admins WHERE username='".$username."'";
    $send_q=mysqli_query($database,$sql);
    $user=mysqli_num_rows($send_q);
    if($user>0){
        $user_info=mysqli_fetch_assoc($send_q);
        if($pass==$user_info['password']){
            login_user($user_info);
        }else{
            header("Location:login.php");
        }
    }
}

?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    Log In
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <input type="submit" name="login" value="Log In" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
