@extends('default.layout')
@section('content')
    <div class="breadcrumb-wrapper section-padding bg-cover"
         style="background-image: url('{{ renderImage($item->galleryCover(), 1900, 400, 'cover') }}');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s"> {{$item->title}}</h1>
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="/">
                            Strona główna
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        {{$item->title}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="gallery mt-11 mb-11 section-padding">
        <div class="container">
            <div class="row">
                @foreach($item->gallery->items as $item)
                    <div class="col-lg-4 pb-4 magnific-img">
                        <a class="image-popup-vertical-fit" href="{{renderImage($item->url, 1920, 1080, 'resize')}}">
                            <img style="width: 100%" src="{{renderImage($item->url, 600, 600, 'fit')}}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    @push('scripts.body.bottom')
        <script>
            $(document).ready(function() {
                $('.gallery').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery: {
                        enabled: true
                    },
                    image: {
                        verticalFit: true
                    }
                });
            });
        </script>
    @endpush
@endsection
