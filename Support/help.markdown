# Introduction

The PHP Drupal bundle provides Drupal developers with shortcuts for creating Drupal modules and themes.

## Features

- Automatic detection of Drupal version when .info file available
- Drupal 5 and 6 supported
- All FAPI controls and elements
- Menu items
- Some commonly used hooks

Planned features...

- Theme functions
- Template files
- More hooks

# Installation

There are 2 Shell Variables which should be set for this bundle. Shell Variables may be set up using `TextMate => Preferences => Advanced => Shell Variables`.

## Drupal version:

The bundle automatically detects which version of Drupal you are using by checking the .info files of the project you are currently working with. It is a good idea to set up a fallback for cases where you are not using a project or something fails.

Set the following Shell Variable:

<table border="1" cellspacing="0" cellpadding="5" style="text-align:left">
  <tr><th>variable</th><th>value</th></tr>
  <tr><td>TM_DRUPAL_VERSION</td><td>6</td></tr>
</table>

You can change this variable when switching between projects or alternatively you may wish to set up a [Project Dependent Variable](?project_dependent_variables).

## API location:

The `Documentation for Word` command performs a documentation lookup for any Drupal functions. 

Set the following Shell Variable:

<table border="1" cellspacing="0" cellpadding="5" style="text-align:left">
  <tr><th>variable</th><th>value</th></tr>
  <tr><td>TM_DRUPAL_API</td><td>http://api.drupal.org/apis/</td></tr>
</table>

Using api.drupal.org will only give you reference documentation for Drupal core functions. If you wish to be able to receive reference documentation for most of Drupal's contributed modules then use the following settings instead:

<table border="1" cellspacing="0" cellpadding="5" style="text-align:left;margin-bottom:1em">
  <tr><th>variable</th><th>value</th></tr>
  <tr><td>TM_DRUPAL_API</td><td>http://drupalcontrib.org/apis/</td></tr>
</table>

# Usage

## Hooks

A number of Drupal hooks have been implemented as **tab triggers**. Try the following:

<code>
&lt;?php
hook_help&#x21E5;
</code>

Tab stops have been used throughout the snippets to make it easier to edit the inserted code. Try pressing tab a few times to step through code. Once you hit the bottom tab stop you will break the flow and won't be able to reverse tab back through the tab stops.

## FAPI Form Controls

Form control snippets have been added for easy form generation. Try the following:

<code>
&lt;?php
$form['my_form'] = checkboxes&#x21E5;
</code>

Again, tab stops have been used to allow you to edit the details. Try tabbing though.

## FAPI Elements

Adding more elements to the form is easy. Try the following:

<code>
&lt;?php
\#description&#x21E5;
</code>

# Resources

- [Drupal Textmate project](http://drupal.org/project/textmate) - Bug reports, feature requests and patches welcome.
- [Drupal IDE group](http://groups.drupal.org/drupal-ide) - General discussion
