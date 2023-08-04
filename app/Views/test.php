<!DOCTYPE html>
<html>

<head>
	<title>Getting Clients IP</title>

	<?php  
    // if user from the share internet  
    // if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
    //     echo 'IP address = '.$_SERVER['HTTP_CLIENT_IP'];  
    // }  
    // //if user is from the proxy  
    // elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
    //     echo 'IP address = '.$_SERVER['HTTP_X_FORWARDED_FOR'];  
    // }  
    //if user is from the remote address  
    $IPaddress111='42.11.45.45';
     echo $IPaddress111= str_replace("."," ",$IPaddress111);
?>
	<style>
	h1 {
		color: green;
	}
	</style>
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	
	<script>
	
	// Add "https://ipinfo.io" statement
	// this will communicate with the ipify servers
	// in order to retrieve the IP address
	$.get("https://ipinfo.io", function(response) {
			alert(response.ip);
		}, "json")
		
		// "json" shows that data will be fetched in json format
	</script>
</head>

<body>
	<center>
		<h1>GeeksforGeeks</h1>
		<h3>Getting Client IP address</h3>
		<p><?php echo  $IPaddress111 ?></p>
	</center>
</body>
 
</html>
