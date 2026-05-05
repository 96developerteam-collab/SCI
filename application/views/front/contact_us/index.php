<script type="text/javascript" src="https://affiliate.siddhrans.in/integration/general_integration"></script>
<script type="text/javascript">
 AffTracker.setWebsiteUrl( "https://www.edigamatchmaker.com/home/contact_us" );
 AffTracker.generalClick( "contact" );
</script>

<style>
body {
        background: url('https://images.unsplash.com/photo-1492518757308-3eaa20dbb0e2');
        background-repeat: no-repeat;
        background-size: cover;
            font-family: Arial, Helvetica, sans-serif;
        }
    #modalOverlay {
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 99999;
            height: 100%;
            width: 100%;
    }

    @media only screen and (min-width:769px) and (max-width:2560px){
    .modalPopup {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #5E32E1;
            width: 50%;
            padding: 0 0 30px;
            -webkit-box-shadow: 0 2px 10px 3px rgba(0,0,0,.2);
            -moz-box-shadow: 0 2px 10px 3px rgba(0,0,0,.2);
            box-shadow: 0 2px 10px 3px rgba(0,0,0,.2);
        }
    }


   @media only screen and (min-width:426px) and (max-width:768px){
    .modalPopup {
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #5E32E1;
        width: 70%;
        padding: 0 0 30px;
        -webkit-box-shadow: 0 2px 10px 3px rgba(0,0,0,.2);
        -moz-box-shadow: 0 2px 10px 3px rgba(0,0,0,.2);
        box-shadow: 0 2px 10px 3px rgba(0,0,0,.2);
    }
   }

  @media only screen and (min-width:320px) and (max-width:425px){
    .modalPopup {
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #5E32E1;
        width: 85%;
        padding: 0 0 30px;
        -webkit-box-shadow: 0 2px 10px 3px rgba(0,0,0,.2);
        -moz-box-shadow: 0 2px 10px 3px rgba(0,0,0,.2);
        box-shadow: 0 2px 10px 3px rgba(0,0,0,.2);
    }
   }

  

.modalContent {padding: 0 2em;
    background: #5E32E1;

}
.headerBar {
        width: 100%;
        background: #5E32E1;
        margin: 0;
      text-align: center;
      margin: 1em .7em;
    }
.headerBar img {
        margin: 1em .7em;
    }
h1 {
  margin-bottom: .2em;
  font-size: 26px;
  text-transform: capitalize;
  color: #FFF;
}
p {margin: .75em 0 1.5em; color: #fff;}
.buttonStyle {

        border: transparent;
        border-radius: 0;
        background: #6d6d6d;
        color: #eee !important;
        cursor: pointer;
        font-weight: bold;
        font-size: 14px;
        text-transform: uppercase;
        padding: 6px 25px;
        text-decoration: none;
        background: -moz-linear-gradient(top, #6d6d6d 0%, #1e1e1e 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6d6d6d), color-stop(100%,#1e1e1e));
        background: -webkit-linear-gradient(top, #6d6d6d 0%,#1e1e1e 100%);
        background: -o-linear-gradient(top, #6d6d6d 0%,#1e1e1e 100%);
        background: -ms-linear-gradient(top, #6d6d6d 0%,#1e1e1e 100%);
        background: linear-gradient(to bottom, #6d6d6d 0%,#1e1e1e 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6d6d6d', endColorstr='#1e1e1e',GradientType=0 );
    /*  -webkit-box-shadow: 0 2px 4px 0 #999;
        box-shadow: 0 2px 4px 0 #999; */
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -ms-transition: all 1s ease;
        -o-transition: all 1s ease;
        transition: all 1s ease;
    }
    .buttonStyle:hover {
        background: #1e1e1e;
        color: #fff;
        background: -moz-linear-gradient(top, #1e1e1e 0%, #6d6d6d 100%, #6d6d6d 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1e1e1e), color-stop(100%,#6d6d6d), color-stop(100%,#6d6d6d));
        background: -webkit-linear-gradient(top, #1e1e1e 0%,#6d6d6d 100%,#6d6d6d 100%);
        background: -o-linear-gradient(top, #1e1e1e 0%,#6d6d6d 100%,#6d6d6d 100%);
        background: -ms-linear-gradient(top, #1e1e1e 0%,#6d6d6d 100%,#6d6d6d 100%);
        background: linear-gradient(to bottom, #1e1e1e 0%,#6d6d6d 100%,#6d6d6d 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e1e1e', endColorstr='#6d6d6d',GradientType=0 );
    }
.returnToProfile {text-align: center; margin:3em;}
.returnToProfile a, .returnToProfile a:visited {color: #ddd;}
.returnToProfile a:hover {color: #fff;}
</style>

<?php 
    $offers_data = $this->db->select('*')->from('offers')->get()->result(); 
?>

<section class="slice sct-color-1">
    <!-- <div id="modalOverlay">
        <div class="modalPopup">
            <div class="headerBar">
                
            </div>
            <div class="modalContent">
                    <h1>Modal window title here</h1>
                     <p>Modal appears on page load, presents information and is dismissed after the "Close" button is clicked. Styled modal messaging, images and other information here.</p>
                     <button class="buttonStyle" id="button">Close</button>
            </div>
        </div>
    </div> -->
    <?php if (!empty($success_alert)): ?>
            <div class="col-6 ml-auto mr-auto" id="success_alert">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?=$success_alert?>
                </div>
            </div>
        <?php endif ?>
    <div class="container">
        <!--<div class="section-title section-title--style-1 text-center mb-4">-->
        <!--    <h2 class="heading heading-3 strong-400 mb-0">Contact Us</h2>-->
        <!--    <span class="section-title-delimiter clearfix d-none"></span>-->
        <!--</div>-->
        
        <div class="section-title section-title--style-1 text-center mb-4">
        
<?php error_reporting(E_ALL); ini_set('display_errors',1);?>

 <h2 class="heading heading-3 strong-400 mb-0 vvvvvv"><?php //echo translate('member'); ?> <?php echo translate('contact_us') ?></h2>

            <!--<?php if (!empty($offers_data)) { ?>-->
            <!--    <?php if ($offers_data[0]->current_offer_status == 0) { ?>-->
            <!--        <marquee style="color:#f9430d" scrolldelay="200" id="marquee1">-->
            <!--            <span style="color:black; font-size: 18px;">Current Offers: </span><?php echo $offers_data[0]->current_offers; ?>-->

            <!--        </marquee>-->
            <!--    <?php } ?>-->
            <!--<?php } ?>-->
                        
                    <hr>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>

        <span class="clearfix"></span>
        <?php
            $contact_us_text = $this->db->get_where('frontend_settings', array('type' => 'contact_us_text'))->row()->value;
        ?>
        <div class="fluid-paragraph fluid-paragraph-xl c-gray-light strong-300" style="padding: 0px !important;">
            <div class="row">
                <div class="col-lg-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.0127552023823!2d75.77842947409404!3d11.26047165008085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65937a96930d7%3A0xa2faa020eff14a92!2sSENIOR%20CHAMBER%20INTERNATIONAL!5e0!3m2!1sen!2sin!4v1750251595002!5m2!1sen!2sin" width="100%" height="460" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="col-lg-6">
                    <!-- <?php //echo $contact_us_text?> -->

                    <form class="form-default" role="form" method="POST" action="<?=base_url()?>home/contact_us/send">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light"><?php echo translate('your_name')?></label>
                                <input type="text" name="name" class="form-control form-control-md" required="" value="<?php if(!empty($form_contents)){echo $form_contents['name'];}?>">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light"><?php echo translate('email_address')?></label>
                                <input type="email" name="email" class="form-control form-control-md" required="" value="<?php if(!empty($form_contents)){echo $form_contents['email'];}?>">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light"><?php echo translate('subject')?></label>
                                <input type="text" name="subject" class="form-control form-control-md" required="" value="<?php if(!empty($form_contents)){echo $form_contents['subject'];}?>">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light"><?php echo translate('message')?> <small class="text-danger sml_txt" style="text-transform: none;"><?='('.translate('max_300_characters').')'?></small></label>
                                <textarea name="message" class="form-control no-resize" rows="5" required="" maxlength="300"><?php if(!empty($form_contents)){echo $form_contents['message'];}?></textarea>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                        if($this->Crud_model->get_settings_value('third_party_settings','captcha_status','value') == 'ok') {
                    ?>
                        <div class="row">
                            <div class="col-md-12">
                                <?=$recaptcha_html?>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    <div class="mt-2 col-12">
                        <?php if (!empty($captcha_incorrect) && $captcha_incorrect == TRUE): ?>
                            <p class="text-danger"><?=translate('captcha_incorrect')?></p>
                        <?php endif; ?>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-styled btn-base-1 mt-4"><?php echo translate('send_message')?></button>
                    </div>
                </form>
                </div>
            </div>   
        </div>

        <!-- <div class="fluid-paragraph fluid-paragraph-sm c-gray-light strong-300 text-center">
            <?php //echo $contact_us_text?>
        </div> -->

        <!-- <span class="space-xs-xl"></span> -->       
    </div>

    <div class="container second-portion">
    <div class="row">
        <!-- Boxes de Acoes -->
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">                           
                <div class="icon">
                    <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="info">
                        <h3 class="title">MAIL & TIMINGS</h3>
                        <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp scins2122@gmail.com
                            <br>
                            <br>
                            <i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp 10:00 AM to 07:00 PM
                        </p>
                    
                    </div>
                </div>
                <div class="space"></div>
            </div> 
        </div>
            
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">                           
                <div class="icon">
                    <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                    <div class="info">
                        <h3 class="title">CONTACT</h3>
                        <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp +91 97452 21380 
                            <br>
                            <!--<br>-->
                            <!--<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  9902406387-->
                        </p>
                    </div>
                </div>
                <div class="space"></div>
            </div> 
        </div>
            
        <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="box">                           
                <div class="icon">
                    <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="info">
                        <h3 class="title">ADDRESS</h3>
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $contact_us_text?>
                        </p>
                    </div>
                </div>
                <div class="space"></div>
            </div> 
        </div> 
        </div>
        </div>         
</section>
<script>
    $(document).ready(function(){
        setTimeout(function() {
            $('.alert-success').fadeOut('fast');
        }, 5000); // <-- time in milliseconds
    });
</script>
<script>
window.onload = function() {
  document.getElementById('button').onclick = function() {
    document.getElementById('modalOverlay').style.display = 'none'
  };
};
</script>


<style>
    
    /* Conatct start */

        .header-title
        {
          text-align: center;
          color:#00bfff;
        }

        #tip 
        {
            display:none;  
        }

        .fadeIn
        {
          animation-duration: 3s;
        }

        .form-control
        {
            border-radius:0px;
            border:1px solid #EDEDED;
        }

        .form-control:focus
        {
            border:1px solid #00bfff;
        }

        .textarea-contact
        {
            resize:none; 
        }

        .btn-send
        {
            border-radius: 0px;
            border:1px solid #00bfff;
            background:#00bfff;
            color:#fff; 
        }

        .btn-send:hover
        {
            border:1px solid #00bfff;
            background:#fff;
            color:#00bfff;
            transition:background 0.5s;   
        }

        .second-portion
        {
            margin-top:50px; 
        }

                @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
        @import "http://fonts.googleapis.com/css?family=Roboto:400,500";

        .box > .icon { text-align: center; position: relative; }
        .box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #00bfff; vertical-align: middle; }
        .box > .icon:hover > .image { background: #333; }
        .box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
        .box > .icon:hover > .image > i { color: white !important; }
        .box > .icon > .info { margin-top: -18px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; min-height:163px;}
        .box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
        .box > .icon > .info > h3.title { font-family: "Robot",sans-serif !important; font-size: 16px; color: #222; font-weight: 700; }
        .box > .icon > .info > p { font-family: "Robot",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
        .box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
        .box > .icon > .info > .more a { font-family: "Robot",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
        .box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
        .box .space { height: 30px; }

        @media only screen and (max-width: 768px)
        {
            .contact-form
            {
                margin-top:25px; 
            }

            .btn-send
            {
                width: 100%;
                padding:10px; 
            }

            .second-portion
            {
                margin-top:25px; 
            }
        }
    /* Conatct end */
</style>