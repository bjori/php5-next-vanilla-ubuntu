Debian PHP packaging
====================

This repo is a fork of the php5-vanilla-ubuntu github repo (which then again is
a fork of the official debian PHP packaging repository).

The intentions of this fork is to provide packaging information for PHP trunk/
to build ubuntu packages from.

This mean you can have fun experimenting with PHP.next (PHP5.4) without any
hassle, allowing you to ensure future compatibility of your applications with
PHP.


NOTE: The PHP source in this repo is bogus and not used, only the debian/ folder
makes sense. Launchpad will automatically pull in the latest PHP code from
trunk/ (actually from the launchpad bazaar repo, which is a mirror of trunk),
and then merge the debian/ folder into that before building the packages.

