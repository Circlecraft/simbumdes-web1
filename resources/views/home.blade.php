<html lang="id">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMBUMDES - Sistem Informasi Manajemen Desa</title>
  <link rel="icon" href="/path/to/favicon.ico" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   /* Reset dan styling dasar */
   * {
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: Arial, sans-serif;
   }

   body {
     background-color: #f5f5f5;
   }

   /* Navbar Styling */
   .navbar {
     background-color: #4CAF50; /* Mengubah warna navbar */
     padding: 15px 50px;
     display: flex;
     justify-content: space-between;
     align-items: center;
     box-shadow: 0 2px 5px rgba(0,0,0,0.1);
     border-bottom: 4px solid #00B2FF;
   }

   .navbar .logo {
     color: white;
     font-size: 24px;
     font-weight: bold;
     letter-spacing: 1px;
   }

   .navbar .menu {
     display: flex;
     gap: 20px;
   }

   .navbar .menu a {
     color: white;
     text-decoration: none;
     font-size: 15px;
     transition: all 0.3s ease;
   }

   .navbar .menu a:hover {
     text-decoration: underline;
   }

   /* Hero Section Styling */
   .hero {
     display: flex;
     justify-content: space-between;
     align-items: center;
     padding: 50px;
     min-height: 80vh;
   }

   .hero-text {
     flex: 1;
     padding-right: 20px;
   }

   .hero-text h2 {
     font-size: 16px;
     margin-bottom: 10px;
   }

   .hero-text h1 {
     font-size: 50px;
     font-weight: bold;
     margin-bottom: 10px;
     line-height: 1.1;
   }

   .hero-text .highlight {
     background-color: #d9f7c9;
     display: inline-block;
     padding: 0 5px;
     margin-top: 10px;
     margin-bottom: 20px;
   }

   .hero-text p {
     font-size: 15px;
     line-height: 1.6;
     color: #333;
     max-width: 600px;
     margin-top: 20px;
     font-style: italic;
   }

   .hero-images {
     flex: 1;
     position: relative;
     display: flex;
     justify-content: center;
   }

   /* Styling untuk slider gambar dengan rasio 9:16 */
   .hero-slider {
     position: relative;
     width: 281px;  /* Lebar dengan rasio 9:16 untuk tinggi 500px */
     height: 500px;
     border-radius: 8px;
     box-shadow: 0 4px 8px rgba(0,0,0,0.2);
     overflow: hidden;
   }

   .hero-slider .slide {
     display: none;
     width: 100%;
     height: 100%;
     position: absolute;
     top: 0;
     left: 0;
     transition: opacity 0.5s ease-in-out; /* Menambahkan efek transisi */
   }

   .hero-slider .slide.active {
     display: block;
     z-index: 1;
   }

   .hero-slider img {
     width: 100%;
     height: 100%;
     object-fit: cover;
   }

   /* Styling tombol slider yang diperbaiki */
   .hero-slider .slider-controls {
     position: absolute;
     top: 50%;
     transform: translateY(-50%);
     width: 100%;
     display: flex;
     justify-content: space-between;
     z-index: 10; /* Pastikan nilainya cukup tinggi */
     pointer-events: none; /* Penting: Ini agar hover berfungsi pada tombol dan bukan pada container */
   }

   .hero-slider .slider-controls button {
     background: white;
     border: none;
     border-radius: 50%;
     width: 40px;
     height: 40px;
     font-size: 18px;
     display: flex;
     align-items: center;
     justify-content: center;
     cursor: pointer;
     box-shadow: 0 2px 5px rgba(0,0,0,0.2);
     transition: all 0.3s ease;
     pointer-events: auto; /* Aktifkan kembali event pada tombol */
     position: relative;
     opacity: 0.9;
   }

   .hero-slider .slider-controls button.prev {
     margin-left: -20px;
   }

   .hero-slider .slider-controls button.next {
     margin-right: -20px;
   }

   .hero-slider .slider-controls button:hover {
     transform: scale(1.1);
     opacity: 1;
   }

   /* Jelajahi Desa Section Styling */
   .jelajahi-desa {
     padding: 50px;
     background-color: #f9f9f9;
     display: flex;
     flex-wrap: wrap;
     gap: 40px;
   }

   .jelajahi-info {
     flex: 1;
     min-width: 300px;
   }

   .jelajahi-info h2 {
     color: #4CAF50;
     font-size: 28px;
     margin-bottom: 15px;
   }

   .jelajahi-info p {
     font-size: 16px;
     line-height: 1.6;
     color: #333;
   }

   .jelajahi-cards {
     flex: 2;
     display: flex;
     flex-wrap: wrap;
     gap: 20px;
     justify-content: center;
   }

   .info-card {
     background: white;
     padding: 25px 15px;
     width: 200px;
     text-align: center;
     border-radius: 5px;
     box-shadow: 0 2px 10px rgba(0,0,0,0.05);
     transition: transform 0.3s ease, box-shadow 0.3s ease;
     cursor: pointer;
   }

   .info-card:hover {
     transform: translateY(-5px);
     box-shadow: 0 5px 15px rgba(0,0,0,0.1);
   }

   .info-card .icon {
     margin-bottom: 15px;
   }

   .info-card .icon img {
     width: 60px;
     height: 60px;
     object-fit: contain;
   }

   .info-card .card-title {
     font-size: 14px;
     font-weight: bold;
     color: #333;
   }

   /* Sambutan Section */
   .sambutan {
     padding: 50px;
     background-color: white;
   }

   .sambutan h2 {
     color: #4CAF50;
     font-size: 28px;
     margin-bottom: 30px;
   }

   .sambutan-content {
     padding: 20px;
     max-width: 800px;
   }

   .sambutan-header {
     margin-bottom: 20px;
   }

   .sambutan-header h3 {
     font-size: 22px;
     font-weight: bold;
     margin-bottom: 5px;
   }

   .sambutan-header p {
     font-size: 16px;
     color: #666;
   }

   .sambutan-text {
     font-size: 15px;
     line-height: 1.7;
     color: #333;
   }

   .sambutan-text p {
     margin-bottom: 15px;
   }

   /* Peta Desa Section */
   .peta-desa {
     padding: 50px;
     background-color: #f9f9f9;
   }

   .peta-desa h2 {
     color: #4CAF50;
     font-size: 28px;
     margin-bottom: 5px;
   }

   .section-desc {
     font-size: 16px;
     color: #666;
     margin-bottom: 20px;
   }

   .map-container {
     position: relative;
     max-width: 100%;
     border: 1px solid #ddd;
     border-radius: 5px;
     overflow: hidden;
     box-shadow: 0 2px 10px rgba(0,0,0,0.05);
   }

   .map-search {
     position: absolute;
     top: 10px;
     left: 10px;
     right: 10px;
     z-index: 10;
     display: flex;
     gap: 10px;
   }

   .search-input {
     padding: 8px 12px;
     border: 1px solid #ddd;
     border-radius: 3px;
     font-size: 14px;
     width: 180px;
     background-color: white;
   }

   .map {
     width: 100%;
     height: 100%;
   }

   .map img {
     width: 100%;
     height: auto;
     display: block;
   }

   .map-controls {
     position: absolute;
     bottom: 10px;
     left: 10px;
     display: flex;
     align-items: center;
     background-color: white;
     border-radius: 3px;
     padding: 5px;
     box-shadow: 0 1px 5px rgba(0,0,0,0.2);
   }

   .map-type {
     display: flex;
     align-items: center;
     gap: 5px;
     margin-right: 10px;
     font-size: 12px;
   }

   .map-icon {
     width: 20px;
     height: 20px;
   }

   .location-button {
     background: none;
     border: none;
     cursor: pointer;
     display: flex;
     align-items: center;
     justify-content: center;
     padding: 0;
   }

   /* Struktur Organisasi Section */
   .struktur-organisasi {
     padding: 50px;
     background-color: white;
   }

   .struktur-organisasi h2 {
     color: #4CAF50;
     font-size: 28px;
     margin-bottom: 5px;
   }

   .org-cards {
     display: flex;
     gap: 20px;
     flex-wrap: wrap;
     margin-top: 30px;
     margin-bottom: 30px;
   }

   .org-card {
     width: 220px;
     border-radius: 8px;
     overflow: hidden;
     box-shadow: 0 2px 10px rgba(0,0,0,0.1);
   }

   .org-card.green {
     background-color: #4CAF50;
     color: white;
     display: flex;
     flex-direction: column;
   }

   .org-card.red {
     background-color: #FF4C4C;
     color: white;
     display: flex;
     flex-direction: column;
   }

   .org-photo {
     display: flex;
     justify-content: center;
     padding: 20px;
   }

   .org-photo img {
     width: 120px;
     height: 150px;
     object-fit: cover;
   }

   .photo-placeholder {
     width: 120px;
     height: 150px;
     border: 2px dashed rgba(255,255,255,0.5);
     border-radius: 5px;
     display: flex;
     align-items: center;
     justify-content: center;
   }

   .placeholder-text {
     color: rgba(255,255,255,0.7);
     font-size: 14px;
   }

   .org-info {
     padding: 15px;
     text-align: center;
   }

   .org-info h3 {
     font-size: 16px;
     font-weight: bold;
     margin-bottom: 5px;
   }

   .org-info p {
     font-size: 12px;
     line-height: 1.4;
   }

   .see-more {
     text-align: right;
     margin-top: 20px;
   }

   .see-more-link {
     display: inline-flex;
     align-items: center;
     gap: 8px;
     color: #333;
     text-decoration: none;
     font-size: 14px;
     font-weight: bold;
   }

   .link-icon {
     width: 20px;
     height: 20px;
   }

   /* Potensi Desa Section */
   .potensi-desa {
     padding: 50px;
     background-color: white;
   }

   .section-header {
     display: flex;
     justify-content: space-between;
     align-items: flex-start;
     margin-bottom: 30px;
     flex-wrap: wrap;
   }

   .section-header h2 {
     color: #4CAF50;
     font-size: 28px;
     margin-bottom: 5px;
     flex: 1;
   }

   .section-header .section-desc {
     flex: 2;
     max-width: 600px;
   }

   .section-header .see-more-link {
     margin-left: auto;
   }

   .potensi-slider {
     position: relative;
     margin-top: 20px;
   }

   .potensi-items {
     display: flex;
     justify-content: center;
     gap: 30px;
   }

   .potensi-item {
     position: relative;
   }

   .potensi-image {
     position: relative;
     width: 250px;
     height: 250px;
     border-radius: 50%;
     overflow: hidden;
   }

   .potensi-image img {
     width: 100%;
     height: 100%;
     object-fit: cover;
   }

   .potensi-tag {
     position: absolute;
     bottom: 30px;
     left: 0;
     display: flex;
     align-items: center;
   }

   .tag-color {
     width: 30px;
     height: 30px;
     background-color: #FF4C4C;
   }

   .tag-color.orange {
     background-color: #FF8A00;
   }

   .tag-text {
     background-color: rgba(0, 0, 0, 0.7);
     color: white;
     padding: 5px 10px;
     font-size: 14px;
     font-weight: bold;
   }

   .slider-nav {
     display: flex;
     justify-content: center;
     gap: 20px;
     margin-top: 20px;
   }

   .prev-btn, .next-btn {
     background: none;
     border: none;
     font-size: 24px;
     cursor: pointer;
     color: #666;
   }

   /* Wisata Desa Section */
   .wisata-desa {
     padding: 0;
     position: relative;
     height: 400px;
     background-image: url('/api/placeholder/1000/400');
     background-size: cover;
     background-position: center;
     color: white;
   }

   .wisata-content {
     position: relative;
     height: 100%;
     padding: 50px;
     background: linear-gradient(to right, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 70%, rgba(0,0,0,0) 100%);
   }

   .wisata-header {
     max-width: 600px;
   }

   .wisata-header h2 {
     font-size: 32px;
     margin-bottom: 10px;
   }

   .wisata-header p {
     font-size: 16px;
     margin-bottom: 30px;
   }

   .wisata-showcase {
     max-width: 600px;
   }

   .wisata-item {
     display: none;
   }

   .wisata-item.active {
     display: block;
   }

   .wisata-info {
     background-color: rgba(0, 0, 0, 0.6);
     padding: 20px;
     border-radius: 5px;
   }

   .wisata-info h3 {
     font-size: 24px;
     margin-bottom: 10px;
   }

   .wisata-info p {
     font-size: 16px;
     line-height: 1.5;
   }

   .wisata-nav {
     position: absolute;
     bottom: 50%;
     width: 100%;
     left: 0;
     display: flex;
     justify-content: space-between;
     padding: 0 20px;
   }

   .wisata-desa .see-more {
     position: absolute;
     bottom: 20px;
     right: 20px;
   }

   .wisata-desa .see-more-link {
     color: white;
   }

   /* Beli Dari Desa Section */
   .beli-desa {
     padding: 50px;
     background-color: #f9f9f9;
   }

   .beli-desa h2 {
     color: #4CAF50;
   }

   .produk-grid {
     display: grid;
     grid-template-columns: repeat(3, 1fr);
     gap: 25px;
     margin-top: 30px;
     margin-bottom: 30px;
   }

   .produk-card {
     background-color: white;
     border-radius: 8px;
     overflow: hidden;
     box-shadow: 0 2px 10px rgba(0,0,0,0.1);
   }

   .produk-image img {
     width: 100%;
     height: 160px;
     object-fit: cover;
   }

   .produk-info {
     padding: 15px;
   }

   .produk-info h3 {
     font-size: 16px;
     margin-bottom: 5px;
   }

   .produk-info p {
     font-size: 14px; /* Menambahkan deskripsi produk */
     margin-bottom: 5px;
   }

   .produk-rating {
     color: #FFD700;
     margin-bottom: 5px;
     font-size: 14px;
   }

   .produk-price {
     font-weight: bold;
     color: #333;
   }

   @media (max-width: 1024px) {
     .produk-grid {
       grid-template-columns: repeat(2, 1fr);
     }
   }


   .produk-grid {
       grid-template-columns: 1fr;
     }

     .potensi-items {
       flex-direction: column;
       align-items: center;
     }

     .hero {
       flex-direction: column;
       text-align: center;
     }

     .hero-text {
       padding-right: 0;
       margin-bottom: 30px;
     }

     .hero-slider {
       width: 100%;
       max-width: 281px;
     }
   }

   /* Background image styling */
   .background-image {
     background-image: url('https://images.pexels.com/photos/1131863/pexels-photo-1131863.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
     background-size: cover;
     background-position: center;
     filter: blur(8px);
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     z-index: -1;
   }
  </style>
 </head>
 <body>
  <!-- Navbar -->
  <nav class="navbar">
   <div class="logo">SIMBUMDES</div>
   <div class="menu">
    <a href="#">Home</a>
    <a href="#">Profil Desa</a>
    <a href="#">Infografis</a>
    <a href="#">Listing</a>
    <a href="#">IDM</a>
    <a href="#">Berita</a>
    <a href="#">Belanja</a>
    <a href="about.html">Tentang Kami</a>
    <a href="#" id="login-link">Masuk</a>
    <a href="#" id="signup-link">Daftar</a>
   </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
   <div class="hero-text">
    <h2>SELAMAT DATANG DI</h2>
    <h1>SIMBUMDES</h1>
    <div class="highlight">(Sistem Informasi Manajemen Desa)</div>
    <p>Badan Usaha Milik Desa yang berkomitmen untuk meningkatkan perekonomian desa melalui pengelolaan usaha desa yang profesional dan berkelanjutan.</p>
   </div>
   <div class="hero-images">
    <div class="hero-slider">
     <div class="slide active">
      <img src="https://images.pexels.com/photos/31505955/pexels-photo-31505955/free-photo-of-vibrant-street-market-in-southeast-asia.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Gambar 1">
     </div>
     <div class="slide">
      <img src="https://images.pexels.com/photos/13746818/pexels-photo-13746818.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Gambar 2">
     </div>
     <div class="slide">
      <img src="https://images.pexels.com/photos/3012422/pexels-photo-3012422.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Gambar 3">
     </div>
     <div class="slider-controls">
      <button class="prev">←</button>
      <button class="next">→</button>
     </div>
    </div>
   </div>
  </section>

  <!-- Jelajahi Desa Section -->
  <section class="jelajahi-desa">
   <div class="jelajahi-info">
    <h2>JELAJAHI DESA</h2>
    <p>Melalui website ini Anda dapat menjelajahi segala hal yang terkait dengan desa. Aspek pemerintahan, penduduk, demografi, potensi desa, dan juga berita tentang desa.</p>
   </div>
   <div class="jelajahi-cards">
    <div class="info-card">
     <div class="icon">
      <img src="/api/placeholder/60/60" alt="Profil Desa Icon">
     </div>
     <div class="card-title">PROFIL DESA</div>
    </div>
    <div class="info-card">
     <div class="icon">
      <img src="/api/placeholder/60/60" alt="Infografis Icon">
     </div>
     <div class="card-title">INFOGRAFIS</div>
    </div>
    <div class="info-card">
     <div class="icon">
      <img src="/api/placeholder/60/60" alt="IDM Icon">
     </div>
     <div class="card-title">IDM</div>
    </div>
    <div class="info-card">
     <div class="icon">
      <img src="/api/placeholder/60/60" alt="PPID Icon">
     </div>
     <div class="card-title">PPID</div>
    </div>
   </div>
  </section>

  <!-- Sambutan Kepala Desa Section -->
  <section class="sambutan">
   <h2>Sambutan Kepala Desa</h2>
   <div class="sambutan-content">
    <div class="sambutan-header">
     <h3>AMBABA</h3>
     <p>Kepala Desa Lababu</p>
    </div>
    <div class="sambutan-text">
     <p><i>Assalamu Alaikum Warahmatullahi Wabarakatuh,</i></p>
     <p>Website ini hadir sebagai wujud transformasi desa Karsik menjadi desa yang mampu memanfaatkan teknologi informasi dan komunikasi, terintegrasi kedalam sistem online. Keberadaan informasi publik, pelayanan publik dan kegiatan perekonomian di desa, guna mewujudkan desa Karsik sebagai desa wisata yang berkelanjutan, adaptasi dan mitigasi terhadap perubahan iklim serta menjadi desa yang...</p>
    </div>
   </div>
  </section>

  <!-- Peta Desa Section -->
  <section class="peta-desa">
   <h2>PETA DESA</h2>
   <p class="section-desc">Menampilkan Peta Desa</p>
   <div class="map-container">
    <div class="map-search">
     <input type="text" placeholder="Masukkan nama lokasi atau koordinat" class="search-input">
     <input type="text" placeholder="Cari Lokasi" class="search-input">
    </div>
    <div class="map">
     <img src="/api/placeholder/800/250" alt="Peta Desa Satellite View">
    </div>
    <div class="map-controls">
     <div class="map-type">
      <img src="/api/placeholder/20/20" alt="Satellite Icon" class="map-icon">
      <span>Satellite</span>
     </div>
     <button class="location-button">
      <img src="/api/placeholder/20/20" alt="Location Icon" class="map-icon">
     </button>
    </div>
   </div>
  </section>

  <!-- Struktur Organisasi Section -->
  <section class="struktur-organisasi">
   <h2>STRUKTUR ORGANISASI</h2>
   <p class="section-desc">Struktur Organisasi Desa</p>
   <div class="org-cards">
    <div class="org-card green">
     <div class="org-photo">
      <div class="photo-placeholder">
       <span class="placeholder-text">Foto</span>
      </div>
     </div>
     <div class="org-info">
      <h3>RINA JAYANTI</h3>
      <p>Kepala Keuangan</p>
     </div>
    </div>
    <div class="org-card red">
     <div class="org-photo">
      <img src="/api/placeholder/120/150" alt="Marliana">
     </div>
     <div class="org-info">
      <h3>MARLIANA</h3>
      <p>Kepala Seksi Pelayanan dan Kesejahteraan</p>
     </div>
    </div>
    <div class="org-card red">
     <div class="org-photo">
      <img src="/api/placeholder/120/150" alt="Alfriah Ramadhani">
     </div>
     <div class="org-info">
      <h3>ALFRIAH RAMADHANI AMPAT</h3>
      <p>Kaur Umum dan Perencanaan</p>
     </div>
    </div>
    <div class="org-card red">
     <div class="org-photo">
      <img src="/api/placeholder/120/150" alt="Saftriyani">
     </div>
     <div class="org-info">
      <h3>SAFTRIYANI</h3>
      <p>Kaur Pemerintahan</p>
     </div>
    </div>
   </div>
   <div class="see-more">
    <a href="#" class="see-more-link">
     <img src="/api/placeholder/20/20" alt="See More Icon" class="link-icon">
     LIHAT STRUKTUR LEBIH LENGKAP
    </a>
   </div>
  </section>

  <!-- Potensi Desa Section -->
  <section class="potensi-desa">
   <div class="section-header">
    <h2>POTENSI DESA</h2>
    <p class="section-desc">Informasi tentang potensi dan kemajuan desa di berbagai bidang seperti ekonomi, pariwisata, pertanian, industri kreatif, dan kelestarian lingkungan</p>
    <a href="#" class="see-more-link">
     <img src="/api/placeholder/20/20" alt="See More Icon" class="link-icon">
     LIHAT POTENSI LEBIH BANYAK
    </a>
   </div>

   <div class="potensi-slider">
    <div class="potensi-items">
     <div class="potensi-item">
      <div class="potensi-image">
       <img src="/api/placeholder/250/250" alt="Pariwisata Desa">
       <div class="potensi-tag">
        <div class="tag-color"></div>
        <div class="tag-text">PARIWISATA</div>
       </div>
      </div>
     </div>
     <div class="potensi-item">
      <div class="potensi-image">
       <img src="/api/placeholder/250/250" alt="Potensi Perikanan">
       <div class="potensi-tag">
        <div class="tag-color orange"></div>
        <div class="tag-text">POTENSI PERIKANAN</div>
       </div>
      </div>
     </div>
    </div>
    <div class="slider-nav">
     <button class="prev-btn">←</button>
     <button class="next-btn">→</button>
    </div>
   </div>
  </section>

  <!-- Wisata Desa Section -->
  <section class="wisata-desa">
   <div class="wisata-content">
    <div class="wisata-header">
     <h2>WISATA DESA</h2>
     <p>Layanan yang mempermudah promosi wisata desa sehingga dapat menarik pengunjung desa</p>
    </div>

    <div class="wisata-showcase">
     <div class="wisata-item active">
      <div class="wisata-info">
       <h3>Pantai Biru Kersik</h3>
       <p>Pantai ini terletak tidak jauh dari jalan penghubungan, berjarak 10 menit saja dari desa dan dapat diakses oleh penduduk dan dengan wisata...</p>
      </div>
     </div>
     <!-- Placeholder untuk tambahan wisata lain yang tidak terlihat pada slide aktif -->
    </div>

    <div class="wisata-nav">
     <button class="prev-btn">←</button>
     <button class="next-btn">→</button>
    </div>

    <div class="see-more">
     <a href="#" class="see-more-link">
      <img src="/api/placeholder/20/20" alt="See More Icon" class="link-icon">
      LIHAT WISATA LEBIH BANYAK
     </a>
    </div>
   </div>
  </section>

  <!-- Beli Dari Desa Section -->
  <section class="beli-desa">
   <div class="section-header">
    <h2>BELI DARI DESA</h2>
    <p class="section-desc">Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa</p>
   </div>

   <div class="produk-grid">
    <!-- Produk 1 -->
    <div class="produk-card">
     <div class="produk-image">
      <img src="/api/placeholder/220/160" alt="Roti tawar">
     </div>
     <div class="produk-info">
      <h3>Roti tawar</h3>
      <p>Roti tawar segar yang dibuat dengan bahan alami.</p>
      <div class="produk-rating">
       <span class="stars">★★★★★</span>
      </div>
      <div class="produk-price">Rp10.000</div>
     </div>
    </div>

    <!-- Produk 2 -->
    <div class="produk-card">
     <div class="produk-image">
      <img src="/api/placeholder/220/160" alt="konektor masker">
     </div>
     <div class="produk-info">
      <h3>konektor masker</h3>
      <p>Solusi praktis untuk penggunaan masker yang nyaman.</p>
      <div class="produk-rating">
       <span class="stars">★★★★★</span>
      </div>
      <div class="produk-price">Rp10.000</div>
     </div>
    </div>

    <!-- Produk 3 -->
    <div class="produk-card">
     <div class="produk-image">
      <img src="/api/placeholder/220/160" alt="Untuk snack box">
     </div>
     <div class="produk-info">
      <h3>Untuk snack box</h3>
      <p>Solusi praktis untuk kemasan snack box yang menarik.</p>
      <div class="produk-rating">
       <span class="stars">★★★★★</span>
      </div>
      <div class="produk-price">Rp123</div>
     </div>
    </div>

    <!-- Produk 4 -->
    <div class="produk-card">
     <div class="produk-image">
      <img src="/api/placeholder/220/160" alt="Talam susu">
     </div>
     <div class="produk-info">
      <h3>Talam susu</h3>
      <p>Lezat dan manis, cocok untuk camilan.</p>
      <div class="produk-rating">
       <span class="stars">★★★★★</span>
      </div>
      <div class="produk-price">Rp123</div>
     </div>
    </div>

    <!-- Produk 5 -->
    <div class="produk-card">
     <div class="produk-image">
      <img src="/api/placeholder/220/160" alt="Souvenir">
     </div>
     <div class="produk-info">
      <h3>Souvenir</h3>
      <p>Souvenir unik dari desa yang bisa dibawa pulang.</p>
      <div class="produk-rating">
       <span class="stars">★★★★★</span>
      </div>
      <div class="produk-price">Rp150.000</div>
     </div>
    </div>

    <!-- Produk 6 -->
    <div class="produk-card">
     <div class="produk-image">
      <img src="/api/placeholder/220/160" alt="MICROPAY">
     </div>
     <div class="produk-info">
      <h3>MICROPAY</h3>
      <p>Inovasi pembayaran yang memudahkan transaksi.</p>
      <div class="produk-rating">
       <span class="stars">★★★★★</span>
      </div>
      <div class="produk-price">Rp123</div>
     </div>
    </div>
   </div>

   <div class="see-more">
    <a href="#" class="see-more-link">
     <img src="/api/placeholder/20/20" alt="See More Icon" class="link-icon">
     LIHAT PRODUK LEBIH BANYAK
    </a>
   </div>
  </section>

  <!-- Footer -->
  <footer style="background-color: #8DDE65; color: white; text-align: center; padding: 20px;">
   <p>&copy; 2025 SIMBUMDES. All rights reserved.</p>
  </footer>

  <!-- Login/Signup Modal -->
  <div id="auth-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
   <div class="flex w-full max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="w-full md:w-1/2 p-8">
     <div id="form-container">
      <h2 class="text-2xl font-bold text-gray-800" id="form-title">
       Selamat datang kembali!
      </h2>
      <p class="mt-2 text-gray-600" id="form-description">
       Masukkan Kredensial Anda untuk mengakses akun Anda
      </p>
      <form class="mt-4" id="auth-form">
       <div id="name-field" class="hidden">
        <label class="block text-gray-700">
         Nama Lengkap
        </label>
        <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Masukkan nama lengkap Anda" type="text"/>
       </div>
       <div>
        <label class="block text-gray-700">
         Alamat Email
        </label>
        <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Masukkan email Anda" type="email"/>
       </div>
       <div class="mt-4">
        <label class="block text-gray-700">
         Kata Sandi
        </label>
        <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Masukkan kata sandi Anda" type="password"/>
       </div>
       <div id="confirm-password-field" class="mt-4 hidden">
       <label class="block text-gray-700">
        Konfirmasi Kata Sandi
       </label>
       <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-green-600" placeholder="Masukkan kembali kata sandi Anda" type="password"/>
      </div>
      <div class="mt-4" id="remember-me-field">
       <label class="inline-flex items-center">
        <input class="form-checkbox text-green-600" type="checkbox"/>
        <span class="ml-2 text-gray-700">
         Ingat selama 30 hari
        </span>
       </label>
      </div>
      <div class="mt-6">
       <button class="w-full px-4 py-2 text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700" id="submit-button">
        Masuk
       </button>
      </div>
     </form>
     <p class="mt-8 text-center text-gray-600" id="toggle-text">
      Belum punya akun?
      <a class="text-blue-600 hover:underline cursor-pointer" id="toggle-link">
       Daftar
      </a>
     </p>
    </div>
   </div>
   <div class="hidden md:block md:w-1/2">
    <img alt="Dua petani bekerja di sawah" class="object-cover w-full h-full" src="https://images.pexels.com/photos/2804327/pexels-photo-2804327.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=2"/>
   </div>
  </div>
  <script>
   function toggleForm() {
     const isLogin = document.getElementById('submit-button').innerText === 'Masuk';
     document.getElementById('form-title').innerText = isLogin ? 'Daftar Akun Baru' : 'Selamat datang kembali!';
     document.getElementById('form-description').innerText = isLogin ? 'Masukkan informasi Anda untuk membuat akun baru' : 'Masukkan Kredensial Anda untuk mengakses akun Anda';
     document.getElementById('submit-button').innerText = isLogin ? 'Daftar' : 'Masuk';
     document.getElementById('toggle-text').innerHTML = isLogin ? 'Sudah punya akun? <a class="text-blue-600 hover:underline cursor-pointer" id="toggle-link">Masuk</a>' : 'Belum punya akun? <a class="text-blue-600 hover:underline cursor-pointer" id="toggle-link">Daftar</a>';
     document.getElementById('name-field').classList.toggle('hidden', !isLogin);
     document.getElementById('confirm-password-field').classList.toggle('hidden', !isLogin);
     document.getElementById('remember-me-field').classList.toggle('hidden', isLogin);
     document.getElementById('toggle-link').addEventListener('click', toggleForm);
   }

   document.getElementById('toggle-link').addEventListener('click', toggleForm);
  </script>
 </body>
</html>

   