// JavaScript Document

	var xmlHttp=false;
	
	if(window.ActiveXObject)
	{
		xmlHttp=new ActiveXObject("MSXML2.XMLHTTP");
	}
	else if(window.XMLHttpRequest)
	{
		xmlHttp=new XMLHttpRequest();
	} 
	
	function makeBlank()
	{
		var val=jQuery.trim(document.getElementById('req-login').value);
		if(val=="Email Id")
		{
			document.getElementById('req-login').value="";
			document.getElementById('req-login').style.color="#000000";
		}
	}
	
	function checkVal()
	{
		
		var val=jQuery.trim(document.getElementById('req-login').value);
		if(val=="" || val=="Email Id")
		{
			document.getElementById('req-login').value="Email Id";
			document.getElementById('req-login').style.color="#AAAAAA"
		}
	}
	function makeBlankPw()
	{
		var val=jQuery.trim(document.getElementById('req-password').value);
		if(val=="P@ssw0rd")
		{
			document.getElementById('req-password').value="";
			document.getElementById('req-password').style.color="#000000";
		}
	}
	
	function checkValPw()
	{
		
		var val=jQuery.trim(document.getElementById('req-password').value);
		if(val=="" || val=="P@ssw0rd")
		{
		document.getElementById('req-password').value="P@ssw0rd";
		document.getElementById('req-password').style.color="#AAAAAA";
		}
	}
	
	function makesearch()
	{
		var val=jQuery.trim(document.getElementById('req-search').value);
		if(val=="Colleges/Institutions/Schools/Teachers")
		{
			document.getElementById('req-search').value="";
			document.getElementById('req-search').style.color="#000000";
		}
	}
	
	function checksearch()
	{
		var val=jQuery.trim(document.getElementById('req-search').value);
		if(val=="Colleges/Institutions/Schools/Teachers" || val=="")
		{
			document.getElementById('req-search').value="Colleges/Institutions/Schools/Teachers";
			document.getElementById('req-search').style.color="#AAAAAA";
		}
	}
	
	
	
	
	function getCollegeListByCity()
	{
		var city_id=document.getElementById('city_id').value;
		if(city_id==0)
		{
			document.getElementById('spanCollege').innerHTML="<font color=red>Select City!</font>";
		}
		else
		{
			if(xmlHttp.readyState==4 || xmlHttp.readyState==0)
			{
				document.getElementById('spanCollege').innerHTML="<font color=\"red\">Loading...</font>";
				xmlHttp.open("GET","request-process.php?ajax=getCollegeListByCity&city_id="+city_id,true);
				xmlHttp.onreadystatechange=handleServerResponse;
				xmlHttp.send(null);
			}
			else
			{
				setTimeout('getCollegeListByCity()',1000);
			}
		}
	}
	
	
	function handleServerResponse()
	{
		if(xmlHttp.readyState==4 || xmlHttp.status==200)
		{
			
			message=xmlHttp.responseText;
			document.getElementById('spanCollege').innerHTML=message;
		}
	}

	//function for teacher List for mouse over
	function teacherListOver(element)
	{
		document.getElementById(element).style.backgroundImage = "url(images/bg/forumbgover.jpg)";
		//document.getElementById('spnath').style.color='#000000'; 
		//document.getElementById('spantd').style.color='#000000'; 
		//document.getElementById(element).style.backgroundColor='white';	
	}
	
	//function for teacher List for mouse out
	function teacherListOut(element)
	{
		
		document.getElementById(element).style.color='#000000'; 
		document.getElementById(element).style.backgroundImage = "url(images/bg/forumbg.jpg)";
		//document.getElementById(element).style.backgroundColor='#fff49c';	
	}
	
	//function for latestPost List for mouse over
	function latestPostListOver(element)
	{
		
		//document.getElementById('postd1').style.color='#000000'; 
		document.getElementById(element).style.backgroundImage = "url(images/bg/forumbgover.jpg)";
		
		//document.getElementById(element).backgroundimage = url('images/bg/mouseover.jpg');
		//document.getElementById(element).style.color='#4b1c0d'; 
	}
	
	//function for latestPost List for mouse out
	function latestPostListOut(element)
	{
		//document.getElementById('postd1').style.color='#247e7f';
		document.getElementById(element).style.color='#247e7f'; 
		document.getElementById(element).style.backgroundImage = "url(images/bg/forumbg.jpg)";
		//document.getElementById(element).style.background='images/mouseover.png';
		//document.getElementById(element).style.color='#34578c'; 
	}
	function collegeListOver(element)
	{
	
		document.getElementById(element).style.backgroundImage = "url(images/bg/forumbgover.jpg)";
		//document.getElementById(element).backgroundimage = url('images/bg/mouseover.jpg');
		//document.getElementById(element).style.color='#4b1c0d'; 
	}

	function collegeListOut(element)
	{
		document.getElementById(element).style.color='#000000'; 
		document.getElementById(element).style.backgroundImage = "url(images/bg/forumbg.jpg)";
		//document.getElementById(element).style.background='images/mouseover.png';
		//document.getElementById(element).style.color='#34578c'; 
	}