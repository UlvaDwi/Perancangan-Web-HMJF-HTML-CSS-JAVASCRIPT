<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="gambar/logoj.png">
	
	<title>Karya Pameran-HMJF</title>

<style>


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>

	<?php require 'header.php';?>
</head>
<body bgcolor="#fafafa">
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

	<div class="main">
<!-- <div class="slider">
			<figure>
				<div class="slider">
					<img src="gambar/konten/foto1.jpg">
				</div>
				<div class="slider">
					<img src="gambar/konten/foto2.jpg">
				</div>
				<div class="slider">
					<img src="gambar/konten/foto3.jpg">
				</div>
				<div class="slider">
					<img src="gambar/konten/foto4.jpg">
				</div>
				<div class="slider">
					<img src="gambar/konten/foto5.jpg">
				</div>
			</figure> -->
		<!-- </div> -->
		<div class="teks_kategori3"><h3>Category Archieve:Karya Pameran</h3></div>
		<?php require 'sidebar.php';?>
			<div class="foto">
				<div class="foto-head">
					<div class="teks_kategori2">
						<div class="zoom-effect">
							<div class="kotakan">
								<a href="#"><img src="gambar/konten/karya2.jpg">	</a><i><h3>Karya Pameran Pasca Diklat Anggota Baru (ABr) 2018-'TOTALITAS'</h3></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="foto">
				<div class="foto-head">
					<div class="teks_kategori2">
						<div class="zoom-effect">
							<div class="kotakan">
								<a href="#"><img src="gambar/konten/karya3.jpg">	</a><i><h3>Karya Pameran Pasca Pendidikan Anggota Baru (ABr) 2017-'AWAWARNA'</h3></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="foto">
				<div class="foto-head">
					<div class="teks_kategori2">
						<div class="zoom-effect">
							<div class="kotakan">
								<a href="#"><img src="gambar/konten/karya4.jpg">	</a><i><h3>Karya Pameran Pasca Diklat Dasar ABr 2017 – Ceritoku</h3></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="foto">
				<div class="foto-head">
					<div class="teks_kategori2">
						<div class="zoom-effect">
							<div class="kotakan">
								<a href="#"><img src="gambar/konten/karya5.jpg">	</a><i><h3>Karya Pameran Hunting Besar 2017 – Setjangkir Tjerita</h3></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="foto">
				<div class="foto-head">
					<div class="teks_kategori2">
						<div class="zoom-effect">
							<div class="kotakan">
								<a href="#"><img src="gambar/konten/karya6.jpg">	</a><i><h3>Karya Pameran Pasca Pendidikan ABr 2016 'Story Teller'</h3></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="foto">
				<div class="foto-head">
					<div class="teks_kategori2">
						<div class="zoom-effect">
							<div class="kotakan">
								<a href="#"><img src="gambar/konten/karya7.jpg">	</a><i><h3>Karya Pameran Gelar Karya 2017 – Kolase</h3></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="foto">
				<div class="foto-head">
					<div class="teks_kategori2">
						<div class="zoom-effect">
							<div class="kotakan">
								<a href="#"><img src="gambar/konten/karya8.jpg">	</a><i><h3>Karya Pameran Pasca Diklat Dasar ABr 2016 'Inspirasi'</h3></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="foto">
				<div class="foto-head">
					<div class="teks_kategori2">
						<div class="zoom-effect">
							<div class="kotakan">
								<a href="#"><img src="gambar/konten/karya9.jpg">	</a><i><h3>Kompilasi Gelar Karya Anggota 2016  'ALL OUT'</h3></i>
							</div>
						</div>
					</div>
				</div>
			</div><br>
			
			<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#"class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">&raquo;</a>
</div>	
</div>
	</div>
	<?php require 'footer.php';?>
</body>
</html>