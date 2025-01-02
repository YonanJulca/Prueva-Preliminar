# Índice de Pobreza en Perú (1995-2020)

Este proyecto muestra la evolución del índice de pobreza en Perú entre los años 1995 y 2020, utilizando datos obtenidos del [Banco Mundial](https://worldbank.org) y visualizándolos en un gráfico interactivo con Highcharts.

## Tecnologías utilizadas

- **PHP**: Para consumir la API del Banco Mundial y procesar los datos.
- **JavaScript (Highcharts)**: Para generar gráficos interactivos.
- **jQuery**: Para realizar solicitudes AJAX.
- **HTML/CSS**: Estructura y estilos de la página.

## Descripción del proyecto

El proyecto consiste en:
1. **Obtener datos de la API del Banco Mundial**:
   - Se extraen los datos del porcentaje de la población viviendo en pobreza (índice `headcount`) entre 1995 y 2020.
2. **Procesar los datos en PHP**:
   - Los datos son obtenidos y procesados para ser enviados al cliente en formato JSON.
3. **Generar un gráfico interactivo**:
   - Los datos procesados se visualizan en un gráfico de líneas usando Highcharts.

### Capturas de pantalla

#### **Datos procesados en formato JSON**
![image](https://github.com/user-attachments/assets/d632e9f9-bc9e-4671-a214-df85dbcc5227)


#### **Gráfico de pobreza**
![image](https://github.com/user-attachments/assets/05695c2d-a7ac-4254-bbe7-87a0bfcafec1)


## Instalación

1. Clona este repositorio:
   ```bash
   git clone https://github.com/tu-usuario/nombre-del-repositorio.git
