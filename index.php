<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proyecto BD</title>
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <header>
        <nav class="navbar navbar-dark bg-primary ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Proyecto BD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mostrar Alumnos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-4">
            <div class="row">
                <h3 class="text-center">Formulario para agregar Alumno</h3>
            </div>
            <div class="row">
                <form class="row" method="">
                    <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">PrimerNombre</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">Segundo Nombre</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">Primer Apellido</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">Segundo Apellido</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">Genero</label>
                        <select class="form-select" name="" id="">
                            <option value="">Seleccione una opción</option>
                            <option value="">Seleccione una opción</option>
                            <option value="">Seleccione una opción</option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">Fecha Nacimiento</label>
                        <input type="date" class="form-control" id="">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">Telefono</label>
                        <input type="tel" class="form-control" id="">
                    </div>
                    <div class="mb-3 col-lg-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Direccion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>


                    <div class="mb-3 col-lg-12">
                        <Button type="submit" style="width: 100%;" class="btn btn-success">Guardar datos</Button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Inicio</a></li>

                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Mostrar Alumnos</a></li>
                
                <li class="nav-item"><a href="cursos.php" class="nav-link px-2 text-body-secondary"> Cursos</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2024 Inatec Project BD</p>
        </footer>
    </div>
</html>