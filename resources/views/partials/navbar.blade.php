<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-success fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/*') ? 'text-light' : 'active' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/dataKursus*') ? 'text-light' : 'active' }}" aria-current="page"
                        href="/login">Informasi Kursus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/dataKursus*') ? 'text-light' : 'active' }}" aria-current="page"
                        href="/login">Bukti Pendaftaran</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item justify-content-end">
                    <a class="nav-link {{ Request::is('login*') ? 'text-light' : 'active' }}" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end navabar -->