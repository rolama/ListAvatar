var ArrayList = new Array();
function ListAvatar(){
	this.id = "";
	this.idInsert = "";	
	this.conten = "";
	this.html = "";
	this.Insert = false;
	this.Data = new Array();
	
	this.AddRow = addRow;
	this.Init = init;	
	ArrayList.push(this);
	
	function addRow(id,text,img,title){
		var object = new Object();			object.id = id;		object.text = text;		object.img = img;		object.title = title;
		this.conten += '<li onClick="ListAvatar.click(' + id + ');"><img src="'+ img +'"><h5>'+ title+'</h5><p>'+ text +'</p></li>';
		this.Data.push(object);
	}
	function init(){
		this.html = '<div id="List'+ this.id +'" class="ConteList" style=" border:none; display:inline;"><ul>' + this.conten + '</ul></div>';
		if(this.Insert){
			$("#" + this.idInsert).html(this.html);
		}else{
			$("#" + this.idInsert).append(this.html);
		}
	}	
}
ListAvatar.click = function(id){
}