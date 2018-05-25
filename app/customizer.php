<?php

use IBX\Customizer\Interfaces\ICustomizer;
use IBX\Customizer\Section;
use IBX\Customizer\Fields\Text;
use IBX\Customizer\Fields\Image;
use IBX\Customizer\Fields\Radio;

class ThemeCustomizer implements ICustomizer {
		public static function register( $wp_customize ) {
			$section = new Section($wp_customize);
			$section->setID('theme_header');
			$section->setPrio('1');
			$section->setTitle('Theme: Header Options');
			$section->setDesc('Modify header options');

			$section->addField(new Image($section, 'logo', 'Logo'));
			$section->showVars()->addField(new Text($section, 'tagline', 'Tagline'));
			$section->display();
		}

	  public static function header_output() {
	  	//
	  }

	  public static function live_preview() {
	  	// 
	  }
}

add_action( 'customize_register', ['ThemeCustomizer', 'register'] );