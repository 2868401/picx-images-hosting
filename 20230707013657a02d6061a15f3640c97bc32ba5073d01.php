<?php
include("../core/common.php");
include("../core/login.php");

if ($is_admin!=1) {
    exit("<script language='javascript'>window.location.href='./login.php';</script>");
}
$appid="1";
$app = $dbh->query("SELECT * FROM `wrie` WHERE `wrie_id`='{$appid}' limit 1")->fetch();
$rw = $dbh->query("SELECT * FROM `zrw` WHERE `rw_id`='{$appid}' limit 1")->fetch();
 $tcc = $dbh->query("SELECT * FROM `gift` WHERE `gift_id`='{$appid}' limit 1")->fetch();
                        if ($app) {

                        } else {
                            exit('<div class="alert alert-info"><strong>提示!</strong> 合集不存在</div>');
                        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>系统设置-后台管理</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/set.css">
    <script src="https://kit.fontawesome.com/a4e1a7c8da.js" crossorigin="anonymous"></script>
</head>
<body>
    <input type="checkbox" name="topbom" id="topbom" hidden>
    <div class="head">
        <span class="title"><i class="fas fa-ghost"></i>软件库</span>
        <ul>
                    <li>
                <a href="app-list.php">
                    <span><i class="fas fa-tools"></i></span>
                    <span>任务管理</span>
                </a>
            </li>
            <li>
                <a href="app-up.php">
                    <span><i class="fas fa-paper-plane"></i></span>
                    <span>任务添加</span>
                </a>
            </li>
           
            <li>
                <a href="index.php">
                    <span><i class="fas fa-meh"></i></span>
                    <span>合集管理</span>
                </a>
            </li>
            <li>
                <a href="siet-up.php">
                    <span><i class="far fa-handshake"></i></span>
                    <span>合集添加</span>
                </a>
            </li>
            <li>
                <a href="set.php" class="select">
                    <span><i class="fas fa-sliders-h"></i></span>
                    <span>系统设置</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="back">
        <header class="hetle">
            <label for="topbom">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <h4>系统设置</h4>
            <a href="./login.php?logout">
                <span><i class="fas fa-sign-in-alt"></i></span>
                <span>退出登录</span>
            </a>
        </header>
        <div class="set">
        
        
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">版本更新</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">轮播图设置</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">总任务配置</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu3">弹窗配置</a>
  </li>

</ul>
 
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active container" id="home"><div class="list">
                <h2>发布更新</h2>
                <form action="gx">
                    <div class="form-group">
                    
                    
                        <label for="pwd">版本号</label>
                        
                        <?php
                    
                     
                      echo '<input type="text" id="bb" value="'.$app['banb'].'" class="form-control">';
                       
                         ?>
                        
    
                    </div>
                    <div class="form-group">
                        <label for="pwd">下载链接</label>
                                             <?php
                    
                     
                      echo '<input type="text" id="lj" value="'.$app['gxdz'].'" class="form-control">';
                       
                         ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">更新内容</label>
                        
                                                <?php
                    
                     
                      echo '<textarea class="form-control" id="nr" rows="5">'.$app['content'].'                        </textarea>';
                       
                         ?>

                    </div>
                    <p class="btn btn-primary" id="ggsub">更新软件</p>
                </form>
            </div></div>
  <div class="tab-pane container" id="menu1"><div class="list">
                <h2>轮播图(1)</h2>
                <form action="zf">
                    <div class="form-group">
                        <label for="pwd">轮播图链接</label>
                        
                      <?php
                    
                     
                      echo '<input type="text" id="lbt1" value="'.$app['lb1'].'" class="form-control">';
                       
                         ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">点击跳转链接</label>
                        <?php
                    
                     
                      echo '<input type="text" id="lbturl1" value="'.$app['lbzt1'].'" class="form-control">';
                       
                         ?>
                    </div>

                    <p class="btn btn-primary" id="lb1">修改设置</p>
                </form>
            </div><div class="list">
                <h2>轮播图(2)</h2>
                <form action="zf">
                    <div class="form-group">
                        <label for="pwd">轮播图链接</label>
                        <?php
                    
                     
                      echo '<input type="text" id="lbt2" value="'.$app['lb2'].'" class="form-control">';
                       
                         ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">点击跳转链接</label>
                        <?php
                    
                     
                      echo '<input type="text" id="lbturl2" value="'.$app['lbzt2'].'" class="form-control">';
                       
                         ?>
                    </div>

                    <p class="btn btn-primary" id="lb2">修改设置</p>
                </form>
            </div><div class="list">
                <h2>轮播图(3)</h2>
                <form action="zf">
                    <div class="form-group">
                        <label for="pwd">轮播图链接</label>
<?php
                    
                     
                      echo '<input type="text" id="lbt3" value="'.$app['lb3'].'" class="form-control">';
                       
                         ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">点击跳转链接</label>
                        <?php
                    
                     
                      echo '<input type="text" id="lbturl3" value="'.$app['lbzt3'].'" class="form-control">';
                       
                         ?>
                    </div>

                    <p class="btn btn-primary" id="lb3">修改设置</p>
                </form>
            </div><div class="list">
                <h2>轮播图(4)</h2>
                <form action="zf">
                    <div class="form-group">
                        <label for="pwd">轮播图链接</label>
                      <?php
                    
                     
                      echo '<input type="text" id="lbt4" value="'.$app['lb4'].'" class="form-control">';
                       
                         ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">点击跳转链接</label>
                                            <?php
                    
                     
                      echo '<input type="text" id="lbturl4" value="'.$app['lbzt4'].'" class="form-control">';
                       
                         ?>
                    </div>
                    
                    <p class="btn btn-primary" id="lb4">修改设置</p>
                </form>
            </div></div>
  <div class="tab-pane container" id="menu2"><div class="list">
                <h2>总任务</h2>
                <form action="gx">
                    <div class="form-group">
                    
                    
<div class="input-group mb-3" style="margin-top: 10px;">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="rwkg">任务开关</label>
                    </div>
                    <select class="custom-select" id="rwkg">
                        
                         <?php 
                    
                    
if ($rw['rwkg']=="true") {

                      
                    echo '  <option value="true">开启</option>
                      <option value="false">关闭</option>';
                      



            } else {

                                          echo'  <option value="false">关闭</option>
                      <option value="true">开启</option>' ;


            }
                    
                    ?>
                    </select>
                </div>
    
                    </div>
                    <div class="form-group">
                    
                    
                        <label for="pwd">任务名称</label>
                        
                        <?php
                    
                     
                      echo '<input type="text" id="rwmc" value="'.$rw['rwmc'].'" class="form-control">';
                       
                         ?>
                        
    
                    </div>
                    <div class="form-group">
                    
                    
<div class="input-group mb-3" style="margin-top: 10px;">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="xzrw">下载任务</label>
                    </div>
                    <select class="custom-select" id="xzrw">
                        
                         <?php 
                    
                    
if ($rw['xzrw']=="true") {

                      
                    echo '  <option value="true">开启</option>
                      <option value="false">关闭</option>';
                      



            } else {

                                          echo'  <option value="false">关闭</option>
                      <option value="true">开启</option>' ;


            }
                    
                    ?>
                    </select>
                </div>
                    </div>
                                        <div class="form-group">
                    
                    
                        <label for="pwd">任务密码</label>
                        
                        <?php
                    
                     
                      echo '<input type="text" id="rwpass" value="'.$rw['rwpass'].'" class="form-control">';
                       
                         ?>
                        
    
                    </div>
                    <div class="form-group">
                    
                    
                        <label for="pwd">任务介绍图1</label>
                        
                        <?php
                    
                     
                      echo '<input type="text" id="rwtp1" value="'.$rw['rwtp1'].'" class="form-control">';
                       
                         ?>
                        
    
                    </div>
                    <div class="form-group">
                    
                    
                        <label for="pwd">任务介绍图2</label>
                        
                        <?php
                    
                     
                      echo '<input type="text" id="rwtp2" value="'.$rw['rwtp2'].'" class="form-control">';
                       
                         ?>
                        
    
                    </div>
                    <div class="form-group">
                    
                    
                        <label for="pwd">任务介绍图3</label>
                        
                        <?php
                    
                     
                      echo '<input type="text" id="rwtp3" value="'.$rw['rwtp3'].'" class="form-control">';
                       
                         ?>
                        
    
                    </div>
                    
                                <div class="form-group">
                    <label for="exampleFormControlTextarea1">任务介绍1</label>
                    <div class="input-group">
 
 
                       <?php 
                 
                    echo '<textarea class="form-control" value="'.$rw['rwjs1'].'" id="rwjs1" rows="5">'.$rw['rwjs1'].'</textarea>';
                    ?>
                     
</div>
                </div>
                    
                                <div class="form-group">
                    <label for="exampleFormControlTextarea1">任务介绍2</label>
                    <div class="input-group">
 
 
                       <?php 
                 
                    echo '<textarea class="form-control" value="'.$rw['rwjs2'].'" id="rwjs2" rows="5">'.$rw['rwjs2'].'</textarea>';
                    ?>
                     
</div>
                </div>
                  
                                <div class="form-group">
                    <label for="exampleFormControlTextarea1">任务介绍3</label>
                    <div class="input-group">
 
 
                       <?php 
                 
                    echo '<textarea class="form-control" value="'.$rw['rwjs3'].'" id="rwjs3" rows="5">'.$rw['rwjs3'].'</textarea>';
                    ?>
                     
</div>
                </div>
                    <div class="form-group">
                    
                    
                        <label for="pwd">任务图标</label>
                        
                        <?php
                    
                     
                      echo '<input type="text" id="rwtb" value="'.$rw['rwtb'].'" class="form-control">';
                       
                         ?>
                        
    
                    </div>
                    <div class="form-group">
                        <label for="pwd">任务地址</label>
                                             <?php
                    
                     
                      echo '<input type="text" id="rwurl" value="'.$rw['rwurl'].'" class="form-control">';
                       
                         ?>
                    </div>
                    
                    <p class="btn btn-primary" id="zrw">修改任务</p>
                </form>
            </div></div>
   <div class="tab-pane container" id="menu3">         <div class="list">
                <h2>弹窗配置</h2>
                <form action="zf">
                <div class="form-group">
                    
                    
<div class="input-group mb-3" style="margin-top: 10px;">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="tckg">弹窗开关</label>
                    </div>
                    <select class="custom-select" id="tckg">
                        
                         <?php 
                    
                    
if ($tcc['tckg']=="true") {

                      
                    echo '  <option value="true">开启</option>
                      <option value="false">关闭</option>';
                      



            } else {

                                          echo'  <option value="false">关闭</option>
                      <option value="true">开启</option>' ;


            }
                    
                    ?>
                    </select>
                </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">弹窗内容</label>
                                             <?php
                    
                     
                      echo '<input type="text" id="tcnr" value="'.$tcc['tcnr'].'" class="form-control">';
                       
                         ?>
                    </div>
                     <div class="form-group">
                        <label for="pwd">弹窗图片</label>
                                             <?php
                    
                     
                      echo '<input type="text" id="tctp" value="'.$tcc['tctp'].'" class="form-control">';
                       
                         ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">按钮内容</label>
                                             <?php
                    
                     
                      echo '<input type="text" id="tcan" value="'.$tcc['annr'].'" class="form-control">';
                       
                         ?>
                    </div>
                    <div class="form-group">
                    
                    
<div class="input-group mb-3" style="margin-top: 10px;">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="ansj">按钮事件</label>
                    </div>
                    <select class="custom-select" id="ansj">
                        
                         <?php 
                    
                    
if ($tcc['ansj']=="qun") {

                      
                    echo '  <option value="qun">加群</option>
                      <option value="tzurl">跳转网址</option>';
                      



            } else {

                                          echo'  <option value="tzurl">跳转网址</option>
                      <option value="qun">加群</option>' ;


            }
                    
                    ?>
                    </select>
                </div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">事件</label>
                                             <?php
                    
                     
                      echo '<input type="text" id="sjnr" value="'.$tcc['sj'].'" class="form-control">';
                       
                         ?>
                    </div>
                    
                    <p class="btn btn-primary" id="tc">修改</p>
                </form>
            </div></div>
</div>
</div>
            
 


          
            
            

            
            
            
            
            
         </div>   
            
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        $("#emsub").click(function(){
            var email = $("#email").val();
            var token = $("#token").val();
            $.ajax({
                type: "POST",
                url: "ajax.php?act=setemail",
                data: {"token":token,"email":email},
                dataType: "json",
                timeout: 15000,
                success: function(data){
                    if(data.code==1){
                        alert(data.msg);
                    }else{
                        alert(data.msg);
                    }
                },
                error:function(data){
                    alert("服务器错误");
                }
            });
        });
        $("#ggsub").click(function(){
            var name = $("#bb").val();
            var link = $("#lj").val();
            var content = $("#nr").val();
            $.ajax({
                type: "POST",
                url: "ajax.php?act=setup",
                data: {"content":content,"name":name,"link":link},
                dataType: "json",
                timeout: 15000,
                success: function(data){
                    if(data.code==1){
                        alert(data.msg);
                    }else{
                        alert(data.msg);
                    }
                },
                error:function(data){
                    alert("服务器错误");
                }
            });
        });
        $("#tc").click(function(){
            var tckg = $("#tckg").val();
            var tcnr = $("#tcnr").val();
            var tcan= $("#tcan").val();
            var ansj = $("#ansj").val();
            var sjnr = $("#sjnr").val();
            var tctp = $("#tctp").val();
            $.ajax({
                type: "POST",
                url: "ajax.php?act=settc",
                data: {"tctp":tctp,"tckg":tckg,"tcnr":tcnr,"tcan":tcan,"ansj":ansj,"sjnr":sjnr},
                dataType: "json",
                timeout: 15000,
                success: function(data){
                    if(data.code==1){
                        alert(data.msg);
                    }else{
                        alert(data.msg);
                    }
                },
                error:function(data){
                    alert("服务器错误");
                }
            });
        });
        $("#rwc").click(function(){
            var rwkg = $("#rwkg").val();
            var xzrw = $("#xzrw").val();
            var rwmc = $("#rwmc").val();
            var rwpass = $("#rwpass").val();
            var rwtp1 = $("#rwtp1").val();
            var rwtp2 = $("#rwtp2").val();
            var rwtp3 = $("#rwtp3").val();
            var rwjs1 = $("#rwjs1").val();
            var rwjs2 = $("#rwjs2").val();
            var rwjs3 = $("#rwjs3").val();
            var rwtb = $("#rwtb").val();
            var rwurl = $("#rwurl").val();
            
            $.ajax({
                type: "POST",
                url: "ajax.php?act=rwc",
                data: {"rwkg":rwkg,"xzrw":xzrw,"rwmc":rwmc,"rwpass":rwpass,"rwtp1":rwtp1,"rwtp2":rwtp2,"rwtp3":rwtp3,"rwjs1":rwjs1,"rwjs2":rwjs2,"rwjs3":rwjs3,"rwtb":rwtb,"rwurl":rwurl},
                dataType: "json",
                timeout: 15000,
                success: function(data){
                    if(data.code==1){
                        alert(data.msg);
                    }else{
                        alert(data.msg);
                    }
                },
                error:function(data){
                    alert("服务器错误");
                }
            });
        });
        $("#lb1").click(function(){
            var lbt1 = $("#lbt1").val();
            var lbturl1 = $("#lbturl1").val();
           
            $.ajax({
                type: "POST",
                url: "ajax.php?act=lb1",
                data: {"lbt1":lbt1,"lbturl1":lbturl1},
                dataType: "json",
                timeout: 15000,
                success: function(data){
                    if(data.code==1){
                        alert(data.msg);
                    }else{
                        alert(data.msg);
                    }
                },
                error:function(data){
                    alert("服务器错误");
                }
            });
        });
        $("#lb2").click(function(){
            var lbt2 = $("#lbt2").val();
            var lbturl2 = $("#lbturl2").val();
           
            $.ajax({
                type: "POST",
                url: "ajax.php?act=lb2",
                data: {"lbt2":lbt2,"lbturl2":lbturl2},
                dataType: "json",
                timeout: 15000,
                success: function(data){
                    if(data.code==1){
                        alert(data.msg);
                    }else{
                        alert(data.msg);
                    }
                },
                error:function(data){
                    alert("服务器错误");
                }
            });
        });
        $("#lb3").click(function(){
            var lbt3 = $("#lbt3").val();
            var lbturl3 = $("#lbturl3").val();
           
            $.ajax({
                type: "POST",
                url: "ajax.php?act=lb3",
                data: {"lbt3":lbt3,"lbturl3":lbturl3},
                dataType: "json",
                timeout: 15000,
                success: function(data){
                    if(data.code==1){
                        alert(data.msg);
                    }else{
                        alert(data.msg);
                    }
                },
                error:function(data){
                    alert("服务器错误");
                }
            });
        });
        $("#lb4").click(function(){
            var lbt4 = $("#lbt4").val();
            var lbturl4 = $("#lbturl4").val();
           
            $.ajax({
                type: "POST",
                url: "ajax.php?act=lb4",
                data: {"lbt4":lbt4,"lbturl4":lbturl4},
                dataType: "json",
                timeout: 15000,
                success: function(data){
                    if(data.code==1){
                        alert(data.msg);
                    }else{
                        alert(data.msg);
                    }
                },
                error:function(data){
                    alert("服务器错误");
                }
            });
        });
        $("#zrw").click(function(){
            var rwkg = $("#rwkg").val();
            var rwmc = $("#rwmc").val();
            var xzrw = $("#xzrw").val();
            var rwpass = $("#rwpass").val();
            var rwtp1 = $("#rwtp1").val();
            var rwtp2 = $("#rwtp2").val();
            var rwtp3 = $("#rwtp3").val();
            var rwjs1 = $("#rwjs1").val();
            var rwjs2 = $("#rwjs2").val();
            var rwjs3 = $("#rwjs3").val();
            var rwtb = $("#rwtb").val();
            var rwurl = $("#rwurl").val();
           
           
            $.ajax({
                type: "POST",
                url: "ajax.php?act=zrw",
                 data: {"rwkg":rwkg,"xzrw":xzrw,"rwmc":rwmc,"rwpass":rwpass,"rwtp1":rwtp1,"rwtp2":rwtp2,"rwtp3":rwtp3,"rwjs1":rwjs1,"rwjs2":rwjs2,"rwjs3":rwjs3,"rwtb":rwtb,"rwurl":rwurl},
                dataType: "json",
                timeout: 15000,
                success: function(data){
                    if(data.code==1){
                        alert(data.msg);
                    }else{
                        alert(data.msg);
                    }
                },
                error:function(data){
                    alert("服务器错误");
                }
            });
        });
    </script>
</body>
</html>