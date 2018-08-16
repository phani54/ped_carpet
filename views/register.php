<?php 

if(isset($_SESSION['Login_Session']))
{
    header('Location:profile_details.php');
}

include "inner_header.php";
?>
 
<div class="slider-bg">
    <!-- Banner start-->
    <div class="couple-hero-section-img1" alt=""></div>
	<div class="find-section">
		<!-- Find search section-->
		<div class="container">
			<div class="row">
				<h2 style="color: #fff; text-align:center; top:25%; left:17%; position:absolute; font-size: 40px; font-family: 'Pacifico', cursive; line-height: 1.5;">Perfect place for <br>your perfect match!</h2>
				<div style="position: absolute;top: 4%;right: 10%;" class="pull-right">
					<div class="col-xs-12 col-md-8 col-sm-6 box well" style="padding:15px 15px 30px 15px; width: 480px; border-radius: 5px;">
	                    <div class="page-overlay loader-wrapper">
			                <div class="disc-loader-svg"></div>
                        </div>
                        <label class="label success-text" style="font-size: 12px; text-align: center;"></label>
						<form id="reg_form" method="post" autocomplete="off" autofocus="off" name="reg_form">
						    <h1 style="color: #ed3237;">Register FREE</h1>
							<label>
                                <input type="radio" checked="" name="p_gender" id="p_gender_f" value="Female">Bride
                            </label>&nbsp;&nbsp;
							<label>
                                <input type="radio" name="p_gender" id="p_gender_m" value="Male">Groom
                            </label>
							<br><br>
							<div class="input-group" id="hidestate">
                                <div class="input-group-addon">
                                    Profile Created By 
                                    <span style="color:red">*</span> 
                                </div>
                                <select class="form-control required" name="p_created_by" id="p_created_by">
                                    <option value="">-- Select --</option>
                                    <option value="Self">Self</option>
                                    <option value="Parents">Parents</option>
                                    <option value="Sibling">Sibling</option>
                                    <option value="Relative">Relative</option>
                                    <option value="Friend">Friend</option>
                                </select>
                            </div> 
                            <div class="input-group">
                                <div class="input-group-addon">
                                    Name 
                                    <span style="color:red">*</span>
                                </div>
                                <input type="text" class="form-control"  value="" name="name" id="name">
                            </div>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    Email 
                                    <span style="color:red">*</span>
                                </div>
                                <input type="email" class="form-control"  value="" name="email" id="email">
                            </div>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    Mobile 
                                    <span style="color:red">*</span>
                            </div>
                                <input type="number" class="form-control"  value="" name="reg_mobile" id="reg_mobile">
                            </div>						
                            <div class="input-group">
                                <div class="input-group-addon">
                                    Password 
                                    <span style="color:red">*</span>
                                </div>
                                <input type="password" class="form-control"  value="" name="pwd" id="pwd">
                            </div>		
                            <div class="input-group">
                                <div class="input-group-addon">
                                    Confirm Password 
                                    <span style="color:red">*</span>
                                </div>
                                <input type="password" class="form-control"  value="" name="c_pwd" id="c_pwd">
                            </div>				
                                <button type="submit" value="register" name="register" class="btn btn-lg btn-primary btn-block ripplelink">Register</button>
                                <input type="hidden" name="sec_num" id="sec_num">
                                <br>
                                Already have an account? <a href="" class="dismiss" data-toggle="modal" data-target="#loginModal" ><b>Login Here</b></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- /.Find search section-->
</div>

<div class="main page-bg">
    <div class="container-fluid mobile-padding-lr0">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
            <div class="LV-package-box"></div>	
        </div>         
    </div>
</div>   

<?php require 'footer.php'; ?> 
<?php require 'popup.php'; ?>

<script type="text/javascript">

$('#reg_form').validate({
        rules:{
            p_created_by:{
                required:true,
            },
            reg_mobile:{
                required:true,
                minlength:10,
                maxlength:10
            },
            name:{
                required:true,
                minlength:3
            },
            email:{
                required:true,
                email:true
            },
            pwd:{
                required:true
            },
            c_pwd:{
                required:true,
                equalTo: "#pwd"
            }
        },
        messages: {
            p_created_by:
            {
                required: "Please select your preference",
            },
            reg_mobile:
            {
                required: "Please enter mobile number",
                minlength:"Please enter valid number",
                maxlength:"Please enter valid number"
            },
            name:{
                required:"Please enter name",
                minlength:"Minimum lenth is 3"
            },
            email:{
                required:"Please enter email",
                email:"Please enter valid email"
            },
            pwd:{
                required:"Please enter password"
            },
            c_pwd:{
                required:"Please re-enter your password",
                equalTo:"Please enter the same password as above"
            }
        },
        submitHandler: function(form) 
        {
            $.ajax({
                url: "<?php echo URL?>server/server.php",
                data: {p_created_by:$('#p_created_by').val(),mobile:$('#reg_mobile').val(),name:$('#name').val(),   email:$('#email').val(),pwd:$('#pwd').val(),c_pwd:$('#c_pwd').val(),action:'register_step1'},
                type:'POST',
                datatype:'json',
                success : function(response)
                {
                    var response =JSON.parse(response);
                    if(response['status']=='success' || response['msg'] == 'open_otp_model')
                    {
                        $('#hdn_mobile').val(response['pro_mobile']);
                        $('#otp_check_model').modal('show');
                    }
                    else
                    {
                        if(response['msg'] == 'open_profile')
                        {
                            window.location = '<?php echo URL ?>profile_details.php';
                        }
                        else
                        {
                            $('#err_msg_otp').addClass('lv-alert alert-danger');
                            $('#err_msg_otp').text(response['msg']);
                        }
                    }
                }
            })
        }
    });
</script>
<script src="<?php echo URL ?>assets/js/owl-carousel/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		var owl = $('.matcheRecievedsall');
		owl.owlCarousel({
			margin: 10,
			nav: true,
			loop: false,
			animateOut: 'slideOutDown',
			animateIn: 'fadeIn',			
			responsive: {
				0: {
                    items: 1
				},
				320: {
                    items: 1
				},
				375: {
                    items: 1
				},				  
				480: {
                    items: 1
				},
				768: {
                    items: 1
				},
				992: {
                    items: 1
				}
			}
		})
	});
	
</script>	
	 	
<script type="text/javascript">
    $(document).click(function(e) {		
		if (!$(e.target).is('a')) {
			$('#navbar').collapse('hide');			
		}
	});
	/* for chat popup----dont remove */
	$(window).on('load', function() {
		if($(window).width() > 480) {
			$('.opencometchat').addClass('cometchat_profile');
			$('.opencometchat').removeClass('cometchat_ccmobiletab_redirect_custom');
			$('.cometchat_profile').unbind('click');
			$('.cometchat_profile').bind('click', function(e){
				jqcc.cometchat.userClick(e.target,0);
			});
		}else{
			$('.opencometchat').addClass('cometchat_ccmobiletab_redirect_custom');
			$('.opencometchat').removeClass('cometchat_profile');
			$('.cometchat_ccmobiletab_redirect_custom').unbind('click');
			$('.cometchat_ccmobiletab_redirect_custom').bind('click',function(e){
				var userId = $(e.target).attr('id');
				userId = userId.substr(19);
				jqcc.ccmobiletab.chatWith(userId);
			});
		}
	});
	/* for chat popup----dont remove */	
	
</script>
<script type="text/javascript">  
	$(document).ready(function () {
		$('.myButton').click(function(){   
			$(this).find('i').toggleClass('fa-plus-circle fa-minus-circle')
		});	
	 });
	$(document).click(function() {
	  var className = $('#myNavbar').attr('class');
	  if('navbar-collapse collapse in'){
		$('#myNavbar').removeClass( "navbar-collapse collapse in" ).addClass( "navbar-collapse collapse");
		}   
	}); 
</script>
</body>
</html>