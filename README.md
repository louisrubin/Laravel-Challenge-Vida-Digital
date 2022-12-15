# `Laravel Challenge` :mate:
#### Vida-Digital 
Mi proyecto realizado para el Challenge de la empresa "Vida Digital - Software &amp; Infraestructura Cloud", como Developer JR  :shipit:


___

### `Challenge` :speech_balloon:
Vida Digital presenta un reto en donde se debe realizar una **Aplicación en Laravel** la cual
cumpla con los siguientes requerimientos:

1. Migración en Base de Datos MySql de las siguientes entidades: Empresa, Sucursal,
Empleado con sus respectivas relaciones.
2. CRUD’s (Empresas, Sucursales, Empleados).
3. Bootstrap

___
# Instalación y Ejecución :computer:
1. Clonar el repositorio

        git clone https://github.com/louisrubin/Laravel-Challenge-Vida-Digital.git
![clone](https://user-images.githubusercontent.com/72027738/207758433-ec3581bf-46ca-4876-b5b4-9c954f40cc9d.png)

2. Instalar todas las dependencias

    - Instalación de **composer** (esto puede tardar un tiempo):

            composer install

    - Instalación del **package.json**:

            npm install

3. Configurar `MySQL` en el archivo `.env`

    Abrir el archivo `.env` que se encuentra dentro de la carpeta raíz del proyecto y configurarlo con una base de datos existente.
![mysql config](https://user-images.githubusercontent.com/72027738/207755290-26d0270f-66b0-4748-856f-36280264871d.png)


4. Generar una clave

        php artisan key:generate
![key](https://user-images.githubusercontent.com/72027738/207758462-dcd16159-ccc5-41bc-957c-d306b7888736.png)

5. Migrar y sembrar la base de datos

        php artisan migrate
![migrate](https://user-images.githubusercontent.com/72027738/207758497-b25c7e5c-8555-489f-a8c3-b34a71bb6c43.png)

6. Ejecutar los servidores locales de php y node

        npm run dev
![run dev](https://user-images.githubusercontent.com/72027738/207758587-26ce56c0-eb2e-42de-adbe-ebde0bf35e58.png)

        php artisan serve
![serve](https://user-images.githubusercontent.com/72027738/207759076-e29a440e-fba7-48df-9616-652df33727b9.png)

7. Dirigirse al navegador y acceder a la url `http://localhost:8000/` y listo!
___

# Diagrama Entidad-Relación
![der-final](https://user-images.githubusercontent.com/72027738/207760883-54665758-f9ad-4a46-8d0f-359c9feba88f.png)


# Modelo Entidad-Relación
![mer](https://user-images.githubusercontent.com/72027738/207760924-56206780-8321-4d66-a855-b2eb69ff63b8.png)
 
 ___

## Inicialmente el MER sería así, pero por falta de tiempo tuve que rehacer todo para que la base de datos sea más sencilla:
![4](https://user-images.githubusercontent.com/72027738/207761432-9b8ef0bc-4404-4527-a0b6-10aede954958.png)



### Gracias! :cowboy_hat_face:
