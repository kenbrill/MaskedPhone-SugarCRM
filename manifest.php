<?php
$manifest = array(
    'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
    'acceptable_sugar_versions' => array(
        'exact_matches' => array(),
        'regex_matches' => array('(.*?)\.(.*?)\.(.*?)$'),
    ),
    'author' => 'Kenneth Brill',
    'description' => 'Adds A Masked Phone Field',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'MaskedPhone',
    'published_date' => '2018-01-15 09:23:51',
    'type' => 'module',
    'version' => '1.0'
);

$installdefs =array (
  'id' => 'CUSTOM1516029822',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/files/custom/javascript/jQuery-Mask/jquery.mask.min.js',
      'to' => 'custom/javascript/jQuery-Mask/jquery.mask.min.js',
      'timestamp' => '2018-01-15 09:22:35',
    ),
    1 => 
    array (
      'from' => '<basepath>/files/custom/Extension/application/Ext/JSGroupings/jQuery-mask_grouping.php',
      'to' => 'custom/Extension/application/Ext/JSGroupings/jQuery-mask_grouping.php',
      'timestamp' => '2018-01-15 09:19:35',
    ),
    2 => 
    array (
      'from' => '<basepath>/files/custom/clients/base/fields/masked-phone/list.hbs',
      'to' => 'custom/clients/base/fields/masked-phone/list.hbs',
      'timestamp' => '2018-01-15 09:19:35',
    ),
    3 => 
    array (
      'from' => '<basepath>/files/custom/clients/base/fields/masked-phone/detail.hbs',
      'to' => 'custom/clients/base/fields/masked-phone/detail.hbs',
      'timestamp' => '2018-01-15 09:19:35',
    ),
    4 => 
    array (
      'from' => '<basepath>/files/custom/clients/base/fields/masked-phone/disabled.hbs',
      'to' => 'custom/clients/base/fields/masked-phone/disabled.hbs',
      'timestamp' => '2018-01-15 09:19:35',
    ),
    5 => 
    array (
      'from' => '<basepath>/files/custom/clients/base/fields/masked-phone/edit.hbs',
      'to' => 'custom/clients/base/fields/masked-phone/edit.hbs',
      'timestamp' => '2018-01-15 09:19:35',
    ),
    6 => 
    array (
      'from' => '<basepath>/files/custom/clients/base/fields/masked-phone/masked-phone.js',
      'to' => 'custom/clients/base/fields/masked-phone/masked-phone.js',
      'timestamp' => '2018-01-15 09:18:43',
    ),
  ),
);