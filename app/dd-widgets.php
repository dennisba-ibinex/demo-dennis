<?php

// -----------------------------------------------------------
// 
// 	Table of Contents
// 
//  Widget-001 - My First Widget
// 
// 
// 
// 
// 
// 
// 
// -----------------------------------------------------------


// Widget-001 - My First Widget
class dd_First_Widget extends WP_Widget {
    public function __construct() {
        $widget_options = [
            'classname' => 'first_widget',
            'description' => "This is my first widget - Dennis",
        ];

        parent::__construct( 'first_widget', 'My First Widget', $widget_options);
    }

    public function widget( $args, $instance ) {
    	$title = apply_filters( 'widget_title', $instance[ 'title' ] );
    	$blog_title = get_bloginfo( 'name' );
    	$tagline = get_bloginfo( 'description' );

    	echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>

    	<p><strong>Site Name:</strong> <?php echo $blog_title ?></p>
    	<p><strong>Tagline:</strong> <?php echo $tagline ?></p>

    	<?php echo $args['after_widget'];
    }

    public function form( $instance ) {
    	$title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
    	<div style="text-align: center;"><h4>DENNIS' FIRST WIDGET SETTINGS</h4></div>
    	<p>
    		<label for="<?php echo $this->get_field_id( 'title' ); ?>">TITLE:</label>
    		<input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" style="background-color: #55f20030; width: 100%;">
    	</p>
    	<?php
    }

    public function update( $new_instance, $old_instance ) {
    	$instance = $old_instance;
    	$instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    	return $instance;
    }
}

class dd_Carousel_Widget extends WP_Widget {
	public function __construct() {
		$widget_options = [
			'classname' => 'dd_carousel',
			'Description' => 'Dennis-Demo Carousel based on Bootstrap 4 Carousel',
		];

		parent::__construct( 'dd_carousel', 'Demo-Dennis Carousel', $widget_options );
	}

	public function widget($args, $instance) {
		echo $args['before_widget'] . $args['before_title'] . $args['after_title']; ?>

		<!-- CONTENT STARTS HERE -->
		<div class="carousel slide carousel-fade" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="http://cdn.home-designing.com/wp-content/uploads/2015/11/textured-sofa.jpg" alt="First slide">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Hello, it is a great day today</h5>
		        <h1 class="carousel-caption-2">{{ get_bloginfo('name') }} REAL ESTATE</h1>
		        <div class="carousel-border-triangle">
		          <span></span>
		        </div>
		      </div>
		    </div>

		    <div class="carousel-item">
		      <img class="d-block w-100" src="http://www.yustusa.com/9/2015/08/natural-interior-design-of-the-modern-custom-log-homes-that-has-wooden-floor-can-be-decor-with-warm-lighting-can-add-the-beauty-inside-with-wooden-floor-inside.jpg" alt="Second slide">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Hi, I hope you are doing fine</h5>
		        <h1 class="carousel-caption-2">{{ get_bloginfo('name') }} REAL ESTATE</h1>
		        <div class="carousel-border-triangle">
		          <span></span>
		        </div>
		      </div>
		    </div>

		    <div class="carousel-item">
		      <img class="d-block w-100" src="http://hawaiiopenbudget.com/img/2018/05/cabinets-remodel-decorating-kitchens-ideas-outdoor-dining-photos-kitchen-with-apartments-modern-decorate-granite-new-budget-countertop-floor-homeinteriors-organization-liances-desi.jpg" alt="Third slide">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Let's build great stuff together!</h5>
		        <h1 class="carousel-caption-2">{{ get_bloginfo('name') }} REAL ESTATE</h1>
		        <div class="carousel-border-triangle">
		          <span></span>
		        </div>
		      </div>
		    </div>
		  </div>

		  <a class="carousel-control-prev" href="#homepage-carousel" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#homepage-carousel" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<?php echo $args['after_widget'];
	}
}

// Register all Demo-Dennis Widgets
function register_dd_widgets() { 
  register_widget( 'dd_First_Widget' );
  register_widget( 'dd_Carousel_Widget' );
}
add_action( 'widgets_init', 'register_dd_widgets' );
