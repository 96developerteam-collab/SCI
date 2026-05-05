<?php 
    $offers_data = $this->db->select('*')->from('offers')->get()->result(); 
?>

<section class="slice-lg sct-color-1" style="padding-top: 2rem !important; padding-bottom: 4rem !important;">
   <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h2 class="heading heading-3 strong-400 mb-0"><?php echo translate('happy_stories')?></h2>
            </div>
        
        <div class="section-title section-title--style-1 text-center mb-4">
            <!-- <?php if (!empty($offers_data)) { ?>-->
            <!--    <?php if ($offers_data[0]->future_offer_status == 0) { ?>-->
            <!--        <marquee style="color:#f9430d" scrolldelay="200" id="marquee1">-->
            <!--            <span style="color:black; font-size: 18px;">Futured Offers: </span>-->
            <!--            <?php echo $offers_data[0]->futured_offers; ?>-->
            <!--        </marquee>-->
            <!--    <?php } ?>-->
            <!--<?php } ?>-->

            <!--<?php if (!empty($offers_data)) { ?>-->
            <!--    <?php if ($offers_data[0]->current_offer_status == 0) { ?>-->
            <!--        <marquee style="color:#f9430d" scrolldelay="200" id="marquee1">-->
            <!--            <span style="color:black; font-size: 18px;">Current Offers: </span><?php echo $offers_data[0]->current_offers; ?>-->

            <!--        </marquee>-->
            <!--    <?php } ?>-->
            <!--<?php } ?>-->
            <hr>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>
        
        <span class="clearfix"></span>
        <?php
            $happy_stories_text = $this->db->get_where('frontend_settings', array('type' => 'happy_stories_text'))->row()->value;
        ?>
        
        <div class="fluid-paragraph fluid-paragraph-md c-gray-light strong-300 text-center site-title">
            <?=$happy_stories_text?>
        </div>
    </div>
</section>
  
<div class="block-wrapper" id="result">
    <!-- Loads List Data with Ajax Pagination -->
</div>

<section class="slice sct-color-1 mb-4">
    <div id="pagination" class="pr-5" style="float: right;">
        <!-- Loads Ajax Pagination Links -->
    </div>
</section>
           
</section>
<script>
    $(document).ready(function(){
        filter_stories('0');
    });

    function filter_stories(page){      
        var form = $('#filter_form');
        //var url = form.attr('action')+page+'/';
        var url = '<?php echo base_url(); ?>home/ajax_story_list/'+page;
        var place = $('#result');
        var formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
        }
        $.ajax({
            url: url, // form action url
            type: 'POST', // form submit method get/post
            dataType: 'html', // request type html/json/xml
            data: formdata ? formdata : form.serialize(), // serialize form data 
            cache       : false,
            contentType : false,
            processData : false,
            beforeSend: function() {
                place.html("");
                place.html("<div class='text-center pt-5 pb-5' id='payment_loader'><i class='fa fa-refresh fa-5x fa-spin'></i><p>Please Wait...</p></div>").fadeIn(); 
                // change submit button text
            },
            success: function(data) {
                setTimeout(function(){
                    place.html(data); // fade in response data
                }, 20);
                setTimeout(function(){
                    place.fadeIn(); // fade in response data
                }, 30);
            },
            error: function(e) {
                console.log(e)
            }
        });
        
    }
</script>

<style>
    .site-title { 
    margin-top: 0.5em !important;
    font-family: 'Amaranth' !important;
    color: #707476 !important;
    font-size: 17px !important;
}
</style>