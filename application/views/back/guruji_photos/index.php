<?php
	$guruji_data=$this->db->select('*')->from('guruji_photos')->where('delete_status','0')->get()->result();
?>

<div id="content-container">
	<div id="page-head">
		<div id="page-title">
			<h1 class="page-header text-overflow"><?php echo translate('SCI_photos')?></h1>
		</div>
		<ol class="breadcrumb">
			<li><a href="<?=base_url()?>admin"><?php echo translate('home')?></a></li>
			<!-- <li class="active"><a href="#"><?php echo translate('guruji_photos')?></a></li> -->
			<a href="<?php echo base_url();?>admin/guruji_photos/add_guruji_photos" style="float:right;color:white;margin-top: -25px;" class="btn btn-danger btn-sm z-depth-2-bottom" style="width: 100%"><?php echo translate('add_SCI_photos')?>
			</a>
		</ol>
	</div>
	<div id="page-content">
		<div class="panel">
			<?php if ($this->session->flashdata('success')) : ?>
				<div class="alert alert-success" id="success_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?php echo $message = $this->session->flashdata('success');?>
	            </div>
			<?php endif ?>
			<?php if ($this->session->flashdata('failed')): ?>
				<div class="alert alert-danger" id="danger_alert" style="display: block">
	                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
	                <?php echo $message = $this->session->flashdata('failed');?>
	            </div>
			<?php endif ?>
			<div class="panel-heading">
				<h3 class="panel-title"><?php echo translate('SCI_photo_list')?></h3>
			</div>
			<div class="panel-body">
				<table id="stories_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
					<tr>
						<th>Sno</th>
						<th>name</th>
                        <th>Image</th>
                        <th>Action</th>
					</tr>
					</thead>
					    <tbody>
                         <?php
                		          $i =1;
                		            if(!empty($guruji_data)){
                                    foreach($guruji_data as $row){
                                        
                                      ?>
                                        <tr>
                                            <td><?=$i;?></td>
                                            <td><?php echo $row->guruji_name;?></td>
                                        
		                                    <td><img src="<?php echo base_url();?>uploads/guruji_photos/<?php echo $row->guruji_photo;?>" height="50" width="50" alt="image"></td>

		                                    <td>
		                                        <span><a  href="<?php echo base_url();?>admin/guruji_photos/edit_guruji_data/<?php echo $row->guruji_photo_id;?>" title="EDIT" class="btn btn-info btn-xs add-tooltip"><i class="fa fa-edit"></i> </a></span>

		                                        <span><a href="<?php echo base_url();?>admin/guruji_photos/delete_guruji_data/<?php echo $row->guruji_photo_id;?>" onclick=" return confirm('Are you sure you want to delete the image?');"  title="DELETE" class="btn btn-danger btn-xs add-tooltip" ><i class="fa fa-trash"></i> </a></span>

		                                    </td>   
                                        </tr>
                                      <?php
                                      $i++;
									}
									            		        
		            		    }
		            		    
		            		    ?>
                        </tbody> 
				</table>
			</div>
		</div>
	</div>
</div>