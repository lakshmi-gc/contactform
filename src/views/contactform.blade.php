<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Hi this is testing page</p>
<form action="{{route('contact')}}" method="post">
	@csrf
	<input type="text" name="name" placeholder="enter youe name">
	<input type="email" name="email" placeholder="enter your email">

	<input type="text" name="message" placeholder="enter your msg">
	<input type="submit" value="submit">	
</form>
</body>
</html>