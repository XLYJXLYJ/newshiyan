!function(){
	function setComProblem(){
		var btn=document.ele('.cp_btn');
		var detail=document.ele('.cp_detail');
		var btn_len=btn.length;
		var detail_len=detail.length;
		for(var i=0;i<btn_len;i++){
			btn[i].onclick=function(){
				for(var j=0;j<detail_len;j++){
					detail[j].style.display="none";
				}
				for(var k=0;k<btn_len;k++){
					btn[k].ele('.cp_title')[0].style.background="#eee";
					btn[k].ele('.cp_title')[0].style.color="#333";
				}
				this.ele('.cp_title')[0].style.color="white";
				this.ele('.cp_title')[0].style.backgroundColor="#b10006";
				this.ele('.cp_detail')[0].style.display="block";
			}
		}
	}
	function init(){
		setComProblem();
	}
	init();
}()