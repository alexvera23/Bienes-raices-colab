<?php
// crear_usuario.php
// Coloca este archivo en la raíz de tu proyecto temporalmente

require __DIR__ . '/../includes/app.php';

// Define el email y contraseña que deseas
$email = 'admin@correo.com';
$password = 'admin123'; // Cambia esto por tu contraseña deseada

// Hashear la contraseña
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Insertar en la base de datos
$query = "INSERT INTO usuarios (email, password) VALUES ('{$email}', '{$passwordHash}')";

$resultado = $db->query($query);

if($resultado) {
    echo " Usuario creado exitosamente<br>";
    echo "Email: {$email}<br>";
    echo "Password: {$password}<br>";
    echo "Hash: {$passwordHash}<br><br>";
    echo " IMPORTANTE: Elimina este archivo después de crear el usuario";
} else {
    echo " Error al crear usuario: " . $db->error;
}
?>