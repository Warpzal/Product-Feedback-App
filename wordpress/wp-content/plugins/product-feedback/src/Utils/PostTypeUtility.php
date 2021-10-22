<?php

namespace ProductFeedbackPlugin\Utils;

trait PostTypeUtility {
	static $text_domain = 'product-feedback-app';

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
			'name'                  => _x($plural, 'post type general name', self::$text_domain),
			'singular_name'         => _x($singular, 'post type singular name', self::$text_domain),
			'menu_name'             => _x($plural, 'admin menu', self::$text_domain),
			'name_admin_bar'        => _x($singular, 'add new on admin bar', self::$text_domain),
			'add_new'               => _x('Add New', $singular, self::$text_domain),
			'add_new_item'          => __("Add New {$singular}", self::$text_domain),
			'new_item'              => __("New {$singular}", self::$text_domain),
			'edit_item'             => __("Edit {$singular}", self::$text_domain),
			'view_item'             => __("View {$singular}", self::$text_domain),
			'all_items'             => __("All {$plural}", self::$text_domain),
			'search_items'          => __("Search {$plural}", self::$text_domain),
			'parent_item_colon'     => __("Parent {$plural}:", self::$text_domain),
			'not_found'             => __("No {$plural} found.", self::$text_domain),
			'not_found_in_trash'    => __("No {$plural} found in Trash.", self::$text_domain),
			'archives'              => __("{$singular} Archives", self::$text_domain),
            'update_item'           => __("Update {$singular}", self::$text_domain),
            'insert_into_item'      => __("Insert into {$singular}", self::$text_domain),
            'uploaded_to_this_item' => __("Uploaded to this {$singular}", self::$text_domain),
            'items_list'            => __("{$plural} list", self::$text_domain),
            'items_list_navigation' => __("{$plural} list navigation", self::$text_domain),
            'filter_items_list'     => __("Filter {$plural} list", self::$text_domain),
	    ];
        
		return array_merge($labels, $additional_labels);
	}

	/**
     * Generate fields for a post type.
	 *
	 * @param string $singular          Uppercase, singular label.
	 * @param array  $post_type_fields  Post type fields.
	 *
	 * @return array Fields.
     */
	protected function generate_fields(string $singular, array $post_type_fields) : array {
		$fields = [];

		foreach($post_type_fields as $field => $details) {
			$fields[$field] = [
				'type'        => $details['type'] ?: 'String',
				'description' => __("{$singular} {$field}", self::$text_domain),
				'resolve'     => function($suggestion) use ($field) {
					$value = get_field($field, $suggestion->ID);
					return $value ?: null;
				}
			];
		}

		return $fields;
    }

	/**
     * Generate fields for a post type.
	 *
	 * @param string $singular          Uppercase, singular label.
	 * @param array  $post_type_fields  Post type fields.
	 *
	 * @return array Fields.
     */
    protected function generate_input(string $singular, array $post_type_inputs) : array {
        $inputs = $this->generate_fields($singular, $post_type_inputs);

        foreach($post_type_inputs as $input => $details) {
            unset($inputs[$input]['resolve']);
        }

        return $inputs;
    }

	/**
     * Generate mutation id
	 *
	 * @param string $mutation_type     lowercase, mutation name (create, update, etc).
	 * @param string $singular          Uppercase, singular label.
	 *
	 * @return string Mutation ID.
     */
	protected function generate_mutation_id(string $mutation_type, string $singular) : string {
		return strtolower($mutation_type) . $singular; 
	}

	/**
     * Generate mutation input group name
	 *
	 * @param string $mutation_type     Uppercase, mutation name (Create, Update, etc).
	 * @param string $singular          Uppercase, singular label.
	 *
	 * @return string Input Name.
     */
	protected function generate_mutation_input_name(string $mutation_type, string $singular) : string {
		return ucfirst(strtolower($mutation_type)) . $singular . 'Input';
	}
}
