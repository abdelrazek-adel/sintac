@extends('layouts.app')
@section('css')
@stop
@section('title')
إنطلق نحو النجاح
@stop
@section('header')
@include('layouts.mine-header')
@stop
@section('content')
    <section class="top-baner">
        <img src="{{ asset("images/assets/Personal.png") }}" width="auto" height="auto" alt="">
        <img class="fire" src="{{ asset("images/assets/fire.png") }}" width="auto" height="auto" alt="">
        <article dir="rtl">
            <h2>{{ __('words.title') }}</h2>
            <h3>تخفيض يصل حتى <span>75%</span> خلال فترة العرض</h3>
            <h3>
                <i class="fa-thin fa-file-lines"></i>
                قائمة أسعار احترافية
            </h3>

            <h3>
                <i class="fa-solid fa-headphones-simple"></i>
                دعم فني 24/7
            </h3>
            <h3>
                $
                <span>1.99</span>
                في الشهر
            </h3>
            <h3 class="bonas">
                +3 أشهر مجانية
            </h3>
            <article dir="ltr">
                <span id="d"></span>:
                <span id="h"></span>:
                <span id="m"></span>:
                <span id="s"></span>
            </article>
            <a href="">اطلب العرض الآن</a>
            <h3>ضمان استعادة الأموال لمدة 10 أيام</h3>
        </article>
    </section>
    <h2 class="title">اختر الخدمة المناسبة وانطلق الآن</h2>
    <section class="cards" dir="rtl">
        <article class="card">
            <img src="{{ asset("images/assets/id.png") }}" alt="card">
            <h2>كرت شخصي</h2>
            <h2 class="price">1.59$</h2>
            <ul>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>كرت شخصي الكتروني</span>
                </li>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>بريد الكتروني مميز</span>
                </li>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>خرائط جوجل</span>
                </li>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>تصميم احترافي </span>
                </li>
            </ul>
            <a href="#" class="link">
                <span>
                    احصل عليه الآن
                </span>
            </a>
        </article>
        <article class="card">
            <h1 class="title-card">الأكثر شيوعا</h1>
            <img src="{{ asset("images/assets/price.png") }}" alt="card">
            <h2>منيو الكتروني</h2>
            <h2 class="price">2.99$</h2>
            <ul>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>قاثمة أسعار متغيرة</span>
                </li>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>امكانية الطلب اونلاين</span>
                </li>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>بريد الكتروني مميز</span>
                </li>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>لوحة تحكم سهلة</span>
                </li>
            </ul>
            <a href="#" class="link">
                <span>
                    احصل عليه الآن
                </span>
            </a>
        </article>
        <article class="card">
            <img src="{{ asset("images/assets/site.png") }}" alt="card">
            <h2>ويب سايت</h2>
            <h2 class="price">4.99$</h2>
            <ul>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>تصميم احترافي</span>
                </li>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>استضافة محانية</span>
                </li>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>دومين فرعي مجاني</span>
                </li>
                <li>
                    <i class="fa-solid fa-check"></i>
                    <span>بريد الكتروني مميز</span>
                </li>
            </ul>
            <a href="#" class="link">
                <span>
                    احصل عليه الآن
                </span>
            </a>
        </article>
    </section>
    <section class="bottom">
    </section>
    <section class="under-bottom">
        <article class="left">
            <img src="{{ asset("images/assets/Team.png") }}" alt="">
        </article>
        <article class="right" dir="rtl">
            <h2>تحكم في مؤشر نجاحك</h2>
            <p>نسعى دائما جاهدين في تقديم أفضل الخدمات التي تمكنكم من
                النجاح والتقدم وتطوير مشروعاتكم راجين من الله التوفيق لنا
                ولكم .
            </p>
            <a href="#">اعرف عنا</a>
        </article>
    </section>
@stop
@section('js')
    <script src="{{ asset("js/timer.js") }}"></script>
@stop
