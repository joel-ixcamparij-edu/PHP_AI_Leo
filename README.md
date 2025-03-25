📌 Actividad 3 - Proyecto PHP con Pandas

Este proyecto de la actividad 3 combina PHP y Python con Pandas para ejecutar y mostrar resultados de análisis de datos de forma sencilla desde una página web.

💻 Descripción del Proyecto

El objetivo de esta actividad es utilizar PHP como lenguaje interpretado que llama scripts de Python con Pandas para análisis y presentación de datos. El flujo consiste en:

Ejecutar desde PHP un script en Python que realiza un análisis con Pandas.

Mostrar los resultados del script Python directamente en una página web generada por PHP.

🧩 Flujo del Proyecto

PHP ejecuta un script en Python.

El script Python utiliza Pandas para procesar datos (ej.: lectura de CSV, cálculos estadísticos).

El resultado de la ejecución Python es capturado por PHP y mostrado en una página HTML.

🚀 Cómo Ejecutar

Requisitos:

Servidor web local (XAMPP, WAMP, MAMP).

PHP instalado.

Python con la librería Pandas instalada.

Ejecución:

Coloca los archivos del proyecto en la carpeta raíz del servidor web.

Asegúrate que el servidor Apache y PHP estén funcionando.

Accede al proyecto a través del navegador con:

http://localhost/tu_archivo_php.php

📂 Estructura del Proyecto:

📁 Proyecto_PHP_Pandas
 ├── tu_archivo_php.php (Código PHP principal)
 ├── analisis_pandas.py (Script Python con Pandas)
 ├── datos.csv (Opcional: datos de ejemplo)
 └── README.md (Este archivo)

📸 Ejemplo de resultado:

Al acceder al sitio web generado por PHP, verás resultados procesados y presentados claramente, por ejemplo:

Promedio: 23.45
Máximo: 45
Mínimo: 12

🛠️ Consideraciones adicionales:

Asegúrate de habilitar la ejecución de comandos Python desde PHP usando funciones como shell_exec() o exec().

Verifica permisos adecuados en tu servidor web.

Autor:

Carlos Joel Ixcamparij López

Carné: 25006741

Curso: Fundamentos de Construcción de Software

Universidad Galileo, Instituto Von Neumann.

