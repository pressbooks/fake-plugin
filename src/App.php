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

    public function getVersion()
    {
        // x-release-please-start-version
        return '1.6.0';
        // x-release-please-end
    }
}
