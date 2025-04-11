jQuery(document).ready(function($) {
    // Toggle symbol settings
    $('#list_style_type').change(function() {
        $('#symbol-setting').toggle($(this).val() === 'symbol');
    });

    // Initialize state
    $('#symbol-setting').toggle($('#list_style_type').val() === 'symbol');
});