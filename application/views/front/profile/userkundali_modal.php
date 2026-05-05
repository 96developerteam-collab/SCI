<?php
    $kundali_data=$this->db->select('*')->from('member')->get()->row();
?>
    <div class="container">
        <form name ="form" action="<?php echo base_url(); ?>Home/add_kundali" method="post" enctype="multipart/form-data" onsubmit="return validateImageInfo()">
            <input type="hidden" name="member_id" value="<?php echo $member_id; ?>" />
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="sun_sign" class="text-uppercase" style="color: #000;">Image Type (JPG, PNG, PDF, JPEG)</label>
                        <input type="file" class="form-control no-resize" name="product_image" id="product_image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-block btn-success" style="margin: auto;"> Upload Image </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <button type="button" class="btn btn-md btn-block btn-danger" style="margin:auto" data-dismiss="modal" style="float:right">Close</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


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
    