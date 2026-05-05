  <div class="container">
      <form name ="form" action="<?php echo base_url(); ?>Home/add_video" method="post" enctype="multipart/form-data" onsubmit="return validateVideoInfo()">
        <input type="hidden" name="member_id" value="<?php echo $member_id; ?>" />
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="file" class="form-control" name="product_video" id="product_video" /><br>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <button type="submit" class="btn btn-md btn-block btn-success" style="margin: auto;"> Upload Video </button>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <button type="button" class="btn btn-md btn-block btn-danger" style="margin: auto;"autodata-dismiss="modal">Close</button>
            </div>
          </div>
          </div>
      </form>
  </div>

 

<script type="text/javascript">
  
  function validateVideoInfo(){
/*alert('Only GIF, JPG, JPEG and PNG image types are allowed');*/
      
  if($("#product_video")[0].files.length==0){
      $('#error_product_video').html('Please upload an video');
      $('.for-product_video').parent().addClass('has-danger');
      return false;
    }else if($('#product_video')[0].files.length>0){
      var validVideoTypes = ['video/mp4'];
      var videoType = $('#product_video')[0].files[0].type;
      var videoSize = $('#product_video')[0].files[0].size;
      if(!validVideoTypes.includes(videoType)){
        $('#error_product_video').html('Only mp4 types are allowed');
        $('for-product_video').parent().addClass('has-danger');
        return false;
      }
    }else{
      $('#error_product_video').html('');
      $('.for-product_video').parent().removeClass('has-danger');
    }

    return true;
  }
</script>.

