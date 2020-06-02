<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="gambar/logoj.png">
	
	<title>Mininews-HMJF</title>

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
		<div class="teks_kategori3"><h3>Category Archieve:Mininews</h3></div>
		<?php require 'sidebar.php';?>
		<div class="kategori-berita">
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>MININEWS SWARAHASTA : Ceritoku, Pameran Pasca Diklat Dasar ABr 2017</b></div>
				<img src="gambar/konten/mininews1.jpg">
				<div class="isi-berita">Salam Ngetop. . . . ! Puji dan Syukur kehadirat Tuhan Yang Maha Esa atas limpah berkat dan rahmat-Nya serta kerjasama dari semua anggota baru Himpunan Mahasiswa Jurnalistik dan Fotografi (HMJF) angkatan XVIII  ...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
					<input class="buttonread" type="button" value="Download..." style="background-color: #ff3333">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">18 November 2017</a></li>
  <li><a href="#">Unduhan</a></li>
  <li>Mininews</li>
</ul><br>
				</div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>MININEWS SWARAHASTA : Story Teller, Pameran Pasca Pendidikan ABr 2016</b></div>
				<img src="gambar/konten/mininews2.jpg">
				<div class="isi-berita">Story Teller Seakan tidak pernah lelah, Anggota Baru (ABr) Himpunan Mahasiswa Jurnalistik dan Fotografi (HMJF) kembali menggelar pameran pasca Pendidikan setelah pameran pasca Diklat Dasar 'Inspirasi'...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
					<input class="buttonread" type="button" value="Download..." style="background-color: #ff3333">
				</form></a>
			<br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">2 Juli 2017</a></li>
  <li><a href="#">Unduhan</a></li>
  <li>Mininews</li>
</ul><br></div></div>
		
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>MININEWS SWARAHASTA #1 ISSUE : FEBRUARI 2017</b></div>
				<img src="gambar/konten/mininews3.jpg" style="height: auto;">
				<div class="isi-berita"><br><form>
					<input class="buttonread" type="button" value="Read More...">
					<input class="buttonread" type="button" value="Download..." style="background-color: #ff3333">
				</form></a>
			
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">2 Maret 2017</a></li>
  <li><a href="#">Unduhan</a></li>
  <li>Mininews</li>
</ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div></div>
			</div>
			
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Mininews Edisi February 2016</b></div>
				<img src="gambar/konten/mininews4.jpg" style="height: auto;">
				<div class="isi-berita"><br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
					<input class="buttonread" type="button" value="Download..." style="background-color: #ff3333">
				</form></a>
			<br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">4 Maret 2016</a></li>
  <li><a href="#">Unduhan</a></li>
  <li>Mininews</li>
</ul><br></div></div>
				
			</div>
	
</div>
	</div>
	<?php require 'footer.php';?>
</body>
</html>