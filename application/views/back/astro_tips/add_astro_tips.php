<div id="content-container">	
	<div id="page-head">
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('channel_partner')?></h1>
		</div>					
		<ol class="breadcrumb">
			<li><a href="#"><?php echo translate('home')?></a></li>			
			<li class="active"><a href="#"><?php echo translate('add_channel_partner')?></a></li>
		</ol>			
	</div>

	<div id="page-content">
		<div class="row">
			<div class="col-md-10 col-lg-offset-1">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title"><span><?php echo translate('Add Astro Tips')?></span><span style="float: right !important;"><a href="<?=base_url()?>admin/astro_tips" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward" type="submit"><?php echo translate('go_back')?></a></span</h3>
					</div>

					<form class="form-horizontal" id="package_form" method="POST" action="<?=base_url()?>admin/astro_tips/do_add" enctype="multipart/form-data">
						<div class="panel-body">
							<!-- <label class="text-main text-semibold" for="demo-hor-name"><b><?php echo translate('astro_Tips')?></b></label>
							<div class="form-group">								
								<div class="col-md-11">
									<textarea name="astro_tips" class="form-control no-resize textarea" rows="13">	
									</textarea>
								</div>
							</div> -->

							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
                                        <label for="last_name" class="c-gray-light"><?php echo translate('Tips_Main_Title')?> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="main_title" required style="height: 35px;">                                      
                                    </div>									
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="form-group">
                                        <label for="last_name" class="c-gray-light"><?php echo translate('Tips_Sub_Title')?></label>
                                        <input type="text" class="form-control" name="sub_title" style="height: 35px;">
                                    </div>									
								</div>								
							</div>

							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
                                        <label for="last_name" class="c-gray-light"><?php echo translate('description')?> <span class="text-danger">*</span></label>                                        
                                        <textarea name="astro_tips" class="form-control no-resize" rows="6" required></textarea>
                                    </div>									
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="form-group">
                                        <label for="last_name" class="c-gray-light"><?php echo translate('key_points')?></label>
                                        <textarea name="key_points" class="form-control no-resize" rows="6"></textarea>
                                    </div>									
								</div>								
							</div>
						</div>

						<div class="panel-footer text-center">
							<!-- <a href="<?=base_url()?>admin/astro_tips" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward" type="submit"><?php echo translate('go_back')?></a> -->
							<button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('submit')?></button>
						</div>
					</form>
				</div>
			</div>
  		</div>	
	</div>	
</div>

<script>
	$(function () {
	    //bootstrap WYSIHTML5 - text editor
	    $('.textarea').wysihtml5({
	        toolbar: {
	            "image": false // Button to insert an image.
	        }
	    });
	})	
</script>

<style>
	.form-horizontal .form-group {
	    margin-right: 0px !important; 
	    margin-left: 0px !important; 	    
	}
	.data{
		float:right;
		color:white;
		margin-top: 10px;
		background: linear-gradient(to right, #2b68ba, #2193b0);
    	color: #e6eaef !important;
    	transition: all ease .5s;
	}
</style>