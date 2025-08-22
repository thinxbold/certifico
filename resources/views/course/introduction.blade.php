@extends('layouts.landing', ['title' => 'Certifico || CRP - Certified Risk Professional'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-section tx-hero-single pb-0">
    <div class="container p-relative h-100">
      <div class="tx-hero-single-img ratio ratio-1x1 ratio-lg-16x9 ratio-xl-21x9">
        <div class="bg-overlay z-0"></div>
        <img src="/img/course/course01.avif" alt="" class="img-cover z-n1">
      </div>
      <div class="tx-hero-single-cta">
        <a href="{{ route('second', ['course', 'single']) }}" class="btn btn-secondary btn-icon-leading arrow-right me-2">
          Get Started</i>
        </a>
        <a href="#course_section" class="btn btn-primary btn-icon-leading">
          Introduction <i class="fa-regular fa-arrow-right fs-6 rotate-45"></i>
        </a>
      </div>
      <div class="row justify-content-center tx-hero-single-caption">
        <div class="col-11 mt-auto" data-bs-theme="dark">
          <div class="tx-breadcrumb pe-xl-8">
            <h1>CRP<sup>&reg;</sup> <br> <span>Certified Risk Professional</span></h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <!-- ================= Service Details Start ================= -->
  <section id="course_section" class="tx-section">
    <div class="container">
      <div class="row justify-content-center g-5">
        <div class="col-lg-10">
          <div class="tx-service-details row justify-content-center g-5 g-xl-7">
            <div class="col-12 tx-block-content pt-xl-5 animated">
              <h2 class="tx-section-title mb-5">Building Resilient Networks</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat, enim nec vehicula consequat,
                ipsum elit cursus dui, sit amet luctus nisl orci a leo. Ut consectetur velit vel nunc viverra luctus. In
                hac habitasse platea dictumst. Mauris vitae sapien dolor. Quisque gravida id ex a dictum. Integer luctus
                mi velit. Vivamus volutpat ex id augue varius molestie. Proin mauris justo, egestas eget lectus nec,
                consequat ultrices velit. Fusce quis enim iaculis, iaculis lacus id, venenatis lorem. Curabitur eu
                pellentesque augue. Morbi nisi diam, lobortis vestibulum dolor a, feugiat placerat turpis. Nam tempus
                felis ac libero auctor mattis.</p>
            </div>

            <div class="col-12 tx-service-details-cat text-center py-4 py-xl-5 animated">
              <div class="tx-service-details-cat-single col-md-4">
                <h3 class="h6">Progress</h3>
                <div class="progress mb-2 mb-xxl-3">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%">80%</div>
                </div>
              </div>
              <div class="tx-service-details-cat-single">
                <h3 class="h6">Last Activity</h3>
                <small>12 Juni 2025 8:55 pm</small>
              </div>
              <div class="tx-service-details-cat-single">
                <h3 class="h6">Certificate</h3>
                <a href="" class="btn btn-secondary h-auto btn-sm">View Certificate</a>
              </div>
            </div>

            <div class="col-12 py-xl-5">
              <h2 class="tx-section-title mb-5 text-md-center animated">Instructor</h2>
              <div class="row justify-content-center g-3">
                <div class="col-md-6 animated">
                  <div class="tx-team-single d-flex">
                    <div class="col-3">
                      <div class="tx-team-single-image ratio ratio-1x1">
                        <img class="w-100" src="/img/team/Sorchan-Simbolon.avif" alt="" />
                      </div>
                    </div>
                    <div class="tx-team-single-content mt-auto pe-0">
                      <div class="d-block">
                        <h4 class="tx-team-single-title">
                          <a href="{{ route('second', ['pages', 'team']) }}">Sorchan Simbolon</a>
                        </h4>
                        <span>Dr, SPDP, CRP</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 animated">
                  <div class="tx-team-single d-flex">
                    <div class="col-3">
                      <div class="tx-team-single-image ratio ratio-1x1">
                        <img class="w-100" src="/img/team/Hizkia.avif" alt="" />
                      </div>
                    </div>
                    <div class="tx-team-single-content mt-auto pe-0">
                      <div class="d-block">
                        <h4 class="tx-team-single-title">
                          <a href="#">Hizkia Sutanto</a>
                        </h4>
                        <span>SS.Pi, CRA, CRP, Sertifikat Pelatihan RMI KBUMN</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 pb-xl-5">
              @include('icons.border-center')
            </div>

            <div class="col-xl-11 col-xxl-9">
              <h2 class="tx-section-title text-center mb-5 animated">Alur Pembelajaran Pelatihan</h2>

              <div class="tx-timeline-block">

                <div class="tx-timeline row">
                  <div class="col-md-5 tx-timeline-img">
                    <div class="ratio ratio-1x1">
                      <img src="/img/icons/world.webp" alt="" data-aos="zoom-in">
                    </div>
                  </div>
                  <div class="col-auto tx-timeline-number" data-aos="zoom-in">
                    <div></div>
                  </div>
                  <div class="col-md-5 tx-timeline-content" data-aos="zoom-in">
                    <span>Akses ke website https://website.id</span>
                  </div>
                </div>

                <div class="tx-timeline row">
                  <div class="col-md-5 tx-timeline-img">
                    <div class="ratio ratio-1x1">
                      <img src="/img/icons/unlock.webp" alt="" data-aos="zoom-in">
                    </div>
                  </div>
                  <div class="col-auto tx-timeline-number" data-aos="zoom-in">
                    <div></div>
                  </div>
                  <div class="col-md-5 tx-timeline-content" data-aos="zoom-in">
                    <span>Login atau Signup jika belum memiliki akun</span>
                  </div>
                </div>

                <div class="tx-timeline row">
                  <div class="col-md-5 tx-timeline-img">
                    <div class="ratio ratio-1x1">
                      <img src="/img/icons/quest.webp" alt="" data-aos="zoom-in">
                    </div>
                  </div>
                  <div class="col-auto tx-timeline-number" data-aos="zoom-in">
                    <div></div>
                  </div>
                  <div class="col-md-5 tx-timeline-content" data-aos="zoom-in">
                    <span>Lengkapi data diri sesuai dengan identitas Anda</span>
                  </div>
                </div>

                <div class="tx-timeline row">
                  <div class="col-md-5 tx-timeline-img">
                    <div class="ratio ratio-1x1">
                      <img src="/img/icons/task.webp" alt="" data-aos="zoom-in">
                    </div>
                  </div>
                  <div class="col-auto tx-timeline-number" data-aos="zoom-in">
                    <div></div>
                  </div>
                  <div class="col-md-5 tx-timeline-content" data-aos="zoom-in">
                    <span>Pilih course pelatihan yang akan diambil</span>
                  </div>
                </div>

                <div class="tx-timeline row">
                  <div class="col-md-5 tx-timeline-img">
                    <div class="ratio ratio-1x1">
                      <img src="/img/icons/clock.webp" alt="" data-aos="zoom-in">
                    </div>
                  </div>
                  <div class="col-auto tx-timeline-number" data-aos="zoom-in">
                    <div></div>
                  </div>
                  <div class="col-md-5 tx-timeline-content" data-aos="zoom-in">
                    <span>Peserta wajib menyelesaikan setiap Unit Kompetensi dan menyelesaikan durasi waktu belajar</span>
                  </div>
                </div>

                <div class="tx-timeline row">
                  <div class="col-md-5 tx-timeline-img">
                    <div class="ratio ratio-1x1">
                      <img src="/img/icons/book.webp" alt="" data-aos="zoom-in">
                    </div>
                  </div>
                  <div class="col-auto tx-timeline-number" data-aos="zoom-in">
                    <div></div>
                  </div>
                  <div class="col-md-5 tx-timeline-content" data-aos="zoom-in">
                    <span>Jika waktu durasi sudah habis, peserta dapat mempelajari kembali setiap Unit Kompetensi</span>
                  </div>
                </div>

                <div class="tx-timeline row">
                  <div class="col-md-5 tx-timeline-img">
                    <div class="ratio ratio-1x1">
                      <img src="/img/icons/paperplane.webp" alt="" data-aos="zoom-in">
                    </div>
                  </div>
                  <div class="col-auto tx-timeline-number" data-aos="zoom-in">
                    <div></div>
                  </div>
                  <div class="col-md-5 tx-timeline-content" data-aos="zoom-in">
                    <span>Setelah selesai menonton, mempelajari, mengerjakan quiz di masing-masing unit/topik, peserta
                      diwajibkan klik "Mark Completed"</span>
                  </div>
                </div>

                <div class="tx-timeline row">
                  <div class="col-md-5 tx-timeline-img">
                    <div class="ratio ratio-1x1">
                      <img src="/img/icons/headset.webp" alt="" data-aos="zoom-in">
                    </div>
                  </div>
                  <div class="col-auto tx-timeline-number" data-aos="zoom-in">
                    <div></div>
                  </div>
                  <div class="col-md-5 tx-timeline-content" data-aos="zoom-in">
                    <span>Setelah selesai mempelajari seluruh unit/topik, peserta akan diarahkan untuk mengikuti sesi
                      mentoring melalui zoom meeting</span>
                  </div>
                </div>

              </div>

            </div>

            <div class="col-12 tx-block-content pt-xl-5 animated">
              <h2 class="tx-section-title">Tujuan Pembelajaran</h2>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus inventore sapiente est dignissimos
                nobis labore soluta, voluptates perspiciatis eligendi voluptatem ullam consequuntur quae vitae
                reprehenderit laborum ut at dolorem cupiditate assumenda nemo. Maxime vel voluptas architecto soluta
                aspernatur autem, laborum, dolorum amet vero animi esse ut fuga quasi consequatur fugit.</p>
              <div class="tx-service-card">
                <ul>
                  <li>Nullam non molestie diam. Maecenas consequat a orci nec euismod. Nulla et aliquam massa. Proin
                    cursus,
                    turpis eget porta aliquam, nunc massa egestas ligula, non bibendum neque lacus quis ex.</li>
                  <li>Vestibulum nec purus id ante iaculis fringilla. Maecenas in auctor enim. Vivamus ultrices rhoncus
                    mollis. Nulla facilisi.</li>
                  <li>Cras eget erat at turpis vulputate commodo. Class aptent taciti sociosqu ad litora torquent per
                    conubia nostra, per inceptos himenaeos.</li>
                  <li>Aliquam quis aliquet odio, pulvinar cursus felis. Phasellus in orci feugiat, consectetur diam quis,
                    fringilla arcu.</li>
                  <li>Vestibulum ullamcorper mattis dolor. Maecenas non pulvinar sapien. Proin mattis, lectus ut egestas
                    auctor, nunc arcu rutrum diam, ut ornare risus libero a urna.</li>
                  <li>Pellentesque a elit enim. Pellentesque vel nisi nisl. Vestibulum sed congue massa, non sodales elit.
                    Aenean nisl velit, fringilla id consectetur ultricies, hendrerit eget sem.</li>
                </ul>
              </div>
              <div class="text-center">
                <hr class="my-5">
                <a href="{{ route('second', ['course', 'single']) }}"
                  class="btn btn-secondary btn-icon-leading arrow-right">Start Learning</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Service Details End ================= -->

  <section class="tx-section-cta">
    <div class="container">
      <div class="row">
        <div class="col-12" data-bs-theme="dark">
          <div class="p-relative rounded tx-section fix px-4">
            <img src="/img/banner/modern-citylife.avif" alt=""
              class="img-cover position-absolute start-0 top-0 w-100 h-100 z-n1">
            <div class="bg-overlay bg-primary"></div>
            <div class="row justify-content-center text-center">
              <div class="col-lg-9 z-3">
                <h2 class="tx-section-title mb-0">Butuh Bantuan? Hubungi Kami</h2>
              </div>
              <div class="col-12 col-lg-10 z-3">
                <hr class="my-5">
                <p class="fs-5 fw-bold mb-0">888-500-8888</p>
                <a href="#" class="btn btn-secondary btn-icon-leading mt-4"><span><i
                      class="fa-light fa-phone"></i></span>Call Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
