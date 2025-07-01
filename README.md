# Filar

A starter kit for Laravel included Filament for panels, Persian language, Vazirmatn font, and essential features for rapid application development.

## 🚀 Features

- **Laravel 12.x**
- **Filament 3.x**
- **Livewire 3.x**
- **TailwindCSS 4.x**
- **Laravel Pint**
- **Laravel Rector**
- **Larastan**
- **Laravel Persian Language**
- **Vazirmatn Font**

## 📦 Installation & Usage

First, you must clone the repo:
```bash
git clone https://github.com/sadegh19b/Filar.git
cd Filar
```

For local development with docker, you can use the following commands:
```
docker compose up -d --build
docker exec -it filar-app-dev-1 bash
composer i
cp .env.dev .env
php artisan key:generate
npm i && npm run dev
```

For local development without docker, you can use the following commands:
```
composer i
cp .env.dev .env
php artisan key:generate
npm i
composer run dev
```

## 🏗 Extra Features

You can add extra features with installing packages if needed to the project.

- **Laravel Debugbar**: for debugging the project.
    ```bash
    composer require barryvdh/laravel-debugbar --dev
    ```

- **Laravel Persian Language**: for persian language translation files.
    ```bash
    composer require sadegh19b/laravel-persian-lang
    ```

- **Laravel Persian Validation**: for persian language validation rules.
    ```bash
    composer require sadegh19b/laravel-persian-validation
    ```

- **Laravel Persian Faker**: for persian language faker data.
    ```bash
    composer require amyavari/persian-faker-php
    ```

## 📝 Notes

- For better performance, suggest to use the below commands to cache icons and components:
    ```bash
    php artisan icons:cache
    php artisan filament:cache-components
    ```

- Always use `pint` & `rector` after any changes in the codebase for formatting the code and use `phpstan` for static analysis with the following commands:
    ```bash
    composer run pint
    composer run rector
    composer run phpstan
    ```

- You can use the google fonts for `Vazirmatn` font:
    ```bash
    <link href='https://fonts.googleapis.com/css?family=Vazirmatn' rel='stylesheet' />
    ```
  Or use the font from the `public/css/fonts/vazirmatn.css` file, for filament or views.


## 🔀 Git

### Commit Messages

For commit messages, use the following [conventional commits](https://www.conventionalcommits.org/en/v1.0.0/), please read it before starting to work.

### Git Flow

We use the [git flow](https://nvie.com/posts/a-successful-git-branching-model/) branching model, please read it before starting to work.

If you want to ignore permission changes to git in the project, you can use the following command:
```
git config core.fileMode false
```

or globally:
```
git config --global core.fileMode false
```

## 📚 Documentation

- [Laravel](https://laravel.com/docs)
- [Laravel Pint](https://laravel.com/docs/12.x/pint)
- [Laravel Rector](https://github.com/driftingly/rector-laravel)
- [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)
- [Filament](https://filamentphp.com/docs)
- [Livewire](https://livewire.laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com/docs)
- [Laravel Persian Validation](https://github.com/sadegh19b/laravel-persian-validation)
- [PHP Persian Faker](https://github.com/amyavari/persian-faker-php)
- [Vazirmatn Font](https://github.com/rastikerdar/vazirmatn)
- [Heroicons](https://heroicons.com/)

## 📄 License

This project is licensed under the MIT License.
