@extends('layouts.app')

@section('title', 'PT PUTRA MANTILI KARAWANG - Company Profile')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex align-items-center text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">PT PUTRA MANTILI KARAWANG</h1>
                    <p class="lead mb-4">Solusi terpercaya untuk kebutuhan usaha Anda dengan layanan pergudangan dan industri makanan hewan yang berkualitas.</p>
                    <div class="d-flex gap-3">
                        <a href="#services" class="btn btn-primary btn-lg px-4">Layanan Kami</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg px-4">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('images/gudang.jpeg') }}" alt="Tentang Kami" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title text-center text-lg-start">Tentang Kami</h2>
                    <p class="lead">PT Putra Mantili Karawang adalah perusahaan yang berfokus pada layanan pergudangan dan industri makanan hewan di Karawang, Jawa Barat.</p>
                    <p>Berlokasi strategis di Dusun Manggabesar II, Desa/Kelurahan Walahar, Kecamatan Klari, Kabupaten Karawang, perusahaan kami menyediakan solusi terpercaya dengan standar layanan terbaik dan telah mendapatkan sertifikasi halal untuk produk-produk kami.</p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Pergudangan Profesional</h5>
                                    <p class="mb-0 text-muted">Fasilitas penyimpanan modern dan aman</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Bersertifikat Halal</h5>
                                    <p class="mb-0 text-muted">Jaminan produk halal BPJPH</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Proses Berkualitas</h5>
                                    <p class="mb-0 text-muted">Standar produksi tinggi dan terjamin</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5>Lokasi Strategis</h5>
                                    <p class="mb-0 text-muted">Mudah diakses di Karawang, Jawa Barat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Layanan Kami</h2>
                <p class="lead text-muted">Solusi terbaik untuk kebutuhan bisnis Anda</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-4">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <h4 class="card-title mb-3">Pergudangan dan Penyimpanan</h4>
                            <p class="card-text text-muted">Fasilitas pergudangan modern dengan sistem penyimpanan yang aman dan efisien untuk berbagai jenis produk.</p>
                            <a href="#contact" class="btn btn-link text-primary text-decoration-none">Pelajari lebih lanjut <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-4">
                                <i class="fas fa-drumstick-bite"></i>
                            </div>
                            <h4 class="card-title mb-3">Industri Ransum Makanan Hewan</h4>
                            <p class="card-text text-muted">Produksi ransum makanan hewan berkualitas dengan formulasi terbaik dan bersertifikat halal.</p>
                            <a href="#contact" class="btn btn-link text-primary text-decoration-none">Pelajari lebih lanjut <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon mb-4">
                                <i class="fas fa-blender"></i>
                            </div>
                            <h4 class="card-title mb-3">Industri Konsentrat Makanan Hewan</h4>
                            <p class="card-text text-muted">Konsentrat makanan hewan dengan nutrisi lengkap dan proses produksi yang terjamin kualitasnya.</p>
                            <a href="#contact" class="btn btn-link text-primary text-decoration-none">Pelajari lebih lanjut <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Activities Section -->
    <section id="portfolio" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Kegiatan Usaha Kami</h2>
                <p class="lead text-muted">Izin usaha dan legalitas PT Putra Mantili Karawang</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Tabel Kegiatan Usaha Skala UMK KBLI Risiko Rendah Perizinan Tunggal</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul KBLI</th>
                                            <th>Lokasi Usaha</th>
                                            <th>Jenis Produksi</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Pergudangan dan Penyimpanan</td>
                                            <td>Dusun Manggabesar II, Desa/Kelurahan Walahar, Kec. Klari, Kab. Karawang, Provinsi Jawa Barat Kode Pos: 41371</td>
                                            <td>Pergudangan dan Penyimpanan</td>
                                            <td>Sertifikasi jaminan produk halal difasilitasi BPJPH</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Industri Ransum Makanan Hewan</td>
                                            <td>Dusun Manggabesar II, Desa/Kelurahan Walahar, Kec. Klari, Kab. Karawang, Provinsi Jawa Barat Kode Pos: 41371</td>
                                            <td>Industri Ransum Makanan Hewan</td>
                                            <td>Sertifikasi jaminan produk halal difasilitasi BPJPH</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Industri Konsentrat Makanan Hewan</td>
                                            <td>Dusun Manggabesar II, Desa/Kelurahan Walahar, Kec. Klari, Kab. Karawang, Provinsi Jawa Barat Kode Pos: 41371</td>
                                            <td>Industri Konsentrat Makanan Hewan</td>
                                            <td>Sertifikasi jaminan produk halal difasilitasi BPJPH</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Kegiatan Usaha Tambahan</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul KBLI</th>
                                            <th>Lokasi Usaha</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Industri Pengolahan Lainnya YTDL</td>
                                            <td>Dusun Manggabesar II, Desa/Kelurahan Walahar, Kec. Klari, Kab. Karawang, Provinsi Jawa Barat Kode Pos: 41371</td>
                                            <td>Terbit</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Pemulihan Material Barang Bukan Logam</td>
                                            <td>Dusun Manggabesar II, Desa/Kelurahan Walahar, Kec. Klari, Kab. Karawang, Provinsi Jawa Barat Kode Pos: 41371</td>
                                            <td>Terbit</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Perdagangan Besar Barang Bekas Dan Sisa-sisa Tak Terpakai (Scrap)</td>
                                            <td>Dusun Manggabesar II, Desa/Kelurahan Walahar, Kec. Klari, Kab. Karawang, Provinsi Jawa Barat Kode Pos:41371</td>
                                            <td>Terbit</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Industri Furnitur Lainnya</td>
                                            <td>Dusun Manggabesar II, Desa/Kelurahan Walahar, Kec. Klari, Kab. Karawang, Provinsi Jawa Barat Kode Pos:41371</td>
                                            <td>Terbit</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Pengumpulan limbah dan sampah tidak berbahaya</td>
                                            <td>Dusun Manggabesar II, Desa/Kelurahan Walahar, Kec. Klari, Kab. Karawang, Provinsi Jawa Barat Kode Pos:41371</td>
                                            <td>Terbit</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Pemulihan Material Barang Logam</td>
                                            <td>Dusun Manggabesar II, Desa/Kelurahan Walahar, Kec. Klari, Kab. Karawang, Provinsi Jawa Barat Kode Pos:41371</td>
                                            <td>Terbit</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Pengerukan</td>
                                            <td>Dusun Manggabesar II, Desa/Kelurahan Walahar, Kec. Klari, Kab. Karawang, Provinsi Jawa Barat Kode Pos:41371</td>
                                            <td>Terbit</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Angkutan Bermotor untuk Barang Khusus</td>
                                            <td>Dusun Manggabesar II, Desa/Kelurahan Walahar, Kec. Klari, Kab. Karawang, Provinsi Jawa Barat Kode Pos:41371</td>
                                            <td>Terbit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Mengapa Memilih Kami</h2>
                <p class="lead text-muted">Berbagai keunggulan yang kami tawarkan</p>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="text-center mb-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-certificate fa-2x mt-2"></i>
                        </div>
                        <h4>Bersertifikat Halal</h4>
                        <p class="text-muted">Produk kami telah mendapatkan sertifikasi jaminan produk halal dari BPJPH.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="text-center mb-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-medal fa-2x mt-2"></i>
                        </div>
                        <h4>Kualitas Terjamin</h4>
                        <p class="text-muted">Proses produksi dengan standar tinggi untuk menjamin kualitas terbaik.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="text-center mb-4">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-users fa-2x mt-2"></i>
                        </div>
                        <h4>Tim Profesional</h4>
                        <p class="text-muted">Didukung oleh tim ahli yang berpengalaman di bidangnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mendapatkan semua link navbar
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        
        // Mendapatkan semua section dengan id
        const sections = document.querySelectorAll('section[id]');
        
        // Fungsi untuk mengaktifkan link navbar berdasarkan section yang terlihat
        function onScroll() {
            const scrollPosition = window.scrollY + 300; // Offset untuk deteksi lebih awal
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + sectionId) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }
        
        // Menambahkan event listener untuk scroll
        window.addEventListener('scroll', onScroll);
        
        // Memanggil onScroll saat halaman dimuat
        onScroll();
        
        // Menambahkan event listener untuk klik pada navbar links
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Menghapus active class dari semua link
                navLinks.forEach(navLink => {
                    navLink.classList.remove('active');
                });
                
                // Menambahkan active class ke link yang diklik
                this.classList.add('active');
                
                // Mendapatkan ID section tujuan
                const targetId = this.getAttribute('href');
                
                // Smooth scroll ke section target
                document.querySelector(targetId).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
@endsection