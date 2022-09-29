@extends('layouts.app')
@section('content')

<style>
.adj{
    width: 100%;
        height: auto;
        /* margin-bottom: 13rem; */
}


</style>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">

      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        {{-- <img src="assets/img/hero-img.svg" alt="" class="img-fluid"> --}}
      </div>
      {{-- class="img-fluid"  --}}
      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <img src="assets/images/fansinc transparent gradient.png" class="adj img-fluid">
        <h3 style="text-align: center;color:white">THE HOME OF</h3>
        <div>
            <img src="assets/images/playersinc logo v2.png" style="display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;">
                    <h3 style="text-align: center;color:white"><b>You control your game</b></h3>

        </div>
      </div>

    </div>
  </section><!-- End Hero Section -->

@endsection
