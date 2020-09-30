<table class="berocket_pagination_style berocket_pp_styles">
    <tr>
        <td colspan="4"><h3><?php _e( 'Preview style', 'product-preview-for-woocommerce' ) ?></h3></td>
    </tr>
    <tr>
        <td colspan="4"><h4><?php _e( 'Color', 'product-preview-for-woocommerce' ) ?></h4></td>
    </tr>
    <tr>
        <th><?php _e( 'Background color', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Border color', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Text color', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Link color', 'product-preview-for-woocommerce' ) ?></th>
    </tr>
    <tr>
        <?php 
        $options_list = array(
            array('block', 'background-color'),
            array('block', 'border-color'),
            array('text', 'color'),
            array('link', 'color'),
        );
        foreach($options_list as $options_el) {
            echo '<td>';
            $default_el = br_get_value_from_array($default, $options_el);
            echo br_color_picker(
                $settings_name.'[style_settings]['.implode('][', $options_el).']',
                br_get_value_from_array($options, $options_el),
                (empty($default_el) ? -1 : $default_el)
            );
            echo '</td>';
        }
        ?>
    </tr>
    <tr>
        <th><?php _e( 'Link color when mouse over', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Price color', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Close button color', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Close button background color', 'product-preview-for-woocommerce' ) ?></th>
    </tr>
    <tr>
        <?php 
        $options_list = array(
            array('link_hover', 'color'),
            array('price', 'color'),
            array('close', 'color'),
            array('close', 'background-color'),
        );
        foreach($options_list as $options_el) {
            echo '<td>';
            $default_el = br_get_value_from_array($default, $options_el);
            echo br_color_picker(
                $settings_name.'[style_settings]['.implode('][', $options_el).']',
                br_get_value_from_array($options, $options_el),
                (empty($default_el) ? -1 : $default_el)
            );
            echo '</td>';
        }
        ?>
    </tr>
    <tr>
        <th><?php _e( 'Close button color when mouse over', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Close button background color when mouse over', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Close button border color', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Quick view background color', 'product-preview-for-woocommerce' ) ?></th>
    </tr>
    <tr>
        <?php 
        $options_list = array(
            array('close_hover', 'color'),
            array('close_hover', 'background-color'),
            array('close', 'border-color'),
            array('quick_view', 'background-color'),
        );
        foreach($options_list as $options_el) {
            echo '<td>';
            $default_el = br_get_value_from_array($default, $options_el);
            echo br_color_picker(
                $settings_name.'[style_settings]['.implode('][', $options_el).']',
                br_get_value_from_array($options, $options_el),
                (empty($default_el) ? -1 : $default_el)
            );
            echo '</td>';
        }
        ?>
    </tr>
    <tr>
        <th><?php _e( 'Quick view background color when mouse over', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Quick view text color', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Quick view text color when mouse over', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Quick view border color', 'product-preview-for-woocommerce' ) ?></th>
    </tr>
    <tr>
        <?php 
        $options_list = array(
            array('quick_view_hover', 'background-color'),
            array('quick_view', 'color'),
            array('quick_view_hover', 'color'),
            array('quick_view', 'border-color'),
        );
        foreach($options_list as $options_el) {
            echo '<td>';
            $default_el = br_get_value_from_array($default, $options_el);
            echo br_color_picker(
                $settings_name.'[style_settings]['.implode('][', $options_el).']',
                br_get_value_from_array($options, $options_el),
                (empty($default_el) ? -1 : $default_el)
            );
            echo '</td>';
        }
        ?>
    </tr>
    <tr>
        <th><?php _e( 'Next and Previous button background color', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Next and Previous button font color', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Next and Previous button border color', 'product-preview-for-woocommerce' ) ?></th>
        <th rowspan=2></th>
    </tr>
    <tr>
        <?php 
        $options_list = array(
            array('next_prev', 'background-color'),
            array('next_prev', 'color'),
            array('next_prev', 'border-color'),
        );
        foreach($options_list as $options_el) {
            echo '<td>';
            $default_el = br_get_value_from_array($default, $options_el);
            echo br_color_picker(
                $settings_name.'[style_settings]['.implode('][', $options_el).']',
                br_get_value_from_array($options, $options_el),
                (empty($default_el) ? -1 : $default_el)
            );
            echo '</td>';
        }
        ?>
    </tr>
    <tr>
        <th><?php _e( 'Next and Previous button background color when mouse over', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Next and Previous button font color when mouse over', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Next and Previous button border color when mouse over', 'product-preview-for-woocommerce' ) ?></th>
        <td rowspan=2></td>
    </tr>
    <tr>
        <?php 
        $options_list = array(
            array('next_prev_hover', 'background-color'),
            array('next_prev_hover', 'color'),
            array('next_prev_hover', 'border-color'),
        );
        foreach($options_list as $options_el) {
            echo '<td>';
            $default_el = br_get_value_from_array($default, $options_el);
            echo br_color_picker(
                $settings_name.'[style_settings]['.implode('][', $options_el).']',
                br_get_value_from_array($options, $options_el),
                (empty($default_el) ? -1 : $default_el)
            );
            echo '</td>';
        }
        ?>
    </tr>
    <tr>
        <td colspan="4"><h4><?php _e( 'Size', 'product-preview-for-woocommerce' ) ?></h4></td>
    </tr>
    <tr>
        <th><?php _e( 'Size', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Padding around preview', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Padding from border to text inside', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Border around preview', 'product-preview-for-woocommerce' ) ?></th>
    </tr>
    <tr>
        <td>
            <p><?php _e( 'Text', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][text][font-size]" data-default="<?php echo $default['text']['font-size']; ?>" type="text" value="<?php echo $options['text']['font-size']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Link', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][link][font-size]" data-default="<?php echo $default['link']['font-size']; ?>" type="text" value="<?php echo $options['link']['font-size']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Price', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][price][font-size]" data-default="<?php echo $default['price']['font-size']; ?>" type="text" value="<?php echo $options['price']['font-size']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Image width', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][image][width]" data-default="<?php echo $default['image']['width']; ?>" type="text" value="<?php echo $options['image']['width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Image position', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <select name="<?php echo $settings_name; ?>[style_settings][image][float]" data-default="<?php echo $default['image']['float']; ?>">
                <option value="none"<?php if ( ! $options['image']['float'] || $options['image']['float'] == 'none' ) { echo ' selected'; } ?> ><?php _e( 'NONE', 'product-preview-for-woocommerce' ) ?></option>
                <option value="left"<?php if ( $options['image']['float'] == 'left' ) { echo ' selected'; } ?> ><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></option>
                <option value="right"<?php if ( $options['image']['float'] == 'right' ) { echo ' selected'; } ?> ><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></option>
            </select>
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][block][margin-top]" data-default="<?php echo $default['block']['margin-top']; ?>" type="text" value="<?php echo $options['block']['margin-top']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][block][margin-bottom]" data-default="<?php echo $default['block']['margin-bottom']; ?>" type="text" value="<?php echo $options['block']['margin-bottom']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][block][margin-left]" data-default="<?php echo $default['block']['margin-left']; ?>" type="text" value="<?php echo $options['block']['margin-left']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][block][margin-right]" data-default="<?php echo $default['block']['margin-right']; ?>" type="text" value="<?php echo $options['block']['margin-right']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][content][margin-top]" data-default="<?php echo $default['content']['margin-top']; ?>" type="text" value="<?php echo $options['content']['margin-top']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][content][margin-bottom]" data-default="<?php echo $default['content']['margin-bottom']; ?>" type="text" value="<?php echo $options['content']['margin-bottom']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][content][margin-left]" data-default="<?php echo $default['content']['margin-left']; ?>" type="text" value="<?php echo $options['content']['margin-left']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][content][margin-right]" data-default="<?php echo $default['content']['margin-right']; ?>" type="text" value="<?php echo $options['content']['margin-right']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][block][border-top-width]" data-default="<?php echo $default['block']['border-top-width']; ?>" type="text" value="<?php echo $options['block']['border-top-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][block][border-bottom-width]" data-default="<?php echo $default['block']['border-bottom-width']; ?>" type="text" value="<?php echo $options['block']['border-bottom-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][block][border-left-width]" data-default="<?php echo $default['block']['border-left-width']; ?>" type="text" value="<?php echo $options['block']['border-left-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][block][border-right-width]" data-default="<?php echo $default['block']['border-right-width']; ?>" type="text" value="<?php echo $options['block']['border-right-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
    </tr>
    <tr>
        <th><?php _e( 'Padding around image', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Close button position', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Close button size', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Border around close button', 'product-preview-for-woocommerce' ) ?></th>
    </tr>
    <tr>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][image][margin-top]" data-default="<?php echo $default['image']['margin-top']; ?>" type="text" value="<?php echo $options['image']['margin-top']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][image][margin-bottom]" data-default="<?php echo $default['image']['margin-bottom']; ?>" type="text" value="<?php echo $options['image']['margin-bottom']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][image][margin-left]" data-default="<?php echo $default['image']['margin-left']; ?>" type="text" value="<?php echo $options['image']['margin-left']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][image][margin-right]" data-default="<?php echo $default['image']['margin-right']; ?>" type="text" value="<?php echo $options['image']['margin-right']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][top]" data-default="<?php echo $default['close']['top']; ?>" type="text" value="<?php echo $options['close']['top']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][bottom]" data-default="<?php echo $default['close']['bottom']; ?>" type="text" value="<?php echo $options['close']['bottom']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][left]" data-default="<?php echo $default['close']['left']; ?>" type="text" value="<?php echo $options['close']['left']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][right]" data-default="<?php echo $default['close']['right']; ?>" type="text" value="<?php echo $options['close']['right']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Width', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][width]" data-default="<?php echo $default['close']['width']; ?>" type="text" value="<?php echo $options['close']['width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Height', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][height]" data-default="<?php echo $default['close']['height']; ?>" type="text" value="<?php echo $options['close']['height']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Line Height', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][line-height]" data-default="<?php echo $default['close']['line-height']; ?>" type="text" value="<?php echo $options['close']['line-height']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Text size', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][font-size]" data-default="<?php echo $default['close']['font-size']; ?>" type="text" value="<?php echo $options['close']['font-size']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Corner round', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][border-radius]" data-default="<?php echo $default['close']['border-radius']; ?>" type="text" value="<?php echo $options['close']['border-radius']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][border-top-width]" data-default="<?php echo $default['close']['border-top-width']; ?>" type="text" value="<?php echo $options['close']['border-top-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][border-bottom-width]" data-default="<?php echo $default['close']['border-bottom-width']; ?>" type="text" value="<?php echo $options['close']['border-bottom-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][border-left-width]" data-default="<?php echo $default['close']['border-left-width']; ?>" type="text" value="<?php echo $options['close']['border-left-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][close][border-right-width]" data-default="<?php echo $default['close']['border-right-width']; ?>" type="text" value="<?php echo $options['close']['border-right-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
    </tr>
    <tr>
        <th><?php _e( 'Quick view button', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Quick view button paddings', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Quick view button margin', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Gallery images', 'product-preview-for-woocommerce' ) ?></th>
    </tr>
    <tr>
        <td>
            <p><?php _e( 'Width', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][width]" data-default="<?php echo $default['quick_view']['width']; ?>" type="text" value="<?php echo $options['quick_view']['width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Height', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][height]" data-default="<?php echo $default['quick_view']['height']; ?>" type="text" value="<?php echo $options['quick_view']['height']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Border width', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][border-width]" data-default="<?php echo $default['quick_view']['border-width']; ?>" type="text" value="<?php echo $options['quick_view']['border-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Font size', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][font-size]" data-default="<?php echo $default['quick_view']['font-size']; ?>" type="text" value="<?php echo @$options['quick_view']['font-size']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            
        </td>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][padding-top]" data-default="<?php echo $default['quick_view']['padding-top']; ?>" type="text" value="<?php echo $options['quick_view']['padding-top']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][padding-bottom]" data-default="<?php echo $default['quick_view']['padding-bottom']; ?>" type="text" value="<?php echo $options['quick_view']['padding-bottom']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][padding-left]" data-default="<?php echo $default['quick_view']['padding-left']; ?>" type="text" value="<?php echo $options['quick_view']['padding-left']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][padding-right]" data-default="<?php echo $default['quick_view']['padding-right']; ?>" type="text" value="<?php echo $options['quick_view']['padding-right']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][margin-top]" data-default="<?php echo $default['quick_view']['margin-top']; ?>" type="text" value="<?php echo $options['quick_view']['margin-top']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][margin-bottom]" data-default="<?php echo $default['quick_view']['margin-bottom']; ?>" type="text" value="<?php echo $options['quick_view']['margin-bottom']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][margin-left]" data-default="<?php echo $default['quick_view']['margin-left']; ?>" type="text" value="<?php echo $options['quick_view']['margin-left']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][quick_view][margin-right]" data-default="<?php echo $default['quick_view']['margin-right']; ?>" type="text" value="<?php echo $options['quick_view']['margin-right']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Width', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][gallery][width]" data-default="<?php echo $default['gallery']['width']; ?>" type="text" value="<?php echo $options['gallery']['width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Minimum width', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][gallery][min-width]" data-default="<?php echo $default['gallery']['min-width']; ?>" type="text" value="<?php echo $options['gallery']['min-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Border width', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][gallery][border-width]" data-default="<?php echo $default['gallery']['border-width']; ?>" type="text" value="<?php echo $options['gallery']['border-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
    </tr>
    <tr>
        <th><?php _e( 'Gallery images margin', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Next button position', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Next button size', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Next border width', 'product-preview-for-woocommerce' ) ?></th>
    </tr>
    <tr>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][gallery][margin-top]" data-default="<?php echo $default['gallery']['margin-top']; ?>" type="text" value="<?php echo $options['gallery']['margin-top']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][gallery][margin-bottom]" data-default="<?php echo $default['gallery']['margin-bottom']; ?>" type="text" value="<?php echo $options['gallery']['margin-bottom']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][gallery][margin-left]" data-default="<?php echo $default['gallery']['margin-left']; ?>" type="text" value="<?php echo $options['gallery']['margin-left']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][gallery][margin-right]" data-default="<?php echo $default['gallery']['margin-right']; ?>" type="text" value="<?php echo $options['gallery']['margin-right']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][top]" data-default="<?php echo $default['next_button']['top']; ?>" type="text" value="<?php echo $options['next_button']['top']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][bottom]" data-default="<?php echo $default['next_button']['bottom']; ?>" type="text" value="<?php echo $options['next_button']['bottom']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][left]" data-default="<?php echo $default['next_button']['left']; ?>" type="text" value="<?php echo $options['next_button']['left']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][right]" data-default="<?php echo $default['next_button']['right']; ?>" type="text" value="<?php echo $options['next_button']['right']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Height', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][height]" data-default="<?php echo $default['next_button']['height']; ?>" type="text" value="<?php echo $options['next_button']['height']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Width', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][width]" data-default="<?php echo $default['next_button']['width']; ?>" type="text" value="<?php echo $options['next_button']['width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Font size', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][font-size]" data-default="<?php echo $default['next_button']['font-size']; ?>" type="text" value="<?php echo $options['next_button']['font-size']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Border radius', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][border-radius]" data-default="<?php echo $default['next_button']['border-radius']; ?>" type="text" value="<?php echo $options['next_button']['border-radius']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][border-top-width]" data-default="<?php echo $default['next_button']['border-top-width']; ?>" type="text" value="<?php echo $options['next_button']['border-top-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][border-bottom-width]" data-default="<?php echo $default['next_button']['border-bottom-width']; ?>" type="text" value="<?php echo $options['next_button']['border-bottom-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][border-left-width]" data-default="<?php echo $default['next_button']['border-left-width']; ?>" type="text" value="<?php echo $options['next_button']['border-left-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][next_button][border-right-width]" data-default="<?php echo $default['next_button']['border-right-width']; ?>" type="text" value="<?php echo $options['next_button']['border-right-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
    </tr>
    <tr>
        <th><?php _e( 'Previous button position', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Previous button size', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Previous border width', 'product-preview-for-woocommerce' ) ?></th>
        <th><?php _e( 'Previous and next icon position', 'product-preview-for-woocommerce' ) ?></th>
    </tr>
    <tr>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][top]" data-default="<?php echo $default['prev_button']['top']; ?>" type="text" value="<?php echo $options['prev_button']['top']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][bottom]" data-default="<?php echo $default['prev_button']['bottom']; ?>" type="text" value="<?php echo $options['prev_button']['bottom']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][left]" data-default="<?php echo $default['prev_button']['left']; ?>" type="text" value="<?php echo $options['prev_button']['left']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][right]" data-default="<?php echo $default['prev_button']['right']; ?>" type="text" value="<?php echo $options['prev_button']['right']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Height', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][height]" data-default="<?php echo $default['prev_button']['height']; ?>" type="text" value="<?php echo $options['prev_button']['height']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Width', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][width]" data-default="<?php echo $default['prev_button']['width']; ?>" type="text" value="<?php echo $options['prev_button']['width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Font size', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][font-size]" data-default="<?php echo $default['prev_button']['font-size']; ?>" type="text" value="<?php echo $options['prev_button']['font-size']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Border radius', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][border-radius]" data-default="<?php echo $default['prev_button']['border-radius']; ?>" type="text" value="<?php echo $options['prev_button']['border-radius']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][border-top-width]" data-default="<?php echo $default['prev_button']['border-top-width']; ?>" type="text" value="<?php echo $options['prev_button']['border-top-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][border-bottom-width]" data-default="<?php echo $default['prev_button']['border-bottom-width']; ?>" type="text" value="<?php echo $options['prev_button']['border-bottom-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][border-left-width]" data-default="<?php echo $default['prev_button']['border-left-width']; ?>" type="text" value="<?php echo $options['prev_button']['border-left-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <input name="<?php echo $settings_name; ?>[style_settings][prev_button][border-right-width]" data-default="<?php echo $default['prev_button']['border-right-width']; ?>" type="text" value="<?php echo $options['prev_button']['border-right-width']; ?>">
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
        <td>
            <p><?php _e( 'Previous vertical align', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <select name="<?php echo $settings_name; ?>[style_settings][prev_button][vertical-align]" data-default="<?php echo $default['prev_button']['vertical-align']; ?>">
                <option value="top"<?php if ( @ $options['prev_button']['vertical-align'] == 'top' ) { echo ' selected'; } ?> ><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></option>
                <option value="middle"<?php if ( ! @ $options['prev_button']['vertical-align'] || @ $options['prev_button']['vertical-align'] == 'middle' ) { echo ' selected'; } ?> ><?php _e( 'Middle', 'product-preview-for-woocommerce' ) ?></option>
                <option value="bottom"<?php if ( @ $options['prev_button']['vertical-align'] == 'bottom' ) { echo ' selected'; } ?> ><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></option>
            </select>
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Previous horizontal align', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <select name="<?php echo $settings_name; ?>[style_settings][prev_button][text-align]" data-default="<?php echo $default['prev_button']['text-align']; ?>">
                <option value="left"<?php if ( @ $options['prev_button']['text-align'] == 'left' ) { echo ' selected'; } ?> ><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></option>
                <option value="center"<?php if ( ! @ $options['prev_button']['text-align'] || @ $options['prev_button']['text-align'] == 'center' ) { echo ' selected'; } ?> ><?php _e( 'Center', 'product-preview-for-woocommerce' ) ?></option>
                <option value="right"<?php if ( @ $options['prev_button']['text-align'] == 'right' ) { echo ' selected'; } ?> ><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></option>
            </select>
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Next vertical align', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <select name="<?php echo $settings_name; ?>[style_settings][next_button][vertical-align]" data-default="<?php echo $default['next_button']['vertical-align']; ?>">
                <option value="top"<?php if ( @ $options['next_button']['vertical-align'] == 'top' ) { echo ' selected'; } ?> ><?php _e( 'Top', 'product-preview-for-woocommerce' ) ?></option>
                <option value="middle"<?php if ( ! @ $options['next_button']['vertical-align'] || @ $options['next_button']['vertical-align'] == 'middle' ) { echo ' selected'; } ?> ><?php _e( 'Middle', 'product-preview-for-woocommerce' ) ?></option>
                <option value="bottom"<?php if ( @ $options['next_button']['vertical-align'] == 'bottom' ) { echo ' selected'; } ?> ><?php _e( 'Bottom', 'product-preview-for-woocommerce' ) ?></option>
            </select>
            <a class="button br_default_input" href="#default">Default</a>
            </p>
            <p><?php _e( 'Next horizontal align', 'product-preview-for-woocommerce' ) ?></p>
            <p>
            <select name="<?php echo $settings_name; ?>[style_settings][next_button][text-align]" data-default="<?php echo $default['next_button']['text-align']; ?>">
                <option value="left"<?php if ( @ $options['next_button']['text-align'] == 'left' ) { echo ' selected'; } ?> ><?php _e( 'Left', 'product-preview-for-woocommerce' ) ?></option>
                <option value="center"<?php if ( ! @ $options['next_button']['text-align'] || $options['next_button']['text-align'] == 'center' ) { echo ' selected'; } ?> ><?php _e( 'Center', 'product-preview-for-woocommerce' ) ?></option>
                <option value="right"<?php if ( @ $options['next_button']['text-align'] == 'right' ) { echo ' selected'; } ?> ><?php _e( 'Right', 'product-preview-for-woocommerce' ) ?></option>
            </select>
            <a class="button br_default_input" href="#default">Default</a>
            </p>
        </td>
    </tr>
</table>
<a class="button set_all_to_default">Set all to default</a>
