/*
Replace all references to the Popup Maker ID number used below with the ID number
for your popup. From the WP Admin, go to 'Popup Maker' -> 'All Popups' -> 'CSS Classes (column)'
to find the ID number assigned to your popup by the plugin.
 */
(function ($) {
    $(document)
        .ready(function () {

            $('#popmake-449')
                .on('popmakeRcBeforeAjax', function () {

                    jQuery.fn.popmake.rc_user_args[449] = {
                        img_src: jQuery(jQuery.fn.popmake.last_open_trigger).attr('href')
                    };

                });

        });
}(jQuery));