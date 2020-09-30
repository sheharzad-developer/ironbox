<?php 
global $wp_query, $product;
$product_id = br_wc_get_product_id($product);
do_action('br_before_preview_box');
if ( $options['style'] == 'clone_from_data' ) {
    echo '<div class="br_product_preview_hidden br_product_preview_hidden_', $product_id, $modify, '" style="display:none;" data-html=\'';
} ?>
<div class="br_product_preview_hidden br_product_preview_hidden_<?php echo $product_id, $modify; ?>">
    <div class="prev_preview_slide"><span><i class="fa fa-chevron-left"></i></span></div>
    <div class="next_preview_slide"><span><i class="fa fa-chevron-right"></i></span></div>
    <div class="br_product_preview_preview">
        <span class="berocket_preview_close"><i class="fa fa-times"></i></span>
        <div class="berocket_preview_content">
            <?php 
                remove_action('woocommerce_product_thumbnails', array('BeRocket_products_label', 'set_label'));
                $element_position = $options["position"];
                asort( $element_position, SORT_NUMERIC );
                foreach ( $element_position as $el_name => $el_position ) {
                    if ( ! empty( $options["show"][ $el_name ] ) ) {
                        if ( $el_name == 'image' and ! empty( $options["show"][ 'thumbnails' ] ) )
                            continue;
                        br_build_preview( $el_name );
                    }
                }
                add_action('woocommerce_product_thumbnails', array('BeRocket_products_label', 'set_label'));
            ?>
        </div>
    </div>
</div>
<?php if ( $options['style'] == 'clone_from_data' ) {
    echo '\'></div>';
}
do_action('br_after_preview_box'); ?>
