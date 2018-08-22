<?php include "inner_header.php";?>
<script src=" https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript">
var jQuery2_1_3 = $.noConflict(true);
// var nav = $('.content-nav');
// if (nav.length) {
//   var contentNav = nav.offset().top;

// }
</script>
	<br><br><br><br><br>
<style type="text/css">
    
    #cropContainerModal_1{ width:46%; height:220px; border:1px solid #ccc;margin: 20px}
    #cropContainerModal_2{ width:46%; height:220px; border:1px solid #ccc;margin: 20px}
    #cropContainerModal_3{ width:46%; height:220px; border:1px solid #ccc;margin: 20px}
    #cropContainerModal_4{ width:46%; height:220px; border:1px solid #ccc;margin: 20px}
</style>	
	 
	 <section class="container-full theme-bg-panel col-xs-12">
  <div class="row">
   <h2 style="color: #fff;text-align: center;font-weight: 500">Show pictures to people you want to intrested in</h2>
     </div>
  </section> 

<div class="container-fluid mobile-padding-lr0">
    <div class="col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
	   <div class="LV-package-box">
            <div class="padd-60"> 
            <div id="err_msg_img"></div>  
                <div class="row">
                    <div class="col-sm-8" id="cropContainerModal_1">
                        <img style="width:100%; height:220px;" src="<?php echo URL;?>assets/images/default_upload.png">
                    </div>
                    <div class="col-sm-8" id="cropContainerModal_2">
                        <img style="width:100%; height:220px;" src="<?php echo URL;?>assets/images/default_upload.png">
                    </div>
                    
                </div> 
                <div class="row">
                    <div class="col-sm-8" id="cropContainerModal_3">
                        <img style="width:100%; height:220px;" src="<?php echo URL;?>assets/images/default_upload.png">
                    </div>
                    <div class="col-sm-8" id="cropContainerModal_4">
                        <img style="width:100%; height:220px;" src="<?php echo URL;?>assets/images/default_upload.png">
                    </div>
                </div>
            </div>
	       <div class="plan-register-section">
            <div style="float: right;">
                <button type="submit" class="btn register-now-btn" id="upload_now">Upload Images</button> &nbsp;&nbsp;
                <a href="register_step2.php" ><button type="cutton" class="btn register-now-btn" id="upload_now" style="background-color: #ce191f">Skip</button>
                    </div>
	       </div>
        </div>	
    </div>         
</div>
<?php require 'footer.php'; ?> 
<script type="text/javascript">
    var images=[];
    var final_images =[];
    var remove_images =[];
    var croppicContainerModalOptions = {
                uploadUrl:'img_save_to_file.php',
                cropUrl:'img_crop_to_file.php',
                modal:true,
                imgEyecandyOpacity:0.4,
                loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
                onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
                onAfterImgUpload: function(){
                    var found = jQuery.inArray(response.url, remove_images);
                    if (found >= 0) {
                    } else {
                        // Element was not found, add it.
                        remove_images.push(response.url);
                    }
                    console.log('onAfterImgUpload')
                },
                onImgDrag: function(){ console.log('onImgDrag') },
                onImgZoom: function(){ console.log('onImgZoom') },
                onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
                onAfterImgCrop:function(){ 
                    var found = jQuery.inArray(response.url, final_images);
                    if (found >= 0) {
                    } else {
                        // Element was not found, add it.
                        final_images.push(response.url);
                    }
                    
                    console.log('onAfterImgCrop') },
                onReset:function(){ console.log('onReset') },
                onAfterRemoveCroppedImg:function(){
                    var found = jQuery.inArray(response['url'], remove_images);
                    if (found >= 0) {
                    } else {
                        // Element was not found, add it.
                        remove_images.push(response['url']);
                    };console.log('onAfterRemoveCroppedImg')},
                onError:function(errormessage){ console.log('onError:'+errormessage) }
        }
var cropContainerModal_1 = new Croppic('cropContainerModal_1', croppicContainerModalOptions);     
var cropContainerModal_2 = new Croppic('cropContainerModal_2', croppicContainerModalOptions);     
var cropContainerModal_3 = new Croppic('cropContainerModal_3', croppicContainerModalOptions);     
var cropContainerModal_4 = new Croppic('cropContainerModal_4', croppicContainerModalOptions);     


Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};
$('#upload_now').on('click',function(){
    $.ajax({
                url: "<?php echo URL?>server/server.php",
                data: {final_images:final_images,remove_images:remove_images,action:'upload_images'},
                type:'POST',
                datatype:'json',
                success : function(response)
                {
                    var response =JSON.parse(response);
                    if(response['status']=='success')
                    {
                        window.location = '<?php echo URL_VIEW;?>register_step2.php';
                    }
                    else
                    {
                        $('#err_msg_img').addClass('lv-alert alert-danger');
                        $('#err_msg_img').text(response['msg']);
                        window.parent.scrollTo(0,0);
                    }
                }
            })
})
</script>