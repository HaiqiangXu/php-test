function escribe()
{
	var x = 0;

	x++;
	x = x + 5;
	document.write("<h1>Hello World!</h1>");
	document.write("<br/>");
	document.write(x);

	document.write("<br/>");
	var d = new Date();
	document.write(d.getDate() + " " + d.getHours() + " - " + d.getFullYear());
	document.write("<br/>");
	
	var mycars = new Array("Ford", "SEAT");
	mycars[3] = "Saab";
	mycars[4] = "Volvo";
	mycars[5] = "BMW";

	for (x in mycars)
		document.write(mycars[x] + "<br />");
		
	show_alert("Escritura sobre HTML valido");
}

function startTime()
{
	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();
	
	// add a zero in front of numbers<10
	m = checkTime(m);
	s = checkTime(s);
	document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;	//al estar modificando un objeto dentro del HTML, no me machaca toda aun llamandola en OnLoad()
	t = setTimeout('startTime()', 1000);		//creamos un Timer que se ejecuta cada 1000 ms. La variable 't' es global y accesible para cualquier funcion de este fichero de scripts
	//clearTimeout(t);							//eliminamos Timer
}

function checkTime(i)
{
	if (i < 10)
		i = "0" + i;

	return i;
}

function oculta(x)
{
	var obj = document.getElementById('test');
	if( obj.style.display == "none" )
	{
		obj.style.display = "block";
		x.value = "OCULTAR";
	}
	else
	{
		obj.style.display = "none";
		x.value = "MOSTRAR";
	}
}

function show_alert(str)			//~MessageBox por defecto sin botones extras
{
	alert(str);
}

function show_confirm()			//~MessageBox con botones confirmacion Ok/NOk
{
	var r = confirm("Confirmation Dialog.\nPress a button");
	if (r)
	  document.write("You pressed OK!");
	else
	  document.write("You pressed Cancel!");
}

function show_prompt()			//~InputBox
{
	var name = prompt("Please enter your name", "Harry Potter");
	if (name != null && name != "")
		document.write("Hello " + name + "! How are you today?");
}

function checkCookie()
{
	username = getCookie('username');
	if (username != null && username != "")
	{
		alert('Welcome again ' + username + '!' + '\nExpires in ' + getCookie('expires'));
	}
	else
	{
		username = prompt('Please enter your name:',"");
		if (username != null && username != "")
			setCookie('username', username, 2);
	}
}

function getCookie(key)
{
	if (document.cookie.length > 0)
	{
		c_start = document.cookie.indexOf(key + "=");
		if (c_start != -1)
		{
			c_start = c_start + key.length + 1;
			c_end = document.cookie.indexOf(";", c_start);
			if (c_end == -1) c_end = document.cookie.length;
			return unescape(document.cookie.substring(c_start, c_end));
		}
	}
	
	return "";
}

function setCookie(key, value, expiredays)
{
	var exdate = new Date();
	var expire = "";
	
	exdate.setDate(exdate.getDate() + expiredays);
	if (expiredays != null)
		expire = "expires=" + escape(exdate.toGMTString()) + ";";
	document.cookie = key + "=" + escape(value) + ";" + expire;		//parece que las cookies solo aceptan 1 key=> 1 value
}

function CheckUser(x)
{
	with (x)
	{
		if (x.value == null || x.value == "" || x.value != "user")
		{
			x.style.backgroundColor="#FFCC80";
		}
	}
}

function KeyPress(x)
{
	x.style.backgroundColor="#FFFFFF";
}