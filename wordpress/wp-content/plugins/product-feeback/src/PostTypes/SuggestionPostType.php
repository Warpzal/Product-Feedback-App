<?php

namespace ProductFeedbackPlugin\PostTypes;

use ProductFeedbackPlugin\Utils\PostTypeLabelUtility;
use ProductFeedbackPlugin\Interfaces\Hookable;

class SuggestionPostType implements Hookable {
    use PostTypeLabelUtility;

    const SLUG = 'suggestion';
    const GRAPHQL_SINGLE_NAME = 'Suggestion';
    const GRAPHQL_PLURAL_NAME = 'Suggestions';

    public function register_hooks() {
        add_action('init', [$this, 'register']);
    }

    public function register() {
        register_post_type(self::SLUG, [
			'labels'              => $this->generate_labels(self::GRAPHQL_SINGLE_NAME, self::GRAPHQL_PLURAL_NAME),
            'public'              => true,
            'supports'            => ['title', 'comments', 'custom-fields'],
            'show_in_graphql'     => true,
            'graphql_single_name' => self::GRAPHQL_SINGLE_NAME,
            'graphql_plural_name' => self::GRAPHQL_PLURAL_NAME,
		]);
    }
}