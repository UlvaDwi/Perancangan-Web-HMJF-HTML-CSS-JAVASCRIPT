<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="gambar/logoj.png">
	
	<title>Artikel-HMJF</title>

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
		<div class="teks_kategori3"><h3>Category Archieve:Artikel</h3></div>
		<?php require 'sidebar.php';?>
		<div class="kategori-berita">
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Karya Jurnalistik Pasca AM 'Filosofi : Guru, Pahlawan Tanpa Tanda Jasa' by Tifaniar</b></div>
				
				<div class="isi-berita">Guru, Pahlawan Tanpa Tanda Jasa Oleh : Tifaniar Andriani   Hymne Guru Terpujilah wahai engkau, Ibu Bapak Guru Namamu akan selalu hidup dalam sanubariku Semua baktimu akan kuukir di dalam hatiku Sbagai prasasti, trimakasihku ntuk pengabdianmu. Engkau sebagai pelita dalam kegelapan, Engkau laksana embun penyejuk dalam kehausan Engkau patriot pahlawan bangsa, tanpa tanda jasa (Sartono) ...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">28 November 2016</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Artikel</li>
</ul><br>
				</div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Karya Jurnalistik Pasca AM 'Filosofi : JANC#K SIMBOL IDENTITAS BAGI KOMUNITAS' by Najmie</b></div>
				
				<div class="isi-berita">JANC#K SIMBOL IDENTITAS BAGI KOMUNITAS Dalam sebuah kebersamaan terkadang kurang lengkap jika tidak memiliki sapaan khusus, atau bisa dibilang dengan identitas sebagai kesolidan dalam sebuah persahabatan maupun komunitas dan organisasi. Namun, yang perlu kita dalami sekarang adalah panggilan akrab tersebut, apakah dengan sapaan janc#k loyalitas akan terpampang?..<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">27 November 2016</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Artikel</li>
</ul><br></div></div>
		
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>FENOMENA FOTO SELFIE</b></div>
				
				<div class="isi-berita">Akhir-akhir ini kita sering mendengar istilah Selfie, istilah ini sering kita jumpai di sosial media seperti facebook, twitter, instagram, dan berbagai media masa diseluruh dunia. Istilah selfie booming tidak hanya di Indonesia saja, tetapi sudah menjadi istilah baru yang digunakan oleh hampir masyarakat diseluruh dunia. Bahkan istilah baru ini masuk kedalam Kamus Oxford. Sebenarnya apa....<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">8 Januari 2016</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Artikel</li>
</ul><br></div></div>
			</div>
			
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>KELOR, SI DAUN KECIL BERKHASIAT TINGGI KELOR</b></div>
				
				<div class="isi-berita">Dunia tak selebar daun kelor”, pasti anda sering mendengarkan pribahasa tersebut. Dari kalimatnya sudah tergambarkan bahwa daun kelor sangatlah sempit atau kecil, seperti yang kita ketahui bahwa daun kelor memang berukuran kecil. Namun jangan salah menilai penampilannya, faktanya dibalik ukurannya yang kecil, daun kelor menyimpan berbagai khasiat....<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">9 Desember 2015</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Artikel</li>
</ul><br></div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>CEK JENIS KEPRIBADIANMU</b></div>
				
				<div class="isi-berita">Guys, tahu nggak sih menurut Hippocrates Galenus, kepribadian manusia dapat digolongkan menjadi 4 jenis. Dari keempatnya, kita bisa menentukan apa potensi kita, kelemahan kita, dan banyak yang lainnya. Apa saja sih 4 kepribadian itu?? Check this one out.. Sanguinis Sanguinis yang periang adalah temperamen yang hangat, cheerful, dan menyenangkan. Ia dapat menerima segala keadaan, dan...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">9 Desember 2015</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Artikel</li>
</ul><br></div></div>
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>NGANTUK ?? NO MORE..!!</b></div>
				
				<div class="isi-berita">Guys, tahu gak sih? Beberapa mahasiswa mengeluhkan tidak mampu menghasilkan target yang diinginkan dalam perkuliahan dikarenakan mengantuk pada saat kuliah. Begitu juga saat mengulang materi di rumah atau di kos. Hal ini menyebabkan belajar menjadi tidak optimal, dan tugas sering tidak tuntas dikerjakan. Lalu mau sampai kapan hal itu menghantui kita? Apa yang menyebabkan orang...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">9 Desember 2015</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Artikel</li>
</ul><br></div></div>
			</div>

			
			<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#"class="active">1</a>
  <a href="#">2</a>
  <a href="#">&raquo;</a>
</div>	
</div>
	</div>
	<?php require 'footer.php';?>
</body>
</html>