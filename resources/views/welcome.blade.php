@extends('layouts.app')
@section('css')
@stop
@section('title')
sintac code - إنطلق نحو النجاح
@stop
@section('content')
    <section class="top-baner">
        <img src="images/assets/Personal.png" width="auto" height="auto" alt="">
        <img class="fire" src="images/assets/fire.png" width="auto" height="auto" alt="">
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
            <article>
                <span>60</span>:
                <span>45</span>:
                <span>10</span>:
                <span>9</span>
            </article>
            <a href="">اطلب العرض الآن</a>
            <h3>ضمان استعادة الأموال لمدة 10 أيام</h3>
        </article>
    </section>
    {{--  <h2 class="title">اختر الخدمة المناسبة وانطلق الآن</h2>  --}}
@stop
@section('js')
@stop
