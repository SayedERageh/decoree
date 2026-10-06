@php
    $productsSection = $homeSections->get('products');
@endphp

<section class="lux-products-section">

    {{-- Ambient Background --}}
    <div class="lux-products-glow lux-products-glow-1"></div>
    <div class="lux-products-glow lux-products-glow-2"></div>

    <div class="lux-products-grid-bg"></div>

    <div class="container position-relative">

        {{-- =========================
            SECTION HEADER
        ========================== --}}
        <div class="lux-products-header" data-aos="fade-up">

            <div class="lux-products-heading">

                @if($productsSection?->subtitle)

                    <span class="lux-section-kicker">
                        <span class="lux-kicker-line"></span>
                        {{ $productsSection->subtitle }}
                    </span>

                @endif

                @if($productsSection?->title)

                    <h2 class="lux-products-title">
                        {{ $productsSection->title }}
                    </h2>

                @endif

                <div class="lux-title-line">
                    <span></span>
                    <i class="bi bi-stars"></i>
                    <span></span>
                </div>

            </div>

        </div>


        {{-- =========================
            PRODUCTS GRID
        ========================== --}}
        <div class="lux-products-grid">

            @foreach($products as $product)

                @php

                    $isArabic = app()->getLocale() === 'ar';

                    $productName = $isArabic
                        ? $product->name_ar
                        : $product->name_en;

                    $productDescription = $isArabic
                        ? $product->description_ar
                        : $product->description_en;

                    $whatsappNumber = '201210222225';

                    $message = $isArabic
                        ? "السلام عليكم، أريد الاستفسار عن المنتج: {$productName}"
                        : "Hello, I would like to inquire about: {$productName}";

                    $whatsappUrl =
                        'https://wa.me/' .
                        $whatsappNumber .
                        '?text=' .
                        urlencode($message);

                @endphp


                <article
                    class="lux-product-card"
                    data-aos="fade-up"
                    data-aos-delay="{{ ($loop->index % 4) * 100 }}"
                >

                    {{-- LED Border --}}
                    <div class="lux-product-led"></div>


                    {{-- =========================
                        IMAGE
                    ========================== --}}
                    <a
                        href="{{ route('products.show', $product->slug) }}"
                        class="lux-product-image"
                    >

                        @if($product->image)

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $productName }}"
                                loading="lazy"
                            >

                        @else

                            <div class="lux-product-placeholder">

                                <div class="lux-placeholder-icon">
                                    <i class="bi bi-box-seam"></i>
                                </div>

                                <span>
                                    {{ $isArabic ? 'لا توجد صورة' : 'No Image' }}
                                </span>

                            </div>

                        @endif


                        {{-- Image Overlay --}}
                        <div class="lux-product-overlay">

                            <div class="lux-product-view">

                                <i class="bi bi-arrow-up-left"></i>

                            </div>

                            <span>
                                {{ $isArabic ? 'عرض التفاصيل' : 'View Details' }}
                            </span>

                        </div>


                        {{-- Product Number --}}
                        <span class="lux-product-number">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>

                    </a>


                    {{-- =========================
                        CONTENT
                    ========================== --}}
                    <div class="lux-product-content">

                        <div class="lux-product-top">

                            <span class="lux-product-category">

                                <i class="bi bi-gem"></i>

                                {{ $isArabic ? 'تصميم راقٍ' : 'Premium Design' }}

                            </span>

                        </div>


                        <h3 class="lux-product-name">

                            <a href="{{ route('products.show', $product->slug) }}">

                                {{ $productName }}

                            </a>

                        </h3>


                        @if($productDescription)

                            <p class="lux-product-description">

                                {{ Str::limit($productDescription, 110) }}

                            </p>

                        @endif


                        {{-- Bottom --}}
                        <div class="lux-product-bottom">

                            @if($product->price)

                                <div class="lux-product-price">

                                    <span class="lux-price-label">
                                        {{ $isArabic ? 'يبدأ من' : 'Starting from' }}
                                    </span>

                                    <strong>
                                        {{ number_format($product->price, 0) }}
                                    </strong>

                                    <small>
                                        {{ $isArabic ? 'جنيه' : 'EGP' }}
                                    </small>

                                </div>

                            @endif


                            <a
                                href="{{ $whatsappUrl }}"
                                target="_blank"
                                rel="noopener"
                                class="lux-product-whatsapp"
                            >

                                <i class="bi bi-whatsapp"></i>

                                <span>
                                    {{ $isArabic ? 'اطلب الآن' : 'Order Now' }}
                                </span>

                            </a>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>


<style>

/* =========================================================
   LUXURY PRODUCTS SECTION
========================================================= */

.lux-products-section {
    position: relative;
    padding: 110px 0;
    overflow: hidden;
    background:
        radial-gradient(
            circle at 10% 20%,
            rgba(212, 175, 55, 0.09),
            transparent 30%
        ),
        radial-gradient(
            circle at 90% 80%,
            rgba(255, 255, 255, 0.035),
            transparent 28%
        ),
        linear-gradient(
            135deg,
            #080808 0%,
            #11100d 45%,
            #080808 100%
        );
}


/* =========================================================
   BACKGROUND GRID
========================================================= */

.lux-products-grid-bg {
    position: absolute;
    inset: 0;

    background-image:
        linear-gradient(
            rgba(255,255,255,0.025) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,0.025) 1px,
            transparent 1px
        );

    background-size: 70px 70px;

    mask-image: linear-gradient(
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

.lux-products-glow {
    position: absolute;
    width: 380px;
    height: 380px;

    border-radius: 50%;

    filter: blur(100px);

    pointer-events: none;

    opacity: .18;
}

.lux-products-glow-1 {
    top: 5%;
    right: -180px;
    background: rgba(212,175,55,.35);
}

.lux-products-glow-2 {
    bottom: 5%;
    left: -180px;
    background: rgba(255,255,255,.12);
}


/* =========================================================
   HEADER
========================================================= */

.lux-products-header {
    position: relative;
    z-index: 2;

    margin-bottom: 55px;
    text-align: center;
}

.lux-products-heading {
    max-width: 850px;
    margin: auto;
}


/* Kicker */

.lux-section-kicker {
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

.lux-kicker-line {
    width: 32px;
    height: 1px;

    background: linear-gradient(
        90deg,
        transparent,
        #d8b96c
    );

    box-shadow:
        0 0 10px rgba(216,185,108,.7);
}


/* Title */

.lux-products-title {
    margin: 0;

    color: #fff;

    font-size: clamp(32px, 4vw, 54px);

    font-weight: 800;

    line-height: 1.2;

    letter-spacing: -1px;

    text-shadow:
        0 0 25px rgba(255,255,255,.08);
}


/* Title Decoration */

.lux-title-line {
    display: flex;
    align-items: center;
    justify-content: center;

    gap: 12px;

    margin-top: 22px;
}

.lux-title-line span {
    width: 70px;
    height: 1px;

    background: linear-gradient(
        90deg,
        transparent,
        #d8b96c
    );

    box-shadow:
        0 0 8px rgba(216,185,108,.5);
}

.lux-title-line span:last-child {
    background: linear-gradient(
        90deg,
        #d8b96c,
        transparent
    );
}

.lux-title-line i {
    color: #d8b96c;

    font-size: 13px;

    filter:
        drop-shadow(
            0 0 8px
            rgba(216,185,108,.8)
        );
}


/* =========================================================
   PRODUCTS GRID
========================================================= */

.lux-products-grid {
    position: relative;
    z-index: 2;

    display: grid;

    grid-template-columns:
        repeat(4, minmax(0, 1fr));

    gap: 24px;
}


/* =========================================================
   PRODUCT CARD
========================================================= */

.lux-product-card {
    position: relative;

    overflow: hidden;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.075),
            rgba(255,255,255,.025)
        );

    border: 1px solid
        rgba(216,185,108,.18);

    border-radius: 24px;

    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);

    box-shadow:
        0 20px 60px rgba(0,0,0,.35),
        inset 0 1px 0 rgba(255,255,255,.06);

    transition:
        transform .55s cubic-bezier(.2,.8,.2,1),
        border-color .4s ease,
        box-shadow .5s ease;
}


/* Hover */

.lux-product-card:hover {

    transform:
        translateY(-12px)
        perspective(1000px)
        rotateX(1deg);

    border-color:
        rgba(216,185,108,.55);

    box-shadow:
        0 35px 90px rgba(0,0,0,.55),
        0 0 35px rgba(216,185,108,.08),
        inset 0 1px 0 rgba(255,255,255,.1);
}


/* =========================================================
   LED TOP BORDER
========================================================= */

.lux-product-led {
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
        0 0 12px rgba(216,185,108,.75),
        0 0 30px rgba(216,185,108,.25);

    opacity: .65;

    transition: .4s ease;

    z-index: 5;
}

.lux-product-card:hover .lux-product-led {
    opacity: 1;

    width: 90%;
    left: 5%;
}


/* =========================================================
   IMAGE
========================================================= */

.lux-product-image {
    position: relative;

    display: block;

    height: 300px;

    overflow: hidden;

    background: #0d0d0d;
}


/* Image */

.lux-product-image img {
    width: 100%;
    height: 100%;

    object-fit: cover;

    display: block;

    transition:
        transform .8s cubic-bezier(.2,.8,.2,1),
        filter .5s ease;
}

.lux-product-card:hover
.lux-product-image img {

    transform: scale(1.08);

    filter:
        brightness(.78)
        saturate(1.05);
}


/* Image Gradient */

.lux-product-image::after {
    content: "";

    position: absolute;
    inset: 0;

    background:
        linear-gradient(
            to top,
            rgba(0,0,0,.8),
            rgba(0,0,0,.08) 55%,
            transparent
        );

    pointer-events: none;
}


/* =========================================================
   PLACEHOLDER
========================================================= */

.lux-product-placeholder {
    width: 100%;
    height: 100%;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-direction: column;

    gap: 14px;

    color: rgba(255,255,255,.45);

    background:
        radial-gradient(
            circle,
            rgba(216,185,108,.08),
            transparent 60%
        );
}

.lux-placeholder-icon {
    width: 72px;
    height: 72px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    border: 1px solid
        rgba(216,185,108,.35);

    color: #d8b96c;

    font-size: 28px;

    box-shadow:
        0 0 25px rgba(216,185,108,.12);
}


/* =========================================================
   IMAGE OVERLAY
========================================================= */

.lux-product-overlay {
    position: absolute;
    inset: 0;

    z-index: 3;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-direction: column;

    gap: 10px;

    color: #fff;

    background:
        rgba(8,8,8,.35);

    opacity: 0;

    transition:
        opacity .4s ease,
        backdrop-filter .4s ease;

    backdrop-filter: blur(0);
}

.lux-product-card:hover
.lux-product-overlay {

    opacity: 1;

    backdrop-filter: blur(4px);
}

.lux-product-view {

    width: 62px;
    height: 62px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    border: 1px solid
        rgba(216,185,108,.7);

    color: #d8b96c;

    background:
        rgba(0,0,0,.45);

    box-shadow:
        0 0 30px
        rgba(216,185,108,.2);

    font-size: 20px;

    transform: scale(.7) rotate(-15deg);

    transition: .5s cubic-bezier(.2,.8,.2,1);
}

.lux-product-card:hover
.lux-product-view {

    transform:
        scale(1)
        rotate(0deg);
}

.lux-product-overlay > span {

    font-size: 12px;

    letter-spacing: 1px;

    color: rgba(255,255,255,.9);
}


/* =========================================================
   PRODUCT NUMBER
========================================================= */

.lux-product-number {

    position: absolute;

    top: 18px;
    right: 18px;

    z-index: 4;

    min-width: 42px;
    height: 32px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 0 10px;

    border-radius: 30px;

    background:
        rgba(8,8,8,.55);

    border: 1px solid
        rgba(216,185,108,.3);

    color: #d8b96c;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 1px;

    backdrop-filter: blur(10px);
}


/* =========================================================
   CONTENT
========================================================= */

.lux-product-content {
    padding: 24px 22px 22px;
}


/* Category */

.lux-product-category {

    display: inline-flex;
    align-items: center;
    gap: 7px;

    margin-bottom: 12px;

    color: #cbb276;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 1.4px;

    text-transform: uppercase;
}

.lux-product-category i {
    font-size: 11px;

    filter:
        drop-shadow(
            0 0 5px
            rgba(216,185,108,.7)
        );
}


/* Name */

.lux-product-name {
    margin: 0 0 12px;

    font-size: 20px;

    line-height: 1.45;

    font-weight: 800;
}

.lux-product-name a {

    color: #fff;

    text-decoration: none;

    transition: .3s ease;
}

.lux-product-name a:hover {
    color: #d8b96c;

    text-shadow:
        0 0 18px rgba(216,185,108,.25);
}


/* Description */

.lux-product-description {

    min-height: 52px;

    margin: 0 0 22px;

    color:
        rgba(255,255,255,.55);

    font-size: 13px;

    line-height: 1.8;
}


/* =========================================================
   PRODUCT BOTTOM
========================================================= */

.lux-product-bottom {

    display: flex;

    align-items: center;
    justify-content: space-between;

    gap: 14px;

    padding-top: 18px;

    border-top:
        1px solid
        rgba(255,255,255,.08);
}


/* Price */

.lux-product-price {

    display: flex;

    flex-direction: column;

    line-height: 1;
}

.lux-price-label {

    margin-bottom: 7px;

    color:
        rgba(255,255,255,.4);

    font-size: 9px;

    letter-spacing: 1px;
}

.lux-product-price strong {

    color: #d8b96c;

    font-size: 22px;

    font-weight: 800;

    line-height: 1;
    
    text-shadow:
        0 0 15px
        rgba(216,185,108,.2);
}

.lux-product-price small {

    margin-top: 6px;

    color:
        rgba(255,255,255,.4);

    font-size: 9px;
}


/* =========================================================
   WHATSAPP
========================================================= */

.lux-product-whatsapp {

    position: relative;

    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 8px;

    min-height: 42px;

    padding: 0 14px;

    border-radius: 13px;

    color: #fff;

    background:
        linear-gradient(
            135deg,
            rgba(37,211,102,.18),
            rgba(37,211,102,.06)
        );

    border: 1px solid
        rgba(37,211,102,.35);

    text-decoration: none;

    font-size: 11px;

    font-weight: 700;

    overflow: hidden;

    transition:
        transform .35s ease,
        border-color .35s ease,
        box-shadow .35s ease;
}

.lux-product-whatsapp::before {

    content: "";

    position: absolute;

    inset: 0;

    transform:
        translateX(-110%);

    background:
        linear-gradient(
            100deg,
            transparent,
            rgba(255,255,255,.18),
            transparent
        );

    transition:
        transform .6s ease;
}

.lux-product-whatsapp:hover::before {
    transform:
        translateX(110%);
}

.lux-product-whatsapp:hover {

    color: #fff;

    transform: translateY(-3px);

    border-color:
        rgba(37,211,102,.7);

    box-shadow:
        0 10px 25px
        rgba(37,211,102,.12);
}

.lux-product-whatsapp i {

    color: #25d366;

    font-size: 17px;

    filter:
        drop-shadow(
            0 0 6px
            rgba(37,211,102,.45)
        );
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1199px) {

    .lux-products-grid {
        grid-template-columns:
            repeat(3, minmax(0, 1fr));
    }

}


@media (max-width: 991px) {

    .lux-products-section {
        padding: 85px 0;
    }

    .lux-products-grid {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 20px;
    }

    .lux-product-image {
        height: 280px;
    }

}


@media (max-width: 575px) {

    .lux-products-section {
        padding: 70px 0;
    }

    .lux-products-header {
        margin-bottom: 40px;
    }

    .lux-products-title {
        font-size: 32px;
    }

    .lux-products-grid {
        grid-template-columns: 1fr;

        gap: 18px;
    }

    .lux-product-image {
        height: 300px;
    }

    .lux-product-content {
        padding: 22px 18px 20px;
    }

    .lux-product-bottom {
        align-items: flex-end;
    }

    .lux-product-whatsapp {
        padding: 0 12px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    .lux-product-card,
    .lux-product-image img,
    .lux-product-overlay,
    .lux-product-view,
    .lux-product-whatsapp {
        transition: none !important;
    }

}

</style>