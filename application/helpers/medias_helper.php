<?php

if (!defined('MEDIA_HELPER')){
  define('MEDIA_HELPER', TRUE);

  function load_js($js_list){
    $path = base_url("/assets/js");

    if (ENVIRONMENT == 'development'){
      foreach($js_list as $js){
        js_tag($path.'/'.$js.'.js');
      }
    }else{
      $js = 'global';
      js_tag($path.'/'.JS_VERSION.'_'.$js.'.js');
    }
  }

  function js_tag($file){
    echo '<script type="text/javascript" src="'.$file.'"></script>'."\n";
  }

  function load_css($css_list){
    $path = base_url("/assets/css");

    if (ENVIRONMENT == 'development'){
      foreach($css_list as $css){
        css_tag($path.'/'.$css.'.css');
      }
    }else{
      $css = 'global';
      css_tag($path.'/'.CSS_VERSION.'_'.$css.'.css');
    }
  }

  function css_tag($file){
    echo '<link type="text/css" rel="stylesheet" href="'.$file.'" media="all">'."\n";
  }
}
