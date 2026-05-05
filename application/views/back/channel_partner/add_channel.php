<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">
		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('committee_members')?></h1>
		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->
		<!--Breadcrumb-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<ol class="breadcrumb">
			<li><a href="#"><?php echo translate('home')?></a></li>
			<!-- <li><a href="#"><?php echo translate('premium_packages')?></a></li> -->
			<li class="active"><a href="#"><?php echo translate('add_committee_members')?></a></li>
		</ol>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End breadcrumb-->
	</div>
	<!--Page content-->
	<!--===================================================-->
	<div id="page-content">
		<!--Block Styled Form -->
		<!--===================================================-->
     <div class="row">
       <div class="col-md-8 col-lg-offset-2">
     <div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo translate('add_committee_members')?></h3>
			</div>
			<!--Horizontal Form-->
			<!--===================================================-->
		<form class="form-horizontal" id="package_form" method="POST" action="<?=base_url()?>admin/channel_partner/do_add" enctype="multipart/form-data">
				<div class="panel-body">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('committee_members_name')?></b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="name" value="" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('title')?></b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="project_name[]" value="" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('mobile')?></b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="mobile[]" value="" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('address')?></b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="address[]" value="" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="demo-hor-name"><b><?php echo translate('designation')?></b></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="testimonial[]" value="" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="image"><b><?php echo translate('committee_members_image')?></b></label>
				      <div class="col-sm-10">
				       <div class="col-sm-6" style="margin:2px; padding:2px;">
								<img class="img-responsive img-border blah" src="<?=base_url()?>uploads/channel_partner_image/default_image.png" class="img-sm">
			         </div>
			        </div>
		         <div class="col-sm-12" style="margin-top: 10px">
		          <div class="col-sm-10 col-sm-offset-2" >
		           <span class="pull-left btn btn-default btn-file margin-top-10">
	             <?php echo translate('select_a_photo')?>
	             <input type="file" name="image[]" class="form-control imgInp">
		           </span>
		          </div>
		         </div>
					</div>
					
					<table id="InsuranceID" class="table">
					  <tr id="appendItem">
						  <td width="20%">
							  <br>
							  <button type="button" class="btn btn-success" onclick="addChannel();" style="padding:8px;">Add channel
							  <span style="font-size:16px; font-weight:bold;">+</span>
							  </button>
						  </td>
						  <td width="20%">
						  </td>
						  <td width="20%">
						  </td>
						  <td width="20%">
						  </td>
					  </tr>
					</table>	
				</div>
				<div class="panel-footer text-right">
					<a href="<?=base_url()?>admin/channel_partner" class="btn btn-danger btn-sm btn-labeled fa fa-step-backward" type="submit"><?php echo translate('go_back')?></a>
					
			   <button type="submit" class="btn btn-primary btn-sm btn-labeled fa fa-save"><?php echo translate('submit')?></button>
				</div>
		</form>
			<!--===================================================-->
			<!--End Horizontal Form-->
		</div>
  </div>
  </div>
		<!--===================================================-->
		<!--End Block Styled Form -->
	</div>
	<!--===================================================-->
	<!--End page content-->
</div>
<script>
	$(function () {
	    //bootstrap WYSIHTML5 - text editor
	    $('.textarea').wysihtml5();
	})
</script>
<script>
	// SCRIPT FOR IMAGE UPLOAD
 function readURL_all(input) {
   if (input.files && input.files[0]) {
       var reader = new FileReader();
       var parent = $(input).closest('.form-group');
       reader.onload = function (e) {
           parent.find('.wrap').hide('fast');
           parent.find('.blah').attr('src', e.target.result);
           parent.find('.wrap').show('fast');
       }
       reader.readAsDataURL(input.files[0]);
     }
 }

 $(".panel-body").on('change', '.imgInp', function () {
     readURL_all(this);
 });

 function readURL(input,id) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#previewimage'+id).attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$(document).on('change', '.custom-insurance', function (event) {
		var id = $(this).attr('data-val');
		// alert(id);
		readURL(this,id);
		// $(this).next('.custom-file-label').html(event.target.files[0].name);
  });


</script>

<script type="text/javascript">

  var insurancerowsarray = [0];
  var insurance_length = $('.edit-insurance-row').length;
  if(insurance_length>0){
	insurancerowsarray.push(insurance_length);
  }


  function addChannel(){
	var irows = Math.max.apply(Math,insurancerowsarray) + 1;

	$('#InsuranceID').append('<tr id="insurance-rows-'+irows+'" class="edit-insurance-row"><td style="width:90%"><label for="project_name" style="color: #646c9a;"><b>Project Name</b><span class="comp" > * </span></label><input type="text" class="form-control" name="project_name[]" placeholder="Enter Project Name " autocomplete="off" required></td><td style="width:90%"><label for="mobile" style="color: #646c9a;"><b>Mobile</b><span class="comp" > * </span></label><input type="text" class="form-control" name="mobile[]" placeholder="Enter Mobile Number" autocomplete="off" required></td><td style="width:90%"><label for="address" style="color: #646c9a;"><b>Address</b><span class="comp" > * </span></label><input type="text" class="form-control" name="address[]" placeholder="Enter address" autocomplete="off" required></td><td style="width:90%"><label for="testimonial" style="color: #646c9a;"><b>Testimonial</b><span class="comp" > * </span></label><input type="text" class="form-control" name="testimonial[]" placeholder="Enter Description" autocomplete="off" required></td><td style="width:90%"><label for="image" style="color: #646c9a;"><b>Upload Image</b><span class="comp"> * </span></label><div class="col-sm-10"><div class="col-sm-6" style="margin:2px; padding:2px;"><img data-val="'+irows+'" class="img-responsive img-border" id="previewimage'+irows+'" src="<?=base_url()?>uploads/channel_partner_image/default_image.png" class="img-sm"></div></div><div class="col-sm-12" style="margin-top: 10px"><div class="col-sm-10 col-sm-offset-2" ><span class="pull-left btn btn-default btn-file margin-top-10"><?php echo translate('select_a_photo')?><input type="file" name="image[]" class="form-control imgInp custom-insurance" data-val="'+irows+'"></span></div></div></td><td width="100%"><br><button class="glyphicon glyphicon-trash" onclick="removeInsuranceThis('+irows+')" type="button" style="padding-left:3px;padding-right:4px;color:#e10505"><i></i></button></td></tr>');
		insurancerowsarray.push(irows);

		$('.kt_date').datepicker();
		$('.kt-search').select2({
			placeholder: "Select an option"
		});
  }

  function removeInsuranceThis(rows){
	$('#insurance-rows-'+rows).remove();
	insurancerowsarray.splice($.inArray(rows,insurancerowsarray),1);
  }

  

 //  function readURL_all(input) {
 //   if (input.files && input.files[0]) {
 //       var reader = new FileReader();
 //       var parent = $(input).closest('.form-group');
 //       reader.onload = function (e) {
 //           parent.find('.wrap').hide('fast');
 //           parent.find('.blah').attr('src', e.target.result);
 //           parent.find('.wrap').show('fast');
 //       }
 //       reader.readAsDataURL(input.files[0]);
 //     }
 // }

</script>

<style type="text/css">
	td{
  display:block
}

</style>

