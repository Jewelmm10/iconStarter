<?php
/**
 * Register Meta Boxes
 *
 * @package theme
 */


/**
 * Class Meta_Boxes
 */
class themeMetaBox {
    private static $instance = null;
    private $meta_id;
    private $meta_title;
    private $post_type;
    private $fields = array();

    private function __construct($meta_id, $meta_title, $post_type) {
        $this->meta_id    = $meta_id;
        $this->meta_title = $meta_title;
        $this->post_type      = $post_type;

        add_action('add_meta_boxes', array($this, 'addMetaBox'));
        add_action('save_post', array($this, 'saveMetaBoxData'));
    }


    public static function init($meta_id, $meta_title, $post_type) {
        if (null === self::$instance) {
            self::$instance = array();
        }

        if (!isset(self::$instance[$meta_id])) {
            self::$instance[$meta_id] = new self($meta_id, $meta_title, $post_type);
        }
        
        return self::$instance[$meta_id];
    }

    public function addField($field_id, $field_label, $field_type = 'text', $field_options = array()) {
        $this->fields[] = array(
            'id'    => $field_id,
            'label' => $field_label,
            'type'  => $field_type,
            'options' => $field_options, // Add options for select dropdown
        );
    }

    public function addMetaBox() {
        add_meta_box(
            $this->meta_id,
            $this->meta_title,
            array($this, 'renderMetaBox'),
            $this->post_type,
            'advanced',
            'high'
        );
    }

    public function renderMetaBox($post) {
        wp_nonce_field(basename(__FILE__), $this->meta_id . '_nonce');
        ?>
		<table class="form-table">
        <?php
        foreach ($this->fields as $field) {
            $meta_value = get_post_meta($post->ID, $field['id'], true);
        ?>           
            
	        <!--  -->
	        <tr>
                <th><label for="<?php echo esc_attr($field['id']); ?>"><?php echo esc_html($field['label']); ?></label></th>
                <td>
                <?php if ($field['type'] === 'select'): ?>
                    <select style="width: 22rem" name="<?php echo esc_attr($field['id']); ?>" id="<?php echo esc_attr($field['id']); ?>">
                        <?php foreach ($field['options'] as $option_value => $option_label): ?>
                            <option value="<?php echo esc_attr($option_value); ?>" <?php selected($meta_value, $option_value); ?>><?php echo esc_html($option_label); ?></option>
                        <?php endforeach; ?>
                    </select>
                 <?php elseif ($field['type'] === 'file'): ?>
                    <input type="text" id="<?php echo esc_attr($field['id']); ?>" name="<?php echo esc_attr($field['id']); ?>" value="<?php echo esc_attr($meta_value); ?>" />
                    <button class="upload-pdf button">Upload PDF</button>
                <?php elseif ($field['type'] === 'date'): ?>
                    <input type="date" id="<?php echo esc_attr($field['id']); ?>" name="<?php echo esc_attr($field['id']); ?>" value="<?php echo esc_attr($meta_value); ?>" />
                <?php else: ?>
                    <input class="regular-text" type="<?php echo esc_attr($field['type']); ?>" name="<?php echo esc_attr($field['id']); ?>" id="<?php echo esc_attr($field['id']); ?>" value="<?php echo esc_attr($meta_value); ?>" />
                <?php endif; ?>
                </td>
            </tr>
        <?php
        }

        ?>
		</table>
        <?php
    }

    public function saveMetaBoxData($post_id) {
        if (!isset($_POST[$this->meta_id . '_nonce'])) {
            return;
        }

        if (!wp_verify_nonce($_POST[$this->meta_id . '_nonce'], basename(__FILE__))) {
            return;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        if ('product' !== $_POST['post_type']) {
            return;
        }

        foreach ($this->fields as $field) {
            if ($field['type'] === 'file' && isset($_POST[$field['id']])) {
                $file_url = sanitize_text_field($_POST[$field['id']]);
                update_post_meta($post_id, $field['id'], $file_url);
            } elseif (isset($_POST[$field['id']])) {
                update_post_meta($post_id, $field['id'], sanitize_text_field($_POST[$field['id']]));
            }

        }
    }
}

//basic information
//$basic = themeMetaBox::init('basic_meta', 'Basic Information', 'product');
//$basic->addField('isbn','ISBN Number','text');



