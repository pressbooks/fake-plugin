<?php

namespace Pressbooks\FakePlugin;

class App
{
    public function __construct()
    {
        echo __('Hello, people!', 'pressbooks-fake-plugin');
    }

    public function __toString()
    {
        return __('Hello, world!', 'pressbooks-fake-plugin');
    }
}
