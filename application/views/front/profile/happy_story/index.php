<?php
    $get_story = $this->db->get_where("happy_story", array("legion_id" => $this->session->userdata('legion_id')))->result();
    if ($get_story) {
        foreach ($get_story as $value) {
?>
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <div class="row mb-3">
                       <div class="col-md-6">
    <p><strong>Legion Name:</strong> <?= !empty($value->legion_name) ? htmlspecialchars($value->legion_name) : '' ?></p>
    <p><strong>President Name:</strong> <?= !empty($value->member_name) ? htmlspecialchars($value->member_name) : '' ?></p>
    <p><strong>Area:</strong> <?= !empty($value->area_name) ? htmlspecialchars($value->area_name) : '' ?></p>
</div>
<div class="col-md-6">
    <p><strong>Program Name:</strong> <?= !empty($value->title) ? htmlspecialchars($value->title) : '' ?></p>
    <p><strong>Program Area:</strong> <?= !empty($value->program_area) ? htmlspecialchars($value->program_area) : '' ?></p>
    <p><strong>Date:</strong> <?= !empty($value->post_time) ? date('d M Y', strtotime($value->post_time)) : '' ?></p>
</div>
                    </div>

                    <!-- ACTIVITY PHOTO AND PRESS COVERAGE IN A ROW -->
<?php 
    log_message('info', 'Activity photo filename: ' . $value->activity_photo); 
    log_message('info', 'Press coverage filename: ' . $value->press_coverage);

    $image_path = FCPATH . 'uploads/happy_story_image/' . $value->activity_photo;
    $default_image = base_url('uploads/happy_story_image/default_image.jpg');
    $activity_image_to_show = (!empty($value->activity_photo) && file_exists($image_path)) 
        ? base_url('uploads/happy_story_image/' . $value->activity_photo) 
        : $default_image;

    $press_image_path = FCPATH . 'uploads/happy_story_image/' . $value->press_coverage;
    $default_press_image = base_url('uploads/happy_story_image/default_image.jpg');
    $press_image_to_show = (!empty($value->press_coverage) && file_exists($press_image_path)) 
        ? base_url('uploads/happy_story_image/' . $value->press_coverage) 
        : $default_press_image;
?>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label class="d-block font-weight-bold mb-2">ACTIVITY PHOTOS:</label>
                            <div class="d-flex flex-row flex-wrap align-items-center">
                                <div class="mr-3 mb-2" style="flex: 0 0 auto;">
                                    <img src="<?= $activity_image_to_show ?>" style="height: 80px; width: auto;" class="rounded border" alt="Activity Photo">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="d-block font-weight-bold mb-2">PRESS COVERAGE:</label>
                            <div class="d-flex flex-row flex-wrap align-items-center">
                                <div class="mr-3 mb-2" style="flex: 0 0 auto;">
                                    <img src="<?= $press_image_to_show ?>" style="height: 80px; width: auto;" class="rounded border" alt="Press Coverage">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
<?php
        }
    }
?>