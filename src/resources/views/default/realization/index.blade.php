@extends('default.layout')
@section('content')
    <div class="breadcrumb-wrapper section-padding bg-cover"
         style="background-image: url('{{asset('images/schodyloftowe.jpg')}}');">
        <div class="container">
            <div class="page-heading">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Galeria</h1>
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
                        Galeria
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="gallery mt-11 mb-11 section-padding">
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                    <div class="col-lg-4 pb-4" >
                    <a href="{{route('realization.show.' .$item->id)}}">
                        <img style="width: 100%; height: 400px; object-fit: cover" src="{{renderImage($item->galleryCover(), 600, 600, 'cover')}}" alt="">
                    </a>
                    <a href="{{route('realization.show.' .$item->id)}}">
                        <div class="featured-title">
                            <h5 class="text-center mt-2">{{$item->title}}</h5>
                        </div>
                    </a>
            </div>
            @endforeach
        </div>
    </div>
    </div>

@endsection
