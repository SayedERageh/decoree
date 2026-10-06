@php
    $commitmentSection = $homeSections->get('commitment');
@endphp

<section class="lux-commitment-section">

    {{-- Ambient Background --}}
    <div class="lux-commitment-bg"></div>
    <div class="lux-commitment-glow lux-glow-1"></div>
    <div class="lux-commitment-glow lux-glow-2"></div>

    {{-- Animated Grid --}}
    <div class="lux-commitment-grid"></div>

    <div class="container position-relative">

        <div class="lux-commitment-wrapper">

            {{-- Decorative Number --}}
            <div class="lux-commitment-number">
                01
            </div>

            {{-- Main Content --}}
            <div class="lux-commitment-content" data-aos="fade-up">

                @if($commitmentSection?->subtitle)
                    <div class="lux-commitment-kicker">
                        <span class="lux-kicker-line"></span>

                        <span>
                            {{ $commitmentSection->subtitle }}
                        </span>

                        <span class="lux-kicker-line"></span>
                    </div>
                @endif


                @if($commitmentSection?->title)
                    <h2 class="lux-commitment-title">

                        <span class="lux-title-glow">
                            {{ $commitmentSection->title }}
                        </span>

                    </h2>
                @endif


                @if($commitmentSection?->description)
                    <p class="lux-commitment-description">
                        {{ $commitmentSection->description }}
                    </p>
                @endif


                @if($company->commitment)

                    <div class="lux-commitment-text">

                        <div class="lux-quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>

                        <div class="lux-commitment-inner">
                            {!! $company->commitment !!}
                        </div>

                    </div>

                @endif


                {{-- Commitment Features --}}
                <div class="lux-commitment-features">

                    <div class="lux-commitment-feature" data-aos="fade-up" data-aos-delay="100">

                        <div class="lux-feature-icon">
                            <i class="bi bi-stars"></i>
                        </div>

                        <div>
                            <strong>تصميم استثنائي</strong>
                            <span>تفاصيل تصنع الفرق</span>
                        </div>

                    </div>


                    <div class="lux-commitment-feature" data-aos="fade-up" data-aos-delay="200">

                        <div class="lux-feature-icon">
                            <i class="bi bi-gem"></i>
                        </div>

                        <div>
                            <strong>خامات راقية</strong>
                            <span>اختيارات بعناية</span>
                        </div>

                    </div>


                    <div class="lux-commitment-feature" data-aos="fade-up" data-aos-delay="300">

                        <div class="lux-feature-icon">
                            <i class="bi bi-house-heart"></i>
                        </div>

                        <div>
                            <strong>تنفيذ باحتراف</strong>
                            <span>جودة تستحق الثقة</span>
                        </div>

                    </div>

                </div>

            </div>


            {{-- Decorative 3D Visual --}}
            <div class="lux-commitment-visual">

                <div class="lux-commitment-ring ring-one"></div>
                <div class="lux-commitment-ring ring-two"></div>
                <div class="lux-commitment-ring ring-three"></div>

                <div class="lux-commitment-core">

                    <div class="lux-core-inner">

                        <i class="bi bi-building"></i>

                        <span>DESIGN</span>

                        <strong>EXCELLENCE</strong>

                    </div>

                </div>

                <div class="lux-orbit-dot orbit-dot-one"></div>
                <div class="lux-orbit-dot orbit-dot-two"></div>
                <div class="lux-orbit-dot orbit-dot-three"></div>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   LUXURY COMMITMENT SECTION
========================================================= */

.lux-commitment-section {
    position: relative;
    overflow: hidden;
    padding: 130px 0;
    background:
        radial-gradient(
            circle at 20% 30%,
            rgba(212, 175, 55, .10),
            transparent 32%
        ),
        radial-gradient(
            circle at 80% 70%,
            rgba(255, 215, 120, .07),
            transparent 30%
        ),
        linear-gradient(
            135deg,
            #070707 0%,
            #101010 48%,
            #070707 100%
        );
}


/* Background glow */

.lux-commitment-bg {
    position: absolute;
    inset: 0;
    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(212,175,55,.025),
            transparent
        );
    pointer-events: none;
}


/* Animated grid */

.lux-commitment-grid {
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

    background-size: 70px 70px;

    mask-image: linear-gradient(
        to bottom,
        transparent,
        black 20%,
        black 80%,
        transparent
    );

    opacity: .45;
}


/* Ambient lights */

.lux-commitment-glow {
    position: absolute;
    width: 420px;
    height: 420px;

    border-radius: 50%;

    background: rgba(212,175,55,.09);

    filter: blur(100px);

    pointer-events: none;

    animation: commitmentGlow 7s ease-in-out infinite alternate;
}

.lux-glow-1 {
    top: -180px;
    left: -120px;
}

.lux-glow-2 {
    right: -150px;
    bottom: -200px;

    animation-delay: 2s;
}

@keyframes commitmentGlow {

    0% {
        transform: translate3d(0,0,0) scale(1);
        opacity: .45;
    }

    100% {
        transform: translate3d(40px,30px,0) scale(1.15);
        opacity: .8;
    }

}


/* =========================================================
   MAIN WRAPPER
========================================================= */

.lux-commitment-wrapper {

    position: relative;

    max-width: 1050px;

    margin: auto;

    padding: 70px 70px;

    border: 1px solid rgba(212,175,55,.22);

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.055),
            rgba(255,255,255,.015)
        );

    backdrop-filter: blur(18px);

    -webkit-backdrop-filter: blur(18px);

    box-shadow:
        0 35px 100px rgba(0,0,0,.65),
        inset 0 1px 0 rgba(255,255,255,.08);

    transform-style: preserve-3d;

    transition:
        transform .6s ease,
        box-shadow .6s ease;

}


/* LED top line */

.lux-commitment-wrapper::before {

    content: "";

    position: absolute;

    top: -1px;
    left: 15%;
    right: 15%;

    height: 2px;

    background: linear-gradient(
        90deg,
        transparent,
        #d4af37,
        #fff1a8,
        #d4af37,
        transparent
    );

    box-shadow:
        0 0 8px rgba(212,175,55,.8),
        0 0 25px rgba(212,175,55,.5);

    animation: commitmentLed 3s ease-in-out infinite;
}

@keyframes commitmentLed {

    0%,
    100% {
        opacity: .45;
        transform: scaleX(.7);
    }

    50% {
        opacity: 1;
        transform: scaleX(1);
    }

}


/* =========================================================
   NUMBER
========================================================= */

.lux-commitment-number {

    position: absolute;

    top: 25px;
    right: 35px;

    font-size: 90px;

    font-weight: 900;

    line-height: 1;

    color: transparent;

    -webkit-text-stroke: 1px rgba(212,175,55,.13);

    user-select: none;

    pointer-events: none;
}


/* =========================================================
   CONTENT
========================================================= */

.lux-commitment-content {

    position: relative;

    z-index: 5;

    max-width: 780px;

    margin: auto;

    text-align: center;

}


/* Kicker */

.lux-commitment-kicker {

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 16px;

    margin-bottom: 25px;

    color: #d4af37;

    font-size: 13px;

    font-weight: 700;

    letter-spacing: 3px;
}

.lux-kicker-line {

    width: 45px;

    height: 1px;

    background: linear-gradient(
        90deg,
        transparent,
        #d4af37
    );

    box-shadow:
        0 0 8px rgba(212,175,55,.7);
}

.lux-kicker-line:last-child {

    background: linear-gradient(
        90deg,
        #d4af37,
        transparent
    );

}


/* =========================================================
   TITLE
========================================================= */

.lux-commitment-title {

    margin: 0;

    font-size: clamp(38px, 5vw, 65px);

    line-height: 1.15;

    font-weight: 900;

    color: #fff;

    letter-spacing: -1px;

}


.lux-title-glow {

    display: inline-block;

    background:
        linear-gradient(
            120deg,
            #fff,
            #fff6cf,
            #d4af37,
            #fff,
            #d4af37
        );

    background-size: 300% auto;

    -webkit-background-clip: text;

    background-clip: text;

    -webkit-text-fill-color: transparent;

    animation:
        luxuryTextFlow 5s linear infinite;

    filter:
        drop-shadow(0 0 12px rgba(212,175,55,.25));
}


@keyframes luxuryTextFlow {

    0% {
        background-position: 0% center;
    }

    100% {
        background-position: 300% center;
    }

}


/* Description */

.lux-commitment-description {

    max-width: 700px;

    margin: 25px auto 35px;

    color: rgba(255,255,255,.68);

    font-size: 17px;

    line-height: 1.9;
}


/* =========================================================
   COMMITMENT TEXT
========================================================= */

.lux-commitment-text {

    position: relative;

    margin: 0 auto;

    padding: 35px 45px;

    text-align: center;

    border: 1px solid rgba(212,175,55,.16);

    background:
        rgba(0,0,0,.20);

    box-shadow:
        inset 0 0 40px rgba(212,175,55,.025);

}


/* Quote */

.lux-quote-icon {

    position: absolute;

    top: -22px;

    left: 50%;

    transform: translateX(-50%);

    width: 45px;
    height: 45px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    color: #d4af37;

    background: #0b0b0b;

    border: 1px solid rgba(212,175,55,.45);

    box-shadow:
        0 0 15px rgba(212,175,55,.25),
        inset 0 0 12px rgba(212,175,55,.08);

    font-size: 20px;
}


.lux-commitment-inner {

    color: rgba(255,255,255,.78);

    font-size: 17px;

    line-height: 2;

}


/* =========================================================
   FEATURES
========================================================= */

.lux-commitment-features {

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 15px;

    margin-top: 35px;

}


.lux-commitment-feature {

    display: flex;

    align-items: center;

    gap: 14px;

    padding: 17px;

    text-align: right;

    border: 1px solid rgba(255,255,255,.07);

    background:
        rgba(255,255,255,.025);

    transition:
        transform .4s ease,
        border-color .4s ease,
        background .4s ease;

}


.lux-commitment-feature:hover {

    transform:
        translateY(-7px)
        translateZ(20px);

    border-color:
        rgba(212,175,55,.4);

    background:
        rgba(212,175,55,.055);

}


.lux-feature-icon {

    flex: 0 0 45px;

    width: 45px;
    height: 45px;

    display: flex;

    align-items: center;
    justify-content: center;

    color: #d4af37;

    border: 1px solid rgba(212,175,55,.3);

    background:
        rgba(212,175,55,.05);

    box-shadow:
        0 0 15px rgba(212,175,55,.08);

}


.lux-commitment-feature strong {

    display: block;

    color: #fff;

    font-size: 14px;

    margin-bottom: 3px;

}


.lux-commitment-feature span {

    display: block;

    color: rgba(255,255,255,.45);

    font-size: 11px;

}


/* =========================================================
   3D VISUAL
========================================================= */

.lux-commitment-visual {

    position: absolute;

    width: 300px;
    height: 300px;

    left: -150px;
    bottom: -130px;

    pointer-events: none;

    transform-style: preserve-3d;

    opacity: .85;
}


/* Rings */

.lux-commitment-ring {

    position: absolute;

    top: 50%;
    left: 50%;

    border-radius: 50%;

    border: 1px solid rgba(212,175,55,.22);

    transform:
        translate(-50%,-50%)
        rotateX(65deg);

    box-shadow:
        0 0 15px rgba(212,175,55,.05);
}


.ring-one {

    width: 170px;
    height: 170px;

    animation:
        ringRotate 10s linear infinite;
}


.ring-two {

    width: 220px;
    height: 220px;

    border-color:
        rgba(255,255,255,.08);

    animation:
        ringRotateReverse 15s linear infinite;
}


.ring-three {

    width: 270px;
    height: 270px;

    border-color:
        rgba(212,175,55,.10);

    animation:
        ringRotate 20s linear infinite;
}


@keyframes ringRotate {

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


@keyframes ringRotateReverse {

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

.lux-commitment-core {

    position: absolute;

    top: 50%;
    left: 50%;

    width: 115px;
    height: 115px;

    transform:
        translate(-50%,-50%)
        translateZ(30px);

    border-radius: 50%;

    display: flex;

    align-items: center;
    justify-content: center;

    background:
        radial-gradient(
            circle,
            rgba(212,175,55,.16),
            rgba(10,10,10,.95) 70%
        );

    border:
        1px solid rgba(212,175,55,.45);

    box-shadow:
        0 0 30px rgba(212,175,55,.15),
        inset 0 0 30px rgba(212,175,55,.08);

    animation:
        coreFloat 4s ease-in-out infinite;

}


@keyframes coreFloat {

    0%,
    100% {
        transform:
            translate(-50%,-50%)
            translateZ(30px)
            scale(1);
    }

    50% {
        transform:
            translate(-50%,-50%)
            translateZ(50px)
            scale(1.06);
    }

}


.lux-core-inner {

    text-align: center;

}


.lux-core-inner i {

    display: block;

    color: #d4af37;

    font-size: 24px;

    margin-bottom: 5px;

}


.lux-core-inner span {

    display: block;

    color: rgba(255,255,255,.45);

    font-size: 8px;

    letter-spacing: 3px;

}


.lux-core-inner strong {

    display: block;

    color: #fff;

    font-size: 11px;

    letter-spacing: 2px;

}


/* Orbit dots */

.lux-orbit-dot {

    position: absolute;

    width: 6px;
    height: 6px;

    border-radius: 50%;

    background: #d4af37;

    box-shadow:
        0 0 8px #d4af37,
        0 0 20px rgba(212,175,55,.7);

}


.orbit-dot-one {

    top: 20px;
    left: 145px;

}


.orbit-dot-two {

    right: 25px;
    bottom: 85px;

}


.orbit-dot-three {

    bottom: 15px;
    left: 70px;

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .lux-commitment-section {
        padding: 90px 0;
    }

    .lux-commitment-wrapper {
        padding: 60px 35px;
    }

    .lux-commitment-visual {
        opacity: .35;
        left: -130px;
    }

    .lux-commitment-features {
        grid-template-columns: 1fr;
    }

}


@media (max-width: 767px) {

    .lux-commitment-section {
        padding: 70px 0;
    }

    .lux-commitment-wrapper {
        padding: 55px 20px 40px;
    }

    .lux-commitment-number {
        font-size: 60px;
        top: 15px;
        right: 20px;
    }

    .lux-commitment-kicker {
        font-size: 10px;
        letter-spacing: 2px;
    }

    .lux-kicker-line {
        width: 25px;
    }

    .lux-commitment-title {
        font-size: 35px;
    }

    .lux-commitment-description {
        font-size: 14px;
    }

    .lux-commitment-text {
        padding: 30px 18px;
    }

    .lux-commitment-inner {
        font-size: 14px;
    }

    .lux-commitment-visual {
        width: 220px;
        height: 220px;
        left: -100px;
        bottom: -90px;
        opacity: .2;
    }

    .lux-commitment-feature {
        padding: 14px;
    }

}


/* Accessibility */

@media (prefers-reduced-motion: reduce) {

    .lux-commitment-section *,
    .lux-commitment-section *::before,
    .lux-commitment-section *::after {
        animation: none !important;
        transition: none !important;
    }

}

</style>