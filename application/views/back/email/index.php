<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('operations')?></h1>
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
			<li><a href="#"><?= translate('operations')?></a></li>
			<li><a href="#"><?= translate('email_visitor_invitation')?></a></li>

		</ol>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End breadcrumb-->
	</div>
	<!--Page content-->
	<!--===================================================-->
	<div id="page-content">
		<div class="panel">
			

		    <div class="panel-heading">
                <div class="col-md-6" align="left" style="margin: 11px 0px 0px 6px;">						
					<h5><?= translate('email_visitor_invitation')?></h5>
				</div>
                <div class="col-md-6" align="right" style="margin: 11px 0px 0px -20px;">						
					<button class="back-button" onclick="goBack()">Back</button>
				</div>
		        <!-- <h3 class="panel-title"><?= translate('add_new_member_info')?></h3> -->
		      
		    </div>
		    <div class="panel-body">
	    		<div class="col-md-12">
                    <div class="heading">
                        <?= translate('enter _details')?>
                    </div>
                    <div class="form-content">
                    <form action="" method="post" >
                        <div class="form-group" >
                            
                            <label for="email_title"><?= translate('title')?> <span class="important">*</span></label>
                            <select class="form-control" id="email_title" name="email_title">
                                <option>Select One</option>
                                <option><?= translate('dr.')?></option>
                                <option><?= translate('mrs')?></option>
                                <option><?= translate('mr')?></option>
                                <option><?= translate('ms')?></option>
                                <option><?= translate('prof')?></option>
                                <option><?= translate('miss')?></option>
                            </select>
                        </div>
                        <div class="form-group" >
                            
                            <label for="email_fname"><?= translate('first_name')?> <span class="important">*</span></label>
                            <input type="text" class="form-control" id="email_fname" name="email_fname" required>
                        </div>
                        <div class="form-group" >
                            
                            <label for="email_lname"><?= translate('last_name')?> <span class="important">*</span></label>
                            <input type="text" class="form-control" id="email_lname" name="email_lname" required>
                        </div>
                        <div class="form-group" >
                            
                            <label for="email_cname"><?= translate('visitor_company_name')?> <span class="important">*</span></label>
                            <input type="text" class="form-control" id="email_cname" name="email_cname" required>
                        </div>
                        <div class="form-group" >
                            
                            <label for="email_address"><?= translate('Visitor Email Address (a CC will be sent to you)')?> <span class="important">*</span></label>
                            <input type="text" class="form-control" id="email_address" name="email_address" required>
                        </div>
                        
                       
                        <div class="form-group">
                            <label for="email_invintation"><?= translate('Personal Message that will appear at the top of the invitation')?> <span class="important">*</span></label>
                            <textarea class="form-control" id="email_invintation" style="width: 100%; height: 150px; resize: none;" name="email_invintation" required></textarea>
                        </div>
                       
                        
                            <button type="submit" class="form-button"><?= translate('send')?></button>
                            <button type="reset" class="form-button"><?= translate('cancel')?></button>
                        </form>
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
    .heading{
        background-color: #CADFDC;
        color:#112A46;
        padding: 10px;
        border-top-left-radius:15px;
        border-top-right-radius:15px;
    }
    .form-content{
        padding: 15px;
        color:#000;
        border: 1px solid lightgrey;
        border-top: none;
    }
    .form-group{
        border-bottom:1px solid lightgrey;
    }
    .select-content{
        padding: 5px;
    }
    .important{
        color:red;
    }
    .back-button{
        padding:5px 10px;
        border-radius:5px;
        border:1px solid var(--purpleColor);
        background-color: #fff;
        color: #000;
    }
    .back-button:hover{
        background-color:var(--purpleColor);
        color: #fff;
        border:none;
    }
    .overlay-content{
    background-color: #ffffff;
    padding: 10px;
    text-align:justify;
    width: 100%;
    height: 150px;
    border: 1px solid black;
    overflow-x: hidden;
    overflow-y: scroll
    }
    .form-button{
        padding: 5px 10px;
        background-color: var(--purpleColor);
        color:#FFFFFF;
        border-radius:5px;
        border:none;
    }
    .pointer{
        cursor: pointer;
    }
</style>