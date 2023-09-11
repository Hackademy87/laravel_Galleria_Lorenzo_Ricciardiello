<x-layout>


<br>
<br>

<video class="video-bg" src="/index.mp4" autoplay muted loop></video>



<!-- INIZIO GRID -->

<header style="position: relative; z-index:99;" class='contenitore my-5'>
    <div class="galleria">
      <figure class="galleria__elemento galleria__elemento--1">
      </figure>

      <figure class="galleria__elemento galleria__elemento--2">
      </figure>

      <figure class="galleria__elemento galleria__elemento--3">
      </figure>

      <figure class="galleria__elemento galleria__elemento--4">
      </figure>

      <figure class="galleria__elemento galleria__elemento--5">
      </figure>

      <figure class="galleria__elemento galleria__elemento--6">
      </figure>

    </div>

  </div>

  </header>


  <!-- FINE GRID -->







    <div class="container">

        <div class="row">

            @foreach($products as $product)

            <div class="col-12 col-md-3">

            <a style="text-decoration: none;" href="{{route('product.show',$product)}}"><x-cards  :product=$product></x-cards></a>

            </div>

            @endforeach

        </div>

    </div>



</x-layout>
