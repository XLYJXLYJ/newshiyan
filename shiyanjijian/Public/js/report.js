! function() {
	var stage = 1; //记录处于举报过程第几阶段
	var IfRealName = 0; //记录是否实名
	// 是否接受协议
	function ifAgree() {
		if (document.getElementById('rule_agree').checked) return true;
		else {
			showAlert('请先阅读并同意举报须知相关条约')
		}
	}
	// 下一步
	function nextStep() {
		if (stage == 1) {
			document.getElementById('rule').style.display = "none";
			document.getElementById('prompt').style.display = "block";
			stage = 2;
			return true;
		}
		if (stage == 2) {
			document.getElementById('prompt').style.display = "none";
			var rlshow = document.ele('.rlshow');
			var rlshow_len = rlshow.length;
			if (IfRealName == 0) {
				for (var i = 0; i < rlshow_len; i++) {
					rlshow[i].innerHTML = "";
				}
				document.getElementById('report_name').setAttribute('class', '');
				document.getElementById('report_link').setAttribute('class', '');
				document.getElementById('report_IDcard').setAttribute('class', '');
				document.getElementById('prompt_title').innerHTML = "匿名举报";
			} else {
				for (var i = 0; i < rlshow_len; i++) {
					rlshow[i].innerHTML = "*";
				}
				document.getElementById('report_name').setAttribute('class', 'need_check_empty');
				document.getElementById('report_link').setAttribute('class', 'need_check_empty');
				document.getElementById('report_IDcard').setAttribute('class', 'need_check_empty');
				document.getElementById('prompt_title').innerHTML = "实名举报";
			}
			document.getElementById('prompter').style.display = "block";
			stage = 3;
			return true;
		}
		if (stage == 3) {
			if (verify.empty('#prompter') == false) return false;
			if(document.getElementById('report_name').value && verify.cn_name(document.getElementById('report_name').value)==false) return false;
			if (document.getElementById('report_IDcard').value && verify.ID_card(document.getElementById('report_IDcard').value) == false) return false;
			if (document.getElementById('report_link').value && verify.call(document.getElementById('report_link').value) == false) return false;
			// if (document.getElementById('email').value && verify.email(document.getElementById('email').value) == false) return false;
			if(document.getElementById('b_name').value && verify.cn_name(document.getElementById('b_name').value)==false) return false;
			document.getElementById('prompter').style.display = "none";
			document.getElementById('main').style.display = "block";
			stage = 4;
			return true
		}
		if (stage == 4) {
			if (verify.empty('#main') == false) return false;
			document.getElementById('main').style.display = "none";
			document.getElementById('sendFile').style.display = "block";
			stage = 5;
			return true
		}
	}
	// 上一步
	function preStep() {
		if (stage == 2) {
			document.getElementById('prompt').style.display = "none";
			document.getElementById('rule').style.display = "block";
			stage = 1;
			return true;
		}
		if (stage == 3) {
			document.getElementById('prompter').style.display = "none";
			document.getElementById('prompt').style.display = "block";
			stage = 2;
			return true;
		}
		if (stage == 4) {
			document.getElementById('main').style.display = "none";
			document.getElementById('prompter').style.display = "block";
			stage = 3;
			return true;
		}
		if (stage == 5) {
			document.getElementById('sendFile').style.display = "none";
			document.getElementById('main').style.display = "block";
			stage = 4;
			return true;
		}
	}

	function setBtn() {
		document.getElementById('rlname_rpt').onclick = function() {
			if (ifAgree() == true) {
				IfRealName = 1;
				nextStep()
			}
		}
		document.getElementById('hdname_rpt').onclick = function() {
			if (ifAgree() == true) {
				IfRealName = 0;
				nextStep()
			}
		}
		var pre = document.ele('.pre');
		var pre_len = pre.length;
		for (var i = 0; i < pre_len; i++) {
			pre[i].onclick = preStep;
		}
		var next = document.ele('.next');
		var next_len = next.length;
		for (var i = 0; i < next_len; i++) {
			next[i].onclick = nextStep;
		}
	}

	function init() {
		setBtn();
	}
	init();
}()