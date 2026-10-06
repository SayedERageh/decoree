@extends('layouts.app')

@section('content')

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


{{-- =========================================================
    PRODUCT DETAIL HERO
========================================================= --}}
<section class="lux-product-hero">

    <div class="lux-product-hero-glow"></div>
    <div class="lux-product-hero-grid"></div>

    <div class="container">

        <div class="lux-product-breadcrumb">

            <a href="{{ route('home') }}">
                {{ $isArabic ? 'الرئيسية' : 'HOME' }}
            </a>

            <span>/</span>

            <a href="{{ route('products') }}">
                {{ $isArabic ? 'المنتجات' : 'PRODUCTS' }}
            </a>

            <span>/</span>

            <strong>{{ $productName }}</strong>

        </div>

    </div>

</section>


{{-- =========================================================
    PRODUCT DETAILS
========================================================= --}}
<section class="lux-product-detail">

    <div class="lux-product-orb lux-product-orb-one"></div>
    <div class="lux-product-orb lux-product-orb-two"></div>

    <div class="container">

        <div class="lux-product-layout">

            {{-- =================================================
                IMAGE
            ================================================= --}}
            <div class="lux-product-visual">

                <div class="lux-product-image-frame">

                    <span class="lux-corner lux-corner-tl"></span>
                    <span class="lux-corner lux-corner-tr"></span>
                    <span class="lux-corner lux-corner-bl"></span>
                    <span class="lux-corner lux-corner-br"></span>

                    <div class="lux-product-image">

                        @if($product->image)

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $productName }}"
                            >

                        @else

                            <div class="lux-product-placeholder">
                                <i class="bi bi-box-seam"></i>
                            </div>

                        @endif

                        <div class="lux-product-image-overlay"></div>

                    </div>

                    <div class="lux-product-image-label">

                        <span>
                            {{ $isArabic ? 'منتج مميز' : 'FEATURED PRODUCT' }}
                        </span>

                        <i class="bi bi-gem"></i>

                    </div>

                </div>

            </div>


            {{-- =================================================
                CONTENT
            ================================================= --}}
            <div class="lux-product-content">

                <div class="lux-product-kicker">

                    <span class="lux-kicker-line"></span>

                    <span>
                        {{ $isArabic
                            ? 'منتج من منتجاتنا'
                            : 'OUR PRODUCT' }}
                    </span>

                    <span class="lux-kicker-line"></span>

                </div>


                <h1>
                    {{ $productName }}
                </h1>


                <div class="lux-title-line">
                    <span></span>
                    <i class="bi bi-gem"></i>
                    <span></span>
                </div>


                @if($productDescription)

                    <div class="lux-product-description">

                        {!! nl2br(e($productDescription)) !!}

                    </div>

                @endif


                {{-- Price --}}
                @if($product->price)

                    <div class="lux-product-price-box">

                        <span class="lux-price-label">
                            {{ $isArabic ? 'السعر' : 'PRICE' }}
                        </span>

                        <div class="lux-product-price">

                            <strong>
                                {{ number_format($product->price, 0) }}
                            </strong>

                            <span>
                                {{ $isArabic ? 'جنيه' : 'EGP' }}
                            </span>

                        </div>

                    </div>

                @else

                    <div class="lux-product-inquiry">

                        <div class="lux-inquiry-icon">
                            <i class="bi bi-tag"></i>
                        </div>

                        <div>
                            <strong>
                                {{ $isArabic
                                    ? 'السعر عند الطلب'
                                    : 'PRICE ON REQUEST' }}
                            </strong>

                            <span>
                                {{ $isArabic
                                    ? 'تواصل معنا لمعرفة السعر والتفاصيل'
                                    : 'Contact us for price and details' }}
                            </span>
                        </div>

                    </div>

                @endif


                {{-- Actions --}}
                <div class="lux-product-actions">

                    <a
                        href="{{ $whatsappUrl }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="lux-product-whatsapp"
                    >

                        <span class="lux-whatsapp-icon">
                            <i class="bi bi-whatsapp"></i>
                        </span>

                        <span>
                            {{ $isArabic
                                ? 'استفسر عن المنتج عبر واتساب'
                                : 'INQUIRE VIA WHATSAPP' }}
                        </span>

                        <i class="bi bi-arrow-up-left lux-action-arrow"></i>

                    </a>


                    @if($company->phone)

                        <a
                            href="tel:{{ $company->phone }}"
                            class="lux-product-phone"
                        >

                            <i class="bi bi-telephone"></i>

                            <span>
                                {{ $isArabic
                                    ? 'اتصل بنا'
                                    : 'CALL US' }}
                            </span>

                            <strong>
                                {{ $company->phone }}
                            </strong>

                        </a>

                    @endif

                </div>


                {{-- Features --}}
                <div class="lux-product-features">

                    <div class="lux-product-feature">

                        <div class="lux-feature-icon">
                            <i class="bi bi-award"></i>
                        </div>

                        <div>

                            <strong>
                                {{ $isArabic
                                    ? 'جودة عالية'
                                    : 'HIGH QUALITY' }}
                            </strong>

                            <span>
                                {{ $isArabic
                                    ? 'منتجات موثوقة لمزارع الدواجن'
                                    : 'Reliable products for poultry farms' }}
                            </span>

                        </div>

                    </div>


                    <div class="lux-product-feature">

                        <div class="lux-feature-icon">
                            <i class="bi bi-truck"></i>
                        </div>

                        <div>

                            <strong>
                                {{ $isArabic
                                    ? 'توفير وتوريد'
                                    : 'SUPPLY & DELIVERY' }}
                            </strong>

                            <span>
                                {{ $isArabic
                                    ? 'مخزون واسع وسرعة في التوريد'
                                    : 'Wide stock and fast supply' }}
                            </span>

                        </div>

                    </div>


                    <div class="lux-product-feature">

                        <div class="lux-feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>

                        <div>

                            <strong>
                                {{ $isArabic
                                    ? 'دعم مستمر'
                                    : 'AFTER-SALES SUPPORT' }}
                            </strong>

                            <span>
                                {{ $isArabic
                                    ? 'دعم ومتابعة مستمرة'
                                    : 'Continuous support and follow-up' }}
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    RELATED PRODUCTS
========================================================= --}}
@if(isset($products) && $products->where('id', '!=', $product->id)->isNotEmpty())

<section class="lux-related-products">

    <div class="lux-related-bg"></div>

    <div class="container">

        <div class="lux-related-heading">

            <div class="lux-section-kicker">

                <span></span>

                {{ $isArabic ? 'منتجات أخرى' : 'OTHER PRODUCTS' }}

                <span></span>

            </div>

            <h2>
                {{ $isArabic
                    ? 'منتجات قد تهمك'
                    : 'YOU MAY ALSO LIKE' }}
            </h2>

            <p>
                {{ $isArabic
                    ? 'اكتشف المزيد من منتجاتنا المختارة بعناية'
                    : 'Discover more of our carefully selected products' }}
            </p>

        </div>


        <div class="lux-related-grid">

            @foreach($products->where('id', '!=', $product->id)->take(3) as $relatedProduct)

                @php
                    $relatedName = $isArabic
                        ? $relatedProduct->name_ar
                        : $relatedProduct->name_en;
                @endphp

                <article class="lux-related-card">

                    <a
                        href="{{ route('products.show', $relatedProduct->slug) }}"
                        class="lux-related-image"
                    >

                        @if($relatedProduct->image)

                            <img
                                src="{{ asset('storage/' . $relatedProduct->image) }}"
                                alt="{{ $relatedName }}"
                                loading="lazy"
                            >

                        @else

                            <div class="lux-related-placeholder">
                                <i class="bi bi-box-seam"></i>
                            </div>

                        @endif

                        <div class="lux-related-overlay"></div>

                        <span class="lux-related-number">
                            0{{ $loop->iteration }}
                        </span>

                        <span class="lux-related-view">
                            <i class="bi bi-arrow-up-left"></i>
                        </span>

                    </a>


                    <div class="lux-related-content">

                        <span>
                            {{ $isArabic
                                ? 'منتج مميز'
                                : 'FEATURED PRODUCT' }}
                        </span>

                        <h3>
                            <a href="{{ route('products.show', $relatedProduct->slug) }}">
                                {{ $relatedName }}
                            </a>
                        </h3>

                        <a
                            href="{{ route('products.show', $relatedProduct->slug) }}"
                            class="lux-related-link"
                        >

                            {{ $isArabic
                                ? 'عرض التفاصيل'
                                : 'VIEW DETAILS' }}

                            <i class="bi bi-arrow-left"></i>

                        </a>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>

@endif


<style>

/* =========================================================
   LUXURY PRODUCT DETAIL
========================================================= */

.lux-product-hero {
    position: relative;
    padding: 34px 0;
    overflow: hidden;
    background:
        radial-gradient(circle at 10% 20%, rgba(212,175,55,.08), transparent 28%),
        radial-gradient(circle at 90% 70%, rgba(212,175,55,.045), transparent 30%),
        #090909;
    border-bottom: 1px solid rgba(212,175,55,.12);
}

.lux-product-hero-grid {
    position: absolute;
    inset: 0;
    opacity: .28;
    pointer-events: none;
    background-image:
        linear-gradient(rgba(255,255,255,.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.025) 1px, transparent 1px);
    background-size: 55px 55px;
}

.lux-product-hero-glow {
    position: absolute;
    width: 300px;
    height: 300px;
    top: -180px;
    left: 35%;
    border-radius: 50%;
    background: rgba(212,175,55,.12);
    filter: blur(90px);
    pointer-events: none;
}

.lux-product-breadcrumb {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .8px;
}

.lux-product-breadcrumb a {
    color: rgba(255,255,255,.45);
    text-decoration: none;
    transition: .3s ease;
}

.lux-product-breadcrumb a:hover {
    color: #d4af37;
}

.lux-product-breadcrumb span {
    color: rgba(212,175,55,.35);
}

.lux-product-breadcrumb strong {
    color: #d4af37;
    font-weight: 700;
}


/* =========================================================
   MAIN
========================================================= */

.lux-product-detail {
    position: relative;
    overflow: hidden;
    padding: 100px 0 120px;
    background:
        radial-gradient(circle at 15% 50%, rgba(212,175,55,.055), transparent 25%),
        radial-gradient(circle at 90% 15%, rgba(255,255,255,.025), transparent 25%),
        #080808;
}

.lux-product-orb {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    filter: blur(80px);
}

.lux-product-orb-one {
    width: 300px;
    height: 300px;
    right: -170px;
    top: 15%;
    background: rgba(212,175,55,.07);
}

.lux-product-orb-two {
    width: 240px;
    height: 240px;
    left: -150px;
    bottom: 10%;
    background: rgba(212,175,55,.045);
}

.lux-product-layout {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: minmax(0, 1.05fr) minmax(0, .95fr);
    gap: 85px;
    align-items: center;
}


/* =========================================================
   IMAGE
========================================================= */

.lux-product-visual {
    position: relative;
}

.lux-product-image-frame {
    position: relative;
    padding: 12px;
}

.lux-product-image {
    position: relative;
    height: 590px;
    overflow: hidden;
    background: #111;
    border: 1px solid rgba(212,175,55,.2);
    box-shadow:
        0 35px 90px rgba(0,0,0,.55),
        0 0 45px rgba(212,175,55,.035);
}

.lux-product-image img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    transition: transform 1s cubic-bezier(.2,.7,.2,1);
}

.lux-product-image-frame:hover .lux-product-image img {
    transform: scale(1.055);
}

.lux-product-image-overlay {
    position: absolute;
    inset: 0;
    pointer-events: none;
    background:
        linear-gradient(
            180deg,
            rgba(0,0,0,.02),
            transparent 50%,
            rgba(0,0,0,.35)
        );
}

.lux-product-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background:
        radial-gradient(circle, rgba(212,175,55,.08), transparent 50%),
        #101010;
}

.lux-product-placeholder i {
    color: rgba(212,175,55,.35);
    font-size: 90px;
}


/* Corners */

.lux-corner {
    position: absolute;
    z-index: 5;
    width: 55px;
    height: 55px;
    pointer-events: none;
}

.lux-corner-tl {
    top: 0;
    left: 0;
    border-top: 2px solid #d4af37;
    border-left: 2px solid #d4af37;
}

.lux-corner-tr {
    top: 0;
    right: 0;
    border-top: 2px solid #d4af37;
    border-right: 2px solid #d4af37;
}

.lux-corner-bl {
    bottom: 0;
    left: 0;
    border-bottom: 2px solid #d4af37;
    border-left: 2px solid #d4af37;
}

.lux-corner-br {
    bottom: 0;
    right: 0;
    border-bottom: 2px solid #d4af37;
    border-right: 2px solid #d4af37;
}

.lux-product-image-label {
    position: absolute;
    z-index: 6;
    left: 30px;
    bottom: 28px;
    display: flex;
    align-items: center;
    gap: 9px;
    padding: 9px 14px;
    color: rgba(255,255,255,.75);
    font-size: 8px;
    font-weight: 800;
    letter-spacing: 1.5px;
    background: rgba(8,8,8,.68);
    border: 1px solid rgba(212,175,55,.2);
    backdrop-filter: blur(12px);
}

.lux-product-image-label i {
    color: #d4af37;
    font-size: 13px;
}


/* =========================================================
   CONTENT
========================================================= */

.lux-product-content {
    position: relative;
}

.lux-product-kicker {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;
    color: #d4af37;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 2.5px;
}

.lux-kicker-line {
    width: 30px;
    height: 1px;
    background: #d4af37;
    box-shadow: 0 0 8px rgba(212,175,55,.4);
}

.lux-product-content h1 {
    max-width: 650px;
    margin: 0;
    color: #fff;
    font-size: clamp(38px, 5vw, 65px);
    line-height: 1.15;
    font-weight: 800;
    letter-spacing: -.8px;
}

.lux-title-line {
    display: flex;
    align-items: center;
    gap: 9px;
    margin: 27px 0;
}

.lux-title-line span {
    width: 45px;
    height: 1px;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(212,175,55,.6)
    );
}

.lux-title-line span:last-child {
    background: linear-gradient(
        90deg,
        rgba(212,175,55,.6),
        transparent
    );
}

.lux-title-line i {
    color: #d4af37;
    font-size: 10px;
    text-shadow: 0 0 15px rgba(212,175,55,.5);
}

.lux-product-description {
    max-width: 650px;
    margin-bottom: 28px;
    color: rgba(255,255,255,.58);
    font-size: 16px;
    line-height: 2.05;
}


/* =========================================================
   PRICE
========================================================= */

.lux-product-price-box {
    display: inline-flex;
    flex-direction: column;
    min-width: 190px;
    margin-bottom: 25px;
    padding: 15px 20px;
    background:
        linear-gradient(
            135deg,
            rgba(212,175,55,.075),
            rgba(255,255,255,.018)
        );
    border: 1px solid rgba(212,175,55,.17);
}

.lux-price-label {
    margin-bottom: 3px;
    color: rgba(255,255,255,.35);
    font-size: 8px;
    font-weight: 800;
    letter-spacing: 2px;
}

.lux-product-price {
    display: flex;
    align-items: baseline;
    gap: 8px;
}

.lux-product-price strong {
    color: #f1df9c;
    font-size: 32px;
    font-weight: 800;
}

.lux-product-price span {
    color: rgba(255,255,255,.45);
    font-size: 11px;
    font-weight: 700;
}


/* Inquiry */

.lux-product-inquiry {
    display: flex;
    align-items: center;
    gap: 13px;
    margin-bottom: 25px;
    padding: 14px 17px;
    border: 1px solid rgba(212,175,55,.16);
    background: rgba(212,175,55,.035);
}

.lux-inquiry-icon {
    width: 43px;
    height: 43px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #d4af37;
    border: 1px solid rgba(212,175,55,.22);
    background: rgba(212,175,55,.06);
}

.lux-product-inquiry strong,
.lux-product-inquiry span {
    display: block;
}

.lux-product-inquiry strong {
    margin-bottom: 3px;
    color: #fff;
    font-size: 12px;
}

.lux-product-inquiry span {
    color: rgba(255,255,255,.4);
    font-size: 11px;
}


/* =========================================================
   ACTIONS
========================================================= */

.lux-product-actions {
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 600px;
}

.lux-product-whatsapp {
    position: relative;
    min-height: 62px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    overflow: hidden;
    color: #fff !important;
    text-decoration: none !important;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: .5px;
    background:
        linear-gradient(
            135deg,
            #174d31,
            #16834b
        );
    border: 1px solid rgba(37,211,102,.35);
    box-shadow: 0 15px 35px rgba(0,0,0,.25);
    transition: .35s ease;
}

.lux-product-whatsapp::before {
    content: "";
    position: absolute;
    top: 0;
    left: -120%;
    width: 80%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,.13),
        transparent
    );
    transform: skewX(-20deg);
    transition: .7s ease;
}

.lux-product-whatsapp:hover::before {
    left: 130%;
}

.lux-product-whatsapp:hover {
    transform: translateY(-3px);
    border-color: rgba(37,211,102,.7);
    box-shadow:
        0 20px 40px rgba(0,0,0,.35),
        0 0 25px rgba(37,211,102,.08);
}

.lux-whatsapp-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    color: #25d366;
    font-size: 20px;
}

.lux-action-arrow {
    position: absolute;
    right: 22px;
    font-size: 14px;
    color: rgba(255,255,255,.45);
}

.lux-product-phone {
    min-height: 53px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    color: rgba(255,255,255,.52);
    text-decoration: none;
    font-size: 10px;
    font-weight: 700;
    border: 1px solid rgba(255,255,255,.08);
    background: rgba(255,255,255,.018);
    transition: .3s ease;
}

.lux-product-phone i {
    color: #d4af37;
}

.lux-product-phone strong {
    color: #f1df9c;
}

.lux-product-phone:hover {
    color: #fff;
    border-color: rgba(212,175,55,.3);
    background: rgba(212,175,55,.035);
}


/* =========================================================
   FEATURES
========================================================= */

.lux-product-features {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-top: 28px;
    padding-top: 25px;
    border-top: 1px solid rgba(255,255,255,.07);
}

.lux-product-feature {
    min-height: 120px;
    padding: 15px;
    background: rgba(255,255,255,.018);
    border: 1px solid rgba(255,255,255,.055);
    transition: .35s ease;
}

.lux-product-feature:hover {
    transform: translateY(-4px);
    border-color: rgba(212,175,55,.25);
    background: rgba(212,175,55,.025);
}

.lux-feature-icon {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 12px;
    color: #d4af37;
    font-size: 16px;
    border: 1px solid rgba(212,175,55,.18);
    background: rgba(212,175,55,.04);
}

.lux-product-feature strong,
.lux-product-feature span {
    display: block;
}

.lux-product-feature strong {
    margin-bottom: 5px;
    color: rgba(255,255,255,.88);
    font-size: 10px;
    font-weight: 800;
}

.lux-product-feature span {
    color: rgba(255,255,255,.38);
    font-size: 9px;
    line-height: 1.7;
}


/* =========================================================
   RELATED PRODUCTS
========================================================= */

.lux-related-products {
    position: relative;
    overflow: hidden;
    padding: 110px 0;
    background:
        radial-gradient(circle at 50% 0, rgba(212,175,55,.065), transparent 30%),
        #0b0b0b;
    border-top: 1px solid rgba(212,175,55,.08);
}

.lux-related-bg {
    position: absolute;
    inset: 0;
    opacity: .2;
    pointer-events: none;
    background-image:
        linear-gradient(rgba(255,255,255,.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.025) 1px, transparent 1px);
    background-size: 60px 60px;
}

.lux-related-heading {
    position: relative;
    z-index: 2;
    text-align: center;
    margin-bottom: 55px;
}

.lux-section-kicker {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin-bottom: 17px;
    color: #d4af37;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 2.5px;
}

.lux-section-kicker span {
    width: 35px;
    height: 1px;
    background: linear-gradient(
        90deg,
        transparent,
        #d4af37
    );
}

.lux-section-kicker span:last-child {
    background: linear-gradient(
        90deg,
        #d4af37,
        transparent
    );
}

.lux-related-heading h2 {
    margin: 0 0 13px;
    color: #fff;
    font-size: clamp(28px, 4vw, 46px);
    font-weight: 800;
}

.lux-related-heading p {
    margin: 0;
    color: rgba(255,255,255,.38);
    font-size: 12px;
}


/* Grid */

.lux-related-grid {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
}


/* Card */

.lux-related-card {
    position: relative;
    overflow: hidden;
    background: #101010;
    border: 1px solid rgba(255,255,255,.065);
    transition: .45s cubic-bezier(.2,.7,.2,1);
}

.lux-related-card:hover {
    transform: translateY(-8px);
    border-color: rgba(212,175,55,.3);
    box-shadow:
        0 25px 55px rgba(0,0,0,.4),
        0 0 30px rgba(212,175,55,.035);
}

.lux-related-image {
    position: relative;
    display: block;
    height: 310px;
    overflow: hidden;
    text-decoration: none;
    background: #151515;
}

.lux-related-image img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    transition: transform .8s cubic-bezier(.2,.7,.2,1);
}

.lux-related-card:hover .lux-related-image img {
    transform: scale(1.08);
}

.lux-related-overlay {
    position: absolute;
    inset: 0;
    background:
        linear-gradient(
            180deg,
            transparent 45%,
            rgba(0,0,0,.65)
        );
}

.lux-related-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(212,175,55,.25);
    font-size: 70px;
    background:
        radial-gradient(circle, rgba(212,175,55,.08), transparent 50%),
        #121212;
}

.lux-related-number {
    position: absolute;
    top: 18px;
    left: 18px;
    color: rgba(255,255,255,.55);
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 2px;
}

.lux-related-view {
    position: absolute;
    right: 18px;
    bottom: 18px;
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #d4af37;
    border: 1px solid rgba(212,175,55,.35);
    background: rgba(8,8,8,.6);
    backdrop-filter: blur(10px);
    transition: .35s ease;
}

.lux-related-card:hover .lux-related-view {
    color: #111;
    background: #d4af37;
    transform: rotate(-8deg);
}

.lux-related-content {
    padding: 23px;
}

.lux-related-content > span {
    display: block;
    margin-bottom: 8px;
    color: rgba(212,175,55,.7);
    font-size: 8px;
    font-weight: 800;
    letter-spacing: 1.5px;
}

.lux-related-content h3 {
    margin: 0 0 18px;
    font-size: 19px;
    font-weight: 800;
    line-height: 1.45;
}

.lux-related-content h3 a {
    color: #fff;
    text-decoration: none;
    transition: .3s ease;
}

.lux-related-card:hover h3 a {
    color: #f1df9c;
}

.lux-related-link {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    color: rgba(255,255,255,.45);
    text-decoration: none;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 1px;
    transition: .3s ease;
}

.lux-related-link i {
    color: #d4af37;
    transition: .3s ease;
}

.lux-related-link:hover {
    color: #fff;
}

.lux-related-link:hover i {
    transform: translateX(-5px);
}


/* =========================================================
   RTL
========================================================= */

[dir="rtl"] .lux-product-image-label {
    left: auto;
    right: 30px;
}

[dir="rtl"] .lux-action-arrow {
    right: auto;
    left: 22px;
}

[dir="rtl"] .lux-related-number {
    left: auto;
    right: 18px;
}

[dir="rtl"] .lux-related-view {
    right: auto;
    left: 18px;
}

[dir="rtl"] .lux-kicker-line:first-child {
    transform: rotate(180deg);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1199px) {

    .lux-product-layout {
        gap: 50px;
    }

    .lux-product-image {
        height: 520px;
    }

    .lux-product-features {
        grid-template-columns: 1fr;
    }

    .lux-product-feature {
        min-height: auto;
    }

}


@media (max-width: 991px) {

    .lux-product-detail {
        padding: 70px 0 90px;
    }

    .lux-product-layout {
        grid-template-columns: 1fr;
        gap: 55px;
    }

    .lux-product-image {
        height: 520px;
    }

    .lux-product-content {
        max-width: 750px;
        margin: auto;
        width: 100%;
    }

    .lux-product-features {
        grid-template-columns: repeat(3, 1fr);
    }

    .lux-related-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}


@media (max-width: 767px) {

    .lux-product-hero {
        padding: 25px 0;
    }

    .lux-product-detail {
        padding: 55px 0 70px;
    }

    .lux-product-image {
        height: 430px;
    }

    .lux-product-content h1 {
        font-size: 38px;
    }

    .lux-product-description {
        font-size: 14px;
    }

    .lux-product-features {
        grid-template-columns: 1fr;
    }

    .lux-product-feature {
        display: flex;
        align-items: center;
        gap: 13px;
    }

    .lux-feature-icon {
        margin-bottom: 0;
    }

    .lux-related-products {
        padding: 75px 0;
    }

    .lux-related-grid {
        grid-template-columns: 1fr;
    }

    .lux-related-image {
        height: 330px;
    }

}


@media (max-width: 575px) {

    .lux-product-breadcrumb {
        gap: 8px;
        font-size: 9px;
    }

    .lux-product-image-frame {
        padding: 7px;
    }

    .lux-product-image {
        height: 330px;
    }

    .lux-product-image-label {
        left: 18px;
        bottom: 18px;
        padding: 7px 10px;
        font-size: 7px;
    }

    [dir="rtl"] .lux-product-image-label {
        left: auto;
        right: 18px;
    }

    .lux-corner {
        width: 35px;
        height: 35px;
    }

    .lux-product-content h1 {
        font-size: 31px;
    }

    .lux-product-kicker {
        font-size: 8px;
    }

    .lux-product-price strong {
        font-size: 28px;
    }

    .lux-product-whatsapp {
        min-height: 57px;
        font-size: 9px;
    }

    .lux-action-arrow {
        right: 15px;
    }

    [dir="rtl"] .lux-action-arrow {
        right: auto;
        left: 15px;
    }

    .lux-product-phone {
        flex-wrap: wrap;
        padding: 12px;
    }

    .lux-related-heading h2 {
        font-size: 28px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    .lux-product-image img,
    .lux-related-image img,
    .lux-related-card,
    .lux-related-view,
    .lux-product-whatsapp,
    .lux-product-phone,
    .lux-product-feature {
        transition: none !important;
    }

}

</style>

@endsection