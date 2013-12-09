<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script>
		function notify(title,message,url) {
		    var havePermission = window.webkitNotifications.checkPermission();
		    if (havePermission == 0) { // 0 is PERMISSION_ALLOWED
		        var notification = window.webkitNotifications.createNotification(
		            'http://i.stack.imgur.com/dmHl0.png',
		            title,
		            message
		            );

		        notification.onclick = function () {
		            window.open(url);
		            notification.close();
		        }
		        notification.show();
		    } else {
		        window.webkitNotifications.requestPermission();
		    }
		} 
		var source = new EventSource("demo_sse.php");
		source.addEventListener('message', function(e) {
			var data = JSON.parse(e.data);
			notify(data.title,data.message,data.url);
		}, false);
	</script>
</body>
</html>