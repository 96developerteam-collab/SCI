<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?= translate('compose_message')?></h1>

		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>admin"><?= translate('home')?></a></li>
			<li><a href="#"><?= translate('network')?></a></li>
			<li><a href="#"><?= translate('compose_message')?></a></li>

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
			
		        <h3 class="panel-title"><?= translate('compose_message')?></h3>
				</div>
                <div class="col-md-6" align="right" style="margin: 20px 0px 0px -10px;">		
			
		        <button class="top-button" onclick="goBack()"><?= translate('back')?></button>
				</div>
		      
		    </div>
		    <div class="panel-body">
                <!-- <form action="" method="post"> -->
                    <div class="col-md-12 top-heading" align="left">
                        <?= translate('edit_message')?>
                    </div>
                    <div class="col-md-12 border-content">
                            <div class="col-md-5" align="right">
                                <label for="compose_sub"><?= translate('subject')?></label>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="compose_sub" id="compose_sub" required>
                            </div>
                    </div>
                    <div class="col-md-12 border-content">
                            <div class="col-md-5" align="right">
                                <label for="compose_body"><?= translate('body')?></label>
                                <span style="color: red;">*</span>
                            </div>
                            <div class="col-md-7">
                                <textarea name="compose_body" id="compose_body" cols="30" rows="10" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md12" align="right">
                        <button class="bottom-button" type="submit"><?= translate('submit')?></button>
                        <button class="bottom-button" type="reset"><?= translate('cancel')?></button>
                    </div>
                <!-- </form> -->
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
  function goBack() {
    window.history.back();
  }
</script>
<style>
    .top-button{
        padding: 5px 15px;
        background-color: #fff;
        color: #492D7B;
        border: 1px solid #492D7B;
        border-radius:5px;
    }
    .top-button:hover{
        color: #fff;
        background-color: #492D7B;
    }
    .top-heading{
        background-color: #D5D5D5;
        color: #3A3A3E;
        padding: 1rem;
        font-size:1.5rem;
        border-radius:15px 15px 0px 0px;
        font-weight: bolder;
    }
    .border-content{
        border:1px solid lightgrey;
        border-top:none;
        padding: 10px;
        color: black;
    }
    .sub-content{
        border-bottom:1px solid lightgrey;

    }
    textarea{
        resize:none;
        width: 500px;
    }
    input{
        width: 300px;
        height: 30px;
    }
    textarea,input{
        outline:none;
        border-radius:8px;
        border:1px solid #8C8C8E;
    }
    .bottom-button{
        color: #fff;
        background-color: #492D7B;
        border:none;
        padding: 5px 15px;
        margin-bottom: 15px;
        border-radius:6px;
    }
</style>
