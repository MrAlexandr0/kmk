<p>The syntax of using Get requests looks like this:</p>
<code class="expl">
	somepage.php?named_variable="valueofvariable"<br>
	somepage.php?named_variable="valueofvariable"<b><?php spescharsingle("&"); ?></b>another_var="valueofvar2"<br>
	<b>questionmark - variablename = recieved_value <?php spescharsingle("&"); ?> variablename2 = recieved_value2</b>
</code>

<p>Super global variable: <br>
	-Always available in all scopes<br>
	-Assigned by PHP before processing page code<br>
	$_GET - superglobal where query parameters are set by php</p>
	$_ - All superglobals start with this two symbols
	