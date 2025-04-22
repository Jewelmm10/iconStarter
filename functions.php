<?php
/**
 * icon_starter engine room
 *
 * @package icon_starter
 */

require_once __DIR__ . '/inc/helpers/autoloader.php';
require_once __DIR__ . '/inc/init.php';

/**
 * The main theme class
 */
final class icon_starter {

    /**
     * Class constructor
     */
    private function __construct() {
        $this->define_constants();

        // Initialize theme setup
        add_action( 'after_setup_theme', [ $this, 'init_theme' ] );
    }

    /**
     * Initializes a singleton instance
     *
     * @return \icon_starter
     */
    public static function init() {
        static $instance = false;

        if ( ! $instance ) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * Define the required theme constants
     *
     * @return void
     */
    public function define_constants() {
        
        define( 'ICON_STARTER_FILE', __FILE__ );
        define( 'ICON_STARTER_PATH', __DIR__ );
        define( 'ICON_STARTER_URL', get_template_directory_uri() );
        define( 'ICON_STARTER_ASSETS', ICON_STARTER_URL . '/assets' );
    }

    /**
     * Initialize the theme
     *
     * @return void
     */
    public function init_theme() {
        // Initialize the theme class here, ensuring early execution
        
        new ICON_STARTER\Inc\THEME();
        new ICON_STARTER\Inc\ASSETS();
        new ICON_STARTER\Inc\Elementor\ADDONS();
    }
}

/**
 * Initializes the main theme
 *
 * @return \icon_starter
 */
function icon_starter() {
    return icon_starter::init();
}

// Kick-off the theme
icon_starter();

// Register the shortcode
function form_shortcode() {
    ob_start();
    ?>
<form method="post">
    <p>
        <label for="username">Username:</label>
        <input type="text" name="korim2_username" required />
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="email" name="korim2_email" required />
    </p>
    <p>
        <button type="submit" name="form_submit">Submit</button>
    </p>
</form>
<?php
    return ob_get_clean();
}
add_shortcode('text_form', 'form_shortcode');


add_action('init', 'handle_form_submit');
function handle_form_submit() {
    if (isset($_POST['form_submit'])) {
        $name = sanitize_text_field($_POST['korim2_username']);
        $email = sanitize_email($_POST['korim2_email']);

        // Database credentials (same server)
        $servername = 'localhost';
        $dbuser = 'edbdserv_fortune';
        $dbpass = ']aoAEN+6NW#{';
        $dbname = 'edbdserv_fortune';

        // Connect to korim2 database
        $mysqli = new mysqli($servername, $dbuser, $dbpass, $dbname);

        if ($mysqli->connect_error) {
            error_log("DB connection failed: " . $mysqli->connect_error);
            return;
        }

        $stmt = $mysqli->prepare("INSERT INTO tig_user (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email);
        $stmt->execute();

        $stmt->close();
        $mysqli->close();
    }
}