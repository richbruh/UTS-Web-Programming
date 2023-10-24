<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>404 HTML Tempalte by Colorlib</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<style>
        * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
}

#notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 410px;
  width: 100%;
  text-align: center;
}


.notfound h2 {
  font-family: 'Montserrat', sans-serif;
  color: #000;
  font-size: 24px;
  font-weight: 700;
  text-transform: uppercase;
  margin-top: 200px; /* Tambahkan ini untuk mengatur jarak ke bawah */
}

.notfound p {
  font-family: 'Montserrat', sans-serif;
  color: #000;
  font-size: 14px;
  font-weight: 400;
  margin-bottom: 10px; /* Tambahkan ini untuk mengatur jarak ke bawah */
  margin-top: 10px; /* Tambahkan ini untuk mengatur jarak ke atas */
}

.notfound a {
  font-family: 'Montserrat', sans-serif;
  font-size: 14px;
  text-decoration: none;
  text-transform: uppercase;
  background: #0046d5;
  display: inline-block;
  padding: 15px 30px;
  border-radius: 40px;
  color: #fff;
  font-weight: 700;
  -webkit-box-shadow: 0px 4px 15px -5px #0046d5;
          box-shadow: 0px 4px 15px -5px #0046d5;
}

.paimon-dizzy {
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 300px;
  max-height: 300px;
  position: absolute; /* Tambahkan ini */
  left: 50%; /* Tambahkan ini *//* Tambahkan ini */
  transform: translate(-50%, -50%); /* Tambahkan ini */
  z-index: -1;
}
@media only screen and (max-width: 767px) {
    .notfound .notfound-404 {
      height: 142px;
    }
    .notfound .notfound-404 h1 {
      font-size: 112px;
    }
}

    </style>

</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
            <img class= "paimon-dizzy" src="../Background/paimondizzy.jpeg" alt="paimon dizzy">
			</div>
			<h2>Page not found</h2>
			<p>"Terjadi kesalahan saat mendaftar. Silakan coba lagi."</p>
			<a href="../register.php">Register Again</a>
		</div>
	</div>

</body>

</html>
