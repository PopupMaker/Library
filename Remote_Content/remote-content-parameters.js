/*
Replace all references to the Popup Maker ID number used below with the ID number
for your popup. From the WP Admin, go to 'Popup Maker' -> 'All Popups' -> 'CSS Classes (column)'
to find the ID number assigned to your popup by the plugin.
 */
(function ($) {
    $(document)
        .ready(function () {

            $('#popmake-36287').on('popmakeRcBeforeAjax', function () {
                $.fn.popmake.rc_user_args[36287] = {
                    custom: 123,
                    name: 'Daniel'
                };
            });

        });
}(jQuery));