<?php
if( ! function_exists( 'br_build_preview' ) ) {
    function br_build_preview( $name ) {
        global $product;
        $BeRocket_Product_Preview = BeRocket_Product_Preview::getInstance();
        $global_options           = $BeRocket_Product_Preview->get_option();
        $options                  = $global_options[ 'general_settings' ];
        do_action( 'br_build_preview_before_' . $name, $options );
        if ( $name == 'image' ) {
            do_action( 'berocket_pp_popup_before_image', $options ); ?>
            <a class="berocket_preview_image" href="<?php the_permalink(); ?>">
                <?php woocommerce_template_loop_product_thumbnail();
                do_action( 'berocket_pp_popup_inside_image', $options ); ?>
            </a>
            <?php do_action( 'berocket_pp_popup_after_image', $options );
        } elseif ( $name == 'thumbnails' ) {
            do_action( 'berocket_pp_popup_before_thumbnails', $options );
            if ( br_get_woocommerce_version() >= 2.7 ) {
                echo '<div class="berocket-woocommerce-product-gallery">';
                woocommerce_show_product_images();
                wp_enqueue_script( 'zoom' );
                wp_enqueue_script( 'flexslider' );
                wp_enqueue_script( 'photoswipe-ui-default' );
                wp_enqueue_style( 'photoswipe-default-skin' );
                add_action( 'wp_footer', 'woocommerce_photoswipe' );
                wp_enqueue_script( 'wc-single-product' );
                do_action( 'berocket_pp_popup_inside_thumbnails', $options );
                echo '</div>';
            } else {
                do_action( 'woocommerce_product_thumbnails', $options );
            }
            do_action( 'berocket_pp_popup_after_thumbnails', $options );
        } elseif ( $name == 'title' ) {
            do_action( 'berocket_pp_popup_before_title', $options ); ?>
            <a class="berocket_preview_title" href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            <?php do_action( 'berocket_pp_popup_after_title', $options );
        } elseif ( $name == 'buttons' ) {
            echo '<div class="berocket_preview_buttons">';
            do_action( 'berocket_pp_popup_before_buttons', $options );
            woocommerce_template_loop_add_to_cart();
            do_action( 'berocket_pp_popup_after_buttons', $options );
            echo '</div>';
        } elseif ( $name == 'description' ) {
            do_action( 'berocket_pp_popup_before_description', $options );
            woocommerce_template_single_excerpt();
            do_action( 'berocket_pp_popup_after_description', $options );
        } elseif ( $name == 'full_description' ) {
            do_action( 'berocket_pp_popup_before_full_description', $options );
            the_content();
            do_action( 'berocket_pp_popup_after_full_description', $options );
        } elseif ( $name == 'meta' ) {
            do_action( 'berocket_pp_popup_before_meta', $options ); ?>
            <div class="berocket_preview_meta">
                <?php woocommerce_template_single_meta(); ?>
            </div>
            <?php do_action( 'berocket_pp_popup_after_meta', $options );
        } elseif ( $name == 'price' ) {
            do_action( 'berocket_pp_popup_before_price', $options ); ?>
            <div class="berocket_preview_price">
                <?php woocommerce_template_loop_price(); ?>
            </div>
            <?php do_action( 'berocket_pp_popup_after_price', $options );
        } elseif ( $name == 'related_products' ) {
            do_action( 'berocket_pp_popup_before_related_products', $options );
            do_action( 'berocket_add_ww_buttons_actions' );
            do_action( 'berocket_add_compare_actions' );
            $related_products = wc_get_related_products( br_wc_get_product_id( $product ), br_get_value_from_array( $options, array( 'related_products_count' ), '4' ) );
            $products_hash    = json_encode( $related_products );
            $product_id       = intval( br_wc_get_product_id( $product ) );
            $related_saved    = get_post_meta( $product_id, 'berocket_product_preview_related', true );
            if ( ! empty( $related_saved ) && ! empty( $related_saved[ 'html' ] ) && ( ! empty( $related_saved[ 'hash' ] ) && $related_saved[ 'hash' ] == $products_hash || ! empty( $related_saved[ 'time' ] ) && $related_saved[ 'time' ] > ( time() - 30000 ) ) && ! empty( $related_saved[ 'count' ] ) && br_get_value_from_array( $options, array( 'related_products_count' ), '4' ) == $related_saved[ 'count' ] ) {
                echo $related_saved[ 'html' ];
            } else {
                ob_start();
                echo '<div class="berocket_related_products">';
                $global_post = $GLOBALS[ 'post' ];
                $loop_index  = wc_get_loop_prop( 'loop' );
                echo '<div style="clear:both;"></div><ul>';
                wc_set_loop_prop( 'loop', '0' );
                foreach ( $related_products as $related_product ) {
                    $post_object = get_post( $related_product );
                    setup_postdata( $GLOBALS[ 'post' ] =& $post_object );

                    wc_get_template_part( 'content', 'product' );
                }
                echo '</ul><div style="clear:both;"></div>';
                setup_postdata( $GLOBALS[ 'post' ] = $global_post );
                wc_set_loop_prop( 'loop', $loop_index );
                echo '</div>';
                $html = ob_get_clean();
                echo $html;
                update_post_meta( $product_id, 'berocket_product_preview_related', array(
                    'time'  => time(),
                    'count' => br_get_value_from_array( $options, array( 'related_products_count' ), '4' ),
                    'hash'  => $products_hash,
                    'html'  => $html
                ) );
            }
            do_action( 'berocket_remove_ww_buttons_actions' );
            do_action( 'berocket_remove_compare_actions' );
            do_action( 'berocket_pp_popup_after_related_products', $options );
        } else {
            do_action( 'br_build_preview_' . $name, $options );
        }
        do_action( 'br_build_preview_after_' . $name, $options );
    }
}
