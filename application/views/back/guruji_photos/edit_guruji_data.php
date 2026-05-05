<?php
	$guruji_data=$this->db->select('*')->from('guruji_photos')->where(array('guruji_photo_id'=>$guruji_photo_id,'delete_status'=>'0'))->get()->row_array();

/*	echo "<pre>";
	print_r($guruji_data);
	exit();
	*/
?>
<div id="content-container">
	<div id="page-head">
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('guruji_photos')?></h1>
		</div>
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>admin"><?php echo translate('home')?></a></li>
			<li class="active"><a href="#"><?php echo translate('edit_guruji_data')?></a></li>
		</ol>
	</div> 
	<div id="page-content">
		<div class="panel">
			<form class="form-horizontal" method="POST" action="<?=base_url()?>admin/update_guruji_details" enctype="multipart/form-data">
				<input type="hidden" name="guruji_photo_id" id="guruji_photo_id" value="<?php echo $guruji_data['guruji_photo_id'];?>">
				<div class="panel-body" style="padding: 50px 20px 50px;">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('guruji_name')?></b><span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="guruji_name" id="guruji_name" value="<?php echo $guruji_data['guruji_name']?>" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('guruji_photo')?></b><span class="text-danger">*</span></label>
						<div class="col-sm-9">
							<img src="<?php echo base_url()?>uploads/guruji_photos/<?php echo $guruji_data['guruji_photo'];?>" alt="image" width="300px" height="250px" scrolling="no" style="overflow: hidden">
                    <input type="file" class="form-control" alt="img" name="guruji_photo" id="guruji_photos" value="<?php echo $guruji_data['guruji_photo'];?>"/>
						</div>
					</div>
				</div>
				<div class="panel-footer text-center">
				 <input type="submit" name="submit" class="btn btn-primary" value="save">
				<a href="<?php echo base_url();?>/admin/guruji_photos" class="btn btn-danger btn-sm z-depth-2-bottom"><?php echo translate('back')?></a>
		    	</div>
			</form> 
		</div>
	</div>
</div>


