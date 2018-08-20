<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-19 05:44:39 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test_php`.`t_calificaciones`, CONSTRAINT `t_calificaciones_ibfk_1` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`)) - Invalid query: INSERT INTO `t_calificaciones` (`id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES ('321', '1', '8.2', '2018-08-19 05:44:39')
ERROR - 2018-08-19 05:47:33 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test_php`.`t_calificaciones`, CONSTRAINT `t_calificaciones_ibfk_1` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`)) - Invalid query: INSERT INTO `t_calificaciones` (`id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES ('1311', '1', '8.2', '2018-08-19 05:47:33')
ERROR - 2018-08-19 05:48:29 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test_php`.`t_calificaciones`, CONSTRAINT `t_calificaciones_ibfk_1` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`)) - Invalid query: INSERT INTO `t_calificaciones` (`id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES ('1311', '1', '8.2', '2018-08-19 05:48:29')
ERROR - 2018-08-19 05:53:17 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test_php`.`t_calificaciones`, CONSTRAINT `t_calificaciones_ibfk_1` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`)) - Invalid query: INSERT INTO `t_calificaciones` (`id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES ('1311', '1', '8.2', '2018-08-19 05:53:17')
ERROR - 2018-08-19 05:54:38 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test_php`.`t_calificaciones`, CONSTRAINT `t_calificaciones_ibfk_1` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`)) - Invalid query: INSERT INTO `t_calificaciones` (`id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES ('11', '1', '8.2', '2018-08-19 05:54:38')
ERROR - 2018-08-19 05:54:41 --> Severity: Error --> [] operator not supported for strings /opt/lampp/htdocs/test_php/application/controllers/Ws.php 68
ERROR - 2018-08-19 05:55:55 --> Severity: Error --> [] operator not supported for strings /opt/lampp/htdocs/test_php/application/controllers/Ws.php 68
ERROR - 2018-08-19 05:58:49 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test_php`.`t_calificaciones`, CONSTRAINT `t_calificaciones_ibfk_1` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`)) - Invalid query: INSERT INTO `t_calificaciones` (`id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES ('11', '1', '8.2', '2018-08-19 05:58:49')
ERROR - 2018-08-19 05:58:49 --> Severity: Notice --> Undefined index: ERROR:  /opt/lampp/htdocs/test_php/system/core/Log.php 181
ERROR - 2018-08-19 05:59:03 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test_php`.`t_calificaciones`, CONSTRAINT `t_calificaciones_ibfk_1` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`)) - Invalid query: INSERT INTO `t_calificaciones` (`id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES ('11', '1', '8.2', '2018-08-19 05:59:03')
ERROR - 2018-08-19 06:27:09 --> 404 Page Not Found: Ws/get_calificacion
ERROR - 2018-08-19 06:31:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre' at line 14 - Invalid query: SELECT
t_calificaciones.id_t_usuarios,
t_alumnos.nombre,
t_alumnos.ap_paterno,
t_alumnos.ap_materno,
t_materias.nombre as materia,
t_calificaciones.calificacion,
DATE_FORMAT(t_calificaciones.fecha_registro, "%d/%m/%Y") AS fecha_registro
FROM
t_calificaciones
INNER JOIN t_materias ON t_calificaciones.id_t_materias = t_materias.id_t_materias
INNER JOIN t_alumnos ON t_calificaciones.id_t_usuarios = t_alumnos.id_t_usuarios
WHERE
t_calificaciones.id_t_usuarios =  AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre asc

ERROR - 2018-08-19 06:31:29 --> Severity: Error --> Call to a member function result_array() on boolean /opt/lampp/htdocs/test_php/application/models/Test_model.php 95
ERROR - 2018-08-19 06:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre' at line 14 - Invalid query: SELECT
t_calificaciones.id_t_usuarios,
t_alumnos.nombre,
t_alumnos.ap_paterno,
t_alumnos.ap_materno,
t_materias.nombre as materia,
t_calificaciones.calificacion,
DATE_FORMAT(t_calificaciones.fecha_registro, "%d/%m/%Y") AS fecha_registro
FROM
t_calificaciones
INNER JOIN t_materias ON t_calificaciones.id_t_materias = t_materias.id_t_materias
INNER JOIN t_alumnos ON t_calificaciones.id_t_usuarios = t_alumnos.id_t_usuarios
WHERE
t_calificaciones.id_t_usuarios =  AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre asc

ERROR - 2018-08-19 06:31:54 --> Severity: Error --> Call to a member function result_array() on boolean /opt/lampp/htdocs/test_php/application/models/Test_model.php 95
ERROR - 2018-08-19 06:32:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre' at line 14 - Invalid query: SELECT
t_calificaciones.id_t_usuarios,
t_alumnos.nombre,
t_alumnos.ap_paterno,
t_alumnos.ap_materno,
t_materias.nombre as materia,
t_calificaciones.calificacion,
DATE_FORMAT(t_calificaciones.fecha_registro, "%d/%m/%Y") AS fecha_registro
FROM
t_calificaciones
INNER JOIN t_materias ON t_calificaciones.id_t_materias = t_materias.id_t_materias
INNER JOIN t_alumnos ON t_calificaciones.id_t_usuarios = t_alumnos.id_t_usuarios
WHERE
t_calificaciones.id_t_usuarios =  AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre asc

ERROR - 2018-08-19 06:32:51 --> Severity: Error --> Call to a member function result_array() on boolean /opt/lampp/htdocs/test_php/application/models/Test_model.php 95
ERROR - 2018-08-19 06:33:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre' at line 14 - Invalid query: SELECT
t_calificaciones.id_t_usuarios,
t_alumnos.nombre,
t_alumnos.ap_paterno,
t_alumnos.ap_materno,
t_materias.nombre as materia,
t_calificaciones.calificacion,
DATE_FORMAT(t_calificaciones.fecha_registro, "%d/%m/%Y") AS fecha_registro
FROM
t_calificaciones
INNER JOIN t_materias ON t_calificaciones.id_t_materias = t_materias.id_t_materias
INNER JOIN t_alumnos ON t_calificaciones.id_t_usuarios = t_alumnos.id_t_usuarios
WHERE
t_calificaciones.id_t_usuarios =  AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre asc

ERROR - 2018-08-19 06:33:06 --> Severity: Error --> Call to a member function result_array() on boolean /opt/lampp/htdocs/test_php/application/models/Test_model.php 95
ERROR - 2018-08-19 06:33:35 --> Severity: Notice --> Undefined variable: id_alumno /opt/lampp/htdocs/test_php/application/controllers/Ws.php 119
ERROR - 2018-08-19 06:33:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre' at line 14 - Invalid query: SELECT
t_calificaciones.id_t_usuarios,
t_alumnos.nombre,
t_alumnos.ap_paterno,
t_alumnos.ap_materno,
t_materias.nombre as materia,
t_calificaciones.calificacion,
DATE_FORMAT(t_calificaciones.fecha_registro, "%d/%m/%Y") AS fecha_registro
FROM
t_calificaciones
INNER JOIN t_materias ON t_calificaciones.id_t_materias = t_materias.id_t_materias
INNER JOIN t_alumnos ON t_calificaciones.id_t_usuarios = t_alumnos.id_t_usuarios
WHERE
t_calificaciones.id_t_usuarios =  AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre asc

ERROR - 2018-08-19 06:33:35 --> Severity: Error --> Call to a member function result_array() on boolean /opt/lampp/htdocs/test_php/application/models/Test_model.php 95
ERROR - 2018-08-19 06:35:03 --> Severity: Warning --> Missing argument 1 for Ws::get_calificaciones() /opt/lampp/htdocs/test_php/application/controllers/Ws.php 104
ERROR - 2018-08-19 06:35:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre' at line 14 - Invalid query: SELECT
t_calificaciones.id_t_usuarios,
t_alumnos.nombre,
t_alumnos.ap_paterno,
t_alumnos.ap_materno,
t_materias.nombre as materia,
t_calificaciones.calificacion,
DATE_FORMAT(t_calificaciones.fecha_registro, "%d/%m/%Y") AS fecha_registro
FROM
t_calificaciones
INNER JOIN t_materias ON t_calificaciones.id_t_materias = t_materias.id_t_materias
INNER JOIN t_alumnos ON t_calificaciones.id_t_usuarios = t_alumnos.id_t_usuarios
WHERE
t_calificaciones.id_t_usuarios =  AND
t_materias.activo = 1 AND
t_alumnos.activo = 1
ORDER BY t_materias.nombre asc

ERROR - 2018-08-19 06:35:18 --> Severity: Error --> Call to a member function result_array() on boolean /opt/lampp/htdocs/test_php/application/models/Test_model.php 95
ERROR - 2018-08-19 06:46:50 --> Severity: Parsing Error --> syntax error, unexpected '=' /opt/lampp/htdocs/test_php/application/controllers/Ws.php 41
ERROR - 2018-08-19 06:47:10 --> Severity: Notice --> Undefined variable: X_API_KEY /opt/lampp/htdocs/test_php/application/controllers/Ws.php 42
ERROR - 2018-08-19 06:47:10 --> Severity: Error --> Call to undefined method Ws::request_headers() /opt/lampp/htdocs/test_php/application/controllers/Ws.php 171
ERROR - 2018-08-19 06:47:31 --> Severity: Notice --> Undefined variable: X_API_KEY /opt/lampp/htdocs/test_php/application/controllers/Ws.php 43
ERROR - 2018-08-19 06:47:31 --> Severity: Error --> Call to undefined method Ws::request_headers() /opt/lampp/htdocs/test_php/application/controllers/Ws.php 172
ERROR - 2018-08-19 06:48:18 --> Severity: Notice --> Undefined variable: X_API_KEY /opt/lampp/htdocs/test_php/application/controllers/Ws.php 43
ERROR - 2018-08-19 06:48:48 --> Severity: Notice --> Undefined variable: X_API_KEY /opt/lampp/htdocs/test_php/application/controllers/Ws.php 43
ERROR - 2018-08-19 06:55:12 --> Severity: Notice --> Undefined variable: _PUT /opt/lampp/htdocs/test_php/application/controllers/Ws.php 220
ERROR - 2018-08-19 06:56:37 --> Severity: Error --> Call to undefined method Ws::put() /opt/lampp/htdocs/test_php/application/controllers/Ws.php 220
ERROR - 2018-08-19 06:57:36 --> Severity: Error --> Call to undefined method CI_Input::put() /opt/lampp/htdocs/test_php/application/controllers/Ws.php 220
ERROR - 2018-08-19 06:59:22 --> Severity: Error --> Call to undefined method Ws::put() /opt/lampp/htdocs/test_php/application/controllers/Ws.php 220
ERROR - 2018-08-19 06:59:35 --> Severity: Error --> Call to undefined method Ws::put() /opt/lampp/htdocs/test_php/application/controllers/Ws.php 220
ERROR - 2018-08-19 20:12:52 --> Severity: Error --> Call to undefined method Ws::put() /opt/lampp/htdocs/test_php/application/controllers/Ws.php 221
ERROR - 2018-08-19 20:15:45 --> Severity: Error --> Call to undefined method Ws::put() /opt/lampp/htdocs/test_php/application/controllers/Ws.php 221
ERROR - 2018-08-19 20:17:03 --> Severity: Error --> Call to undefined method Ws::put() /opt/lampp/htdocs/test_php/application/controllers/Ws.php 221
ERROR - 2018-08-19 20:19:46 --> Severity: Notice --> Undefined variable: method /opt/lampp/htdocs/test_php/application/controllers/Ws.php 222
ERROR - 2018-08-19 20:20:43 --> Severity: Parsing Error --> syntax error, unexpected '}' /opt/lampp/htdocs/test_php/application/controllers/Ws.php 227
ERROR - 2018-08-19 20:29:39 --> Severity: Parsing Error --> syntax error, unexpected '{' /opt/lampp/htdocs/test_php/application/controllers/Ws.php 223
ERROR - 2018-08-19 20:32:56 --> Severity: 4096 --> Argument 1 passed to CI_Form_validation::set_data() must be of the type array, string given, called in /opt/lampp/htdocs/test_php/application/controllers/Ws.php on line 226 and defined /opt/lampp/htdocs/test_php/system/libraries/Form_validation.php 267
ERROR - 2018-08-19 20:34:14 --> Query error: Column 'id_t_materias' cannot be null - Invalid query: INSERT INTO `t_calificaciones` (`id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES (NULL, NULL, '', '2018-08-19 20:34:14')
ERROR - 2018-08-19 20:34:14 --> Severity: Notice --> Undefined index: ERROR:  /opt/lampp/htdocs/test_php/system/core/Log.php 181
ERROR - 2018-08-19 20:34:58 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test_php`.`t_calificaciones`, CONSTRAINT `t_calificaciones_ibfk_1` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`)) - Invalid query: INSERT INTO `t_calificaciones` (`id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES ('1323', '1', '8.2', '2018-08-19 20:34:58')
ERROR - 2018-08-19 20:34:58 --> Severity: Notice --> Undefined index: ERROR:  /opt/lampp/htdocs/test_php/system/core/Log.php 181
ERROR - 2018-08-19 20:35:13 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test_php`.`t_calificaciones`, CONSTRAINT `t_calificaciones_ibfk_1` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`)) - Invalid query: INSERT INTO `t_calificaciones` (`id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES ('1323', '1', '8.2', '2018-08-19 20:35:13')
ERROR - 2018-08-19 20:47:43 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) /opt/lampp/htdocs/test_php/application/models/Test_model.php 83
ERROR - 2018-08-19 20:48:01 --> Severity: Parsing Error --> syntax error, unexpected '=>' (T_DOUBLE_ARROW) /opt/lampp/htdocs/test_php/application/models/Test_model.php 83
ERROR - 2018-08-19 20:48:16 --> Severity: Notice --> Undefined variable: PUT /opt/lampp/htdocs/test_php/application/models/Test_model.php 78
ERROR - 2018-08-19 20:48:16 --> Query error: Unknown column 'id_pk_calificacion' in 'where clause' - Invalid query: UPDATE `t_calificaciones` SET `calificacion` = ''
WHERE `id_pk_calificacion` = '1'
ERROR - 2018-08-19 20:48:16 --> Severity: Notice --> Undefined index: ERROR:  /opt/lampp/htdocs/test_php/system/core/Log.php 181
ERROR - 2018-08-19 20:48:34 --> Query error: Unknown column 'id_pk_calificacion' in 'where clause' - Invalid query: UPDATE `t_calificaciones` SET `calificacion` = '10'
WHERE `id_pk_calificacion` = '1'
ERROR - 2018-08-19 20:48:34 --> Severity: Notice --> Undefined index: ERROR:  /opt/lampp/htdocs/test_php/system/core/Log.php 181
ERROR - 2018-08-19 20:48:49 --> Query error: Unknown column 'id_pk_calificacion' in 'where clause' - Invalid query: UPDATE `t_calificaciones` SET `calificacion` = '10'
WHERE `id_pk_calificacion` = '1'
ERROR - 2018-08-19 20:50:34 --> Query error: Unknown column 'id_pk_calificacion' in 'where clause' - Invalid query: UPDATE `t_calificaciones` SET `calificacion` = '10'
WHERE `id_pk_calificacion` = '1'
ERROR - 2018-08-19 20:52:41 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`test_php`.`t_calificaciones`, CONSTRAINT `t_calificaciones_ibfk_1` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`)) - Invalid query: INSERT INTO `t_calificaciones` (`id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES ('1323', '1', '8.2', '2018-08-19 20:52:41')
ERROR - 2018-08-19 21:12:56 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: DELETE FROM `t_calificaciones`
WHERE `id` = '2'
ERROR - 2018-08-19 21:13:12 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: DELETE FROM `t_calificaciones`
WHERE `id` = '2'
ERROR - 2018-08-19 21:13:20 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: DELETE FROM `t_calificaciones`
WHERE `id` = '2'
ERROR - 2018-08-19 21:13:20 --> Severity: Notice --> Undefined index: ERROR:  /opt/lampp/htdocs/test_php/system/core/Log.php 181
ERROR - 2018-08-19 21:13:51 --> Query error: Unknown column 'id_t_calificacion' in 'where clause' - Invalid query: DELETE FROM `t_calificaciones`
WHERE `id_t_calificacion` = '2'
ERROR - 2018-08-19 21:13:51 --> Severity: Notice --> Undefined index: ERROR:  /opt/lampp/htdocs/test_php/system/core/Log.php 181
ERROR - 2018-08-19 21:41:35 --> Could not find the language line "form_validation_greater_than_equal_to "
