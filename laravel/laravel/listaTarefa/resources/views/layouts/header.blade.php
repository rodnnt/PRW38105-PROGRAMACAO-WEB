<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                @auth
                    <a class="nav-link" href="/categories">Categorias</a>
                    <a class="nav-link" href="/tasks">Tarefas</a>
                    <form action="/logout" method="post">
                        @csrf
                            <a class="nav-link" href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                    </form>
                @endauth

                @guest
                    <a class="nav-link" href="/login">Login</a>
                    <a class="nav-link" href="/register">Cadastre-se</a>
                @endguest

            </div>
        </div>
    </div>
    </nav>
</header>