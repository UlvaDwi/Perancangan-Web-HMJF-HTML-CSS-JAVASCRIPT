<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="gambar/logoj.png">
	
	<title>Opini-HMJF</title>

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
		<div class="teks_kategori3"><h3>Category Archieve:Opini</h3></div>
		<?php require 'sidebar.php';?>
		<div class="kategori-berita">
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head" style="padding: 10px; background-color: #F6F6F6;">
				<b>Karya Jurnalistik Pasca AM 'Filosofi : SLOGAN UNIK DARI SANG PROTOKOLER' by Indarti retno</b></div>
				
				<div class="isi-berita">SLOGAN UNIK DARI SANG PROTOKOLER   Iskandar ladamay (65) adalah salah satu dosen di Universitas Kanjuruhan Malang. Pria kelahiran Merauke ini mengajar mata kuliah Pendidikan Pancasila. Tidak ada yang menonjol dari pria yang akrab dipanggil Pak Is ini, namun banyak sekali hal-hal yang menginspirasi dari dalam dirinya salah satunya yaitu dia suka berselogan ...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">28 November 2016</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Opini</li>
</ul><br>
				</div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>Kampanye Terbuka Pemira BEM 2018 Dimulai</b></div>
				
				<div class="isi-berita">KEMANDULAN GERAKAN 'MAHA'SISWA Oleh: Desi Wijayanti     
					Ketika mendengar kata 'mahasiswa', apa hal pertama yang terlintas dalam benak anda? Siswa lulusan SMA yang melanjutkan perguruan tinggi, demo, atau ada yang lain. Apapun itu, setiap individu yang melanjutkan pendidikan di perguruan tinggi disematkan titel besar yang disebut 'mahasiswa'Zaman dengan teknologi tinggi semakin membuat anak...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">27 November 2016</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Opini</li>
</ul><br></div></div>
		
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>BERCANDA MEMPUNYAI DAMPAK NEGATIF YANG SANGAT DAHSYAT</b></div>
				
				<div class="isi-berita">BERCANDA MEMPUNYAI DAMPAK NEGATIF YANG SANGAT DAHSYAT Kita biasa meluangkan waktu bercanda bersama teman. Dalam kehidupan ini kita tak akan bisa lepas dari canda. Di masyarakat terutama dikalangan pemuda, canda merupakan bagian dari pembicaraan kita sehari-hari. Bercanda memang menyenangkan dan ....<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">11 Juni 2011</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Opini</li>
</ul><br></div></div>
			</div>
			
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>BAHASA GAUL PERLU NGGAK SIH DIIKUTI??</b></div>
				
				<div class="isi-berita">BAHASA GAUL PERLU NGGAK SIH DIIKUTI?? Sudah tidak asing lagi di telinga apabila kita mendengar kata “trend”.Mengikuti gaya terbaru merupakan tradisi umum yang sepertinya tidak boleh ditinggalkan dan dilewatkan oleh generasi sekarang. Kalau tidak mengikuti trend terbaru kita akan ketinggalan jaman alias kuno. Dewasa ini, trend sedang menjamur di berbagai bidang...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">11 Juni 2015</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Opini</li>
</ul><br></div></div>
				
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>AGAR UJIAN TAK MENAKUTKAN</b></div>
				
				<div class="isi-berita">AGAR UJIAN TAK MENAKUTKAN UJian sering menjadi momok yang menakutkan, sensasinya selalu bikin keringatan. Kekawatiran itu sebernanya cukup beralasan. Maklum saja, hasil ujian sangat berpengaruh pada nilai akhir kita nantinya. Berikut ini beberapa tips agar ujian tak lagi menakutkan. 1. Belajarlah sebelum ujian...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a>
			<br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">11 Juni 2015</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Opini</li>
</ul><br></div></div>
			</div>
			<div class="kotak-berita">
			<div class="berita">
				<div class="berita-head">
				<b>BEM SATU PERIODE VAKUM</b></div>
				
				<div class="isi-berita">BEM SATU PERIODE VAKUM Kantor BEM yang beralih fungsi sebagai parkiran motor. Badan Eksekutif Mahasiswa (BEM) salah satu lembaga tinggi mahasiswa (LTM) yang sangat berperan penting dalam hidup matinya organisasi, hal tersebut dikarenakan, sesuai dengan fungsinya BEM bertugas untuk menjembatani hubungan mahasiswa dan lembaga,...<br><a href="#"><form>
					<input class="buttonread" type="button" value="Read More...">
				</form></a><br><br><br>
				<hr style="border-width: 1px;border-color: #f6f6f6; ">
				<ul class="breadcrumb" >
  <li><a href="#">hmjfunikama </a></li>
  <li><a href="#">11 Juni 2015</a></li>
  <li><a href="#">Jurnalistik</a></li>
  <li>Opini</li>
</ul><br>
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
	<?php require 'footer.php'?>
</body>
</html>