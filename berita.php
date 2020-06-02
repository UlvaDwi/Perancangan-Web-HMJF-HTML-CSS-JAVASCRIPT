<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="gambar/logoj.png">
	
	<title>Berita-HMJF</title>

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

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
	<div class="main">
		<div class="teks_kategori3"><h3>Category Archieve:Berita</h3></div>
		<?php require 'sidebar.php';?>
		<div class="kategori-berita">
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>South Lion Dance Meriahkan Imlek Malang Town Square</b></div>
				<img src="gambar/konten/berita1.jpg">
				<div class="isi-berita">Perayaan tahun baru cina atau imlek memang identik dengan tarian barongsai. Tarian barongsai ini kembali diadakan untuk memeriahkan tahun Babi Tanah atau tahun ...<br><form>
					<a href="more.php"><input class="buttonread" type="button" value="Read More..."></a>
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">5 Februari 2019</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>berita</li>
</ul><br>
				</div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Kampanye Terbuka Pemira BEM 2018 Dimulai</b></div>
				<img src="gambar/konten/berita2.jpg">
				<div class="isi-berita">Memasuki akhir tahun, mahasiswa Universitas Kanjuruhan Malang (Unikama) dihadapkan dengan persiapan menyongsong gelaran pesta demokrasi ala mahasiswa..<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">25 Januari 2019</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>berita</li>
</ul><br>
			</div></div>
		
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Ritual Ciam Si-Roni 'Ceritoku'</b></div>
				<img src="gambar/konten/berita3.jpg">
				<div class="isi-berita">Nama Gunung Kawi sudah tidak asing lagi di kalangan masyarakat umum, gunung ini terletak di Jawa Timur tepatnya di Kecamatan Wonosari, Kabupaten Malang...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">18 November 2017</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>berita</li>
</ul><br>
			</div></div>
			</div>
			
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Pelatihan Jurnalistik 'Berita' Abr 2017</b></div>
				<img src="gambar/konten/berita4.jpg">
				<div class="isi-berita">Pelatihan Jurnalistik Berita yang di hadiri oleh ABr 2017 dan saudari Thermutis Paulina R. sebagai pemateri. Dengan diadakannya pelatihan ini, anggota ABr 2017 dapat memahami...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">30 Januari 2018</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>berita</li>
</ul><br>
			</div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Pesona Satu Suro di Gunung Kawi : Yevina 'Ceritoku'</b></div>
				<img src="gambar/konten/berita5.jpg">
				<div class="isi-berita">Pesona Satu Suro di Gunung Kawi Bulan Suro dalam penanggalan jawa atau dalam tahun baru islam disebut Bulan Muharram menjadi momentum yang istimewa bagi masyarakat...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">18 November 2017</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>berita</li>
</ul><br>
			</div></div>
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Tolereansi Antar Umat Beragama : Melky 'Ceritoku'</b></div>
				<img src="gambar/konten/berita6.jpg">
				<div class="isi-berita">TOLERANSI  ANTAR  UMAT  BERAGAMA Manusia  tercipta sebagai  makhluk  individu sekaligus  sebagai  makhluk   sosial.  Sebagai  makhluk  sosial  manusia  diwajibkan  mampu...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a>
			<br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">18 November 2017</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>berita</li>
</ul><br></div></div>
			</div>

			
			<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#"class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">&raquo;</a>
</div>	
</div>
	</div>
	<?php require 'footer.php';?>
</body>
</html>