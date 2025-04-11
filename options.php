<?php
// Security check
if (!defined('ABSPATH') || !current_user_can('manage_options')) exit;
?>
<div class="footnotes-settings">
    <h2><?php esc_html_e('Display Settings', 'wp-footnotes'); ?></h2>
    
    <table class="form-table">
        <tr>
            <th><?php esc_html_e('List Style', 'wp-footnotes'); ?></th>
            <td>
                <select name="wp_footnotes_options[list_style_type]" id="list_style_type">
                    <?php foreach ($this->styles as $key => $label) : ?>
                        <option value="<?php echo esc_attr($key); ?>" <?php selected($this->options['list_style_type'], $key); ?>>
                            <?php echo esc_html($label); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        
        <tr id="symbol-setting" style="<?php echo ($this->options['list_style_type'] !== 'symbol') ? 'display:none;' : ''; ?>">
            <th><?php esc_html_e('Custom Symbol', 'wp-footnotes'); ?></th>
            <td>
                <input type="text" name="wp_footnotes_options[list_style_symbol]" 
                       value="<?php echo esc_attr($this->options['list_style_symbol']); ?>">
            </td>
        </tr>
    </table>

    <h2><?php esc_html_e('Advanced Styling', 'wp-footnotes'); ?></h2>
    <textarea name="wp_footnotes_options[style_rules]" 
              class="large-text code" 
              rows="6"><?php echo esc_textarea($this->options['style_rules']); ?></textarea>
</div>
