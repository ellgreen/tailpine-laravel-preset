# Tailpine Laravel Frontend Preset

Lightweight laravel frontend preset for [Tailwind CSS](https://tailwindcss.com) and [Alpine.js](https://github.com/alpinejs/alpine)

## Installation

```bash
composer require --dev ellgreen/tailpine-laravel-preset
```

Once that has installed, you can run the following command to install the preset:

```bash
php artisan ui tailpine
```

After that, the assets will need to be updated like so:

```
npm install

npm run dev
```

Optionally, after install, you can remove the dependency as it's not needed anymore:

```bash
composer remove --dev ellgreen/tailpine-laravel-preset
```
