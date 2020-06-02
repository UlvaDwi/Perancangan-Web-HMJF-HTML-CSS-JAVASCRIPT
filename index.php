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

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
	
	<div class="main1">
		<div class="slideshow-container">

<div class="mySlides fade">
  <img src="gambar/slider/slider1.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="gambar/slider/slider2.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="gambar/slider/slider3.png" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="gambar/slider/slider4.png" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

</div>
<div class="main">
		<div class="kategori">
			<div class="teks_kategori"><h3>KATEGORI</h3></div>
			<div class="kotak1">
				<img src="gambar/pen.png" alt="Avatar" class="avatar">
				<h3>Jurnalistik</h3>
				Bidang keilmuan seputar pers dan jurnalistik yang dipelajari di HMJF<br>
				<a href="#"><form>
					<input class="buttonread1" type="button" value="Read More...">
				</form></a>
			</div>
			<div class="kotak2">
				<img src="gambar/camera.png" alt="Avatar" class="avatar">
				<h3>Fotografi</h3>
				Bidang keilmuan seni melukis dengan cahaya yang dipelajari di HMJF<br>
				<a href="#"><form>
					<input class="buttonread1" type="button" value="Read More...">
				</form></a>
			</div>
			<div class="kotak3">
				<img src="gambar/acara.png" alt="Avatar" class="avatar">
				<h3>Acara</h3>
				Dokumentasi kegiatan rutin yang dilakukan di HMJF<br>
				<a href="#"><form>
					<input class="buttonread1" type="button" value="Read More...">
				</form></a>
			</div>
		</div>
		<div class="kategori2">
			<div class="teks_kategori"><h3>BERITA TERKINI</h3></div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>South Lion Dance Meriahkan Imlek Malang Town Square</b></div>
				<img src="gambar/konten/berita1.jpg">
				<div class="isi-berita">Perayaan tahun baru cina atau imlek memang identik dengan tarian barongsai. Tarian barongsai ini kembali diadakan untuk memeriahkan tahun Babi Tanah ...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a></div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Kampanye Terbuka Pemira BEM 2018 Dimulai</b></div>
				<img src="gambar/konten/berita2.jpg">
				<div class="isi-berita">Memasuki akhir tahun, mahasiswa Universitas Kanjuruhan Malang (Unikama) dihadapkan dengan persiapan menyongsong gelaran pesta demokrasi...<br><a href="#"><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a></div></div>
		
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Ritual Ciam Si-Roni 'Ceritoku'</b></div>
				<img src="gambar/konten/berita3.jpg">
				<div class="isi-berita">Nama Gunung Kawi sudah tidak asing lagi di kalangan masyarakat umum, gunung ini terletak di Jawa Timur tepatnya di Kecamatan Wonosari, Kabupaten Malang...<br><a href="#"><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a></div></div>
			</div>
			
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Pelatihan Jurnalistik 'Berita' Abr 2017</b></div>
				<img src="gambar/konten/berita4.jpg">
				<div class="isi-berita">Pelatihan Jurnalistik Berita yang di hadiri oleh ABr 2017 dan saudari Thermutis Paulina R. sebagai pemateri. Dengan diadakannya pelatihan ini, anggota ABr 2017 dapat memahami...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a></div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Pesona Satu Suro di Gunung Kawi : Yevina 'Ceritoku'</b></div>
				<img src="gambar/konten/berita5.jpg">
				<div class="isi-berita">Pesona Satu Suro di Gunung Kawi Bulan Suro dalam penanggalan jawa atau dalam tahun baru islam disebut Bulan Muharram menjadi momentum yang istimewa bagi masyarakat...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a></div></div>
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Tolereansi Antar Umat Beragama : Melky 'Ceritoku'</b></div>
				<img src="gambar/konten/berita6.jpg">
				<div class="isi-berita">TOLERANSI  ANTAR  UMAT  BERAGAMA Manusia  tercipta sebagai  makhluk  individu sekaligus  sebagai  makhluk   sosial.  Sebagai  makhluk  sosial  manusia  diwajibkan  mampu...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a></div></div>
			</div>
		<div class="kategori2">
			<div class="teks_kategori"><h3>Karya Terbaru</h3></div>
			<div class="foto">
				<div class="foto-head">
					<div class="teks_kategori2">
						<div class="zoom-effect">
							<div class="kotakan">
								<a href="#"><img src="gambar/konten/foto3.jpg">	</a>
								<i>by Alfrizal</i>
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
								<a href="#"><img src="gambar/konten/foto1.jpg">	</a>
						<i>by Sumand</i>
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
								<a href="#"><img src="gambar/konten/foto4.jpg">	</a>
						<i>by Fery</i>
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
								<a href="#"><img src="gambar/konten/foto5.jpg">	</a>
						<i>by Briza</i>
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
								<a href="#"><img src="gambar/konten/foto6.jpg">	</a>
						<i>by Medi</i>
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
								<a href="#"><img src="gambar/konten/foto7.jpg">	</a>
						<i>by Nanda</i>
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
								<a href="#"><img src="gambar/konten/foto8.jpg">	</a>
						<i>by Briza</i>
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
								<a href="#"><img src="gambar/konten/foto9.jpg">	</a>
						<i>by Fery</i>
							</div>
						</div>
					</div>
				</div>
			</div>
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