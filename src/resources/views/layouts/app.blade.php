<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header_i_nner">
            <div class="header-utilities">
                <a href="/" class="header__logo">
                    Attendance Managemnt
                </a>
                <nav>
                    <ul class="header-nav">
                        <li class="header-nav__item">
                            <a href="/mypage" class="header-nav__link">マイページ</a>
                        </li>
                        <li class="header-nav__item">
                            <form>
                                <button class="header-nav__button">ログアウト
                                </button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')    
    </main>
</body>


</html>