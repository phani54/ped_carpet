
<style>
.errorCls {
	color: orange;
	font: 11px Arial
}
.label {
	color: #FFF !important;
}
</style>
<!-- <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script> -->
<script type="text/javascript">
/*$(document).ready(function() {
    $("#signup_form").validate({
        errorClass: 'cls'
    });
});
$(document).ready(function() {
    $("#remail").keyup(function() {

        var username = $("#remail").val();
        //alert(username);
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (filter.test(username)) {
            $("#span1").html("<img src='<?php echo IURL ?>/assets/images/loader.gif' height='25px' width='25px' /> checking...");
            $.ajax({
                type: "post",
                url: "<?php echo URL ?>ajaxScripts/get",
                data: "qs=" + username,
                success: function(response) {
                    var data = $.trim(response)
                    if (data == 0) {
                        $("#span1").html("Email available");
                        $("#span1").css("color", "green");
                        return true;
                    } else {
                        $("#span1").html("Sorry! This Email already registered");
                        $("#remail").focus();
                        $("#remail").val('');
                        $("#span1").css("color", "red");
                        return false;
                    }
                }
            });
        } else {
            $("#span1").html("Please enter valid format");
            $("#remail").focus();

            $("#span1").css("color", "red");
            return false;
        }
    });
});*/
 </script>
<!-- Login Modal -->
<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body"> <a href="javascript:void(0);" class="loginclose" data-dismiss="modal">&times;</a>
                <div class="login-form-section">
					<div class="lpage-overlay loader-wrapper">
						<div class="disc-loader-svg"></div>
					</div>
                    <h2>Login to your account</h2>
                    <p>And begin a beautiful journey</p>
					<label class="label lsuccess-text" style="font-size: 12px; text-align: center;"></label>
                    <form method="POST" name="loginfrm" id="loginfrm" action="#">
                        <div class="form-group mt-10">
                            <div class="">
                                <input type="email" name="emailid" id="loginEmail" class="common-input emial required" placeholder="Email Address">
                                <!--<small class="lv-alert alert-danger">Please enter a valid email address</small> --></div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input type="password" name="password" id="loginPass" class="common-input required" placeholder="Password">
                                <!--   <small class="lv-alert alert-danger">Wrong password. Try again.</small> --></div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <button type="submit" name="userLogin" value="Login" id="LoginBTN" class="btn btn-lg btn-primary btn-block ripplelink">LOGIN</button>
                            </div>
                        </div>
                    </form>

                    <!--button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button-->

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">User Rigistred Successfully</h4>
                                    <button type="button" style="margin-top:30px;" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="login-forgot-link">
                        <ul class="list-inline">
                            <li><a href="#">Forgot Password ?</a></li>
                            <li><a href="#">Resend Activation Email</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="login-or-register"><span class="_43mh">OR</span></div>
                    <div class="login-register-section">
                        <p>Don't have an account?</p>
                        <div class="form-group">
                            <div class="" align="center">
                                <a href="../3/register.html" id="HP_Banner_Register_CTA" class="btn btn-primary "> REGISTER FREE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login Popup End -->
