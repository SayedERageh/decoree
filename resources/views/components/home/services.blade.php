@php
    $servicesSection = $homeSections->get('services');
@endphp

<section class="lux-services-section">

    {{-- Ambient Background --}}
    <div class="lux-services-glow lux-services-glow-1"></div>
    <div class="lux-services-glow lux-services-glow-2"></div>

    <div class="lux-services-grid-bg"></div>


    <div class="container position-relative">

        {{-- =====================================================
            HEADER
        ====================================================== --}}
        <div class="lux-services-header">

            <div
                class="lux-services-heading"
                data-aos="fade-up"
            >

                @if($servicesSection?->subtitle)

                    <span class="lux-services-kicker">

                        <span class="lux-services-kicker-line"></span>

                        {{ $servicesSection->subtitle }}

                    </span>

                @endif


                @if($servicesSection?->title)

                    <h2 class="lux-services-title">

                        {{ $servicesSection->title }}

                    </h2>

                @endif


                <div class="lux-services-title-decoration">

                    <span></span>

                    <i class="bi bi-stars"></i>

                    <span></span>

                </div>

            </div>


            {{-- Description --}}
            @if($servicesSection?->description)

                <div
                    class="lux-services-intro"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >

                    <div class="lux-intro-line"></div>

                    <p>

                        {!! nl2br(e($servicesSection->description)) !!}

                    </p>

                </div>

            @endif

        </div>


        {{-- =====================================================
            SERVICES
        ====================================================== --}}
        <div class="lux-services-grid">

            @forelse($services as $service)

                <article
                    class="lux-service-card"
                    data-aos="fade-up"
                    data-aos-delay="{{ ($loop->index % 4) * 100 }}"
                >

                    {{-- =================================================
                        IMAGE
                    ================================================== --}}
                    <div class="lux-service-image">

                        @if($service->image)

                            <img
                                src="{{ asset('storage/' . $service->image) }}"
                                alt="{{ $service->title }}"
                                loading="lazy"
                            >

                        @else

                            <div class="lux-service-placeholder">

                                <i class="bi bi-building-gear"></i>

                                <span>
                                    {{ app()->getLocale() === 'ar'
                                        ? 'خدمة مميزة'
                                        : 'Premium Service' }}
                                </span>

                            </div>

                        @endif


                        {{-- Image Gradient --}}
                        <div class="lux-service-image-gradient"></div>


                        {{-- Number --}}
                        <span class="lux-service-number">

                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}

                        </span>


                        {{-- Icon --}}
                        <div class="lux-service-icon">

                            @if($service->icon)

                                <i class="{{ $service->icon }}"></i>

                            @else

                                <i class="bi bi-gear-wide-connected"></i>

                            @endif

                        </div>


                        {{-- Hover View --}}
                        <div class="lux-service-image-overlay">

                            <div class="lux-service-view">

                                <i class="bi bi-arrow-up-left"></i>

                            </div>

                            <span>

                                {{ app()->getLocale() === 'ar'
                                    ? 'اكتشف الخدمة'
                                    : 'Explore Service' }}

                            </span>

                        </div>


                        {{-- LED Corners --}}
                        <span class="lux-service-corner lux-service-corner-tl"></span>
                        <span class="lux-service-corner lux-service-corner-tr"></span>
                        <span class="lux-service-corner lux-service-corner-bl"></span>
                        <span class="lux-service-corner lux-service-corner-br"></span>

                    </div>


                    {{-- =================================================
                        CONTENT
                    ================================================== --}}
                    <div class="lux-service-content">

                        <div class="lux-service-content-top">

                            <span class="lux-service-label">

                                {{ app()->getLocale() === 'ar'
                                    ? 'خدمة متخصصة'
                                    : 'Specialized Service' }}

                            </span>

                            <span class="lux-service-mini-number">

                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}

                            </span>

                        </div>


                        <h3>

                            {{ $service->title }}

                        </h3>


                        @if($service->shortDescription)

                            <p>

                                {{ $service->shortDescription }}

                            </p>

                        @endif


                        <a
                            href="{{ route('services.show', $service->slug) }}"
                            class="lux-service-link"
                        >

                            <span>

                                {{ $servicesSection?->button_text
                                    ?: (app()->getLocale() === 'ar'
                                        ? 'اكتشف الخدمة'
                                        : 'EXPLORE SERVICE') }}

                            </span>

                            <i class="bi bi-arrow-up-left"></i>

                        </a>

                    </div>

                </article>

            @empty

                <div class="lux-services-empty">

                    <div class="lux-services-empty-icon">

                        <i class="bi bi-building-gear"></i>

                    </div>

                    <p>

                        {{ app()->getLocale() === 'ar'
                            ? 'لا توجد خدمات متاحة حاليًا.'
                            : 'No services available at the moment.' }}

                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>


<style>

/* =========================================================
   LUXURY SERVICES SECTION
========================================================= */

.lux-services-section {

    position: relative;

    padding: 115px 0;

    overflow: hidden;

    background:
        radial-gradient(
            circle at 8% 15%,
            rgba(216,185,108,.08),
            transparent 30%
        ),
        radial-gradient(
            circle at 92% 85%,
            rgba(255,255,255,.035),
            transparent 30%
        ),
        linear-gradient(
            135deg,
            #070707 0%,
            #11100d 48%,
            #070707 100%
        );
}


/* =========================================================
   GRID BACKGROUND
========================================================= */

.lux-services-grid-bg {

    position: absolute;

    inset: 0;

    background-image:
        linear-gradient(
            rgba(255,255,255,.022) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,.022) 1px,
            transparent 1px
        );

    background-size: 70px 70px;

    mask-image:
        linear-gradient(
            to bottom,
            transparent,
            black 10%,
            black 90%,
            transparent
        );

    pointer-events: none;
}


/* =========================================================
   AMBIENT GLOW
========================================================= */

.lux-services-glow {

    position: absolute;

    width: 400px;
    height: 400px;

    border-radius: 50%;

    filter: blur(120px);

    opacity: .15;

    pointer-events: none;
}

.lux-services-glow-1 {

    top: -150px;

    right: -180px;

    background:
        rgba(216,185,108,.5);
}

.lux-services-glow-2 {

    bottom: -150px;

    left: -180px;

    background:
        rgba(255,255,255,.12);
}


/* =========================================================
   HEADER
========================================================= */

.lux-services-header {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        1.2fr .8fr;

    align-items: end;

    gap: 60px;

    margin-bottom: 60px;
}

.lux-services-heading {

    text-align: right;
}


/* Kicker */

.lux-services-kicker {

    display: inline-flex;

    align-items: center;

    gap: 12px;

    margin-bottom: 18px;

    color: #d8b96c;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 3px;

    text-transform: uppercase;
}

.lux-services-kicker-line {

    width: 34px;

    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d8b96c
        );

    box-shadow:
        0 0 10px
        rgba(216,185,108,.65);
}


/* Title */

.lux-services-title {

    margin: 0;

    color: #fff;

    font-size:
        clamp(34px, 4vw, 56px);

    font-weight: 800;

    line-height: 1.2;

    letter-spacing: -1px;

    text-shadow:
        0 0 25px
        rgba(255,255,255,.07);
}


/* Decoration */

.lux-services-title-decoration {

    display: flex;

    align-items: center;

    justify-content: flex-start;

    gap: 12px;

    margin-top: 22px;
}

.lux-services-title-decoration span {

    width: 70px;

    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d8b96c
        );

    box-shadow:
        0 0 8px
        rgba(216,185,108,.5);
}

.lux-services-title-decoration span:last-child {

    background:
        linear-gradient(
            90deg,
            #d8b96c,
            transparent
        );
}

.lux-services-title-decoration i {

    color: #d8b96c;

    font-size: 13px;

    filter:
        drop-shadow(
            0 0 7px
            rgba(216,185,108,.8)
        );
}


/* =========================================================
   INTRO
========================================================= */

.lux-services-intro {

    position: relative;

    padding-right: 25px;

    max-width: 500px;

    margin-right: auto;
}

.lux-services-intro p {

    margin: 0;

    color:
        rgba(255,255,255,.58);

    font-size: 14px;

    line-height: 2;

    text-align: right;
}

.lux-intro-line {

    position: absolute;

    top: 4px;

    right: 0;

    width: 2px;

    height: calc(100% - 8px);

    background:
        linear-gradient(
            to bottom,
            transparent,
            #d8b96c,
            transparent
        );

    box-shadow:
        0 0 10px
        rgba(216,185,108,.5);
}


/* =========================================================
   SERVICES GRID
========================================================= */

.lux-services-grid {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        repeat(4, minmax(0, 1fr));

    gap: 24px;
}


/* =========================================================
   CARD
========================================================= */

.lux-service-card {

    position: relative;

    overflow: hidden;

    border-radius: 24px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.075),
            rgba(255,255,255,.025)
        );

    border:
        1px solid
        rgba(216,185,108,.18);

    box-shadow:
        0 25px 70px
        rgba(0,0,0,.4),

        inset 0 1px 0
        rgba(255,255,255,.06);

    backdrop-filter:
        blur(18px);

    -webkit-backdrop-filter:
        blur(18px);

    transition:
        transform .6s
        cubic-bezier(.2,.8,.2,1),

        border-color .4s ease,

        box-shadow .5s ease;
}


/* Hover */

.lux-service-card:hover {

    transform:
        translateY(-12px);

    border-color:
        rgba(216,185,108,.55);

    box-shadow:
        0 40px 100px
        rgba(0,0,0,.58),

        0 0 40px
        rgba(216,185,108,.08),

        inset 0 1px 0
        rgba(255,255,255,.1);
}


/* =========================================================
   IMAGE
========================================================= */

.lux-service-image {

    position: relative;

    height: 300px;

    overflow: hidden;

    background: #0c0c0c;
}


/* Image */

.lux-service-image img {

    width: 100%;

    height: 100%;

    display: block;

    object-fit: cover;

    transition:
        transform 1s
        cubic-bezier(.2,.8,.2,1),

        filter .6s ease;
}

.lux-service-card:hover
.lux-service-image img {

    transform:
        scale(1.1);

    filter:
        brightness(.7)
        saturate(1.05);
}


/* =========================================================
   IMAGE GRADIENT
========================================================= */

.lux-service-image-gradient {

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            to bottom,
            rgba(0,0,0,.1),
            transparent 35%,
            rgba(0,0,0,.85)
        );

    z-index: 1;

    pointer-events: none;
}


/* =========================================================
   PLACEHOLDER
========================================================= */

.lux-service-placeholder {

    width: 100%;

    height: 100%;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-direction: column;

    gap: 14px;

    color:
        rgba(255,255,255,.45);

    background:
        radial-gradient(
            circle,
            rgba(216,185,108,.08),
            transparent 60%
        );
}

.lux-service-placeholder i {

    width: 75px;

    height: 75px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: #d8b96c;

    border:
        1px solid
        rgba(216,185,108,.3);

    font-size: 28px;

    box-shadow:
        0 0 30px
        rgba(216,185,108,.12);
}

.lux-service-placeholder span {

    font-size: 11px;

    letter-spacing: 1px;
}


/* =========================================================
   NUMBER
========================================================= */

.lux-service-number {

    position: absolute;

    top: 18px;

    right: 18px;

    z-index: 5;

    min-width: 45px;

    height: 33px;

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 0 10px;

    border-radius: 30px;

    color: #d8b96c;

    background:
        rgba(5,5,5,.6);

    border:
        1px solid
        rgba(216,185,108,.35);

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1px;

    backdrop-filter:
        blur(12px);
}


/* =========================================================
   ICON
========================================================= */

.lux-service-icon {

    position: absolute;

    bottom: 20px;

    left: 20px;

    z-index: 4;

    width: 55px;

    height: 55px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 16px;

    color: #d8b96c;

    background:
        rgba(5,5,5,.58);

    border:
        1px solid
        rgba(216,185,108,.35);

    font-size: 21px;

    backdrop-filter:
        blur(12px);

    box-shadow:
        0 10px 30px
        rgba(0,0,0,.25),

        0 0 20px
        rgba(216,185,108,.08);

    transition:
        transform .4s ease,
        background .4s ease;
}

.lux-service-card:hover
.lux-service-icon {

    transform:
        translateY(-5px)
        rotate(-5deg);

    background:
        rgba(216,185,108,.12);
}


/* =========================================================
   IMAGE OVERLAY
========================================================= */

.lux-service-image-overlay {

    position: absolute;

    inset: 0;

    z-index: 6;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-direction: column;

    gap: 10px;

    background:
        rgba(7,7,7,.4);

    opacity: 0;

    backdrop-filter:
        blur(0);

    transition:
        opacity .45s ease,

        backdrop-filter .45s ease;
}

.lux-service-card:hover
.lux-service-image-overlay {

    opacity: 1;

    backdrop-filter:
        blur(5px);
}


/* View */

.lux-service-view {

    width: 68px;

    height: 68px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: #d8b96c;

    background:
        rgba(5,5,5,.58);

    border:
        1px solid
        rgba(216,185,108,.7);

    box-shadow:
        0 0 35px
        rgba(216,185,108,.2);

    font-size: 21px;

    transform:
        scale(.65)
        rotate(-20deg);

    transition:
        transform .55s
        cubic-bezier(.2,.8,.2,1);
}

.lux-service-card:hover
.lux-service-view {

    transform:
        scale(1)
        rotate(0);
}

.lux-service-image-overlay > span {

    color:
        rgba(255,255,255,.92);

    font-size: 12px;

    letter-spacing: 1px;
}


/* =========================================================
   LED CORNERS
========================================================= */

.lux-service-corner {

    position: absolute;

    z-index: 7;

    width: 30px;

    height: 30px;

    opacity: .45;

    transition:
        all .45s ease;
}

.lux-service-corner-tl {

    top: 14px;
    left: 14px;

    border-top:
        1px solid #d8b96c;

    border-left:
        1px solid #d8b96c;
}

.lux-service-corner-tr {

    top: 14px;
    right: 14px;

    border-top:
        1px solid #d8b96c;

    border-right:
        1px solid #d8b96c;
}

.lux-service-corner-bl {

    bottom: 14px;
    left: 14px;

    border-bottom:
        1px solid #d8b96c;

    border-left:
        1px solid #d8b96c;
}

.lux-service-corner-br {

    bottom: 14px;
    right: 14px;

    border-bottom:
        1px solid #d8b96c;

    border-right:
        1px solid #d8b96c;
}

.lux-service-card:hover
.lux-service-corner {

    width: 45px;

    height: 45px;

    opacity: 1;

    filter:
        drop-shadow(
            0 0 7px
            rgba(216,185,108,.65)
        );
}


/* =========================================================
   CONTENT
========================================================= */

.lux-service-content {

    padding: 22px 20px 22px;
}


/* Top */

.lux-service-content-top {

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 10px;

    margin-bottom: 9px;
}


/* Label */

.lux-service-label {

    color: #c9aa63;

    font-size: 9px;

    font-weight: 700;

    letter-spacing: 1.5px;

    text-transform: uppercase;
}


/* Mini Number */

.lux-service-mini-number {

    color:
        rgba(255,255,255,.2);

    font-size: 10px;

    letter-spacing: 1px;
}


/* Title */

.lux-service-content h3 {

    margin: 0 0 11px;

    color: #fff;

    font-size: 20px;

    font-weight: 800;

    line-height: 1.5;
}


/* Description */

.lux-service-content p {

    min-height: 54px;

    margin: 0 0 20px;

    color:
        rgba(255,255,255,.52);

    font-size: 12px;

    line-height: 1.9;
}


/* =========================================================
   SERVICE LINK
========================================================= */

.lux-service-link {

    position: relative;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 12px;

    min-height: 45px;

    padding: 0 14px;

    color: #d8b96c;

    text-decoration: none;

    border:
        1px solid
        rgba(216,185,108,.2);

    border-radius: 13px;

    background:
        rgba(216,185,108,.035);

    overflow: hidden;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: .4px;

    transition:
        color .35s ease,
        background .35s ease,
        border-color .35s ease,
        transform .35s ease;
}

.lux-service-link::before {

    content: "";

    position: absolute;

    inset: 0;

    transform:
        translateX(-110%);

    background:
        linear-gradient(
            100deg,
            transparent,
            rgba(216,185,108,.16),
            transparent
        );

    transition:
        transform .6s ease;
}

.lux-service-link:hover::before {

    transform:
        translateX(110%);
}

.lux-service-link:hover {

    color: #111;

    background: #d8b96c;

    border-color: #d8b96c;

    transform:
        translateY(-2px);

    box-shadow:
        0 10px 25px
        rgba(216,185,108,.12);
}

.lux-service-link i {

    position: relative;

    width: 30px;

    height: 30px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    border:
        1px solid
        rgba(216,185,108,.25);

    transition:
        transform .35s ease;
}

.lux-service-link:hover i {

    transform:
        rotate(-45deg);
}


/* =========================================================
   EMPTY
========================================================= */

.lux-services-empty {

    grid-column:
        1 / -1;

    min-height: 280px;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-direction: column;

    gap: 15px;

    border:
        1px solid
        rgba(216,185,108,.15);

    border-radius: 25px;

    background:
        rgba(255,255,255,.025);

    color:
        rgba(255,255,255,.55);
}

.lux-services-empty-icon {

    width: 70px;

    height: 70px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: #d8b96c;

    border:
        1px solid
        rgba(216,185,108,.3);

    font-size: 25px;

    box-shadow:
        0 0 30px
        rgba(216,185,108,.1);
}

.lux-services-empty p {

    margin: 0;

    font-size: 14px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1199px) {

    .lux-services-grid {

        grid-template-columns:
            repeat(3, minmax(0, 1fr));
    }

}


@media (max-width: 991px) {

    .lux-services-section {

        padding: 90px 0;
    }

    .lux-services-header {

        grid-template-columns: 1fr;

        gap: 30px;
    }

    .lux-services-heading {

        text-align: center;
    }

    .lux-services-title-decoration {

        justify-content: center;
    }

    .lux-services-intro {

        margin: auto;

        padding-right: 20px;
    }

    .lux-services-intro p {

        text-align: center;
    }

    .lux-services-grid {

        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 20px;
    }

}


@media (max-width: 575px) {

    .lux-services-section {

        padding: 70px 0;
    }

    .lux-services-header {

        margin-bottom: 42px;
    }

    .lux-services-title {

        font-size: 32px;
    }

    .lux-services-grid {

        grid-template-columns: 1fr;

        gap: 18px;
    }

    .lux-service-image {

        height: 310px;
    }

    .lux-service-content {

        padding: 20px 18px;
    }

    .lux-service-content h3 {

        font-size: 18px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    .lux-service-card,
    .lux-service-image img,
    .lux-service-image-overlay,
    .lux-service-view,
    .lux-service-corner,
    .lux-service-link,
    .lux-service-icon {

        transition: none !important;
    }

}

</style>