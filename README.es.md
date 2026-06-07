# When Is The Next MCU Film

Aplicacion web simple en PHP que muestra informacion sobre la proxima pelicula del Universo Cinematografico de Marvel. Consume la API de [whenisthenextmcufilm.com](https://whenisthenextmcufilm.com) y despliega el titulo, fecha de estreno, dias restantes, poster y la siguiente produccion.

## Caracteristicas

- Consume una API REST publica para obtener datos en tiempo real del UCM
- Muestra el poster, titulo, fecha de estreno y dias hasta el lanzamiento
- Indica cual es la siguiente produccion despues de la pelicula proxima
- Construido con PHP 8 (promoted properties, match expressions, named arguments)
- Estilizado con Pico CSS (soporte de modo claro/oscuro)
- Minimalista y ligero -- sin dependencias, sin base de datos, sin herramientas de compilacion

## Requisitos

- PHP 8.0 o superior
- La directiva `allow_url_fopen` habilitada en `php.ini` (activada por defecto en la mayoria de instalaciones de PHP)

## Inicio rapido

1. **Clona el repositorio**

   ```bash
   git clone https://github.com/tu-usuario/WhenIsTheNextMCUFilm.git
   cd WhenIsTheNextMCUFilm
   ```

2. **Inicia el servidor web integrado de PHP**

   ```bash
   php -S localhost:8000
   ```

3. **Abre la aplicacion**

   Visita [http://localhost:8000](http://localhost:8000) en tu navegador.

Eso es todo. No necesitas Composer, ni migraciones de base de datos, ni configuracion de entorno. La aplicacion obtiene los datos directamente de la API publica en `https://whenisthenextmcufilm.com/api`.

## Como funciona

1. `index.php` es el punto de entrada. Requiere los archivos auxiliares e instancia un objeto `NextMovie`.
2. `NextMovie::fetch_and_create_movie()` hace una peticion GET a la API usando `file_get_contents()`, decodifica la respuesta JSON y devuelve una instancia de `NextMovie`.
3. La clase `NextMovie` contiene los datos de la pelicula y provee el metodo `get_until_message()` que retorna un texto legible basado en los dias hasta el estreno.
4. Los datos se pasan a las plantillas (`head.php`, `main.php`, `styles.php`) mediante la funcion `render_template()`, que usa `extract()` para convertir las claves del array en variables.

## Estructura del proyecto

```
WhenIsTheNextMCUFilm/
├── index.php              # Punto de entrada
├── functions.php          # Funciones auxiliares (render_template)
├── consts.php             # Constantes (API_URL)
├── classes/
│   └── NextMovie.php      # Modelo de datos de la pelicula
├── templates/
│   ├── head.php           # Cabecera HTML con meta tags y Pico CSS
│   ├── main.php           # Contenido principal (poster, titulo, fecha)
│   └── styles.php         # Estilos CSS personalizados
├── classes.php            # Clase de ejemplo (SuperHero) -- no usada por la app
├── README.md              # Version en ingles del README
├── README.es.md           # Este archivo
└── .gitignore
```

## Mas informacion

- [Documentacion del servidor integrado de PHP](https://www.php.net/manual/en/features.commandline.webserver.php)
- [API de whenisthenextmcufilm.com](https://whenisthenextmcufilm.com/api)
- [Pico CSS](https://picocss.com)

---

## Read in English

This document is also available in [English](README.md).
