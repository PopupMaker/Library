/*  Custom JavaScript to deliver a file download after a popup form
 *  is submitted successfully.
 *
 *  The code snippet requires two custom values: [1] the popupID, and
 *  [2] the form field ID for the hidden field. Replace the placeholder
 *  values assigned below to 'popupID' and 'hiddenFieldSelector' with the
 *  actual values from your site.
 */

(function ($) {
    var popupID = 123,
        hiddenFieldSelector = '#nf-field-1';

    $(document).on('pumBeforeOpen', '#pum-'+popupID, function () {
        var trigger = $.fn.popmake.last_open_trigger[0],
            field = $(hiddenFieldSelector);

        if (trigger && "" !== trigger.href) {
            field.val(trigger.href);
        }
    });
}(jQuery));