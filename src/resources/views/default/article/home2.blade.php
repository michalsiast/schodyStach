@php
    $counter = 1;
@endphp
@foreach($items as $item)
    @if($item->article_category_id === 2)
        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
            <div class="work-process-items @if($counter % 2 == 0) work-process-items-hover @endif">
                <span>{{ sprintf('%02d', $counter) }}</span>
                <h3>{{$item->title}}</h3>
                <p>
                    {!! $item->lead !!}
                </p>
                <div class="icon">
                    <img style="width: 40px; height: 40px;" src="{{ renderImage($item->galleryCover(), 40, 40, 'cover') }}" alt="img">
                </div>
            </div>
        </div>
        @php
            $counter++;
        @endphp
    @endif
@endforeach
