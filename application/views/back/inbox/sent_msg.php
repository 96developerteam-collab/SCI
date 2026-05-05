<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('read_message')?></h1>
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
                                <li class="tab tab2" onclick="openTab('tab3')"><img src="<?= base_url()?>nav-icon-print.svg" alt=""></li>
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
			<li><a href="#"><?= translate('send_message')?></a></li>
			<li><a href="#"><?= translate('sent_message')?></a></li>

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
			
		        <h3 class="panel-title"><?= translate('sent_message')?></h3>
				</div>
                <div class="col-md-6" align="right" style="margin: 20px 0px 0px -10px;">		
                    <button class="top-button" onclick="goBack()"><?= translate('back')?></button>
				</div>
		      
		    </div>
		    <div class="panel-body">
	    		<div class="col-md-12">
                    <div class="top-heading">
                        <?= translate('message_details')?>
                    </div>
                    <div class="message-content">
                        <div class="message-container">
                            <div class="col-md-1" align="center" style="font-weight: bold;"><?= translate('sender_:')?></div>
                            <div class="col-md-11">name</div>
                        </div>
                        <div class="message-container">
                            <div class="col-md-1" align="center" style="font-weight: bold;"><?= translate('subject_:')?></div>
                            <div class="col-md-11 upperCase">subject of the message</div>
                        </div>
                        <div class="message-container">
                            <div class="col-md-1" align="center" style="font-weight: bold;"><?= translate('dated_:')?></div>
                            <div class="col-md-11">date</div>
                        </div>
                        <div class="message-container-one">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus ipsa in, dolorum maiores cum a consectetur praesentium corporis tempore voluptatum alias ea pariatur vero amet eum velit magni cumque perspiciatis?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 bottom-container" align="right">
                    <button class="bottom-button"><?= translate('delete')?></button>
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
  function goBack() {
    window.history.back();
  }
</script>
<style>
    :root{
        --blackColor:#000;
        --purpleColor:#4D2D6B;
        --whiteColor:#fff;
        --borderColor:#bfbfbf;
        --buttonSize:0.5rem 3.5rem;
        --borderRadius:6px;
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
    .top-button{
        background-color: var(--whiteColor);
        color: var(--purpleColor);
        padding:var(--buttonSize);
        border:1px solid var(--purpleColor);
        border-radius:var(--borderRadius);
    }
    .top-button:hover{
        background-color: var(--purpleColor);
        color: var(--whiteColor);
        border:none;
    }
    .top-heading{
            background-color: #E4E4E4;
            color: #545656;
            padding: 10px;
            font-weight: bold;
            font-size:1.5rem;
            border:1px solid var(--borderColor);
            border-bottom:none;
            border-radius:10px 10px 0 0;
    }
    .message-content{
        padding:10px;
        border:1px solid var(--borderColor);
        border-top:none;
        overflow:overlay;
    }
    .message-container{
        border-bottom:1px solid var(--borderColor);
        overflow:overlay;
        padding: 5px;
        font-size:1.3rem;
    }
    .upperCase{
        text-transform:uppercase;
    }
    .message-container-one{
        padding: 10px;        
        white-space:pre-line;
        color: var(--blackColor);
    }
    .bottom-container{
        padding:10px;
        margin-top: 10px;
    }
    .bottom-button{
        background-color: var(--purpleColor);
        color: var(--whiteColor);
        border-radius:var(--borderRadius);
        padding: var(--buttonSize);
        border:none;
    }
    </style>