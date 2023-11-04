<?php

function makeMessages(){

    $messages = [
<<<<<<< HEAD
        'correo.required' => 'debe ingresar su correo electrónico para iniciar sesión',
        'correo.email' => 'usuario no registrado o contraseña incorrecta',
        'contrasena.required' => 'debe ingresar su contraseña para iniciar sesión',
        'document.required' => 'el campo archivo es requerido.',
        'document.mimes' => 'el archivo seleccionado no es Excel con extensión .xlsx.'
=======
        'correo.required' => '- Debe ingresar su correo electrónico para iniciar sesión.',
        'correo.email' => '- Usuario no registrado o contraseña incorrecta.',
        'contrasena.required' => '- Debe ingresar su contraseña para iniciar sesión.',
        'document.required' => 'El campo archivo es requerido.',
        'document.mimes' => 'El archivo seleccionado no es Excel con extensión .xlsx.',
        'document.max' => 'El tamaño máximo del archivo a cargar no puede superar los 5 megabytes.',

>>>>>>> 1344912003c08a7dfcd20de5619ccd4b8bb13019
    ];

    return $messages;
}
