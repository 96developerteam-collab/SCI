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
                        <h3 class="panel-title"><?=translate($member_type)?> <?php echo translate('members_list')?></h3>
                    </div>

                </div>
            </div>

            <div class="panel-heading">
                <div class="row">
                    <!--<div class="col-md-4">-->
                    <!--	<h3 class="panel-title"><?=translate($member_type)?> <?php echo translate('members_list')?></h3>-->
                    <!--</div>-->
                    <?php if ($parameter == "free_members"): ?>
                    <form method="post">
                        <div class="col-md-11" text-align="right" style="margin-top: 9px;">
                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/groomFreeMember"><i class="fa fa-file-excel-o"></i>
                                Export Male</a>

                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/bridFreeMember"><i class="fa fa-file-excel-o"></i>
                                Export Female</a>

                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/exportFreeMemberCSV"><i
                                    class="fa fa-file-excel-o"></i> Export All</a>

                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/activegroomFreeMember"><i
                                    class="fa fa-file-excel-o"></i> Export Active Male</a>

                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/activebridFreeMember"><i
                                    class="fa fa-file-excel-o"></i> Export Active Female</a>

                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/exportactiveFreeMemberCSV"><i
                                    class="fa fa-file-excel-o"></i> Export Active All</a>
                        </div>
                    </form>
                    <?php elseif($parameter == "premium_members"): ?>
                    <form method="post">
                        <div class="col-md-11" text-align="right" style="margin-top: 9px;">
                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/groomPremiumMember"><i
                                    class="fa fa-file-excel-o"></i> Export Male</a>

                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/bridPremiumMember"><i
                                    class="fa fa-file-excel-o"></i> Export Female</a>

                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/exportPremiumMemberCSV"><i
                                    class="fa fa-file-excel-o"></i> Export All</a>

                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/activegroomPremiumMember"><i
                                    class="fa fa-file-excel-o"></i> Export Active Male</a>

                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/activebridPremiumMember"><i
                                    class="fa fa-file-excel-o"></i> Export Active Female</a>

                            <a class="pull-right btn btn-warning btn-large ea"
                                href="<?php echo base_url();?>admin/exportactivePremiumMemberCSV"><i
                                    class="fa fa-file-excel-o"></i> Export Active All</a>
                        </div>
                    </form>
                    <?php endif;?>
                </div>
            </div>

            <?php if ($parameter == "free_members"): ?>
            <form class="form-group" method="POST" action="<?php echo base_url('admin/members/free_members')?>">

                <div class="row text-center">

                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5" style="padding-left: 30px;">
                        <div class="form-group has-feedback">
                            <div class="radio radio-primary">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="free_member_gender" class="ch rba free_member_radio"
                                        value="all"
                                        <?php if(!empty($this->session->userdata('free_member_status_type'))) { if($this->session->userdata('free_member_status_type') == 'all') {echo 'checked'; }}else if(empty($this->session->userdata('free_member_status_type'))){ echo 'checked';} ?>>
                                    <label for="all" style="padding-left: 0px;"><?=translate('All')?></label>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="free_member_gender" class="rba free_member_radio"
                                        value="bride"
                                        <?php if(!empty($this->session->userdata('free_member_status_type'))) { if($this->session->userdata('free_member_status_type') == 'bride') {echo 'checked'; }} ?>>
                                    <label for="bride" style="padding-left: 0px;"><?=translate('female')?></label>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="free_member_gender" class="rba free_member_radio"
                                        value="groom"
                                        <?php if(!empty($this->session->userdata('free_member_status_type'))) { if($this->session->userdata('free_member_status_type') == 'groom') {echo 'checked'; }} ?>>
                                    <label for="groom" style="padding-left: 0px;"><?=translate('male')?></label>
                                </div>

                                <!-- <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">-->
                                <!--    <input type="radio" name="free_member_gender" class="rba free_member_radio"-->
                                <!--        value="age"-->
                                <!--        <?php if(!empty($this->session->userdata('age'))) { if($this->session->userdata('age') == 'age') {echo 'checked'; }} ?>>-->
                                <!--    <label for="age" style="padding-left: 0px;"><?=translate('age')?></label>-->
                                <!--</div>-->
                                <!--<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">-->
                                <!--    <input type="radio" name="free_member_gender" class="rba free_member_radio"-->
                                <!--        value="marital_status"-->
                                <!--        <?php if(!empty($this->session->userdata('marital_status'))) { if($this->session->userdata('marital_status') == 'marital_status') {echo 'checked'; }} ?>>-->
                                <!--    <label for="marital_status" style="padding-left: 0px;"><?=translate('marital_status')?></label>-->
                                <!--</div>-->
                                <!--<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">-->
                                <!--    <input type="radio" name="free_member_gender" class="rba free_member_radio"-->
                                <!--        value="height"-->
                                <!--        <?php if(!empty($this->session->userdata('height'))) { if($this->session->userdata('height') == 'height') {echo 'checked'; }} ?>>-->
                                <!--    <label for="height" style="padding-left: 0px;"><?=translate('height')?></label>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                        <div class="form-group has-feedback">
                            <div class="radio radio-primary">

                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="free_filter_status" class="rba free_filter_status_radio"
                                        value="both"
                                        <?php if(!empty($this->session->userdata('free_filter_status'))) { if($this->session->userdata('free_filter_status') == 'both') {echo 'checked'; }} ?>>
                                    <label for="bride" style="padding-left: 0px;"><?=translate('Both')?></label>
                                </div>

                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="free_filter_status"
                                        class="ch rba free_filter_status_radio" value="approved"
                                        <?php if(!empty($this->session->userdata('free_filter_status'))) { if($this->session->userdata('free_filter_status') == 'approved') {echo 'checked'; }} ?>>
                                    <label for="all" style="padding-left: 0px;"><?=translate('Approved')?></label>
                                </div>

                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="free_filter_status" class="rba free_filter_status_radio"
                                        value="pending"
                                        <?php if(!empty($this->session->userdata('free_filter_status'))) { if($this->session->userdata('free_filter_status') == 'pending') {echo 'checked'; }} ?>>
                                    <label for="bride" style="padding-left: 0px;"><?=translate('Pending')?></label>
                                </div>

								<!--<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">-->
        <!--                            <input type="radio" name="free_filter_status" class="ch rba free_filter_status_radio"-->
        <!--                                value="block"-->
        <!--                                <?php if(!empty($this->session->userdata('free_filter_status'))) { if($this->session->userdata('free_filter_status') == 'block') {echo 'checked'; }} ?>>-->
        <!--                            <label for="all" style="padding-left: 0px;"><?=translate('Blocked')?></label>-->
        <!--                        </div>-->

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="margin-left: -70px;">
                        <div class="form-group has-feedback">
                            <div class="radio radio-primary">
                                <?php $checked = ( isset($testx )) ? ' checked' : ''; ?>

                                <?php 
		              	if(!empty($this->session->userdata('free_member_profile_image'))) {
		              		if($this->session->userdata('free_member_profile_image') == 'default')
		              			$checked = 'checked';
		              	}
		              	else{
		              		$checked = "";
		              	}	
		              	?>
                                <input type="checkbox" name="free_member_profile_image"
                                    class="ch rba free_member_image_check" value="default" <?php echo $checked; ?>>
                                <label for="profile_image" style="padding-left: 0px;"><?=translate('image')?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- ****************** 25-1-2021 Filter Code Start ****************** -->

            <?php elseif($parameter == "premium_members"): ?>
            <form class="form-group" method="POST" action="<?php echo base_url('admin/members/premium_members')?>">

                <div class="row text-center">

                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5" style="padding-left: 30px;">
                        <div class="form-group has-feedback">
                            <div class="radio radio-primary">

                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="premium_member_gender" class="ch rba premium_member_radio"
                                        value="all"
                                        <?php if(!empty($this->session->userdata('premium_member_status_type'))) { if($this->session->userdata('premium_member_status_type') == 'all') {echo 'checked'; }}else if(empty($this->session->userdata('premium_member_status_type'))){ echo 'checked';} ?>>
                                    <label for="all" style="padding-left: 0px;"><?=translate('All')?></label>
                                </div>

                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="premium_member_gender" class="rba premium_member_radio"
                                        value="bride"
                                        <?php if(!empty($this->session->userdata('premium_member_status_type'))) { if($this->session->userdata('premium_member_status_type') == 'bride') {echo 'checked'; }} ?>>
                                    <label for="bride" style="padding-left: 0px;"><?=translate('female')?></label>
                                </div>

                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="premium_member_gender" class="rba premium_member_radio"
                                        value="groom"
                                        <?php if(!empty($this->session->userdata('premium_member_status_type'))) { if($this->session->userdata('premium_member_status_type') == 'groom') {echo 'checked'; }} ?>>
                                    <label for="groom" style="padding-left: 0px;"><?=translate('male')?></label>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                        <div class="form-group has-feedback">
                            <div class="radio radio-primary">

                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="premium_filter_status"
                                        class="rba premium_filter_status_radio" value="both"
                                        <?php if(!empty($this->session->userdata('premium_filter_status'))) { if($this->session->userdata('premium_filter_status') == 'both') {echo 'checked'; }} ?>>
                                    <label for="bride" style="padding-left: 0px;"><?=translate('Both')?></label>
                                </div>

                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="premium_filter_status"
                                        class="ch rba premium_filter_status_radio" value="approved"
                                        <?php if(!empty($this->session->userdata('premium_filter_status'))) { if($this->session->userdata('premium_filter_status') == 'approved') {echo 'checked'; }} ?>>
                                    <label for="all" style="padding-left: 0px;"><?=translate('Approved')?></label>
                                </div>

                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                    <input type="radio" name="premium_filter_status"
                                        class="rba premium_filter_status_radio" value="pending"
                                        <?php if(!empty($this->session->userdata('premium_filter_status'))) { if($this->session->userdata('premium_filter_status') == 'pending') {echo 'checked'; }} ?>>
                                    <label for="bride" style="padding-left: 0px;"><?=translate('Pending')?></label>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="margin-left: -70px;">
                        <div class="form-group has-feedback">
                            <div class="radio radio-primary">
                                <?php $checked = ( $testx ) ? ' checked' : ''; ?>

                                <?php 
	              	if(!empty($this->session->userdata('premium_member_profile_image'))) {
	              		if($this->session->userdata('premium_member_profile_image') == 'default')
	              			$checked = 'checked';
	              	}
	              	else{
	              		$checked = "";
	              	}	
	              	?>
                                <input type="checkbox" name="premium_member_profile_image"
                                    class="ch rba premium_member_image_check" value="default" <?php echo $checked; ?>>
                                <label for="profile_image" style="padding-left: 0px;"><?=translate('image')?></label>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
            <?php endif;?>



            <div class="panel-body" style="padding: 15px 20px 0px !important;">
                <table id="members_table" class="table table-striped table-bordered table-responsive" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th data-sortable="false" width="2%">
                                <?php echo translate('user_image')?>
                            </th>

                            <th width="2%">
                                <?php echo translate('Member ID')?>
                            </th>

                            <th width="2%">
                                <?php echo translate('name')?>
                            </th>

                            <!-- <th width="2%">
							<?php //echo translate('alert')?>
						</th> -->

                            <?php $member_approval = $this->db->get_where('general_settings', array('type' => 'member_approval_by_admin'))->row()->value;
						if($member_approval == 'yes') { ?>
                            <th width="2%">
                                <?php echo translate('approval_status')?>
                            </th>
                            <?php } ?>

                            <!--<th width="2%">-->
                                <?php //echo translate('followers')?>
                            <!--    <?php echo translate('caste')?>-->
                            <!--</th>-->

                            <!-- <th width="2%">
						<?php //echo translate('alert')?>
						</th> -->

                            <!--<th width="2%">-->
                                <?php //echo translate('profile_reported')?>
                            <!--    <?php echo translate('sub caste')?>-->
                            <!--</th>-->

                             
                            <?php //if ($parameter == "free_members" ): ?>
                            <th width="2%">
                                <?php echo translate('member_since')?>
                            </th>

                            <th width="2%">
                                <?php echo translate('member_status')?>
                            </th>
                            <?php //endif ?>
                            <th width="2%">
                                <?php echo translate('address')?>
                            </th>
                            <!--<th data-sortable="false" width="2%">-->
                            <!--    <?php echo translate('nakshatra')?>-->
                            <!--</th>-->
                            <th width="2%">
                                <?php echo translate('percent')?>
                            </th>

                            <th width="100%" data-sortable="false">
                                <?php echo translate('options')?>
                            </th>

                            <!-- <th width="2%">
						<?php echo translate('alert')?>
						</th> -->

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
                <p><?php echo translate('are_you_sure_you_want_to')?> "<b id="status_type"></b>"
                    <?php echo translate('this_user?')?>?</p>
                <div class="text-right">
                    <input type="hidden" id="member_id" name="member_id" value="">
                    <button data-dismiss="modal" class="btn btn-default btn-sm" type="button"
                        id="modal_close"><?php echo translate('close')?></button>
                    <button class="btn btn-primary btn-sm" id="status_status"
                        value=""><?php echo translate('confirm')?></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End status modal  -->

<!--Default Bootstrap Modal-->
<!--===================================================-->
<div class="modal fade" id="package_modal" role="dialog" tabindex="-1" aria-labelledby="package_modal"
    aria-hidden="true">
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
<div class="modal fade" id="upgrade_modal" role="dialog" tabindex="-1" aria-labelledby="upgrade_modal"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title"><?php echo translate('upgrade_package')?></h4>
            </div>
            <!--Modal body-->
            <div class="modal-body">
                <form class="form-horizontal" id="package_upgrade_form" method="POST"
                    action="<?=base_url()?>admin/members/upgrade_member_package">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="upgrade">
                                <h5><?php echo translate('choose_your_package')?></h5>
                                <div class="text-left">
                                    <div class="px-2 py-2">
                                        <input type="hidden" id="up_member_id" name="up_member_id" value="">
                                        <input type="hidden" id="member_type" name="member_type"
                                            value="<?=$parameter?>">
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
                <p><?php echo translate('are_you_sure_you_want_to')?> "<b id="block_type"></b>"
                    <?php echo translate('this_user?')?>?</p>
                <div class="text-right">
                    <input type="hidden" id="member_id" name="member_id" value="">
                    <button data-dismiss="modal" class="btn btn-default btn-sm" type="button"
                        id="modal_close"><?php echo translate('close')?></button>
                    <button class="btn btn-primary btn-sm" id="block_status"
                        value=""><?php echo translate('confirm')?></button>
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
                    <button data-dismiss="modal" class="btn btn-default btn-sm" type="button"
                        id="modal_close"><?php echo translate('close')?></button>
                    <button class="btn btn-danger btn-sm" id="delete_member"
                        value=""><?php echo translate('delete')?></button>
                </div>
            </div>

        </div>
    </div>
</div>

<!--===================================================-->
<!--End Default Bootstrap Modal-->
<style>
.rba {
    margin-left: 0px;
    margin-top: 1px !important;
}

.ea {
    margin-right: 40px;
}
</style>

<script>
setTimeout(function() {
    $('#success_alert').fadeOut('fast');
    $('#danger_alert').fadeOut('fast');
}, 5000); // <-- time in milliseconds
</script>
<script>
$(document).ready(function() {
    var type = "<?=$parameter?>";
    console.log("type:", type);
    // var type = 'national_members';

    var url = "";
    if (type == "free_members") {
        url = "<?php echo base_url('admin/members/free_members/list_data') ?>";
        $('#members_table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": url,
                "dataType": "json",
                "type": "POST",
                "data": {
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                }
            },
            "columns": [{
                    "data": "image"
                },
                {
                    "data": "member_id"
                },
                {
                    "data": "name"
                },
                <?php $member_approval = $this->db->get_where('general_settings', array('type' => 'member_approval_by_admin'))->row()->value;
						if($member_approval == 'yes') { ?> {
                    "data": "status"
                },
                <?php } ?>

                // {
                //     "data": "caste"
                // },
                // {
                //     "data": "sub_caste"
                // },
                {
                    "data": "member_since"
                },
                {
                    "data": "member_status"
                },
                {
                    "data": "address"
                },
                // {
                //     "data": "nakshatra"
                // },
                {
                    "data": "percentage"
                },
                {
                    "data": "options"
                },
                // { "data": "status" },

            ],
            "drawCallback": function(settings) {
                $('.add-tooltip').tooltip();
            }
        });
    }
    if (type == "premium_members") {
        url = "<?php echo base_url('admin/members/premium_members/list_data') ?>";
        console.log("DataTable AJAX URL:", url);  // <-- log URL here
        $('#members_table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": url,
                "dataType": "json",
                "type": "POST",
                "data": {
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                }
            },
            "columns": [{
                    "data": "image"
                },
                {
                    "data": "member_id"
                },
                {
                    "data": "name"
                },
                <?php $member_approval = $this->db->get_where('general_settings', array('type' => 'member_approval_by_admin'))->row()->value;
						if($member_approval == 'yes') { ?> {
                    "data": "status"
                },
                <?php } ?> 
                // {
                //     "data": "caste"
                // },
                // {
                //     "data": "sub_caste"
                // },
                {
                    "data": "member_since"
                },
                {
                    "data": "member_status"
                },

                {
                    "data": "address"
                },
                // {
                //     "data": "nakshatra"
                // },
                {
                    "data": "percentage"
                },
                {
                    "data": "options"
                },
                // { "data": "status" },
            ],
            "drawCallback": function(settings) {
                $('.add-tooltip').tooltip();
            }
        });
    }
    if (type == "national_members") {
    url = "<?php echo base_url('admin/members/national_members/list_data') ?>";
    console.log("DataTable AJAX URL:", url);  // <-- log URL here

    $('#members_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": url,
            "dataType": "json",
            "type": "POST",
            "data": {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            },
            "beforeSend": function() {
                console.log("AJAX request is about to be sent to:", url);  // <-- log before request
            },
            "dataSrc": function(json) {
                console.log("Response received:", json);  // <-- log response data
                return json.data;
            }
        },
        "columns": [
            { "data": "image" },
            { "data": "member_id" },
            { "data": "name" },
            <?php $member_approval = $this->db->get_where('general_settings', array('type' => 'member_approval_by_admin'))->row()->value;
                if($member_approval == 'yes') { ?> 
            { "data": "status" },
            <?php } ?>
            { "data": "member_since" },
            { "data": "member_status" },
            { "data": "address" },
            { "data": "percentage" },
            { "data": "options" }
        ],
        "drawCallback": function(settings) {
            $('.add-tooltip').tooltip();
        }
    });
}
   
    if (type == "guest_members") {
    url = "<?php echo base_url('admin/members/guest_members/list_data') ?>";
    console.log("DataTable AJAX URL:", url);  // <-- log URL here

    $('#members_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": url,
            "dataType": "json",
            "type": "POST",
            "data": {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
            },
            "beforeSend": function() {
                console.log("AJAX request is about to be sent to:", url);  // <-- log before request
            },
            "dataSrc": function(json) {
                console.log("Response received:", json);  // <-- log response data
                return json.data;
            }
        },
        "columns": [
            { "data": "image" },
            { "data": "member_id" },
            { "data": "name" },
            <?php $member_approval = $this->db->get_where('general_settings', array('type' => 'member_approval_by_admin'))->row()->value;
                if($member_approval == 'yes') { ?> 
            { "data": "status" },
            <?php } ?>
            { "data": "member_since" },
            { "data": "member_status" },
            { "data": "address" },
            { "data": "percentage" },
            { "data": "options" }
        ],
            "drawCallback": function(settings) {
                $('.add-tooltip').tooltip();
            }
        });
    }

    if (type == "ngb_members") {
        url = "<?php echo base_url('admin/members/ngb_members/list_data') ?>";
        console.log("DataTable AJAX URL:", url);  // <-- log URL here

        $('#members_table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": url,
                "dataType": "json",
                "type": "POST",
                "data": {
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                },
                "beforeSend": function() {
                    console.log("AJAX request is about to be sent to:", url);  // <-- log before request
                },
                "dataSrc": function(json) {
                    console.log("Response received:", json);  // <-- log response data
                    return json.data;
                }
            },
            "columns": [
                { "data": "image" },
                { "data": "member_id" },
                { "data": "name" },
                <?php $member_approval = $this->db->get_where('general_settings', array('type' => 'member_approval_by_admin'))->row()->value;
                    if($member_approval == 'yes') { ?> 
                { "data": "status" },
                <?php } ?>
                { "data": "member_since" },
                { "data": "member_status" },
                { "data": "address" },
                { "data": "percentage" },
                { "data": "options" }
            ],
            "drawCallback": function(settings) {
                $('.add-tooltip').tooltip();
            }
        });
    }

    if (type == "deleted_members") {
        url = "<?php echo base_url('admin/deleted_members/list_data') ?>";
        $('#members_table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": url,
                "dataType": "json",
                "type": "POST",
                "data": {
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                }
            },
            "columns": [{
                    "data": "image"
                },
                {
                    "data": "member_id"
                },
                {
                    "data": "name"
                },
                {
                    "data": "follower"
                },
                {
                    "data": "package"
                },
                {
                    "data": "member_since"
                },
                {
                    "data": "member_status"
                },
                {
                    "data": "options"
                },
            ],
            "drawCallback": function(settings) {
                $('.add-tooltip').tooltip();
            }
        });
    }
});

function view_package(id) {
    $.ajax({
        url: "<?=base_url()?>admin/member_package_modal/" + id,
        success: function(response) {
            $("#package_modal_body").html(response);
        },
        fail: function(error) {
            alert(error);
        }
    });
}
</script>

<script>
function block(status, member_id) {
    $("#block_status").val(status);
    if (status == 'yes') {
        $("#block_type").html("<?php echo translate('unblock')?>");
    }
    if (status == 'no') {
        $("#block_type").html("<?php echo translate('block')?>");
    }
    $("#member_id").val(member_id);
}

$("#block_status").click(function() {
    $.ajax({
        url: "<?=base_url()?>admin/member_block/" + $("#block_status").val() + "/" + $("#member_id")
            .val(),
        success: function(response) {
            // alert(response);
            window.location.href = "<?=base_url()?>admin/members/<?=$parameter?>";
        },
        fail: function(error) {
            alert(error);
        }
    });
})

function delete_member(id) {
    $("#delete_member").val(id);
}

$("#delete_member").click(function() {
    $.ajax({
        url: "<?=base_url()?>admin/member_delete/" + $("#delete_member").val(),
        success: function(response) {
            window.location.href = "<?=base_url()?>admin/members/<?=$parameter?>";
        },
        fail: function(error) {
            alert(error);
        }
    });
})
</script>

<script>
function status(status, member_id) {
    $("#status_status").val(status);
    if (status == 'approved') {
        $("#status_type").html("<?php echo translate('reject')?>");
    }
    if (status == 'pending') {
        $("#status_type").html("<?php echo translate('approve')?>");
    }
    $("#member_id").val(member_id);
}

$("#status_status").click(function() {
    $.ajax({
        url: "<?=base_url()?>admin/member_approval_status/" + $("#status_status").val() + "/" + $(
            "#member_id").val(),
        success: function(response) {
            // alert(response);
            window.location.href = "<?=base_url()?>admin/members/<?=$parameter?>";
        },
        fail: function(error) {
            alert(error);
        }
    });
})
</script>
<script>
$(document).ready(function() {
    $('.free_member_radio').on('click', function() {
        $(this).closest("form").submit();
    });

    $('.premium_member_radio').on('click', function() {
        $(this).closest("form").submit();
    });

    $('.member_image').on('click', function() {
        $(this).closest("form").submit();
    });

    $('.free_filter_status_radio').on('click', function() {
        $(this).closest("form").submit();
    });

    $('.premium_filter_status_radio').on('click', function() {
        $(this).closest("form").submit();
    });

    $('.free_member_image_check').on('click', function() {
        $(this).closest("form").submit();
    });

    $('.premium_member_image_check').on('click', function() {
        $(this).closest("form").submit();
    });

});
</script>

<script>
$.fn.dataTable.ext.errMode = 'none';
</script>