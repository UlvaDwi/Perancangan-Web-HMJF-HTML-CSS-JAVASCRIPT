<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="gambar/logoj.png">
	
	<title>Profile-HMJF</title>

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
<div class="main2">
  <div class="teks_kategori3"><h3>Category Archieve:Profil</h3></div>
	<img src="gambar/logoj.png">
	<p> Himpunan Mahasiswa Jurnalistik dan Fotografi (HMJF) merupakan merupakan salah satu Unit Kegiatan Mahasiswa (UKM) di Universitas Kanjuruhan Malang (Unikama) yang bergerak dalam bidang Jurnalistik dan Fotografi. Organisasi ini pertama berdiri pada tahun 1989, lebih tepatnya 10 Juni 1989.</p>

<p>Dalam menjalankan roda keorganisasian HMJF dinahkodai oleh beberapa pengurus yang tersusun dalam struktur kepengurusan HMJF, antara lain seorang Direktur, Wakil Direktur beserta tujuh Kepala Departemen (Kadep) yang aktif dalam bidangnya yaitu Jurnalistik, Fotografi, Kesekretariatan, Keuangan, Hubungan Masyarakat (Humas), Informasi dan Komunikasi (Infokom) dan Inventaris.</p>

<p>Selayaknya organisasi lain, HMJF mempunyai berbagai kegiatan yang rutin dilakukan seperti UKM-UKM lainnya. Kegiatan-kegiatan yang sering dilaksanakan yaitu hunting foto, peliputan berita, berbagai pelatihan-pelatihan Jurnalistik dan Fotografi. Selain Jurnalistik dan Fotografi, anggota HMJF juga dibekali ilmu Keorganisasian yang sangat bermanfaat dalam dunia kerja. Kegiatan inilah yang membentuk anggota HMJF untuk menjadi Penulis, Wartawan, Fotografer, bahkan Model sekalipun.</p>

<p>HMJF berhasil mencetak Fotografer-fotografer dan wartawan-wartawan muda. Tidak sedikit anggota HMJF yang sudah berhasil bekerja di media-media cetak ternama seperti Jawa Pos dan Malang Post, dengan bermodal kemampuan mereka yang telah dipelajari di UKM HMJF ini. Selain itu HMJF juga berhasil mencetak pembina-pembina muda yang ahli dalam bidang Jurnalistik maupun Fotografi yang tersebar banyak di sekolah-sekolah binaan HMJF seperti halnya di SMP dan SMA Pondok Modern Al-Rifa’ie dan SMPN Bululawang serta SMAN Gondanglegi.</p>

</div>

<?php require 'footer.php';?>
	
</body>
</html>