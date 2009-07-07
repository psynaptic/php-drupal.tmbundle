class ${1:<?php print ucfirst($basename); ?>}TestCase extends DrupalWebTestCase {
  public static function getInfo() {
    return array(
      'name' => t('${1} tests}'),
      'description' => t('${3:One or more complete sentences explaining the test.}'),
      'group' => t('${1}'),
    );
  }

  function setUp() {
    parent::setUp('${1/(\w+)/(?1:\L$0)/g}'$6);
  }

  $0
}
