<div class="navs">
    <div class="filter">
        <nav class="navbar navbar-expand-lg  bg-body-tertiary ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="" class="navbar-brand text-white">E-commerce</a>
                <x-search-form></x-search-form>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if (url()->current() == url('/'))
                        <li class="nav-item ms-3 me-3">
                            <a class="nav-link active text-white" href="#">Início</a>
                        </li>
                    @else
                        <li class="nav-item ms-3 me-3">
                            <a class="nav-link text-white" href="#">Início</a>
                        </li>
                    @endif
                    <li class="nav-item ms-3 me-3">
                        <a class="nav-link text-white" href="{{ route('login') }}">Entrar</a>
                    </li>
                    <li class="nav-item ms-3 me-3">
                        <a class="nav-link text-white" href="{{ route('register') }}">Crie sua conta</a>
                    </li>
                    <li class="nav-item dropdown">
                        <p class="btn selector dropdown-toggle text-white" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorias
                        </p>
                        <ul class="dropdown-menu dropdown-menu-light">
                            {{-- foreach loop with the categories --}}
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    @if (url()->current() == url('/offers'))
                        <li class="nav-item ms-3 me-3">
                            <a class="nav-link active text-white" href="#">Ofertas</a>
                        </li>
                    @else
                        <li class="nav-item ms-3 me-3">
                            <a class="nav-link text-white" href="#">Ofertas</a>
                        </li>
                    @endif
                    <li class="nav-item ms-3 me-3">
                        <a class="nav-link text-white" href="#">Vender</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<style>
    .navbar-nav {
        display: flex;
        justify-content: space-between;
        margin-left: 130px;
        width: 83.5%;
    }

    .selector {
        background-color: transparent;
    }

    .selector:hover {
        background-color: transparent;
    }

    .navs {
        position: absolute;
        width: 100%;
        z-index: 1;

    }

    .filter {

        background-color: transparent !important;
        background: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(10px);
    }


    .navbar {

        background-color: transparent !important;
    }

    a:hover {
        color: rgb(150, 152, 155) !important;
    }

    p:hover {
        color: rgb(150, 152, 155) !important;
    }
</style>
