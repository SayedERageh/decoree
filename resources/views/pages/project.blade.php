@extends('layouts.app')

@section('content')

@php
    $isArabic = app()->getLocale() === 'ar';
@endphp


{{-- =========================================================
     PROJECT HERO
========================================================= --}}
<section class="lux-project-hero">

    <div class="lux-project-hero-grid"></div>
    <div class="lux-project-hero-glow"></div>

    <div class="container">

        <div class="lux-project-hero-content">

            <div class="lux-project-meta">

                <span class="lux-project-meta-line"></span>

                <span>
                    {{ $isArabic ? 'مشروع من أعمالنا' : 'SELECTED PROJECT' }}
                </span>

                <span class="lux-project-meta-line"></span>

            </div>


            @if($project->category)

                <div class="lux-project-category">
                    <i class="bi bi-gem"></i>
                    {{ $project->category }}
                </div>

            @endif


            <h1>
                {{ $project->title }}
            </h1>


            @if($project->location)

                <div class="lux-project-location">

                    <i class="bi bi-geo-alt"></i>

                    <span>
                        {{ $project->location }}
                    </span>

                </div>

            @endif

        </div>

    </div>

</section>



{{-- =========================================================
     PROJECT DETAILS
========================================================= --}}
<section class="lux-project-details">

    <div class="lux-project-orb lux-project-orb-one"></div>
    <div class="lux-project-orb lux-project-orb-two"></div>

    <div class="container">

        <div class="lux-project-layout">


            {{-- =================================================
                 PROJECT IMAGE
            ================================================== --}}
            <div class="lux-project-visual">

                <div class="lux-project-image-frame">

                    <span class="lux-project-corner lux-project-corner-tl"></span>
                    <span class="lux-project-corner lux-project-corner-tr"></span>
                    <span class="lux-project-corner lux-project-corner-bl"></span>
                    <span class="lux-project-corner lux-project-corner-br"></span>


                    <div class="lux-project-image">

                        @if($project->image)

                            <img
                                src="{{ asset('storage/' . $project->image) }}"
                                alt="{{ $project->title }}"
                            >

                        @else

                            <div class="lux-project-placeholder">

                                <i class="bi bi-building"></i>

                            </div>

                        @endif

                        <div class="lux-project-image-overlay"></div>

                    </div>


                    <div class="lux-project-image-label">

                        <i class="bi bi-stars"></i>

                        <span>
                            {{ $isArabic
                                ? 'تصميم داخلي فاخر'
                                : 'LUXURY INTERIOR DESIGN' }}
                        </span>

                    </div>

                </div>

            </div>



            {{-- =================================================
                 PROJECT INFORMATION
            ================================================== --}}
            <div class="lux-project-content">


                <div class="lux-project-kicker">

                    <span></span>

                    {{ $isArabic
                        ? 'تفاصيل المشروع'
                        : 'PROJECT DETAILS' }}

                    <span></span>

                </div>


                <h2>
                    {{ $isArabic
                        ? 'تفاصيل صُممت بعناية'
                        : 'DETAILS DESIGNED WITH PURPOSE' }}
                </h2>


                <div class="lux-project-title-line">

                    <span></span>

                    <i class="bi bi-gem"></i>

                    <span></span>

                </div>


                {{-- Category --}}

                @if($project->category)

                    <div class="lux-project-info">

                        <div class="lux-project-info-icon">
                            <i class="bi bi-grid"></i>
                        </div>

                        <div>

                            <span>
                                {{ $isArabic
                                    ? 'التصنيف'
                                    : 'CATEGORY' }}
                            </span>

                            <strong>
                                {{ $project->category }}
                            </strong>

                        </div>

                    </div>

                @endif


                {{-- Location --}}

                @if($project->location)

                    <div class="lux-project-info">

                        <div class="lux-project-info-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>

                        <div>

                            <span>
                                {{ $isArabic
                                    ? 'الموقع'
                                    : 'LOCATION' }}
                            </span>

                            <strong>
                                {{ $project->location }}
                            </strong>

                        </div>

                    </div>

                @endif


                {{-- Description --}}

                @if($project->description)

                    <div class="lux-project-description">

                        {!! $project->description !!}

                    </div>

                @endif


                {{-- Back --}}

                <div class="lux-project-actions">

                    <a
                        href="{{ route('projects') }}"
                        class="lux-project-back"
                    >

                        <span class="lux-project-back-icon">
                            <i class="bi bi-arrow-left"></i>
                        </span>

                        <span>
                            {{ $isArabic
                                ? 'العودة إلى مشاريعنا'
                                : 'BACK TO PROJECTS' }}
                        </span>

                    </a>

                </div>


                <div class="lux-project-signature">

                    <span></span>

                    <strong>
                        {{ $isArabic
                            ? 'فخامة تبدأ من التفاصيل'
                            : 'LUXURY BEGINS WITH DETAILS' }}
                    </strong>

                    <span></span>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     CTA
========================================================= --}}
@include('components.home.cta')



<style>

/* =========================================================
   LUXURY PROJECT DETAILS
========================================================= */

.lux-project-hero {
    position: relative;
    overflow: hidden;
    min-height: 480px;
    display: flex;
    align-items: flex-end;
    padding: 100px 0 75px;

    background:
        radial-gradient(
            circle at 12% 35%,
            rgba(212,175,55,.10),
            transparent 27%
        ),
        radial-gradient(
            circle at 90% 20%,
            rgba(255,255,255,.035),
            transparent 28%
        ),
        linear-gradient(
            135deg,
            #080808,
            #101010 55%,
            #080808
        );
}

.lux-project-hero-grid {
    position: absolute;
    inset: 0;
    opacity: .3;
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

    background-size: 65px 65px;
}

.lux-project-hero-glow {
    position: absolute;

    width: 450px;
    height: 450px;

    top: -250px;
    right: 20%;

    border-radius: 50%;

    background: rgba(212,175,55,.08);

    filter: blur(100px);

    pointer-events: none;
}


.lux-project-hero-content {
    position: relative;
    z-index: 2;
    max-width: 1000px;
}


/* =========================================================
   META
========================================================= */

.lux-project-meta {
    display: flex;
    align-items: center;
    gap: 12px;

    margin-bottom: 20px;

    color: #d4af37;

    font-size: 9px;
    font-weight: 800;

    letter-spacing: 3px;
}

.lux-project-meta-line {
    width: 38px;
    height: 1px;

    background: #d4af37;

    box-shadow:
        0 0 10px rgba(212,175,55,.45);
}


/* =========================================================
   CATEGORY
========================================================= */

.lux-project-category {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    margin-bottom: 18px;
    padding: 8px 14px;

    color: #f1df9c;

    font-size: 9px;
    font-weight: 800;

    letter-spacing: 1.5px;

    border: 1px solid rgba(212,175,55,.22);

    background: rgba(212,175,55,.045);

    backdrop-filter: blur(10px);
}

.lux-project-category i {
    color: #d4af37;
    font-size: 11px;
}


/* =========================================================
   TITLE
========================================================= */

.lux-project-hero h1 {
    max-width: 900px;

    margin: 0;

    color: #fff;

    font-size: clamp(42px, 6vw, 76px);

    line-height: 1.08;

    font-weight: 800;

    letter-spacing: -1.5px;

    text-shadow:
        0 10px 35px rgba(0,0,0,.4);
}


/* =========================================================
   LOCATION
========================================================= */

.lux-project-location {
    display: flex;
    align-items: center;
    gap: 9px;

    margin-top: 25px;

    color: rgba(255,255,255,.55);

    font-size: 12px;
    font-weight: 600;
}

.lux-project-location i {
    color: #d4af37;
    font-size: 16px;

    text-shadow:
        0 0 12px rgba(212,175,55,.4);
}



/* =========================================================
   DETAILS SECTION
========================================================= */

.lux-project-details {
    position: relative;

    overflow: hidden;

    padding: 110px 0 120px;

    background:
        radial-gradient(
            circle at 5% 45%,
            rgba(212,175,55,.045),
            transparent 25%
        ),
        radial-gradient(
            circle at 95% 75%,
            rgba(255,255,255,.02),
            transparent 25%
        ),
        #080808;
}

.lux-project-orb {
    position: absolute;

    border-radius: 50%;

    filter: blur(90px);

    pointer-events: none;
}

.lux-project-orb-one {
    width: 320px;
    height: 320px;

    right: -180px;
    top: 20%;

    background: rgba(212,175,55,.055);
}

.lux-project-orb-two {
    width: 250px;
    height: 250px;

    left: -150px;
    bottom: 10%;

    background: rgba(212,175,55,.04);
}


/* =========================================================
   LAYOUT
========================================================= */

.lux-project-layout {
    position: relative;
    z-index: 2;

    display: grid;

    grid-template-columns:
        minmax(0, 1.12fr)
        minmax(360px, .88fr);

    gap: 80px;

    align-items: start;
}


/* =========================================================
   IMAGE
========================================================= */

.lux-project-visual {
    position: relative;
}

.lux-project-image-frame {
    position: relative;
    padding: 12px;
}

.lux-project-image {
    position: relative;

    width: 100%;
    min-height: 600px;

    overflow: hidden;

    background: #111;

    border:
        1px solid
        rgba(212,175,55,.20);

    box-shadow:
        0 35px 90px rgba(0,0,0,.55),
        0 0 45px rgba(212,175,55,.035);
}

.lux-project-image img {
    display: block;

    width: 100%;
    height: 100%;

    min-height: 600px;

    object-fit: cover;

    transition:
        transform 1s
        cubic-bezier(.2,.7,.2,1);
}

.lux-project-image-frame:hover
.lux-project-image img {
    transform: scale(1.045);
}

.lux-project-image-overlay {
    position: absolute;
    inset: 0;

    pointer-events: none;

    background:
        linear-gradient(
            180deg,
            rgba(0,0,0,.02),
            transparent 55%,
            rgba(0,0,0,.40)
        );
}


/* =========================================================
   CORNERS
========================================================= */

.lux-project-corner {
    position: absolute;

    z-index: 5;

    width: 58px;
    height: 58px;

    pointer-events: none;
}

.lux-project-corner-tl {
    top: 0;
    left: 0;

    border-top: 2px solid #d4af37;
    border-left: 2px solid #d4af37;
}

.lux-project-corner-tr {
    top: 0;
    right: 0;

    border-top: 2px solid #d4af37;
    border-right: 2px solid #d4af37;
}

.lux-project-corner-bl {
    bottom: 0;
    left: 0;

    border-bottom: 2px solid #d4af37;
    border-left: 2px solid #d4af37;
}

.lux-project-corner-br {
    bottom: 0;
    right: 0;

    border-bottom: 2px solid #d4af37;
    border-right: 2px solid #d4af37;
}


/* =========================================================
   IMAGE LABEL
========================================================= */

.lux-project-image-label {
    position: absolute;

    z-index: 7;

    left: 32px;
    bottom: 30px;

    display: flex;
    align-items: center;
    gap: 9px;

    padding: 10px 15px;

    color: rgba(255,255,255,.72);

    font-size: 8px;
    font-weight: 800;

    letter-spacing: 1.5px;

    border:
        1px solid
        rgba(212,175,55,.20);

    background:
        rgba(8,8,8,.68);

    backdrop-filter: blur(12px);
}

.lux-project-image-label i {
    color: #d4af37;
    font-size: 13px;
}


/* =========================================================
   PLACEHOLDER
========================================================= */

.lux-project-placeholder {
    width: 100%;
    min-height: 600px;

    display: flex;
    align-items: center;
    justify-content: center;

    color: rgba(212,175,55,.25);

    font-size: 100px;

    background:
        radial-gradient(
            circle,
            rgba(212,175,55,.08),
            transparent 50%
        ),
        #101010;
}



/* =========================================================
   CONTENT
========================================================= */

.lux-project-content {
    padding-top: 12px;
}

.lux-project-kicker {
    display: flex;
    align-items: center;
    gap: 10px;

    margin-bottom: 18px;

    color: #d4af37;

    font-size: 9px;
    font-weight: 800;

    letter-spacing: 2.5px;
}

.lux-project-kicker span {
    width: 32px;
    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            #d4af37
        );
}

.lux-project-kicker span:last-child {
    background:
        linear-gradient(
            90deg,
            #d4af37,
            transparent
        );
}


.lux-project-content h2 {
    max-width: 600px;

    margin: 0;

    color: #fff;

    font-size: clamp(30px, 4vw, 48px);

    line-height: 1.2;

    font-weight: 800;
}


/* =========================================================
   TITLE LINE
========================================================= */

.lux-project-title-line {
    display: flex;
    align-items: center;
    gap: 9px;

    margin: 28px 0 35px;
}

.lux-project-title-line span {
    width: 45px;
    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(212,175,55,.6)
        );
}

.lux-project-title-line span:last-child {
    background:
        linear-gradient(
            90deg,
            rgba(212,175,55,.6),
            transparent
        );
}

.lux-project-title-line i {
    color: #d4af37;

    font-size: 10px;

    text-shadow:
        0 0 15px
        rgba(212,175,55,.5);
}


/* =========================================================
   INFO
========================================================= */

.lux-project-info {
    display: flex;
    align-items: center;
    gap: 15px;

    padding: 18px 0;

    border-bottom:
        1px solid
        rgba(255,255,255,.065);
}

.lux-project-info-icon {
    width: 48px;
    height: 48px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    color: #d4af37;

    font-size: 17px;

    border:
        1px solid
        rgba(212,175,55,.18);

    background:
        rgba(212,175,55,.04);

    transition: .35s ease;
}

.lux-project-info:hover
.lux-project-info-icon {
    transform: translateY(-2px);

    border-color:
        rgba(212,175,55,.45);

    background:
        rgba(212,175,55,.08);

    box-shadow:
        0 0 20px
        rgba(212,175,55,.08);
}

.lux-project-info span,
.lux-project-info strong {
    display: block;
}

.lux-project-info span {
    margin-bottom: 5px;

    color:
        rgba(255,255,255,.32);

    font-size: 8px;

    font-weight: 800;

    letter-spacing: 1.8px;
}

.lux-project-info strong {
    color:
        rgba(255,255,255,.82);

    font-size: 14px;

    line-height: 1.5;
}


/* =========================================================
   DESCRIPTION
========================================================= */

.lux-project-description {
    margin-top: 30px;

    color:
        rgba(255,255,255,.55);

    font-size: 15px;

    line-height: 2;
}

.lux-project-description p {
    margin-bottom: 17px;
}

.lux-project-description h2,
.lux-project-description h3,
.lux-project-description h4 {
    margin-top: 28px;
    margin-bottom: 13px;

    color: #f1df9c;

    line-height: 1.4;
}

.lux-project-description strong {
    color: rgba(255,255,255,.82);
}

.lux-project-description a {
    color: #d4af37;
}


/* =========================================================
   BACK BUTTON
========================================================= */

.lux-project-actions {
    margin-top: 38px;
}

.lux-project-back {
    position: relative;

    display: inline-flex;
    align-items: center;
    gap: 12px;

    min-height: 55px;

    padding: 0 18px 0 10px;

    color: #fff !important;

    text-decoration: none !important;

    font-size: 9px;

    font-weight: 800;

    letter-spacing: 1px;

    border:
        1px solid
        rgba(212,175,55,.25);

    background:
        rgba(212,175,55,.035);

    transition: .35s ease;
}

.lux-project-back:hover {
    color: #111 !important;

    background: #d4af37;

    border-color: #d4af37;

    transform: translateY(-3px);

    box-shadow:
        0 12px 30px
        rgba(212,175,55,.12);
}

.lux-project-back-icon {
    width: 35px;
    height: 35px;

    display: flex;
    align-items: center;
    justify-content: center;

    color: #d4af37;

    border:
        1px solid
        rgba(212,175,55,.2);

    background:
        rgba(0,0,0,.2);

    transition: .35s ease;
}

.lux-project-back:hover
.lux-project-back-icon {
    color: #111;

    border-color:
        rgba(0,0,0,.15);

    background:
        rgba(0,0,0,.08);
}


/* =========================================================
   SIGNATURE
========================================================= */

.lux-project-signature {
    display: flex;
    align-items: center;
    gap: 10px;

    margin-top: 45px;

    color:
        rgba(255,255,255,.23);

    font-size: 7px;

    font-weight: 800;

    letter-spacing: 2px;
}

.lux-project-signature span {
    width: 25px;
    height: 1px;

    background:
        rgba(212,175,55,.25);
}

.lux-project-signature strong {
    color:
        rgba(212,175,55,.45);

    font-weight: 800;
}



/* =========================================================
   RTL
========================================================= */

[dir="rtl"] .lux-project-image-label {
    left: auto;
    right: 32px;
}

[dir="rtl"] .lux-project-meta-line:first-child {
    transform: rotate(180deg);
}

[dir="rtl"] .lux-project-back {
    padding:
        0 10px 0 18px;
}

[dir="rtl"] .lux-project-back-icon i {
    transform: rotate(180deg);
}



/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1199px) {

    .lux-project-layout {
        gap: 55px;

        grid-template-columns:
            minmax(0, 1fr)
            minmax(320px, .85fr);
    }

    .lux-project-image,
    .lux-project-image img,
    .lux-project-placeholder {
        min-height: 530px;
    }

}


@media (max-width: 991px) {

    .lux-project-hero {
        min-height: 420px;
        padding: 100px 0 65px;
    }

    .lux-project-layout {
        grid-template-columns: 1fr;
        gap: 55px;
    }

    .lux-project-content {
        max-width: 750px;
    }

    .lux-project-image,
    .lux-project-image img,
    .lux-project-placeholder {
        min-height: 500px;
    }

    .lux-project-details {
        padding: 75px 0 90px;
    }

}


@media (max-width: 767px) {

    .lux-project-hero {
        min-height: 370px;
        padding: 90px 0 55px;
    }

    .lux-project-hero h1 {
        font-size: 42px;
    }

    .lux-project-meta {
        font-size: 8px;
    }

    .lux-project-details {
        padding: 60px 0 75px;
    }

    .lux-project-image-frame {
        padding: 7px;
    }

    .lux-project-image,
    .lux-project-image img,
    .lux-project-placeholder {
        min-height: 420px;
    }

    .lux-project-corner {
        width: 40px;
        height: 40px;
    }

    .lux-project-image-label {
        left: 20px;
        bottom: 20px;
    }

    [dir="rtl"] .lux-project-image-label {
        left: auto;
        right: 20px;
    }

    .lux-project-content h2 {
        font-size: 32px;
    }

}


@media (max-width: 575px) {

    .lux-project-hero {
        min-height: 340px;
        padding: 85px 0 45px;
    }

    .lux-project-hero h1 {
        font-size: 33px;
    }

    .lux-project-location {
        font-size: 11px;
    }

    .lux-project-image,
    .lux-project-image img,
    .lux-project-placeholder {
        min-height: 330px;
    }

    .lux-project-placeholder {
        font-size: 70px;
    }

    .lux-project-image-label {
        padding: 8px 10px;
        font-size: 6px;
    }

    .lux-project-info {
        padding: 15px 0;
    }

    .lux-project-info-icon {
        width: 43px;
        height: 43px;
    }

    .lux-project-description {
        font-size: 13px;
        line-height: 1.9;
    }

    .lux-project-back {
        width: 100%;
        justify-content: center;
    }

    .lux-project-signature {
        justify-content: center;
        font-size: 6px;
    }

}


@media (prefers-reduced-motion: reduce) {

    .lux-project-image img,
    .lux-project-info-icon,
    .lux-project-back {
        transition: none !important;
    }

}

</style>

@endsection