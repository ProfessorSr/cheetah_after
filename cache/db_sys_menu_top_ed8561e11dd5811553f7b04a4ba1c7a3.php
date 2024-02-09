<?php $mixedData=array (
  60 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Profile',
    'Link' => '{profileLink}|{profileUsername}|profile.php?ID={profileID}',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '9',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'View Profile',
  ),
  82 => 
  array (
    'Type' => 'custom',
    'Caption' => '_profile_info',
    'Link' => 'profile_info.php?ID={profileID}',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '9',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Info',
  ),
  83 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Friends',
    'Link' => 'viewFriends.php?iUser={profileID}',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '9',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Member Friends',
  ),
  98 => 
  array (
    'Type' => 'system',
    'Caption' => '_Account',
    'Link' => 'join.php',
    'Visible' => 'non',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '0',
    'Picture' => 'user',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Join',
  ),
  118 => 
  array (
    'Type' => 'system',
    'Caption' => '_Dashboard',
    'Link' => 'member.php',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '0',
    'Picture' => 'tachometer',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Dashboard',
  ),
  101 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Account Home',
    'Link' => 'member.php',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '118',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Account home',
  ),
  126 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Activity',
    'Link' => 'communicator.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '118',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Activity',
  ),
  107 => 
  array (
    'Type' => 'custom',
    'Caption' => '_ps_tmenu_privacy_settings',
    'Link' => 'member_privacy.php',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => 'ch_import(\'ChWsbPrivacy\'); return ChWsbPrivacy::isPrivacyPage();',
    'Parent' => '118',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Privacy Groups',
  ),
  191 => 
  array (
    'Type' => 'custom',
    'Caption' => '_sbs_tmenu_my_subscriptions',
    'Link' => 'member_subscriptions.php',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '118',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Subscriptions',
  ),
  109 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Unregister',
    'Link' => 'unregister.php',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '118',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Unregister',
  ),
  192 => 
  array (
    'Type' => 'custom',
    'Caption' => '_sys_pmt_tmenu_cart',
    'Link' => 'cart.php|modules/?r={sys_payment_module_uri}/cart/|modules/?r={sys_payment_module_uri}/history/',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => 'ch_import(\'ChWsbPayments\'); return ChWsbPayments::getInstance()->isActive();',
    'Parent' => '118',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Cart',
  ),
  193 => 
  array (
    'Type' => 'custom',
    'Caption' => '_sys_pmt_tmenu_payments',
    'Link' => 'orders.php|modules/?r={sys_payment_module_uri}/orders/|modules/?r={sys_payment_module_uri}/details/',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => 'ch_import(\'ChWsbPayments\'); return ChWsbPayments::getInstance()->isActive();',
    'Parent' => '118',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Payments',
  ),
  194 => 
  array (
    'Type' => 'custom',
    'Caption' => '_two_factor_auth_short',
    'Link' => 'two_factor_auth.php?mode=status|two_factor_auth.php?mode=setup|two_factor_auth.php?mode=sbcodes',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => 'if (getParam(\'two_factor_auth\')) return true;',
    'Parent' => '118',
    'Picture' => 'key',
    'Icon' => 'key',
    'BQuickLink' => '1',
    'Statistics' => '',
    'Name' => 'TwoFactorAuth',
  ),
  11 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Profile',
    'Link' => '{memberLink}|{memberUsername}|profile.php?ID={memberID}',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '4',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'View My Profile',
  ),
  111 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Info',
    'Link' => 'profile_info.php',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '4',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Profile Info',
  ),
  80 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Friends',
    'Link' => 'viewFriends.php?iUser={memberID}',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '4',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => 'mfa',
    'Name' => 'My Friends',
  ),
  179 => 
  array (
    'Type' => 'system',
    'Caption' => '_Mail',
    'Link' => 'mail.php?mode=inbox',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '0',
    'Picture' => 'envelope',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Mail',
  ),
  12 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Compose',
    'Link' => 'mail.php?mode=compose',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '179',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Mail Compose',
  ),
  17 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Inbox',
    'Link' => 'mail.php?mode=inbox',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '179',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '1',
    'Statistics' => 'mma',
    'Name' => 'Mail Inbox',
  ),
  14 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Outbox',
    'Link' => 'mail.php?mode=outbox',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '179',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Mail Outbox',
  ),
  18 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Trash',
    'Link' => 'mail.php?mode=trash',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '179',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Mail Trash',
  ),
  19 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Dialog',
    'Link' => 'mail.php?mode=dialog',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '179',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Dialogs',
  ),
  5 => 
  array (
    'Type' => 'top',
    'Caption' => '_Home',
    'Link' => 'index.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '0',
    'Picture' => 'home',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Home',
  ),
  6 => 
  array (
    'Type' => 'top',
    'Caption' => '_People',
    'Link' => 'browse.php|search.php|calendar.php|tags.php?tags_mode=profile|search.php?show=match',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '0',
    'Picture' => 'user',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'People',
  ),
  7 => 
  array (
    'Type' => 'custom',
    'Caption' => '_All Members',
    'Link' => 'browse.php|browse',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '6',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'All members',
  ),
  127 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Match',
    'Link' => 'search.php?show=match',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => 'return isLogged() && getParam(\'enable_match\') == \'on\';',
    'Parent' => '6',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Match',
  ),
  25 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Online',
    'Link' => 'search.php?online_only=1',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '6',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Online Members',
  ),
  128 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Featured',
    'Link' => 'search.php?show=featured',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '6',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Featured',
  ),
  129 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Top Rated',
    'Link' => 'search.php?show=top_rated',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '6',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Top Rated',
  ),
  130 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Popular',
    'Link' => 'search.php?show=popular',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '6',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Popular',
  ),
  131 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Birthdays',
    'Link' => 'search.php?show=birthdays',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '6',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Birthdays',
  ),
  132 => 
  array (
    'Type' => 'custom',
    'Caption' => '_People_Calendar',
    'Link' => 'calendar.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '6',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'People Calendar',
  ),
  8 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Search',
    'Link' => 'search.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '6',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Search Members',
  ),
  138 => 
  array (
    'Type' => 'top',
    'Caption' => '_Search',
    'Link' => 'search_home.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '0',
    'Picture' => 'search',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Search',
  ),
  176 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Search_Home',
    'Link' => 'search_home.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '138',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Search Home',
  ),
  139 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Keyword_Search',
    'Link' => 'searchKeyword.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '138',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Keyword Search',
  ),
  141 => 
  array (
    'Type' => 'custom',
    'Caption' => '_People_Search',
    'Link' => 'search.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '138',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'People Search',
  ),
  159 => 
  array (
    'Type' => 'top',
    'Caption' => '_help',
    'Link' => 'help.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '0',
    'Picture' => 'question-circle',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Help',
  ),
  163 => 
  array (
    'Type' => 'custom',
    'Caption' => '_help',
    'Link' => 'help.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '159',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Help',
  ),
  160 => 
  array (
    'Type' => 'custom',
    'Caption' => '_FAQ',
    'Link' => 'faq.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '159',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'FAQ',
  ),
  161 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Contact',
    'Link' => 'contact.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '159',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Contact',
  ),
  162 => 
  array (
    'Type' => 'custom',
    'Caption' => '_Advice',
    'Link' => 'advice.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '159',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Advice',
  ),
  120 => 
  array (
    'Type' => 'top',
    'Caption' => '_About',
    'Link' => 'about_us.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '0',
    'Picture' => 'info-circle',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'About',
  ),
  175 => 
  array (
    'Type' => 'custom',
    'Caption' => '_About',
    'Link' => 'about_us.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '120',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'About',
  ),
  122 => 
  array (
    'Type' => 'custom',
    'Caption' => '_TERMS_OF_USE_H',
    'Link' => 'terms_of_use.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '120',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Terms of Use',
  ),
  123 => 
  array (
    'Type' => 'custom',
    'Caption' => '_PRIVACY_H',
    'Link' => 'privacy.php',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '120',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Privacy Policy',
  ),
  9 => 
  array (
    'Type' => 'system',
    'Caption' => '{profileNick}',
    'Link' => '{profileUsername}|pedit.php?ID={profileID}',
    'Visible' => 'non,memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '0',
    'Picture' => '',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'Profile View',
  ),
  4 => 
  array (
    'Type' => 'system',
    'Caption' => '{memberNick}',
    'Link' => '{memberLink}|{memberUsername}|change_status.php',
    'Visible' => 'memb',
    'Target' => '',
    'Onclick' => '',
    'Check' => '',
    'Parent' => '0',
    'Picture' => 'user',
    'Icon' => '',
    'BQuickLink' => '0',
    'Statistics' => '',
    'Name' => 'My Profile',
  ),
); ?>