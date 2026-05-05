<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('my_business')?></h1>
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
			<li><a href="#"><?= translate('my_business')?></a></li>

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
							<div class="col-md-4" align="left" style="margin: 5px 0px 0px -10px;">
								<h3 class="panel-title"><?= translate('my_business')?></h3>						
							</div>
							<div class="col-md-4" align="left" style="margin: 5px 0px 0px -10px;">
								<a href="#" class="personal-paricipant" data-toggle="modal" data-target="#exampleModal"><h3 class="panel-title"><?= translate('my_personal_participation_report')?></h3></a>
							</div>
							<div class="col-md-4" align="right" style="margin: 5px 0px 0px -10px;">
								<h3 class="panel-title"><?= translate('Renewal Due Date: ')?></h3>						
							</div>
					
							<div class="col-md-12">
								<hr class="underLiner">
							</div>
						</div>
		    			<div class="panel-body">
	    		

					
							<div class="col-md-12 main-note">
								Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum fugiat facere eaque non? Reiciendis, temporibus modi rerum aliquid consequatur impedit sunt enim repudiandae omnis eos nulla. Ipsum expedita eaque deserunt qui quas dignissimos, tempore amet. Commodi rem, ducimus fugit voluptatem nemo ipsa, dolores officiis ipsam excepturi similique quod, repellendus reiciendis.
							</div>
							<div class="col-md-12 main-head">
								<div class="col-md-4 "></div>
								<div class="col-md-4" align="right">Last 12 Months</div>
								<div class="col-md-4" align="right">Lifetime</div>
							</div>
							<div class="col-md-12 middle-content">
								<div class="col-md-4 extra-text">Revenue Received To My Business:</div>
								<div class="col-md-4 middle-text" align="right">100</div>
								<div class="col-md-4 middle-text" align="right">10</div>
							</div>
							<div class="col-md-12 middle-content">
								<div class="col-md-4 extra-text">TYFCB Given:</div>
								<div class="col-md-4 middle-text" align="right">100</div>
								<div class="col-md-4 middle-text" align="right">10</div>
							</div>
							<div class="col-md-12 middle-content">
								<div class="col-md-4 extra-text">Referrals Given:</div>
								<div class="col-md-4 middle-text" align="right">100</div>
								<div class="col-md-4 middle-text" align="right">10</div>
							</div>
							<div class="col-md-12 middle-content">
								<div class="col-md-4 extra-text">Visitor:</div>
								<div class="col-md-4 middle-text" align="right">100</div>
								<div class="col-md-4 middle-text" align="right">10</div>
							</div>
							<div class="col-md-12 middle-content">
								<div class="col-md-4 extra-text">One-to-Ones:</div>
								<div class="col-md-4 middle-text" align="right">100</div>
								<div class="col-md-4 middle-text" align="right">10</div>
							</div>
							<div class="col-md-12 middle-content">
								<div class="col-md-4 extra-text">CEUs:</div>
								<div class="col-md-4 middle-text" align="right">100</div>
								<div class="col-md-4 middle-text" align="right">10</div>
							</div>
							<div class="col-md-12 bottom-content">
								<div class="col-md-4 bottom-right-content">
									<ul>
										<li>❓<a href="#" data-toggle="modal" data-target="#staticBackdropone" title="Submit TYFCB Slips"><?= translate('submit_TYFCB_slips')?></a></li>
										<li>❓<a href="#"  data-toggle="modal" data-target="#staticBackdroptwo" title="Submit Referral Slips"><?= translate('submit_referral_slips')?></a></li>
										<li>❓<a href="#" data-toggle="modal" data-target="#staticBackdropthree" title="Submit One To One Slips"><?= translate('submit_one_to_one_slips')?></a></li>
										<li>❓<a href="#"data-toggle="modal" data-target="#staticBackdropfour" title="Submit CEU Slips"><?= translate('submit_CEU_slips')?></a></li>
										<li>❓<a href="<?= base_url()?>admin/tracked" title="Track Your Referrals Received Online"><?= translate('track_your_referrals_received_online')?></a></li>
										<li>❓<a href="#" onclick="openTab('tab1',event)" title="Review My TYFCB Slips"><?= translate('review_my_TYFCB_slips')?></a></li>
										<li>❓<a href="#" onclick="openTab('tab2',event)" title="Review My Referral Slips"><?= translate('review_my_referral_slips')?></a></li>
										<li>❓<a href="#" onclick="openTab('tab3',event)" title="Review My One To One Slips"><?= translate('review_my_one_to_one_slips')?></a></li>
										<li>❓<a href="#" onclick="openTab('tab4',event)" title="Review My CEU Slips"><?= translate('review_my_CEU_slips')?></a></li>
										<li>❓<a href="#" onclick="openTab('tab5',event)" title="Received Referral Report"><?= translate('received_referral_report')?></a></li>
										<li>❓<a href="#" onclick="openTab('tab6',event)" title="Print Your Weekly Slips"><?= translate('print_your_weekly_slips')?></a></li>
										
									</ul>
								</div>
								<div class="col-md-8">
									<div class="tab-container">
									
										<div id="tab1" class="tab-content">
											<div class="extra-container">
												<div class="extra-content">Chapter : TYFCB Given Report</div>
												<div class="extra-content-one"><span class="important" style="margin-right: 2px;">*</span><?= translate("required_field")?></div>
											</div>
											<!-- <form action="" method="post"> -->
												<div class="extra-content-container">
													<label for="tyfcb_start_name" style=""><?= translate('start_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" name="tyfcb_start_name" id="tyfcb_start_name">
												</div>
												<div class="extra-content-container">
													<label for="tyfcb_end_name" style=""><?= translate('end_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" name="tyfcb_end_name" name="tyfcb_end_name">
												</div>
												<div style="display: flex;justify-content: center;padding: 1rem;">

													<button class="top-button" data-toggle="modal" data-target="#staticBackdropfive"><?= translate('go')?></button>
												</div>
											<!-- </form> -->
										</div>
										<div id="tab2" class="tab-content">
											<div class="extra-container">
												<div class="extra-content">Chapter : Referrals Given Report</div>
												<div class="extra-content-one"><span class="important" style="margin-right: 2px;">*</span><?= translate("required_field")?></div>
											</div>
											<!-- <form action="" method="post"> -->
												<div class="extra-content-container">
													<label for="referrals_start_date" style=""><?= translate('start_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" name="referrals_start_date" id="referrals_start_date">
												</div>
												<div class="extra-content-container">
													<label for="referrals_end_date" style=""><?= translate('end_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" name="referrals_end_date" id="referrals_end_date">
												</div>
												<div style="display: flex;justify-content: center;padding: 1rem;">

													<button class="top-button" data-toggle="modal" data-target="#staticBackdropsix"><?= translate('go')?></button>
												</div>
											<!-- </form> -->
										</div>
										<div id="tab3" class="tab-content">
											<div class="extra-container">
												<div class="extra-content">Chapter : One to One Report</div>
												<div class="extra-content-one"><span class="important" style="margin-right: 2px;">*</span><?= translate("required_field")?></div>
											</div>
											<!-- <form action="" method="post"> -->
												<div class="extra-content-container">
													<label for="oneToone_start_date" style=""><?= translate('start_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" name="oneToone_start_date" id="oneToone_start_date">
												</div>
												<div class="extra-content-container">
													<label for="oneToone_end_date" style=""><?= translate('end_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" id="oneToone_end_date" name="oneToone_end_date">
												</div>
												<div style="display: flex;justify-content: center;padding: 1rem;">

													<button class="top-button" data-toggle="modal" data-target="#staticBackdropseven"><?= translate('go')?></button>
												</div>
											<!-- </form> -->
										</div>
										<div id="tab4" class="tab-content">
											<div class="extra-container">
												<div class="extra-content">Chapter : CEU Report</div>
												<div class="extra-content-one"><span class="important" style="margin-right: 2px;">*</span><?= translate("required_field")?></div>
											</div>
											<!-- <form action="" method="post"> -->
												<div class="extra-content-container">
													<label for="ceu_start_date" style=""><?= translate('start_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" name="ceu_start_date" id="ceu_start_date">
												</div>
												<div class="extra-content-container">
													<label for="ceu_end_date" style=""><?= translate('end_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" name="ceu_end_date" id="ceu_end_date">
												</div>
												<div style="display: flex;justify-content: center;padding: 1rem;">

													<button class="top-button" data-toggle="modal" data-target="#staticBackdropeight"><?= translate('go')?></button>
												</div>
											<!-- </form> -->
										</div>
										<div id="tab5" class="tab-content">
											<div class="extra-container">
												<div class="extra-content">Referral Tracking Report</div>
												<div class="extra-content-one"><span class="important" style="margin-right: 2px;">*</span><?= translate("required_field")?></div>
											</div>
											<!-- <form action="" method="post"> -->
												<div class="extra-content-container">
													<label for="tracking_report_start_date" style=""><?= translate('start_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" id="tracking_report_start_date" name="tracking_report_start_date">
												</div>
												<div class="extra-content-container">
													<label for="tracking_report_end_date" style=""><?= translate('end_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" name="tracking_report_end_date" id="tracking_report_end_date">
												</div>
												<div style="display: flex;justify-content: center;padding: 1rem;">

													<button class="top-button" data-toggle="modal" data-target="#staticBackdropnine"><?= translate('go')?></button>
												</div>
											<!-- </form> -->
										</div>
										<div id="tab6" class="tab-content">
											<div class="extra-container">
												<div class="extra-content">
													Chapter : Personal Meeting Activity Sheet
												</div>
												<div class="extra-content-one">
													<span class="important" style="margin-right: 2px;">*</span>
													<?= translate("required_field")?>
												</div>
											</div>
											<!-- <form action="" method="post"> -->
												<div class="extra-content-container">
													<label for="personal_meeting_start_date" style=""><?= translate('start_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" name="personal_meeting_start_date" id="personal_meeting_start_date">
												</div>
												<div class="extra-content-container">
													<label for="personal_meeting_end_date" style=""><?= translate('end_date')?><span class="important" style="margin-inline: 1rem;">*</span></label>
													<input type="date" style="border-radius:5px;border: 1px solid #8F979F;padding-inline:5.5rem" name="personal_meeting_end_date" id="personal_meeting_end_date">
												</div>
												<div class="extra-content-container" style="display:block;">
														<div class="form-check" style="display:flex;justify-content:center;">
															<label class="form-check-label" for="personal_meeting_slip" style="margin-top: 10px;margin-right: 10px;">
																<?= translate('slip')?>
															</label>
															<input class="form-check-input" type="radio" name="personal_meeting_type" id="personal_meeting_slip" value="slip">
														</div>
														<div class="form-check" style="display:flex;justify-content:center;">
															<label class="form-check-label" for="personal_meeting_table" style="margin-top: 10px;margin-right: 10px;">
																<?= translate('table')?>
															</label>
															<input class="form-check-input" type="radio" name="personal_meeting_type" id="personal_meeting_table" value="table">
														</div>
														
												</div>
												<div style="display: flex;justify-content: center;padding: 1rem;">

													<button class="top-button" data-toggle="modal" data-target="#staticBackdropten"><?= translate('go')?></button>
												</div>
											<!-- </form> -->
										</div>
									</div>
										

										
								</div>
							</div>
						<div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
					
									<!-- Modal -->
									<div class="modal fade" id="exampleModal" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl"  style="width: 1025px;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel"><?= translate("Personal_PALM_report")?></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
													</button>
												</div>
												<div class="modal-body modal-extra">
													<div class="col-md-12 top-bg">
														<div class="col-md-12 flex-container">
															<div class="flex-item flex-one">
																<b><?= translate("Personal_PALM_report")?></b>
															</div>
															<div class="flex-item flex-two">
																<button type="button" class="top-button"><?= translate('export')?></button>
																<button type="button" class="top-button"><?= translate('print')?></button></div>
															</div>
															<div class="col-md-8 middle-flex-container">
																<div class="box-content">
																	<div class="light-content"><?= translate('running_user')?></div>
																	<div class="dark-content"><?= translate('name')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('run_at')?></div>
																	<div class="dark-content"><?= translate('date&nbsp;and_time')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('chapter')?></div>
																	<div class="dark-content"><?= translate('1 percentage')?></div>
																</div>
															</div>
														</div>
														<div class="col-md-12 middle-bg">
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content"><b><?= translate('parameter')?></b></div>
																	<div class="middle-content"></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																		<b><?= translate('chapter:')?></b>
																	</div>
																	<div class="middle-content"><?= translate('1percent')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">	
																		<b><?= translate('member:')?></b>
																	</div>
																	<div class="middle-content"><?= translate('name')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">	
																		<b><?= translate('from:')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">	
																		<b><?= translate('to:')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																	</div>
																	<div class="middle-content"></div>
																</div>
															</div>
															
														</div>
														<div><small class="note">(GI = Given Inside, GO = Given Outside, RI = Received Inside, RO = Received Outside, A = Attendance, V = Visitors, 1-2-1 = 121's, TYFCB = Thank You for Closed Business, CEU = Chapter Education Units)</small></div>
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
																		<td>date</td>
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
																	<tr class="table-bottom">
																		<td>total</td>
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
													<div class="col-md-12" style="margin-bottom: 10px;">

														<div class="col-md-4 bottom-border">
															<div class="flex-item-top">
																<div><?= translate('present')?></div>
																<div></div>
															</div>
															<div class="flex-item-top">
																<div><?= translate('absent')?></div>
																<div>0</div>
															</div>
															<div class="flex-item-top">
																<div><?= translate('Late')?></div>
																<div>0</div>
															</div>
															<div class="flex-item-top">
																<div><?= translate('medical')?></div>
																<div>0</div>
															</div>
															<div class="flex-item-top">
																<div><?= translate('subtitute')?></div>
																<div>0</div>
															</div>
															<div class="flex-item-top">
																<div><?= translate('subtitute')?></div>
																<div>0</div>
															</div>
															<div class="flex-item-top">
																<div></div>
																<div></div>
															</div>
															<div class="flex-item-bottom">
																<div><?= translate('subtitute')?></div>
																<div>0</div>
															</div>
														</div>	
													</div>
													<br>
													<div style="margin-top: 10px;">

														<table class="table table-bordered">
															<thead>
																<tr>
																	<th colspan="4">Number of Members Sponsored: 0</th>
																</tr>
																<tr>
																	<th>Name of Sponsored Member</th>
																	<th>Region of Sponsored Member</th>
																	<th>Chapter of Sponsored Member</th>
																	<th>Application Date of Sponsored Member</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>date</td>
																	<td></td>
																	<td></td>
																	<td></td>
																</tr>
															</tbody>
														</table>
													</div>
													<br>
													<table class="table table-bordered">
														<thead>
															<tr>
																<th colspan="3">Training Information</th>
															</tr>
															<tr>
																<th>Date of Event Attended</th>
																<th style="width: 20%;">Event Name</th>
																<th>Event Type</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>17-Dec-2022</td>
																<td style="width: 50%;">17th December 2022 BANG2022- Bangalore Members Day</td>
																<td>BANG Awards Nite/ Social/ Members Day - Bangalore</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="modal-footer">
													<button  type="button" class="btn bottom-button" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Submit TYFCB Slips Modal -->
									<div class="modal fade" id="staticBackdropone" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl" style="width: 1024px;">
											<div class="modal-content">
												<div class="modal-header">
													<h3 class="modal-title" id="staticBackdropLabel"><?= translate('1_percent_charity_club')?></h3>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
													</button>
												</div>
												<div class="modal-body">
													<div id="previousStep" class="step-content active-step">
											
														<div class="col-md-12">
															<h3><?= translate('1_percentage_charity_club_thank&nbsp;you&nbsp;for&nbsp;closed&nbsp;business')?></h3>
															<hr class="modelHr-one" style="margin: 0 auto;">
															<div class="col-md-12" align="right">
																<div class="reqiured-section"><span class="important">*</span><?= translate('required&nbsp;fields')?></div>
															</div>
															<div class="col-md-12" align="left">
																<div class="col-md-12 heading-section">
																	<div class="heading-content">
																		<div><?= translate('chapter:')?></div>
																		<span>data<span> | 			
																		<div><?= translate('date:')?></div>
																		<span>data<span>										
																	</div>
																</div>
															</div>
															<form action="" method="post">
																<div class="col-md-12 model-one-section-form" align="center">
																	<div class="form-bottom">
																		<label for="tyfcb_s_dropdown" class="input-label"><?= translate('Thank&nbsp;you&nbsp;to')?></label> <span class="important">*</span><div style="display: inline;"> <?= translate('Please select from dropdown below or search cross chapter')?></div>
																	</div>
																	<div class="col-md-8 form-bottom" align="right">
																		
																		<div class="">

																			<select class="form-control" id="tyfcb_s_dropdown" name="tyfcb_s_dropdown"style="width: 45%;border:1px solid black">
																				<option>Select a member from your chapter</option>
																			</select>
																	
																		</div>													
																	</div>
																	<div class="col-md-4 form-bottom" align="left" style="padding: 8.5px;">
																		
																		
																			<div class="col-md-2" style="padding: 2.3px;color:#051237">OR</div>
																			<div class="col-md-2"><button type="button" onclick="showStep('nextStep')" class="btn top-button" style="background-color: var(--darkIndigo);color:#fff"><?= translate('search_new_chapter')?></button></div>
																												
																	</div>
																	<div class="col-md-12 form-bottom">
																		<div class="col-md-4" align="right">
																			<label for="tyfcb_s_amount" class="input-label"><?= translate('For a referral in the amount of')?> <span class="important">*</span></label>
																		</div>
																		<div class="col-md-4" align="left">
																			<input type="text" id="tyfcb_s_amount" name="tyfcb_s_amount" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																			<small>Always use local currency</small>
																		</div>
																		<div class="col-md-4"></div>
																	</div>
																	<div class="col-md-12 form-bottom">
																		<div class="col-md-4 form-buttom" align="right">
																			<label for="tyfcb_s_referral" class="input-label"><?= translate('Business Type')?> <span class="important">*</span></label>
																		</div>
																		<div class="col-md-4" align="left" style="display:flex; justify-content:space-evenly">
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="radio" name="business_type" id="tyfcb_s_new" value="new">
																				<label class="form-check-label radio-label" for="tyfcb_s_new">New</label>
																				</div>
																				<div class="form-check form-check-inline">
																				<input class="form-check-input" type="radio" name="business_type" id="tyfcb_s_repeat" value="repeat">
																				<label class="form-check-label radio-label" for="tyfcb_s_repeat">Repeat</label>
																			</div>
																		</div>
																		<div class="col-md-4"></div>
																	</div>
																	<div class="col-md-12 form-bottom" >
																		<div class="col-md-4" align="right">
																			<label for="tyfcb_s_amount" class="input-label"><?= translate('Referral Type')?> <span class="important">*</span></label>
																		</div>
																		<div class="col-md-4" align="left" style="display:flex; justify-content:space-evenly">
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="radio" name="referral_type" id="tyfcb_s_teir_one" value="tier1" required>
																				<label class="form-check-label radio-label" for="tyfcb_s_teir_one">Tier 1 (inside)</label>
																			</div>
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="radio" name="referral_type" id="tyfcb_s_teir_two" value="tier2">
																				<label class="form-check-label radio-label" for="tyfcb_s_teir_two"> Tier 2 (outside)</label>
																			</div>
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="radio" name="referral_type" id="tyfcb_s_teir_three" value="teir3">
																				<label class="form-check-label radio-label" for="tyfcb_s_teir_three">Tier 3+</label>
																			</div>
																		</div>
																		<div class="col-md-4"></div>
																	</div>
																	<div class="col-md-12" style="padding: 1.35em;">
																		<div class="col-md-4" align="right">
																			<label for="tyfcb_s_amount" class="input-label"><?= translate('Comments&nbsp;')?> 
																		</div>
																		<div class="col-md-4" align="left">
																			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize:none;border:1px solid black;border-radius:5px"></textarea>
																		</div>
																		<div class="col-md-4">

																		</div>
																	</div>
																	<div class="col-md-12" align="center">
																		<div style="padding: 0px 1.35rem  1.35rem 1.35rem;">
																			<button type="submit" class="btn top-button"><?= translate('submit&nbsp;and_new')?></button>
																			<button type="submit" class="btn top-button"><?= translate('submit')?></button>
																		</div>
																	</div>
																	<div class="col-md-12" align="center">
																		<div class="col-md-12 heading-section">
																			<div class="model-bottom-one"><?= translate('Changing the Way the World Does Business')?></div>
																		</div>
																	</div>
																</div>
															</form>
														</div>
														
													</div>
													<div id="nextStep" class="step-content" style="height: 412px;">
														<div class="col-md-12 search-note">
															To search for other users and members you must input at least two characters in any of the three search fields.
														</div>
														<!-- <form action="" method="post"> -->
															<div class="col-md-12" style="margin-top: 10px;">
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="search_fname" class="input-label"><?= translate('First Name')?></label>
																	</div>
																	<div class="col-md-4" align="left">
																		<input type="text" id="search_fname" name="search_fname" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="search_lname" class="input-label"><?= translate('Last Name')?></label>
																	</div>
																	<div class="col-md-4" align="left">
																		<input type="text" id="search_lname" name="search_lname" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="search_company" class="input-label"><?= translate('Company')?> </label>
																	</div>
																	<div class="col-md-4" align="left">
																		<input type="text" id="search_company" name="search_cmpany" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																<div class="col-md-12" align="center">
																	<div style="padding: 1.3rem 1.35rem  1.35rem 1.35rem;">
																		<button type="submit" class="btn top-button"><?= translate('submit')?></button>
																		<button type="reset" class="btn top-button"><?= translate('reset')?></button>
																		<button  class="btn top-button" onclick="showStep('previousStep')"><?= translate('back')?></button>
																	</div>
																</div>
															</div>
														<!-- </form> -->
													
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="top-button" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									
									<!--Submit Referral Slips Modal -->
									<div class="modal fade" id="staticBackdroptwo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl" style="width: 1024px;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="staticBackdropLabel">1 percentage Referral Slip</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
													</button>
												</div>
												<div class="modal-body">
													<div id="customTab1" class="custom-tab-content active-tab">
															<div class="col-md-12">
																<h3><?= translate('1_percentage_charity_club_thank&nbsp;referral_slip')?></h3>
																<hr class="modelHr-one" style="margin: 0 auto;">
																<div class="col-md-12" align="right">
																	<div class="reqiured-section"><span class="important">*</span><?= translate('required&nbsp;fields')?>
																</div>
															</div>
															<div class="col-md-12" align="left">
																<div class="col-md-12 heading-section">
																	<div class="heading-content">
																		<div><?= translate('chapter:')?></div>
																		<span>data<span> | 			
																		<div><?= translate('date:')?></div>
																		<span>data<span>					
																	</div>
																</div>
																<!-- <form action="" method="post"> -->
																	<div class="col-md-12 model-one-section-form" align="center">
																		<div class="">
																			<label for="tyfcb_s_referral" class="input-label"><?= translate('to')?></label> <span class="important">*</span><div style="display: inline;"> <?= translate('Please select from dropdown below or search cross chapter')?></div>
																		</div>
																		<div class="col-md-8 form-bottom" align="right">
																			
																			<div class="">

																				<select class="form-control" id="tyfcb_s_referral" name="tyfcb_s_referral" style="width: 45%;border:1px solid black">
																					<option>Select a member from your chapter</option>
																				</select>
																		
																			</div>													
																		</div>
																		<div class="col-md-4 form-bottom" align="left" style="padding: 8.5px;">
																			
																			
																				<div class="col-md-2" style="padding: 2.3px;color:#051237">OR</div>
																				<div class="col-md-2"><button type="button" class="btn top-button"   onclick="showCustomTab('customTab2')"style="background-color: var(--purpleColor);color:#fff"><?= translate('search_cross_chapter')?></button></div>
																													
																		</div>
																		<div class="col-md-12 form-bottom">
																			<div class="col-md-4" align="right">
																				<label for="referral_main" class="input-label"><?= translate('referral')?> <span class="important">*</span></label>
																			</div>
																			<div class="col-md-4" align="left">
																				<input type="text" id="referral_main" name="referral_main" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																			</div>
																			<div class="col-md-4"></div>
																		</div>
																		<div class="col-md-12 form-bottom">
																			<div class="col-md-4 form-buttom" align="right">
																				<label for="referral_type" class="input-label"><?= translate('referral_type')?> <span class="important">*</span></label>
																			</div>
																			<div class="col-md-4" align="left" style="display:flex; justify-content:space-evenly">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="radio" name="referral_type" id="referral_type_teir_1" value="option1">
																					<label class="form-check-label radio-label" for="referral_type"><?= translate('tier1(inside)')?></label>
																					</div>
																					<div class="form-check form-check-inline">
																					<input class="form-check-input" type="radio" name="referral_type" id="referral_type_teir_2" value="option2">
																					<label class="form-check-label radio-label" for="tyfcb_s_repeat"><?= translate('tier2(outside)')?></label>
																				</div>
																			</div>
																			<div class="col-md-4"></div>
																		</div>
																		<div class="col-md-12 form-bottom" >
																			<div class="col-md-4" align="right">
																				<label for="tyfcb_s_amount" class="input-label"><?= translate('Referral status')?> <span class="important">*</span></label>
																			</div>
																			<div class="col-md-4" align="left" style="display:flex; justify-content:space-evenly">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox" name="referral_status" id="referral_status" value="option1" required>
																					<label class="form-check-label radio-label" for="tyfcb_s_teir_one">Given your card</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox" name="referral_status" id="referral_status" value="option2">
																					<label class="form-check-label radio-label" for="referral_status"> Told them you would call</label>
																				</div>
																				
																			</div>
																			<div class="col-md-4"></div>
																		</div>
																		<div class="col-md-12 form-bottom" style="padding: 1.35em;">
																			<div class="col-md-4" align="right">
																				<label for="referral_address" class="input-label"><?= translate('Address&nbsp;')?> 
																			</div>
																			<div class="col-md-4" align="left">
																				<textarea class="form-control" id="referral_address" name="referral_address" rows="3" style="resize:none;border:1px solid black;border-radius:5px"></textarea>
																			</div>
																			<div class="col-md-4">

																			</div>
																		</div>
																		<div class="col-md-12 form-bottom">
																			<div class="col-md-4" align="right">
																				<label for="referral_number" class="input-label"><?= translate('telephone')?> <span class="important">*</span></label>
																			</div>
																			<div class="col-md-4" align="left">
																				<input type="number" id="referral_number" name="referral_number" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																			</div>
																			<div class="col-md-4"></div>
																		</div>
																		<div class="col-md-12 form-bottom">
																			<div class="col-md-4" align="right">
																				<label for="referral_emal" class="input-label"><?= translate('email')?> <span class="important">*</span></label>
																			</div>
																			<div class="col-md-4" align="left">
																				<input type="email" id="referral_emal" name="referral_emal" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																			</div>
																			<div class="col-md-4"></div>
																		</div>
																		<div class="col-md-12 form-bottom">
																			<div class="col-md-4" align="right">
																			<label for="customRange2" class="form-label">How hot is this referral?</label>
																			</div>
																			<div class="col-md-4" align="left" style="display: flex;   justify-content: flex-start;">
																				
																				<div class="form-check form-check-inline" style="margin-right: 10px;">
																					<input class="form-check-input" type="radio" name="referral_type_heat" id="referral_type_teir_1" value="Tepid">
																					<label class="form-check-label radio-label" for="referral_type_heat"><?= translate('Tepid')?></label>
																				</div>
																				<div class="form-check form-check-inline" style="margin-right: 10px;">
																					<input class="form-check-input" type="radio" name="referral_type_heat" id="referral_type_teir_1" value="Warm">
																					<label class="form-check-label radio-label" for="referral_type_heat"><?= translate('Warm')?></label>
																				</div>
																				<div class="form-check form-check-inline" style="margin-right: 10px;">
																					<input class="form-check-input" type="radio" name="referral_type_heat" id="referral_type_teir_1" value="Mild">
																					<label class="form-check-label radio-label" for="referral_type_heat"><?= translate('Mild')?></label>
																				</div>
																				<div class="form-check form-check-inline" style="margin-right: 10px;">
																					<input class="form-check-input" type="radio" name="referral_type_heat" id="referral_type_teir_1" value="Lukewarm">
																					<label class="form-check-label radio-label" for="referral_type_heat"><?= translate('Lukewarm')?></label>
																				</div>
																				<div class="form-check form-check-inline" style="margin-right: 10px;">
																					<input class="form-check-input" type="radio" name="referral_type_heat" id="referral_type_teir_1" value="Hot">
																					<label class="form-check-label radio-label" for="referral_type_heat"><?= translate('Hot')?></label>
																				</div>
																				
																			</div>
																			<div class="col-md-4"></div>
																		</div>
																		<div class="col-md-12" style="padding: 1.35em;">
																			<div class="col-md-4" align="right">
																				<label for="referral_comment" class="input-label"><?= translate('Comments&nbsp;')?> 
																			</div>
																			<div class="col-md-4" align="left">
																				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize:none;border:1px solid black;border-radius:5px"></textarea>
																			</div>
																			<div class="col-md-4">

																			</div>
																		</div>
																		<div class="col-md-12" align="center">
																			<div style="padding: 0px 1.35rem  1.35rem 1.35rem;">
																				<button type="submit" class="btn top-button"><?= translate('submit&nbsp;and_new')?></button>
																				<button type="submit" class="btn top-button"><?= translate('submit')?></button>
																			</div>
																		</div>
																		<div class="col-md-12" align="center">
																			<div class="col-md-12 heading-section">
																				<div class="model-bottom-one"><?= translate('Changing the Way the World Does Business')?></div>
																			</div>
																		</div>
																	</div>
																<!-- </form> -->
															</div>
														</div>
														<!-- <button onclick="showCustomTab('customTab2')">Next</button> -->
													</div>

													<div id="customTab2" class="custom-tab-content" style="height: 410px;">
														<div class="col-md-12 search-note">
															To search for other users and members you must input at least two characters in any of the three search fields.
														</div>
														<!-- <form action="" method="post"> -->
															<div class="col-md-12" style="margin-top: 10px;">
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="search_fname" class="input-label"><?= translate('First Name')?></label>
																	</div>
																	<div class="col-md-4" align="left">
																		<input type="text" id="search_fname" name="search_fname" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="search_lname" class="input-label"><?= translate('Last Name')?></label>
																	</div>
																	<div class="col-md-4" align="left">
																		<input type="text" id="search_lname" name="search_lname" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="search_company" class="input-label"><?= translate('Company')?> </label>
																	</div>
																	<div class="col-md-4" align="left">
																		<input type="text" id="search_company" name="search_company" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																<div class="col-md-12" align="center">
																	<div style="padding: 1.3rem 1.35rem  1.35rem 1.35rem;">
																		<button type="submit" class="btn top-button"><?= translate('submit')?></button>
																		<button type="reset" class="btn top-button"><?= translate('reset')?></button>
																		<button  class="btn top-button" onclick="showCustomTab('customTab1')"><?= translate('back')?></button>
																	</div>
																</div>
															</div>
														<!-- </form> -->
														
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn top-button" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Submit One To One Slips Model -->
									<div class="modal fade" id="staticBackdropthree" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl" style="width: 1024px;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="staticBackdropLabel">Submit One To One Slips</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
													</button>
												</div>
												<div class="modal-body">
													<div id="page1" class="page visible">
														<h3><?= translate('1_percentage_charity_club_One-to-One follow up')?></h3>
															<hr class="modelHr-one" style="margin: 0 auto;">
															<div class="col-md-12" align="right">
																<div class="reqiured-section">
																	<span class="important">*</span><?= translate('required&nbsp;fields')?>
																</div>
															</div>
														<!-- <button onclick="nextPage()">Next</button> -->
														<div class="col-md-12" align="left">
															<div class="col-md-12 heading-section">
																<div class="heading-content">
																	<div><?= translate('chapter:')?></div>
																	<span>data<span>									
																</div>
															</div>
														</div>
														<div class="col-md-12 model-one-section-form" align="center">
																<div class="form-bottom">
																	<label for="tyfcb_s_dropdown" class="input-label"><?= translate('Met With')?></label> <span class="important">*</span><div style="display: inline;"> <?= translate('Please select from dropdown below or search cross chapter')?></div>
																</div>
																<div class="col-md-8 form-bottom" align="right">
																	
																	<div class="">

																		<select class="form-control" id="tyfcb_s_dropdown" name="tyfcb_s_dropdown"style="width: 45%;border:1px solid black">
																			<option>Select a member from your chapter</option>
																		</select>
																
																	</div>													
																</div>
																<div class="col-md-4 form-bottom" align="left" style="padding: 8.5px;">
																	
																	
																		<div class="col-md-2" style="padding: 2.3px;color:#051237">OR</div>
																		<div class="col-md-2"><button type="button" class="btn top-button" style="background-color: var(--purpleColor);color:#fff" onclick="nextPage()"><?= translate('search_new_chapter')?></button></div>
																											
																</div>
																
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="tyfcb_s_amount" class="input-label"><?= translate('Invited By')?> <span class="important">*</span></label>
																	</div>
																	<div class="col-md-4" align="left">
																	<select class="form-control" id="tyfcb_s_dropdown" name="tyfcb_s_dropdown"style="border:1px solid black">
																			<option><?= translate('select_invition_by')?></option>
																		</select>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="tyfcb_s_amount" class="input-label"><?= translate('For a referral in the amount of')?> <span class="important">*</span></label>
																	</div>
																	<div class="col-md-4" align="left">
																		<input type="text" id="tyfcb_s_amount" name="tyfcb_s_amount" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																
																<div class="col-md-12 form-bottom" style="padding: 1.35em;">
																	<div class="col-md-4" align="right">
																		<label for="tyfcb_s_amount" class="input-label"><?= translate('Topics of Conversation&nbsp;')?><span class="important">*</span>
																	</div>
																	<div class="col-md-4" align="left">
																		<textarea class="form-control" id="exampleFormControlTextarea1" rows="2" style="resize:none;border:1px solid black;border-radius:5px" required></textarea>
																	</div>
																	<div class="col-md-4">

																	</div>
																</div>
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="tyfcb_s_amount" class="input-label"><?= translate('For a referral in the amount of')?> <span class="important">*</span></label>
																	</div>
																	<div class="col-md-4" align="left">
																		<input type="text" id="tyfcb_s_amount" name="tyfcb_s_amount" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																
																<div class="col-md-12" align="center">
																	<div class="col-md-12 heading-section">
																		<div class="model-bottom-one"><?= translate('Changing the Way the World Does Business')?></div>
																	</div>
																</div>
																<div class="col-md-12" align="center">
																	<div style="padding: 1.3rem 1.35rem  1.35rem 1.35rem;">
																		<button type="submit" class="btn top-button"><?= translate('submit&nbsp;and_new')?></button>
																		<button type="submit" class="btn top-button"><?= translate('submit')?></button>
																	</div>
																</div>
															</div>
													</div>

													<div id="page2" class="page" style="height: 412px;">
														<div class="col-md-12 search-note">
															To search for other users and members you must input at least two characters in any of the three search fields.
														</div>
														<!-- <form action="" method="post"> -->
															<div class="col-md-12" style="margin-top: 10px;">
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="search_fname" class="input-label"><?= translate('First Name')?></label>
																	</div>
																	<div class="col-md-4" align="left">
																		<input type="text" id="search_fname" name="search_fname" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="search_name" class="input-label"><?= translate('Last Name')?></label>
																	</div>
																	<div class="col-md-4" align="left">
																		<input type="text" id="search_name" name="search_name" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																<div class="col-md-12 form-bottom">
																	<div class="col-md-4" align="right">
																		<label for="search_company" class="input-label"><?= translate('Company')?> </label>
																	</div>
																	<div class="col-md-4" align="left">
																		<input type="text" id="search_company" name="search_company" style="display:inline-block;border:1px solid black;border-radius:5px" class="form-control" required>
																	</div>
																	<div class="col-md-4"></div>
																</div>
																<div class="col-md-12" align="center">
																	<div style="padding: 1.3rem 1.35rem  1.35rem 1.35rem;">
																		<button type="submit" class="btn top-button"><?= translate('submit')?></button>
																		<button type="reset" class="btn top-button"><?= translate('reset')?></button>
																		<button  class="btn top-button" onclick="prevPage()"><?= translate('back')?></button>
																	</div>
																</div>
															</div>
														<!-- </form> -->
														
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn top-button" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Submit CEU Slips Model -->
									<div class="modal fade" id="staticBackdropfour" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl" style="width: 1024px;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="staticBackdropLabel">Submit CEU Slips</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
													</button>
												</div>
												<div class="modal-body">
													<div class="col-md-12" style="margin-bottom: 10px;">
														<h3><?= translate('1_percentage_charity_club_chapter_education_units')?></h3>
														<hr class="modelHr-one" style="margin: 0 auto;">
														<div class="col-md-12" align="right">
															<div class="reqiured-section">
																<span class="important">*</span><?= translate('required&nbsp;fields')?>
															</div>
														</div>
														<div class="col-md-12" align="left">
															<div class="col-md-12 heading-section">
																<div class="heading-content">
																	<div><?= translate('member:')?></div>
																		<span>data<span> | 			
																		<div><?= translate('date:')?></div>
																		<span>data<span>
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<table class="table table-bordered">
																	<thead>
																		<tr>
																			<th style="width: 50%;"><?= translate('course_title')?></th>
																			<th><?= translate('credits_/_curse')?></th>
																			<th><?= translate('QTY_earned')?></th>
																			<th><?= translate('total_credit_earned_last_week')?></th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td><?= translate('topics')?></td>
																			<td style="width: 20%;"></td>
																			<td><input type="number" name="" id="" style="width: 30%;border-radius:5px;border:1px solid"></td>
																			<td></td>
																		</tr>
																		<tr class="table-bottom">
																			<td></td>
																			<td colspan="2" style="text-align:left"><?= translate('total')?></td>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div class="col-md-12" align="center">
																	<div class="col-md-12 heading-section">
																		<div class="model-bottom-one"><?= translate('Changing the Way the World Does Business')?></div>
																	</div>
															</div>
														</div>
												</div>
												<div class="modal-footer">
													<div>

														<button type="submit" class="top-button" data-dismiss="modal">Submit</button>
														<button type="button" class="top-button" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--Review My TYFCB Slips Modal -->
									<div class="modal fade" id="staticBackdropfive" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl"  style="width: 1025px;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel"><?= translate("Chapter : TYFCB Given Report")?></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
													</button>
												</div>
												<div class="modal-body modal-extra">
													<div class="col-md-12 top-bg">
														<div class="col-md-12 flex-container">
															<div class="flex-item flex-one">
																<b><?= translate("Chapter : TYFCB Given Report")?></b>
															</div>
															<div class="flex-item flex-two">
																<a href="<?= base_url()?>admin/edit_delete_slip_one" target="_blank"><button type="button" class="top-button"><?= translate('edit/_delete_slips')?></button></a>
																<button type="button" class="top-button"><?= translate('export_without_header')?></button>
																<button type="button" class="top-button"><?= translate('export')?></button>
																<button type="button" class="top-button"><?= translate('print')?></button></div>
															</div>
															<div class="col-md-8 middle-flex-container">
																<div class="box-content">
																	<div class="light-content"><?= translate('running_user')?></div>
																	<div class="dark-content"><?= translate('name')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('run_at')?></div>
																	<div class="dark-content"><?= translate('date&nbsp;and_time')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('chapter')?></div>
																	<div class="dark-content"><?= translate('1 percentage')?></div>
																</div>
															</div>
														</div>
														<div class="col-md-12 middle-bg">
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content"><b><?= translate('parameter')?></b></div>
																	<div class="middle-content"></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																		<b><?= translate('start_date')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">	
																		<b><?= translate('end_date')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																	</div>
																	<div class="middle-content"></div>
																</div>
															</div>
															
														</div>
														<div class="col-md-12 main-note" style="margin-bottom: 1.25rem;font-weight: bolder;text-align:center">
														Slips associated with PALMS reports that have not been submitted can be edited. If the slip you want to edit has a status of completed, please contact your Vice President to have him/her unlock the report for you.
														</div>
														
														<div>
															<table class="table table-bordered">
																<thead>
																	<tr>
																		<th>Date</th>
																		<th>Thank you to</th>
																		<th>Amount</th>
																		<th>New/Repeat Business</th>
																		<th>Tier 1 (inside) referral, Tier 2 (outside) referral, Tier 3+ referral</th>
																		<th>Comments</th>
																		<th>PALMS Status</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>date</td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr class="table-bottom">
																		<td></td>
																		<td><?= translate('total')?></td>
																		<td><?= translate("total_amount")?></td>
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
													<button  type="button" class="btn bottom-button" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<!--Review My TYFCB Slips Modal -->
									<div class="modal fade" id="staticBackdropsix" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl"  style="width: 1025px;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel"><?= translate("Chapter : Referrals Given Report")?></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
													</button>
												</div>
												<div class="modal-body modal-extra">
													<div class="col-md-12 top-bg">
														<div class="col-md-12 flex-container">
															<div class="flex-item flex-one">
																<b><?= translate("Chapter : Referrals Given Report")?></b>
															</div>
															<div class="flex-item flex-two">
																<a href="<?= base_url()?>admin/edit_delete_slip_one" target="_blank"><button type="button" class="top-button"><?= translate('edit/_delete_slips')?></button></a>
																<button type="button" class="top-button"><?= translate('export_without_header')?></button>
																<button type="button" class="top-button"><?= translate('export')?></button>
																<button type="button" class="top-button"><?= translate('print')?></button></div>
															</div>
															<div class="col-md-8 middle-flex-container">
																<div class="box-content">
																	<div class="light-content"><?= translate('running_user')?></div>
																	<div class="dark-content"><?= translate('name')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('run_at')?></div>
																	<div class="dark-content"><?= translate('date&nbsp;and_time')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('Country')?></div>
																	<div class="dark-content"><?= translate('place')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('region')?></div>
																	<div class="dark-content"><?= translate('place')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('chapter')?></div>
																	<div class="dark-content"><?= translate('1 percentage')?></div>
																</div>
															</div>
														</div>
														<div class="col-md-12 middle-bg">
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content"><b><?= translate('parameter')?></b></div>
																	<div class="middle-content"></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																		<b><?= translate('start_date')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">	
																		<b><?= translate('end_date')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																	</div>
																	<div class="middle-content"></div>
																</div>
															</div>
															
														</div>
														<div class="col-md-12 main-note" style="margin-bottom: 1.25rem;font-weight: bolder;text-align:center">
														Slips associated with PALMS reports that have not been submitted can be edited. If the slip you want to edit has a status of completed, please contact your Vice President to have him/her unlock the report for you.
														</div>
														
														<div>
															<table class="table table-bordered">
																<thead>
																	<tr>
																		<th>Date</th>
																		<th>To</th>
																		<th>referral</th>
																		<th><?= translate('inside/_outside')?></th>
																		<th><?= translate('status')?></th>
																		<th><?= translate('phone_number')?></th>
																		<th><?= translate('email')?></th>
																		<th><?= translate('comments')?></th>
																		<th><?= translate('referral_temp')?></th>
																		<th><?= translate('tracking_sheet_status')?></th>
																		<th><?= translate('PALM_status')?></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>date</td>
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
																	<tr class="table-bottom">
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td><?= translate('total')?></td>
																		<td><?= translate("total_amount")?></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>
														
														
													
												</div>
												<div class="modal-footer">
													<button  type="button" class="btn bottom-button" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<!--Review My One To One Slips Modal -->
									<div class="modal fade" id="staticBackdropseven" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl"  style="width: 1025px;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel"><?= translate("Chapter : One to One Report")?></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
													</button>
												</div>
												<div class="modal-body modal-extra">
													<div class="col-md-12 top-bg">
														<div class="col-md-12 flex-container">
															<div class="flex-item flex-one">
																<b><?= translate("Chapter : One to One Report")?></b>
															</div>
															<div class="flex-item flex-two">
																<a href="<?= base_url()?>admin/edit_delete_slip_one" target="_blank"><button type="button" class="top-button"><?= translate('edit/_delete_slips')?></button></a>
																<button type="button" class="top-button"><?= translate('export_without_header')?></button>
																<button type="button" class="top-button"><?= translate('export')?></button>
																<button type="button" class="top-button"><?= translate('print')?></button></div>
															</div>
															<div class="col-md-6 middle-flex-container">
																<div class="box-content">
																	<div class="light-content"><?= translate('running_user')?></div>
																	<div class="dark-content"><?= translate('name')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('run_at')?></div>
																	<div class="dark-content"><?= translate('date&nbsp;and_time')?></div>
																</div>
																
																<div class="box-content">
																	<div class="light-content"><?= translate('chapter')?></div>
																	<div class="dark-content"><?= translate('1 percentage')?></div>
																</div>
															</div>
														</div>
														<div class="col-md-12 middle-bg">
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content"><b><?= translate('parameter')?></b></div>
																	<div class="middle-content"></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																		<b><?= translate('start_date')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">	
																		<b><?= translate('end_date')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																	</div>
																	<div class="middle-content"></div>
																</div>
															</div>
															
														</div>
														<div class="col-md-12 main-note" style="margin-bottom: 1.25rem;font-weight: bolder;text-align:center">
														Slips associated with PALMS reports that have not been submitted can be edited. If the slip you want to edit has a status of completed, please contact your Vice President to have him/her unlock the report for you. Please note: You are only able to edit the One-to-One slips you have personally entered into the system.
														</div>
														
														<div>
															<table class="table table-bordered">
																<thead>
																	<tr>
																		<th>Date</th>
																		<th><?= translate('met_with')?></th>
																		<th><?= translate('intiated_by')?></th>
																		<th><?= translate('location')?></th>
																		<th><?= translate('topics')?></th>
																		<th><?= translate('PALM_status')?></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>date</td>
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
													<button  type="button" class="btn bottom-button" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<!--Review My CEU Slips Modal -->
									<div class="modal fade" id="staticBackdropeight" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl"  style="width: 1025px;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel"><?= translate("Chapter :CEU Report")?></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
													</button>
												</div>
												<div class="modal-body modal-extra">
													<div class="col-md-12 top-bg">
														<div class="col-md-12 flex-container">
															<div class="flex-item flex-one">
																<b><?= translate("Chapter :CEU Report")?></b>
															</div>
															<div class="flex-item flex-two">
																<a href="<?= base_url()?>admin/edit_delete_slip_one" target="_blank"><button type="button" class="top-button"><?= translate('edit/_delete_slips')?></button></a>
																<button type="button" class="top-button"><?= translate('export_without_header')?></button>
																<button type="button" class="top-button"><?= translate('export')?></button>
																<button type="button" class="top-button"><?= translate('print')?></button></div>
															</div>
															<div class="col-md-6 middle-flex-container">
																<div class="box-content">
																	<div class="light-content"><?= translate('running_user')?></div>
																	<div class="dark-content"><?= translate('name')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('run_at')?></div>
																	<div class="dark-content"><?= translate('date&nbsp;and_time')?></div>
																</div>
																
																<div class="box-content">
																	<div class="light-content"><?= translate('chapter')?></div>
																	<div class="dark-content"><?= translate('1 percentage')?></div>
																</div>
															</div>
														</div>
														<div class="col-md-12 middle-bg">
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content"><b><?= translate('parameter')?></b></div>
																	<div class="middle-content"></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																		<b><?= translate('start_date')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">	
																		<b><?= translate('end_date')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																	</div>
																	<div class="middle-content"></div>
																</div>
															</div>
															
														</div>
														<div class="col-md-12 main-note" style="margin-bottom: 1.25rem;font-weight: bolder;text-align:center">
														Slips associated with PALMS reports that have not been submitted can be edited. If the slip you want to edit has a status of completed, please contact your Vice President to have him/her unlock the report for you. Please note: You are only able to edit the One-to-One slips you have personally entered into the system.
														</div>
														
														<div>
															<table class="table table-bordered">
																<thead>
																	<tr>
																		<th><?= translate('date')?></th>
																		<th><?= translate('course_title')?></th>
																		<th><?= translate('credits_per_course')?></th>
																		<th><?= translate('Qty_earned')?></th>
																		<th><?= translate('total_credits_earned')?></th>
																		<th><?= translate('PALM_status')?></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>date</td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		
																	</tr>
																	<tr class="table-bottom">
																		<td></td>
																		<td></td>
																		<td></td>
																		<td><?= translate('total')?></td>
																		<td><?= translate("total_amount")?></td>
																		<td></td>
																	</tr>
																	
																</tbody>
															</table>
														</div>
														
														
													
												</div>
												<div class="modal-footer">
													<button  type="button" class="btn bottom-button" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<!--Referral Tracking Report Modal -->
									<div class="modal fade" id="staticBackdropnine" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl"  style="width: 1025px;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel"><?= translate("Referral Tracking Report")?></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
													</button>
												</div>
												<div class="modal-body modal-extra">
													<div class="col-md-12 top-bg">
														<div class="col-md-12 flex-container">
															<div class="flex-item flex-one">
																<b><?= translate("Referral Tracking Report")?></b>
															</div>
															<div class="flex-item flex-two">
																<button type="button" class="top-button"><?= translate('export_without_header')?></button>
																<button type="button" class="top-button"><?= translate('export')?></button>
																<button type="button" class="top-button"><?= translate('print')?></button></div>
															</div>
															<div class="col-md-8 middle-flex-container">
																<div class="box-content">
																	<div class="light-content"><?= translate('running_user')?></div>
																	<div class="dark-content"><?= translate('name')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('run_at')?></div>
																	<div class="dark-content"><?= translate('date&nbsp;and_time')?></div>
																</div>
																
																<div class="box-content">
																	<div class="light-content"><?= translate('country')?></div>
																	<div class="dark-content"><?= translate('place')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('region')?></div>
																	<div class="dark-content"><?= translate('1 place')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('chapter')?></div>
																	<div class="dark-content"><?= translate('1 percentage')?></div>
																</div>
															</div>
														</div>
														<div class="col-md-12 middle-bg">
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content"><b><?= translate('parameter')?></b></div>
																	<div class="middle-content"></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																		<b><?= translate('from')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">	
																		<b><?= translate('to')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																	</div>
																	<div class="middle-content"></div>
																</div>
															</div>
															
														</div>
														
														
														<div>
															<table class="table table-bordered">
																<thead>
																	<tr>
																		<th><?= translate('date')?></th>
																		<th><?= translate('Referral Name')?></th>
																		<th><?= translate('referral_phone')?></th>
																		<th><?= translate('referral_email')?></th>
																		<th><?= translate('referral_by')?></th>
																		<th><?= translate('referral_notes')?></th>
																		<th><?= translate('last_update')?></th>
																		<th><?= translate('status')?></th>
																		<th><?= translate('TYFCB')?></th>
																		<th><?= translate('comments')?></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>date</td>
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
													<button  type="button" class="btn bottom-button" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<!--Personal Meeting Activity Sheet Modal -->
									<div class="modal fade" id="staticBackdropten" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog modal-xl"  style="width: 1025px;">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel"><?= translate("Personal Meeting Activity Sheet")?></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
													</button>
												</div>
												<div class="modal-body modal-extra">
													<div class="col-md-12 top-bg">
														<div class="col-md-12 flex-container">
															<div class="flex-item flex-one">
																<b><?= translate("Personal Meeting Activity Sheet")?></b>
															</div>
															<div class="flex-item flex-two">
																<button type="button" class="top-button"><?= translate('print')?></button></div>
															</div>
															<div class="col-md-10 middle-flex-container">
																<div class="box-content">
																	<div class="light-content"><?= translate('running_user')?></div>
																	<div class="dark-content"><?= translate('name')?></div>
																</div>
																<div class="box-content">
																	<div class="light-content"><?= translate('run_at')?></div>
																	<div class="dark-content"><?= translate('date&nbsp;and_time')?></div>
																</div>
																
																<div class="box-content">
																	<div class="light-content"><?= translate('country')?></div>
																	<div class="dark-content"><?= translate('place')?></div>
																</div>
																
															</div>
														</div>
														<div class="col-md-12 middle-bg">
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content"><b><?= translate('parameter')?></b></div>
																	<div class="middle-content"></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																		<b><?= translate('from')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">	
																		<b><?= translate('to')?></b>
																	</div>
																	<div class="middle-content"><?= translate('date')?></div>
																</div>
															</div>
															<div class="col-md-12 border-b">
																<div class="col-md-6 bottom-flex-container">
																	<div class="middle-content">
																	</div>
																	<div class="middle-content"></div>
																</div>
															</div>
															
														</div>
														
														
														<div class="col-md-12">
															<div class="col-md-6 referral-slip">
																
																	<h1 style="text-align:center;color: #273039;font-weight: lighter;"><?= translate('referral_slip')?></h1>
																	<div class="col-md-6 referral-slip-content">
																		<h4>To:data</h4>
																		<h4>From:data</h4>
																		<h4>Referral:data</h4>
																	</div>
																
															</div>
															<div class="col-md-6">

															</div>
															
														</div>
														<div class="col-md-12">
															<div class="col-md-6 tycb-thankyou">
																<div class="tycb-heading">
																	<h6><?= translate('TYCB')?></h6>
																	<h6><?= translate('thank_you_to')?></h6>
																</div>
																<div class="tycb-content">
																	<table class="table" style="margin-left: 1rem;">
																		<tbody>
																			<tr>
																				<td>1. data</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
															<div class="col-md-6 tycb-thankyou">
																<div class="tycb-heading">
																	<h6><?= translate('One to Ones')?></h6>
																	<h6><?= translate('With')?></h6>
																</div>
																<div class="tycb-content">
																	<table class="table" style="margin-left: 1rem;">
																		<tbody>
																			<tr>
																				<td>1. data</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<div>
																<table class="table table-bordered">
																	<thead>
																		<tr>
																			<th><?= translate('to')?></th>
																			<th><?= translate('referral_name')?></th>
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
														<div class="col-md-12">
															<div class="tycb-heading-one">
																<h6><?= translate('TYFCB')?></h6>
															</div>
															<div class="col-md-12">
															<div>
																<table class="table table-bordered table-tyfcb">
																	<thead>
																		<tr>
																			<th><?= translate('thank_you_to')?></th>
																			<th><?= translate('closed&nbsp;in&nbsp;the&nbsp;amount&nbsp;of')?></th>
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
														</div>
														<div class="col-md-12">
															<div class="tycb-heading-one">
																<h6><?= translate('one_to_one')?></h6>
															</div>
															<div class="col-md-12">
																<div>
																	<table class="table table-bordered table-tyfcb">
																		<thead>
																			<tr>
																				<th><?= translate('with')?></th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td></td>
																			</tr>
																			
																			
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
														<div class="col-md-12">
																<table class="table table-bordered table-tyfcb">
																	<thead>
																		<tr>
																			<th style="text-align:left"><?= translate('Visitors')?></th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td> Please report visitors in attendance to your Visitor Host.  You will receive credit for the visitors when your Visitor Host enters them into the system.</td>
																		</tr>
																		
																		
																	</tbody>
																</table>
														</div>
														
													
												</div>
												<div class="modal-footer">
													<button  type="button" class="btn bottom-button" data-dismiss="modal">Close</button>
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
  function showCustomTab(tabId) {
    // Hide all custom tabs
    var customTabs = document.querySelectorAll('.custom-tab-content');
    customTabs.forEach(function(tab) {
      tab.classList.remove('active-tab');
    });

    // Show the selected custom tab
    var selectedCustomTab = document.getElementById(tabId);
    selectedCustomTab.classList.add('active-tab');
  }
</script>
<style>
    .custom-tab-content {
      display: none;
    }

    .active-tab {
      display: block;
    }
  </style>
<script>
	
	
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
  function showStep(stepId) {
    // Hide all steps
    var steps = document.querySelectorAll('.step-content');
    steps.forEach(function(step) {
      step.classList.remove('active-step');
    });

    // Show the selected step
    var selectedStep = document.getElementById(stepId);
    selectedStep.classList.add('active-step');
  }
</script>
<script>
        let currentPage = 1;

        function showPage(pageNumber) {
            document.querySelectorAll('.page').forEach(page => {
                page.classList.remove('visible');
            });

            const currentPageElement = document.getElementById(`page${pageNumber}`);
            if (currentPageElement) {
                currentPageElement.classList.add('visible');
                currentPage = pageNumber;
            }
        }

        function nextPage() {
            if (currentPage < 2) {
                showPage(currentPage + 1);
            }
        }

        function prevPage() {
            if (currentPage > 1) {
                showPage(currentPage - 1);
            }
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
</style>
<style>
        .page {
            display: none;
        }

        .visible {
            display: block;
        }
</style>
<style>


.tab-content {
  display: none;
  padding: 20px;
}

.tab-content h2 {
  color: #333;
}

.tab-content p {
  color: #666;
}
</style>

<style>
    .step-content {
      display: none;
    }

    .active-step {
      display: block;
    }
  </style>
<style>
	:root{
		--mintyBlue:#EFF8F8;
		--darkIndigo:#2C2C6A;
		--blackColor:#000;
	}
	.panel .underLiner {
    border-color: rgb(210 199 199);
	}
	.underLiner {
    margin-top: -6px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
	}
	.panel .modelHr-one{
		border-color: rgb(210 199 199);
		margin: 0 auto;
	}
    .personal-paricipant{
        text-decoration:underline;
		color:var(--purpleColor);
    }
    .personal-paricipant:hover,.personal-paricipant:visited,.personal-paricipant:active.personal-paricipant:link{
        text-decoration:underline;
		color:#306800;
    }
	.flex-container{
		display: flex;
		justify-content:space-between;
	}
	.top-bg{
		background-color: #D3D3E6;
		color: #000808;
		padding: 10px;
		border-radius:8px;
	}
	.top-button{
		margin-left: 10px;
		background-color: var(--darkIndigo);
		color: var(--mintyBlue);
		padding: 2.5px 10px;
		border-radius:5px;
		font-size:1.25rem;
		box-sizing:border-box;
		border:none;
	}
	.top-button:hover{
		background-color: var(--darkIndigo);
		border:none;
		color: var(--mintyBlue);
	}

	.bottom-button{
		margin-left: 10px;
		background-color: var(--darkIndigo);
		color: var(--mintyBlue);
		padding: 2.5px 10px;
		border-radius:5px;
		font-size:1.25rem;
	}
	.bottom-button:hover{
		background-color: var(--darkIndigo);
		color: var(--mintyBlue);
	}
	.middle-flex-container{
		display:flex;
		justify-content:space-between;
	}
	.light-content{
		font-weight: medium;
	}
	.dark-content{
		font-weight: bold;
	}
	.middle-bg{
		margin-top: 10px;
		background-color: #E5F1FF;
		color: #000000;
		border-radius:10px;
		margin-bottom: 10px;
	}
	
	.bottom-flex-container{
		display:flex;
		justify-content:space-between;
	}
	.border-b{
		border-bottom:1px solid white;
	}
	.middle-content{
		padding: 2.5px;
	}
	.note{
		color:var(--blackColor);
	}
	#container .table-bordered, #container .table-bordered td, #container .table-bordered th {
		border-color:var(--blackColor);
	}
	thead tr{
		background-color: #1A1A49;
	} 
	table thead tr th {
    text-align: center;
    padding: 0;
    color: #F8F5F5;
}
#container .table-bordered th {
	color: #F8F5F5;
	padding: 5px 2px;
}
#container .table-bordered td {
	color: var(--blackColor);
	text-align: center;
	padding: 5px 2px;
	}
#container .table-bordered .table-bottom {
	color: var(--blackColor);
	text-align: center;
	padding: 5px 2px;
	background-color: #FFC40C;
	}
.bottom-border{
	border:1px solid var(--blackColor);
}
.flex-item-top{
	display:flex;
	justify-content:space-between;
	border-bottom:1px solid var(--blackColor);
	color: var(--blackColor);
	padding: 5px;
	transition:0.1s ease-in background-color, 0.1s ease-in color;
}
.flex-item-bottom{
	display:flex;
	justify-content:space-between;
	/* border-bottom:1px solid var(--blackColor); */
	color: var(--blackColor);
	padding: 5px;
}
.flex-item-top:hover,
.flex-item-bottom:hover{
	background-color: #1A1A49;
	color: #fff;
}
.bottom-border{
	padding: 0px;
}
.main-note{
	background-color: #FFBB44;
	color: var(--blackColor);
	padding: 10px;
	border-radius:10px;
}
.search-note{
	background-color: #FFBB44;
	color: var(--blackColor);
	padding: 5px;
	border-radius:10px;
}
.main-head{
	margin-top: 10px;
	color: #858484;
	border-bottom:1px solid #E4E4E4;
}
.middle-text{
	color: var(--blackColor);
}
.extra-text{
	color:#858484;
}
.extra-text,
.middle-text{
	border-bottom:1px solid #CDD2D8;
	padding: 2px;
}
.bottom-content{
	margin-top:20px;
}
.bottom-right-content{
	border-right:1px solid #CDD2D8;
}
.bottom-content ul{
	padding: 0px;
	list-style: none;
}
.bottom-content ul li{
	padding: 7.5px;
}
.bottom-content ul li a{
	padding-left: 10px;
	color:#111C80;
	font-size:1.25rem;
	font-weight:bolder;
}
.bottom-content ul li a:hover{
	color:#006300;
}
.heading-section{
	padding: 10px;
	font-size:1.5rem;
	background-color: #E4E9EE;
	color: #112A46;
}
.reqiured-section{
	padding: 10px;
}
.heading-content div{
	display: inline;
	color: rgb(165 158 158);
}
.heading-content span{
	color:#584a4a;
	font-weight: 700;
}
.model-one-section-form{
	padding: 10px;
}
.important{
	color:red;
}
.input-label{
	color: #4b4242;;
	font-weight: bolder;
}
select.form-control {
    height: 32px;
}
.form-bottom{
	border-bottom:1px solid #DCDCDC;
	padding: 5px;
}
.model-bottom-one{
	font-style: italic;
	font-size:1.6rem;
	font-weight: bolder;
	color: rgb(69, 0, 118);
}
.radio-label{
	color:var(--blackColor);
}
.extra-container{
	display: flex;
	justify-content:space-between;
	border-bottom:1px solid ;
	padding-bottom: 0.5rem;
}
.extra-content{
	color:#8F979F;
	font-weight: bolder;
}
.extra-content-container{
	display: flex;
    /* margin-inline: 200px; */
    justify-content: center;
    border-bottom: 1px solid;
    padding: 7px;
}
.referral-slip{
	border:1px solid var(--blackColor);
	padding:2rem;
	transition:0.25s ease-in-out background-color;
}
.referral-slip:hover{
	background-color: #5D5DDC;
}
.referral-slip-content{
	padding: 2rem;
}
.referral-slip-content h4{
	color: #273039;
	font-weight: lighter;
}
.tycb-heading-one{
	background-color:#140945;
}
.tycb-heading-one h6{
	color: #fff;
	padding: 0.5rem;
}

.table-tyfcb{
	border-color:white;
}
</style>
<style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    input[type="number"] {
      -moz-appearance: textfield;
    }
  </style>