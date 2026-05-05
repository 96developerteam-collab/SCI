<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('network')?></h1>
            <div class="col-md-6" style="margin-left:280px;margin-top: -10px;">
                        <div id="tabs-container">
                            <ul class="tabs">
                                <li class="tab  dropdown" onclick="openTab('tab1')"><img src="<?= base_url()?>nav-icon-message.svg" alt="">
                                    <div class="dropdown-content">
                                        <a href="<?= base_url()?>admin/inbox" class="dropdown-item"><?= translate('inbox')?></a>
                                        <a href="<?= base_url()?>admin/sendMessage" class="dropdown-item"><?= translate('sent')?></a>
                                        <a href="<?= base_url()?>admin/composeMessage" class="dropdown-item"><?= translate('compose')?></a>
                                    </div>
                                </li>
                                <li class="tab tab2">
                                    <a href="<?= base_url()?>admin/add_connection"><img src="<?= base_url()?>nav-icon-search.svg" alt=""></a>
                                </li>
                                <li class="tab tab2" onclick="openTab('tab3')"><img src="<?= base_url()?>nav-icon-print.svg" alt=""></li>
                                <li class="tab tab2"><img src="<?= base_url()?>nav-icon-help.svg" alt=""></li>
                            </ul>
                        </div>
                    </div>

		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>admin"><?= translate('home')?></a></li>
			<li><a href="#"><?= translate('profile')?></a></li>
			<li><a href="#"><?= translate('bio')?></a></li>

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
                <div class="col-md-12" align="center" style="margin: 9px 0px 0px -20px;">						
                    <a href="<?=base_url()?>admin/network" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-user-circle"></i> <?php echo translate('profile')?></a>
					<a href="<?=base_url()?>admin/bio" id="demo-dt-view-btn" class="btn btn-primary add-tooltip"><i class="fa fa-user"></i> <?php echo translate('bio')?></a>
                    <a href="<?=base_url()?>admin/connection" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-sliders"></i> <?php echo translate('connections')?></a>
                    <a href="<?=base_url()?>admin/photos" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-picture-o"></i> <?php echo translate('photos')?></a>
                    <a href="<?=base_url()?>admin/group" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-users"></i> <?php echo translate('groups')?></a>
                    <a href="<?=base_url()?>admin/training" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-book"></i> <?php echo translate('training_histroy')?></a>
                    <a href="<?=base_url()?>admin/testimonials" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-comments"></i> <?php echo translate('testimonials')?></a>
				</div>
		        
		      
		    </div>
		    <div class="panel-body">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none">
                            <?= translate('my_bio')?>
                            </button>
                        </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <form class="form-horizontal" id="manage_details_form">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_years"><b><?= translate('years_in_business')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" value="" name="b_years" id="b_years">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_jobs"><b><?= translate('previous_types_of_jobs')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="" name="b_jobs" id="b_jobs" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_spouse"><b><?= translate('spouse')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="" name="b_spouse" id="b_spouse" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_children"><b><?= translate('children')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="b_children" rows="" id="b_children"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_pet"><b><?= translate('Pets')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="" name="b_pet" required="" id="b_pet">	                
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_hobbies"><b><?= translate('hobbies_&_interests')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="" name="b_hobbies" id="b_hobbies" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_residence"><b><?= translate('city_of_residence')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="" name="b_residence" id="b_residence" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_year"><b><?= translate('years_in_that_city')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" value="" name="b_year" id="b_year" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_desire"><b><?= translate('my_burning_desire_is_to')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="" name="b_desire" id="b_desire" required="">
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_something"><b><?= translate('something_no_One_Here_Knows_About_Me')?><span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text"  class="form-control" name="b_something" id="b_something">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_key"><b><?= translate('my_Key_to_Success')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text"  class="form-control" name="b_key" id="b_key">
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration:none">
                            <?= translate('weekly_presentations')?>
                            </button>
                        </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        <form class="form-horizontal" id="manage_details_form" method="POST" action="">
                            
                           
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="bio_presentation_one"><b><?= translate('weekly_presentation 1')?> <span class="text-danger">*</span></b></label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="bio_presentation_one" rows="2" id="bio_presentation_one"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="bio_presentation_two"><b><?= translate('weekly_presentation 2')?> <span class="text-danger">*</span></b></label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="bio_presentation_two" rows="2" id="bio_presentation_two"></textarea>
                                </div>
                            </div>
                          </form>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:none">
                                <?= translate('GAINS_profile')?>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <form class="form-horizontal" id="manage_details_form" method="POST" action="">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_goal"><b><?= translate('goal')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="" name="b_goal" id="b_goal">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_acomplishments"><b><?= translate('accomplishments')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="" name="b_acomplishments" id="b_acomplishments" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_interest"><b><?= translate('interests')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="" name="b_interest" id="b_interest" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_network"><b><?= translate('network')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="b_network" rows="" id="b_network"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="b_skills"><b><?= translate('skills')?> <span class="text-danger">*</span></b></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="" name="b_skills" required="" id="b_skills">
                                    					                
                                    </div>
                                </div>
                        
                        
                        
                    
                        
                        
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:none">
                                <?= translate('tops_profile')?>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <form class="form-horizontal" id="manage_details_form" method="POST" action="">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="b_ideal"><b><?= translate('ideal_Referral')?> <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="bio_ideal" rows="" id="bio_ideal"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="b_product"><b><?= translate('Top Product')?> <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="b_product" rows="" id="b_product"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="b_problem"><b><?= translate('Top Problem Solved')?> <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="b_problem" rows="" id="b_problem"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="b_favorite"><b><?= translate('My Favorite BNI Story')?> <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="b_favorite" rows="" id="b_favorite"></textarea>					                
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="b_partner"><b><?= translate('My Ideal Referral Partner')?> <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="b_partner" rows="" id="b_partner"></textarea>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
    function openTab(tabName) {
        // Add your logic for tab switching here
        console.log("Switching to " + tabName);
    }
</script>
<style>
    :root{
        --blackColor:#000;
        --purpleColor:#4D2D6B;
        --whiteColor:#fff;
    }
     .tabs {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            border-radius:10px;
            
        }

        .tab {
            position: relative;
            flex: 1;
            text-align: center;
            padding: 0px;
            background-color: var(--purpleColor);
            cursor: pointer;
        }

        .tab:hover {
            background-color: var(--blackColor);
        }
        .tab2:hover{
            background-color: var(--purpleColor);
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: var(--purpleColor);
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            top: 100%;
            left: 0;
            width: 100%;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-item {
            padding: 12px 16px;
            display: block;
            text-align: left;
            text-decoration: none;
            color: var(--whiteColor);
        }

        .dropdown-item:hover {
            background-color: var(--blackColor);
            color:var(--whiteColor);
        }
        textarea{
            resize:none;
        }
        textarea:focus, input:focus{
            outline:none;
        }
        .form-control{
            border: 1px solid rgb(181 181 181 / 76%);
        }
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        input[type="number"] {
        -moz-appearance: textfield; /* Firefox */
        }
</style>
