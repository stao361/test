<?php
session_start();
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('prc');
error_reporting(E_ALL || ~E_NOTICE);
// 摧毁现有session
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>主页</title>
  <link rel="icon" href="./Global reference/logo.jpg" type="image/x-icon">
  <script src="./Global reference/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
  <link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="./Global reference/bootstrapValidator.min.js"></script>
  <!-- 表单验证 -->
  <script src="./Global reference/Verification.js"></script>
  <!-- 小火箭样式 -->
  <link rel="stylesheet" href="./Global reference/top/rocket.css">
  <!-- header样式 -->
  <style>
  /* D字标语 */
  .bs-docs-booticon-outline {
    background-color: transparent;
    border: 1px solid white;
  }
  .bs-docs-booticon-lg {
      width: 144px;
      height: 144px;
      font-size: 108px;
      line-height: 140px;
  }
  .bs-docs-booticon {
      display: block;
      font-weight: 500;
      color: #fff;
      text-align: center;
      cursor: default;
      background-color: #0099ff;
      border-radius: 15%;      
  }
  /* 按钮 */
  .btn-outline-inverse {
      color: #fff;
      background-color: transparent;
      border-color: #fff;
  }
  /* 巨幕中按钮移入效果 */
  .jumbotron a:hover{
      background:white;
      color:#0099ff;
  }
  .jumbotron button:hover{
      background:white;
      color:#0099ff;
  }
  /* 板块点击按钮移入效果 */
  .col-md-4 a:hover{
      background:#0099ff;
      color:white;
  }

  </style>
</head>
<body>
  <!-- 返回顶部小火箭 -->
	<div id="shangxia2">
		<span id="gotop1">
			<img src="./Global reference/top/huojian.svg" alt="返回顶部小火箭">
		</span>
	</div>
  <script src="./Global reference/top/TweenMax.min.js"></script>
  <script src="./Global reference/top/ScrollToPlugin.min.js"></script>
  <script>
  $(function() {
  // 返回顶部，绑定gotop1图标和gotop2文字事件
  $("#gotop1,#gotop2").click(function(e) {
    TweenMax.to(window, 1.5, {scrollTo:0, ease: Expo.easeInOut});
    var huojian = new TimelineLite();
    huojian.to("#gotop1", 1, {rotationY:720, scale:0.6, y:"+=40", ease:  Power4.easeOut})
    .to("#gotop1", 1, {y:-1000, opacity:0, ease:  Power4.easeOut}, 0.6)
    .to("#gotop1", 1, {y:0, rotationY:0, opacity:1, scale:1, ease: Expo.easeOut, clearProps: "all"}, "1.4");
  });
  });
  </script>


<div class="row" style="background-color: #0099ff">
         <!-- 导航条 -->
         <nav class="navbar navbar-default" style="border-style: hidden;background-color:white">
           <div class="container">
              <div class="navbar-header">
                  <!-- logo -->
                  <a class="navbar-brand pull-left" href="#">
                    <img alt="Brand" src="./Global reference/logo.jpg" width="20px">
                  </a>
                  <!-- title -->
                  <a class="navbar-brand" href="./index.php">Debrishare</a>
              </div>
              <p class=" navbar-text">
                  <?php
                    if(isset($_SESSION['username'])){
                      echo "欢迎您： ".$_SESSION['username'];
                    }
                    else
                      echo"欢迎您，请登录"         
                   ?>
                </p>
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav nav-pills">
                  <li><a href="./Usercenter/mynotes.php">我的发布</a></li>
                  <li><a href="./Usercenter/myfavorites.php">我的收藏</a></li>
                  <li><a href="./Admincenter/admincenter.php">审核专区</a></li>
                  <li><a href="./Usercenter/user.php">用户中心</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">电影 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="./Board/movie/movie-cn.php">华语</a></li>
                      <li><a href="./Board/movie/movie-ea.php">欧美</a></li>
                      <li><a href="./Board/movie/movie-jk.php">日韩</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">手机 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="./Board/phone/phone-ap.php">苹果</a></li>
                      <li><a href="./Board/phone/phone-xm.php">小米</a></li>
                      <li><a href="./Board/phone/phone-hw.php">华为</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">游戏 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="./Board/game/game-bl.php">暴雪</a></li>
                      <li><a href="./Board/game/game-tx.php">腾讯</a></li>
                      <li><a href="./Board/game/game-v.php">valve</a></li>
                    </ul>
                  </li>
                </ul>
               
              </div> 
           </div>
        </nav>

     <!--巨幕 -->
  
       <div class="jumbotron" style="background-color: #0099ff">
          <div class="container">
              <p>
                    <span class="bs-docs-booticon bs-docs-booticon-lg bs-docs-booticon-outline">D</span>
              </p>
              <h1 style="color: white">
              <?php
                if(isset($_SESSION['username'])){
                  echo $_SESSION['username'];       
                  ?>     
              </h1>
              <h3 style="color: white">Welcome to Debrishare</h3>
              <p style="color: white">希望您能在这里学到更多的知识，丰富自己，提升自己，并且踊跃的分享知识给别人</p>
              <p style="color: white"><a  class="btn btn-outline-inverse btn-lg" role="button" data-toggle="modal" data-target="#myModal">切换账号</a></p>
              <!-- 退出登陆按钮 -->
              <button class="btn btn-outline-inverse btn-lg" data-toggle="modal" data-target="#myModal2">退出登陆</button>
              <?php
              }
              else
              {
                echo'<h1 style="color: white">欢迎您，请登录</h1>';?>
                <h3 style="color: white">Welcome to Debrishare</h3>
                <p style="color: white">希望您能在这里学到更多的知识，丰富自己，提升自己，并且踊跃的分享知识给别人</p>
                <p style="color: white"><a  class="btn btn-outline-inverse btn-lg" role="button" data-toggle="modal" data-target="#myModal">登陆账号</a></p>
              <?php
              }
              ?>
          </div>
      </div>
</div>

<!-- 登陆/注册框 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- 模态框顶部 -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">登陆/注册框</h4>
      </div>
      <!-- 模态框body -->
      <div class="modal-body">
        <!-- 登陆/注册表单 -->
        <form action="./login/login&register.php" method="post" id="form_loginregister">
          <div class="form-group">
              <label>用户名</label>
              <input type="text" class="form-control" name="username" />
          </div>
          <div class="form-group">
              <label>密码</label>
              <input type="password" class="form-control" name="password" />
          </div>
          <div class="form-group">
              <label>管理员口令</label>
              <input type="password" class="form-control" name="tesadmin"  placeholder="如不知晓无需填写"/>
          </div>
          <div class="form-group col-md-3" style="padding: 0px;">
            <button class="btn btn-primary" type="submit">登陆/注册</button>
          </div>
          <input type="reset" class="btn btn-default" value="重置" />
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        </form>
      </div>
        <!-- 模态框底部 -->
        <!-- <div class="modal-footer">
        </div> -->
    </div>
  </div>
</div>

<!-- 退出登陆确定框 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">确认框</h4>
      </div>
      <div class="modal-body">
        您确定要退出登陆么?
      </div>
      <!-- 模态框底部 -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <a href="./Global reference/Cancellation.php" class="btn btn-primary">确定</a>     
      </div>
    </div>
  </div>
</div>

<br>
<br>
<br>

  <!-- 描述文字 -->
    <div class="container">
        <p>
        <!-- margin-block-start: 0.83em;margin-block-end: 0.83em;margin-inline-start: 0px;margin-inline-end: 0px;备用CSS样式 -->
          <h1 class="text-center" style="font-size: 60px">专注人们的碎片时间利用</h1>
        </p>
        <p>
          <h3 class="text-center">让所有人的碎片时间都充满学习的快乐,让所有人都可以在这个网站上面分享自己的见闻，</h3>
        </p>
        <p>
          <h3 class="text-center">让自己增长知识，增加见闻</h3>
        </p>
              
    </div>

<br>


    <!-- 种类模块 -->
    <div class="container">
          <!-- 渐变分割线 -->
          <br>
            <div class="hr-line-div" style="margin:0 auto;height: 0.5rem;width: 100rem;background: radial-gradient(#0099ff 24%, white 100%);"></div>
          <br>
          <br>

          <!-- 电影区 -->
          <div class="row" style=" margin-top:45px;margin-bottom:45px; ">
            <!-- 华语电影 -->
            <div class="col-md-4">
              <a href="./Board/movie/movie-cn.php" class="thumbnail">
                <img src="./images/index/movie/movie-cn.jpg" alt="华语电影" style="height:500px;">
              </a>
              <p class="text-center"><a href="./Board/movie/movie-cn.php" class="btn btn-default" role="button" style="border-style: hidden;">华语电影专区</a></p>
            </div>
            <!-- 欧美电影 -->
            <div class="col-md-4">
              <a href="./Board/movie/movie-ea.php" class="thumbnail">
                <img src="./images/index/movie/movie-ea.jpg" alt="欧美电影" style="height:500px;">
              </a>
              <p class="text-center"><a href="./Board/movie/movie-ea.php" class="btn btn-default" role="button" style="border-style: hidden;">欧美电影专区</a></p>
            </div>
            <!-- 日韩电影 -->
            <div class="col-md-4">
              <a href="./Board/movie/movie-jk.php" class="thumbnail">
                <img src="./images/index/movie/movie-jk.jpg" alt="日韩电影" style="height:500px;">
              </a>
              <p class="text-center"><a href="./Board/movie/movie-jk.php" class="btn btn-default" role="button" style="border-style: hidden;">日韩电影专区</a></p>
            </div>
          </div>

          <!-- 渐变分割线 -->
          <br>
          <div class="hr-line-div" style="margin:0 auto;height: 0.5rem;width: 100rem;background: radial-gradient(#0099ff 24%, white 100%);"></div>
          <br>

          <!-- 手机区 -->
          <div class="row" style=" margin-top:45px;margin-bottom:45px; ">
            <!-- 苹果手机 -->
            <div class="col-md-4">
              <a href="./Board/phone/phone-ap.php" class="thumbnail">
                <img src="./images/index/phone/apple.jpg" alt="苹果logo">
              </a>
              <p class="text-center"><a href="#" class="btn btn-default" role="button" style="border-style: hidden;">苹果手机专区</a></p>
            </div>
            <!-- 小米手机 -->
            <div class="col-md-4">
              <a href="./Board/phone/phone-xm.php" class="thumbnail">
                <img src="./images/index/phone/xiaomi.jpg" alt="小米logo">
              </a>
              <p class="text-center"><a href="#" class="btn btn-default" role="button" style="border-style: hidden;">小米手机专区</a></p>
            </div>
            <!-- 华为手机 -->
            <div class="col-md-4">
              <a href="./Board/phone/phone-hw.php" class="thumbnail">
                <img src="./images/index/phone/huawei.jpg" alt="华为logo">
              </a>
              <p class="text-center"><a href="#" class="btn btn-default" role="button" style="border-style: hidden;">华为手机专区</a></p>
            </div>
          </div>

          <!-- 渐变分割线 -->
          <br>
          <div class="hr-line-div" style="margin:0 auto;height: 0.5rem;width: 100rem;background: radial-gradient(#0099ff 24%, white 100%);"></div>
          <br>


          <!-- 游戏区 -->
          <div class="row" style=" margin-top:45px;margin-bottom:45px; ">
            <!-- 暴雪游戏 -->
            <div class="col-md-4">
              <a href="./Board/game/game-bl.php" class="thumbnail">
                <img src="./images/index/game/baoxue.jpg" alt="暴雪logo">
              </a>
              <p class="text-center"><a href="#" class="btn btn-default" role="button" style="border-style: hidden;">暴雪游戏专区</a></p>
            </div>
            <!-- 腾讯游戏 -->
            <div class="col-md-4">
              <a href="./Board/game/game-tx.php" class="thumbnail">
                <img src="./images/index/game/tengxun.jpg" alt="腾讯logo">
              </a>
              <p class="text-center"><a href="#" class="btn btn-default" role="button" style="border-style: hidden;">腾讯游戏专区</a></p>
            </div>
            <!-- V社游戏 -->
            <div class="col-md-4">
              <a href="./Board/game/game-v.php" class="thumbnail">
                <img src="./images/index/game/value.jpg" alt="V社logo">
              </a>
              <p class="text-center"><a href="#" class="btn btn-default" role="button" style="border-style: hidden;">valve游戏专区</a></p>
            </div>
          </div>
    </div>
</body>
</html> 