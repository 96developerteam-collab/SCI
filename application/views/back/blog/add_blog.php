<div id="content-container">
	
	<div id="page-head">
		<!--Page Title-->		
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('blog')?></h1>
		</div>		
		<!--End page title-->
		
		<!--Breadcrumb-->		
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>admin"><?php echo translate('home')?></a></li>
			<li><a href="#"><?php echo translate('blog')?></a></li>
			<li class="active"><a href="#"><?php echo translate('add_blog')?></a></li>
		</ol>		
		<!--End breadcrumb-->
	</div>

	<!--Page content-->
	<div id="page-content">
		<div class="row">
			<div class="col-md-10 col-lg-offset-1">
				<div class="panel">	

					<div class="row">
						<div class="col-md-6">
							<h2 class="panel-title" style="font-size: 17px !important;">Add Blogs</h2>
						</div>	
						<div class="col-md-6" align="right" style="margin: 9px 0px 0px -20px;">	
							<a href="<?=base_url()?>admin/blog" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward float-right" type="submit"><?php echo translate('go_back')?></a>
						</div>
					</div>

					<form class="form-horizontal" id="package_form" method="POST" action="<?=base_url()?>admin/blog/do_add" enctype="multipart/form-data">
						
						<div class="panel-body">
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('blog_title')?> <span class="text-danger">*</span></b></label>
								<div class="col-sm-9">									
									<input type="text" class="form-control" name="title" required="">
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('description')?> <span class="text-danger">*</span></b></label>
								<div class="col-sm-9">									
									<textarea type="text" class="form-control no-resize textarea" name="description" rows="10" required=""></textarea>
								</div>
							</div>							

							<div class="form-group">
								<label class="col-sm-2 control-label" for="image"><b><?php echo translate('blog_image')?> <span class="text-danger">*</span></b></label>
        				        
        				        <div class="col-sm-7"style="margin:2px;">				        	
        				            <img class="img-responsive img-border blah z-depth-1-bottom" style="width: 75%;" src="<?=base_url()?>uploads/blog_image/default_image.jpg" class="img-sm">			        	
        				        </div>

        				        <div class="col-sm-12" style="margin-top: 10px">
        				          <div class="col-sm-9 col-sm-offset-2" >
        				           	<span class="pull-left btn btn-default btn-file margin-top-10">
        				              <?php echo translate('select_a_photo')?>
        				              <input type="file" name="image" class="form-control imgInp" required>
        				           	</span>
        				          </div>
        				        </div>
							</div>
						</div>

						<div class="panel-footer text-right">
							<a href="<?=base_url()?>admin/blog" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward" type="submit"><?php echo translate('go_back')?></a>
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

<script>
	// SCRIPT FOR IMAGE UPLOAD
 	function readURL_all(input) {
    if (input.files && input.files[0]) {
    	var reader = new FileReader();
    	var parent = $(input).closest('.form-group');
    	reader.onload = function (e) {
    		parent.find('.wrap').hide('fast');
    		parent.find('.blah').attr('src', e.target.result);
    		parent.find('.wrap').show('fast');
    	}
    	reader.readAsDataURL(input.files[0]);
    }
 	}

 	$(".panel-body").on('change', '.imgInp', function () {
 		readURL_all(this);
 	});
</script>

