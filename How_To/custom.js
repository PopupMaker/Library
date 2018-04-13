(function ($, document) {

    // Customize these variables.
    // ----------------------------------
    var popups = [163, 165], // Comma separated popup IDs.
        cookie_name = 'pum-split-test', // Cookie name for the test only.
        cookie_time = '1 month', // Cookie timer.
        // ------------------------------
        // End Customizations.
        chosen_popup = false; // Empty placeholder.

    function random_popup() {
        return popups[Math.floor(Math.random() * popups.length)];
    }

    function get_chosen_popup() {
        var popup,
            cookie;

        if ($.pm_cookie === undefined) {
            return 0;
        }

        cookie = parseInt($.pm_cookie(cookie_name)) || false;

        // If the cookie contains a value use it.
        if (cookie > 0 && popups.indexOf(cookie) !== -1) {
            popup = cookie;
        } else if (!cookie) {
            popup = random_popup();
            $.pm_cookie(cookie_name, popup, cookie_time, '/');
        }

        return popup;
    }

    // Prevent non chosen popups from opening.
    $(document).on('pumBeforeOpen', '.pum', function () {
        var $this = $(this),
            ID = $this.popmake('getSettings').id;

        if (!chosen_popup) {
            chosen_popup = get_chosen_popup();
        }

        if (popups.indexOf(ID) >= 0 && ID !== chosen_popup) {
            $this.addClass('preventOpen');
        } else {
            $this.removeClass('preventOpen');
        }
    });
}(jQuery, document));