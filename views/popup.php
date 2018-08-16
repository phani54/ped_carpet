
<style>
.errorCls {
	color: orange;
	font: 11px Arial
}
.label {
	color: #FFF !important;
}
</style>
 <link rel="stylesheet" href="<?php echo URL;?>/assets/css/simpleToastMessage.css" media="screen" type="text/css" />
 <script src="<?php echo URL;?>/assets/js/simpleToastMessage.js"></script> 

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
                    <form method="POST" name="loginfrm" id="loginfrm">
                        <small id="err_msg"></small>
                        <div class="form-group mt-10">
                            <div class="">
                                <input type="text" name="mobile" id="mobile" class="common-input mobile required" placeholder="Mobile Number/Profile Id" mob_check="">
                                <!--<small class="lv-alert alert-danger">Please enter a valid email address</small> --></div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input type="password" name="password" id="password" class="common-input required" placeholder="Password">
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
                            <!-- <li><a href="#">Resend Activation Email</a></li> -->
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="login-or-register"><span class="_43mh">OR</span></div>
                    <div class="login-register-section">
                        <p>Don't have an account?</p>
                        <div class="form-group">
                            <div class="" align="center">
                                <a href="<?php echo URL;?>register.php" id="HP_Banner_Register_CTA" class="btn btn-primary "> REGISTER FREE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="otp_check_model" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body"> <!-- <a href="javascript:void(0);" class="loginclose" data-dismiss="modal">&times;</a> -->
                <div class="login-form-section">
                    <div class="lpage-overlay loader-wrapper">
                        <div class="disc-loader-svg"></div>
                    </div>
                    <h2>Please enter OTP</h2>
                    <!-- <p>And begin a beautiful journey</p> -->
                    <label class="label lsuccess-text" style="font-size: 12px; text-align: center;"></label>
                    <form method="POST" name="otp_checker" id="otp_checker">
                        <small id="err_msg_otp"></small>
                        <div class="form-group mt-10">
                            <div class="">
                                <input type="text" name="otp" id="otp" class="common-input mobile required" placeholder="OTP">
                            </div>
                        </div>
                        <input type="hidden" name="hdn_mobile" id="hdn_mobile" value="">
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-lg btn-primary btn-block ripplelink">Verify</button>
                            </div>
                        </div>
                    </form>
                    <div class="login-forgot-link">
                        <ul class="list-inline">
                            <li><a href='javascript:;' onclick="resend_otp()">Resend OTP?</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="forget_pwd_mob_check" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body"> <!-- <a href="javascript:void(0);" class="loginclose" data-dismiss="modal">&times;</a> -->
                <div class="login-form-section">
                    <div class="lpage-overlay loader-wrapper">
                        <div class="disc-loader-svg"></div>
                    </div>
                    <h2>Please enter registered mobile number</h2>
                    <!-- <p>And begin a beautiful journey</p> -->
                    <label class="label lsuccess-text" style="font-size: 12px; text-align: center;"></label>
                    <form method="POST" name="mobile_checker" id="mobile_checker">
                        <small id="err_msg_"></small>
                        <div class="form-group mt-10">
                            <div class="">
                                <!-- <input type="text" name="otp" id="otp" class="common-input mobile required" placeholder="OTP"> -->
                            </div>
                        </div>
                        <!-- <input type="hidden" name="hdn_mobile" id="hdn_mobile" value=""> -->
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-lg btn-primary btn-block ripplelink">Verify</button>
                            </div>
                        </div>
                    </form>
                    <div class="login-forgot-link">
                        <ul class="list-inline">
                            <li><a href='javascript:;' onclick="resend_otp()">Resend OTP?</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#loginfrm').validate({
        rules:{
            password:{
                required:true,
            },
            mobile:{
                required:true,
            },
        },
        messages: {
            password:
            {
                required: "Please enter password",
            },
            mobile:
            {
                required: "Please enter mobile number/profile id",
            },
        },
        submitHandler: function(form) 
        {
            $.ajax({
                url: "<?php echo URL ?>server/server.php",
                data: {mobile:$('#mobile').val(),password:$('#password').val(),action:'login'},
                type:'POST',
                datatype:'json',
                success : function(response)
                {
                    var response =JSON.parse(response);
                    if(response['status']=='success')
                    {
                        window.location = '<?php echo URL_VIEW ?>dashboard.php';
                    }
                    else
                    {
                        $('#err_msg').addClass('lv-alert alert-danger');
                        $('#err_msg').text('In-valid credentials');
                    }
                }
            })
        }
    });

    $('#otp_checker').validate({
        rules:{
            otp:{
                required:true,
            },
        },
        messages: {
            otp:
            {
                required: "Please enter OTP",
            },
        },
        submitHandler: function(form) 
        {
            $.ajax({
                url: "<?php echo URL ?>server/server.php",
                data: {otp:$('#otp').val(),hdn_mobile:$('#hdn_mobile').val(),action:'auth_otp'},
                type:'POST',
                datatype:'json',
                success : function(response)
                {
                    var response =JSON.parse(response);
                    if(response['status']=='success')
                    {
                        window.location = '<?php echo URL_VIEW ?>profile_details.php';
                    }
                    else
                    {
                        $('#err_msg_otp').addClass('lv-alert alert-danger');
                        $('#err_msg_otp').text(response['msg']);
                    }
                }
            })
        }
    });
    function resend_otp()
    {
        $.ajax({
            url: "<?php echo URL ?>server/server.php",
            data: {hdn_mobile:$('#hdn_mobile').val(),action:'resend_otp'},
            type:'POST',
            datatype:'json',
            success : function(response)
            {
                var response =JSON.parse(response);
                if(response['status']=='success')
                {
                    $('#err_msg_otp').removeClass('lv-alert alert-danger');
                    $('#err_msg_otp').addClass('lv-alert alert-success');
                    $('#err_msg_otp').text('Message sent');
                }
                else
                {
                    $('#err_msg_otp').removeClass('lv-alert alert-success');
                    $('#err_msg_otp').addClass('lv-alert alert-danger');
                    $('#err_msg_otp').text(response['msg']);
                }
            }
        })
    }
</script>
<!-- Login Popup End -->
