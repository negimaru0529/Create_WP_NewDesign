<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
 
popupnum_id_confirm=47;
popupnum_id_fin=52;
popupcancelflg=true;
document.addEventListener('wpcf7submit', function (event) {
  switch (event.detail.status) {
    case 'wpcf7c_confirmed':
      jQuery('#popmake-'+47+' #popup_name').html(jQuery('[name="your-name"]').val());
      jQuery('#popmake-'+47+' #popup_tel').html(jQuery('[name="tel-101"]').val());
      jQuery('#popmake-'+47+' #popup_email').html(jQuery('[name="your-email"]').val());
      jQuery('#popmake-'+47+' #popup_online').html(jQuery('[name="radio-388"]').val());
      jQuery('#popmake-'+47+' #popup_offline').html(jQuery('[name="radio-815"]').val());
	  PUM.open(popupnum_id_confirm);
      break;
  }
}, false);
 
jQuery(document).on('pumBeforeClose', '.pum', function () {
	popupcancel();
}); 

jQuery(document).on('click', '#pop-cancel', function () {
	popupcancel();
    PUM.close(popupnum_id_confirm);
    PUM.close(popupnum_id_fin);
});
 
function popupcancel()
{
  if(popupcancelflg)
  {
  		wpcf7c_to_step1(jQuery("form"), true);
  }
}
 
jQuery(document).on('click', '#pop-submit', function () {
    popupcancelflg=false;
  	PUM.open(popupnum_id_fin);
    PUM.close(popupnum_id_confirm);
	jQuery('.wpcf7-submit').click();
});

</script>
<!-- end Simple Custom CSS and JS -->
