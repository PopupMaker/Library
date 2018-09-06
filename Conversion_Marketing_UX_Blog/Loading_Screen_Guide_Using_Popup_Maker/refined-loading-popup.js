(function ($) {
    var popupID = 406, // Popup ID # found in the "All Popups" screen
        cookie_name = 'loading-popup', // the cookie name in the Popup Editor
        close_delay = 500, // (measured in milliseconds) - .5 seconds after page load completes
        // --------------------------------
        // --   Don't touch below here   --
        // --------------------------------
        popup = '#pum-' + popupID,
        $html = $('html'),
        classes = 'pum-open pum-open-overlay pum-open-scrollable',
        regex = new RegExp(cookie_name + '=');

    if (document.cookie.match(regex)) {
        $('<style>' + popup + ' {display: block;}</style>').appendTo($('head'));
        $html.addClass(classes);

        $(document).ready(function () {
            setTimeout(function () {
                $(popup).fadeOut(function () {
                    $html.removeClass(classes);
                });
            }, close_delay);
            $.pm_remove_cookie(cookie_name);
        });
    }

}(jQuery));