<!Doctype html>
<html lang = "bg">
<head>
	<meta http-equiv="Content-Type" content="text/html"  charset="UTF-8"/>
	<title>
		Резервация | Хотелска система
	</title>
	<meta name = "viewport" content="width = device-width, initial-scale = 1">
	<link rel="icon" type="image/png" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> 
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class = "container">
		<div class="row">
			<div class = "col-md-12" >
				<a href="index.php" style="color: black; text-decoration: none;">
					<h2>
						<span class="glyphicon glyphicon-home"></span> SHS 
					</h2>
				</a>
			</div>
		</div>
		<div class="row">
	    	<div class = "col-md-4" style="border:1px solid grey;background: #779ECB;">
	    		<a href="reservation.php" style="color: black; text-decoration: none;">
		    		<h5>
		    			<span class="glyphicon glyphicon-phone-alt"></span> Резервация 
		    		</h5>
		    		<p style = "display: none;">
		    			Щракни за запазване
		    		</p>
	    		</a>
	    	</div>
			<div class = "col-md-4" style="border:1px solid grey;background: #DEA5A4">
				<a href="rooms.php" style="color: black; text-decoration: none;">
				
					<h5>
						<span class="glyphicon glyphicon-bed"></span> Стаи
					</h5>
					<p style = "display: none;">
						Състояние на стаите
					</p>
				</a>
			</div>
			<div class = "col-md-4" style="border:1px solid grey;background: #FFB347">
				<a href="cashier.php" style="color: black; text-decoration: none;">
					<h5>
						<span class="glyphicon glyphicon-euro"></span> Каса
					</h5>
					<p style = "display: none;">
						Отчетност и справки
					</p>
				</a>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-4" style="border:1px solid grey;background: #FFF284">
				<a href="clients.php" style="color: black; text-decoration: none;">
					<h5>
						<span class="glyphicon glyphicon-user"></span> Клиенти
					</h5>
					<p style = "display: none;">
						Списък с клиенти
					</p>
				</a>
			</div>
			<div class = "col-md-4" style="border:1px solid grey;background: #A8CFFF">
				<a href="reminders.php" style="color: black; text-decoration: none;">
					<h5>
						<span class="glyphicon glyphicon-time"></span> Напомняния
					</h5>
					<p style = "display: none;">
						Събития и записки
					</p>
				</a>
			</div>
			<div class = "col-md-4" style="border:1px solid grey;background: #D881ED">
				<a href="settings.php" style="color: black; text-decoration: none;">
					<h5>
						<span class="glyphicon glyphicon-wrench"></span> Настройки
					</h5>
					<p style = "display: none;">
						Опции на стаите
					</p>
				</a>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-12">
				<hr>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-12">
				<form role = "form">
					<div class = "form-group">
						<label for = "old-friends"> Стари клиенти</label>
						<select class = "form-control  input-lg" id = "old-friends">
							<option>1</option>
						</select>
					</div>
					<div class = "form-group">
						<div class = "col-md-6">
							<label for = "from-date">
								От дата
							</label>
							<input type = "date" class = "form-control input-lg" id = "from-date">
						</div>
						<div class = "col-md-6">
							<label for = "to-date">
								До дата
							</label>
							<input type = "date" class = "form-control input-lg" id = "to-date">
						</div>
					</div>
					<div class = "form-group">
						<label for = "cust-names">
							Трите имена
						</label>
						<input type = "text" class = "form-control input-lg" id = "cust-names" placeholder="Въвеждане на имена">
					</div>
					<div class = "checkbox">
						<label>
							<input type = "checkbox">
						</label>
					</div>
					<button type = "submit" class = "btn btn-default">
						<span class="glyphicon glyphicon-ok"></span> Резервация
					</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>