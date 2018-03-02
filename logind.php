<!DOCTYPE html>
<html>
<head>
	<title>NOTICEBOARD: ADMIN PORTAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="./admin.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="./icon.png">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
	<h1>ADD NOTICES</h1>
	<form action="./noticeaction.php" method="post" id="adminform">
		<div>
			<div>
				<div class="define">HEADING</div><div class="box"><input type="text" name="heading" placeholder="HEADING" required="yes" class="formi"></div>
		    </div>
		    <div>
		        <div class="define">PASSKEY</div><div class="box"><input type="password" name="psw" placeholder="Passkey" required="yes" class="formi"></div>
		    </div>
		    <div>
		        <div class="define">NOTICE HERE</div><div class="box"><textarea form="adminform" name="contents" class="formc"></textarea></div>
            </div>
            <input type="submit" name="SUBMIT" class="submit">
        </div>
	</form>


</body>
</html>