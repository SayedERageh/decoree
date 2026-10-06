@php
    /*
    |--------------------------------------------------------------------------
    | Check Active Products
    |--------------------------------------------------------------------------
    */
    $hasActiveProducts = \App\Models\Product::where('is_active', true)->exists();

    $isArabic = app()->getLocale() === 'ar';
@endphp

<header class="lux-header">

    <nav class="lux-navbar">

        <div class="container">

            <div class="lux-navbar-inner">

                {{-- =====================================================
                    LOGO
                ====================================================== --}}
                <a href="{{ route('home') }}" class="lux-brand">

                    <span class="lux-brand-glow"></span>

                    @if($company->logo)

                        <span class="lux-logo-wrap">
                            <img
                                src="{{ asset('storage/' . $company->logo) }}"
                                alt="{{ $company->company_name }}"
                            >
                        </span>

                    @else

                        <span class="lux-brand-text">

                            <strong>
                                {{ $company->company_name }}
                            </strong>

                            <small>
                                {{ $isArabic
                                    ? 'التصميم الداخلي الفاخر'
                                    : 'PREMIUM INTERIOR DESIGN' }}
                            </small>

                        </span>

                    @endif

                </a>


                {{-- =====================================================
                    DESKTOP NAVIGATION
                ====================================================== --}}
                <div class="lux-navbar-menu">

                    <a
                        href="{{ route('home') }}"
                        class="lux-nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                    >
                        <span>{{ $isArabic ? 'الرئيسية' : 'HOME' }}</span>
                    </a>


                    <a
                        href="{{ route('about') }}"
                        class="lux-nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                    >
                        <span>{{ $isArabic ? 'من نحن' : 'ABOUT' }}</span>
                    </a>


                    <a
                        href="{{ route('services') }}"
                        class="lux-nav-link {{ request()->routeIs('services*') ? 'active' : '' }}"
                    >
                        <span>{{ $isArabic ? 'خدماتنا' : 'SERVICES' }}</span>
                    </a>


                    @if($hasActiveProducts)

                        <a
                            href="{{ route('products') }}"
                            class="lux-nav-link {{ request()->routeIs('products*') ? 'active' : '' }}"
                        >
                            <span>{{ $isArabic ? 'منتجاتنا' : 'PRODUCTS' }}</span>
                        </a>

                    @endif


                    <a
                        href="{{ route('projects') }}"
                        class="lux-nav-link {{ request()->routeIs('projects*') ? 'active' : '' }}"
                    >
                        <span>{{ $isArabic ? 'مشاريعنا' : 'PROJECTS' }}</span>
                    </a>


                    <a
                        href="{{ route('contact') }}"
                        class="lux-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                    >
                        <span>{{ $isArabic ? 'تواصل معنا' : 'CONTACT' }}</span>
                    </a>

                </div>


                {{-- =====================================================
                    DESKTOP ACTIONS
                ====================================================== --}}
                <div class="lux-navbar-actions">

                    {{-- Language --}}
                    <a
                        href="{{ route(
                            'language.switch',
                            [
                                'locale' => $isArabic ? 'en' : 'ar'
                            ]
                        ) }}"
                        class="lux-language"
                        aria-label="{{ $isArabic ? 'English' : 'العربية' }}"
                    >
                        <i class="bi bi-globe2"></i>
                        <span>{{ $isArabic ? 'EN' : 'AR' }}</span>
                    </a>


                    {{-- Phone --}}
                    @if($company->phone)

                        <a
                            href="tel:{{ $company->phone }}"
                            class="lux-phone"
                        >

                            <span class="lux-phone-icon">
                                <i class="bi bi-telephone"></i>
                            </span>

                            <span class="lux-phone-content">

                                <small>
                                    {{ $isArabic ? 'اتصل بنا' : 'CALL US' }}
                                </small>

                                <strong>
                                    {{ $company->phone }}
                                </strong>

                            </span>

                        </a>

                    @endif

                </div>


                {{-- =====================================================
                    MOBILE ACTIONS
                ====================================================== --}}
                <div class="lux-mobile-actions">

                    <a
                        href="{{ route(
                            'language.switch',
                            [
                                'locale' => $isArabic ? 'en' : 'ar'
                            ]
                        ) }}"
                        class="lux-mobile-language"
                        aria-label="{{ $isArabic ? 'English' : 'العربية' }}"
                    >
                        <i class="bi bi-globe2"></i>
                        <span>{{ $isArabic ? 'EN' : 'AR' }}</span>
                    </a>


                    <button
                        type="button"
                        class="lux-menu-toggle"
                        id="mobileMenuToggle"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                    >
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                </div>

            </div>

        </div>

    </nav>


    {{-- ================================================================
        MOBILE MENU
    ================================================================= --}}
    <div class="lux-mobile-menu" id="mobileMenu">

        <div class="container">

            <div class="lux-mobile-menu-inner">

                {{-- Menu Glow --}}
                <div class="lux-mobile-menu-glow"></div>


                {{-- Home --}}
                <a
                    href="{{ route('home') }}"
                    class="lux-mobile-link {{ request()->routeIs('home') ? 'active' : '' }}"
                >
                    <span class="lux-mobile-icon">
                        <i class="bi bi-house"></i>
                    </span>

                    <span>
                        {{ $isArabic ? 'الرئيسية' : 'HOME' }}
                    </span>

                    <i class="bi bi-arrow-left lux-mobile-arrow"></i>
                </a>


                {{-- About --}}
                <a
                    href="{{ route('about') }}"
                    class="lux-mobile-link {{ request()->routeIs('about') ? 'active' : '' }}"
                >
                    <span class="lux-mobile-icon">
                        <i class="bi bi-building"></i>
                    </span>

                    <span>
                        {{ $isArabic ? 'من نحن' : 'ABOUT US' }}
                    </span>

                    <i class="bi bi-arrow-left lux-mobile-arrow"></i>
                </a>


                {{-- Services --}}
                <a
                    href="{{ route('services') }}"
                    class="lux-mobile-link {{ request()->routeIs('services*') ? 'active' : '' }}"
                >
                    <span class="lux-mobile-icon">
                        <i class="bi bi-tools"></i>
                    </span>

                    <span>
                        {{ $isArabic ? 'خدماتنا' : 'SERVICES' }}
                    </span>

                    <i class="bi bi-arrow-left lux-mobile-arrow"></i>
                </a>


                {{-- Products --}}
                @if($hasActiveProducts)

                    <a
                        href="{{ route('products') }}"
                        class="lux-mobile-link {{ request()->routeIs('products*') ? 'active' : '' }}"
                    >
                        <span class="lux-mobile-icon">
                            <i class="bi bi-box-seam"></i>
                        </span>

                        <span>
                            {{ $isArabic ? 'منتجاتنا' : 'PRODUCTS' }}
                        </span>

                        <i class="bi bi-arrow-left lux-mobile-arrow"></i>
                    </a>

                @endif


                {{-- Projects --}}
                <a
                    href="{{ route('projects') }}"
                    class="lux-mobile-link {{ request()->routeIs('projects*') ? 'active' : '' }}"
                >
                    <span class="lux-mobile-icon">
                        <i class="bi bi-buildings"></i>
                    </span>

                    <span>
                        {{ $isArabic ? 'مشاريعنا' : 'PROJECTS' }}
                    </span>

                    <i class="bi bi-arrow-left lux-mobile-arrow"></i>
                </a>


                {{-- Contact --}}
                <a
                    href="{{ route('contact') }}"
                    class="lux-mobile-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                >
                    <span class="lux-mobile-icon">
                        <i class="bi bi-envelope"></i>
                    </span>

                    <span>
                        {{ $isArabic ? 'تواصل معنا' : 'CONTACT' }}
                    </span>

                    <i class="bi bi-arrow-left lux-mobile-arrow"></i>
                </a>


                {{-- =====================================================
                    MOBILE CONTACT
                ====================================================== --}}
                <div class="lux-mobile-contact">

                    <div class="lux-mobile-contact-title">
                        <span></span>

                        <small>
                            {{ $isArabic ? 'تواصل معنا' : 'GET IN TOUCH' }}
                        </small>

                        <span></span>
                    </div>


                    @if($company->phone)

                        <a
                            href="tel:{{ $company->phone }}"
                            class="lux-mobile-contact-item"
                        >
                            <span class="lux-contact-icon">
                                <i class="bi bi-telephone"></i>
                            </span>

                            <span>
                                {{ $company->phone }}
                            </span>
                        </a>

                    @endif


                    @if($company->whatsapp)

                        <a
                            href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $company->whatsapp) }}"
                            target="_blank"
                            rel="noopener"
                            class="lux-mobile-contact-item whatsapp"
                        >
                            <span class="lux-contact-icon">
                                <i class="bi bi-whatsapp"></i>
                            </span>

                            <span>
                                WhatsApp
                            </span>
                        </a>

                    @endif

                </div>


                {{-- Mobile Bottom Label --}}
                <div class="lux-mobile-bottom-label">
                    <span></span>
                    <small>PREMIUM INTERIOR DESIGN</small>
                    <span></span>
                </div>

            </div>

        </div>

    </div>

</header>


<style>

/* =========================================================
   LUXURY HEADER
========================================================= */

.lux-header {
    position: relative;
    z-index: 9999;
}


/* =========================================================
   NAVBAR
========================================================= */

.lux-navbar {
    position: relative;
    width: 100%;
    background:
        linear-gradient(
            180deg,
            rgba(5, 8, 12, .97) 0%,
            rgba(7, 10, 14, .94) 100%
        );
    border-bottom: 1px solid rgba(212, 175, 55, .16);
    box-shadow:
        0 15px 45px rgba(0, 0, 0, .35),
        inset 0 -1px 0 rgba(255,255,255,.025);
    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);
}


.lux-navbar::before {
    content: "";
    position: absolute;
    top: 0;
    left: 8%;
    right: 8%;
    height: 1px;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,.7),
        rgba(212,175,55,.95),
        rgba(255,255,255,.7),
        transparent
    );
    opacity: .7;
    animation: luxNavbarLine 4s ease-in-out infinite;
}


@keyframes luxNavbarLine {

    0%,
    100% {
        opacity: .35;
    }

    50% {
        opacity: 1;
    }

}


/* =========================================================
   NAVBAR INNER
========================================================= */

.lux-navbar-inner {
    min-height: 88px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 28px;
}


/* =========================================================
   BRAND
========================================================= */

.lux-brand {
    position: relative;
    display: inline-flex;
    align-items: center;
    min-width: 180px;
    color: #fff !important;
    text-decoration: none !important;
    z-index: 2;
}


.lux-brand-glow {
    position: absolute;
    width: 70px;
    height: 70px;
    right: 20%;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(212,175,55,.13);
    filter: blur(30px);
    border-radius: 50%;
    pointer-events: none;
}


.lux-logo-wrap {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 190px;
}


.lux-logo-wrap::before {
    content: "";
    position: absolute;
    inset: -8px;
    border: 1px solid rgba(212,175,55,.25);
    border-radius: 10px;
    opacity: 0;
    transition: all .35s ease;
}


.lux-brand:hover .lux-logo-wrap::before {
    opacity: 1;
    box-shadow: 0 0 25px rgba(212,175,55,.12);
}


.lux-logo-wrap img {
    display: block;
    max-width: 175px;
    max-height: 58px;
    width: auto;
    height: auto;
    object-fit: contain;
}


.lux-brand-text {
    display: flex;
    flex-direction: column;
    gap: 4px;
}


.lux-brand-text strong {
    position: relative;
    font-size: 20px;
    font-weight: 800;
    letter-spacing: -.4px;
    line-height: 1.2;
    background: linear-gradient(
        90deg,
        #fff 0%,
        #f6e7a9 45%,
        #d4af37 75%,
        #fff 100%
    );
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: luxBrandShine 5s linear infinite;
}


@keyframes luxBrandShine {

    to {
        background-position: 200% center;
    }

}


.lux-brand-text small {
    color: rgba(255,255,255,.48);
    font-size: 8px;
    letter-spacing: 2.4px;
    font-weight: 700;
}


/* =========================================================
   DESKTOP MENU
========================================================= */

.lux-navbar-menu {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
    flex: 1;
}


.lux-nav-link {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 48px;
    padding: 0 14px;
    color: rgba(255,255,255,.67) !important;
    text-decoration: none !important;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .35px;
    white-space: nowrap;
    transition: color .3s ease;
}


.lux-nav-link::before {
    content: "";
    position: absolute;
    left: 12px;
    right: 12px;
    bottom: 5px;
    height: 1px;
    background: linear-gradient(
        90deg,
        transparent,
        #d4af37,
        transparent
    );
    transform: scaleX(0);
    transition: transform .35s ease;
    box-shadow: 0 0 10px rgba(212,175,55,.7);
}


.lux-nav-link::after {
    content: "";
    position: absolute;
    width: 4px;
    height: 4px;
    left: 50%;
    bottom: 1px;
    border-radius: 50%;
    background: #d4af37;
    box-shadow: 0 0 10px rgba(212,175,55,.8);
    transform: translateX(-50%) scale(0);
    transition: transform .3s ease;
}


.lux-nav-link:hover,
.lux-nav-link.active {
    color: #fff !important;
}


.lux-nav-link:hover::before,
.lux-nav-link.active::before {
    transform: scaleX(1);
}


.lux-nav-link:hover::after,
.lux-nav-link.active::after {
    transform: translateX(-50%) scale(1);
}


/* =========================================================
   ACTIONS
========================================================= */

.lux-navbar-actions {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-shrink: 0;
}


/* =========================================================
   LANGUAGE
========================================================= */

.lux-language {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    min-width: 58px;
    height: 42px;
    padding: 0 10px;
    color: rgba(255,255,255,.85) !important;
    text-decoration: none !important;
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 8px;
    background: rgba(255,255,255,.035);
    transition: all .3s ease;
    overflow: hidden;
}


.lux-language::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        120deg,
        transparent,
        rgba(212,175,55,.13),
        transparent
    );
    transform: translateX(-100%);
    transition: transform .5s ease;
}


.lux-language:hover {
    color: #f5d77b !important;
    border-color: rgba(212,175,55,.5);
    box-shadow: 0 0 20px rgba(212,175,55,.1);
}


.lux-language:hover::before {
    transform: translateX(100%);
}


.lux-language i {
    color: #d4af37;
    font-size: 15px;
}


.lux-language span {
    position: relative;
    font-size: 11px;
    font-weight: 800;
}


/* =========================================================
   PHONE
========================================================= */

.lux-phone {
    display: flex;
    align-items: center;
    gap: 9px;
    min-height: 50px;
    padding: 5px 10px 5px 5px;
    color: #fff !important;
    text-decoration: none !important;
    border: 1px solid rgba(212,175,55,.18);
    border-radius: 10px;
    background: linear-gradient(
        135deg,
        rgba(255,255,255,.055),
        rgba(255,255,255,.018)
    );
    transition: all .35s ease;
}


.lux-phone:hover {
    border-color: rgba(212,175,55,.55);
    transform: translateY(-2px);
    box-shadow:
        0 10px 30px rgba(0,0,0,.3),
        0 0 20px rgba(212,175,55,.08);
}


.lux-phone-icon {
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    color: #d4af37;
    background: rgba(212,175,55,.08);
    border: 1px solid rgba(212,175,55,.2);
}


.lux-phone-icon i {
    font-size: 14px;
}


.lux-phone-content {
    display: flex;
    flex-direction: column;
    gap: 2px;
    direction: ltr;
    text-align: left;
}


.lux-phone-content small {
    color: rgba(255,255,255,.42);
    font-size: 8px;
    letter-spacing: 1.5px;
    font-weight: 800;
}


.lux-phone-content strong {
    color: #fff;
    font-size: 11px;
    font-weight: 700;
}


/* =========================================================
   MOBILE ACTIONS
========================================================= */

.lux-mobile-actions {
    display: none;
    align-items: center;
    gap: 7px;
    flex-shrink: 0;
}


.lux-mobile-language {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    width: 46px;
    height: 42px;
    color: #fff !important;
    text-decoration: none !important;
    border: 1px solid rgba(212,175,55,.25);
    border-radius: 8px;
    background: rgba(255,255,255,.035);
}


.lux-mobile-language i {
    color: #d4af37;
    font-size: 15px;
}


.lux-mobile-language span {
    font-size: 10px;
    font-weight: 800;
}


/* =========================================================
   MOBILE TOGGLE
========================================================= */

.lux-menu-toggle {
    position: relative;
    width: 42px;
    height: 42px;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 5px;
    border: 1px solid rgba(212,175,55,.3);
    border-radius: 8px;
    background: rgba(255,255,255,.035);
    cursor: pointer;
}


.lux-menu-toggle span {
    display: block;
    width: 19px;
    height: 1.5px;
    border-radius: 2px;
    background: #fff;
    box-shadow: 0 0 7px rgba(255,255,255,.25);
    transition: all .35s ease;
}


.lux-menu-toggle.active {
    border-color: rgba(212,175,55,.6);
}


.lux-menu-toggle.active span {
    background: #d4af37;
    box-shadow: 0 0 10px rgba(212,175,55,.6);
}


.lux-menu-toggle.active span:nth-child(1) {
    transform: translateY(6.5px) rotate(45deg);
}


.lux-menu-toggle.active span:nth-child(2) {
    opacity: 0;
    transform: scaleX(0);
}


.lux-menu-toggle.active span:nth-child(3) {
    transform: translateY(-6.5px) rotate(-45deg);
}


/* =========================================================
   MOBILE MENU
========================================================= */

.lux-mobile-menu {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
    display: none;
    overflow: hidden;
    background:
        radial-gradient(
            circle at 85% 0%,
            rgba(212,175,55,.10),
            transparent 35%
        ),
        linear-gradient(
            180deg,
            rgba(7,10,14,.99),
            rgba(3,5,8,.99)
        );
    border-top: 1px solid rgba(212,175,55,.2);
    box-shadow:
        0 30px 70px rgba(0,0,0,.55),
        inset 0 1px 0 rgba(255,255,255,.025);
}


.lux-mobile-menu.open,
.lux-mobile-menu.active {
    display: block !important;
    animation: luxMenuReveal .35s ease both;
}


@keyframes luxMenuReveal {

    from {
        opacity: 0;
        transform: translateY(-10px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }

}


.lux-mobile-menu::before {
    content: "";
    position: absolute;
    top: 0;
    left: 12%;
    right: 12%;
    height: 1px;
    background: linear-gradient(
        90deg,
        transparent,
        #d4af37,
        transparent
    );
    box-shadow: 0 0 12px rgba(212,175,55,.6);
}


.lux-mobile-menu-inner {
    position: relative;
    padding: 18px 0 25px;
}


.lux-mobile-menu-glow {
    position: absolute;
    width: 160px;
    height: 160px;
    top: 0;
    right: 0;
    background: rgba(212,175,55,.06);
    filter: blur(45px);
    border-radius: 50%;
    pointer-events: none;
}


/* =========================================================
   MOBILE LINKS
========================================================= */

.lux-mobile-link {
    position: relative;
    display: flex !important;
    align-items: center;
    gap: 12px;
    width: 100%;
    min-height: 58px;
    padding: 0 5px;
    color: rgba(255,255,255,.78) !important;
    text-decoration: none !important;
    border-bottom: 1px solid rgba(255,255,255,.055);
    transition: all .3s ease;
}


.lux-mobile-link::before {
    content: "";
    position: absolute;
    right: 0;
    top: 12px;
    bottom: 12px;
    width: 2px;
    background: #d4af37;
    box-shadow: 0 0 12px rgba(212,175,55,.7);
    transform: scaleY(0);
    transition: transform .3s ease;
}


.lux-mobile-link:hover,
.lux-mobile-link.active {
    color: #fff !important;
    padding-right: 12px;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(212,175,55,.055)
    );
}


.lux-mobile-link:hover::before,
.lux-mobile-link.active::before {
    transform: scaleY(1);
}


.lux-mobile-icon {
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #d4af37;
    border: 1px solid rgba(212,175,55,.18);
    border-radius: 8px;
    background: rgba(212,175,55,.05);
    transition: all .3s ease;
}


.lux-mobile-link:hover .lux-mobile-icon,
.lux-mobile-link.active .lux-mobile-icon {
    color: #fff;
    border-color: rgba(212,175,55,.5);
    background: rgba(212,175,55,.12);
    box-shadow: 0 0 18px rgba(212,175,55,.1);
}


.lux-mobile-icon i {
    font-size: 15px;
}


.lux-mobile-link > span:nth-child(2) {
    flex: 1;
    font-size: 13px;
    font-weight: 700;
}


.lux-mobile-arrow {
    color: rgba(212,175,55,.55);
    font-size: 12px;
    transition: transform .3s ease;
}


.lux-mobile-link:hover .lux-mobile-arrow,
.lux-mobile-link.active .lux-mobile-arrow {
    color: #d4af37;
    transform: translateX(-4px);
}


/* =========================================================
   MOBILE CONTACT
========================================================= */

.lux-mobile-contact {
    margin-top: 20px;
    padding: 18px 0 0;
    border-top: 1px solid rgba(255,255,255,.07);
}


.lux-mobile-contact-title {
    display: flex;
    align-items: center;
    gap: 9px;
    margin-bottom: 13px;
}


.lux-mobile-contact-title span {
    flex: 1;
    height: 1px;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(212,175,55,.3)
    );
}


.lux-mobile-contact-title span:last-child {
    background: linear-gradient(
        90deg,
        rgba(212,175,55,.3),
        transparent
    );
}


.lux-mobile-contact-title small {
    color: rgba(255,255,255,.42);
    font-size: 8px;
    letter-spacing: 1.8px;
    font-weight: 800;
}


.lux-mobile-contact-item {
    display: flex;
    align-items: center;
    gap: 10px;
    min-height: 46px;
    padding: 0 3px;
    color: rgba(255,255,255,.72) !important;
    text-decoration: none !important;
    font-size: 12px;
    font-weight: 600;
    transition: color .25s ease;
}


.lux-mobile-contact-item:hover {
    color: #fff !important;
}


.lux-contact-icon {
    width: 34px;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    color: #d4af37;
    background: rgba(212,175,55,.06);
    border: 1px solid rgba(212,175,55,.15);
}


.lux-mobile-contact-item.whatsapp .lux-contact-icon {
    color: #25d366;
    border-color: rgba(37,211,102,.2);
    background: rgba(37,211,102,.05);
}


/* =========================================================
   MOBILE BOTTOM
========================================================= */

.lux-mobile-bottom-label {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 17px;
}


.lux-mobile-bottom-label span {
    flex: 1;
    height: 1px;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(212,175,55,.25)
    );
}


.lux-mobile-bottom-label span:last-child {
    background: linear-gradient(
        90deg,
        rgba(212,175,55,.25),
        transparent
    );
}


.lux-mobile-bottom-label small {
    color: rgba(255,255,255,.25);
    font-size: 7px;
    letter-spacing: 2px;
    font-weight: 800;
    white-space: nowrap;
}


/* =========================================================
   TABLET + MOBILE
========================================================= */

@media (max-width: 1199px) {

    .lux-navbar-menu {
        gap: 0;
    }

    .lux-nav-link {
        padding: 0 10px;
        font-size: 11px;
    }

    .lux-phone-content {
        display: none;
    }

    .lux-phone {
        padding: 5px;
    }

}


@media (max-width: 991px) {

    .lux-navbar-inner {
        min-height: 78px;
    }

    .lux-navbar-menu,
    .lux-navbar-actions {
        display: none !important;
    }

    .lux-mobile-actions {
        display: flex !important;
    }

    .lux-mobile-menu {
        position: absolute;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 575px) {

    .lux-navbar-inner {
        min-height: 70px;
    }

    .lux-brand {
        min-width: 0;
        max-width: calc(100% - 100px);
    }

    .lux-logo-wrap img {
        max-width: 145px;
        max-height: 47px;
    }

    .lux-brand-text strong {
        font-size: 16px;
    }

    .lux-brand-text small {
        font-size: 6px;
        letter-spacing: 1.6px;
    }

    .lux-mobile-actions {
        gap: 5px;
    }

    .lux-mobile-language {
        width: 42px;
        height: 40px;
    }

    .lux-menu-toggle {
        width: 40px;
        height: 40px;
    }

    .lux-mobile-menu-inner {
        padding: 13px 0 21px;
    }

    .lux-mobile-link {
        min-height: 55px;
    }

}


/* =========================================================
   VERY SMALL SCREENS
========================================================= */

@media (max-width: 380px) {

    .lux-brand {
        max-width: calc(100% - 92px);
    }

    .lux-logo-wrap img {
        max-width: 125px;
    }

    .lux-mobile-language {
        width: 38px;
    }

    .lux-mobile-language span {
        font-size: 9px;
    }

    .lux-menu-toggle {
        width: 38px;
    }

    .lux-mobile-link > span:nth-child(2) {
        font-size: 12px;
    }

}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    .lux-navbar::before,
    .lux-brand-text strong {
        animation: none !important;
    }

    .lux-mobile-menu.open,
    .lux-mobile-menu.active {
        animation: none !important;
    }

    *,
    *::before,
    *::after {
        transition-duration: .01ms !important;
    }

}

</style>