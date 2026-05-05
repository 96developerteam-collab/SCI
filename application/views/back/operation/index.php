<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('operations')?></h1>
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
			<li><a href="#"><?= translate('operations')?></a></li>

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
				<div class="col-md-6" align="left" style="margin: 5px 0px 0px -10px;">		
					
					<h3 class="panel-title" ><?= translate('operation')?></h3>
				</div>
          		<div class="col-md-6" align="right" style="margin: 15px 0px 0px -20px;">
				</div>
		      
		    </div>
		    <div class="panel-body">
					<div class="col-md-12 top-heading">
						<div class="col-md-4 head-flex">
							<h2 class="back-title">Operations View Actions by:</h2>
							
						</div>
						<div class="col-md-4 back-topic"><h2 class="back-topic1"><?= translate('chapter')?></h2></div>
						<div class="col-md-4 ">
						
						</div>
					</div>
					<div class="col-md-6 left-content" style="height: 365px;">
						<button class="collapsible" onclick="openTab('tab1')"><?= translate('manage_visitors')?></button>
						
						<button class="collapsible" onclick="openTab('tab2')">❓<?= translate('meeting_management')?></button>
						<button class="collapsible" onclick="openTab('tab3')">❓<?= translate('manage_goals')?></button>
						<button class="collapsible" onclick="openTab('tab4')">❓<?= translate('mentoring_program')?></button>
						<button class="collapsible" onclick="openTab('tab5')">❓<?= translate('create_email')?></button>
					
					</div>
	    			<div class="col-md-6 left-content">
						<div id="tab1" class="tab-content" style="height: 365px;">
						
							<ul style="list-style-type: none;">
								
								<li><a href="<?= base_url()?>admin/registration_portal"><button class="collapsible" >❓<?= translate('visitor_registration_portal')?></button></a></li>
							</ul>
					
						</div>
						<div id="tab2" class="tab-content" style="height: 365px;">
							<ul style="list-style-type: none;">
								
								<li><a href="<?= base_url()?>admin/palms_summary"><button class="collapsible">❓<?= translate('View PALMS Summary')?></button></a></li>
							</ul>
							
							
							
							
						</div>
						<div id="tab3" class="tab-content" style="height: 365px;">
							<ul style="list-style-type: none;">
								
								<li><button class="collapsible" data-toggle="modal" data-target="#exampleModal">❓<?= translate('View Chapter Goals')?></button></a></li>
							</ul>
							</div>

							<div id="tab4" class="tab-content" style="height: 365px;">
							<ul style="list-style-type: none;">
								<li><a href="<?= base_url()?>admin/operation_mentor"><button class="collapsible" >❓<?= translate('View Mentor/Mentee')?></button></a></li>
							</ul>
							</div>

							
							
							<div id="tab5" class="tab-content" style="height: 365px; ">
								
								<ul style="list-style-type: none;">
									
									<li><button class="collapsible" data-toggle="modal" data-target="#staticBackdrop">❓<?= translate('Email My Chapter')?></button></a></li>
									<li><a href="<?= base_url('admin/email_invition')?>"><button class="collapsible" >❓<?= translate('Email Visitor Invitation')?></button></a></li>
									<li><a href="<?= base_url()?>admin/email_visitors"><button class="collapsible" >❓<?= translate('Email Chapter Visitors')?></button></a></li>
								</ul>
								
								
							</div>
							
						</div>
					

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog  modal-xl" style="width: 1000px;">
								<div class="modal-content" >
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel"><?= translate('view_chapter_goals')?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
										</button>
									</div>
									<div class="modal-body" style="padding: 100px;">
										<h2 class="modal-body-title"><?= translate('India > Bangalore North West > BNI Yellitza')?></h2>
										<form action="" method="post">
											<div class="form-group">
											<label for="exampleFormControlInput1"><?= translate('start_date')?><span class="important">*</span></label>
											<input type="date" class="form-control" id="exampleFormControlInput1" required>
											</div>
											<button type="button" type="submit" class="btn btn-primary" onclick="openTab('tab8')">view</button>
											<div id="tab8" class="tab-content">
												<div class="tab-container">
													<div class="tab-one-flex">

														<div class="col-md-6">
															<h1 class="panel-title"><?= translate('View Chapter Goals')?></h1>
														</div>
														<div class="col-md-6" align="right">
															<div class="button-group">
																<button class="top-button"><?= translate('export_without_header')?></button>
																<button class="top-button"><?= translate('export')?></button>
																<button class="top-button"><?= translate('print')?></button>
																<button class="top-button"><?= translate('back')?></button>
															</div>
														</div>
													</div>
													<div class="col-md-6" >
														<div class="tab-two-flex">
															<div>
																<p><?= translate('Running User')?></p>
																<b>Gururaj N</b></div>
															<div>
																<p>Run At</p>
																<p><b>time</b></p>
															</div>
															<div>
																<p>Country</p>
																<b>India</b>
															</div>
															<div>
																<p>Region</p>
																<b>Bangalore North West</b>
															</div>
															<div>
																<p>Chapter</p>
																<b>Yellitza</b>
															</div>
														</div>
													</div>
														<div class="col-md-12">
															<div class="col-md-12 lt-vision">
																	<p><?= ('Long Term Vision')?></p>
															</div>
															<div class="col-md-12 lt-para">
																<p><?= ('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore, aliquid?')?></p>
															</div>
														</div>
														
														<div class="col-md-12" style="margin-top: 15px;">
															<div class="col-md-12 lt-vision">
																	<p><?= ('Mission Statement')?></p>
															</div>
															<div class="col-md-12 lt-para">
																<p><?= ("Importance of attendance, Adhering to 120 Days renewal process & Members Retention , 2 induction per month, 6  Visitors per week Consistently, 2 months once Focus Visitors day,  Instead of Socials conducting online group activities (lock-down Continuous), Identifying active best networking Members, More focus on Power buddies, Powerful Joint Calls with best awarding, Focus on members attending Training's, Monthly Review meeting on LT, MAARG & Others coordinators along with statisics report and Conducting impressive meeting.")?></p>
															</div>
														</div>
														<div class="col-md-12 " style="margin-top: 15px;">
															<div class="col-md-5 lt-vision-one">
																	<p><?= ('Attendance Percentage')?></p>
															
															</div>
															<div class="col-md-7 lt-vision-two" align="right">
																<p><?= ('date')?></p>
																<p><?= ('date')?></p>
																<p><?= ('date')?></p>
																<p><?= ('date')?></p>
																<p><?= ('date')?></p>
																<p><?= ('date')?></p>
															</div>
															<div class="col-md-12 lt-para">
																<table class="table table-bordered table-hover">
								
																	<tbody>
																		<tr>
																		<th scope="row"><?= translate('goal')?></th>
																		<td><?= translate('0')?></td>
																		<td>0</td>
																		<td>0</td>
																		<td>0</td>
																		<td>0</td>
																		<td>0</td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Actual')?></th>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 1')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 2')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="col-md-12">
															<div class="col-md-12 lt-vision">
																	<p><?= ('Total Number of 1 to 1s')?></p>
																	
															</div>
															<div class="col-md-12 lt-para">
																<table class="table table-bordered table-hover">
								
																	<tbody>
																		<tr>
																		<th scope="row"><?= translate('goal')?></th>
																		<td><?= translate('0')?></td>
																		<td> </td>
																		<td> </td>
																		<td> </td>
																		<td> </td>
																		<td> </td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Actual')?></th>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 1')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 2')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="col-md-12">
															<div class="col-md-12 lt-vision">
																	<p><?= ('CEUs (Chapter Education Units)')?></p>
																	
															</div>
															<div class="col-md-12 lt-para">
																<table class="table table-bordered table-hover">
								
																	<tbody>
																		<tr>
																		<th scope="row"><?= translate('goal')?></th>
																		<td><?= translate('0')?></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Actual')?></th>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 1')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 2')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="col-md-12">
															<div class="col-md-12 lt-vision">
																	<p><?= ('Visitors')?></p>
																	
															</div>
															<div class="col-md-12 lt-para">
																<table class="table table-bordered table-hover">
								
																	<tbody>
																		<tr>
																		<th scope="row"><?= translate('goal')?></th>
																		<td><?= translate('0')?></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Actual')?></th>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 1')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 2')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="col-md-12">
															<div class="col-md-12 lt-vision">
																	<p><?= ('New Memberships')?></p>
																	
															</div>
															<div class="col-md-12 lt-para">
																<table class="table table-bordered table-hover">
								
																	<tbody>
																		<tr>
																		<th scope="row"><?= translate('goal')?></th>
																		<td><?= translate('0')?></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Actual')?></th>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 1')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 2')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="col-md-12">
															<div class="col-md-12 lt-vision">
																	<p><?= ('Number of Members in Chapter')?></p>
																	
															</div>
															<div class="col-md-12 lt-para">
																<table class="table table-bordered table-hover">
								
																	<tbody>
																		<tr>
																		<th scope="row"><?= translate('goal')?></th>
																		<td><?= translate('0')?></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Actual')?></th>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 1')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 2')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="col-md-12">
															<div class="col-md-12 lt-vision">
																	<p><?= ('Number of Referrals')?></p>
																	
															</div>
															<div class="col-md-12 lt-para">
																<table class="table table-bordered table-hover">
								
																	<tbody>
																		<tr>
																		<th scope="row"><?= translate('goal')?></th>
																		<td><?= translate('0')?></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Actual')?></th>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 1')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 2')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="col-md-12">
															<div class="col-md-12 lt-vision">
																	<p><?= ('Thank You for Closed Business')?></p>
																	
															</div>
															<div class="col-md-12 lt-para">
																<table class="table table-bordered table-hover">
								
																	<tbody>
																		<tr>
																		<th scope="row"><?= translate('goal')?></th>
																		<td><?= translate('0')?></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Actual')?></th>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 1')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																		<tr>
																		<th scope="row"><?= translate('Mechanism 2')?></th>
																		<td></td>
																		<td> </td>
																		<td></td>
																		<td></td>
																		<td> </td>
																		<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
												</div>
											</div>
										</form>
											
									</div>
									<div class="modal-footer">
										
									</div>

								</div>
							</div>
						</div>
						<!-- email my chapter modal -->
						<!-- Modal -->
						<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl"  style="width: 1000px;">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel"><?= translate('Email My Chapter')?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
										</button>
									</div>
									<div class="modal-body">
										<h5 class="body-heading">
											Please copy and paste the list into your email client. Duplicate email addresses have been removed from this list.
										</h5>
										<div class="form-group">
											<textarea class="form-control" id="ops_emails_entry" name="ops_emails_entry" rows="3" style="resize:none;height:300px"></textarea>
										</div>
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
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
function openTab(tabName) {
    let i, tabContent;
    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
      tabContent[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
  }

  // Add the following line to display Tab 1 by default
  openTab('tab1');
</script>
<script>
        function printPage() {
            window.print();
        }
</script>
<style>
    :root{
        --blackColor:#000;
        --purpleColor:#4D2D6B;
        --whiteColor:#fff;
        --lightgrey:#F5F7F7;
        --charcoalColor:#333333;
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
	.left-content{
		border:1px solid lightgrey;
	}
	
</style>
<style>
	.collapsible {
  background-color: #fff;
  color: #000;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #fff;
}

.collapsible:after {
  color: #000;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}



.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #fff;
  color:black;
}
.received {
  color: black;
}

.received:hover {
  color: #147AF0;
}


/* .tab-container {
  display: flex;
  flex-direction: column;
  max-width: 600px;
  margin: 20px auto;
} */

.tab-button {
  background-color: #3498db;
  color: #fff;
  padding: 10px;
  cursor: pointer;
  border: none;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
}

.tab-button:hover {
  background-color: #555;
}

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
.image{
	display:block;
}
.image img{
	height: 80px;
	width: 80px;
	margin-right: 20px;
	object-fit: contain;
}

.flex-container {
  display: flex;
  border-bottom:1px lightgrey solid;
  padding: 10px 20px;
  
}
.flex-container:hover {
  background-color: #BEBFC5;
  color:#0E1B69;
}
.top-button{
	padding:  5px 10px;
	color: #112a46;
	background-color: #fff;
	border-radius:5px;
	border:1px solid #112a46;
}
.top-button:hover
{
	background-color: #112a46;
	color: #fff;
}
.top-heading{
  background-color: #94979D;
  padding: 1px;
  border-top-right-radius:10px;
  border-top-left-radius:10px;
}
.head-flex{
    display: flex;
    float:left;
    /* justify-content: space-around; Align items horizontally to the end */
    /* align-items: flex-end;  */
}
.nc-search-bar{
	border-style:none;
}
.nc-search-bar,.nc-connection-button{
  padding: 2px 5px;
  border-radius:7px;
}
.nc-connection-button{
  border-color:#3A4256;
  background-color:#160F34;
  color:#fff;
}
.para{
  margin-right: 30px;
}
.button{
    margin-left: 50px;
    
}
.action-button-1,
.action-button-2
{
  background-color: #D3E6EE;
  color:#011727;
  border-color: #D3E6EE
}
.action-button-1:hover,
.action-button-2:hover
{
  background-color: #fff;
  color:#000;
}
.action-button-1{
  border-top-left-radius:10px;
  border-bottom-left-radius:10px;
}
.action-button-2{
  border-top-right-radius:10px;
  border-bottom-right-radius:10px;
}
.connect-search{
	display:flex;
	justify-content:space-between;
	border-bottom:1px solid grey;
	border-width:0 0 1px;
	padding-bottom: 5px;
}
.search-connect{
	padding:2px 5px;
	background-color: #112A46;
	color: #fff;
	border-radius:8px
}
/* .panel-title{
    color:#fff;
} */
.back-title{
    font-size:1.35rem;
    color: #fff;
    width:100%
}
.back-topic{
    font-size:1.35rem;
    border-right:1px solid black;
    border-left:1px solid black;
    background-color: #fff;
}
.back-topic1{
    font-size:1.35rem;
    color:#003;
    
}
.modal-body-title{
	color:#4B565A;
	font-size:1.5rem;
}
.important{
	color:red;
}
.body-heading{
		color:#8E8D8D;
		font-size:1.2rem;
}
.tab-one-flex
{
	display:flex;
	margin-bottom: 1rem;
}
.tab-two-flex{
	display:flex;
	justify-content:space-evenly;
	margin-bottom: 1rem;
}
.tab-container{
	background-color: #E7EDF8;
	color: #050303;
	width: 120%;
    margin-left: -7.5rem;
	padding: 1.5rem 1.5rem 175.7rem  10px;
	border-radius:10px;
}
.button-group{
	display:flex;
	justify-content:space-between;
}
.top-button{
	background-color: #1B1537;
	color: #fff;
}
.top-button:hover{
	background-color: #1B1537;
	color: #fff;
}
.lt-vision{
	background-color:#1B1537 ;
	padding: 2.5px; 
}
.lt-vision p{
	color:#fff;
	margin-bottom: 0;
}
.lt-para{
	background-color: #fff;
	padding: 2.5px;
}
.lt-para p{
	color: #000;
	margin-bottom: 0;
}
.lt-vision-one{
	background-color:#1B1537 ;
	padding: 2.5px; 
}
.lt-vision-one p{
	color:#fff;
	margin-bottom: 0;
}
.lt-vision-two{
	background-color:#1B1537 ;
	padding: 2.5px; 
	display:flex;
	justify-content:space-between;
}
.lt-vision-two p{
	color:#fff;
	margin-bottom: 0;
}
</style>