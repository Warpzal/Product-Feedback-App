<?php

namespace ProductFeedbackPlugin\GraphQL\Mutations\SuggestionMutations;

use WP_Post_Type;
use ProductFeedbackPlugin\Interfaces\Hookable;
use ProductFeedbackPlugin\Utils\PostTypeUtility;
use ProductFeedbackPlugin\PostTypes\SuggestionPostType;

class CreateSuggestion implements Hookable {
    use PostTypeUtility;

    const MUTATION_TYPE = 'create';

    public function register_hooks() : void {
        add_action('graphql_register_types', [$this, 'register_input_fields']);
        add_action('graphql_post_object_mutation_update_additional_data', [$this, 'save_additional_data'], 10, 4);
    }

    public function register_input_fields() : void {
        $singular = SuggestionPostType::GRAPHQL_SINGLE_NAME;
        $fields = SuggestionPostType::FIELDS;

        register_graphql_fields(
            $this->generate_mutation_input_name(self::MUTATION_TYPE, $singular),
            $this->generate_input($singular, $fields)
        );
    }

    public function save_additional_data(int $post_id, array $input, WP_Post_Type $post_type_object, string $mutation_name) : void {
        if($this->generate_mutation_id(self::MUTATION_TYPE, SuggestionPostType::GRAPHQL_SINGLE_NAME) != $mutation_name) {
            return;
        }
        
        foreach(SuggestionPostType::FIELDS as $key => $value) {
            error_log($key);
            if(isset($input[$key])) {
                error_log('In');
                update_field($key, sanitize_text_field($input[$key]), $post_id);
            }
        }
    }
}
