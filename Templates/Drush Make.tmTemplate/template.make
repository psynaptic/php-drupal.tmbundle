api = "2"
; Drush Make file for 
; For a complete Druah Make exmample, see: http://drupalcode.org/project/drush_make.git/blob_plain/refs/heads/6.x-2.x:/README.txt

; Drupal core major version
; -------------------------
core = "6.x"

; Drupal project with version number
; projects[drupal][version] = "6.15"
; Drupal project (Installs the latest stable release)
projects[] = "drupal"

; Modules
; -------
; projects[module1][subdir] = "contrib"
; projects[module1][version] = 6.x-1.0
;
; projects[module2][subdir] = "custom"
; projects[module2][version] = "6.x-1.0"

; Development
; -----------
; projects[module1][subdir] = "contrib"
; projects[module1][version] = 6.x-1.0

; Features
; --------
; projects[feature1][location] = "http://featureserver/fserver"
; projects[feature1][version] = "6.x-1.0"

; Themes
; ------
; projects[theme1][type] = "theme"
; projects[theme1][location] = "http://featureserver/fserver"
; projects[theme1][version] = "6.x-1.0"

; Libraries
; ---------
; libraries[library1][download][type] = "git"
; libraries[library1][download][url] = "git://gitrepo/project.git"
; libraries[library1][directory_name] = "dirname"
; libraries[library1][destination] = "libraries"

; l10n
; ----
; projects[l10n1][subdir] = "l10n"
; projects[l10n1][version] = "6.x-1.0"

; Other
; -----
; libraries[Other1][download][type] = "git"
; libraries[Other1][download][url] = "git://gitrepo/project.git"
; libraries[Other1][directory_name] = "dirname"
; libraries[Other1][destination] = "modules/contrib/project"
