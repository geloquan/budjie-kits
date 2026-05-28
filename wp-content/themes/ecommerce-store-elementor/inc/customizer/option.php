<?php
/**
 * Theme Options.
 *
 * @package ecommerce_store_elementor
 */

$default = ecommerce_store_elementor_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'ecommerce_store_elementor_theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Typography Section.

$ecommerce_store_elementor_font_array = array(
	''                       => 'No Fonts',
	'Abril Fatface'          => 'Abril Fatface',
	'Acme'                   => 'Acme',
	'Anton'                  => 'Anton',
	'Architects Daughter'    => 'Architects Daughter',
	'Arimo'                  => 'Arimo',
	'Arsenal'                => 'Arsenal',
	'Arvo'                   => 'Arvo',
	'Alegreya'               => 'Alegreya',
	'Alfa Slab One'          => 'Alfa Slab One',
	'Averia Serif Libre'     => 'Averia Serif Libre',
	'Bangers'                => 'Bangers',
	'Boogaloo'               => 'Boogaloo',
	'Bad Script'             => 'Bad Script',
	'Bitter'                 => 'Bitter',
	'Bree Serif'             => 'Bree Serif',
	'BenchNine'              => 'BenchNine',
	'Cabin'                  => 'Cabin',
	'Cardo'                  => 'Cardo',
	'Courgette'              => 'Courgette',
	'Cherry Swash'           => 'Cherry Swash',
	'Cormorant Garamond'     => 'Cormorant Garamond',
	'Crimson Text'           => 'Crimson Text',
	'Cuprum'                 => 'Cuprum',
	'Cookie'                 => 'Cookie',
	'Chewy'                  => 'Chewy',
	'Days One'               => 'Days One',
	'Dosis'                  => 'Dosis',
	'Droid Sans'             => 'Droid Sans',
	'Economica'              => 'Economica',
	'Fredoka One'            => 'Fredoka One',
	'Fjalla One'             => 'Fjalla One',
	'Francois One'           => 'Francois One',
	'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
	'Gloria Hallelujah'      => 'Gloria Hallelujah',
	'Great Vibes'            => 'Great Vibes',
	'Handlee'                => 'Handlee',
	'Hammersmith One'        => 'Hammersmith One',
	'Inconsolata'            => 'Inconsolata',
	'Indie Flower'           => 'Indie Flower',
	'IM Fell English SC'     => 'IM Fell English SC',
	'Julius Sans One'        => 'Julius Sans One',
	'Josefin Slab'           => 'Josefin Slab',
	'Josefin Sans'           => 'Josefin Sans',
	'Kanit'                  => 'Kanit',
	'Lobster'                => 'Lobster',
	'Lato'                   => 'Lato',
	'Lora'                   => 'Lora',
	'Libre Baskerville'      => 'Libre Baskerville',
	'Lobster Two'            => 'Lobster Two',
	'Merriweather'           => 'Merriweather',
	'Monda'                  => 'Monda',
	'Montserrat'             => 'Montserrat',
	'Muli'                   => 'Muli',
	'Marck Script'           => 'Marck Script',
	'Noto Serif'             => 'Noto Serif',
	'Open Sans'              => 'Open Sans',
	'Overpass'               => 'Overpass',
	'Overpass Mono'          => 'Overpass Mono',
	'Oxygen'                 => 'Oxygen',
	'Orbitron'               => 'Orbitron',
	'Patua One'              => 'Patua One',
	'Pacifico'               => 'Pacifico',
	'Padauk'                 => 'Padauk',
	'Playball'               => 'Playball',
	'Playfair Display'       => 'Playfair Display',
	'PT Sans'                => 'PT Sans',
	'Philosopher'            => 'Philosopher',
	'Permanent Marker'       => 'Permanent Marker',
	'Poiret One'             => 'Poiret One',
	'Quicksand'              => 'Quicksand',
	'Quattrocento Sans'      => 'Quattrocento Sans',
	'Raleway'                => 'Raleway',
	'Rubik'                  => 'Rubik',
	'Rokkitt'                => 'Rokkitt',
	'Russo One'              => 'Russo One',
	'Righteous'              => 'Righteous',
	'Slabo'                  => 'Slabo',
	'Source Sans Pro'        => 'Source Sans Pro',
	'Shadows Into Light Two' => 'Shadows Into Light Two',
	'Shadows Into Light'     => 'Shadows Into Light',
	'Sacramento'             => 'Sacramento',
	'Shrikhand'              => 'Shrikhand',
	'Tangerine'              => 'Tangerine',
	'Ubuntu'                 => 'Ubuntu',
	'VT323'                  => 'VT323',
	'Varela Round'           => 'Varela Round',
	'Vampiro One'            => 'Vampiro One',
	'Vollkorn'               => 'Vollkorn',
	'Volkhov'                => 'Volkhov',
	'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
);

$wp_customize->add_section( 'ecommerce_store_elementor_typography',
	array(
	'title'      => __( 'Typography', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_body_font_family]',
	array(
	'default'           => $default['ecommerce_store_elementor_body_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_body_font_family]',
	array(
	'label'    => __( 'Body font family', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'select',
	'choices'  => $ecommerce_store_elementor_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h1_font_family]',
	array(
	'default'           => $default['ecommerce_store_elementor_h1_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h1_font_family]',
	array(
	'label'    => __( 'H1 font family', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'select',
	'choices'  => $ecommerce_store_elementor_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h1_font_size]',
	array(
	'default'           => $default['ecommerce_store_elementor_h1_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h1_font_size]',
	array(
	'label'    => __( 'H1 Font Size', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h2_font_family]',
	array(
	'default'           => $default['ecommerce_store_elementor_h2_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h2_font_family]',
	array(
	'label'    => __( 'H2 font family', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'select',
	'choices'  => $ecommerce_store_elementor_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h2_font_size]',
	array(
	'default'           => $default['ecommerce_store_elementor_h2_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h2_font_size]',
	array(
	'label'    => __( 'H2 Font Size', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h3_font_family]',
	array(
	'default'           => $default['ecommerce_store_elementor_h3_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h3_font_family]',
	array(
	'label'    => __( 'H3 font family', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'select',
	'choices'  => $ecommerce_store_elementor_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h3_font_size]',
	array(
	'default'           => $default['ecommerce_store_elementor_h3_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h3_font_size]',
	array(
	'label'    => __( 'H3 Font Size', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h4_font_family]',
	array(
	'default'           => $default['ecommerce_store_elementor_h4_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h4_font_family]',
	array(
	'label'    => __( 'H4 font family', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'select',
	'choices'  => $ecommerce_store_elementor_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h4_font_size]',
	array(
	'default'           => $default['ecommerce_store_elementor_h4_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h4_font_size]',
	array(
	'label'    => __( 'H4 Font Size', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h5_font_family]',
	array(
	'default'           => $default['ecommerce_store_elementor_h5_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h5_font_family]',
	array(
	'label'    => __( 'H5 font family', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'select',
	'choices'  => $ecommerce_store_elementor_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h5_font_size]',
	array(
	'default'           => $default['ecommerce_store_elementor_h5_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h5_font_size]',
	array(
	'label'    => __( 'H5 Font Size', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h6_font_family]',
	array(
	'default'           => $default['ecommerce_store_elementor_h6_font_family'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_choices',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h6_font_family]',
	array(
	'label'    => __( 'H6 font family', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'select',
	'choices'  => $ecommerce_store_elementor_font_array,
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_h6_font_size]',
	array(
	'default'           => $default['ecommerce_store_elementor_h6_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_h6_font_size]',
	array(
	'label'    => __( 'H6 Font Size', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_typography',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Site title And tagline Option

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_site_title_font_size]',
	array(
	'default'           => $default['ecommerce_store_elementor_site_title_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_site_title_font_size]',
	array(
	'label'    => __( 'Site Title Font Size', 'ecommerce-store-elementor' ),
	'section'  => 'title_tagline',
	'type'     => 'text',
	'priority' => 10,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_site_tagline_font_size]',
	array(
	'default'           => $default['ecommerce_store_elementor_site_tagline_font_size'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_site_tagline_font_size]',
	array(
	'label'    => __( 'Site Tagline Font Size', 'ecommerce-store-elementor' ),
	'section'  => 'title_tagline',
	'type'     => 'text',
	'priority' => 10,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_site_title_color]', array(
	'default'           => $default['ecommerce_store_elementor_site_title_color'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
	'priority' => 100,
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[ecommerce_store_elementor_site_title_color]', array(
	'label'       => __( 'Site Title Color', 'ecommerce-store-elementor' ),
	'section'     => 'title_tagline',
	'settings'    => 'theme_options[ecommerce_store_elementor_site_title_color]',
	'priority' => 10,
)));

// Premium features for site title
$wp_customize->add_setting( 'ecommerce_store_elementor_logo_premium_features', array(
    'default'           => '',
    'sanitize_callback' => 'wp_kses_post',
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ecommerce_store_elementor_logo_premium_features', array(
        'section'  => 'title_tagline',
        'priority' => 40,
        'type'        => 'hidden',
        'label'    => '',
        'description' => wp_kses_post('<div style="background:#ffffff; border-radius:10px; padding:18px 20px; border-left:5px solid #2271b1; box-shadow:0 3px 10px rgba(0,0,0,0.08) margin-top:10px;"><h3 style="color: #2271b1; margin-top:0; font-size:15px; margin-bottom:12px; font-weight:600;">'. esc_html__( 'Unlock Premium Features', 'ecommerce-store-elementor' ) . '</h3><ul style="margin:0 0 18px 20px; padding:0; color:#333; line-height:1.7;"><li style="list-style-type: lower-greek;">' . esc_html__( 'Advanced Logo Controls', 'ecommerce-store-elementor' ) . '</li><li style="list-style-type: lower-greek;">'. esc_html__( 'Extended Typography Options', 'ecommerce-store-elementor' ) . '</li><li style="list-style-type: lower-greek;">'. esc_html__( 'Premium Header Layouts', 'ecommerce-store-elementor' ) . '</li><li style="list-style-type: lower-greek;">'. esc_html__( 'More Pro-Level Options', 'ecommerce-store-elementor' ) . '</li></ul><a href="'. esc_html(__( 'https://www.mizanthemes.com/products/ecommerce-store-wordpress-theme/', 'ecommerce-store-elementor') ) . '"  target="_blank" style="display:inline-block; padding:10px 22px; background:linear-gradient(135deg, #2592ebff, #1e4cb1ff); color:#fff; border-radius:6px;">'. esc_html__( 'Upgrade Now', 'ecommerce-store-elementor' ) . '<span style="margin-left:8px; font-weight:700;">➜</span></a></div>'),
    )
) );

// Global Color

$wp_customize->add_section( 'ecommerce_store_elementor_section_global_color', array(
	'title'      => __( 'Theme Color', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
));

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_first_color]', array(
	'default'           => $default['ecommerce_store_elementor_first_color'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[ecommerce_store_elementor_first_color]', array(
	'label'       => __( 'Highlight Color', 'ecommerce-store-elementor' ),
	'description' => __( 'With a single click, you can change the highlight color of the inner page; use the Elementor editor for customization on the homepage.', 'ecommerce-store-elementor' ),
	'section'     => 'ecommerce_store_elementor_section_global_color',
	'settings'    => 'theme_options[ecommerce_store_elementor_first_color]',
)));

// General Option.
$wp_customize->add_section( 'ecommerce_store_elementor_section_general_option',
	array(
	'title'      => __( 'General Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

//Wow Animation
$wp_customize->add_setting(
    'ecommerce_store_elementor_animation',
    array(
        'default' => $default['ecommerce_store_elementor_animation'],
        'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'ecommerce_store_elementor_animation',
    array(
        'label' => esc_html__('Enable  Animation', 'ecommerce-store-elementor'),
        'section' => 'ecommerce_store_elementor_section_general_option',
        'type' => 'checkbox',
    )
);

// Progress Bar
$wp_customize->add_setting(
    'theme_options[ecommerce_store_elementor_progress_bar]',
    array(
        'default' => $default['ecommerce_store_elementor_progress_bar'],
        'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'theme_options[ecommerce_store_elementor_progress_bar]',
    array(
        'label' => esc_html__('Enable or Disable Progress Bar', 'ecommerce-store-elementor'),
        'section' => 'ecommerce_store_elementor_section_general_option',
        'type' => 'checkbox',
    )
);

// Cursor Dot Outline

$wp_customize->add_setting(
    'theme_options[ecommerce_store_elementor_enable_cursor_dot_outline]',
    array(
        'default' => $default['ecommerce_store_elementor_enable_cursor_dot_outline'],
        'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'theme_options[ecommerce_store_elementor_enable_cursor_dot_outline]',
    array(
        'label' => esc_html__('Enable Cursor Dot Outline', 'ecommerce-store-elementor'),
        'section' => 'ecommerce_store_elementor_section_general_option',
        'type' => 'checkbox',
    )
);

// Setting show scroll to top.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_scroll_to_top]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_scroll_to_top'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_scroll_to_top]',
	array(
	'label'    => __( 'Show Scroll To Top', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Preloader.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_preloader_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_preloader_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_preloader_setting]',
	array(
	'label'    => __( 'Show Preloader', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Sticky Header.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_data_sticky_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_data_sticky_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_data_sticky_setting]',
	array(
	'label'    => __( 'Show Sticky Header', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_general_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Post Option.
$wp_customize->add_section( 'ecommerce_store_elementor_section_post_option',
	array(
	'title'      => __( 'Post Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

// Setting show Post date.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_date_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_date_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_date_setting]',
	array(
	'label'    => __( 'Show Post Date', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Heading.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_heading_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_heading_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_heading_setting]',
	array(
	'label'    => __( 'Show Post Heading', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Content.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_content_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_content_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_content_setting]',
	array(
	'label'    => __( 'Show Post Full Content', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post admin.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_admin_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_admin_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_admin_setting]',
	array(
	'label'    => __( 'Show Post Admin', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Categories.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_categories_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_categories_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_categories_setting]',
	array(
	'label'    => __( 'Show Post Categories', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Comments.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_comments_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_comments_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_comments_setting]',
	array(
	'label'    => __( 'Show Post Comments', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Featured Image.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_featured_image_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_featured_image_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_featured_image_setting]',
	array(
	'label'    => __( 'Show Post Featured Image', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show Post Tags.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_post_tags_setting]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_post_tags_setting'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_post_tags_setting]',
	array(
	'label'    => __( 'Show Post Tags', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_post_option',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Related post

$wp_customize->add_section( 'ecommerce_store_elementor_related_post_option',
	array(
	'title'      => __( 'Related Post Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

$wp_customize->add_setting(
    'theme_options[ecommerce_store_elementor_enable_related_post]',
    array(
        'default' => $default['ecommerce_store_elementor_enable_related_post'],
        'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'theme_options[ecommerce_store_elementor_enable_related_post]',
    array(
        'label' => esc_html__('Enable Related post', 'ecommerce-store-elementor'),
        'section' => 'ecommerce_store_elementor_related_post_option',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'theme_options[ecommerce_store_elementor_enable_related_post_image]',
    array(
        'default' => $default['ecommerce_store_elementor_enable_related_post_image'],
        'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'theme_options[ecommerce_store_elementor_enable_related_post_image]',
    array(
        'label' => esc_html__('Enable Related post Image', 'ecommerce-store-elementor'),
        'section' => 'ecommerce_store_elementor_related_post_option',
        'type' => 'checkbox',
    )
);

// Header Section.
$wp_customize->add_section( 'ecommerce_store_elementor_section_header',
	array(
	'title'      => __( 'Header Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

// Setting show_title.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_title]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_title]',
	array(
	'label'    => __( 'Show Site Title', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Setting show_tagline.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_show_tagline]',
	array(
	'default'           => $default['ecommerce_store_elementor_show_tagline'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_show_tagline]',
	array(
	'label'    => __( 'Show Tagline', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);


// google translator

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_gtranslate_show]',
	array(
	'default'           => $default['ecommerce_store_elementor_gtranslate_show'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_gtranslate_show]',
	array(
	'label'    => __( 'Show Language Translator', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// currency switcher

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_currency_switcher]',
	array(
	'default'           => $default['ecommerce_store_elementor_currency_switcher'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_currency_switcher]',
	array(
	'label'    => __( 'Show Currency Switcher', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// header product search

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_product_search]',
	array(
	'default'           => $default['ecommerce_store_elementor_product_search'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_product_search]',
	array(
	'label'    => __( 'Show Product search', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Login/ Logout button

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_account_button]',
	array(
	'default'           => $default['ecommerce_store_elementor_account_button'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);

$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_account_button]',
	array(
	'label'    => __( 'Show Login/ Logout button', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Contact button Text

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_contact_button_text]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_contact_button_text]',
	array(
	'label'    => __( 'Contact Button Text', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Contact button link
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_contact_button_link]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_contact_button_link]',
	array(
	'label'    => __( 'Contact Button Link', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'url',
	'priority' => 100,
	)
);

// Setting top header text

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_header_top_text]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_header_top_text]',
	array(
	'label'    => __( 'Add Advertisment Text', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_header',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Premium features box for header section
$wp_customize->add_setting( 'ecommerce_store_elementor_header_premium_features', array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'wp_kses_post',
) );

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ecommerce_store_elementor_header_premium_features', array(
        'section'     => 'ecommerce_store_elementor_section_header',
        'priority'    => 100, 
        'type'        => 'hidden',
        'label'       => '', 
        'description' => wp_kses_post('<div style="background:#ffffff; border-radius:10px; padding:18px 20px; border-left:5px solid #2271b1; box-shadow:0 3px 10px rgba(0,0,0,0.08) margin-top:10px;"><h3 style="color: #2271b1; margin-top:0; font-size:15px; margin-bottom:12px; font-weight:600;">'. esc_html__( 'Unlock Premium Features', 'ecommerce-store-elementor' ) . '</h3><ul style="margin:0 0 18px 20px; padding:0; color:#333; line-height:1.7;"><li style="list-style-type: lower-greek;">' . esc_html__( 'Set custom header colors', 'ecommerce-store-elementor' ) . '</li><li style="list-style-type: lower-greek;">'. esc_html__( 'Fine-tune icon & text sizing', 'ecommerce-store-elementor' ) . '</li><li style="list-style-type: lower-greek;">'. esc_html__( 'Use advanced font styling', 'ecommerce-store-elementor' ) . '</li><li style="list-style-type: lower-greek;">'. esc_html__( 'More Pro-Level Options', 'ecommerce-store-elementor' ) . '</li></ul><a href="'. esc_html(__( 'https://www.mizanthemes.com/products/ecommerce-store-wordpress-theme/', 'ecommerce-store-elementor') ) . '"  target="_blank" style="display:inline-block; padding:10px 22px; background:linear-gradient(135deg, #2592ebff, #1e4cb1ff); color:#fff; border-radius:6px;">'. esc_html__( 'Upgrade Now', 'ecommerce-store-elementor' ) . '<span style="margin-left:8px; font-weight:700;">➜</span></a></div>'),
    )
) );


// Layout Section.
$wp_customize->add_section( 'ecommerce_store_elementor_section_layout',
	array(
	'title'      => __( 'Layout Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

// Setting global_layout.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_global_layout]',
	array(
	'default'           => $default['ecommerce_store_elementor_global_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_global_layout]',
	array(
	'label'    => __( 'Global Layout', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_layout',
	'type'     => 'select',
	'choices'  => ecommerce_store_elementor_get_global_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_layout.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_archive_layout]',
	array(
	'default'           => $default['ecommerce_store_elementor_archive_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_archive_layout]',
	array(
	'label'    => __( 'Archive Layout', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_layout',
	'type'     => 'select',
	'choices'  => ecommerce_store_elementor_get_archive_layout_options(),
	'priority' => 100,
	)
);

// Setting archive_image.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_archive_image]',
	array(
	'default'           => $default['ecommerce_store_elementor_archive_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_archive_image]',
	array(
	'label'    => __( 'Image in Archive', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_layout',
	'type'     => 'select',
	'choices'  => ecommerce_store_elementor_get_image_sizes_options( true, array( 'disable', 'thumbnail', 'medium', 'large' ), false ),
	'priority' => 100,
	)
);
// Setting archive_image_alignment.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_archive_image_alignment]',
	array(
	'default'           => $default['ecommerce_store_elementor_archive_image_alignment'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_archive_image_alignment]',
	array(
	'label'           => __( 'Image Alignment in Archive', 'ecommerce-store-elementor' ),
	'section'         => 'ecommerce_store_elementor_section_layout',
	'type'            => 'select',
	'choices'         => ecommerce_store_elementor_get_image_alignment_options(),
	'priority'        => 100,
	'active_callback' => 'ecommerce_store_elementor_is_image_in_archive_active',
	)
);
// Setting single_image.
$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_single_image]',
	array(
	'default'           => $default['ecommerce_store_elementor_single_image'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_select',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_single_image]',
	array(
	'label'    => __( 'Image in Single Post/Page', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_layout',
	'type'     => 'select',
	'choices'  => ecommerce_store_elementor_get_image_sizes_options( true, array( 'disable', 'large' ), false ),
	'priority' => 100,
	)
);

// No Results Page Setting

$wp_customize->add_section( 'ecommerce_store_elementor_no_result_page',
	array(
	'title'      => __( 'No Results Page Settings', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_no_result_title]',
	array(
	'default'           => $default['ecommerce_store_elementor_no_result_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_no_result_title]',
	array(
	'label'    => __( 'Add Title', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_no_result_page',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_no_result_text]',
	array(
	'default'           => $default['ecommerce_store_elementor_no_result_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_no_result_text]',
	array(
	'label'    => __( 'Add Text', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_no_result_page',
	'type'     => 'text',
	'priority' => 100,
	)
);

// 404 Page Setting

$wp_customize->add_section( 'ecommerce_store_elementor_404_page',
	array(
	'title'      => __( '404 Page Settings', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_404_page_title]',
	array(
	'default'           => $default['ecommerce_store_elementor_404_page_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_404_page_title]',
	array(
	'label'    => __( 'Add Title', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_404_page',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_404_page_text]',
	array(
	'default'           => $default['ecommerce_store_elementor_404_page_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_404_page_text]',
	array(
	'label'    => __( 'Add Text', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_404_page',
	'type'     => 'text',
	'priority' => 100,
	)
);

// No Results Page Setting

$wp_customize->add_section( 'ecommerce_store_elementor_no_result_page',
	array(
	'title'      => __( 'No Results Page Settings', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_no_result_title]',
	array(
	'default'           => $default['ecommerce_store_elementor_no_result_title'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_no_result_title]',
	array(
	'label'    => __( 'Add Title', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_no_result_page',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_no_result_text]',
	array(
	'default'           => $default['ecommerce_store_elementor_no_result_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_no_result_text]',
	array(
	'label'    => __( 'Add Text', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_no_result_page',
	'type'     => 'text',
	'priority' => 100,
	)
);

// Footer Section.
$wp_customize->add_section( 'ecommerce_store_elementor_section_footer',
	array(
	'title'      => __( 'Footer Options', 'ecommerce-store-elementor' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'ecommerce_store_elementor_theme_option_panel',
	)
);

// Setting copyright_text.

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_copyright_text]',
	array(
	'default'           => $default['ecommerce_store_elementor_copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_textarea_content',
	'transport'         => 'postMessage',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_copyright_text]',
	array(
	'label'    => __( 'Copyright Text', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_footer',
	'type'     => 'text',
	'priority' => 100,
	)
);

$wp_customize->add_setting('theme_options[ecommerce_store_elementor_copyright_text_align]',
	array(
	'capability'        => 'edit_theme_options',
	'default' 			=> $default['ecommerce_store_elementor_copyright_text_align'],
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_choices'
));
$wp_customize->add_control('theme_options[ecommerce_store_elementor_copyright_text_align]',array(
	'type' => 'radio',
	'label' => __('Copyright Text Alignment','ecommerce-store-elementor'),
	'section' => 'ecommerce_store_elementor_section_footer',
	'priority' => 100,
	'choices' => array(
		'left' => __('Left Align','ecommerce-store-elementor'),
		'right' => __('Right Align','ecommerce-store-elementor'),
		'center' => __('Center Align','ecommerce-store-elementor'),
	),
) );

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_copyright_text_font_size]',
	array(
	'capability'        => 'edit_theme_options',
	'default'           => $default['ecommerce_store_elementor_copyright_text_font_size'],
	'transport'            => 'refresh',
    'sanitize_callback'    => 'absint',
    'sanitize_js_callback' => 'absint',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_copyright_text_font_size]',
	array(
	'label'    => __( 'Copyright Font Size', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_footer',
	'type'     => 'number',
	'priority' => 100,
	)
);

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_copyright_background_color]', array(
	'default'           => $default['ecommerce_store_elementor_copyright_background_color'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
	'priority' => 100,
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[ecommerce_store_elementor_copyright_background_color]', array(
	'label'       => __( 'Copyright background Color', 'ecommerce-store-elementor' ),
	'section'     => 'ecommerce_store_elementor_section_footer',
	'settings'    => 'theme_options[ecommerce_store_elementor_copyright_background_color]',
	'priority' => 100,
)));

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_copyright_text_color]', array(
	'default'           => $default['ecommerce_store_elementor_copyright_text_color'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
	'priority' => 100,
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_options[ecommerce_store_elementor_copyright_text_color]', array(
	'label'       => __( 'Copyright Text Color', 'ecommerce-store-elementor' ),
	'section'     => 'ecommerce_store_elementor_section_footer',
	'settings'    => 'theme_options[ecommerce_store_elementor_copyright_text_color]',
	'priority' => 100,
)));

$wp_customize->add_setting( 'theme_options[ecommerce_store_elementor_copyright_sticky]',
	array(
	'default'           => $default['ecommerce_store_elementor_copyright_sticky'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'ecommerce_store_elementor_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'theme_options[ecommerce_store_elementor_copyright_sticky]',
	array(
	'label'    => __( 'Show Sticky Copyright', 'ecommerce-store-elementor' ),
	'section'  => 'ecommerce_store_elementor_section_footer',
	'type'     => 'checkbox',
	'priority' => 100,
	)
);

// Premium features box for footer section
$wp_customize->add_setting( 'ecommerce_store_elementor_footer_premium_features', array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'wp_kses_post',
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize,'ecommerce_store_elementor_footer_premium_features', array(
        'section'     => 'ecommerce_store_elementor_section_footer',
        'priority'    => 100,
        'type'        => 'hidden', 
        'label'       => '', 
        'description' => wp_kses_post('<div style="background:#ffffff; border-radius:10px; padding:18px 20px; border-left:5px solid #2271b1; box-shadow:0 3px 10px rgba(0,0,0,0.08) margin-top:10px;"><h3 style="color: #2271b1; margin-top:0; font-size:15px; margin-bottom:12px; font-weight:600;">'. esc_html__( 'Unlock Premium Features', 'ecommerce-store-elementor' ) . '</h3><ul style="margin:0 0 18px 20px; padding:0; color:#333; line-height:1.7;"><li style="list-style-type: lower-greek;">' . esc_html__( 'Customize your footer layout', 'ecommerce-store-elementor' ) . '</li><li style="list-style-type: lower-greek;">'. esc_html__( 'Add an email signup form', 'ecommerce-store-elementor' ) . '</li><li style="list-style-type: lower-greek;">'. esc_html__( 'Style your social icons', 'ecommerce-store-elementor' ) . '</li><li style="list-style-type: lower-greek;">'. esc_html__( 'More Pro-Level Options', 'ecommerce-store-elementor' ) . '</li></ul><a href="'. esc_html(__( 'https://www.mizanthemes.com/products/ecommerce-store-wordpress-theme/', 'ecommerce-store-elementor') ) . '"  target="_blank" style="display:inline-block; padding:10px 22px; background:linear-gradient(135deg, #2592ebff, #1e4cb1ff); color:#fff; border-radius:6px;">'. esc_html__( 'Upgrade Now', 'ecommerce-store-elementor' ) . '<span style="margin-left:8px; font-weight:700;">➜</span></a></div>'),
    )
) );