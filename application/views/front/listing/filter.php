<script type="text/javascript" src="https://affiliate.siddhrans.in/integration/general_integration"></script>
<script type="text/javascript">
 AffTracker.setWebsiteUrl( "https://www.edigamatchmaker.com/home/listing" );
 AffTracker.generalClick( "allmembers" );
</script>
<script src="<?=base_url()?>template/front/js/jquery.inputmask.bundle.min.js"></script>
<div class="col-lg-4 size-sm">
    <div class="sidebar">
        <div class="">
            <div class="card">
                <div class="card-title b-xs-bottom">
                    <h3 class="heading heading-sm text-uppercase"><?php echo translate('advanced_search')?></h3>
                </div>
                <div class="card-body">
                    <form class="form-default" id="filter_form" data-toggle="validator" role="form">
                        <?php if (!empty($this->session->userdata['member_id'])) { ?>
                            <div class="row">
                                <!--<div class="col-sm-12">-->
                                <!--    <div class="form-group has-feedback">-->
                                <!--        <label for="" class="text-uppercase"><?php echo translate('looking_for')?></label>-->
                                <!--        <div class="radio radio-primary">-->
                                <!--            <?php $member_gender = $this->db->get_where('member',array('member_id'=>$this->session->userdata['member_id']))->row()->gender; ?>-->
                                <!--            <?php if($member_gender == '2') { ?>-->
                                <!--                <input type="radio" name="gender" id="groom" value="1" <?php if(!empty($home_gender==1)){ ?>checked<?php }?> onclick="filter_members('0','search')">-->
                                <!--                <label for="groom"><?=translate('groom')?></label>-->

                                <!--            <?php } elseif ($member_gender == '1') { ?>-->
                                <!--                <input type="radio" name="gender" id="bride" value="2" <?php if(!empty($home_gender==2)){ ?>checked<?php }?> onclick="filter_members('0','search')">-->
                                <!--                <label for="bride" class="pr-3"><?=translate('bride')?></label>-->
                                <!--            <?php } ?>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        <?php } else { ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!--<div class="form-group has-feedback">-->
                                    <!--    <label for="" class="text-uppercase"><?php echo translate('looking_for')?></label>-->
                                    <!--    <div class="radio radio-primary">-->
                                            
                                            <!--<input type="radio" name="gender" id="all" onClick="window.location = 'http://127.0.0.1:70/ediga/home/listing';get_status();">-->
                                            <!--<label for="bride" class="pr-3"><?=translate('all')?></label>-->

                                    <!--         <input type="radio" name="gender" id="bride" value="2" <?php if(!empty($home_gender==2)){ ?>checked<?php }?> onclick="filter_members('0','search')">-->
                                    <!--        <label for="bride" class="pr-3"><?=translate('bride')?></label>-->
                                    <!--        <input type="radio" name="gender" id="groom" value="1" <?php if(!empty($home_gender==1)){ ?>checked<?php }?> onclick="filter_members('0','search')">-->
                                    <!--        <label for="groom"><?=translate('groom')?></label>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        <?php } ?>

                        <div class="row">
                            <!--<div class="col-sm-6">-->
                            <!--    <div class="form-group has-feedback">-->
                            <!--        <label for="" class="text-uppercase"><?php echo translate('age_from')?></label>-->
                            <!--        <input type="number" class="form-control form-control-sm" name="aged_from" id="filter_aged_from" value="<?php if(isset($aged_from)){echo $aged_from;}?>"-->
                            <!--         onkeyup="filter_members('0','search');validate_number();age_checker(this.value)" min="18" max="60">-->
                            <!--         <small><span id="age_error" style="color:red;"></span></small>-->
                            <!--         <small><span id="age_checker_error" style="color:red;"></span></small>-->
                            <!--        <div class="help-block with-errors">-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="col-sm-6">-->
                            <!--    <div class="form-group has-feedback">-->
                            <!--        <label for="" class="text-uppercase"><?php echo translate('to')?></label>-->
                            <!--        <input type="number" class="form-control form-control-sm" name="aged_to" id="filter_aged_to" value="<?php if(isset($aged_to)){echo $aged_to;}?>"-->
                            <!--        onkeyup="filter_members('0','search');validate_number();age_to_checker(this.value)" min="18" max="60">-->
                            <!--        <small><span id="age_to_error" style="color: red;"></span></small>-->
                            <!--        <small><span id="age_checker_to_error" style="color: red;"></span></small>-->
                            <!--    </div>-->
                            <!--    <div class="help-block with-errors">-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase"><?php echo translate('member_id')?></label>
                                    <input type="text" class="form-control form-control-sm" name="member_id" id="filter_member_id" value="<?php if(isset($member_id)){echo $member_id;}?>" onkeyup="filter_members('0','search')">
                                    <div class="help-block with-errors">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="row">-->
                        <!--    <div class="col-sm-12">-->
                        <!--        <div class="form-group has-feedback">-->
                        <!--            <label for="" class="text-uppercase"><?php echo translate('marital_status')?></label>-->
                        <!--             <select id="marital_status" name="marital_status" class="form-control form-control-sm selectpicker" onclick="filter_members('0','search')">-->
                        <!--                 <option value="">Choose one</option>-->
                        <!--                 <option value ="1">Un Married</option>-->
                        <!--                 <option value ="2">Married</option>-->
                        <!--                 <option value ="3">Divorced</option>-->
                        <!--                 <option value ="5">Widowed</option>-->
                                         
                        <!--             </select>-->
                        <!--            <span class="help-block with-errors"></span>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="row">

                            <div class="col-sm-12">
                                <?php
                                if ($this->db->get_where('frontend_settings', array('type' => 'spiritual_and_social_background'))->row()->value == "yes") {
                                ?>
                               <?php
                                    /*
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('religion')?></label>
                                        <?= $this->Crud_model->select_html('religion', 'religion', 'name', 'edit', 'form-control form-control-sm selectpicker s_religion', $home_religion, '', '', ''); ?>
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>
                                  

                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase"><?php echo translate('caste_/_sect')?></label>

                                    <select class="form-control form-control-sm selectpicker s_caste" name="caste" >
                                        <option value="<?= $home_caste ?>"><?php echo translate('choose_a_religion_first')?></option>
                                    </select>

                                    <div class="help-block with-errors">
                                    </div>
                                </div>
                                <div class="form-group has-feedback" id="">
                                    <label for="" class="text-uppercase"><?php echo translate('sub_caste')?></label>

                                    <select class="form-control form-control-sm selectpicker s_sub_caste" name="sub_caste" onclick="filter_members('0','search')">
                                        <option value="<?= $home_sub_caste ?>"><?php echo translate('choose_a_caste_first')?></option>
                                    </select>
                                    <div class="help-block with-errors">
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($this->db->get_where('frontend_settings', array('type' => 'language'))->row()->value == "yes") {
                                ?>

                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase"><?php echo translate('language');?></label>
                                    <select id="language" name="language" class="form-control form-control-sm selectpicker">
                                        <option value="">Choose one</option>
                                        <option value="8">Kannada</option>
                                        <option value="10">Telugu</option>
                                        <option value="11">Tamil</option>
                                        <option value="12">Malayalam</option>
                                        <option value="13">Marathi</option>
                                    
                                    </select>    
                                </div>
                                  */
                                    ?>
                                    
                                <?php
                                }
                                ?>
                                <?php
                                if ($this->db->get_where('frontend_settings', array('type' => 'education_and_career'))->row()->value == "yes") {
                                ?>
                               <!--  <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase"><?php echo translate('profession')?></label>
                                    <input type="text" class="form-control form-control-sm" name="profession" id="filter_profession" value="<?php if(isset($profession)){echo $profession;}?>">
                                    <div class="help-block with-errors">
                                    </div>
                                </div> -->
                                <?php
                                }
                                ?>
                                <?php
                                if ($this->db->get_where('frontend_settings', array('type' => 'present_address'))->row()->value == "yes") {
                                ?>
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase"><?php echo translate('country')?></label>
                                    <?= $this->Crud_model->select_html('country', 'country', 'name', 'edit', 'form-control form-control-sm selectpicker s_country', '', '', '', ''); ?>
                                    <div class="help-block with-errors">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase"><?php echo translate('state')?></label>

                                    <select class="form-control form-control-sm selectpicker s_state" name="state" onclick="filter_members('0','search')">
                                        <option value=""><?php echo translate('choose_a_country_first')?></option>
                                    </select>
                                    <div class="help-block with-errors">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase"><?php echo translate('city')?></label>
                                    <select class="form-control form-control-sm selectpicker s_city" name="city" onclick="filter_members('0','search')">
                                        <option value=""><?php echo translate('choose_a_state_first')?></option>
                                    </select>
                                    <div class="help-block with-errors">
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        if ($this->db->get_where('frontend_settings', array('type' => 'physical_attributes'))->row()->value == "yes") {
                        ?>
                        <!--<div class="row">-->
                        <!--    <div class="col-sm-6">-->
                        <!--        <div class="form-group has-feedback">-->
                        <!--            <label for="" class="text-uppercase"><?php echo translate('min_height_(Feet)')?></label>-->
                        <!--            <input type="text" class="form-control form-control-sm height_mask" name="min_height" id="min_height" value="<?php if($min_height != ""){echo $min_height;}else{echo '0.00';}?>" onkeyup="filter_members('0','search')">-->
                        <!--            <div class="help-block with-errors">-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="col-sm-6">-->
                        <!--        <div class="form-group has-feedback">-->
                        <!--            <label for="" class="text-uppercase"><?php echo translate('max_height_(Feet)')?></label>-->
                        <!--            <input type="text" class="form-control form-control-sm height_mask" name="max_height" id="max_height" value="<?php if($max_height != ""){echo $max_height;}else{echo '8.00';}?>" onkeyup="filter_members('0','search')">-->
                        <!--        </div>-->
                        <!--        <div class="help-block with-errors">-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <?php
                        }
                        ?>
                         <!--<div class="row">-->
                         <!--    <div class="col-sm-12">-->
                               

                         <!--       <div class="form-group has-feedback">-->
                         <!--           <label for="" class="text-uppercase"><?php echo translate('occupation')?></label>-->

                         <!--           <?= $this->Crud_model->ocupation_select_html(); ?>-->

                                    <!-- <input type="text" class="form-control form-control-sm" name="profession" id="profession" value="<?php //if(isset($profession)){echo $profession;}?>" onkeyup="filter_members('0','search')"> -->
                         <!--           <div class="help-block with-errors">-->
                         <!--           </div>-->
                         <!--       </div>-->

                         <!--        </div>-->
                         <!-- </div>-->
                         
                         <div class="pt-0" style="display: none;">
                            <div class="card-title b-xs-bottom">
                                <h3 class="heading heading-sm text-uppercase"><?php echo translate('member_type')?></h3>
                            </div>
                            <div class="card-body">
                                <div class="filter-radio">
                                    <div class="radio radio-primary">
                                        <input type="radio" name="search_member_type" id="s_all_members" value="all" <?php if(!empty($search_member_type=="all")){?>checked<?php }?>>
                                        <label for="s_all_members"><?php echo translate('all_members')?></label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <input type="radio" name="search_member_type" id="s_premium_members" value="premium_members" <?php if($this->uri->segment(3)=="premium_members"){?>checked<?php }?>>
                                        <label for="s_premium_members"><?php echo translate('premium_members')?></label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <input type="radio" name="search_member_type" id="s_free_members" value="free_members" <?php if($this->uri->segment(3)=="free_members"){?>checked<?php }?>>
                                        <label for="s_free_members"><?php echo translate('free_members')?></label>
                                    </div>
                                </div>  
                            </div>
                        </div>
                       <!--  <button type="button" class="btn btn-block btn-base-1 mt-2 z-depth-2-bottom" onclick="filter_members('0','search')"><?php echo translate('search')?></button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 size-sm-btn mb-4">
    <button type="button" class="btn btn-block btn-base-1 mt-2 z-depth-2-bottom" onclick="adv_search()"><?php echo translate('advanced_search')?></button>
</div>
<!-- no result found of div -->
<div class='text-center pt-5 pb-5' id="no_result_found" style="display: none;"><i class='fa fa-exclamation-triangle fa-5x'></i>
    <h5><?=translate('no_result_found!')?></h5>
</div>
<div class='text-center pt-5 pb-5' id="no_results" style="display: none;"><i class='fa fa-exclamation-triangle fa-5x'></i>
    <h5><?=translate('no_result_found!')?></h5>
</div>
<!-- end div for no result found -->
<script>
  
$("#language").change(function(){
     filter_members('0','search');
});
</script>
<!--updated code on 05-01-2020 -->