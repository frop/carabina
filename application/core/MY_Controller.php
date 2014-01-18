<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $_layout = 'application';

    protected $stylesheets = array('application');

    protected $javascripts = array('application');

    public function setLayout($layout)
    {
        $this->_layout = $layout;
    }

    public function json()
    {

    }

    public function view($namespaced_view, $data = array())
    {
        $view = strtolower(get_called_class()).'/'.$namespaced_view;

        $template = array(
          'content' => $this->load->view($view, $data, true),
          'css' => $this->get_stylesheets(),
          'js' => $this->get_javascripts()
        );

        $this->load->view('layouts/'.$this->_layout, $template);
    }

    protected function get_stylesheets()
    {
        return $this->stylesheets;
    }

    protected function get_javascripts()
    {
        return $this->javascripts;
    }

    protected function css($file_list)
    {
        if (!is_array($file_list)){
            $file_list = array($file_list);
        }

        $this->stylesheets = array_merge($this->stylesheets, $file_list);
    }

    protected function js($file_list)
    {
        if (!is_array($file_list)){
            $file_list = array($file_list);
        }

        $this->javascripts = array_merge($this->javascripts, $file_list);
    }
}
