<?php

namespace Pressbooks\FakePlugin;

class App {
    public function __construct() {
        echo 'Trigger latest version of FakePlugin App trigger other plugins to load. production version.';
    }
}
