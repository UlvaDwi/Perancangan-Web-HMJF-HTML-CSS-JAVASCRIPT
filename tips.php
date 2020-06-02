<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="gambar/logoj.png">
	
	<title>Tips-HMJF</title>

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
		<div class="teks_kategori3"><h3>Category Archieve:Tips</h3></div>
		<?php require 'sidebar.php';?>
		<div class="kategori-berita">
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>MEMOTRET DENGAN KAMERA HP</b></div>
				
				<div class="isi-berita">MEMOTRET DENGAN KAMERA HP Handphone atau yang biasa kita sebut HP umumya diegkapi degan fitur kamera. Kamera tersebut bagi kebanyaka kita hanya digunakan sebagai selingan belaka, karena hasilnya yang kurang maksimal. Meski demekian tdak ada ruginya untuk megikuti beberapa tips berikut, agar kualitas jepretannya maksimal;...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">12 Juni 2015</a></li>
  <li><a href="#">Fotografi</a></li>
  <li>Tips</li>
</ul><br>
				</div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>MAU KAMERAMU AWET???</b></div>
				
				<div class="isi-berita">MAU KAMERAMU AWET??? (Mae_beih HMJF) Bagi fotografer, tentunya kamera merupakan senjata dalam berkarya. Untuk itu perlu perawatan khusus agar senjata kita tetap ampuh dalam berperang. Dibawah ini beberapa tips dalam merawat dan menyimpan kamera; 1. Simpan kamera ditempat yang sejuk. Bias juga dengan membuat lemari kaca / kayu yang dipasang lampu 5 watt, atur jarak...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">12 Juni 2015</a></li>
  <li><a href="#">Fotografi</a></li>
  <li>Tips</li>
</ul><br></div></div>
		
			</div>
			
	
</div>
</div>
	<?php require 'footer.php';?>
</body>
</html>