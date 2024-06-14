@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
<section class="about-section fix section-padding">
    <div class="container">
        <div class="about-wrapper-3">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-image">
                        <img src="{{asset('images/about_section.jpg')}}" style="height: 600px;object-fit: cover" alt="about-img">
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="about-content">
                        <div class="section-title">
                            @if(!empty($fields->subtitle_about_section))
                            <span class="wow fadeInUp">{{$fields->subtitle_about_section}}</span>
                            @endif
                            @if(!empty($fields->title_about_section))
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    {{$fields->title_about_section}}
                                </h2>
                            @endif
                        </div>
                        @if(!empty($fields->description_about_section))
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                {!! $fields->description_about_section !!}
                            </p>
                        @endif
                        <div class="about-list">
                                @if(!empty($fields->list_about_section))
                                    @php
                                        $items = str_replace(['<p>', '</p>', '<ul>', '</ul>', '<li>'], '', $fields->list_about_section);
                                        $items = explode('</li>', $items);
                                        array_pop($items);
                                        $half = ceil(count($items) / 2);
                                        $first_half = array_slice($items, 0, $half);
                                        $second_half = array_slice($items, $half);
                                    @endphp
                                    <ul class="wow fadeInUp" data-wow-delay=".7s">
                                        @foreach($first_half as $item)
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                {!! $item !!}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <ul class="wow fadeInUp" data-wow-delay=".7s">
                                        @foreach($second_half as $item)
                                            <li>
                                                <i class="fas fa-check-circle"></i>
                                                {!! $item !!}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                        </div>
                        <div class="about-button wow fadeInUp" data-wow-delay=".9s">
                            <a href="{{route('realization.index')}}" class="theme-btn radius-none padding-style">
                                Zobacz galerię
                                <i class="fas fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="work-process section-bg section-padding">
    <div class="container">
        <div class="section-title text-center">
            @if(!empty($fields->work_process_subtitle))
                <span class="wow fadeInUp">{{$fields->work_process_subtitle}}</span>
            @endif

            @if(!empty($fields->work_process_title))
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    {{$fields->work_process_title}}
                </h2>
            @endif
        </div>
        <div class="row">
            @include('default.article.home2')
        </div>
    </div>
</section>


<section class="service-section fix section-padding  bg-cover pb-0">
    <div class="container">
        <div class="service-wrapper">
            <div class="row g-4">
                <div class="col-xl-9 col-lg-12">
                    <div class="service-left">
                        <div class="section-title">
                            @if(!empty($fields->header_service_section))
                                <span class="wow fadeInUp">{{$fields->header_service_section}}</span>
                            @endif
                            @if(!empty($fields->title_service_section))
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    {{$fields->title_service_section}}
                                </h2>
                            @endif
                        </div>
                        <div class="row g-4 justify-content-center">
                            @include('default.article.home')
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 wow fadeInUp" data-wow-delay=".9s">
                        <div class="service-image bg-cover" style="background-image: url({{asset('images/service_image.jpg')}});">
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news-section section-padding fix">
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                @if (!empty($fields->offer_subtitle))
                    <span class="wow fadeInUp">{{$fields->offer_subtitle}}</span>
                @endif
                @if (!empty($fields->offer_title))
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">{{$fields->offer_title}}</h2>
                @endif
                @if (!empty($fields->offer_description))
                    {!! $fields->offer_description !!}
                @endif
            </div>
            <div class="array-button radius-none wow fadeInUp" data-wow-delay=".5s">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="swiper news-slider">
            <div class="swiper-wrapper">
                @include('default.offer.home')
            </div>
        </div>
    </div>
</section>

<section class="contact-Info-section section-padding pb-80 pt-0 fix">
    <div class="container">
        <div class="contact-info-wrapper">
            <div class="row g-0">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-image">
                        <img src="{{asset('images/contact.jpg')}}" style="height: 650px;object-fit: cover; width: 100%" alt="about-img">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-info-content">
                        @if (!empty($fields->header_contact))
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">{{$fields->header_contact}}</h2>
                        @endif
                        @if (!empty($fields->description_contact))
                            <p class="wow fadeInUp" data-wow-delay=".5s">{!! $fields->description_contact !!}</p>
                        @endif
                        <div class="contact-info-area">
                            <div class="row g-4">
                                @if(getConstField('company_person'))
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="contact-info-items">
                                        <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="content">
                                            <h3>{{ getConstField('company_name') }}</h3>
                                            <h6>{{ getConstField('company_person') }}</h6>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(getConstField('phone'))
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="contact-info-items">
                                            <div class="icon">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="content">
                                                <h3>Telefon</h3>
                                                <h6><a href="tel:{{ str_replace(' ', '', getConstField('phone')) }}" class="me-3">{{ getConstField('phone') }}</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(getConstField('email'))
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="contact-info-items">
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <h3>Email</h3>
                                                <h6><a href="mailto:{{ getConstField('email') }}" style="text-transform: lowercase" class="link">{{ getConstField('email') }}</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(getConstField('company_address') && getConstField('company_post_code') && getConstField('company_city'))
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="contact-info-items">
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content">
                                                <h3>Lokalizacja</h3>
                                                <h6>
                                                    {{ getConstField('company_address') }} <br>
                                                    {{ getConstField('company_post_code') }} {{ getConstField('company_city') }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Contact Section Start -->
<section class="contact-section-4 fix section-padding pt-80 pb-0">
    <div class="container">
        <div class="contact-wrapper-3">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-content">
                        <div class="section-title">
                            @if(!empty($fields->contact_us_header))
                                <span class="wow fadeInUp">{{ $fields->contact_us_header }}</span>
                            @endif
                            @if(!empty($fields->get_in_touch_title))
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">{{ $fields->get_in_touch_title }}</h2>
                            @endif
                        </div>
                        @include('default.form.contact_form')
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="google-map">
                        <iframe src="{{ getConstField('google_map_iframe') }}" style="border:0;" width="100%" height="700" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
