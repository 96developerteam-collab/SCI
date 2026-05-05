<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('profile')?></h1>
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
                                <li class="tab tab2" onclick="printPage()"><img src="<?= base_url()?>nav-icon-print.svg" alt="">
                                </li>
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
			
		        <h3 class="panel-title"><?= translate('profile')?></h3>
				</div>
                <div class="col-md-6" align="right" style="margin: 20px 0px 0px -10px;">		
                    <button class="top-button" onclick="goback()"><?= translate('back')?></button>                    
				</div>
		      
		    </div>
		    <div class="panel-body">
                <div class="tab-container" id="tabContainer">
                    <button class="tab-button" onclick="changeTab(0)"><i class="fa fa-user"></i> <?php echo translate('profile')?></button>
                    <button class="tab-button" onclick="changeTab(1)"><i class="fa fa-user-circle"></i> <?php echo translate('bio')?></button>
                    <button class="tab-button" onclick="changeTab(2)"><i class="fa fa-sliders"></i> <?php echo translate('connections')?></button>
                    <button class="tab-button" onclick="changeTab(3)"><i class="fa fa-picture-o"></i> <?php echo translate('photos')?></button>
                    <button class="tab-button" onclick="changeTab(4)"><i class="fa fa-users"></i> <?php echo translate('groups')?></button>
                    <button class="tab-button" onclick="changeTab(5)"><i class="fa fa-book"></i> <?php echo translate('training_histroy')?></button>
                    <button class="tab-button" onclick="changeTab(6)"><i class="fa fa-comments"></i> <?php echo translate('testimonials')?></button>
                </div>

                <div class="tab-content" id="tabContent1">
                  <div class="col-md-12" align="right">
                        <button class="tab-one-button"><?= translate('add_name_to_my_Connection')?></button>
                  </div>
                    <div class="col-md-12">
                        <div class="col-md-6 content-one-container">
                            <h4><?= translate('username')?></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, maxime.</p>
                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="30%" class="td"><?= translate('display_name')?></td>
                                        <td width="70%" class="td-one"><?= translate('user_name')?></td>
                                    </tr>
                                    <tr>
                                        <td width="30%" class="td"><?= translate('industry')?></td>
                                        <td width="70%" class="td-one">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore nam eaque aut sequi vero maiores!</td>
                                    </tr>
                                    <tr>
                                        <td width="30%" class="td"><?= translate('business')?></td>
                                        <td width="70%" class="td-one">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae error maiores eum architecto earum, cumque sit repellat! Id, ipsum ipsa? Eius veniam obcaecati magni corporis?</td>
                                    </tr>
                                    <tr>
                                        <td width="30%" class="td"><?= translate('keywords')?></td>
                                        <td width="70%" class="td-one">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sit exercitationem libero dolorem consequatur molestias reprehenderit accusamus voluptate sequi deleniti!</td>
                                    </tr>
                                    <tr>
                                        <td width="30%" class="td"><?= translate('company')?></td>
                                        <td width="70%" class="td-one">Lorem ipsum <img src="" alt="image" style="display:block;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="tabContent2">                    
                               
                </div>
                
                <div class="tab-content" id="tabContent3">                
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="col-md-6 connection-container">
                                <div class="image-container">
                                    <img src="<?= base_url()?>ovi-logo.png" alt="" width="90">
                                </div>
                                <div class="desc-container">
                                    <a href=""><h5>Lorem, ipsum.</h5></a>
                                    <small>Lorem ipsum dolor sit amet. Lorem, ipsum.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6 connection-container">
                                <div class="image-container">
                                    <img src="<?= base_url()?>ovi-logo.png" alt="" width="90">
                                </div>
                                <div class="desc-container">
                                    <a href=""><h5>Lorem, ipsum.</h5></a>
                                    <small>Lorem ipsum dolor sit amet. Lorem, ipsum.</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6 connection-container">
                                <div class="image-container">
                                    <img src="<?= base_url()?>ovi-logo.png" alt="" width="90">
                                </div>
                                <div class="desc-container">
                                    <a href=""><h5>Lorem, ipsum.</h5></a>
                                    <small>Lorem ipsum dolor sit amet. Lorem, ipsum.</small>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>                  
                </div>
                <div class="tab-content" id="tabContent4">                
                   no data available                    
                </div>
                <div class="tab-content" id="tabContent5">                
                        <div class="col-md-6">
                            <div class="col-md-6 connection-container">
                                <div class="image-container">
                                    <img src="<?= base_url()?>ovi-logo.png" alt="" width="90">
                                </div>
                                <div class="desc-container">
                                    <a href="<?= base_url()?>admin/otherGroup"><h5><?= translate('group_name')?></h5></a>
                                    <small>Lorem ipsum dolor sit amet. Lorem, ipsum.</small>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="tab-content" id="tabContent6">                
                    <div class="col-md-12">
                        <div class="col-md-8 training-container">
                            <strong>BANG Awards Nite/ Social/ Members Day - Bangalore :</strong> date
                        </div>                    
                    </div>  
                </div>
                <div class="tab-content" id="tabContent7">                
                    <div class="col-md-12">
                        <div class="col-md-12 infotext">
                            <p class="info-container">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi velit, dolorem aperiam perspiciatis eligendi optio aliquid fugit, officia ea, inventore mollitia porro quod cupiditate in a corporis numquam distinctio deserunt necessitatibus doloribus aut sequi sunt tempora illo? Est, vero perspiciatis accusantium excepturi eum, delectus molestias iure incidunt, ullam fugit ipsum?
                            </p>
                            <p class="profile-container">
                                <a href="">Ramachandra K.S.</a> Renew Silicon Teknology Private Limited
                            </p>
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
    tabButtons[tabIndex].style.backgroundColor = '#4D2D6B';
    tabButtons[tabIndex].style.color = '#fff';
    tabContents[tabIndex].style.display = 'block';
  }
  function goback(){
    window.history.back();
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
        --neutralGrey:#5C5F62;
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
    .tab-container {
      display: flex;
      gap: 0px;
      border:1px solid #ccc;
      width: 55%; /** remove this whenver styling gets worse*/
      border-radius:10px;
      padding: 1px;
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
      background-color: var(--purpleColor);
      color: var(--whiteColor);
    }
    .tab-button:first-child{
        border-radius:10px 0 0 10px;
    }
    .tab-button:last-child{
        border-radius:0 10px 10px 0;
    }

    #tabContent1 {
      display: block;
    }
    /* Styles for the other tabs when opened */
    .tab-button:not(:first-child) {
      background-color: var(--whiteColor);;
      color: var(--purpleColor);
    }
    /* buttin styling */
    .top-button{
        padding: 0.5rem 3.5rem;
        background-color: var(--whiteColor);
        color: var(--purpleColor);
        border:1px solid var(--purpleColor);
        border-radius:5px;
    }
    .top-button:hover{
        background-color: var(--purpleColor);
        color: var(--whiteColor);
    }
    .tab-one-button{
        padding: 5px 35px;
        background-color: var(--purpleColor);
        color: var(--whiteColor);
        border:none;
        border-radius:7px;
    }
    .content-one-container p{
        color:var(--neutralGrey);
        font-size:1.5rem;
    }
    .table .td{
        color:var(--neutralGrey);
        text-align:right;
        border-right:1px dashed var(--blackColor);
    }
    .table .td-one{
        color:var(--blackColor)
    }
    .table tr{
        border:5px solid transparent;
    }
    textarea{
        resize:none;
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
<style>
	.training-container{
		border-bottom:1px solid #C0BFC2;
		padding: 5px;
	}
	.training-container strong{
		color: #000;
	}
</style>
<style>
    
	.info-container{
		background-color: #F1F9FF;
		color: #000;
		padding: 10px;
		border-radius:5px;
		border:1px solid #D7D6D0;
		margin-bottom: 0;
	}
	.profile-container{
		margin-left: 10px;
		background: url('<?= base_url()?>hometabtestimonialnamebg-0000.jpg') no-repeat 800px 0px;
		padding-top: 1rem;
		text-align:right;
	}
	.profile-container a{
		color:#2295A7;
		font-weight: bold;
	}
	.profile-container a:hover{
		color: #160D2F;
	}
</style>