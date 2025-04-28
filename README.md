# Filar

A starter kit for Laravel included Filament for panels, Persian language & validation, Vazirmatn font, and essential
features for rapid application development.

## 🚀 Features

- **Laravel 12.x**
- **Filament 3.x**
- **Livewire 3.x**
- **TailwindCSS 4.x**
- **Laravel Debugbar**
- **Laravel Persian Language**
- **Laravel Persian Validation**
- **Vazirmatn Font**

## 🛠 Installation & Usage

1. Clone the repository:

```bash
git clone https://github.com/sadegh19b/Filar.git
```

2. Install PHP dependencies:

```bash
composer install
```

3. Prepare project for ready to use:

```bash
composer run prepare
```

4. Start the development server:

```bash
php artisan serve
// or
composer run dev
```

If you want to install NPM dependencies & run front assets, you can run:

```bash
npm install
npm run dev
// or
npm run build
```

## 📝 Notes

- For better performance, suggest to use the below commands to cache icons and components:
    ```bash
    php artisan icons:cache
    php artisan filament:cache-components
    ```

- Always use `pint` after any changes in the codebase for formatting the code.

- You can use the google fonts for `Vazirmatn` font:
    ```bash
    <link href='https://fonts.googleapis.com/css?family=Vazirmatn' rel='stylesheet' />
    ```
  Or use the font from the `public/css/fonts/vazirmatn.css` file, for filament or views.

- You can use `persian_faker()` function for persian fake data in seeders.

## 🏗 Project Structure

The project follows a flexible architecture where you can implement business logic using either Actions or Services
based on your specific needs and preferences.

```
app/
├── Actions/         # Business logic actions
├── Enums/           # Enums
├── Filament/        # Filament admin panel resources
├── Http/
│   ├── Controllers/
├── Icons/           # Blade ui kit icons (heroicons)
├── Models/          # Eloquent models
├── Services/        # Service classes
└── Support/         # Support classes
```

## 📚 Documentation

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Pint Documentation](https://laravel.com/docs/12.x/pint)
- [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)
- [Filament Documentation](https://filamentphp.com/docs)
- [Livewire Documentation](https://livewire.laravel.com/docs)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Laravel Persian Validation](https://github.com/sadegh19b/laravel-persian-validation)
- [PHP Persian Faker](https://github.com/amyavari/persian-faker-php)
- [Vazirmatn Font](https://github.com/rastikerdar/vazirmatn)
- [Heroicons](https://heroicons.com/)

## 📄 License

This project is licensed under the MIT License.
