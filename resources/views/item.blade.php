@extends('master')
@section('mainContent')
    <div class="jumbotron color-grey-light mt-70">
      <div class="d-flex align-items-center h-100">
        <div class="container text-center py-5">
          <h3 class="mb-0">Product page</h3>
        </div>
      </div>
    </div>

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Block Content-->
      <section class="mb-5">

        <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">

            <div id="mdb-lightbox-ui"></div>

            <div class="mdb-lightbox">

              <div class="row product-gallery mx-1">

                <div class="col-12 mb-0">
                @if(isset($item->image_1))
                  <figure class="view overlay rounded z-depth-1 main-img" style="max-height: 600px;">
                    <a href="{{asset($item->image_1)}}"
                      data-size="710x823">
                      <img src="{{asset($item->image_1)}}"
                        class="img-fluid z-depth-1" style="margin-top: -90px;">
                    </a>
                  </figure>
                  @endif
                  @if(isset($item->image_2))
                  <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                    <a href="{{asset($item->image_2)}}"
                      data-size="710x823">
                      <img src="{{asset($item->image_2)}}"
                        class="img-fluid z-depth-1">
                    </a>
                  </figure>
                  @endif
                  @if(isset($item->image_3))
                  <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                    <a href="{{asset($item->image_3)}}"
                      data-size="710x823">
                      <img src="{{asset($item->image_3)}}"
                        class="img-fluid z-depth-1">
                    </a>
                  </figure>
                  @endif
                  @if(isset($item->image_4))
                  <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                    <a href="{{asset($item->image_4)}}"
                      data-size="710x823">
                      <img src="{{asset($item->image_4)}}"
                        class="img-fluid z-depth-1">
                    </a>
                  </figure>
                  @endif
                </div>
                <div class="col-12">
                  <div class="row">
                  @if(isset($item->image_1))
                    <div class="col-3">
                      <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                        <img src="{{asset($item->image_1)}}"
                          class="img-fluid">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>
                    @endif
                    @if(isset($item->image_2))
                    <div class="col-3">
                      <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                        <img src="{{asset($item->image_2)}}"
                          class="img-fluid">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>
                    @endif
                    @if(isset($item->image_3))
                    <div class="col-3">
                      <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                        <img src="{{asset($item->image_3)}}"
                          class="img-fluid">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>
                    @endif
                    @if(isset($item->image_4))
                    <div class="col-3">
                      <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                        <img src="{{asset($item->image_4)}}"
                          class="img-fluid">
                        <div class="mask rgba-white-slight"></div>
                      </div>
                    </div>
                    @endif

                  </div>
                </div>
              </div>

            </div>

          </div>
          <div class="col-md-6">

            <h5>{{$item->name}}</h5>
            <p class="mb-2 text-muted text-uppercase small">{{$item->brand}}</p>
            {{-- <ul class="rating">
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-primary"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-primary"></i>
              </li>
            </ul> --}}
            <p><span class="mr-1"><strong>${{$item->price}}</strong></span></p>
            <p class="pt-1">{{$item->description}}</p>
            <div class="table-responsive">
              <table class="table table-sm table-borderless mb-0">
                <tbody>
                  {{-- <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
                    <td>Shirt 5407X</td>
                  </tr> --}}
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
                    <td>{{$item->color}}</td>
                  </tr>
                  <tr>
                    <th class="pl-0 w-25" scope="row"><strong>Stock</strong></th>
                    <td>{{$item->stock}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <div class="table-responsive mb-2">
              <table class="table table-sm table-borderless">
                <tbody>
                  <tr>
                    <td class="pl-0 pb-0 w-25">Quantity</td>
                    {{-- <td class="pb-0">Select size</td> --}}
                  </tr>
                  <tr>
                    <td class="pl-0">
                      <div class="def-number-input number-input safari_only mb-0">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                          class="minus"></button>
                        <input class="quantity" min="0" max="{{$item->stock}}" name="quantity" value="1" type="number">
                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                          class="plus"></button>
                      </div>
                    </td>
                    {{-- <td>
                      <div class="mt-1">
                        <div class="form-check form-check-inline pl-0">
                          <input type="radio" class="form-check-input" id="small" name="materialExampleRadios" checked>
                          <label class="form-check-label small text-uppercase card-link-secondary"
                            for="small">Small</label>
                        </div>
                        <div class="form-check form-check-inline pl-0">
                          <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                          <label class="form-check-label small text-uppercase card-link-secondary"
                            for="medium">Medium</label>
                        </div>
                        <div class="form-check form-check-inline pl-0">
                          <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                          <label class="form-check-label small text-uppercase card-link-secondary"
                            for="large">Large</label>
                        </div>
                      </div>
                    </td> --}}
                  </tr>
                </tbody>
              </table>
            </div>
            {{-- <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button> --}}
          <a href="{{asset('/count-cart-item/'.$item->id)}}"><button type="button" class="btn btn-light btn-md mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to
            cart</button></a>

          </div>
        </div>

      </section>
      <!--Section: Block Content-->

      <!-- Classic tabs -->

      <!-- Classic tabs -->

      <hr>

      <!--Section: Block Content-->
      <section class="text-center">

        <h4 class="text-center my-5"><strong>Related products</strong></h4>

        <!-- Grid row -->
        <div class="row">

          @foreach ($items->take(4) as $item)
          <div class="col-md-6 col-lg-3 mb-5">

            <!-- Card -->
            <div class="">

              <div class="view zoom overlay z-depth-2 rounded">
                <img class="img-fluid w-100"
                  src="{{asset($item->image_1)}}" alt="Sample">
                <a href="{{asset('/show-item/'.$item->id)}}">
                  <div class="mask">
                    <img class="img-fluid w-100"
                      src="{{asset($item->image_1)}}">
                    <div class="mask rgba-black-slight"></div>
                  </div>
                </a>
              </div>

              <div class="pt-4">

                <h5>{{$item->model}}</h5>
                <p><span><strong>${{$item->price}}</strong></span></p>

              </div>

            </div>
            <!-- Card -->

          </div>
          @endforeach





        </div>
        <!-- Grid row -->

      </section>
      <!--Section: Block Content-->

    </div>
  </main>
  <!--Main layout-->

  @endSection
