* {
	padding: 0;
	margin: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body {
	margin: 0;
	padding: 0;
	background:	url(puente.jpg);
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	background-color: #000000;
	font-family: "Quicksand", Arial, sans-serif, helvetica, century gothic;
}

a{
	color: #ffffff;
}

.logo {
	width: 250px;
	height: 280px;
	overflow: hidden;
	position: absolute;
	top: 150px;
	left: 75px;
}

.wrap {
	position: absolute;
	top: 0px;
	left: 500px;
	width: 90%;
	height: 90%;
	max-width: 400px;
	max-height: 400px;
}

h2{
	margin: 0;
	padding: 0 0 0;
	color: #ffffff;
	text-align: center;
	font-family: "Prompt", Arial, sans-serif, helvetica, century gothic;
}

form {
	width: 100%;
	margin: 20px 0;
	padding: 20px;
	background: #fff;
	background:rgba(0,0,0,0.7);
	overflow: hidden;
	box-shadow: 0 0 10px grey;
	border-top: 4px solid #33ccff;
	color: #ffffff;
}

form input[type="text"],
form input[type="email"],
form input[type="password"],
form textarea {
	border: 1px solid #4d68fe;
	border-radius: 2px;
	padding: 14px;
	width: 100%;
	display: block;
	margin-bottom: 20px;
	font-family: "Quicksand", Arial, sans-serif, helvetica, century gothic;
	font-size: 1em;
	color: #000000;
}

form input[type="text"]:focus,
form input[type="email"]:focus,
form input[type="password"]:focus,
form textarea:focus{
	border: 2px solid #4d68fe;
	padding: 15px;
}


form textarea{
	max-width: 100%;
	min-width: 100%;
	max-height: 300px;
	min-height: 150px;
}


form input[type="submit"]{
	padding: 10px;
	background: #ed572a;
	color: #e1e9fa;
	font-size: 1em;
	font-family: "Quicksand", Arial, sans-serif, helvetica, century gothic;
	border-radius: 2px;
	border: none;
	float: right;
	cursor: pointer;
}

form input[type="submit"]:hover{
	background: #e64a19;
}


