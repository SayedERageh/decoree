@php
    $aboutSection = $homeSections->get('about');
@endphp

<section class="lux-about-section">

    {{-- Ambient Background --}}
    <div class="lux-about-orb lux-about-orb-1"></div>
    <div class="lux-about-orb lux-about-orb-2"></div>

    <div class="container">

        <div class="lux-about-grid">

            {{-- =====================================================
                 CONTENT
            ====================================================== --}}
            <div
                class="lux-about-content"
                data-aos="fade-left"
                data-aos-duration="1000"
            >

                @if($aboutSection?->subtitle)

                    <div class="lux-about-kicker">

                        <span class="lux-kicker-line"></span>

                        <span>
                            {{ $aboutSection->subtitle }}
                        </span>

                    </div>

                @endif


                @if($aboutSection?->title)

                    <h2 class="lux-about-title">

                        {{ $aboutSection->title }}

                        <span class="lux-title-glow"></span>

                    </h2>

                @endif


                @if($aboutSection?->description || $company->about)

                    <div class="lux-about-text">

                        {!! $company->about !!}

                    </div>

                @endif


                {{-- Features --}}
                <div class="lux-about-features">

                    <div class="lux-about-feature">

                        <div class="lux-feature-icon">
                            <i class="bi bi-stars"></i>
                        </div>

                        <div>
                            <strong>تصميم عصري</strong>
                            <span>تفاصيل مدروسة تناسب ذوقك</span>
                        </div>

                    </div>


                    <div class="lux-about-feature">

                        <div class="lux-feature-icon">
                            <i class="bi bi-house-heart"></i>
                        </div>

                        <div>
                            <strong>تنفيذ باحتراف</strong>
                            <span>جودة عالية في كل تفصيلة</span>
                        </div>

                    </div>


                    <div class="lux-about-feature">

                        <div class="lux-feature-icon">
                            <i class="bi bi-gem"></i>
                        </div>

                        <div>
                            <strong>خامات راقية</strong>
                            <span>اختيارات تناسب التصميم الحديث</span>
                        </div>

                    </div>

                </div>


                {{-- Action --}}
                @if($aboutSection?->button_text)

                    <div class="lux-about-actions">

                        <a
                            href="{{ $aboutSection->button_url ?: route('about') }}"
                            class="lux-about-button"
                        >

                            <span>
                                {{ $aboutSection->button_text }}
                            </span>

                            <i class="bi bi-arrow-up-left"></i>

                        </a>


                        @if($company->phone)

                            <a
                                href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone) }}"
                                class="lux-about-phone"
                            >

                                <span class="lux-phone-icon">
                                    <i class="bi bi-telephone"></i>
                                </span>

                                <span class="lux-phone-content">

                                    <small>تواصل معنا</small>

                                    <strong dir="ltr">
                                        {{ $company->phone }}
                                    </strong>

                                </span>

                            </a>

                        @endif

                    </div>

                @endif

            </div>


            {{-- =====================================================
                 VISUAL
            ====================================================== --}}
            <div
                class="lux-about-visual"
                data-aos="fade-right"
                data-aos-duration="1100"
            >

                <div class="lux-about-image-wrapper">

                    {{-- Main Image --}}
                    <div class="lux-about-image">

                        @if($aboutSection?->image)

                            <img
                                src="{{ asset('storage/' . $aboutSection->image) }}"
                                alt="{{ $aboutSection->title ?? $company->company_name }}"
                            >

                        @else

                            <img
                                src="{{ asset('assets/images/about-industrial.jpg') }}"
                                alt="{{ $company->company_name }}"
                            >

                        @endif

                        <div class="lux-image-overlay"></div>

                    </div>


                    {{-- LED Border --}}
                    <div class="lux-image-border"></div>


                    {{-- Corner Lights --}}
                    <span class="lux-corner lux-corner-top"></span>
                    <span class="lux-corner lux-corner-bottom"></span>


                    {{-- Floating Glass Card --}}
                    <div class="lux-floating-card">

                        <div class="lux-floating-icon">

                            <i class="bi bi-shield-check"></i>

                        </div>

                        <div class="lux-floating-content">

                            <strong>
                                {{ $company->company_name }}
                            </strong>

                            @if($company->phone)

                                <span dir="ltr">
                                    {{ $company->phone }}
                                </span>

                            @endif

                        </div>

                    </div>


                    {{-- Experience Badge --}}
                    <div class="lux-experience-badge">

                        <span class="lux-experience-number">
                            <i class="bi bi-gem"></i>
                        </span>

                        <span class="lux-experience-text">
                            <strong>QUALITY</strong>
                            <small>DESIGN & DETAIL</small>
                        </span>

                    </div>


                    {{-- Decorative Rings --}}
                    <div class="lux-ring lux-ring-1"></div>
                    <div class="lux-ring lux-ring-2"></div>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
   LUXURY ABOUT SECTION
========================================================= */

.lux-about-section {

    position: relative;

    padding: 130px 0;

    overflow: hidden;

    background:
        radial-gradient(
            circle at 85% 50%,
            rgba(216,179,106,.055),
            transparent 30%
        ),
        linear-gradient(
            180deg,
            #08090b,
            #0c0e11
        );
}


/* =========================================================
   AMBIENT ORBS
========================================================= */

.lux-about-orb {

    position: absolute;

    width: 420px;
    height: 420px;

    border-radius: 50%;

    pointer-events: none;

    filter: blur(70px);

    opacity: .35;

    animation:
        luxOrbFloat 12s ease-in-out infinite alternate;
}

.lux-about-orb-1 {

    top: -200px;
    right: -160px;

    background:
        rgba(216,179,106,.09);
}

.lux-about-orb-2 {

    bottom: -250px;
    left: -180px;

    background:
        rgba(216,179,106,.05);

    animation-delay: -5s;
}


@keyframes luxOrbFloat {

    0% {
        transform:
            translate3d(0,0,0)
            scale(1);
    }

    100% {
        transform:
            translate3d(-60px,40px,0)
            scale(1.15);
    }
}


/* =========================================================
   GRID
========================================================= */

.lux-about-grid {

    position: relative;

    display: grid;

    grid-template-columns:
        .95fr
        1.05fr;

    align-items: center;

    gap: 90px;

    z-index: 2;
}


/* =========================================================
   CONTENT
========================================================= */

.lux-about-content {

    position: relative;

    z-index: 5;
}


/* =========================================================
   KICKER
========================================================= */

.lux-about-kicker {

    display: flex;

    align-items: center;

    gap: 12px;

    margin-bottom: 18px;

    color:
        var(--lux-gold-light);

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 1px;
}


.lux-kicker-line {

    width: 42px;
    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            var(--lux-gold)
        );

    box-shadow:
        0 0 12px
        rgba(216,179,106,.6);
}


/* =========================================================
   TITLE
========================================================= */

.lux-about-title {

    position: relative;

    max-width: 650px;

    margin: 0 0 28px;

    color: #fff;

    font-size:
        clamp(34px, 4vw, 58px);

    line-height: 1.25;

    font-weight: 900;

    letter-spacing: -.8px;
}


.lux-title-glow {

    position: absolute;

    right: -20px;
    bottom: 5px;

    width: 100px;
    height: 100px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(216,179,106,.10),
            transparent 70%
        );

    filter: blur(10px);

    pointer-events: none;
}


/* =========================================================
   TEXT
========================================================= */

.lux-about-text {

    max-width: 610px;

    color:
        rgba(255,255,255,.62);

    font-size: 15px;

    line-height: 2.1;
}


/* Fix HTML coming from editor */

.lux-about-text p {

    margin:
        0 0 14px;
}

.lux-about-text strong {

    color:
        rgba(255,255,255,.9);
}


/* =========================================================
   FEATURES
========================================================= */

.lux-about-features {

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 12px;

    margin-top: 32px;
}


.lux-about-feature {

    display: flex;

    flex-direction: column;

    gap: 12px;

    padding: 16px;

    border:
        1px solid rgba(255,255,255,.07);

    border-radius: 15px;

    background:
        rgba(255,255,255,.025);

    backdrop-filter:
        blur(12px);

    transition:
        all .45s
        cubic-bezier(.16,1,.3,1);
}


.lux-about-feature:hover {

    transform:
        translateY(-7px);

    border-color:
        rgba(216,179,106,.25);

    background:
        rgba(216,179,106,.045);

    box-shadow:
        0 20px 45px rgba(0,0,0,.25),
        0 0 25px rgba(216,179,106,.05);
}


/* =========================================================
   FEATURE ICON
========================================================= */

.lux-feature-icon {

    width: 42px;
    height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 11px;

    color:
        var(--lux-gold-light);

    background:
        linear-gradient(
            145deg,
            rgba(216,179,106,.13),
            rgba(216,179,106,.035)
        );

    border:
        1px solid
        rgba(216,179,106,.18);

    box-shadow:
        0 0 18px
        rgba(216,179,106,.05);

    transition:
        all .4s ease;
}


.lux-about-feature:hover .lux-feature-icon {

    transform:
        rotate(-5deg)
        scale(1.08);

    box-shadow:
        0 0 25px
        rgba(216,179,106,.16);
}


.lux-about-feature strong {

    display: block;

    color: #fff;

    font-size: 12px;

    font-weight: 800;
}


.lux-about-feature span {

    display: block;

    margin-top: 4px;

    color:
        rgba(255,255,255,.43);

    font-size: 10px;

    line-height: 1.7;
}


/* =========================================================
   ACTIONS
========================================================= */

.lux-about-actions {

    display: flex;

    align-items: center;

    flex-wrap: wrap;

    gap: 16px;

    margin-top: 35px;
}


/* =========================================================
   MAIN BUTTON
========================================================= */

.lux-about-button {

    position: relative;

    display: inline-flex;

    align-items: center;

    gap: 18px;

    min-height: 54px;

    padding:
        0 22px;

    overflow: hidden;

    border:
        1px solid
        rgba(216,179,106,.45);

    border-radius: 13px;

    color: #111 !important;

    background:
        linear-gradient(
            135deg,
            #f0d08b,
            #c89e50
        );

    font-size: 13px;

    font-weight: 900;

    box-shadow:
        0 12px 35px
        rgba(216,179,106,.13);

    transition:
        all .45s
        cubic-bezier(.16,1,.3,1);
}


.lux-about-button::before {

    content: "";

    position: absolute;

    top: -100%;
    left: -40%;

    width: 30%;
    height: 300%;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.55),
            transparent
        );

    transform:
        rotate(25deg);

    transition:
        left .7s ease;
}


.lux-about-button:hover {

    transform:
        translateY(-4px);

    box-shadow:
        0 18px 45px
        rgba(216,179,106,.23),
        0 0 30px
        rgba(216,179,106,.08);
}


.lux-about-button:hover::before {

    left: 130%;
}


.lux-about-button i {

    font-size: 17px;

    transition:
        transform .4s ease;
}


.lux-about-button:hover i {

    transform:
        translate(-4px,-4px);
}


/* =========================================================
   PHONE
========================================================= */

.lux-about-phone {

    display: flex;

    align-items: center;

    gap: 10px;

    color: #fff;

    transition:
        all .4s ease;
}


.lux-phone-icon {

    width: 45px;
    height: 45px;

    display: flex;

    align-items: center;
    justify-content: center;

    color:
        var(--lux-gold-light);

    border:
        1px solid
        rgba(216,179,106,.20);

    border-radius: 12px;

    background:
        rgba(216,179,106,.045);
}


.lux-phone-content {

    display: flex;

    flex-direction: column;
}


.lux-phone-content small {

    color:
        rgba(255,255,255,.40);

    font-size: 9px;
}


.lux-phone-content strong {

    color:
        var(--lux-gold-light);

    font-size: 13px;

    letter-spacing: .5px;
}


.lux-about-phone:hover {

    transform:
        translateY(-3px);
}


/* =========================================================
   VISUAL
========================================================= */

.lux-about-visual {

    position: relative;

    perspective: 1200px;
}


.lux-about-image-wrapper {

    position: relative;

    min-height: 590px;

    transform-style:
        preserve-3d;
}


/* =========================================================
   MAIN IMAGE
========================================================= */

.lux-about-image {

    position: absolute;

    inset:
        20px 20px 20px 20px;

    overflow: hidden;

    border-radius:
        25px;

    background: #111;

    border:
        1px solid
        rgba(216,179,106,.20);

    box-shadow:
        0 40px 90px rgba(0,0,0,.55),
        0 0 50px rgba(216,179,106,.045);

    transform:
        rotateY(-4deg)
        rotateX(2deg);

    transition:
        transform 1s
        cubic-bezier(.16,1,.3,1);
}


.lux-about-visual:hover
.lux-about-image {

    transform:
        rotateY(0deg)
        rotateX(0deg)
        scale(1.015);
}


.lux-about-image img {

    width: 100%;
    height: 100%;

    min-height: 590px;

    object-fit: cover;

    transition:
        transform 1.2s
        cubic-bezier(.16,1,.3,1);
}


.lux-about-visual:hover
.lux-about-image img {

    transform:
        scale(1.055);
}


/* =========================================================
   IMAGE OVERLAY
========================================================= */

.lux-image-overlay {

    position: absolute;

    inset: 0;

    background:
        linear-gradient(
            135deg,
            rgba(0,0,0,.12),
            transparent 45%,
            rgba(216,179,106,.07)
        );

    pointer-events: none;
}


/* =========================================================
   LED BORDER
========================================================= */

.lux-image-border {

    position: absolute;

    inset: 8px;

    border:
        1px solid
        rgba(216,179,106,.28);

    border-radius:
        30px;

    pointer-events: none;

    z-index: 4;

    box-shadow:
        0 0 30px
        rgba(216,179,106,.04);

    animation:
        luxBorderPulse 4s ease-in-out infinite;
}


@keyframes luxBorderPulse {

    0%,
    100% {
        opacity: .45;
    }

    50% {
        opacity: 1;

        box-shadow:
            0 0 30px
            rgba(216,179,106,.13);
    }
}


/* =========================================================
   CORNER LIGHTS
========================================================= */

.lux-corner {

    position: absolute;

    width: 70px;
    height: 70px;

    z-index: 6;

    pointer-events: none;
}


.lux-corner-top {

    top: 0;
    right: 0;

    border-top:
        2px solid
        var(--lux-gold-light);

    border-right:
        2px solid
        var(--lux-gold-light);

    border-radius:
        0 20px 0 0;

    box-shadow:
        0 -4px 20px
        rgba(216,179,106,.25);
}


.lux-corner-bottom {

    bottom: 0;
    left: 0;

    border-bottom:
        2px solid
        var(--lux-gold-light);

    border-left:
        2px solid
        var(--lux-gold-light);

    border-radius:
        0 0 0 20px;

    box-shadow:
        0 4px 20px
        rgba(216,179,106,.25);
}


/* =========================================================
   FLOATING CARD
========================================================= */

.lux-floating-card {

    position: absolute;

    right: -35px;
    bottom: 65px;

    display: flex;

    align-items: center;

    gap: 13px;

    min-width: 245px;

    padding:
        15px 18px;

    border:
        1px solid
        rgba(216,179,106,.25);

    border-radius: 16px;

    background:
        rgba(10,11,13,.78);

    backdrop-filter:
        blur(18px);

    box-shadow:
        0 25px 60px
        rgba(0,0,0,.45),
        0 0 30px
        rgba(216,179,106,.07);

    z-index: 10;

    transform:
        translateZ(70px);

    animation:
        luxFloatingCard 5s
        ease-in-out infinite;
}


@keyframes luxFloatingCard {

    0%,
    100% {
        transform:
            translate3d(0,0,70px);
    }

    50% {
        transform:
            translate3d(0,-12px,70px);
    }
}


/* =========================================================
   FLOATING ICON
========================================================= */

.lux-floating-icon {

    width: 45px;
    height: 45px;

    display: flex;

    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    color:
        var(--lux-gold-light);

    border:
        1px solid
        rgba(216,179,106,.25);

    border-radius: 12px;

    background:
        linear-gradient(
            145deg,
            rgba(216,179,106,.15),
            rgba(216,179,106,.035)
        );

    box-shadow:
        0 0 20px
        rgba(216,179,106,.08);
}


.lux-floating-icon i {

    font-size: 20px;
}


/* =========================================================
   FLOATING CONTENT
========================================================= */

.lux-floating-content {

    display: flex;

    flex-direction: column;

    gap: 2px;

    min-width: 0;
}


.lux-floating-content strong {

    color: #fff;

    font-size: 12px;

    font-weight: 800;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;
}


.lux-floating-content span {

    color:
        var(--lux-gold-light);

    font-size: 11px;
}


/* =========================================================
   EXPERIENCE BADGE
========================================================= */

.lux-experience-badge {

    position: absolute;

    top: 45px;
    left: -25px;

    display: flex;

    align-items: center;

    gap: 10px;

    padding:
        11px 14px;

    border:
        1px solid
        rgba(255,255,255,.09);

    border-radius: 13px;

    background:
        rgba(8,9,11,.78);

    backdrop-filter:
        blur(15px);

    box-shadow:
        0 20px 45px
        rgba(0,0,0,.38);

    z-index: 10;

    animation:
        luxBadgeFloat 6s
        ease-in-out infinite;
}


@keyframes luxBadgeFloat {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(8px);
    }
}


.lux-experience-number {

    width: 37px;
    height: 37px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 10px;

    color:
        var(--lux-gold-light);

    background:
        rgba(216,179,106,.08);

    border:
        1px solid
        rgba(216,179,106,.18);
}


.lux-experience-text {

    display: flex;

    flex-direction: column;

    gap: 1px;
}


.lux-experience-text strong {

    color: #fff;

    font-size: 9px;

    letter-spacing: 1.5px;
}


.lux-experience-text small {

    color:
        rgba(255,255,255,.38);

    font-size: 7px;

    letter-spacing: 1px;
}


/* =========================================================
   DECORATIVE RINGS
========================================================= */

.lux-ring {

    position: absolute;

    border-radius: 50%;

    border:
        1px solid
        rgba(216,179,106,.12);

    pointer-events: none;

    z-index: 1;

    animation:
        luxRingRotate 20s linear infinite;
}


.lux-ring-1 {

    width: 210px;
    height: 210px;

    right: -105px;
    top: 25px;
}


.lux-ring-2 {

    width: 120px;
    height: 120px;

    left: -60px;
    bottom: 20px;

    animation-direction: reverse;

    animation-duration: 15s;
}


@keyframes luxRingRotate {

    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .lux-about-section {

        padding: 90px 0;
    }

    .lux-about-grid {

        grid-template-columns: 1fr;

        gap: 70px;
    }

    .lux-about-content {

        order: 1;
    }

    .lux-about-visual {

        order: 2;
    }

    .lux-about-image-wrapper {

        max-width: 700px;

        margin-inline: auto;
    }

    .lux-about-features {

        max-width: 700px;
    }

    .lux-floating-card {

        right: 20px;
    }

    .lux-experience-badge {

        left: 20px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .lux-about-section {

        padding: 75px 0;
    }

    .lux-about-grid {

        gap: 50px;
    }

    .lux-about-title {

        font-size: 34px;

        line-height: 1.35;
    }

    .lux-about-text {

        font-size: 13px;

        line-height: 2;
    }

    .lux-about-features {

        grid-template-columns: 1fr;

        gap: 10px;
    }

    .lux-about-feature {

        flex-direction: row;

        align-items: center;
    }

    .lux-about-image-wrapper {

        min-height: 430px;
    }

    .lux-about-image {

        inset: 10px;

        border-radius: 20px;
    }

    .lux-about-image img {

        min-height: 430px;
    }

    .lux-image-border {

        inset: 2px;

        border-radius: 23px;
    }

    .lux-floating-card {

        right: 5px;

        bottom: 35px;

        min-width: auto;

        max-width: calc(100% - 30px);

        padding: 12px;
    }

    .lux-floating-content strong {

        font-size: 10px;
    }

    .lux-experience-badge {

        top: 20px;

        left: 5px;

        padding: 9px;
    }

    .lux-about-actions {

        align-items: stretch;

        flex-direction: column;
    }

    .lux-about-button {

        justify-content: center;
    }

    .lux-about-phone {

        justify-content: center;
    }

    .lux-ring-1 {

        right: -120px;
    }

    .lux-ring-2 {

        left: -80px;
    }
}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .lux-about-title {

        font-size: 29px;
    }

    .lux-about-image-wrapper {

        min-height: 370px;
    }

    .lux-about-image img {

        min-height: 370px;
    }

    .lux-floating-card {

        bottom: 20px;

        right: 0;

        max-width: 90%;
    }

    .lux-floating-icon {

        width: 38px;
        height: 38px;
    }

    .lux-floating-content strong {

        font-size: 9px;
    }

    .lux-floating-content span {

        font-size: 9px;
    }
}

</style>
