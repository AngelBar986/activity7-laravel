# Activity 7 – Laravel Project (Eloquent ORM, ERD, Migrations & SQL Export)

Este repositorio contiene el desarrollo completo de la **Activity 7**, en la cual se modeló una base de datos mediante **Eloquent ORM**, se construyeron migraciones, modelos, controladores, seeders y se generó un archivo SQL exportado desde la base creada.

---

## 📌 1. Descripción

El objetivo de esta actividad es crear un sistema para una escuela de robótica que maneje:
- Usuarios (estudiantes, maestros, administradores)
- Grupos por nivel
- Cursos con materiales
- Kits de robótica  
- Relaciones entre todos ellos

---

## 📁 2. Contenido del repositorio

- **app/Models** → Modelos Eloquent  
- **app/Http/Controllers** → Controladores principales  
- **database/migrations** → Migraciones con llaves foráneas  
- **database/seeders** → Seeders con datos iniciales  
- **activity7.sql** → Archivo SQL exportado  
- **routes/api.php** → Rutas API  
- **README.md** → Este documento  
- ERD incluido en el reporte del estudiante  

---

## 🧱 3. Entidades del sistema

- **User** → Rol: estudiante, maestro o administrador  
- **Group** → beginner, intermediate, advanced  
- **Course** → Clave, nombre, portada, material, kit  
- **RoboticsKit** → Kit físico asignado a cursos  

---

## 🔗 4. Relaciones implementadas

- Un usuario pertenece a un grupo  
- Un grupo tiene muchos usuarios  
- Un curso pertenece a un kit  
- Un grupo puede tener varios cursos  
- Un curso puede asignarse a varios grupos  
- Tablas pivot:
  - `group_user`
  - `course_group`

---

## 🧬 5. Migraciones

Incluyen:
- Llaves primarias  
- Llaves foráneas  
- Relaciones muchos-a-muchos  
- Tablas pivot  
- Campos solicitados en la actividad  

---

## 🧪 6. Seeders

Generan datos de:
- Usuarios
- Grupos
- Cursos
- Kits
- Relaciones entre entidades

---

## 🗄️ 7. Archivo SQL

El archivo:

```
activity7.sql
```

Incluye:
- La estructura completa generada por migraciones  
- Los datos generados por seeders  

Es el archivo requerido como evidencia final.

---

## ▶️ 8. Cómo ejecutar este proyecto

### 1. Clonar el repositorio
```
git clone https://github.com/AngelBar986/activity7-laravel.git
```

### 2. Entrar al proyecto
```
cd activity7-laravel
```

### 3. Instalar dependencias
```
composer install
```

### 4. Crear archivo .env
Copiar `.env.example` y renombrarlo a `.env`.

### 5. Generar key del proyecto
```
php artisan key:generate
```

### 6. Configurar base de datos en .env

### 7. Ejecutar migraciones
```
php artisan migrate --seed
```

### 8. Levantar servidor
```
php artisan serve
```

---

## 🖼️ 9. ERD

El diagrama ER debe incluirse en el reporte final, mostrando entidades y relaciones solicitadas.

---

## ✒️ 10. Autor

Proyecto realizado por **Angel David Barrios Díaz** como parte de la Activity 7.
