<?php

namespace ProductFeedbackPlugin;

final class ProductFeedbackPlugin {
	private $instances = [];

	public function run() {
		$this->create_instances();
		$this->register_hooks();
	}

	private function create_instances() {
		$this->instances['suggestion_post_type'] = new PostTypes\SuggestionPostType();
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
