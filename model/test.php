<?php
	namespace model;
	//test模型层（继承数据库操作类）
	class test extends \lib\model{
		
		public function index(){
			/*$sql = 'select student.id,student.name,student.sex,student.tel,class.name as cname,home.name as hname from student left join class on student.class_id=class.id left join home on home.id=student.home_id limit 50;';
			
			return $this->_doQuery($sql);*/
			return 'test yilai';
		}
		
		public function del($id){
			return $this->where(array('id'=>$id))->delete('student');
		}
		
		
	}