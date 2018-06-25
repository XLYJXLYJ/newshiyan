<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>廉洁石岩</title>
	<link rel="stylesheet" href="/shiyanjijian/Public/css/common.css">
	<script type="text/javascript" src="/shiyanjijian/Public/js/yang.js"></script>
	<script type="text/javascript" src="/shiyanjijian/Public/js/jquery.min.js"></script>
</head>
	<!-- 调用微信接口 -->
	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<body>
	
	<div class="alert" id="alert">
		<p id="alertMsg">asdfd</p>
		<div class="btn_orange" style="margin-top: 20px" id="alertClose">确定</div>
	</div>
	<div class="bg_black" id="bg_black"></div>
	<?php if($msg == 1): ?><script>showAlert("文件上传失败，请检查文件。");</script>
		<?php elseif($msg == 2): ?>
		<script>showAlert("举报失败，请稍候重试。")</script><?php endif; ?>
	<div class="container bgwt bgbt" id="container">
		<div class="df">
	<img src="/shiyanjijian/Public/images/logo.jpg" style="width: 50px;height: 50px;margin: 10px 0 0 10px" alt="">
	<div class="flx pdt10">
		<p class="mgb0 tc f14  fwb">中共深圳市宝安区石岩街道</p>
		<p class="tc f14 fwb mgb0">纪律检查工作委员会</p>
	</div>
	<p style="width: 70px;line-height: 60px" class="fwb mgb0 f17 c_red2 mgr10">网络举报</p>
</div>

		<div class="cl"></div>
		<form id="reportForm"  enctype="multipart/form-data" action="<?php echo U('Report/addReport');?>" method="post">
			<!-- 举报须知 -->
			<div id="rule">
				<div class=" pd10 rule_bottom pdb100">
					<!-- <p class="tc fwb">网络举报须知</p>
				-->
				<p class="bg_e0 c_red2 fwb pdl20">
					<span class="mgl-17 c_red2">1.</span>
					石岩街道纪工委网络举报受理范围：
				</p>
				<p class="mgb0 pdl20 f14">（1）石岩街道辖区内党组织、党员和监察对象违反党纪政纪问题；</p>
				<p class="mgb0 pdl20 f14">（2）石岩街道辖区内党组织、党员和监察对象不服党纪政纪处分和其他处理的申诉；</p>
				<p class="mgb0 pdl20 f14 mgb10">（3）对石岩街道辖区内党风廉政建设和纪检监察工作的意见、建议。</p>
				<p class="bg_e0 c_red2 fwb pdl20">
					<span class="mgl-17 c_red2">2.</span>
					提倡实名举报，对实名举报优先办理。对信访举报件，石岩街道纪工委在5个工作日内反馈受理情况，自告知举报人受理之日起，街道纪工委将尽快进行核实并反馈情况。
				</p>
				<p class="bg_e0 c_red2 fwb pdl20">
					<span class="mgl-17 c_red2">3.</span>
					石岩街道纪工委对举报人信息和举报内容严格保密。
				</p>
				<p class="bg_e0 c_red2 fwb pdl20">
					<span class="mgl-17 c_red2">4.</span>
					<!-- <i class="bg_img_ct db fl vat mgl-20" style="width:20px;height: 25px;background-image: url(/shiyanjijian/Public/images/list.gif)"></i>
				-->
						举报人应对所举报的问题真实性负责。不得捏造事实、诬告陷害他人，否则将承担相应的法律责任。
			</p>
			<p class="tc  c_red2 f14">
				<input type="checkbox" id="rule_agree" class="mgr5" style="width: 16px;height: 16px;vertical-align: middle;">我已阅读以上条款</p>
			<div class="tc">
				<div class="btn_white dib mgr20" id="rlname_rpt">实名举报</div>
				<div class="btn_orange dib" id="hdname_rpt">匿名举报</div>
			</div>
		</div>
	</div>
	<!-- end 举报须知 -->
	<!-- 重要提示 -->
	<div id="prompt" class="pd10" style="display: none">
		<div class="bgwt bdr10 bd_1_ccc pd10 pr mgt15 pdt20 mgb30">
			<div class="bg_img_ct pa tc c_white" style="width:150px;height: 35px;background-image: url(/shiyanjijian/Public/images/report_title.png);left: -5px;top: -15px">重要提示</div>
			<p>
				1. 对已经或者依法应当通过诉讼、仲裁、行政复议解决的诉求，对区级人民代表大会及其常务委员会、人民法院、人民检察院职权范围 的信访事项，及其他不属于纪检监察机关职权范围的信访事项，建议向有关单位提出，请勿在此填写提交。
			</p>
			<p>
				2. 请如实填写举报表单的各栏目。填写“主要问题”一栏时，力求详尽，条理清晰，对违纪违法行为发生的时间、地点、主要证据、涉及人员等交代明确。
			</p>
		</div>
		<div class="bgwt bdr10 bd_1_ccc pd10 pr mgt15 pdt20">
			<div class="bg_img_ct pa tc c_white" style="width:200px;height: 35px;background-image: url(/shiyanjijian/Public/images/report_title2.png);left: -5px;top: -15px">举报人的权利和义务</div>
			<p class="c_red2 fwb"> 权利</p>
			<p>1. 对党组织、党员和监察对象违纪违法的行为有权提出检举、控告；<br />2. 实名提出检举、控告后，在一定期限内得不到答复时，有权向受理机关提出询问，要求给予答复；<br />3. 有权要求与检举、控告案情有关或有牵连的承办人员回避；<br />4. 因进行检举、控告，其合法权利受到威胁或侵害时，有权要求受理机关给予保护；</p>
			<p class="c_red2 fwb"> 义务</p>
			<p>1. 对所检举、控告事实的真实性负责；<br />2. 遵守党的纪律和控告申诉工作的有关规定，维护社会秩序和工作秩序；<br />3. 接受党组织的正确处理意见，不得提出党章、制度、政策规定以外的要求。</p>
		</div>
		<div class="tc mgt20">
			<div class="btn_white dib mgr20 pre">上一步</div>
			<div class="btn_orange dib next">下一步</div>
		</div>
	</div>
	<!-- end 重要提示 -->
	<!-- 举报人信息 -->
	<div class="pd10" id="prompter" style="display: none">
		<p class="c_red2 f16" id="prompt_title">实名举报</p>
		<div class="bgwt bdr10 bd_1_ccc pd10 pr mgb20">
			<p class="tc ">举报人信息（注意：标有*的必须填写）</p>
			<p class="df">
				<span class="w80 dib mgr10 ">
					姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名
					<span class="rlshow ">*</span>
				</span>
				<input type="text" name="a_name" id="report_name" style="flex: 1" class="need_check_empty"></p>

			<p class="df">
				<span class="w80 dib mgr10 ">
					身份证号
					<span class="rlshow ">*</span>
				</span>
				<input type="text" name="a_IDcard" id="report_IDcard" style="flex: 1" class="need_check_empty"></p>
			<p class="df">
				<span class="w80 dib mgr10 ">
					联系方式
					<span class="rlshow ">*</span>
				</span>
				<input type="text" name="a_link" id="report_link" style="flex: 1" class="need_check_empty" placeholder="手机或固定电话(加区号)"></p>
			<p class="df">
				<span class="w80 dib mgr10 ">工作单位</span>
				<input type="text" class="flx" name="a_company"></p>
			<!-- <p class="df">
			<span class="w80 dib mgr10 ">政治面貌</span>
			<select name="a_political" id=""  class="flx">
				<option value="">==请选择==</option>
				<option value="中国共产党员">中国共产党员</option>
				<option value="其他">其他</option>
			</select>
		</p>
		<p class="df">
			<span class="w80 dib mgr10 ">电子邮箱</span>
			<input type="text" id="email" class="flx" name="a_email"></p>
		-->
	</div>
	<div class="bgwt bdr10 bd_1_ccc pd10 pr ">
		<p class="tc ">被举报人信息（注意：标有*的必须填写）</p>
		<p class="df">
			<span class="w80 dib mgr10">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名 *</span>
			<input type="text" id="b_name" name="b_name" style="flex: 1" class="need_check_empty"></p>
		<p class="df">
			<span class="w80 dib mgr10">工作单位 *</span>
			<input type="text" name="b_campany" style="flex: 1" class="need_check_empty"></p>
		<p class="df">
			<span class="w80 dib mgr10">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;务 *</span>
			<input type="text" name="b_work" style="flex: 1" class="need_check_empty"></p>
		<!-- <p class="df">
		<span class="w80 dib mgr10 ">级&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别 *</span>
		<select name="b_level" id="" class="need_check_empty" style="flex: 1">
			<option value="">==请选择==</option>
			<option value="正厅级">正厅级</option>
			<option value="副厅级">副厅级</option>
			<option value="正处级">正处级</option>
			<option value="副处级">副处级</option>
			<option value="正科级">正科级</option>
			<option value="副科级">副科级</option>
			<option value="科员">科员</option>
			<option value="办事员">办事员</option>
			<option value="其他">其他</option>
		</select>
	</p>
	-->
	<!-- <p class="df">
	<span class="w80 dib mgr10">特殊身份</span>
	<select name="b_special" id=""  class="flx">
		<option value="">==请选择==</option>
		<option value="全国人大代表">全国人大代表</option>
		<option value="全国政协委员">全国政协委员</option>
		<option value="省人大代表">省人大代表</option>
		<option value="省政协委员">省政协委员</option>
		<option value="市人大代表">市人大代表</option>
		<option value="市政协委员">市政协委员</option>
		<option value="区人大代表">区人大代表</option>
		<option value="区政协委员">区政协委员</option>
		<option value="民主人士">民主人士</option>
	</select>
</p>
-->
<p class="df">
	<span class="w80 dib mgr10">政治面貌 *</span>
	<select name="b_political" id=""  class="need_check_empty" style="flex:1">
		<option value="">==请选择==</option>
		<option value="中国共产党员">中国共产党员</option>
		<option value="其他">其他</option>
	</select>
</p>
<!-- <p class="df">
<span class="w80 dib mgr10 ">居住地址</span>
<input type="text" name="b_address"  class="flx"></p>
-->
</div>
<div class="tc mgt20">
<div class="btn_white dib mgr20 pre">上一步</div>
<div class="btn_orange dib next">下一步</div>
</div>
</div>
<!-- end 举报人信息 -->
<!-- 举报正文 -->
<div id="main" class="pd10" style="display: none">
<div class="bgwt bdr10 bd_1_ccc pd10 pr mgb20">
<p class="tc ">举报正文（注意：标有*的必须填写）</p>
<p class="df">
<span class="w80 dib mgr10 ">标&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;题 *</span>
<input type="text"class="need_check_empty flx" name="title"></p>
<p class="df">
<span class="w80 dib mgr10 ">问题类别 *</span>
<select name="scale" id=""class="need_check_empty flx">
	<option value="">==请选择==</option>
	<option value="违反政治纪律行为">违反政治纪律行为</option>
	<option value="违反民主集中制">违反民主集中制</option>
	<option value="违反干部选拔任用制度">违反干部选拔任用制度</option>
	<option value="接受礼品礼金宴请">接受礼品礼金宴请</option>
	<option value="违规从事营利活动">违规从事营利活动</option>
	<option value="挥霍浪费公共财产">挥霍浪费公共财产</option>
	<option value="贪污">贪污</option>
	<option value="贿赂">贿赂</option>
	<option value="挪用公款">挪用公款</option>
	<option value="巨额财产来源不明">巨额财产来源不明</option>
	<option value="违反金融税收管理法规">违反金融税收管理法规</option>
	<option value="违反土地管理法规">违反土地管理法规</option>
	<option value="国有资产流失">国有资产流失</option>
	<option value="违反政府采购和招投标">违反政府采购和招投标</option>
	<option value="安全事故">安全事故</option>
	<option value="执法执纪司法失职渎职">执法执纪司法失职渎职</option>
	<option value="侵犯民主权利">侵犯民主权利</option>
	<option value="侵犯人身权利">侵犯人身权利</option>
	<option value="严重违反社会主义道德行为">严重违反社会主义道德行为</option>
	<option value="色情嫖娼淫秽活动">色情嫖娼淫秽活动</option>
	<option value="违反人口与计划生育法规">违反人口与计划生育法规</option>
	<option value="其他检控类">其他检控类</option>
</select>
</p>
<p class="df">
<span class="w80 dib mgr10  vat">
	主要问题 * (1000字
	<br>以内)</span>
<textarea name="contain" id="" cols="30" rows="10" class="h150 need_check_empty flx"></textarea>
</p>
</div>
<div class="tc mgt20">
<div class="btn_white dib mgr20 pre">上一步</div>
<div class="btn_orange dib next">下一步</div>
</div>
</div>
<!-- end 举报正文 -->
<!-- 上传附件 -->
<div id="sendFile" class="pd10" style="display: none;">
<div class="bgwt bdr10 bd_1_ccc pd10 pr mgb20">
<div class="df mgb10">
<span class="w80 dib mgr15 ">附&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;件</span>
<div class="flx ovflhd">
	<div id="chooseFile" class="btn_gray dib">选择附件</div>
	<input type="text" name="file" id="serverIds" style="display: none;" value="0">
	<p class="ovflhd f14 c_red mgb0" style="word-break: break-all;" id="file_name"></p>
	<p class="c_red" id="fileState"></p>
	<p class="f14" style="word-break: break-all;">
		温馨提示：最多可同时上传5个文件，每个文件建议在10M大小以内，附件仅限于文件名后缀：doc,docx,xsl,xls,xlsx,pdf,txt,zip,rar,tar,jpg,wav,mp3,rmvb,wmv等格式的文件，禁止exe.bat等格式文件上传，再次“选择附件”则会覆盖上次选择的附件。
	</p>
</div>
</div>
<div class="mgb10 df">
<span class="w80 dib mgr10 ">验 证 码 *</span>
<input type="text" id="code" style="width: 80px" class="mgr5 need_check_empty">
<div id="verifyCode" class="bg_img_ct dib vam" style="cursor: pointer;height: 35px;width: 80px;"></div>
</div>
</div>
<div class="tc mgt20">
<div class="btn_white dib mgr20 pre">上一步</div>
<div class="btn_orange dib" id="sendBtn">提交</div>
<script>
</script>
</div>
</div>
<!-- end 上传附件 -->
</form>
</div>
<script type="text/javascript" src="/shiyanjijian/Public/js/common.js"></script>
<script type="text/javascript" src="/shiyanjijian/Public/js/report.js"></script>
<!-- 微信config注入权限验证配置 -->
<script>
	!function(){
		var code='';//保存二维码数字
		var serverIds=[];//保存上传到微信服务器图片的serverId
		var fileNum=0;
		var nowNum=0;
		// var serverIdNum=0;
		$.get("<?php echo U('Report/getSignPackage');?>",function(data){
			wx.config({
			    debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
			    appId: data.appId, // 必填，公众号的唯一标识
			    timestamp: data.timestamp, // 必填，生成签名的时间戳
			    nonceStr: data.nonceStr, // 必填，生成签名的随机串
			    signature: data.signature,// 必填，签名，见附录1
			    jsApiList: ['chooseImage','uploadImage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
			});
			document.getElementById('chooseFile').onclick=function(){
				wx.chooseImage({
				    count: 5, // 默认9
				    sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
				    sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
				    success: function (res) {
				        var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
				        serverIds=[];
				        fileNum=localIds.length;
				        nowNum=0;
				        $('#fileState').html('附件上传中..0/'+fileNum);
				        uploadImage(localIds);
				    }
				});
			}
		},'json')
		function uploadImage(localIds){
			document.getElementById('sendBtn').onclick=function(){
				alert('图片上传中，请稍后提交');
			}
			var localId=localIds.pop();
			wx.uploadImage({
			    localId: localId, // 需要上传的图片的本地ID，由chooseImage接口获得
			    isShowProgressTips: 1, // 默认为1，显示进度提示
			    success: function (res) {
			        var serverId = res.serverId; // 返回图片的服务器端ID
			        serverIds.push(serverId);
			        nowNum+=1;
			        document.getElementById('sendBtn').onclick=sendForm;
			        // $("#container").html(serverId);
			        $('#fileState').html('附件上传中..'+nowNum+'/'+fileNum);
			        if(serverIds.length==fileNum){
			        	$('#fileState').html('附件上传完毕..'+nowNum+'/'+fileNum);
			        }
			        if(localIds.length > 0){
				        uploadImage(localIds);
				    }
			    }
			});
		}
		function getVerifyCode(){
			$.get("<?php echo U('Report/verifyCode');?>",function(data){
				data=JSON.parse(data);
				code=data['str'];
				document.getElementById('verifyCode').style.backgroundImage="url("+data['img']+")";
			})
		}
		function sendForm(){
			if(verify.empty('#sendFile')==false)return false;
			if(document.getElementById('code').value!=code){
				showAlert('验证码错误，请重新输入。');
				return false;
			}
			document.getElementById('sendBtn').onclick=null;
			document.getElementById('serverIds').value=JSON.stringify(serverIds);
			$("#reportForm" ).submit();
		}
		getVerifyCode();
		document.getElementById('sendBtn').onclick=sendForm;
		document.getElementById('verifyCode').onclick=getVerifyCode;
	}()
</script>
</body>
</html>