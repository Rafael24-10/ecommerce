<div class="navs">
    <div class="filter">
        <nav class="navbar navbar-expand-lg  bg-body-tertiary ">
            <div class="container-fluid">
                <a href="" class="navbar-brand text-white">E-commerce</a>
                <button class="navbar-toggler mx-2 bg-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <x-search-form></x-search-form>
        </nav>
        <nav class="navbar navbar-expand-lg  bg-body-tertiary">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if (url()->current() == url('/'))
                        <li class="nav-item ms-1 me-3">
                            <a class="nav-link active text-white" href="#">Início</a>
                        </li>
                    @else
                        <li class="nav-item ms-1 me-3">
                            <a class="nav-link text-white" href="#">Início</a>
                        </li>
                    @endif
                    <li class="nav-item ms-1 me-3">
                        <a class="nav-link text-white" href="{{ route('login') }}">Entrar</a>
                    </li>
                    <li class="nav-item ms-1 me-3">
                        <a class="nav-link text-white" href="{{ route('register') }}">Crie sua conta</a>
                    </li>
                    <li class="nav-item dropdown">
                        <p class="btn selector categorias dropdown-toggle px-1 py-0 my-0 text-white"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                        <li class="nav-item ms-1 me-3">
                            <a class="nav-link active text-white" href="#">Ofertas</a>
                        </li>
                    @else
                        <li class="nav-item ms-1 me-3">
                            <a class="nav-link text-white" href="#">Ofertas</a>
                        </li>
                    @endif
                    <li class="nav-item ms-1 me-3">
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
        width: 100%;
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

        /* background-color: grey !important; */
        background-color: transparent !important;
    }

    .nav-link:hover {
        color: rgb(150, 152, 155) !important;
    }

    .categorias:hover {
        color: rgb(150, 152, 155) !important;
    }


    @media(max-width:620px) {
        .navs {
            position: static;
            background-color: rgb(44, 43, 43);
        }
    }
</style>
