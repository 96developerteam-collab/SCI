<!--Magic Checkbox [ OPTIONAL ]-->
<link href="<?=base_url()?>template/back/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('add_staff')?></h1>
			<!--Searchbox-->
			<div class="searchbox">
				<div class="pull-right">
					<a href="<?=base_url()?>admin/admins" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward" type="submit"><?php echo translate('go_back')?></a>
				</div>
			</div>
		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="#"><?php echo translate('home')?></a></li>
			<li><a href="#"><?php echo translate('staff_panel')?></a></li>
			<li><a href="#"><?php echo translate('manage_staff')?></a></li>
			<li class="active"><?php echo translate('add_staff')?></li>
		</ol>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End breadcrumb-->
	</div>
	<div id="page-content">
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
	                 <?=validation_errors()?>
	            </div>
			<?php endif ?>
			
		    <div class="panel-heading">
		        <h3 class="panel-title"><?= translate('create_new_staff')?></h3>
		    </div>
		    <div class="panel-body">
		    		<form class="form-horizontal" id="manage_details_form" method="POST" action="<?=base_url()?>admin/admins/do_add">
						<div class="form-group">
							<label class="col-sm-3 control-label" for="name"><b><?= translate('name')?> <span class="text-danger">*</span></b></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" value="<?php if(!empty($form_contents)){echo $form_contents['name'];}?>" name="name" placeholder="<?= translate('staff_name')?>" >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="description"><b><?= translate('email')?> <span class="text-danger">*</span></b></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" value="<?php if(!empty($form_contents)){echo $form_contents['email'];}?>" name="email" placeholder="<?= translate('staff_email')?>" >
								
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="description"><b><?= translate('phone_no.')?> <span class="text-danger">*</span></b></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" value="<?php if(!empty($form_contents)){echo $form_contents['phone'];}?>" name="phone" placeholder="<?= translate('staff_phone_no.')?>" >
								
							</div>
						</div>
						<!-- Password -->
					<div class="form-group">
						<label class="col-sm-3 control-label" for="password"><b><?= translate('password') ?> <span class="text-danger">*</span></b></label>
						<div class="col-sm-8">
							<input type="password" class="form-control" name="password" placeholder="<?= translate('password') ?>">
						</div>
					</div>

					<!-- Confirm Password -->
					<div class="form-group">
						<label class="col-sm-3 control-label" for="confirm_password"><b><?= translate('confirm_password') ?> <span class="text-danger">*</span></b></label>
						<div class="col-sm-8">
							<input type="password" class="form-control" name="confirm_password" placeholder="<?= translate('confirm_password') ?>">
						</div>
					</div>

						<div class="form-group">
							<label class="col-sm-3 control-label" for="description"><b><?= translate('address')?> </span></b></label>
							<div class="col-sm-8">
								<textarea class="form-control" name="address" placeholder="<?= translate('staff_address')?>" ><?php if(!empty($form_contents)){echo $form_contents['address'];}?></textarea>
								
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="role"><b><?= translate('role')?> <span class="text-danger">*</span></b></label>
							<div class="col-sm-8">
								<?php
									if (!empty($form_contents)) {
											echo $this->Crud_model->select_html('role', 'role', 'name', 'edit', 'form-control form-control-sm selectpicker', $form_contents['role'], '', '', '');
										}else{
											echo $this->Crud_model->select_html('role', 'role', 'name', 'add', 'form-control form-control-sm selectpicker', '', '', '', '');
										}
									?>
							</div>
						</div>
					
						<?php $selected_area = !empty($form_contents['area']) ? $form_contents['area'] : ''; ?>

<div class="form-group">
    <label class="col-sm-3 control-label"><b>Area <span class="text-danger">*</span></b></label>
    <div class="col-sm-8">
        <select id="area" name="area" class="form-control" onchange="getLegions(this.value)">
            <option value="">Select Area</option>
            <?php foreach($areas as $area): ?>
                <option value="<?= $area['id'] ?>" <?= ($area['id'] == $selected_area) ? 'selected' : '' ?>>
                    <?= $area['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
</div>



    <!-- Legion dropdown -->
    <div class="form-group">
        <label class="col-sm-3 control-label"><b>Legion <span class="text-danger">*</span></b></label>
        <div class="col-sm-8">
            <select id="legion" name="legion_id" class="form-control">
                <option value="">Select Legion</option>
                <!-- Legions will be loaded dynamically -->
            </select>
        </div>
    </div>

    <!-- Submit button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-8 text-right">
            <button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save">Save</button>
        </div>
    </div>
					</form>								
		    </div>	
		</div>
	</div>
</div>
<script>
	setTimeout(function() {
	    $('#success_alert').fadeOut('fast');
	    $('#danger_alert').fadeOut('fast');
	}, 5000); // <-- time in milliseconds

	function getLegions(areaId) {
    if (areaId === '') {
        document.getElementById('legion').innerHTML = '<option value="">Select Legion</option>';
        return;
    }

    fetch("<?= base_url('admin/get_legions_of_area/') ?>" + areaId)
        .then(response => response.json())
        .then(data => {
            console.log("Fetched legions:", data); // ✅ Logging fetched data

            let options = '<option value="">Select Legion</option>';
            data.forEach(function (legion) {
                options += `<option value="${legion.id}">${legion.name}</option>`;
            });
            document.getElementById('legion').innerHTML = options;
        })
        .catch(error => {
            console.error('Error fetching legions:', error);
        });
}

</script>
