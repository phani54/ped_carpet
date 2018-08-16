$(document).ready(function () {
    progressChange();
    $('.selectpicker').selectpicker();
});

/*COMMON FUNCTION*/
function validateEmail(mail)   {  
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))  {  
    	return true;
	} 
    return false;
}  
function validatePhone(phone) {
  intRegex = /[0-9 -()+]+$/;
  var phoneLength = $("#phone").attr('maxlength');
  if((phone.length == parseInt(phoneLength)) && (intRegex.test(phone))) {
  	return true;
  }
  return false;
}

function fieldvalidation() {
	$('input').bind("keyup change", function()  { 
		var text = $(this).val();
		if(text != "") { 
			if($(this).attr('type') =="email") {
				if(validateEmail(text) == true) {
					$(this).next().addClass('pass');
					$(this).removeClass('fail');
				} else {
					$(this).next().removeClass('pass');
					$(this).addClass('fail');
				}
			} else if($(this).attr('data-type') =="phone") {
				if(validatePhone(text) == true) {
					$(this).next().addClass('pass');
					$(this).removeClass('fail');
					$(this).siblings('.error-message').removeClass('display-block');
				} else {
					$(this).next().removeClass('pass');
					$(this).addClass('fail');
				}
			} else {
				$(this).next().addClass('pass');
				$(this).removeClass('fail');
				$(this).siblings('.error-message').removeClass('display-block');
			}
		} else {
			$(this).next().removeClass('pass');
			$(this).removeClass('fail');
		}
	});
}

function progressChange() {
	var progressval = $('.progress-bar').attr("aria-valuenow");
	var degree = 180/100 * progressval;
	//$('.trust_meter_pointer').css({'transform':'rotate(' + degree + 'deg)'});
	var trustscore = $('.trustscore').attr("aria-valuenow");
	var scoreDegree = 180/100 * trustscore;
	$('.trust_meter_pointer, .trust_meter_pointer-dash').css({'transform':'rotate(' + scoreDegree + 'deg)'});
	if(progressval < 40) {
		$('#progress-val').text(progressval+"%"+" PROFILE COMPLETED");
		$('.progress-bar').addClass('no-gradient');
		
	} else if(progressval > 40 && progressval< 80) {
		$('#progress-val').text(progressval+"%"+" PROFILE COMPLETED");
		$('.progress-bar').addClass('half-gradient');
	} else {
		$('#progress-val').text(progressval+"%"+" PROFILE COMPLETED");
		$('.progress-bar').addClass('full-gradient');
	}
	if(progressval==100) {
		$('#progress-val').css({"color":"#76c076", "font-family": "Roboto-Medium"});
	}
}

/*HOME*/
var Home = {}
Home.init = function() {
	$(".join-carousel").slick({
        dots: false,
        infinite: true,
        slidesToShow: 4,
        responsive: [
        	{
		      breakpoint: 960,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: true,
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true,
		      }
		    }
		]
    });
}.bind(Home)
Home.changePasswordEventHanderlers = function() {    
	fieldvalidation();
}.bind(Home)
Home.changePassword = function(event) {
	event.preventDefault()
	var validateSuccess = true;
	$('input[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).addClass('fail');
			$(this).siblings('.error-message').addClass('display-block');
		}
	}); 
	if(validateSuccess == true) { 
		 $('form').unbind('submit').submit();
                 
	}
}.bind(Home)
Home.resetPasswordEventHanderlers = function() {    
	fieldvalidation();
}.bind(Home)
Home.resetPassword = function(event) {
	event.preventDefault()
	var validateSuccess = true;
	$('input[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			
			validateSuccess = false;
			$(this).addClass('fail');
			$(this).siblings('.required_error').show();
		}else{
			
			$(this).removeClass('fail');
			$(this).siblings('.required_error').hide();
		}
	}); 
	if(validateSuccess == true) { 
	
		$('#reset_password').unbind('submit').submit();
	}
}.bind(Home)
Home.login = function (event) {
    $('form').unbind('submit').submit();

}.bind(Home)
/*REGISTER SCREENS*/
var NewAccount = {
	Screen: {
		Self:{},
		Parent:{},
		Otp:{}
	}
}

NewAccount.Screen.Self.init = function() {
	NewAccount.Screen.Self.eventHandlers()
}.bind(NewAccount.Screen.Self);

NewAccount.Screen.Self.eventHandlers = function() {
	$(".radio-button-holder input:radio").click(function () {
		$(this).attr('checked', true);
	       if ($(this).val() == "1087") {      //Son
		  
	    	$('#button-text').text("GET STARTED")
	    	$('.please-give').addClass('display-inline-block')
	        $('.please-give').find("#account-for").text("Son's");
			$('#gender-Male').prop('checked', true);
			$('#gender-Female').prop('disabled', true);
			
			
	    } else if ($(this).val() == "9") {  //Daughter
		
	    	$('#button-text').text("GET STARTED")
	    	$('.please-give').addClass('display-inline-block')
	        $('.please-give').find("#account-for").text("Daughter's");
			$('#gender-Female').prop('checked', true);
			$('#gender-Male').prop('disabled', true);
	    } else if ($(this).val() == "10") { // Brother
	
	    	$('#button-text').text("GET STARTED")
	    	$('.please-give').addClass('display-inline-block')
	        $('.please-give').find("#account-for").text("Brother's");
			$('#gender-Female').prop('checked', false);
			$('#gender-Male').prop('checked', true);
			$('#gender-Female').prop('disabled', true);
	    } else if ($(this).val() == "11") {  // Sister
		
	    	$('#button-text').text("GET STARTED")
	    	$('.please-give').addClass('display-inline-block')
	        $('.please-give').find("#account-for").text("Sister's");
			$('#gender-Female').prop('checked', true);
			$('#gender-Male').prop('disabled', true);
	    }else if ($(this).val() == "13") {  // Sister

	    	$('#button-text').text("GET STARTED")
	    	$('.please-give').removeClass('display-inline-block').addClass('display-none')
			$('#gender-Female').prop('checked', false);
			$('#gender-Male').prop('checked', false);
			$('#gender-Female').prop('disabled', false);
			$('#gender-Male').prop('disabled', false);
	    }else if ($(this).val() == "12") {  // Sister
		
	    	$('#button-text').text("GET STARTED")
	    	$('.please-give').removeClass('display-inline-block').addClass('display-none')
			$('#gender-Female').prop('checked', false);
			$('#gender-Male').prop('checked', false);
			$('#gender-Female').prop('disabled', false);
			$('#gender-Male').prop('disabled', false);
	    }else {
			$('#button-text').text("NEXT")
	    	$('.please-give').removeClass('display-inline-block').addClass('display-none')
			$('#gender-Female').prop('checked', false);
			$('#gender-Male').prop('checked', false);
			$('#gender-Female').prop('disabled', false);
			$('#gender-Male').prop('disabled', false);
	    }
	});
	$("#show-password").click(function () {
	 if ($("#password").attr("type")=="password") {
	 	$("#password").attr("type", "text");
	 }
	 else{
	 	$("#password").attr("type", "password");
	 }
	});
	/*var str = $('#area-code').val().replace(/[^\/\d+]/g,'')
	$('.area-code-dropdown .filter-option').text(str)
	$('#area-code').change(function() { 
		//var str = $('.filter-option').text().replace(/[^\/\d+]/g,'') 
                
               var str = $('#area-code').val().replace(/[^\/\d+]/g,'')               
		$('.area-code-dropdown .filter-option').text(str)
	});*/
	fieldvalidation();
	
}.bind(NewAccount.Screen.Self);

NewAccount.Screen.Self.submit = function(event) {
	
    event.preventDefault();
	var validateSuccess = true        
	var firstName = $('#first-name').val().trim();
	var lastName = $('#last-name').val().trim();
	//var middleName = $('#middle-name').val().trim();        
	var email = $('#email').val().trim();
	var phone = $('#phone').val().trim();
	var country = $('#country').val().trim();
	var password = $('#password').val().trim();
//	var confirmPassword = $('#confirm-password').val().trim();
    var state = $('#state_profile').val().trim();
	var religion = $('#religion').val().trim();	
    var accountFor = $('input[name=owner]').val();
	var selected = $("input[name=owner]:checked");
    var inputType = $('input[name=profile_for]').attr('type');
	if(inputType =='radio'){
        if($('input[name=profile_for]:checked').length<=0) { 
		validateSuccess = false;	
                $('input[name=profile_for]').parent().siblings('.error-message').addClass('display-block');
	}else{
             $('input[name=profile_for]').parent().siblings('.error-message').removeClass('display-block');
        }
	}
         if($('input[name=gender]:checked').length<=0) { 
		validateSuccess = false;	
                $('input[name=gender]').parent().parent().siblings('.error-message').addClass('display-block');
	}else{
             $('input[name=gender]').parent().parent().siblings('.error-message').removeClass('display-block');
        }
	$('input[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).addClass('fail');
			$(this).siblings('.error-message').addClass('display-block');
		}
	}); 
           $('.selectpicker[data-valid=required]').each(function() {
		
               var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).parent().siblings('.error-message').addClass('display-block');
			$(this).siblings('.bootstrap-select .btn').addClass('fail');
		}
	}); 
        if(password.length < 8) {
			validateSuccess = false;
			$('#password').addClass('fail');
			$('#password').siblings('.error-message').text("Password should be minimum 8 digit");
			$('#password').siblings('.error-message').addClass('display-block');
	}
	if(firstName ==""  && lastName =="") { 
	    validateSuccess = false;
		$('#last-name').siblings('.error-message').text("Please enter First and Last  Name.");
	} else if(firstName !="" && firstName.length < 2) {	    
		validateSuccess = false;
		$('#first-name').addClass('fail');
		$('#first-name').siblings('.error-message').addClass('display-block');
		$('#first-name').siblings('.error-message').text("First Name should be minimum 2 digit.");
	}else if(firstName !="" && lastName== "") {	    
		validateSuccess = false;
		$('#last-name').siblings('.error-message').text("Please enter Last  Name.");
	}else if(lastName !="" && firstName== "") {	    
		validateSuccess = false;
		$('#last-name').siblings('.error-message').text("Please enter First Name.");
	}else if(lastName !="" && lastName.length < 2 ){
	   validateSuccess = false;
	  $('#last-name').addClass('fail');
	  $('#last-name').siblings('.error-message').addClass('display-block');
	 $('#last-name').siblings('.error-message').text("Last Name should be minimum 2 digit.");
	}else{}
	if(email != "" || phone !="") {
		if(validateEmail(email) == false) {
			validateSuccess = false;
			$('#email').addClass('fail');
			$('#email').siblings('.error-message').text("Email is not in proper format");
			$('#email').siblings('.error-message').addClass('display-block');
		} else if(validatePhone(phone) == false) {
			validateSuccess = false;
			$('#phone').addClass('fail');
			$('#phone').siblings('.error-message').addClass('display-block');
		}/* else if(password != confirmPassword) {
			validateSuccess = false;
			$('#confirm-password').addClass('fail');
			$('#confirm-password').siblings('.error-message').text("Password and confirmPassword didn't match");
			$('#confirm-password').siblings('.error-message').addClass('display-block');
		}*/
	}
       
	if(validateSuccess == true) {     
           $('form').unbind('submit').submit();           
	}
}.bind(NewAccount.Screen.Self);

NewAccount.Screen.Parent.init = function() {
	NewAccount.Screen.Parent.eventHandlers()
}.bind(NewAccount.Screen.Parent);

NewAccount.Screen.Parent.eventHandlers = function() {
	fieldvalidation();
	/*var str = $('.filter-option').text().replace(/[^\/\d+]/g,'')
	$('.area-code-dropdown .filter-option').text(str)
	$('#area-code').change(function() {
		var str = $('.filter-option').text().replace(/[^\/\d+]/g,'')
		$('.area-code-dropdown .filter-option').text(str)
	}); */
}.bind(NewAccount.Screen.Parent);

NewAccount.Screen.Parent.submit = function(event) {
	event.preventDefault();
	var validateSuccess = true
	var firstName = $('#first-name').val().trim();
	var lastName = $('#last-name').val().trim();
	//var middleName = $('#middle-name').val().trim();
	var email = $('#email').val().trim();
	var phone = $('#phone').val().trim();
	var areacode = $('#area-code').val().trim();
	$('input[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).addClass('fail');
			$(this).siblings('.error-message').addClass('display-block');
		}
	}); 
	if(email != "" || phone != "") {
		if(validateEmail(email) == false) {
			validateSuccess = false;
			$('#email').addClass('fail');
			$('#email').siblings('.error-message').text("Email is not in proper format");
			$('#email').siblings('.error-message').addClass('display-block');
		} else if(validatePhone(phone) == false) {
			validateSuccess = false;
			$('#phone').addClass('fail');
			$('#phone').siblings('.error-message').addClass('display-block');
			if(phone != "") {
				$('#phone').siblings('.error-message').text("Phone is not in proper format");
			}
		} 
	}
	if(validateSuccess == true) {
		 $('form').unbind('submit').submit();
	}
}.bind(NewAccount.Screen.Parent);

NewAccount.Screen.Otp.init = function() {
	NewAccount.Screen.Otp.eventHandlers()
}.bind(NewAccount.Screen.Otp);

//NewAccount.Screen.Otp.eventHandlers = function() {
//	$('.resend-otp').click(function(){
//		alert("resend");
//	});
//}.bind(NewAccount.Screen.Otp);

NewAccount.Screen.Otp.submit = function(event) {
	event.preventDefault();
	var validateSuccess = true;
	var otp = $('#otp').val().trim();
	$('input[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).addClass('fail');
			$(this).siblings('.error-message').addClass('display-block');
		}
	});
	if(validateSuccess == true) {
		//window.location.href = 'share-identity.html';
                 $('form').unbind('submit').submit();   
	}
}.bind(NewAccount.Screen.Otp);

/*SHARE SCREENS*/
var Account = {
	Screen: {
                DocumentProof:{},		
		AadhaarSuccess:{},
                BasicDetails:{},
		UploadFiles:{},
		ReligionCaste:{},
		EducationFamily:{},
		FacebookLinkedinSucces:{},
		Future:{},
		BestFriend:{},
		Disclosure:{},
		Search:{}
	}
}
Account.Screen.UploadFiles.init = function() {
	Account.Screen.UploadFiles.eventHandlers();
}.bind(Account.Screen.UploadFiles)

Account.Screen.UploadFiles.eventHandlers = function() {

	//DESKTOP SLIDER
    $('.album_nav_chev_up').addClass('transparent_class');
	$('.album_nav_chev_up').off('click');
	
	$('.album_nav_chev_up').click(function() {
		$('.album_nav_chev_down').removeClass('transparent_class');
		var first = $('.medium-image.active').first();
		if(first.is(':first-child') ==  false) {

			$('.medium-image').removeClass('active');
			first.addClass('active');
			first.prev().addClass('active');
			first.next().addClass('active');

			if($('.medium-image.active').is(':nth-child(1)') == true){

				$('.album_nav_chev_up').addClass('transparent_class');


			}
		}
	});
	$('.album_nav_chev_down').click(function() {
		var numOfImg = $('.padding-top-35 .medium-image').length;
		$('.album_nav_chev_up').removeClass('transparent_class');
		var last = $('.medium-image.active').last();
		if(last.is(':last-child') ==  false) {

			$('.medium-image').removeClass('active');
			last.addClass('active');
			last.prev().addClass('active');
			last.next().addClass('active');

			if($('.medium-image.active').is(':nth-child('+numOfImg+')') == true){

				$('.album_nav_chev_down').addClass('transparent_class');


			}
		}
	});

	///MOBILE SLIDER
	$('.album_nav_chev_left').click(function() {
		var recent = $('.small-image.active');
		if($('.small-image.active').is(":first-child") == false) {
			recent.prev().addClass('active');
			recent.removeClass('active');
		} else {
			recent.removeClass('active');
			$('.small-image').last().addClass('active');
		}
		
	});
	$('.album_nav_chev_right').click(function() {
		var recent = $('.small-image.active');
		if($('.small-image.active').is(':last-child') == false) {
			recent.next().addClass('active');
			recent.removeClass('active');
		} else {
			recent.removeClass('active');
			$('.small-image').first().addClass('active');
		}
	});

	//UPLOAD FILE
	$('#upload').click(function() {
		$('#uploadme').click();
	});

}.bind(Account.Screen.UploadFiles)

Account.Screen.UploadFiles.submit = function(event) {
	event.preventDefault();
	window.location.href = 'share-3-religion-and-caste.html';
}.bind(Account.Screen.UploadFiles)

/*VIEW FULL IMAGE*/
function viewFullImage(el) {
	var current = $(el)
	var path = current.find('img').attr('src');
	var value = current.find('img').attr('id');
	var titleval = current.find('img').attr('title');
	$.ajax({
			type: 'POST',
			url: getBaseURL()+'image_controller/getmainimage?imgid='+value,
		   	success: function(data){				
			if(data ==1){
			$(".set_profile-pic").hide();	
			$(".main_profile-pic").show();
					
			}else{
			$(".main_profile-pic").hide();	
			$(".set_profile-pic").show();
			}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
	});
	$('.large-image').find('img').attr('src',path);
	$('.large-image').find('img').attr('id',value);
	$('#getimageID').attr('value',value);
	$(".makeprofile").attr('id',value);
	
	
	
}

/*RIGHT SIDEBAR SLIDER*/
function rightSlider(el) {
	var current = $(el)
	current.next().next('.slide-wrapper-inner');
	if(current.next().next('.slide-wrapper-inner').find('.slider.active') .is(':first-child') ==  false) {
		var recent = current.next().next('.slide-wrapper-inner').find('.slider.active');
		recent.prev('.slider').addClass('active');
		recent.removeClass('active');
	} else {
		var recent = current.next().next('.slide-wrapper-inner');
		recent.find('.slider.active').removeClass('active');
		recent.children().last().addClass('active');
	}

	if(current.next('.slide-wrapper-inner').find('.slider.active') .is(':last-child') ==  false) {
    	var recent = current.next('.slide-wrapper-inner').find('.slider.active');
    	recent.next('.slider').addClass('active');
		recent.removeClass('active');
	} else {
		var recent = current.next('.slide-wrapper-inner');
		recent.find('.slider.active').removeClass('active');
		recent.children().first().addClass('active');
	}
	}

Account.Screen.ReligionCaste.init = function() {
	Account.Screen.ReligionCaste.eventHandlers();
}.bind(Account.Screen.ReligionCaste)

Account.Screen.ReligionCaste.eventHandlers = function() {
	$('input[data-valid=required]').bind("keyup change", function() {
		var el = $(this)
		$(this).siblings('.error-message').removeClass('display-block');
	});
	$('.selectpicker[data-valid=required]').change(function() {
		var el = $(this)
		$(this).parent().siblings('.error-message').removeClass('display-block');
		$(el).siblings('.bootstrap-select .btn').removeClass('fail');
	});
	$('#back').click(function(event) {
		event.preventDefault();
		window.location.href = 'share-2-upload-photos-videos.html';
	});
}.bind(Account.Screen.ReligionCaste)

Account.Screen.ReligionCaste.submit = function(event) {
	event.preventDefault();
	var validateSuccess = true;
	var religion = $('#religion').val().trim();
	var caste = $('#new_caste').val().trim();
	var language = $('#mother_tongue').val().trim(); 
	var hour = $('#hour').val().trim();
	var minute = $('#minute').val().trim();
	var city = $('#city').val().trim();
	var country = $('#country').val().trim();
	//var subCaste = $('#sub-caste').val().trim();
	$('input[data-valid=required]').each(function() { 
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).addClass('fail');
			$(this).siblings('.error-message').addClass('display-block');
		} 
	}); 
	$('.selectpicker[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).parent().siblings('.error-message').addClass('display-block');
			$(this).siblings('.bootstrap-select .btn').addClass('fail');
		}
	});
	if($('input[name=privacy]:checked').length<=0) {
 		$('input[name=privacy]').parent().siblings('.error-message').addClass('display-block');
	} if (validateSuccess == true) {
		//window.location.href = 'share-4-education-family-and-occupation.html';
                 $('form').unbind('submit').submit(); 
	} 
}.bind(Account.Screen.ReligionCaste) 

Account.Screen.EducationFamily.init = function() {
	Account.Screen.EducationFamily.eventHandlers();
}.bind(Account.Screen.EducationFamily)

Account.Screen.EducationFamily.eventHandlers = function() {

	$("#dont-link").click(function () {
		if($("#dont-link").is(':checked')) {
	 		$('.education-family-holder').removeClass('display-none')
	 	} else {
	 		$('.education-family-holder').addClass('display-none')
	 	}
	});

	$("#family-business").click(function () {
		if($("#family-business").is(':checked')) {
	 		$('.family-business-field-holder').removeClass('display-none');
	 		$('.job-field-holder').addClass('display-none');
	 	} else {
	 		$('.family-business-field-holder').addClass('display-none');
	 		$('.job-field-holder').removeClass('display-none');
	 	}
	});

	$('#back').click(function(event) {
		event.preventDefault()
		window.location.href = 'share-3-religion-and-caste.html';
	});

	$('#father-name').bind("keyup change", function() {
		$('.error-message.father').removeClass('display-block');
		$(this).removeClass('fail');
	});

	$('#father-occupation').bind("keyup change", function() {
		$('.error-message.father').removeClass('display-block');
		$(this).removeClass('fail');
	});

	$('#mother-name').bind("keyup change", function() {
		$('.error-message.mother').removeClass('display-block');
		$(this).removeClass('fail');
	});

	$('#mother-occupation').bind("keyup change", function() {
		$('.error-message.mother').removeClass('display-block');
		$(this).removeClass('fail');
	});

	$("input[name='college[]']").first().bind("keyup change", function() {
		$(".repeatable").first().find('.error-message').removeClass('display-block');
		$(this).first().removeClass('fail');
	});

}.bind(Account.Screen.EducationFamily)

Account.Screen.EducationFamily.addField = function(el) {
	var element = $(el);
	var current = element.parent().parent().children('.repeatable') .last();
	console.log(current);
	current.after(current.prop('outerHTML'));
}.bind(Account.Screen.EducationFamily)

Account.Screen.EducationFamily.removeField = function(el) {
	$(el).parent().remove();
}.bind(Account.Screen.EducationFamily)

Account.Screen.EducationFamily.edit = function(el) {
	var section = $(el).data("section");
	window.location.href = 'share-4-success-facebook-and-linkedin-edit.html#'+section;
}.bind(Account.Screen.EducationFamily)

Account.Screen.EducationFamily.submit = function(event) {
	event.preventDefault();
	var validateSuccess = true;
	var fatherName = $('#father-name').val().trim();
	var fatherOccupation = $('#father-occupation').val().trim();
	var motherName = $('#mother-name').val().trim();
	var motherOccupation = $('#mother-occupation').val().trim();
	$("input[name='college[]']").each(function() {
		
	});
	if(Account.Screen.EducationFamily.validation()  == false) {
		validateSuccess = false;
	}
	if (validateSuccess == true) {
		window.location.href = 'share-4-success-facebook-and-linkedin.html';
	}
}.bind(Account.Screen.EducationFamily)

Account.Screen.EducationFamily.validation = function() {
	var fatherName = $('#father-name').val().trim();
	var fatherOccupation = $('#father-occupation').val().trim();
	var motherName = $('#mother-name').val().trim();
	var motherOccupation = $('#mother-occupation').val().trim();
	var collegeName = $("input[name='college[]']").first().val();
	var degree = $("[name='degree[]']").first().val();
	var year = $("[name='year[]']").first().val();
	if(fatherName == "" && fatherOccupation == "") {
		$('.error-message.father').addClass('display-block');
		$('#father-name').addClass('fail');
		$('#father-occupation').addClass('fail');
		return false;
	}  else if( fatherName != "" && fatherOccupation == "") {
		$('.error-message.father').addClass('display-block');
		$('.error-message.father').text("Please fill father occupation field");
		$('#father-occupation').addClass('fail');
		return false;
	} else if( fatherName == "" && fatherOccupation != "") {
		$('.error-message.father').addClass('display-block');
		$('.error-message.father').text("Please fill father name field");
		$('#father-name').addClass('fail');
		return false;
	} else if(motherName == "" && motherOccupation == "") {
		$('.error-message.mother').addClass('display-block');
		$('#mother-name').addClass('fail');
		$('#mother-occupation').addClass('fail');
		return false;
	}  else if( motherName != "" && motherOccupation == "") {
		$('.error-message.mother').addClass('display-block');
		$('.error-message.mother').text("Please fill mother occupation field");
		$('#mother-occupation').addClass('fail');
		return false;
	} else if( motherName == "" && motherOccupation != "") {
		$('.error-message.mother').addClass('display-block');
		$('.error-message.mother').text("Please fill mother name field");
		$('#mother-name').addClass('fail');
		return false;
	} else if(collegeName == "" || degree =="" || year == "") {
		$(".repeatable").first().find('.error-message').addClass('display-block');
		if(collegeName =="") {
			$("input[name='college[]']").first().addClass('fail');
		}
		return false;
	} else {
		return true;
	}
	
}.bind(Account.Screen.EducationFamily)

Account.Screen.FacebookLinkedinSucces.init = function() {
	Account.Screen.FacebookLinkedinSucces.eventHandlers()
}.bind(Account.Screen.FacebookLinkedinSucces)

Account.Screen.FacebookLinkedinSucces.eventHandlers = function() {
	$('#back').click(function() {
		event.preventDefault()
		window.location.href = 'share-4-success-facebook-and-linkedin-edit.html'
	})
}.bind(Account.Screen.FacebookLinkedinSucces)

Account.Screen.FacebookLinkedinSucces.submit = function() {
	window.location.href = 'share-6-My-Future-For-Men.html'
}.bind(Account.Screen.FacebookLinkedinSucces)

Account.Screen.Future.init = function() {
	Account.Screen.Future.eventHandlers();
}.bind(Account.Screen.Future)

Account.Screen.Future.eventHandlers = function() {
	$('#back').click(function(event) {
		event.preventDefault()
		//window.location.href = 'share-4-success-facebook-and-linkedin.html'
	});
	$('textarea[data-valid=required]').focus(function() {
		$(this).removeClass('fail');
		$(this).siblings('.error-message').removeClass('display-block');
	}); 
}.bind(Account.Screen.Future)

Account.Screen.Future.submit = function(event) {
	event.preventDefault();
	var validateSuccess = true;
	var profesional = $('#profesional').val().trim();
	var personal = $('#personal').val().trim();
	$('textarea[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).addClass('fail');
			$(this).siblings('.error-message').addClass('display-block');
		} 
	}); 
	if(validateSuccess == true) {
		//window.location.href = 'share-7-Best-friend-description.html'
                $('form').unbind('submit').submit(); 
	}
}.bind(Account.Screen.Future)

Account.Screen.BestFriend.init = function() {
	Account.Screen.BestFriend.eventHandlers();
}.bind(Account.Screen.BestFriend)

Account.Screen.BestFriend.eventHandlers = function() {
	$('textarea[data-valid=required]').focus(function() {
		$(this).removeClass('fail');
		$(this).siblings('.error-message').removeClass('display-block');
	}); 
	$('#back').click(function(event) {
		event.preventDefault()
		//window.location.href = 'share-6-My-Future-For-Men.html'
	})
}.bind(Account.Screen.BestFriend)

Account.Screen.BestFriend.submit = function(event) {
	event.preventDefault();
	var validateSuccess = true;
	var description = $('#description').val().trim()
	$('textarea[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).addClass('fail');
			$(this).siblings('.error-message').addClass('display-block');
		} 
	});  
	if(validateSuccess == true) { 
                    //window.location.href = 'share-8-Fair-Disclosure.html'
                    $('form').unbind('submit').submit(); 
	}
}.bind(Account.Screen.BestFriend)

Account.Screen.Disclosure.init = function() {
	Account.Screen.Disclosure.eventHandlers();
}.bind(Account.Screen.Disclosure)

Account.Screen.Disclosure.eventHandlers = function() {
	$('#back').click(function(event) {
		event.preventDefault()
		//window.location.href = 'share-7-Best-friend-description.html'
	});
	$('input[type=radio]').click(function() {
		$(this).parent().siblings('.error-message').removeClass('display-block');
	});
}.bind(Account.Screen.Disclosure)

Account.Screen.Disclosure.submit = function(event) {
	event.preventDefault();
	var validateSuccess = true;
	if($('input[name=criminal_record]:checked').length==0) {
		validateSuccess = false;
		$('input[name=criminal_record]').parent().siblings('.error-message').addClass('display-block');
	} if ($('input[name=special_cases]:checked').length<=0 ) {
		validateSuccess = false;
		$('input[name=special_cases]').parent().siblings('.error-message').addClass('display-block');
	} if ($('input[name=smoke]:checked').length<=0) {
		validateSuccess = false;
		$('input[name=smoke]').parent().siblings('.error-message').addClass('display-block');
	} if($('input[name=drink]:checked').length<=0) {
		validateSuccess = false;
		$('input[name=drink]').parent().siblings('.error-message').addClass('display-block');
	} if ($('input[name=diet]:checked').length<=0) {
		validateSuccess = false;
		$('input[name=diet]').parent().siblings('.error-message').addClass('display-block');
	}else if(validateSuccess == true) {
		var criminal = $('input[name=criminal_record]:checked').val();
		var special_cases = $('input[name=special_cases]:checked').val();
		var smoke = $('input[name=smoke]:checked').val();
		var drink = $('input[name=drink]:checked').val();
		var nonVeg = $('input[name=diet]:checked').val();
		//var kids = $('input[name=kids]:checked').val();
		//window.location.href = 'share-9-congratulation.html';
                $('form').unbind('submit').submit(); 
	} 
}.bind(Account.Screen.Disclosure)

Account.Screen.Search.init = function() {
	Account.Screen.Search.eventHandlers();
}.bind(Account.Screen.Search)

Account.Screen.Search.eventHandlers = function(event) {
	$('.selectpicker[data-valid=required]').change(function() {
		var el = $(this)
		$(el).parent().siblings('.error-message').removeClass('display-block');
		$(el).siblings('.bootstrap-select .btn').removeClass('fail');
	});
}.bind(Account.Screen.Search)

Account.Screen.Search.submit = function(event) {
	event.preventDefault();
	var validateSuccess = true;
	$('.selectpicker[data-valid=required]').each(function() {
		var el = $(this)		
		if(el.val() == "") {
			validateSuccess = false;
			$(this).parent().siblings('.error-message').addClass('display-block');
			$(this).siblings('.bootstrap-select .btn').addClass('fail');
		}
	});
}.bind(Account.Screen.Search)

/*PROFILES*/
var Profile = {
	Home:{},
	Detailed:{},
        Connect:{}
}

Profile.Home.init = function() {
	$("#new-matches").slick({
        dots: false,
        infinite: true,
        slidesToShow: 3,
        responsive: [
        	{
		      breakpoint: 960,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: true,
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true,
		      }
		    }
		]
    });
    $("#new-recommendation").slick({
        dots: false,
        infinite: true,
        slidesToShow: 3,
        responsive: [
        	{
		      breakpoint: 960,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: true,
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true,
		      }
		    }
		]
    });
    $("#new-invitation").slick({
        dots: false,
        infinite: true,
        slidesToShow: 3,responsive: [
        	{
		      breakpoint: 960,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: true,
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true,
		      }
		    }
		]
    });
}.bind(Profile.Home)
Profile.Detailed.init = function() {
	$('#next-slider').click(function() {
   		var recent = $('.album-holder-main li.active');
		if($('.album-holder-main li.active').is(':last-child') == false) {
			recent.next().addClass('active');
			recent.removeClass('active');
		} else {
			recent.removeClass('active');
			$('.album-holder-main li').first().addClass('active');
		}
		
	});
	
	$('#prev-slider').click(function() {
		var recent = $('.album-holder-main li.active');
		if($('.album-holder-main li.active').is(":first-child") == false) {
			recent.prev().addClass('active');
			recent.removeClass('active');
		} else {
			recent.removeClass('active');
			$('.album-holder-main li').last().addClass('active');
		}
	});
    Profile.Detailed.eventHandlers(); 
}.bind(Profile.Detailed)

Profile.Detailed.eventHandlers = function() {
	$('#view-album').click(function() {
		$('#albumModal').modal(); 
		$('#albumModal').on('shown.bs.modal', function() {
	       $('.btn-next').click(function() {
	       		var recent = $('.album-holder li.active');
				if($('.album-holder li.active').is(':last-child') == false) {
					//console.log(recent); 
					recent.next().addClass('active');
					recent.removeClass('active');
				} else {
					recent.removeClass('active');
					$('.album-holder li').first().addClass('active');
				}
				
			});
			
			$('.btn-prev').click(function() {
				var recent = $('.album-holder li.active');
				if($('.album-holder li.active').is(":first-child") == false) {
					recent.prev().addClass('active');
					recent.removeClass('active');
				} else {
					recent.removeClass('active');
					$('.album-holder li').last().addClass('active');
				}
			});
      	});
	});

	$('.btn[data-value="call"]').click(function() {
		$('#callModal').modal();
	})
}.bind(Profile.Detailed)


var Discover = { Range:{}}

Discover.init = function() {
	Discover.Range.young();
	Discover.Range.location();
	Discover.eventHandlers();
}.bind(Discover)

Discover.Range.young = function() {
	var selector = '[data-rangeSlider=younger]',
      elements = document.querySelectorAll(selector);
      // Example functionality to demonstrate a value feedback
      function valueOutput(element) {
          var value = element.value,
          output = element.parentNode.getElementsByTagName('output')[0];
          output.innerHTML = value+" yr";
      }

      for (var i = elements.length - 1; i >= 0; i--) {
          valueOutput(elements[i]);
      }

      Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function (el) {
          el.addEventListener('input', function (e) {
              valueOutput(e.target);
          }, false);
      });
      // Basic rangeSlider initialization
      rangeSlider.create(elements, {
          min: 0,
          max: 5,
          value : 2,
          borderRadius : 3,
          buffer : 0,
          minEventInterval : 1000,

          // Callback function
          onInit: function () {
          },

          // Callback function
          onSlideStart: function (value, percent, position) {
          },

          // Callback function
          onSlide: function (value, percent, position) {
          },

          // Callback function
          onSlideEnd: function (value, percent, position) {
          }
      });
}.bind(Discover.Range)

Discover.Range.location = function() {
	var selector = '[data-rangeSlider=location]',
      elements = document.querySelectorAll(selector);
      // Example functionality to demonstrate a value feedback
      function valueOutput(element) {
          var value = element.value,
          output = element.parentNode.getElementsByTagName('output')[0];
          output.innerHTML = value+" kms";
      }

      for (var i = elements.length - 1; i >= 0; i--) {
          valueOutput(elements[i]);
      }

      Array.prototype.slice.call(document.querySelectorAll('input[type="range"]')).forEach(function (el) {
          el.addEventListener('input', function (e) {
              valueOutput(e.target);
          }, false);
      });
      // Basic rangeSlider initialization
      rangeSlider.create(elements, {
          min: 0,
          max: 100,
          value : 50,
          borderRadius : 3,
          buffer : 0,
          minEventInterval : 1000,

          // Callback function
          onInit: function () {
          },

          // Callback function
          onSlideStart: function (value, percent, position) {
          },

          // Callback function
          onSlide: function (value, percent, position) {
          },

          // Callback function
          onSlideEnd: function (value, percent, position) {
          }
      });
}.bind(Discover.Range)

Discover.eventHandlers = function() {
	$('.view').click(function() {
		if($(this).data('val') == 'grid') {
			$('.view').removeClass('active')
			$(this).addClass('active');
			$('.discover-grid').removeClass('display-none');
			$('.discover-list').addClass('display-none');
		} else {
			$('.view').removeClass('active')
			$(this).addClass('active');
			$('.discover-list').removeClass('display-none');
			$('.discover-grid').addClass('display-none');
		}
	});
	$('.more').click(function() {
		if($(this).attr('data-val') == "more") {
			$(this).siblings('.checkbox').removeClass('display-none');
			$(this).find('.text').text("less");
			$(this).attr('data-val',"less");
		} else {
			$(this).siblings('.checkbox[data-display=none]').addClass('display-none');
			$(this).find('.text').text("more");
			$(this).attr('data-val',"more");
		}
		
	});
}.bind(Discover)
Profile.Connect.init = function() {
	Profile.Connect.eventHandlers();
       
}.bind(Profile.Connect)

Profile.Connect.eventHandlers = function() {
	var html = $( "#scrollable" ).html()
	$('.chat-list li').click(function() {
		if($(this).is(":first-child") == true) {
			$('.chat-list li').removeClass('active');
			$(this).addClass('active')
			$('#scrollable').empty()
			//$('#scrollable').html('<h2 class="no-new-message">Sorry no new message</h2')
		} else {
			$('.chat-list li').removeClass('active');
			$(this).addClass('active')
			$('#scrollable').empty()
			//$( "#scrollable" ).append(html);
		}
	});
}.bind(Profile.Connect)
Profile.Connect.submit = function(event) { 
	event.preventDefault();
	var validateSuccess = true;
	var message = $('#message').val().trim();
	if(message == "") {           
            validateSuccess = false;
        }
	if(validateSuccess == true) {
		
                 $('form').unbind('submit').submit();   
	}
}.bind(Profile.Connect);
/*BASIC DETAILS*/
Account.Screen.BasicDetails.init = function() {
	Account.Screen.BasicDetails.eventHandlers()
}.bind(Account.Screen.BasicDetails)

Account.Screen.BasicDetails.eventHandlers = function() {
	fieldvalidation();
	$('.selectpicker[data-valid=required]').change(function() {
		var el = $(this)
		$(this).parent().siblings('.error-message').removeClass('display-block');
		$(el).siblings('.bootstrap-select .btn').removeClass('fail');
	});
	$('input[name=marital_status]').change(function() {
		if($('input[name=marital_status]:checked').length>0) {
			$('.m-status').siblings('.error-message').removeClass('display-block');
		} 
		if($('input[name=marital_status]:checked').val() =="154" || $('input[name=marital_status]:checked').val() =="155" || $('input[name=marital_status]:checked').val() =="156") {
			$('#have-kids').removeClass('display-none');
			$('#kids-yes').attr('checked', false);
			$('#kids-no').attr('checked', false);
			$('#living-me').addClass('display-none');
			$('#living-with-me-yes').attr('checked', false);
			$('#living-with-me-no').attr('checked', false);
		} else {
			$('#have-kids').addClass('display-none');
			$('#living-me').addClass('display-none');
		}
	});
	$('input[name=kids]').change(function() {
		if($('input[name=kids]:checked').val() =="yes") {
			$('#living-me').removeClass('display-none');
			$('#living-with-me-yes').attr('checked', false);
			$('#living-with-me-no').attr('checked', false);
		} else {
			$('#living-me').addClass('display-none');
		}
	});
}.bind(Account.Screen.BasicDetails)

Account.Screen.BasicDetails.submit = function(event) {
	event.preventDefault();
	var validateSuccess = true;
        var personality = $('#personality').val().trim();
        var height = $('#height').val().trim();
	var religion = $('#religion').val().trim();
	var caste = $('#caste').val().trim();
	var language = $('#language').val().trim();
	//var hour = $('#hour').val().trim();
	//var minute = $('#minute').val().trim();
	//var city = $('#city').val().trim();
	//var country = $('#country').val().trim();
	var subCaste = $('#sub-caste').val().trim();
	if(religion==748 || religion==743 || religion==746 || religion==745 || religion==1090){
        $('#caste').val().trim();
		var optionSelected = $('#caste').find("option:selected");
        optionSelected.val('0');
		
	}
	$('input[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).addClass('fail');
			$(this).siblings('.error-message').addClass('display-block');
		} 
	}); 
	$('.selectpicker[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).parent().siblings('.error-message').addClass('display-block');
			$(this).siblings('.bootstrap-select .btn').addClass('fail');
		}
	});
	if($('input[name=marital_status]:checked').length<=0) {
		validateSuccess = false;
		$('.m-status').siblings('.error-message').addClass('display-block');
	} 
       $('textarea[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).addClass('fail');
			$(this).siblings('.error-message').addClass('display-block');
		} 
	});	
//	} else if (validateSuccess == true) {
//		//window.location.href = 'upload-photos.html';
//                alert('hello'); 
//	} 
        if (validateSuccess == true) {
            $('form').unbind('submit').submit();   
                } 
}.bind(Account.Screen.BasicDetails)

Account.Screen.BasicDetails.clear = function(event) {
	event.preventDefault()
	$('form[name=basic-details]')[0].reset();
	$('.validate.pass').remove();
}.bind(Account.Screen.BasicDetails);




/*BASIC DETAILS END*/
/*SEARCH*/
Account.Screen.Search.init = function() {
	Account.Screen.Search.eventHandlers();
}.bind(Account.Screen.Search)

Account.Screen.Search.urlParam = function(sParam) {
	var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');        
        if (sParameterName[0] == sParam)
        {
            return sParameterName[1];
        } else {
        	return "quick-search";
        }
    }
}.bind(Account.Screen.Search)

Account.Screen.Search.eventHandlers = function(event) {
	Account.Screen.Search.select2Handlers();
	$('.selectpicker[data-valid=required]').change(function() {
		var el = $(this)
		$(el).parent().siblings('.error-message').removeClass('display-block');
		$(el).siblings('.bootstrap-select .btn').removeClass('fail');
	});
	fieldvalidation();

	/*TAB*/
	var tab = Account.Screen.Search.urlParam('tab');
	$('.nav-tabs.search-tab a').parent().removeClass('active');
	$('.nav-tabs.search-tab a[href="#' + tab + '"]').parent().addClass('active');
	$('.tab-pane').removeClass('in active');
	$('.tab-pane#'+tab).addClass('in active');

	/*SELECT2*/
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		Account.Screen.Search.select2Handlers();
    });
}.bind(Account.Screen.Search)


Account.Screen.Search.select2Handlers = function(event) {
     $(".chosen-select").select2().select2();
    $(".chosen-select").on("select2:unselect", function(e) {
    var values = $(this).val();
    if(values === null) {
    $(this).select2("val","1");
    }
    });

    // Array Remove - By John Resig (MIT Licensed) 
Array.prototype.remove = function(from, to) {
 var rest = this.slice((to || from) + 1 || this.length);
 this.length = from < 0 ? this.length + from : from;
 return this.push.apply(this, rest);
};

    $(".chosen-select").on("select2:select", function(e) {
var id = e.params.data.id;
var that = this;
var type = $(that).data("type");
var values = $(this).val();
if(id == 0) {
$(this).select2("val","");
$(this).select2("val","0");
} else if(id != 0) {
var values = $(this).val();
if($.inArray( '0', values) > -1){
values.remove(0)
$(this).val(values).trigger("change");
}
}
});
}.bind(Account.Screen.Search)


Account.Screen.Search.submit = function(event) {
	event.preventDefault();
	var validateSuccess = true;
	$('form[name=quick-search] .selectpicker[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).parent().siblings('.error-message').addClass('display-block');
			$(this).siblings('.bootstrap-select .btn').addClass('fail');
		}
	});
	if(validateSuccess == true) {
		window.location.href = 'search_result.html';
	}
}.bind(Account.Screen.Search)

Account.Screen.Search.advanceSubmit = function(event) {
	event.preventDefault();
	var validateSuccess = true;
	$('form[name=advanced] .selectpicker[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).parent().siblings('.error-message').addClass('display-block');
			$(this).siblings('.bootstrap-select .btn').addClass('fail');
		}
	});
	if(validateSuccess == true) {
		
	}
}.bind(Account.Screen.Search)

Account.Screen.Search.idSubmit = function(event) { 
	event.preventDefault();
	var validateSuccess = true;
	$('form[name=search-id] input[data-valid=required]').each(function() {
		var el = $(this)		
		if(el.val() == "") {
			validateSuccess = false;
			$(this).addClass('fail');
			$(this).siblings('.error-message').addClass('display-block');
		}
	});
	if(validateSuccess == true) {
		  $('form').unbind('submit').submit();   
	}
}.bind(Account.Screen.Search)

Account.Screen.DocumentProof.init = function() { 
	Account.Screen.DocumentProof.eventHandlers();
}.bind(Account.Screen.DocumentProof)

Account.Screen.DocumentProof.eventHandlers  = function() {
	$('.aadhar-set').change(function() {
		$('.aadhar-set').removeClass('fail');
		$('.aadhar-set#set1').prev().removeClass('display-block');
		$('.verify').removeClass('display-none');
	});
        $(".aadhar-set").keyup(function () {
        if (this.value.length == this.maxLength) {
            var $next = $(this).next('.aadhar-set');
            if ($next.length)
                $(this).next('.aadhar-set').focus();
            else
                $(this).blur();
        }
    });
	$("#check-aadhar").click(function () {
	 	if($("#check-aadhar").is(':checked')) {
	 		$('.passport-holder').removeClass('display-none');
	 		$('.aadhaar-set-holder').addClass('display-none');
	 	} else {
	 		$('.passport-holder').addClass('display-none');
	 		$('.aadhaar-set-holder').removeClass('display-none');
	 	}
	});
    $("#check-aadhar-upload").click(function () {
	 	$('#check-document').addClass('display-none');		
		$('.passport-holder').removeClass('display-none');
		$('.aadhaar-set-holder').addClass('display-none');
	 	
	});
}.bind(Account.Screen.DocumentProof)
Account.Screen.DocumentProof.submit = function(event) { 
	event.preventDefault();
	var validateSuccess = true;
	$('input[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			if($(this).hasClass('aadhar-set')) {
				if($("#check-aadhar").is(':checked') == false) {
					$(this).addClass('fail');
					$(this).siblings('.error-message').addClass('display-block');
				}
			} else {
				$(this).addClass('fail');
				$(this).siblings('.error-message').addClass('display-block');
			}
		} 
	}); 
	if (validateSuccess == true) { 
		$('#aadhar').unbind('submit').submit();   
	} 
}.bind(Account.Screen.DocumentProof)

Account.Screen.DocumentProof.verifyAadhaar = function(event) {
	
}.bind(Account.Screen.DocumentProof)
/*HORSCOPE*/
var Horoscope = {}
Horoscope.init = function() {
	Horoscope.eventHandlers()
}.bind(Horoscope)

Horoscope.eventHandlers = function() {
	fieldvalidation();
	$('.selectpicker[data-valid=required]').change(function() {
		var el = $(this)
		$(this).parent().siblings('.error-message').removeClass('display-block');
		$(el).siblings('.bootstrap-select .btn').removeClass('fail');
	});
	
	
}.bind(Horoscope)

Horoscope.submit = function(event) {
	event.preventDefault();
	var validateSuccess = true;       
	
	 
	$('.selectpicker[data-valid=required]').each(function() {
		var el = $(this)
		if(el.val() == "") {
			validateSuccess = false;
			$(this).parent().siblings('.error-message').addClass('display-block');
			$(this).siblings('.bootstrap-select .btn').addClass('fail');
		}
	});	 

        if (validateSuccess == true) {          
            $('form').unbind('submit').submit();   
        } 
}.bind(Horoscope)
/*SUCCESS STORY*/
var SuccessStoryLanding = {}
SuccessStoryLanding.init = function() {
	var showChar = 300;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Read more";
    var lesstext = "Read less";

    $('.more').each(function() {
        var content = $(this).html();
        if(content.length > showChar) {
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<div class="text-center"><button class="btn btn-default read-more">' + moretext + '</div></span>';
            $(this).html(html);
        }
    });
 
    $(".read-more").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
}.bind(SuccessStoryLanding)



function slideShow(){
        // '*' to work with any element, not only 'li's
        this.slides = $('#slideshow > *'); 
        this.count = this.slides.length-1;
        this.initslide = 0;
        this.auto = null; 

        this.selectTitles();
        this.ActivateAuto();
      };

      slideShow.prototype.selectTitles = function(){
      	var that = this;
       // $('#slideshow-wrapper').append('<select></select>');
      /*  $('#slideshow > * > img').each(function(i) {
            $('select').append('<option val="'+i+'">'+ $( this ).attr('alt') +'</option>');
          }); 
        $('select').change(this.onChange.bind(this));*/
      };

      slideShow.prototype.nextSlide = function(){
        this.initslide = (this.initslide++ >= this.count) ? 0 : this.initslide++;
        this.animateSlide();
        //console.log(this.initslide);
      };

      slideShow.prototype.animateSlide = function(){ 
        var currentSlide = this.initslide; 
        var nextSlide = ((currentSlide+1) > this.count) ? 0 : currentSlide+1;
        var prevSlide = ((currentSlide-1) < 0) ? this.count - 1 : currentSlide-1;  

        $('#slideshow > *').removeClass().not($('#slideshow > *').filter(function( index ) {
                  return index === currentSlide || index === nextSlide || index === prevSlide;
                })).addClass('left');  
        $('#slideshow > *:eq('+prevSlide+')').addClass('left');
        $('#slideshow > *:eq('+nextSlide+')').addClass('right');
        $('#slideshow > *:eq('+currentSlide+')').addClass('front');

        //Animate Dropdown menu
        //$('select option').removeAttr("selected");
       // $('select option:eq('+currentSlide+')').prop('selected',true);
      };

      slideShow.prototype.ActivateAuto = function(){
        var that = this;
        this.animateSlide();
        this.auto = window.setInterval(function () {
            that.nextSlide();
        }, 4000);
      };
    