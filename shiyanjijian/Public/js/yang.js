//自定义函数
//选择元素
Document.prototype.ele = function(param) {
		if (param.indexOf("#") == 0) return this.getElementById(param.substring(1, param.length))||null;
		if (param.indexOf(".") == 0) {
			if (this.getElementsByClassName) return this.getElementsByClassName(param.substring(1, param.length))||null;
			else {
				var className = param.substring(1, param.length);
				var temp = [];
				var temp2 = this.getElementsByTagName('*');
				var len = temp2.length;
				for (var i = 0, j = 0; i < len; i++) {
					if (temp2[i].class == className) temp[j++] = temp2[i];
				}
				return temp||null;
			}
		}
		return this.getElementsByTagName(param);
	}
	//获取外部css样式
Element.prototype.css = function() {
	return document.defaultView.getComputedStyle(this, null);
}
Element.prototype.ele = Document.prototype.ele;
//创建子元素
Element.prototype.append = function(data) {
		var temp = document.createElement('div');
		temp.innerHTML = data;
		temp = temp.childNodes;
		while (temp.length) {
			this.appendChild(temp[0]);
		}
	}
	//获取宽度
Element.prototype.width = function(value) {
		if (value == undefined) {
			var width = this.css().width;
			var parent = this.parentNode;
			while (width == 'auto' || width == '100%') {
				width = parent.css().width;
				parent = parent.parentNode;
			}
			return width;
		} else {
			this.style.width = value;
		}
	}
	//获取高度
Element.prototype.height = function(value) {
	if (value == undefined) {
		var height = this.css().height;
		var parent = this.parentNode;
		while (height == 'auto' || height == '100%') {
			height = parent.css().height;
			parent = parent.parentNode;
		}
		return height;
	} else {
		this.style.height = value;
	}
}