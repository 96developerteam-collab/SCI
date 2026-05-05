<form class="form-horizontal" id="add_offer_form" method="POST"  action="<?=base_url()?>admin/offers/do_add"  enctype="multipart/form-data" >
	<div class="form-group">
		<label class="col-sm-3 control-label" for="futured_offers" ><b><?php echo translate('Futured_offers')?></b></label>
		<div class="col-sm-8">
			<textarea class="form-control" name="futured_offers" value="" id="marquee1" required></textarea> 
			 <div class="col-sm-8">
                    <label>If you want to disable this field please click check box</label>
                    <input id="future_offer_status" name="future_offer_status" value="<?=$value->futured_offers;?>" class="magic-checkbox checkbox" type="checkbox" value="1">
                </div>
		</div>
	</div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="current_offers"><b><?php echo translate('Current_offers')?></b></label>
        <div class="col-sm-8">
            <textarea class="form-control" name="current_offers" value="" id="marquee1" required></textarea>
             <div class="col-sm-8">
                    <label>If you want to disable this field please click check box</label>
                    <input id="current_offer_status" name="current_offer_status" class="magic-checkbox checkbox" type="checkbox" value="1">
                </div>
        </div>
    </div>
	<button type="submit" id="offer_form_submit" style="display: none">Submit</button>
	
</form>

<script>
    $(function () {
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5();
    })

    $('#current_offer_status').click(function() {
        if ($(this).is(':checked')) {                 
           $("#current_offers").Attr("disabled", true );
        } else {
           $('#current_offers').Attr('disabled', false);
        }
    });


    $('#future_offer_status').click(function() {
        if ($(this).is(':checked')) {                 
           $("#futured_offers").Attr("disabled", true );
        } else {
           $('#futured_offers').Attr('disabled', false);
        }
     });

</script>



