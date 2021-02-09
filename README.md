# ACF Country field
 
 Adds a 'Country' field type for the [Advanced Custom Fields](http://wordpress.org/extend/plugins/advanced-custom-fields/) WordPress plugin
 
 ### Overview

Display a select list of all countries in your language.

Country names are available in every language ([see available list](https://github.com/umpirsky/country-list/tree/master/data)). By default, country names are localized in your current WordPress language.

### Field options

| Option  | Default | Description |
| ------------- | ------------- | ------------- |
| Default value | emtpy | Set a default value for the country field (as country code)  |
| Allow null | `false` | Enable/disable null value  |
| Allow multiple | `false` | Enable/disable multiple countries selection  |
| Stylised UI | `true` | Enable/disable enhanced select field thanks to [Select2](https://select2.github.io/)  |
| Return format | `label` | See [ACF Select field](https://www.advancedcustomfields.com/resources/select/) |

### Filters

You can remove (or add) some countries with the `acf/country/countries` filter, example:

```php 
add_filter( 'acf/country/countries', function( $countries ) {
	return array_filter( $countries, function( $code ) {
		return !in_array( $code, ['IC', 'EA'], true );
	}, ARRAY_FILTER_USE_KEY);
} );
```
*Note: PHP5.6+ example*

### Installation

#### Zip

[Download the plugin](https://github.com/ppprakhar/acf-country-plugin/archive/main.zip) and extract the archive to your plugins folder.


### Contributing

See [CONTRIBUTING](https://github.com/nlemoine/acf-country/blob/2.0/CONTRIBUTING.md).

### Support

This ACF field was originally developed via [Nico](https://github.com/nlemoine) for a personal project I don't use  anymore. I still decided to maintain it anyway. If you use it in a commercial project, please consider [buying him a beer](https://beerpay.io/nlemoine/acf-country).
