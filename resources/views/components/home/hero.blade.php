<section class="lux-hero">

    <div class="swiper lux-hero-swiper">

        <div class="swiper-wrapper">

            @forelse($heroSlides as $index => $slide)

                <div class="swiper-slide">

                    <div
                        class="lux-hero-slide"
                        @if($slide->image)
                            style="background-image: url('{{ asset('storage/' . $slide->image) }}')"
                        @endif
                    >

                        {{-- Dark / Gold cinematic overlay --}}
                        <div class="lux-hero-overlay"></div>

                        {{-- Ambient lights --}}
                        <div class="lux-hero-glow lux-glow-left"></div>
                        <div class="lux-hero-glow lux-glow-right"></div>

                        {{-- Background grid --}}
                        <div class="lux-hero-grid"></div>


                        <div class="container lux-hero-container">

                            <div class="lux-hero-content">

                                {{-- Kicker --}}
                                @if($slide->subtitle)

                                    <div
                                        class="lux-hero-kicker"
                                        data-aos="fade-up"
                                    >

                                        <span class="lux-kicker-line"></span>

                                        <span>
                                            {{ $slide->subtitle }}
                                        </span>

                                        <span class="lux-kicker-line"></span>

                                    </div>

                                @endif


                                {{-- Main Title --}}
                                @if($slide->title)

                                    <h1
                                        class="lux-hero-title"
                                        data-aos="fade-up"
                                        data-aos-delay="100"
                                    >
                                        <span>
                                            {{ $slide->title }}
                                        </span>
                                    </h1>

                                @endif


                                {{-- Description --}}
                                @if($slide->description)

                                    <p
                                        class="lux-hero-description"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                    >
                                        {{ $slide->description }}
                                    </p>

                                @endif


                                {{-- Buttons --}}
                                @if($slide->button_text || $slide->secondary_button_text)

                                    <div
                                        class="lux-hero-buttons"
                                        data-aos="fade-up"
                                        data-aos-delay="300"
                                    >

                                        @if($slide->button_text)

                                            <a
                                                href="{{ $slide->button_url ?: '#' }}"
                                                class="lux-hero-btn lux-btn-primary"
                                            >

                                                <span>
                                                    {{ $slide->button_text }}
                                                </span>

                                                <i class="bi bi-arrow-up-left"></i>

                                            </a>

                                        @endif


                                        @if($slide->secondary_button_text)

                                            <a
                                                href="{{ $slide->secondary_button_url ?: '#' }}"
                                                class="lux-hero-btn lux-btn-outline"
                                            >

                                                <span>
                                                    {{ $slide->secondary_button_text }}
                                                </span>

                                                <i class="bi bi-arrow-left"></i>

                                            </a>

                                        @endif

                                    </div>

                                @endif

                            </div>


                            {{-- Decorative side element --}}

                            <div class="lux-hero-side-decoration">

                                <span class="lux-side-number">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>

                                <span class="lux-side-line"></span>

                                <span class="lux-side-label">
                                    DESIGN
                                </span>

                            </div>


                        </div>


                        {{-- Scroll indicator --}}

                        <div class="lux-hero-scroll">

                            <span>
                                {{ app()->getLocale() === 'ar'
                                    ? 'اكتشف المزيد'
                                    : 'DISCOVER MORE' }}
                            </span>

                            <div class="lux-scroll-line"></div>

                            <i class="bi bi-arrow-down"></i>

                        </div>


                        {{-- Corner --}}
                        <div class="lux-hero-corner corner-top"></div>
                        <div class="lux-hero-corner corner-bottom"></div>

                    </div>

                </div>

            @empty

                <div class="swiper-slide">

                    <div class="lux-hero-slide lux-hero-empty">

                        <div class="lux-hero-overlay"></div>

                        <div class="lux-hero-grid"></div>

                        <div class="container lux-hero-container">

                            <div class="lux-hero-content">

                                <div class="lux-hero-kicker">

                                    <span class="lux-kicker-line"></span>

                                    <span>
                                        INTERIOR DESIGN
                                    </span>

                                    <span class="lux-kicker-line"></span>

                                </div>

                                <h1 class="lux-hero-title">

                                    <span>
                                        {{ $company->company_name }}
                                    </span>

                                </h1>

                            </div>

                        </div>

                    </div>

                </div>

            @endforelse

        </div>


        {{-- Pagination --}}

        <div class="lux-hero-pagination"></div>


        {{-- Navigation --}}

        <div class="lux-hero-navigation">

            <button
                type="button"
                class="lux-hero-prev"
                aria-label="Previous slide"
            >
                <i class="bi bi-arrow-right"></i>
            </button>

            <button
                type="button"
                class="lux-hero-next"
                aria-label="Next slide"
            >
                <i class="bi bi-arrow-left"></i>
            </button>

        </div>

    </div>

</section>


<style>

/* =========================================================
   LUXURY HERO
========================================================= */

.lux-hero {

    position: relative;

    width: 100%;

    height: min(900px, 92vh);

    min-height: 680px;

    overflow: hidden;

    background: #070707;
}


/* =========================================================
   SWIPER
========================================================= */

.lux-hero-swiper,
.lux-hero-swiper .swiper-wrapper,
.lux-hero-swiper .swiper-slide {

    width: 100%;
    height: 100%;

}


/* =========================================================
   HERO SLIDE
========================================================= */

.lux-hero-slide {

    position: relative;

    height: 100%;

    display: flex;

    align-items: center;

    overflow: hidden;

    background-color: #0a0a0a;

    background-position: center;

    background-size: cover;

    transform: scale(1.01);

}


/* Image cinematic zoom */

.swiper-slide-active .lux-hero-slide {

    animation: luxHeroZoom 9s ease-out forwards;

}


@keyframes luxHeroZoom {

    from {
        background-size: 103%;
    }

    to {
        background-size: 110%;
    }

}


/* =========================================================
   OVERLAY
========================================================= */

.lux-hero-overlay {

    position: absolute;

    inset: 0;

    z-index: 1;

    background:

        linear-gradient(
            90deg,
            rgba(0,0,0,.94) 0%,
            rgba(0,0,0,.78) 32%,
            rgba(0,0,0,.42) 65%,
            rgba(0,0,0,.72) 100%
        ),

        linear-gradient(
            180deg,
            rgba(0,0,0,.35),
            transparent 35%,
            rgba(0,0,0,.7)
        );

}


/* =========================================================
   GRID
========================================================= */

.lux-hero-grid {

    position: absolute;

    inset: 0;

    z-index: 2;

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

    background-size: 80px 80px;

    opacity: .35;

    mask-image:
        linear-gradient(
            to right,
            black,
            transparent 80%
        );

}


/* =========================================================
   AMBIENT GLOW
========================================================= */

.lux-hero-glow {

    position: absolute;

    z-index: 2;

    width: 500px;

    height: 500px;

    border-radius: 50%;

    filter: blur(110px);

    pointer-events: none;

    animation: luxHeroGlow 7s ease-in-out infinite alternate;

}


.lux-glow-left {

    left: -250px;

    top: 10%;

    background:
        rgba(212,175,55,.13);

}


.lux-glow-right {

    right: -300px;

    bottom: -150px;

    background:
        rgba(212,175,55,.08);

    animation-delay: 2s;

}


@keyframes luxHeroGlow {

    0% {
        transform: scale(1);
        opacity: .45;
    }

    100% {
        transform: scale(1.25);
        opacity: .8;
    }

}


/* =========================================================
   CONTENT
========================================================= */

.lux-hero-container {

    position: relative;

    z-index: 5;

    height: 100%;

    display: flex;

    align-items: center;

}


.lux-hero-content {

    width: min(800px, 100%);

    padding-top: 30px;

}


/* =========================================================
   KICKER
========================================================= */

.lux-hero-kicker {

    display: flex;

    align-items: center;

    gap: 15px;

    margin-bottom: 25px;

    color: #d4af37;

    font-size: 13px;

    font-weight: 700;

    letter-spacing: 4px;

    text-transform: uppercase;

}


.lux-kicker-line {

    width: 55px;

    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d4af37
        );

    box-shadow:
        0 0 10px rgba(212,175,55,.8);

}


.lux-kicker-line:last-child {

    background:
        linear-gradient(
            90deg,
            #d4af37,
            transparent
        );

}


/* =========================================================
   TITLE
========================================================= */

.lux-hero-title {

    margin: 0;

    max-width: 900px;

    font-size: clamp(48px, 6vw, 92px);

    line-height: 1.05;

    font-weight: 900;

    letter-spacing: -2px;

}


.lux-hero-title span {

    display: inline;

    color: #fff;

    background:
        linear-gradient(
            110deg,
            #ffffff 10%,
            #fff8dc 35%,
            #d4af37 55%,
            #ffffff 72%,
            #d4af37 90%
        );

    background-size: 300% auto;

    -webkit-background-clip: text;

    background-clip: text;

    -webkit-text-fill-color: transparent;

    filter:
        drop-shadow(
            0 0 20px rgba(212,175,55,.18)
        );

    animation:
        luxHeroText 6s linear infinite;

}


@keyframes luxHeroText {

    0% {
        background-position: 0% center;
    }

    100% {
        background-position: 300% center;
    }

}


/* =========================================================
   DESCRIPTION
========================================================= */

.lux-hero-description {

    max-width: 680px;

    margin: 28px 0 0;

    color: rgba(255,255,255,.72);

    font-size: 18px;

    line-height: 2;

}


/* =========================================================
   BUTTONS
========================================================= */

.lux-hero-buttons {

    display: flex;

    align-items: center;

    flex-wrap: wrap;

    gap: 15px;

    margin-top: 38px;

}


.lux-hero-btn {

    position: relative;

    min-width: 175px;

    height: 58px;

    padding: 0 25px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 13px;

    text-decoration: none;

    font-size: 14px;

    font-weight: 700;

    overflow: hidden;

    transition:
        transform .4s ease,
        box-shadow .4s ease,
        border-color .4s ease;

}


.lux-hero-btn::before {

    content: "";

    position: absolute;

    top: 0;

    left: -120%;

    width: 80%;

    height: 100%;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.4),
            transparent
        );

    transform: skewX(-20deg);

    transition: left .7s ease;

}


.lux-hero-btn:hover::before {

    left: 140%;

}


.lux-hero-btn:hover {

    transform: translateY(-5px);

}


/* Primary */

.lux-btn-primary {

    color: #080808;

    background:
        linear-gradient(
            135deg,
            #fff3b0,
            #d4af37,
            #f6dc7a
        );

    border: 1px solid #e7c75e;

    box-shadow:
        0 0 20px rgba(212,175,55,.18);

}


.lux-btn-primary:hover {

    color: #080808;

    box-shadow:
        0 15px 35px rgba(212,175,55,.25),
        0 0 30px rgba(212,175,55,.15);

}


/* Outline */

.lux-btn-outline {

    color: #fff;

    border: 1px solid rgba(255,255,255,.3);

    background:
        rgba(255,255,255,.04);

    backdrop-filter: blur(10px);

}


.lux-btn-outline:hover {

    color: #fff;

    border-color:
        rgba(212,175,55,.7);

    box-shadow:
        0 0 25px rgba(212,175,55,.1);

}


/* =========================================================
   SIDE DECORATION
========================================================= */

.lux-hero-side-decoration {

    position: absolute;

    right: 35px;

    top: 50%;

    transform: translateY(-50%);

    z-index: 6;

    display: flex;

    flex-direction: column;

    align-items: center;

    gap: 15px;

}


.lux-side-number {

    color: #d4af37;

    font-size: 13px;

    font-weight: 800;

    letter-spacing: 3px;

}


.lux-side-line {

    width: 1px;

    height: 100px;

    background:
        linear-gradient(
            to bottom,
            #d4af37,
            transparent
        );

    box-shadow:
        0 0 8px rgba(212,175,55,.7);

}


.lux-side-label {

    color: rgba(255,255,255,.45);

    font-size: 8px;

    letter-spacing: 4px;

    writing-mode: vertical-rl;

}


/* =========================================================
   BOTTOM FEATURES
========================================================= */

.lux-hero-bottom {

    position: absolute;

    bottom: 38px;

    left: 0;

    right: 0;

    display: flex;

    align-items: center;

    gap: 35px;

}


.lux-hero-bottom-item {

    display: flex;

    align-items: center;

    gap: 10px;

    color: rgba(255,255,255,.65);

    font-size: 12px;

}


.lux-bottom-icon {

    width: 34px;

    height: 34px;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #d4af37;

    border: 1px solid rgba(212,175,55,.25);

    background:
        rgba(212,175,55,.04);

    box-shadow:
        0 0 12px rgba(212,175,55,.06);

}


/* =========================================================
   SCROLL
========================================================= */

.lux-hero-scroll {

    position: absolute;

    z-index: 7;

    right: 30px;

    bottom: 35px;

    display: flex;

    flex-direction: column;

    align-items: center;

    gap: 10px;

    color: rgba(255,255,255,.55);

    font-size: 8px;

    letter-spacing: 3px;

    writing-mode: vertical-rl;

}


.lux-hero-scroll i {

    color: #d4af37;

    font-size: 15px;

    animation:
        luxScroll 1.7s ease-in-out infinite;

}


.lux-scroll-line {

    width: 1px;

    height: 40px;

    background:
        linear-gradient(
            to bottom,
            #d4af37,
            transparent
        );

}


@keyframes luxScroll {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(7px);
    }

}


/* =========================================================
   CORNERS
========================================================= */

.lux-hero-corner {

    position: absolute;

    z-index: 5;

    width: 70px;

    height: 70px;

    opacity: .6;

}


.corner-top {

    top: 30px;

    left: 30px;

    border-top: 1px solid rgba(212,175,55,.45);

    border-left: 1px solid rgba(212,175,55,.45);

}


.corner-bottom {

    right: 30px;

    bottom: 30px;

    border-right: 1px solid rgba(212,175,55,.45);

    border-bottom: 1px solid rgba(212,175,55,.45);

}


/* =========================================================
   PAGINATION
========================================================= */

.lux-hero-pagination {

    position: absolute;

    z-index: 20;

    bottom: 28px !important;

    left: 50% !important;

    transform: translateX(-50%);

}


.lux-hero-pagination .swiper-pagination-bullet {

    width: 7px;

    height: 7px;

    margin: 0 5px !important;

    opacity: .4;

    background: #fff;

    transition:
        width .4s ease,
        opacity .4s ease,
        background .4s ease;

}


.lux-hero-pagination
.swiper-pagination-bullet-active {

    width: 32px;

    border-radius: 10px;

    opacity: 1;

    background: #d4af37;

    box-shadow:
        0 0 10px rgba(212,175,55,.8);

}


/* =========================================================
   NAVIGATION
========================================================= */

.lux-hero-navigation {

    position: absolute;

    z-index: 20;

    left: 40px;

    bottom: 32px;

    display: flex;

    gap: 8px;

}


.lux-hero-navigation button {

    width: 45px;

    height: 45px;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #fff;

    border: 1px solid rgba(255,255,255,.18);

    background:
        rgba(0,0,0,.3);

    backdrop-filter: blur(10px);

    cursor: pointer;

    transition:
        .35s ease;

}


.lux-hero-navigation button:hover {

    color: #0a0a0a;

    background: #d4af37;

    border-color: #d4af37;

    box-shadow:
        0 0 20px rgba(212,175,55,.25);

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .lux-hero {

        height: 800px;

        min-height: 650px;

    }

    .lux-hero-title {

        font-size: clamp(44px, 8vw, 70px);

    }

    .lux-hero-side-decoration {

        right: 15px;

        opacity: .5;

    }

    .lux-hero-bottom {

        gap: 15px;

    }

}


@media (max-width: 767px) {

    .lux-hero {

        height: 760px;

        min-height: 650px;

    }

    .lux-hero-overlay {

        background:
            linear-gradient(
                90deg,
                rgba(0,0,0,.9),
                rgba(0,0,0,.62)
            ),
            linear-gradient(
                180deg,
                rgba(0,0,0,.35),
                transparent 40%,
                rgba(0,0,0,.85)
            );

    }

    .lux-hero-content {

        padding: 0 15px;

    }

    .lux-hero-kicker {

        font-size: 9px;

        letter-spacing: 2px;

        gap: 8px;

    }

    .lux-kicker-line {

        width: 25px;

    }

    .lux-hero-title {

        font-size: 42px;

        line-height: 1.12;

        letter-spacing: -1px;

    }

    .lux-hero-description {

        font-size: 14px;

        line-height: 1.9;

        margin-top: 20px;

    }

    .lux-hero-buttons {

        margin-top: 28px;

        gap: 10px;

    }

    .lux-hero-btn {

        min-width: 145px;

        height: 52px;

        padding: 0 17px;

        font-size: 12px;

    }

    .lux-hero-side-decoration {

        display: none;

    }

    .lux-hero-bottom {

        bottom: 80px;

        left: 15px;

        right: 15px;

        gap: 10px;

        justify-content: space-between;

    }

    .lux-hero-bottom-item {

        font-size: 9px;

        gap: 5px;

    }

    .lux-bottom-icon {

        width: 28px;

        height: 28px;

    }

    .lux-hero-scroll {

        display: none;

    }

    .lux-hero-navigation {

        left: 15px;

        bottom: 25px;

    }

    .lux-hero-pagination {

        bottom: 28px !important;

    }

    .lux-hero-corner {

        width: 40px;

        height: 40px;

    }

}


/* Reduced Motion */

@media (prefers-reduced-motion: reduce) {

    .lux-hero *,
    .lux-hero *::before,
    .lux-hero *::after {

        animation: none !important;

        transition: none !important;

    }

}

</style>