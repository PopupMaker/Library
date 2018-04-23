jQuery('#pum-123')
    .on('pumBeforeClose', function () {
        var $iframe = jQuery('iframe', jQuery(this)),
            src = $iframe.prop('src');
        $iframe.prop('src', '').prop('src', src.replace('?autoplay=1', ''));
    });