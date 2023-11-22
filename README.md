# catedra2_idwm
# Nombre del Proyecto

## Descripción
Este proyecto es parte de la Cátedra 2 y utiliza Angular 16.x para el frontend y Laravel 10 para el backend. Se requiere XAMPP para la base de datos.

## Requisitos del Sistema
- [XAMPP](https://www.apachefriends.org/index.html) para la base de datos.
- [Node.js](https://nodejs.org/) para npm.
- [Angular CLI](https://cli.angular.io/) para el desarrollo frontend.
- [Composer](https://getcomposer.org/) para Laravel.

## Configuración del Proyecto

1. **Clonar el Repositorio:**
   ```bash
   git clone https://github.com/tu-usuario/tu-proyecto.git
   cd tu-proyecto
Instalar Dependencias Frontend:
    
    cd frontend
    npm install

Instalar Dependencias Backend:

    cd backend
    composer install

Configurar la Base de Datos:

Inicia XAMPP y asegúrate de que MySQL esté en ejecución.
Crea una nueva base de datos y configura las credenciales en el archivo .env del directorio backend.

    cd backend
    php artisan migrate --seed

Iniciar el Servidor Frontend:

    cd frontend
    ng serve

Iniciar el Servidor Backend:

    cd backend
    php artisan serve

  
