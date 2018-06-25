// //信息验证
function Verify() {}
//判空,area为范围，可为id或空
Verify.prototype.empty = function(area) {
	//area为空查找所有的目标
	if (area == undefined) {
		var result = document.ele('.need_check_empty');
	} else if (area.indexOf('#') == 0) {
		var result = document.ele(area).ele('.need_check_empty');
	} else {
		return false;
	}
	var len = result.length;
	for (var i = 0; i < len; i++) {
		result[i].value = result[i].value.replace(/\s/g, "");
		if (result[i].value == "") {
			this.error("请将信息补充完整");
			return false;
		}
	}
};
//检查身份证
Verify.prototype.ID_card = function(value) {
	var re = /^[1-9]{1}[0-9]{14}$|^[1-9]{1}[0-9]{16}([0-9]|[xX])$/;
	if (!re.test(value)) {
		this.error("请输入正确的身份证号码");
		return false
	}
};
//检查邮箱
Verify.prototype.email = function(value) {
	var re = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
	if (!re.test(value)) {
		this.error("请输入正确的邮箱地址");
		return false
	}
};
//手机电话
Verify.prototype.call = function(value) {
	var re1 = /^1\d{10}$/;
	var re2 = /^0\d{2,3}-?\d{7,8}$/;
	if (!re1.test(value) && (!re2.test(value))) {
		this.error("请输入正确的电话或手机号码");
		return false
	}
};
//检验中文名
Verify.prototype.cn_name = function(value) {
	if (!value.match(/^[\u4e00-\u9fa5]+$/)) {
		this.error('请输入中文名');
		return false;
	}
}
Verify.prototype.error = function(data) {
	showAlert(data);
};
var verify = new Verify();
! function() {
	document.getElementById('container').style.minHeight = window.innerHeight + 'px';
}()

function showAlert(msg){
	document.getElementById('alertMsg').innerHTML=msg;
	document.getElementById("alert").style.display="block";
	document.getElementById("bg_black").style.display="block";
}
function hideAlert(){
	document.getElementById("alert").style.display="none";
	document.getElementById("bg_black").style.display="none";
}
document.getElementById('alertClose').onclick=hideAlert;