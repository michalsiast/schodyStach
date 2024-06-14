<div class="mainRotator">
    @if($rotator->arrows)
        <button class="prev"><i class="fas fa-chevron-left"></i></button>
    @endif
    <div class="mainRotator__items" id="rotator{{$rotator->id}}">
        @foreach($rotator->gallery->items as $item)
            <section class="hero-section hero-3 fix mainRotator__item" style="background-image: url('{{renderImage($item->url, 1920, 700, `fit`)}}')">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h1 class="wow fadeInUp" data-wow-delay=".3s">{{$item->name}}</h1>
                                <p class="wow fadeInUp" data-wow-delay=".5s">
                                    {!! $item->text !!}
                                </p>
                                <div class="hero-button">
                                    <a href="{{route('realization.index')}}" class="theme-btn radius-none padding-style wow fadeInUp" data-wow-delay=".7s">
                                        Zobacz galerię
                                        <i class="fas fa-long-arrow-right"></i>
                                    </a>
                                    <div class="icon-items wow fadeInUp" data-wow-delay=".9s">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="content">
                                            <p>Zadzwoń</p>
                                            <h4><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
    @if($rotator->arrows)
        <button class="next"><i class="fas fa-chevron-right"></i></button>
    @endif
</div>
@push('scripts.body.bottom')
    <script>
        $('#rotator{{$rotator->id}}').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: {{$rotator->time ?? 3000}},
            speed: {{$rotator->speed ?? 500}},
            arrows: {{$rotator->arrows ? 'true' : 'false'}},
            dots: {{$rotator->pager ? 'true' : 'false'}},
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            pauseOnHover: false
        });
    </script>
@endpush
