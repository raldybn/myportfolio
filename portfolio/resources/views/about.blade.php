@extends('layouts.main')

@section('content')
<section class="about" id="about">
  <div class="about-container">
    <h1>ABOUT ME</h1>
    <div class="about-content">
      <div class="about-bg">
        <img src="img/raldy2.png" alt="" />
          <ul>
            <br>
            <li>Name : <span>Petrus Reynaldy Belo</span></li>
            {{-- <li>Phone : <span>25 Years Old</span></li> --}}
            <br>
            <li>E-Mail : <span>raldybelo@gmail.com</span></li>
            <br>
            <li>City : <span>DKI Jakarta</span></li>
            <br>
            <li>Nationality : <span>Indonesia</span></li>
          </ul>
      </div>
        <div class="about-desc">
          <h2>Front End Developer</h2>
          <br>
          <p>Enthusiastic and skilled Web Developer with 1+ years of experience in designing,  developing, and maintaining high-quality websites and web applications. <br> Proficient in HTML, CSS,  JavaScript, PHP and various frameworks like Laravel and NEXT.js.
          <br> Expertise in building responsive and user-friendly interfaces,  ensuring cross-browser compatibility, and optimizing website performance. <br> Possess strong problem-solving and analytical skills, coupled with excellent communication and teamwork abilities. <br> Eager to contribute expertise to a dynamic team and take on challenging projects.</p>
        </div>
      <br>
      <br>
      <div class="skills-data">
          <h2 style="font-size: 2.4rem">My Skills</h2>
          <br>
              <p>HTML</p>
              <br>
              <div class="persentage">
                <div class="skills html">90%</div>
              </div>
              <br>
              <p>CSS</p>
              <br>
              <div class="persentage">
                <div class="skills css">95%</div>
              </div>
              <br>
              <p>JavaScript</p>
              <br>
              <div class="persentage">
                <div class="skills js">65%</div>
              </div>
              <br>
              <p>PHP</p>
              <br>
              <div class="persentage">
                <div class="skills php">60%</div>
              </div>
              <br>
      </div>
    </div>
  </div>
  </section>
@endsection