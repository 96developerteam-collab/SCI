<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head" style="margin-bottom: 20px;">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?= translate('newsletter')?></h1>

		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>admin"><?= translate('home')?></a></li>
			<li><a href="#"><?= translate('newsletter')?></a></li>
		</ol>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End breadcrumb-->
	</div>
	<!--Page content-->
	<!--===================================================-->

	<div class="form-group" style="margin-left: 81px;    margin-bottom: 12px;" >
	 <button type="button"  name="individual" id="individual"><b><?php echo translate('individual_email')?> </b></button>

		<button type="button" name="bulk"
		id="bulk" style="margin-left: 15px;margin-top: 7px;"><b ><?php echo translate('bulk_email')?></b></button> 
	</div>

	<div id="page-content">
		<div class="panel">
			<?php if (!empty($this->session->flashdata('mail_send_alert'))): ?>
				<div class="alert alert-success" id="success_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?= $this->session->flashdata('mail_send_alert') ?>
	            </div>
			<?php endif ?>
			
			<div class="panel-heading">
				<h3 class="panel-title"><?= translate('send_newsletter')?></h3>

			</div>
			<div class="panel-body">
				<div class="row" id="individual_section">
					<div class="col-md-12">
						<?php if (!empty(validation_errors())): ?>
                <div class="widget" id="newsletter_error">
                    <div style="border-bottom: 1px solid #e6e6e6;">
                        <div class="card-title" style="padding: 0.5rem 1.5rem; color: #fcfcfc; background-color: #de1b1b; border-top-right-radius:0.25rem; border-top-left-radius:0.25rem;">You <b>Must Provide</b> the Information(s) bellow</div>
                        <div class="card-body" style="padding: 0.5rem 1.5rem; background: rgba(222, 27, 27, 0.10);">
                            <style>
                                #newsletter_error p {
                                    color: #DE1B1B !important; margin: 0px !important; font-size: 12px !important;
                                }
                            </style>
                            <?= validation_errors();?>
                        </div>
                    </div>
                </div>
            <?php
                endif;
            ?>

			    		<form class="form-horizontal" method="POST" action="<?=base_url()?>admin/newsletter/send">
                
			    			<div class="form-group">
								<label class="col-sm-3 control-label" for="emails"><b><?php echo translate('e-mails_(users)')?></b></label>
										<div class="row">
										<div class="col-md-6">
											<label>Single User</label>

											<?php
											$single_user = $this->db->select('*')->from('member')->get()->result();

											// echo "<pre>";
											// print_r($single_user);
											// exit();

											?>

											<select id="single" class="js-states form-control" name="to_email">
												<option value = "Select single user" name="email1"></option>
												<?php foreach($single_user as $row) { ?>
													<option value='<?php echo $row->email;?>'><?php echo $row->email;?></option>
												<?php }?>		          
                      </select>
                    </div>                   
                  </div>                 
							  </div>

							<div class="form-group">
								<label class="col-sm-3 control-label" for="seo_revisit"><b><?= translate('newsletter_subject')?> </b></label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="subject"  placeholder="<?php echo translate('newsletter_subject')?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="seo_description"><b><?= translate('description')?> </b></label>
								<div class="col-sm-8">
									<textarea class="form-control textarea" name="newsletter_desc" cols="30" rows="5" id="newsletter_desc"></textarea>
									<p class="help-block text-danger" id="text_area_display" style="display: none;"><?php echo translate('should_not_be_empty'); ?></p>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-8 text-right">
									<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('send')?></button>
								</div>
							</div>
						</form>
					</div>				
				</div>

				<div class="row" id="bulk_section">
					<div class="col-md-12">
						<?php if (!empty(validation_errors())): ?>
			                <div class="widget" id="newsletter_error">
			                    <div style="border-bottom: 1px solid #e6e6e6;">
			                        <div class="card-title" style="padding: 0.5rem 1.5rem; color: #fcfcfc; background-color: #de1b1b; border-top-right-radius:0.25rem; border-top-left-radius:0.25rem;">You <b>Must Provide</b> the Information(s) bellow</div>
			                        <div class="card-body" style="padding: 0.5rem 1.5rem; background: rgba(222, 27, 27, 0.10);">
			                            <style>
			                                #newsletter_error p {
			                                    color: #DE1B1B !important; margin: 0px !important; font-size: 12px !important;
			                                }
			                            </style>
			                            <?= validation_errors();?>
			                        </div>
			                    </div>
			                </div>
			            <?php
			                endif;
			            ?>

			    		<form class="form-horizontal" method="POST" action="<?=base_url()?>admin/newsletter/send">

			    			<div class="form-group">
								<label class="col-sm-3 control-label" for="emails"><b><?php echo translate('e-mails_(users)')?></b></label>
								<?php
								$multi_user = $this->db->select('*')->from('member')->get()->result();
								?>
								<div class="col-sm-6">
                    	<label>Multiple User</label>
                    	<select id="multiple" class="js-states form-control" multiple>
                    		<option value = "Select Multi User"></option>
                    		<?php foreach($multi_user as $row){?>
                    			<option value = "<?php echo $row->email;?>"><?php echo $row->email;?></option>
                    		<?php }?>
 
						          </select>   									 
								</div>

							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label" for="emails"><b><?php echo translate('e-mails_(users)')?></b></label>
								<div class="col-sm-8">
									<?php 
										$user_email = array();
										$user_data = $this->db->get('member')->result_array();
										foreach ($user_data as $row ) {

											$user_email[] = $row['email'];
										}
										$user_email = join(',',$user_email);
									 ?>
									<input type="text" name="user_email" class="form-control" placeholder="<?php echo translate('keywords')?>" value="<?php echo $user_email ?>" data-role="tagsinput" required="">
								</div>
                           </div>

							<div class="form-group">
								<label class="col-sm-3 control-label" for="seo_revisit"><b><?= translate('newsletter_subject')?> </b></label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="subject"  placeholder="<?php echo translate('newsletter_subject')?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="seo_description"><b><?= translate('description')?> </b></label>
								<div class="col-sm-8">
									<textarea class="form-control textarea" name="newsletter_desc" cols="30" rows="5" id="newsletter_desc"></textarea>
									<p class="help-block text-danger" id="text_area_display" style="display: none;"><?php echo translate('should_not_be_empty'); ?></p>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-8 text-right">
									<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('send')?></button>
								</div>
							</div>
						</form>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



    <script>
      $("#single").select2({
          placeholder: "Select User Mail",
          allowClear: true
      });
      $("#multiple").select2({
          placeholder: "Select User Mail",
          allowClear: true
      });
    </script>

<script type="text/javascript">

	$( document ).ready(function() {

	  $('#individual').click(function(){
	 		$('#individual_section').show();
    	$('#bulk_section').hide();
   	});

  	$('#bulk').click(function(){
    	$('#bulk_section').show();
    	$('#individual_section').hide();
  	});

 	});

</script>

<script>

	$('#text_area_display').hide();
	setTimeout(function() {
	    $('#success_alert').fadeOut('fast');
	    $('#danger_alert').fadeOut('fast');
	}, 5000); // <-- time in milliseconds

	$('.textarea').wysihtml5();

	$('#newsletter_settings_form').on('submit',function(e){
		var error_count = 0 ;
		if(!text_area_is_valid()){
			$('#text_area_display').show();
			error_count++;
		}
		return error_count == 0 ? true : false ;
	});
	function text_area_is_valid(){
		return $("#newsletter_desc").val() != "" ? true : false;
	}

</script>
