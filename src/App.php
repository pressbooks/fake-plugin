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
        return __('Hello, world 2!', 'pressbooks-fake-plugin');
    }

    public function hi()
    {
        return __('Hello, bye!', 'pressbooks-fake-plugin');
    }

    public function bye()
    {
        return __('Super au revoir', 'pressbooks-fake-plugin');
    }

    public function salutation()
    {
        return __('Salut! garçon', 'pressbooks-fake-plugin');
    }


    public function getVersion()
    {
        // x-release-please-start-version
        return '1.9.6';
        // x-release-please-end
    }
}
