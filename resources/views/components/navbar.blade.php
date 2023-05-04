<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="">APP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('nasabah.index') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Master Data
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('nasabah.index') }}">Nasabah</a>
                    <a class="dropdown-item" href="{{ route('transaksi.index') }}">Transaksi</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-expanded="false">
                    Reporting
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('report.index') }}">Report</a>
                    <a class="dropdown-item" href="{{ route('poin.index') }}">Poin</a>
                </div>
            </li>
        </ul>
    </div>
</nav>