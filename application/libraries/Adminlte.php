<?php

class Adminlte
{

    private $ci;
    public $config;
    public $vendor = 'vendor/almasaeed2010/adminlte';
    public $template = 'template/';

    private $files = [];

    private $scriptTags = [
        'css' => '<link rel="stylesheet" href="%s">',
        'js'  => '<script src="%s"></script>'
    ];


    

    public function __construct()
    {

        $this->ci = &get_instance();
        $this->vendor  = base_url($this->vendor);

        $this->__init();
    }

    public function config($item, $value='', $append=false) {

        if(!isset($this->config[$item])) {
            return false;
        }

        if($value !== '') {
            $this->config = $this->ci->config->item('adminlte');

            if($append)  {
                $value  = $this->config[$item] . ' ' .$value;
            }

            $this->config[$item] = $value;
            return;
        }
        
        return $this->config[$item];
    }

    public function setConfig($item, $value) {
        $this->config = $this->ci->config->item('adminlte');
        $this->config[$item] = $value;
    }

    private function __init()
    {
        $this->ci->load->config('adminlte', true);
        $this->config = $this->ci->config->item('adminlte');


        $this->loadAutoloadPlugins();
    }

    private function loadAutoloadPlugins() {
        foreach ($this->config['plugins'] as $plugin) {
            if($plugin['active']) {
                foreach($plugin['files'] as $file) {
                    $this->files[$file['type']][] = ($file['base_url']) ? base_url($file['location']) : $file['location'];
                }
            }
        }
    }

    private function validateMenuItems($item, $default = null)
    {
        $keys = ['header', 'text', 'url', 'icon', 'label', 'label_color', 'active', 'submenu'];

        foreach ($keys as $key) {
            if (!isset($item[$key])) {
                $item[$key] = $default;
            }
        }


        $item['is-active'] = '';
        if(!empty($item['active'])) {
            $item['is-active'] =  (preg_match('['.$item['active'].']', $item['url'])) ? 'active' : '';
        }

        


        return $item;
    }

    private function parseHtml($viewPart, $data)
    {
        return $this->ci->load->view('template/parts/' . $viewPart, $data, true);
    }

    public function vendor($file) {
        return $this->vendor . $file;
    }

    public function menu($items = null)
    {
        $items = (!$items) ? $this->config['menu'] : $items;
        $html = '';

        foreach ($items as $item) {
            $item = $this->validateMenuItems($item);
            $html .= $this->parseHtml('sidebar/sidebar_menu_item', compact('item'));
        }

        return $html;
    }

    public function navbarMenu()
    {
        $html = '';

        foreach ($this->config['navbar_menu_top_left'] as $item) {
            $item = $this->validateMenuItems($item);
            $html .= $this->parseHtml('navbar/navbar_menu_left_item', compact('item'));
        }

        return $html;
    }
   
    public function load_css() {

        if(empty($this->files['css'])) {
            return;
        }

        foreach($this->files['css'] as $file) {
            echo $this->load_file('css', $file);
        }
    }

    public function load_js() {
        if(empty($this->files['js'])) {
            return;
        }

        foreach($this->files['js'] as $file) {
            echo $this->load_file('js', $file);
        }
    }

    public function load_file($type, $file) {
        return sprintf($this->scriptTags[$type], $file);
    }


    public function load($item, $params = '')
    {
        switch ($item) {


            case 'plugins':

                $plugins = (!is_array($params)) ? [$params] : $params;
                
                foreach($plugins as $plugin) {

                    $plugin = $this->config['plugins'][$plugin];

                    if (!$plugin || $plugin['active']) {
                        break;
                    }
    
                    foreach($plugin['files'] as $file) {
                        $this->files[$file['type']][] = ($file['base_url']) ? base_url($file['location']) : $file['location'];
                    }
                }

                break;

          
            default:
                # code...
                break;
        }
    }
}
