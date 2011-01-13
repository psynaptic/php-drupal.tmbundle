# Installation

>For background information and best practices for installing TextMate bundles please see [Installing a Bundle](http://manual.macromates.com/en/bundles#installing_a_bundle) from the TextMate manual.

## To Contribute or Not to Contribute

Deciding what type of user you are, or intend to be, could help reduce the amount of shuffling you need to do later and will likely reduce confusion if something doesn't work as expected. For bundles installed to /Library/Application Support/TextMate/Bundles or ~/Library/Application Support/TextMate/Pristine Copy/Bundles TextMate creates delta files which are not good for VCS. 

If you don't intend to contribute, or you just want to get up and running quickly, you should download (from GitHub's download feature, or clone using git if you have it installed) and place the files into either /Library/Application Support/TextMate/Bundles or ~/Library/Application Support/TextMate/Pristine Copy/Bundles (the latter is the default location for double clicked bundles). If you make any changes to the bundle, when you come to update the bundle you won't loose your edits.

If you do intend to contribute to the bundle you should probably fork the main repository on GitHub and clone your fork to ~/Library/Application Support/TextMate/Bundles. This will allow you to work on the bundle and commit files to git. When you are ready to submit the files to the main repository you should set up a pull request.

## Quickstart (safe option):

Assuming you already have git installed, run the following lines in Terminal.app:

    cd ~/Library/Application Support/TextMate/Pristine Copy/Bundles
    git clone git://github.com/psynaptic/php-drupal.tmbundle.git
    osascript -e 'tell app "TextMate" to reload bundles'

## Set the Required Shell Variables

There are 2 Shell Variables which should be set for this bundle. Shell Variables may be set up using `TextMate => Preferences => Advanced => Shell Variables`.

### Drupal version variable:

The bundle automatically detects which version of Drupal you are using by checking the .info files of the project you are currently working with. It is a good idea to set up a fallback for cases where you are not using a project or something fails.

Set the following Shell Variable:

<table border="1" cellspacing="0" cellpadding="5" style="text-align:left">
  <tr><th>variable</th><th>value</th></tr>
  <tr><td>TM_DRUPAL_VERSION</td><td>6</td></tr>
</table>

You can change this variable when switching between projects or alternatively you may wish to set up a [Project Dependent Variable](http://manual.macromates.com/en/environment_variables.html).

### API location variable:

The `Documentation for Word` command performs a documentation lookup for any Drupal functions. 

Set the following Shell Variable:

<table border="1" cellspacing="0" cellpadding="5" style="text-align:left">
  <tr><th>variable</th><th>value</th></tr>
  <tr><td>TM_DRUPAL_API</td><td>http://api.drupal.org</td></tr>
</table>

Using api.drupal.org will only give you reference documentation for Drupal core functions. If you wish to be able to retrieve reference documentation for Drupal's most popular contributed modules as well, use the following settings instead:

<table border="1" cellspacing="0" cellpadding="5" style="text-align:left;margin-bottom:1em">
  <tr><th>variable</th><th>value</th></tr>
  <tr><td>TM_DRUPAL_API</td><td>http://drupalcontrib.org</td></tr>
</table>

## Features

The PHP Drupal bundle provides Drupal developers with shortcuts for creating Drupal modules and themes.

- FAPI controls and elements
- Menu items
- Hooks with function auto-completion (complete for Drupal 7, incomplete for other versions)
- Theme functions (incomplete)
- Devel debugging functions (dpm, dpr, dvm, dvr)
- Views debugging functions (vpr, views\_trace, views\_var_export, etc)
- Useful snippets (if node, l(), t())
- Simpletest
- Preprocess functions
- Automatic detection of Drupal version when .info file available
- Drupal 5, Drupal 6 and Drupal 7 supported
- Snippet building commands - makes it easier to contribute more snippets!

Planned features...

- Add more hooks
- Add more theme functions
- Default template files

## Usage

### Hook completion

Press Alt+H to open the completion menu. This will display all hooks, allowing you to type characters to filter the list. You can also invoke the completions menu on an existing string, for instance type hook\_form and press Alt+H.

Once you have found the hook you need, press enter to accept the selection, then press tab to print the function into your document.

Some hooks have custom tab triggers set up for them but most will just have the function body selected so you can quickly delete and get down to writing your own function body.

If you find a commonly used function that has no custom tab triggers and you wish to add some, you can copy the original file in php-drupal.tmbundle/Support/commands/generated/hooks/ into php-drupal.tmbundle/Support/commands/custom/hooks/ and make your changes to the new file. This will override the generated file from now on. If you feel this could be useful to others please do contribute it back!

### Hooks

You can use the hooks without invoking the completions menu, try the following:

<code>
&lt;?php
hook_help&#x21E5;
</code>

Some hooks have tab stops to make it easier to edit the inserted code. Try pressing tab a few times to step through code. Once you hit the bottom tab stop you will break the flow and won't be able to reverse tab back through the tab stops.

### FAPI Form Controls

Form control snippets have been added for easy form generation. Try the following:

<code>
&lt;?php
$form&#x21E5;
</code>

Again, tab stops have been used to allow you to edit the details. Try tabbing though.

### FAPI Elements

Adding more elements to the form is easy. Try the following:

<code>
&lt;?php
\#description&#x21E5;
</code>

## Resources

* [Drupal Textmate project](http://drupal.org/project/textmate) - Bug reports, feature requests and patches welcome.
* [Drupal IDE group](http://groups.drupal.org/drupal-ide) - General discussion
