jQuery('#pum-123')
    .on('pumBeforeOpen', function () {
        var $video = jQuery('video', jQuery(this));
        $video[0].play();
    });