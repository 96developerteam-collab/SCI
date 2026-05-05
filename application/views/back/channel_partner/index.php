<div id="content-container">
	<div id="page-head">		
		<!--Page Title-->		
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('committee_members')?></h1>
		</div>		
		<!--End page title-->

		<!--Breadcrumb-->		
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>admin"><?php echo translate('home')?></a></li>
			<li class="active"><a href="#"><?php echo translate('committee_members')?></a></li>
		</ol>		
		<!--End breadcrumb-->
	</div>

	<!--Page content-->	
	<div id="page-content">		
		<div class="panel">
			<?php if (!empty($success_alert)): ?>
				<div class="alert alert-success" id="success_alert" style="display: block">
		    		<?=$success_alert?>
		  		</div>
			<?php endif ?>
			<?php if (!empty($danger_alert)): ?>
				<div class="alert alert-danger" id="danger_alert" style="display: block">
      				<button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
      				<?=$danger_alert?>
    			</div>
			<?php endif ?>

			<div class="row">
				<div class="col-md-6">
					<h3 class="panel-title"><?php echo translate('committee_members_list')?></h3>
				</div>	
				<div class="col-md-6" align="right" style="margin: 9px 0px 0px -20px;">						
					<a href="<?=base_url()?>admin/channel_partner/add_channel" id="demo-dt-view-btn" class="btn btn-primary add-tooltip"><i class="fa fa-plus"></i> <?php echo translate('add_committee_members')?></a>
				</div>
			</div>
		

			<div class="panel-body">

				<?php foreach ($channel_list as $value): ?>
				<?php 
					$channel_detail = $this->db->select('*')->from('channel_partner_details')->where('channel_partner_id',$value->channel_partner_id)->get()->result();					
				?>

				<div class="col-md-6">
					<div class="panel panel-colorful panel-dark">
					    <div class="panel-body">
					    	<button data-target='#delete_modal' data-toggle='modal' class="btn btn-danger btn-xs add-tooltip" style="border-radius: 50%;" onclick="delete_channel_partner(<?=$value->channel_partner_id?>)"><i class="fa fa-close"></i></button>

					    	<div class="text-center chanel_partner">
					    		<?php
					    			$image = $channel_detail[0]->image;
									if (file_exists('uploads/channel_partner_image/'.$image)) {
	                                ?>
										<img src="<?=base_url()?>uploads/channel_partner_image/<?=$image?>" style='width:192px;height:180px;'>

									<?php
									}
									else {
									?>
										<img src="<?=base_url()?>uploads/channel_partner_image/default_image.png" style='width:192px;height:180px;'>
									<?php
									}
								?>
								<h3 class="panel-title"><?=$value->name?></h3>
								<p><?php echo translate('title:')?> <?=$channel_detail[0]->project_name?></p>
								<p><?php echo translate('mobile:')?> <?=$channel_detail[0]->mobile?></p>
								<p><?php echo translate('address:')?> <?=$channel_detail[0]->address?></p>
								<!--<p><?php echo translate('image:')?> <?=$channel_detail[0]->image?></p>-->
							</div>

							<div class="col-sm-12" style="margin-top: 20px;">
          						<a href="<?=base_url()?>admin/channel_partner/edit_channel_partner/<?=$value->channel_partner_id?>" id="demo-dt-view-btn" class="btn btn-mint add-tooltip" style="width: 100%" ><i class="fa fa-edit"></i> <?php echo translate('edit')?></a>
         					</div>
					   </div>
					</div>					      
					 
				</div>
				<?php endforeach ?>
			</div>
		</div>	
	</div>
</div>


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
        <p><?php echo translate('are_you_sure_you_want_to_delete_this_channel_partner?')?></p>
         <div class="text-right">
           <button data-dismiss="modal" class="btn btn-default btn-sm" type="button" id="modal_close"><?php echo translate('close')?></button>
           <button class="btn btn-danger btn-sm" id="delete_channel_partner" value=""><?php echo translate('delete')?></button>
         </div>
      </div>
    </div>
  </div>
</div>
<!--End Default Bootstrap Modal For DELETE-->


<script>
	setTimeout(function() {
	    $('#success_alert').fadeOut('fast');
	    $('#danger_alert').fadeOut('fast');
	}, 5000); // <-- time in milliseconds

	function delete_channel_partner(id){
	    $("#delete_channel_partner").val(id);
	}

	$("#delete_channel_partner").click(function(){
    	$.ajax({
		    url: "<?=base_url()?>admin/channel_partner/delete/"+$("#delete_channel_partner").val(),
		    success: function(response) {
				window.location.href = "<?=base_url()?>admin/channel_partner";
		    },
			fail: function (error) {
			    alert(error);
			}
		});
 })
</script>

<style>
	.chanel_partner{
		margin-top: 20px;		
		height: 300px; 
		padding: 0px 15px 0px 15px; 
		overflow: auto;	
	}		
</style>