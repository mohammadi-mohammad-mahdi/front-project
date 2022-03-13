<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title> ورود  </title>
<style>
#t1{
    font-weight: bold;
    background-color: white;
    font-family: b titr;
    width: 280px;
    height: 50px;
    font-size: 25px;
	margin-right: 130px;
	margin-bottom: 20px;
}
form div *{

    vertical-align: middle;
   
}

h1 {
   
    text-align: center;
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
}
 textarea{
    height: 10em;
}

input:not([type = "submit"]) , textarea {
    width: 35%;
}
body{
    text-align: center;
    font-size: 25px;
    font-family: b titr;
    background-color: cyan;
    font-weight: bold;
	
}
	#s{
		border-radius:30px ;
		text-align: center;
		width: 1100px;
		display: inline-block;
		border-width: thick;
		background-color: beige;
	}
	#name{
		margin-right: 3px;
	}
</style>
</head>
<body>
	<div id="s">
	
<form action = "" method = "post">
        <h1>  ورود </h1>
        <div>  
    <input type = "text" name = "name" id = "name">       
  : نام کاربری </div>
        <div> 
               <input type = "password" name = "password" id = "password">
          <label for = "password" >:کلمه عبور </label>
        </div>
                   <input type = "submit" value = "ورود" id="t1" >
           </form>
      </div>
</body>
</html>