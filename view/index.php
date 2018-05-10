	<table border="1" cellpadding="0" cellspacing="0" width="400">
		<tr>
			<td>ID</td>
			<td>姓名</td>
			<td>性别</td>
			<td>手机</td>
			<td>专业</td>
			<td>户籍</td>
			<td>操作</td>
		</tr>
		<?php
			$str = '';
			foreach($data as $val){
				$str.='<tr>';
				$str.='<td>'.$val['id'].'</td>';
				$str.='<td>'.$val['name'].'</td>';
				$str.='<td>'.$val['sex'].'</td>';
				$str.='<td>'.$val['tel'].'</td>';
				$str.='<td>'.$val['cname'].'</td>';
				$str.='<td>'.$val['hname'].'</td>';	

				$str.='<td><a href="./index.php?c=index&f=del&id='.$val['id'].'" class="del">删除</a> <a href="./index.php?func=edit&id='.$val['id'].'">修改</a></td>';
				
				$str.='</tr>';
			}
			
			echo $str;
		?>
			
		</table>
	
			<script typet="text/javascript" src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
			
			<script>
				$(".del").click(function(e){
					e.preventDefault();
					if(confirm("确定删除吗")){
						window.location.href = $(this).attr("href");
					}
				})
			</script>
			
			
			
			