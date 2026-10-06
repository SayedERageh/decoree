@extends('layouts.app')

@section('content')

@php
    $isArabic = app()->getLocale() === 'ar';
@endphp


{{-- =========================================================
     SERVICE HERO
========================================================= --}}
<section
    class="lux-service-hero"
    @if($service->image)
        style="background-image:
            linear-gradient(
                90deg,
                rgba(5,5,5,.94),
                rgba(5,5,5,.62),
                rgba(5,5,5,.78)
            ),
            url('{{ asset('storage/' . $service->image) }}');"
    @endif
>

    <div class="lux-service-hero-grid"></div>
    <div class="lux-service-hero-glow"></div>

    <div class="container">

        <div class="lux-service-hero-content">

            <div class="lux-service-kicker">

                <span></span>

                {{ $isArabic ? 'خدماتنا' : 'OUR SERVICES' }}

                <span></span>

            </div>


            <div class="lux-service-icon">

                <i class="{{ $service->icon ?: 'bi bi-building-gear' }}"></i>

            </div>


            <h1>
                {{ $service->title }}
            </h1>


            @if($service->shortDescription)

                <p>
                    {{ $service->shortDescription }}
                </p>

            @endif


            <div class="lux-service-hero-bottom">

                <span></span>

                <strong>
                    {{ $isArabic
                        ? 'تصميم وتنفيذ باحتراف'
                        : 'DESIGN & CRAFTED WITH PRECISION' }}
                </strong>

                <span></span>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     SERVICE DETAILS
========================================================= --}}
<section class="lux-service-details">

    <div class="lux-service-orb lux-service-orb-one"></div>
    <div class="lux-service-orb lux-service-orb-two"></div>

    <div class="container">

        <div class="lux-service-layout">


            {{-- =================================================
                 MAIN CONTENT
            ================================================== --}}
            <div class="lux-service-main">

                <div class="lux-service-section-kicker">

                    <span></span>

                    {{ $isArabic
                        ? 'تفاصيل الخدمة'
                        : 'SERVICE DETAILS' }}

                    <span></span>

                </div>


                <h2>
                    {{ $service->title }}
                </h2>


                <div class="lux-service-title-line">

                    <span></span>

                    <i class="bi bi-gem"></i>

                    <span></span>

                </div>


                @if($service->shortDescription)

                    <div class="lux-service-lead">

                        <span class="lux-service-lead-mark"></span>

                        <p>
                            {{ $service->shortDescription }}
                        </p>

                    </div>

                @endif


                <div class="lux-service-description">

                    {!! $service->description !!}

                </div>

            </div>



            {{-- =================================================
                 SIDEBAR
            ================================================== --}}
            <aside class="lux-service-sidebar">


                {{-- Image --}}
                @if($service->image)

                    <div class="lux-service-sidebar-image">

                        <div class="lux-service-sidebar-image-inner">

                            <img
                                src="{{ asset('storage/' . $service->image) }}"
                                alt="{{ $service->title }}"
                            >

                            <div class="lux-service-sidebar-overlay"></div>

                        </div>


                        <span class="lux-sidebar-corner lux-sidebar-corner-tl"></span>
                        <span class="lux-sidebar-corner lux-sidebar-corner-tr"></span>
                        <span class="lux-sidebar-corner lux-sidebar-corner-bl"></span>
                        <span class="lux-sidebar-corner lux-sidebar-corner-br"></span>


                        <div class="lux-service-sidebar-label">

                            <i class="bi bi-stars"></i>

                            <span>
                                {{ $isArabic
                                    ? 'تصميم فاخر'
                                    : 'PREMIUM DESIGN' }}
                            </span>

                        </div>

                    </div>

                @endif


                {{-- Contact --}}
                <div class="lux-service-contact">

                    <div class="lux-service-contact-glow"></div>

                    <div class="lux-service-contact-icon">

                        <i class="bi bi-headset"></i>

                    </div>


                    <span class="lux-service-contact-kicker">

                        {{ $isArabic
                            ? 'هل تحتاج إلى هذه الخدمة؟'
                            : 'NEED THIS SERVICE?' }}

                    </span>


                    <h3>

                        {{ $isArabic
                            ? 'تحدث مع فريقنا'
                            : 'TALK TO OUR TEAM' }}

                    </h3>


                    <p>

                        {{ $isArabic
                            ? 'تواصل معنا لمناقشة متطلبات مشروعك والحصول على الحل المناسب.'
                            : 'Contact our team to discuss your project requirements and find the right solution.' }}

                    </p>


                    <a
                        href="{{ route('contact') }}"
                        class="lux-service-contact-btn"
                    >

                        <span>
                            {{ $isArabic
                                ? 'تواصل معنا'
                                : 'CONTACT US' }}
                        </span>

                        <i class="bi bi-arrow-up-left"></i>

                    </a>


                    <div class="lux-service-contact-line"></div>


                    <span class="lux-service-contact-label">
                        {{ $isArabic
                            ? 'فخامة تبدأ من التفاصيل'
                            : 'LUXURY BEGINS WITH DETAILS' }}
                    </span>

                </div>

            </aside>

        </div>

    </div>

</section>



{{-- =========================================================
     OTHER SERVICES
========================================================= --}}
@if($services->count() > 1)

<section class="lux-related-services">

    <div class="lux-related-services-grid"></div>

    <div class="container">

        <div class="lux-related-heading">

            <div class="lux-related-kicker">

                <span></span>

                {{ $isArabic
                    ? 'خدمات أخرى'
                    : 'OTHER SERVICES' }}

                <span></span>

            </div>


            <h2>

                {{ $isArabic
                    ? 'استكشف خدماتنا'
                    : 'EXPLORE OUR SERVICES' }}

            </h2>


            <p>

                {{ $isArabic
                    ? 'حلول مصممة بعناية لتناسب احتياجات كل مشروع.'
                    : 'Carefully crafted solutions designed around every project.' }}

            </p>

        </div>


        <div class="lux-related-services-grid-list">

            @foreach($services->where('id', '!=', $service->id)->take(3) as $item)

                <article class="lux-related-service-card">


                    {{-- Image --}}
                    <a
                        href="{{ route('services.show', $item->slug) }}"
                        class="lux-related-service-image"
                    >

                        @if($item->image)

                            <img
                                src="{{ asset('storage/' . $item->image) }}"
                                alt="{{ $item->title }}"
                                loading="lazy"
                            >

                        @else

                            <div class="lux-related-service-placeholder">

                                <i class="{{ $item->icon ?: 'bi bi-gear-wide-connected' }}"></i>

                            </div>

                        @endif


                        <div class="lux-related-service-overlay"></div>


                        <span class="lux-related-service-number">
                            0{{ $loop->iteration }}
                        </span>


                        <span class="lux-related-service-view">

                            <i class="bi bi-arrow-up-left"></i>

                        </span>

                    </a>


                    {{-- Content --}}
                    <div class="lux-related-service-content">


                        <div class="lux-related-service-icon">

                            <i class="{{ $item->icon ?: 'bi bi-gear-wide-connected' }}"></i>

                        </div>


                        <span class="lux-related-service-label">

                            {{ $isArabic
                                ? 'خدمة متخصصة'
                                : 'SPECIALIZED SERVICE' }}

                        </span>


                        <h3>
                            {{ $item->title }}
                        </h3>


                        @if($item->shortDescription)

                            <p>
                                {{ $item->shortDescription }}
                            </p>

                        @endif


                        <a
                            href="{{ route('services.show', $item->slug) }}"
                            class="lux-related-service-link"
                        >

                            <span>
                                {{ $isArabic
                                    ? 'اكتشف الخدمة'
                                    : 'EXPLORE SERVICE' }}
                            </span>

                            <i class="bi bi-arrow-left"></i>

                        </a>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>

@endif



{{-- =========================================================
     CTA
========================================================= --}}
@include('components.home.cta')



@push('styles')

<style>

/* =========================================================
   LUXURY SERVICE HERO
========================================================= */

.lux-service-hero {
    position: relative;

    min-height: 570px;

    display: flex;
    align-items: center;

    overflow: hidden;

    background-color: #080808;
    background-size: cover;
    background-position: center;

    border-bottom: 1px solid rgba(212,175,55,.12);
}

.lux-service-hero::after {
    content: "";

    position: absolute;
    inset: 0;

    background:
        radial-gradient(
            circle at 15% 50%,
            rgba(212,175,55,.10),
            transparent 28%
        ),
        linear-gradient(
            135deg,
            rgba(0,0,0,.20),
            transparent 55%
        );

    pointer-events: none;
}

.lux-service-hero-grid {
    position: absolute;
    inset: 0;

    opacity: .28;

    pointer-events: none;

    background-image:
        linear-gradient(
            rgba(255,255,255,.025) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,.025) 1px,
            transparent 1px
        );

    background-size: 60px 60px;
}

.lux-service-hero-glow {
    position: absolute;

    width: 420px;
    height: 420px;

    right: 15%;
    top: -220px;

    border-radius: 50%;

    background: rgba(212,175,55,.10);

    filter: blur(100px);

    pointer-events: none;
}


/* =========================================================
   HERO CONTENT
========================================================= */

.lux-service-hero-content {
    position: relative;
    z-index: 3;

    max-width: 950px;

    padding: 110px 0 90px;
}


.lux-service-kicker {
    display: flex;
    align-items: center;
    gap: 12px;

    margin-bottom: 22px;

    color: #d4af37;

    font-size: 9px;
    font-weight: 800;

    letter-spacing: 3px;
}

.lux-service-kicker span {
    width: 40px;
    height: 1px;

    background: #d4af37;

    box-shadow:
        0 0 10px rgba(212,175,55,.4);
}

.lux-service-kicker span:last-child {
    background:
        linear-gradient(
            90deg,
            #d4af37,
            transparent
        );
}


.lux-service-icon {
    width: 72px;
    height: 72px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 25px;

    color: #d4af37;

    font-size: 29px;

    border:
        1px solid
        rgba(212,175,55,.28);

    background:
        rgba(8,8,8,.58);

    backdrop-filter: blur(12px);

    box-shadow:
        0 0 30px
        rgba(212,175,55,.055);
}


.lux-service-hero h1 {
    max-width: 900px;

    margin: 0 0 25px;

    color: #fff;

    font-size: clamp(43px, 6vw, 78px);

    line-height: 1.05;

    font-weight: 800;

    letter-spacing: -1.5px;

    text-shadow:
        0 15px 40px rgba(0,0,0,.45);
}


.lux-service-hero p {
    max-width: 720px;

    margin: 0;

    color: rgba(255,255,255,.68);

    font-size: 17px;

    line-height: 1.95;
}


.lux-service-hero-bottom {
    display: flex;
    align-items: center;
    gap: 12px;

    margin-top: 32px;

    color: rgba(212,175,55,.65);

    font-size: 8px;
    font-weight: 800;

    letter-spacing: 2px;
}

.lux-service-hero-bottom span {
    width: 35px;
    height: 1px;

    background: rgba(212,175,55,.4);
}



/* =========================================================
   DETAILS SECTION
========================================================= */

.lux-service-details {
    position: relative;

    overflow: hidden;

    padding: 110px 0 120px;

    background:
        radial-gradient(
            circle at 8% 35%,
            rgba(212,175,55,.05),
            transparent 25%
        ),
        radial-gradient(
            circle at 95% 80%,
            rgba(255,255,255,.02),
            transparent 25%
        ),
        #080808;
}


.lux-service-orb {
    position: absolute;

    border-radius: 50%;

    filter: blur(90px);

    pointer-events: none;
}

.lux-service-orb-one {
    width: 300px;
    height: 300px;

    right: -160px;
    top: 18%;

    background: rgba(212,175,55,.055);
}

.lux-service-orb-two {
    width: 240px;
    height: 240px;

    left: -140px;
    bottom: 10%;

    background: rgba(212,175,55,.035);
}


.lux-service-layout {
    position: relative;
    z-index: 2;

    display: grid;

    grid-template-columns:
        minmax(0, 1fr)
        minmax(330px, .45fr);

    gap: 80px;

    align-items: start;
}


/* =========================================================
   MAIN CONTENT
========================================================= */

.lux-service-main {
    max-width: 850px;
}


.lux-service-section-kicker {
    display: flex;
    align-items: center;
    gap: 11px;

    margin-bottom: 18px;

    color: #d4af37;

    font-size: 9px;
    font-weight: 800;

    letter-spacing: 2.5px;
}

.lux-service-section-kicker span {
    width: 35px;
    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d4af37
        );
}

.lux-service-section-kicker span:last-child {
    background:
        linear-gradient(
            90deg,
            #d4af37,
            transparent
        );
}


.lux-service-main > h2 {
    max-width: 750px;

    margin: 0;

    color: #fff;

    font-size: clamp(34px, 4.5vw, 55px);

    line-height: 1.18;

    font-weight: 800;
}


.lux-service-title-line {
    display: flex;
    align-items: center;
    gap: 9px;

    margin: 28px 0 34px;
}

.lux-service-title-line span {
    width: 45px;
    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(212,175,55,.6)
        );
}

.lux-service-title-line span:last-child {
    background:
        linear-gradient(
            90deg,
            rgba(212,175,55,.6),
            transparent
        );
}

.lux-service-title-line i {
    color: #d4af37;

    font-size: 10px;

    text-shadow:
        0 0 15px
        rgba(212,175,55,.5);
}


/* =========================================================
   LEAD
========================================================= */

.lux-service-lead {
    position: relative;

    display: flex;

    margin-bottom: 35px;

    padding: 20px 22px;

    background:
        linear-gradient(
            135deg,
            rgba(212,175,55,.055),
            rgba(255,255,255,.015)
        );

    border:
        1px solid
        rgba(212,175,55,.12);

    border-right: 2px solid #d4af37;
}

.lux-service-lead-mark {
    position: absolute;

    top: 15px;
    bottom: 15px;

    right: 10px;

    width: 2px;

    background:
        linear-gradient(
            transparent,
            #d4af37,
            transparent
        );

    display: none;
}

.lux-service-lead p {
    margin: 0;

    color: rgba(255,255,255,.68);

    font-size: 16px;

    line-height: 2;
}


/* =========================================================
   DESCRIPTION
========================================================= */

.lux-service-description {
    color: rgba(255,255,255,.57);

    font-size: 16px;

    line-height: 2.05;
}

.lux-service-description p {
    margin-bottom: 20px;
}

.lux-service-description h2,
.lux-service-description h3,
.lux-service-description h4 {
    margin-top: 38px;
    margin-bottom: 15px;

    color: #f1df9c;

    font-weight: 800;

    line-height: 1.4;
}

.lux-service-description ul,
.lux-service-description ol {
    margin-bottom: 25px;

    padding-left: 25px;
}

.lux-service-description li {
    margin-bottom: 11px;
}

.lux-service-description a {
    color: #d4af37;

    text-decoration-color:
        rgba(212,175,55,.3);
}



/* =========================================================
   SIDEBAR
========================================================= */

.lux-service-sidebar {
    position: sticky;
    top: 110px;
}


/* Image */

.lux-service-sidebar-image {
    position: relative;

    margin-bottom: 22px;

    padding: 8px;
}

.lux-service-sidebar-image-inner {
    position: relative;

    height: 310px;

    overflow: hidden;

    background: #111;

    border:
        1px solid
        rgba(212,175,55,.18);

    box-shadow:
        0 25px 60px rgba(0,0,0,.4);
}

.lux-service-sidebar-image img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;

    transition:
        transform .8s
        cubic-bezier(.2,.7,.2,1);
}

.lux-service-sidebar-image:hover img {
    transform: scale(1.06);
}

.lux-service-sidebar-overlay {
    position: absolute;
    inset: 0;

    background:
        linear-gradient(
            180deg,
            transparent 40%,
            rgba(0,0,0,.45)
        );
}


.lux-sidebar-corner {
    position: absolute;

    z-index: 5;

    width: 38px;
    height: 38px;
}

.lux-sidebar-corner-tl {
    top: 0;
    left: 0;

    border-top: 2px solid #d4af37;
    border-left: 2px solid #d4af37;
}

.lux-sidebar-corner-tr {
    top: 0;
    right: 0;

    border-top: 2px solid #d4af37;
    border-right: 2px solid #d4af37;
}

.lux-sidebar-corner-bl {
    bottom: 0;
    left: 0;

    border-bottom: 2px solid #d4af37;
    border-left: 2px solid #d4af37;
}

.lux-sidebar-corner-br {
    bottom: 0;
    right: 0;

    border-bottom: 2px solid #d4af37;
    border-right: 2px solid #d4af37;
}


.lux-service-sidebar-label {
    position: absolute;

    z-index: 7;

    left: 25px;
    bottom: 25px;

    display: flex;
    align-items: center;
    gap: 8px;

    padding: 8px 12px;

    color: rgba(255,255,255,.75);

    font-size: 7px;
    font-weight: 800;

    letter-spacing: 1.5px;

    background:
        rgba(8,8,8,.65);

    border:
        1px solid
        rgba(212,175,55,.2);

    backdrop-filter: blur(10px);
}

.lux-service-sidebar-label i {
    color: #d4af37;
}


/* =========================================================
   CONTACT CARD
========================================================= */

.lux-service-contact {
    position: relative;

    overflow: hidden;

    padding: 38px 32px;

    background:
        linear-gradient(
            145deg,
            #111,
            #0a0a0a
        );

    border:
        1px solid
        rgba(212,175,55,.16);

    box-shadow:
        0 25px 55px rgba(0,0,0,.3);
}


.lux-service-contact::before {
    content: "";

    position: absolute;

    top: 0;
    left: 0;
    right: 0;

    height: 2px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d4af37,
            transparent
        );

    box-shadow:
        0 0 15px
        rgba(212,175,55,.3);
}


.lux-service-contact-glow {
    position: absolute;

    width: 180px;
    height: 180px;

    right: -100px;
    top: -100px;

    border-radius: 50%;

    background:
        rgba(212,175,55,.09);

    filter: blur(35px);

    pointer-events: none;
}


.lux-service-contact-icon {
    position: relative;

    width: 53px;
    height: 53px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 22px;

    color: #d4af37;

    font-size: 21px;

    border:
        1px solid
        rgba(212,175,55,.24);

    background:
        rgba(212,175,55,.055);
}


.lux-service-contact-kicker {
    display: block;

    margin-bottom: 10px;

    color: rgba(212,175,55,.72);

    font-size: 8px;
    font-weight: 800;

    letter-spacing: 2px;
}


.lux-service-contact h3 {
    margin: 0 0 13px;

    color: #fff;

    font-size: 27px;

    font-weight: 800;
}


.lux-service-contact p {
    margin: 0 0 25px;

    color: rgba(255,255,255,.48);

    font-size: 12px;

    line-height: 1.9;
}


.lux-service-contact-btn {
    display: flex;
    align-items: center;
    justify-content: space-between;

    min-height: 52px;

    padding: 0 10px 0 18px;

    color: #111 !important;

    text-decoration: none !important;

    font-size: 9px;

    font-weight: 800;

    letter-spacing: 1px;

    background:
        linear-gradient(
            135deg,
            #f1df9c,
            #d4af37
        );

    transition: .35s ease;
}

.lux-service-contact-btn i {
    width: 33px;
    height: 33px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(0,0,0,.1);

    transition: .35s ease;
}

.lux-service-contact-btn:hover {
    transform: translateY(-3px);

    box-shadow:
        0 15px 30px
        rgba(212,175,55,.13);
}

.lux-service-contact-btn:hover i {
    transform: translate(-2px, -2px);
}


.lux-service-contact-line {
    width: 100%;
    height: 1px;

    margin: 28px 0 15px;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(212,175,55,.22),
            transparent
        );
}


.lux-service-contact-label {
    display: block;

    text-align: center;

    color:
        rgba(212,175,55,.38);

    font-size: 7px;

    font-weight: 800;

    letter-spacing: 2px;
}



/* =========================================================
   RELATED SERVICES
========================================================= */

.lux-related-services {
    position: relative;

    overflow: hidden;

    padding: 110px 0;

    background:
        radial-gradient(
            circle at 50% 0,
            rgba(212,175,55,.065),
            transparent 30%
        ),
        #0b0b0b;

    border-top:
        1px solid
        rgba(212,175,55,.08);
}


.lux-related-services-grid {
    position: absolute;
    inset: 0;

    opacity: .2;

    pointer-events: none;

    background-image:
        linear-gradient(
            rgba(255,255,255,.025) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,.025) 1px,
            transparent 1px
        );

    background-size: 60px 60px;
}


.lux-related-heading {
    position: relative;
    z-index: 2;

    text-align: center;

    margin-bottom: 55px;
}


.lux-related-kicker {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;

    margin-bottom: 16px;

    color: #d4af37;

    font-size: 9px;

    font-weight: 800;

    letter-spacing: 2.5px;
}

.lux-related-kicker span {
    width: 35px;
    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d4af37
        );
}

.lux-related-kicker span:last-child {
    background:
        linear-gradient(
            90deg,
            #d4af37,
            transparent
        );
}


.lux-related-heading h2 {
    margin: 0 0 12px;

    color: #fff;

    font-size: clamp(30px, 4vw, 48px);

    font-weight: 800;
}


.lux-related-heading p {
    margin: 0;

    color: rgba(255,255,255,.36);

    font-size: 11px;
}



/* =========================================================
   RELATED GRID
========================================================= */

.lux-related-services-grid-list {
    position: relative;
    z-index: 2;

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 22px;
}


.lux-related-service-card {
    position: relative;

    overflow: hidden;

    background: #101010;

    border:
        1px solid
        rgba(255,255,255,.06);

    transition:
        .45s
        cubic-bezier(.2,.7,.2,1);
}


.lux-related-service-card:hover {
    transform: translateY(-9px);

    border-color:
        rgba(212,175,55,.3);

    box-shadow:
        0 25px 55px rgba(0,0,0,.42),
        0 0 30px
        rgba(212,175,55,.035);
}


/* Image */

.lux-related-service-image {
    position: relative;

    display: block;

    height: 290px;

    overflow: hidden;

    text-decoration: none;

    background: #151515;
}


.lux-related-service-image img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;

    transition:
        transform .8s
        cubic-bezier(.2,.7,.2,1);
}

.lux-related-service-card:hover
.lux-related-service-image img {
    transform: scale(1.08);
}


.lux-related-service-overlay {
    position: absolute;
    inset: 0;

    background:
        linear-gradient(
            180deg,
            transparent 35%,
            rgba(0,0,0,.72)
        );
}


.lux-related-service-placeholder {
    width: 100%;
    height: 100%;

    display: flex;
    align-items: center;
    justify-content: center;

    color: rgba(212,175,55,.25);

    font-size: 70px;

    background:
        radial-gradient(
            circle,
            rgba(212,175,55,.08),
            transparent 50%
        ),
        #121212;
}


.lux-related-service-number {
    position: absolute;

    top: 18px;
    left: 18px;

    color:
        rgba(255,255,255,.55);

    font-size: 9px;

    font-weight: 800;

    letter-spacing: 2px;
}


.lux-related-service-view {
    position: absolute;

    right: 18px;
    bottom: 18px;

    width: 43px;
    height: 43px;

    display: flex;
    align-items: center;
    justify-content: center;

    color: #d4af37;

    border:
        1px solid
        rgba(212,175,55,.35);

    background:
        rgba(8,8,8,.62);

    backdrop-filter: blur(10px);

    transition: .35s ease;
}

.lux-related-service-card:hover
.lux-related-service-view {
    color: #111;

    background: #d4af37;

    transform: rotate(-8deg);
}


/* Content */

.lux-related-service-content {
    padding: 25px;
}


.lux-related-service-icon {
    width: 46px;
    height: 46px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 15px;

    color: #d4af37;

    font-size: 18px;

    border:
        1px solid
        rgba(212,175,55,.18);

    background:
        rgba(212,175,55,.04);
}


.lux-related-service-label {
    display: block;

    margin-bottom: 8px;

    color:
        rgba(212,175,55,.65);

    font-size: 7px;

    font-weight: 800;

    letter-spacing: 1.5px;
}


.lux-related-service-content h3 {
    margin: 0 0 12px;

    color: #fff;

    font-size: 21px;

    font-weight: 800;

    line-height: 1.45;
}


.lux-related-service-content p {
    margin: 0 0 20px;

    color:
        rgba(255,255,255,.4);

    font-size: 11px;

    line-height: 1.8;
}


.lux-related-service-link {
    display: inline-flex;
    align-items: center;
    gap: 9px;

    color:
        rgba(255,255,255,.48);

    text-decoration: none;

    font-size: 8px;

    font-weight: 800;

    letter-spacing: 1px;

    transition: .3s ease;
}

.lux-related-service-link i {
    color: #d4af37;

    transition: .3s ease;
}

.lux-related-service-link:hover {
    color: #fff;
}

.lux-related-service-link:hover i {
    transform: translateX(-5px);
}



/* =========================================================
   RTL
========================================================= */

[dir="rtl"] .lux-service-sidebar-label {
    left: auto;
    right: 25px;
}

[dir="rtl"] .lux-related-service-number {
    left: auto;
    right: 18px;
}

[dir="rtl"] .lux-related-service-view {
    right: auto;
    left: 18px;
}

[dir="rtl"] .lux-service-lead {
    border-right: 2px solid #d4af37;
    border-left: 0;
}

[dir="rtl"] .lux-service-kicker span:first-child {
    transform: rotate(180deg);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1199px) {

    .lux-service-layout {
        gap: 55px;

        grid-template-columns:
            minmax(0, 1fr)
            minmax(300px, .48fr);
    }

}


@media (max-width: 991px) {

    .lux-service-hero {
        min-height: 500px;
    }

    .lux-service-hero-content {
        padding: 90px 0 75px;
    }

    .lux-service-layout {
        grid-template-columns: 1fr;
        gap: 60px;
    }

    .lux-service-main {
        max-width: 850px;
    }

    .lux-service-sidebar {
        position: static;

        max-width: 650px;
    }

    .lux-related-services-grid-list {
        grid-template-columns:
            repeat(2, 1fr);
    }

}


@media (max-width: 767px) {

    .lux-service-hero {
        min-height: 460px;
    }

    .lux-service-hero-content {
        padding: 80px 0 65px;
    }

    .lux-service-hero h1 {
        font-size: 42px;
    }

    .lux-service-hero p {
        font-size: 14px;
    }

    .lux-service-icon {
        width: 62px;
        height: 62px;
        font-size: 25px;
    }

    .lux-service-details {
        padding: 70px 0 80px;
    }

    .lux-service-main > h2 {
        font-size: 34px;
    }

    .lux-service-description {
        font-size: 14px;
    }

    .lux-service-sidebar-image-inner {
        height: 330px;
    }

    .lux-related-services {
        padding: 75px 0;
    }

    .lux-related-services-grid-list {
        grid-template-columns: 1fr;
    }

    .lux-related-service-image {
        height: 320px;
    }

}


@media (max-width: 575px) {

    .lux-service-hero {
        min-height: 420px;
    }

    .lux-service-hero h1 {
        font-size: 34px;
    }

    .lux-service-kicker {
        font-size: 8px;
    }

    .lux-service-hero-bottom {
        font-size: 6px;
    }

    .lux-service-lead {
        padding: 15px;

        border-right-width: 2px;
    }

    .lux-service-lead p {
        font-size: 13px;
    }

    .lux-service-contact {
        padding: 30px 24px;
    }

    .lux-service-contact h3 {
        font-size: 24px;
    }

    .lux-service-sidebar-image {
        padding: 6px;
    }

    .lux-service-sidebar-image-inner {
        height: 280px;
    }

    .lux-related-heading h2 {
        font-size: 30px;
    }

    .lux-related-service-image {
        height: 290px;
    }

}


@media (prefers-reduced-motion: reduce) {

    .lux-service-sidebar-image img,
    .lux-related-service-image img,
    .lux-related-service-card,
    .lux-related-service-view,
    .lux-service-contact-btn {
        transition: none !important;
    }

}

</style>

@endpush

@endsection