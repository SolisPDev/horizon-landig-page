horizon-landing-page
Este proyecto es una landing page minimalista, diseñada para invitar a la acción y captar suscriptores por correo electrónico. Utiliza una arquitectura moderna con Laravel 11 para el backend y Vue.js 3 para el frontend, proporcionando un entorno de desarrollo robusto y escalable.

El proyecto es parte del sitio web principal horizondevs.net, con el lema "Codificando el futuro", y se enfoca en presentar una imagen profesional de desarrollo de software.

Características principales
Página de inicio (Landing Page): Un diseño de una sola página con un llamado a la acción (CTA) claro.

Sección de Tecnologías: Muestra las tecnologías y habilidades clave de forma visual con iconos.

Formulario de suscripción: Un formulario simple para que los visitantes dejen su correo electrónico.

Contador de visitas: Registra y muestra el número de visitas a la página de inicio.

Integración de Laravel y Vue.js:

Backend (Laravel): Maneja el registro de correos electrónicos en una base de datos MySQL.

Frontend (Vue.js): Proporciona una experiencia de usuario dinámica y reactiva con animaciones de entrada y efectos visuales.

Estilización moderna: Utiliza Tailwind CSS para un diseño rápido y personalizable.

Requisitos del sistema
Asegúrate de tener instalados los siguientes componentes en tu máquina:

XAMPP: Con Apache y MySQL activados.

PHP: Versión 8.2 o superior.

Composer: Gestor de paquetes de PHP.

Node.js & npm: Entorno de ejecución de JavaScript y su gestor de paquetes.

Git: Para el control de versiones.

Instalación y configuración
Clona el repositorio desde GitHub.

Navega a la carpeta del proyecto en la terminal.

Instala las dependencias de Composer y npm:

Bash

composer install
npm install
Configura tu base de datos en XAMPP (phpmyadmin) y actualiza el archivo .env.

DB_DATABASE=horizon_db

DB_USERNAME=root

DB_PASSWORD=

Ejecuta las migraciones para crear las tablas necesarias (subscribers y page_visits):

Bash

php artisan migrate
Genera los archivos de configuración de Tailwind CSS:

Bash

npx tailwindcss init -p
Inicia los servidores de desarrollo de Laravel y Vite en dos terminales separadas:

Bash

# En la primera terminal:
npm run dev

# En la segunda terminal:
php artisan serve
El sitio web estará accesible en tu navegador a través de http://127.0.0.1:8000.
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
