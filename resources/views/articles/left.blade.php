@extends('layouts.landing', ['title' => 'O-Tech || Blog Left'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-breadcrumb-bg p-relative z-index-1 fix pt-200 pb--70"
    style="background-image: url(/img/banner/vl-breadcrumb-bg.png);">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-md-6 mb-30">
          <div class="tx-breadcrumb">
            <h1 class="tx-fs-60 tx-white">Our Blog Details</h1>
            <div class="tx-breadcrumb-list">
              <span><a href="{{ route('any', 'index') }}">Home</a></span>
              <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
              <span class="active"><a href="#">Our Blog</a></span>
              <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
              <span class="active"><a href="#">Our Blog Details</a></span>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-30">
          <div class="tx-hero-img p-relative">
            <div class="tx-hero-shape-4">
              <div class="tx-shape-2">
                <img src="/img/icons/vl-emoji-4.2.svg" alt="" />
              </div>
              <div class="tx-shape-3">
                <img src="/img/icons/vl-emoji-4.3.svg" alt="" />
              </div>
            </div>
            <div class="tx-breadcrumb-fan">
              <img class="w-100" src="/img/icons/vl-fan-sm.svg" alt="" />
            </div>
            <div class="tx-breadcrumb-img">
              <img src="/img/banner/vl-breadcrumb-1.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <!-- ================= Blog Details Start ================= -->
  <section class="tx-service-deatil pt-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="tx-sidebar-widget">
            <!-- search widget -->
            <div class="tx-sidebar-widget-search mb-30 tx-gray-bg-4 br-16">
              <h3 class="tx-text-cmn-blck tx-fs-20 tx-lineheight-20 pb-24 m-0">Search</h3>
              <div class="tx-sidebar-widget-search-form p-relative z-index-1">
                <form action="#">
                  <input type="text" placeholder="Search.." />
                </form>
                <div class="tx-sidebar-widget-search-icon">
                  <span><i class="fa-regular fa-magnifying-glass"></i></span>
                </div>
              </div>
            </div>

            <!-- Blog Category -->
            <div class="tx-sidebar-widget-search mb-30 tx-gray-bg-4 br-16">
              <h3 class="tx-text-cmn-blck tx-fs-20 tx-lineheight-20 pb-24 m-0">Blog Category</h3>
              <div class="tx-sidebar-rec-post">
                <ul>
                  <li>
                    <a href="#">Technology Solution <span><i class="fa-regular fa-angle-right"></i></span></a>
                  </li>
                  <li>
                    <a href="#">Website Mobile App <span><i class="fa-regular fa-angle-right"></i></span></a>
                  </li>
                  <li>
                    <a href="#">Tracking Security <span><i class="fa-regular fa-angle-right"></i></span></a>
                  </li>
                  <li>
                    <a href="#">Mobile App Design <span><i class="fa-regular fa-angle-right"></i></span></a>
                  </li>
                  <li>
                    <a href="#">IT Management Service <span><i class="fa-regular fa-angle-right"></i></span></a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Recent Post -->
            <div class="tx-sidebar-widget-search mb-30 tx-gray-bg-4 br-16">
              <h3 class="tx-text-cmn-blck tx-fs-20 tx-lineheight-20 pb-24 m-0">Recent Blogs</h3>
              <!-- single post -->
              <div class="tx-sidebar-rec-blog">
                <div class="tx-sidebar-rec-blog-thumb">
                  <a href="{{ route('second', ['blogs', 'single']) }}"><img src="/img/blog/vl-recent-blog-1.1.png"
                      alt="" /></a>
                </div>
                <div class="tx-sidebar-rec-blog-content">
                  <div class="tx-sidebar-meta">
                    <p class="tx-text-para tx-fs-18 tx-lineheight-26 m-0">
                      <span><img src="/img/icons/vl-dt.svg" alt="" /></span>10/10/2024
                    </p>
                  </div>
                  <h3 class="tx-text-cmn-blck tx-fs-20 tx-lineheight-28 pt-10 m-0"><a
                      href="{{ route('second', ['blogs', 'single']) }}">The Latest in Tech <br /> News, Tips, &
                      Insights...</a></h3>
                </div>
              </div>

              <!-- single post -->
              <div class="tx-sidebar-rec-blog">
                <div class="tx-sidebar-rec-blog-thumb">
                  <a href="{{ route('second', ['blogs', 'single']) }}"><img src="/img/blog/vl-recent-blog-1.2.png"
                      alt="" /></a>
                </div>
                <div class="tx-sidebar-rec-blog-content">
                  <div class="tx-sidebar-meta">
                    <p class="tx-text-para tx-fs-18 tx-lineheight-26 m-0">
                      <span><img src="/img/icons/vl-dt.svg" alt="" /></span>16/10/2024
                    </p>
                  </div>
                  <h3 class="tx-text-cmn-blck tx-fs-20 tx-lineheight-28 pt-10 m-0"><a
                      href="{{ route('second', ['blogs', 'single']) }}">Explore the Future of Technology with Us....</a>
                  </h3>
                </div>
              </div>

              <!-- single post -->
              <div class="tx-sidebar-rec-blog">
                <div class="tx-sidebar-rec-blog-thumb">
                  <a href="{{ route('second', ['blogs', 'single']) }}"><img src="/img/blog/vl-recent-blog-1.3.png"
                      alt="" /></a>
                </div>
                <div class="tx-sidebar-rec-blog-content">
                  <div class="tx-sidebar-meta">
                    <p class="tx-text-para tx-fs-18 tx-lineheight-26 m-0">
                      <span><img src="/img/icons/vl-dt.svg" alt="" /></span>16/10/2024
                    </p>
                  </div>
                  <h3 class="tx-text-cmn-blck tx-fs-20 tx-lineheight-28 pt-10 m-0"><a
                      href="{{ route('second', ['blogs', 'single']) }}">Unpacking IT Trends to <br /> Help You
                      Succeed...</a></h3>
                </div>
              </div>

              <!-- single post -->
              <div class="tx-sidebar-rec-blog">
                <div class="tx-sidebar-rec-blog-thumb">
                  <a href="{{ route('second', ['blogs', 'single']) }}"><img src="/img/blog/vl-recent-blog-1.4.png"
                      alt="" /></a>
                </div>
                <div class="tx-sidebar-rec-blog-content">
                  <div class="tx-sidebar-meta">
                    <p class="tx-text-para tx-fs-18 tx-lineheight-26 m-0">
                      <span><img src="/img/icons/vl-dt.svg" alt="" /></span>7/10/2024
                    </p>
                  </div>
                  <h3 class="tx-text-cmn-blck tx-fs-20 tx-lineheight-28 pt-10 m-0"><a
                      href="{{ route('second', ['blogs', 'single']) }}">Updated with Latest in <br /> IT & Technology
                      Trends.</a></h3>
                </div>
              </div>
            </div>

            <!-- phone -->
            <div class="tx-sidebar-widget-search mb-30 tx-gray-bg-4 br-16">
              <h3 class="tx-text-cmn-blck tx-fs-20 tx-lineheight-28 pb-24 m-0">If You Need Any Help <br /> Contact With
                Us</h3>
              <div class="tx-sidebar-phone">
                <a href="tel:1234567890"><span><i class="fa-light fa-phone"></i></span> +123 456 7890</a>
              </div>
            </div>
            <!-- Tags -->
            <div class="tx-sidebar-widget-search mb-30 tx-gray-bg-4 br-16">
              <h3 class="tx-text-cmn-blck tx-fs-20 tx-lineheight-20 pb-24 m-0">Popular Tags</h3>
              <div class="tx-sidebar-tags">
                <a href="#">IT Consulting</a>
                <a href="#">IT Infrastructure</a>
                <a href="#">Cloud Computing</a>
                <a href="#">Tech Support</a>
                <a href="#">Cybersecurity</a>
                <a href="#">Future Of Work</a>
              </div>
            </div>

            <!-- social -->
            <div class="tx-sidebar-widget-search mb-30 tx-gray-bg-4 br-16">
              <h3 class="tx-text-cmn-blck tx-fs-20 tx-lineheight-28 pb-24 m-0">Follow Us</h3>
              <div class="tx-sidebar-social">
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
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- author -->
            <div class="tx-sidebar-widget-search mb-30 tx-gray-bg-4 br-16">
              <h3 class="tx-text-cmn-blck tx-fs-20 tx-lineheight-28 pb-10 m-0">Our Author</h3>
              <div class="tx-sidebar-auth">
                <div class="tx-sidebar-auth-single pt-14">
                  <img src="/img/blog/vl-blog-auth-1.1.png" alt="" />
                </div>
                <div class="tx-sidebar-auth-single pt-14">
                  <img src="/img/blog/vl-blog-auth-1.2.png" alt="" />
                </div>
                <div class="tx-sidebar-auth-single pt-14">
                  <img src="/img/blog/vl-blog-auth-1.3.png" alt="" />
                </div>
                <div class="tx-sidebar-auth-single pt-14">
                  <img src="/img/blog/vl-blog-auth-1.4.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="tx-service-details ml-80">
            <div class="tx-block-content mb-30">
              <h3 class="tx-fs-32 tx-lineheight-32 tx-text-cmn-blck pb-20 m-0">Unpacking Trends: Technology for Tomorrow
              </h3>
              <p class="tx-text-para tx-fs-18 tx-lineheight-26 m-0">
                Stay ahead in the ever-changing world of technology with our insightful blog. We cover a <br />wide range
                of topics, including cloud computing, cybersecurity, IT infrastructure, and <br /> digital transformation.
                Whether you're looking for industry updates, expert opinions.
              </p>
            </div>

            <div class="tx-service-details-larg-img fix br-8 mb-30">
              <img class="w-100" src="/img/blog/vl-blog-large-1.1.png" alt="" />
            </div>

            <div class="tx-service-details-cat pt-24 pb-24 mb-30">
              <div class="tx-service-details-cat-single tx-service-details-cat-single-2 d-flex align-items-center">
                <span><img src="/img/blog/vl-blog-sm-1.1.png" alt="" /></span>
                <p class="tx-text-para tx-fs-16 tx-lineheight-16 m-0">Shawna Homesick</p>
              </div>
              <div class="tx-service-details-cat-single tx-service-details-cat-single-2 d-flex align-items-center">
                <span class="icon"><img src="/img/icons/vl-dt.svg" alt="" /></span>
                <p class="tx-text-para tx-fs-16 tx-lineheight-16 m-0">8/10/2024</p>
              </div>
              <div class="tx-service-details-cat-single tx-service-details-cat-single-2 d-flex align-items-center">
                <span class="icon"><img src="/img/icons/vl-tag.svg" alt="" /></span>
                <p class="tx-text-para tx-fs-16 tx-lineheight-16 m-0">It Service & Technology</p>
              </div>

              <div class="tx-service-details-cat-single tx-service-details-cat-single-2 d-flex align-items-center">
                <span class="icon"><img src="/img/icons/vl-chat.svg" alt="" /></span>
                <p class="tx-text-para tx-fs-16 tx-lineheight-16 m-0">2 Comments</p>
              </div>
            </div>

            <div class="tx-block-content mb-30">
              <h3 class="tx-fs-32 tx-lineheight-32 tx-text-cmn-blck pb-20 m-0">Ready Networks for Seamless Connectivity
              </h3>
              <p class="tx-text-para tx-fs-18 tx-lineheight-26 pb-20 m-0">
                Our blog is your destination for the latest trends and developments in IT and technology.<br /> From
                in-depth guides to emerging technologies and best practices for business growth, <br /> we aim to equip
                you with the knowledge you need to make informed decisions.
              </p>
              <p class="tx-text-para tx-fs-18 tx-lineheight-26 m-0">
                Delve into our blog for valuable insights into the future of technology and innovation. We <br /> simplify
                complex topics, providing expert advice on everything from automation.
              </p>
            </div>

            <div class="tx-block-quote tx-gray-bg-4 br-8 mb-30 p-relative z-index-1 fix">
              <p class="tx-text-para tx-fs-18 tx-lineheight-26 m-0">
                In a fast-paced digital world, staying informed is crucial. Our blog offers timely <br /> updates on IT
                solutions, industry challenges, and new opportunities. Whether <br /> you're a business leader, IT
                professional, or tech enthusiast, you'll find relevant.
              </p>
            </div>

            <div class="tx-block-grid pt-30 mb-14">
              <div class="tx-block-check">
                <h3><span><i class="fa-regular fa-check"></i></span> Technology Consultancy</h3>
                <h3><span><i class="fa-regular fa-check"></i></span> Managed Services</h3>
                <h3><span><i class="fa-regular fa-check"></i></span> Ayanda Machine Learning</h3>
                <h3><span><i class="fa-regular fa-check"></i></span> Cloud Computing</h3>
                <h3><span><i class="fa-regular fa-check"></i></span> Automation Solutions</h3>
                <h3><span><i class="fa-regular fa-check"></i></span> Business Innovation</h3>
              </div>
            </div>

            <div class="tx-service-details-content">
              <div class="tx-block-content mb-30">
                <h3 class="tx-fs-32 tx-lineheight-32 tx-text-cmn-blck pb-20 m-0">Reliable Networks for Critical
                  Operations</h3>
                <p class="tx-text-para tx-fs-18 tx-lineheight-26 m-0">
                  Explore our blog for a deep dive into the world of IT services and digital innovation. We <br /> provide
                  valuable content on topics like cloud services, cybersecurity, data analytics.
                </p>
              </div>

              <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                  <div class="tx-service-details-sm fix br-8 mb-30">
                    <img class="w-100" src="/img/studies/vl-case-studies-sm-1.2.png" alt="" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="tx-service-details-content mb-30">
                    <p class="tx-text-para tx-fs-18 tx-lineheight-26 pb-24 m-0">
                      Cybersecurity, data analytics, & software development. With insights from industry experts and
                      real-world examples, our blog helps you stay informed, inspired, and <br /> ready for the future
                      services.
                    </p>

                    <div class="tx-service-details-content-check tx-service-details-content-check-bold">
                      <ul>
                        <li>
                          <span><i class="fa-regular fa-check"></i></span> Software Development
                        </li>
                        <li>
                          <span><i class="fa-regular fa-check"></i></span> AIand Machine Learning
                        </li>
                        <li>
                          <span><i class="fa-regular fa-check"></i></span> Digital Transformation
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-lg-8">
                <div class="tx-blog-tags mb-30">
                  <h3 class="tx-fs-24 tx-lineheight-24 tx-text-cmn-blck m-0 mr-15">Our Tags:</h3>
                  <div class="tx-blog-tag">
                    <ul>
                      <li>
                        <a href="#"><span>#</span>It Service</a>
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
              </div>
              <div class="col-lg-4">
                <div class="tx-blog-share mb-30">
                  <h3 class="tx-fs-24 tx-lineheight-24 tx-text-cmn-blck m-0 mr-15">Share:</h3>
                  <div class="tx-sidebar-social tx-sidebar-social-2">
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

            <div class="tx-blog-comments">
              <h3 class="tx-fs-24 tx-lineheight-24 tx-text-cmn-blck pb-30 m-0">Blog Comments (2)</h3>
              <!-- single comments -->
              <div class="tx-blog-single-comment tx-gray-bg-4 br-8 mb-30">
                <div class="tx-blog-single-auth pb-16">
                  <div class="tx-blog-single-auth-thumb">
                    <div class="tx-blog-single-auth-thumb-1">
                      <img src="/img/blog/vl-blog-cmt-1.1.png" alt="" />
                    </div>
                    <div class="tx-blog-single-auth-thumb-content">
                      <h3 class="tx-fs-24 tx-lineheight-24 tx-text-cmn-blck m-0">Mercedes Stiedemann</h3>
                      <p class="tx-text-para m-0">8/10/2024</p>
                    </div>
                  </div>

                  <div class="tx-blog-single-auth-share">
                    <div class="tx-blog-reply">
                      <h3 class="tx-fs-18 tx-lineheight-18 tx-text-cmn-blck m-0"><img class="mr-5"
                          src="/img/icons/vl-replay.svg" alt="" /><a href="#">Reply</a></h3>
                    </div>
                  </div>
                </div>
                <div class="tx-blog-single-comment-desc">
                  <p class="tx-text-para tx-fs-18 tx-lineheight-26 m-0">
                    We value your thoughts and feedback! Join the conversation by sharing your <br /> insights, opinions,
                    and questions in the comments section below. Your voice <br /> matters to us, & we’re excited to hear
                    what you think about the topics we cover.
                  </p>
                </div>
              </div>
              <!-- single comments -->
              <div class="tx-blog-single-comment tx-gray-bg-4 br-8 mb-30 ml-30">
                <div class="tx-blog-single-auth pb-16">
                  <div class="tx-blog-single-auth-thumb">
                    <div class="tx-blog-single-auth-thumb-1">
                      <img src="/img/blog/vl-blog-cmt-1.2.png" alt="" />
                    </div>
                    <div class="tx-blog-single-auth-thumb-content">
                      <h3 class="tx-fs-24 tx-lineheight-24 tx-text-cmn-blck m-0">Mr. Adrian Senger</h3>
                      <p class="tx-text-para m-0">8/10/2024</p>
                    </div>
                  </div>
                  <div class="tx-blog-single-auth-share">
                    <div class="tx-blog-reply">
                      <h3 class="tx-fs-18 tx-lineheight-18 tx-text-cmn-blck m-0"><img class="mr-5"
                          src="/img/icons/vl-replay.svg" alt="" /> <a href="#">Reply</a></h3>
                    </div>
                  </div>
                </div>
                <div class="tx-blog-single-comment-desc">
                  <p class="tx-text-para tx-fs-18 tx-lineheight-26 m-0">
                    Have something to add? We encourage open discussions and would love to <br /> hear your perspective!
                    Share your thoughts, experiences, or ask questions in <br /> the comments, and let’s learn from each
                    other to build a community.
                  </p>
                </div>
              </div>
            </div>

            <div class="tx-blog-reply-2 tx-gray-bg-4 br-8">
              <h3 class="tx-fs-24 tx-lineheight-24 tx-text-cmn-blck pb-16 m-0">Leave a Reply</h3>
              <p class="tx-text-para tx-fs-18 tx-lineheight-28 pb-30 m-0">Provide clear contact information, including
                phone number, email, and address.</p>
              <div class="tx-blog-reply-form">
                <div class="row">
                  <div class="col-lg-6 mb-20">
                    <input type="text" placeholder="First Name" />
                  </div>
                  <div class="col-lg-6 mb-20">
                    <input type="text" placeholder="Last Name" />
                  </div>
                  <div class="col-lg-12 mb-30">
                    <textarea name="message" id="message" placeholder="Message"></textarea>
                  </div>
                  <div class="col-lg-4">
                    <div class="tx-about-inner-btn">
                      <button class="tx-iner-btn">Send Now<span><i class="fa-light fa-arrow-right"></i></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Blog Details End ================= -->

  <!-- ================= Blog section start ================= -->
  <section class="tx-service-area pt-70 pb-70">
    <div class="container">
      <h2 class="tx-text-cmn-blck text-center tx-fs-44 tx-lineheight-44 mb-60">View More Blog</h2>
      <div class="row">
        <!-- single blog item -->
        <div class="col-lg-6">
          <div class="tx-single-blog-item tx-single-blog-item-3 inner-blog mb-30">
            <div class="tx-single-blog-img tx-single-blog-img-4 br-8 fix p-relative">
              <a href="{{ route('second', ['blogs', 'single']) }}"><img class="w-100" src="/img/blog/vl-blog-4.1.png"
                  alt="" /></a>
            </div>
            <div class="tx-single-blog-4 p-relative z-index-1">
              <div class="tx-single-blog-right-arow">
                <a href="{{ route('second', ['blogs', 'single']) }}"><i class="fa-light fa-arrow-right"></i></a>
              </div>
              <div class="tx-single-blog-meta">
                <!-- single metabox -->
                <div class="tx-single-blog-meta-box mr-16">
                  <div class="tx-single-blog-meta-box-icon mr-4">
                    <span><img src="/img/icons/vl-calender-3.1.svg" alt="" /></span>
                  </div>
                  <div class="tx-single-blog-meta-box-content">
                    <a href="#">10 October 2024</a>
                  </div>
                </div>
                <!-- single metabox -->
                <div class="tx-single-blog-meta-box mr-16">
                  <div class="tx-single-blog-meta-box-icon mr-4">
                    <span><img src="/img/icons/vl-user-3.2.svg" alt="" /></span>
                  </div>
                  <div class="tx-single-blog-meta-box-content">
                    <a href="#">Shakib Mahmud</a>
                  </div>
                </div>
              </div>
              <div class="tx-single-blog-content tx-single-blog-content-4 p-relative z-index-1">
                <h3 class="tx-single-blog-title tx-single-blog-title-4 pt-18 pb-12"><a
                    href="{{ route('second', ['blogs', 'single']) }}">Your Trusted Partner in Technology
                    Transformation</a></h3>
                <p class="pb-24">
                  Looking to stay ahead in the fast-paced world technology?<br /> Our blog offers in-depth articles, case
                  studies, & thought.
                </p>
                <a href="{{ route('second', ['blogs', 'single']) }}" class="tx-readmore">Read More <span><i
                      class="fa-regular fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>

        <!-- single blog item -->
        <div class="col-lg-6">
          <div class="tx-single-blog-item tx-single-blog-item-3 inner-blog mb-30">
            <div class="tx-single-blog-img tx-single-blog-img-4 br-8 fix p-relative">
              <a href="{{ route('second', ['blogs', 'single']) }}"><img class="w-100" src="/img/blog/vl-blog-4.2.png"
                  alt="" /></a>
            </div>
            <div class="tx-single-blog-4 p-relative z-index-1">
              <div class="tx-single-blog-right-arow">
                <a href="{{ route('second', ['blogs', 'single']) }}"><i class="fa-light fa-arrow-right"></i></a>
              </div>
              <div class="tx-single-blog-meta">
                <!-- single metabox -->
                <div class="tx-single-blog-meta-box mr-16">
                  <div class="tx-single-blog-meta-box-icon mr-4">
                    <span><img src="/img/icons/vl-calender-3.1.svg" alt="" /></span>
                  </div>
                  <div class="tx-single-blog-meta-box-content">
                    <a href="#">10 October 2024</a>
                  </div>
                </div>
                <!-- single metabox -->
                <div class="tx-single-blog-meta-box mr-16">
                  <div class="tx-single-blog-meta-box-icon mr-4">
                    <span><img src="/img/icons/vl-user-3.2.svg" alt="" /></span>
                  </div>
                  <div class="tx-single-blog-meta-box-content">
                    <a href="#">Shakib Mahmud</a>
                  </div>
                </div>
              </div>
              <div class="tx-single-blog-content tx-single-blog-content-4 p-relative z-index-1">
                <h3 class="tx-single-blog-title tx-single-blog-title-4 pt-18 pb-12"><a
                    href="{{ route('second', ['blogs', 'single']) }}">The Latest in Tech: News, Tips, and Insights</a>
                </h3>
                <p class="pb-24">
                  Our blog is your go-to source for expert opinions practical <br /> tips the latest industry updates from
                  digital transformation.
                </p>
                <a href="{{ route('second', ['blogs', 'single']) }}" class="tx-readmore">Read More <span><i
                      class="fa-regular fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Blog section End ================= -->
@endsection
