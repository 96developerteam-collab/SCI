

<section class="content">
  <div class="container-fluid">
    <div class="row">
          <!-- left column -->
      <div class="col-md-10">
            <!-- general form elements -->
        <div class="card card-primary">
        <!--  <div class="card-header">
              <h3 class="card-title" style="text-align:center">Upload Video</h3>
          </div>-->
            <div class="modal-body">
            <form name ="form" action="<?php echo base_url(); ?>Admin/add_video" method="post" enctype="multipart/form-data" onsubmit="return validateVideoInfo()"> 
              <input type="hidden" name="member_id" value="<?php echo $member_id; ?>" />

               <label id="error_product_video" class="error mt-2 text-danger" ></label>
          
          <label for="image">Video</label>
          <div class="row form-group">

            <div class="col-md-8" >
              
              <input type="file" class="form-control"name="product_video" id="product_video" />
            </div>
         
            <div class="col-md-4" >

              <button type="submit" class="btn btn-md btn-block btn-success"> Upload Video </button>
            </div>
          </div>



            </form>

          </div>
       </div>
      </div>
      </div>
    </div>
</section>

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

