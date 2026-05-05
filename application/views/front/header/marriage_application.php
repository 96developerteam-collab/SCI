<button data-target='#marriage_modal' data-toggle='modal' class="btn btn-success" id="application_btn" style="font-size: 11px;margin-left: 5px;"><?= $this->lang->line('marriage'); ?>
</button>

<div class="modal fade" id="marriage_modal" tabindex="-1" role="dialog" aria-labelledby="marriage_modal" aria-hidden="true">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content bc">
      <div class="modal-header text-center" style="display: block; border-bottom: 1px solid transparent">
        <span class="modal-title hd" id="">Marriage Application Form</span>
        <button type="button" class="close hd" id="modal_close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center bc" id="modal_body" style="padding: 1rem !important;">
        <form class="form-horizontal" onsubmit="return form_validation()" method="POST" action="<?= base_url() ?>home/marriage_application_details" enctype="multipart/form-data">
          <h4><?php echo translate('Bride_details') ?></h4>

          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#bride_basic_info">Bride Basic Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#bride_family">Family Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#bride_document">Document Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#bride_kundali">Kundali Details</a>
            </li>
          </ul>

          <div class="tab-content">
            <div id="bride_basic_info" class="tab-pane in active" style="margin-top: 28px;">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="bride_photo" class="text-uppercase c-gray-light"><?php echo translate('image') ?> / <?= $this->lang->line('profile_image'); ?><span class="text-danger">*</span></label>
                    <label id="error_bride_image" class="error mt-2 text-danger"></label>
                    <input type="file" class="form-control" name="bride_photo" id="bride_photo">
                    <p class="error" id="bride_photo_error"></p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="first_name" class="text-uppercase c-gray-light"><?php echo translate('first_name') ?> / <?= $this->lang->line('first_name'); ?><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="bride_first_name" name="bride_first_name" minlength="3">
                    <p class="error" id="bride_first_name_error"></p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="last_name" class="c-gray-light"><?php echo translate('last_name') ?> / <?= $this->lang->line('last_name'); ?><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="bride_last_name" id="bride_last_name">
                    <p class="error" id="bride_last_name_error"></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="date_of_birth" class="text-uppercase c-gray-light"><?php echo translate('date_of_birth') ?> / <?= $this->lang->line('dob'); ?><span class="text-danger">*
                      </span></label>
                    <input type="date" class="form-control" name="bride_dob" id="bride_dob"; ?>
                    <p class="error" id="bride_dob_error">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="email" class="c-gray-light"><?php echo translate('email') ?> / <?= $this->lang->line('email'); ?><span class="text-danger"></span></label>
                    <input type="email" class="form-control" id="bride_email" name="bride_email">
                    <p class="error" id="bride_email_error">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="mobile" class="text-uppercase c-gray-light"><?php echo translate('mobile') ?> / <?= $this->lang->line('mobile'); ?><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="bride_mobile" name="bride_mobile" pattern="[6-9]{1}[0-9]{9}">
                    <p class="error" id="bride_mobile_error">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="area" class="text-uppercase c-gray-light"><?php echo translate('Address') ?> / <?= $this->lang->line('address'); ?><span class="text-danger">*</span></label>
                    <textarea class="form-control" name="bride_address" id="bride_address"></textarea>
                    <p class="error" id="bride_address_error">
                  </div>
                </div>
              </div>
            </div>

            <div id="bride_family" class="tab-pane fade" style="margin-top: 28px;">
              <div class="row">
                <div class="col-md-4">
                  <label for="mother_name" class="text-uppercase c-gray-light"><?php echo translate('mother_name') ?> / <?= $this->lang->line('mother_name'); ?><span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="bride_mother_name" id="bride_mother_name" minlength="3">
                  <p class="error" id="bride_mother_name_error">
                </div>
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="father_name" class="text-uppercase c-gray-light"><?php echo translate('father_name') ?> / <?= $this->lang->line('father_name'); ?><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="bride_father_name" id="bride_father_name" minlength="3">
                    <p class="error" id="bride_father_name_error">
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="mobile_number" class="text-uppercase c-gray-light"><?php echo translate('mobile_number') ?> / <?= $this->lang->line('mobile_number'); ?><span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="bride_parent_mobile_number" id="bride_parent_mobile_number" pattern="[6-9]{1}[0-9]{9}">
                  <p class="error" id="bride_parent_mobile_number_error">
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <label for="state" class="text-uppercase c-gray-light"><?php echo translate('state') ?> / <?= $this->lang->line('state'); ?><span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="bride_parent_state" id="bride_parent_state" Placeholder="Karnataka" readonly>
                </div>
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="address" class="text-uppercase c-gray-light"><?php echo translate('address') ?> /<?= $this->lang->line('address'); ?></label>
                    <textarea class="form-control" id="bride_parent_address" name="bride_parent_address"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div id="bride_document" class="tab-pane fade" style="margin-top: 28px;">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="Aadhaar_card" class="text-uppercase c-gray-light"><?php echo translate('Aadhaar_card') ?> / <?= $this->lang->line('aadhaar_card'); ?><span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="bride_aadhaar_card" id="bride_aadhaar_card">
                    <p class="error" id="bride_aadhaar_card_error">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="caste_certificate" class="text-uppercase c-gray-light"><?php echo translate('caste_certificate') ?> /<?= $this->lang->line('caste_certificate'); ?></label>
                    <input type="file" class="form-control" id="bride_caste_certificate" name="bride_caste_certificate">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="ration_card" class="text-uppercase c-gray-light"><?php echo translate('ration_card') ?> / <?= $this->lang->line('ration_card'); ?><span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="bride_ration_card" name="bride_ration_card">
                    <p class="error" id="bride_ration_card_error">
                  </div>
                </div>

              </div>
            </div>

            <div id="bride_kundali" class="tab-pane fade" style="margin-top: 28px;">
              <div class="row">
                <div class="col-md-4">
                  <label for="place_of_birth" class="text-uppercase c-gray-light"><?php echo translate('place_of_birth') ?> / <?= $this->lang->line('place_of_birth'); ?><span class="text-danger">*
                    </span></label>
                  <input type="text" class="form-control" name="bride_place_of_birth" id="bride_place_of_birth" minlength="3">
                  <p class="error" id="bride_place_of_birth_error">
                </div>
                <div class="col-md-4">
                  <label for="time_of_birth" class="text-uppercase c-gray-light"><?php echo translate('time_of_birth') ?> / <?= $this->lang->line('time_of_birth'); ?><span class="text-danger">*
                    </span></label>
                  <input type="time" class="form-control" name="bride_time_of_birth" id="bride_time_of_birth">
                  <p class="error" id="bride_time_of_birth_error">
                </div>
                <div class="col-md-4">
                  <label for="rashi" class="text-uppercase c-gray-light"><?php echo translate('raashi') ?> / <?= $this->lang->line('raashi'); ?><span class="text-danger">
                    </span></label>
                  <input type="text" class="form-control" name="bride_raashi" id="bride_raashi" minlength="3">
                  <p class="error" id="bride_raashi_error">
                </div>

                <div class="col-md-4">
                  <label for="nakshathra" class="text-uppercase c-gray-light"><?php echo translate('nakshathra') ?> / <?= $this->lang->line('nakshathra'); ?><span class="text-danger">
                    </span></label>
                  <input type="text" class="form-control" name="bride_nakshathra" id="bride_nakshathra" minlength="3">
                  <p class="error" id="bride_nakshathra_error">
                </div>
              </div>
            </div>
          </div>
          <hr>

          <h4><?php echo translate('Groom_details') ?></h4>
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#groom_basic_info">Groom Basic Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#groom_family">Family Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#groom_document">Document Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#groom_kundali">Kundali Details</a>
            </li>
          </ul>

          <div class="tab-content">
            <div id="groom_basic_info" class="tab-pane in active" style="margin-top: 28px;">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="groom_photo" class="text-uppercase c-gray-light"><?php echo translate('image') ?> / <?= $this->lang->line('profile_image'); ?><span class="text-danger">*</span></label>
                    <label id="error_bride_image" class="error mt-2 text-danger"></label>
                    <input type="file" class="form-control" name="groom_photo" id="groom_photo">
                    <p class="error" id="groom_photo_error"></p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="first_name" class="text-uppercase c-gray-light"><?php echo translate('first_name') ?> / <?= $this->lang->line('first_name'); ?><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="groom_first_name" name="groom_first_name" minlength="3">
                    <p class="error" id="groom_first_name_error"></p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="last_name" class="c-gray-light"><?php echo translate('last_name') ?> / <?= $this->lang->line('last_name'); ?><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="groom_last_name" id="groom_last_name">
                    <p class="error" id="groom_last_name_error"></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="date_of_birth" class="text-uppercase c-gray-light"><?php echo translate('date_of_birth') ?> / <?= $this->lang->line('dob'); ?><span class="text-danger">*
                      </span></label>
                    <input type="date" class="form-control" name="groom_dob" id="groom_dob">
                    <p class="error" id="groom_dob_error">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="email" class="c-gray-light"><?php echo translate('email') ?> / <?= $this->lang->line('email'); ?><span class="text-danger"></span></label>
                    <input type="email" class="form-control" id="groom_email" name="groom_email">
                    <p class="error" id="groom_email_error">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="mobile" class="text-uppercase c-gray-light"><?php echo translate('mobile') ?> / <?= $this->lang->line('mobile'); ?><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="groom_mobile" name="groom_mobile" pattern="[6-9]{1}[0-9]{9}">

                    <p class="error" id="groom_mobile_error">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="area" class="text-uppercase c-gray-light"><?php echo translate('Address') ?> / <?= $this->lang->line('address'); ?><span class="text-danger">*</span></label>
                    <textarea class="form-control" name="groom_address" id="groom_address"></textarea>
                    <p class="error" id="groom_address_error">
                  </div>
                </div>
              </div>
            </div>
            <div id="groom_family" class="tab-pane fade" style="margin-top: 28px;">
              <div class="row">
                <div class="col-md-4">
                  <label for="mother_name" class="text-uppercase c-gray-light"><?php echo translate('mother_name') ?> / <?= $this->lang->line('mother_name'); ?><span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="groom_mother_name" id="groom_mother_name" minlength="3">
                  <p class="error" id="groom_mother_name_error">
                </div>
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="father_name" class="text-uppercase c-gray-light"><?php echo translate('father_name') ?> / <?= $this->lang->line('father_name'); ?><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="groom_father_name" id="groom_father_name" minlength="3">
                    <p class="error" id="groom_father_name_error">
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="mobile_number" class="text-uppercase c-gray-light"><?php echo translate('mobile_number') ?> / <?= $this->lang->line('mobile_number'); ?><span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="groom_parent_mobile_number" id="groom_parent_mobile_number" pattern="[6-9]{1}[0-9]{9}">
                  <p class="error" id="groom_parent_mobile_number_error">
                </div>

              </div>
              <div class="row">
                <div class="col-md-4">
                  <label for="state" class="text-uppercase c-gray-light"><?php echo translate('state') ?> / <?= $this->lang->line('state'); ?><span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="groom_parent_state" id="groom_parent_state" placeholder="Karnataka" readonly>
                </div>

                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="address" class="text-uppercase c-gray-light"><?php echo translate('address') ?> /<?= $this->lang->line('address'); ?></label>
                    <textarea class="form-control" id="groom_parent_address" name="groom_parent_address"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div id="groom_document" class="tab-pane fade" style="margin-top: 28px;">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="Aadhaar_card" class="text-uppercase c-gray-light"><?php echo translate('Aadhaar_card') ?> / <?= $this->lang->line('aadhaar_card'); ?><span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="groom_aadhaar_card" id="groom_aadhaar_card">
                    <p class="error" id="groom_aadhaar_card_error">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="caste_certificate" class="text-uppercase c-gray-light"><?php echo translate('caste_certificate') ?> /<?= $this->lang->line('caste_certificate'); ?></label>
                    <input type="file" class="form-control" id="groom_caste_certificate" name="groom_caste_certificate">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group has-feedback">
                    <label for="ration_card" class="text-uppercase c-gray-light"><?php echo translate('ration_card') ?> / <?= $this->lang->line('ration_card'); ?><span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="groom_ration_card" name="groom_ration_card">
                    <p class="error" id="groom_ration_card_error">
                  </div>
                </div>

              </div>
            </div>




            <div id="groom_kundali" class="tab-pane fade" style="margin-top: 28px;">

              <div class="row">
                <div class="col-md-4">
                  <label for="place_of_birth" class="text-uppercase c-gray-light"><?php echo translate('place_of_birth') ?> / <?= $this->lang->line('place_of_birth'); ?><span class="text-danger">*
                    </span></label>
                  <input type="text" class="form-control" name="groom_place_of_birth" id="groom_place_of_birth" minlength="3">
                  <p class="error" id="groom_place_of_birth_error">
                </div>
                <div class="col-md-4">
                  <label for="time_of_birth" class="text-uppercase c-gray-light"><?php echo translate('time_of_birth') ?> / <?= $this->lang->line('time_of_birth'); ?><span class="text-danger">*
                    </span></label>
                  <input type="time" class="form-control" name="groom_time_of_birth" id="groom_time_of_birth">
                  <p class="error" id="groom_time_of_birth_error">
                </div>
                <div class="col-md-4">
                  <label for="rashi" class="text-uppercase c-gray-light"><?php echo translate('raashi') ?> / <?= $this->lang->line('raashi'); ?><span class="text-danger">
                    </span></label>
                  <input type="text" class="form-control" name="groom_raashi" id="groom_raashi" minlength="3">
                  <p class="error" id="groom_raashi_error">
                </div>

                <div class="col-md-4">
                  <label for="nakshathra" class="text-uppercase c-gray-light"><?php echo translate('nakshathra') ?> / <?= $this->lang->line('nakshathra'); ?><span class="text-danger">
                    </span></label>
                  <input type="text" class="form-control" name="groom_nakshathra" id="groom_nakshathra" minlength="3">
                  <p class="error" id="groom_nakshathra_error">
                </div>
              </div>
            </div>
          </div>
          <div class="text-center" style="margin-top: 15px;">
            <button class="btn btn-success add-tooltip" type="submit"><?= translate('submit') ?></button>
          </div>


        </form>
      </div>
    </div>
  </div>
</div>


<style>
  @media only screen and (min-width:1441px) and (max-width:2560px) {
    .ms {
      margin-top: 35vh !important;
      margin-left: auto !important;
    }
  }

  @media only screen and (max-width:1440px) {
    .ms {
      margin-top: 44vh !important;
      margin-left: 516px !important;
    }
  }

  @media only screen and (min-width:769px) and (max-width:1024px) {
    .ms {
      margin-top: 46vh !important;
      margin-left: 366px !important;
    }
  }

  @media only screen and (max-width:768px) {
    .ms {
      margin-top: 28vh !important;
      margin-left: auto !important;
    }
  }

  @media only screen and (min-width:320px) and (max-width:425px) {
    .ms {
      margin-top: 18vh !important;
      margin-left: auto !important;
    }
  }

  .modal-backdrop {
    position: inherit;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000;
  }

  .bc {
    background-color: #fff !important;
  }

  .hd {
    margin-bottom: .2em !important;
    font-size: 26px !important;
    text-transform: capitalize !important;
    color: #000 !important;
  }

  .pa {
    /* margin: .75em 0 1.5em;*/
    font-size: 15px !important;
    color: #000;
  }

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
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #6d6d6d), color-stop(100%, #1e1e1e));
    background: -webkit-linear-gradient(top, #5e32e1 0%, #1e1e1e 100%);
    background: -o-linear-gradient(top, #5e32e1 0%, #1e1e1e 100%);
    background: -ms-linear-gradient(top, #5e32e1 0%, #1e1e1e 100%);
    background: linear-gradient(to bottom, #5e32e1 0%, #1e1e1e 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#6d6d6d', endColorstr='#1e1e1e', GradientType=0);
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
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1e1e1e), color-stop(100%, #6d6d6d), color-stop(100%, #6d6d6d));
    background: -webkit-linear-gradient(top, #1e1e1e 0%, #5e32e1 100%, #6d6d6d 100%);
    background: -o-linear-gradient(top, #1e1e1e 0%, #5e32e1 100%, #6d6d6d 100%);
    background: -ms-linear-gradient(top, #1e1e1e 0%, #5e32e1 100%, #6d6d6d 100%);
    background: linear-gradient(to bottom, #1e1e1e 0%, #5e32e1 100%, #6d6d6d 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e1e1e', endColorstr='#6d6d6d', GradientType=0);
  }
</style>

<script>
  function form_validation() {

    if ($('#bride_photo').val() == '') {
      $('#bride_photo_error').html('Plesae choose image');
      return false;
    } else {
      $('#bride_photo_error').html('');
    }
    if ($('#bride_first_name').val() == '') {
      $('#bride_first_name_error').html('Please Enter Bride Name');
      return false;
    } else {
      $('#bride_first_name_error').html('');
    }

    if (!/^[a-zA-Z\s]*$/.test($('#bride_first_name').val())) {
      $('#bride_first_name_error').html('Only characters are allowed');
      return false;
    } else {
      $('#bride_first_name_error').html('');
    }
    /*
               if(!/^[1-zA-Z\s]*$\d{6}$/.test($('#bride_first_name').val())){
                  $('#bride_first_name_error').html('Enter the valid Name');
                  return false;
              }else{
                  $('#bride_first_name_error').html('');
              }*/



    if ($('#bride_last_name').val() == '') {
      $('#bride_last_name_error').html('Plesae enter Last Name');
      return false;
    } else {
      $('#bride_last_name_error').html('');
    }

    if (!/^[a-zA-Z\s]*$/.test($('#bride_last_name').val())) {
      $('#bride_last_name_error').html('Only characters are allowed');
      return false;
    } else {
      $('#bride_last_name_error').html('');
    }


    if ($('#bride_dob').val() == '') {
      $('#bride_dob_error').html('Plesae enter Date Of Birth');
      return false;
    } else {
      $('#bride_dob_error').html('');
    }

    if ($('#bride_mobile').val() == '') {
      $('#bride_mobile_error').html('Plesae Enter Mobile Number');
      return false;
    } else {
      $('#bride_mobile_error').html('');
    }

    if (!/^(\+\d{1,3}[- ]?)?\d{10}$/.test($('#bride_mobile').val())) {
      $('#bride_mobile_error').html('Enter the Valid Mobile Number');
      return false;
    } else {
      $('#bride_mobile_error').html('');
    }

    if ($('#bride_address').val() == '') {
      $('#bride_address_error').html('Plesae Enter Address');
      return false;
    } else {
      $('#bride_address_error').html('');
    }

    if (!/^[a-zA-Z\s]*$/.test($('#bride_mother_name').val())) {
      $('#bride_mother_name_error').html('Only characters are allowed');
      return false;
    } else {
      $('#bride_mother_name_error').html('');
    }

    if ($('#bride_mother_name').val() == '') {
      $('#bride_mother_name_error').html('Plesae Enter Mother Name');
      return false;
    } else {
      $('#bride_mother_name_error').html('');
    }

    if (!/^[a-zA-Z\s]*$/.test($('#bride_father_name').val())) {
      $('#bride_father_name_error').html('Only characters are allowed');
      return false;
    } else {
      $('#bride_father_name_error').html('');
    }

    if ($('#bride_father_name').val() == '') {
      $('#bride_father_name_error').html('Plesae Enter father Name');
      return false;
    } else {
      $('#bride_father_name_error').html('');
    }

    if ($('#bride_parent_mobile_number').val() == '') {
      $('#bride_parent_mobile_number_error').html('Plesae Enter Mobile Number');
      return false;
    } else {
      $('#bride_parent_mobile_number_error').html('');
    }

    if (!/^(\+\d{1,3}[- ]?)?\d{10}$/.test($('#bride_parent_mobile_number').val())) {
      $('#bride_parent_mobile_number_error').html('Enter the Valid Mobile Number');
      return false;
    } else {
      $('#bride_parent_mobile_number_error').html('');
    }



    if ($('#bride_aadhaar_card').val() == '') {
      $('#bride_aadhaar_card_error').html('Plesae Choose Aadhaar Card');
      return false;
    } else {
      $('#bride_aadhaar_card_error').html('');
    }

    if ($('#bride_ration_card').val() == '') {
      $('#bride_ration_card_error').html('Plesae Choose Ration Card');
      return false;
    } else {
      $('#bride_ration_card_error').html('');
    }

    if ($('#bride_place_of_birth').val() == '') {
      $('#bride_place_of_birth_error').html('Please Enter Place Of Birth');
      return false;
    } else {
      $('#bride_place_of_birth_error').html('');
    }

    if (!/^[a-zA-Z\s]*$/.test($('#bride_place_of_birth').val())) {
      $('#bride_place_of_birth_error').html('Only characters are allowed');
      return false;
    } else {
      $('#bride_place_of_birth_error').html('');
    }

    if ($('#bride_time_of_birth').val() == '') {
      $('#bride_time_of_birth_error').html('Plesae Enter Time Of Birth');
      return false;
    } else {
      $('#bride_time_of_birth_error').html('');
    }

    if (!/^[a-zA-Z\s]*$/.test($('#bride_raashi').val())) {
      $('#bride_raashi_error').html('Only characters are allowed');
      return false;
    } else {
      $('#bride_raashi_error').html('');
    }

    if (!/^[a-zA-Z\s]*$/.test($('#bride_nakshathra').val())) {
      $('#bride_nakshathra_error').html('Only characters are allowed');
      return false;
    } else {
      $('#bride_nakshathra_error').html('');
    }
    if ($('#groom_photo').val() == '') {
      $('#groom_photo_error').html('Please Choose Image');
      return false;
    } else {
      $('#groom_photo_error').html('');
    }


    if ($('#groom_first_name').val() == '') {
      $('#groom_first_name_error').html('Plesae Enter First Name');
      return false;
    } else {
      $('#groom_first_name_error').html('');
    }

    if (!/^[a-zA-Z\s]*$/.test($('#groom_first_name').val())) {
      $('#groom_first_name_error').html('Only characters are allowed');
      return false;
    } else {
      $('#groom_first_name_error').html('');
    }
    if ($('#groom_last_name').val() == '') {
      $('#groom_last_name_error').html('Plesae Enter Last Name');
      return false;
    } else {
      $('#groom_last_name_error').html('');
    }
    if (!/^[a-zA-Z\s]*$/.test($('#groom_last_name').val())) {
      $('#groom_last_name_error').html('Only characters are allowed');
      return false;
    } else {
      $('#groom_last_name_error').html('');
    }
    if ($('#groom_dob').val() == '') {
      $('#groom_dob_error').html('Plesae Enter Date Of Birth');
      return false;
    } else {
      $('#groom_dob_error').html('');
    }




    if ($('#groom_mobile').val() == '') {
      $('#groom_mobile_error').html('Plesae Enter Mobile Number');
      return false;
    } else {
      $('#groom_mobile_error').html('');
    }

    if (!/^(\+\d{1,3}[- ]?)?\d{10}$/.test($('#groom_mobile').val())) {
      $('#groom_mobile_error').html('Enter the Valid Mobile Number');
      return false;
    } else {
      $('#groom_mobile_error').html('');
    }


    if ($('#groom_address').val() == '') {
      $('#groom_address_error').html('Plesae Enter Address');
      return false;
    } else {
      $('#groom_address_error').html('');
    }



    if (!/^[a-zA-Z\s]*$/.test($('#groom_mother_name').val())) {
      $('#groom_mother_name_error').html('Only characters are allowed');
      return false;
    } else {
      $('#groom_mother_name_error').html('');
    }

    if ($('#groom_mother_name').val() == '') {
      $('#groom_mother_name_error').html('Plesae Enter Mother Name');
      return false;
    } else {
      $('#groom_mother_name_error').html('');
    }


    if (!/^[a-zA-Z\s]*$/.test($('#groom_father_name').val())) {
      $('#groom_father_name_error').html('Only characters are allowed');
      return false;
    } else {
      $('#groom_father_name_error').html('');
    }

    if ($('#groom_father_name').val() == '') {
      $('#groom_father_name_error').html('Plesae Enter Father Name');
      return false;
    } else {
      $('#groom_father_name_error').html('');
    }
    if (!/^(\+\d{1,3}[- ]?)?\d{10}$/.test($('#groom_parent_mobile_number').val())) {
      $('#groom_parent_mobile_number_error').html('Enter the Valid Mobile Number');
      return false;
    } else {
      $('#groom_parent_mobile_number_error').html('');
    }


    if ($('#groom_aadhaar_card').val() == '') {
      $('#groom_aadhaar_card_error').html('Plesae choose Aadhaar Card');
      return false;
    } else {
      $('#groom_aadhaar_card_error').html('');
    }
    if ($('#groom_ration_card').val() == '') {
      $('#groom_ration_card_error').html('Plesae choose Ration Card');
      return false;
    } else {
      $('#groom_ration_card_error').html('');
    }


    if ($('#groom_place_of_birth').val() == '') {
      $('#groom_place_of_birth_error').html('Plesae Enter Place Of Birth');
      return false;
    } else {
      $('#groom_place_of_birth_error').html('');
    }

    if (!/^[a-zA-Z\s]*$/.test($('#groom_place_of_birth').val())) {
      $('#groom_place_of_birth_error').html('Only characters are allowed');
      return false;
    } else {
      $('#groom_place_of_birth_error').html('');
    }

    if ($('#groom_time_of_birth').val() == '') {
      $('#groom_time_of_birth_error').html('Plesae Enter Time Of Birth');
      return false;
    } else {
      $('#groom_time_of_birth_error').html('');
    }

    if (!/^[a-zA-Z\s]*$/.test($('#groom_raashi').val())) {
      $('#groom_raashi_error').html('Only characters are allowed');
      return false;
    } else {
      $('#groom_raashi_error').html('');
    }

    if (!/^[a-zA-Z\s]*$/.test($('#groom_nakshathra').val())) {
      $('#groom_nakshathra_error').html('Only characters are allowed');
      return false;
    } else {
      $('#groom_nakshathra_error').html('');
    }

  }
</script>
<style>
  .error {
    color: red;
  }
</style>