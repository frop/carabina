<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
  protected $layout = 'application';

  protected $stylesheets = array(
    'application'
  );
  protected $javascripts = array(
    'application'
  );

  protected function render($content, $layout = NULL) {
    $view_data = array(
      'content' => $content,
      'css' => $this->get_stylesheets(),
      'js' => $this->get_javascripts()
    );

    $template = 'layouts/'.($layout? : $this->layout);
    $this->load->view($template, $view_data);
  }

  protected function get_stylesheets() {
    return $this->stylesheets;
  }

  protected function get_javascripts() {
    return $this->javascripts;
  }

  protected function css($file_list){
    if (!is_array($file_list)){
      $file_list = array($file_list);
    }

    $this->stylesheets = array_merge($this->stylesheets, $file_list);
  }

  protected function js($file_list){
    if (!is_array($file_list)){
      $file_list = array($file_list);
    }

    $this->javascripts = array_merge($this->javascripts, $file_list);
  }
}
