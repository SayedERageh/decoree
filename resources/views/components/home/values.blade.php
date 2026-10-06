@php
    $valuesSection = $homeSections->get('values');
@endphp

<section class="lux-values-section">

    {{-- Ambient Background --}}
    <div class="lux-values-glow lux-values-glow-1"></div>
    <div class="lux-values-glow lux-values-glow-2"></div>

    <div class="lux-values-grid-bg"></div>


    <div class="container position-relative">

        {{-- =====================================================
            HEADER
        ====================================================== --}}
        <div
            class="lux-values-header"
            data-aos="fade-up"
        >

            @if($valuesSection?->subtitle)

                <span class="lux-values-kicker">

                    <span class="lux-values-kicker-line"></span>

                    {{ $valuesSection->subtitle }}

                    <span class="lux-values-kicker-line reverse"></span>

                </span>

            @endif


            @if($valuesSection?->title)

                <h2 class="lux-values-title">

                    {{ $valuesSection->title }}

                </h2>

            @endif


            <div class="lux-values-title-decoration">

                <span></span>

                <i class="bi bi-gem"></i>

                <span></span>

            </div>


            @if($valuesSection?->description)

                <div class="lux-values-description">

                    {!! nl2br(e($valuesSection->description)) !!}

                </div>

            @endif

        </div>


        {{-- =====================================================
            VALUES
        ====================================================== --}}
        <div class="lux-values-grid">

            @forelse($coreValues as $value)

                <article
                    class="lux-value-card"
                    data-aos="fade-up"
                    data-aos-delay="{{ ($loop->index % 3) * 120 }}"
                >

                    {{-- LED Border --}}
                    <div class="lux-value-led"></div>


                    {{-- Number --}}
                    <div class="lux-value-number">

                        <span>
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>

                    </div>


                    {{-- Icon --}}
                    <div class="lux-value-icon-wrapper">

                        <div class="lux-value-icon">

                            @if($value->icon)

                                <i class="{{ $value->icon }}"></i>

                            @else

                                <i class="bi bi-check2-circle"></i>

                            @endif

                        </div>

                        <span class="lux-value-icon-ring"></span>

                    </div>


                    {{-- Content --}}
                    <div class="lux-value-content">

                        <span class="lux-value-label">

                            {{ app()->getLocale() === 'ar'
                                ? 'مبدأ أساسي'
                                : 'CORE PRINCIPLE' }}

                        </span>


                        <h3>

                            {{ $value->title }}

                        </h3>


                        @if($value->description)

                            <p>

                                {{ $value->description }}

                            </p>

                        @endif

                    </div>


                    {{-- Bottom Line --}}
                    <div class="lux-value-bottom">

                        <span></span>

                        <i class="bi bi-arrow-up-left"></i>

                    </div>

                </article>

            @empty

                <div class="lux-values-empty">

                    <div class="lux-values-empty-icon">

                        <i class="bi bi-stars"></i>

                    </div>

                    <p>

                        {{ app()->getLocale() === 'ar'
                            ? 'لا توجد قيم أساسية متاحة حاليًا.'
                            : 'No core values available at the moment.' }}

                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>


<style>

/* =========================================================
   LUXURY VALUES SECTION
========================================================= */

.lux-values-section {

    position: relative;

    padding: 120px 0;

    overflow: hidden;

    background:
        radial-gradient(
            circle at 50% 0%,
            rgba(216,185,108,.08),
            transparent 34%
        ),
        radial-gradient(
            circle at 0% 80%,
            rgba(255,255,255,.025),
            transparent 30%
        ),
        linear-gradient(
            145deg,
            #070707 0%,
            #11100d 50%,
            #070707 100%
        );
}


/* =========================================================
   BACKGROUND GRID
========================================================= */

.lux-values-grid-bg {

    position: absolute;

    inset: 0;

    background-image:
        linear-gradient(
            rgba(255,255,255,.02) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,.02) 1px,
            transparent 1px
        );

    background-size: 80px 80px;

    mask-image:
        linear-gradient(
            to bottom,
            transparent,
            black 15%,
            black 85%,
            transparent
        );

    pointer-events: none;
}


/* =========================================================
   AMBIENT GLOW
========================================================= */

.lux-values-glow {

    position: absolute;

    width: 450px;

    height: 450px;

    border-radius: 50%;

    filter: blur(130px);

    pointer-events: none;

    opacity: .13;
}

.lux-values-glow-1 {

    top: -230px;

    left: 50%;

    transform:
        translateX(-50%);

    background:
        rgba(216,185,108,.5);
}

.lux-values-glow-2 {

    bottom: -200px;

    right: -180px;

    background:
        rgba(255,255,255,.12);
}


/* =========================================================
   HEADER
========================================================= */

.lux-values-header {

    position: relative;

    z-index: 2;

    max-width: 850px;

    margin:
        0 auto 65px;

    text-align: center;
}


/* =========================================================
   KICKER
========================================================= */

.lux-values-kicker {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 12px;

    margin-bottom: 18px;

    color: #d8b96c;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 3px;

    text-transform: uppercase;
}

.lux-values-kicker-line {

    width: 35px;

    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d8b96c
        );

    box-shadow:
        0 0 9px
        rgba(216,185,108,.6);
}

.lux-values-kicker-line.reverse {

    background:
        linear-gradient(
            90deg,
            #d8b96c,
            transparent
        );
}


/* =========================================================
   TITLE
========================================================= */

.lux-values-title {

    margin: 0;

    color: #fff;

    font-size:
        clamp(34px, 4vw, 55px);

    font-weight: 800;

    line-height: 1.25;

    letter-spacing: -1px;

    text-shadow:
        0 0 30px
        rgba(255,255,255,.07);
}


/* =========================================================
   TITLE DECORATION
========================================================= */

.lux-values-title-decoration {

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 12px;

    margin-top: 22px;
}

.lux-values-title-decoration span {

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
        rgba(216,185,108,.45);
}

.lux-values-title-decoration span:last-child {

    background:
        linear-gradient(
            90deg,
            #d8b96c,
            transparent
        );
}

.lux-values-title-decoration i {

    color: #d8b96c;

    font-size: 13px;

    filter:
        drop-shadow(
            0 0 8px
            rgba(216,185,108,.8)
        );
}


/* =========================================================
   DESCRIPTION
========================================================= */

.lux-values-description {

    max-width: 650px;

    margin:
        22px auto 0;

    color:
        rgba(255,255,255,.55);

    font-size: 14px;

    line-height: 2;
}


/* =========================================================
   VALUES GRID
========================================================= */

.lux-values-grid {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 22px;
}


/* =========================================================
   VALUE CARD
========================================================= */

.lux-value-card {

    position: relative;

    min-height: 340px;

    padding: 38px 30px 28px;

    overflow: hidden;

    border-radius: 25px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.075),
            rgba(255,255,255,.025)
        );

    border:
        1px solid
        rgba(216,185,108,.16);

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

.lux-value-card:hover {

    transform:
        translateY(-12px);

    border-color:
        rgba(216,185,108,.52);

    box-shadow:
        0 40px 100px
        rgba(0,0,0,.58),

        0 0 45px
        rgba(216,185,108,.07),

        inset 0 1px 0
        rgba(255,255,255,.1);
}


/* =========================================================
   LED TOP
========================================================= */

.lux-value-led {

    position: absolute;

    top: 0;

    left: 12%;

    width: 76%;

    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d8b96c,
            #fff,
            #d8b96c,
            transparent
        );

    box-shadow:
        0 0 13px
        rgba(216,185,108,.7);

    opacity: .55;

    transition:
        all .5s ease;
}

.lux-value-card:hover
.lux-value-led {

    width: 90%;

    left: 5%;

    opacity: 1;
}


/* =========================================================
   NUMBER
========================================================= */

.lux-value-number {

    position: absolute;

    top: 24px;

    left: 26px;

    width: 48px;

    height: 48px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    border:
        1px solid
        rgba(216,185,108,.22);

    background:
        rgba(216,185,108,.035);

    color:
        rgba(216,185,108,.8);

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1px;

    transition:
        transform .45s ease,
        border-color .45s ease;
}

.lux-value-card:hover
.lux-value-number {

    transform:
        rotate(-12deg)
        scale(1.08);

    border-color:
        rgba(216,185,108,.55);
}


/* =========================================================
   ICON
========================================================= */

.lux-value-icon-wrapper {

    position: relative;

    width: 95px;

    height: 95px;

    display: flex;

    align-items: center;

    justify-content: center;

    margin:
        20px auto 25px;
}

.lux-value-icon {

    position: relative;

    z-index: 2;

    width: 72px;

    height: 72px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 22px;

    color: #d8b96c;

    background:
        linear-gradient(
            145deg,
            rgba(216,185,108,.13),
            rgba(216,185,108,.035)
        );

    border:
        1px solid
        rgba(216,185,108,.35);

    font-size: 27px;

    box-shadow:
        0 0 30px
        rgba(216,185,108,.09),

        inset 0 1px 0
        rgba(255,255,255,.08);

    transition:
        transform .5s
        cubic-bezier(.2,.8,.2,1),

        box-shadow .5s ease;
}

.lux-value-card:hover
.lux-value-icon {

    transform:
        translateY(-5px)
        rotate(-5deg);

    box-shadow:
        0 0 40px
        rgba(216,185,108,.18),

        0 12px 35px
        rgba(0,0,0,.25);
}


/* Ring */

.lux-value-icon-ring {

    position: absolute;

    inset: 2px;

    border-radius: 50%;

    border:
        1px dashed
        rgba(216,185,108,.2);

    animation:
        luxValueRing 14s
        linear infinite;
}

@keyframes luxValueRing {

    to {
        transform:
            rotate(360deg);
    }

}


/* =========================================================
   CONTENT
========================================================= */

.lux-value-content {

    text-align: center;
}


/* Label */

.lux-value-label {

    display: block;

    margin-bottom: 9px;

    color: #c9aa63;

    font-size: 9px;

    font-weight: 700;

    letter-spacing: 2px;

    text-transform: uppercase;
}


/* Title */

.lux-value-content h3 {

    margin: 0 0 12px;

    color: #fff;

    font-size: 21px;

    font-weight: 800;

    line-height: 1.45;
}


/* Description */

.lux-value-content p {

    margin: 0;

    color:
        rgba(255,255,255,.52);

    font-size: 12px;

    line-height: 1.9;
}


/* =========================================================
   BOTTOM DECORATION
========================================================= */

.lux-value-bottom {

    position: absolute;

    right: 25px;

    bottom: 22px;

    left: 25px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    opacity: .55;

    transition:
        opacity .35s ease;
}

.lux-value-card:hover
.lux-value-bottom {

    opacity: 1;
}

.lux-value-bottom span {

    width: 55px;

    height: 1px;

    background:
        linear-gradient(
            90deg,
            #d8b96c,
            transparent
        );
}

.lux-value-bottom i {

    color: #d8b96c;

    font-size: 12px;

    filter:
        drop-shadow(
            0 0 5px
            rgba(216,185,108,.5)
        );
}


/* =========================================================
   EMPTY
========================================================= */

.lux-values-empty {

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

.lux-values-empty-icon {

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

.lux-values-empty p {

    margin: 0;

    font-size: 14px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991px) {

    .lux-values-section {

        padding: 90px 0;
    }

    .lux-values-grid {

        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 20px;
    }

}


@media (max-width: 575px) {

    .lux-values-section {

        padding: 70px 0;
    }

    .lux-values-header {

        margin-bottom: 45px;
    }

    .lux-values-title {

        font-size: 32px;
    }

    .lux-values-grid {

        grid-template-columns: 1fr;

        gap: 18px;
    }

    .lux-value-card {

        min-height: 320px;

        padding:
            35px 22px 25px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    .lux-value-card,
    .lux-value-icon,
    .lux-value-number,
    .lux-value-led,
    .lux-value-bottom {

        transition: none !important;
    }

    .lux-value-icon-ring {

        animation: none !important;
    }

}

</style>