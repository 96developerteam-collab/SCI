<?php 
    error_reporting(E_ALL); 
    ini_set('display_errors', 1);

    // Fetch offer data from 'offers' table
    $offers_data = $this->db->select('*')->from('offers')->get()->result(); 

    // Fetch background image setting for premium plans
    $background_image = $this->db->get_where('frontend_settings', array('type' => 'premium_plans_image'))->row()->value;
    $background_image_data = json_decode($background_image, true);
?>

<!-- Page Title Section -->
<section class="page-title page-title--style-1">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-12">
                <h2 class="heading heading-3 strong-400 mb-0"><?php echo translate('membership_fees'); ?></h2>
            </div>

            <!-- Futured Offers -->
            <?php if (!empty($offers_data) && $offers_data[0]->future_offer_status == 0): ?>
                <div class="col-12">
                    <marquee style="color:#f9430d" scrolldelay="200" id="marquee1">
                        <span style="color:black; font-size: 18px;">Futured Offers: </span>
                        <?= $offers_data[0]->futured_offers ?>
                    </marquee>
                </div>
            <?php endif; ?>

            <!-- Current Offers -->
            <?php if (!empty($offers_data) && $offers_data[0]->current_offer_status == 0): ?>
                <div class="col-12">
                    <marquee style="color:#f9430d" scrolldelay="200" id="marquee1">
                        <span style="color:black; font-size: 18px;">Current Offers: </span>
                        <?= $offers_data[0]->current_offers ?>
                    </marquee>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Premium Plans Section -->
<section class="slice sct-color-1 pricing-plans pricing-plans--style-1 has-bg-cover bg-size-cover" style="background-image: url('<?= base_url() ?>uploads/premium_plans_image/<?= $background_image_data[0]['image'] ?? 'default_image.png' ?>'); background-position: bottom bottom;">
    <div class="container">
        <div class="row">
            
            <!-- Alert if any -->
            <?php if (!empty($danger_alert)): ?>
                <div class="col-12" id="danger_alert">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?= $danger_alert ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Plans -->
            <?php foreach ($all_plans as $value): ?>
                <?php if ($value->status == 0): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <?php $package_class = ($value->plan_id == 1) ? "text-line-through" : "active"; ?>
                        <div class="feature feature--boxed-border feature--bg-2 active package_bg mt-4">
                            <div class="icon-block--style-1-v5 text-center">
                                <div class="block-icon c-gray-dark">
                                    <li style="list-style-type: none;">
                                        <?php
                                            $images = json_decode($value->image, true);
                                            $image_path = isset($images[0]['image']) && file_exists('uploads/plan_image/' . $images[0]['image']) 
                                                ? $images[0]['image'] 
                                                : 'default_image.png';
                                        ?>
                                        <img src="<?= base_url('uploads/plan_image/' . $image_path) ?>" alt="plan" class="img-sm" height="100">
                                    </li>
                                </div>
                                <div class="block-content">
                            
                                      <!-- ✅ CONDITIONAL HEADING -->
                       
                        <!-- ✅ END CONDITIONAL -->
                                    <h3 class="heading heading-5 strong-500"><?= $value->name ?></h3>
                                 <!-- Conditional Plan Headings -->
                        <?php if (in_array($value->plan_id, [11, 13, 16])): ?>
                            <div class="text-info mb-2 font-weight-bold">
                                <?php if ($value->plan_id == 11): ?>
                                    April -- October
                                <?php elseif ($value->plan_id == 13): ?>
                                    September -- March
                                <?php elseif ($value->plan_id == 16): ?>
                                    April -- March
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                                    <p style="font-size: 25px"><b><?=currency('','def').(isset($value->total_amount) ? number_format($value->total_amount, 2) : $value->amount)?></b></p>

                                                <div class="py-2 text-center mb-2">
                <?php
                    $CI =& get_instance();
                    $CI->load->library('session');
                    $user_data = $CI->session->userdata();

                    $user_id = $user_data['user_id'] ?? null;
                    $user_type = $user_data['user_type'] ?? null;

                    // Define plan IDs that ARE allowed even for user_type 0
                    $excluded_plan_ids = [17,18]; // example: these IDs are NOT restricted

                    $plan_id = $value->plan_id;
                    $purchase_link = ($plan_id != 1) 
                        ? base_url("home/plans/subscribe/" . $plan_id) 
                        : "#";

                    // Determine if we need to block the user
                    $block_user = ($user_type == 0 && !in_array($plan_id, $excluded_plan_ids));
                ?>

                <a 
                    href="<?= ($block_user) ? '#' : $purchase_link ?>" 
                    class="btn btn-styled btn-sm btn-base-1 btn-outline btn-circle"
                    onclick="<?= ($block_user) ? "alert('You can’t pay. Only President and Treasurer can pay.'); return false;" : '' ?>"
                >
                    <span class="<?= $package_class ?>"><?= translate('pay_now') ?></span>
                </a>
            </div>


                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>


        </div>
    </div>
</section>

<!-- Auto-hide alerts -->
<script>
    setTimeout(function() {
        $('#danger_alert').fadeOut('fast');
    }, 5000);
</script>

<script>
      console.log("User ID: <?= $user_id ?>");
      console.log("User Name: <?= $user_name ?>");
    console.log("Purchase Link: <?= $purchase_link ?>");
</script>
