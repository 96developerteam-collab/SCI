<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('view_event_details')?></h1>
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
                                <li class="tab tab2" ><img src="<?= base_url()?>nav-icon-help.svg" alt=""></li>
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
			<li><a href="#"><?= translate('my_network')?></a></li>
			<li><a href="#"><?= translate('view_event_details')?></a></li>

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
			
		        <h3 class="panel-title"><?= translate('view_event_deatils')?></h3>
				</div>
                <div class="col-md-6" align="right" style="margin: 20px 0px 0px -10px;">		
			
		            <button class="top-button" onclick="goBack()"><?= translate('back')?></button>
				</div>
		      
		    </div>
		    <div class="panel-body">
                <div class="col-md-12">
                    <table class="table" style="border-radius:10px">
                        <thead>
                            <tr style="height: 30px;">
                                <th colspan="2" style="border:1px solid #D5D5D5;"></th>
                            </tr>
                            <tr>
                                <th colspan="2" style="border:1px solid #D5D5D5"><?= translate('event_details')?></th>
                            </tr>
                            <tbody>
                                <tr style="color: #000;">
                                    <td width="10%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('type')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="10%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('name')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="15%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('short_description')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="15%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('content_person')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="10%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('location')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="10%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('timezone')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="10%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('start_date/Time')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="10%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('end_date/Time')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="10%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('cost_for_member')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="10%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('cost_for_non_member')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="10%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('number&nbsp;of_registrations')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="10%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('max.no.of_attendence')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, expedita?</td>
                                </tr>
                                <tr style="color: #000;">
                                    <td width="10%" style="border:1px solid #E2E2E2;border-right:none;"><?= translate('details')?></td>
                                    <td width="90%" style="border:1px solid #E2E2E2;border-left:none">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, sequi maxime. Eaque saepe deserunt illum doloribus facere odit aliquid quam corporis! Incidunt consequuntur omnis laborum quos, alias accusamus rerum fugiat expedita minus laudantium aliquam ut cumque quasi sint? Nihil facere eaque voluptatem omnis odio voluptates ducimus, nemo quibusdam a inventore enim pariatur dolorum fugiat laboriosam quas. Reprehenderit officia voluptatem adipisci molestias. Non neque error veritatis repellat tempore impedit commodi illum quas quisquam aut placeat eius, minus eaque esse temporibus fuga voluptates rerum amet ratione velit quidem, officiis aliquam dolorem. Cupiditate maxime odio perspiciatis. Voluptates sapiente cum repellendus, ducimus eius iure?</td>
                                </tr>
                                
                            </tbody>
                        </thead>
                    </table>
                </div>
                <div class="col-md-12" align="right">
                    <button class="register-button" data-toggle="modal" data-target="#staticBackdrop"><?= translate('register')?></button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-xl" style="width: 700px;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Register for Event</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
                                    </button>
                                </div>
                                <!-- <form action="" method="post"> -->
                                    <div class="modal-body" style="overflow: hidden;">
                                        <div class="col-md-12 payment-caption">
                                                Please select a payment option for paying event fee
                                        </div>
                                            <div class="col-md-12 payment-dropdwn">
                                                <div class="col-md-4" align="right">
                                                    <label for="payment_option"><?= translate('payment_option')?></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="payment_option" name="payment_option" style="width: 70%;">
                                                        <option value="card">card</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="padding: 10px;border-bottom:1px solid #dee2e6;">
                                                <div class="col-md-4" align="right">
                                                    <label for="special_need"><?= translate('special_need')?></label>
                                                </div>
                                                <div class="col-md-8">
                                                <textarea class="form-control" id="special_need" rows="3" name="special_need" style="width: 70%;resize:none;border:1px solid border" required></textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer" style="text-align:center">
                                        <button type="submit" class="register-button"><?= translate('submit')?></button>
                                        <button type="button" class="register-button" data-dismiss="modal">Close</button>
                                    </div>
                                <!-- </form> -->
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
  function goBack() {
    window.history.back();
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
    .top-button{
        border:1px solid var(--purpleColor);
        background-color: #fff;
        color: var(--purpleColor);
        padding: 5px 15px;
        border-radius:5px;
    }
    .top-button:hover{
        border:none;
        background-color: var(--purpleColor);
        color: #fff;
    }
    .table{
        border:1px solid black;
    }
    
    th{        
        background-color: #EBEBEB;
        color: #424242;
    }
    tr{
        transition:0.5s ease-in background-color;
    }
    tr:hover{
        background-color: #fff2b2;
    }
    .register-button{
        background-color: var(--purpleColor);
        color: #fff;
        border:none;
        padding: 6px 10px;
        border-radius:5px;
    }
    .payment-caption{
        border-bottom:1px solid #d3d3d3;
        padding: 10px;
    }
    .payment-dropdwn{
        padding: 10px;
        border-bottom:1px solid #dee2e6;
    }
    .form-control {
    font-size: 14px;
    height: 100%;
    border-radius: 5px;
    box-shadow: none;
    border: 1px solid black;
    transition-duration: .5s;
}
</style>