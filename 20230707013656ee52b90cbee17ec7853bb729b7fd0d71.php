<?php
include("core/common.php");
$id = "1";
if ($id=="") {
    $result=array('code'=>'false','msg'=>'参数不完整');
} else {
    
        

                $timea = time();

                
                    $app = $dbh->query("SELECT * FROM `zrw` WHERE `rw_id`='{$id}' limit 1")->fetch();

                        
                        $result=array('code'=>'true','msg'=>'获取成功','任务名称'=>$app['rwmc'],'下载任务'=>$app['xzkg'],'任务地址'=>$app['rwurl'],'任务答案'=>$app['rwpass'],'任务提示1'=>$app['rwjs1'],"任务提示2"=>$app['rwjs2'],'任务提示3'=>$app['rwjs3'],'任务图标'=>$app['rwtb'],'任务图片1'=>$app['rwtp1'],'任务图片2'=>$app['rwtp2'],'任务图片3'=>$app['rwtp3']);

                    }



echo json_encode($result);
?>