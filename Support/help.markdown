# Introduction

Please use http://drupal.org/project/textmate for filing bug reports, feature requests, and patches for this bundle.

#Drupal version variable

You will want to setup a [Project Dependent Variable](?project_dependent_variables) whose name is TM\_drupal\_version and whose value is 5 or 6 or 7, depending on your Drupal version. This is initially used by the api.drupal.org command to show your documentation for the proper version of Drupal. We expect to vary some bundle items as well by TM\_drupal\_version (e.g. `hook_menu()`)