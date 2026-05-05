<div id="content-container">

    <div id="page-head">
        <!--Page Title-->
        <div id="page-title">
            <h1 class="page-header text-overflow"><?php echo translate('blog')?></h1>
        </div>
        <!--End page title-->

        <!--Breadcrumb-->
        <ol class="breadcrumb">
            <li><a href="<?=base_url()?>admin"><?php echo translate('home')?></a></li>
            <li class="active"><a href="#"><?php echo translate('blog')?></a></li>
        </ol>
        <!--End breadcrumb-->
    </div>

    <!--Page content-->
    <div id="page-content">

        <div class="panel">

            <?php if (!empty($success_alert)): ?>
            <div class="alert alert-success" id="success_alert" style="display: block">
                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                <?=$success_alert?>
            </div>
            <?php endif ?>

            <?php if (!empty($danger_alert)): ?>
            <div class="alert alert-danger" id="danger_alert" style="display: block">
                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                <?=$danger_alert?>
            </div>
            <?php endif ?>

            <div class="row">
                <div class="col-md-6">
                    <h3 class="panel-title"><?php echo translate('blog_list')?></h3>
                </div>
                <div class="col-md-6" align="right" style="margin: 9px 0px 0px -20px;">
                    <a href="<?=base_url()?>admin/blog/add_blog" id="demo-dt-view-btn"
                        class="btn btn-primary add-tooltip"><i class="fa fa-plus"></i>
                        <?php echo translate('add_blog')?></a>
                </div>
            </div>

            <div class="panel-body">
                <?php foreach ($blog_list as $value): ?>

                <div class="col-md-6">
                    <div class="panel panel-bordered-primary">
                        <div class="panel-body">
                            <div class="text-right">
                                <button data-target='#delete_modal' data-toggle='modal'
                                    class="btn btn-danger btn-xs add-tooltip" style="border-radius: 50%;"
                                    onclick="delete_blog(<?=$value->blog_id?>)"><i class="fa fa-close"></i></button>
                            </div>

                            <div class="text-center blog">
                                <?php
			            		$image = $value->image;
								$images = json_decode($image, true);

								if (file_exists('uploads/blog_image/'.$images[0]['thumb'])) { ?>
                                <img src="<?=base_url()?>uploads/blog_image/<?=$images[0]['thumb']?>" height="100">
                                <?php } else { ?>
                                <img src="<?=base_url()?>uploads/blog_image/default_image.png" height="100">
                                <?php } ?>

                                <h3 class="panel-title"><?=$value->title?></h3>
                                <p><?php echo translate('description:')?> <?=$value->description?></p>
                            </div>

                            <div class="col-sm-12" style="margin-top: 20px;">
                                <a href="<?=base_url()?>admin/blog/edit_blog/<?=$value->blog_id?>" id="demo-dt-view-btn"
                                    class="btn btn-primary add-tooltip" style="width: 100%"><i class="fa fa-edit"></i>
                                    <?php echo translate('edit')?></a>
                            </div>

                        </div>
                    </div>
                </div>

                <?php endforeach ?>

            </div>
        </div>
    </div>
</div>

<!--Start Default Bootstrap Modal For DELETE-->
<div class="modal fade" id="delete_modal" role="dialog" tabindex="-1" aria-labelledby="delete_modal" aria-hidden="true">
    <div class="modal-dialog" style="width: 400px;">
        <div class="modal-content">
            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title"><?php echo translate('confirm_delete')?></h4>
            </div>
            <!--Modal body-->
            <div class="modal-body">
                <p><?php echo translate('are_you_sure_you_want_to_delete_this_channel_partner?')?></p>
                <div class="text-right">
                    <button data-dismiss="modal" class="btn btn-default btn-sm" type="button"
                        id="modal_close"><?php echo translate('close')?></button>
                    <button class="btn btn-danger btn-sm" id="delete_blog"
                        value=""><?php echo translate('delete')?></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Default Bootstrap Modal For DELETE-->

<script>
setTimeout(function() {
    $('#success_alert').fadeOut('fast');
    $('#danger_alert').fadeOut('fast');
}, 5000); // <-- time in milliseconds

function delete_blog(id) {
    $("#delete_blog").val(id);
}

$("#delete_blog").click(function() {
    $.ajax({
        url: "<?=base_url()?>admin/blog/delete/" + $("#delete_blog").val(),
        success: function(response) {
            window.location.href = "<?=base_url()?>admin/blog";
        },
        fail: function(error) {
            alert(error);
        }
    });
})
</script>

<style>
.blog {
    margin-top: 20px;
    height: 300px;
    padding: 0px 15px 0px 15px;
    overflow: auto;
}
</style>