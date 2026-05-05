
<!--<section class="slice-lg sct-color-1" style="padding-top: 2rem !important; padding-bottom: 1rem !important;">-->
<!--    <div class="container">-->
<!--        <div class="section-title section-title--style-1 text-center mb-4">           -->
<!--            <h2 class="heading heading-3 strong-400 mb-0">Media / Press</h2>-->
<!--            <span class="section-title-delimiter clearfix d-none"></span>-->
<!--        </div>-->
<!--        <span class="clearfix"></span> -->
<!--        <div class="fluid-paragraph fluid-paragraph-md c-gray-light strong-300 text-center site-title">-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<?php 
    $offers_data = $this->db->select('*')->from('offers')->get()->result(); 
?>
<section class="page-title page-title--style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <!--<?php if (!empty($offers_data)) { ?>-->
                <!--    <?php if ($offers_data[0]->future_offer_status == 0) { ?>-->
                <!--        <marquee style="color:#f9430d" scrolldelay="200" id="marquee1">-->
                <!--            <span style="color:black; font-size: 18px;">Futured Offers: </span>-->
                <!--            <?php echo $offers_data[0]->futured_offers; ?>-->
                <!--        </marquee>-->
                <!--    <?php } ?>-->
                <!--<?php } ?>-->
                
                <h2 class="heading heading-3 strong-400 mb-0"><?php //translate($member); ?> <?php echo translate('media / Press') ?></h2>

                <!--<?php if (!empty($offers_data)) { ?>-->
                <!--    <?php if ($offers_data[0]->current_offer_status == 0) { ?>-->
                <!--        <marquee style="color:#f9430d" scrolldelay="200" id="marquee1">-->
                <!--            <span style="color:black; font-size: 18px;">Current Offers: </span><?php echo $offers_data[0]->current_offers; ?>-->
                <!--        </marquee>-->
                <!--    <?php } ?>-->
                <!--<?php } ?>-->
            </div>
        </div>
    </div>
</section>
  
<div class="block-wrapper" id="result" style="margin-bottom: 4rem;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
               <?php 
               
               function is_dir_empty($dir) {
  if (!is_readable($dir)) return null; 
  return (count(scandir($dir)) == 2);
}
              //  $dir = "/uploads/media";

            //if (!is_dir_empty($dir)) { 
                ?>
                <!-- <ul class="event-list list-group-item d-flex" style="border-top: 1px solid #cccccc !important;">
                    <li>  
                        <img src="<?=base_url()?>uploads/media/ediga_varthe_logo.jpg">
                        <div class="info">
                            <h2 class="title">Ediga Vaarthe</h2>
                            <div class="pdf_align">
                                <i class="fa fa-file-pdf-o" style="font-size:25px;color:red"></i>
                                <a href="<?=base_url('uploads/media/ediga_varthe.pdf')?>" target="_blank">Ediga Vaarthe Information</a>
                            </div>          
                        </div>                                                                     
                    </li>                  
                </ul>

                <ul class="event-list list-group-item d-flex">
                    <li>  
                        <img src="<?=base_url()?>uploads/media/ediga_bandu_logo.jpg">
                        <div class="info">
                            <h2 class="title">Ediga Bandhu</h2>
                            <div class="pdf_align">
                                <i class="fa fa-file-pdf-o" style="font-size:25px;color:red"></i>
                                <a href="<?=base_url('uploads/media/ediga_bandu.pdf')?>" target="_blank">Ediga Bandhu Information</a>
                            </div>                   
                        </div>                                                                     
                    </li>                  
                </ul>

                <ul class="event-list list-group-item d-flex">
                    <li>  
                        <img src="<?=base_url()?>uploads/media/ediga_logo.jpeg">
                        <div class="info">
                            <h2 class="title">Hrudaya Vahini</h2>
                            <div class="pdf_align">
                                <i class="fa fa-file-pdf-o" style="font-size:25px;color:red"></i>
                                <a href="<?=base_url('uploads/media/edigamatchmaker.pdf')?>" target="_blank">Hrudaya Vahini Information</a>
                            </div>                   
                        </div>                                                                     
                    </li>                  
                </ul>

                <ul class="event-list list-group-item d-flex">
                    <li>  
                        <img src="<?=base_url()?>uploads/media/ainews.jpg">
                        <div class="info">
                            <h2 class="title">AINews</h2>
                            <div class="pdf_align">
                                <img src="<?=base_url()?>uploads/media/newspaper.png">
                                <a href="https://ainews.net.in/"  target="_blank">Edigamatchmaker Press</a>
                            </div>                   
                        </div>                                                                     
                    </li>                  
                </ul>
                
                
                 <ul class="event-list list-group-item d-flex">
                    <li>  
                        <img src="<?=base_url()?>uploads/media/namma_karavali_logo.jpeg">
                        <div class="info">
                            <h2 class="title">Namma Karavali</h2>
                            <div class="pdf_align">
                                <i class="fa fa-file-pdf-o" style="font-size:25px;color:red"></i>
                                <a href="<?=base_url('uploads/media/namma_karavali.pdf')?>" target="_blank">Namma Karavali Information</a>
                            </div>                   
                        </div>                                                                     
                    </li>                  
                </ul>-->
                
                <?php //} else{
                      
                   // } ?>
                   
                   <div class="text-center">
        <img style="width: 75%;background-position: center !important; background-repeat: no-repeat !important; background-size: cover !important; " src="<?php echo base_url('uploads/comingsoon/3.gif'); ?>">
    </div>
                
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>



<style>

    .site-title 
    { 
        margin-top: 0.5em !important;
        font-family: 'Amaranth' !important;
        color: #707476 !important;
        font-size: 17px !important;
    }
   
    .image-parent {
        max-width: 100px;
    }

    .list-group-item{
        border-bottom: 1px solid #cccccc !important;        
        padding: 25px 0px 0px 0px !important;
    }

    .pdf_align{
        padding: 10px 10px 0px 25px;
    }
    .pdf_align > a{
        padding-left: 8px;
    }



    
</style>
  
<style>
    @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
  
    h2{
        font-size: 17px;
        color: #000000;
        font-weight: bold;
        padding-bottom: 14px;
    }
    
     

    @media only screen and (min-width:768px) and (max-width:3000px){
        .event-list {
            list-style: none;
            font-family: 'Lato', sans-serif;
            margin: 0px;
            padding: 0px;
        } 
    }

    @media only screen and (min-width:300px) and (max-width:425px){
        .event-list {
            list-style: none;
            font-family: 'Lato', sans-serif;
            margin: 0px;
            padding: 0px;
            justify-content: center !important;
        } 

    }
  
    .event-list > li > img {
        width: 100%;
    }

    @media only screen and (min-width:768px) and (max-width:3000px){
        .event-list > li > .info {
            padding-top: 5px;
            text-align: center;
            padding-left: 17px;
        }
    }


    @media only screen and (min-width:300px) and (max-width:425px){
        .event-list > li > .info {
            padding-top: 5px;
            text-align: center;
            padding-left: 0px;
        }
    }

    @media only screen and (min-width:768px) and (max-width:3000px){
        .event-list > li > .info > .title {
            font-size: 17pt;
            font-weight: 700;
            margin: 0px;
            padding-left: 17px;
            font-family: serif !important;
        }

    }

    @media only screen and (min-width:300px) and (max-width:425px){
        .event-list > li > .info > .title {
            font-size: 17pt;
            font-weight: 700;
            margin: 0px;
            padding-left: 0px;
            text-align: center;
            font-family: serif !important;
        }

    }
    
    .event-list > li > .info > .desc {
        font-size: 13pt;
        font-weight: 300;
        margin: 0px;
    }
    .event-list > li > .info > ul {
        display: table;
        list-style: none;
        margin: 10px 0px 0px;
        padding: 0px;
        width: 100%;
        text-align: center;
    }
   
    .event-list > li > .info > ul > li {
        display: table-cell;
        cursor: pointer;
        color: rgb(30, 30, 30);
        font-size: 11pt;
        font-weight: 300;
        padding: 3px 0px;
    }    
  
    .event-list > li > .info > ul > li:hover {
        color: rgb(30, 30, 30);
        background-color: rgb(200, 200, 200);
    }   

    @media (min-width: 768px) {
        .event-list > li {
            position: relative;
            display: block;
            width: 100%;
            height: auto;
            padding: 0px;
        }
        
        .event-list > li > img  {
            display: inline-block;
            width: 150px;
            height: auto;            
            vertical-align: middle;
            float: left;
            margin-bottom: 20px;

        }
       
        .event-list > li > .info {           
            overflow: hidden;
        }
        
        .event-list > li > .info {
            position: relative;
            height: auto;
            text-align: left;
            padding-right: 40px;
            margin-top: -14px;
            padding-bottom: 25px;
        }   
        .event-list > li > .info > .title, 
        .event-list > li > .info > .desc {
            padding: 0px 10px;
        }
        .event-list > li > .info > ul {
            position: absolute;
            left: 0px;
            bottom: 0px;
        }
      
    }
</style>