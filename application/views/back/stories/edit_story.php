<?php
$image_data = json_decode($get_story['image'], true);

function convertDateFormat($date) {
    $date = str_replace('-"', '/', $date);  
    return $newDate = date("Y-m-d", strtotime($date));  
}
?>

<div id="content-container">
    <div id="page-head">
        <div id="page-title">
            <h1 class="page-header text-overflow"><?php echo translate('edit_project')?></h1>
        </div>
        <ol class="breadcrumb">
            <li><a href="<?=base_url()?>admin"><?php echo translate('home')?></a></li>
            <li><a href="<?=base_url()?>admin/stories"><?php echo translate('Project')?></a></li>
            <li class="active"><a href="#"><?php echo translate('edit_project')?></a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-10 col-lg-offset-1">
            <div id="page-content">
                <div class="panel">
                    <form class="form-horizontal" id="package_form" method="POST"
                        action="<?=base_url()?>admin/stories/update_story/<?php echo $get_story['happy_story_id']; ?>" 
                        enctype="multipart/form-data">
                        
                        <div class="panel-body" style="padding: 30px;">
                            <h3 class="text-center" style="margin-bottom: 30px;">Edit Project Details</h3>
                            
                            <!-- Main Image -->
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label text-uppercase" for="profile_image">
                                    <b><?php echo translate('main_image')?></b>
                                </label>
                                <div class="col-sm-9">
                                    <?php if(!empty($image_data[0]['thumb'])): ?>
                                        <img class="img-responsive img-border blah" 
                                             src="<?=base_url()?>uploads/happy_story_image/<?=$image_data[0]['thumb']?>" 
                                             style="max-width: 30%; height: 150px">
                                    <?php endif; ?>
                                    <div class="col-sm-9" style="margin-top: 10px">
                                        <span class="pull-left btn btn-dark btn-sm btn-file" id="img_edit">
                                            <?php echo translate('change_photo')?>
                                            <input type="file" name="story_photo" id="story_photo" class="form-control imgInp">
                                        </span>
                                        <input type="hidden" id="story_photo_is_edit" name="is_edit" value="0">
                                    </div>
                                </div>
                            </div> -->
                            
                            <!-- Activity Photo -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="activity_photo">
                                    <b><?php echo translate('activity_photo')?></b>
                                </label>
                                <div class="col-sm-9">
                                    <?php if(!empty($get_story['activity_photo'])): ?>
                                        <img class="img-responsive img-border blah" 
                                             src="<?=base_url()?>uploads/happy_story_image/<?=$get_story['activity_photo']?>" 
                                             style="max-width: 30%; height: 150px">
                                    <?php endif; ?>
                                    <div class="col-sm-9" style="margin-top: 10px">
                                        <span class="pull-left btn btn-dark btn-sm btn-file">
                                            <?php echo translate('change_photo')?>
                                            <input type="file" name="activity_photo" class="form-control">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Press Coverage -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="press_coverage">
                                    <b><?php echo translate('press_coverage')?></b>
                                </label>
                                <div class="col-sm-9">
                                    <?php if(!empty($get_story['press_coverage'])): ?>
                                        <img class="img-responsive img-border blah" 
                                             src="<?=base_url()?>uploads/happy_story_image/<?=$get_story['press_coverage']?>" 
                                             style="max-width: 30%; height: 150px">
                                    <?php endif; ?>
                                    <div class="col-sm-9" style="margin-top: 10px">
                                        <span class="pull-left btn btn-dark btn-sm btn-file">
                                            <?php echo translate('change_photo')?>
                                            <input type="file" name="press_coverage" class="form-control">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Title -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="story_name">
                                    <b><?php echo translate('program name')?></b><span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="story_name" id="story_name" required 
                                           value="<?= !empty($form_contents['story_name']) ? $form_contents['story_name'] : $get_story['title'] ?>">
                                </div>
                            </div>
                            
                            <!-- Date -->
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label" for="dated">
                                    <b><?php echo translate('date')?></b><span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="dated" id="dated" required
                                           value="<?= !empty($form_contents['dated']) ? $form_contents['dated'] : convertDateFormat($get_story['date']) ?>">
                                </div>
                            </div> -->
                           <div class="form-group">
    <label class="col-sm-2 control-label" for="dated">
        <b><?php echo translate('date')?></b><span class="text-danger">*</span>
    </label>
    <div class="col-sm-9">
        <input type="date" class="form-control" name="dated" id="dated"
               value="<?= !empty($form_contents['dated']) ? $form_contents['dated'] : convertDateFormat($get_story['date']) ?>"
               readonly
               style="background-color: transparent;">
    </div>
</div>

<!-- Program Date -->
<div class="form-group">
    <label class="col-sm-2 control-label" for="program_date">
        <b><?php echo translate('program_date')?></b><span class="text-danger">*</span>
    </label>
    <div class="col-sm-9">
        <input type="date" class="form-control" name="program_date" id="program_date"
               value="<?= !empty($form_contents['program_date']) ? $form_contents['program_date'] : convertDateFormat($get_story['program_date']) ?>"
               required>
    </div>
</div>

                            
                            <!-- Description -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="description">
                                    <b><?php echo translate('description')?></b><span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" id="description" rows="5" required><?= 
                                        !empty($form_contents['description']) ? $form_contents['description'] : $get_story['description']
                                    ?></textarea>
                                </div>
                            </div>
                            
                            <!-- Program Area -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="program_area">
                                    <b><?php echo translate('program_area')?></b>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="program_area" 
                                           value="<?= !empty($form_contents['program_area']) ? $form_contents['program_area'] : $get_story['program_area'] ?>">
                                </div>
                            </div>
                            
                            <!-- Legion Name -->
                           <div class="form-group">
    <label class="col-sm-2 control-label" for="legion_name">
        <b><?php echo translate('legion_name')?></b>
    </label>
    <div class="col-sm-9">
        <input type="text" class="form-control" name="legion_name" 
               value="<?= !empty($form_contents['legion_name']) ? $form_contents['legion_name'] : $get_story['legion_name'] ?>"
               readonly
               style="background-color: transparent;">
    </div>
</div>

<!-- Area Name -->
<div class="form-group">
    <label class="col-sm-2 control-label" for="area_name">
        <b><?php echo translate('area_name')?></b>
    </label>
    <div class="col-sm-9">
        <input type="text" class="form-control" name="area_name" 
               value="<?= !empty($form_contents['area_name']) ? $form_contents['area_name'] : $get_story['area_name'] ?>"
               readonly
               style="background-color: transparent;">
    </div>
</div>

                            
                            <!-- Additional Images -->
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <b><?php echo translate('additional_images')?></b>
                                </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="additional_images[]" multiple>
                                    <small class="text-muted">Select multiple images to upload</small>
                                </div>
                            </div>
                             -->
                            <!-- Videos -->
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">
                                    <b><?php echo translate('videos')?></b>
                                </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="videos[]" multiple accept="video/*">
                                    <small class="text-muted">Select video files to upload</small>
                                </div>
                            </div>
                        </div> -->
                        
                        <div class="panel-footer text-center">
                            <a href="<?=base_url()?>admin/stories" class="btn btn-default btn-sm btn-labeled fa fa-arrow-left">
                                <?php echo translate('back')?>
                            </a>
                            <button class="btn btn-primary btn-sm btn-labeled fa fa-floppy-o" type="submit">
                                <?php echo translate('save_changes')?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Script for image upload preview
    function readURL_all(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var parent = $(input).closest('.form-group');
            reader.onload = function (e) {
                parent.find('.blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".panel-body").on('change', '.imgInp', function () {
        readURL_all(this);
    });

    $("#story_photo").change(function(){
        $("#story_photo_is_edit").val('1');
    });
</script>