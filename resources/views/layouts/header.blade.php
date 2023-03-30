<header class="navbar navbar-expand-md bg-light">
    <div class="container">
        <a href="{{ route('homepage') }}" class="inline-block sm:inline hover:opacity-75">
            <img src="{{ asset('/images/logo.png') }}" width="60" height="60" alt="">
        </a>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href=" {{ route('register.index') }}" class="nav-link" aria-current="page">
                        {{ __('Регистрация') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
