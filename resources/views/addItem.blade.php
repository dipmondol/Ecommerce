@extends('master')
@section('mainContent')
<div class="jumbotron color-grey-light mt-70">
  <div class="d-flex align-items-center h-100">
    <div class="container text-center py-5">
      <h3 class="mb-0">Add Item</h3>
    </div>
  </div>
</div>

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
<div class="container">

  <!--Grid row-->
  <div class="row d-flex justify-content-center">

    <!--Grid column-->
    <div class="col-md-6">
      @if(session()->has('message-success'))
      <div class="alert alert-success mb-3 background-success" role="alert">
        {{ session()->get('message-success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif(session()->has('message-danger'))
      <div class="alert alert-danger mb-3 background-danger">
        {{ session()->get('message-danger') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <!--Section: Content-->
      <section class="mt-4 mb-5">

        {{ Form::open(['class' => '', 'files' => true, 'url' => 'store-item', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'autocomplete' => 'off']) }}



            <div class="md-form md-outline mt-0">
              <input type="text" name="brand" id="defaultForm-email2" class="form-control">
              <label data-error="wrong" data-success="right" for="defaultForm-email2">Brand</label>
            </div>
            <div class="md-form md-outline mt-0">
              <input type="text" name="model" id="defaultForm-email2" class="form-control">
              <label data-error="wrong" data-success="right" for="defaultForm-email2">Model</label>
            </div>
            <div class="md-form md-outline mt-0">
              <input type="text" name="price" id="defaultForm-email2" class="form-control">
              <label data-error="wrong" data-success="right" for="defaultForm-email2">Price</label>
            </div>


          <div class="form-row">
            <div class="col">
              <div class="md-form md-outline mt-0">
                <input type="text" name="stock" id="materialRegisterFormFirstName" class="form-control">
                <label for="materialRegisterFormFirstName">stock</label>
              </div>
            </div>
            <div class="col">
              <div class="md-form md-outline mt-0">
                <input type="text" name="color" id="materialRegisterFormLastName" class="form-control">
                <label for="materialRegisterFormLastName">color</label>
              </div>
            </div>
          </div>
          <div class="file-field">
            <div class="btn btn-primary btn-sm float-left">
              <span>Choose image</span>
              <input type="file" name="image_1">
            </div>
            <div class="file-path-wrapper">
              <input class="form-control file-path validate" type="text" placeholder="Upload a image">
            </div>
          </div>
          <div class="file-field">
            <div class="btn btn-primary btn-sm float-left">
              <span>Choose image</span>
              <input type="file" name="image_2">
            </div>
            <div class="file-path-wrapper">
              <input class="form-control file-path validate" type="text" placeholder="Upload a image">
            </div>
          </div>
          <div class="file-field">
            <div class="btn btn-primary btn-sm float-left">
              <span>Choose image</span>
              <input type="file" name="image_3">
            </div>
            <div class="file-path-wrapper">
              <input class="form-control file-path validate" type="text" placeholder="Upload a image">
            </div>
          </div>
          <div class="file-field">
            <div class="btn btn-primary btn-sm float-left">
              <span>Choose image</span>
              <input type="file" name="image_4">
            </div>
            <div class="file-path-wrapper">
              <input class="form-control file-path validate" type="text" placeholder="Upload a image">
            </div>
          </div>
          <div class="md-form md-outline">
            <textarea id="form76" name="des" class="md-textarea form-control" rows="4"></textarea>
            <label for="form76">Additional information</label>
          </div>







        <div class="text-center mb-2">

          <button type="submit" class="btn btn-primary mb-4">Submit</button>
          {{ Form::close()}}
          <hr class="mt-4">


        </div>

      </section>
      <!--Section: Content-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->


</div>
</main>
<!--Main layout-->

@endSection
