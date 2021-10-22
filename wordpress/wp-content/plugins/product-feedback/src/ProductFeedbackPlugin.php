<?php

namespace ProductFeedbackPlugin;

/**
 * Plugin entry point
 * Plugin Boilerplate by: https://github.com/kellenmace/wordpress-plugin-boilerplate
 */
final class ProductFeedbackPlugin {
	private $instances = [];

	public function run() {
		$this->create_instances();
		$this->register_hooks();
	}

	private function create_instances() {
		$this->instances['suggestion_post_type'] = new PostTypes\SuggestionPostType();
		$this->instances['create_suggestion_mutation'] = new GraphQL\Mutations\SuggestionMutations\CreateSuggestion();
		$this->instances['update_suggestion_mutation'] = new GraphQL\Mutations\SuggestionMutations\UpdateSuggestion();
	}

	private function register_hooks() {
		foreach ($this->get_hookable_instances() as $instance) {
            $instance->register_hooks();
        }
	}

	private function get_hookable_instances() {
        return array_filter($this->instances, fn($instance) => $instance instanceof Interfaces\Hookable);
    }
}
