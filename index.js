jQuery(document).ready(function($) {
    // if (!customizerRestriction.hasCapability) {
        var customizeControls = $('#customize-theme-controls');
        customizeControls.wrap('<div class="customizer-restriction-overlay-wrapper"></div>');
        $('.customizer-restriction-overlay-wrapper').append('<div class="customizer-restriction-overlay"><p>Access Restricted</p></div>');
    // }
});