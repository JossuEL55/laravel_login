# 🧾 Laravel Auth App

Una aplicación web simple de login de usuarios desarrollada con **Laravel**. Este proyecto permite a los usuarios **registrarse**, **iniciar sesión**, y **cerrar sesión**, con formularios validados y manejo de sesiones de forma segura.

## Tabla de contenidos

- [Descripción](#descripción)
- [Características](#características)
- [Tecnologías](#tecnologías)
- [Uso](#uso)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Estado](#estado)
- [Autor](#autor)
- [Licencia](#licencia)

## Descripción

Este proyecto fue desarrollado como una introducción a Laravel como segunda tarea. Consiste en una aplicación de autenticación de usuarios con controladores personalizados, vistas para login y registro, y rutas configuradas para el flujo completo del usuario.

## Características

- Registro de nuevos usuarios con validación.
- Inicio de sesión con protección de credenciales.
- Cierre de sesión seguro.
- Diseño estilizado con CSS personalizado.
- Rutas bien definidas para cada funcionalidad.
- Uso de migraciones y base de datos MySQL.

## 🛠Tecnologías

- Karavek
- PHP 
- CSS3
- MySQL

## Uso
Accede a http://localhost:8000/register para registrar un nuevo usuario.

Luego puedes iniciar sesión desde http://localhost:8000/login.

Al iniciar sesión, serás redirigido a la página principal.

Puedes cerrar sesión desde la opción correspondiente en la vista.

## Estructura del proyecto

app/
├── Http/
│   └── Controllers/
│       └── AuthController.php
├── Models/
│   └── User.php
database/
├── migrations/
│   ├── create_users_table.php
│   ├── create_cache_table.php
│   └── create_jobs_table.php
public/
└── css/
    ├── app.css
    └── home.css
    └── logni.css
resources/
├── views/
routes/
└── web.php

En views se encuentran todas las vistas aplicadas.

## Estado

 Proyecto terminado. Funcionalidad completa implementada.

 ## Autor

 Jossue Ayala.

  ## Autor

  Este proyecto está licenciado bajo la Licencia MIT.
 
 
