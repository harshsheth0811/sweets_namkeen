@extends('A_layouts.details')

@push('myTitle')
    <title>this is home page</title>
@endpush

@section('main-section')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Sample Inner Page</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Sample Inner Page</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->

<section class="sample-page">
  <div class="container" data-aos="fade-up">

    

  </div>
</section>

</main><!-- End #main -->
@endsection

