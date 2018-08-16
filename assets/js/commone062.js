function getBaseURL() {
    var url = location.href;
    var baseURL = url.substring(0, url.indexOf('/', 14));
    var url = location.href;
    var pathname = location.pathname;
    var index1 = url.indexOf(pathname);
    var index2 = url.indexOf("/", index1 + 1);
    var baseLocalUrl = url.substr(0, index2);
    return baseURL + "/";
}

function GetXmlHttpObject() {
    var objXMLHttp = null;
    if (window.XMLHttpRequest) {
        objXMLHttp = new XMLHttpRequest();
    } else {
        objXMLHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return objXMLHttp;
}

function get_stateprofile_value() {
    xmlhttp = GetXmlHttpObject();
    if (xmlhttp == null) {
        alert("Your browser doesn't support HTTP request.");
        return
    }
    var countryid = $('#country').find('option:selected').attr('data-countryid');
    var BaseURL = getBaseURL();
    var url = BaseURL;
    url = url + "registration_controller/getStateList";
    url = url + "?case=get_state_profile";
    url = url + "&country_id=" + countryid;
    url = url + "&mode=GETDATA";
    xmlhttp.onreadystatechange = get_state_list;
    xmlhttp.open("GET", url, true)
    xmlhttp.send(null)
}

function get_native_state() {
    xmlhttp = GetXmlHttpObject();
    if (xmlhttp == null) {
        alert("Your browser doesn't support HTTP request.");
        return
    }
    var countryid = document.getElementById('native_country').value;
    var BaseURL = getBaseURL();
    var url = BaseURL;
    url = url + "registration_controller/getStateList";
    url = url + "?case=get_state_profile";
    url = url + "&country_id=" + countryid;
    url = url + "&mode=GETDATA";
    xmlhttp.onreadystatechange = get_nativ_state_list;
    xmlhttp.open("GET", url, true)
    xmlhttp.send(null)
}

function getRegions() {
    xmlhttp = GetXmlHttpObject();
    if (xmlhttp == null) {
        alert("Your browser doesn't support HTTP request.");
        return
    }
    var religionId = document.getElementById('religion').value;
    var BaseURL = getBaseURL();
    var url = BaseURL;
    url = url + "registration_controller/getCasteList";
    url = url + "?case=get_caste_list";
    url = url + "&religionId=" + religionId;
    url = url + "&mode=GETDATA";
    xmlhttp.onreadystatechange = get_caste_list;
    xmlhttp.open("GET", url, true)
    xmlhttp.send(null)
}

function get_caste_list() {
    if (xmlhttp.readyState == 4 || xmlhttp.readyState == "complete") {
        var response = xmlhttp.responseText;
        if (document.getElementById('caste') != null) {
            document.getElementById('caste').innerHTML = response;
        }
        $('.selectpicker').selectpicker("refresh");
        $("#caste").sb({
            fixedWidth: true
        });
    }
}

function get_state_list() {
    if (xmlhttp.readyState == 4 || xmlhttp.readyState == "complete") {
        var response = xmlhttp.responseText.split('##');
        if (document.getElementById('state_res') != null) {
            document.getElementById('state_res').innerHTML = response[0];
        }
        if (document.getElementById('state_pat_res') != null) {
            document.getElementById('state_pat_res').innerHTML = response[0];
        }
        if (document.getElementById('state_nav_res') != null) {
            document.getElementById('state_nav_res').innerHTML = response[0];
        }
        if (document.getElementById('state_res_birth') != null) {
            document.getElementById('state_res_birth').innerHTML = response[0];
        }
        if (document.getElementById('state_profile') != null) {
            document.getElementById('state_profile').innerHTML = response[0];
            document.getElementById('state_profile').innerHTML = response[0];
        }
		
		$("#phone").attr('maxlength',response[1]);
		
        $('.selectpicker').selectpicker("refresh");
        /* $("#state_profile").sb({
            fixedWidth: true
        }); */
    }
}

function get_nativ_state_list() {
    if (xmlhttp.readyState == 4 || xmlhttp.readyState == "complete") {
        var response = xmlhttp.responseText;
        if (document.getElementById('state_native') != null) {
            document.getElementById('state_native').innerHTML = response;
        }
        $("#state_native").sb({
            fixedWidth: true
        });
    }
}

function validateStringnum(field) {
    var valid = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890 "
    var ok = "yes";
    var temp;
    for (var i = 0; i < field.value.length; i++) {
        temp = "" + field.value.substring(i, i + 1);
        if (valid.indexOf(temp) == "-1") ok = "no";
    }
    if (ok == "no") {
        var strPass = field.value;
        var strLength = strPass.length;
        var myNumber = field.value.substring(0, (strLength) - 1);
        field.value = myNumber;
    }
}
function user_inactive(id){
	$('#showmodel').modal({
				show: true
	});		
	$(".LVModal-content").html("");	
	$(".LVmodal h3").html("");
     $(".spinner").show();     
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'common_controller/user_inactive/'+id,
			data: "id=" + id,   
			success: function (response) {			
			$(".LVmodal h3").html("Inactive User");	
            $(".LVModal-content").html(response);
            $(".spinner").hide();			
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
function invite_send(id){
	$('#showmodel').modal({
				show: true
	});		
	$(".LVModal-content").html("");	
	$(".LVmodal h3").html("");
    $(".spinner").show();    
    var getblockinfo = $("#blockinfo").val();
    var docstatus = $("#docstatus").val();		
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/express_interest/'+id,
			data: "id=" + id,   
			success: function (response) {			
			$(".LVmodal h3").html("Interest Request Status");	
            $(".LVModal-content").html(response);
            $(".spinner").hide();
            if(getblockinfo !='1' && docstatus !='0'){	
			$("#acceptintest").removeAttr('onclick');	
			if(isMobile()){
            $("#sendinterest").html('<i class="fa fa-check-circle"></i>');	
			}else{
			$("#sendinterest").hide();	
			}
			$("#acsendinterests").hide();
			$("#acceptintest").html('Interest Sent');
			$("#maybeval").hide();
			$("#declineintest").hide();
			}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	function inviteAcceptDecline(interest_id,id,stat){
	$('#showmodel').modal({
		show: true
	});	
	$(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
	var shortinfo =$("#shortinfo").val();
	 var getblockinfo = $("#blockinfo").val();	
	 var docstatus = $("#docstatus").val();	
    $(".spinner").show();	  
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/respose_now/'+interest_id+'/'+id+'/'+stat,			 
			success: function (response) {			
			$(".LVmodal h3").html("Interest Status");	
            $(".LVModal-content").html(response);
			$("#sendinterest").hide();
            $(".spinner").hide();	
			
			if(docstatus !='0'){
    		if(stat=='1'){
			  if(getblockinfo !='1'){
			$("#acceptintest").removeAttr('onclick');	
			$("#acceptintest").html('Connected Member');
			$("#declineintest").hide();
			if(isMobile()){
			$("#acsendinterests").html('<i class="fa fa-check-circle"></i>');
			}else{
				$("#acsendinterests").hide();
			}
			}}else{
				
			$("#declineintest").hide();
            $("#acsendinterests").html('Want to Send Interest ?');
         	$("#acceptintest").attr('onclick','invite_send('+id+')');
			if(shortinfo=='0'){
				$("#declineintest").show();  
				$("#declineintest").removeAttr('onclick');	 
                $("#declineintest").html('May be Later');				
				$("#declineintest").attr('onclick','showpopupshort('+id+')'); 
			  }
            $("#acceptintest").html('Send Now');
           		
			}
			}
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	function showpopupcontact(id,loged_id){
	$('#showmodel').modal({
		show: true
	});	
	$(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
    $(".spinner").show();	
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'common_controller/contact_information/'+id+'/'+loged_id+'/?referer='+document.URL,
			data: "id=" + id,   
			success: function (response) {		
			$(".LVmodal h3").html("Contact Details");	
            $(".LVModal-content").html(response);
            $(".spinner").hide();	
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	function showpopupshort(id){

	$('#showmodel').modal('show');
    $(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
     $(".spinner").show();		
	 var getblockinfo = $("#blockinfo").val();	
	
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/shortlist_profiles/'+id,
			data: "id=" + id,   
			success: function (response) {				
			$(".LVmodal h3").html("Profile Shortlisted");
            $(".LVModal-content").html(response);
            $(".spinner").hide();	
			if(getblockinfo !='1'){
            $("#shortlisted").removeAttr('onclick');	
            $("#maybeval").hide();			
			$("#shortlisted").html('<i class="fa fa-heart-o"></i> Shortlisted');
			}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	function block_profile(id){
	$('#showmodel').modal({
				show: true
	});
    $(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
     $(".spinner").show();	
	 var intereststatus = $("#intereststatus").val();
    	 
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/block_searched_member/'+id,
			data: "id=" + id,   
			success: function (response) {				
			$(".LVmodal h3").html("Block Status");
            $(".LVModal-content").html(response);
            $(".spinner").hide();
			if(intereststatus !='1'){
            $("#blockinfo").val('1');			
			$("#blockstyle").removeAttr('onclick');
			$("#blockstyle").html('<i class="fa fa-ban"></i> Unblock Profile');
			$("#blockstyle").attr('onclick','unblock_profile('+id+')');
			}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	
	function unblock_profile(id){
	$('#showmodel').modal({
				show: true
	});
    $(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
     $(".spinner").show();		
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/unblock_search_members/'+id,
			data: "id=" + id,   
			success: function (response) {				
			$(".LVmodal h3").html("Block Status");
            $(".LVModal-content").html(response);
            $(".spinner").hide();
            $("#blockinfo").val('');			
			$("#blockstyle").removeAttr('onclick');
			$("#blockstyle").html('<i class="fa fa-ban"></i> Block Profile');
			$("#blockstyle").attr('onclick','block_profile('+id+')');
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	function errSelectOption(){
	$('#showmodel').modal({
				show: true
	});
    $(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
     $(".spinner").show();		
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'membership/cheque_draft_message/errSelectOption',
			success: function (response) {				
			$(".LVmodal h3").html("Payment Mode");
            $(".LVModal-content").html(response);
            $(".spinner").hide();			
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	function responseErrMessage(){
	$('#showmodel').modal({
				show: true
	});
    $(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
     $(".spinner").show();		
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'membership/cheque_draft_message',
			success: function (response) {				
			$(".LVmodal h3").html("Payment Mode");
            $(".LVModal-content").html(response);
            $(".spinner").hide();			
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	function cardPaymentOff(){
	$('#showmodel').modal({
				show: true
	});
    $(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
     $(".spinner").show();		
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'membership/cheque_draft_message/cardPaymentOff',
			success: function (response) {				
			$(".LVmodal h3").html("Payment Mode");
            $(".LVModal-content").html(response);
            $(".spinner").hide();			
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	function errCardType(){
	$('#showmodel').modal({
				show: true
	});
    $(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
     $(".spinner").show();		
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'membership/cheque_draft_message/errCardType',
			success: function (response) {				
			$(".LVmodal h3").html("Payment Mode");
            $(".LVModal-content").html(response);
            $(".spinner").hide();			
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	function chequekOff(){
	$('#showmodel').modal({
				show: true
	});
    $(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
     $(".spinner").show();		
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'membership/cheque_draft_message/chequekOff',
			success: function (response) {				
			$(".LVmodal h3").html("Payment Mode");
            $(".LVModal-content").html(response);
            $(".spinner").hide();			
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	function netBankingOff(){
	$('#showmodel').modal({
				show: true
	});
    $(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
     $(".spinner").show();		
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'membership/cheque_draft_message/netBankingOff',
			success: function (response) {				
			$(".LVmodal h3").html("Payment Mode");
            $(".LVModal-content").html(response);
            $(".spinner").hide();			
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	
function isMobile() {
 try {
    if(/Android|webOS|iPhone|iPad|iPod|pocket|psp|kindle|avantgo|blazer|midori|Tablet|Palm|maemo|plucker|phone|BlackBerry|symbian|IEMobile|mobile|ZuneWP7|Windows Phone|Opera Mini/i.test(navigator.userAgent)) {
     return true;
    };
    return false;
 } catch(e){ console.log("Error in isMobile"); return false; }
}

function show_popup(abc){
	$('#loginModal').modal({
			show: true
			});	
	
	    $.ajax({
			type: 'POST',
			url: getBaseURL()+'common_controller/redirectsession',
			data: "redirectvalue=" + abc ,  
			success: function (data) {
			
			
			}
		}); 
	 
		return false;	
	}
	
	
	/*shortlist for connection pages */
	
function showpopupshortcom(event,id){
   
	var idval = event.target.id;
   
	$('#showmodel').modal('show');
    $(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
     $(".spinner").show();		
	 var getblockinfo = $("#blockinfo").val();	
	
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/shortlist_profiles/'+id,
			data: "id=" + id,   
			success: function (response) {				
			$(".LVmodal h3").html("Profile Shortlisted");
            $(".LVModal-content").html(response);
            $(".spinner").hide();	
			if(getblockinfo !='1'){
            $("#"+idval).removeAttr('onclick');	
			$("#"+idval).addClass('disabled');
			
            $("#maybeval").hide();			
			$("#"+idval).html('<i class="fa fa-heart"></i> Shortlisted');
			}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	
	
	function invite_sendcom(event,id,getblockinfo,docstatus,shortstatus){
	$('#showmodel').modal({
				show: true
	});		
	var idval = event.target.id;

	$(".LVModal-content").html("");	
	$(".LVmodal h3").html("");
    $(".spinner").show();    
  
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/express_interest/'+id,
			data: "id=" + id,   
			success: function (response) {			
			$(".LVmodal h3").html("Interest Request Status");	
            $(".LVModal-content").html(response);
            $(".spinner").hide();
            if(getblockinfo !='1' && docstatus !='0'){	
			
			$("#"+idval).removeAttr('onclick');	
		    $("#"+idval).addClass('disabled');
			if(isMobile()){
            $("#sendinterest").html('<i class="fa fa-check-circle"></i>');	
			}else{
			$("#sendinterest").hide();	
			}
			$("#acsendinterests").hide();
			$("#"+idval).html(' <i class="fa fa-check-circle"></i> Interest Sent');
			$("#maybeval").hide();
			$("#declineintest").hide();
			}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	
	
	function inviteAcceptDeclinecom(interest_id,id,stat){
	$('#showmodel').modal({
		show: true
	});	
	$(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
	var shortinfo =$("#shortinfo").val();
	 var getblockinfo = $("#blockinfo").val();	
	 var docstatus = $("#docstatus").val();	
    $(".spinner").show();	  
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/respose_now/'+interest_id+'/'+id+'/'+stat,			 
			success: function (response) {			
			$(".LVmodal h3").html("Interest Status");	
            $(".LVModal-content").html(response);
			$("#sendinterest").hide();
            $(".spinner").hide();	
			
			if(docstatus !='0'){
    		if(stat=='1'){
			  if(getblockinfo !='1'){
			$("#acceptintest").removeAttr('onclick');	
			$("#acceptintest").html('<i class="fa fa-check-circle"></i> Connected');
			$("#declineintest").hide();
			if(isMobile()){
			$("#acsendinterests").html('<i class="fa fa-check-circle"></i>');
			}else{
				$("#acsendinterests").hide();
			}
			}}else{
				
			$("#declineintest").hide();
            $("#acsendinterests").html('Want to Send Interest ?');
         	$("#acceptintest").attr('onclick','invite_send('+id+')');
			if(shortinfo=='0'){
				$("#declineintest").show();  
				$("#declineintest").removeAttr('onclick');	 
                $("#declineintest").html('May be Later');				
				$("#declineintest").attr('onclick','showpopupshort('+id+')'); 
			  }
            $("#acceptintest").html('Send Now');
           		
			}
			}
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
/*shortlist end for connection pages */	

/* On registration page getting state list*/
	function get_statevalue(getval){
		
		$("#hidestate").hide(); 
		$("#state_profile").empty().trigger('change'); 
		var stateID = getval.value;
		$("#state_profile").html("<option value=''>Select State</option>"); 
		$.ajax({
			type: 'POST',
			url: getBaseURL()+'registration_controller/StateList',
		    data:{"country_id":stateID},
			dataType:'json',
         	success: function (json) {				
				var options ='';
				if(json[0].length>0){
					
					for (var i = 0; i <json[0].length; i++){
						
						options += '<option value="' + json[0][i].id + '">' + json[0][i].state + '</option>';
					}
					$("#state_profile").append(options);
					$('#state_profile').selectpicker('refresh');
					$('#state_profile').attr("data-valid","required");
					$("#phone").attr('maxlength',json[1]);
					$("#hidestate").show();
				}else{ 
			
					$('#state_profile').removeAttr("data-valid");	
					$("#city_profile").empty().trigger('change'); 
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}
	

/*End of the code registration statelist*/

/*Accept invitation for dashboard*/
function inviteAcceptDeclinedashboard(interest_id,id,stat){
	$('#showmodel').modal({
		show: true
	});	
	$(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
    $(".spinner").show();	  
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/respose_now/'+interest_id+'/'+id+'/'+stat,			 
			success: function (response) {			
			$(".LVmodal h3").html("Interest Status");	
            $(".LVModal-content").html(response);
            $(".spinner").hide();
			var html = $.parseHTML(response); 
			var message= $(html).find( '#message' ).val();			
			if(stat=='0' && message=='1'){
            $("#reject").html('Rejected');	
			}
			if(stat=='1' && message=='2'){
            $("#accept").html('Accepted');	
			}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}

/*end invitation for dashboard*/
/* Update Notification*/

  function notification(token,browser){
     var browsername =browser.name;
	 var bID =browser.version;
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'push_notification_controller/add_notification/'+token+'/'+browsername+'/'+bID,
		   	success: function (data) {				
			console.log(data);
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	

/*End of the End Update Notification*/
function refineUrl()
{
    //get full url
    var url = window.location.href;
    //get url after/  
    var value = url = url.slice( 0, url.indexOf('?') );
    //get the part after before ?
    value  = value.replace('@System.Web.Configuration.WebConfigurationManager.AppSettings["BaseURL"]','');  
    return value;     
} 


/* get facebook album*/

  function getimagerecord(albumID,access){
	  
	  var aid = 'album_list_'+albumID;
	  var flag = '0';
	  var value= $(".tab-pane").attr('id');
	  $(".overlay-load").show();	
	  if(!value){
		flag = '1';	  
	  }
	  $(".tab-pane").removeClass('active');
	  $(".tab-pane").each(function(){
		  //alert($(this).attr('id'));
        if( $(this).attr('id') == aid) {
			//alert(flag);
			$(".overlay-load").hide();	
            $(this).addClass('active');
			flag = '0';	
			exit;
			}else{
			$(this).removeClass('active');
			flag = '1';	
				
			}
		});
	
	 if(flag == '1'){
	  $.ajax({
			type: 'POST',
			url: getBaseURL()+'image_controller/getfbbyalbum?albumID='+albumID + '&access='+access,
		   	success: function (data) {				
			var options ='';
			 $(".overlay-load").hide();	
            $("#fb_photossss").append(data);			
				 
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	 }
	}
	

/*get facebook album*/

	/*MAKE PROFILE PIC*/
function makeProfile(el) {
	var current = $(el)
	var value = current.attr('id');
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'image_controller/profilepic?imgid='+value,
		   	success: function (data) {				
			
			$(".main_profile-pic").show();
	        $(".set_profile-pic").hide();
            //$(".set_profile-pic-mobile").hide();	
			//$(".main_profile-pic-mobile").show();			
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	
	
}

function makeProfilemob(el) {
	var current = $(el)
	var value = current.attr('id');
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'image_controller/profilepic?imgid='+value,
		   	success: function (data) {				
			$(".set_profile-pic-mobile").show();
			//$(".main_profile-pic").show();
	        //$(".set_profile-pic").hide();
			current.parent().hide();
			current.parent().next().show();
           // $(".set_profile-pic-mobile").hide();	
			//$(".main_profile-pic-mobile").show();			
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	
	
}


function makeProfilefb(el) {
	//var current = $(el)
	var value = $("input[name='fb_photos_radio']:checked").val();
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'image_controller/profilepic?imgid='+value,
		   	success: function (data) {				
			console.log(data);
			if(data ==1){
			   $('#myModal2').modal('hide');	
			}
			$(".main_profile-pic").show();
	        $(".set_profile-pic").hide();
            //$(".set_profile-pic-mobile").hide();	
			//$(".main_profile-pic-mobile").show();			
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	
	
}

function keyPress(e){
	
	if (!e) e = window.event; // needed for cross browser compatibility
	if (e.keyCode == 13){
		
		if(e.target.id == 'forgot_email'){
			
			$("#btn_forgot").click();
		}else{
			
			$("#resend_activation_email").click();
		}
	}
}
/*Forgot password */
function forgot_password(){
	
	var email = $("#forgot_email").val();
	$.ajax({
		type: 'POST',
		url: getBaseURL()+'Login_controller/forgotpassword_process',
		data:{"forgot_email":email},
		dataType:'json',
		success: function (data) {				
			if(data.field_error == '1'){
				
				$("#errForgot").html('<div>'+data.forgot_email+'</div>');
				$("#errForgot").show();
			}else if(data.field_error == '2'){
				
				$("#errForgot").html('<div>'+data.message+'</div>');
				$("#errForgot").show();
			}else{
				
				$("#forget_pwd_wrapper").hide();
				$("#forget_password_success").show();
				$("#spn_forget_pwd_success").html('<div>'+data.password_message+'</div>');
			}
		},
		error: function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus, errorThrown);
		}
	});
}

/* resend activation mail */
function resend_activation(){
	
	var email = $("#resend_activation_email").val();
	$.ajax({
		type: 'POST',
		url: getBaseURL()+'Login_controller/validate_resend_mail',
		data:{"emailid":email},
		dataType:'json',
		success: function (data) {				
			if(data.field_error != '0'){
				
				$("#errResend").html('<div>'+data.message+'</div>');
				$("#errResend").show();
			}else{
				
				$("#resend_mail_wrapper").hide();
				$("#resend_mail_success").show();
				$("#spn_resend_mail_success").html('<div>'+data.message+'</div>');
			}
		},
		error: function(jqXHR, textStatus, errorThrown) {
			console.log(textStatus, errorThrown);
		}
	});
}


/*send the mobblie**/


function invite_sendmob(id,logID){
	$('#showmodel').modal({
				show: true
	});		
	$(".LVModal-content").html("");	
	$(".LVmodal h3").html("");
    $(".spinner").show();    
    var getblockinfo = $("#blockinfo").val();
    var docstatus = $("#docstatus").val();		
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/express_interest/'+id,
			data: "id=" + id,   
			success: function (response) {			
			$(".LVmodal h3").html("Interest Request Status");	
            $(".LVModal-content").html(response);
            $(".spinner").hide();
            if(getblockinfo !='1' && docstatus !='0'){	
			$("#acceptintestmob").removeAttr('onclick');	
		   // $("#acceptintestmob").addClass(); 
		    $("#acceptintestmob").addClass('disabled');
			$("#showonmog").show();
            $("#sendinterestmob").html('<i class="fa fa-check-circle"></i>');	
			
			$("#acsendinterests").hide();
			$("#acceptintestmob").html('<i class="fa fa-check connected-icon"></i> Interest Sent');
			$("#maybevalmob").hide();
			$("#declineintest").hide();
			}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	
function inviteAcceptDeclinemob(interest_id,id,stat){
	$('#showmodel').modal({
		show: true
	});	
	$(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
	var shortinfo =$("#shortinfo").val();
	 var getblockinfo = $("#blockinfo").val();	
	 var docstatus = $("#docstatus").val();	
    $(".spinner").show();	  
	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/respose_now/'+interest_id+'/'+id+'/'+stat,			 
			success: function (response) {			
			$(".LVmodal h3").html("Interest Status");	
            $(".LVModal-content").html(response);
			$("#sendinterest").hide();
            $(".spinner").hide();	
			
			if(docstatus !='0'){
    		if(stat=='1'){
			  if(getblockinfo !='1'){
			$("#acceptintestmob").addClass('disabled');		  
			$("#acceptintestmob").removeAttr('onclick');	
			$("#acceptintestmob").html(' <i class="fa fa-check connected-icon"></i>Connected Member');
			$("#showonmog").show();
			$("#declineintest").hide();
			$("#maybevalmob").hide();
			if(isMobile()){
			$("#acsendinterests").html('<i class="fa fa-check-circle"></i>');
			}else{
				$("#acsendinterests").hide();
			}
			}}else{
				
			$("#declineintest").hide();
            $("#acsendinterests").html('Want to Send Interest ?');
         	$("#acceptintestmob").attr('onclick','invite_sendmob('+id+','+interest_id+')');
			
			if(shortinfo=='0'){
			$("#maybevalmob").show();
			  }else{
				  
			  $("#maybevalmob").show();
			 }
            $("#acceptintestmob").html('Send Now');
            //$("#showonmog").show();		
			}
			}
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	
		function showpopupshortmob(id){

	$('#showmodel').modal('show');
    $(".LVmodal h3").html("");			
	$(".LVModal-content").html("");	
     $(".spinner").show();		
	 var getblockinfo = $("#blockinfo").val();	
	
   	 $.ajax({
			type: 'POST',
			url: getBaseURL()+'interest_controller/shortlist_profiles/'+id,
			data: "id=" + id,   
			success: function (response) {				
			$(".LVmodal h3").html("Profile Shortlisted");
            $(".LVModal-content").html(response);
            $(".spinner").hide();	
			if(getblockinfo !='1'){
            $("#shortlisted").removeAttr('onclick');	
            $("#maybevalmob").addClass('disabled');	
			$("#maybevalmob").html('<i class="fa fa-heart-o"></i> Shortlisted');
			}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}
	