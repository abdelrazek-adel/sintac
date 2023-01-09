<header dir="rtl">
    <nav>
        <i class="fa-solid fa-list list"></i>
        <ul>
            <li>
                <a href="" title="الملف الشخصي">
                    <i class="fa-solid fa-user"></i>
                </a>
            </li>
            <li>
                <a href="" title="المساعدة">
                    <i class="fa-solid fa-hands-holding-child"></i>
                </a>
            </li>
            <li>
                <a href="" title="جديد">
                    <i class="fa-solid fa-radio"></i>
                </a>
            </li>
            <li>
                <a href="" title="المتجر">
                    <i class="fa-sharp fa-solid fa-shop"></i>
                </a>
            </li>
            <li>
                <a href="/en" title="اللغة">
                    <img src="{{ asset("images/lang/egypt.png") }}" width="auto" height="30" alt="">
                </a>
                {{--  <a href="#">
                    {{ Config::get('languages')[App::getLocale()] }}
                </a>
                <div>
                    @foreach (config::get('languages') as $lang=>$language)
                    @if($lang != App::getLocale())
                        <a href="{{ route('lang.switsh', $lang) }}">{{ $language }}</a>
                    @endif

                    @endforeach
                </div>  --}}
            </li>
        </ul>
    </nav>
    <article>
        <h3>SINTAC CODE</h3>
        <img src="images/assets/logo.png" width="auto" height="50" alt="">
    </article>
</header>
