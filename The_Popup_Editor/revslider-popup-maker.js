/*
Add the following custom JavaScript to resize the Revolution Slider within your popup.
Visit the url: https://www.themepunch.com/faq/custom-css-or-javascript-for-version-5-0/
for guidance on how to add custom JS to the theme that includes RevSlider.

Copy the code below this comment and add it into the field 'Custom JavaScript' within your theme.
 */
jQuery(‘body’).on(‘click’, ‘.pum-trigger’, function() {

    jQuery(‘.pum-container’).trigger(‘resize’);

});