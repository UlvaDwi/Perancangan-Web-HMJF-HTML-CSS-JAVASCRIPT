<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="gambar/logoj.png">
	
	<title>Anggota-HMJF</title>

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
		<div class="teks_kategori3"><h3>Category Archieve:Anggota</h3></div>
		<?php require 'sidebar.php';?>
		<div class="kategori-berita">
			<div class="foto">
				<div class="foto-head">
					<div class="teks_kategori2">
						<div class="zoom-effect">
							<div class="kotakan">
								<a href="#"><img src="gambar/konten/anggota1.jpg">	</a><i><h3>Karya Anggota : Mei 2017</h3></i>
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
								<a href="#"><img src="gambar/konten/anggota2.jpg">	</a><i><h3>Karya Anggota : April 2017</h3></i>
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
								<a href="#"><img src="gambar/konten/anggota3.jpg">	</a><i><h3>Karya Anggota : Maret 2017</h3></i>
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
								<a href="#"><img src="gambar/konten/anggota4.jpg">	</a><i><h3>Karya Anggota : Februari 2017</h3></i>
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
								<a href="#"><img src="gambar/konten/anggota5.jpg">	</a><i><h3>Kompilasi Galeri Intagram Bulan Juli 2015</h3></i>
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
								<a href="#"><img src="gambar/konten/anggota6.jpg">	</a><i><h3>KOMPILASI KARYA ANGGOTA : MARET 2015</h3></i>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
	</div>
	<?php require 'footer.php';?>
</body>
</html>