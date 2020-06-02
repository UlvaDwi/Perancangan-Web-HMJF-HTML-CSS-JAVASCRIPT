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
		<div class="teks_kategori3"><h3>South Lion Dance Meriahkan Imlek Malang Town Square</h3></div>

		<?php require 'sidebar.php';?>
		<div class="konten">
		<div class="nav">
			<form>
					<a href="more.php"><input class="navmore"type="button" value="5 Februari 2019"></a>
				</form>
				<form>
					<a href="more.php"><input class="navmore" type="button" value="Hmjfunikama"></a>
				</form>
				<form>
					<a href="more.php"><input class="navmore" type="button" value="Berita, Jurnalistik"></a>
				</form>
		</div>
		
		<img src="gambar/konten/berita1.jpg">
		<br><i>Photo By Mediani</i>

<p>Perayaan tahun baru cina atau imlek memang identik dengan tarian barongsai. Tarian barongsai ini kembali diadakan untuk memeriahkan tahun Babi Tanah atau tahun baru cina 2570 di Malang Town Square (Matos), Selasa (5/2/19) pagi. Meski sama seperti tahun-tahun sebelumnya, pertunjukan ini masih dapat memikat animo pengunjung Matos maupun masyarakat yang berlalu-lalang di sekitar lokasi pertunjukan.</p>

<p>Pertunjukan Barongsai di mall yang bertajuk “Let’s Gong Xi” ini dimulai pukul 8 hingga pukul 10 pagi kemudian dilanjut kembali pada pukul 1 hingga pukul 3 sore. Grup South Lion Dance Barongsai adalah dalang dibalik kemeriahan ini. Grup ini sudah sering mementaskan barongsai dari tahun 2016 di Matos. “Untuk pertunjukan ini kami membawa 24 anggota mulai dari umur 11 hingga 27 tahun”, ujar Totok Maulana (25) pendiri klub barongsai asal Malang. Totok juga menambahkan bahwa acara ini memakai 8 barongsai, ” Supaya acara semakin ramai kita keluarkan 8 barongsai yang siap menghibur masyarakat “tangkasnya.  </p>

<p>Dari pantauan tim Swarahasta, masyarakat memang sangat terhibur karena atraksi yang disuguhkan. Penonton membanjiri area pelataran Matos hingga meluber keluar ke jalanan. Saking ramainya, mereka  rela berdesakan demi melihat pertunjukan. Antusias masyarakat terlihat dari berbagai kalangan dari muda hingga lansia.</p>  

<p>Sorak sorai penonton semakin menggelora ketika barongsai berdiri dan melenggak-lenggok di atas kursi panjang yang tersusun 2 tingkat, ditambah lagi dengan gong dan simbal yang terus ditabuh keras. “Seneng banget mas lihat barongsai ini. Mulai jam setengah 8 tadi saya nunggu, ini sudah menjadi rutinitas tahunan buat liat barongsai, itung itung buat nyenengin anak lah,” ujar Maslihah (40) salah satu penonton dari Pakis. Selain itu penonton lain, Rudi Wijaya (32) berharap agar pihak Matos terus menyelenggarakan acara ini, ” selain mengisi hari liburan, acara barongsai ini juga termasuk cara untuk menjaga budaya etnis Tionghoa ” pungkas Rudi.(AL/HMJF)</p><br><br>
<div class="komen">
	<b>About the Author: hmjfunikama</b>
	<img src="gambar/konten/a.png">
	<p>Leave A Reply </p>
	<p>Alamat email Anda tidak akan dipublikasikan. Ruas yang wajib ditandai *</p>
	<p>Comment</p>
	<form>
		<textarea name="comment" width="100%" height="500px"></textarea>
		<div class="biodatakomen">
		Name<br>
		<input type="text" name="nama">	
		</div>
		<div class="biodatakomen">
			Email<br>
		<input type="text" name="nama">	
		</div>
		<div class="biodatakomen">
			Website<br>
		<input type="text" name="nama">
			</div>	
	</form>
	<br><br><br>

	

</div>
<form><br><br>
		<input class="buttonpost" type="button" value="Post Comment">
	</form><br><br>

</div>	
</div>
	</div>
	<?php require 'footer.php';?>
</body>
</html>