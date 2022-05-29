<?php
	const BASE_URL = "https://clubleoneslegadoylinaje.com/tienda_virtual";

	//Zona horaria
	date_default_timezone_set('Perú/Guatemala');

	//Datos de conexión a Base de Datos
	// const DB_HOST = "localhost";
	// const DB_NAME = "db_tiendavirtual";
	// const DB_USER = "root";
	// const DB_PASSWORD = "";
	// const DB_CHARSET = "utf8";

		//Datos de conexión a Base de Datos
		const DB_HOST = "localhost";
		const DB_NAME = "fqsgadrf_bd_tiendaVirtual";
		const DB_USER = "fqsgadrf_tiendaVirtual";
		const DB_PASSWORD = "Tato2407";
		const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1;
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const NOMBRE_EMPESA = "Tienda Virtual";
	const WEB_EMPRESA = "www.clubleoneslegadoylinaje.com";

	const DESCRIPCION = "La mejor tienda en línea con artículos de moda.";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "avenida primavera surco lima perú";
	const TELEMPRESA = "98888888";
	const WHATSAPP = "88899999";
	const EMAIL_EMPRESA = "info@leones.com";
	const EMAIL_PEDIDOS = "info@leones.com";
	const EMAIL_SUSCRIPCION = "info@leones.com";
	const EMAIL_CONTACTO = "info@leones.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "#";
	const INSTAGRAM = "#";


 ?>