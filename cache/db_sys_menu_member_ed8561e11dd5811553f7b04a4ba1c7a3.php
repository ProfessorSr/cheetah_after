<?php $mixedData=array (
  'top' => 
  array (
    1 => 
    array (
      'ID' => 1,
      'Caption' => '{evalResult}',
      'Name' => 'MemberBlock',
      'Icon' => '',
      'Link' => '{ProfileLink}',
      'Script' => '',
      'Eval' => 'return \'<b class="menu_item_username">\' . getNickName({ID}) . \'</b>\';',
      'PopupMenu' => 'ch_import(\'ChWsbUserStatusView\');
$oStatusView = new ChWsbUserStatusView();
return $oStatusView->getMemberMenuStatuses();',
      'Order' => 1,
      'Active' => '1',
      'Movable' => 3,
      'Clonable' => 1,
      'Editable' => 0,
      'Deletable' => 0,
      'Target' => '',
      'Position' => 'top',
      'Type' => 'link',
      'Parent' => 0,
      'Bubble' => '',
      'Description' => '_Presence',
      'linked_items' => 
      array (
      ),
    ),
  ),
  'top_extra' => 
  array (
    2 => 
    array (
      'ID' => 2,
      'Caption' => '_Mail',
      'Name' => 'Mail',
      'Icon' => 'envelope',
      'Link' => 'mail.php?mode=inbox',
      'Script' => '',
      'Eval' => '',
      'PopupMenu' => 'ch_import( \'ChTemplMailBox\' );
// return list of messages ;
return ChTemplMailBox::get_member_menu_messages_list({ID});',
      'Order' => 1,
      'Active' => '1',
      'Movable' => 3,
      'Clonable' => 1,
      'Editable' => 0,
      'Deletable' => 0,
      'Target' => '',
      'Position' => 'top_extra',
      'Type' => 'link',
      'Parent' => 0,
      'Bubble' => 'ch_import( \'ChTemplMailBox\' );
// return list of new messages ;
$aRetEval= ChTemplMailBox::get_member_menu_bubble_new_messages({ID}, {iOldCount});',
      'Description' => '_Mail',
      'linked_items' => 
      array (
      ),
    ),
    3 => 
    array (
      'ID' => 3,
      'Caption' => '_Friends',
      'Name' => 'Friends',
      'Icon' => 'users',
      'Link' => 'viewFriends.php?iUser={ID}',
      'Script' => '',
      'Eval' => '',
      'PopupMenu' => 'ch_import( \'ChWsbFriendsPageView\' );
return ChWsbFriendsPageView::get_member_menu_friends_list({ID});',
      'Order' => 3,
      'Active' => '1',
      'Movable' => 3,
      'Clonable' => 1,
      'Editable' => 0,
      'Deletable' => 0,
      'Target' => '',
      'Position' => 'top_extra',
      'Type' => 'link',
      'Parent' => 0,
      'Bubble' => 'ch_import( \'ChWsbFriendsPageView\' );
$aRetEval = ChWsbFriendsPageView::get_member_menu_bubble_friend_requests( {ID}, {iOldCount});',
      'Description' => '_Friends',
      'linked_items' => 
      array (
      ),
    ),
    4 => 
    array (
      'ID' => 4,
      'Caption' => '_sys_pmt_shopping_cart_caption',
      'Name' => 'ShoppingCart',
      'Icon' => 'shopping-cart',
      'Link' => 'cart.php',
      'Script' => '',
      'Eval' => '',
      'PopupMenu' => 'ch_import(\'ChWsbPayments\');
return ChWsbPayments::getInstance()->getCartItems();',
      'Order' => 4,
      'Active' => '1',
      'Movable' => 3,
      'Clonable' => 1,
      'Editable' => 0,
      'Deletable' => 0,
      'Target' => '',
      'Position' => 'top_extra',
      'Type' => 'link',
      'Parent' => 0,
      'Bubble' => 'ch_import(\'ChWsbPayments\');
$oPayment = ChWsbPayments::getInstance();
if($oPayment->isActive()) $aRetEval = $oPayment->getCartItemCount({ID}, {iOldCount}); else $isSkipItem = true;',
      'Description' => '_sys_pmt_shopping_cart_description',
      'linked_items' => 
      array (
      ),
    ),
    5 => 
    array (
      'ID' => 5,
      'Caption' => '_Admin Panel',
      'Name' => 'AdminPanel',
      'Icon' => 'wrench',
      'Link' => '{evalResult}',
      'Script' => '',
      'Eval' => 'return isAdmin() ? $GLOBALS[\'site\'][\'url_admin\'] : \'\';',
      'PopupMenu' => '',
      'Order' => 5,
      'Active' => '1',
      'Movable' => 3,
      'Clonable' => 1,
      'Editable' => 1,
      'Deletable' => 1,
      'Target' => '',
      'Position' => 'top_extra',
      'Type' => 'link',
      'Parent' => 0,
      'Bubble' => '',
      'Description' => '_Go admin panel',
      'linked_items' => 
      array (
      ),
    ),
    6 => 
    array (
      'ID' => 6,
      'Caption' => '_sys_add_content',
      'Name' => 'AddContent',
      'Icon' => 'plus',
      'Link' => 'javascript:void(0);',
      'Script' => '',
      'Eval' => 'return array(\'evalResultCssClassWrapper\' => \'extra_item_add_content\');',
      'PopupMenu' => 'ch_import( \'ChWsbUserStatusView\' );
$oStatusView = new ChWsbUserStatusView();
return $oStatusView -> getStatusField({ID});',
      'Order' => 6,
      'Active' => '1',
      'Movable' => 3,
      'Clonable' => 0,
      'Editable' => 0,
      'Deletable' => 0,
      'Target' => '',
      'Position' => 'top_extra',
      'Type' => 'link',
      'Parent' => 0,
      'Bubble' => '$isSkipItem = $aReplaced[$sPosition][$iKey][\'linked_items\'] ? false : true;
$aRetEval = false;',
      'Description' => '_sys_add_content',
      'linked_items' => 
      array (
      ),
    ),
  ),
); ?>