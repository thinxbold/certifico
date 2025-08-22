@extends('layouts.landing', ['title' => 'O-Tech || Blog Single'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section pt-7 pt-lg-5 pt-xxl-7">
    <div class="container pt-3 pt-md-5">
      <div class="tx-section px-lg-7 bg-primary-subtle rounded">
        <div class="row justify-content-center align-items-center g-5">
          <div class="col-11 col-lg-6 animated_right" data-aos-delay="300">
            <div class="tx-breadcrumb">
              <h1 class="tx-section-heading mb-0">The Latest in Tech: News, Tips, and Insights</h1>
            </div>
          </div>
          <div class="col-11 col-lg-5 offset-lg-1 offset-xl-0 position-relative">
            <div class="ratio ratio-4x3 rounded fix animated_left" data-aos-delay="500">
              <img src="/img/article/busy-traffic-trail-in-city.avif" alt="">
            </div>
            <div class="tx-hero-meta" data-aos="zoom-in" data-aos-delay="500">
              <div class="auth-img">
                <div class="ratio ratio-1x1">
                  <img src="/img/team/Sorchan-Simbolon.avif" alt="" />
                </div>
                <p>Sorchan Simbolon</p>
              </div>
              <div class="date">
                <i class="fa-regular fa-calendar-check"></i>
                <p>10 December 2024</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <!-- ================= Blog Details Start ================= -->
  <section class="tx-section tx-stories pt-6 animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-xl-7 mx-auto">
          <div class="tx-stories-wrapper">
            <h2>Unpacking Trends: Technology for Tomorrow</h2>
            <p>
              Stay ahead in the ever-changing world of technology with our insightful blog. We cover a wide range
              of topics, including cloud computing, cybersecurity, IT infrastructure, and digital transformation.
              Whether you're looking for industry updates, expert opinions.
            </p>
            <img src="/img/article/business-on-a-tablet.avif" alt="" />
            <h2>Ready Networks for Seamless Connectivity</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente labore voluptates recusandae odio deserunt
              facere ipsum voluptatem officia ad cum maiores suscipit obcaecati dolore, amet optio facilis fugiat unde.
              Repellendus.
            </p>
            <p>
              Commodi facilis recusandae debitis facere nobis perspiciatis veritatis consectetur voluptatum velit
              provident maiores tenetur distinctio, molestias numquam cupiditate asperiores quos vero, error unde placeat,
              repudiandae voluptas tempora. Impedit tenetur accusantium est cum iste nam repellendus libero, aliquam atque
              corporis rerum similique recusandae.
            </p>

            <blockquote>
              <p>
                In a fast-paced digital world, staying informed is crucial. Our story offers timely updates on IT
                solutions, industry challenges, and new opportunities. Whether you're a business leader, IT
                professional, or tech enthusiast, you'll find relevant.
              </p>
            </blockquote>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptatibus neque nobis dolorum dignissimos
              sequi fugiat excepturi vero aliquid quis. Assumenda quas eligendi aperiam, molestiae officiis repellat
              molestias non, libero quisquam voluptates, optio adipisci beatae aliquid hic placeat dignissimos dicta.</p>

            <ul class="list-check">
              <li><strong>Technology Consultancy</strong> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequuntur, quos corporis provident iusto ipsam minus sunt! Tempore, culpa a. Aperiam soluta sint
                inventore quia repellat, reprehenderit quos, sed blanditiis perferendis, officia laborum dolorum
                consequuntur modi totam!</li>
              <li><strong>Managed Services</strong> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Molestiae doloremque mollitia ad similique doloribus in neque quibusdam iusto dignissimos quidem voluptas
                rem, odio eos, perspiciatis architecto magnam modi nostrum iste ut alias hic eius velit! Dolores, vero
                voluptatibus.</li>
              <li><strong>Automation Solutions</strong> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Voluptatem rerum repellendus corrupti, mollitia rem totam quam. Rerum vel possimus quam error excepturi
                aliquam neque rem doloremque odio, ex reprehenderit voluptates nobis non.</li>
              <li><strong>Business Innovation</strong> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Cumque nulla debitis alias eligendi nisi nesciunt delectus culpa voluptate cupiditate, commodi dolorum
                ipsam, aperiam impedit fuga autem facere.</li>
            </ul>
            <h2>Reliable Networks for Critical Operations</h2>
            <p>
              Explore our blog for a deep dive into the world of IT services and digital innovation. We provide
              valuable content on topics like cloud services, cybersecurity, data analytics.
            </p>
            <p>
              Cybersecurity, data analytics, & software development. With insights from industry experts and
              real-world examples, our blog helps you stay informed, inspired, and ready for the future
              services.
            </p>
          </div>

          <hr class="my-7">

          <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-8">
              <div class="tx-stories-tags">
                <ul>
                  <li>
                    <a href="#"><span>#</span>IT Service & Technology</a>
                  </li>
                  <li>
                    <a href="#"><span>#</span>Creative</a>
                  </li>
                  <li>
                    <a href="#"><span>#</span>Development</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-auto">
              <div class="tx-stories-share">
                <h6>Share:</h6>
                <ul>
                  <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ================= Blog Details End ================= -->
@endsection
