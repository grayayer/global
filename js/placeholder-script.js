jQuery(function() {
jQuery.support.placeholder = false;
webkit_type = document.createElement('input');
if('placeholder' in webkit_type) jQuery.support.placeholder = true;
});
jQuery(function() {
  
if(!jQuery.support.placeholder) {
  
var active = document.activeElement;
  
jQuery(':text, textarea, :password').focus(function () {
  
if ((jQuery(this).attr('placeholder')) && (jQuery(this).attr('placeholder').length > 0) && (jQuery(this).attr('placeholder') != '') && jQuery(this).val() == jQuery(this).attr('placeholder')) {
jQuery(this).val('').removeClass('hasPlaceholder');
}
}).blur(function () {
if ((jQuery(this).attr('placeholder')) && (jQuery(this).attr('placeholder').length > 0) && (jQuery(this).attr('placeholder') != '') && (jQuery(this).val() == '' || jQuery(this).val() == jQuery(this).attr('placeholder'))) {
jQuery(this).val(jQuery(this).attr('placeholder')).addClass('hasPlaceholder');
}
});
  
jQuery(':text, textarea, :password').blur();
jQuery(active).focus();
jQuery('form').submit(function () {
jQuery(this).find('.hasPlaceholder').each(function() { $(this).val(''); });
});
}
});