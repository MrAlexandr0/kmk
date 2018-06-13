<p> Lets look at the Request Response Cycle: </p>
	<code class="expl">[Start]| enduser@browser request -- 
		Going to webserver[proccesses php, creating a html page] -- 
		returns html to enduser@browser [End]
	</code><br>
	<p>The request will always come from the enduser@browser. 
		Initial request will not come from the webserver.<br>
	There are 3 ways we can recieve data requests from endusers on the web:<br>
	<ul>
		<li>URLs / Links: When a user for instance clicks the world news going from local news.
		<li>Forms: When a user fills out information and click submit.
		<li>Cookies: Browser cookies stored in the endusers browser.
	</ul>
	<code class="expl">
		URLs and Links are GET requests<br>
		Forms are POST request<br>
		Cookies -- the way we access COOKIE information that piggy backs on each request<br>
	</code>
</p>


<p> Example of how to use php with links </p>
<div style="background:#D0D0D0;height:550px;"> <?php // This div conains the two simulating page-divs?>
	<br>
	<div style="background:#D6EAFE;float:left;width:50%;height:500px;">
		
		<p style="text-align:center;">
		first_page.php<br>
		//simulates a page that contains a link
		</p>
		<p>Examplecode:</p>
		<code class="synt">
		<?php 
			$example = array();
	
			$example[] = '<?php ';
			$example[] = '	//First we create som values that we will use within the link';
			$example[] = '	$url = "second_page.php";';
			$example[] = '	$link_name = "Link to second Page";';
			$example[] = '	$id = 2;';
			$example[] = '';
			$example[] = '	//now we can use these variables within the html url';
			$example[] = '	echo <a href="$url?id=$id">$link_name</a>';
			$example[] = '';
			$example[] = '';
			$example[] = '?>		';
	
			speschar($example);
		?>
		</code>
		<p>This is how the code looks like when executed:</p>
			<?php 
				//First we create som values that we will use within the link
				$url = "second_page.php";
				$link_name = "Link to second Page";
				$id = 2;
			
				//now we can use these variables within the html url
				echo "<a href='" . $url . "?id=" . $id . "'>" . $link_name . "</a>";
			
			?>	
	</div>
	
	<div style="background:#F4CACA;float:right;width:50%;height:500px;">
		
		<p style="text-align:center;">
		second_page.php<br>
		//simulates a webpage that first_page.php linked to
		</p>
	<code class="synt">Value recieved from first_page.php is: 2</code><br>
	
	</div>
</div>
	<br>