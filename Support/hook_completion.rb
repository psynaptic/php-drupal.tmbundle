require ENV['TM_SUPPORT_PATH'] + '/lib/osx/plist'
require ENV['TM_SUPPORT_PATH'] + '/lib/ui'
require ENV['TM_BUNDLE_SUPPORT'] + '/ini.rb'
require 'find'

version = ENV['TM_DRUPAL_VERSION'] || 7
version = version.to_s

if !ENV['TM_FILEPATH'].nil?
  path = File.dirname(ENV['TM_FILEPATH']).split('/')
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
end

plist = ENV['TM_BUNDLE_SUPPORT'] + '/commands/generated/functions.' + version + '.plist'
if File.exists?(plist)
  choices = OSX::PropertyList.load(File.read(plist))
  TextMate::UI.complete(choices, :initial_filter => ENV['TM_CURRENT_WORD'], :extra_chars => '_')
else
  print "Function completion is not available for your Drupal version."
end
