<?php include "inner_header.php"; ?>	
<style type="text/css">
    .navbar-fixed-top{position: relative !important;}
    #ms-languages_known,#ms-hobbies,#ms-interests,#ms-music,#ms-sports,#ms-food{display: inline-table;}
</style>
<section>
    <div class="container">
        <h2 style="color: #ed3237;">COMPLETE YOUR PROFILE</h2>
        <small>Fill few more information to complete your profile and you will be ready to meet your matches.</small>
        <!-- <p class="pull-right">STEP 2</p> -->
        <div class="col-xs-12 col-sm-12 ">
            <form id="complete_profile" action="#" method="post" autocomplete="off" autofocus="off">
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-file-text"></i> Personal Information</h3>
                    <div class="input-group">
                        <div class="input-group-addon">E-mail <span style="color:red">*</span></div>
                        <input type="email" class="form-control" id="register_email" value="" name="register_email">
                    </div>
                    <div class="input-group" id="height">
                        <div class="input-group-addon">Height <span style="color:red">*</span> </div>
                        <select class="form-control" name="height">
                            <option value="">-- Feet/Inches --</option>
                            <option value="4 Feet">4 Feet</option>
                            <option value="4 Feet 1 Inches">4 Feet 1 Inches</option>
                            <option value="4 Feet 2 Inches">4 Feet 2 Inches</option>
                            <option value="4 Feet 3 Inches">4 Feet 3 Inches</option>
                            <option value="4 Feet 4 Inches">4 Feet 4 Inches</option>
                            <option value="4 Feet 5 Inches">4 Feet 5 Inches</option>
                            <option value="4 Feet 6 Inches">4 Feet 6 Inches</option>
                            <option value="4 Feet 7 Inches">4 Feet 7 Inches</option>
                            <option value="4 Feet 8 Inches">4 Feet 8 Inches</option>
                            <option value="4 Feet 9 Inches">4 Feet 9 Inches</option>
                            <option value="4 Feet 10 Inches">4 Feet 10 Inches</option>
                            <option value="4 Feet 11 Inches">4 Feet 11 Inches</option>
                            <option value="5 Feet">5 Feet</option>
                            <option value="5 Feet 1 Inches">5 Feet 1 Inches</option>
                            <option value="5 Feet 2 Inches">5 Feet 2 Inches</option>
                            <option value="5 Feet 3 Inches">5 Feet 3 Inches</option>
                            <option value="5 Feet 4 Inches">5 Feet 4 Inches</option>
                            <option value="5 Feet 5 Inches">5 Feet 5 Inches</option>
                            <option value="5 Feet 6 Inches">5 Feet 6 Inches</option>
                            <option value="5 Feet 7 Inches">5 Feet 7 Inches</option>
                            <option value="5 Feet 8 Inches">5 Feet 8 Inches</option>
                            <option value="5 Feet 9 Inches">5 Feet 9 Inches</option>
                            <option value="5 Feet 10 Inches">5 Feet 10 Inches</option>
                            <option value="5 Feet 11 Inches">5 Feet 11 Inches</option>
                            <option value="6 Feet">6 Feet</option>
                            <option value="6 Feet 1 Inches">6 Feet 1 Inches</option>
                            <option value="6 Feet 2 Inches">6 Feet 2 Inches</option>
                            <option value="6 Feet 3 Inches">6 Feet 3 Inches</option>
                            <option value="6 Feet 4 Inches">6 Feet 4 Inches</option>
                            <option value="6 Feet 5 Inches">6 Feet 5 Inches</option>
                            <option value="6 Feet 6 Inches">6 Feet 6 Inches</option>
                            <option value="6 Feet 7 Inches">6 Feet 7 Inches</option>
                            <option value="6 Feet 8 Inches">6 Feet 8 Inches</option>
                            <option value="6 Feet 9 Inches">6 Feet 9 Inches</option>
                            <option value="6 Feet 10 Inches">6 Feet 10 Inches</option>
                            <option value="6 Feet 11 Inches">6 Feet 11 Inches</option>
                            <option value="7 Feet">7 Feet</option>
                            <option value="7 Feet 1 Inches">7 Feet 1 Inches</option>
                            <option value="7 Feet 2 Inches">7 Feet 2 Inches</option>
                            <option value="7 Feet 3 Inches">7 Feet 3 Inches</option>
                            <option value="7 Feet 4 Inches">7 Feet 4 Inches</option>
                            <option value="7 Feet 5 Inches">7 Feet 5 Inches</option>
                            <option value="7 Feet 6 Inches">7 Feet 6 Inches</option>
                            <option value="7 Feet 7 Inches">7 Feet 7 Inches</option>
                            <option value="7 Feet 8 Inches">7 Feet 8 Inches</option>
                            <option value="7 Feet 9 Inches">7 Feet 9 Inches</option>
                            <option value="7 Feet 10 Inches">7 Feet 10 Inches</option>
                            <option value="7 Feet 11 Inches">7 Feet 11 Inches</option>
                        </select>
                    </div>
                    <div class="input-group" id="weight">
                        <div class="input-group-addon">Weight <span style="color:red">*</span> </div>
                        <select class="form-control" name="weight">
                            <option value="">-- Weight in Kgs --</option>
                            <option value="35 Kg">35 Kg</option>
                            <option value="45 kG">45 kG</option>
                            <option value="65 Kg">65 Kg</option>
                            <option value="85 Kg">85 Kg</option>
                            <option value="100 Kg">100 Kg</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Body Type<span style="color:red">*</span></div>
                        <label  style="padding-left:30px;">
                        <input type="radio" checked="" name="body_type" id="slim" value="Slim"> Slim
                        </label>&nbsp;&nbsp;
                        <label>
                        <input type="radio" name="body_type" id="normal" value="Normal"> Normal
                        </label>&nbsp;&nbsp;
                        <label>
                        <input type="radio" name="body_type" id="average" value="Average"> Average
                        </label>&nbsp;&nbsp;
                        <label>
                        <input type="radio" name="body_type" id="heavy" value="Heavy"> Heavy
                        </label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Complexion<span style="color:red">*</span></div>
                        <label  style="padding-left:30px;">
                        <input type="radio" checked="" name="complexion" id="very_slim" value="Very Fair"> Very Fair
                        </label>&nbsp;&nbsp;
                        <label>
                        <input type="radio" name="complexion" id="fair" value="Fair"> Fair
                        </label>&nbsp;&nbsp;
                        <label>
                        <input type="radio" name="complexion" id="white" value="White"> White
                        </label>&nbsp;&nbsp;
                        <label>
                        <input type="radio" name="complexion" id="white_brown" value="White Brown"> White Brown
                        </label>&nbsp;&nbsp;
                        <label>
                        <input type="radio" name="complexion" id="dark" value="Dark"> Dark
                        </label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Physical Status <span style="color:red">*</span></div>
                        <label  style="padding-left:30px;">
                        <input type="radio" checked="" name="physical_status" value="Normal"> Normal
                        </label>&nbsp;&nbsp;
                        <label>
                        <input type="radio" name="physical_status" value="Physically Challenged">Physically Challenged
                        </label>
                    </div>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-map-marker"></i> Location Information</h3>
                    <div class="input-group">
                        <div class="input-group-addon">Country Living In <span style="color:red">*</span></div>
                        <input type="text" class="form-control" id="country" value="" name="country">
                    </div>
                    <div class="input-group" id="state">
                        <div class="input-group-addon">Residing State  <span style="color:red">*</span> </div>
                        <select class="form-control" name="state">
                            <option value="">-- Select --</option>
                            <?php $get_states =  $db->query("SELECT * FROM states limit 10"); 
                                while($row = $get_states->fetch()) { ?>
                            <option value="<?=$row['name'];?>"><?=$row['name'];?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="input-group" id="city">
                        <div class="input-group-addon">Residing City  <span style="color:red">*</span> </div>
                        <select class="form-control " name="city">
                            <option value="">-- Select --</option>
                            <?php $get_cities =  $db->query("SELECT * FROM cities limit 10"); 
                                while($row = $get_cities->fetch()) { ?>
                            <option value="<?=$row['name'];?>"><?=$row['name'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group" id="citizenship">
                        <div class="input-group-addon">Citizenship <span style="color:red">*</span> </div>
                        <select class="form-control " name="citizenship">
                            <option value="">-- Select --</option>
                            <option value="India">India</option>
                            <option value="Iran">Iran</option>
                        </select>
                    </div>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-gear"></i> Religious Information</h3>
                    <div class="input-group">
                        <div class="input-group-addon">Division  <span style="color:red">*</span></div>
                        <input type="text" class="form-control" id="division" value="" name="division">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Willing to marry from <span style="color:red">*</span></div>
                        <label  style="padding-left:30px;"><input type="radio" checked="" name="marry_from_other" value="Same Division"> Same Division</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="marry_from_other" value="Other Divisions Also">Other Divisions Also</label>
                    </div>
                    <div class="input-group" id="reg_values">
                        <div class="input-group-addon">Religious Values <span style="color:red">*</span> </div>
                        <select class="form-control" name="reg_values">
                            <option value="">-- Select --</option>
                            <option value="Very religious">Very religious</option>
                            <option value="Believe in Jesus not in religion">Believe in Jesus not in religion</option>
                            <option value="Sunday Church Goer">Sunday Church Goer</option>
                        </select>
                    </div>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-graduation-cap"></i> Education & Profession</h3>
                    <div class="input-group">
                        <div class="input-group-addon">Highest Education   <span style="color:red">*</span></div>
                        <select class="form-control" name="education">
                            <option value="">-- Select --</option>
                            <option value="Any Bachelors in Engineering / Computers"><b>Any Bachelors in Engineering / Computers</b></option>
                            <option value="BCA"> - BCA</option>
                            <option value="B.Arch"> - B.Arch</option>
                            <option value="B.Plan"> - B.Plan</option>
                            <option value="B.E"> - B.E</option>
                            <option value="B.Tech"> - B.Tech</option>
                            <option value="B.Sc"> - B.Sc</option>
                            <option value="Any Master in Engineering / Computers"><b>Any Master in Engineering / Computers</b></option>
                            <option value="MCA"> - MCA</option>
                            <option value="M.Arch"> - M.Arch</option>
                            <option value="M.E"> - M.E</option>
                            <option value="M.Tech"> - M.Tech</option>
                            <option value="M.Sc"> - M.Sc</option>
                        </select>
                    </div>
                    <div class="input-group-addon col-md-2">Languages known <span style="color:red">*</span> </div>
                    &nbsp;&nbsp;
                    <div class="input-group col-md-10" id="languages_known">
                        <select class="form-control" name="languages_known">
                            <option value="default">Choose..</option>
                            <?php $get_langueges =  $db->query("SELECT * FROM languages limit 10"); 
                                while($row = $get_langueges->fetch()) { ?>
                            <option value="<?=$row['name'];?>"><?=$row['name'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <br><br>
                    <div class="input-group">
                        <div class="input-group-addon">Employed in <span style="color:red">*</span></div>
                        <label  style="padding-left:30px;"><input type="radio" checked="" name="employed_in" value="Government"> Government</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="employed_in" value="Defence"> Defence</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="employed_in" value="Private"> Private</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="employed_in" value="Business"> Business</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="employed_in" value="Self Employed"> Self Employed</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="employed_in" value="Not Working"> Not Working</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Occupation  <span style="color:red">*</span></div>
                        <input type="text" class="form-control" id="occupation" value="" name="occupation">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Annual Income  <span style="color:red">*</span></div>
                        <select class="form-control" name="annual_income">
                            <option value="">--Select Income--</option>
                            <option value="0 - 1 Lakh">0 - 1 Lakh</option>
                            <option value="1 - 2 Lakhs">1 - 2 Lakhs</option>
                            <option value="2 - 3 Lakhs">2 - 3 Lakhs</option>
                            <option value="3 - 4 Lakhs">3 - 4 Lakhs</option>
                            <option value="4 - 5 Lakhs">4 - 5 Lakhs</option>
                            <option value="5 - 6 Lakhs">5 - 6 Lakhs</option>
                            <option value="6 - 7 Lakhs">6 - 7 Lakhs</option>
                        </select>
                    </div>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-group"></i> Family Information</h3>
                    <div class="input-group">
                        <div class="input-group-addon">Parent's Contact No. <span style="color:red">*</span></div>
                        <input type="text" class="form-control" id="pr_contact_num" value="" name="pr_contact_num">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Family Value <span style="color:red">*</span></div>
                        <label  style="padding-left:30px;"><input type="radio" name="family_value" value="Orthodox" checked>   Orthodox</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="family_value" value="Traditional">  Traditional</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="family_value" value="Moderate">   Moderate</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="family_value" value="Liberal">   Liberal</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Family Type <span style="color:red">*</span></div>
                        <label  style="padding-left:30px;"><input type="radio" name="family_type" value="Joint Family" checked> Joint Family</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="family_type" value="Nuclear Family"> Nuclear Family</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Family Status <span style="color:red">*</span></div>
                        <label  style="padding-left:30px;"><input type="radio" name="family_status" value="Middle Class" checked> Middle Class</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="family_status" value="Upper Middle Class"> Upper Middle Class</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="family_status" value="Rich / Affluent"> Rich / Affluent</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Ethnicity   <span style="color:red">*</span></div>
                        <select class="form-control" name="ethnicity">
                            <option value="">-- Select --</option>
                            <option value="African">African</option>
                            <option value="Caribben">Caribben</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Father's Occupation <span style="color:red">*</span></div>
                        <input type="email" class="form-control" id="fr_occupation" value="" name="fr_occupation">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Mother's Occupation <span style="color:red">*</span></div>
                        <input type="email" class="form-control" id="mr_occupation" value="" name="mr_occupation">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">No.of Brothers <span style="color:red">*</span></div>
                        <select class="form-control" name="no_brothers">
                            <option value="">-- No.of Brothers --</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">No.of Sisters   <span style="color:red">*</span></div>
                        <select class="form-control " name="no_sisters">
                            <option value="">-- No.of Sisters --</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-gear"></i> Life Style</h3>
                    <div class="input-group">
                        <div class="input-group-addon">Eating Habits   <span style="color:red">*</span></div>
                        <label style="padding-left:30px;"><input type="radio" name="eating_habits" id="vegetarian" value="Vegetarian" checked=""> Vegetarian</label>&nbsp;&nbsp;
                        <label><input type="radio" name="eating_habits" id="non_vegetarian" value="Non vegetarian"> Non Vegetarian</label>&nbsp;&nbsp;
                        <label><input type="radio" name="eating_habits" id="eggetarian" value="Eggetarian"> Eggetarian</label>&nbsp;&nbsp;
                        <label><input type="radio" name="eating_habits" id="vegan" value="Vegan"> Vegan</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Drinking Habits   <span style="color:red">*</span></div>
                        <label style="padding-left:30px;"><input type="radio" name="drinking_habits" id="non_drinker" value="Non-drinker" checked=""> Non-drinker</label>&nbsp;&nbsp;
                        <label><input type="radio" name="drinking_habits" value="upper" id="l_social_drinker" value="Light / Social drinker"> Light / Social drinker</label>&nbsp;&nbsp;
                        <label><input type="radio" name="drinking_habits" value="rich" id="regular_drinker" value="Regular drinker"> Regular drinker</label>
                    </div>
                    <div class="input-group-addon col-md-2">Interests <span style="color:red">*</span> </div>
                    &nbsp;&nbsp;
                    <div class="input-group col-md-10" id="interests">
                        <select class="form-control" name="interests">
                            <option value=""></option>
                            <option value="Internet Surfing"> Internet Surfing </option>
                            <option value="Listening to music"> Listening to music </option>
                            <option value="Movies"> Movies </option>
                            <option value="Travelling"> Travelling </option>
                        </select>
                    </div>
                    <br><br>
                    <div class="input-group-addon col-md-2">Hobbies <span style="color:red">*</span> </div>
                    &nbsp;&nbsp;
                    <div class="input-group col-md-10" id="hobbies">
                        <select class="form-control" name="hobbies">
                            <option value=""></option>
                            <option value="Art/Handcraft">Art/Handcraft</option>
                            <option value="Cooking">Cooking</option>
                            <option value="Dancing">Dancing</option>
                            <option value="Gardening">Gardening</option>
                        </select>
                    </div>
                    <br><br>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-gear"></i> Favourites</h3>
                    <div class="input-group-addon col-md-2">Music <span style="color:red">*</span> </div>
                    &nbsp;&nbsp;
                    <div class="input-group col-md-10" id="music">
                        <select class="form-control" name="music">
                            <option value=""></option>
                            <option value="Film Songs"> Film Songs </option>
                            <option value="Indian classical music"> Indian classical music </option>
                            <option value="Western music"> Western music </option>
                        </select>
                    </div>
                    <br><br>
                    <div class="input-group-addon col-md-2">Sports <span style="color:red">*</span> </div>
                    &nbsp;&nbsp;
                    <div class="input-group col-md-10" id="sports">
                        <select class="form-control" name="sports">
                            <option value=""></option>
                            <option value="Badminton">Badminton</option>
                            <option value="Carrom">Carrom</option>
                            <option value="Chess">Chess</option>
                            <option value="Cricket">Cricket</option>
                            <option value="Co Co">Co Co</option>
                        </select>
                    </div>
                    <br><br>
                    <div class="input-group-addon col-md-2">Food <span style="color:red">*</span> </div>
                    &nbsp;&nbsp;
                    <div class="input-group col-md-10" id="food">
                        <select class="form-control" name="food">
                            <option value=""></option>
                            <option value="Arabic">Arabic</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Chines">Chines</option>
                            <option value="Continental">Continental</option>
                            <option value="Indian">Indian</option>
                        </select>
                    </div>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-pencil"></i> About me</h3>
                    <textarea type="text" class="form-control" name="about" id="about" style="width:100%" rows="5"></textarea>
                </div>
                <button type="submit" value="register" name="register" class="btn btn-lg btn-primary btn-block ripplelink">COMPLETE REGISTRATION</button>
            </form>
        </div>
        <div class="clearfix">&nbsp;</div>
    </div>
</section>
<?php require 'footer.php'; ?> 
<?php require 'popup.php'; ?>


<!-- Bootstrap core JavaScript  ================================================== -->
<script type="text/javascript">
	// $.validator.addMethod("combo_checker", function(value, element, arg){
 //  return arg !== value;
 // }, "Choose any one one on the list");

	$('#complete_profile').validate({
        rules:{
        	register_email:{
        		required:true,
        	},
			height:{
				required:true,	
			},
			weight:{
				required:true,
			},
			body_type:{
				required:true,
			},
			complexion:{
				required:true,
			},
			physical_status:{
				required:true,
			},
			country:{
				required:true,
			},
			state:{
				required:true,
			},
			city:{
				required:true,
			},
			citizenship:{
				required:true,
			},
			division:{
				required:true,
			},
			marry_from_other:{
				required:true,
			},
			reg_values:{
				required:true,
			},
			education:{
				required:true,
			},
			languages_known:{
				required:true,
				// SelectName: { combo_checker: "default" }
			},
			employed_in:{
				required:true,
			},
			occupation:{
				required:true,
			},
			annual_income:{
				required:true,
			},
			pr_contact_num:{
				required:true,
			},
			family_value:{
				required:true,
			},
			family_type:{
				required:true,
			},
			family_status:{
				required:true,
			},
			ethnicity:{
				required:true,
			},
			fr_occupation:{
				required:true,
			},
			mr_occupation:{
				required:true,
			},
			no_brothers:{
				required:true,
			},
			no_sisters:{
				required:true,
			},
			eating_habits:{
				required:true,
			},
			drinking_habits:{
				required:true,
			},
			interests:{
				required:false,
			},
			hobbies:{
				required:false,
			},
			music:{
				required:false,
			},
			sports:{
				required:false,
			},
			food:{
				required:true,
			},
			about:{
				required:true,
			},
        },
        messages:{
        	register_email:{
        		required:"Please enter email id",
        	},
			height:{
				required:"Please choose height",	
			},
			weight:{
				required:"Please choose weight",
			},
			body_type:{
				required:"Please choose body type",
			},
			complexion:{
				required:"Please choose complexion",
			},
			physical_status:{
				required:"Please choose physical status",
			},
			country:{
				required:"Please enter country",
			},
			state:{
				required:"Please choose state",
			},
			city:{
				required:"Please choose city",
			},
			citizenship:{
				required:"Please choose citizenship",
			},
			division:{
				required:"Please choose division",
			},
			marry_from_other:{
				required:"Please choose one",
			},
			reg_values:{
				required:"Please choose religious values",
			},
			education:{
				required:"Please choose education",
			},
			languages_known:{
				required:"Please choose languages",
				// SelectName: { combo_checker: "Please select an item!" }
			},
			employed_in:{
				required:"Please choose one",
			},
			occupation:{
				required:"Please enter occupation",
			},
			annual_income:{
				required:"Please choose annual income",
			},
			pr_contact_num:{
				required:"Please enter parent contact number",
			},
			family_value:{
				required:"Please choose family value",
			},
			family_type:{
				required:"Please choose family type",
			},
			family_status:{
				required:"Please choose family status",
			},
			ethnicity:{
				required:"Please choose enthnicity",
			},
			fr_occupation:{
				required:"Please enter father occupation",
			},
			mr_occupation:{
				required:"Please enter mother occupation",
			},
			no_brothers:{
				required:"Please choose no of brothers",
			},
			no_sisters:{
				required:"Please choose no of sisters",
			},
			eating_habits:{
				required:"Please choose eating habits",
			},
			drinking_habits:{
				required:"Please choose drinking habits",
			},
			food:{
				required:"Please choose food habits",
			},
			about:{
				required:"Please write something about you",
			},
        },
        submitHandler: function(form) 
        {
        	// prevenDefault();
        	var data = $('#complete_profile').serialize();
            $.ajax({
                url: "<?php echo URL?>server/server.php",
                data: {form_data:data,action:"complete_profile"},
                type:'POST',
                datatype:'json',
                success : function(response)
                {
                	alert(1)
                    // var response =JSON.parse(response);
                    // if(response['status']=='success' || response['msg'] == 'open_otp_model')
                    // {
                    //     $('#hdn_mobile').val(response['pro_mobile']);
                    //     $('#otp_check_model').modal('show');
                    // }
                    // else
                    // {
                    //     if(response['msg'] == 'open_profile')
                    //     {
                    //         window.location = '<?php echo URL ?>profile_details.php';
                    //     }
                    //     else
                    //     {
                    //         $('#err_msg_otp').addClass('lv-alert alert-danger');
                    //         $('#err_msg_otp').text(response['msg']);
                    //     }
                    // }
                }
            })
        }
    });
    $('#languages_known').multiSelect();
    $('#hobbies').multiSelect();
    $('#interests').multiSelect();
    $('#food').multiSelect();
    $('#sports').multiSelect();
    $('#music').multiSelect();
       $(document).ready(function () {
           NewAccount.Screen.Self.init()        
           Account.Screen.ReligionCaste.init()
    
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