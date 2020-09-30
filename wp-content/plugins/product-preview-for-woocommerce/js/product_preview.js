(function ($){
    $(document).ready( function () {
        var $current_object = false;
        var $cloned_object = false;
        var already_sliding = false;
        var $first_element, $last_element;
        if ( berocket_product_preview.style == 'show' ) {
            $( '.br_product_preview_preview .woocommerce-product-gallery' ).addClass('br_preview_galery_ready');
            $(document).on('berocket_ajax_filtering_end berocket_lmp_end', function() {
                $( '.br_product_preview_preview .woocommerce-product-gallery' ).not('.br_preview_galery_ready').each( function() {
                    if( typeof($( this ).wc_product_gallery == 'function') ) {
                        $( this ).addClass('br_preview_galery_ready').wc_product_gallery();
                    }
                } );
            });
        }
        $(document).on( 'click', '.br_product_preview_button', function ( event ) {
            event.preventDefault();
            var preview_id = $(this).data('id');
            $first_element = $('.br_product_preview_hidden').first();
            $last_element = $('.br_product_preview_hidden').last();
            show_preview( $('.br_product_preview_hidden_'+preview_id) );
        });
        $(document).on( 'click', '.berocket_preview_close', function ( event ) {
            event.preventDefault();
            hide_preview ( $(this).parents('.br_product_preview_hidden') );
            already_sliding = false;
        });
        $(document).on( 'click', '.br_product_preview_hidden', function ( event ) {
            event.preventDefault();
            hide_preview ( $(this) );
            already_sliding = false;
        });
        function show_preview( $hidden ) {
            product_preview_execute_func ( berocket_product_preview.user_func.before_open );
            jQuery(document).trigger('berocket_product_preview-before_open');
            var $original = $hidden;
            if ( berocket_product_preview.style == 'show' ) {
                $hidden.show();
            } else if ( berocket_product_preview.style == 'clone' ) {
                $current_object = $hidden;
                $hidden = $hidden.clone().appendTo('body').show();
                $cloned_object = $hidden;
            } else if ( berocket_product_preview.style == 'clone_from_data' ) {
                $current_object = $hidden;
                $hidden = $($hidden.data('html')).appendTo('body').addClass('woocommerce').show();
                $cloned_object = $hidden;
                $( '.br_product_preview_preview .woocommerce-product-gallery' ).not('.br_preview_galery_ready').each( function() {
                    if( typeof($( this ).wc_product_gallery == 'function') ) {
                        $( this ).addClass('br_preview_galery_ready').wc_product_gallery();
                    }
                } );
            }
            jQuery('body').trigger('resize');
            jQuery(window).trigger('scroll');
            setTimeout(function(){jQuery('body').trigger('resize');}, 100);
            if( $original.is($first_element) ) {
                $hidden.find('.prev_preview_slide').hide();
            }
            if( $original.is($last_element) ) {
                $hidden.find('.next_preview_slide').hide();
            }
            product_preview_execute_func ( berocket_product_preview.user_func.on_open );
            jQuery(document).trigger('berocket_product_preview-popup_open');
            return $hidden;
        }
        function hide_preview( $hidden ) {
            $hidden.find('.prev_preview_slide').show();
            $hidden.find('.next_preview_slide').show();
            if ( berocket_product_preview.style == 'show' ) {
                $hidden.hide();
            } else if ( berocket_product_preview.style == 'clone' ) {
                $hidden.remove();
            } else if ( berocket_product_preview.style == 'clone_from_data' ) {
                $hidden.remove();
            }
            product_preview_execute_func ( berocket_product_preview.user_func.after_close );
            jQuery(document).trigger('berocket_product_preview-after_close');
        }
        $(document).on( 'click', '.br_product_preview_preview', function ( event ) {
            event.stopPropagation();
        });
        function show_next($current) {
            var current = false;
            var $next = false;
            var $correct_current = $current
            if ( berocket_product_preview.style == 'clone' || berocket_product_preview.style == 'clone_from_data' ) {
                $correct_current = $current_object;
            }
            $('.br_product_preview_hidden').each(function( i, o ) {
                if( ! $(o).is($cloned_object) ) {
                    if( current ) {
                        $next = $(o);
                        current = false;
                    }
                    if( $(o).is($correct_current) ) {
                        current = true;
                    }
                }
            });
            if( $next ) {
                slide_from_to($current, $next);
            }
        }
        function show_prev($current) {
            var current = false;
            var $prev = false;
            var $correct_current = $current
            if ( berocket_product_preview.style == 'clone' || berocket_product_preview.style == 'clone_from_data' ) {
                $correct_current = $current_object;
            }
            $('.br_product_preview_hidden').each(function( i, o ) {
                if( ! $(o).is($cloned_object) ) {
                    if( $(o).is($correct_current) ) {
                        current = true;
                    }
                    if( ! current ) {
                        $prev = $(o);
                    }
                }
            });
            if( $prev ) {
                slide_to_from($prev, $current);
            }
        }
        function slide_from_to($current, $next) {
            if( ! already_sliding ) {
                already_sliding = true;
                $next = show_preview( $next );
                var $next_box = $next.find('.br_product_preview_preview');
                var $current_box = $current.find('.br_product_preview_preview');
                $next.css('left', '100%').css('right', '-100%');
                $next_box.css('left', '100%').css('right', '-100%');
                $current.css('left', '0%').css('right', '0%');
                $current_box.css('left', '0%').css('right', '0%');
                $next.animate({left:'0', right: '0'}, 500);
                $next_box.animate({left:'0', right: '0'}, 490);
                $current_box.animate({left:'-100%', right: '100%'}, 490);
                $current.animate({left:'-100%', right: '100%'}, 500, function() {
                    $current.css('left', '0%').css('right', '0%');
                    $current_box.css('left', '0%').css('right', '0%');
                    hide_preview( $current );
                    already_sliding = false;
                });
            }
        }
        function slide_to_from($prev, $current) {
            if( ! already_sliding ) {
                already_sliding = true;
                $prev = show_preview( $prev );
                var $prev_box = $prev.find('.br_product_preview_preview');
                var $current_box = $current.find('.br_product_preview_preview');
                $prev.css('left', '-100%').css('right', '100%');
                $prev_box.css('left', '-100%').css('right', '100%');
                $current.css('left', '0%').css('right', '0%');
                $current_box.css('left', '0%').css('right', '0%');
                $prev.animate({left:'0', right: '0'}, 500);
                $prev_box.animate({left:'0', right: '0'}, 490);
                $current_box.animate({left:'100%', right: '-100%'}, 490);
                $current.animate({left:'100%', right: '-100%'}, 500, function() {
                    $current.css('left', '0%').css('right', '0%');
                    $current_box.css('left', '0%').css('right', '0%');
                    hide_preview( $current );
                    already_sliding = false;
                });
            }
        }
        $(document).on('click', '.next_preview_slide', function(event) {
            event.preventDefault();
            event.stopPropagation();
            show_next($(this).parents('.br_product_preview_hidden'));
        });
        $(document).on('click', '.prev_preview_slide', function(event) {
            event.preventDefault();
            event.stopPropagation();
            show_prev($(this).parents('.br_product_preview_hidden'));
        });
    });
})(jQuery);
function product_preview_execute_func ( func ) {
    if( berocket_product_preview.user_func != 'undefined'
        && berocket_product_preview.user_func != null
        && typeof func != 'undefined' 
        && func.length > 0 ) {
        try{
            eval( func );
        } catch(err){
            alert('You have some incorrect JavaScript code (Product Preview)');
        }
    }
}
