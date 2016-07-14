window.onload= init;

function init()
{
	livesearch();
}

function livesearch()
{
	var problem_code_input_search= document.getElementById("user-problem-code");

	problem_code_input_search.onkeyup= 
	function()
	{
		var search_val= problem_code_input_search.value;
		console.log(search_val);

		var xmlhttp;

		if (window.XMLHttpRequest) 
		{// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		} 
		else 
		{  // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange=
		function() 
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200) 
			{
				console.log("xmlhttp.responseText= "+xmlhttp.responseText);
			    document.getElementById("spoj-problem-code-suggestions").innerHTML=xmlhttp.responseText;
			}
		}

     	xmlhttp.open("POST","livesearch.php",true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    xmlhttp.send("problem_code="+search_val);
	}
}