<?php

namespace ProductFeedbackPlugin\Utils;

trait PostTypeLabelUtility {
    /**
     * Generate labels for a post type.
	 *
	 * @param string $singular          Uppercase, singular label.
	 * @param string $plural            Uppercase, plural label.
	 * @param array  $additional_labels Additional labels.
	 *
	 * @return array Labels.
     */
	protected function generate_labels(string $singular, string $plural, array $additional_labels = []) : array {
		$labels = [
			'name'                  => _x($plural, 'post type general name', 'product-feedback-app'),
			'singular_name'         => _x($singular, 'post type singular name', 'product-feedback-app'),
			'menu_name'             => _x($plural, 'admin menu', 'product-feedback-app'),
			'name_admin_bar'        => _x($singular, 'add new on admin bar', 'product-feedback-app'),
			'add_new'               => _x('Add New', $singular, 'product-feedback-app'),
			'add_new_item'          => __("Add New {$singular}", 'product-feedback-app'),
			'new_item'              => __("New {$singular}", 'product-feedback-app'),
			'edit_item'             => __("Edit {$singular}", 'product-feedback-app'),
			'view_item'             => __("View {$singular}", 'product-feedback-app'),
			'all_items'             => __("All {$plural}", 'product-feedback-app'),
			'search_items'          => __("Search {$plural}", 'product-feedback-app'),
			'parent_item_colon'     => __("Parent {$plural}:", 'product-feedback-app'),
			'not_found'             => __("No {$plural} found.", 'product-feedback-app'),
			'not_found_in_trash'    => __("No {$plural} found in Trash.", 'product-feedback-app'),
			'archives'              => __("{$singular} Archives", 'product-feedback-app'),
            'update_item'           => __("Update {$singular}", 'product-feedback-app'),
            'insert_into_item'      => __("Insert into {$singular}", 'product-feedback-app'),
            'uploaded_to_this_item' => __("Uploaded to this {$singular}", 'product-feedback-app'),
            'items_list'            => __("{$plural} list", 'product-feedback-app'),
            'items_list_navigation' => __("{$plural} list navigation", 'product-feedback-app'),
            'filter_items_list'     => __("Filter {$plural} list", 'product-feedback-app'),
	    ];
        
		return array_merge($labels, $additional_labels);
	}
}