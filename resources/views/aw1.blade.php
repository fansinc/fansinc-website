@extends('layouts.app')
@section('content')
<style>
    @media only screen and (max-width:900px) {
.vid{
    margin-top: -73px
}
    .vidfit{
object-fit: cover;
width: 99%;
height: 79%;
}
}
.main-body{
    background-color:#f4f4f4;
}
</style>

<div class="container " style="margin-top: 44px;">
    <div class="row ">

        <div class="col-md-6">
            <img src="assets/images/alex waller download now.png" style="    width: 100%; /* or any custom size */
            height: 80%;
            object-fit: contain;">
        </div>
        <div class=" vid col-md-6" style="text-align: center;">
            <video controls class="vidfit">
              <source src="assets/images/fansic.mp4" type="video/mp4" >
              Your browser does not support the html video tag.
            </video> <br><br>
            {{-- <button type="submit" class="btn btn-primary align " style="margin-top: 33px;
            margin-bottom: 33px;">Coming Soon</button> --}}
            <a href="https://play.google.com/" target="_blank"><img src="assets/images/playstore.jpeg" style="width:25%;margin-right:2rem"></a>
            <a href="https://apps.apple.com/in/app/aw1-fans/id1625841261" target="_blank" ><img src="assets/images/appstore.jpeg"  style="width:25%"></a><br><br>
          <h4><b>Download Now</b></h4>
          </div>

    </div>



@endsection
