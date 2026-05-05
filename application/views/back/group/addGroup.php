<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('group')?></h1>
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
			<li><a href="#"><?= translate('group')?></a></li>
			<li><a href="#"><?= translate('add_group')?></a></li>

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
					<h5><?= translate('add_group')?></h5>
				</div>
                <div class="col-md-6" align="right" style="margin: 11px 0px 0px -20px;">						
					<button class="back-button" onclick="goBack()">Back</button>
				</div>
		        <!-- <h3 class="panel-title"><?= translate('add_new_member_info')?></h3> -->
		      
		    </div>
		    <div class="panel-body">
	    		<div class="col-md-12">
                    <div class="heading">
                        <?= translate('view_group')?>
                    </div>
                    <div class="form-content">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1"><?= translate('remaining_group_you_may_create')?></label>
                            <p><?= translate('set_a limit_lesson_than_10')?></p>
                        </div>
                        <div class="form-group">
                            
                            <label for="addgroup_name"><?= translate('Group Name')?> <span class="important">*</span></label>
                            <input type="text" class="form-control" id="addgroup_name" name="addgroup_name" required>
                        </div>
                        <div class="form-group">
                            <label for="addgroup_access"><?= translate('access_type')?></label>
                            <select class="form-control" id="addgroup_access" name="addgroup_access">
                                <option>View and Port</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="addgroup_type"><?= translate('group_type')?> </label>
                            <select class="form-control" id="addgroup_type" name="addgroup_type">
                                <option>Open</option>
                                <option>Invinte</option>
                                <option>Memeber can visit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="addgroup_desc"><?= translate('group_description')?> <span class="important">*</span></label>
                            <textarea class="form-control" id="addgroup_desc" style="width: 100%; height: 150px; resize: none;" name="addgroup_desc" required></textarea>
                            <span class="important">Group Description is Mandatory</span>
                        </div>
                        <div class="form-group">
                            <label for="addgroup_language"><?= translate('group_language')?> </label>
                            <select class="form-control" id="addgroup_language" name="addgroup_language">
                                <option value="value1">English</option>
                                <option value="value2">Kannada</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="addgroup_invite"><?= translate('invite_connection')?></label>
                            
                            <select class="form-control overlay-content pointer" id="addgroup_invite" style="width: 100%; height: 150px;" name="addgroup_invite" required  size="3">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                            
                        </div>
                            <button type="submit" class="form-button"><?= translate('submit')?></button>
                            <button type="reset" class="form-button"><?= translate('reset')?></button>
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
        background-color: #E5F0F0;
        color:#112A46;
        padding: 10px;
        border-top-left-radius:15px;
        border-top-right-radius:15px;
    }
    .form-content{
        padding: 15px;
        color:#000;
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
        padding:0.5rem 3.5rem;
        border-radius:5px;
        border:1px solid var(--purpleColor);
        background-color: var(--whiteColor);
        color: #000;
    }
    .back-button:hover{
        background-color:var(--purpleColor);
        color: var(--whiteColor);
        border:none;
    }
    .overlay-content{
    background-color: #ffffff;
    padding: 10px;
    text-align:justify;
    width: 100%;
    height: 150px;
    border: 1px solid var(--blackColor);
    overflow-x: hidden;
    overflow-y: scroll
    }
    .form-button{
        padding: 0.5rem 3.5rem;
        background-color: var(--purpleColor);
        color:var(--whiteColor);
        border-radius:7px;
        border:none;
    }
    .pointer{
        cursor: pointer;
    }
</style>