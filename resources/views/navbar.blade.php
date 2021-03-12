<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Tasca M9</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('empresa', ['nombre' => 'Orbora Systems']) }}" }}">Empresa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
            </li>
        </ul>
    </div>
</nav>