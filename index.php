<?php
include_once("header.php");
?>
<body>
<header class="art-header">
    <div class="art-shapes">

	</div>
			
	<nav class="art-nav">
    <ul class="art-hmenu">
		<li><a href="index.php" class="active">Trang chủ</a></li>
	</ul> 
    </nav>

                    
</header>
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
						<div class="art-layout-cell layout-item-1" style="width: 5%" >
							
						</div>
						
						<div class="art-layout-cell layout-item-1" style="width: 65%" >
							<br/><br/>
							<fieldset style="border: 1px solid lightgray">
								<legend><b>Hướng dẫn</b></legend>
								<ul class="">
									<li>Đăng nhập hệ thống</li>
									<li>Sơ yếu lý lịch</li>
									<li>Quá trình học tập - công tác</li>
								</ul>
							</fieldset>
							
						</div>
                        <div class="art-layout-cell layout-item-1" style="width: 40%" >
						<article class="art-post art-article">
							<div class="art-postcontent art-postcontent-0 clearfix"><p><br/></p></div>
							<div id="wrapper">
                                <div id="login" class="animate form">
									<form  action="giaodienCBCS/checklogin.php" method="post" autocomplete="on"> 
										<h1>Log in</h1> 
										<p> 
											<label for="username" class="uname" data-icon="u" >Tên đăng nhập</label>
											<input id="username" name="username" required="required" type="text" placeholder="trinhlk"/>
										</p>
										<p> 
											<label for="password" class="youpasswd" data-icon="p">Mật khẩu </label>
											<input id="password" name="password" required="required" type="password" placeholder="200892" /> 
										</p>
										<p class="keeplogin"> 
											<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
											<label for="loginkeeping">Giữ trạng thái đăng nhập</label>
										</p>
										<p class="signin button"> 
											<input type="submit" value="Login" /> 
										</p>
										
									</form>
								</div>
						</article></div>
                    </div>
                </div>
            </div>
<footer class="art-footer">
<p><a href="#">Privacy Policy</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="#">Terms Of Use</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="#">Feedback</a></p>
<br>
<p>Copyright © 2011-2012. All Rights Reserved.</p>
</footer>

    </div>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
</div>


</body></html>