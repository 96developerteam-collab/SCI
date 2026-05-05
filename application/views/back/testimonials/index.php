<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('testimonials')?></h1>
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
			<li><a href="#"><?= translate('testimonials')?></a></li>

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
                <div class="col-md-12" align="left" style="margin: 9px 0px 0px -20px;">						
					<h3 class="panel-title"><?= translate('testimonials')?></h3>
				</div>
                <div class="col-md-12" align="right" style="margin: -34px 0px 13px -18px;">						
					<a href="<?= base_url()?>admin/network_connection"><button class="top-button"><?= translate('connection')?></button></a>
					<button class="top-button" onclick="goBack()"><?= translate('back')?></button>
				</div>
		      
		    </div>
		    <div class="panel-body">
	    		<div class="col-md-6 left-content" style="height: 365px;">
					<button class="collapsible" onclick="openTab('tab6')"><?= translate('testimonial_received()')?></button>
					<div class="content">
						<ul style="list-style-type: none;padding-left: 17px;overflow-x: hidden; overflow-y: scroll">
							<li><a href="#" class="received" onclick="openTab('tab1')">name 1</a></li>
							<li><a href="#" class="received" onclick="openTab('tab2')">name 2</a></li>
							<li><a href="#" class="received" onclick="openTab('tab3')">name 3</a></li>
							<li><a href="#" class="received" onclick="openTab('tab4')">name 4</a></li>
							<li><a href="#" class="received" onclick="openTab('tab5')">name 5</a></li>
							
						</ul>
					</div>
					<button class="collapsible" onclick="openTab('tab7')"><?= translate('testimonial_given()')?></button>
					<div class="content">
						<ul style="list-style-type: none;padding-left: 17px;overflow-x: hidden; overflow-y: scroll">
							<li><a href="#" class="received" onclick="openTab('tab9')">name 1</a></li>
							<li><a href="#" class="received">name 2</a></li>
							<li><a href="#" class="received">name 3</a></li>
							<li><a href="#" class="received">name 4</a></li>
							<li><a href="#" class="received">name 5</a></li>
						</ul>
					</div>
					<button class="collapsible" onclick="openTab('tab8')"><?= translate('testimonials_requests()')?></button>
					
				</div>
	    		<div class="col-md-6 left-content" style="height: 363px;">
					
						<div id="tab1" class="tab-content">
							<div class="col-md-12" style="border-bottom:1px solid #E2E2E2;" >
								<div class="col-md-12 textimonial-content">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nam iusto ipsa accusantium et ratione, doloribus dignissimos. Eos numquam sed fuga. Cupiditate cumque quam modi ab eveniet quas eaque? Ullam.
								</div>
								<div class="testimonials-subcontent">
									<div class="col-md-2"></div>
									<div class="col-md-8 testimonials-author">
										<a href="<?= base_url()?>admin/otherUser">Name with intials,</a> Comanpany Name
										<div>date</div>
									</div>
									
								</div>
							</div>
							<div class="col-md-12 testimonial-checkbox">
								<!-- <form action="" method="post"> -->
								<!-- <input type="hidden" name="userId" value=""> -->
									<input type="checkbox" name="testimonial_checkbox" id="testimonial_checkbox">
									<label for="testimonial_checkbox">	Display this Testimonial in my profile.</label>
								<!-- </form> -->
								<!--  -->
							</div>
							<div class="col-md-12">
								><a href="" class="test-del" data-toggle="modal" data-target="#staticBackdrop"><?= translate(' delete_testimonial')?></a>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
								<div class="modal-dialog modal-xl" style="width: 1024px;">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="staticBackdropLabel">Delete Testimonial</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
											</button>
										</div>
										<div class="modal-body" style="text-align:center">
											<h4>Are you sure you wish to delete the Testimonial?</h4>
										</div>
										<div class="modal-footer" style="text-align: center;">
											<form action="" method="post">
												<button type="submit" class="bottom-button"><?= translate('yes')?></button>
												<button type="button" class="bottom-button" data-dismiss="modal"><?= translate('no')?></button>
											</form>
										</div>
									</div>
								</div>
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
						<div id="tab6" class="tab-content" style="overflow-x: hidden; overflow-y: scroll;height: 363px;">
							<div class="flex-container" onclick="openTab('tab1')">

								<div class="image">
									<img src="<?= base_url()?>ovi-logo.png" alt="">
								</div>
								<div class="para">
	
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, aspernatur.</p>
								</div>
							</div>
							<div class="flex-container" onclick="openTab('tab2')">

								<div class="image">
									<img src="<?= base_url()?>ovi-logo.png" alt="" >
								</div>
								<div class="para">
	
									<p>sssjd</p>
								</div>
							</div>
							<div class="flex-container" onclick="openTab('tab3')">

								<div class="image">
									<img src="<?= base_url()?>ovi-logo.png" alt="" >
								</div>
								<div class="para">
	
									<p>sssjd</p>
								</div>
							</div>
							
							
							
							
						</div>
							<div id="tab7" class="tab-content" style="overflow-x: hidden; overflow-y: scroll;height: 363px;">
								<div class="flex-container" onclick="openTab('tab9')">

									<div class="image">
										<img src="<?= base_url()?>ovi-logo.png" alt="">
									</div>
									<div class="para">

										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, aspernatur.</p>
									</div>
									</div>
									<div class="flex-container">

									<div class="image">
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
							<div class="tab-content" id="tab9">
								<div class="col-md-12" >
									<div class="col-md-12 textimonial-content">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nam iusto ipsa accusantium et ratione, doloribus dignissimos. Eos numquam sed fuga. Cupiditate cumque quam modi ab eveniet quas eaque? Ullam.
									</div>
									<div class="testimonials-subcontent">
										<div class="col-md-2 testimonial-suggestion"></div>
										<div class="col-md-8 testimonials-author">
											<div style="font-weight: bolder;">Name with intials,Comanpany Name</div> 
											<div>date</div>
										</div>
										
									</div>
								</div>
							</div>
							<div id="tab8" class="tab-content" style="overflow-x: hidden; overflow-y: scroll;height: 363px;">
								
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
.top-button:hover{
	background-color: var(--purpleColor);
	color: #fff;
}
.textimonial-content{
	background-color: #EBECEC;
    color: #000;
    padding: 1.5rem;
    font-size: 1.5rem;
	border-radius:10px;
}
.testimonials-subcontent{
	padding: 10px;
	margin-top: 2.5px;
}
.testimonials-author{
	color: #7e7777;
	font-size:1.42rem;
	background: url('<?= base_url()?>hometabtestimonialnamebg-0000.jpg') no-repeat 25px 0px;
	padding: 1rem;
}
.testimonials-author a,.test-del{
	color: #000;
	font-weight: bolder;
}
.testimonials-author a:hover,
.test-del:hover
{
	color:  var(--purpleColor);
}
.bottom-button{
	padding: 5px 10px;
	background-color: var(--purpleColor);
	color: #fff;
	border:none;
	border-radius:7px;
}
.test-del{
	color
}
.testimonial-checkbox{
	padding: 12px;
}
</style>