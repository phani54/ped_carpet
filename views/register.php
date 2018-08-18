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
					<div class="col-xs-12 col-md-8 col-sm-6 box well" style="padding:0px 15px 30px 15px; width: 480px; border-radius: 5px;">
	                    <div class="page-overlay loader-wrapper">
			                <div class="disc-loader-svg"></div>
                        </div>
                        <!-- <label class="label success-text" style="font-size: 12px; text-align: center;"></label> -->
						<form id="reg_form" method="post" autocomplete="off" autofocus="off" name="reg_form" style="max-height: 570px;overflow-y: overlay;">
						    <div>
                            <h1 style="color: #ed3237;">Register FREE</h1>
                            <span style="flaot:right;">Already have an account? <a href="" class="dismiss" data-toggle="modal" data-target="#loginModal" ><b>Login Here</b></a></span>
                            </div>
							<div class="input-group" id="hidestate">
                                <div class="input-group-addon">
                                    Profile For
                                    <!-- <span style="color:red">*</span>  -->
                                </div>
                                <select class="form-control" name="profile_for" id="profile_for">
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
                                    <!-- <span style="color:red">*</span> -->
                                </div>
                                <input type="text" class="form-control"  value="" name="name" id="name">
                            </div>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    Gender 
                                    <!-- <span style="color:red">*</span> -->
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label>
                                    <input type="radio" checked="" name="gender" id="gender_m" value="Male">Male
                                </label>
                                &nbsp;&nbsp;
                                <label>
                                    <input type="radio"  name="gender" id="gender_f" value="Female">Female
                                </label>
                                
                            </div>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    Date of birth 
                                    <!-- <span style="color:red">*</span> -->
                                </div>
                                <input type="text" class="form-control"  value="" name="dob" id="dob">
                            </div>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    Marital status 
                                    <!-- <span style="color:red">*</span> -->
                                </div>
                                <select class="form-control required" name="m_status" id="m_status">
                                    <option value="">--Marital Status--</option>
                                    <option value="Married">Married</option>
                                    <option value="Unmarried" selected="">Unmarried</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    Religion
                                    <!-- <span style="color:red">*</span> -->
                                </div>
                                <select class="form-control required" name="religion" id="religion">
                                    <option value="">--Religion--</option>
                                    <?php $get_religions =  $db->query("SELECT * FROM religions"); 
                                    while($row = $get_religions->fetch()) { ?>
                                    <option value="<?=$row['name'];?>"><?=$row['name'];?></option>
                                <?php } ?>
                                </select>
                            </div>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    Denomination
                                    <!-- <span style="color:red">*</span> -->
                                </div>
                                <select class="form-control required" name="denomination" id="denomination">
                                    <option value="">--Denomination--</option>
                                    <?php $get_denominations =  $db->query("SELECT * FROM denominations"); 
                                    while($row = $get_denominations->fetch()) { ?>
                                    <option value="<?=$row['name'];?>"><?=$row['name'];?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    Sub caste
                                    <!-- <span style="color:red">*</span> -->
                                </div>
                                <select class="form-control required" name="caste" id="caste">
                                    <option value="">--Sub saste--</option>
                                    <?php $get_caste =  $db->query("SELECT * FROM caste"); 
                                    while($row = $get_caste->fetch()) { ?>
                                    <option value="<?=$row['name'];?>"><?=$row['name'];?></option>
                                <?php } ?>
                                </select>
                            </div>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    Mother Tongue
                                    <!-- <span style="color:red">*</span> -->
                                </div>
                                <select class="form-control required" name="mother_tongue" id="mother_tongue">
                                    <option value="">--Mother tongue--</option>
                                    <?php $get_langueges =  $db->query("SELECT * FROM languages"); 
                                    while($row = $get_langueges->fetch()) { ?>
                                    <option value="<?=$row['name'];?>"><?=$row['name'];?></option>
                                <?php } ?>
                                </select>
                            </div>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    Country living in
                                    <!-- <span style="color:red">*</span> -->
                                </div>
                                <select class="form-control required" name="country" id="country">
                                    <option value="">--Country--</option>
                                    <?php $get_countries =  $db->query("SELECT * FROM countries"); 
                                    while($row = $get_countries->fetch()) { ?>
                                    <option value="<?=$row['name'];?>" <?php if($row['name'] == 'India'){ ?> selected="" <?php } ?>><?=$row['name'];?></option>
                                <?php } ?>
                                </select>
                            </div>

                            <!-- <div class="input-group">
                                <div class="input-group-addon">
                                    Email 
                                    <span style="color:red">*</span>
                                </div>
                                <input type="email" class="form-control"  value="" name="email" id="email">
                            </div> -->
                            <div class="input-group">
                                <div class="input-group-addon">
                                    Mobile 
                                    <!-- <span style="color:red">*</span> -->
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <select class="form-control required" name="country_code" id="country_code">
                                    <option value="">--Country Code--</option>
                                    <?php $get_countrie_codes =  $db->query("SELECT * FROM countries"); 
                                    while($row = $get_countrie_codes->fetch()) { ?>
                                    <option value="<?=$row['phonecode'];?>" <?php if($row['phonecode'] == 91){ ?> selected="" <?php } ?>>+<?=$row['phonecode'];?> (<?=$row['name'];?>)</option>
                                <?php } ?>
                                </select>
                                </div>
                                <div class="col-md-8">
                                <input type="number" class="form-control"  value="" name="reg_mobile" id="reg_mobile" title="Mobile number verification ensures creditibility of profiles. You can control the privacy settings to determine who can view your mobile number">
                                </div>
                            </div>
                            </div>						
                            <div class="input-group">
                                <div class="input-group-addon">
                                    Login password 
                                    <!-- <span style="color:red">*</span> -->
                                </div>
                                <input type="password" class="form-control"  value="" name="pwd" id="pwd">
                            </div>		
                            <!-- <div class="input-group">
                                <div class="input-group-addon">
                                    Confirm Password 
                                    <span style="color:red">*</span>
                                </div>
                                <input type="password" class="form-control"  value="" name="c_pwd" id="c_pwd">
                            </div>	 -->			
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
            profile_for:{
                required:true,
            },
            reg_mobile:{
                required:true,
                minlength:10,
                maxlength:10
            },
            gender:{
                required:true
            },
            m_status:{
                required:true
            },
            religion:{
                required:true
            },
            denomination:{
                required:true
            },
            caste:{
                required:true
            },
            mother_tongue:{
                required:true
            },
            country:{
                required:true
            },
            country_code:{
                required:true
            },
            dob:{
                required:true
            },
            name:{
                required:true,
                minlength:3
            },
            pwd:{
                required:true
            },
        },
        messages: {
            profile_for:
            {
                required: "Please select your preference",
            },
            reg_mobile:
            {
                required: "Please enter mobile number",
                minlength:"Please enter valid number",
                maxlength:"Please enter valid number"
            },
            gender:{
                required:"Please select gender"
            },
            m_status:{
                required:"Please select marital status"
            },
            religion:{
                required:"Please select religion"
            },
            dob:{
                required:"Please select date of birth"
            },
            denomination:{
                required:"Please select denomination"
            },
            caste:{
                required:"Please select sub caste"
            },
            mother_tongue:{
                required:"Please select mother tongue"
            },
            country:{
                required:"Please select country"
            },
            country_code:{
                required:"Please select country code"
            },
            name:{
                required:"Please enter name",
                minlength:"Minimum lenth is 3"
            },
            pwd:{
                required:"Please enter password"
            },
        },
        submitHandler: function(form) 
        {
            $.ajax({
                url: "<?php echo URL?>server/server.php",
                data: {
                    profile_for:$('#profile_for').val(),
                    mobile:$('#reg_mobile').val(),
                    name:$('#name').val(),   
                    pwd:$('#pwd').val(),
                    gender:$('#gender').val(),
                    m_status:$('#m_status').val(),
                    religion:$('#religion').val(),
                    denomination:$('#denomination').val(),
                    caste:$('#caste').val(),
                    mother_tongue:$('#mother_tongue').val(),
                    country:$('#country').val(),
                    country_code:$('#country_code').val(),
                    dob:$('#dob').val(),
                    action:'register_step1'},
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

        $('#dob').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "dd-mm-yy",
            maxDate: new Date,
        });
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