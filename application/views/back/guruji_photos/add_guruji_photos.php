<div id="content-container">
    <div id="page-head">
        <div id="page-title">
            <h1 class="page-header text-overflow"><?php echo translate('add_guruji_photos')?></h1>
        </div>
        <ol class="breadcrumb">
            <li><a href="<?=base_url()?>admin"><?php echo translate('home')?></a></li>
            <li class="active"><a href="#"><?php echo translate('guruji_photos')?></a></li>
            <a href="<?php echo base_url();?>/admin/guruji_photos" style="float:right;color:white;margin-top: -25px;" class="btn btn-danger btn-sm z-depth-2-bottom" style="width: 100%"><?php echo translate('view_all')?>
                
            </a> 
        </ol>
    </div>

    <div class="row">
        <div class="col-md-10 col-lg-offset-1">
            <div id="page-content">
                <div class="panel">
                    <form class="form-horizontal" id="package_form" method="POST" action="<?=base_url()?>admin/add_guruji_photos_details" enctype="multipart/form-data">
                        <div class="panel-body" style="padding: 50px 20px 50px;">
                            <div class="row">
                                <div class="col-md-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('guruji_name')?></b><span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="guruji_name" id="guruji_name" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 col-lg-offset-1">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('guruji_photo')?></b><span class="text-danger">*</span>  </label>
                                        <div class="col-sm-8">
                                            <input type="file"  class="form-control" id ="guruji_photo" name="guruji_photo" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-center">
                            <button class="btn btn-primary btn-sm btn-labeled fa fa-floppy-o" type="submit"><?php echo translate('submit')?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>