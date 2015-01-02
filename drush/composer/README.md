Drush Composer
==============

Drush wrapper for [Composer](http://getcomposer.org).


Installation
------------

    $ drush dl composer-8.x-1.x


Usage
-----

    $ drush composer


Develop
-------

To update Composer and all dependencies, run:

    $ curl -sS https://getcomposer.org/installer | php
    $ php composer.phar update


To re-build the `composer.drush.json` file, run the following:

    $ vendor/bin/composer list --format=json > composer.drush.json
