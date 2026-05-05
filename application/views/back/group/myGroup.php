<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('my_group')?></h1>
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
			<li><a href="#"><?= translate('network')?></a></li>
			<li><a href="#"><?= translate('my_group')?></a></li>

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
			
		        <h3 class="panel-title"><?= translate('')?></h3>
				</div>
                <div class="col-md-6" align="right" style="margin: 20px 0px 0px -10px;">		
                    <a href="<?= base_url()?>admin/network_group">
						<button class="top-button"><?= translate('public_group')?></button>
					</a>
                    <a href="<?= base_url()?>admin/add_group"><button class="top-button"><?= translate('add_group')?></button></a>
                    <button class="top-button" onclick="goBack()"><?= translate('back')?></button>
                    <button class="collapsible"><center><i class="fa fa-search"></i></center></button>
					<div class="content">
						<div class="form-group">
												
							<form action="" style="padding: 15px;">
								<div class="form-group">
									<label for="g_keyword"><?= translate("Keyword:_")?></label>
									<input type="text" id="g_keyword" name="g_keyword" class="form-control-plaintext" style="border-radius:5px;">
								</div>
								<div class="form-group form-check">
									<input class="form-check-input" type="checkbox" value="" id="g_title" name="g_title">
									<label class="form-check-label" for="g_title" style="margin-right: 2rem;">
										<?= translate('title_&_description')?>
									</label>
									<input class="form-check-input" type="checkbox" value="" id="g_topic" name="g_topic">
									<label class="form-check-label" for="g_topic" style="margin-right: 2rem;">
										<?= translate('Topics')?>
									</label>
									<input class="form-check-input" type="checkbox" value="" id="g_posts" name="g_posts">
									<label class="form-check-label" for="g_posts" style="margin-right: 2rem;">
									<?= translate('Posts')?>
									</label>
								</div>
								<div class="form-group">
									<label for="lname">Last name:</label>
									<input type="text" id="lname" name="lname" style="border-radius:5px;">
								</div>
								<div class="col-md-6">

								</div>
								<div class="col-md-6" style="padding-bottom: 1rem;">
									<button type="submit" class=" button-search  mb-2"><?= translate("search")?></button>
									<button type="reset" class=" button-search mb-2"><?= translate("clear_search")?></button>
								</div>
							</form>
						</div>
					</div>
				</div>
		      
		    </div>
		    <div class="panel-body">
	    		<div class="">
                    <div class="topbar">
                        <div><?= translate('view_by:')?></div>
                        <div>
                             <select name="myGroupoption" id="myGroupoption">
                                <option value="both"><?= translate('both')?></option>
                                <option value="creator"><?= translate('creator')?></option>
                                <option value="participants"><?= translate('participants')?></option>
                             </select>
                             <select name="myGroupoption" id="myGroupoption">
                                <option value="recent"><?= translate('recent')?></option>
                                <option value="most_active"><?= translate('most_active')?></option>
                             </select>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-12 msg-count">
                            <div class="row">
                                <table id="contact_messages_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-sortable="false">
                                            <?= translate('my_group')?>
                                        </th>
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
												<div class="col-md-12">
													<div class="group-individual">
														<div class="group-display-left">
															<img src="<?= base_url()?>ovi-logo.png" alt=""  width="80">
														</div>
														<div class="group-details">
															<strong>									
																<a href="<?= base_url()?>admin/group_content" style="font-size:1.5rem;"><?= translate('business_operation')?></a>
															</strong>
															<div>date</div>
															<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero quos, culpa esse sequi sapiente provident debitis voluptatibus asperiores! Id sequi nam, tempore nulla numquam fuga architecto eos veritatis at nostrum!</p>
															<div>Topic <a href="<?= base_url()?>admin/group_content">number </a>| Posts: number | Participent <a href="<?= base_url()?>admin/group_content">number</a></div>
														</div>
														<div class="group-right" style="width: 30%;">
																<span>creator: <a href="<?= base_url()?>admin/otherUser">Name</a></span>
																<div>group type:open viewand post</div>
																<div>last post: <a href="<?= base_url()?>admin/view_topic">Lorem ipsum dolor sit amet.</a></div>
																<div>date</div>
																<button class="group-button"><?= translate('leave_group')?></button>
														</div>
													</div>
													
												</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>					
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
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
<script>
    function openTab(tabName) {
        // Add your logic for tab switching here
        console.log("Switching to " + tabName);
    }
</script>
<script>
    $(document).ready(function () {
        $.extend($.fn.dataTable.defaults, {
        language: {
          info: "_TOTAL_ Groups"
        }
      });
        $('#contact_messages_table').DataTable({
            searching: false,     // Disable search bar
            lengthChange: false,  // Disable "Show entries" dropdown
            pageLength: 5,
            ordering: false
        });
        table.rows('tbody tr').every(function(index, element) {
        if (index >= 5) {
          $(this.node()).hide();
        }
      });
     
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
    .collapsible {
	
	cursor: pointer;
	padding: 1px;
	width: 5%;
	/* border: none; */
	text-align: left;
	outline: none;
	font-size: 15px;
    border:1px solid #39062B;
    background-color: #fff;
    border-radius: 5px;
	}

	.active, .collapsible:hover {
	
	}

	.collapsible:after {
	font-weight: bold;
	float: right;
	margin-left: 5px;
	}
    .content {
	padding: 0 18px;
	max-height: 0;
	overflow: hidden;
	transition: max-height 0.5s ease-out;
	background-color: #f1f1f1;
	margin-bottom: 10px;;
	}
    .top-button{
        border:1px solid #46325C;
        padding: 5.1px 10px;
        background-color: #fff;   
        color: #46325C;     
        border-radius:5px;
        margin-inline:5px;
    }
    .top-button:hover{
        color: #fff;   
        background-color: #46325C;     
        
    }
    .button-search{
        background-color: #46325C;
        color: #fff;
        padding: 2px 10px;
        border-radius: 5px;
        border: none;
    }
    input{
        border:1px solid grey
    }
    input:focus{
        outline:none;
    }
    .topbar{
        background-color: #D6D6D6;
        color: #112A46;
        display: flex;
        justify-content: space-between;
        padding: 10px;
        border-radius: 5px;
        font-size:1.2rem;
    }
	.group-container{
		border:1px solid lightgrey;
		margin-top: 10px;
		padding: 10px;
	}
	.group-individual{
		display:flex; 
		justify-content:space-between;
	}
	.group-display-left img{
		object-fit:contain;
		height: auto;
	}
	.group-details{
		width: 50%;
	}
	.group-right{
		border:none;
		border-radius:10px;
		background-color: #F1F5F8;
		padding: 10px;
		color:black;
	}
	.group-right button{
		float:right;
		margin-top: 20px;
		border:1px solid #46325C;
        padding: 2px 10px;
        background-color: #fff;   
        color: #46325C;     
        border-radius:5px;
        margin-inline:5px;
	}
	.group-right button:hover{
		color: #fff;   
        background-color: #46325C; 
	}
	.group-right div a,
	.group-right span a,
	.group-details a{
		color:#376A97;
	}
	.group-right div a:hover,
	.group-right span a:hover,
	.group-details a:hover{
		color:#821C9F;
	}
</style>
<style>
	#container .table-bordered, #container .table-bordered td, #container .table-bordered th {
    border-color: rgb(212 201 201);
}
</style>