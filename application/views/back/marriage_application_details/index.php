<?php
$application_data = $this->db->select('*')->from('marriage_application_form')->where('delete_status', '0')->get()->result_array();
?>
<div id="content-container">
    <div id="page-head">

        <div id="page-title">
            <h1 class="page-header text-overflow"><?php echo translate('member_marriage_application Details') ?></h1>
        </div>
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>admin"><?php echo translate('home') ?></a></li>
            <li class="active"><a href="#"><?php echo translate('member_marriage_application Details') ?></a></li>
        </ol>

    </div>

    <div id="page-content">

        <div class="panel">
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" id="success_alert" style="display: block">
                    <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                    <?php echo $message = $this->session->flashdata('success'); ?>
                </div>
            <?php endif ?>
            <?php if ($this->session->flashdata('failed')) : ?>
                <div class="alert alert-danger" id="danger_alert" style="display: block">
                    <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                    <?php echo $message = $this->session->flashdata('failed'); ?>
                </div>
            <?php endif ?>
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo translate('marriage_application_list') ?></h3>
            </div>
            <div class="panel-body">
                <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Bride Image</th>
                            <th>Bride Name</th>
                            <th>Groom Image</th>
                            <th>Groom Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($application_data as $row) { ?>

                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>
                                    <?php
                                    $path_info = pathinfo($row['bride_photo']);
                                    $extension = $path_info['extension'];
                                    ?>
                                    <div class="pad-ver">
                                        <?php if ($extension == 'pdf') { ?>
                                            <div class="iframe">
                                                <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row['bride_photo']; ?>" target="imgbox">
                                                    <iframe src="https://docs.google.com/gview?url=<?php echo base_url() ?>uploads/marriage_application/<?php echo $row['bride_photo']; ?>&embedded=true" alt="image" width="60px" height="60px" scrolling="no" style="overflow: hidden"></iframe>
                                                </a>
                                                <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row['bride_photo']; ?>"></a>
                                            </div>
                                        <?php } else { ?>
                                            <div class="iframe">

                                                <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row['bride_photo']; ?>" download>
                                                    <img src="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row['bride_photo']; ?>" alt="image" width="50px" height="50px" scrolling="no" style="overflow: hidden">
                                                </a>
                                            </div>
                                        <?php } ?>


                                    </div>
                                </td>

                                <td><?php echo $row['bride_first_name'] . " " . $row['bride_last_name']; ?></td>
                                <td>
                                    <?php
                                    $path_info = pathinfo($row['groom_photo']);
                                    $extension = $path_info['extension'];
                                    ?>
                                    <div class="pad-ver">
                                        <?php if ($extension == 'pdf') { ?>
                                            <div class="iframe">
                                                <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row['groom_photo']; ?>" target="imgbox">
                                                    <iframe src="https://docs.google.com/gview?url=<?php echo base_url() ?>uploads/marriage_application/<?php echo $row['groom_photo']; ?>&embedded=true" alt="image" width="60px" height="60px" scrolling="no" style="overflow: hidden"></iframe>
                                                </a>
                                                <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row['groom_photo']; ?>"></a>
                                            </div>
                                        <?php } else { ?>
                                            <div class="iframe">

                                                <a href="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row['groom_photo']; ?>" download>
                                                    <img src="<?php echo base_url() ?>uploads/marriage_application/<?php echo $row['groom_photo']; ?>" alt="image" width="50px" height="50px" scrolling="no" style="overflow: hidden">
                                                </a>
                                            </div>
                                        <?php } ?>


                                    </div>
                                </td>
                                <td><?php echo $row['groom_first_name'] . " " . $row['groom_last_name']; ?></td>


                                <td>
                                    <span><a href="<?php echo base_url(); ?>admin/marriage_application_details/view_marriage_details/<?php echo $row['application_id'] ?>" class="btn btn-primary" title="view"><i class="fa fa-eye"></i> </a></span>
                                    <span><a href="<?php echo base_url(); ?>admin/marriage_application_details/delete_marriage_details/<?php echo $row['application_id'] ?>" onclick=" return confirm('Are you sure you want to delete this application?');" class="btn btn-danger" title="DELETE"><i class="fa fa-trash"></i> </a></span>
                                </td>
                            </tr>

                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>