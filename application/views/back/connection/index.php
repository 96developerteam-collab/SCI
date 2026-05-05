<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('connection')?></h1>
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
			<li><a href="#"><?= translate('connection')?></a></li>

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
                <div class="col-md-6" align="left" style="margin: 7px 0px 0px -20px;">						
					<h3 class="panel-title"><?= translate('connections')?></h3>
				</div>
          <div class="col-md-6" align="right" style="margin: 15px 0px 0px -20px;">						
				    <a href="<?= base_url()?>admin/network_testimonials"><button class="top-button"><?= translate('testimonials')?></button></a>
				    <a href="<?= base_url()?>admin/add_connection"><button class="top-button"><?= translate('add_connections')?></button></a>
					<button class="top-button" onclick="goBack()"><?= translate('back')?></button>
				</div>
		      
		    </div>
		    <div class="panel-body">
          <div class="col-md-12 top-heading">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-5 head-flex">
              <input type="search" name="nc_search" id="nc_search" class="nc-search-bar">&nbsp;
              <button class="nc-connection-button"><?= translate('search_my_connection')?></button>
            </div>
          </div>
	    		<div class="col-md-6 left-content" style="height: 586px;">
					<button class="collapsible" onclick="openTab('tab6')"><?= translate('all_connections()')?></button>
					<div class="content">
						<ul style="list-style-type: none;padding-left: 17px;overflow-x: hidden; overflow-y: scroll;">
							<li><a href="#" class="received" onclick="openTab('tab1',event)">name 1</a></li>
							<li><a href="#" class="received" onclick="openTab('tab2',event)">name 2</a></li>
							<li><a href="#" class="received" onclick="openTab('tab3',event)">name 3</a></li>
							<li><a href="#" class="received" onclick="openTab('tab4',event)">name 4</a></li>
							<li><a href="#" class="received" onclick="openTab('tab5',event)">name 5</a></li>
							
						</ul>
					</div>
					<button class="collapsible" onclick="openTab('tab7')"><?= translate('Sent Requests()')?></button>
					<div class="content">
						<ul style="list-style-type: none;padding-left: 17px;overflow-x: hidden; overflow-y: scroll">
							<li><a href="#" class="received">name 1</a></li>
							<li><a href="#" class="received">name 2</a></li>
							<li><a href="#" class="received">name 3</a></li>
							<li><a href="#" class="received">name 4</a></li>
							<li><a href="#" class="received">name 5</a></li>
						</ul>
					</div>
					<button class="collapsible" onclick="openTab('tab8')"><?= translate('Sent Requests()')?></button>
					
					

					
				</div>
	    		<div class="col-md-6 left-content" style="height: 586px;padding: 0;">
					
						<div id="tab1" class="tab-content">
							<div class="image-caption-container" style="background-color: #DADEE2;border-bottom:1px solid black">
								<div class="image-container">

									<div class="connection-image">
										<img src="<?= base_url()?>ovi-logo.png" alt="">
									</div>
									<div class="para">
										<h4>Intial Name</h4>
										<p class="para-sub">India > Bangalore North East > BNI Go Getter</p>
										<p class="para-sub">xx Connections | x Testimonials</p>
									</div>
								</div>
							</div>
							<div class="sub-flex-container">
								<div style="text-align:left">Working on</div>
								<div style="text-align:left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, fuga!</div>
							</div>
							<div class="sub-flex-container">
								<div style="text-align:left">Address:</div>
								<div style="text-align:left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, fuga!</div>
							</div>
							<div class="sub-flex-container">
								<div style="text-align:left">Email:</div>
								<div style="text-align:left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, fuga!</div>
							</div>
							<div class="sub-flex-container">
								<div style="text-align:left">Phone:</div>
								<div style="text-align:left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, fuga!</div>
							</div>
							<div class="sub-flex-container">
								<div style="text-align:left">Company:</div>
								<div style="text-align:left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, fuga!</div>
							</div>
							<div class="sub-flex-container">
								<div style="text-align:left">Industry and Classification:</div>
								<div style="text-align:left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, fuga!</div>
							</div>
							<div class="bottom-click">
								<a href="<?= base_url()?>admin/network_msg"><?= translate('> send_a_message')?></a>
								<a href="" data-toggle="modal" data-target="#staticBackdrop"><?= translate('> ask intial name for testimonials')?></a>
								<a href="" data-toggle="modal" data-target="#staticBackdropone"><?= translate('> give intial name a testimonial')?></a>
								<a href="" class="anchor-tab"><?= translate('> view intial name profile')?></a>
								<a href="" class="anchor-tab"><?= translate('> delete intial name from my connection')?></a>
							</div>
						</div>

						<div id="tab2" class="tab-content">
							<h2>Content for Tab 2</h2>
							<p>This is the content for the second tab.</p>
						</div>

						<div id="tab3" class="tab-content">
							<h2>Content for Tab 3</h2>
							<p>This is the content for the third tab.</p>
						</div>
						<div id="tab4" class="tab-content">
							<h2>Content for Tab 4</h2>
							<p>This is the content for the third tab.</p>
						</div>
						<div id="tab5" class="tab-content">
							<h2>Content for Tab 5</h2>
							<p>This is the content for the third tab.</p>
						</div>
						<div id="tab6" class="tab-content" style="overflow-x: hidden; overflow-y: scroll;height: 586px;">
									<div class="flex-container" onclick="openTab('tab1')">

										<div class="image">
											<img src="<?= base_url()?>ovi-logo.png" alt="">
										</div>
										<div class="para">

											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, aspernatur.</p>
										</div>
									</div>
									<div class="flex-container" onclick="openTab('tab2')">

									<div class="image" >
										<img src="<?= base_url()?>ovi-logo.png" alt="" >
									</div>
									<div class="para">

										<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, deleniti!</p>
									</div>
									</div>
									<div class="flex-container">

									<div class="image">
										<img src="<?= base_url()?>ovi-logo.png" alt="" >
									</div>
									<div class="para">

										<p>sssjd</p>
									</div>
								</div>
						</div>
						<div id="tab7" class="tab-content" style="overflow-x: hidden; overflow-y: scroll;height: 365px;">
							<div class="flex-container" onclick="openTab('tab9')">

								<div class="image">
									<img src="<?= base_url()?>ovi-logo.png" alt="">
								</div>
								<div class="para">
                
                				<p><?= translate('kiran_kumar')?></p>
								</div>
								<div class="button">
                
									<a href=""><button class="action-button-1"><?= translate('remind')?></button></a><a href=""><button class="action-button-2"><?= translate('delete')?></button></a>
								</div>
							</div>
							<div class="flex-container">

								<div class="image">
									<img src="<?= base_url()?>ovi-logo.png" alt="" >
								</div>
								<div class="para">
	
									<p><?= translate('kiran_kumar')?></p>
								</div>
                				<div class="button">
                
									<a href=""><button class="action-button-1"><?= translate('remind')?></button></a><a href=""><button class="action-button-2"><?= translate('delete')?></button></a>
								</div>
							</div>
							<div class="flex-container">

								<div class="image">
									<img src="<?= base_url()?>ovi-logo.png" alt="" >
								</div>
								<div class="para">
	
               							 <p><?= translate('kiran_kumar')?></p>
								</div>
                				<div class="button">
                
									<a href=""><button class="action-button-1"><?= translate('remind')?></button></a><a href=""><button class="action-button-2"><?= translate('delete')?></button></a>
								</div>
							</div>
							
							
							
							
						</div>
						<div id="tab8" class="tab-content" style="overflow-x: hidden; overflow-y: scroll;height: 365px; ">
							
							<div class="search-container">

								<div class="connect-search" >
									<div>
										<input type="checkbox" name="nc_checkbox" id="nc_checkbox">
										<label for="nc_checkbox" style="margin-left: 4px;color:#000;"><?= translate('select_all')?></label>
									</div>
									<button class="search-connect"><?= translate('connect to selected')?></button>
								</div>
							</div>
							
							
						</div>
						<div class="tab-content" id="tab9">
							<div class="send-request">
								<p>
									hi name
								</p>
								<p>
									I would like to add to my connection
								</p>
								<div>best regards</div>
								<div>gururaj</div>
							</div>
							<div class="sub-content">
								<div>
									> <a href="" data-toggle="modal" data-target="#staticBackdroptwo"><?= translate('delete_request')?></a>
								</div>
								<div>
									> <a href="" data-toggle="modal" data-target="#staticBackdropthree"><?= translate('send_request')?></a>
								</div>
							</div>
							

							<!-- Delete Request Modal -->
							<div class="modal fade" id="staticBackdroptwo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
								<div class="modal-dialog modal-xl" >
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="staticBackdropLabel">Delete Request</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
											</button>
										</div>
										<div class="modal-body" style="text-align:center;border-top:1px solid #DFDFDF;border-bottom:1px solid #DFDFDF">
											<h4>
												Are you sure you wish to delete ?
											</h4>
										</div>
										<div class="modal-footer" style="text-align:center">
											<button type="submit" class="delete-request-buttons">Yes</button>
											<button type="button" class="delete-request-buttons" data-dismiss="modal">No</button>
										</div>
									</div>
								</div>
							</div>
							<!-- Send Request Modal -->
							<div class="modal fade" id="staticBackdropthree" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel"><?= translate('send_request')?></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
										</button>
									</div>
									<div class="modal-body" style="text-align:center;border-top:1px solid #DFDFDF;border-bottom:1px solid #DFDFDF">
											<h4>
												Are you sure you wish to send a reminder  ?
											</h4>
										</div>
										<div class="modal-footer" style="text-align:center">
											<button type="submit" class="delete-request-buttons">Yes</button>
											<button type="button" class="delete-request-buttons" data-dismiss="modal">No</button>
										</div>
								</div>
							</div>
							</div>
						</div>
						
					</div>
				</div>
		    </div>
		</div>
	</div>
<!--Ask Intial Name ForTestimonial Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" style="width: 1024px;">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Ask intial name for Testimonial</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
				</button>
			</div>
			<div class="col-md-12" align="right" style="padding-left: 5px;"><span style="color: red;margin-inline:10px">*</span><?= translate('required_field')?></div>
				<form action="" method="post">
					<div class="modal-body" style="border-top:1px solid #cec6c6;;border-bottom:1px solid #cec6c6;;overflow: hidden;">
						<div class="col-md-4" align="right">
							<label for=""><?= translate('message')?></label>
							<span style="color: red;">*</span>
						</div>
						<div class="col-md-8">
							<textarea name="" id="" cols="60" rows="10" required></textarea>
						</div>
						
					</div>
					<div class="modal-footer" style="text-align:center">
						<button type="submit" class="btn bottom-button">Submit</button>
						<button type="button" class="btn bottom-button" data-dismiss="modal">Close</button>
					</div>
				</form>
		</div>
	</div>
</div>
<!-- Give Testimonial Modal -->
<div class="modal fade" id="staticBackdropone" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" style="width: 1024px;">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Give Intial name a Testimonial</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
				</button>
			</div>
			<div class="col-md-12" style="padding-left: 5px;text-align:right"><span style="color: red;margin-inline:10px">*</span><?= translate('required_field')?></div>
				<div class="modal-body" style="border-top:1px solid #cec6c6;;border-bottom:1px solid #cec6c6;;overflow: hidden;">
					<form action="" method="post">
						<div class="col-md-4" align="right">
							<label for=""><?= translate('testimonial')?></label>
							<span style="color: red;">*</span>
						</div>
						<div class="col-md-8">
							<textarea name="" id="" cols="60" rows="10 " required></textarea>
						</div>
						
					</form>
				</div>
				<div class="modal-footer" style="text-align:center">
					<button type="submit" class="btn bottom-button">Submit</button>
					<button type="button" class="btn bottom-button" data-dismiss="modal">Close</button>
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
	function openTab(tabId, event) {
        event.preventDefault();
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
function openTab(tabName) {
    var i, tabContent;
    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
      tabContent[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
  }

  // Add the following line to display Tab 1 by default
  openTab('tab6');
</script>
<script>
	function goback(){
		window.histroy.back();
	}
</script>
<script>
        function printPage() {
            window.print();
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
	.left-content{
		border:1px solid lightgrey;
	}
	
</style>
<style>
	.collapsible {
  background-color: #fff;
  color: #000;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #fff;
}

.collapsible:after {
  content: '🖿 \002B';
  color: #000;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: '🗁  \2212';
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #fff;
  color:black;
}
.received {
  color: black;
}

.received:hover {
  color: #147AF0;
}


.tab-container {
  display: flex;
  flex-direction: column;
  max-width: 600px;
  margin: 20px auto;
}

.tab-button {
  background-color: #3498db;
  color: #fff;
  padding: 10px;
  cursor: pointer;
  border: none;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
}

.tab-button:hover {
  background-color: #555;
}

.tab-content {
  display: none;
  padding: 20px;
}

.tab-content h2 {
  color: #333;
}

.tab-content p {
  color: #666;
}
.image{
	display:block;
}
.image img{
	height: 80px;
	width: 80px;
	margin-right: 20px;
	object-fit: contain;
}

.flex-container {
  display: flex;
  border-bottom:1px lightgrey solid;
  padding: 10px 20px;
  
}
.flex-container:hover {
  background-color: #BEBFC5;
  color:#0E1B69;
}
.top-button{
	padding:  5px 10px;
	color: var(--purpleColor);
	background-color: #fff;
	border-radius:5px;
	border:1px solid var(--purpleColor);
}
.top-button:hover
{
	background-color: var(--purpleColor);
	color: #fff;
}
.top-heading{
  background-color: #94979D;
  padding: 10px;
  border-top-right-radius:10px;
  border-top-left-radius:10px;
}
/* .head-flex{
    display: flex;
    float:right;
    /* justify-content: space-around; Align items horizontally to the end */
    /* align-items: flex-end;  *
} */
.head-flex{
	display: flex;
    float: right;
    align-items: center;
    justify-content: center;
}
.nc-search-bar{
	border-style:none;
}
.nc-search-bar,.nc-connection-button{
  padding: 4px 18px;
  border-radius:7px;
}
.nc-connection-button{
  border-color:#3A4256;
  background-color:var(--purpleColor);
  color:#fff;
  border:none;
}
.para{
  margin-right: 30px;
}
.button{
    margin-left: 50px;
    
}
.action-button-1,
.action-button-2
{
  background-color: #D3E6EE;
  color:#011727;
  border-color: #D3E6EE
}
.action-button-1:hover,
.action-button-2:hover
{
  background-color: #fff;
  color:#000;
}
.action-button-1{
  border-top-left-radius:10px;
  border-bottom-left-radius:10px;
}
.action-button-2{
  border-top-right-radius:10px;
  border-bottom-right-radius:10px;
}
.connect-search{
	display:flex;
	justify-content:space-between;
	border-bottom:1px solid grey;border-width:0 0 1px;
	padding-bottom: 5px;
}
.search-connect{
	padding:4px 18px;
	background-color: var(--purpleColor);
	color: #fff;
	border-radius:8px;
	border:none;
}
.image-container{
	display: flex;
	padding: 10px;
}
.connection-image{
	display: block;
}
.connection-image img{
	height: 30px;
    width: 88px;
    margin-right: 20px;
    object-fit: cover;
}
.para h4{
	margin: 0;
}
.para .para-sub{
	margin: 0;
}
.sub-flex-container{
	display: flex;
	justify-content:space-between;
	border-bottom:1px solid black;
	padding: 10px;
}
.sub-flex-container:hover{
	background-color: #F7DA48;
}
.bottom-click{
	padding: 1rem;
}
.bottom-click a{
	display: block;
	line-height: 2.5rem;
	color:#3E556F;
	font-weight: bolder;
}
.bottom-click a:hover{
	color: #168915;
	border:1px solid transparent;
}

.sub-flex-container{
	color: #000;
}
textarea{
	resize:none;
}
.bottom-button{
	padding: 2px 10px;
	background-color: #3A043E;
	color: #fff;
	border-radius:5px;
	border:none;
	margin-top: 10px;
}
.bottom-button:hover{
	background-color:#3A043E;
	color: #fff;
}
textarea{
	outline:none;
}
.send-request{
	border-bottom:1px solid black;
	padding: 10px;
	color: #000;
}
.send-request p{
	color:#000;
}
.sub-content{
	padding: 10px;
}
.sub-content a{
	color:black;
	font-weight: bolder;
	color:#3E556F;
}
.sub-content a:hover{
	border:1px solid transparent;
	color:#00860D;
}
.delete-request-buttons{
	padding: 9px;
    background-color: var(--purpleColor);
    color: #fff;
    border: none;
    border-radius: 6px;
}
</style>