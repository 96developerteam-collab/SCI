

<script type="text/javascript" src="https://affiliate.siddhrans.in/integration/general_integration"></script>
<script charset="UTF-8" src="//web.webpushs.com/js/push/0bc43aca18b5e4161aea37e78b5903c3_1.js" async></script>
<script type="text/javascript">
	AffTracker.setWebsiteUrl( "https://www.edigamatchmaker.com/" );
	AffTracker.generalClick( "home" );
</script>
<script type="text/javascript">
 AffTracker.setWebsiteUrl( "https://www.edigamatchmaker.com/" );
AffTracker.generalClick( "index" );
</script>
<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?39572';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"left"
  },
  "brandSetting":{
      "brandName":"Rashtriya Ediga Mahamandali",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"https://remmk.com/uploads/header_logo/header_logo_1681277085.jpg",
      "welcomeText":"Hi, there!\nWelcome to Rashtriya Ediga Mahamandali\nHow can I help you?",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"919902406387"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>

<style>
.marquee {
   
    margin: 0 auto;
    overflow: hidden;
    white-space: nowrap;
    box-sizing: border-box;
    animation: marquee 50s linear infinite;
}

.marquee:hover {
    animation-play-state: paused
}

/* Make it move */
@keyframes marquee {
    0%   { text-indent: 27.5em }
    100% { text-indent: -105em }
}
.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}

.nav_active:after{
		background: none !important;		
	}
</style>


<!-- MAIN WRAPPER -->
<div class="body-wrap">
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
					<!-- Navbar -->
					<div id="myHeader">
						<div class="top-navbar align-items-center">
						    <div class="container">
						        <div class="row align-items-center py-1" style="padding-bottom: 0px !important">
						            <div class="col-lg-4 col-md-4 col">
	                                    <nav class="top-navbar-menu" style="margin:0px !important;">
	                                        <ul class="top-menu" style="float: left !important;width: 40%;">
	                                            <li class="aux-languages dropdown">
		                                            <a class="pt-0 pb-0">
		                                            	<?php
						                                    if ($set_lang = $this->session->userdata('language')) {

						                                    } else {
						                                        $set_lang = $this->db->get_where('general_settings', array('type' => 'language'))->row()->value;
						                                    }
						                                    $lid = $this->db->get_where('site_language_list', array('db_field' => $set_lang))->row()->site_language_list_id;
						                                    $lnm = $this->db->get_where('site_language_list', array('db_field' => $set_lang))->row()->name;
						                                ?>
		                                            	<img src="<?=base_url()?>uploads/language_list_image/language_8.jpg" alt="language" style="width: 20px;margin-top: -2px">
		                                            	<span><?=$lnm?></span>
		                                            </a>
	                                                <ul id="auxLanguages" class="sub-menu">
	                                                	<?php
						                                    $langs = $this->db->get_where('site_language_list', array('status' => 'ok'))->result_array();
						                                    foreach ($langs as $row) {
						                                ?>
						                                    <li <?php if ($set_lang == $row['db_field']) { ?>class="active"<?php } ?> >
						                                        <a class="set_langs" data-href="<?php echo base_url(); ?>home/set_language/<?php echo $row['db_field']; ?>">
						                                            <img src="<?=base_url()?>uploads/language_list_image/language_<?=$row['site_language_list_id']?>.jpg" alt="language" width="20px">
			                                                    	<span class="language"><?=$row['name']?></span>
						                                            <?php if ($set_lang == $row['db_field']) { ?>
						                                                <i class="fa fa-check"></i>
						                                            <?php } ?>
						                                        </a>
						                                    </li>
						                                <?php
						                                    }
						                                ?>
	                                                </ul>
	                                            </li>
	                                        </ul>
	                                        <ul class="top-menu" style="float: left !important;width: 60%;">
	                                            <!--<li class="aux-languages dropdown">-->
		                                           <!-- <a class="pt-0 pb-0">-->
		                                            	<?php
								                            // if($currency_id = $this->session->userdata('currency')){} else {
								                            //     $currency_id = $this->db->get_where('business_settings', array('type' => 'currency'))->row()->value;
								                            // }
								                            // $symbol = $this->db->get_where('currency_settings',array('currency_settings_id'=>$currency_id))->row()->symbol;
								                            // $c_name = $this->db->get_where('currency_settings',array('currency_settings_id'=>$currency_id))->row()->name;
								                        ?>
								                        <!--<span><?=$c_name.' ('.$symbol.')'?></span>-->
		                                            <!--</a>-->
	                                             <!--   <ul id="auxLanguages" class="sub-menu">-->
	                                                	<?php
								                            // $currencies = $this->db->get_where('currency_settings',array('status'=>'ok'))->result_array();
								                            // foreach ($currencies as $row)
								                            // {
								                        ?>
								                            <!--<li <?php if($currency_id == $row['currency_settings_id']){ ?>class="active"<?php } ?> >-->
								                            <!--    <a class="set_langs" data-href="<?php echo base_url(); ?>home/set_currency/<?php echo $row['currency_settings_id']; ?>">-->
								                            <!--        <?php echo $row['name']; ?> (<?php echo $row['symbol']; ?>)-->
								                            <!--        <?php if($currency_id == $row['currency_settings_id']){ ?>-->
								                            <!--            <i class="fa fa-check"></i>-->
								                            <!--        <?php } ?>-->
								                            <!--    </a>-->
								                            <!--</li>-->
								                        <?php
								                            // }
								                        ?>
	                                                </ul>
	                                            </li>
	                                        </ul>
	                                    </nav>
									</div>
									
							 <div class="col-lg-4 col-md-4 col" style="background-color:ghostwhite">
						<!--<p class="marquee"style="color:#f9430d">Rashtriya Ediga Mahamandali</p>-->
						     </div>		
                                    <?php if(demo()){ ?>
                                        <div class="col-lg-4 col-md-4 text-center" style="padding: 0px">
    										<i class="text-danger blink_me fa fa-exclamation-triangle"></i> <span style="font-size: 11px; line-height: 1px !important;">For Demo purpose all image uploads are DISABLED</span>
    									</div>
                                        <div class="col-lg-4 col-md-4 col">
                                    <?php }else{ ?>
                                    <div class="col-lg-4 col-md-4 col">
                                    <?php } ?>
                                    	
						                <nav class="top-navbar-menu">
							                <ul class="float-right top_bar_right">

							                </ul>
						                </nav>
						            </div>
						        </div>
						    </div>
						</div>
						<nav class="navbar navbar-expand-lg navbar-light bg-default navbar--link-arrow navbar--uppercase">
						    <div class="container navbar-container">
						        <!-- Brand/Logo -->
						        <a class="navbar-brand" href="<?=base_url()?>home/">
						        	<?php
						        		$header_logo_info = $this->db->get_where('frontend_settings', array('type' => 'header_logo'))->row()->value;
	                                    $header_logo = json_decode($header_logo_info, true);
	                                    if (file_exists('uploads/header_logo/'.$header_logo[0]['image'])) {
	                                    ?>
	                                        <img src="<?=base_url()?>uploads/header_logo/<?=$header_logo[0]['image']?>" alt="logo" class="img-responsive" height="100%">
	                                    <?php
	                                    }
	                                    else {
	                                    ?>
	                                        <img src="<?=base_url()?>uploads/header_logo/default_image.png" class="img-responsive" height="100%">
	                                    <?php
	                                    }
	                                ?>
						        </a>
						        	<!--<div class="blink_me" style="margin-left: 14px;color: blueviolet;min-width: fit-content;"> <a href="<?=base_url()?>home/astro_tips" style="color: #f9430d;">-->
						         <!--           <?php echo translate('ASTRO TIPS')?></a> <img src="<?=base_url()?>uploads/new.gif" alt="astro" class="img-responsive" width="40px"height="40px" ></img></div>  -->
						        <div class="d-inline-block">
						            <!-- Navbar toggler  -->
						            <button class="navbar-toggler hamburger hamburger-js hamburger--spring" type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
						            <span class="hamburger-box">
						            <span class="hamburger-inner"></span>
						            </span>
						            </button>
						        </div>
						        <div class="collapse navbar-collapse align-items-center justify-content-end" id="navbar_main">
						            <!-- Navbar links -->
						            <ul class="navbar-nav" data-hover="dropdown">
						                <li class="custom-nav">
						                <a class="nav-link <?php if($page == 'home'){?>nav_active<?php }?>" href="<?=base_url()?>home" aria-haspopup="true" aria-expanded="false">
						                <?php echo translate('home')?></a>
						                </li>
						                <li class="custom-nav dropdown">
						                <a class="nav-link <?php if($page == 'listing' || $page == 'member_profile'){?>nav_active<?php }?>" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						                <?php echo translate('active_members')?></a>
						                <ul class="dropdown-menu" style="border: 1px solid #f1f1f1 !important;">
						                    <li class="dropdown dropdown-submenu">
						                    <li>
						                    <!-- <a class="dropdown-item <?php if(!empty($nav_dropdown)){if($nav_dropdown == 'all_members'){?>nav_active_dropdown<?php }}?>" href="<?=base_url()?>home/listing">
						                    <?php echo translate('all_members')?></a> -->
						                    </li>
						                    <li>
						                    <a class="dropdown-item <?php if(!empty($nav_dropdown)){if($nav_dropdown == 'national_members'){?>nav_active_dropdown<?php }}?>" href="<?=base_url()?>home/listing/national_members">
						                    <?php echo translate('national_members')?></a>
						                    </li>
						                     <li>
						                    <a class="dropdown-item <?php if(!empty($nav_dropdown)){if($nav_dropdown == 'premium_members'){?>nav_active_dropdown<?php }}?>" href="<?=base_url()?>home/listing/premium_members">
						                    <?php echo translate('legions_members')?></a>
						                    </li>
						                     <li>
						                    <a class="dropdown-item <?php if(!empty($nav_dropdown)){if($nav_dropdown == 'ngb_members'){?>nav_active_dropdown<?php }}?>" href="<?=base_url()?>home/listing/ngb_members">
						                    <?php echo translate('ngb_members')?></a>
						                    </li>
						                    <li>
						                    <a class="dropdown-item <?php if(!empty($nav_dropdown)){if($nav_dropdown == 'visitors'){?>nav_active_dropdown<?php }}?>" href="<?=base_url()?>home/listing/free_members">
						                    <?php echo translate('visitors')?></a>
						                    </li>
						                    <li>
						                    <a class="dropdown-item <?php if(!empty($nav_dropdown)){if($nav_dropdown == 'guests'){?>nav_active_dropdown<?php }}?>" href="<?=base_url()?>home/listing/guest_members">
						                    <?php echo translate('guests')?></a>
						                    </li>
						                </ul>
						                </li>
						                <li class="custom-nav">
						                <a class="nav-link <?php if($page == 'plans' || $page == 'subscribe'){?>nav_active<?php }?>" href="<?=base_url()?>home/plans" aria-haspopup="true" aria-expanded="false" style="color:#f80264;">
						                <?php echo translate('membership_fees')?></a>
						                </li>
						                <!--<li class="custom-nav">-->
						                <!--<a class="nav-link <?php if($page == 'stories' || $page == 'story_detail'){?>nav_active<?php }?>" href="<?=base_url()?>home/stories" aria-haspopup="true" aria-expanded="false">-->
						                <!--<?php echo translate('happy_stories')?></a>-->
						                <!--</li>-->
						                <!-- <li class="custom-nav">
						                <a class="nav-link <?php if($page == 'stories' || $page == 'story_detail'){?>nav_active<?php }?>" href="https://gpaevents.in/" target="_blank" aria-haspopup="true" aria-expanded="false">
						                <?php echo translate('Book Event')?></a>
						                </li> -->
										
						                         <li class="custom-nav">
						                <a class="nav-link <?php if($page == 'media'){?>nav_active<?php }?>" href="<?=base_url()?>home/media" aria-haspopup="true" aria-expanded="false">
						                <?php echo translate('media / Press')?></a>
						                </li>
						                <li class="custom-nav">
						                <a class="nav-link <?php if($page == 'contact_us'){?>nav_active<?php }?>" href="<?=base_url()?>home/contact_us" aria-haspopup="true" aria-expanded="false">
						                <?php echo translate('contact_us')?></a>
						                </li>
						            </ul>
						        </div>
						    </div>
						</nav>
					</div>
					<div class="sticky-content">
						<?php
							$sticky_header = $this->db->get_where('frontend_settings', array('type' => 'sticky_header'))->row()->value;
							if ($sticky_header == 'yes') { ?>
							<script type="text/javascript">
								window.onscroll = function() {
								    scrollFunction();
								};
								var header = document.getElementById("myHeader");
								var sticky = header.offsetTop;

								function scrollFunction() {
								    if (window.pageYOffset > sticky) {
								        header.classList.add("sticky-header");
								    } else {
								        header.classList.remove("sticky-header");
								    }
								}
							</script>
						<?php } ?>
						<script type="text/javascript">
						    $(document).ready(function () {
						        $('.set_langs').on('click', function () {
						            var lang_url = $(this).data('href');
						            $.ajax({url: lang_url, success: function (result) {
						                    location.reload();
						                }});
						        });
						    });
						</script>
<style>
    .blink_me {
        animation: blinker 1.5s linear infinite;
    }
    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }
</style>
