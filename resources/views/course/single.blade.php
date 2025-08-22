@extends('layouts.landing', ['title' => 'Certifico || CRP - Certified Risk Professional'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section bg-gradient-light pb-4 pb-md-5">
    <div class="container h-100">
      <div class="row justify-content-between g-3 h-100">
        <div class="col-12">
          <div class="tx-breadcrumb">
            <h4 class="tx-section-subtitle">Certified Risk Professional - CRP<sup>&reg;</sup></h4>
            <h1 class="tx-section-heading">Mengelola Risiko Usaha</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('layouts.partials.section-border-left')

  <section class="tx-breadcrumb py-5">
    <div class="container">
      <div class="row justify-content-between gy-3">
        <div class="col-lg-7">
          <div class="tx-breadcrumb-list">
            <span><a href="{{ route('any', 'index') }}">Home</a></span>
            <span><a href="{{ route('second', ['course', 'courses']) }}">Courses</a></span>
            <span><a href="{{ route('second', ['course', 'introduction']) }}">CRP - Certified Risk
                Professional</a></span>
            <span class="active"><a href="#">Mengelola Risiko Usaha</a></span>
          </div>
        </div>
        <div class="col-lg-auto">
          <button class="btn btn-primary btn-icon-leading ms-auto" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#materialsMenu" aria-controls="offcanvasExample">
            Learning Materials<i class="fa-light fa-list-dropdown"></i>
          </button>
        </div>
      </div>
      <div id="materialsMenu" class="tx-sidebar offcanvas offcanvas-start text-bg-dark" data-bs-theme="dark"
        tabindex="-1" aria-labelledby="materialsMenuLabel">
        <div class="offcanvas-header pb-xl-0">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Learning Materials</h5>
          <button type="button" class="ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"><i
              class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="offcanvas-body">
          <div class="tx-sidebar-widget rounded border px-3 py-4 px-xxl-4">
            <!-- recent post -->
            <div class="tx-sidebar-widget">
              <div class="tx-sidebar-rec-post">
                <ul>
                  <li>
                    <a href="{{ route('second', ['course', 'single']) }}" class="active">Mengelola Risiko Usaha<span><i
                          class="fa-regular fa-angle-right"></i></span></a>
                  </li>
                  <li>
                    <a href="{{ route('second', ['course', 'single']) }}">Menentukan Risk Owner dan Fungsi Terkait untuk
                      Setiap Kejadian Risiko<span><i class="fa-regular fa-angle-right"></i></span></a>
                  </li>
                  <li>
                    <a href="{{ route('second', ['course', 'single']) }}">Mendokumentasikan Risiko kedalam Risk
                      Register<span><i class="fa-regular fa-angle-right"></i></span></a>
                  </li>
                  <li>
                    <a href="{{ route('second', ['course', 'single']) }}">Mendefinisikan Kriteria Risiko<span><i
                          class="fa-regular fa-angle-right"></i></span></a>
                  </li>
                  <li>
                    <a href="{{ route('second', ['course', 'single']) }}">Melakukan Penentuan Skala Prioritas Terhadap
                      Risiko <span><i class="fa-regular fa-angle-right"></i></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= Service Details Start ================= -->
  <section id="course_section" class="tx-section pt-0">
    <div class="container">
      <div class="tx-service-details row g-5">
        <div class="col-12 tx-block-content animated">
          <h2 class="tx-section-title">Tujuan Pembelajaran</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus inventore sapiente est dignissimos
            nobis labore soluta, voluptates perspiciatis eligendi voluptatem ullam consequuntur quae vitae
            reprehenderit laborum ut at dolorem cupiditate assumenda nemo. Maxime vel voluptas architecto soluta
            aspernatur autem, laborum, dolorum amet vero animi esse ut fuga quasi consequatur fugit.</p>
        </div>

        <div class="col-lg-8 animated">
          <div class="tx-service-card">
            <ul>
              <li>Nullam non molestie diam. Maecenas consequat a orci nec euismod. Nulla et aliquam massa.</li>
              <li>Vestibulum nec purus id ante iaculis fringilla. Maecenas in auctor enim.</li>
              <li>Aliquam quis aliquet odio, pulvinar cursus felis.</li>
              <li>Vestibulum ullamcorper mattis dolor. Maecenas non pulvinar sapien.</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 animated">
          <div class="card card-body text-center">
            <div class="tx-service-details-cat-single mb-3">
              <h3 class="h6">Current Progress</h3>
              <div class="progress mb-2 mb-xxl-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar"
                  aria-valuenow="25" aria-valuemin="0" aria-valuemax="25" style="width: 25%">25%</div>
              </div>
            </div>
            <div class="tx-service-details-cat-single">
              <h3 class="h6">Steps</h3>
              <small>1 of 4</small>
            </div>

          </div>
        </div>

        <div class="col-12">
          <div class="accordion tx-course-material" id="accordionCRP1">
            <!-- single item -->
            <div class="tx-accordion-item animated">
              <h2 class="accordion-header">
                <button class="tx-accordion-button-vd tx-accordion-button accordion-button collapsed" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                  <i id="completeIndicator" class="fa-regular fa-circle-xmark"></i>Mengidentifikasi Risiko Usaha
                  <span>2:33</span>
                </button>
              </h2>
              <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionCRP1">
                <div class="accordion-body">
                  <div class="tx-video">
                    <div class="tx-video-thumb ratio ratio-16x9">
                      <img src="/img/banner/crp-video-thumbnail1.avif" alt="" />
                    </div>

                    <!-- play btn -->
                    <div class="tx-video-icon">
                      <a href="#crp_vid_1" class="openVideo"><span><i class="fa-solid fa-play"></i></span></a>
                    </div>
                    <div id="crp_vid_1" class="tx-video-frame mfp-hide d-flex justify-content-center">
                      <button title="Close (Esc)" type="button" class="mfp-close"></button>
                      <video width="640" height="auto" preload="auto"
                        poster="/img/banner/crp-video-thumbnail.avif" controls>
                        <source src="/video/Cinematic-Switzerland.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- single item -->
            <div class="tx-accordion-item animated">
              <h2 class="accordion-header">
                <button class="tx-accordion-button-vd accordion-button collapsed" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                  aria-controls="collapse2">
                  <i id="completeIndicator" class="fa-regular fa-circle-xmark"></i>Mengukur Risiko Usaha
                  <span>2:57</span>
                </button>
              </h2>
              <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionCRP1">
                <div class="accordion-body">
                  <div class="tx-video">
                    <div class="tx-video-thumb ratio ratio-16x9">
                      <img src="/img/banner/crp-video-thumbnail2.avif" alt="" />
                    </div>

                    <!-- play btn -->
                    <div class="tx-video-icon">
                      <a href="#crp_vid_2" class="openVideo"><span><i class="fa-solid fa-play"></i></span></a>
                    </div>
                    <div id="crp_vid_2" class="tx-video-frame mfp-hide d-flex justify-content-center">
                      <button title="Close (Esc)" type="button" class="mfp-close"></button>
                      <video width="640" height="auto" preload="auto"
                        poster="/img/banner/crp-video-thumbnail.avif" controls>
                        <source src="/video/Adam-Port-Move.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- single item -->
            <div class="tx-accordion-item animated">
              <h2 class="accordion-header">
                <button class="tx-accordion-button-vd accordion-button collapsed" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                  aria-controls="collapse3">
                  <i id="completeIndicator" class="fa-regular fa-circle-xmark"></i>Melakukan Pemantauan
                  Risiko Usaha
                  <span>3:21</span>
                </button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionCRP1">
                <div class="accordion-body">
                  <div class="tx-video">
                    <div class="tx-video-thumb ratio ratio-16x9">
                      <img src="/img/banner/crp-video-thumbnail3.avif" alt="" />
                    </div>

                    <!-- play btn -->
                    <div class="tx-video-icon">
                      <a href="#crp_vid_3" class="openVideo"><span><i class="fa-solid fa-play"></i></span></a>
                    </div>
                    <div id="crp_vid_3" class="tx-video-frame mfp-hide d-flex justify-content-center">
                      <button title="Close (Esc)" type="button" class="mfp-close"></button>
                      <video width="640" height="auto" preload="auto"
                        poster="/img/banner/crp-video-thumbnail.avif" controls>
                        <source src="/video/Cinematic-4K.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- single item -->
            <div class="tx-accordion-item animated">
              <h2 class="accordion-header">
                <button class="tx-accordion-button-vd accordion-button collapsed" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                  aria-controls="collapse4">
                  <i id="completeIndicator" class="fa-regular fa-circle-xmark"></i>Mengendalikan Risiko
                  Usaha
                  <span>4:15</span>
                </button>
              </h2>
              <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionCRP1">
                <div class="accordion-body">
                  <div class="tx-video">
                    <div class="tx-video-thumb ratio ratio-16x9">
                      <img src="/img/banner/crp-video-thumbnail4.avif" alt="" />
                    </div>

                    <!-- play btn -->
                    <div class="tx-video-icon">
                      <a href="#crp_vid_4" class="openVideo"><span><i class="fa-solid fa-play"></i></span></a>
                    </div>
                    <div id="crp_vid_4" class="tx-video-frame mfp-hide d-flex justify-content-center">
                      <button title="Close (Esc)" type="button" class="mfp-close"></button>
                      <video width="640" height="auto" preload="auto"
                        poster="/img/banner/crp-video-thumbnail.avif" controls>
                        <source src="/video/green-technology.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col d-flex flex-wrap gap-2">
          <a href="{{ route('second', ['course', 'courses']) }}" class="btn btn-dark btn-icon-leading arrow-left">Back
            to Dashboard</a>
          <button id="buttonChange" onclick="changeIndicator();" class="btn btn-primary btn-icon-leading ms-auto">Mark
            Complete <i class="fa-regular fa-check"></i></button>
          <a href="" class="btn btn-secondary btn-icon-leading arrow-right">Next Lesson</a>
        </div>

      </div>
    </div>
  </section>
  <!-- ================= Service Details End ================= -->
@endsection

@push('scripts')
  <script>
    let isContentChanged = false;
    const originalContent = document.getElementById('buttonChange').innerHTML;

    document.getElementById('buttonChange').onclick = function() {
      const targetIconElements = document.querySelectorAll('#completeIndicator');
      targetIconElements.forEach(function(element) {
        element.classList.toggle('fa-circle-xmark');
        element.classList.toggle('fa-circle-check');
      });

      const buttonElement = document.getElementById('buttonChange');
      const originalClass = 'btn btn-primary btn-icon-leading ms-auto';

      if (isContentChanged) {
        buttonElement.innerHTML = originalContent;
        buttonChange.className = originalClass;
        isContentChanged = false;
      } else {
        buttonElement.innerHTML = 'Mark Incomplete <i class="fa-regular fa-circle-xmark"></i>';
        buttonChange.className = 'btn btn-warning btn-icon-leading ms-auto';
        isContentChanged = true;
      }
    };
  </script>
@endpush
