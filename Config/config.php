<?php
//Ruta del proyecto

//const BASE_URL = "https://www.grupoasistencia.com/axacolpatria_soat/";
const BASE_URL = "http://localhost/pruebakcrm/";

//Nombre del proyecto
const PROJECT_NAME = "Inventario | Kcrm";

//Zona horaria de la región
date_default_timezone_set('America/Bogota');

// //Datos de conexion - Base de datos localhost 
const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_NAME = "tiendavirtual";
const DB_CHARSET = "charset=utf8";
const DB_DRIVER = "mysql";


//Url Webservice AxaColpatria QA
const AXACOLPATRIA_WS_URL = "https://tmms.axacolpatria.co:3271/AXAColpatria/Tarea/GestionPolizas/SOAT_V2/PolizaSOAT.svc?wsdl";
const AXACOLPATRIA_PASSPHRASE = "M1graci0n";


//Url claves QA
const AXACOLPATRIA_USUARIO = "SEGUROS GRUPO ASISTENCIA" ;
const AXACOLPATRIA_CLAVE = "311519";
const AXACOLPATRIA_CODIGO_RED = "31151901";
const AXACOLPATRIA_CODIGO_PUNTO_ALIADO = "01";

//Datos de envio de correo electronico
const SENDER_EMAIL = 'info@grupoasistencia.com';
const SENDER_PASSWORD = 'Sga.info';
const SENDER_COMPANY_NAME = 'Seguros Grupo Asistencia Ltda';
const SENDER_HOST = 'grupoasistencia.com';
const SENDER_PORT = 587;

//Delimitadores decimal y millar EJ. 52.000,00
const SPD = '.';
const SPM = ',';

//Simbolo de moneda
const SMONEY = '$';