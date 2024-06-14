@foreach($items as $item)
    @if($item->article_category_id === 1)
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
        <div class="service-items mt-4">
            <div class="icon">
                <img style="width: 35px; height: 35px;" src="{{ renderImage($item->galleryCover(), 35, 35, 'cover') }}" alt="img">
            </div>
            <div class="content">
                <h3>
                    {{$item->title}}
                </h3>
                <p>
                    {!! $item->lead !!}
                </p>
            </div>
        </div>
    </div>
    @endif
@endforeach
