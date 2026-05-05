<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('group_name')?></h1>
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
			<li><a href="#"><?= translate('group')?></a></li>
			<li><a href="#"><?= translate('group_name')?></a></li>

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
			
		            <h3 class="panel-title"><?= translate('group:_group_name')?></h3>
				</div>
                <div class="col-md-6" align="right" style="margin: 20px 0px 0px -10px;">		
			
		            <button class="back-button"><?= translate('join')?></button>
		            <button class="back-button"onclick="goBack()"><?= translate('back')?></button>
				</div>
		      
		    </div>
		    <div class="panel-body">
                <div class="tab-container" id="tabContainer">
                    <button class="tab-button" onclick="changeTab(0)"><?= translate('topics')?></button>
                    <button class="tab-button" onclick="changeTab(1)"><?= translate('participants')?></button>
                    <button class="tab-button" onclick="changeTab(2)"><?= translate('group_details')?></button>
                </div>

                <div class="tab-content" id="tabContent1">
                    <div class="col-md-12 opportunity-msg">
                        Anyone seeking opportunity or has a opportunity to let others know can use this community, This is a general one for those who want to find out opportunities.
                    </div>
                    <div class="msg-container">
                        <div class="col-md-8 opportunity-msg-1">
                            Please remember to choose a moderator to assist with managing the discussion!
                        </div>
                    </div>
                    <div class="table-container">
                        <div class="col-md-12" style="margin-top: 10px;">
                            <div class="row">
                                <table id="contact_messages_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-sortable="false">
                                            <?= translate('topic')?>
                                        </th>
                                        <th data-sortable="false">
                                            <?php echo translate('messages')?>
                                        </th>
                                        <th data-sortable="false">
                                            <?php echo translate('last_post_on')?>
                                        </th>
                                        <th data-sortable="false">
                                            <?php echo translate('option')?>
                                        </th>
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="<?= base_url()?>admin/view_topic">data</a></td>
                                            <td>data</td>
                                            <td>data</td>
                                            <td>data</td>
                                        </tr>
                                    </tbody>
                                </table>					
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="tab-content" id="tabContent2">
                    <div class="col-md-12 button" align="right">
                        <button  data-toggle="modal" data-target="#staticBackdropone"><?= translate('invite')?></button>
                    </div>
                    <div class="col-md-6 image-container">
                        <div class="participant-img">
                            <img src="<?= base_url()?>ovi-logo.png" alt=""  width="100">
                        </div>
                        <div>
                            <a href="">name</a>
                            <div style="color: #000;"><?= translate('participant')?></div>
                        </div>
                       
                    </div>
                    <div class="col-md-6 image-container">
                        <div class="participant-img">
                            <img src="<?= base_url()?>ovi-logo.png" alt=""  width="100">
                        </div>
                        <div>
                            <a href="">name</a>
                            <div style="color: #000;"><?= translate('participant')?></div>
                        </div>
                       
                    </div>
                    
                    
                </div>

                     <div class="tab-content" id="tabContent3">
                            <div class="col-md-12 opportunity-msg">
                                Anyone seeking opportunity or has a opportunity to let others know can use this community, This is a general one for those who want to find out opportunities.
                            </div>
                            
                            
                            <table class="table">
                                <tbody>
                                    <tr style="border-bottom: 2px solid lightgray;">
                                        <td align="right" style="border-right:1px dashed #b0bcd1"><?= translate('start_date')?></td>
                                        <td align="left"  style="color:black">data</td>
                                        <td align="right" style="border-right:1px dashed #b0bcd1;"><?= translate('visiblity')?></td>
                                        <td align="left" style="color:black">data</td>                                        
                                    </tr>
                                    <tr style="border-bottom: 2px solid lightgray;">
                                        <td align="right" style="border-right:1px dashed #b0bcd1"><?= translate('type')?></td>
                                        <td align="left"  style="color:black">data</td>
                                        <td align="right" style="border-right:1px dashed #b0bcd1"><?= translate('language')?></td>
                                        <td align="left"  style="color:black">data</td>                                        
                                    </tr>
                                    <tr style="border-bottom: 2px solid lightgray;">
                                        <td align="right" style="border-right:1px dashed #b0bcd1"><?= translate('creator')?></td>
                                        <td align="left"  style="color:navy"><a href="">data</a></td>
                                        <td align="right" style="border-right:1px dashed #b0bcd1"><?= translate('moderators')?></td>
                                        <td align="left"  style="color:navy"><a href="">data</a></td>                                        
                                    </tr>
                                    <tr style="border-bottom: 2px solid lightgray;">
                                        <td align="right" style="border-right:1px dashed #b0bcd1"><?= translate('participants')?></td>
                                        <td align="left"  style="color:black">data</td>
                                        <td align="right" style="border-right:1px dashed #b0bcd1"><?= translate('topics')?></td>
                                        <td align="left"  style="color:black">data</td>                                        
                                    </tr>
                                    <tr style="border-bottom: 2px solid lightgray;">
                                        <td align="right" style="border-right:1px dashed #b0bcd1"><?= translate('messages')?></td>
                                        <td align="left"  style="color:black">data</td>
                                        <td align="right" style="border-right:1px dashed #b0bcd1"><?= translate('resources')?></td>
                                        <td align="left"  style="color:black">data</td>                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                            
                           
                    </div>


                         
                        <!-- invite modal -->                        
                        <div class="modal fade" id="staticBackdropone" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" style="width: 1024px;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"><?= translate('invite')?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
                                        </button>
                                    </div>
                                    <form action="" method="post">
                                        <div class="modal-body">
                                            <div class="col-md-12" align="right">
                                                <span style="color: red;margin-inline:10px">*</span><?= translate('required_field')?>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-5" align="right" style="color: var(--blackColor);">
                                                    <label for="invite_mem"><?= translate('invite_connections')?></label>
                                                    <span style="color: red;margin-inline:10px">*</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <select multiple  id="invite_mem" name="invite_mem" style="width:250px;height: 100px;" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer" style="overflow:overlay;text-align:center">
                                            <button type="button" class="close-button"><?= translate('submit')?></button>
                                            <button type="button" class="close-button" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
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
    function goBack() {
        window.history.back();
    }
</script>
<script>
    $(document).ready(function () {
        $('#contact_messages_table').DataTable();
    });
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
   :root{
    --whiteColor:#fff;
    --blackColor:#000;
    --darkPurple:#461D51;
    --silverColor:#ced4da;
   }

    .tab-container {
      display: flex;
      gap: 0px;
      border:1px solid #ccc;
      width: 24.08%; /** remove this whenver styling gets worse*/
      border-radius:5px;
    }

    .tab-button {
      padding: 5px 10px;
      cursor: pointer;
      border: none;
      background-color: var(--whiteColor);
      color: var(--blackColor);
      font-weight: bolder;
    }

    .tab-content {
      display: none;
      margin-top: 28px;
    }
     /* Styles for the initially open tab (Tab 1) */
     .tab-button:first-child {
      background-color: #f1f1f1;
      color: var(--blackColor);
    }

    #tabContent1 {
      display: block;
    }
    /* Styles for the other tabs when opened */
    .tab-button:not(:first-child) {
      background-color: var(--whiteColor);;
      color: #564592;
    }
    .opportunity-msg-1 ,.button-topic{
        margin-top: 10px;
    }
    .opportunity-msg-1{
        background-color: #f6bf58;
        color: var(--blackColor);
        font-weight: bold;
        padding: 2px;
        border-radius:5px;
    }
    .button-topic button,.modal-buttons{
        background-color: var(--purpleColor);
        color:var(--whiteColor);
        border-radius:5px;
        border:none;
        padding: 5px 20px;
    }
    .back-button{
        padding: 4px 15px;
        border:1px solid var(--purpleColor);
        background-color: var(--whiteColor);;
        color: var(--purpleColor);
        border-radius:5px;
        margin-inline:2px;
    }
    .back-button:hover{
        background-color: var(--purpleColor);
        color: var(--whiteColor);;
    }
    .opportunity-msg{
        border:1px solid var(--silverColor);
        color:#6c757d;
        padding: 5px;
        border-radius:5px;
        font-size:1.35rem;
        margin-bottom: 10px;
    }
    .msg-container{
        margin-top: 10px;
    }
    input{
        width: 204px;
    }
    input,textarea{
        border:1px solid var(--silverColor);
        border-radius:5px;
    }
    input:focus,textarea:focus{
        outline:none;
    }
    .participant-img img{
        object-fit:contain;
        height: auto;
        margin-right: 15px;
    }
    .image-container{
        display:flex;
        height: 100px;
        padding: 10px;
        margin-bottom: 10px;
        border:1px solid transparent;
        border-radius:10px;
    }
    .image-container:hover{
        border:1px solid var(--silverColor);
    }
    .image-container div a{
        font-weight: bold;
        color: #00a6fb;
        font-size:1.45rem;
    }
    .image-container div a:hover{
        color: #35034f ;
    }
    .table tr td a{
        color: #368EAC;
    }
    .table tr td a:hover{
        color: #1A0819;
    }
    .button{
        margin: 10px;
    }
    .button button,.close-button{
        padding: 0.5rem 3.5rem;
        background-color: var(--purpleColor);
        color: var(--whiteColor);
        border-radius:5px;
        border:none;
    }
    select:focus{
        outline:none;
    }
    </style>
<script>
    function changeTab(tabIndex) {
    // Reset all tabs to default styles
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabButtons.forEach(button => {
      button.style.backgroundColor = '#fff';
      button.style.color = '#564592';
    });

    tabContents.forEach(content => {
      content.style.display = 'none';
    });

    // Set the selected tab to active styles
    tabButtons[tabIndex].style.backgroundColor = '#f1f1f1';
    tabButtons[tabIndex].style.color = 'black';
    tabContents[tabIndex].style.display = 'block';
  }
</script>