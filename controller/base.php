<?php
	/*
	*控制器基类，定义每个控制器类所需的公共方法和变量
	*/
	namespace controller;
	class base{
		protected $view = 'view';//指定模版文件存在的目录
		
		
		//显示模版，并传递参数
		//param $html 模版名
		//param $arr 参数集合
		protected function display($html,array $arr=[]){
			
			//可变变量循环赋值
			foreach($arr as $key=>$val){
				$$key = $val;
			}
			
			//加载模版文件
			include './'.$this->view.'/'.$html.'.php';
		}
		
		protected function jump($url){
			header('Location:'.$url.'');
		}
	}