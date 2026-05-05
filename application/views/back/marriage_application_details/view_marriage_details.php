<div id="content-container">
    <div id="page-head">
        <div id="page-title">
            <h1 class="page-header text-overflow"><?php echo translate('application_details') ?></h1>
        </div>
        <ol class="breadcrumb">
            <li><a href="#"><?php echo translate('home') ?></a></li>
            <li class="active"><a href="#"><?php echo translate('application_details') ?></a></li>
        </ol>
    </div>
    <div id="page-content">
        <div class="panel">
            <?php if (!empty($success_alert)) : ?>
                <div class="alert alert-success" id="success_alert" style="display: block">
                    <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                    <?= $success_alert ?>
                </div>
            <?php endif ?>
            <?php if (!empty($danger_alert)) : ?>
                <div class="alert alert-danger" id="danger_alert" style="display: block">
                    <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                    <?= $danger_alert ?>
                </div>
            <?php endif ?>
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo translate('view_marriage_applicaion_details') ?></h3>
            </div>
            <?php
            foreach ($application_data as $row) {
            ?>

                <div class="panel-body">
                    <h3 class="panel-title"><?php echo translate('Bride_details') ?></h3>
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
                        <div id="bride_basic_info" class="tab-pane in active">
                            <table class="table table-striped table-bordered dataTable no-footer">
                                <tr>
                                    <td class="custom_td">

                                        <?php if (!empty($row->bride_photo)) { ?>
                                            <?php
                                            $path_info = pathinfo($row->bride_photo);
                                            $extension = $path_info['extension'];
                                            ?>
                                            <div class="pad-ver">
                                                <?php if ($extension == 'pdf') { ?>
                                                    <div class="iframe">
                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_photo; ?>" target="imgbox">
                                                            <iframe src="https://docs.google.com/gview?url=<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_photo; ?>&embedded=true" alt="image" width="200px" height="200px" scrolling="no" style="overflow: hidden"></iframe>
                                                        </a>
                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_photo; ?>"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="iframe">

                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_photo; ?>" download>
                                                            <img src="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_photo; ?>" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden">
                                                        </a>
                                                    </div>
                                                <?php } ?>

                                            <?php } ?>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="custom_td"><?php echo translate('first_name'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_first_name ?></h5>
                                    </td>
                                    <th class="custom_td"><?php echo translate('last_name'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_last_name ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="custom_td"><?php echo translate('dob'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_dob ?></h5>
                                    </td>
                                    <th class="custom_td"><?php echo translate('email'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_email; ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="custom_td"><?php echo translate('mobile'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_mobile; ?></h5>
                                    </td>
                                    <th class="custom_td"><?php echo translate('address'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_address; ?></h5>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div id="bride_family" class="tab-pane fade">
                            <!--  <h4 style="margin: 25px 0px; text-align: center;">Family Details</h4> -->
                            <table class="table table-striped table-bordered dataTable no-footer">
                                <tr>
                                    <th class="custom_td"><?php echo translate('mother_name'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_mother_name ?></h5>
                                    </td>
                                    <th class="custom_td"><?php echo translate('father_name'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_father_name ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="custom_td"><?php echo translate('Address'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_parent_address ?></h5>
                                    </td>

                                    <th class="custom_td"><?php echo translate('mobile_number'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_parent_mobile_number ?></h5>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="custom_td"><?php echo translate('State'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_parent_state ?></h5>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div id="bride_document" class="tab-pane fade">
                            <!--  <h4 style="margin: 25px 0px; text-align: center;">Document Details</h4> -->
                            <table class="table table-striped table-bordered dataTable no-footer">
                                <tr>
                                    <th class="custom_td"><?php echo translate('Aadhaar_card'); ?></th>
                                    <td class="custom_td">
                                        <?php if (!empty($row->bride_aadhaar_card)) { ?>
                                            <?php
                                            $path_info = pathinfo($row->bride_aadhaar_card);
                                            $extension = $path_info['extension'];
                                            ?>
                                            <div class="pad-ver">
                                                <?php if ($extension == 'pdf') { ?>
                                                    <div class="iframe">
                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_aadhaar_card; ?>" target="imgbox">
                                                            <iframe src="https://docs.google.com/gview?url=<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_aadhaar_card; ?>&embedded=true" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden"></iframe>
                                                        </a>
                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_aadhaar_card; ?>"></a>
                                                    </div>

                                                <?php } else { ?>
                                                    <div class="iframe">

                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_aadhaar_card; ?>" download>
                                                            <img src="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_aadhaar_card; ?>" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden">
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                                <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_aadhaar_card; ?>" download><br>
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            <?php } ?>
                                            </div>
                                    </td>


                                    <th class="custom_td"><?php echo translate('caste_certificate'); ?></th>
                                    <td class="custom_td">

                                        <?php if (!empty($row->bride_caste_certificate)) { ?>
                                            <?php
                                            $path_info = pathinfo($row->bride_caste_certificate);
                                            $extension = $path_info['extension'];
                                            ?>
                                            <div class="pad-ver">
                                                <?php if ($extension == 'pdf') { ?>
                                                    <div class="iframe">
                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_caste_certificate; ?>" target="imgbox">
                                                            <iframe src="https://docs.google.com/gview?url=<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_caste_certificate; ?>&embedded=true" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden"></iframe>
                                                        </a>
                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_caste_certificate; ?>"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="iframe">

                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_caste_certificate; ?>" download>
                                                            <img src="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_caste_certificate; ?>" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden">
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                                <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_caste_certificate; ?>" download><br>
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            <?php } ?>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="custom_td"><?php echo translate('ration_card'); ?></th>
                                    <td class="custom_td">

                                        <?php if (!empty($row->bride_ration_card)) { ?>
                                            <?php
                                            $path_info = pathinfo($row->bride_ration_card);
                                            $extension = $path_info['extension'];
                                            ?>
                                            <div class="pad-ver">
                                                <?php if ($extension == 'pdf') { ?>
                                                    <div class="iframe">
                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_ration_card; ?>" target="imgbox">
                                                            <iframe src="https://docs.google.com/gview?url=<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_ration_card; ?>&embedded=true" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden"></iframe>
                                                        </a>
                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_ration_card; ?>"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="iframe">

                                                        <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_ration_card; ?>" download>
                                                            <img src="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_ration_card; ?>" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden">
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                                <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->bride_ration_card; ?>" download><br>
                                                    <i class="fa fa-download"></i>
                                                </a>

                                            <?php } ?>
                                            </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="bride_kundali" class="tab-pane fade">
                            <table class="table table-striped table-bordered dataTable no-footer">
                                <tr>
                                    <th class="custom_td"><?php echo translate('raashi'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_raashi; ?></h5>
                                    </td>

                                    <th class="custom_td"><?php echo translate('nakshathra'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->bride_nakshathra; ?></h5>
                                    </td>
                                </tr>
                                <th class="custom_td"><?php echo translate('place_of_birth'); ?></th>
                                <td class="custom_td">
                                    <h5><?php echo $row->bride_place_of_birth; ?></h5>
                                </td>

                                <th class="custom_td"><?php echo translate('time_of_birth'); ?></th>
                                <td class="custom_td">
                                    <h5><?php echo $row->bride_time_of_birth; ?></h5>
                                </td>
                                </tr>
                            </table>
                        </div>


                        <h3 class="panel-title"><?php echo translate('groom_details') ?></h3>
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
                            <div id="groom_basic_info" class="tab-pane in active">
                                <!-- <h4 style="margin: 25px 0px; text-align: center;">Bride Basic Information</h4> -->

                                <table class="table table-striped table-bordered dataTable no-footer">
                                    <tr>
                                        <td class="custom_td">

                                            <?php if (!empty($row->groom_photo)) { ?>
                                                <?php
                                                $path_info = pathinfo($row->groom_photo);
                                                $extension = $path_info['extension'];
                                                ?>
                                                <div class="pad-ver">
                                                    <?php if ($extension == 'pdf') { ?>
                                                        <div class="iframe">
                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_photo; ?>" target="imgbox">
                                                                <iframe src="https://docs.google.com/gview?url=<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_photo; ?>&embedded=true" alt="image" width="200px" height="200px" scrolling="no" style="overflow: hidden"></iframe>
                                                            </a>
                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_photo; ?>"></a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="iframe">

                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_photo; ?>" download>
                                                                <img src="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_photo; ?>" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden">
                                                            </a>
                                                        </div>
                                                    <?php } ?>

                                                <?php } ?>
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <th class="custom_td"><?php echo translate('first_name'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_first_name ?></h5>
                                        </td>

                                        <th class="custom_td"><?php echo translate('last_name'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_last_name ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="custom_td"><?php echo translate('dob'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_dob ?></h5>
                                        </td>
                                        <th class="custom_td"><?php echo translate('email'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_email; ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="custom_td"><?php echo translate('mobile'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_mobile; ?></h5>
                                        </td>

                                        <th class="custom_td"><?php echo translate('address'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_address; ?></h5>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="groom_family" class="tab-pane fade">
                                <!--  <h4 style="margin: 25px 0px; text-align: center;">Family Details</h4> -->
                                <table class="table table-striped table-bordered dataTable no-footer">

                                    <tr>
                                        <th class="custom_td"><?php echo translate('mother_name'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_mother_name ?></h5>
                                        </td>

                                        <th class="custom_td"><?php echo translate('father_name'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_father_name ?></h5>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th class="custom_td"><?php echo translate('Address'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_parent_address ?></h5>
                                        </td>

                                        <th class="custom_td"><?php echo translate('mobile_number'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_parent_mobile_number ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="custom_td"><?php echo translate('State'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_parent_state ?></h5>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="groom_document" class="tab-pane fade">
                                <!--  <h4 style="margin: 25px 0px; text-align: center;">Document Details</h4> -->
                                <table class="table table-striped table-bordered dataTable no-footer">
                                    <tr>
                                        <th class="custom_td"><?php echo translate('Aadhaar_card'); ?></th>
                                        <td class="custom_td">
                                            <?php if (!empty($row->groom_aadhaar_card)) { ?>
                                                <?php
                                                $path_info = pathinfo($row->groom_aadhaar_card);
                                                $extension = $path_info['extension'];
                                                ?>
                                                <div class="pad-ver">
                                                    <?php if ($extension == 'pdf') { ?>
                                                        <div class="iframe">
                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_aadhaar_card; ?>" target="imgbox">
                                                                <iframe src="https://docs.google.com/gview?url=<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_aadhaar_card; ?>&embedded=true" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden"></iframe>
                                                            </a>
                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_aadhaar_card; ?>"></a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="iframe">

                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_aadhaar_card; ?>" download>
                                                                <img src="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_aadhaar_card; ?>" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden">
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                    <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_aadhaar_card; ?>" download><br>
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                <?php } ?>
                                                </div>
                                        </td>


                                        <th class="custom_td"><?php echo translate('caste_certificate'); ?></th>
                                        <td class="custom_td">

                                            <?php if (!empty($row->groom_caste_certificate)) { ?>
                                                <?php
                                                $path_info = pathinfo($row->groom_caste_certificate);
                                                $extension = $path_info['extension'];
                                                ?>
                                                <div class="pad-ver">
                                                    <?php if ($extension == 'pdf') { ?>
                                                        <div class="iframe">
                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_caste_certificate; ?>" target="imgbox">
                                                                <iframe src="https://docs.google.com/gview?url=<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_caste_certificate; ?>&embedded=true" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden"></iframe>
                                                            </a>
                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_caste_certificate; ?>"></a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="iframe">

                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_caste_certificate; ?>" download>
                                                                <img src="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_caste_certificate; ?>" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden">
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                    <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_certificate; ?>" download><br>
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                <?php } ?>
                                                </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="custom_td"><?php echo translate('ration_card'); ?></th>
                                        <td class="custom_td">

                                            <?php if (!empty($row->groom_ration_card)) { ?>
                                                <?php
                                                $path_info = pathinfo($row->groom_ration_card);
                                                $extension = $path_info['extension'];
                                                ?>
                                                <div class="pad-ver">
                                                    <?php if ($extension == 'pdf') { ?>
                                                        <div class="iframe">
                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_ration_card; ?>" target="imgbox">
                                                                <iframe src="https://docs.google.com/gview?url=<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_ration_card; ?>&embedded=true" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden"></iframe>
                                                            </a>
                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_ration_card; ?>"></a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="iframe">

                                                            <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_ration_card; ?>" download>
                                                                <img src="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_ration_card; ?>" alt="image" width="100px" height="100px" scrolling="no" style="overflow: hidden">
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                    <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row->groom_ration_card; ?>" download><br>
                                                        <i class="fa fa-download"></i>
                                                    </a>

                                                <?php } ?>
                                                </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div id="groom_kundali" class="tab-pane fade">
                                <table class="table table-striped table-bordered dataTable no-footer">
                                    <tr>
                                        <th class="custom_td"><?php echo translate('raashi'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_raashi; ?></h5>
                                        </td>

                                        <th class="custom_td"><?php echo translate('nakshathra'); ?></th>
                                        <td class="custom_td">
                                            <h5><?php echo $row->groom_nakshathra; ?></h5>
                                        </td>
                                    </tr>
                                    <th class="custom_td"><?php echo translate('place_of_birth'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->groom_place_of_birth; ?></h5>
                                    </td>

                                    <th class="custom_td"><?php echo translate('time_of_birth'); ?></th>
                                    <td class="custom_td">
                                        <h5><?php echo $row->groom_time_of_birth; ?></h5>
                                    </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-sm-12 text-center">
                            <a href="<?= base_url() ?>admin/marriage_application_details" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward"><?php echo translate('go_back') ?></a>
                        <?php
                    }
                        ?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>