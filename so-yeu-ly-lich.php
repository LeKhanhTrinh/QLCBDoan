<?php

include_once("header.php");
if( isset($_SESSION["login_user"]) ) {
?>
<body>
<header class="art-header">
    <div class="art-shapes">

	</div>
			
	<nav class="art-nav">
    <ul class="art-hmenu">
		<li><a href="so-yeu-ly-lich.php" class="active">Sơ yếu lý lịch</a></li>
		<li><a href="qua-trinh-hoc-tap-cong-tac.php" class="">Quá trình học tập - công tác</a></li>
	</ul> 
    </nav>

                    
</header>

<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
       
		<label for="inputsohieu" class="control-label"><b>Xin chào, <?=$_SESSION["login_user"]?>.</b><a href="giaodienCBCS/logout.php">Thoát</a></label>
		
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 50%" >
        <p></p><p>
                </p><p></p><p></p><p></p><fieldset style="border: 1px solid lightgray;"><legend><i><b>Thông tin cơ bản</b></i></legend> 
                                        
                                        <div style:="width:">
                                                <table style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: hidden; border-color: initial; width: 100%;">
                                                <tbody>
                                                <tr>
                                        			<td style="width: 33%; border-style: hidden"><img width="118" height="102" alt="" class="art-lightbox" src="images/IMG_3894.jpg">
                <br><p><a href="#" class="art-button">Tải ảnh</a></p></td>
                                        			<td style="width: 2%; border-style: hidden">
                                        			</td><td style="width: 65%; border-style: hidden">
                                        				<!--Số hiệu CB-->
                                        				<div class="col-lg-9"><label for="inputsohieu" class="control-label"><b>Số hiệu CB</b></label>&nbsp;&nbsp;
                                        					<input type="text" style="width: 65%" id="inputsohieu" placeholder="Số hiệu cán bộ, công chức">
                                        				</div>
                                        				<br>
                                        				
                                        				<!--CMND-->
                                        				<div class="col-lg-9"><label for="inputCMND" class="control-label"><b>Số CMND</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        					<input type="text" style="width: 65%" id="inputCMND" placeholder="CMND">
                                        				</div>
                                        				<br>
                                        				
                                        				<!--Ngày cấp-->
                                        				<div class="col-lg-9">
                                        					<label for="inputngaycap" class="control-label"><b>Ngày cấp</b></label> &nbsp;&nbsp;&nbsp;
                                        					<input type="text" style="width: 65%" id="inputngaycap" placeholder="12/12/2012">
                                        				</div>
                                        				<br>
                                        			</td>
                                                </tr>
                                                </tbody>
                                                </table>
                                        		</div>
                                                
                                                <br>
                <!--Họ và tên-->
                        <div class="form-group"><label for="inputhoten" class="col-lg-3 control-label"><b>Họ và tên</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" style="width: 60%" id="inputhoten" placeholder="Nguyễn Văn A">
                        </div>
                        <br>
                        <!--Tên Khác-->
                        <div class="col-lg-9"><label for="inputtenkhac" class="control-label"><b>Tên Khác</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" style="width: 60%" id="inputtenkhac" placeholder="Nguyễn Văn B">
                        </div>
                        <br>
                        <!--Ngày Sinh-->
                        <div class="col-lg-9"><label for="inputngaysinh" class="control-label"><b>Ngày Sinh</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" style="width: 60%" id="inputngaysinh" placeholder="1/2/1990">
                        </div>
                        <br>
                        <!--Giới tính-->
                        <div class="form-group"><label><b>Giới tính</b></label> &nbsp; <label><input type="radio" name="rdgioitinh" id="gt1" value="male" checked=""> Nam</label> <label><input type="radio" name="rdgioitinh" id="gt2" value="female"> Nữ</label></div>
                        <br>
                        <!--Nơi sinh-->
                        <div class="form-group"><label for="noisinh" class="col-lg-3 control-label"><b>Nơi sinh (xã, huyện, tỉnh)</b></label>
                        <div class="col-lg-9"><select class="form-control" id="nsxa">
                        <option select="">Hoằng Đạo
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select> <select class="form-control" id="nshuyen">
                        <option>Hoằng Hóa
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select> <select class="form-control" id="nstinh">
                        <option>Thanh Hóa
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select></div>
                        </div>
                        <br>
                        <!--Quê quán-->
                        <div class="form-group"><label for="quequan" class="col-lg-3 control-label"><b>Quê quán (xã, huyện , tỉnh)</b></label>
                        <div class="col-lg-9"><select class="form-control" id="nsxa">
                        <option select="">Hoằng Đạo
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select> <select class="form-control" id="nshuyen">
                        <option>Hoằng Hóa
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select> <select class="form-control" id="nstinh">
                        <option>Thanh Hóa
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select></div>
                        </div>
                        <br>
                        <!--Dân tộc, tôn giáo-->
                        <div class="col-lg-9"><label for="inputdantoc" class="control-label"><b>Dân tộc</b></label> <input type="text" style="width: 30%" id="inputdantoc" placeholder="Kinh"> &nbsp;&nbsp;&nbsp; <label for="inputtongiao" class="control-label"><b>Tôn giáo</b></label> <input type="text" style="width: 30%" id="inputtongiao" placeholder="Không"></div>
                        <br>
                        <!--Nơi đăng ký-->
                        <div class="col-lg-9"><label for="inputhk" class="control-label"><b>Nơi đăng ký hộ khẩu thường trú</b></label> &nbsp;&nbsp;&nbsp; <input type="text" style="width: 40%" id="inputdangky" placeholder="Số nhà, đường phố (xóm, thôn)"><br>
                        <br>
                        <div class="col-lg-9"><select class="form-control" id="hkxa">
                        <option select="">Hoằng Đạo
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select> <select class="form-control" id="hkhuyen">
                        <option>Hoằng Hóa
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select> <select class="form-control" id="hktinh">
                        <option>Thanh Hóa
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select></div>
                        </div>
                        <br>
                        <!--Nơi ở hiện nay-->
                        <div class="col-lg-9"><label for="inputnoio" class="control-label"><b>Nơi ở hiện nay</b></label> &nbsp;&nbsp;&nbsp; <input type="text" style="width: 60%" id="inputnoio" placeholder="Số nhà, đường phố (xóm, thôn)"><br>
                        <br>
                        <div class="col-lg-9"><select class="form-control" id="noxa">
                        <option select="">Hoằng Đạo
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select> <select class="form-control" id="nohuyen">
                        <option>Hoằng Hóa
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select> <select class="form-control" id="notinh">
                        <option>Thanh Hóa
                        </option><option>2
                        </option><option>3
                        </option><option>4
                        </option><option>5
                        </option></select></div>
                        </div>
                        <br>
                        <!--Thương binh hạng-->
                        <div class="col-lg-9"><label for="inputhuongbinh" class="control-label"><b>Thương binh hạng</b></label>&nbsp;&nbsp;&nbsp; <input type="text" style="width: 30%" id="inputhuongbinh" placeholder="1/4"></div>
                        <br>
                        <!--Gia đình chính sách-->
                        <div class="col-lg-9"><label for="inputchinhsach" class="control-label"><b>Con gia đình chính sách</b></label>
                        <div class="col-lg-9"><input type="text" style="width: 100%" id="inputchinhsach" placeholder="con thương binh, liệt sĩ, người nhiễm chất độc da cam"></div>
                        </div>
                        <br>
                        <!--Sức khỏe-->
                        <div class="col-lg-9"><label for="inputtinhtrang" class="control-label"><b>Tình trạng sức khỏe</b></label> &nbsp;&nbsp; <input type="text" style="width: 15%" id="inputtinhtrang" placeholder="..."> &nbsp;&nbsp; <label for="inputnhommau" class="control-label"><b>Nhóm máu</b></label> &nbsp;&nbsp; <input type="text" style="width: 15%" id="inputnhommau" placeholder="A+,B-,AB+,O-,..."> &nbsp;&nbsp;&nbsp;</div>
                        <br>
                        <!--Chiều cao, cân nặng-->
                        <div class="col-lg-9"><label for="inputchieucao" class="control-label"><b>Chiều cao</b></label> &nbsp;&nbsp;&nbsp; <input type="text" style="width: 15%" id="inputchieucao" placeholder="170cm"> &nbsp;&nbsp;&nbsp; <label for="inputcannang" class="control-label"><b>Cân nặng</b></label> &nbsp;&nbsp;&nbsp; <input type="text" style="width: 15%" id="inputcannang" placeholder="54"> <label for="inputkg" class="control-label"><i>kg</i></label></div>
                        <br>                                
                                        </fieldset><p>
                            </p><p></p><p></p><p></p><p></p><p></p>
    </div><div class="art-layout-cell layout-item-1" style="width: 50%" >
        <p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><fieldset style="border: 1px solid lightgray;"><legend><i><b>Đặc điểm lịch sử bản thân</b></i></legend><br>
                        <!--Đi tù-->
                        <div style:="width:"><label for="inputnhansu" class="control-label"><b>Kê khai phạm tội</b></label><br>
                 <div style:="width:">
                	<table style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: hidden; border-color: initial; width: 100%">
                		<tbody>
                		<tr>
                			<td style="width: 33%; border-style: hidden"><label style="width: 100%"><b>Thời gian bị bắt</b></label></td>
                			<td style="width: 33%; border-style: hidden"><label style="width: 100%"><b>Khai báo cho ai</b></label></td>
                			<td style="width: 34%; border-style: hidden"><label style="width: 100%"><b>Vấn đề khai báo</b></label></td>
                		</tr>
                		<tr>
                			<td style="width: 33%; border-style: hidden"><input type="text" style="width: 100%" id="inputgbat" placeholder="15/2/2001-12/5/2002">
                			</td><td style="width: 33%; border-style: hidden"><input type="text" style="width: 100%" id="inputkhaibao" placeholder="Nguyễn Ngọc A">
                			</td><td style="width: 34%; border-style: hidden"><input type="text" style="width: 100%" id="inputvde" placeholder="Tình báo">
                		</td></tr>
                		</tbody>
                	</table>
                </div>       
                        <table class="art-article" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; width: 100%">
                        <tbody>
                        <tr>
                        <td style="width: 34%;"><label style="width: 100%"><b>Thời gian bị bắt</b></label><br></td>
                        <td style="width: 33%;"><label style="width: 100%"><b>Khai báo cho</b></label><br></td>
                        <td style="width: 33%;"><label style="width: 100%"><b>Vấn đề khai báo</b></label><br></td>
                        </tr>
                        <tr>
                        <td style="width: 34%;">2/1992-3/1993<br></td>
                        <td style="width: 33%;">Nguyễn Văn A<br></td>
                        <td style="width: 33%;">Nghiện hút<br></td>
                        </tr>
                        <tr>
                        <td style="width: 34%;"><br></td>
                        <td style="width: 33%;"><br></td>
                        <td style="width: 33%;"><br></td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <br>
                        <!--Làm ở chế độ cũ-->
                        <div style:="width:"><label for="inputnhansu" class="control-label"><b>Làm việc với chế độ cũ</b></label><br>
                 <div style:="width:">
                	<table style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: hidden; border-color: initial;">
                		<tbody>
                		<tr>
                			<td style="width: 20%; border-style: hidden"><label style="width: 100%"><b>Thời gian</b></label></td>
                			<td style="width: 20%; border-style: hidden"><label style="width: 100%"><b>Cơ quan</b></label></td>
                			<td style="width: 20%; border-style: hidden"><label style="width: 100%"><b>Đơn vị</b></label></td>
                			<td style="width: 20%; border-style: hidden"><label style="width: 100%"><b>Chức vụ</b></label></td>
                			<td style="width: 20%; border-style: hidden"><label style="width: 100%"><b>Địa điểm</b></label></td>
                		</tr>
                		<tr>
                			<td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputglv" placeholder="2/1992-3/1993">
                			</td><td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputcquan" placeholder="CIA">
                			</td><td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputdvi" placeholder="Đông Nam Á">
                			</td><td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputcvu" placeholder="Trưởng phòng">
                			</td><td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputdd" placeholder="Hà Nội">
                		</td></tr>
                		</tbody>
                	</table>
                </div>       
                        <table class="art-article" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial;">
                        <tbody>
                        <tr>
                        <td style="width: 20%;"><label style="width: 100%"><b>Thời gian</b></label><br></td>
                        <td style="width: 20%;"><label style="width: 100%"><b>Cơ quan</b></label><br></td>
                        <td style="width: 20%;"><label style="width: 100%"><b>Đơn vị</b></label><br></td>
                        <td style="width: 20%;"><label style="width: 100%"><b>Chức vụ</b></label><br></td>
                        <td style="width: 20%;"><label style="width: 100%"><b>Địa điểm</b></label><br></td>
                        </tr>
                        <tr>
                        <td style="width: 20%;">2/1992-3/1993<br></td>
                        <td style="width: 20%;">CIA<br></td>
                        <td style="width: 20%;">Đông Nam Á<br></td>
                        <td style="width: 20%;">Boss<br></td>
                        <td style="width: 20%;">Hà Nội<br></td>
                        </tr>
                        <tr>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <br>
                        <!--Quan hệ tổ chức nước ngoài-->
                        <div style:="width:"><label for="inputnhansu" class="control-label"><b>Quan hệ với tổ chức nước ngoài</b></label><br>
                        <div style:="width:">
                	<table style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: hidden; border-color: initial;">
                		<tbody>
                		<tr>
                			<td style="width: 33%; border-style: hidden"><label style="width: 100%"><b>Tên tổ chức</b></label></td>
                			<td style="width: 33%; border-style: hidden"><label style="width: 100%"><b>Trụ sở</b></label></td>
                			<td style="width: 34%; border-style: hidden"><label style="width: 100%"><b>Nhiệm vụ</b></label></td>
                		</tr>
                		<tr>
                			<td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputtochuc" placeholder="CIA">
                			</td><td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputtruso" placeholder="Mỹ">
                			</td><td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputnhiemvu" placeholder="Giám đốc">
                		</td></tr>
                		</tbody>
                	</table>
                </div>
                        <table class="art-article" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; width:100%">
                        <tbody>
                        <tr>
                        <td style="width: 34%;"><label style="width: 100%"><b>Tên tổ chức</b></label><br></td>
                        <td style="width: 33%;"><label style="width: 100%"><b>Trụ sở</b></label><br></td>
                        <td style="width: 33%;"><label style="width: 100%"><b>Nhiệm vụ</b></label><br></td>
                        </tr>
                        <tr>
                        <td style="width: 34%;">CIA<br></td>
                        <td style="width: 33%;">Mỹ<br></td>
                        <td style="width: 33%;">Giám đốc<br></td>
                        </tr>
                        <tr>
                        <td style="width: 34%;"><br></td>
                        <td style="width: 33%;"><br></td>
                        <td style="width: 33%;"><br></td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <br>
                        <!--Thân nhân nước ngoài-->
                        <div style:="width:"><label for="inputnhansu" class="control-label"><b>Thân nhân ở nước ngoài</b></label><br>
                 <div style:="width:">
                	<table style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: hidden; border-color: initial;">
                		<tbody>
                		<tr>
                			<td style="width: 20%; border-style: hidden"><label style="width: 100%"><b>Quan hệ</b></label></td>
                			<td style="width: 30%; border-style: hidden"><label style="width: 100%"><b>Họ và tên</b></label></td>
                			<td style="width: 20%; border-style: hidden"><label style="width: 100%"><b>Công việc</b></label></td>
                			<td style="width: 30%; border-style: hidden"><label style="width: 100%"><b>Địa chỉ</b></label></td>
                		</tr>
                		<tr>
                			<td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputqhe" placeholder="Bố">
                			</td><td style="width: 30%; border-style: hidden"><input type="text" style="width: 100%" id="inputname" placeholder="Nguyễn Văn A">
                			</td><td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputcviec" placeholder="Tổng thống">
                			</td><td style="width: 30%; border-style: hidden"><input type="text" style="width: 100%" id="inputdiachi" placeholder="Mỹ">
                		</td></tr>
                		</tbody>
                	</table>
                </div>       
                        <table class="art-article" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial;width:100%">
                        <tbody>
                        <tr>
                        <td style="width: 20%;"><label style="width: 100%"><b>Quan hệ</b></label><br></td>
                        <td style="width: 30%;"><label style="width: 100%"><b>Họ và tên</b></label><br></td>
                        <td style="width: 20%;"><label style="width: 100%"><b>Công việc</b></label><br></td>
                        <td style="width: 30%;"><label style="width: 100%"><b>Địa chỉ</b></label><br></td>
                        </tr>
                        <tr>
                        <td style="width: 20%;">Bố<br></td>
                        <td style="width: 30%;">Nguyễn Văn A<br></td>
                        <td style="width: 20%;">Tổng thống<br></td>
                        <td style="width: 30%;">Washington, Mỹ<br></td>
                        </tr>
                        <tr>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 30%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 30%;"><br></td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <br></fieldset><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-1" style="width: 100%" >
        <p></p><p></p><p></p><p></p><fieldset style="border: 1px solid lightgray;"><legend><i><b>Quan hệ gia đình</b></i></legend> <!--Về bản thân-->
                        <div style:="width:"><label for="inputnhansu" class="control-label"><b>Về bản thân: Cha, Mẹ, Vợ (hoặc chồng), các con, anh chị em ruột</b></label><br>
                 <div style:="width:">
                	<table style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: hidden; border-color: initial; width: 100%;">
                		<tbody>
                		<tr>
                			<td style="width: 10%; border-style: hidden"><label for="inputsohieu" class="control-label"><b>Mối quan hệ</b></label></td>
                			<td style="width: 20%; border-style: hidden"><label for="inputsohieu" class="control-label"><b>Họ và tên</b></label></td>
                			<td style="width: 10%; border-style: hidden"><label for="inputsohieu" class="control-label"><b>Năm sinh</b></label></td>
                			<td style="width: 60%; border-style: hidden"><label for="inputsohieu" class="control-label"><b>Thông tin</b></label></td>
                		</tr>
                		<tr>
                			<td style="width: 10%; border-style: hidden"><input type="text" style="width: 100%" id="inputmqhe" placeholder="Bố">
                			</td><td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputname1" placeholder="Nguyễn Văn A">
                			</td><td style="width: 10%; border-style: hidden"><input type="text" style="width: 100%" id="inputnsinh" placeholder="1960">
                			</td><td style="width: 60%; border-style: hidden"><input type="text" style="width: 100%" id="inputinfo" placeholder="Thanh Hóa, làm ruộng, ...">
                		</td></tr>
                		</tbody>
                	</table>
                </div>       
                        <table class="art-article" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; width: 100%;">
                        <tbody>
                        <tr>
                        <td style="width: 10%;"><b>Mối quan hệ</b><br></td>
                        <td style="width: 20%;"><b>Họ và tên</b><br></td>
                        <td style="width: 10%;"><b>Năm sinh</b><br></td>
                        <td style="width: 60%;"><b>Quê quán, nghề nghiệp, chức danh, chức vụ, đơn vị công tác, học tập, nơi ở (trong, ngoài nước); thành viên các tổ chức chính trị - xã hội ........)</b><br></td>
                        </tr>
                        <tr>
                        <td style="width: 10%;">Bố<br></td>
                        <td style="width: 20%;">Nguyễn Văn A<br></td>
                        <td style="width: 10%;">1960<br></td>
                        <td style="width: 60%;">Thanh Hóa, làm ruộng, ...<br></td>
                        </tr>
                        <tr>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 60%;"><br></td>
                        </tr>
                        <tr>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 60%;"><br></td>
                        </tr>
                        <tr>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 60%;"><br></td>
                        </tr>
                        <tr>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 60%;"><br></td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <br>
                        <!--Về nhà vợ-->
                        <div style:="width:"><label for="inputnhansu" class="control-label"><b>Về bên vợ (hoặc chồng): Cha, Mẹ, anh chị em ruột</b></label><br>
                 <div style:="width:">
                	<table style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: hidden; border-color: initial; width: 100%;">
                		<tbody>
                		<tr>
                			<td style="width: 10%; border-style: hidden"><label for="inputsohieu" class="control-label"><b>Mối quan hệ</b></label></td>
                			<td style="width: 20%; border-style: hidden"><label for="inputsohieu" class="control-label"><b>Họ và tên</b></label></td>
                			<td style="width: 10%; border-style: hidden"><label for="inputsohieu" class="control-label"><b>Năm sinh</b></label></td>
                			<td style="width: 60%; border-style: hidden"><label for="inputsohieu" class="control-label"><b>Thông tin</b></label></td>
                		</tr>
                		<tr>
                			<td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputmqhev" placeholder="Bố">
                			</td><td style="width: 30%; border-style: hidden"><input type="text" style="width: 100%" id="inputname1v" placeholder="Nguyễn Văn A">
                			</td><td style="width: 20%; border-style: hidden"><input type="text" style="width: 100%" id="inputnsinhv" placeholder="1960">
                			</td><td style="width: 30%; border-style: hidden"><input type="text" style="width: 100%" id="inputinfov" placeholder="Thanh Hóa, làm ruộng, ...">
                		</td></tr>
                		</tbody>
                	</table>
                </div>       
                        <table class="art-article" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; width: 100%;">
                        <tbody>
                        <tr>
                        <td style="width: 10%;"><b>Mối quan hệ</b><br></td>
                        <td style="width: 20%;"><b>Họ và tên</b><br></td>
                        <td style="width: 10%;"><b>Năm sinh</b><br></td>
                        <td style="width: 60%;"><b>Quê quán, nghề nghiệp, chức danh, chức vụ, đơn vị công tác, học tập, nơi ở (trong, ngoài nước); thành viên các tổ chức chính trị - xã hội ........)</b><br></td>
                        </tr>
                        <tr>
                        <td style="width: 10%;">Mẹ<br></td>
                        <td style="width: 20%;">Nguyễn Thị B<br></td>
                        <td style="width: 10%;">1970<br></td>
                        <td style="width: 60%;">Thanh Hóa, làm ruộng, ...<br></td>
                        </tr>
                        <tr>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 60%;"><br></td>
                        </tr>
                        <tr>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 60%;"><br></td>
                        </tr>
                        <tr>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 60%;"><br></td>
                        </tr>
                        <tr>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 20%;"><br></td>
                        <td style="width: 10%;"><br></td>
                        <td style="width: 60%;"><br></td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        <br></fieldset><p></p><p></p><p></p><p></p>
    </div>
    </div>
</div>
<div class="art-content-layout layout-item-2">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 35%" >
        <p><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 37%" >
        <p><br></p>
    </div><div class="art-layout-cell layout-item-3" style="width: 28%" >
        <p><br></p>
    </div>
    </div>
</div>
</div>
                                
                

</article></div>
                    </div>
                </div>
            </div><footer class="art-footer">
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
<?php } else { 
	//echo "test";
	header('Location: ../index.php');
}?>
		