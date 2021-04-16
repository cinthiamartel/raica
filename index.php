<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <form class="" action="validarForm.php" method="post">
    <div class="">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" placeholder="Ingrese su nombre">
      <br>
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" placeholder="Ingrese su apellido">
      <br>
      <label for="identidad">Identidad</label>
      <input type="text" name="identidad" placeholder="Ingrese su identidad">
      <br>
      <label for="fechaNacimiento">Fecha de Nacimiento</label>
      <input type="date" name="fechaNacimiento" placeholder="Fecha de Nacimiento">
      <br>
      <label for="correoElectronico">Correo Electronico</label>
      <input type="email" name="correoElectronico" placeholder="Ingrese su correo electronico">
      <br>
      <label for="fotoPerfil">Foto de Perfil</label>
      <input type="file" name="fotoPerfil">
      <br>
      <input type="submit" name="validar" value="Registrarse">
    </div>
  </form>
  </body>
</html>
