# When Is The Next MCU Film

A simple PHP web application that shows information about the next upcoming Marvel Cinematic Universe film. It consumes the [whenisthenextmcufilm.com](https://whenisthenextmcufilm.com) API and displays the movie title, release date, days remaining, poster, and the following production.

## Features

- Consumes a public REST API to fetch real-time MCU release data
- Displays movie poster, title, release date, and days until release
- Shows the next following production after the upcoming film
- Built with PHP 8 (constructor promotion, match expressions, named arguments)
- Styled with Pico CSS (light/dark mode support)
- Minimal and lightweight -- no dependencies, no database, no build tools

## Requirements

- PHP 8.0 or higher
- The `allow_url_fopen` directive enabled in `php.ini` (enabled by default in most PHP installations)

## Quick Start

1. **Clone the repository**

   ```bash
   git clone https://github.com/EmaConor/WhenIsTheNextMCUFilm.git
   cd WhenIsTheNextMCUFilm
   ```

2. **Start the PHP built-in web server**

   ```bash
   php -S localhost:8000
   ```

3. **Open the application**

   Visit [http://localhost:8000](http://localhost:8000) in your browser.

That is it. No Composer install, no database migrations, no environment configuration. The application fetches data directly from the public API at `https://whenisthenextmcufilm.com/api`.

## How It Works

1. `index.php` is the entry point. It requires the helper files and instantiates a `NextMovie` object.
2. `NextMovie::fetch_and_create_movie()` makes a GET request to the API using `file_get_contents()`, decodes the JSON response, and returns a `NextMovie` instance.
3. The `NextMovie` class holds the movie data and provides a `get_until_message()` method that returns a human-readable string based on the number of days until release.
4. Data is passed to the templates (`head.php`, `main.php`, `styles.php`) via the `render_template()` function, which uses `extract()` to make array keys available as variables.

## Project Structure

```
WhenIsTheNextMCUFilm/
├── index.php              # Entry point
├── functions.php          # Helper functions (render_template)
├── consts.php             # Constants (API_URL)
├── classes/
│   └── NextMovie.php      # Movie data model
├── templates/
│   ├── head.php           # HTML head with meta tags and Pico CSS
│   ├── main.php           # Main content (poster, title, date)
│   └── styles.php         # Custom CSS styles
├── classes.php            # Extra example class (SuperHero) -- not used by the app
├── README.md              # This file
├── README.es.md           # Spanish version of the README
└── .gitignore
```

## Learn More

- [PHP built-in web server documentation](https://www.php.net/manual/en/features.commandline.webserver.php)
- [whenisthenextmcufilm.com API](https://whenisthenextmcufilm.com/api)
- [Pico CSS](https://picocss.com)

---

## Leer en espanol

Este documento tambien esta disponible en [espanol](README.es.md).
