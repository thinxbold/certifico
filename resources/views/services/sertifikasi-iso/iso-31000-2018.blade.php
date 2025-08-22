@extends('layouts.landing', ['title' => 'Certifico || Certified Risk Associate'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-section tx-hero-single pb-0">
    <div class="container p-relative h-100">
      <div class="tx-hero-single-img ratio ratio-1x1 ratio-md-16x9 ratio-xl-21x9">
        {{-- <div class="bg-overlay z-0"></div> --}}
        <img src="/img/service/iso-31000.avif" alt="" class="img-cover z-n1">
      </div>
      <div class="tx-hero-single-cta">
        <a href="{{ route('second', ['pages', 'contact']) }}" class="btn btn-secondary btn-icon-leading">
          Get a Free Consultation <i class="fa-regular fa-arrow-right"></i>
        </a>
      </div>
      <div class="row justify-content-center tx-hero-single-caption">
        <div class="col-11 d-flex flex-column" data-bs-theme="dark">
          <div class="tx-logo-brand">
            <img src="/img/brand/logo-ISO-31000.svg" alt="">
          </div>
          <div class="tx-breadcrumb">
            <h4 class="tx-section-subtitle">Sertifikasi ISO <i class="fa-solid fa-badge-check text-secondary ms-2"></i>
            </h4>
            <h1>ISO 31000:2018</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <section class="services-program py-6">
    <div class="container">
      <div class="row justify-content-between text-center mb-5">
        <div class="col-lg-auto">
          <h4 class="tx-section-subtitle">Metode Pelatihan</h4>
          <div>Presentasi Materi | Diskusi dan Q&A | Audio-Visual</div>
        </div>
        <div class="col-lg-auto">
          <h4 class="tx-section-subtitle">Jenis Pelatihan</h4>
          <div>Online | Onsite</div>
        </div>
        <div class="col-lg-auto">
          <h4 class="tx-section-subtitle">Durasi</h4>
          <div>2 Hari / 10 Sesi</div>
        </div>
        <div class="col-lg-auto">
          <h4 class="tx-section-subtitle">Simulasi Ujian & Ujian Online</h4>
          <div>GAFM<sup>&reg;</sup></div>
        </div>
      </div>
      <hr>
    </div>
  </section>

  <!-- ================= Service Details Start ================= -->
  <section class="tx-service-deatil">
    <div class="container">
      <div class="row">
        <div class="col-xl-11 col-xxl-9 mx-auto">
          <blockquote class="blockquote d-md-flex gap-5 mb-5 animated">
            <div class="text-secondary fa-stack fs-5 mb-5 col-2">
              @include('icons.quote-left')
            </div>
            <p>Pendekatan dalam pelatihan Certified Risk Professional - CRP (Profesional Risiko Bersertifikat) menggunakan
              standar ISO 31000:2018 sebagai alat pengelolaan risiko dan telah disesuaikan dengan regulasi terkini
              manajemen
              risiko yang berlaku pada lingkup BUMN yaitu pada PER-2/BUMN/MBU/03/2023.</p>
          </blockquote>
          <div class="tx-service-content pb-5 animated">
            <p>Dengan memahami prinsip, kerangka kerja, dan proses dari manajemen risiko, peserta akan memiliki
              pengetahuan yang komprehensif tentang proses manajemen risiko sesuai dengan ISO 31000:2018 serta
              PER-2/BUMN/MBU/03/2023 dan akan mampu mengembangkan pendekatan dan proses implementasi yang lebih efektif
              di perusahaan. Setelah menyelesaikan pelatihan, para peserta dapat mengikuti Uji Kompetensi sebagai
              profesional manajemen risiko oleh Lembaga Sertifikasi Profesi Pasar Modal (LSPPM).</p>
          </div>

          <!-- ====== Objectives and Benefits Start ===== -->
          <div class="row g-3 tx-service-content">
            <div class="col-md-6 animated">
              <div class="card tx-service-card">
                <div class="card-body">
                  <h2>Manfaat Sertifikasi CRP<sup>&reg;</sup></h2>
                  <ul>
                    <li>Peningkatan Kompetensi Profesional</li>
                    <li>Pengakuan Resmi dari BNSP</li>
                    <li>Pengembangan Karier</li>
                    <li>Kredibilitas dan Reputasi</li>
                    <li>Akses ke Jaringan Profesional</li>
                    <li>Pemenuhan terhadap peraturan dan standar yang berlaku</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 animated">
              <div class="card tx-service-card">
                <div class="card-body">
                  <h2>Tujuan Sertifikasi CRP<sup>&reg;</sup></h2>
                  <ul>
                    <li>Mengembangkan Kepemimpinan dalam Manajemen Risiko</li>
                    <li>Pengetahuan Mendalam dan Spesialisasi</li>
                    <li>Pengembangan Karier</li>
                    <li>Memastikan Kompetensi Tingkat Lanjut Mendorong Inovasi</li>
                    <li>Mendorong Inovasi dan Best Practices Meningkatkan</li>
                    <li>Meningkatkan Kredibilitas dan Reputasi Profesional</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- ====== Objectives and Benefits Start ===== -->

          <div class="tx-service-content">
            @include('icons.border-center')
          </div>

          <div class="tx-service-content list-col-2 list-xxl-col-3 animated">
            <h2 class="text-center">Modul Manajemen Risiko</h2>
            <ul>
              <li>Mengelola risik</li>
              <li>Menentukan risk o ner dan fungsi kejadian risik</li>
              <li>Mendokumentasikan risik</li>
              <li>Mendefinisikan kriteria risik</li>
              <li>Penentuan skala prioritas risik</li>
              <li>Evaluasi risiko yang dapat diterima</li>
              <li>Menetapkan risiko</li>
              <li>Menentukan strategi penanganan risiko</li>
              <li>Melakukan evaluasi konteks internal</li>
              <li>Mengkomunikasikan profil risiko</li>
              <li>Mengkomunikasikan peran dan tanggung jawab setiap pihak</li>
              <li>Melakukan pengukuran atas efektifitas tindakan</li>
              <li>Menentukan waktu dan strategi</li>
              <li>Menerapkan kebijakan manajemen risiko</li>
              <li>Pengukuran kinerja</li>
              <li>Pemantauan berkala</li>
              <li>Menyusun kebijakan risiko</li>
              <li>Menyusun kerangka kerja</li>
              <li>Menyusun rencana kerja spesifik</li>
            </ul>
          </div>

          <div class="tx-service-content list-check bg-primary-subtle rounded p-5 my-5 animated">
            <div class="row justify-content-around align-items-center g-4">
              <div class="col-md-6 col-xl-5">
                <h2>Metode Uji Kompetensi</h2>
                <ul>
                  <li>Peningkatan Kompetensi Profesional</li>
                  <li>Pengakuan Resmi dari BNSP</li>
                  <li>Pengembangan Karier</li>
                </ul>
              </div>
              <div class="col-md-6 col-xl-5">
                <div class="ratio ratio-16x9 rounded fix">
                  <img src="/img/banner/smart-confidence-asian.avif" alt="" />
                </div>
              </div>
            </div>
          </div>

          <div class="tx-service-content text-center">
            <h2 class="animated">Metode Uji Kompetensi</h2>
            <div class="row tx-scroll-md-x g-3">
              <div class="col-9 col-md-5 col-lg-3 animated">
                <div class="card card-body">
                  <div class="tx-service-box-icon d-inline-flex mx-auto mb-3">
                    <span class="h5 bg-primary text-white">01</span>
                  </div>
                  <h5>Konsultasi</h5>
                  <span>Menentukan metode uji yang akan diikuti peserta (Uji tertulis, ceklis portofolio dan uji
                    wawancara)</span>
                </div>
              </div>
              <div class="col-9 col-md-5 col-lg-3 animated">
                <div class="card card-body">
                  <div class="tx-service-box-icon d-inline-flex mx-auto mb-3">
                    <span class="h5 bg-primary text-white">02</span>
                  </div>
                  <h5>Uji Tertulis</h5>
                  <span>Peserta mengerjakan uji tertulis dengan sebanyak 100PG dengan waktu 120 menit</span>
                </div>
              </div>
              <div class="col-9 col-md-5 col-lg-3 animated">
                <div class="card card-body">
                  <div class="tx-service-box-icon d-inline-flex mx-auto mb-3">
                    <span class="h5 bg-primary text-white">03</span>
                  </div>
                  <h5>Ceklis Portofolio</h5>
                  <span>Peserta akan 1 on 1 dengan asesor untuk verifikasi dokumen yang dilengkapi, salah satunya tugas
                    risk register</span>
                </div>
              </div>
              <div class="col-9 col-md-5 col-lg-3 animated">
                <div class="card card-body">
                  <div class="tx-service-box-icon d-inline-flex mx-auto mb-3">
                    <span class="h5 bg-primary text-white">04</span>
                  </div>
                  <h5>Uji Wawancara</h5>
                  <span>Setelah ceklis portofolio akan dilanjutkan ke uji wawancara, dimana asesor kami akan menggali
                    kompetensi peserta melalui beberapa pertanyaan</span>
                </div>
              </div>
            </div>
          </div>

          <div class="tx-service-content">
            <h2 class="text-center animated">Keputusan Hasil Asesmen dan Penerimaan Sertifikat</h2>
            <div class="row g-3">
              <div class="col-md-6 animated">
                <div class="card card-body flex-lg-row">
                  <div class="tx-service-box-icon mb-3">
                    <span class="d-flex justify-content-center align-items-center text-primary fs-5 lh-1">
                      <i class="fa-solid fa-shield-check"></i>
                    </span>
                  </div>
                  <div class="tx-service-box-content">
                    <h3 class="tx-fs-18 tx-lineheight-18 pb-16 m-0">Keputusan Hasil Asesmen</h3>
                    <p class="tx-text-para m-0">
                      Setelah mengikuti rangkaian asesmen, peserta akan mendapatkan rekomendasi dari asesor, dan akan
                      mendapatkan Surat hasil Asesmen kurang lebih 2 pekan setelah dilaksanakannya asesmen.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 animated">
                <div class="card card-body flex-lg-row">
                  <div class="tx-service-box-icon mb-3">
                    <span class="d-flex justify-content-center align-items-center text-primary fs-5 lh-1">
                      <i class="fa-solid fa-certificate"></i>
                    </span>
                  </div>
                  <div class="tx-service-box-content">
                    <h3 class="tx-fs-18 tx-lineheight-18 pb-16 m-0">Penerimaan Sertifikat</h3>
                    <p class="tx-text-para m-0">
                      Jika hasil Akhir dalam Surat hasil Asesmen dinyatakan kompeten maka Peserta akan mendapatkan
                      Sertifikat Kompetensi lisensi BNSP yang diproses kurang lebih 1 bulan dari diterimanya Surat hasil
                      Asesmen.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Service Details End ================= -->

  <!-- ================= Service section start ================= -->
  <section class="tx-service-content text-center">
    <div class="container">
      <a href="{{ route('second', ['services', 'all']) }}" class="btn btn-dark btn-icon-leading"><i
          class="fa-regular fa-arrow-left"></i>All Services</a>
      <a href="" class="btn btn-tertiary btn-icon-leading">Add to Cart<i
          class="fa-regular fa-cart-shopping"></i></a>
    </div>
  </section>
  <!-- ================= Service section End ================= -->

  <!-- ================= Cta section start ================= -->
  <section class="tx-cta-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-11 col-xxl-9 mx-auto">
          <div class="bg-primary-subtle rounded py-7">
            <div class="row justify-content-center text-center gy-5">
              <div class="col-10 col-md-8 col-lg-6 col-xxl-10">
                <h2 class="tx-section-title mb-0">Related Services</h2>
              </div>
              <div class="col-10">
                <div class="btn-list-group">
                  <a href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-9001-2015']) }}"
                    class="btn btn-icon-leading arrow-right">ISO 9001:2015</a>
                  <a href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-22301-2019']) }}"
                    class="btn btn-icon-leading arrow-right">ISO 22301:2019</a>
                  <a href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-31000-2018']) }}"
                    class="btn btn-icon-leading arrow-right d-none">ISO 31000:2018</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Cta section End ================= -->
@endsection
