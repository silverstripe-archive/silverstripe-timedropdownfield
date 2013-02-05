# Time Dropdown Field #

Allows to select certain time intervals from a dropdown
as an alternative to direct input into a `TimeField`.
Adheres to user preferences in time formats set through
the `TimeField` API, which by extension supports user preferences
through `i18n::get_time_format()`.

## Usage

As an isolated field:

	:::php
	$field = TimeDropdownField::create('MyTime', 'My Time Field');

As part of a `DatetimeField` (requires SilverStripe 3.1):

	:::php
	$datetimeField = DatetimeField::create('MyDateTime', My Date and Time Field')
		->setTimeField(TimeDropdownField::create('MyDateTime[time]'));

## Configuration

 * `interval`: Spacing in minutes between options (Default: 60)

Note: Since the field extends `TimeField`, most configuration happens in there.


## Maintainers ##

 * Ingo Schommer (@chillu)

Thanks to Air New Zealand for sponsoring and contributing to this module!