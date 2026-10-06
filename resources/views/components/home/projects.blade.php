@php
    $projectsSection = $homeSections->get('projects');
@endphp

<section class="lux-projects-section">

    {{-- Ambient Background --}}
    <div class="lux-projects-glow lux-projects-glow-1"></div>
    <div class="lux-projects-glow lux-projects-glow-2"></div>

    <div class="lux-projects-grid-bg"></div>

    <div class="container position-relative">

        {{-- =====================================================
            HEADER
        ====================================================== --}}
        <div class="lux-projects-header" data-aos="fade-up">

            <div class="lux-projects-heading">

                @if($projectsSection?->subtitle)

                    <span class="lux-projects-kicker">

                        <span class="lux-projects-kicker-line"></span>

                        {{ $projectsSection->subtitle }}

                    </span>

                @endif


                @if($projectsSection?->title)

                    <h2 class="lux-projects-title">
                        {{ $projectsSection->title }}
                    </h2>

                @endif


                <div class="lux-projects-title-decoration">

                    <span></span>

                    <i class="bi bi-stars"></i>

                    <span></span>

                </div>

            </div>

        </div>


        {{-- =====================================================
            PROJECTS
        ====================================================== --}}
        <div class="lux-projects-grid">

            @forelse($projects->take(6) as $project)

                <article
                    class="lux-project-card lux-project-card-{{ $loop->iteration }}"
                    data-aos="fade-up"
                    data-aos-delay="{{ ($loop->index % 3) * 100 }}"
                >

                    {{-- Project Image --}}
                    <a
                        href="{{ route('projects.show', $project->slug) }}"
                        class="lux-project-image"
                    >

                        @if($project->image)

                            <img
                                src="{{ asset('storage/' . $project->image) }}"
                                alt="{{ $project->title }}"
                                loading="lazy"
                            >

                        @else

                            <div class="lux-project-placeholder">

                                <div class="lux-project-placeholder-icon">

                                    <i class="bi bi-building"></i>

                                </div>

                                <span>
                                    {{ app()->getLocale() === 'ar'
                                        ? 'مشروع'
                                        : 'Project' }}
                                </span>

                            </div>

                        @endif


                        {{-- Dark Image Gradient --}}
                        <div class="lux-project-gradient"></div>


                        {{-- Project Number --}}
                        <span class="lux-project-number">

                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}

                        </span>


                        {{-- Category --}}
                        @if($project->category)

                            <span class="lux-project-category">

                                <i class="bi bi-gem"></i>

                                {{ $project->category }}

                            </span>

                        @endif


                        {{-- Hover View --}}
                        <div class="lux-project-overlay">

                            <div class="lux-project-view">

                                <i class="bi bi-arrow-up-left"></i>

                            </div>

                            <span>

                                {{ app()->getLocale() === 'ar'
                                    ? 'استكشف المشروع'
                                    : 'Explore Project' }}

                            </span>

                        </div>


                        {{-- LED Corners --}}
                        <span class="lux-project-corner lux-project-corner-tl"></span>
                        <span class="lux-project-corner lux-project-corner-tr"></span>
                        <span class="lux-project-corner lux-project-corner-bl"></span>
                        <span class="lux-project-corner lux-project-corner-br"></span>

                    </a>


                    {{-- =================================================
                        CONTENT
                    ================================================== --}}
                    <div class="lux-project-content">

                        <div class="lux-project-content-top">

                            <div>

                                <span class="lux-project-label">

                                    {{ app()->getLocale() === 'ar'
                                        ? 'مشروع داخلي'
                                        : 'Interior Project' }}

                                </span>

                                <h3>

                                    <a
                                        href="{{ route('projects.show', $project->slug) }}"
                                    >
                                        {{ $project->title }}
                                    </a>

                                </h3>

                            </div>


                            <a
                                href="{{ route('projects.show', $project->slug) }}"
                                class="lux-project-arrow"
                                aria-label="{{ $project->title }}"
                            >

                                <i class="bi bi-arrow-up-left"></i>

                            </a>

                        </div>


                        @if($project->location)

                            <div class="lux-project-location">

                                <i class="bi bi-geo-alt"></i>

                                <span>
                                    {{ $project->location }}
                                </span>

                            </div>

                        @endif

                    </div>

                </article>

            @empty

                <div class="lux-projects-empty">

                    <div class="lux-projects-empty-icon">

                        <i class="bi bi-building"></i>

                    </div>

                    <p>

                        {{ app()->getLocale() === 'ar'
                            ? 'لا توجد مشروعات متاحة حاليًا.'
                            : 'No projects available at the moment.' }}

                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>


<style>

/* =========================================================
   LUXURY PROJECTS
========================================================= */

.lux-projects-section {

    position: relative;

    padding: 115px 0;

    overflow: hidden;

    background:
        radial-gradient(
            circle at 15% 20%,
            rgba(216,185,108,.08),
            transparent 28%
        ),
        radial-gradient(
            circle at 90% 70%,
            rgba(255,255,255,.035),
            transparent 30%
        ),
        linear-gradient(
            135deg,
            #070707 0%,
            #11100d 50%,
            #070707 100%
        );
}


/* =========================================================
   GRID BACKGROUND
========================================================= */

.lux-projects-grid-bg {

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

    background-size: 75px 75px;

    mask-image:
        linear-gradient(
            to bottom,
            transparent,
            black 12%,
            black 88%,
            transparent
        );

    pointer-events: none;
}


/* =========================================================
   AMBIENT GLOW
========================================================= */

.lux-projects-glow {

    position: absolute;

    width: 420px;
    height: 420px;

    border-radius: 50%;

    filter: blur(120px);

    pointer-events: none;

    opacity: .16;
}

.lux-projects-glow-1 {

    top: 5%;
    right: -220px;

    background:
        rgba(216,185,108,.45);
}

.lux-projects-glow-2 {

    bottom: 5%;
    left: -220px;

    background:
        rgba(255,255,255,.12);
}


/* =========================================================
   HEADER
========================================================= */

.lux-projects-header {

    position: relative;

    z-index: 2;

    margin-bottom: 60px;

    text-align: center;
}

.lux-projects-heading {

    max-width: 850px;

    margin: auto;
}


/* Kicker */

.lux-projects-kicker {

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

.lux-projects-kicker-line {

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

.lux-projects-title {

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

.lux-projects-title-decoration {

    display: flex;

    justify-content: center;

    align-items: center;

    gap: 12px;

    margin-top: 22px;
}

.lux-projects-title-decoration span {

    width: 75px;

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

.lux-projects-title-decoration span:last-child {

    background:
        linear-gradient(
            90deg,
            #d8b96c,
            transparent
        );
}

.lux-projects-title-decoration i {

    color: #d8b96c;

    font-size: 13px;

    filter:
        drop-shadow(
            0 0 7px
            rgba(216,185,108,.8)
        );
}


/* =========================================================
   GRID
========================================================= */

.lux-projects-grid {

    position: relative;

    z-index: 2;

    display: grid;

    grid-template-columns:
        repeat(12, 1fr);

    gap: 24px;
}


/* =========================================================
   CARD
========================================================= */

.lux-project-card {

    position: relative;

    overflow: hidden;

    min-width: 0;

    border-radius: 25px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.07),
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


/* First 2 cards larger */

.lux-project-card-1,
.lux-project-card-2 {

    grid-column: span 6;
}


/* Remaining cards */

.lux-project-card-3,
.lux-project-card-4,
.lux-project-card-5,
.lux-project-card-6 {

    grid-column: span 3;
}


/* Hover */

.lux-project-card:hover {

    transform:
        translateY(-12px);

    border-color:
        rgba(216,185,108,.55);

    box-shadow:
        0 40px 100px
        rgba(0,0,0,.6),

        0 0 40px
        rgba(216,185,108,.08),

        inset 0 1px 0
        rgba(255,255,255,.1);
}


/* =========================================================
   IMAGE
========================================================= */

.lux-project-image {

    position: relative;

    display: block;

    height: 440px;

    overflow: hidden;

    background: #0b0b0b;
}


/* Smaller projects */

.lux-project-card-3 .lux-project-image,
.lux-project-card-4 .lux-project-image,
.lux-project-card-5 .lux-project-image,
.lux-project-card-6 .lux-project-image {

    height: 360px;
}


/* Image */

.lux-project-image img {

    width: 100%;

    height: 100%;

    display: block;

    object-fit: cover;

    transition:
        transform 1s
        cubic-bezier(.2,.8,.2,1),

        filter .6s ease;
}

.lux-project-card:hover
.lux-project-image img {

    transform:
        scale(1.09);

    filter:
        brightness(.72)
        saturate(1.05);
}


/* =========================================================
   IMAGE GRADIENT
========================================================= */

.lux-project-gradient {

    position: absolute;

    inset: 0;

    z-index: 1;

    background:
        linear-gradient(
            to bottom,
            rgba(0,0,0,.15),
            transparent 35%,
            rgba(0,0,0,.85) 100%
        );

    pointer-events: none;
}


/* =========================================================
   NUMBER
========================================================= */

.lux-project-number {

    position: absolute;

    top: 20px;

    right: 20px;

    z-index: 4;

    display: flex;

    align-items: center;

    justify-content: center;

    min-width: 46px;

    height: 34px;

    padding: 0 11px;

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

    box-shadow:
        0 5px 20px
        rgba(0,0,0,.25);
}


/* =========================================================
   CATEGORY
========================================================= */

.lux-project-category {

    position: absolute;

    top: 20px;

    left: 20px;

    z-index: 4;

    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 8px 12px;

    border-radius: 30px;

    color: #fff;

    background:
        rgba(5,5,5,.52);

    border:
        1px solid
        rgba(255,255,255,.12);

    font-size: 10px;

    font-weight: 700;

    backdrop-filter:
        blur(12px);
}

.lux-project-category i {

    color: #d8b96c;

    font-size: 11px;

    filter:
        drop-shadow(
            0 0 6px
            rgba(216,185,108,.7)
        );
}


/* =========================================================
   HOVER OVERLAY
========================================================= */

.lux-project-overlay {

    position: absolute;

    inset: 0;

    z-index: 5;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-direction: column;

    gap: 12px;

    background:
        rgba(7,7,7,.38);

    opacity: 0;

    backdrop-filter:
        blur(0);

    transition:
        opacity .45s ease,

        backdrop-filter .45s ease;
}

.lux-project-card:hover
.lux-project-overlay {

    opacity: 1;

    backdrop-filter:
        blur(5px);
}


/* View Circle */

.lux-project-view {

    width: 72px;

    height: 72px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: #d8b96c;

    background:
        rgba(5,5,5,.55);

    border:
        1px solid
        rgba(216,185,108,.7);

    box-shadow:
        0 0 35px
        rgba(216,185,108,.2);

    font-size: 22px;

    transform:
        scale(.65)
        rotate(-20deg);

    transition:
        transform .55s
        cubic-bezier(.2,.8,.2,1);
}

.lux-project-card:hover
.lux-project-view {

    transform:
        scale(1)
        rotate(0);
}

.lux-project-overlay > span {

    color:
        rgba(255,255,255,.92);

    font-size: 12px;

    letter-spacing: 1px;
}


/* =========================================================
   LED CORNERS
========================================================= */

.lux-project-corner {

    position: absolute;

    z-index: 6;

    width: 35px;

    height: 35px;

    opacity: .5;

    transition:
        all .45s ease;
}


/* Top Left */

.lux-project-corner-tl {

    top: 15px;

    left: 15px;

    border-top:
        1px solid #d8b96c;

    border-left:
        1px solid #d8b96c;
}


/* Top Right */

.lux-project-corner-tr {

    top: 15px;

    right: 15px;

    border-top:
        1px solid #d8b96c;

    border-right:
        1px solid #d8b96c;
}


/* Bottom Left */

.lux-project-corner-bl {

    bottom: 15px;

    left: 15px;

    border-bottom:
        1px solid #d8b96c;

    border-left:
        1px solid #d8b96c;
}


/* Bottom Right */

.lux-project-corner-br {

    bottom: 15px;

    right: 15px;

    border-bottom:
        1px solid #d8b96c;

    border-right:
        1px solid #d8b96c;
}


/* Corner Animation */

.lux-project-card:hover
.lux-project-corner {

    width: 50px;

    height: 50px;

    opacity: 1;

    filter:
        drop-shadow(
            0 0 7px
            rgba(216,185,108,.6)
        );
}


/* =========================================================
   CONTENT
========================================================= */

.lux-project-content {

    padding: 22px 22px 20px;

    background:
        linear-gradient(
            180deg,
            rgba(255,255,255,.025),
            rgba(0,0,0,.08)
        );
}


/* Content Top */

.lux-project-content-top {

    display: flex;

    align-items: flex-start;

    justify-content: space-between;

    gap: 15px;
}


/* Label */

.lux-project-label {

    display: block;

    margin-bottom: 7px;

    color: #c9aa63;

    font-size: 9px;

    font-weight: 700;

    letter-spacing: 1.5px;

    text-transform: uppercase;
}


/* Title */

.lux-project-content h3 {

    margin: 0;

    font-size: 20px;

    font-weight: 800;

    line-height: 1.45;
}

.lux-project-content h3 a {

    color: #fff;

    text-decoration: none;

    transition: .3s ease;
}

.lux-project-content h3 a:hover {

    color: #d8b96c;

    text-shadow:
        0 0 18px
        rgba(216,185,108,.2);
}


/* Arrow */

.lux-project-arrow {

    flex-shrink: 0;

    width: 45px;

    height: 45px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: #d8b96c;

    border:
        1px solid
        rgba(216,185,108,.25);

    background:
        rgba(216,185,108,.04);

    text-decoration: none;

    transition:
        transform .35s ease,
        background .35s ease,
        border-color .35s ease;
}

.lux-project-arrow:hover {

    color: #111;

    background: #d8b96c;

    border-color: #d8b96c;

    transform:
        rotate(-45deg);
}


/* =========================================================
   LOCATION
========================================================= */

.lux-project-location {

    display: flex;

    align-items: center;

    gap: 7px;

    margin-top: 17px;

    padding-top: 14px;

    border-top:
        1px solid
        rgba(255,255,255,.07);

    color:
        rgba(255,255,255,.48);

    font-size: 12px;
}

.lux-project-location i {

    color: #d8b96c;

    font-size: 14px;

    filter:
        drop-shadow(
            0 0 5px
            rgba(216,185,108,.4)
        );
}


/* =========================================================
   EMPTY
========================================================= */

.lux-projects-empty {

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

.lux-projects-empty-icon {

    width: 70px;

    height: 70px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    border:
        1px solid
        rgba(216,185,108,.3);

    color: #d8b96c;

    font-size: 25px;

    box-shadow:
        0 0 30px
        rgba(216,185,108,.1);
}

.lux-projects-empty p {

    margin: 0;

    font-size: 14px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1199px) {

    .lux-project-card-1,
    .lux-project-card-2 {

        grid-column: span 6;
    }

    .lux-project-card-3,
    .lux-project-card-4,
    .lux-project-card-5,
    .lux-project-card-6 {

        grid-column: span 4;
    }

}


@media (max-width: 991px) {

    .lux-projects-section {

        padding: 90px 0;
    }

    .lux-projects-grid {

        gap: 20px;
    }

    .lux-project-card-1,
    .lux-project-card-2,
    .lux-project-card-3,
    .lux-project-card-4,
    .lux-project-card-5,
    .lux-project-card-6 {

        grid-column: span 6;
    }

    .lux-project-image,
    .lux-project-card-3 .lux-project-image,
    .lux-project-card-4 .lux-project-image,
    .lux-project-card-5 .lux-project-image,
    .lux-project-card-6 .lux-project-image {

        height: 350px;
    }

}


@media (max-width: 575px) {

    .lux-projects-section {

        padding: 70px 0;
    }

    .lux-projects-header {

        margin-bottom: 42px;
    }

    .lux-projects-title {

        font-size: 32px;
    }

    .lux-projects-grid {

        grid-template-columns: 1fr;

        gap: 18px;
    }

    .lux-project-card-1,
    .lux-project-card-2,
    .lux-project-card-3,
    .lux-project-card-4,
    .lux-project-card-5,
    .lux-project-card-6 {

        grid-column: span 1;
    }

    .lux-project-image,
    .lux-project-card-3 .lux-project-image,
    .lux-project-card-4 .lux-project-image,
    .lux-project-card-5 .lux-project-image,
    .lux-project-card-6 .lux-project-image {

        height: 330px;
    }

    .lux-project-content {

        padding: 20px 18px;
    }

    .lux-project-content h3 {

        font-size: 18px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    .lux-project-card,
    .lux-project-image img,
    .lux-project-overlay,
    .lux-project-view,
    .lux-project-corner,
    .lux-project-arrow {

        transition: none !important;
    }

}

</style>