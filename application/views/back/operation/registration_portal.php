<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?= translate('visit_registions_portal')?></h1>
                    
		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>admin"><?= translate('home')?></a></li>
			<li><a href="#"><?= translate('visit_registions_portal')?></a></li>
			<li><a href="#"><?= translate('add_visit_registions_portal')?></a></li>

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
			
		        <h3 class="panel-title"><?= translate('add_visit_registions_portal')?></h3>
				</div>
		      
		    </div>
		    <div class="panel-body">
                
                <a href="<?= base_url()?>admin/registration_add" class="card-slector">      

                    <div class="col-md-12 card-container">

                            <div class="card text-white bg-light mb-3" style="width: 40rem;">
                            <div class="card-header text-white"><span class="icon"><i class="fa fa-user-plus fa-5x"></i></span></div>
                            <div class="card-body">
                                <h3 class="card-title"><?= translate('add_visitor_registor')?></h3>
                                <p class="card-text"><?= translate('add_new_registration_with_the_chapter')?></p>
                            </div>
                            <div class="card-footer"><a href="<?= base_url()?>admin/registration_add"><h5><?= translate('add_regitration')?></h5></a><span class="arrow">→</span></div>
                            </div>
                        

                    </div>
                </a> 
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
    
      
</style>
<style>
    .card-slector{
        color:#fff
    }
    .icon{
        color:white;
    }
    .card-text{
        color: #2F4F4F;
    }
    .card-container{
        display: flex;
        justify-content:center;
        
    }
    .card{
        /* padding: 10px; */
        border-radius:8px;
        transition: box-shadow 0.45s ease-in-out,transform 0.45s ease-in-out;
    }
    .card:hover{
        transform:translateY(-10%) ;
        box-shadow: 8px 8px 15px rgba(0,0,0,0.5);

    }
    .card-header{
        padding: 12px 20px;
        margin-bottom: 1px;
    }
    .card-body{
        padding: 20px;
    }
    .bg-light{
        background-color: #ACC8E5;
        color: #000;
    }
    .card-footer{
        padding: 10px;
        border-top: 2px solid white;
        background-color: var(--purpleColor);
        color: #F5F5F5;
        border-bottom-right-radius:8px;
        border-bottom-left-radius:8px;
    }
    .card-footer a{
        display:inline-block;
        margin-right: 2.5rem;
    }
    .card-footer a h5{
        text-decoration:none;
        color:#fff;
    }
    .card-footer a h5:hover{
        text-decoration:underline;
    }
    .card-title{
        margin-top: 0px;
    }
    .arrow{
        font-size:1.5rem;
    }
    .button-hover:hover{
        box-shadow:15px 15px 0px;
    }
</style>