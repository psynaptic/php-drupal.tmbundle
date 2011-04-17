# Features

The PHP Drupal bundle provides Drupal developers with shortcuts for creating Drupal modules and themes.

- Supports Drupal 5, 6 and 7
- Hook snippets (complete list of core hooks for Drupal 6 and 7, incomplete for Drupal 5)
- Hook completion (the same as can be found in the PHP bundle)
- Automatic detection of Drupal version when .info file is discoverable
- Theme and preprocess functions
- FAPI controls and elements
- Menu items
- Devel debugging functions (kpr, dpm, dpr, dvm, dvr)
- Views debugging functions (vpr, views\_trace, views\_var_export)
- Useful snippets (l(), t())
- Useful commands (Wrap in t(), Convert template filename to preprocess function)
- Snippet building tools - makes it easier to contribute more snippets!
- Simpletest (very basic - needs love)

Planned features...

- Add more hooks
- Add more theme functions
- Default template files

# Installation

>For background information and best practices for installing TextMate bundles please see [Installing a Bundle](http://manual.macromates.com/en/bundles#installing_a_bundle) from the TextMate manual.

## Install Location

Deciding what type of user you are, or intend to be, could help reduce the amount of shuffling you need to do later and will likely reduce confusion if something doesn't work as expected. For bundles installed to `/Library/Application Support/TextMate/Bundles` or `~/Library/Application Support/TextMate/Pristine Copy/Bundles` TextMate creates delta files which are not good for VCS. 

If you don't intend to contribute, or you just want to get up and running quickly, you should download the bundle from GitHub's download feature, or clone using git (easier to update) if you have it installed, to either `/Library/Application Support/TextMate/Bundles` or `~/Library/Application Support/TextMate/Pristine Copy/Bundles` (the latter is the default location for double clicked bundles). If you make any changes to the bundle, when you come to update the bundle you won't loose your edits.

If you do intend to contribute to the bundle you should probably fork the main repository on GitHub and clone your fork to `~/Library/Application Support/TextMate/Bundles`. This will allow you to work on the bundle and commit your changes to git. When you are ready to submit the files to the main repository you should set up a pull request.

## Quickstart (safe option):

Assuming you already have git installed, run the following lines in Terminal.app:

    cd ~/Library/Application\ Support/TextMate/Pristine\ Copy/Bundles
    git clone git://github.com/psynaptic/php-drupal.tmbundle.git
    osascript -e 'tell app "TextMate" to reload bundles'

## Set the optional Shell Variables

There are two Shell Variables which can be set for this bundle. Shell Variables may be set up using `TextMate => Preferences => Advanced => Shell Variables`.

### Drupal version variable:

The bundle automatically detects which version of Drupal you are using by checking the .info files of the project you are currently working with. The bundle also sets a default value for version based on the latest version of Drupal. You can override this default value if you prefer.

Set the following Shell Variable:

<table border="1" cellspacing="0" cellpadding="5" style="text-align:left">
  <tr><th>variable</th><th>value</th></tr>
  <tr><td>TM_DRUPAL_VERSION</td><td>5</td></tr>
</table>

### API location variable:

The `Documentation for Word` command performs a documentation lookup for any Drupal functions. 

By default the value for this variable is set to http://api.drupal.org which will currently only give you reference documentation for Drupal core functions. If you wish to be able to retrieve reference documentation for Drupal's most popular contributed modules as well, use the following settings instead:

<table border="1" cellspacing="0" cellpadding="5" style="text-align:left;">
  <tr><th>variable</th><th>value</th></tr>
  <tr><td>TM_DRUPAL_API</td><td>http://drupalcontrib.org</td></tr>
</table>

# Usage

## Hook completion

Just like the PHP bundle's function completion feature, the PHP Drupal bundle provides function completion of all Drupal core hooks (currently only Drupal 7 is fully supported).

Invoking the completions menu:

`⌥+H` (Alt+H)

This will display all available hooks in a select list, allowing you to type characters to filter the list. You can also invoke the completions menu on an existing string.

`hook_form` then `⌥+H`

This will display only hooks which start with `hook_form`. Once you have found the hook you need, press `⌅` (Enter) to accept the selection, then press `⇥` (Tab) to print the function into your document. You can of course use the hooks without invoking the completions menu:

<code>
hook_help&#x21E5;
</code>

Some hooks have tab stops to make it easier to edit the inserted code. Try pressing tab a few times to step through the tab stops. Once you hit the bottom tab stop you will break the flow and won't be able to reverse tab back through the tab stops.

## FAPI

Form control snippets have been added for easy form generation.

<code>
$form&#x21E5;
</code>

Adding more elements to the form is easy.

<code>
\#description&#x21E5;
</code>

Tab stops have been used to allow you to edit the details.

# Advanced

## Hooks

Snippets files for hooks are generated from Drupal's codebase using a [drush script](https://github.com/webflo/drush_textmate/blob/master/textmate.drush.inc). These files are stored in `php-drupal.tmbundle/Support/commands/generated/hooks`.

Some hooks have custom tab stops set up for them, these files are stored in `php-drupal.tmbundle/Support/commands/overrides/hooks`.

Any snippets that don't have custom tab stops will just have the function body selected, allowing you to delete and quickly get down to writing your own function body. However, for some of the more common functions, you may find this isn't enough for your needs and might want to create custom snippets with tab stops to help speed up your workflow.

See the section below on *Modifying an existing snippet* for details.

## Creating custom snippets

Found within the *Bundle tools* sub-menu are three special commands to help with the creation of new snippets:

**Format document as snippet**

* Escapes any special characters for use as a snippet.
* Automatically adds doxygen function header comments for hooks and theme functions.

**Wrap selection in placeholder**

* Adds placeholder wrappers for tabs stops around selected text.
* Adds basic tab stops at caret position if no text is selected.

**Print basename**

* Dynamically prints the name of the module.

The two main methods for creating snippets is outlined below.

### Modifying an existing snippet

If you find you need a different structure for an existing snippet you can copy the original file to a specific directory and make your desired changes there. This will automatically override the generated file from that point on.

1. Copy the original file from `php-drupal.tmbundle/Support/commands/generated/hooks` to `php-drupal.tmbundle/Support/commands/overrides/hooks`.

2. Either write your own function body or if you are happy with the existing one you can use that.

3. Select the text you wish to automatically replace with the name of the module and run the *Print basename* command. Repeat as necessary.

4. Select any text you wish to be a placeholder for a tab stop and run *Wrap selection in placeholder*. Repeat as necessary.

5. If this is a whole function snippet, leave a blank newline after the closing brace and add a final tab stop at the bottom of the file (on the last line).

6. Save the file to the correct place in the `php-drupal.tmbundle/Support/commands/overrides` directory.

Your new snippet should now override the generated one and you can continue working.

### Creating a new snippet

If you find some code you want to use and it doesn't already have a snippet in the generated directory of the bundle you need to create it from scratch.

The basic workflow is as follows:

1. Open a new TextMate document.

2. Paste a function that you wish to covert into a snippet.

3. Run *Format document as snippet*.

4. Select the text you wish to automatically replace with the name of the module and run the *Print basename* command. Repeat as necessary.

5. Select any text you wish to be a placeholder for a tab stop and run *Wrap selection in placeholder*. Running this without a selection also works, just without a 'default' value. Repeat as necessary.

6. If this is a whole function snippet, leave a blank newline after the closing brace and add a final tab stop at the bottom of the file (on the last line).

7. Save the file to the correct place in the `php-drupal.tmbundle/Support/commands/overrides` directory.

8. Copy one of the existing commands in the Bundle Editor and adjust the parameter for textmate\_find_command to the correct value.

Hopefully, this will help you to create your own snippets. If you feel your work could benefit others please contribute it back!

## Resources

* [PHP Drupal TextMate project page (d.o)](http://drupal.org/project/textmate) - Bug reports, feature requests and patches welcome.
* [Drupal IDE group (g.d.o)](http://groups.drupal.org/drupal-ide) - General discussion
