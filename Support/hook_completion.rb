require ENV['TM_SUPPORT_PATH'] + '/lib/osx/plist'
require ENV['TM_SUPPORT_PATH'] + '/lib/ui'
require ENV['TM_BUNDLE_SUPPORT'] + '/misc/ini.rb'
require 'find'

path = File.dirname(ENV['TM_FILEPATH']).split('/')
if !ENV['TM_DRUPAL_VERSION']
  print 'The PHP Drupal Bundle is not installed properly. Press ⌃H for instructions.'
else
  version = ENV['TM_DRUPAL_VERSION']
  while !path.empty?
    folder_info = Dir[path.join('/') + '/*.info', path.join('/') + '/modules/system/system.info']
    if !folder_info.empty?
      core = Ini.new(folder_info.first, false)
      if core["core"] != nil
        version = core["core"].split('.').first.tr('"\'', '')
      end
      break
    end
    path.pop
  end

  choices = OSX::PropertyList.load(File.read(ENV['TM_BUNDLE_SUPPORT'] + '/commands/generated/functions.' + version + '.plist'))
  TextMate::UI.complete(choices, :initial_filter => ENV['TM_CURRENT_WORD'], :extra_chars => '_')
end