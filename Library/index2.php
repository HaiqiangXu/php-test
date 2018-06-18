<html>
    <head>
        <title>Example</title>
		<script type="text/javascript" src="functions.js"></script>
		<style>
			.hide {
				display:none;
			}
		</style>
    </head>
    <body onLoad="checkCookie()">
		<!-- <a href="index.php"
			onmouseover="ecribe(true)"
			onmouseout="escribe(false)">
			HOLA
		</a>//-->
		
		<H1>HOLAAAAAAAAAAAAAAA Mundooooo</H1>
		<p>User: <input type="text" onblur="CheckUser(this)"  onkeypress="KeyPress(this)" name="user" /></p>
		<p>Pass: <input type="password" name="pass" /></p>
		<p><input type="button" onmouseover="startTime()" onclick="show_confirm()" value="Show confirm box" /></p>
		
		<div id="txt"></div>
		
		<div id="test" class=hide>
			<h1>ESCONDIDO</h1>
		</div>
		<input type=button onclick="oculta(this)" value="EMPEZAR">
	</body>
	<script>escribe()</script>
</html>