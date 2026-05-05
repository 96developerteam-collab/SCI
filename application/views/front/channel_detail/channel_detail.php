<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  /*background: #f1f1f1f1;*/
  background: linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%);
}

/* Slides */
.mySlides {
  display: none;
  padding: 25px 35px 0px 35px;
  text-align: center;
}

/* Next & previous buttons */
@media only screen and (min-width:768px) and (max-width:2560px){
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 35%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 25px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
}

@media only screen and (min-width:300px) and (max-width:425px){
  .prev, .next {
  cursor: pointer;
  position: absolute;
  top: 20%;
  width: auto;
  margin-top: -30px;
  padding: 13px;
  color: #888;
  font-weight: bold;
  font-size: 22px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}

@media only screen and (min-width:768px) and (max-width:2560px){
  .img_det{
    width: 500px;
    height: 350px;
  }
}

@media only screen and (min-width:300px) and (max-width:374px){
  .img_det{
    width: 218px;
    height: 190px;
  }
}

</style>
</head>
<body>


<div class="slideshow-container">
<div class="pull-right">
					<a href="https://remmk.com/" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward" type="submit" >Go Back</a>
				</div>
<?php foreach ($get_story as $value)
{

    $channel_detail_list = $this->db->select('*')->from('channel_partner_details')->where('channel_partner_id',$value->channel_partner_id)->get()->result();
        // echo "<pre>";
        // print_r($channel_detail_list);
        // exit();
?>

<?php foreach($channel_detail_list as $detail) { ?>
<div class="mySlides">
 
    <img class="img_det" src="<?php echo base_url()?>uploads/channel_partner_image/<?php echo $detail->image?>" alt="Loading" >


    <div class="row mbr-justify-content-center" style="margin-top: 20px !important;">
        <div class="col-lg-4 mbr-col-md-10">
            <div class="wrap">
                <div class="ico-wrap">
                    <span class="mbr-iconfont fa-tasks fa"></span>
                </div>
                <div class="text-wrap vcenter">
                    <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"><span><?= $detail->project_name?></span></h2>                        
                </div>
            </div>
        </div>
        <div class="col-lg-4 mbr-col-md-10" >
            <div class="wrap">
                <div class="ico-wrap">
                    <span class="mbr-iconfont fa-map-marker fa"></span>                    
                </div>
                <div class="text-wrap vcenter">
                     <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"><span><?= $detail->address?></span></h2>                       
                </div>
            </div>
        </div>
        <div class="col-lg-4 mbr-col-md-10" >
            <div class="wrap">
                <div class="ico-wrap">
                    <span class="mbr-iconfont fa-mobile fa"></span>
                </div>
                <div class="text-wrap vcenter">
                    <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"><span><?= $detail->mobile?></span></h2>                        
                </div>
            </div>
        </div>
    </div>

    <div class="row mbr-justify-content-center">
        <div class="col-lg-3 mbr-col-md-10"></div>
        
        <div class="col-lg-6 mbr-col-md-10">
            <div class="wrap">
                <div class="ico-wrap">
                    <span class="mbr-iconfont fa-quote-left fa"></span>
                </div>
                <div class="text-wrap vcenter">
                    <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"><span><?= $detail->testimonial?></span></h2>                        
                </div>
            </div>
        </div>
        <div class="col-lg-3 mbr-col-md-10"></div>
    </div>

  <!-- <div class="row" style="margin-top: 54px;
    margin-left: 15px;">
      <div class= "form-group">
         <div style="margin-left: -8px;">
          <b>Mobile</b>:<?= $detail->mobile?>
        </div>
         <div style="margin-left: -21px;" >
          <b>Address</b>:<?= $detail->address?>
         </div>
         <div style="margin-left: -5px;">
          <b>Project Name</b>:<?= $detail->project_name?>
         </div>
         <div style="margin-left: 9px;">
          <b>Testimonial</b>:<?= $detail->testimonial?>
         </div>
      </div>
  </div> -->
</div>
<?php } ?>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

<?php } ?>
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
  section {
    padding-top: 1rem;
    padding-bottom: 1rem;
    background-color: #f1f4fa;
}
.wrap {
    display: flex;
    background: white;
    padding: 1px 1px 1px 1px;
    border-radius: 0.5rem;
    box-shadow: 7px 7px 30px -5px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
}

.wrap:hover {
    background: linear-gradient(135deg,#6394ff 0%,#0a193b 100%);
    color: white;
}

.ico-wrap {
    /*margin: auto;*/
   

    margin: -35px -35px -35px -0px;
}

.mbr-iconfont {
    font-size: 34px !important;
    color: #313131;
    /*margin: 1rem;*/
    margin: 40px 0px 0px 25px;
    /*padding-right: 1rem;*/
}
.vcenter {
   /* margin: auto;*/
   padding: 0px 0px 0px 60px;
}

.mbr-section-title3 {
    text-align: left;
}
h2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}
.display-5 {
    /*font-family: 'Source Sans Pro',sans-serif;
    font-size: 1.4rem;*/
    font-family: 'FontAwesome';
    font-size: 20px;
}
.mbr-bold {
    font-weight: 600;
}

 p {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 25px;
}
.display-6 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1re}
</style>

</body>
</html> 
