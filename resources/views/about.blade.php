@extends('layouts.app')
@section('content')
<style>
#hero{
    background: none;
    /* background-color: #000000; */
    background-color: rgba(24,29,56,255);
}

@media only screen and (max-width:900px) {
  .offset-3{
  margin-left: 4rem;
}
.ss{
    margin-left: 4rem;
margin-top: 2rem;
}

.ss1{
    margin-left: 1.5rem;
margin-top: 2rem;
}
.txt{
width: 100%!important;
margin-left: -2rem!important;
text-align: center!important;
}
.mtc{
    margin-top: -3rem!important;
}
.mtc1{
    margin-top:-59rem!important;
}
.mlc{
    margin-left: 7%!important;
    /* width: 100%; */
}
.mlc1{
    margin-left: 5%!important;
    /* margin-top:-29rem!important; */

    /* width: 100%; */
}
.mlc2{
    margin-top:-30rem!important;
}
.mlc-31{
    margin-left: 0!important;
}
.img1{
    width: 100%!important;
    height: 14rem!important;
}
}


</style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix mt-10" style="margin-top:-3rem">


    <header class="section-header">
        <h3 style="color: white;">from small beginnings...
        </h3>
        <p style="color: white;"> <b>In January 2022, three sports nuts met to discuss many things sports related. One was a professional sportsman, one was an amateur coach, and one was a sports fan.</b></p>
            <div class="row">
<div class="col-md-2 offset-3">

    <img src="assets/images/alex_resized.png" alt="" class="img-fluid" >
</div>
<div class="col-md-2 ss">
    <img src="assets/images/paul_resized.png" alt="" class="img-fluid" >
</div>
    <div class="col-md-2 ss">
    <img src="assets/images/zaph_resized.png" alt="" class="img-fluid">

</div>
</div>


<h3 style="color: white" class="pt-5">...a big idea </h3>
<p style="color: white;"> <b>Two weeks later they were joined by two more sports nuts,along with a technical propellor head,and they started the same discussion.</b></p>



    <div class="row">
        <div class="col-md-2 offset-3">

            <img src="assets/images/duffy_resized.png" alt="" class="img-fluid" >
        </div>
        <div class="col-md-2 ss">
            <img src="assets/images/lee_resized.png" alt="" class="img-fluid" >
        </div>
            <div class="col-md-2 ss">
            <img src="assets/images/amaresh_resized.png" alt="" class="img-fluid" >

        </div>
        </div><br>

<div class="container ">
        <div class="row pt-5">
<div class="col-md-7 offset-1">
    <div class="row">
        <div class="col-md-3 ss1">

            <img src="assets/images/duffy_resized.png" alt="" class="img-fluid" >
        </div>
        <div class="col-md-3 ss1">
            <img src="assets/images/lee_resized.png" alt="" class="img-fluid" >
        </div>
            <div class="col-md-3 ss1">
            <img src="assets/images/amaresh_resized.png" alt="" class="img-fluid" >

        </div>


</div><br>
<div class="txt" style="color: white;width:72%;">
<b>One sports nut had been to an NFT conference and was telling everyone about selling monkey pictures and going to the moon. None of the sports nuts were interested in the monkeys or going to the moon - the sportman said this hurts more than a concussion.</b></div><br>

<div class="txt" style="color: white;width:72%;" class="mt-10">
   <b>The techie propellor head said there must be an app to help with concussion and guess what?</b>
</div><br>

<div class="row">
    <div class="col-md-3 ss1">

        <img src="assets/images/alex_resized.png" alt="" class="img-fluid" >
    </div>
    <div class="col-md-3 ss1">
        <img src="assets/images/paul_resized.png" alt="" class="img-fluid" >
    </div>
        <div class="col-md-3 ss1">
        <img src="assets/images/zaph_resized.png" alt="" class="img-fluid">

    </div>

</div>

</div>
<div class="col-md-4 mlc-31" style="margin-bottom: -3rem;margin-left: -4rem;">
    <img src="assets/images/ice screen.png" alt="" class="img-fluid" style="height: 33rem" >

</div>
<div style="color: white;text-align:center;margin-top:128px;">
    <b>There wasn't.<br> So the friends decided to go on a journey and build something marvellous to help the sports world.</b></div>

    <div>
        <img src="assets/images/playersinc logo v2.png" class="adj img-fluid" style="height: 45%;display: block;
        margin-left: auto;
        margin-right: auto;">
    </div>

        </div>
</div>




<div class="mtc " style="margin-top: -14rem;">
    <div class="row pt-5">
<div class="col-md-3">
    <img class="mlc" src="assets/images/playersinc sam.png" class=" img-fluid" style="margin-left:28%;height:40%">


</div>
<div class="col-md-6 mt-10">
<p class="mtc1" style="color:white;margin-top:10rem;font-size:17px"><b>The sportsman said "I need some stuff for my testimonial",
    so we built him an app,gave him a t-shirt and made him some NFTs.</b></p>
<p style="color:white;font-size:17px"><b>The coach said "I want something for my players", so we built him an app, gave him a t-shirt and made him lots of NFTs.</b></p>
<p style="color:white;font-size:17px"><b>The propellor head collapsed exhausted!! And so was born Fans Inc - the home of  Players inc.</b></p>
</div>
<div class="col-md-3 mlc2">
    <img class="mlc1" src="assets/images/alex page front.png" class="adj img-fluid" style="margin-left: -35%;height:40%">


</div>
    </div>
</div>




<div class=" container" style="margin-top: -59rem;">
    <div class="row pt-5">
        {{-- <h3 style="color:white;text-align:start">Players inc product is a grassroots<br> application aimed to deliver:</h3> --}}
<div class="col-md-6">
    <h3 style="color:white;text-align:start;font-size:27px">Players inc product is a grassroots application aimed to deliver:</h3>

   <address style="color:white;"><b> A secure digital link for institutions to develop and identify suitable talent as they move through their career and geographies.</b></address>

   <address style="color:white;"><b> A natural showcase that a player can build,control and distribute as they apply for new schools, colleges, universities and clubs.</b>  </address>


<address style="color:white;"><b>The ability to prepare athletes for their journey, giving guidance, and mentoring throughout their pathway. Being an app they can depend on for knowledge, focus and direction. </b> </address>

<address style="color:white;">
    <b> An avenue for players to have a digital listening ear and mentor to help through the difficulties of their sporting life.</b>
</address>
<address style="color:white;">
    <b> Data driven conversations and decisions can be made on real evidence, saving time and effort of reproving athletic potential</b>

</address>
</div>
<div class="col-md-6">
    <img src="assets/images/showcase.png" class="adj img-fluid" >

</div>

    </div>
</div>

<div class=" container" style="margin-top: 4rem;color:white;text-align:center">


<b>ALL THIS WHILST HAVING FUN AND COLLECTING NFTS</b>

</div>


<div class=" container" style="margin-bottom: -8rem;color:white;text-align:center">


    <img src="assets/images/groupimage.png" class="adj img1 img-fluid" style="height: 23rem;">


    </div>
      </header>



  </section><!-- End Hero Section -->


@endsection
