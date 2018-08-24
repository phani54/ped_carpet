<?php include "inner_header.php"; 


if(isset($_SESSION['id']))
{
    $user_info = $db->query("SELECT *FROM profiles WHERE id=".$_SESSION["id"])->fetch();
}
else
{
    echo '<script>window.location.replace("register.php");</script>';
}

?>	
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
        	<div class="row" id="err_msg_step_2"></div>
            <form id="complete_profile" action="#" method="post" autocomplete="off" autofocus="off">
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-file-text"></i> Personal Information</h3>
                    <div class="input-group">
                        <div class="input-group-addon">E-mail <span style="color:red">*</span></div>
                        <input type="email" class="form-control" id="register_email" value="<?=$user_info['email'];?>" name="register_email">
                    </div>
                    <div class="input-group" id="height">
                        <div class="input-group-addon">Height <span style="color:red">*</span> </div>
                        <select class="form-control" name="height">
                            <option value="">-- Feet/Inches --</option>
                            <?php $get_heights =  $db->query("SELECT * FROM person_heights"); 
                                while($row = $get_heights->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['height'] == $row['name']){ echo 'selected';} ?>><?=$row['name'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group" id="weight">
                        <div class="input-group-addon">Weight <span style="color:red">*</span> </div>
                        <select class="form-control" name="weight">
                            <option value="">-- Weight in Kgs --</option>
                            <?php $get_weights =  $db->query("SELECT * FROM person_weights"); 
                                while($row = $get_weights->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['weight'] == $row['name']){ echo 'selected';} ?>><?=$row['name'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Body Type<span style="color:red">*</span></div>
                        <?php 
                            $get_body_types =  $db->query("SELECT * FROM body_types"); 
                            while($row = $get_body_types->fetch()) { ?>
                        <label  style="padding-left:30px;">
                        <input type="radio" name="body_type" value="<?=$row['name'];?>" <?php if($user_info['body_type'] == $row['name']) { echo 'checked';} ?> > <?=$row['name'];?>
                        </label>&nbsp;&nbsp;
                        <?php } ?>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Complexion<span style="color:red">*</span></div>
                        <?php 
                            $get_complexions =  $db->query("SELECT * FROM complexions"); 
                            while($row = $get_complexions->fetch()) { ?>
                            <label  style="padding-left:30px;">
                            <input type="radio" name="complexion" value="<?=$row['name'];?>" <?php if($user_info['complexion'] == $row['name']) { echo 'checked';} ?> > <?=$row['name'];?>
                            </label>&nbsp;&nbsp;
                        <?php } ?>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Physical Status <span style="color:red">*</span></div>
                        <label  style="padding-left:30px;">
                        <input type="radio" checked="" name="physical_status" value="Normal" <?php if($user_info['physical_status'] == 'Normal') { echo 'checked';} ?>> Normal
                        </label>&nbsp;&nbsp;
                        <label>
                        <input type="radio" name="physical_status" <?php if($user_info['physical_status'] == 'Physically Challenged') { echo 'checked';} ?> value="Physically Challenged">Physically Challenged
                        </label>
                    </div>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-map-marker"></i> Location Information</h3>
                    <div class="input-group">
                        <div class="input-group-addon">Country Living In <span style="color:red">*</span></div>
                        <select class="form-control" name="country" id="country">
                            <option value="">-- Select --</option>
                            <?php 
                            $country_id = 0;
                            $get_countries =  $db->query("SELECT * FROM countries"); 
                                while($row = $get_countries->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['country'] == $row['name']){ $country_id=$row['id'];echo 'selected';} ?>><?=$row['name'];?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="input-group" >
                        <div class="input-group-addon">Residing State  <span style="color:red">*</span> </div>
                        <select class="form-control" name="state" id="state">
                            <option value="">-- Select --</option>
                            <?php 
                            $state_id = 0;
                            $get_states =  $db->query("SELECT * FROM states WHERE country_id=".$country_id); 
                            while($row = $get_states->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['state'] == $row['name']){echo 'selected';$state_id=$row['id'];} ?> ><?=$row['name'];?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="input-group" >
                        <div class="input-group-addon">Residing City  <span style="color:red">*</span> </div>
                        <select class="form-control " name="city" id="city">
                            <option value="">-- Select --</option>
                            <?php 
                            $get_cities =  $db->query("SELECT * FROM cities WHERE state_id=$state_id"); 
                            while($row = $get_cities->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['city'] == $row['name']){ echo 'selected';} ?>><?=$row['name'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group" >
                        <div class="input-group-addon">Citizenship <span style="color:red">*</span> </div>
                        <select class="form-control " name="citizenship" id="citizenship">
                            <option value="">-- Select --</option>
                            <?php $get_citizenships =  $db->query("SELECT * FROM citizenships"); 
                            while($row = $get_citizenships->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['citizenship'] == $row['name']){ echo 'selected';} ?>><?=$row['name'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-gear"></i> Religious Information</h3>
                    <div class="input-group">
                        <div class="input-group-addon">Division  <span style="color:red">*</span></div>
                        <input type="text" class="form-control" id="division" value="<?=$user_info['division'];?>" name="division">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Willing to marry from <span style="color:red">*</span></div>
                        <label  style="padding-left:30px;"><input type="radio" name="marry_from_other" value="0" <?php if($user_info['willing_to_marry_other'] == 0){?> checked="" <?php } ?>> Same Division</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="marry_from_other" value="1" <?php if($user_info['willing_to_marry_other'] == 1){?> checked="" <?php } ?> >Other Divisions Also</label>
                    </div>
                    <div class="input-group" id="reg_values">
                        <div class="input-group-addon">Religious Values <span style="color:red">*</span> </div>
                        <select class="form-control" name="reg_values">
                            <option value="">-- Select --</option>
                            <?php $get_religious_values =  $db->query("SELECT * FROM religious_values"); 
                            while($row = $get_religious_values->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['religious_values'] == $row['name']){ echo 'selected';} ?>><?=$row['name'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-graduation-cap"></i> Education & Profession</h3>
                    <div class="input-group">
                        <div class="input-group-addon">Highest Education   <span style="color:red">*</span></div>
                        <select class="form-control" name="education">
                            <option value="">-- Select --</option>
                            <?php $get_education =  $db->query("SELECT * FROM education"); 
                            while($row = $get_education->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['education'] == $row['name']){ echo 'selected';} ?>><?=$row['name'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="row">
	                    <div class="input-group-addon col-md-2">Languages known <span style="color:red">*</span> </div>
	                    &nbsp;&nbsp;
	                    <div class="col-xs-2">
	                        <select class="form-control" name="languages_known" size="8" multiple="multiple" id="languages_known">
	                            <?php $get_langueges =  $db->query("SELECT * FROM languages"); 
	                                while($row = $get_langueges->fetch()) { ?>
	                            <option value="<?=$row['name'];?>"><?=$row['name'];?></option>
	                            <?php } ?>
	                        </select>
	                    </div>
	                    <div class="col-md-1" style="width: 29px;margin-top: 70px;">
					  		<img src="<?php echo URL;?>assets/img/switch.png">
					  	</div>
					  	<div class="col-xs-2">
						    <select name="to" id="languages_known_to" class="form-control" size="8" multiple="multiple">
						    </select>
					  	</div>
	                </div>
	                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px">Double click on the values to select</label>
				  	<div class="col-xs-2"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px;color: red;display:none" id="languages_known_error">Please choose known languages</label>
                    <br><br>
                    <div class="input-group">
                        <div class="input-group-addon">Employed in <span style="color:red">*</span></div>
                        <label  style="padding-left:30px;"><input type="radio" checked="" name="employed_in" value="Government"> Government</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="employed_in" value="Defence" <?php if($user_info['employed_in'] == 'Defence') { echo 'checked';} ?> > Defence</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="employed_in" value="Private" <?php if($user_info['employed_in'] == 'Private') { echo 'checked';} ?>> Private</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="employed_in" value="Business" <?php if($user_info['employed_in'] == 'Business') { echo 'checked';} ?>> Business</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="employed_in" value="Self Employed" <?php if($user_info['employed_in'] == 'Self Employed') { echo 'checked';} ?>> Self Employed</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="Not Working" value="Not Working" <?php if($user_info['employed_in'] == 'Defence') { echo 'checked';} ?>> Not Working</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Occupation  <span style="color:red">*</span></div>
                        <input type="text" class="form-control" id="occupation" value="<?=$user_info['occupation'];?>" name="occupation">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Annual Income  <span style="color:red">*</span></div>
                        <select class="form-control" name="annual_income">
                            <option value="">--Select Income--</option>

                            <option value="1 - 2 Lakhs" <?php if($user_info['annual_income'] == '1 - 2 Lakhs') { echo 'selected';} ?> >1 - 2 Lakhs</option>
                            <option value="2 - 3 Lakhs" <?php if($user_info['annual_income'] == '2 - 3 Lakhs') { echo 'selected';} ?> >2 - 3 Lakhs</option>
                            <option value="3 - 4 Lakhs" <?php if($user_info['annual_income'] == '3 - 4 Lakhs') { echo 'selected';} ?> >3 - 4 Lakhs</option>
                            <option value="4 - 5 Lakhs" <?php if($user_info['annual_income'] == '4 - 5 Lakhs') { echo 'selected';} ?> >4 - 5 Lakhs</option>
                            <option value="5 - 6 Lakhs" <?php if($user_info['annual_income'] == '5 - 6 Lakhs') { echo 'selected';} ?> >5 - 6 Lakhs</option>
                            <option value="6 - 7 Lakhs" <?php if($user_info['annual_income'] == '6 - 7 Lakhs') { echo 'selected';} ?> >6 - 7 Lakhs</option>
                        </select>
                    </div>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-group"></i> Family Information</h3>
                    <div class="input-group">
                        <div class="input-group-addon">Parent's Contact No. <span style="color:red">*</span></div>
                        <input type="text" class="form-control" id="pr_contact_num" value="<?=$user_info['alt_number'];?>" name="pr_contact_num">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Family Value <span style="color:red">*</span></div>
                        <?php 
                            $get_family_values =  $db->query("SELECT * FROM family_values"); 
                            while($row = $get_family_values->fetch()) { ?>
                            <label  style="padding-left:30px;">
                            <input type="radio" name="family_value" value="<?=$row['name'];?>" <?php if($user_info['family_value'] == $row['name']) { echo 'checked';} ?> > <?=$row['name'];?>
                            </label>&nbsp;&nbsp;
                        <?php } ?>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Family Type <span style="color:red">*</span></div>
                        <label  style="padding-left:30px;"><input type="radio" name="family_type" value="Joint Family" <?php if($user_info['family_type'] == 'Joint Family') { echo 'checked';}?>> Joint Family</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="family_type" value="Nuclear Family" <?php if($user_info['family_type'] == 'Nuclear Family') { echo 'checked';}?>> Nuclear Family</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Family Status <span style="color:red">*</span></div>
                        <label  style="padding-left:30px;"><input type="radio" name="family_status" value="Middle Class" <?php if($user_info['family_status'] == 'Middle Class') { echo 'checked';}?> > Middle Class</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="family_status" value="Upper Middle Class" <?php if($user_info['family_status'] == 'Upper Middle Class') { echo 'checked';}?> > Upper Middle Class</label>
                        &nbsp;&nbsp;
                        <label><input type="radio" name="family_status" value="Rich / Affluent" <?php if($user_info['family_status'] == ' Rich / Affluent') { echo 'checked';}?> >  Rich / Affluent</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Ethnicity   <span style="color:red">*</span></div>
                        <select class="form-control" name="ethnicity">
                            <option value="">-- Select --</option>
                            <?php $get_ethnicities =  $db->query("SELECT * FROM ethnicities"); 
                                    while($row = $get_ethnicities->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['ethnicity'] == $row['name']) { echo 'selected';}?> ><?=$row['name'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Father's Occupation <span style="color:red">*</span></div>
                        <input type="text" class="form-control" id="fr_occupation" value="<?=$user_info['father_occupation'];?>" name="fr_occupation">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Mother's Occupation <span style="color:red">*</span></div>
                        <input type="text" class="form-control" id="mr_occupation" value="<?=$user_info['mother_occupation'];?>" name="mr_occupation">
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">No.of Brothers <span style="color:red">*</span></div>
                        <select class="form-control" name="no_brothers">
                            <option value="">-- No.of Brothers --</option>
                            <?php for($i=0;$i<=5;$i++) { ?>
                            <option value="<?=$i;?>" <?php if($user_info['no_of_brothers'] == $i) { echo 'selected';}?> ><?=$i;?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">No.of Sisters   <span style="color:red">*</span></div>
                        <select class="form-control " name="no_sisters">
                            <option value="">-- No.of Sisters --</option>
                            <?php for($i=0;$i<=5;$i++) { ?>
                            <option value="<?=$i;?>" <?php if($user_info['no_of_sisters'] == $i) { echo 'selected';}?> ><?=$i;?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-gear"></i> Life Style</h3>
                    <div class="input-group">
                        <div class="input-group-addon">Eating Habits   <span style="color:red">*</span></div>
                        <?php $get_eating_habits =  $db->query("SELECT * FROM eating_habits"); 
                            while($row = $get_eating_habits->fetch()) { ?>
                            <label  style="padding-left:30px;">
                            <input type="radio" name="eating_habits" value="<?=$row['name'];?>" <?php if($user_info['eating_habits'] == $row['name']) { echo 'checked';} ?> > <?=$row['name'];?>
                            </label>&nbsp;&nbsp;
                        <?php } ?>
                    </div>
                    <div class="input-group">
                        <div class="input-group-addon">Drinking Habits   <span style="color:red">*</span></div>
                        <?php $get_eating_habits =  $db->query("SELECT * FROM drinking_habits"); 
                            while($row = $get_eating_habits->fetch()) { ?>
                            <label  style="padding-left:30px;">
                            <input type="radio" name="drinking_habits" value="<?=$row['name'];?>" <?php if($user_info['drinking_habits'] == $row['name']) { echo 'checked';} ?> > <?=$row['name'];?>
                            </label>&nbsp;&nbsp;
                        <?php } ?>
                    </div>
                    <div class="row">
	                    <div class="input-group-addon col-md-2">Interests <span style="color:red">*</span> </div>
	                    &nbsp;&nbsp;
	                    <div class="col-xs-2">
	                        <select class="form-control" name="interests" size="8" multiple="multiple" id="interests">
                                <?php $get_interests =  $db->query("SELECT * FROM interests"); 
                                    while($row = $get_interests->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['interests'] == $row['name']) { echo 'selected';}?> ><?=$row['name'];?></option>
                            <?php } ?>
	                        </select>
	                    </div>
	                    <div class="col-md-1" style="width: 29px;margin-top: 70px;">
					  		<img src="<?php echo URL;?>assets/img/switch.png">
					  	</div>
					  	<div class="col-xs-2">
						    <select name="to" id="interests_to" class="form-control" size="8" multiple="multiple">
						    </select>
					  	</div>
	                </div>
	                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px">Double click on the values to select</label>
				  	<div class="col-xs-2"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px;color: red;display:none" id="interests_error">Please choose interests</label>
                    <br><br>
                    <div class="row">
	                    <div class="input-group-addon col-md-2">Hobbies <span style="color:red">*</span> </div>
	                    &nbsp;&nbsp;
	                    <div class="col-xs-2">
	                        <select class="form-control" name="hobbies" size="8" multiple="multiple" id="hobbies">
                                <?php $get_hobbies =  $db->query("SELECT * FROM hobbies"); 
                                    while($row = $get_hobbies->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['hobbies'] == $row['name']) { echo 'selected';}?> ><?=$row['name'];?></option>
                            <?php } ?>
	                        </select>
	                    </div>
	                    <div class="col-md-1" style="width: 29px;margin-top: 70px;">
					  		<img src="<?php echo URL;?>assets/img/switch.png">
					  	</div>
					  	<div class="col-xs-2">
						    <select name="to" id="hobbies_to" class="form-control" size="8" multiple="multiple">
						    </select>
					  	</div>
	                </div>
	                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px">Double click on the values to select</label>
				  	<div class="col-xs-2"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px;color: red;display:none" id="hobbies_error">Please choose hobbies</label>
                    <br><br>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-gear"></i> Favourites</h3>
                    <div class="row">
                    <div class="input-group-addon col-md-2">Music <span style="color:red">*</span> </div>
                    &nbsp;&nbsp;
                    
	                    <div class="col-xs-2">
	                        <select id="music" class="form-control" size="8" multiple="multiple" name="music">
                                <?php $get_music =  $db->query("SELECT * FROM music"); 
                                    while($row = $get_music->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['music'] == $row['name']) { echo 'selected';}?> ><?=$row['name'];?></option>
                            <?php } ?>
	                        </select>
	                    </div>
	                    <div class="col-md-1" style="width: 29px;margin-top: 70px;">
					  		<img src="<?php echo URL;?>assets/img/switch.png">
					  	</div>
					  	<div class="col-xs-2">
						    <select name="to" id="music_to" class="form-control" size="8" multiple="multiple">
						    </select>
					  	</div>
                	</div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px">Double click on the values to select</label>
				  	<div class="col-xs-2"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px;color: red;display:none" id="music_error">Please choose music</label>
                    <br><br>
                    <div class="row">
	                    <div class="input-group-addon col-md-2">Sports <span style="color:red">*</span> </div>
	                    &nbsp;&nbsp;
	                    <div class="col-xs-2">
	                        <select name="sports" id="sports" class="form-control" size="8" multiple="multiple">
                                <?php $get_music =  $db->query("SELECT * FROM sports"); 
                                    while($row = $get_music->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['sports'] == $row['name']) { echo 'selected';}?> ><?=$row['name'];?></option>
                            <?php } ?>
	                        </select>
	                    </div>
	                    <div class="col-md-1" style="width: 29px;margin-top: 70px;">
					  		<img src="<?php echo URL;?>assets/img/switch.png">
					  	</div>
					  	<div class="col-xs-2">
						    <select name="to" id="sports_to" class="form-control" size="8" multiple="multiple">
						    </select>
					  	</div>
                	</div>
                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px">Double click on the values to select</label>
				  	<div class="col-xs-2"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px;color: red;display:none" id="sports_error">Please choose sports</label>
                    <br><br>
                    <div class="row">
	                    <div class="input-group-addon col-md-2">Food <span style="color:red">*</span> </div>
	                    &nbsp;&nbsp;
	                    <div class="col-xs-2">
						    <select name="food" id="food" class="form-control" size="8" multiple="multiple">
                                <?php $get_food =  $db->query("SELECT * FROM food"); 
                                    while($row = $get_food->fetch()) { ?>
                            <option value="<?=$row['name'];?>" <?php if($user_info['food'] == $row['name']) { echo 'selected';}?> ><?=$row['name'];?></option>
                            <?php } ?>
						    </select>
					  	</div>
					  	<div class="col-md-1" style="width: 29px;margin-top: 70px;">
					  		<img src="<?php echo URL;?>assets/img/switch.png">
					  	</div>
					  	<div class="col-xs-2">
						    <select name="to" id="food_to" class="form-control" size="8" multiple="multiple">
						    </select>
					  	</div>
				  	</div>
				  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px">Double click on the values to select</label>
				  	<div class="col-xs-2"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<label style="font-size: 10px;color: red;display:none" id="food_error">Please choose food</label>
                </div>
                <div class="box well" style="padding:15px 15px 30px 15px; border-radius: 5px;">
                    <h3 style="color: #ed3237;"><i class="fa fa-pencil"></i> About me</h3>
                    <textarea type="text" class="form-control" name="about" id="about" style="width:100%" rows="5"><?=$user_info['about'];?></textarea>
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
    
    if('<?php echo $user_info['languages_known']?>' !='')
    {
        var values='<?php echo $user_info['languages_known']?>';
        $.each(values.split(","), function(i,e){
            $("#languages_known option[value='"+e.trim()+"']").remove();
            $("#languages_known_to").append('<option value="'+e.trim()+'">'+e.trim()+'</option>')
        });
    }
    if('<?php echo $user_info['interests']?>' !='')
    {
        var values='<?php echo $user_info['interests']?>';
        $.each(values.split(","), function(i,e){
            $("#interests option[value='"+e.trim()+"']").remove();
            $("#interests_to").append('<option value="'+e.trim()+'">'+e.trim()+'</option>')
        });
    }
    if('<?php echo $user_info['hobbies']?>' !='')
    {
        var values='<?php echo $user_info['hobbies']?>';
        $.each(values.split(","), function(i,e){
            $("#hobbies option[value='"+e.trim()+"']").remove();
            $("#hobbies_to").append('<option value="'+e.trim()+'">'+e.trim()+'</option>')
        });
    }
    if('<?php echo $user_info['music']?>' !='')
    {
        var values='<?php echo $user_info['music']?>';
        $.each(values.split(","), function(i,e){
            $("#music option[value='"+e.trim()+"']").remove();
            $("#music_to").append('<option value="'+e.trim()+'">'+e.trim()+'</option>')
        });
    }
    if('<?php echo $user_info['sports']?>' !='')
    {
        var values='<?php echo $user_info['sports']?>';
        $.each(values.split(","), function(i,e){
            $("#sports option[value='"+e.trim()+"']").remove();
            $("#sports_to").append('<option value="'+e.trim()+'">'+e.trim()+'</option>')
        });
    }
    if('<?php echo $user_info['food']?>' !='')
    {
        var values='<?php echo $user_info['food']?>';
        $.each(values.split(","), function(i,e){
            $("#food option[value='"+e.trim()+"']").remove();
            $("#food_to").append('<option value="'+e.trim()+'">'+e.trim()+'</option>')
        });
    }
    $("#state").on('change',function(){
        $.ajax({
                url: "<?php echo URL?>server/server.php",
                data:{state:$("#state").val(),action:"get_cities"},
                type:'POST',
                datatype:'json',
                success : function(response)
                {
                    var response =JSON.parse(response);
                    // window.test = response;
                    if(response['status']=='success')
                    {
                        data = response["data"];
                        $('#city').find('option').remove();
                        for(var i=0;i<=response['data'].length;i++)
                        {
                            // window.test = response["data"]
                            $('#city').append('<option value="'+data[i]['name']+'">'+data[i]['name']+'</option>');
                            // break;
                        }
                    }
                }
            })
    })

	$('#languages_known').multiselect();
    $('#hobbies').multiselect();
    $('#interests').multiselect();
    $('#food').multiselect();
    $('#sports').multiselect();
    $('#music').multiselect();

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
			about:{
				required:"Please write something about you",
			},
        },
        submitHandler: function(form) 
        {
        	var languages_known = [];
			var interests = [];
			var hobbies = [];
			var music = [];
			var sports = [];
			var food = [];
			$("#languages_known_to option").each(function()
			{
			    languages_known.push($(this).val());
			});
			$("#interests_to option").each(function()
			{
			    interests.push($(this).val());
			});
			$("#hobbies_to option").each(function()
			{
			    hobbies.push($(this).val());
			});
			$("#music_to option").each(function()
			{
			    music.push($(this).val());
			});
			$("#sports_to option").each(function()
			{
			    sports.push($(this).val());
			});
			$("#food_to option").each(function()
			{
			    food.push($(this).val());
			});
			if(languages_known.length > 0)
			{
				$('#languages_known_error').hide();
			}
			else
			{
				$('#languages_known_error').show();
				$('#languages_known')[0].focus();
                return false;
			}
			if(interests.length > 0)
			{
				$('#interests_error').hide();
			}
			else
			{
				$('#interests_error').show();
				$('#interests')[0].focus();
                return false;
			}
			if(hobbies.length > 0)
			{
				$('#hobbies_error').hide();
			}
			else
			{
				$('#hobbies_error').show();
				$('#hobbies')[0].focus();
                return false;
			}
			if(music.length > 0)
			{
				$('#music_error').hide();
			}
			else
			{
				$('#music_error').show();
				$('#music')[0].focus();
                return false;
			}
			if(sports.length > 0)
			{
				$('#sports_error').hide();
			}
			else
			{
				$('#sports_error').show();
				$('#sports')[0].focus();
                return false;
			}
			if(food.length > 0)
			{
				$('#food_error').hide();
			}
			else
			{
				$('#food_error').show();
				$('#food')[0].focus();
                return false;
			}
			
        	var data = $('#complete_profile').serialize();
            $.ajax({
                url: "<?php echo URL?>server/server.php",
                data:{form_data:data,action:"complete_profile",languages_known:languages_known,interests:interests,hobbies:hobbies,music:music,sports:sports,food:food},
                type:'POST',
                datatype:'json',
                success : function(response)
                {
                	var response =JSON.parse(response);
                    if(response['status']=='success')
                    {
                        window.location = '<?php echo URL_VIEW ?>image_uploads.php';
                    }
                    else
                    {
                        $('#err_msg_step_2').addClass('lv-alert alert-danger');
                        $('#err_msg_step_2').text(response['msg']);
                        window.parent.scrollTo(0,0);
                    }
                }
            })
        }
    });
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