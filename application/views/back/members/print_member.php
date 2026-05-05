<!DOCTYPE html>
<html>
	<head>
		<style>

			body { font: 14px; font-family: Arial, Helvetica, sans-serif;border: 1px solid black; margin-bottom: 40px; }
			.page-body { width: 725px; margin: 0 auto;}
			.page-container { width: 700px; margin: 0 auto; }
			.table { border-collapse: collapse; width: 100%;}
			.table td, .table th { border: 1px solid black; padding: 5px; }
			.content { text-align: center; font-size: 23px; font-family: 'Amaranth'; clear:both; margin-top: 25px;margin-bottom: 8px;
			}			

			.ha{ font-size: 15px; font-weight: 500; width: 45%; }
			.da{ font-size: 13px; font-weight: 400; width:55%; }	
			.tra{ width:100%; line-height: 22px; }

			#watermark { position: fixed; bottom: 250px; right: 200px; width: 250px; height: 300px; opacity: .1; font-size:60px; text-align:center; transform: rotate(-40deg);}

			#footer { bottom: 0; position: fixed; }	
			.footer-data {text-align: center; margin-top: -35px; font-family: 'Amaranth'; }
			.footer-data1 {	line-height: 20px; font-size: 16px;	font-weight: 400; }

			.header_ali{ font-size: 19px;font-weight: 400; text-align: center; font-family: 'Amaranth'; line-height: 5px;}
      .header_ali1{ font-size: 18px;font-weight: 400; text-align: center; font-family: 'Amaranth';line-height: 5px;}

			.header{ font-family: 'Amaranth'; text-align: center; font-size: 24px;font-weight: 500; margin-top: -5px;}
		
			.profile_img{ width:125px; height:125px; border: 1px solid gray;}
			
		</style>
	</head>
<body>
	<div id="watermark"><p>EDIGAMATCHMAKER</p></div>

	<div id="footer">
		<p class="footer-data">
		  <span style="font-size: 20px;font-weight: 500;">Siddhrans Infotech Pvt Ltd</span><br>		  
		  <span class="footer-data1">#765,2nd Floor, 14th cross Ground(Landmark,   60 Feet Rd, opp. MEI Layout, Bagalakunte, Bengaluru, Karnataka-560073.  <b>Phone:</b> 6364128081, 9902406387</span>
	  </p>	  
	</div>

	<?php 

		$member = array();

		if ($member_type == "Free") {
			$member = $get_free_member_by_id;
		}
		elseif ($member_type == "Premium") {		
			$member = $get_premium_member_by_id;	
		}

		foreach ($member as $value) {
			$image = json_decode($value->profile_image, true);
			$education_and_career = json_decode($value->education_and_career, true);
			$basic_info = json_decode($value->basic_info, true);
			$present_address = json_decode($value->present_address, true);		
			$physical_attributes = json_decode($value->physical_attributes, true);
			$language = json_decode($value->language, true);
			$hobbies_and_interest = json_decode($value->hobbies_and_interest, true);
			$personal_attitude_and_behavior = json_decode($value->personal_attitude_and_behavior, true);
			$residency_information = json_decode($value->residency_information, true);
			$spiritual_and_social_background = json_decode($value->spiritual_and_social_background, true);
			$life_style = json_decode($value->life_style, true);
			$astronomic_information = json_decode($value->astronomic_information, true);
			$permanent_address = json_decode($value->permanent_address, true);
			$family_info = json_decode($value->family_info, true);
			$additional_personal_details = json_decode($value->additional_personal_details, true);
			$partner_expectation = json_decode($value->partner_expectation, true);	
		}
	?>


  <div class="page-body">
    <div class="page-container">

      <table style="width:100%">
        <tr> 
          <td width="18%"> 
            <p>
              <img src="<?=base_url()?>uploads/header_logo/header_logo_1599228561.jpeg">
            </p>
          </td>

          <td width="30%"> 
        		<p class="header">EDIGA MATCHMAKER</p>
          	<p class="header_ali"><?php echo ucfirst($value->first_name." ") ?><?php echo ucfirst($value->last_name) ?></p>
            <p class="header_ali1">Member ID - <?=$value->member_profile_id?></p>
          	<p class="header_ali"><?php echo ucfirst($education_and_career[0]['occupation']) ?></p>
          	<p class="header_ali">
          	    <?php if (!empty($present_address[0]['city'])) { ?>

                <?php $pre = $this->Crud_model->get_type_name_by_id('city', $present_address[0]['city']);
                echo $pre; ?>
              <?php } else if(!empty($permanent_address[0]['permanent_city'])) { ?>
                  <?php $per =$this->Crud_model->get_type_name_by_id('city', $permanent_address[0]['permanent_city']);
                  echo $per;
                  ?>
              <?php } ?>


              <?php if (!empty($present_address[0]['state'])) { ?>
                <?php $pre_state = $this->Crud_model->get_type_name_by_id('state', $present_address[0]['state']);
                print_r($pre_state) ; ?>

              <?php } else if(!empty($permanent_address[0]['permanent_state'])) { ?>
                  <?php $pre_state =$this->Crud_model->get_type_name_by_id('permanent_state', $permanent_address[0]['permanent_state']);
                  print_r($pre_state);
                  ?>
              <?php } ?>

              <?php if (!empty($present_address[0]['country'])) { ?>
                <?php $pre_country = $this->Crud_model->get_type_name_by_id('country', $present_address[0]['country']);
                echo $pre_country; ?>

              <?php } else if(!empty($permanent_address[0]['permanent_country'])) { ?>
                  <?php $pre_country =$this->Crud_model->get_type_name_by_id('permanent_country', $permanent_address[0]['permanent_country']);
                  echo $pre_country;
                  ?>
              <?php } ?>
          	</p>
            
            
            <p class="header_ali">DOB: <?=date('d/m/Y', $value->date_of_birth)?> Age: <?php
                      $bday = new DateTime(date('d.m.Y', $value->date_of_birth));
                      $today = new Datetime(date('d.m.Y'));
                      $diff = $today->diff($bday);
                      printf($diff->y);
                    ?>

            </p>          	
          </td> 
          <td width="5%"></td> 
          <td width="15%">
            <p>
              <img src="<?=base_url()?>uploads/profile_image/<?=$image[0]['thumb']?>" class="profile_img">
            </p>
          </td>

        </tr>
      </table>


      <div class="content" style="margin-top: 1px !important;">
        <strong>Introduction</strong>
      </div>

      <table class="table">
        <tbody>
          <tr class="tra">                     	                     
              <td class="da" style="width:100%; height: 10%;"><?php echo ucfirst($value->introduction) ?></td>
          </tr>                    
        </tbody>
      </table>


	    <div class="content">
	      <strong>Basic Information</strong>
	    </div>

      <table class="table">
        <tbody>
          <tr class="tra">
              <td class="ha">First Name</td>
              <td class="da"><?php echo ucfirst($value->first_name) ?></td>

              <td class="ha">Last Name</td>
              <td class="da"><?php echo ucfirst($value->last_name) ?></td>
          </tr>  

          <tr class="tra">
            <td class="ha">Gender</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('gender', $value->gender)) ?></td>

                <!-- <td class="ha">Email</td> -->
             		<!-- <td class="da"><?=$value->email?> -->
								<?php if($member_email_verification = $this->db->get_where('general_settings', array('type' => 'member_email_verification'))->row()->value == "on"){ ?>
									<br>
									<?php if ($value->email_verification_status == 1)
										{
											// echo "<span class='badge badge-success' >".translate('email_verified')."</span>";
										}
										elseif ($value->is_closed == "no") {
											// echo "<span class='badge badge-danger' >".translate('email_not_verified')."</span>";
										}
									?>
								<?php } ?>
						<!-- </td>  -->
						<td class="ha">Age</td>
			      <td class="da"><?php
								$bday = new DateTime(date('d.m.Y', $value->date_of_birth));
								$today = new Datetime(date('d.m.Y'));
								$diff = $today->diff($bday);
								printf($diff->y);
						?></td>					
          </tr>

          <tr class="tra">
            <td class="ha">Marital Status</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('marital_status', $basic_info[0]['marital_status'])) ?></td>

            <td class="ha">Number Of Children</td>
            <td class="da"><?=$basic_info[0]['number_of_children']?></td>
          </tr>

          <tr class="tra">  
            <td class="ha">Area</td>
            <td class="da"><?php echo ucfirst($basic_info[0]['area']) ?></td>

            <td class="ha">Onbehalf</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('on_behalf', $basic_info[0]['on_behalf'])) ?></td>
          </tr>

          <tr class="tra"> 
            <td class="ha">Date Of Birth</td>
            <td class="da"><?=date('d/m/Y', $value->date_of_birth)?></td>

            <td colspan="2"></td>
          </tr> 

        </tbody>
      </table>


      <?php
      	if ($this->db->get_where('frontend_settings', array('type' => 'present_address'))->row()->value == "yes") {
      ?>
      <div class="content" style="margin-top: -5px !important;">
	      <strong>Present Address</strong>
	    </div>

      <table class="table">
          <tbody>
              <tr class="tra">
                  <td class="ha">Country</td>
                  <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('country', $present_address[0]['country'])) ?></td>

                  <td class="ha">State</td>
                  <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('state', $present_address[0]['state'])) ?></td>
              </tr>                    

              <tr class="tra">
                  <td class="ha">City</td>
                  <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('city', $present_address[0]['city'])) ?></td>

                  <td class="ha">Postal Code</td>
                  <td class="da"><?=$present_address[0]['postal_code']?></td>
              </tr>              
          </tbody>
      </table>
    	<?php } ?>

    	
    	<?php
    		if($this->db->get_where('frontend_settings', array('type' => 'education_and_career'))->row()->value == "yes") {
      ?>
    	<div class="content">
        <strong>Education & Career</strong>
      </div>

      <table class="table">
        <tbody>
          <tr class="tra">
              <td class="ha">Highest Education</td>
              <td class="da"><?php echo ucfirst($education_and_career[0]['highest_education']) ?></td>

              <td class="ha">Occupation</td>
              <td class="da"><?php echo ucfirst($education_and_career[0]['occupation']) ?></td>
          </tr>                    

          <tr class="tra">
              <td class="ha">Annual Income</td>
              <td class="da"><?php echo ucfirst($education_and_career[0]['annual_income']) ?></td>

              <td colspan="2"></td>
              
          </tr>            
        </tbody>
      </table>
    	<?php } ?>

        

      <?php
        if($this->db->get_where('frontend_settings', array('type' => 'physical_attributes'))->row()->value == "yes") {
      ?>
      <div style="page-break-before: always;"></div>
        
    	<div class="content">
        <strong style="line-height: 50px;">Physical Attributes</strong>
      </div>

      <table class="table">
        <tbody>
          <tr class="tra">
              <td class="ha">Height</td>
              <td class="da"><?=$value->height.' '.translate('feet')?></td>

              <td class="ha">Weight</td>
              <td class="da"><?=$physical_attributes[0]['weight']?></td>
          </tr>                    

          <tr class="tra">
              <td class="ha">Eye Color</td>
              <td class="da"><?php echo ucfirst($physical_attributes[0]['eye_color']) ?></td>

              <td class="ha">Hair Color</td>
              <td class="da"><?php echo ucfirst($physical_attributes[0]['hair_color']) ?></td> 
          </tr>

          <tr class="tra">
              <td class="ha">Complexion</td>
              <td class="da"><?php echo ucfirst($physical_attributes[0]['complexion']) ?></td>

              <td class="ha">Blood Group</td>
              <td class="da"><?php echo ucfirst($physical_attributes[0]['blood_group']) ?></td> 
          </tr>

          <tr class="tra">
              <td class="ha">Body Type</td>
              <td class="da"><?php echo ucfirst($physical_attributes[0]['body_type']) ?></td>

              <td class="ha">Body Art</td>
              <td class="da"><?php echo ucfirst($physical_attributes[0]['body_art']) ?></td> 
          </tr>

          <tr class="tra">
              <td class="ha">Any Disability</td>
              <td class="da"><?php echo ucfirst($physical_attributes[0]['any_disability']) ?></td>

              <td colspan="2"></td>                        
          </tr>
        </tbody>
      </table>
    	<?php } ?>


    	<?php
        if ($this->db->get_where('frontend_settings', array('type' => 'language'))->row()->value == "yes") {
    	?>
    	<div class="content">
        <strong>Language</strong>
      </div>

      <table class="table">
        <tbody>
          <tr class="tra">
              <td class="ha">Mother Tongue</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('language', $language[0]['mother_tongue'])) ?></td>

              <td class="ha">Language</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('language', $language[0]['language'])) ?></td>
          </tr>                    

          <tr class="tra">
              <td class="ha">Speak</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('language', $language[0]['speak'])) ?></td>

              <td class="ha">Read</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('language', $language[0]['read'])) ?></td>
          </tr>
        </tbody>
      </table>
      <?php } ?>



      <?php
        if($this->db->get_where('frontend_settings', array('type' => 'hobbies_and_interests'))->row()->value == "yes") {
      ?>
	  	<div class="content">
	      <strong>Hobbies & Interest</strong>
	    </div>

	    <table class="table">
        <tbody>
          <tr class="tra">
              <td class="ha">Hobby</td>
              <td class="da"><?php echo ucfirst($hobbies_and_interest[0]['hobby']) ?></td>

              <td class="ha">Interest</td>
              <td class="da"><?php echo ucfirst($hobbies_and_interest[0]['interest']) ?></td>
          </tr>                    

          <tr class="tra">
              <td class="ha">Music</td>
              <td class="da"><?php echo ucfirst($hobbies_and_interest[0]['music']) ?></td>

              <td class="ha">Books</td>
              <td class="da"><?php echo ucfirst($hobbies_and_interest[0]['books']) ?></td> 
          </tr>

          <tr class="tra">
              <td class="ha">Movie</td>
              <td class="da"><?php echo ucfirst($hobbies_and_interest[0]['movie']) ?></td>

              <td class="ha">TV Show</td>
              <td class="da"><?php echo ucfirst($hobbies_and_interest[0]['tv_show']) ?></td> 
          </tr>

          <tr class="tra">
              <td class="ha">Sports Show</td>
              <td class="da"><?php echo ucfirst($hobbies_and_interest[0]['sports_show']) ?></td>

              <td class="ha">Fitness Activity</td>
              <td class="da"><?php echo ucfirst($hobbies_and_interest[0]['fitness_activity']) ?></td> 
          </tr>

          <tr class="tra">
              <td class="ha">Food</td>
              <td class="da"><?php echo ucfirst($hobbies_and_interest[0]['cuisine']) ?></td>

              <td class="ha">Dress Style</td>
              <td class="da"><?php echo ucfirst($hobbies_and_interest[0]['dress_style']) ?></td>                        
          </tr>
        </tbody>
	    </table>
    	<?php } ?>


    	<?php
        if ($this->db->get_where('frontend_settings', array('type' => 'personal_attitude_and_behavior'))->row()->value == "yes") {
    	?>
    	<div class="content">
        <strong>Personal Attitude & Behavior</strong>
      </div>

      <table class="table">
        <tbody>
          <tr class="tra">
              <td class="ha">Affection</td>
              <td class="da"><?php echo ucfirst($personal_attitude_and_behavior[0]['affection']) ?></td>

              <td class="ha">Humor</td>
              <td class="da"><?php echo ucfirst($personal_attitude_and_behavior[0]['humor']) ?></td>
          </tr>                    

          <tr class="tra">
              <td class="ha">Political View</td>
              <td class="da"><?php echo ucfirst($personal_attitude_and_behavior[0]['political_view']) ?></td>

              <td class="ha">Religious Service</td>
              <td class="da"><?php echo ucfirst($personal_attitude_and_behavior[0]['religious_service']) ?></td>
          </tr>
        </tbody>
      </table>
      <?php } ?>


      <?php
        if ($this->db->get_where('frontend_settings', array('type' => 'residency_information'))->row()->value == "yes") {
      ?>
    	<div class="content">
        <strong>Residency Information</strong>
      </div>

      <table class="table">
        <tbody>
          <tr class="tra">
              <td class="ha">Birth Country</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('country', $residency_information[0]['birth_country'])) ?></td>

              <td class="ha">Residency Country</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('country', $residency_information[0]['residency_country'])) ?></td>
          </tr>                    

          <tr class="tra">
              <td class="ha">Citizenship Country</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('country', $residency_information[0]['citizenship_country'])) ?></td>

              <td class="ha">Grow Up Country</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('country', $residency_information[0]['grow_up_country'])) ?></td>
          </tr>

          <tr class="tra">
              <td class="ha">Immigration Status</td>
              <td class="da"><?php echo ucfirst($residency_information[0]['immigration_status']) ?></td>

              <td colspan="2"></td>             
          </tr>
        </tbody>
      </table>
      <?php } ?>     

      
      <?php
        if ($this->db->get_where('frontend_settings', array('type' => 'spiritual_and_social_background'))->row()->value == "yes") {
      ?>

      <div style="page-break-before: always;"></div>

    	<div class="content">
        <strong style="line-height: 50px;">Spiritual & Social Background</strong>
      </div>

      <table class="table">
        <tbody>
          <tr class="tra">
              <td class="ha">Religion</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('religion', $spiritual_and_social_background[0]['religion'])) ?></td>

              <td class="ha">Caste/Sect</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('caste', $spiritual_and_social_background[0]['caste'], 'caste_name')) ?></td>
          </tr>                    

          <tr class="tra">
              <td class="ha">Sub-Caste</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('sub_caste', $spiritual_and_social_background[0]['sub_caste'], 'sub_caste_name')) ?></td>

              <td class="ha">Kula</td>
              <td class="da"><?php echo ucfirst($spiritual_and_social_background[0]['ethnicity']) ?></td>
          </tr>

          <tr class="tra">
              <td class="ha">Personal Value</td>
              <td class="da"><?php echo ucfirst($spiritual_and_social_background[0]['personal_value']) ?></td>

              <td class="ha">Family Value</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('family_value', $spiritual_and_social_background[0]['family_value'])) ?></td>	                        
          </tr>

          <tr class="tra">
              <td class="ha">Community Value</td>
              <td class="da"><?php echo ucfirst($spiritual_and_social_background[0]['community_value']) ?></td>

              <td class="ha">Family Status</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('family_status', $spiritual_and_social_background[0]['family_status'])) ?></td>	                        
          </tr>

          <tr class="tra">
            <td class="ha">Dosha</td>
            <td class="da">
            	<?php $u_manglik=$spiritual_and_social_background[0]['u_manglik'];
                if($u_manglik == 1){
                    echo "Yes";
                }elseif($u_manglik == 2){
                    echo "No";
                }
                elseif($u_manglik == 3){
                    echo "I don't know";
                }else{
                    echo " ";
                }
            	?>	                                	
            </td>
            <td colspan="2"></td>
          </tr>
        </tbody>
      </table>
      <?php } ?>


      <?php
        if ($this->db->get_where('frontend_settings', array('type' => 'life_style'))->row()->value == "yes") {
      ?>

    	<div class="content">
        <strong>Life Style</strong>
      </div>

      <table class="table">
        <tbody>
          <tr class="tra">
              <td class="ha">Diet</td>
              <td class="da"><?php echo ucfirst($life_style[0]['diet']) ?></td>

              <td class="ha">Drink</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('decision', $life_style[0]['drink'])) ?></td>
          </tr>                    

          <tr class="tra">
              <td class="ha">Smoke</td>
              <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('decision', $life_style[0]['smoke'])) ?></td>

              <td class="ha">Living With</td>
              <td class="da"><?php echo ucfirst($life_style[0]['living_with']) ?></td>
          </tr>
        </tbody>
      </table>
    	<?php } ?>


      <?php
        if ($this->db->get_where('frontend_settings', array('type' => 'astronomic_information'))->row()->value == "yes") {
      ?>
    	<div class="content">
        <strong>Astronomic Information</strong>
      </div>

      <table class="table">
        <tbody>
            <tr class="tra">
                <td class="ha">Sun Sign</td>
                <td class="da"><?php echo ucfirst($astronomic_information[0]['sun_sign']) ?></td>

                <td class="ha">Moon Sign</td>
                <td class="da"><?php echo ucfirst($astronomic_information[0]['moon_sign']) ?></td>
            </tr>                    

            <tr class="tra">
                <td class="ha">Time Of Birth</td>
                <td class="da"><?php echo ucfirst($astronomic_information[0]['time_of_birth']) ?></td>

                <td class="ha">City Of Birth</td>
                <td class="da"><?php echo ucfirst($astronomic_information[0]['city_of_birth']) ?></td>
            </tr>
        </tbody>
      </table>
    	<?php } ?>


      <?php
        if($this->db->get_where('frontend_settings', array('type' => 'permanent_address'))->row()->value == "yes") {
      ?>
    	<div class="content">
        <strong>Permanent Address</strong>
      </div>

      <table class="table">
          <tbody>
              <tr class="tra">
                  <td class="ha">Country</td>
                  <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('country', $permanent_address[0]['permanent_country'])) ?></td>

                  <td class="ha">State</td>
                  <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('state', $permanent_address[0]['permanent_state'])) ?></td>
              </tr>                    

              <tr class="tra">
                  <td class="ha">City</td>
                  <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('city', $permanent_address[0]['permanent_city'])) ?></td>

                  <td class="ha">Postal-Code</td>
                  <td class="da"><?=$permanent_address[0]['permanent_postal_code']?></td>
              </tr>
          </tbody>
      </table>
    	<?php } ?>



		  <?php
		    if($this->db->get_where('frontend_settings', array('type' => 'family_information'))->row()->value == "yes") {
		  ?>
    	<div class="content">
        <strong>Family Information</strong>
      </div>

      <table class="table">
        <tbody>
          <tr class="tra">
              <td class="ha">Father</td>
              <td class="da"><?php echo ucfirst($family_info[0]['father']) ?></td>

              <td class="ha">Mother</td>
              <td class="da"><?php echo ucfirst($family_info[0]['mother']) ?></td>
          </tr>                    

          <tr class="tra">
              <td class="ha">Brother/Sister</td>
              <td class="da"><?php echo ucfirst($family_info[0]['brother_sister']) ?></td>

              <td colspan="2"></td>	                        
          </tr>
        </tbody>
      </table>
    	<?php } ?>


      <?php
        if ($this->db->get_where('frontend_settings', array('type' => 'additional_personal_details'))->row()->value == "yes") {
      ?>

    	<div class="content">
        <strong>Additional Personal Details</strong>
      </div>

      <table class="table">
        <tbody>
          <tr class="tra">
            <td class="ha">Home District</td>
            <td class="da"><?php echo ucfirst($additional_personal_details[0]['home_district']) ?></td>

            <td class="ha">Family Residence</td>
            <td class="da"><?php echo ucfirst($additional_personal_details[0]['family_residence']) ?></td>
          </tr>                    

          <tr class="tra">
            <td class="ha">Father's Occupation</td>
            <td class="da"><?php echo ucfirst($additional_personal_details[0]['fathers_occupation']) ?></td>

            <td class="ha">Special Circumstances</td>
            <td class="da"><?php echo ucfirst($additional_personal_details[0]['special_circumstances']) ?></td>	                        
          </tr>
        </tbody>
      </table>
    	<?php } ?>

        

      <?php
        if($this->db->get_where('frontend_settings', array('type' => 'partner_expectation'))->row()->value == "yes") {
      ?>

      <div style="page-break-before: always;"></div>
    	<div class="content">
        <strong style="line-height: 50px;">Partner Expectation</strong>
      </div>

      <table class="table">
        <tbody>
          <tr class="tra">
            <td class="ha">General Requirement</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['general_requirement']) ?></td>

            <td class="ha">Age</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['partner_age']) ?></td>
          </tr>                    

          <tr class="tra">
            <td class="ha">Height</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['partner_height']) ?></td>

            <td class="ha">Weight</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['partner_weight']) ?></td>
          </tr>

          <tr class="tra">
            <td class="ha">Marital Status</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('marital_status', $partner_expectation[0]['partner_marital_status'])) ?></td>

            <td class="ha">With Children Acceptables</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('decision', $partner_expectation[0]['with_children_acceptables'])) ?></td>	                        
          </tr>


          <tr class="tra">
            <td class="ha">Country Of Residence</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('country', $partner_expectation[0]['partner_country_of_residence'])) ?></td>

            <td class="ha">Religion</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('religion', $partner_expectation[0]['partner_religion'])) ?></td>	                        
          </tr>

          <tr class="tra">
          	<td class="ha">Caste/Sect</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('caste', $partner_expectation[0]['partner_caste'], 'caste_name')) ?></td>

            <td class="ha">Sub Caste</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('sub_caste', $partner_expectation[0]['partner_sub_caste'], 'sub_caste_name')) ?></td>   
          </tr>

          <tr class="tra">
            <td class="ha">Education</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['partner_education']) ?></td>

            <td class="ha">Profession</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['partner_profession']) ?></td>	                        
          </tr>

          <tr class="tra">
            <td class="ha">Drinking Habits</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('decision', $partner_expectation[0]['partner_drinking_habits'])) ?></td>

            <td class="ha">Smoking Habits</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('decision', $partner_expectation[0]['partner_smoking_habits'])) ?></td>	                        
          </tr>

          <tr class="tra">
            <td class="ha">Diet</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['partner_diet']) ?></td>

            <td class="ha">Body Type</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['partner_body_type']) ?></td>	                        
          </tr>

          <tr class="tra">
            <td class="ha">Personal Value</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['partner_personal_value']) ?></td>

            <td class="ha">Dosha</td>
            <td class="da">
            	<?php $manglik=$partner_expectation[0]['manglik'];
                if($manglik == 1){
                    echo "Yes";
                }elseif($manglik == 2){
                    echo "No";
                }
                elseif($manglik == 3){
                    echo "I don't know";
                }else{
                    echo " ";
                }
            	?>           		
            </td>	                        
          </tr>

          <tr class="tra">
            <td class="ha">Any Disability</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['partner_any_disability']) ?></td>

            <td class="ha">Mother Tongue</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('language', $partner_expectation[0]['partner_mother_tongue'])) ?></td>	                        
          </tr>


          <tr class="tra">
            <td class="ha">Family Value</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['partner_family_value']) ?></td>

            <td class="ha">Prefered Country</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('country', $partner_expectation[0]['prefered_country'])) ?></td>	                        
          </tr>

          <tr class="tra">
            <td class="ha">Prefered State</td>
            <td class="da"><?php echo ucfirst($this->Crud_model->get_type_name_by_id('state', $partner_expectation[0]['prefered_state'])) ?></td>

            <td class="ha">Prefered Status</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['prefered_status']) ?></td>
          </tr>

          <tr class="tra">
            <td class="ha">Complexion</td>
            <td class="da"><?php echo ucfirst($partner_expectation[0]['partner_complexion']) ?></td>

            <td colspan="2"></td>                                                
          </tr>

        </tbody>
      </table>
    	<?php } ?>         

       
    </div>
  </div>
</body>
</html>
