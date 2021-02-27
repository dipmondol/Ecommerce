@extends('master')
@section('mainContent')
<div class="jumbotron jumbotron-image color-grey-light" style="background-image: url('https://www.mercedes-benzsouthwest.co.uk/wp-content/uploads/2017/06/Dream-Car1.jpg');
 height: 400px; width:60%; margin: 0 20%; margin-top:10px;"

 >
    <div class="mask rgba-black-strong d-flex align-items-center h-100">
      <div class="container text-center white-text py-5">

      </div>
    </div>
  </div>

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
  <div class="container">




    <!--Section: Block Content-->
    <section>

      <h4 class="text-center mt-4 mb-5"><strong>Cars</strong></h4>

      <!-- Grid row -->
      <div class="row">

        @foreach ($items as $item)
        <div class="col-md-4 mb-5">

            <!-- Card -->
            <div class="card">

              <div class="view zoom overlay">
                <img class="img-fluid w-100"
                  src="{{asset($item->image_1)}}" alt="Sample">
                <a href="{{asset('/show-item/'.$item->id)}}">
                  <div class="mask">
                    <img class="img-fluid w-100"
                      src="{{asset($item->image_1)}}" >
                    <div class="mask rgba-black-slight"></div>
                  </div>
                </a>
              </div>

              <div class="card-body text-center pt-4">

                <h5>{{$item->name}}</h5>
                <p class="mb-2 text-muted text-uppercase small">{{$item->brand}}</p>

                <hr>
                <p><span class="mr-1"><strong>${{$item->price}}</strong></span></p>

                <a href="{{asset('/count-cart-item/'.$item->id)}}"><button type="button" class="btn btn-primary btn-sm mr-1 mb-2"><i
                    class="fas fa-shopping-cart pr-2"></i>Add to cart</button></a>
                    <a href="{{asset('/show-item/'.$item->id)}}"><button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                        class="fas fa-info-circle pr-2"></i>Details</button></a>



              </div>

            </div>
            <!-- Card -->

          </div>
        @endforeach
        <!-- Grid column -->


      </div>
      <!-- Grid row -->

    </section>
    <!--Section: Block Content-->





  

  </div>
</main>
<!--Main layout-->

  @endSection
