<?php $mixedData=array (
  0 => 
  array (
    'id' => 1,
    'name' => 'cmd',
    'time' => '0 0 * * *',
    'class' => 'ChWsbCronCmd',
    'file' => 'inc/classes/ChWsbCronCmd.php',
    'eval' => '',
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'notifies',
    'time' => '*/10 * * * *',
    'class' => 'ChWsbCronNotifies',
    'file' => 'inc/classes/ChWsbCronNotifies.php',
    'eval' => '',
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'video_comments',
    'time' => '* * * * *',
    'class' => 'ChWsbCronVideoComments',
    'file' => 'flash/modules/video_comments/inc/classes/ChWsbCronVideoComments.php',
    'eval' => '',
  ),
  3 => 
  array (
    'id' => 4,
    'name' => 'sitemap',
    'time' => '0 2 * * *',
    'class' => '',
    'file' => '',
    'eval' => 'ch_import(\'ChWsbSiteMaps\');
ChWsbSiteMaps::generateAllSiteMaps();',
  ),
  4 => 
  array (
    'id' => 5,
    'name' => 'modules',
    'time' => '0 0 * * 0',
    'class' => 'ChWsbCronModules',
    'file' => 'inc/classes/ChWsbCronModules.php',
    'eval' => '',
  ),
); ?>