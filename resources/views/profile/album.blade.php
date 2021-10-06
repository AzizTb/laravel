@extends('layouts.master')

@section('judul')
    Album
@endsection

@section('content')
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">

            @for ($i = 1; $i <= 10; $i++)

                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                            <h2 class="fs-4 fw-bold">Fresh new layout</h2>
                            <p class="mb-0">With Bootstrap 5, we've created a fresh new layout for this template!</p>
                        </div>
                    </div>
                </div>

            @endfor

        </div>
    </div>

    <a class="btn btn-primary btn-lg" href="{{ route ('index') }}">Index</a>
@endsection
