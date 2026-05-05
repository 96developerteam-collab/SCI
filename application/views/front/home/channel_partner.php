<section class="slice sct-color-1">
 <div class="container">
  <div class="section-title section-title--style-1 text-center" style="margin-bottom: -45px;">
    <h3 class="section-title-inner">
    <span><?php echo translate('committee_members')?></span>
    </h3>
    <span class="section-title-delimiter clearfix d-none"></span>
  </div>
  <span class="space-xs-xl"></span>
  <div class="swiper-js-container">
   <div class="swiper-container" data-swiper-autoplay="true" data-swiper-items="4" data-swiper-space-between="20" data-swiper-md-items="3" data-swiper-md-space-between="20" data-swiper-sm-items="2" data-swiper-sm-space-between="20" data-swiper-xs-items="1" data-swiper-xs-space-between="0">
   <div class="swiper-wrapper pb-5">
   <?php foreach ($channel_partner_list as $channel_partner): ?>
     <div class="swiper-slide z-depth-2-bottom" data-swiper-autoplay="2300">
      <div class="card">
      <?php $channel_detail_list = $this->db->select('*')->from('channel_partner_details')->where('channel_partner_id',$channel_partner->channel_partner_id)->get()->result();
       ?>
        <div class="card-image">
          <?php
           $story_image = $channel_detail_list[0]->image;
           // $images = json_decode($story_image, true);
           if (file_exists('uploads/channel_partner_image/'.$story_image)){
           ?>                   
          <div class="home_shory" style="background-image: url('<?=base_url()?>uploads/channel_partner_image/<?=$story_image?>')"></div>
           <?php
             }
           else {
           ?>                            
          <div class="home_shory" style="background-image: url('<?=base_url()?>uploads/channel_partner_image/default_image.jpg')"></div>
           <?php
           }
           ?>
        </div>
       
        <div class="card-body">
         <div class="block-content">
           <h3 class="heading heading-5 strong-500"><?=$channel_partner->name?></h3> 
           <!--  <h3 class="price-tag" style="font-size: 26px;"><?=currency($value->amount)?></h3>  -->
            <ul class="pl-0 pr-0 mt-0">
             <!-- <li class="<?=$package_class?> package_items"><?=translate('project_name:')?> <?=$channel_partner->project_name?> </li> -->
             <!-- <li class="<?=$package_class?> package_items"><?=translate('mobile:')?> <?=$channel_partner->mobile?> </li> -->
             <!-- <li class="<?=$package_class?> package_items"><?=translate('address:')?> <?=$channel_partner->address?> </li> -->
             <!-- <li class="<?=$package_class?> package_items"><?=translate('testimonial:')?> <?=$channel_partner->testimonial?> </li> -->
            </ul> 
            <a href="<?=base_url()?>home/channel_partners/channel_detail/<?=$channel_partner->channel_partner_id?>" style="cursor: pointer !important;">Click Here To Read More...</a>             
          </div>             
        </div>
      </div>
  </div>
<?php endforeach ?>

</div>
<!-- Add Pagination -->
 <div class="swiper-pagination">
  </div>
 </div>
 </div>
</div>
</section>
<script>
  $(document).ready(function() {
      setTimeout(function() {
          set_story_box_height();
      }, 1000);
  });

  function set_story_box_height() {
    var max_title = 0;
    $('.swiper-slide .story_heading').each(function() {
        var current_height = parseInt($(this).css('height'));
        if (current_height >= max_title) {
            max_title = current_height;
        }
    });
    $('.swiper-slide .story_heading').css('height', max_title);
  }
</script>