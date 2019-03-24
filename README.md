# Autoresize plugin

A plugin for [Kirby 3 CMS](http://getkirby.com) to shrink images on upload and replace to max size.

![Resizing a huge image](https://user-images.githubusercontent.com/7975568/51390756-73ff4480-1b30-11e9-913d-7c6ba78fb7bd.gif)

## Commercial Usage

This plugin is free but if you use it in a commercial project please consider

- [making a donation](https://www.paypal.me/schnti/5) or


## Installation

### Download

[Download the files](https://github.com/schnti/kirby3-autoresize/archive/master.zip) and place them inside `site/plugins/autoresize`.

### Git Submodule
You can add the plugin as a Git submodule.

    $ cd your/project/root
    $ git submodule add https://github.com/schnti/kirby3-autoresize.git site/plugins/autoresize
    $ git submodule update --init --recursive
    $ git commit -am "Add Kirby Autoresize plugin"

Run these commands to update the plugin:

    $ cd your/project/root
    $ git submodule foreach git checkout master
    $ git submodule foreach git pull
    $ git commit -am "Update submodules"
    $ git submodule update --init --recursive

### Composer

```
composer require schnti/autoresize
```

## Options

You can change the default 1500px width in `/site/config/config.php`:

```php
return [
  'schnti.autoresize.max' => 1500,
  'schnti.autoresize.customConfig', [
      'imagekit.lazy' => false // e.g. for use with https://github.com/fabianmichael/kirby-imagekit
  ]
];
```


## How to use it

Nothing required. Plugin is using the `file.create:after` and `file.replace:after` [Hooks from Kirby](https://getkirby.com/docs/reference/system/options/hooks)


