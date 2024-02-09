<?php $mixedData=array (
  'alerts' => 
  array (
    'system' => 
    array (
      'begin' => 
      array (
        0 => 1,
      ),
      'design_before_output' => 
      array (
        0 => 1,
      ),
    ),
    'profile' => 
    array (
      'before_join' => 
      array (
        0 => 2,
      ),
      'join' => 
      array (
        0 => 2,
        1 => 3,
        2 => 4,
      ),
      'before_login' => 
      array (
        0 => 2,
      ),
      'login' => 
      array (
        0 => 2,
      ),
      'logout' => 
      array (
        0 => 2,
      ),
      'edit' => 
      array (
        0 => 2,
        1 => 3,
        2 => 4,
      ),
      'delete' => 
      array (
        0 => 2,
        1 => 3,
        2 => 4,
      ),
      'change_status' => 
      array (
        0 => 4,
      ),
      'commentRemoved' => 
      array (
        0 => 6,
      ),
    ),
    'ch_forum' => 
    array (
      'new_topic' => 
      array (
        0 => 5,
      ),
    ),
  ),
  'handlers' => 
  array (
    1 => 
    array (
      'class' => 'ChWsbAlertsResponseSystem',
      'file' => 'inc/classes/ChWsbAlertsResponseSystem.php',
      'eval' => '',
    ),
    2 => 
    array (
      'class' => 'ChWsbAlertsResponseProfile',
      'file' => 'inc/classes/ChWsbAlertsResponseProfile.php',
      'eval' => '',
    ),
    3 => 
    array (
      'class' => 'ChWsbUpdateMembersCache',
      'file' => 'inc/classes/ChWsbUpdateMembersCache.php',
      'eval' => '',
    ),
    4 => 
    array (
      'class' => 'ChWsbAlertsResponceMatch',
      'file' => 'inc/classes/ChWsbAlertsResponceMatch.php',
      'eval' => '',
    ),
    5 => 
    array (
      'class' => 'ChForumAlertResponse',
      'file' => 'modules/cheetah/forum/alert_response.php',
      'eval' => '',
    ),
    6 => 
    array (
      'class' => 'ChWsbVideoDeleteResponse',
      'file' => 'flash/modules/video_comments/inc/classes/ChWsbVideoDeleteResponse.php',
      'eval' => '',
    ),
  ),
); ?>