<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('network')?></h1>
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
			<li><a href="#"><?= translate('profile')?></a></li>
			<li><a href="#"><?= translate('depiction')?></a></li>

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
                <div class="col-md-12" align="center" style="margin: 9px 0px 0px -20px;">						
					<a href="<?=base_url()?>admin/network" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-user"></i> <?php echo translate('profile')?></a>
                    <a href="<?=base_url()?>admin/bio" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-user-circle"></i> <?php echo translate('bio')?></a>
                    <a href="<?=base_url()?>admin/connection" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-sliders"></i> <?php echo translate('connections')?></a>
                    <a href="<?=base_url()?>admin/photos" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-picture-o"></i> <?php echo translate('photos')?></a>
                    <a href="<?=base_url()?>admin/group" id="demo-dt-view-btn" class="btn btn-primary add-tooltip"><i class="fa fa-users"></i> <?php echo translate('groups')?></a>
                    <a href="<?=base_url()?>admin/training" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-book"></i> <?php echo translate('training_histroy')?></a>
                    <a href="<?=base_url()?>admin/testimonials" id="demo-dt-view-btn" class="btn btn-light add-tooltip"><i class="fa fa-comments"></i> <?php echo translate('testimonials')?></a>
				</div>
		        <!-- <h3 class="panel-title"><?= translate('add_new_member_info')?></h3> -->
		      
		    </div>
		    <div class="panel-body">
                
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="col-md-6 connection-container">
                            <div class="image-container">
                                <img src="<?= base_url()?>ovi-logo.png" alt="" width="90">
                            </div>
                            <div class="desc-container">
                                <a href="<?= base_url()?>admin/group_content"><h5><?= translate('group_name')?></h5></a>
                                <small>Lorem ipsum dolor sit amet. Lorem, ipsum.</small>
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
        function printPage() {
            window.print();
        }
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
.image-container{
    height: auto;
    object-fit:contain;
}
.connection-container{
    display:flex;
    margin: 1em;
    border:1px solid transparent;
    border-radius:10px;
    padding: 10px;
    /* padding-top: 2px; */
    width: 70%;
    height: 100px;
}
.connection-container:hover{
    border-radius:10px;
    border:1px solid #C3C2C6;
}
.desc-container h5{
    margin: 0;
}
.desc-container{
    margin-left: 10px;
}
.desc-container h5{
    color:#2295A7;
}
.desc-container h5:hover{
    color: #160D2F;
}
</style>
