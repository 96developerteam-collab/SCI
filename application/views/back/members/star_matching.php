
<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('members')?></h1>
		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>admin"><?php echo translate('home')?></a></li>
			<li><a href="<?=base_url()?>admin/members/index.php"><?php echo translate('members')?></a></li>
			<li class="active"><?=translate($member_type)?> <?php echo translate('members')?></li>
		</ol>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End breadcrumb-->
	</div>
	<!--Page content-->
	<!--===================================================-->
	<div id="page-content">
		<!-- Basic Data Tables -->
		<!--===================================================-->

		
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
			
				<?php if (!empty($this->session->flashdata('success_alert'))): ?>
				<div class="alert alert-success" id="success_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?=$this->session->flashdata('success_alert')?>
	            </div>
			<?php endif ?>
			<?php if (!empty($this->session->flashdata('danger_alert'))): ?>
				<div class="alert alert-danger" id="danger_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?=$this->session->flashdata('danger_alert')?>
	            </div>
			<?php endif ?>
			

			<div class="panel-heading">
				<div class="row">
					<div class="col-md-4">
						<h3 class="panel-title">Star Matching <?=translate($member_type)?>  Members list</h3>
						
					</div>
					
				</div>	
			</div>
			<div class="panel-body" style="padding: 15px 20px 0px !important;">
	
			<input type = "hidden" name ="nakshatra" value = "<?php echo $nakshatra[0]['moon_sign']; ?>" />
			<input type = "hidden" name ="nakshatra_gender" value = "<?php echo $get_free_members[0]->gender ?>" />
					<table id="members_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th data-sortable="false" >
							<?php echo translate('user_image')?>
						</th>
						
						<th >
							<?php echo translate('Member ID')?>
						</th>
						
						<th >
							<?php echo translate('name')?>
						</th>
						
						

						
						
					
						
						<?php if ($parameter == "premium_members"): ?>
							<th data-sortable="false" >
								<?php echo translate('package')?>
							</th>
						<?php endif ?>
					
						
						
						<th >
							<?php echo translate('address')?>
						</th>
						<th >
							<?php echo translate('nakshatra')?>
						</th>
						<th  data-sortable="false">
							<?php echo translate('options')?>
						</th>
					</tr>
					</thead>
				</table>
			</div>
		</div>
		</form>
		<!--===================================================-->
		<!-- End Striped Table -->
	</div>
	<!--===================================================-->
	<!--End page content-->
</div>

<!-- status modal -->
<div class="modal fade" id="status_modal" role="dialog" tabindex="-1" aria-labelledby="status_modal" aria-hidden="true">
    <div class="modal-dialog" style="width: 400px;">
        <div class="modal-content">
            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title"><?php echo translate('confirm_your_action')?></h4>
            </div>
           	<!--Modal body-->
            <div class="modal-body">
            	<p><?php echo translate('are_you_sure_you_want_to')?> "<b id="status_type"></b>" <?php echo translate('this_user?')?>?</p>
            	<div class="text-right">
            		<input type="hidden" id="member_id" name="member_id" value="">
            		<button data-dismiss="modal" class="btn btn-default btn-sm" type="button" id="modal_close"><?php echo translate('close')?></button>
                	<button class="btn btn-primary btn-sm" id="status_status" value=""><?php echo translate('confirm')?></button>
            	</div>
            </div>
        </div>
    </div>
</div>
<!-- End status modal  -->

<!--Default Bootstrap Modal-->
<!--===================================================-->
<div class="modal fade" id="package_modal" role="dialog" tabindex="-1" aria-labelledby="package_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title"><?php echo translate('package_information')?></h4>
            </div>
           	<!--Modal body-->
            <div class="modal-body" id="package_modal_body">

            </div>
        </div>
    </div>
</div>
<!--===================================================-->
<!--End Default Bootstrap Modal-->
<!--Default Bootstrap Modal-->
<!--===================================================-->
<div class="modal fade" id="upgrade_modal" role="dialog" tabindex="-1" aria-labelledby="upgrade_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title"><?php echo translate('upgrade_package')?></h4>
            </div>
           	<!--Modal body-->
            <div class="modal-body">
            	<form class="form-horizontal" id="package_upgrade_form" method="POST" action="<?=base_url()?>admin/members/upgrade_member_package">
					<div class="row">
					    <div class="col-md-10 col-md-offset-1">
					        <div class="upgrade">
					            <h5><?php echo translate('choose_your_package')?></h5>
					            <div class="text-left">
					                <div class="px-2 py-2">
					                	<input type="hidden" id="up_member_id" name="up_member_id" value="">
					                	<input type="hidden" id="member_type" name="member_type" value="<?=$parameter?>">
					                    <?php echo $this->Crud_model->select_html('plan', 'plan', 'name', 'add', 'form-control form-control-sm selectpicker', '', '', '', '');?>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
	            	<div class="text-center" style="margin-top: 15px;">
		        		<button class="btn btn-success add-tooltip" type="submit"><?=translate('submit')?></button>
		        	</div>
		    	</form>
            </div>
        </div>
    </div>
</div>
<!--===================================================-->
<!--End Default Bootstrap Modal-->
<!--Default Bootstrap Modal-->
<!--===================================================-->
<div class="modal fade" id="block_modal" role="dialog" tabindex="-1" aria-labelledby="block_modal" aria-hidden="true">
    <div class="modal-dialog" style="width: 400px;">
        <div class="modal-content">
            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title"><?php echo translate('confirm_your_action')?></h4>
            </div>
           	<!--Modal body-->
            <div class="modal-body">
            	<p><?php echo translate('are_you_sure_you_want_to')?> "<b id="block_type"></b>" <?php echo translate('this_user?')?>?</p>
            	<div class="text-right">
            		<input type="hidden" id="member_id" name="member_id" value="">
            		<button data-dismiss="modal" class="btn btn-default btn-sm" type="button" id="modal_close"><?php echo translate('close')?></button>
                	<button class="btn btn-primary btn-sm" id="block_status" value=""><?php echo translate('confirm')?></button>
            	</div>
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
            	<p><?php echo translate('are_you_sure_you_want_to_delete_this_data?')?></p>
            	<div class="text-right">
            		<button data-dismiss="modal" class="btn btn-default btn-sm" type="button" id="modal_close"><?php echo translate('close')?></button>
                	<button class="btn btn-danger btn-sm" id="delete_member" value=""><?php echo translate('delete')?></button>
            	</div>
            </div>

        </div>
    </div>
</div>

<!--===================================================-->
<!--End Default Bootstrap Modal-->
<style>
	.rba{ 
			margin-left: 0px;
			margin-top: 1px !important;
		}
	.ea { margin-right: 40px; }	
	
</style>

<script>
	setTimeout(function() {
	    $('#success_alert').fadeOut('fast');
	    $('#danger_alert').fadeOut('fast');
	}, 5000); // <-- time in milliseconds
</script>
<script>
    $(document).ready(function () {
    	var type = "<?=$parameter?>";

    	var url = "";
    	if (type == "free_members") {
    		url = "<?php echo base_url('admin/members/free_members/star_list_data') ?>";
    		$('#members_table').DataTable({
	            "processing": true,
	            "serverSide": true,
	            "ajax":{
					"url": url,
					"dataType": "json",
					"type": "POST",
					"data":{  '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>' , "nakshatra" : '<?php echo $nakshatra[0]['moon_sign']; ?>', "gender" : '<?php echo $get_free_members[0]->gender ?>'}
				},
		    	"columns": [
					{ "data": "image" },
					{ "data": "member_id" },
					{ "data": "name" },
					
					{ "data": "address" },
					{ "data": "nakshatra" },
					{ "data": "options" },
				],
				"drawCallback": function( settings ) {
			        $('.add-tooltip').tooltip();
			    }
		    });
    	}
    	if (type == "premium_members") {
    		url = "<?php echo base_url('admin/members/premium_members/list_data') ?>";
    		$('#members_table').DataTable({
	            "processing": true,
	            "serverSide": true,
	            "ajax":{
					"url": url,
					"dataType": "json",
					"type": "POST",
					"data":{  '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>' }
				},
		    	"columns": [
					{ "data": "image" },
					{ "data": "member_id" },
					{ "data": "name" },
					<?php $member_approval = $this->db->get_where('general_settings', array('type' => 'member_approval_by_admin'))->row()->value;
						if($member_approval == 'yes') { ?>
						{ "data": "status" },
					<?php } ?>
					{ "data": "follower" },
					{ "data": "profile_reported" },
					{ "data": "package" },
					{ "data": "member_since" },
					{ "data": "member_status" },
					{ "data": "address" },
					{ "data": "options" },
				],
				"drawCallback": function( settings ) {
			        $('.add-tooltip').tooltip();
			    }
		    });
    	}
    	if (type == "deleted_members") {
    		url = "<?php echo base_url('admin/deleted_members/list_data') ?>";
    		$('#members_table').DataTable({
	            "processing": true,
	            "serverSide": true,
	            "ajax":{
					"url": url,
					"dataType": "json",
					"type": "POST",
					"data":{  '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>' }
				},
		    	"columns": [
					{ "data": "image" },
					{ "data": "member_id" },
					{ "data": "name" },
					{ "data": "follower" },
					{ "data": "package" },
					{ "data": "member_since" },
					{ "data": "member_status" },
					{ "data": "options" },
				],
				"drawCallback": function( settings ) {
			        $('.add-tooltip').tooltip();
			    }
		    });
    	}
    });
</script>






<script>
	$.fn.dataTable.ext.errMode = 'none';
</script>


