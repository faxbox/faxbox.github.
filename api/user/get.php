<?php
	require_once("../../fn/mysqli.php");
	$arrWhere=['user_id'=>$uid];
	if(isset($_SESSION['user'])){//�����ж��û��Ƿ��¼
		$arr='*';
		$login="true";
	}
	else{
		$arr=['user_icon','user_picon','user_title'];
		$login="false";
	}
	$result= mysql_get('user',$arr,$arrWhere,null);
	$result=json_decode($result);
	$result['0']->user_pwd="****";
	$result=json_encode($result);
	echo '{"result":"success","login":'.$login.',"msg":'.$result.'}';
?>