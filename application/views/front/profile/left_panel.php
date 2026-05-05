	<?php
    $member_id = $this->session->userdata('member_id');
    $member_data = $this->db->select('*')->from('member')->where(array('member_id' => $member_id))->get()->row_array();

    ?>

	<div class="sidebar sidebar-inverse sidebar--style-1 bg-base-1 z-depth-2-top">
	    <?php if ($this->db->get_where("member", array("member_id" => $this->session->userdata('member_id')))->row()->is_closed == 'yes') { ?>
	        <a class="badge-corner badge-corner-red" style="right: 15px;border-top: 90px solid  #DC0330;border-left: 90px solid transparent;">
	            <span style="-ms-transform: rotate(45deg);/* IE 9 */-webkit-transform: rotate(45deg);/* Chrome, Safari, Opera */transform: rotate(45deg);font-size: 14px;margin-left: -24px;margin-top: -16px;"><?= translate('closed') ?></span>
	        </a>
	    <?php } ?>
	    <div class="sidebar-object mb-0">
	        <!-- Profile picture -->
	        <div class="profile-picture profile-picture--style-2">
	            <?php
                $profile_pic_approval = $this->db->get_where('general_settings', array('type' => 'member_profile_pic_approval_by_admin'))->row()->value;
                $profile_image_status = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'profile_image_status');
                $profile_image = $get_member[0]->profile_image;
                $images = json_decode($profile_image, true);
                if (file_exists('uploads/profile_image/' . $images[0]['thumb'])) { ?>
	                <div style="border: 10px solid rgba(255, 255, 255, 0.1);width: 200px;border-radius: 50%;margin-top: 30px;background: #fff !important;" class="mx-auto">
	                    <div class="profile_img" id="show_img" style="background-image: url(<?= base_url() ?>uploads/profile_image/<?= $images[0]['thumb'] ?>)"></div>
	                </div>
	                <?php if ($profile_pic_approval == 'on' && $profile_image_status == '0' || $profile_image_status == '2') { ?>
	                    <p class="text-center">
	                        <?php
                            if ($profile_image_status == '0') {
                                echo translate('pending');
                            } elseif ($profile_image_status == '2') {
                                echo translate('rejected');
                            }
                            ?>
	                    </p>
	                <?php } ?>
	            <?php
                } else {
                ?>
	                <div style="border: 10px solid rgba(255, 255, 255, 0.1);width: 200px;border-radius: 50%;margin-top: 30px;background: #fff !important;" class="mx-auto">
	                    <div class="profile_img" id="show_img" style="background-image: url(<?= base_url() ?>uploads/profile_image/female_default.png)"></div>
	                </div>
	            <?php
                }
                ?>
	            <div class="profile-connect mt-1 mb-0" id="save_button_section" style="display: none">
	                <button type="button" class="btn btn-styled btn-xs btn-base-2" id="save_image"><?php echo translate('save_image') ?></button>
	            </div>
	            <label class="btn-aux" for="profile_image" style="cursor: pointer;">
	                <i class="ion ion-edit"></i>
	            </label>
	            <form action="<?= base_url() ?>home/profile/update_image" method="POST" id="profile_image_form" enctype="multipart/form-data">
	                <input type="file" style="display: none;" id="profile_image" name="profile_image" />
	            </form>
	            <!-- <a href="#" class="btn-aux">
                <i class="ion ion-edit"></i>
            </a> -->
	        </div>

			
	        <!-- Profile details -->
	        <div class="profile-details">
	            <h2 class="heading heading-3 strong-500 profile-name"><?= $get_member[0]->first_name . " " . $get_member[0]->last_name ?></h2>
	            <?php
                $education_and_career = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'education_and_career');
                $education_and_career_data = json_decode($education_and_career, true);
                ?>
	            <h3 class="heading heading-6 strong-400 profile-occupation mt-3"><?= $education_and_career_data[0]['occupation'] ?></h3>
	            <?php
                $package_info = json_decode($get_member[0]->package_info, true);
                ?>
	            <div class="profile-stats clearfix mt-2">
	                <div class="stats-entry" style="width: 100%">
	                    <span class="stats-count"><?= $get_member[0]->follower ?></span>
	                    <span class="stats-label text-uppercase"><?php echo translate('followers') ?></span>
	                </div>
	            </div>
	            <!-- Profile connect -->
	            <div class="profile-connect mt-5">
	                <!-- <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-5">Follow</a>
                <a href="#" class="btn btn-styled btn-block btn-circle btn-sm btn-base-2">Send message</a> -->
	                <h2 class="heading heading-5 strong-400"><?php echo translate('package_informations') ?></h2>
	            </div>
	            <div class="profile-stats clearfix mt-0">
	                <div class="stats-entry">
	                    <span class="stats-count"><?= $package_info[0]['current_package'] ?></span>
	                    <span class="stats-label text-uppercase"><?php echo translate('current_package') ?></span>
	                </div>
	                <div class="stats-entry">
	                    <span class="stats-count"><?= currency($package_info[0]['package_price']) ?></span>
	                    <span class="stats-label text-uppercase"><?php echo translate('package_price') ?></span>
	                </div>
	            </div>
	            <div class="profile-stats clearfix mt-2">
	                <div class="stats-entry">
	                    <span class="stats-count"><?= $package_info[0]['payment_type'] ?></span>
	                    <span class="stats-label text-uppercase"><?php echo translate('payment_gateway') ?></span>
	                </div>
	                
	            </div>
	            <div class="profile-stats clearfix mt-2">
	               
	                <div class="stats-entry">
	                    <span class="stats-count"><?= $get_member[0]->photo_gallery ?></span>
	                    <span class="stats-label text-uppercase"><?php echo translate('photo_gallery') ?></span>
	                </div>
	            </div>
	        </div>
	        <!-- Profile stats -->
	        <div class="profile-useful-links clearfix">
	            <div class="useful-links">
	                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 gallery l_nav" onclick="profile_load('gallery','alt-sm')">
	                    <b style="font-size: 12px"><?php echo translate('gallery') ?></b>
	                </a>
	                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 happy_story l_nav" onclick="profile_load('happy_story','alt-sm')">
	                    <b style="font-size: 12px"><?php echo translate('Project') ?></b>
	                </a>
	                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 my_packages l_nav" onclick="profile_load('my_packages','alt-sm')">
	                    <b style="font-size: 12px"><?php echo translate('My_package') ?></b>
	                </a>
					<a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 my_packages l_nav"  href="<?=base_url()?>home/plans">
	                    <b style="font-size: 12px"><?php echo translate('Contribution') ?></b>
	                </a>
	                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 payments l_nav" onclick="profile_load('payments','alt-sm')">
	                    <b style="font-size: 12px"><?php echo translate('payment_informations') ?></b>
	                </a>
	                <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 picture_privacy l_nav" onclick="profile_load('picture_privacy','alt-sm')">
	                    <b style="font-size: 12px"><?php echo translate('picture_privacy') ?></b>
	                </a>
	                <?php if ($this->db->get_where("member", array("member_id" => $this->session->userdata('member_id')))->row()->registration_type != 'social_login') { ?>
	                    <a class="btn btn-styled btn-sm btn-white z-depth-2-bottom mb-3 change_pass l_nav" onclick="profile_load('change_pass','alt-sm')">
	                        <b style="font-size: 12px"><?php echo translate('change_password') ?></b>
	                    </a>
	                <?php } ?>

	                <div class="text-center pt-3 pb-0">
	                    <?php if ($this->db->get_where("member", array("member_id" => $this->session->userdata('member_id')))->row()->is_closed == 'yes') { ?>
	                        <a onclick="profile_load('reopen_account')">
	                            <i class="fa fa-unlock"></i>
	                            <?php echo translate('re-open_account?') ?>
	                        </a>
	                    <?php } else { ?>
	                        <a onclick="profile_load('close_account')">
	                            <i class="fa fa-lock"></i>
	                            <?php echo translate('close_account') ?>
	                        </a>
	                    <?php } ?>
	                </div>
	            </div>

	            <?php if ($member_data['membership'] == '2') : ?>
	                <div class="profile-connect">
	                    <!-- <h2 class="heading heading-5 strong-400"><?php echo translate('Project_image_and_Video') ?></h2> -->
	                </div>
	                <!-- <div class="row">
	                    <div class="col-md-6">
	                        <a href="#" id="demo-dt-delete-btn" data-target='#kundali_modal' data-toggle='modal' class="btn btn-primary btn-md add-tooltip float-right" data-toggle="tooltip" data-placement="top" title="Kundali" onclick='view_kundali(<?php echo $member_data['member_id']; ?>)'><i class="fa fa-bullseye"></i></a>
	                    </div>
	                    <div class="col-md-6">
	                        <a href="#" id="demo-dt-delete-btn" data-target='#video_modal' data-toggle='modal' class="btn btn-success btn-md add-tooltip float-left" data-toggle="tooltip" data-placement="top" title="Video" onclick='view_video(<?php echo $member_data['member_id']; ?>)'><i class="fa fa-play-circle-o"></i></a>
	                    </div>
	                </div> -->
	            <?php endif; ?>

	            <div class="modal fade" id="kundali_modal" role="dialog" tabindex="-1" aria-labelledby="kundali_modal" aria-hidden="true">
	                <div class="modal-dialog">
	                    <div class="modal-content">
	                        <!--Modal header-->
	                        <div class="modal-header">
	                            <h7 class="modal-title"><?php echo translate('Upload Project Photos') ?></h7>
	                            <button type="button" class="close" data-dismiss="modal" style="color:red">&times;</button>


	                        </div>

	                        <!--Modal body-->
	                        <div class="modal-body" id="kundali_modal_body">


	                        </div>

	                    </div>
	                </div>
	            </div>

	            <div class="modal fade" id="video_modal" role="dialog" tabindex="-1" aria-labelledby="video_modal" aria-hidden="true">
	                <div class="modal-dialog">
	                    <div class="modal-content">
	                        <!--Modal header-->
	                        <div class="modal-header">

	                            <h7 class="modal-title"><?php echo translate('Upload Project Video') ?></h7>
	                            <button type="button" class="close" data-dismiss="modal" style="color:red">&times;</button>
	                        </div>
	                        <!--Modal body-->
	                        <div class="modal-body" id="video_modal_body">

	                        </div>
	                    </div>
	                </div>
	            </div>
	            <script>
	                function view_kundali(id) {
	                    var id = id;
	                    /*alert(id);*/
	                    $.ajax({
	                        url: "<?= base_url() ?>home/user_kundali_modal/" + id,
	                        success: function(response) {
	                            $("#kundali_modal_body").html(response);
	                        },
	                        fail: function(error) {
	                            alert(error);
	                        }
	                    });
	                }
	            </script>
	            <script>
	                function view_video(id) {
	                    var id = id;

	                    $.ajax({
	                        url: "<?= base_url() ?>home/user_video_modal/" + id,
	                        success: function(response) {
	                            $("#video_modal_body").html(response);
	                        },
	                        fail: function(error) {
	                            alert(error);
	                        }
	                    });
	                }
	            </script>


	            <div class="panel-heading">
	                <!--    <h6 class="panel-title"><?php echo translate('Birth Kundali and Video') ?></h6>-->
	            </div>

	            <div class="panel-body">
	                <table class="table">
	                    <?php if (!empty($member_data['image'])) { ?>
	                        <b><?php echo translate('Kundali') ?></b>


	                        <?php
                            $path_info = pathinfo($member_data['image']);
                            $extension = $path_info['extension'];
                            ?>

	                        <div class="pad-ver">
	                            <?php if ($extension == 'pdf') { ?>
	                                <div class="iframe">
	                                    <a href="<?php echo base_url() ?>uploads/kundali_image/<?php echo $member_data['image']; ?>" target="imgbox">
	                                        <iframe src="https://docs.google.com/gview?url=<?php echo base_url() ?>uploads/kundali_image/<?php echo $member_data['image']; ?>&embedded=true" alt="image" width="300px" height="250px" scrolling="no" style="overflow: hidden"></iframe></a>
	                                    <a href="<?php echo base_url() ?>uploads/kundali_image/<?php echo $member_data['image']; ?>"></a>

	                                </div>

	                            <?php } else { ?>
	                                <div class="iframe">
	                                    <a href="<?php echo base_url() ?>uploads/kundali_image/<?php echo $member_data['image']; ?>" target="imgbox">
	                                        <img src="<?php echo base_url() ?>uploads/kundali_image/<?php echo $member_data['image']; ?>" alt="image" width="300px" height="250px" scrolling="no" style="overflow: hidden"></a>

	                                </div>
	                            <?php } ?>
	                            <a href="<?php echo base_url() ?>uploads/kundali_image/<?php echo $member_data['image']; ?>" download>
	                                <button class="btn1" style="width:300px"><i class="fa fa-download"></i> Download</button>
	                            </a>
	                        </div>
	                    <?php } ?>
	                    <?php if (!empty($member_data['video'])) { ?>
	                        <b><?php echo translate('Video') ?></b>


	                        <div class="pad-ver">
	                            <video width="300" height="150" controls>
	                                <source src="<?php echo base_url() ?>uploads/video/<?php echo $member_data['video'] ?>">
	                            </video>
	                        </div>
	                    <?php } ?>
	                </table>
	            </div>

	            <!--view video and kundali stop--->
	        </div>
	    </div>
	</div>



	<style>
	    .btn1 {
	        background-color: DodgerBlue;
	        border: none;
	        color: white;
	        padding: 12px 30px;
	        cursor: pointer;
	        font-size: 10px;
	    }
	</style>

	<script>
	    $("#profile_image").change(function() {
	        readURL(this);
	    });

	    function readURL(input) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();
	            reader.onload = function(e) {
	                $("#show_img").css({
	                    "background-image": "url(" + e.target.result + ")"
	                });
	            }
	            reader.readAsDataURL(input.files[0]);
	            $("#save_button_section").show();
	        }
	    }
	    $("#save_image").click(function(e) {
	        e.preventDefault();
	        $("#profile_image_form").submit();
	    })
	</script>