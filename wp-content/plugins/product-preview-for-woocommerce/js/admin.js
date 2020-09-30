(function ($){
    $(document).ready( function () {
        $(document).on('click', '.br_default_input', function(event) {
            event.preventDefault();
            var $input = $(this).parents('p').first().find('input, select');
            $input.val($input.data('default'));
        });
        $(document).on('click', '.set_all_to_default', function(event) {
            event.preventDefault();
            var $input = $(this).parent().find('.br_default_input, .br_colorpicker_default').trigger('click');
        });
        if( $('.br_position_on_preview').length > 0 ) {
            $('.product_preview_submit_form').on('submit', function() {
                $('.br_position_on_preview .br_element_position').each( function( i, o ) {
                    $(this).val(i + 1);
                });
            });
            $( ".br_position_on_preview" ).sortable({
                handle: ".fa-sort",
                stop: function( event, ui ) {
                    $('.br_position_on_preview .br_element_position').each( function( i, o ) {
                        $(this).val(i + 1);
                    });
                }
            });
        }
    });
})(jQuery);
