# Httpfully Plugin

The **Httpfully** plugin is for [Grav CMS](http://github.com/getgrav/grav). It brings [Httpful](http://phphttpclient.com) functions to Twig. Httpful a REST Friendly PHP HTTP Client Library

## Installation

Installing the Httpfully plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install httpfully

This will install the Httpfully plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/httpfully`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `httpfully`. You can find these files on [GitHub](https://github.com/martinec/grav-plugin-httpfully) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/httpfully
  
## Configuration

The config consists of the single `enabled` field, which turns the plugin off and on.

## Usage

This plugin expose the following filters

- httpfully_get_json(uri)

## Credits

This plugin is a simple wrapper around the great [Httpful](http://phphttpclient.com) library created by nategood and the [Httpful contributors](https://github.com/nategood/httpful/graphs/contributors).


