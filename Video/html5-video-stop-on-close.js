jQuery('#pum-123')
    .on('pumBeforeClose', function () {
        var $video = jQuery('video', jQuery(this));
        $video[0].pause();
    });