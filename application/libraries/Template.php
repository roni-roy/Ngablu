<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Template{
	private $CI;
	private $css;
	private $js;
	
	public function __construct(){
		$this->CI  =& get_instance();
		$this->css = array();
		$this->js = array();
	}
	
	public function addCss($path){
		$this->css[] = $path;
	}
	
	public function addJs($path){
		$this->js[] = $path;
	}
	
	public function load($content='template/content',$data=array()){
		$data_header = array();
		$data_footer = array('js' => $this->js);
		$this->CI->load->view('template/header',$data_header);
		$this->CI->load->view($content,$data);
		$this->CI->load->view('template/footer',$data_footer);
	}
	
}
