<?php $mixedData=array (
  'page_0' => 
  array (
    'injection_header' => 
    array (
      0 => 
      array (
        'page_index' => 0,
        'name' => 'admin_switch',
        'key' => 'injection_header',
        'type' => 'php',
        'data' => 'return getAdminSwitch();',
        'replace' => 0,
      ),
    ),
    'banner_bottom' => 
    array (
      0 => 
      array (
        'page_index' => 0,
        'name' => 'banner_bottom',
        'key' => 'banner_bottom',
        'type' => 'php',
        'data' => 'return banner_put_nv(4);',
        'replace' => 0,
      ),
    ),
    'banner_right' => 
    array (
      0 => 
      array (
        'page_index' => 0,
        'name' => 'banner_right',
        'key' => 'banner_right',
        'type' => 'php',
        'data' => 'return banner_put_nv(3);',
        'replace' => 0,
      ),
    ),
    'banner_top' => 
    array (
      0 => 
      array (
        'page_index' => 0,
        'name' => 'banner_top',
        'key' => 'banner_top',
        'type' => 'php',
        'data' => 'return banner_put_nv(1);',
        'replace' => 0,
      ),
    ),
    'banner_left' => 
    array (
      0 => 
      array (
        'page_index' => 0,
        'name' => 'banner_left',
        'key' => 'banner_left',
        'type' => 'php',
        'data' => 'return banner_put_nv(2);',
        'replace' => 0,
      ),
    ),
    'injection_footer' => 
    array (
      0 => 
      array (
        'page_index' => 0,
        'name' => 'sys_confirm_popup',
        'key' => 'injection_footer',
        'type' => 'php',
        'data' => 'return $GLOBALS[\'oSysTemplate\']->parseHtmlByName(\'transBoxConfirm.html\', array());',
        'replace' => 0,
      ),
      1 => 
      array (
        'page_index' => 0,
        'name' => 'sys_prompt_popup',
        'key' => 'injection_footer',
        'type' => 'php',
        'data' => 'return $GLOBALS[\'oSysTemplate\']->parseHtmlByName(\'transBoxPrompt.html\', array());',
        'replace' => 0,
      ),
      2 => 
      array (
        'page_index' => 0,
        'name' => 'sys_body',
        'key' => 'injection_footer',
        'type' => 'text',
        'data' => '',
        'replace' => 0,
      ),
      3 => 
      array (
        'page_index' => 0,
        'name' => 'browser_check',
        'key' => 'injection_footer',
        'type' => 'php',
        'data' => 'if(getParam(\'enable_browser_check\') && $_GET[\'enable_browser_check\'] != \'false\') { $sCode = \'<script>var $buoop={required:{e:-4,f:-3,o:-3,s:-1,c:-3},insecure:!0,api:2020.09};function $buo_f(){var e=document.createElement("script");e.src="//browser-update.org/update.min.js",document.body.appendChild(e)}try{document.addEventListener("DOMContentLoaded",$buo_f,!1)}catch(e){window.attachEvent("onload",$buo_f)}</script>\'; echo $sCode; }',
        'replace' => 0,
      ),
    ),
    'injection_head' => 
    array (
      0 => 
      array (
        'page_index' => 0,
        'name' => 'sys_head',
        'key' => 'injection_head',
        'type' => 'text',
        'data' => '',
        'replace' => 0,
      ),
    ),
  ),
); ?>