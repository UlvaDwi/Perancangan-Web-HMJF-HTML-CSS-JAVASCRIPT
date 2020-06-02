<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="gambar/logoj.png">
	
	<title>HMJF Unikama by Ulva</title>

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
</head>
<?php require 'header.php';?>
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
		<div class="teks_kategori3"><h3>Category Archieve:Acara</h3></div>
		<?php require 'sidebar.php';?>
		<div class="kategori-berita">
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Pelatihan Fotografi 'Eksposure dan Pencahayaan' ABr 2018</b></div>
				<img src="gambar/konten/acara1.jpg">
				<div class="isi-berita">Pelatihan Eksposure dan Pencahayaan kembali diadakan untuk Anggota Baru untuk memenuhi sistem pendidikan HMJF. Pelatihan ini berlangsung di Sekretariat HMJF, Jum’at (15/2)..<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a>
				</div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Pelatihan 'Opini' ABr 2018</b></div>
				<img src="gambar/konten/acara2.jpg">
				<div class="isi-berita">Pelatihan Opini merupakan salah satu dari 3 pelatihan wajib dalam bidang jurnalistik yang harus diikuti untuk naik jenjang menuju Anggota Muda (AM).Kali ini Pemateri Pelatihan Opini adalah <br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a></div></div>
		
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Musyawarah Kerja ke-XXVII</b></div>
				<img src="gambar/konten/acara3.jpg">
				<div class="isi-berita"><br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a></div></div>
			</div>
			
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Pemantapan Anggota Biasa (AB) 2017</b></div>
				<img src="gambar/konten/acara4.jpg">
				<div class="isi-berita"><br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a></div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Diskusi Photo Book & Jurnalistik 'PAHLAWAN' Pasca Pendidikan Anggota Muda (AM) 2017</b></div>
				<img src="gambar/konten/acara5.jpg">
				<div class="isi-berita">Diskusi foto dan Jurnalistik ini adalah pengimplentasian dari sebuah proses. Proses dimana kami, para anggota muda tahun 2017 untuk menunjukan hasil dari pelatihan yang telah diberikan...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a></div></div>
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Pameran Pasca Diklat Anggota Baru (ABr) 2017- 'TOTALITAS'</b></div>
				<img src="gambar/konten/acara6.jpg">
				<div class="isi-berita">Diklat dasar, awal dari sebuah perjuangan untuk memasuki organisasi yang notabene mengajarkan tentang keilmuan jurnalistik dan fotografi. Melewati diklat forum dan lapangan selama enam hari ...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a></div></div>
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