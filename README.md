# z-database

[![License](http://img.shields.io/:license-mit-blue.svg)](http://doge.mit-license.org)

PHP module for MySql databases

# Getting Started

### Add package to composer.json

`composer require zguillez/z-database`

	//packaje.json
	{
        "require": {
            "zguillez/z-database": "^0.0.1"
        }
    }

# Usage:

	require 'vendor/autoload.php';
	use Z\Tools;
	
	$tools = new Tools();
	$tools->test('This is a test!');

# Example:

	require 'vendor/autoload.php';
	use Z\Tools;
	
	$tools = new Tools();
	$tools->test('This is a test!');


# Contributing and issues

Contributors are welcome, please fork and send pull requests! If you have any ideas on how to make this project better then please submit an issue or send me an [email](mailto:mail@zguillez.io).

# License

©2020 Zguillez.io

Original code licensed under [MIT](https://en.wikipedia.org/wiki/MIT_License) Open Source projects used within this project retain their original licenses.

# Changelog

### v0.0.1 (Mar 10, 2020) 

* Initial implementation