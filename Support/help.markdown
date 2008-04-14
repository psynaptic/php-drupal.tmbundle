# Introduction

Please use the [Textmate project](http://drupal.org/project/textmate) at drupal.org for filing bug reports, feature requests, and patches for this bundle. General discussion happens in the [Drupal IDE group](http://groups.drupal.org/drupal-ide).

#`TM_drupal_version` variable

You will want to setup a [Project Dependent Variable](?project_dependent_variables) whose name is `TM_drupal_version` and whose value is 5 or 6 or 7, depending on your Drupal version. This is initially used by the `Documentation for Word` command to show [api.drupal.org](http://api.drupal.org) documentation for the proper version of Drupal. We expect to vary some bundle items as well by `TM_drupal_version` (e.g. `hook_menu()`).

If you always work with just one version of Drupal, you may setup a global variable using `TextMate => Preferences => Advanced => Shell Variables`.