# 📘 Homework 6 – Proyecto Laravel

## 📌 1. Nombre del Proyecto  
**Proyecto Laravel – Activity 7 + Homework 6**

---

## 📌 2. Descripción del Proyecto  
Esta tarea complementa el desarrollo realizado durante la Actividad 7.  
El objetivo es poblar la base de datos con información de prueba realista mediante:

- Un **seeder para usuarios**  
- Un **seeder para kits de robótica**  
- Una **factory para generar 100 cursos**  
- La **actualización del README** incluyendo nombre del proyecto, descripción y diagrama ER  
- La preparación de documentación para subir a la plataforma

Esta actividad garantiza que el proyecto cuente con datos iniciales sólidos y bien estructurados para demostración y desarrollo continuo.

---

## 📌 3. Actividades Realizadas

### ✅ 3.1 Seeder de Usuarios  
Se registraron tres usuarios requeridos:

| Nombre      | Email                    | Contraseña | Rol              |
|-------------|---------------------------|------------|------------------|
| Admon       | admin@robotics.com        | Adm@2022   | Administrativo   |
| Tecmilenio  | tecmilenio@robotics.com   | Adm@2022   | Docente          |
| Student     | student@robotics.com      | Adm@2022   | Estudiante       |

Archivo modificado:  
`database/seeders/UserSeeder.php`

---

### ✅ 3.2 Seeder de Kits de Robótica  
Se registraron los tres kits proporcionados por el cliente como información de prueba.

Archivo utilizado:  
`database/seeders/RoboticsKitSeeder.php`

---

### ✅ 3.3 Factory + 100 Cursos  
Se creó una factory para generar **100 cursos** usando Faker.

Cada curso incluye:  
- Nombre  
- Descripción  
- Duración  
- Fecha de inicio  
- Timestamps automáticos  

Archivos utilizados:  
- `database/factories/CourseFactory.php`  
- `database/seeders/CourseSeeder.php`

---

## 📌 4. Diagrama ER 

![Diagrama ER de Tarea 6](Diagrama%20ER%20Tarea6.png)


## 📌 5. Comandos Utilizados

### Ejecutar migraciones y seeders:
```
php artisan migrate:fresh --seed
```

### Limpiar cachés (opcional):
```
php artisan optimize:clear
```

### Subir cambios a GitHub:
```
git add .
git commit -m "Homework 6: seeders, factory, migraciones y documentación"
git push origin main
```

---

## 📌 6. Evidencias  
*(Pega tus capturas aquí una vez generadas)*

### ✔️ Ejecución del UserSeeder  
_(Inserta imagen aquí)_

### ✔️ Ejecución del RoboticsKitSeeder  
_(Inserta imagen aquí)_

### ✔️ Ejecución del CourseSeeder con 100 cursos  
_(Inserta imagen aquí)_

### ✔️ Imagen del diagrama ER  
_(Inserta imagen aquí)_

---

## 📌 7. Conclusión  
La Homework 6 se completó exitosamente logrando poblar la base de datos con información inicial coherente, documentar adecuadamente el proyecto y preparar todos los elementos necesarios para su entrega formal.

---

**Documento generado automáticamente con asistencia de IA.**
