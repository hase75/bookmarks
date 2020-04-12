<!-- Main Header -->
<header class="main-header">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a href="{{ route('/') }}" class="text-black-50">Bookmarks</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                    @if (isset($role) && $role === 'user')
                        <a class="nav-link" href="{{ route('admin.books.index') }}">管理側本一覧</a>
                    @elseif (isset($role) && $role === 'admin')
                        <a class="nav-link" href="{{ route('user.books.index') }}">ユーザー側本一覧</a>
                    @endif
                </li>

            </ul>
        </div>
    </nav>
</header>
