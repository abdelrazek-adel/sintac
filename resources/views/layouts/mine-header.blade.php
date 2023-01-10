<header dir="rtl">
    <nav>
        <i class="fa-solid fa-list list"></i>
        <ul>
            <li>
                @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" title="دخول">
                        <i class="fa-solid fa-user"></i>
                    </a>
                @endif
                @else
                    <a class="a"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" dir="ltr" title="تسجيل الخروج">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
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
                    <img class="lang" src="{{ asset("images/lang/egypt.png") }}" width="30" height="30" alt="">
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
