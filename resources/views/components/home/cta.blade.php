@php
    $ctaSection = $homeSections->get('cta');
@endphp

<section class="lux-cta-section">

    {{-- Background Effects --}}
    <div class="lux-cta-grid"></div>

    <div class="lux-cta-glow lux-cta-glow-one"></div>
    <div class="lux-cta-glow lux-cta-glow-two"></div>

    <div class="container position-relative">

        <div class="lux-cta-box">

            {{-- Animated Border --}}
            <div class="lux-cta-border"></div>

            {{-- Decorative Lines --}}
            <div class="lux-cta-corner lux-cta-corner-top"></div>
            <div class="lux-cta-corner lux-cta-corner-bottom"></div>


            {{-- Decorative 3D Orb --}}
            <div class="lux-cta-orb">

                <div class="lux-cta-orb-ring ring-a"></div>
                <div class="lux-cta-orb-ring ring-b"></div>
                <div class="lux-cta-orb-ring ring-c"></div>

                <div class="lux-cta-orb-core">
                    <i class="bi bi-stars"></i>
                </div>

            </div>


            <div class="lux-cta-content" data-aos="fade-up">

                @if($ctaSection?->subtitle)

                    <div class="lux-cta-kicker">

                        <span class="lux-cta-line"></span>

                        <span>
                            {{ $ctaSection->subtitle }}
                        </span>

                        <span class="lux-cta-line"></span>

                    </div>

                @endif


                @if($ctaSection?->title)

                    <h2 class="lux-cta-title">

                        <span>
                            {{ $ctaSection->title }}
                        </span>

                    </h2>

                @endif


                @if($ctaSection?->description)

                    <p class="lux-cta-description">
                        {!! nl2br(e($ctaSection->description)) !!}
                    </p>

                @endif


                @if($ctaSection?->button_text)

                    <div
                        class="lux-cta-action"
                        data-aos="fade-up"
                        data-aos-delay="150"
                    >

                        <a
                            href="{{ $ctaSection->button_url ?: route('contact') }}"
                            class="lux-cta-button"
                        >

                            <span>
                                {{ $ctaSection->button_text }}
                            </span>

                            <i class="bi bi-arrow-up-left"></i>

                        </a>

                    </div>

                @endif

            </div>


            {{-- Bottom Label --}}
            <div class="lux-cta-label">

                <span></span>

                <strong>
                    PREMIUM INTERIOR DESIGN
                </strong>

                <span></span>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   LUXURY CTA
========================================================= */

.lux-cta-section {

    position: relative;

    overflow: hidden;

    padding: 110px 0;

    background:
        radial-gradient(
            circle at 20% 50%,
            rgba(212,175,55,.08),
            transparent 30%
        ),
        radial-gradient(
            circle at 80% 50%,
            rgba(212,175,55,.06),
            transparent 30%
        ),
        linear-gradient(
            135deg,
            #070707,
            #111111 50%,
            #070707
        );

}


/* =========================================================
   BACKGROUND GRID
========================================================= */

.lux-cta-grid {

    position: absolute;

    inset: 0;

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

    background-size: 65px 65px;

    opacity: .35;

    mask-image:
        linear-gradient(
            to bottom,
            transparent,
            black 20%,
            black 80%,
            transparent
        );

}


/* =========================================================
   AMBIENT LIGHT
========================================================= */

.lux-cta-glow {

    position: absolute;

    width: 400px;

    height: 400px;

    border-radius: 50%;

    filter: blur(100px);

    pointer-events: none;

    animation:
        luxCtaGlow 8s ease-in-out infinite alternate;

}


.lux-cta-glow-one {

    left: -180px;

    top: -150px;

    background:
        rgba(212,175,55,.11);

}


.lux-cta-glow-two {

    right: -180px;

    bottom: -170px;

    background:
        rgba(212,175,55,.08);

    animation-delay: 2s;

}


@keyframes luxCtaGlow {

    0% {
        transform: scale(1);
        opacity: .4;
    }

    100% {
        transform: scale(1.3);
        opacity: .8;
    }

}


/* =========================================================
   CTA BOX
========================================================= */

.lux-cta-box {

    position: relative;

    min-height: 420px;

    padding: 75px 50px;

    display: flex;

    align-items: center;

    justify-content: center;

    overflow: hidden;

    border: 1px solid rgba(212,175,55,.22);

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.055),
            rgba(255,255,255,.015)
        );

    backdrop-filter: blur(20px);

    -webkit-backdrop-filter: blur(20px);

    box-shadow:

        0 35px 100px rgba(0,0,0,.65),

        inset 0 1px 0 rgba(255,255,255,.08);

    transform-style: preserve-3d;

}


/* =========================================================
   LED BORDER
========================================================= */

.lux-cta-border {

    position: absolute;

    top: -1px;

    left: 15%;

    width: 70%;

    height: 2px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d4af37,
            #fff1a8,
            #d4af37,
            transparent
        );

    box-shadow:

        0 0 8px rgba(212,175,55,.8),

        0 0 25px rgba(212,175,55,.45);

    animation:
        luxCtaLed 3.5s ease-in-out infinite;

}


@keyframes luxCtaLed {

    0%,
    100% {
        transform: scaleX(.65);
        opacity: .45;
    }

    50% {
        transform: scaleX(1);
        opacity: 1;
    }

}


/* =========================================================
   CORNERS
========================================================= */

.lux-cta-corner {

    position: absolute;

    width: 70px;

    height: 70px;

    opacity: .65;

}


.lux-cta-corner-top {

    top: 25px;

    left: 25px;

    border-top: 1px solid rgba(212,175,55,.5);

    border-left: 1px solid rgba(212,175,55,.5);

}


.lux-cta-corner-bottom {

    right: 25px;

    bottom: 25px;

    border-right: 1px solid rgba(212,175,55,.5);

    border-bottom: 1px solid rgba(212,175,55,.5);

}


/* =========================================================
   CONTENT
========================================================= */

.lux-cta-content {

    position: relative;

    z-index: 5;

    width: min(800px, 100%);

    text-align: center;

}


/* =========================================================
   KICKER
========================================================= */

.lux-cta-kicker {

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 15px;

    margin-bottom: 22px;

    color: #d4af37;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 4px;

}


.lux-cta-line {

    width: 45px;

    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d4af37
        );

    box-shadow:
        0 0 8px rgba(212,175,55,.7);

}


.lux-cta-line:last-child {

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

.lux-cta-title {

    margin: 0;

    font-size: clamp(38px, 5vw, 65px);

    line-height: 1.15;

    font-weight: 900;

    letter-spacing: -1px;

}


.lux-cta-title span {

    display: inline-block;

    background:
        linear-gradient(
            110deg,
            #ffffff,
            #fff7d0,
            #d4af37,
            #ffffff,
            #d4af37
        );

    background-size: 300% auto;

    -webkit-background-clip: text;

    background-clip: text;

    -webkit-text-fill-color: transparent;

    filter:
        drop-shadow(
            0 0 15px rgba(212,175,55,.2)
        );

    animation:
        luxCtaText 6s linear infinite;

}


@keyframes luxCtaText {

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

.lux-cta-description {

    max-width: 650px;

    margin: 25px auto 0;

    color: rgba(255,255,255,.68);

    font-size: 17px;

    line-height: 2;

}


/* =========================================================
   BUTTON
========================================================= */

.lux-cta-action {

    margin-top: 35px;

}


.lux-cta-button {

    position: relative;

    min-width: 200px;

    min-height: 58px;

    padding: 0 30px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 15px;

    color: #080808;

    text-decoration: none;

    font-size: 14px;

    font-weight: 800;

    background:
        linear-gradient(
            135deg,
            #fff2aa,
            #d4af37,
            #f4d66d
        );

    border: 1px solid #e8ca61;

    box-shadow:
        0 0 20px rgba(212,175,55,.2);

    overflow: hidden;

    transition:
        transform .4s ease,
        box-shadow .4s ease;

}


.lux-cta-button::before {

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
            rgba(255,255,255,.55),
            transparent
        );

    transform: skewX(-20deg);

    transition:
        left .7s ease;

}


.lux-cta-button:hover::before {

    left: 140%;

}


.lux-cta-button:hover {

    color: #080808;

    transform:
        translateY(-6px)
        scale(1.02);

    box-shadow:

        0 15px 40px rgba(212,175,55,.25),

        0 0 35px rgba(212,175,55,.15);

}


.lux-cta-button i {

    font-size: 17px;

}


/* =========================================================
   3D ORB
========================================================= */

.lux-cta-orb {

    position: absolute;

    width: 310px;

    height: 310px;

    right: -90px;

    top: 50%;

    transform:
        translateY(-50%);

    opacity: .7;

    pointer-events: none;

    transform-style: preserve-3d;

}


.lux-cta-orb-ring {

    position: absolute;

    top: 50%;

    left: 50%;

    border-radius: 50%;

    border: 1px solid rgba(212,175,55,.2);

    transform:
        translate(-50%,-50%)
        rotateX(65deg);

}


.ring-a {

    width: 150px;

    height: 150px;

    animation:
        luxOrbRotate 10s linear infinite;

}


.ring-b {

    width: 215px;

    height: 215px;

    border-color:
        rgba(255,255,255,.08);

    animation:
        luxOrbRotateReverse 15s linear infinite;

}


.ring-c {

    width: 285px;

    height: 285px;

    border-color:
        rgba(212,175,55,.09);

    animation:
        luxOrbRotate 20s linear infinite;

}


@keyframes luxOrbRotate {

    from {
        transform:
            translate(-50%,-50%)
            rotateX(65deg)
            rotateZ(0deg);
    }

    to {
        transform:
            translate(-50%,-50%)
            rotateX(65deg)
            rotateZ(360deg);
    }

}


@keyframes luxOrbRotateReverse {

    from {
        transform:
            translate(-50%,-50%)
            rotateX(65deg)
            rotateZ(360deg);
    }

    to {
        transform:
            translate(-50%,-50%)
            rotateX(65deg)
            rotateZ(0deg);
    }

}


/* Core */

.lux-cta-orb-core {

    position: absolute;

    top: 50%;

    left: 50%;

    width: 90px;

    height: 90px;

    transform:
        translate(-50%,-50%);

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: #d4af37;

    background:
        radial-gradient(
            circle,
            rgba(212,175,55,.18),
            rgba(10,10,10,.95) 70%
        );

    border:
        1px solid rgba(212,175,55,.45);

    box-shadow:

        0 0 30px rgba(212,175,55,.16),

        inset 0 0 25px rgba(212,175,55,.08);

    animation:
        luxCoreFloat 4s ease-in-out infinite;

}


.lux-cta-orb-core i {

    font-size: 30px;

    filter:
        drop-shadow(
            0 0 10px rgba(212,175,55,.7)
        );

}


@keyframes luxCoreFloat {

    0%,
    100% {
        transform:
            translate(-50%,-50%)
            scale(1);
    }

    50% {
        transform:
            translate(-50%,-50%)
            scale(1.08);
    }

}


/* =========================================================
   LABEL
========================================================= */

.lux-cta-label {

    position: absolute;

    bottom: 22px;

    left: 50%;

    transform: translateX(-50%);

    z-index: 5;

    display: flex;

    align-items: center;

    gap: 12px;

    white-space: nowrap;

    color: rgba(255,255,255,.3);

    font-size: 8px;

    letter-spacing: 4px;

}


.lux-cta-label span {

    width: 30px;

    height: 1px;

    background:
        rgba(212,175,55,.35);

}


.lux-cta-label strong {

    font-weight: 600;

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .lux-cta-section {

        padding: 85px 0;

    }

    .lux-cta-box {

        min-height: 400px;

        padding: 65px 30px;

    }

    .lux-cta-orb {

        right: -150px;

        opacity: .35;

    }

}


@media (max-width: 767px) {

    .lux-cta-section {

        padding: 65px 0;

    }

    .lux-cta-box {

        min-height: 420px;

        padding: 55px 20px 65px;

    }

    .lux-cta-title {

        font-size: 35px;

    }

    .lux-cta-description {

        font-size: 14px;

        line-height: 1.9;

    }

    .lux-cta-kicker {

        font-size: 9px;

        letter-spacing: 2px;

        gap: 8px;

    }

    .lux-cta-line {

        width: 25px;

    }

    .lux-cta-button {

        width: 100%;

        max-width: 230px;

        min-height: 54px;

    }

    .lux-cta-orb {

        right: -170px;

        top: 20%;

        opacity: .18;

        transform: none;

    }

    .lux-cta-corner {

        width: 40px;

        height: 40px;

    }

    .lux-cta-corner-top {

        top: 15px;

        left: 15px;

    }

    .lux-cta-corner-bottom {

        right: 15px;

        bottom: 15px;

    }

    .lux-cta-label {

        bottom: 18px;

        font-size: 6px;

        letter-spacing: 2px;

    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    .lux-cta-section *,
    .lux-cta-section *::before,
    .lux-cta-section *::after {

        animation: none !important;

        transition: none !important;

    }

}

</style>