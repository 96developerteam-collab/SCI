<?php
foreach ($get_story as $value){
?>

<!-- start -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 text-left">     
      <h1><a href=""><?php if(!empty($value->title)) {echo $value->title;} ?></a></h1>        
      <!-- <p class="lead"><i class="fa fa-user"></i> By <a href=""> -->
        <?php
            if ($value->posted_by == $this->session->userdata('member_id')) {
        ?>
          <!--<a class="c-base-1" href="#"><?=translate('Ediga')?></a>-->
        <?php } else { ?>
            <a class="c-base-1" href="<?=base_url()?>home/member_profile/<?=$value->posted_by?>"><?= $this->Crud_model->get_type_name_by_id('member', $value->posted_by, 'first_name')." ". $this->Crud_model->get_type_name_by_id('member', $value->posted_by, 'last_name');?></a>
        <?php
            }
        ?>        
      </a><!-- </p> -->

      <!-- <hr> -->
      <p><i class="fa fa-calendar"></i> Posted on <?php if(!empty($value->post_time)) {echo date('d, F Y h:i:s A', strtotime($value->post_time)) ; }?> 


      </p>
      <!-- <p><i class="fa fa-tags"></i> Tags: <a href=""><span class="badge badge-info">Bootstrap</span></a> <a href=""><span class="badge badge-info">Web</span></a> <a href=""><span class="badge badge-info">CSS</span></a> <a href=""><span class="badge badge-info">HTML</span></a></p> -->          
      <hr>

      <?php
        $images = json_decode($value->image, true);        
      ?>     

      <?php
        $i = 0;
        foreach ($images as $image):         
      ?>
        <img src="<?= base_url()?>uploads/blog_image/<?php echo $image['image']; ?>" class="img-responsive" style="display: block; width: 350px; height: auto;">  
      <?php $i++;
        endforeach;
      ?>
      <hr>


      <p class="lead">Welcome to EdigaMatchmaker</p>
      <p><?php if(!empty($value->description)) {echo $value->description;} ?></p>
      <?php
          $video_exist = $this->db->get_where("story_video",array("story_video_uploader_id" => $value->posted_by))->result();
          
          if ($video_exist) {
            $get_video = $this->db->get_where("story_video", array("story_video_uploader_id" => $value->posted_by))->result_array();
            foreach ($get_video as $video) {?>
                <div class="post-media text-center pt-1 pb-3">
                    <?php if($video['type'] == 'upload'){?>
                        <video controls height="450" width="80%">
                            <source src="<?php echo base_url();?><?php echo $video['video_src'];?>">
                        </video>
                    <?php }else{?>
                        <iframe controls="2" height="450" width="80%"
                            src="<?php echo $video['video_src'];?>" frameborder="0" >
                        </iframe>
                    <?php }?>
                </div>
            <?php } }
        ?><br/>
      

      
        <h4>I like the post? Like this!</h4>   
    </div>
    <div class="col-lg-4 text-left mt-4">
      <a href="<?=base_url()?>home/index" class="btn btn-danger btn-sm btn-labeled text-right" type="submit"><?php echo translate('go_back')?></a>
    </div> 
  </div>


</div>
<?php
}
?>
