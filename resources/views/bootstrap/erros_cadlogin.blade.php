@extends('bootstrap.model')
@section("content")
    <div class="container">
        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">@lang($title)</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">@lang($message)</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <a href="{{$buttons["action"]["link"]}}" type="button" class="btn btn-primary btn-lg px-4 me-sm-3">{{$buttons["action"]["textlabel"]}}</a>
                    <a href="{{$buttons["alternative"]["link"]}}" type="button" class="btn btn-outline-secondary btn-lg px-4">{{$buttons["alternative"]["textlabel"]}}</a>
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5">
                <!-- <img src="bootstrap-docs.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy"> -->
                </div>
            </div>
        </div>
    </div>
@endsection