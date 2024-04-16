<?php

namespace Pressbooks\FakePlugin;

class App {
    public function __construct() {
        echo __('Hello, world!', 'pressbooks-fake-plugin');
    }
}
