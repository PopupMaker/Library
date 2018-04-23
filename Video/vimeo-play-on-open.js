jQuery('#pum-123')
    .on('pumBeforeOpen', function () {
        var $iframe = jQuery('iframe', jQuery(this)),
            src = $iframe.prop('src');
        $iframe.prop('src', '').prop('src', src + '&autoplay=1');
    });