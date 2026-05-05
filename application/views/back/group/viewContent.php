<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow" style="display:table-cell"><?= translate('view_topic')?></h1>
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
			<li><a href="#"><?= translate('group')?></a></li>
			<li><a href="#"><?= translate('view_topics')?></a></li>

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
			
		        <h3 class="panel-title"><?= translate('view_topics')?></h3>
				</div>
                <div class="col-md-6 button-group" align="right" style="margin: 20px 0px 0px -10px;">		
			
                    <a href="<?= base_url()?>admin/group_content"><button><?= translate('view_all_topic')?></button></a>
                    <button onclick="goBack()"><?= translate('back')?></button>
				</div>
		      
		    </div>
		    <div class="panel-body">
	    		<div class="col-md-12 msg-container">
                    <div class="col-md-12 msg-line-one">
                        <img src="<?= base_url()?>ovi-logo.png" alt="" width="70" height="45">
                        <div class="topic-desc">
                            <h3>Topic Heading</h3>
                            <p><?= translate('posted_by')?> <a href="">User Name</a> date</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="test-msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas deleniti repellendus perspiciatis quos, odit obcaecati ea distinctio mollitia dolor debitis ex repudiandae reprehenderit dolorem placeat aperiam, eius cum corrupti hic!

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae enim animi laboriosam voluptas aut ratione ipsam eum quasi cum, mollitia quod dolor, dignissimos veniam vero sit consequatur assumenda repellendus nobis molestiae delectus optio laudantium! Delectus qui eaque earum possimus enim asperiores! Tempore ullam id quae architecto! Sequi nemo assumenda sed!
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, sit et doloremque nam, impedit dolores quia mollitia facilis nihil dolore adipisci incidunt quaerat obcaecati magnam, recusandae omnis quos commodi aliquam.
                        </p>
                    </div>
                    <div class="col-md-12" align="right">
                        <button class="msg-button" data-toggle="modal" data-target="#staticBackdrop"><?= translate('post&nbsp;a_message')?></button>
                    </div>
                    
                </div>
                <div class="col-md-12 msg-count">
                            <div class="row">
                                <table id="contact_messages_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-sortable="false">
                                            <?= translate('messages')?>
                                        </th>
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="<?= base_url()?>ovi-logo.png" alt="" width="65">
                                                <div class="posted-by">Posted by <a href="">username </a>On date</div>
                                                <div style="margin-left: 67px;">
                                                    <p style="white-space: pre-line;color: #000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nisi unde maiores dignissimos aliquam omnis odio sequi quidem voluptas ad officia pariatur eligendi numquam perferendis qui, laboriosam sint ducimus officiis corporis at consequatur blanditiis assumenda? Voluptas consequatur eaque quasi neque nulla dignissimos dolorum ullam, dolorem consectetur ipsam voluptatem quia quaerat.</p>
                                                </div>
                                                <div style="text-align:right">
                                                    <button  data-toggle="modal" data-target="#staticBackdropone"><img src="<?= base_url()?>warning_32.png" alt="" height="20"></button>
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


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" style="width: 800px;">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom:1px solid lightgrey">
        <h5 class="modal-title" id="staticBackdropLabel">Post a Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <!-- <form action="" method="post"> -->
          <div class="modal-body">
              <div class="col-md-12 required" align="right" style="border-bottom:1px solid lightgrey">
                      <span style="margin-inline:10px;color:red">*</span><?= translate('required_field')?>
              </div>
              <div class="col-md-12 messaging">
                  <div class="col-md-4" align="right">
                  <label for="post_msg"><?= translate('message')?></label>
                  <span style="margin-inline:10px;color:red">*</span>
                  </div>
                  <div class="col-md-6">
                  <textarea class="form-control" id="post_msg" class="post_msg" style="height:100px" required></textarea>    
                  </div>
              </div>
              
          </div>
          <div class="modal-footer" style="text-align:center;overflow: overlay;">
              <button type="submit" class="modal-buttons">Understood</button>
              <button type="button" class="modal-buttons" data-dismiss="modal">Close</button>
          </div>
      <!-- </form> -->
    </div>
  </div>
</div>
<!-- report modal -->
<div class="modal fade" id="staticBackdropone" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Report Abuse</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-close fa-lg"></i></span>
        </button>
      </div>
      <div class="modal-body">
        Would you like to send an abuse report on this post to the community director?
      </div>
      <div class="modal-footer" style="text-align:center">
        <button type="button" class="modal-buttons"><?= translate('yes')?></button>
        <button type="button" class="modal-buttons" data-dismiss="modal"><?= translate('no')?></button>
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
        $.extend($.fn.dataTable.defaults, {
        language: {
          info: "Total _TOTAL_ messages"
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
    :root{
        --whiteColor:#fff;
        --deepNavy:#294b88;
    }
    .button-group button{
        border:1px solid var(--purpleColor);
        color:var(--purpleColor);
        background-color: var(--whiteColor);
        border-radius:5px;
        padding: 5px 15px;
        margin-right: 10px;
    }
    .button-group  button:hover{
        border:none;
        color: var(--whiteColor);
        background-color: var(--purpleColor);
        padding: 5px 15px;
    }
    .msg-container{
        border:2px solid lightgrey;
        background-color: #D0E4FA;
        padding: 10px;
        border-radius:10px;
        margin-bottom: 20px;
    }
    .msg-line-one img{
        height: auto;
        object-fit: inherit;
        margin-top: -28px; /* remove this styling in case of future styling getting worse */
    }
    .topic-desc{
        display:inline-block;
        margin-left: 5px;
    }
    .topic-desc h3{
        color: #4A4A4A;
        display:contents;
        font-size:1.45rem;
    }
    .topic-desc p{
        display:block;
        word-spacing: 0.5rem;
        color: black;
    }
    .topic-desc a{
        word-spacing: normal;
        color: var(--deepNavy);
    }
    .topic-desc {
        line-height:1.7rem;
    }
    .test-msg{
        white-space:pre-line;
        color: #000;
    }
    .msg-button{
        background-color: #ccc;
        border:1px solid #bbc0cb;
        font-weight: bolder;
        padding:5px;
        border-radius:5px;
        color: #6B87A7;
    }
    .posted-by{
        display:inline
    }
    .posted-by a{
        color: var(--deepNavy);
    }
    .required{
        padding: 10px;
    }
    .messaging textarea{
        resize:none;
        border-radius:5px;
    }
    .messaging{
        padding: 20px;
        border-bottom:1px solid lightgrey;
    }
    .textarea:focus{
        outline:none;
    }
    .modal-buttons{
        color: var(--whiteColor);
        background-color: var(--purpleColor);
        padding: 5px 15px;
        border:none;
        border-radius:5px;
    }
</style>