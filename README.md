# Giunti Psychometrics: Landing page (Laravel)

Landing page de **Giunti Psychometrics** con catálogo de tests y cursos, filtrado por categoría, buscador y formulario de contacto.

**Stack:** Laravel · Blade · Stylus · jQuery · Laravel Mix


## Requisitos

- PHP 8.2 o superior
- Composer
- Node.js 18 o superior y npm

## Instalación

```bash
git clone https://github.com/Juanp3122/Giunti-Technical-Test---Laravel.git
cd Giunti-Technical-Test---Laravel

composer install
cp .env.example .env
php artisan key:generate

npm install
npm run dev
```

En Windows (CMD o PowerShell), sustituye `cp` por `copy .env.example .env`.

## Imágenes necesarias

Estos archivos no vienen con el código y deben añadirse en `public/`:

| Archivo | Uso |
|---|---|
| `public/logo.png` | Logo del header y del footer |
| `public/images/hero.jpg` | Imagen del hero |

Las imágenes de los productos se definen en `config/catalog.php`, con URL externa o ruta local (por ejemplo `/images/mmpi-2.jpg`).

## Ejecución en desarrollo

Se necesitan **dos terminales** abiertas a la vez, en la raíz del proyecto:

```bash
# Terminal 1: servidor de Laravel
php artisan serve

# Terminal 2: compila Stylus y JS, y recompila al guardar
npm run watch
```

Abre [http://localhost:8000](http://localhost:8000).

Ejecuta `npm run dev` al menos una vez antes de abrir la página. Genera `public/mix-manifest.json`, que Blade necesita para localizar los assets.

## Scripts

| Comando | Descripción |
|---|---|
| `npm run dev` | Compila una vez, sin minificar |
| `npm run watch` | Compila y vigila cambios |
| `npm run prod` | Compila y minifica para producción |

## Mejoras propuestas

delegar ciertas acciones como la consulta, filtro y envío de formularios a un servicio back end con el fin de ser consumido.





