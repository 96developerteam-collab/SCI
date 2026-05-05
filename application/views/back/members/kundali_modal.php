<?php
$kundali_data=$this->db->select('*')->from('member')->get()->row();
?>


<section class="content">
  <div class="container-fluid">
   

      
    <div class="card card-primary">
     <!-- <div class="card-header">
        <h3 class="card-title" style="text-align:center">Birth Kundali</h3>
      </div>-->

      <div class="modal-body">
        <form name ="form" action="<?php echo base_url(); ?>Admin/add_kundali" method="post" enctype="multipart/form-data" onsubmit="return validateImageInfo()"> 
          <input type="hidden" name="member_id" value="<?php echo $member_id; ?>" />
          <label id="error_product_image" class="error mt-2 text-danger" ></label>
          
          <label for="image">Image</label>
       	  <div class="row form-group">

            <div class="col-md-9" >
              
              <input type="file" class="form-control" alt="img" name="product_image" id="product_image" />
            </div>
            <div class="col-md-3" >
              <button type="submit" class="btn btn-md btn-block btn-success"> Upload Image </button>
            </div>
          </div>

        </form>
      </div>
    </div>
   
  
  </div>
</section>

<script type="text/javascript">
  
  function validateImageInfo(){
/*alert('Only GIF, JPG, JPEG and PNG image types are allowed');*/
      
  if($("#product_image")[0].files.length==0){
      $('#error_product_image').html('Please upload an image');
      $('.for-product_image').parent().addClass('has-danger');
      return false;
    }else if($('#product_image')[0].files.length>0){
      var validImageTypes = ['application/pdf', 'image/jpg', 'image/png', 'image/jpeg', 'application/msword'];
      var imageType = $('#product_image')[0].files[0].type;
      var imageSize = $('#product_image')[0].files[0].size;
      if(imageSize>500000){
        $("#error_product_image").html("Image size is greater than 50kb");
        $('.for-product_image').parent().addClass('has-danger');
        return false;
      }else if(!validImageTypes.includes(imageType)){
        $('#error_product_image').html('Only GIF, JPG, JPEG, PDF, word and PNG image types are allowed');
        $('for-product_image').parent().addClass('has-danger');
        return false;
      }
    }else{
      $('#error_product_image').html('');
      $('.for-product_image').parent().removeClass('has-danger');
    }

    return true;
  }
</script>
    