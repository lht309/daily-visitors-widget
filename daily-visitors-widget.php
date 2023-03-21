class Daily_Visitors_Widget_Plugin {
  
  // constructor
  function __construct() {
    // register actions
    add_action( 'widgets_init', array( $this, 'register_widget' ) );
  }
  
  // register widget
  function register_widget() {
    register_widget( 'Daily_Visitors_Widget' );
  }
  
}

// initialize plugin
$daily_visitors_widget_plugin = new Daily_Visitors_Widget_Plugin();

// include widget file
require_once( plugin_dir_path( __FILE__ ) . 'widget.php' );