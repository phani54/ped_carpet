function stopRKey(evt) {
    var evt = (evt) ? evt : ((event) ? event : null);
    var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
    if (evt.keyCode == 13 && ((node.type == "text") || (node.type == "number") || (node.type == "email"))) {
        return false;
    }
}
document.onkeypress = stopRKey;
$(function() {
    var req_url = 'http://redcarpetmatrimony.com/demo/2/';
	$('#p_caste').change(function(){
		var id= $(this).find(':selected').data('id');
		$.ajax({
			type:"post",
			url: req_url + "/action/frontend_modal/",
			data:"cid="+id+"&action=fetchexp",
			success:function(response){
				console.log(response);
				$('#p_division').html(response);
				return true;
			}
		});
	});
    //mobile number validation
    $('#p_mobile').on('input propertychange paste', function(e) {
        var val = $(this).val()
        var reg = /^0/gi;
        if (val.match(reg)) {
            $(this).val(val.replace(reg, ''));
        }
    });
	//profile form submit
    $("#profileFrm").validate({
        errorClass: 'errorCls',
		submitHandler: function(form) {
			if($("#p_password").val() !== '' && $("#p_newpassword").val() == '' && $("#p_newcpassword").val() == ''){
				$("#p_newpassword").addClass('required');
				$("#p_newcpassword").addClass('required');
				setTimeout(function(){
					$('.profile_update').trigger('click');
				});
				
			} else if($("#p_password").val() !== '' && $("#p_newpassword").val() !=='' && $("#p_newpassword").val() == $("#p_newcpassword").val()) {
				form.submit();
			}
			else {
				form.submit();
			}
		
		}
    });
    //signIn form submit
    $("#loginfrm").validate({
        errorClass: 'errorCls',
        submitHandler: function() {
            return SignIn();
        }
    });
    //signup form submit
    $("#reg_form").validate({
        errorClass: 'errorCls',
        submitHandler: function() {
            return SignUp();
        }
    });

    function SignUp() {
        var api_url = req_url + "/action/frontend_modal/";
        $.ajax({
            type: "post",
            url: api_url,
            data: $('form#reg_form').serialize(),
            beforeSend: function() {
                $(".page-overlay").show();
            },
            success: function(response) {
                $(".page-overlay").hide();
                if (response === '1111') {
                    $(".required").val('');
                    $(".success-text").html('<i class="fa fa-check-circle-o"></i> Thankyou for Registering with us. ');
                    $(".success-text").removeClass("text-danger");
                    $(".success-text").addClass("label-success");
                    window.location.href = req_url + "profile/";
                } else if (response === '0000') {
                    $(".success-text").html('Input error Please try Again ');
                    $(".success-text").addClass("label-danger");

                } else if (response === '0101') {
                    $(".success-text").html('This Email Id alredy registered with us ');
                    $(".success-text").addClass("label-danger");
                } else if (response === '0102') {
                    $(".success-text").html('This Mobile Number alredy registered with us');
                    $(".success-text").addClass("label-danger");
                }
            }
        });
    }
    //login
    function SignIn() {
        $.ajax({
            type: "post",
            url: req_url + "/action/frontend_modal/",
            data: $('form#loginfrm').serialize(),
            beforeSend: function() {
                $(".lpage-overlay").show();
            },
            success: function(response) {
                $(".lpage-overlay").hide();
                if (response === '1111') {
                    $(".required").val('');
                    $(".lsuccess-text").html('<i class="fa fa-check-circle-o"></i> Login Success.');
                    $(".lsuccess-text").removeClass("label-danger");
                    $(".lsuccess-text").addClass("label-success");
                    window.location.href = req_url + "profile/";
                } else if (response === '0011') {
                    $(".lsuccess-text").html('Invalid Email or Password');
                    $(".lsuccess-text").addClass("label-danger");

                } else if (response === '0000') {
                    $(".lsuccess-text").html('Please fill fields');
                    $(".lsuccess-text").addClass("label-danger");
                }
            }
        });
    }
});