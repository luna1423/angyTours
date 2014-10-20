<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="RegistrarEmergente.php" method="POST" autocomplete="on">
                                <h1>¡¡ Regístrate !!</h1> 
                                 
                                    <label for="username" class="uname" > Nombre de Usuario: </label>
                                    <input type="text" name="usuario" placeholder="Usuario" required><br>
                                
                                    <label for="username" class="uname" > Nombre Personal: </label>
                                    <input type="text" placeholder="Nombre Personal" name="nombre" required><br>
                                
                                    <label for="password" class="youpasswd" > Contraseña: </label>
                                    <input type="password" placeholder="Contraseña" name="pass" required> <br>
                                
                                    <label for="username" class="uname"> Teléfono Personal: </label>
                                    <input type="tel" placeholder="Teléfono" name="telefono" required maxlength="10"><br>
                                
                                    <label for="username" class="uname" > Correo Electrónico: </label>
                                    <input type="email" placeholder="Email" name="correo" required><br>
                               
                                    <label for="username" class="uname"> Dirección: </label>
                                    <input type="text" placeholder="Dirección" name="direccion" required><br>
                                
                                
                                <p class="login button"> 
                                    <input id="registrarse" type="submit" value="Registrarse">
                                </p>
                                
                            </form>
</body>
</html>
