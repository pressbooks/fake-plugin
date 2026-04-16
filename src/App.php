<?php

// Trigger notifications and artifacts creation

namespace Pressbooks\FakePlugin;

class App
{
    public function __construct()
    {
        echo __("Hello, people!", "pressbooks-fake-plugin");
    }

    public function __toString()
    {
        return __("Hello, world 2!", "pressbooks-fake-plugin");
    }

    public function hi()
    {
        return __("See ya, bye!", "pressbooks-fake-plugin");
    }

    public function bye()
    {
        return __("oh la la, see you", "pressbooks-fake-plugin");
    }

    public function salutation()
    {
        return __("Salut! garçon", "pressbooks-fake-plugin");
    }

    public function getVersion()
    {
        // x-release-please-start-version
        return "1.9.15";
        // x-release-please-end
    }

    public function getMouseSalutation()
    {
        return __("Salut! souris", "pressbooks-fake-plugin");
    }

    public function getCoffeeSalutation()
    {
        return __("Salut! café", "pressbooks-fake-plugin");
    }

    public function getBlabla()
    {
        return __("Hello! bla", "pressbooks-fake-plugin");
    }

    public function getDuck()
    {
        return __("Hello! duck, nice to see you", "pressbooks-fake-plugin");
    }

    public function getCow()
    {
        return __("Hello! cow, nice to see you", "pressbooks-fake-plugin");
    }

    public function getCat(): string
    {
        return __("Hello! cat, nice to see you", "pressbooks-fake-plugin");
    }

    public function getDog(): string
    {
        return __("Hello! dog, nice to see you", "pressbooks-fake-plugin");
    }

    public function newString(): string
    {
        return __(
            "This will be a new string used by Crowdin, it should be available in Crowdin and then we should translate them in Crowdin, then after that Crowdin will generate a PR with .po files",
            "pressbooks-fake-plugin",
        );
    }

    public function crow(): string
    {
        return __("Crowdin rules?", "pressbooks-fake-plugin");
    }
}
