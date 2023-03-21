class Daily_Visitors_Widget extends WP_Widget {

// constructor
function __construct() {
  parent::__construct(
    'daily_visitors_widget', // ID of the widget
    __('Daily Visitors Widget', 'daily-visitors-widget'), // name of the widget
    array( 'description' => __( 'Displays the number of daily visitors to your site.', 'daily-visitors-widget' ), ) // widget description
  );
}

// widget output
function widget( $args, $instance ) {
  $visitors_today = wp_statistics_get_current_counts( 'total' );
  echo $args['before_widget'];
  echo $args['before_title'] . __('Daily Visitors', 'daily-visitors-widget') . $args['after_title'];
  echo '<p>' . __('Today\'s visitors:', 'daily-visitors-widget') . ' ' . $visitors_today . '</p>';
  echo $args['after_widget'];
}

}

// register widget
function register_daily_visitors_widget() {
register_widget( 'Daily_Visitors_Widget' );
}
add_action( 'widgets_init', 'register_daily_visitors_widget' );