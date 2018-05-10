<?php
	namespace lib;
	class MyException extends \Exception{
		
		protected $css_config = array(
			'color'       =>  'red',
			'font-weight' =>  'bold',
		);
		
		
		public function __construct($message){
			
			$message = '<div style="'.$this->makeCss().'">WJ的framework的异常信息:'  . $message . '</div>';
			
			parent::__construct($message);
		}
		
		protected function makeCss(){
			$css = '';
			if($this->css_config){
				foreach($this->css_config as $key=>$val){
					$css.= $key . ':' . $val . ';';
				}
			}
			
			return $css;
		}
		
	}