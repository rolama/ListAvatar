<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>List Avatar, by rolama</title>
	<link href="reset.css" rel="stylesheet" type="text/css" /> 
	<link href="ListAvatar.css" rel="stylesheet" type="text/css" />   
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
	<script type="text/javascript" src="ListAvatar.js"></script>
    <script type="text/javascript">
		var lst = new ListAvatar();
		lst.id = "ExampleList";
		lst.idInsert = "ListExample";
		lst.AddRow(1,"Ejemplo de codigo de list","https://si0.twimg.com/profile_images/3130771026/60c7919223e6517f63632e87e4e8f892_bigger.jpeg","List de Ejemplo 1");
		lst.AddRow(2,"Ejemplo de codigo de list","https://si0.twimg.com/profile_images/3130771026/60c7919223e6517f63632e87e4e8f892_bigger.jpeg","List de Ejemplo 2");
		lst.AddRow(3,"Ejemplo de codigo de list","https://si0.twimg.com/profile_images/3130771026/60c7919223e6517f63632e87e4e8f892_bigger.jpeg","List de Ejemplo 3");
		lst.AddRow(4,"Ejemplo de codigo de list","https://si0.twimg.com/profile_images/3130771026/60c7919223e6517f63632e87e4e8f892_bigger.jpeg","List de Ejemplo 4");
		lst.AddRow(5,"Ejemplo de codigo de list","https://si0.twimg.com/profile_images/3130771026/60c7919223e6517f63632e87e4e8f892_bigger.jpeg","List de Ejemplo 5");
		lst.AddRow(6,"Ejemplo de codigo de list","https://si0.twimg.com/profile_images/3130771026/60c7919223e6517f63632e87e4e8f892_bigger.jpeg","List de Ejemplo 6");
		lst.AddRow(7,"Ejemplo de codigo de list","https://si0.twimg.com/profile_images/3130771026/60c7919223e6517f63632e87e4e8f892_bigger.jpeg","List de Ejemplo 7");
		
		ListAvatar.click = function(id){
			alert("Click en id: " + id);
		}
		
		$(document).ready(function(){
			lst.Init();
		});
    </script>
</head>

<body>
	<div style="width:500px; height:300px; background-color: #EFEFEF; margin:0 auto;" id="ListExample">
    </div>
</body>
</html>