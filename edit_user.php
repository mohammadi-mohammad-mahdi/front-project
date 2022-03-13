<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش پروفایل کاربر</title>
	<style>
		#t3{
			font-weight: bold;
    background-color: white;
    font-family: b titr;
    width: 280px;
    height: 50px;
    font-size: 25px;
			margin-top: 5px;
			margin-right: 95px;
			margin-bottom: 20px;
		}
		#h{
		border-radius:30px ;
		text-align: center;
		width: 1100px;
		display: inline-block;
		border-width: thick;
		background-color: beige;
	}
		body{
    text-align: center;
    font-size: 25px;
    font-family: b titr;
    background-color: cyan;
    font-weight: bold;
	
}
		label  {
    
    display: inline-block;
    width: 100px;
    text-align: right;
    margin: 5px;
   
    
}
input {
    height: 3em;
    margin-top: 5px;
	margin-right: 10px;
}
		 textarea{
    height: 10em;
}
		input:not([type = "submit"]) , textarea {
    width: 35%;
}
		h1 {
   
    text-align: center;
}
		form div *{

    vertical-align: middle;
   
}
		#username{
			margin-left: 10px;
		}
		#fullname{
			margin-right: 20px;
		}
	body,td,th {
    font-size: 24px;
}
		#fullname{
			margin-left: 19px;
		}
		#password{
			margin-left: 10px;
		}
    </style>
</head>
	<div id="h">
	
<body>
    <h1>ویرایش پروفایل</h1>
    <form action="edit_user_controller.php" method="post">
        <div>
          <input type="text" name="fullname" id="fullname">
          <label for="fullname">:نام کامل</label>
      </div>
        <div>
          <input type="text" name="username" id="username">
          <label for="username2">:نام کاربری</label>
      </div>
        <div>
          <input type="password" name="password" id="password">
          <label for="password2">کلمه عبور:</label>
        </div>
        <button type="submit" name="submit" id="t3">ثبت نام</button>
    </form>
	</div>
</body>
</html>