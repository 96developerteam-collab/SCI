<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?= translate('add_visit_registrations')?></h1>
					
		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>admin"><?= translate('home')?></a></li>
			<li><a href="#"><?= translate('Visitor Registrations')?></a></li>

		</ol>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End breadcrumb-->
	</div>
	<!--Page content-->
	<!--===================================================-->
	<div id="page-content">
		<div class="panel">
			<?php if (!empty($success_alert)): ?>
				<div class="alert alert-success" id="success_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?=$success_alert?>
	            </div>
			<?php endif ?>
			<!--<?php if (!empty($danger_alert)): ?>-->
			<!--	<div class="alert alert-danger" id="danger_alert" style="display: block">-->
	  <!--              <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>-->

	  <!--              <?=$danger_alert?>-->
	  <!--               <?=validation_errors()?>-->
	  <!--          </div>-->
			<!--<?php endif ?>-->
	    	<?php if (!empty(validation_errors())): ?>
                <div class="widget" id="profile_error">
                    <div style="border-bottom: 1px solid #e6e6e6;">
                        <!--<div class="card-title" style="padding: 0.5rem 1.5rem; color: #fcfcfc; background-color: #de1b1b; border-top-right-radius:0.25rem; border-top-left-radius:0.25rem;">You <b>Must Provide</b> the Information(s) bellow</div>-->
                        <div class="card-body" style="padding: 0.5rem 1.5rem; background: rgba(222, 27, 27, 0.10);">
                            <style>
                                #profile_error p {
                                    color: #DE1B1B !important; margin: 0px !important; font-size: 12px !important;
                                }
                            </style>
                            <!--<?= validation_errors();?>-->
                        </div>
                    </div>
                </div>
            <?php
                endif;
            ?>

		    <div class="panel-heading">
                <div class="col-md-12" align="left" style="margin: 5px 0px 0px -10px;">		
			
		        <h3 class="panel-title"><?= translate('visitor_registrations')?></h3>
				</div>
                
		      
		    </div>
		   		 	<div class="panel-body">
						<!-- <form action="" method="post"> -->
							<div class="col-md-8">
								<div class="option-container">
									<div class="option-one" onclick="toggleRadioButtons('option-one')">
										<input type="radio" name="r_input_one" id="r_input_one" >
										<label for="r_input_one" class="option-lable" >Register Someone Else (To Visit My Chapter)</label>
									</div>
									<div class="option-two" onclick="toggleRadioButtons('option-two')">
										<input type="radio" name="r_input_two" id="r_input_two">
										<label for="r_input_two" class="option-lable">Register Myself (To Visit Another Chapter)</label>
									</div>
								</div>
								
							</div>
							<div class="col-md-4">
								<div class="drop-down-option">
									
										<h5 class="heading-block"><?= translate('other_details')?></h5>
									
									<div class="form-group">
										<label for="r_cat_opt"><?= translate('CATEGORY')?></label>
										<select class=" select-form" id="r_cat_opt" name="r_cat_opt">
										<option><?= translate('type_to_search_categories')?></option>
										<!-- <option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option> -->
										</select>
									</div>
									<h5 class="subheading-block"><?= translate('visitor_type')?></h5>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="r_cat_opt" id="r_cat_opt_one" value="" checked>
										<label class="form-check-label" for="r_cat_opt_one" style="margin-left: 10px;">
											<?= translate('visitor')?>
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="r_cat_opt" id="r_cat_opt_two" value="">
										<label class="form-check-label" for="r_cat_opt_two" style="margin-left: 10px;">
											<?= translate('guest')?>
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="r_cat_opt" id="r_cat_opt_three" value="">
										<label class="form-check-label" for="r_cat_opt_three" style="margin-left: 10px;">
											<?= translate('substitute')?>
										</label>
									</div>
									<div class="checkbox-container">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
											<label class="form-check-label" for="inlineCheckbox1" style="margin-left: 10px;line-height: 18px;">I confirm to allow the system to send invitations to the visitor on my behalfs</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-8" style="margin-top: -210px;">
								<div class="filter-option">
									<h5 class="heading-block"><?= translate('registration_details')?></h5>
									
									<div class="form-group">
										<label for="r_cat_opt_checkbox"><?= translate('Registration_Chapter')?></label>
										<select class="form-control" id="r_cat_opt_checkbox" name="r_cat_opt_checkbox" required>
										<option>1</option>
										<!-- <option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option> -->
										</select>
									</div>
									<div class="form-group">
										<label for="r_vist_date"><?= translate('visit_date')?></label>
										<input type="date" class="form-control" id="r_vist_date" name="r_vist_date" required>
									</div>
									
								</div>
								
							</div>
							<div class="col-md-12" style="margin-top: 30px;">
								<div class="filter-option">
									<h5 class="heading-block"><?= translate('visitor_details')?></h5>
									<div class="form-group">
										<label for="r_title">TITLE(optional)</label>
										<select class="form-control" id="r_title" name="r_title">
											<option><?= translate("title")?></option>
											<option><?= translate("miss")?></option>
											<option><?= translate("mr")?></option>
											<option><?= translate("mrs")?></option>
											<option><?= translate("dr")?></option>
											<option><?= translate("prof")?></option>									
										</select>
									</div>
									<div class="form-group">
										<label for="r_a_suffix">SUFFIX(optional)</label>
										<input type="text" class="form-control" id="r_a_suffix" name="r_a_suffix" >
									</div>
									<div class="form-group">
										<label for="r_a_fname">FIRST NAME</label>
										<input type="text" class="form-control" id="r_a_fname" name="r_a_name" required>
									</div>
									<div class="form-group">
										<label for="r_a_lname">LAST NAME</label>
										<input type="text" class="form-control" id="r_a_lname" name="r_a_lname" required>
									</div>
									<div class="form-group">
										<label for="r_a_emailid">EMAIL ADDRESS</label>
										<input type="email" class="form-control" id="r_a_emailid"  name="r_a_emailid" required>
									</div>
									<div class="form-group">
										<label for="r_a_phno">PHONE NUMBER</label>
										<input type="text" class="form-control" id="r_a_phno" name="r_a_phno" required>
									</div>
									<div class="form-group">
										<label for="r_a_cname">COMPANY NAME(optional)</label>
										<input type="text" class="form-control" id="r_a_cname" name="r_a_cname" >
									</div>
									<div class="form-group">
										<label for="r_a_addone">ADDRESS LINE 1(optional)</label>
										<input type="text" class="form-control" id="r_a_addone" name="r_a_addone" >
									</div>
									<div class="form-group">
										<label for="r_a_addtwo">ADDRESS LINE 2(optional)</label>
										<input type="text" class="form-control" id="r_a_addtwo" name="r_a_addtwo" >
									</div>
									<div class="form-group">
										<label for="r_a_city">CITY(optional)</label>
										<input type="text" class="form-control" id="r_a_city" name="r_a_city" >
									</div>
									<div class="form-group">
										<label for="r_a_place">STATE/COUNTRY/PROVINCE(optional)</label>
										<input type="text" class="form-control" id="r_a_place" name="r_a_place" >
									</div>
									<div class="form-group">
										<label for="r_a_pcode">POST CODE(optional)</label>
										<input type="text" class="form-control" id="r_a_pcode" name="r_a_pcode" >
									</div>
								

								</div>
							</div>
							<div class="col-md-12" align="center" style="margin: 23px 0px 0px -10px;">	
									<button class="top-option-one " type="reset"><i class="fa fa-save"> <?= translate('reset_form')?></i></button>
									<button class="top-option-two " type="submit"><i class="fa fa-save"> <?= translate('save_registration')?></i></button>
								</div>
						<!-- </form> -->
		    		</div>
		</div>
	</div>
</div>
<script>
	setTimeout(function() {
	    $('#success_alert').fadeOut('fast');
	    $('#danger_alert').fadeOut('fast');
	}, 5000); // <-- time in milliseconds
</script>
<script>
    // Add your JavaScript here
    function toggleRadioButtons(option) {
      if (option === 'option-one') {
        document.getElementById('r_input_one').checked = true;
        document.getElementById('r_input_two').checked = false;
      } else if (option === 'option-two') {
        document.getElementById('r_input_one').checked = false;
        document.getElementById('r_input_two').checked = true;
      }
    }
  </script>

<style>
    :root{
        --blackColor:#000;
        --purpleColor:#4D2D6B;
        --whiteColor:#fff;
    }
     
</style>
<style>
	.option-container{
		display:flex;
	}
	.option-lable{
		display: contents;
	}
	.option-one,
	.option-two,
	.drop-down-option,
	.filter-option
	{
		margin-right: 10px;
		font-size:1.5rem;
		background-color: #ACC8E5;
		color: #112A46;
		padding: 8.718px;
		border-radius:10px;
		box-shadow:10px 10px 10px rgba(0,0,0,0.5);
	}
	.option-container .option-one .option-lable ,.option-container input,
	.option-container .option-two .option-lable 
	{
		cursor:pointer;
	}
	.top-option-one{
		background-color: var(--whiteColor);
		color: var(--purpleColor);
		padding: 0.7rem 2.5rem;
		border-radius:5px;
		border-color:var(--purpleColor);
		border-width:1px;
		font-size:1.4rem;
		transition:0.25s ease-in transform, 0.25s ease-in box-shadow;
	}
	.top-option-one:hover{
		background-color: var(--whiteColor);
		color: var(--purpleColor);
		border:1px solid var(--purpleColor);
		transform:translateY(-10%);
		box-shadow:15px 15px 15px rgb(0,0,0,0.5);
	}
	.top-option-two{
		background-color: var(--purpleColor);
		color: #FFFFFF;
		border-radius:5px;
		border:none;
		font-size:1.4rem;
		padding: 0.7rem 2.5rem;
		margin-inline:10px;
		transition:0.25s ease-in transform, 0.25s ease-in box-shadow;
	}
	.top-option-two:hover{
		opacity:0.85;
		color:#fff;
		transform:translateY(-10%) ;
		box-shadow:15px 15px 15px rgb(0,0,0,0.5);
	}
	.heading-block{
		font-size:2.0rem;
		color:#112A46;
	}
	.subheading-block{
		font-size:1.5rem;
		color:#112A46;
	}
	.select-form{
		height: 36px;
		width: 100%;
	}
	.form-check-inline{
		display:flex;
		flex-direction:row;
	}
</style>
