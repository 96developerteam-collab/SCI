<script type="text/javascript" src="https://affiliate.siddhrans.in/integration/general_integration"></script>

<style>
.slice-lg {
    padding-top: 0rem !important;
    padding-bottom: 0rem !important;

}
</style>
<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row cols-xs-space cols-sm-space cols-md-space">
                <?php
$footer_logo_info = $this
    ->db
    ->get_where('frontend_settings', array(
    'type' => 'footer_logo'
))
    ->row()->value;
$footer_logo = json_decode($footer_logo_info, true);
$footer_logo_position = $this
    ->db
    ->get_where('frontend_settings', array(
    'type' => 'footer_logo_position'
))
    ->row()->value;
$footer_text = $this
    ->db
    ->get_where('frontend_settings', array(
    'type' => 'footer_text'
))
    ->row()->value;
$guruji_quotes = $this
    ->db
    ->get_where('frontend_settings', array(
    'type' => 'guruji_quotes'
))
    ->row()->value;
if ($footer_logo_position == 'left')
{
?>
                <div class="col-md-3 col-lg-3">
                    <div class="col">
                        <a class="navbar-brand" href="#">
                            <?php
    if (file_exists('uploads/footer_logo/' . $footer_logo[0]['image']))
    {
?>
                            <img src="<?=base_url() ?>uploads/footer_logo/<?=$footer_logo[0]['image'] ?>"
                                alt="footer_logo" class="img-responsive" width="100%">
                            <?php
    }
    else
    {
?>
                            <img src="<?=base_url() ?>uploads/footer_logo/default_image.png" class="img-responsive"
                                width="100%">
                            <?php
    }
?>
                        </a>
                        <div class="text-center"><small><?=$footer_text
?></small></div>
                    </div>
                </div>
                <?php
}
?>
                <div class="col-md-3 col-lg-3 d-none d-lg-block d-md-block">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                            <?php echo translate('main_menu') ?></h4>
                        <ul class="footer-links">
                            <li>
                                <a href="<?=base_url() ?>home" title="Home">
                                    <?php echo translate('home') ?></a>
                            </li>
                            <li>
                                <a href="<?=base_url() ?>home/plans" title="Premium Plans">
                                    <?php echo translate('membership_fees') ?></a>
                            </li>
                            <li>
                                <a href="<?=base_url() ?>home/stories" title="Happy Stories">
                                    <?php echo translate('latest_events') ?></a>
                            </li>
                            <li>
                                <a href="<?=base_url() ?>home/contact_us" title="Contact Us">
                                    <?php echo translate('contact_us') ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 d-none d-lg-block d-md-block">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                            <?php echo translate('quick_search') ?></h4>
                        <ul class="footer-links">
                            <li>
                                <a href="<?=base_url() ?>home/listing" title="All Members">
                                    <?php echo translate('all_members') ?></a>
                            </li>
                            <li>
                                <a href="<?=base_url() ?>home/listing/premium_members" title="Premium Members">
                                    <?php echo translate('registered_members') ?></a>
                            </li>
                            <li>
                                <a href="<?=base_url() ?>home/listing/free_members" title="Free Members">
                                    <?php echo translate('visitors') ?></a>
                            </li>
                            <li>
                                <a href="<?=base_url() ?>home/listing/free_members" title="Free Members">
                                    <?php echo translate('guests') ?></a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="https://www.chalavadimatchmaker.com" target="_blank" title="chalavadi">-->
                            <!--        Chalavadi Matchmaker </a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="https://www.nammamatchmaker.com" target="_blank" title="namma">-->
                            <!--        Namma Matchmaker </a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--    <a href="http://madivalamatchmaker.com/" target="_blank" title="madivala">-->
                            <!--        Madivala Matchmaker </a>-->
                            <!--</li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3">
                    <div class="col">
                        <h4 class="heading heading-xs strong-600 text-uppercase mb-1">
                            <?php echo translate('useful_links') ?></h4>
                        <ul class="footer-links">
                            <li>
                                <a href="<?=base_url() ?>home/faq" title="FAQ">
                                    FAQ </a>
                            </li>
                            <li>
                                <a href="<?=base_url() ?>home/terms_and_conditions" title="Terms & Conditions">
                                    <?php echo translate('terms_&_conditions') ?></a>
                            </li>
                            <li>
                                <a href="<?=base_url() ?>home/privacy_policy" title="Prvacy Policy">
                                    <?php echo translate('privacy_policy') ?></a>
                            </li>
                        </ul>
                    </div>
        
                    <!--guruji photos(18-9-21) start-->

                    <?php
$guruji_data = $this
    ->db
    ->select('*')
    ->from('guruji_photos')
    ->where('delete_status', '0')
    ->get()
    ->result();
?>

                    <div class="row mt-3">
                        <?php
if (!empty($guruji_data))
{
    foreach ($guruji_data as $row)
    {
?>
                        <div class="col-3" style="padding: 0px !important;">
                            <img src="<?php echo base_url(); ?>uploads/guruji_photos/<?php echo $row->guruji_photo; ?>"
                                height="80" width="80" alt="image" style="padding: 6px 6px;">
                            <!--<div class="text-center"><?php echo substr($row->guruji_name, 0, 7); ?></div>-->
                        </div>
                        <?php
    }
} ?>
                    </div>
                    <div class="text-center" style="border: thin double; font-size: x-large;"><?=$guruji_quotes
?></div>
                    <!--guruji photos(18-9-21) End-->

                </div>
                <?php
if ($footer_logo_position == 'right')
{
?>
                <div class="col-md-3 col-lg-3">
                    <div class="col">
                        <a class="navbar-brand" href="#">
                            <?php
    if (file_exists('uploads/footer_logo/' . $footer_logo[0]['image']))
    {
?>
                            <img src="<?=base_url() ?>uploads/footer_logo/<?=$footer_logo[0]['image'] ?>"
                                class="img-responsive" width="100%">
                            <?php
    }
    else
    {
?>
                            <img src="<?=base_url() ?>uploads/footer_logo/default_image.png" class="img-responsive"
                                width="100%">
                            <?php
    }
?>
                        </a>
                        <div class="text-center"><small><?=$footer_text
?></small></div>
                    </div>
                </div>
                <?php
}
?>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-1">
        <div class="container">
            <div class="row row-cols-xs-spaced flex flex-items-xs-middle">
                <div class="row col-md-12">
                    <div class="col-md-6 copyright text-center text-sm-left mt-2">
                        <?=translate('copyright') ?> &copy; <?=date("Y") ?> <a href="<?=base_url() ?>" class="c-base-1"
                            target="_blank" title="Webpixels - Official Website">
                            <strong class="strong-400"><?=$this->system_name ?></strong>
                        </a> - <?php echo translate('all_rights_reserved') ?>
                    </div>



                    <div class="col-md-6 copyright text-center text-sm-right mt-2">
                        <?=translate('powered by') ?> <a href="https://siddhrans.com" class="c-base-1" target="_blank">
                            <strong class="strong-400">Siddhrans Technologies LLP</strong>
                        </a>
                    </div>

                    <!--<div class="col-md-9 copyright text-center text-sm-right mt-2">-->
                    <!--   <p class="text-danger">This website is strictly for matchmaker purpose only and not a dating website !</p>-->
                    <!--</div>-->

                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
</div>
<!-- END: st-pusher -->
</div>
<!-- END: st-pusher -->
</div>
<!-- END: st-container -->
</div>
<!-- END: body-wrap -->