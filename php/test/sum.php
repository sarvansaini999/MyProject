<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	$('#sum').click(function(){
	
		 x = $('#firstvalue').val(); 
			
		var x1=parseInt(x);
		 y = $("#secondvalue").val();
		
		var y1=parseInt(y);
		
		
		
		$("#result").html(x1+y1);
	});
	
	$.getJSON("http://freegeoip.net/json/", function (data) {
		var country = data.country_name;
		var ip = data.ip;
		//alert(country);
		if(country == 'India'){
			$('.selDiv option:eq(1)').attr('selected', 'selected');
		}else{
			$('.selDiv option:eq(1)').attr('selected', 'selected');
		}
	});
	
	
	
});
</script>
</head>
<body>
	Enter first number:
	<input type="text" id="firstvalue" />&nbsp;
	<br />
	<br />
	 Enter second number:
	<input type="text" id="secondvalue" />&nbsp;
<input type="button" id="sum" value="sum"  />
	<br />
	<br />
	<span id="result">&nbsp;</span>
		
		
		
		<div class="selDiv" > 
  <select class="opts">
    <option selected value="DEFAULT">Default</option>
    <option value="SEL1">India</option>
    <option value="SEL2">Other</option>
  </select>
</div>
</body>
</html>