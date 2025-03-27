# CRESCIO - Proyecto Mini Framework PHP

## Hola, Soy Cristopher! 👋
Este es un pequeño Framework con php sin composer para proyectos pequeños, permite conectar a una base de datos, crear clases controladoras para trabajar con la base de datos, almacenar archivos e imágenes y exportar sus funciones a traves de rutas API, usa JWT para el trabajo con tokens.

## Configuración
- Clonar el repositorio desde github en tu localhost
- Crea tu base de datos sql
- Copiar el archivo .env.example a .env
- Configurar los datos en el .env para conectar a tu base de datos y tu clave secreta de JWT
- Pruebalo 😉

## Como usar
Crea un controlador extendiendo el controlador base (Ejemplo ExampleController),
dentro de ese controlador puedes crear las funciones que necesites para trabajar con tu base de datos,
importa el controlador en Routes/Api.php, agrega una nueva ruta, metodo y acción, implementa un middleware si lo requieres.

Puedes probar tus apis http://localhost/[nombre-del-proyecto]/Api/
