<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
</head>
</head>
<body>

<section class="">

  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="{{ asset('assets/img/aea.png')}}"
                alt="worktgo" class="img-fluid" style="width: 500px;" />
          <h1 class="my-5 display-3 fw-bold ls-tight">
            La mejor Oferta  <br />
            <span class="text-primary">Para tus empleos</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
          Registrate para continuar y si ya tienes cuenta inicia seccion: <br>
          <a href="/login" style="color: #393f81;text-decoration: none;">Iniciar seccion</a></p>
          </p>
        </div>

        <div class="col-lg-6 mb-3 mb-lg-0">
          <div class="card">
            <div class="card-body py-3 px-md-3">
              <form action="/register" method="POST">
              @csrf
              @include('layouts\partials\message')
                 <!-- Email input -->
                 <div class="form-outline mb-3">
                  <input type="email" id="form3Example3" class="form-control" name="email" />
                  <label class="form-label" for="form3Example3">Correo Electronico</label>
                </div>
                  <!-- Nombre y apellido input-->
                <div class="form-outline mb-3">
                  <input type="text" id="form3Example3" class="form-control" name="nombre"/>
                  <label class="form-label" for="form3Example3">Nombre y apellido</label>
                </div>

                  <!-- username-->
                  <div class="form-outline mb-4">
                  <input type="text" id="form3Example3" class="form-control" name="username"/>
                  <label class="form-label" for="form3Example3">Username</label>
                </div>
             
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" name="cedula" />
                      <label class="form-label" for="form3Example1">Cedula</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control"name="celular" />
                      <label class="form-label" for="form3Example2">telefono</label>
                    </div>
                  </div>
                </div>
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="password"/>
                  <label class="form-label" for="form3Example4">Contraseña</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="password_confirmation"/>
                  <label class="form-label" for="form3Example4">Confirmar Contraseña</label>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" value="Registrarse">
                  Registrarse
                </button>             

              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

</body>
</html>