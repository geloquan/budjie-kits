<?php

class Whizzie {

	public function __construct() {
		$this->init();
	}

	public function init()
	{
	
	}

	public static function ecommerce_store_elementor_setup_widgets(){

		$ecommerce_store_elementor_options = get_theme_mod('theme_options', []);
        $ecommerce_store_elementor_options['ecommerce_store_elementor_contact_button_link'] = '#';
        $ecommerce_store_elementor_options['ecommerce_store_elementor_contact_button_text'] = 'Contact';
		$ecommerce_store_elementor_options['ecommerce_store_elementor_header_top_text'] = '100% Secure Delivery!';
        set_theme_mod('theme_options', $ecommerce_store_elementor_options);

		$ecommerce_store_elementor_product_image_gallery = array();
		$ecommerce_store_elementor_product_ids = array();
	
		$ecommerce_store_elementor_product_category= array(
			'Latest Headphones'       => array(
				'Headphone 01',
				'Headphone 02',
			),
			'Latest Watch'       => array(
				'Watch 01',
				'Watch 02',
			),
			'Latest Mobile'       => array(
				'Mobile 01',
				'Mobile 02',
			),
		);
	
		$ecommerce_store_elementor_k = 1;
		foreach ( $ecommerce_store_elementor_product_category as $ecommerce_store_elementor_product_cats => $ecommerce_store_elementor_products_name ) { 
		// Insert porduct cats Start
		$content = 'This is sample product category';
		$ecommerce_store_elementor_parent_category	=	wp_insert_term(
		$ecommerce_store_elementor_product_cats, // the term
		'product_cat', // the taxonomy
			array(
			'description'=> $content,
			'slug' => str_replace( ' ', '-', $ecommerce_store_elementor_product_cats)
			)
		);
	
	// -------------- create subcategory END -----------------
	
		$ecommerce_store_elementor_n=1;
		// create Product START
		foreach ( $ecommerce_store_elementor_products_name as $key => $ecommerce_store_elementor_product_title ) {
		$content = '
			<div class="main_content">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>';
	
		// Create post object
		$ecommerce_store_elementor_my_post = array(
			'post_title'    => wp_strip_all_tags( $ecommerce_store_elementor_product_title ),
			'post_content'  => $content,
			'post_status'   => 'publish',
			'post_type'     => 'product',
			'post_category' => [$ecommerce_store_elementor_parent_category['term_id']]
		);
	
		// Insert the post into the database
	
		$ecommerce_store_elementor_uqpost_id = wp_insert_post($ecommerce_store_elementor_my_post);
		wp_set_object_terms( $ecommerce_store_elementor_uqpost_id, str_replace( ' ', '-', $ecommerce_store_elementor_product_cats), 'product_cat', true );
	
		$ecommerce_store_elementor_product_price = array('$600','$600');
		$ecommerce_store_elementor_product_regular_price = array('$600','$600');
		$ecommerce_store_elementor_product_sale_price = array('$400','$400');
		
		update_post_meta( $ecommerce_store_elementor_uqpost_id, '_regular_price', $ecommerce_store_elementor_product_regular_price[$ecommerce_store_elementor_n-1] );
		update_post_meta( $ecommerce_store_elementor_uqpost_id, '_price', $ecommerce_store_elementor_product_price[$ecommerce_store_elementor_n-1] );
		update_post_meta( $ecommerce_store_elementor_uqpost_id, '_sale_price', $ecommerce_store_elementor_product_sale_price[$ecommerce_store_elementor_n-1] );
		array_push( $ecommerce_store_elementor_product_ids,  $ecommerce_store_elementor_uqpost_id );
	
		// Now replace meta w/ new updated value array
		$ecommerce_store_elementor_image_url = get_template_directory_uri().'/images/product/'.$ecommerce_store_elementor_product_cats.'/' . str_replace(' ', '_', strtolower($ecommerce_store_elementor_product_title)).'.png';
		$ecommerce_store_elementor_image_name  = $ecommerce_store_elementor_product_title.'.png';
		$ecommerce_store_elementor_upload_dir = wp_upload_dir();
		// Set upload folder
		$ecommerce_store_elementor_image_data = file_get_contents(esc_url($ecommerce_store_elementor_image_url));
		// Get image data
		$unique_file_name = wp_unique_filename($ecommerce_store_elementor_upload_dir['path'], $ecommerce_store_elementor_image_name);
		// Generate unique name
		$ecommerce_store_elementor_filename = basename($unique_file_name);
		// Create image file name
		// Check folder permission and define file location
		if (wp_mkdir_p($ecommerce_store_elementor_upload_dir['path'])) {
		$ecommerce_store_elementor_file = $ecommerce_store_elementor_upload_dir['path'].'/'.$ecommerce_store_elementor_filename;
		} else {
		$ecommerce_store_elementor_file = $ecommerce_store_elementor_upload_dir['basedir'].'/'.$ecommerce_store_elementor_filename;
		}
		
		file_put_contents($ecommerce_store_elementor_file, $ecommerce_store_elementor_image_data);
		// Check image file type
		$wp_filetype = wp_check_filetype($ecommerce_store_elementor_filename, null);
		// Set attachment data
		$attachment = array(
			'post_mime_type' => $wp_filetype['type'],
			'post_title'     => sanitize_file_name($ecommerce_store_elementor_filename),
			'post_type'      => 'product',
			'post_status'    => 'inherit',
		);
	
		// Create the attachment
		$ecommerce_store_elementor_attach_id = wp_insert_attachment($attachment, $ecommerce_store_elementor_file, $ecommerce_store_elementor_uqpost_id);
	
		// Define attachment metadata
		$attach_data = wp_generate_attachment_metadata($ecommerce_store_elementor_attach_id, $ecommerce_store_elementor_file);
	
		// Assign metadata to attachment
		wp_update_attachment_metadata($ecommerce_store_elementor_attach_id, $attach_data);
		if ( count( $ecommerce_store_elementor_product_image_gallery ) < 3 ) {
			array_push( $ecommerce_store_elementor_product_image_gallery, $ecommerce_store_elementor_attach_id );
		}
		// // And finally assign featured image to post
		set_post_thumbnail($ecommerce_store_elementor_uqpost_id, $ecommerce_store_elementor_attach_id);
		++$ecommerce_store_elementor_n;
		}
		// Create product END
		++$ecommerce_store_elementor_k;
		}
		// Add Gallery in first simple product and second variable product START
		$ecommerce_store_elementor_product_image_gallery = implode( ',', $ecommerce_store_elementor_product_image_gallery );
		foreach ( $ecommerce_store_elementor_product_ids as $ecommerce_store_elementor_product_id ) {
		update_post_meta( $ecommerce_store_elementor_product_id, 'ecommerce_store_elementor_product_image_gallery', $ecommerce_store_elementor_product_image_gallery );
		}

		/* Create Menu */
            $ecommerce_store_elementor_menuname  = 'Primary Menu';
            $ecommerce_store_elementor_location  = 'primary-menu';

            $ecommerce_store_elementor_menu = wp_get_nav_menu_object( $ecommerce_store_elementor_menuname );

            if ( ! $ecommerce_store_elementor_menu ) {
            $ecommerce_store_elementor_menu_id = wp_create_nav_menu( $ecommerce_store_elementor_menuname );

           // Home Page 
			wp_update_nav_menu_item( $ecommerce_store_elementor_menu_id, 0, array(
				'menu-item-title'     => __( 'Home', 'ecommerce-store-elementor' ),
				'menu-item-url'       => home_url( '/' ),
				'menu-item-type'      => 'custom',
				'menu-item-status'    => 'publish',
			) );

			// About Us Page 
			$ecommerce_store_elementor_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'About Us',
			'post_status' => 'publish',
			) );
 
			if ( $ecommerce_store_elementor_about_id ) {
			wp_update_nav_menu_item( $ecommerce_store_elementor_menu_id, 0, array(
			'menu-item-title'     => 'About Us',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $ecommerce_store_elementor_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
			) );
			}

			// Pages Page 
			$ecommerce_store_elementor_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'Pages',
			'post_status' => 'publish',
			) );

			if ( $ecommerce_store_elementor_about_id ) {
			wp_update_nav_menu_item( $ecommerce_store_elementor_menu_id, 0, array(
			'menu-item-title'     => 'Pages',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $ecommerce_store_elementor_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
			) );
			}

			// Man & Women Page 
			$ecommerce_store_elementor_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'Man & Women',
			'post_status' => 'publish',
			) );

			if ( $ecommerce_store_elementor_about_id ) {
			wp_update_nav_menu_item( $ecommerce_store_elementor_menu_id, 0, array(
			'menu-item-title'     => 'Man & Women',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $ecommerce_store_elementor_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
			) );
			}

			// Contact Us Page 
			$ecommerce_store_elementor_about_id = wp_insert_post( array(
			'post_type'   => 'page',
			'post_content' => 'We are committed to providing reliable, professional, and result-oriented solutions tailored to meet individual needs. Our goal is to empower people with the right guidance, knowledge, and support to help them make informed decisions for a better future. <br><br> Our mission is to deliver high-quality services with honesty, transparency, and dedication. We focus on understanding client requirements and offering practical solutions that create long-term value. <br><br> With a client-centric approach, experienced professionals, and a commitment to excellence, we ensure every individual receives the attention and guidance they deserve. We believe in building trust through quality service and consistent results.',
			'post_title'  => 'Contact Us',
			'post_status' => 'publish',
			) );

			if ( $ecommerce_store_elementor_about_id ) {
			wp_update_nav_menu_item( $ecommerce_store_elementor_menu_id, 0, array(
			'menu-item-title'     => 'Contact Us',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $ecommerce_store_elementor_about_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
			) );
			}

             // Create Shop Page
                $ecommerce_store_elementor_about_title = 'Shop';
                $ecommerce_store_elementor_about_content = 'Lorem ipsum dolor sit amet...';

                $shop_page = get_page_by_path('shop');
                if ( !$shop_page ) {
                    $ecommerce_store_elementor_about = array(
                        'post_type'   => 'page',
                        'post_title'  => $ecommerce_store_elementor_about_title,
                        'post_content'=> $ecommerce_store_elementor_about_content,
                        'post_status' => 'publish',
                        'post_author' => 1,
                        'post_name'   => 'shop' 
                        );
                        $ecommerce_store_elementor_about_id = wp_insert_post($ecommerce_store_elementor_about);
                    } else {
                        $ecommerce_store_elementor_about_id = $shop_page->ID;
                    }

                    wp_update_nav_menu_item($ecommerce_store_elementor_menu_id, 0, array(
                        'menu-item-title'   => __('Shop', 'ecommerce-store-elementor'),
                        'menu-item-classes' => 'shop',
                        'menu-item-object-id' => $ecommerce_store_elementor_about_id,
                        'menu-item-object'  => 'page',
                        'menu-item-type'    => 'post_type',
                        'menu-item-status'  => 'publish'
                    ));
          
			/* Assign Menu Location */
			$ecommerce_store_elementor_locations = get_theme_mod( 'nav_menu_locations', array() );
			$ecommerce_store_elementor_locations[ $ecommerce_store_elementor_location ] = $ecommerce_store_elementor_menu_id;
			set_theme_mod( 'nav_menu_locations', $ecommerce_store_elementor_locations );
		}
	}
}
 