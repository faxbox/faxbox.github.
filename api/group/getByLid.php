<?php
	require_once("../../fn/mysqli.php");
	if($_POST&&array_key_exists('lid',$_POST)){
		$arrWhere=['group_lid'=>$_POST['lid'],'group_uid'=>$uid];
		$sort=['group_sort'=>'DESC'];
		$result= mysql_get('groups','*',$arrWhere,$sort);
		echo '{"result":"success","msg":'.$result.'}';
	}
	else{
		echo '{"result":"faild","msg":"参数错误"}';
	}
?>