<section class="slice-lg sct-color-1" style="padding-top: 2rem !important; padding-bottom: .5rem !important;">
    <div class="container">
        <div class="section-title section-title--style-1 text-center mb-4">           
            <h2 class="heading heading-3 strong-400 mb-0 text-center">Astro Tips</h2>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>
        <span class="clearfix"></span> 
        <div class="fluid-paragraph fluid-paragraph-md c-gray-light strong-300 text-center site-title"></div>
    </div>
</section>


<div class="slideshow-container">

    <?php foreach($get_astro_tips as $value) { ?>  
        <div class="mySlides" style="background-image: url('https://www.edigamatchmaker.com/uploads/ast4.jpg'); background-position: center center;background-size: cover;
           ">
            <h3><span><i class="c-base-1 fa fa-clock-o"></i> <?= date_format(date_create($value->post_time),"d, F Y")?></span></h3>

            <h2><?=$value->main_title?></h2>

            <?php if(!empty($value->sub_title)): ?>
                <h3><?=$value->sub_title?></h3>
            <?php else: ?>
            <?php endif; ?>

            <p style="text-align:justify;">
                <?php echo $value->astro_tips ?>
            </p> 

            <?php if(!empty($value->key_points)): ?>
                <p><?=$value->key_points?></p>
            <?php else: ?>
            <?php endif; ?>
        </div>
    <?php } ?>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
</div>



<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
      
        slides[slideIndex-1].style.display = "block";  
    }
</script>

<style>
  p{
    margin-bottom: 0px !important;
  }
   @media only screen and (min-width:769px) and (max-width:3000px){
    .mySlides p {
      padding-top: 8px;
      padding-bottom: 8px;
      line-height: 27px;
      text-align: justify;
      color: white;
      font-size: 16px;
      
    }
  }
  
  @media only screen and (min-width:426px) and (max-width:768px){
    .mySlides p {
      padding-top: 8px;
      padding-bottom: 8px;
      line-height: 25px;
      text-align: justify;
      color: white;
      font-size: 15px;
    }
  }
  @media only screen and (min-width:300px) and (max-width:425px){
    .mySlides p {
      padding-top: 5px;
      padding-bottom: 5px;
      line-height: 25px;
      text-align: justify;
      color: white;
      font-size: 14px;
    }
  }

  .mySlides h1, h2, h3, h4, h5, h6 {
    padding-top: 8px;
    padding-bottom: 8px;   
    text-align: justify;
    color: white;    
  }

  @media only screen and (min-width:769px) and (max-width:3000px){
    .mySlides {
      display: none;
      padding: 25px 60px 25px 60px;
      text-align: center;
      height: 100%;
      min-height: 900px;
    }
  }

  @media only screen and (min-width:426px) and (max-width:768px){
    .mySlides {
      display: none;
      padding: 25px 50px 25px 50px;
      text-align: center;
      height: 100%;
      min-height: 1050px !important;
    }
  }

  @media only screen and (min-width:300px) and (max-width:425px){
    .mySlides {
      display: none;
      padding: 25px 30px 25px 30px;
      text-align: center;
      height: 100%;
      min-height: 1365px !important;
    }
  }

  @media only screen and (min-width:768px) and (max-width:2560px){
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 40%;
      width: auto;
      margin-top: -30px;
      padding: 12px;
      color: #fff !important;
      font-weight: bold;
      font-size: 25px;
      /*border-radius: 0 3px 3px 0;*/
      user-select: none;
    }
  }

  @media only screen and (min-width:300px) and (max-width:425px){
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      margin-top: -30px;
      padding: 8px;
      color: #fff !important;
      font-weight: bold;
      font-size: 22px;
      /*border-radius: 0 3px 3px 0;*/
      user-select: none;
    }
  }

  .next {
    position: absolute;
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0);
    color: white;
  }
</style>


