<script type="text/javascript" src="https://affiliate.siddhrans.in/integration/general_integration"></script>
<script type="text/javascript">
 AffTracker.setWebsiteUrl( "https://www.edigamatchmaker.com/home/login" );
 AffTracker.createAction( "login" )
</script>
<style>
.blink_text {
		 animation-name: blinker;
		 animation-duration: 2s;
		 animation-timing-function: linear;
		 animation-iteration-count: infinite;
		}
</style>
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<div id="page-title">
			<div class="row">
				<div class="col-md-6">
					<!-- <h1 class="page-header text-overflow"></h1> -->	
					<h3 class="panel-title text-overflow" style="font-size: 22px !important;"><?=translate('dashboard')?></h3>				
				</div>
							
			</div>			
		</div>
		<!--End page title-->
	</div>
	<!--Page content-->
	<!--===================================================-->
	<div id="page-content">
	
		<dvi class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-overflow"><?=translate('SCI_member_informations')?></h5>
						<div class="row">
							<div class="col-md-3 col-lg-3">
								<div class="panel">
									<div class="panel-body text-center clearfix">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-users fa-3x text-purple"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$total_members?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('total_members')?>
											</p><br>
												<p style="display: flex;align-items: center;margin-top: -8px;font-weight: bold;"><span>Pending Members:<?=$total_pending_members?></span>  
    										<span>Approved Members:<?=$total_approved_members?></span></p>
										</div>
									</div>
								</div>
							</div>
							
					<div class="col-md-3 col-lg-3">
								<div class="panel">
									<div class="panel-body text-center clearfix">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-trophy fa-3x text-warning"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$total_premium_members?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('national_members')?>
											</p><br>
											<p style="display: flex;align-items: center;margin-top: -8px;font-weight: bold;"><span>Pending Members:<?=$prepending?></span>  
    										<span>Approved Members:<?=$preapproved?></span></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-lg-3">
								<div class="panel">
									<div class="panel-body text-center clearfix" >
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-user-circle-o fa-3x text-mint"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$total_free_members?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('legion_members')?>
											</p><br>
											<p style="display:flex;align-items: center;margin-top: -8px;font-weight: bold;"><span>Pending Members:<?=$pending?></span>  
    										<span>Approved Members:<?=$approved?></span></p>
										</div>
									</div>
								</div>
							</div>
				
							<div class="col-md-3 col-lg-3">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="height: 202px;">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-user-times fa-3x text-danger"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$total_blocked_members?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('blocked_members')?>
											</p><br>
											<!------ (19-3-21)----------->
											<p style="display:flex;align-items: center;margin-top: -8px;font-weight: bold;"><span sty>Male:<?=$total_blocked_male?></span>  
    										<span style="margin-left: 80px;">Female:<?=$total_blocked_female?></span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					<!--<--------- Free Members Details Start --------->

				<div class="row">
					<div class="col-md-12">
						<h5 class="text-overflow"><?=translate('legion_member_informations')?></h5>
						<div class="row">
							
							<div class="col-md-3 col-lg-3">
								<div class="panel">
									<div class="panel-body text-center clearfix">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">												
												<i class="fa fa-users fa-3x text-mint"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$total_free_members?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('total_legion_members')?>
											</p><br>
												<p style="display: flex;align-items: center;margin-top: -8px;font-weight: bold;"><span>Pending Members:<?=$pending?></span>  
    										<span>Approved Members:<?=$approved?></span></p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 col-lg-3">
								<div class="panel">
									<div class="panel-body text-center clearfix">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">												
												<i class="fa fa-female fa-3x text-mint"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$free_member_bride?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('total_legion_member_female')?>
											</p><br>
												<p style="display: flex;align-items: center;margin-top: -8px;font-weight: bold;"><span>Pending Female Members:<?=$pending_free_member_bride?></span>  
    										<span>Approved Female Members:<?=$approved_free_member_bride?></span></p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 col-lg-3">
								<div class="panel">
									<div class="panel-body text-center clearfix">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">												
												<i class="fa fa-male fa-3x text-mint"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$free_member_groom?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('total_legion_member_male')?>
											</p><br>
												<p style="display: flex;align-items: center;margin-top: -8px;font-weight: bold;"><span>Pending Male Members:<?=$pending_free_member_groom?></span> 
    										<span>Approved Male Members:<?=$approved_free_member_groom?></span></p>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-3 col-lg-3">
								<div class="panel">
									<div class="panel-body text-center clearfix">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">												
												<i class="fa fa-users fa-3x text-mint"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$remaining_members?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('remaining_members')?>
											</p><br>
												<p style="display: flex;align-items: center;margin-top: -8px;font-weight: bold;"><span>Pending Members:<?=$pending_remaining_members?></span>  
    										<span>Approved Members:<?=$approve_remaining_members?></span></p>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!--<--------- Free Members Details End --------->


				<!--<--------- Premium Members Details Start ---------> 

				<div class="row">
					<div class="col-md-12">
						<h5 class="text-overflow"><?=translate('national_member_informations')?></h5>
						<div class="row">
							
							<div class="col-md-3 col-lg-3">
								<div class="panel">
									<div class="panel-body text-center clearfix">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">												
												<i class="fa fa-users fa-3x text-warning"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$total_premium_members?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('total_national_members')?>
											</p><br>
												<p style="display: flex;align-items: center;margin-top: -8px;font-weight: bold;"><span>Pending Members:<?=$prepending?></span>  
    										<span>Approved Members:<?=$preapproved?></span></p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 col-lg-3">
								<div class="panel">
									<div class="panel-body text-center clearfix">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">												
												<i class="fa fa-female fa-3x text-warning"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$premium_member_bride?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('total_national_member_female')?>
											</p><br>
												<p style="display: flex;align-items: center;margin-top: -8px;font-weight: bold;"><span>Pending Female Members:<?=$pending_premium_member_bride?></span>  
    										<span>Approved Female Members:<?=$approved_premium_member_bride?></span></p>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-3 col-lg-3">
								<div class="panel">
									<div class="panel-body text-center clearfix">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">												
												<i class="fa fa-male fa-3x text-warning"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$premium_member_groom?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('total_national_member_male')?>
											</p><br>
												<p style="display: flex;align-items: center;margin-top: -8px;font-weight: bold;"><span>Pending Male Members:<?=$pending_premium_member_groom?></span>  
    										<span>Approved Male Members:<?=$approved_premium_member_groom?></span></p>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!--<--------- Premium Members Details End --------->
				<!--free marriage applicants-->
				<?php
$application_data = $this->db->select('*')->from('marriage_application_form')->where('delete_status', '0')->get()->result_array();

?>
				<!--<div class="row">-->
				<!--	<div class="col-md-12">-->
				<!--		<h5 class="text-overflow"><?=translate('Free_marriage_applicants_informations')?></h5>-->
				<!--		<div class="row">-->
							
				<!--			<div class="col-md-3 col-lg-3">-->
				<!--				<div class="panel">-->
				<!--					<div class="panel-body text-center clearfix">-->
				<!--						<div class="col-sm-12 pad-top">-->
				<!--							<div class="text-lg">												-->
				<!--								<i class="fa fa-users fa-3x text-warning"></i>-->
				<!--							</div>-->
				<!--							<div class="text-lg">-->
				<!--								<p class="text-2x text-thin text-main">-->
				<!--									<?=count($application_data)?>-->
				<!--								</p>-->
				<!--							</div>-->
											
				<!--						</div>-->
				<!--					</div>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<--------- start of paid earnings --------->	
				
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-overflow"><?=translate('paid earnings')?></h5>
						
						<div class="row">
							<div class="col-md-5ths">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-briefcase fa-3x text-primary"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=currency('', 'def'). $total_paid;?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('total_paid')?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-usd fa-3x text-warning"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=currency('', 'def'). $paid_last_month_earnings?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('last_month')?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-money fa-3x text-info"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=currency('', 'def'). $paid_last_3_months_earnings?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('last_3_months')?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-money fa-3x text-mint"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=currency('', 'def'). $paid_half_yearly_earnings?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('half_yearly')?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-money fa-3x text-success"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=currency('', 'def'). $paid_yearly_earnings?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('yearly')?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
   <!--<--------- end of paid earnings --------->	

   <!--<--------- start of due earnings --------->	
			
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-overflow"><?=translate('due earnings')?></h5>
						
						<div class="row">
							<div class="col-md-5ths">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-briefcase fa-3x text-primary"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=currency('', 'def'). $total_due;?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('total_due')?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-usd fa-3x text-warning"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=currency('', 'def'). $due_last_month_earnings?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('last_month')?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-money fa-3x text-info"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=currency('', 'def'). $due_last_3_months_earnings?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('last_3_months')?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-money fa-3x text-mint"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=currency('', 'def'). $due_half_yearly_earnings?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('half_yearly')?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-money fa-3x text-success"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=currency('', 'def'). $due_yearly_earnings?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('yearly')?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
       <!--<--------- end of due earnings --------->
      
			<div class="row">
					<div class="col-md-12">
						<h5 class="text-overflow"><?=translate('Projects informations')?></h5>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-venus-mars fa-3x text-pink"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$total_stories?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('total_projects')?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-check-circle fa-3x text-success"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$approved_stories?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('approved_Projects')?>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="panel">
									<div class="panel-body text-center clearfix" style="padding: 12px 0">
										<div class="col-sm-12 pad-top">
											<div class="text-lg">
												<!-- <img src="<?=base_url()?>uploads/dashboard_icons/icon-md.png" style="width: 64px"> -->
												<i class="fa fa-question-circle fa-3x text-danger"></i>
											</div>
											<div class="text-lg">
												<p class="text-2x text-thin text-main">
													<?=$pending_stories?>
												</p>
											</div>
											<p class="text-sm text-bold text-uppercase">
												<?=translate('pending_projects')?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-overflow"><?=translate('informatives')?></h5>
						<div class="row">
							<div class="col-md-3">
						        <a href="<?=base_url()?>admin/frontend_appearances/pages">
							        <div class="panel media middle pad-all">
							            <div class="media-left">
							                <span class="icon-wrap icon-wrap-sm icon-circle bg-dark">
							                <i class="psi-monitor-3 icon-2x"></i>
							                </span>
							            </div>
							            <div class="media-body">
							                <p class="text-lg text-semibold text-main"><?=translate('frontend_pages_settings')?></p>
							            </div>
							        </div>
						       	</a>
						    </div>
						    <div class="col-md-3">
						       	<a href="<?=base_url()?>admin/payments">
							        <div class="panel media middle pad-all">
							            <div class="media-left">
							                <span class="icon-wrap icon-wrap-sm icon-circle bg-primary">
							                <i class="fa fa-credit-card-alt fa-2x"></i>
							                </span>
							            </div>
							            <div class="media-body">
							                <p class="text-lg text-semibold text-main"><?=translate('payments_settings')?></p>
							            </div>
							        </div>
						       	</a>
						    </div>
						    <div class="col-md-3">
						       	<a href="<?=base_url()?>admin/social_media_comments">
							        <div class="panel media middle pad-all">
							            <div class="media-left">
							                <span class="icon-wrap icon-wrap-sm icon-circle bg-info">
							                <i class="fa fa-comments-o fa-2x"></i>
							                </span>
							            </div>
							            <div class="media-body">
							                <p class="text-lg text-semibold text-main"><?=translate('social_comments_settings')?></p>
							            </div>
							        </div>
						       	</a>
					       	</div>
					  <!--     	<div class="col-md-3">-->
							<!--    <a href="https://activeitzone.com/product/active-matrimonial-cms/knowledge-base/diagramic-analytics" target="_blank">-->
							<!--        <div class="panel media middle pad-all">-->
							<!--            <div class="media-left">-->
							<!--                <span class="icon-wrap icon-wrap-sm icon-circle bg-danger">-->
							<!--                <i class="fa fa-file fa-2x"></i>-->
							<!--                </span>-->
							<!--            </div>-->
							<!--            <div class="media-body">-->
							<!--                <p class="text-lg text-semibold text-main"><?=translate('diagram')?></p>-->
							<!--            </div>-->
							<!--        </div>-->
							<!--    </a>-->
							<!--</div>-->
						</div>
						<!--<div class="row">-->
						<!--	<div class="col-md-3">-->
						<!--	    <a href="https://activeitzone.com/product/active-matrimonial-cms/knowledge-base/how-to" target="_blank">-->
						<!--	        <div class="panel media middle pad-all">-->
						<!--	            <div class="media-left">-->
						<!--	                <span class="icon-wrap icon-wrap-sm icon-circle bg-warning">-->
						<!--	                <i class="fa fa-question-circle fa-2x"></i>-->
						<!--	                </span>-->
						<!--	            </div>-->
						<!--	            <div class="media-body">-->
						<!--	                <p class="text-lg text-semibold text-main"><?=translate('how_to')?></p>-->
						<!--	            </div>-->
						<!--	        </div>-->
						<!--	    </a>-->
						<!--	</div>-->
						<!--	<div class="col-md-3">-->
						<!--       	<a href="https://activeitzone.com/product/active-matrimonial-cms/knowledge-base/structure-list" target="_blank">-->
						<!--	        <div class="panel media middle pad-all">-->
						<!--	            <div class="media-left">-->
						<!--	                <span class="icon-wrap icon-wrap-sm icon-circle bg-success">-->
						<!--	                <i class="psi-structure icon-2x"></i>-->
						<!--	                </span>-->
						<!--	            </div>-->
						<!--	            <div class="media-body">-->
						<!--	                <p class="text-lg text-semibold text-main"><?=translate('structural_info')?></p>-->
						<!--	            </div>-->
						<!--	        </div>-->
						<!--	    </a>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
				</div>
			</div>
		</dvi>
	</div>
	<!--===================================================-->
	<!--End page content-->
</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->
