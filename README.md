# Symfony micro edition

Based on micro kernel and reactphp, no bundle are embedded unless third party ones.

## Default requirements

Have a look on the [composer.json](composer.json#L15)

## Customization

1. Add your own [namespace in composer.json](composer.json#L10)

## ReactPHP

If you want to use `bin/monitor` you need to create `src` and `tests` folder, then run `composer require christiaan/stream-process mkraemer/react-inotify mkraemer/react-pcntl --dev`
