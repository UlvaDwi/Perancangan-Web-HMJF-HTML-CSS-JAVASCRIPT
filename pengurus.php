<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="gambar/logoj.png">
	
	<title>Pengurus-HMJF</title>

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
		<div class="teks_kategori3"><h3>Category Archieve:Pengurus</h3></div>
		<?php require 'sidebar.php';?>
		<div class="kategori-berita">
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Tanda Tangan SK Kepengurusan Periode 2017/2018</b></div>
				<img src="gambar/konten/pengurus1.jpg"style="height:  auto;">
				<div class="isi-berita"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">25 Januari 2018</a></li>
  <li><a href="#">Tentang kami</a></li>
  <li>pengurus</li>
</ul><br>
				</div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita" >
				<div class="berita-head">
				<b>Musyawarah Kerja HMJF ke XXVI</b></div>
				<img src="gambar/konten/pengurus2.jpg" style="height: auto; ">
				<div class="isi-berita"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">16 Januari 2016</a></li>
  <li><a href="#">Tentang Kami</a></li>
  <li>pengurus</li>
</ul><br>
			</div></div>
		
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Serah Terima Jabatan Pengurus HMJF 2016/2017</b></div>
				<img src="gambar/konten/pengurus3.jpg" style="height: auto;">
				<div class="isi-berita">
					<form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">10 Januari 2018</a></li>
  <li><a href="#">Tentang Kami</a></li>
  <li>pengurus</li>
</ul><br>
			</div></div>
			</div>
			
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Pengurus periode 2014/2015</b></div>
				<img src="gambar/konten/pengurus4.jpg" style="height: auto;">
				<div class="isi-berita">
					<form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">11 Januari 2016</a></li>
  <li><a href="#">Tentang kami</a></li>
  <li>pengurus</li>
</ul><br>
			</div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>PELANTIKAN ORMAWA PERIODE 2012/2013</b></div>
				<img src="gambar/konten/pengurus5.jpg" style="height: auto;">
				<div class="isi-berita">
					<form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">12 Juni 2015</a></li>
  <li><a href="#">Tentang kami</a></li>
  <li>pengurus</li>
</ul><br>
			</div></div>
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>KEPENGURUSAN PERIODE 2013/2014</b></div>
				<img src="gambar/konten/pengurus6.jpg" style="height: auto;">
				<div class="isi-berita">
					<form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">12 Juni 2015</a></li>
  <li><a href="#">Tentang kami</a></li>
  <li>pengurus</li>
</ul><br></div></div>
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Kepengurusan periode 2011/2012</b></div>
				<img src="gambar/konten/pengurus7.jpg" style="height: auto;">
				<div class="isi-berita">
					<form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">11 Juni 2015</a></li>
  <li><a href="#">Tentang kami</a></li>
  <li>pengurus</li>
</ul><br></div></div>
			</div>

</div>
	</div>
	<?php require 'footer.php';?>
</body>
</html>