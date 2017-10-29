# One route to find'em all

This simple plugin gives you just one route /entries/find?id={id} to find entries and redirect to them. Currently only Entry models are supported.

You get also a helper functionsfor templates to generate the url from a given entry

```php
	
	{{ craft.urlById.urlFor(entry) }}

```

## Installing

1. Copy the `urlbyid` directory into your `craft/plugins` directory
2. Browse to Settings > Plugins in the Craft CP
3. Click on the Install button next to Url By Id
4. Browse to `http://yoursite.com/entries/find?id={id}` and be happy !

## Changelog

* 1.0.0
	* Find entries by id with /entries/find?id={id}
	* Add helper to generate url {{ craft.urlById.urlFor(entry) }}
	* Initial release!

## Feature Requests

* Improve helper for templates -> {{ entry.urlById }} should work
* Allow categories
* Customize path in config

Feel free to join !