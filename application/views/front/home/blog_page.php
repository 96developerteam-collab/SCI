<script type="text/javascript" src="https://affiliate.siddhrans.in/integration/general_integration"></script>
<script type="text/javascript">
 AffTracker.setWebsiteUrl( "https://www.edigamatchmaker.com/home/blogs/blog_detail/15" );
 AffTracker.generalClick( "edigablogs" );
</script>
<section class="slice sct-color-1">
 <div class="container">
  <div class="section-title section-title--style-1 text-center" style="margin-bottom: -45px;">
      <h3 class="section-title-inner">
      <span><?php echo translate('news')?></span>
      </h3>
      <span class="section-title-delimiter clearfix d-none"></span>
  </div>
  <span class="space-xs-xl"></span>
  <div class="swiper-js-container">
   <div class="swiper-container" data-swiper-autoplay="true" data-swiper-items="4" data-swiper-space-between="20" data-swiper-md-items="3" data-swiper-md-space-between="20" data-swiper-sm-items="2" data-swiper-sm-space-between="20" data-swiper-xs-items="1" data-swiper-xs-space-between="0">
   <div class="swiper-wrapper pb-5">

   <?php foreach ($blogs_list as $blog): ?>
     <div class="swiper-slide z-depth-2-bottom" data-swiper-autoplay="2300">
      <div class="card cd">
       <div class="card-image">
        <?php
         $story_image = $blog->image;
         $images = json_decode($story_image, true);   
         
         if (file_exists('uploads/blog_image/'.$images[0]['thumb'])) {
         ?>                   
        <div class="home_shory" style="background-image: url('<?=base_url()?>uploads/blog_image/<?=$images[0]['thumb']?>')"></div>
         <?php
           }
         else {
         ?>                            
        <div class="home_shory" style="background-image: url('<?=base_url()?>uploads/blog_image/default_image.jpg')"></div>
         <?php
         }
         ?>
       </div>
       
        <div class="card-body cb">
           <div class="block-content">
             <!--<h3 class="heading heading-5 strong-500"><?php echo ucfirst(strtolower($blog->title)); ?></h3> -->
             <h3 class="heading heading-5 strong-500"><?php echo ucfirst(strtolower(substr($blog->title,0 ,12)).".."); ?></h3>
             <p style="font-size: 12px;"><i class="fa fa-calendar"></i> <?php if(!empty($blog->post_time)) {echo date('d, F Y h:i:s A', strtotime($blog->post_time)) ; }?>
             
              <ul class="pl-0 pr-0 mt-0">
               <li class="<?=$package_class?> package_items p_item"> <?=$blog->description?> </li>
              
              </ul> 
              <a href="<?=base_url()?>home/blogs/blog_detail/<?=$blog->blog_id?>" style="cursor: pointer !important;">Read more..</a>             
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
<style>
  .cd{
    height: 400px !important;
  }
  .cb{
    padding: 20px 10px 15px 10px !important;
  }
  .cb ul{
        height: 85px !important;
  }
  .p_item{
    font-size: 15px;
  display: -webkit-box;
  overflow: hidden;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  text-overflow:ellipsis;
  }
</style>