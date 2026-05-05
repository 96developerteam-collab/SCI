<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow"><?php echo translate('Project Details')?></h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
            <li><a href="#"><?php echo translate('home')?></a></li>
            <li><a href="#"><?php echo translate('project')?></a></li>
            <li class="active"><a href="#"><?php echo translate('project_details')?></a></li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->
        
        <!-- Back Button -->
        <div class="text-left" style="margin-bottom: 15px;">
            <a href="<?=base_url()?>admin/stories" class="btn btn-danger btn-labeled fa fa-arrow-left">
                <?php echo translate('go_back')?>
            </a>
        </div>
    </div>
    
    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <!--Block Styled Form -->
        <!--===================================================-->
        <?php foreach ($get_story as $value): ?>
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo translate('project_information')?></h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Basic Information -->
                        <div class="panel panel-bordered">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('basic_information')?></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th width="30%"><?php echo translate('project_id')?></th>
                                            <td><?=$value->happy_story_id?></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo translate('title')?></th>
                                            <td><?=$value->title?></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo translate('date')?></th>
                                            <td><?=date('d/m/Y', strtotime($value->date))?></td>
                                        </tr>

                                        <tr>
                                            <th><?php echo translate('program_date')?></th>
                                            <td><?= !empty($value->program_date) ? date('d/m/Y', strtotime($value->program_date)) : '-' ?></td>
                                        </tr>

                                        <!-- <tr>
                                            <th><?php echo translate('posted_on')?></th>
                                            <td><?=date('d/m/Y H:i:s A', strtotime($value->post_time))?></td>
                                        </tr> -->
                                        <tr>
                                            <th><?php echo translate('program_area')?></th>
                                            <td><?=$value->program_area?></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo translate('legion_name')?></th>
                                            <td><?=$value->legion_name?></td>
                                        </tr>
                                        <tr>
                                            <th><?php echo translate('area_name')?></th>
                                            <td><?=$value->area_name?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- Description -->
                        <div class="panel panel-bordered">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('description')?></h3>
                            </div>
                            <div class="panel-body">
                                <?=$value->description?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <!-- Posted By Information -->
                        <!-- <div class="panel panel-bordered">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('posted_by')?></h3>
                            </div>
                            <div class="panel-body text-center">
                                <?php
                                    $member_type = $this->Crud_model->get_type_name_by_id('member', $value->posted_by, 'membership');
                                    if ($member_type==1) {
                                        $type= "free_members";
                                    }
                                    elseif ($member_type==2) {
                                        $type= "premium_members";
                                    }
                                ?>
                                <div class="pad-ver">
								<img src="<?= base_url('uploads/happy_story_image/' . (!empty($value->press_coverage) ? $value->press_coverage : 'default_image.jpg')) ?>" 
								class="img-lg img-circle" alt="press_coverage">

                                </div>
                               
                            </div>
                        </div>
                         -->
						
                        <!-- Activity Photo -->
                        <?php if(!empty($value->activity_photo)): ?>
                        <div class="panel panel-bordered">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('activity_photo')?></h3>
                            </div>
                            <div class="panel-body text-center">
                                <img src="<?=base_url()?>uploads/happy_story_image/<?=$value->activity_photo?>" 
                                     class="img-responsive img-thumbnail" alt="Activity Photo">
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <!-- Press Coverage -->
                        <?php if(!empty($value->press_coverage)): ?>
                        <div class="panel panel-bordered">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('press_coverage')?></h3>
                            </div>
                            <div class="panel-body text-center">
                                <img src="<?=base_url()?>uploads/happy_story_image/<?=$value->press_coverage?>" 
                                     class="img-responsive img-thumbnail" alt="Press Coverage">
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <!-- Gallery Images Carousel -->
                <?php if(!empty($value->image)): ?>
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo translate('gallery')?></h3>
                    </div>
                    <div class="panel-body">
                        <?php 
                            $images = json_decode($value->image, true);
                            if(!empty($images)):
                        ?>
                        <div id="happy_story_carousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators out">
                                <?php foreach ($images as $i => $image): ?>
                                    <li data-target="#happy_story_carousel" data-slide-to="<?=$i?>" class="<?=($i==0)?'active':''?>"></li>
                                <?php endforeach; ?>
                            </ol>
                            
                            <!-- Slides -->
                            <div class="carousel-inner">
                                <?php foreach ($images as $i => $image): ?>
                                    <div class="item <?=($i==0)?'active':''?>">
                                        <div class="happy_story_carousel" style="background-image: url(<?=base_url()?>uploads/happy_story_image/<?=$image['thumb']?>)"></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            
                            <!-- Controls -->
                            <a class="left carousel-control" href="#happy_story_carousel" data-slide="prev">
                                <span class="demo-pli-arrow-left icon-2x"></span>
                            </a>
                            <a class="right carousel-control" href="#happy_story_carousel" data-slide="next">
                                <span class="demo-pli-arrow-right icon-2x"></span>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
                
                <!-- Videos Section -->
                <?php
                    $video_exist = $this->db->get_where("story_video",array("story_video_uploader_id" => $value->posted_by))->result();
                    if ($video_exist):
                ?>
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo translate('videos')?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?php 
                                $get_video = $this->db->get_where("story_video", array("story_video_uploader_id" => $value->posted_by))->result_array();
                                foreach ($get_video as $video):
                            ?>
                            <div class="col-md-6">
                                <div class="panel">
                                    <div class="panel-body text-center">
                                        <?php if($video['type'] == 'upload'): ?>
                                            <video controls class="img-responsive">
                                                <source src="<?=base_url()?><?=$video['video_src']?>">
                                            </video>
                                        <?php else: ?>
                                            <iframe class="img-responsive" 
                                                src="<?=$video['video_src']?>" 
                                                frameborder="0" allowfullscreen>
                                            </iframe>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            
            <!-- <div class="panel-footer text-center">
                <a href="<?=base_url()?>admin/stories" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward">
                    <?php echo translate('go_back')?>
                </a>
            </div> -->
        </div>
        <?php endforeach; ?>
        <!--===================================================-->
        <!--End Block Styled Form -->
    </div>
    <!--===================================================-->
    <!--End page content-->
</div>