<?php

namespace ProductFeedbackPlugin\PostTypes;

use ProductFeedbackPlugin\Utils\PostTypeUtility;
use ProductFeedbackPlugin\Interfaces\Hookable;

class SuggestionPostType implements Hookable {
    use PostTypeUtility;

    const SLUG = 'suggestion';
    const GRAPHQL_SINGLE_NAME = 'Suggestion';
    const GRAPHQL_PLURAL_NAME = 'Suggestions';

    const FIELDS = [
        'detail' => ['type' => 'String'],
        'upvotes' => ['type' => 'Int']
    ];

    public function register_hooks() {
        add_action('init', [$this, 'register']);
        add_action('graphql_register_types', [$this, 'register_fields']);
    }

    public function register() : void {
        $this->register_type();
        $this->register_field_groups();
    }

    public function register_type() : void {
        register_post_type(self::SLUG, [
			'labels'              => $this->generate_labels(self::GRAPHQL_SINGLE_NAME, self::GRAPHQL_PLURAL_NAME),
            'public'              => true,
            'supports'            => ['title', 'comments', 'author'],
            'show_in_graphql'     => true,
            'graphql_single_name' => self::GRAPHQL_SINGLE_NAME,
            'graphql_plural_name' => self::GRAPHQL_PLURAL_NAME,
		]);
    }

    public function register_field_groups() : void {
        acf_add_local_field_group([
            'active' => true,
            'title' => 'Suggestion Fields',
            'key' => 'suggestion_fields',
            'fields' => [
                [
                    'key' => 'suggestion_detail_field',
                    'label' => 'Detail',
                    'name' => 'detail',
                    'type' => 'textarea',
                    'required' => 1,
                ],
                [
                    'key' => 'suggestion_upvotes_field',
                    'label' => 'Upvotes',
                    'name' => 'upvotes',
                    'type' => 'number',
                    'required' => 0,
                    'default_value' => 0,
                    'min' => 0,
                ]
            ],
            'location' => [[
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'suggestion',
                ]
            ]]
        ]);
    }

    public function register_fields() : void {
        register_graphql_fields(
            self::GRAPHQL_SINGLE_NAME,
            $this->generate_fields(self::GRAPHQL_SINGLE_NAME, self::FIELDS)
        );
    }
}