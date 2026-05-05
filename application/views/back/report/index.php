<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('report')?></h1>
					<div class="col-md-6" style="margin-left:280px;margin-top: -10px;">
                        <div id="tabs-container">
                            <ul class="tabs">
                                <li class="tab  dropdown"><img src="<?= base_url()?>nav-icon-message.svg" alt="">
                                    <div class="dropdown-content">
                                        <a href="<?= base_url()?>admin/inbox" class="dropdown-item"><?= translate('inbox')?></a>
                                        <a href="<?= base_url()?>admin/sendMessage" class="dropdown-item"><?= translate('sent')?></a>
                                        <a href="<?= base_url()?>admin/composeMessage" class="dropdown-item"><?= translate('compose')?></a>
                                    </div>
                                </li>
                                <li class="tab tab2">
                                    <a href="<?= base_url()?>admin/add_connection"><img src="<?= base_url()?>nav-icon-search.svg" alt=""></a>
                                </li>
                                <li class="tab tab2"  onclick="printPage()"><img src="<?= base_url()?>nav-icon-print.svg" alt=""></li>
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
			<li><a href="#"><?= translate('report')?></a></li>

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
			
		        <h3 class="panel-title"><?= translate('report')?></h3>
				</div>
		      
		    </div>
		    <div class="panel-body">
	    		    <div class="border">
                        <div class="col-md-12 heaading-container">
                            <?= translate('report_view_action&nbsp;by')?><span class="chapter-cotainer"><?= translate('chapter')?></span>
                        </div>
                    </div>
                    <div class="col-md-6 tab-container  ">
                    
                        <ul>
                            <li onclick="changeTab('customTab1')">❓ <?= translate('member_training_report')?></li>
                            <li onclick="changeTab('customTab2')">❓ <?= translate('chapter_roaster_report')?></li>
                            <li onclick="changeTab('customTab3')">❓ <?= translate('membership_dues_report')?></li>
                            <li onclick="changeTab('customTab4')">❓ <?= translate('meeting_note_report')?></li>
                            <li onclick="changeTab('customTab5')">❓ <?= translate('summary_PALMS_report')?></li>
                            <li onclick="changeTab('customTab6')">❓ <?= translate('absence_report')?></li>
                            <li onclick="changeTab('customTab7')">❓ <?= translate('classification_not&nbsp;in_chapter')?></li>
                            <li onclick="changeTab('customTab8')">❓ <?= translate('speaker_report')?></li>
                            <li onclick="changeTab('customTab9')">❓ <?= translate('regoinal_leadership_report')?></li>
                            <li onclick="changeTab('customTab10')">❓ <?= translate('personal_PLAMS_report')?></li>
                            <li onclick="changeTab('customTab11')">❓ <?= translate('sponsor_report')?></li>
                            <li onclick="changeTab('customTab12')">❓ <?= translate('vP_report')?></li>
                            <li onclick="changeTab('customTab13')">❓ <?= translate('cummulative_VP_report')?></li>
                            <li onclick="changeTab('customTab14')">❓ <?= translate('member_detail_(4_report)')?></li>
                            <li onclick="changeTab('customTab15')">❓ <?= translate('chapter_vistor_report')?></li>
                            <li onclick="changeTab('customTab16')">❓ <?= translate('pALMS_attendence_report')?></li>
                            <li onclick="changeTab('customTab17')">❓ <?= translate('chapter_traffc_lights')?></li>
                            <li onclick="changeTab('customTab18')">❓ <?= translate('length&nbsp;of_membership_report')?></li>
                        </ul>
                    
                    </div>
                    <div class="col-md-6 tab-content-container">
                        
                            <div id="customTab1" class="custom-tab-content active">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('member_training_report')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>

                               
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="train_start_date" style="margin-top: 5px;margin-bottom: 0;"><?= translate('start_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="train_start_date" id="train_start_date">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="train_end_date" style="margin-top: 5px;margin-bottom: 0;"><?= translate('end_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="train_end_date" id="train_end_date">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="train_date_event" style="margin-top: 5px;margin-bottom: 0;"><?= translate('event_type')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <select multiple id="train_date_event" name="train_date_event" style="width: 200px;border:1px solid var(--lightGrey)">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>  
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="train_show" style="margin-top: 5px;margin-bottom: 0;"><?= translate('show_never_attended')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="checkbox" class="checkbox" name="train_show" id ="train_show">
                                        <div>The date fields are disregarded when running the report for members who have not attended any training event.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"  data-toggle="modal" data-target="#staticBackdrop"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab2" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('chapter_roaster_report')?>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"  data-toggle="modal" data-target="#staticBackdropone"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab3" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('member_dues_report')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="member_start_date" style="margin-top: 5px;margin-bottom: 0;"><?= translate('start_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="member_start_date" id="member_start_date">
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"  data-toggle="modal" data-target="#staticBackdroptwo"><?= translate('go')?></button>
                                </div>

                            </div>
                            <div id="customTab4" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('meeeting_notes_report')?>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"   data-toggle="modal" data-target="#staticBackdropthree"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab5" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('summary_PALMS_report')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="palms_start_date" style="margin-top: 5px;margin-bottom: 0;"><?= translate('start_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="palms_start_date" id="palms_start_date">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="palms_end_date" style="margin-top: 5px;margin-bottom: 0;"><?= translate('end_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="palms_end_date" id="palms_end_date">
                                    </div>
                                    
                                </div>
                                <div class="form-container" style="padding-right: 8px;">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="palms_checkbox" style="margin-top: 5px;margin-bottom: 0;">Show Dropped Member Names? (All member contributions will always be included in the totals)</label>
                                        <!-- <span class="required">*</span> -->
                                    </div>
                                    <div class="col-md-1">
                                        <input type="checkbox" name="palms_checkbox">
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"   data-toggle="modal" data-target="#staticBackdropfour"><?= translate('go')?></button>
                                 </div>
                            </div>
                            <div id="customTab6" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('absence_report')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="absence_from" style="margin-top: 5px;margin-bottom: 0;"><?= translate('from_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="absence_from" id="absence_from">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex;justify-content:center">
                                        <label for="absence_to" style="margin-top: 5px;margin-bottom: 0;"><?= translate('to_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="absence_to" id="absence_to">
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"   data-toggle="modal" data-target="#staticBackdropfive"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab7" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('classification_not_in_chapter')?>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit" data-toggle="modal" data-target="#staticBackdropsix"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab8" class="custom-tab-content">
                           
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('speaker_report')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>

                               
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="speaker_start" style="margin-top: 5px;margin-bottom: 0;"><?= translate('start_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="speaker_start" id="speaker_start">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="speaker_end" style="margin-top: 5px;margin-bottom: 0;"><?= translate('end_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="speaker_end" id="speaker_end">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="" style="margin-top: 5px;margin-bottom: 0;"><?= translate('chapter(s)')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <select multiple id="exampleFormControlSelect2" style="width: 200px;border:1px solid var(--lightGrey)">
                                            <option><?= translate('1 precentage')?></option>
                                        </select>
                                    </div>  
                                </div>
                                
                                <div class="form-button">
                                    <button type="submit"  data-toggle="modal" data-target="#staticBackdropseven"><?= translate('go')?></button>
                                </div>
                            
                            </div>
                            <div id="customTab9" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('regional_leader_report')?>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"  data-toggle="modal" data-target="#staticBackdropeight"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab10" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('personal_PALMS_report')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="personal_member" style="margin-top: 5px;margin-bottom: 0;"><?= translate('member_name')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <select class="form-control" id="personal_member" name="member_name" style="width: 200px;border:1px solid var(--lightGrey)">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="" style="margin-top: 5px;margin-bottom: 0;"><?= translate('from_month_&_year')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex;justify-content:center">
                                        <label for="" style="margin-top: 5px;margin-bottom: 0;"><?= translate('to_month_&_year')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input">
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit" data-toggle="modal" data-target="#staticBackdropnine"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab11" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('sponsor_report')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="sponsor_start" style="margin-top: 5px;margin-bottom: 0;"><?= translate('start_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="sponsor_start" id="sponsor_start">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="sponsor_end" style="margin-top: 5px;margin-bottom: 0;"><?= translate('end_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" id="sponsor_end" name="sponsor_end">
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"   data-toggle="modal" data-target="#staticBackdropseventeen"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab12" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('vP_report_one_month')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="vp_report_month" style="margin-top: 5px;margin-bottom: 0;"><?= translate('month_&_year')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="month" class="input" name="vp_report_month" id="vp_reort_month">
                                    </div>
                                    
                                </div>
                                <div class="form-button">
                                    <button type="submit"   data-toggle="modal" data-target="#staticBackdropeighteen"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab13" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('cumulative VP report(6_month_max)')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="cumulative_vp_from_month_and_year" style="margin-top: 5px;margin-bottom: 0;"><?= translate('from_month_&_year')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="month" class="input" name="cumulative_vp_from_month_and_year" id="cumulative_vp_from_month_and_year">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="cumulative_vp_to_month_and_year" style="margin-top: 5px;margin-bottom: 0;"><?= translate('to_month_&_year')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="month" class="input" name="cumulative_vp_to_month_and_year" id="cumulative_vp_to_month_and_year">
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"  data-toggle="modal" data-target="#staticBackdropninteen"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab14" class="custom-tab-content">
                                <div id="parentSection" class="section-content active">
                                <!-- <p>Content for Parent Section goes here.</p> -->
                                    <div class="box-container">

                                        <a href="#" title="<?= translate(' View Member Bio')?>"  onclick="changeSection('childSection1', event)"><div class="box">
                                            <?= translate('View Member Bio')?>
                                        </div>
                                        </a>
                                        <div class="box">
                                             <a href="#" title="<?= translate('View Member Weekly Presentation')?>"   onclick="changeSection('childSection2', event)"><?= translate('View Member Weekly Presentation')?></a>
                                        </div>

                                         <a href="#" title="<?= translate('View Member GAINS')?>" onclick="changeSection('childSection3', event)"><div class="box">
                                            <?= translate('View Member GAINS')?>
                                        </div></a>
                                        <div class="box">
                                            <a href="#" title="<?= translate('View Member TOPS')?>" onclick="changeSection('childSection4', event)"><?= translate('View Member TOPS')?></a>
                                        </div>
                                    </div>
                                   
                               

                                
                            </div>     
                                <!-- Child Section 1 Content -->
                            <div id="childSection1" class="section-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('view_member_bio')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                              <!-- <form action="" method="post"> -->
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="" style="margin-top: 5px;margin-bottom: 0;"><?= translate('member_name')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <select class="form-control" id="" style="width: 200px;border:1px solid var(--lightGrey)">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"   data-toggle="modal" data-target="#staticBackdropthirteen"><?= translate('go')?></button>
                                    <button type="submit" onclick="goBack('parentSection')"><?= translate('back')?></button>
                                </div>
                              
                            </div>

                            <!-- Child Section 2 Content -->
                            <div id="childSection2" class="section-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('View Member Weekly Presentation')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                              <!-- <form action="" method="post"> -->
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="" style="margin-top: 5px;margin-bottom: 0;"><?= translate('member_name')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <select class="form-control" id="" style="width: 200px;border:1px solid var(--lightGrey)">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"  data-toggle="modal" data-target="#staticBackdropfourteen"><?= translate('go')?></button>
                                    <button type="submit" onclick="goBack('parentSection')"><?= translate('back')?></button>
                                </div>
                              <!-- </form> -->
                              
                            </div>
                            <!-- Child Section 3 Content -->
                            <div id="childSection3" class="section-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('View Member GAINS')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                              <!-- <form action="" method="post"> -->
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="" style="margin-top: 5px;margin-bottom: 0;"><?= translate('member_name')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <select class="form-control" id="" style="width: 200px;border:1px solid var(--lightGrey)">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"   data-toggle="modal" data-target="#staticBackdropfifteen"><?= translate('go')?></button>
                                    <button type="submit" onclick="goBack('parentSection')"><?= translate('back')?></button>
                                </div>
                              
                            </div>
                            <!-- Child Section 4 Content -->
                            <div id="childSection4" class="section-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('View Member TOPS')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                              <!-- <form action="" method="post"> -->
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="" style="margin-top: 5px;margin-bottom: 0;"><?= translate('member_name')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <select class="form-control" id="" style="width: 200px;border:1px solid var(--lightGrey)">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"   data-toggle="modal" data-target="#staticBackdropsixteen"><?= translate('go')?></button>
                                    <button type="submit" onclick="goBack('parentSection')"><?= translate('back')?></button>
                                </div>
                              <!-- </form> -->
                              
                            </div>                                                    
                            </div>
                            <div id="customTab15" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('chapter_visitor_report')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="visitor_start_date" style="margin-top: 5px;margin-bottom: 0;"><?= translate('start_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="visitor_start_date" id="visitor_start_date">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="visitor_end_date" style="margin-top: 5px;margin-bottom: 0;"><?= translate('end_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" class="visitor_end_date">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="visitor_fname" style="margin-top: 5px;margin-bottom: 0;"><?= translate('first_name')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="text" class="input" name="vistor_fname" id="visitor_fname">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="visitor_lname" style="margin-top: 5px;margin-bottom: 0;"><?= translate('last_name')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="text" class="input" name="visitor_date" id="visitor_date">
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"   data-toggle="modal" data-target="#staticBackdropten"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab16" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('chapter_PALMS_attendence_report')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="palms_attendence_start_date" style="margin-top: 5px;margin-bottom: 0;"><?= translate('start_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="palms_attendence_start_date" id="palms_attendence_start_date">
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="palms_attendence_end_date" style="margin-top: 5px;margin-bottom: 0;"><?= translate('end_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input" name="palms_attendence_end_date" id="palms_attendence_end_date">
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"  data-toggle="modal" data-target="#staticBackdroptwenty"><?= translate('go')?></button>
                                </div>

                            </div>
                            <div id="customTab17" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('traffic_light_report')?>
                                    </div>
                                    <div>
                                        <span class="required">*</span><?= translate('required_field')?>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="col-md-4" style="display:flex">
                                        <label for="" style="margin-top: 5px;margin-bottom: 0;"><?= translate('start_date')?></label>
                                        <span class="required">*</span>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="date" class="input">
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"  data-toggle="modal" data-target="#staticBackdropeleven"><?= translate('go')?></button>
                                </div>
                            </div>
                            <div id="customTab18" class="custom-tab-content">
                                <div class="left-heading">
                                    <div style="font-weight:bold">
                                        <?= translate('chapter')?> ► <?= translate('length_membership_report')?>
                                    </div>
                                </div>
                                <div class="form-button">
                                    <button type="submit"  data-toggle="modal" data-target="#staticBackdroptwelve"><?= translate('go')?></button>
                                </div>
                            </div>
                        
                    </div>
                
		    </div>
		</div>
	</div>
</div>
<!-- member traning report modal-->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1024px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Member Training Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Member Training Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
          <div class="col-md-12" align="center" style="margin-top: 10px;color:#111445;font-style:italic;font-weight: bold;">
            There is further information available when exporting this report.
          </div>
          
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                 chapter:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                   Event:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  From:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  To:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  Show:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
        </div>  
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2"><?= translate('member_name')?></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle"><?= translate('event_date')?></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle"><?= translate('event_type')?></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle"><?= translate('role')?></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle"><?= translate('join_date')?></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle"><?= translate('phone')?></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle"><?= translate('email')?></th>
                  </tr>
                
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- chapter roaster report-->
<div class="modal fade" id="staticBackdropone" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Chapter Roster Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter &#x25B8; Chapter Roster Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  Chapter:
                </div>
                <div>
                  
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
        </div>
        <div style="margin-bottom: 10px;">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Officers</th>
                <th>Regional Leadership</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><?= translate('total_member')?></td>
                <td><small>G=referrals given R=referrals received V=visitors L=late Abs=absent</small></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2">Member Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Classification</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Company Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Phone</th>
                    <th colspan="6" style="text-align:center;">Data shows last 90 days</th>
                  </tr>
               
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                    <th>G</th>
                    <th>R</th>
                    <th>V</th>
                    <th>121</th>
                    <th>L</th>
                    <th>abs</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Member Dues Report Modal -->
<div class="modal fade" id="staticBackdroptwo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ►  Member Dues Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ►  Member Dues Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>           
          </div>
          
        </div>
          <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  Chapter:
                </div>
                <div>
                  
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  Chapter:
                </div>
                <div>
                  
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
          </div>
            <div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th rowspan="2"></th>
                    <th colspan="2">Member Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Industry</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Type</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Membership Status</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Due Date</th>
                  </tr>
               
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="7" style="text-align:center">New Members Since <div>dd/mon/yyyy</div></th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th rowspan="2"></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Start Date</th>
                    <th colspan="2" style="text-align:center">Member Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Industry</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">type </th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Due Date</th>
                  </tr>
               
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="6" style="text-align:center">Late Members Since <div>dd/mon/yyyy</div></th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th rowspan="2"></th>                   
                    <th colspan="2" style="text-align:center">Member Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Industry</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Due Date</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Membership Status </th>
                  </tr>
               
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="5" style="text-align:center">Expired or Dropped Members Since <div>dd/mon/yyyy</div></th>
                  </tr>
                </thead>
                <thead>
                  <tr>               
                    <th colspan="2" style="text-align:center">Member Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Industry</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Due Date</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Membership Status </th>
                  </tr>
               
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Meeting Notes Report Modal -->
<div class="modal fade" id="staticBackdropthree" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Meeting Notes Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter &#x25B8; Meeting Notes Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
        </div>
          <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
               Meeting Notes Report For:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  Chapter:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
          </div>
        
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2">Member Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Company</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Note</th>
                  </tr>
                
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Summary PALMS Report Modal -->
<div class="modal fade" id="staticBackdropfour" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Summary PALMS Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Summary PALMS Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
          <div class="col-md-12" align="center" style="margin-top: 10px;color:#111445;font-style:italic;font-weight: bold;">
            Note: Report totals include contributions from dropped members who were active at any time during the selected date range (not applicable to Tracking PALMS).
          </div>
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                 chapter:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  From:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  To:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
        </div>
        
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2">Member Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">P</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">A</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">L</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">M</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">S</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">RGI</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">RGO</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">RRI</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">RRO</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">V</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">1-2-1</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">TYFCB</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">CEU</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">T</th>
                  </tr>
                
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Absence Report Modal -->
<div class="modal fade" id="staticBackdropfive" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Absence Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Absence Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                 chapter:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  <?= translate('start_end')?>
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  <?=translate('end_date')?>
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
        </div>
        
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2">Member Name</th>
                    <!-- <th rowspan="2">P</th> -->
                    <th rowspan="2" style="text-align:center;vertical-align:middle">A</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">L</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">M</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">S</th>
                  </tr>
                
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Classifications Not In Chapter Modal -->
<div class="modal fade" id="staticBackdropsix" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Classifications Not In Chapter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Classifications Not In Chapter</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  region:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  Chapter:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
        </div>
        
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Classifications your chapter doesn't have</th>
                  <th>Number of chapters that have this classification</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Speaker Report Modal -->
<div class="modal fade" id="staticBackdropseven" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Speaker Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Speaker Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                 chapter:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  <?= translate('start_end')?>
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  <?=translate('end_date')?>
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
        </div>
        
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2">Member Name</th>
                    <!-- <th rowspan="2">P</th> -->
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Chapter Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Meeting Date</th>
                  </tr>
                
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <!-- <td></td> -->
                  </tr>
                </tbody>
          </table>
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Regional Leadership Report Modal -->
<div class="modal fade" id="staticBackdropeight" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Regional Leadership Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Regional Leadership Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                Region:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            
        </div>
        
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Chapter Name</th>
                    <th>Area Director Consultant</th>
                    <th>Director Consultant</th>
                    <th>Ambassador</th>
                    <th>Area</th>
                  </tr>
                
                  
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
          
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Personal PALMS Report Modal -->
<div class="modal fade" id="staticBackdropnine" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1020px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Personal PALMS Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Personal PALMS Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                Chapter:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                Member:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                From:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                To:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            
        </div>
         <div>
            <p style="color: #2B0C52;font-size: 1.1rem;text-align: center;">(GI = Given Inside, GO = Given Outside, RI = Received Inside, RO = Received Outside, A = Attendance, V = Visitors, 1-2-1 = 121's, TYFCB = Thank You for Closed Business, CEU = Chapter Education Units)</p>
         </div>
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Meeting Date</th>
                    <th>A</th>
                    <th>RGI</th>
                    <th>RGO</th>
                    <th>RRI</th>
                    <th>RRO</th>
                    <th>V</th>
                    <th>1-2-1</th>
                    <th>TYFCB</th>
                    <th>CEU</th>
                    <th>T</th>
                  </tr>
                
                  
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
                <tbody class="table-bottom">
                  <tr>
                    <td><?= translate('total')?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
          
        </div>
        <div class="col-md-12">
          <div class="col-md-3 border-box" style="padding: 0;">
                <div class="border-content">
                  <div>present</div>
                  <div>number</div>
                </div>
                <div class="border-content">
                  <div>Absent</div>
                  <div>number</div>
                </div>
                <div class="border-content">
                  <div>Late</div>
                  <div>number</div>
                </div>
                <div class="border-content">
                  <div>Medical</div>
                  <div>number</div>
                </div>
                <div class="border-content">
                  <div>Substitute</div>
                  <div>number</div>
                </div>
                <div class="border-content">
                  <div></div>
                  <div></div>
                </div>
                <div class="border-content" style="border-bottom:none">
                  <div>Total Meetings</div>
                  <div>present</div>
                </div>
          </div>
        </div>
        <div class="col-md-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th colspan="4" style="text-align:center">Number of Members Sponsored: 0</th>
              </tr>
            </thead>
            <thead>
              <tr>
                <th>Name of Sponsored Member</th>
                <th>Region of Sponsored Member</th>
                <th>Chapter of Sponsored Member</th>
                <th>Application Date of Sponsored Member</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th colspan="3" style="text-align:center">Training Information</th>
              </tr>
            </thead>
            <thead>
              <tr>
                <th>Date of Event Attended</th>
                <th>Event Name</th>
                <th>Event Type</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Visitor Report Modal -->
<div class="modal fade" id="staticBackdropten" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Chapter Visitor Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Chapter Visitor Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
          <div class="col-md-12" align="center" style="margin-top: 10px;color:#111445;font-style:italic;font-weight: bold;">
            There is further information available when exporting this report.
          </div>
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                 chapter:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  From:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  To:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                   First Name:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  last Name:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
        </div>
        
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2">Visitor Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Company</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Profession</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Email</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Visit Date</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Invited By</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Type</th>
                  </tr>
                
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Traffic Lights Report Modal -->
<div class="modal fade" id="staticBackdropeleven" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Traffic Lights Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Traffic Lights Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                Region:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  Year:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  Month:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
        </div>
        
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Chapter Name</th>
                    <th>Chapter Size</th>
                    <th>Member Growth (6 Months)</th>
                    <th>Retention</th>
                    <th>Referrals</th>
                    <th>Visitors</th>
                    <th>Conversion</th>
                    <th>Absenteeism</th>
                    <th>Score</th>
                    <th></th>
                  </tr>
                
                  
                
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Length of Membership Report Modal -->
<div class="modal fade" id="staticBackdroptwelve" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Length of Membership Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading" style="margin-bottom: 10px;">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Length of Membership Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
          <div class="col-md-12" align="center" style="margin-top: 10px;color:#111445;font-style:italic;font-weight: bold;">
          Cumulative numbers include previous memberships, while Current numbers only relate to the most recent chapter membership.
          </div>
        </div>
        
        
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2">Member Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Cumulative Length</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Cumulative Start Date</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Recent Length</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Recent Start date</th>
                  </tr>
                
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  View Member Bio Modal -->
<div class="modal fade" id="staticBackdropthirteen" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► View Member Bio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading" style="margin-bottom: 10px;">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► View Member Bio</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
         
        </div>
        
        
        <div>
          
          <div class="col-md-12 roster-second-heading">
                <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
                  Parameters:
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Name:
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Company
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                    Profession
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Address
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                    Years in Business
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Spouse
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Children
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Hobbies and Interests
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      City of Residence
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Years in that City
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Previous Job Types
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      My Burning Desire is to....
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                    Something No One Here Knows About Me....
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      My Key To Success....
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
              </div>
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  View Member Weekly Presentation Modal -->
<div class="modal fade" id="staticBackdropfourteen" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► View Member Weekly Presentation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading" style="margin-bottom: 10px;">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► View Member Weekly Presentation</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
         
        </div>
        
        
        <div>
          
          
              <div class="col-md-12 roster-second-heading">
                
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Name
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      My Weekly Presentation
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                
                
                
              </div>
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  View Member GAINS Modal -->
<div class="modal fade" id="staticBackdropfifteen" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► View Member GAINS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading" style="margin-bottom: 10px;">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► View Member GAINS</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
         
        </div>
        
        
        <div>
         
          <div class="col-md-12 roster-second-heading">
                
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Name:
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Phone:
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                       Cell
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Goals:
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Accomplishments
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Interests
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                       Networks
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Skills
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                
              </div>
           
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  View Member TOPS Modal -->
<div class="modal fade" id="staticBackdropsixteen" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► View Member TOPS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading" style="margin-bottom: 10px;">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► View Member TOPS</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
         
        </div>
        
        
               <div class="col-md-12 roster-second-heading">
                
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Name
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Ideal Referral
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Top Product
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                      Top Problem Solved
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                        My Favourite BNI Story
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

                  
                    <div class="col-md-6">
                       My Ideal Referral Partner
                    </div>
                    <div  class="col-md-6">
                      data
                    </div>
                  
                  
                </div>
                
                
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Sponsor Report modal-->
<div class="modal fade" id="staticBackdropseventeen" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1024px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Sponsor Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Sponsor Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
          
          
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                 chapter:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  From:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  To:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            
        </div>  
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2"><?= translate('sponsor_name')?></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle"><?= translate('total_member_sponsered')?></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle"><?= translate('sponsored_name')?></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle"><?= translate('sponsored_region')?></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle"><?= translate('sponsered_chapter')?></th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle"><?= translate('appilcation_date')?></th>
                  </tr>
                
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- VP Report modal-->
<div class="modal fade" id="staticBackdropeighteen" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1288px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► VP Report One Month</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► VP Report One Month</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
          
          
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                 chapter:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  Month/Year
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            
            
        </div>
        <div class="col-md-12" style="margin-bottom: 1rem;color: black;font-size:10.35px">
        (GI = Given Inside, GO = Given Outside, GT = Given Total, RI = received Inside, RO = Received Outside, RT = Received Total, A = Attendance, V = Visitors, 1-2-1 = 121's, TYFCB = Thank You for Closed Business)
        </div>  
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="3"><?= translate('member')?></th>
                    <th colspan="7" style="text-align:center;vertical-align:middle">month</th>
                    <th colspan="7" style="text-align:center;vertical-align:middle">month</th>
                    <th colspan="7" style="text-align:center;vertical-align:middle">month</th>
                    <th colspan="9" style="text-align:center;vertical-align:middle">total</th>                    
                  </tr>
                
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                    <th><?= translate('ren._date')?></th>
                    <th>GI</th>
                    <th>GO</th>
                    <th>RI</th>
                    <th>RO</th>
                    <th>V</th>
                    <th>A</th>
                    <th>1 to 1s</th>
                    <th>GI</th>
                    <th>GO</th>
                    <th>RI</th>
                    <th>RO</th>
                    <th>V</th>
                    <th>A</th>
                    <th>1 to 1s</th>
                    <th>GI</th>
                    <th>GO</th>
                    <th>RI</th>
                    <th>RO</th>
                    <th>V</th>
                    <th>A</th>
                    <th>1 to 1s</th>
                    <th>GI</th>
                    <th>GO</th>
                    <th>GT</th>
                    <th>RI</th>
                    <th>RO</th>
                    <th>RT</th>
                    <th>V</th>
                    <th>A</th>
                    <th>1 to 1s</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
        <div>
          <table class="table table-bordered" style="margin-top: -19px;">
                <thead>
                                 
                  <tr>
                    <th style="width: 146px;">member</th>
                    <th><?= translate('ren._date')?></th>
                    <th>GI</th>
                    <th>GO</th>
                    <th>RI</th>
                    <th>RO</th>
                    <th>V</th>
                    <th>A</th>
                    <th>1 to 1s</th>
                    <th>GI</th>
                    <th>GO</th> 
                    <th>RI</th>
                    <th>RO</th>
                    <th>V</th>
                    <th>A</th>
                    <th>1 to 1s</th>
                    <th>GI</th>
                    <th>GO</th>
                    <th>RI</th>
                    <th>RO</th>
                    <th>V</th>
                    <th>A</th>
                    <th>1 to 1s</th>
                    <th>GI</th>
                    <th>GO</th>
                    <th>GT</th>
                    <th>RI</th>
                    <th>RO</th>
                    <th>RT</th>
                    <th>V</th>
                    <th>A</th>
                    <th>1 to 1s</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="background-color: #f6bf58;">
                    <td colspan="2"><?= translate('weekly_total')?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr style="background-color: #f6bf58;">
                    <td colspan="2"><?= translate('month_to_date')?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr style="background-color: #f6bf58;">
                    <td colspan="2"><?= translate('cumulative_total')?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                        <td colspan="2"></td>
                        <td colspan="7"></td>
                        <td colspan="7"></td>
                        <td colspan="7"></td>
                        <td  colspan="9"></td>
                  </tr>
                  <tr style="background-color: #f6bf58;">
                        <td colspan="2"><?= translate('tYFCB')?></td>
                        <td colspan="7" style="text-align:center">sdsdsds</td>
                        <td colspan="7" style="text-align:center">dsddsdsd</td>
                        <td colspan="7" style="text-align:center">dsdsd</td>
                        <td  colspan="9" style="text-align:center">ddsssdd</td>
                  </tr>
                </tbody>
          </table>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--Cummulative VP Report modal-->
<div class="modal fade" id="staticBackdropninteen" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1024px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Cummulative VP Report One Month</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Cummulative VP Report One Month</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading" style="padding: 10px;">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
          
          
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                 chapter:
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  from
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  to
                </div>
                <div>
                  fgfgf
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            
            
        </div>
          
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="3"><?= translate('member')?></th>
                    <th colspan="8" style="text-align:center;vertical-align:middle">month</th>
                    <th colspan="8" style="text-align:center;vertical-align:middle">month</th>                   
                  </tr>
                
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                    <th><?= translate('ren._date')?></th>
                    <th>GI</th>
                    <th>GO</th>
                    <th>RI</th>
                    <th>RO</th>
                    <th>V</th>
                    <th>A</th>
                    <th>L</th>
                    <th>1 to 1s</th>
                    <th>GI</th>
                    <th>GO</th>
                    <th>RI</th>
                    <th>RO</th>
                    <th>V</th>
                    <th>A</th>
                    <th>L</th>
                    <th>1 to 1s</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
        <div>
          <table class="table table-bordered" style="margin-top: -19px;">
                <thead>
                                 
                  <tr>
                    <th style="width: 256px;">member</th>
                    <th><?= translate('ren._date')?></th>
                    <th>GI</th>
                    <th>GO</th>
                    <th>RI</th>
                    <th>RO</th>
                    <th>V</th>
                    <th>A</th>
                    <th>L</th>
                    <th>1 to 1s</th>
                    <th>GI</th>
                    <th>GO</th> 
                    <th>RI</th>
                    <th>RO</th>
                    <th>V</th>
                    <th>A</th>
                    <th>L</th>
                    <th>1 to 1s</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="background-color: #f6bf58;">
                    <td colspan="2"><?= translate('weekly_total')?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr style="background-color: #f6bf58;">
                    <td colspan="2"><?= translate('month_to_date')?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr style="background-color: #f6bf58;">
                    <td colspan="2"><?= translate('cumulative_total')?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                        <td colspan="2"></td>
                        <td colspan="8"></td>
                        <td colspan="8"></td>
                  </tr>
                  <tr style="background-color: #f6bf58;">
                        <td colspan="2"><?= translate('tYFCB')?></td>
                        <td colspan="8" style="text-align:center">sdsdsds</td>
                        <td colspan="8" style="text-align:center">dsddsdsd</td>
                  </tr>
                </tbody>
          </table>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- PALMS Attendance Report modal-->
<div class="modal fade" id="staticBackdroptwenty" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► PALMS Attendance Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► PALMS Attendance Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export without Headers</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
            </div>
          </div>
          <div class="col-md-8 roaster-first-subheading">
            <div>
             <div style="color: #4B4B4B;">Running User</div>
             <div style="font-weight:bold">name</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">Run At</div>
             <div style="font-weight:bold">date and time</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">country</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">region</div>
             <div style="font-weight:bold">place</div>
            </div>
            <div>
             <div style="color: #4B4B4B;">chapter</div>
             <div style="font-weight:bold">chapter-name</div>
            </div>
           
          </div>
        </div>
        <div class="col-md-12 roster-second-heading">
            <div class="col-md-12" style="border-bottom:1px solid white;padding: 0.2rem;margin-left: 3.5px;">
              Parameters:
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  Chapter:
                </div>
                <div>
                  
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  from:
                </div>
                <div>
                  
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
            <div class="col-md-12" style="border-bottom: 1px solid white;display: flex;justify-content: space-around;padding: 0.2rem;">

              <div class="col-md-6" style="display:flex;justify-content:space-between">
                <div>
                  to:
                </div>
                <div>
                  
                </div>
              </div>
              <div class="col-md-6"></div>
            </div>
        </div>
        
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2">Member Name</th>
                    <th colspan="4" style="text-align:center;vertical-align:middle">month</th>
                    <th colspan="4" style="text-align:center;vertical-align:middle">month</th>
                    <th colspan="4" style="text-align:center;vertical-align:middle">month</th>
                    <th colspan="4" style="text-align:center;">month</th>
                    <th colspan="4" style="text-align:center;">month</th>
                    <th colspan="4" style="text-align:center;">month</th>
                    <th colspan="4" style="text-align:center;">month</th>
                  </tr>
               
                  <tr>
                    <th>Sort First</th>
                    <th>Sort Last</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal">Close</button>
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
        function printPage() {
            window.print();
        }
</script>
<script>
    function changeSection(tabId, event) {
        // Prevent the default action of the click event
        event.preventDefault();

        // Your existing code to open the tab goes here
        // ...
    }
</script>
<style>
    :root{
        --blackColor:#000;
        --purpleColor:#4D2D6B;
        --whiteColor:#fff;
        --lightGrey:#d9d9d9;
        --charCoal:#333333;
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
        .heaading-container{
            font-weight: bold;
            background-color: var(--lightGrey);
            color: var(--charCoal);
            padding: 10px;
            border-radius:10px 10px 0 0;
            border:1px solid #8b8c89;
        }
        .chapter-cotainer{
            border: 1px solid #333;
            margin-left: 43px;
            padding: 0px;
            font-size: 1.35rem;
            padding: 10px;
            background-color: #f3f3f3;
            border-top: none;
            border-bottom: none;
        }
    .content-button{
    background-color: #38285F;
    color: #fff;
    border: none;
    padding: 3px 12px;
    border-radius: 5px;
    font-size:1.3rem;
  }
  .roster-first-heading{
    background-color: #D7D7D7;
    color: var(--blackColor);
    padding: 1.5rem;
    border-radius:10px;
  }
  .roster-heading{
      display: flex;
      justify-content: space-between;
  }
  .roaster-first-subheading{
    display:flex;
    justify-content:space-between
  }
  .roster-second-heading{
    margin-top: 10px;
    padding: 1rem;
    background-color: #CBD0D2;
    border-radius:5px;
    color: var(--blackColor);
    margin-bottom: 10px;
  }
  #container .table-bordered, #container .table-bordered td, #container .table-bordered th {
      border-color: rgb(228 225 225);
      margin-top: 10px;
  }
  .table-bordered thead{
    background-color: #38285F;
  }
  #container .table th {
      font-size: 1.05em;
      font-weight: 600;
      border-bottom: 1px solid white;
      color:#fff;
  }
  tbody tr{
    color: #000;
    transition:0.25s ease-in background-color;
  }
  tbody tr:hover{
    background-color: #ffe97f;
  }
  .border-box{
    border:1px solid var(--blackColor);
  }
  .border-content{
    display:flex;
    justify-content:space-between;
    border-bottom: 1px solid var(--blackColor);
    color:var(--blackColor);
    padding-inline: 4px;
    padding-top: 5px;
    transition:0.15s ease-in background-color;
  }
  .border-content:hover{
    background-color: #FFE15C;
  }
</style>
<style>
/* Updated styles for custom tabs */
ul.custom-tabs {
  list-style: none;
  padding: 0;
  margin: 0;
  display: block;
}

ul.custom-tabs li {
  margin-right: 10px;
  padding: 8px 12px;
  background-color: #eee;
  border: 1px solid #ccc;
  cursor: pointer;
}

ul.custom-tabs li:hover {
  background-color: #ddd;
}

/* Hide all custom tab content by default */
.custom-tab-content {
  display: none;
}

/* Show the selected custom tab content */
.custom-tab-content.active {
  display: block;
}
.tab-container{
    padding: 10px;
    border:1px solid #8b8c89;
    border-top:none;
    overflow-y:scroll;
    overflow-x:hidden;
    height: 400px;
}
.tab-container ul{
    list-style-type:none;
    color: #000;
    cursor:pointer;
    line-height:35px;
    font-size:1.35rem;
}
.tab-content-container{
    border:1px solid #8b8c89;
    border-top:none;
    height: 400px;
    padding: 10px;
}
.left-heading{
    display:flex;
    justify-content:space-between;
    color: #6c757d;
    border-bottom:1px solid #ced4da;
    padding-bottom: 5px;
    font-size: 1.25rem;
}
.required{
    margin-inline:10px;
    color: red;
}
.form-container{
    border-bottom: 1px solid #ced4da;
    padding: 10px 88px;
    overflow: overlay;
}
.form-container .input{
    width: 200px;
    border:1px solid #adb5bd;
    border-radius:5px;
    height: 30px;
    color: #000;
}
input:focus{
    outline:none;
}
.form-button{
    text-align:center;
    margin: 10px;
}
.form-button button{
    background-color: var(--purpleColor);
    color: var(--whiteColor);
    padding: 6px 12px;
    border-radius: 6px;
    border: none;
}

</style>
<script>

  function changeSection(sectionId) {
    // Hide all section content
    document.querySelectorAll('.section-content').forEach(function(section) {
      section.classList.remove('active');
    });

    // Show the selected section content
    document.getElementById(sectionId).classList.add('active');
  }

  function goBack(parentSectionId) {
    // Hide all section content
    document.querySelectorAll('.section-content').forEach(function(section) {
      section.classList.remove('active');
    });

    // Show the parent section content
    document.getElementById(parentSectionId).classList.add('active');
  }
</script>
<style>
    /* Basic styling for the sections */
    .sections-container {
      display: flex;
    }

    .section {
      margin-right: 10px;
      padding: 8px 12px;
      background-color: #eee;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .section:hover {
      background-color: #ddd;
    }

    /* Hide all section content by default */
    .section-content {
      display: none;
    }

    /* Show the selected section content */
    .section-content.active {
      display: block;
    }

    /* Back button styling */
    .back-button {
      margin-top: 10px;
      cursor: pointer;
      color: blue;
      text-decoration: underline;
    }
</style>
<style>
    .steps {
      display: flex;
      justify-content: space-between;
      margin: 20px;
    }

    .step {
      flex: 1;
      padding: 10px;
      text-align: center;
      background-color: #ddd;
      cursor: pointer;
    }

    .step.active {
      background-color: #bbb;
    }

    

    .btn-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .btn-one {
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    .btn-one:disabled {
      background-color: #ddd;
      cursor: not-allowed;
    }
    .box-container{
    display: grid;
    place-content: baseline;
    grid-template-columns: 1fr 1fr;
    padding: 10px;
    }
    .box{
        padding: 10px;
        margin: 10px;
        background-color: #ACC8E5;
        color: #112A46;
        border:1px solid transparent;
        transition: 0.35s ease-in background-color, 0.35s ease-in color;

    }
    .box a{
        color: #112A46;
    }
    .box:hover{
        border:1px solid var(--lightGrey);
        background-color: #fff;
    }
    .box a:hover{
        color: #000;
    }
</style>
<script>
  function changeStep(stepNumber) {
    // Hide all steps and content
    for (let i = 1; i <= 2; i++) {
      document.getElementById('content' + i).style.display = 'none';
    }

    // Show the selected step and content
    document.getElementById('content' + stepNumber).style.display = 'block';
  }
</script>
<script>
  function changeTab(tabId) {
    // Hide all custom tab content
    document.querySelectorAll('.custom-tab-content').forEach(function(tab) {
      tab.classList.remove('active');
    });

    // Show the selected custom tab content
    document.getElementById(tabId).classList.add('active');
  }
</script>
