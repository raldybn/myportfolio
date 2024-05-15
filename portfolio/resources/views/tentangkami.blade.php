@extends('layouts.main')

@section('content')
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img
                          src="assets/img/testimonial-2.jpg"
                          class="img-fluid rounded b-shadow-a"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p>
                          <span class="title-s">Name: </span>
                          <span>Morgan Freeman</span>
                        </p>
                        <p>
                          <span class="title-s">Profile: </span>
                          <span>full stack developer</span>
                        </p>
                        <p>
                          <span class="title-s">Email: </span>
                          <span>contact@example.com</span>
                        </p>
                        <p>
                          <span class="title-s">Phone: </span>
                          <span>(617) 557-0089</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <span>HTML</span> <span class="pull-right">85%</span>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 85%"
                        aria-valuenow="85"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <span>CSS3</span> <span class="pull-right">75%</span>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 75%"
                        aria-valuenow="75"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">50%</span>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 50%"
                        aria-valuenow="50"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <span>JAVASCRIPT</span>
                    <span class="pull-right">90%</span>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: 90%"
                        aria-valuenow="90"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">About me</h5>
                    </div>
                    <p class="lead">
                      Curabitur non nulla sit amet nisl tempus convallis quis
                      ac lectus. Curabitur arcu erat, accumsan id imperdiet
                      et, porttitor at sem. Praesent sapien massa, convallis a
                      pellentesque nec, egestas non nisi. Nulla porttitor
                      accumsan tincidunt.
                    </p>
                    <p class="lead">
                      Mauris blandit aliquet elit, eget tincidunt nibh
                      pulvinar a. Vivamus suscipit tortor eget felis porttitor
                      volutpat. Vestibulum ac diam sit amet quam vehicula
                      elementum sed sit amet dui. porttitor at sem.
                    </p>
                    <p class="lead">
                      Nulla porttitor accumsan tincidunt. Quisque velit nisi,
                      pretium ut lacinia in, elementum id enim. Nulla
                      porttitor accumsan tincidunt. Mauris blandit aliquet
                      elit, eget tincidunt nibh pulvinar a.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">Services</h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"
                  ><i class="bi bi-briefcase"></i
                ></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Magni adipisci eaque autem fugiat! Quia, provident vitae!
                  Magni tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"
                  ><i class="bi bi-card-checklist"></i
                ></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Development</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Magni adipisci eaque autem fugiat! Quia, provident vitae!
                  Magni tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"
                  ><i class="bi bi-bar-chart"></i
                ></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Photography</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Magni adipisci eaque autem fugiat! Quia, provident vitae!
                  Magni tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"
                  ><i class="bi bi-binoculars"></i
                ></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Responsive Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Magni adipisci eaque autem fugiat! Quia, provident vitae!
                  Magni tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"
                  ><i class="bi bi-brightness-high"></i
                ></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Graphic Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Magni adipisci eaque autem fugiat! Quia, provident vitae!
                  Magni tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"
                  ><i class="bi bi-calendar4-week"></i
                ></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Marketing Services</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Magni adipisci eaque autem fugiat! Quia, provident vitae!
                  Magni tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div
      class="section-counter paralax-mf bg-image"
      style="background-image: url(assets/img/counters-bg.jpg)"
    >
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p
                  data-purecounter-start="0"
                  data-purecounter-end="450"
                  data-purecounter-duration="1"
                  class="counter purecounter"
                ></p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"
                  ><i class="bi bi-journal-richtext"></i
                ></span>
              </div>
              <div class="counter-num">
                <p
                  data-purecounter-start="0"
                  data-purecounter-end="25"
                  data-purecounter-duration="1"
                  class="counter purecounter"
                ></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p
                  data-purecounter-start="0"
                  data-purecounter-end="550"
                  data-purecounter-duration="1"
                  class="counter purecounter"
                ></p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p
                  data-purecounter-start="0"
                  data-purecounter-end="48"
                  data-purecounter-duration="1"
                  class="counter purecounter"
                ></p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Counter Section -->

</main>
@endsection