<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Alumnos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="new.php">Nuevo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ordenar
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="order.php?criterio=id">Id</a></li>
                        <li><a class="dropdown-item" href="order.php?criterio=nombre">Nombre</a></li>
                        <li><a class="dropdown-item" href="order.php?criterio=poblacion">Poblacion</a></li>
                        <li><a class="dropdown-item" href="order.php?criterio=curso">Curso</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search" action="filter.php" method="GET">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"name="expresion" required>
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>