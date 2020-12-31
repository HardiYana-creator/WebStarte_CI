<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

// /* load the MX_Router class */
// require APPPATH . "third_party/MX/Controller.php";

// class MY_Controller extends MX_Controller
// {
//     public function __construct()
//     {
//         parent::__construct();
//         $this->_hmvc_fixes();
//     }

//     public function _hmvc_fixes()
//     {
//         //fix callback form_validation
//         //https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
//         $this->load->library('form_validation');
//         $this->form_validation->CI =& $this;
//     }
// }

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
class Admin_Controller extends CI_Controller
{
    public $layout 		= "template_admin";
    public $path_theme 		= "/assets/adminlte";
    public $path_assets       = "assets";
    public $content 		= "";
    public $title;
    public $id;
    public $user;
    public $assets 			= array();
    public $current_class;
    public $current_method;
    public $vars;
    public function __construct()
    {
        parent::__construct();
        $this->current_class 	= strtolower($this->router->fetch_class());
        $this->current_method = strtolower($this->router->fetch_method());
        //$this->load->model('admin/accounts/m_user');
        $this->init();
    }
   
    public function template($param = array(),$dir = false)
    {
        $this->init();
        $this->config->set_item('fs_vars', $param);
        $param['content'] = $this->content;
        for ($i=0; $i < count($this->assets); $i++) {
            if($dir){
                  $this->load->view($this->dir_content().'/'.$this->assets[$i],$param);
            }else{
                  $this->load->view($this->assets[$i],$param);
            }
        }
        $this->load->view($this->layout, $param);
    }
    public function init()
    {
        $this->config->set_item('fs_theme_path', $this->path_theme);
        $this->config->set_item('fs_assets_path', $this->path_assets);
        $this->config->set_item('fs_title', $this->title);
    }
    public function load_view($view, $array = array())
    {
        $this->load->view($this->dir_content().'/'.$view, $array);
    }
    private function dir_content()
    {
        $konten = explode("/", $this->content);
        if (count($konten)>0) {
            $dir = substr($this->content, 0, strlen($this->content)- strlen($konten[count($konten)-1]) - 1);
        } else {
            $dir = "";
        }
        return $dir;
    }
    public function load_asset($view, $param=array(), $current_dir = false)
    {
        if ($current_dir) {
            return $this->load->view($this->dir_content().'/'.$view, $param, true);
        } else {
            return $this->load->view($view, $param, true);
        }
    }
    public function empty($val)
    {
        if ($val==null) {
            return true;
        }
        if (empty(trim($val)) && $val != 0) {
            return true;
        }
        return false;
    }
}
