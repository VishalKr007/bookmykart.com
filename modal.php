<!--login modal-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="color:white;"><span class="glyphicon glyphicon-lock"></span><b>  LOGIN</b></h4>
            </div>
            <div class="modal-body">
                <form role="form" action="login_script.php" method="POST">
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span>Username</label>
                        <input type="email" class="form-control"  id="usrname" placeholder="Email" name="email" required = "true">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>Password</label>
                        <input type="password" class="form-control" id="psw" placeholder="Password" name="password" required = "true">
                    </div><br>
                    <div class="checkbox">
                        <label><input type="checkbox" value="checked">Remember me</label>
                    </div><br><br>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <p>Don't have an account?<a href="signup.php">Register</a></p>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
<!--modal end-->
