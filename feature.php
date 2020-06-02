<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="gambar/logoj.png">
	
	<title>Feature-HMJF</title>

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
				<b>Kegembiraan di TPU Samaan – Mike & Wulan 'Refleksi Kehidupan'</b></div>
				<img src="gambar/konten/feature1.jpg">
				<div class="isi-berita">Sinar mentari mengintip malu-malu dibalik awan, tidak seperti biasanya di bulan Desember yang dipenuhi dengan hujan. Pagi ini langit Nampak bersahabat, secerah tawa anak-anak di perkampungan TPU Samaan. Tak jauh dari pemukiman, bocah-bocah sedang asik berkumpul untuk bermain. “Main apaya?” Tanya Novan, anak laki-laki yang bertubuh paling kecil. 'Main krupukanyo' Aisyah menjawab...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">12 Desember 2017</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Feature</li>
</ul><br>
				</div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Merubah Stigma Negatif Melalui Gubuk Baca : Pangestu 'Refleksi Kehidupan'</b></div>
				<img src="gambar/konten/feature2.jpg">
				<div class="isi-berita">Berpegang  pada keyakinan perubahan harus dilakukan sendiri, hal ini lah yang menjadi pedoman seorang Chondro Pramono.Ia bersama pemuda Gang Tato RT.04 RW 02, Desa Kemantren, Kecamatan Jabung, Kabupaten Malang berusaha mengubah nasib mereka sendiri.  Sebuah perkampungan yang mempresentasikan warganya yang terkenal nakal turun temurun...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">12 Desember 2017</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>feature</li>
</ul><br>
			</div></div>
		
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Keluarga Yang Hidup di Bawah Garis Kemiskinan : Stevend 'Refleksi Kehidupan'</b></div>
				<img src="gambar/konten/feature3.jpg">
				<div class="isi-berita">Hidup memang tak seindah yang di bayangkan, kadang di atas dan kadang juga di bawah. Tak semulus seperti yang sering kita inginkan, walaupun tidak sesuai dengan opini kita akan tetapi faktanya harus kita lalui dan mau tidak mau harus kita terima dengan lapang dada.,...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">12 Desember 2017</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>feature</li>
</ul><br>
			</div></div>
			</div>
			
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Semangat di Usia Senja : Wiji 'Refleksi Kehidupan'</b></div>
				<img src="gambar/konten/feature4.jpg">
				<div class="isi-berita">Lalu-lalang kendaraan yang melintasi jembatan Muharto menjadi pemandangan yang lumrah. Pada salah satu sudut jembatannya terlihat pria tua yang menyandarkan pungung rentanya pada tembok usang. Sejajar dengan tinggi keranjang kayunya, mbah Man duduk menyandar sembari mencari barang bekas pada ...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">12 Desember 2017</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>feature</li>
</ul><br>
			</div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Potret Keluarga di Pinggiran Rel Kereta Api : Mutis 'Refleksi Kehidupan'</b></div>
				<img src="gambar/konten/feature5.jpg">
				<div class="isi-berita">Sejauh apa pun kaki melangkah, tempat yang paling indah untuk pulang adalah rumah. Rumah bukan hanya sebuah bangunan (struktural), melainkan juga tempat perlindungan untuk menikmati kehidupan, menghela nafas untuk beristirahat  dan berkumpul bersama keluarga....<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">12 Desember 2017</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>feature</li>
</ul><br>
			</div></div>
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Semangat Hidup Pandu : Ulum 'Refleksi Kehidupan'</b></div>
				<img src="gambar/konten/feature6.jpg">
				<div class="isi-berita">Anugerah yang diberikan oleh Tuhan salah satunya dapat melihat. Mata adalah jendela hati sekaligus jendela dunia. Hampir seluruh keindahan dunia dapat dibahasakan secara ringkas oleh mata. Panca indera yang satu ini memang luar biasa selain dapat melihat perbedaan antara satu manusia dengan yang lain,  juga dapat saling mengenal...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a>
			<br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">12 Desember 2017</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>feature</li>
</ul><br></div></div>
			</div>
	
</div>
	</div>
	<?php require 'footer.php';?>
</body>
</html>