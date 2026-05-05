<div id="content-container">
	<div id="page-head">
		
		<!--Page Title-->		
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('Offers')?></h1>
		</div>		
		<!--End page title-->
		
		<!--Breadcrumb-->	
		<ol class="breadcrumb">
			<li><a href="#"><?php echo translate('home')?></a></li>
			<li class="active"><a href="#"><?php echo translate('offers')?></a></li>
		</ol>
		<!--End breadcrumb-->
	</div>
	<!--Page content-->

	<div id="page-content">
		<!-- Basic Data Tables -->
		
		<div class="panel">
			<?php if (!empty($success_alert)): ?>
				<div class="alert alert-success" id="success_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?=$success_alert?>
	            </div>
			<?php endif ?>
			<?php if (!empty($danger_alert)): ?>
				<div class="alert alert-danger" id="danger_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?=$danger_alert?>
	            </div>
			<?php endif ?>


			<div class="panel-heading">
				<h3 class="panel-title"><?php echo translate('offers')?></h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-12 pull-right" style="padding-bottom: 10px">
						<?php if(empty($all_offers_list)): ?>
						
						<button data-target="#offer_modal" data-toggle="modal" id="add_offers" class="btn btn-primary btn-sm btn-labeled fa fa-plus"><?php echo translate('create_new')?></button>
					<?php endif; ?>
					</div>
				</div>
				<?php if(!empty($all_offers_list)): ?>
				 <div class="row">
					<table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th width="25%" data-sortable="false">
								<?php echo translate('#')?>
							</th>
							<th>
								<?php echo translate('Futured_offers')?>
							</th>
							<th>
								<?php echo translate('Current_offers')?>
							</th>
							
						</tr>
						</thead>
						<tbody>
						<?php
							$i = 1;
							{
							?> 
							<tr>
								<td><?=$i?></td> 								
								<td><?=$all_offers_list[0]->futured_offers;?></td>
								<td><?=$all_offers_list[0]->current_offers;?></td>								
								<td>

									<button data-target="#offer_modal" data-toggle="modal" class="btn btn-info btn-xs add-tooltip" data-toggle="tooltip" data-placement="top" title="<?php echo translate('edit')?>" onclick="edit_offers(<?=$all_offers_list[0]->offer_id?>)"><i class="fa fa-edit"></i></button>

								<!--	<button data-target="#delete_modal" data-toggle="modal" class="btn btn-danger btn-xs add-tooltip" data-toggle="tooltip" data-placement="top" title="<?php echo translate('delete')?>" onclick="delete_offers('<?=$all_offers_list[0]->offer_id?>')"><i class="fa fa-trash"></i></button>-->
									
								<!--	 <?php if( (int)$all_offers_list[0]->status === 1 ) { ?>
                                            <label class="switch">
                                              <input type="checkbox" onclick="enableOffer(this.value)" value="<?=$all_offers_list[0]->offer_id?>">
                                               <span class="slider round"></span>
                                           </label>
                                           
                                       <?php } else if( (int)$all_offers_list[0]->status === 0 ) { ?>
                                           <label class="switch">
                                               <input type="checkbox" onclick="disableOffer(this.value)" value="<?=$all_offers_list[0]->offer_id?>" checked>
                                               <span class="slider round"></span>
                                           </label>
                                       <?php } ?>-->
								</td>
							</tr>
						<!-- <?php
						$i++;
							}
						?> -->
						</tbody>
					</table>
				</div>

				<?php endif;  ?>					 
			</div>
		</div>
		<!--===================================================-->
		<!-- End Striped Table -->
	</div>
	<!--===================================================-->
	<!--End page content-->
</div>
<!--Language Modal-->
<!--===================================================-->
<div class="modal fade" id="offer_modal" role="dialog" tabindex="-1" aria-labelledby="offer_modaloffer_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title" id="modal_title"></h4>
            </div>
            <!--Modal body-->
            <div class="modal-body" id="modal_body">
            	
            </div>
        	<div class="col-sm-12 text-center" id="validation_info" style="margin-top: -30px">

        	</div>            
            <!--Modal footer-->
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default btn-sm" type="button" id="modal_close"><?php echo translate('close')?></button>
                <button class="btn btn-primary btn-sm" id="save_offers" value="0"><?php echo translate('save')?></button>
            </div>
        </div>
    </div>
</div>
<!--===================================================-->
<!--End Language Modal-->

<!--Default Bootstrap Modal For DELETE-->
<!--===================================================-->
<div class="modal fade" id="delete_modal" role="dialog" tabindex="-1" aria-labelledby="delete_modal" aria-hidden="true">
    <div class="modal-dialog" style="width: 400px;">
        <div class="modal-content">
            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title"><?php echo translate('confirm_delete')?></h4>
            </div>
           	<!--Modal body-->
            <div class="modal-body">
            	<p><?php echo translate('are_you_sure_you_want_to_delete_this_data?')?></p>
            	<div class="text-right">
            		<button data-dismiss="modal" class="btn btn-default btn-sm" type="button" id="modal_close"><?php echo translate('close')?></button>
                	<button class="btn btn-danger btn-sm" id="delete_offers" value=""><?php echo translate('delete')?></button>
            	</div>
            </div>
           
        </div>
    </div>
</div>
<!--===================================================-->
<!--End Default Bootstrap Modal For DELETE-->
<script>
	setTimeout(function() {
	    $('#success_alert').fadeOut('fast');
	    $('#danger_alert').fadeOut('fast');
	}, 5000); // <-- time in milliseconds
	  function disableOffer(item){
   
   if( confirm('Are You Sure Want To Disable This Offer???')) {
       window.location.href="<?=base_url('admin/updateofferStatus')?>/"+item+"/"+1;  
   } else {
       window.location.href="<?=base_url('admin/offers')?>";
   }
   // alert(item.value);
}

function enableOffer(item){
    if( confirm('Are You Sure Want To Enable This Offer???')){
        window.location.href="<?=base_url('admin/updateofferStatus')?>/"+item+"/"+0;  
    } else {
       window.location.href="<?=base_url('admin/offers')?>";
    }
}
</script>



<script>
	$("#add_offers").click(function(){
	    $("#modal_title").html("<?=translate('add_offers')?>");
	    $("#modal_body").html("<div class='text-center'><i class='fa fa-refresh fa-5x fa-spin'></i></div>");
	    //$("#save_site_language").val(1);
	    $('#validation_info').html("");
	    $.ajax({
		    url: "<?=base_url()?>admin/offers/add_offers",
		    success: function(response) {
				$("#modal_body").html(response);
		    },
			fail: function (error) {
			    alert(error);
			}
		});
	});

	function edit_offers(id){
		$("#modal_title").html("<?=translate('edit_offers')?>");
	    $("#modal_body").html("<div class='text-center'><i class='fa fa-refresh fa-5x fa-spin'></i></div>");
	    //$("#save_site_language").val(2);
	    $('#validation_info').html("");
	    $.ajax({
		    url: "<?=base_url()?>admin/offers/edit_offers/"+id,
		    success: function(response) {
				$("#modal_body").html(response);
		    },
			fail: function (error) {
			    alert(error);
			}
		});
	}

	$("#save_offers").click(function(){
		$("#offer_form_submit").click();
	});

	function delete_offers(id){
	    $("#delete_offers").val(id);
	}

	$("#delete_offers").click(function(){
    	$.ajax({
		    url: "<?=base_url()?>admin/offers/delete/"+$("#delete_offers").val(),
		    success: function(response) {
				window.location.href = "<?=base_url()?>admin/offers";
		    },
			fail: function (error) {
			    alert(error);
			}
		});
    });
</script>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.panel-sty{
height: 305px !important;
    min-height: 305px !important;
}

.panel-sty1{
height: 313px !important;
    min-height: 313px !important;
}

.switch {    
    width: 55px !important;
    height: 25px !important;
}

.slider:before {    
    height: 19px !important;
    width: 20px !important;  
    bottom: 3px !important;    
}
</style>