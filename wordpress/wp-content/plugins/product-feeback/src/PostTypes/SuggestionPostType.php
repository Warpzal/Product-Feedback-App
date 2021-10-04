<?php

namespace ProductFeedbackPlugin\PostTypes;

use ProductFeedbackPlugin\Interfaces\Hookable;

class SuggestionPostType implements Hookable {
    const KEY = 'suggestion';

    public function register_hooks() {
        add_action('init', [$this, 'register']);
    }

    public function register() {}
}