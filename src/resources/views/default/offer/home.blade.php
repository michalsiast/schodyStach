@foreach($items as $item)
    <div class="swiper-slide">
        <div class="news-card-items style-2">
            <div class="news-image bg-cover" style="background-image: url({{ renderImage($item->galleryCover(), 400, 300, 'cover') }});"></div>
            <div class="news-content">
                <h3>
                    <a href="{{route('realization.index')}}">{{$item->title}}</a>
                </h3>
                <p>
                    {!! $item->lead !!}
                </p>
                <a href="{{route('realization.index')}}" class="link-btn">
                    Zobacz galerię <i class="far fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
@endforeach
