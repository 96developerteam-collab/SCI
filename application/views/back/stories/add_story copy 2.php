<div id="content-container">
    <div id="page-head">
        <div id="page-title">
            <h1 class="page-header text-overflow"><?php echo translate('Add_project')?></h1>
        </div>
        <ol class="breadcrumb">
            <li><a href="<?=base_url()?>admin"><?php echo translate('home')?></a></liefef</li>
            <li class="active"><?php echo translate('add_project')?></li>
        </ol>
    </div>

    <div class="row">
        <?php if (false): ?>
            <div class="alert alert-danger text-center" role="alert" style="margin: 20px;">
                <?= $this->session->flashdata('failed'); ?>
            </div>

            <div class="text-center" style="margin: 20px;">
                <a href="<?=base_url()?>admin/stories" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward">
                    <?php echo translate('go_back')?>
                </a>
            </div>
        <?php else: ?>
            <div class="col-md-10 col-lg-offset-1">
                <div id="page-content">
                    <div class="panel">
                        <form class="form-horizontal" id="project_form" method="POST"
                        action="<?=base_url()?>admin/add_story_details" enctype="multipart/form-data">
                            <div class="panel-body" style="padding: 50px 20px;">
                                
                                <input type="hidden" name="legion_id" value="<?= $legion['id'] ?>">

                                <div class="form-group">
                            <label class="col-sm-2 control-label"><b>President Name</b><span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="president_name" value="<?= $legion['admin_name'] ?>" required readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><b>Area</b><span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="area" value="<?= $legion['area_name'] ?>" required readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"><b>Legion Name</b><span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="legion_name" value="<?= $legion['legion_name'] ?>" required readonly>
                            </div>
                        </div>


                               

                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"><b>Date</b><span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                    <input type="date" class="form-control" value="<?= date('Y-m-d') ?>" disabled>
                                    <input type="hidden" name="date" value="<?= date('Y-m-d') ?>">

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label"><b>Program Name</b><span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="program_name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"><b>Program Area</b><span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="program_area" required>
                                    </div>
                                </div>

                               
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"><b>Program Details</b><span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="program_details" rows="5" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"><b>Activity Photo</b><span class="text-danger">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="activity_photo" accept=".jpg,.jpeg,.png,.pdf" required>
                                        <small>Size: 10KB - 5MB</small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"><b>Press Coverage</b></label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="press_coverage" accept=".jpg,.jpeg,.png,.pdf">
                                        <small>Size: 10KB - 5MB (images), 50KB - 10MB (PDFs)</small>
                                    </div>
                                </div>

                            </div>

                            <div class="panel-footer text-center">
                                <button class="btn btn-primary btn-sm btn-labeled fa fa-floppy-o" type="submit">
                                    <?php echo translate('submit')?>
                                </button>
                                <a href="<?=base_url()?>admin/stories" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward">
                                    <?php echo translate('go_back')?>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

