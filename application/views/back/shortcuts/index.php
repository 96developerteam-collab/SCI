<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('shortcuts')?></h1>
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
                                <li class="tab tab2" onclick="printPage()"><img src="<?= base_url()?>nav-icon-print.svg" alt=""></li>
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
			<li><a href="#"><?= translate('shortcuts')?></a></li>

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
			
		        <h3 class="panel-title"><?= translate('shortcuts')?></h3>
				</div>
                <div class="col-md-12">
                    <hr style="border-color:#CBCBCB;margin: 0;">
                </div>
		      
		    </div>
		    <div class="panel-body">
	    		          <div class="col-md-5 content" style="border-right:1px solid #CBCBCB">
                     <ul>
                        <li>❓ <a href="<?= base_url()?>admin/registration_portal" title="<?= translate('visited_registration_portal')?>"><?= translate('visited_registration_portal')?></a></li>
                        <li>❓ <a href="<?= base_url()?>admin/palms_summary" title="<?= translate('view_PALMS_summary')?>"><?= translate('view_PALMS_summary')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('view_chapter_goal')?>" data-toggle="modal" data-target="#staticBackdrop"><?= translate('view_chapter_goal')?></a></li>
                        <li>❓ <a href="<?= base_url()?>admin/operation_mentor" title="<?= translate('view_mentor_/_mentee')?>"><?= translate('view_mentor_/_mentee')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('email_my_chapter')?>"  data-toggle="modal" data-target="#staticBackdropmone"><?= translate('email_my_chapter')?></a></li>
                        <li>❓ <a href="<?= base_url()?>admin/email_invition" title="<?= translate('email_visitor_invitation')?>"><?= translate('email_visitor_invitation')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('membership_dues_report')?>" onclick="openTab('tab0', event)"><?= translate('membership_dues_report')?></a></li>
                        <li>❓ <a href="<?= base_url()?>admin/email_visitors" title="<?= translate('email_chapter_vistors')?>" ><?= translate('email_chapter_vistors')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('chapter_roster_report')?>" onclick="openTab('tab1', event)"><?= translate('chapter_roster_report')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('summary_PALMS_report')?>" onclick="openTab('tab5', event)"><?= translate('summary_PALMS_report')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('member_training_report')?>"  onclick="openTab('tab2', event)"><?= translate('member_training_report')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('meeting_notes_report')?>" onclick="openTab('tab3', event)"><?= translate('meeting_notes_report')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('classification_not_in_chapter')?>" onclick="openTab('tab4', event)"><?= translate('classification_not_in_chapter')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('absence_report')?>" onclick="openTab('tab6', event)"><?= translate('absence_report')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('speaker_report')?>" onclick="openTab('tab7', event)"><?= translate('speaker_report')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('regional_leadership_report')?>"  onclick="openTab('tab8', event)"><?= translate('regional_leadership_report')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('personal_PALMS_report')?>"  onclick="openTab('tab9', event)"><?= translate('personal_PALMS_report')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('member_details(4&nbsp;report)')?>" onclick="openTab('tab13', event)"><?= translate('member_details(4&nbsp;report)')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('chapter_vistor_report')?>"  onclick="openTab('tab10', event)"><?= translate('chapter_vistor_report')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('chapter_traffic_lights')?>"  onclick="openTab('tab11', event)"><?= translate('chapter_traffic_lights')?></a></li>
                        <li>❓ <a href="#" title="<?= translate('length&nbsp;of_membership_report')?>" onclick="openTab('tab12', event)"><?= translate('length&nbsp;of_membership_report')?></a></li>
                      </ul>
                    </div>
                    <div class="col-md-7">
                      <div class="tab-container">
                        
                        
                        <div id="tab0" class="tab-content">
                         <div class="tab-handing">
                            <h5>Chapter ► Membership Dues Report</h5>
                         </div>
                         <!-- <form action="" method="post"> -->
                            <div class="tab-content-middle">
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="member_start_date">Report date</label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:14px" name="member_start_date" id="member_start_date" required>
                              </div>
                           </div>
                           <div class="tab-content-below">
                              <button class="content-button" data-toggle="modal" data-target="#staticBackdropzero"><?= translate('go')?></button>
                           </div>
                         <!-- </form> -->
                        </div>
                        <div id="tab1" class="tab-content">
                         <div class="tab-handing">
                            <h5>Chapter ► Roster Report</h5>
                         </div>
                         <div class="tab-content-below">
                            <button class="content-button" data-toggle="modal" data-target="#staticBackdropone"><?= translate('go')?></button>
                         </div>
                        </div>
                        
                        <div id="tab2" class="tab-content">
                         <div class="tab-handing">
                            <h5>Chapter ► <?= translate('member_training')?></h5>
                         </div>
                         <!-- <form action="" method="post"> -->
                           <div class="tab-content-middle">
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="member_start_date">Start date</label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:14px" name="member_start_date" id="member_start_date" required>
                              </div>
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="member_end_date">End date</label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:14px" name="member_end_date" id="member_end_date" required>
                              </div>
                             
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="member_event_type">Event Types</label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <select multiple  id="member_event_type" name="member_event_type" style="width: 184px;border-radius:5px" required>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>
                              </div>
  
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="">Show Never Attended</label>
                                 <input type="checkbox" style="margin-inline:5px">
                                 <label style="width: 224px;">The date fields are disregarded when running the report for members who have not attended any training event.</label>
                              </div>
                           </div>
                           <div class="tab-content-below">
                              <button class="content-button" data-toggle="modal" data-target="#staticBackdroptwo"><?= translate('go')?></button>
                           </div>
                         <!-- </form> -->
                        </div>
                        <div id="tab3" class="tab-content">
                         <div class="tab-handing">
                            <h5>Chapter ► Meeting Notes Report</h5>
                         </div>
                         <div class="tab-content-below">
                            <button class="content-button" data-toggle="modal" data-target="#staticBackdropthree"><?= translate('go')?></button>
                         </div>
                        </div>
                        <div id="tab4" class="tab-content">
                         <div class="tab-handing">
                            <h5>Chapter ► Classifications Not In Chapter</h5>
                         </div>
                         <div class="tab-content-below">
                            <button class="content-button" data-toggle="modal" data-target="#staticBackdropfour"><?= translate('go')?></button>
                         </div>
                        </div>
                        <div id="tab5" class="tab-content">
                         <div class="tab-handing">
                            <h5>Chapter ► Summary PALMS Report</h5>
                         </div>
                         <!-- <form action="" method="post"> -->
                           <div class="tab-content-middle">
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="summary_start_date"><?= translate('Start date')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:14px" name="summary_start_date" id="summary_start_date" required>
                              </div>
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="summary_end_date"><?= translate('End date')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:14px" name="summary_end_date" id="summary_end_date" required>
                              </div>
                             
                              
  
                              <div style="display: flex;justify-content: start;padding: 1rem;border-bottom: 1px solid;">
                                <label for="summary_check" style="width: 239px;">Show Dropped Member Names? (All member contributions will always be included in the totals)</label>
                                <input type="checkbox" name="summary_check" id="summary_check" required>
                              </div>
                           </div>
                           <div class="tab-content-below">
                              <button class="content-button" data-toggle="modal" data-target="#staticBackdropfive"><?= translate('go')?></button>
                           </div>
                         <!-- </form> -->
                        </div>
                        <div id="tab6" class="tab-content">
                         <div class="tab-handing">
                            <h5>Chapter ► Absence Report</h5>
                         </div>
                         <!-- <form action="" method="post"> -->
                           <div class="tab-content-middle">
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="absence_start_date"><?= translate('Start date')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:38px" name="absence_start_end" id="absence_start_end">
                              </div>
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="absence_last_date"><?= translate('End date')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:38px" name="absence_last_date" id="absence_last_date">
                              </div>
                           </div>
                           <div class="tab-content-below">
                              <button class="content-button" data-toggle="modal" data-target="#staticBackdropsix"><?= translate('go')?></button>
                           </div>
                         <!-- </form> -->
                        </div>
                        <div id="tab7" class="tab-content">
                          <div class="tab-handing">
                            <h5>Chapter ► Speaker Report</h5>
                          </div>
                         <!-- <form action="" method="post"> -->
                            <div class="tab-content-middle">
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="speaker_start_date"><?= translate('Start date')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:38px" name="speaker_start_date" id="speaker_start_date">
                              </div>
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="speaker_last_date"><?= translate('End date')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:38px" name="speaker_last_date" id="speaker_last_date">
                              </div>
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="speaker_chapter">Chapter</label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <select multiple  id="speaker_chapter" name="speaker_chapter" style="width: 184px;border-radius:5px" required>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                  </select>
                              </div>
                           </div>
                           <div class="tab-content-below">
                              <button class="content-button" data-toggle="modal" data-target="#staticBackdropseven"><?= translate('go')?></button>
                           </div>
                           
                         <!-- </form> -->
                        </div>
                        <div id="tab8" class="tab-content">
                          <div class="tab-handing">
                            <h5>Chapter ► Regional Leadership Report</h5>
                         </div>
                         <div class="tab-content-below">
                            <button class="content-button" data-toggle="modal" data-target="#staticBackdropeight"><?= translate('go')?></button>
                         </div>
                        </div>
                        <div id="tab9" class="tab-content">
                          <div class="tab-handing">
                              <h5>Personal PALMS Report</h5>
                          </div>
                         <!-- <form action="" method="post"> -->
                           <div class="tab-content-middle">
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="personal_name"><?= translate('member_name')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <select id="personal_name" name="personal_name" style="width: 183px;border-radius:5px;">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>5</option>
                                  <option>5</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="personal_from_month"><?= translate('From Month & Year')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:38px" name="personal_from_month" id="personal_from_month">
                              </div>
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="personal_to_month"><?= translate('To Month & Year')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:38px" name="personal_to_month" id="personal_to_month">
                              </div>
                           </div>
                           <div class="tab-content-below">
                              <button class="content-button" data-toggle="modal" data-target="#staticBackdropnine"><?= translate('go')?></button>
                           </div>
                         <!-- </form> -->
                        </div>
                        <div id="tab10" class="tab-content">
                          <div class="tab-handing">
                              <h5>Chapter ► Chapter Visitor Report</h5>
                          </div>
                         <!-- <form action="" method="post"> -->
                           <div class="tab-content-middle">
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="visitor _start_date"><?= translate('Start date')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:38px" name="visitor _start_end" id="visitor_start_end">
                              </div>
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="visitor_last_date"><?= translate('End date')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:38px" name="visitor_last_date" id="visitor_last_date">
                              </div>
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="visitor_fname"><?= translate('first_name')?></label>
                                 <span style="color: red;margin-inline:6px"> </span>
                                 <input type="type" style="border:1px solid grey;border-radius:4px;padding-inline:18px" name="visitor_fname" id="visitor_fname">
                              </div>
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="visitor_lname"><?= translate('last_name')?></label>
                                 <span style="color: red;margin-inline:6px"> </span>
                                 <input type="type" style="border:1px solid grey;border-radius:4px;padding-inline:18px" name="visitor_lname" id="visitor_lname">
                              </div>
                           </div>
                           <div class="tab-content-below">
                              <button class="content-button" data-toggle="modal" data-target="#staticBackdropten"><?= translate('go')?></button>
                           </div>
                         <!-- </form> -->
                        </div>
                        <div id="tab11" class="tab-content">
                          <div class="tab-handing">
                              <h5>Chapter ► Traffic Lights Report</h5>
                          </div>
                         <!-- <form action="" method="post"> -->
                           <div class="tab-content-middle">
                              <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                 <label for="traffic_report_month"><?= translate('Report Month & Year')?></label>
                                 <span style="color: red;margin-inline:6px">*</span>
                                 <input type="date" style="border:1px solid grey;border-radius:4px;padding-inline:38px" name="traffic_report_month" id="traffic_report_month">
                              </div>
                              
                           </div>
                           <div class="tab-content-below">
                              <button class="content-button" data-toggle="modal" data-target="#staticBackdropeleven"><?= translate('go')?></button>
                           </div>
                         <!-- </form> -->
                        </div>
                          <div id="tab12" class="tab-content">
                            <div class="tab-handing">
                                <h5>Chapter ► Length of Membership Report</h5>
                            </div>
                            <!-- <form action="" method="post"> -->
                            <div class="tab-content-below">
                                <button class="content-button" data-toggle="modal" data-target="#staticBackdroptwelve"><?= translate('go')?></button>
                            </div>
                            <!-- </form> -->
                          </div>
                          <div id="tab13" class="tab-content">
                            
                            <div id="parentSection" class="section-content active">
                              <!-- <p>Content for Parent Section goes here.</p> -->
                              <div class="content">
                                <ul>
                                  <li><a href="#" title="<?= translate(' View Member Bio')?>"  onclick="changeSection('childSection1', event)"><?= translate('View Member Bio')?></a></li>
                                  <li><a href="#" title="<?= translate('View Member Weekly Presentation')?>"   onclick="changeSection('childSection2', event)"><?= translate('View Member Weekly Presentation')?></a></li>
                                  <li><a href="#" title="<?= translate('View Member GAINS')?>" onclick="changeSection('childSection3', event)"><?= translate('View Member GAINS')?></a></li>
                                  <li><a href="#" title="<?= translate('View Member TOPS')?>" onclick="changeSection('childSection4', event)"><?= translate('View Member TOPS')?></a></li>
                                </ul>
                              </div>

                             
                            </div>
                          </div>
                          
                          
                            <!-- Child Section 1 Content -->
                            <div id="childSection1" class="section-content">
                              <div class="tab-handing">
                                  <h5>Chapter ► View Member Bio</h5>
                              </div>
                              <!-- <form action="" method="post"> -->
                                <div class="tab-content-middle">
                                  <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                    <label for="bio_name"><?= translate('member_name')?></label>
                                    <span style="color: red;margin-inline:6px">*</span>
                                    <select id="bio_name" name="bio_name" style="width: 183px;border-radius:5px;">
                                      <option></option>
                                      <option></option>
                                      <option></option>
                                      <option></option>
                                      <option></option>
                                    </select>
                                  </div>
                                  
                              </div>
                              <div class="tab-content-below" style="justify-content: space-around;   margin-inline: 20rem;">
                                  <button class="content-button" data-toggle="modal" data-target="#staticBackdropthirteen"><?= translate('go')?></button>
                                  <button class="content-button" onclick="goBack('parentSection')"><?= translate('back')?></button>
  
                              </div>
                              
                            </div>

                            <!-- Child Section 2 Content -->
                            <div id="childSection2" class="section-content">
                              <div class="tab-handing">
                                  <h5>Chapter ► View Member Weekly Presentation</h5>
                              </div>
                              <!-- <form action="" method="post"> -->
                                <div class="tab-content-middle">
                                    <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                      <label for="weekly_name"><?= translate('member_name')?></label>
                                      <span style="color: red;margin-inline:6px">*</span>
                                      <select id="weekly_name" name="weekly_name" style="width: 183px;border-radius:5px;">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                      </select>
                                    </div>
                                    
                                </div>
                                <div class="tab-content-below" style="justify-content: space-around;   margin-inline: 20rem;">
                                    <button class="content-button" data-toggle="modal" data-target="#staticBackdropfourteen"><?= translate('go')?></button>
                                    <button class="content-button" onclick="goBack('parentSection')"><?= translate('back')?></button>
                                </div>
                              <!-- </form> -->
                              
                            </div>
                            <!-- Child Section 3 Content -->
                            <div id="childSection3" class="section-content">
                              <div class="tab-handing">
                                  <h5>Chapter ► View Member GAINS</h5>
                              </div>
                              <!-- <form action="" method="post"> -->
                                <div class="tab-content-middle">
                                    <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                      <label for="weekly_name"><?= translate('member_name')?></label>
                                      <span style="color: red;margin-inline:6px">*</span>
                                      <select id="weekly_name" name="weekly_name" style="width: 183px;border-radius:5px;">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                      </select>
                                    </div>
                                    
                                </div>
                                <div class="tab-content-below" style="justify-content: space-around;   margin-inline: 20rem;">
                                    <button class="content-button" data-toggle="modal" data-target="#staticBackdropfifteen"><?= translate('go')?></button>
                                    <button class="content-button" onclick="goBack('parentSection')"><?= translate('back')?></button>
                                </div>
                              
                            </div>
                            <!-- Child Section 4 Content -->
                            <div id="childSection4" class="section-content">
                              <div class="tab-handing">
                                  <h5>Chapter ► View Member TOPS</h5>
                              </div>
                              <!-- <form action="" method="post"> -->
                                <div class="tab-content-middle">
                                    <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                                      <label for="weekly_name"><?= translate('member_name')?></label>
                                      <span style="color: red;margin-inline:6px">*</span>
                                      <select id="weekly_name" name="weekly_name" style="width: 183px;border-radius:5px;">
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                      </select>
                                    </div>
                                    
                                </div>
                                <div class="tab-content-below" style="justify-content: space-around;   margin-inline: 20rem;">
                                    <button class="content-button" data-toggle="modal" data-target="#staticBackdropsixteen"><?= translate('go')?></button>
                                    <button class="content-button" onclick="goBack('parentSection')"><?= translate('back')?></button>
                                </div>
                              <!-- </form> -->
                              <!-- <div class="back-button" onclick="goBack('parentSection')">Back to Parent Section</div> -->
                            </div>
                      </div>
                    </div>
                
		    </div>
            
		</div>
	</div>
</div>
<!-- Email My Chapter Modal -->
<div class="modal fade" id="staticBackdropmone" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?= translate('email_my_chapter')?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div style="padding: 10px;border-bottom:1px solid lightgrey">
           <h6>            
             Please copy and paste the list into your email client. Duplicate email addresses have been removed from this list.
           </h6>
          </div>  
          <div style="padding: 10px;border-bottom:1px solid lightgrey">
                <textarea name="" id="" cols="150" rows="10" style="resize:none"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="content-button" data-dismiss="modal"  style="margin-top: 10px;">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- View Chapter Goal Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?= translate('view_chapter_goal')?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12" align="right">
          <div style="border-bottom:1px solid grey">
              <span style="color: red;">*</span> <?= translate('required_field')?>
          </div>
        </div>
        <div class="col-md-12" align="center">
          <!-- <form action="" method="post"> -->
              <div class="tab-content-middle">
                <div style="display: flex;justify-content: center;padding: 1rem;border-bottom: 1px solid;">
                    <label for="traffic_report_month"><?= translate('Report Month & Year')?></label>
                    <span style="color: red;margin-inline:6px">*</span>
                      <input type="month" style="border:1px solid grey;border-radius:4px;padding-inline:38px" name="traffic_report_month" id="traffic_report_month">
                </div>                              
              </div>
              <div class="tab-content-below">
                 <button class="content-button"><?= translate('go')?></button>
               </div>
               <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter &#x25B8; Chapter Roster Report</h5>
            </div>
            <div style="margin-top: 8px;">
              <button class="content-button">Export wihtout Header</button>
              <button class="content-button">Export</button>
              <button class="content-button">Print</button>
              <button class="content-button">back</button>
            </div>
          </div>
          <div class="col-md-6 roaster-first-subheading">
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
        <div >
          <table class="table table-bordered" style="margin-top: 117px;">
            <thead>
              <tr>
                <th><?= translate('long_term_vision')?></th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td style="color:black">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, minus.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div >
          <table class="table table-bordered" style="margin-top: 14px;">
            <thead>
              <tr>
                <th><?= translate('mission_statment')?></th>
              </tr>
            </thead>
            <tbody>
              
              <tr>
                <td style="color:black">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor excepturi temporibus autem, ut ratione iure nostrum explicabo repellat dolores esse mollitia consequatur suscipit sunt voluptatem. Similique aliquid itaque ex ullam iste voluptatum quis fugiat! Ullam aliquam, expedita tempore voluptatibus minima consequatur, labore rerum deserunt rem cum id dolore consectetur modi?</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div>
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="">Attendance Percentage</th>
                    <th style="">date</th>
                    <th style="">date</th>
                    <th style="">date</th>
                    <th style="">date</th>
                    <th style="">date</th>
                    <th style="">date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Goal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Actual</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th colspan="7">Total Number of 1 to 1s</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Goal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Actual</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
                <thead>
                  <tr><th colspan="7">CEUs (Chapter Education Units)</th></tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Goal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Actual</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th colspan="7">Visitors</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Goal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Actual</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th colspan="7">New Memberships</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Goal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Actual</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th colspan="7">Number of Members in Chapter</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Goal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Actual</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th colspan="7">Number of Referrals</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Goal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Actual</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>                   
                  </tr>
                  <tr>
                    <td>Mechanism 2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th colspan="7">Thank You for Closed Business</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Goal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Actual</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Mechanism 2</td>
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
              <!-- </form> -->
        </div>
        
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!-- Member Dues Report Modal -->
<div class="modal fade" id="staticBackdropzero" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <th colspan="2">Member Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Classification</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Company Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Phone</th>
                    <th rowspan="2" style="text-align:center;">Data shows last 90 days</th>
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
<!-- Chapter Roster Report Modal -->
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
<!-- Summary PALMS Report Modal -->
<div class="modal fade" id="staticBackdropfive" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
<!-- Member Training Report Modal -->
<div class="modal fade" id="staticBackdroptwo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chapter ► Member Training</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 roster-first-heading">
          <div class="col-md-12 roster-heading">
            <div>
              <h5>Chapter ► Member Training</h5>
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
                  Events:
                </div>
                <div>
                  
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
                    <th colspan="2">Member Name</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Event Date</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Event Type</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Role</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Join Date</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Phone</th>
                    <th rowspan="2" style="text-align:center;vertical-align:middle">Email</th>
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
<div class="modal fade" id="staticBackdropfour" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
<!-- Absence Report Modal -->
<div class="modal fade" id="staticBackdropsix" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
        <!-- <div class="col-md-12 roster-second-heading">
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
        </div> -->
        
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
</style>
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
<script>
	setTimeout(function() {
	    $('#success_alert').fadeOut('fast');
	    $('#danger_alert').fadeOut('fast');
	}, 5000); // <-- time in milliseconds
</script>
<script>
  // Open the first tab automatically when the page loads
document.addEventListener("DOMContentLoaded", function() {
  openTab('tab1');
});

function openTab(tabName, event) {
  event.preventDefault(); // Prevent the default behavior of the anchor tag
  
  var i, tabContent;
  tabContent = document.getElementsByClassName("tab-content");

  for (i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
  }

  var currentTab = document.getElementById(tabName);

  // If the content is not already loaded, load it dynamically
  if (!currentTab.innerHTML.trim()) {
    // Replace the next line with your content loading logic
    currentTab.innerHTML = "<h2>Content for " + tabName + "</h2><p>This is the dynamic content for " + tabName + ".</p>";
  }

  currentTab.style.display = "block";
}

</script>
<script>
        function printPage() {
            window.print();
        }
</script>
<style>
  .tab-container {
  display: flex;
  flex-direction: column;
  /* max-width: 600px; */
  margin: 0px auto;
}



.tab-content {
  display: none;
  padding: 10px;
  
}

.tab-content h2 {
  color: #333;
}

.tab-content p {
  color: #666;
}
</style>

<style>
    :root{
      --blackColor:#000;
    }
    ul {
       list-style-type: none; 
    }
    .content ul{
        padding: 7.5px;
    }
    .content ul{
        font-size:1.3rem;
        line-height:2.5;
    }
    .content ul a{
        color: #312876;
        font-weight: bold;
    }
    .content ul a:hover{
        color: #28762C;
    }

   .tab-handing{
    border-bottom:1px solid #D2D2D2;
   }
   .tab-content-below{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem;
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
  input:focus, select:focus{
    border:1px solid grey;
    outline:none;
  }
  .table-bottom{
    background-color: #F8AB36;
    color: var(--blackColor);
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