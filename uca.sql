CREATE SCHEMA `uca` ;

INSERT INTO `uca`.`catedras` (`nombre`, `codigo`, `created_at`, `updated_at`) VALUES ('Catedra 1', 'A', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`catedras` (`nombre`, `codigo`, `created_at`, `updated_at`) VALUES ('Catedra 2', 'B', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`catedras` (`nombre`, `codigo`, `created_at`, `updated_at`) VALUES ('Catedra 3', 'C', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`catedras` (`nombre`, `codigo`, `created_at`, `updated_at`) VALUES ('Catedra 4', 'D', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`catedras` (`nombre`, `codigo`, `created_at`, `updated_at`) VALUES ('Catedra 5', 'E', '2019-06-25 05:47:26', '2019-06-25 05:47:26');

INSERT INTO `uca`.`facultades` (`nombre`, `alias`, `telefono`, `direccion`, `created_at`, `updated_at`) VALUES ('Facultad de Ciencias Económicas', 'FCE', '1111-1111', 'Calle false 123', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`facultades` (`nombre`, `alias`, `telefono`, `direccion`, `created_at`, `updated_at`) VALUES ('Facultad de Ciencias Médicas', 'FCM', '1111-1111', 'Calle false 123', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`facultades` (`nombre`, `alias`, `telefono`, `direccion`, `created_at`, `updated_at`) VALUES ('Facultad de Ciencias Sociales', 'FCS', '1111-1111', 'Calle false 123', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`facultades` (`nombre`, `alias`, `telefono`, `direccion`, `created_at`, `updated_at`) VALUES ('Facultad de Derecho', 'FD', '1111-1111', 'Calle false 123', '2019-06-25 05:47:26', '2019-06-25 05:47:26');

INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('1', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('2', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('3', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('4', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('5', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('6', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('7', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('8', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('9', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('10', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('Desaprobado', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('Aprobado', '2019-06-25 05:47:26', '2019-06-25 05:47:26');

INSERT INTO `uca`.`tipo_documentos` (`descripcion`, `created_at`, `updated_at`) VALUES ('DNI', '2019-06-25 05:47:26', '2019-06-25 05:47:26');

INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-03-01', '2019-07-01', '1', '1', 'M', '1', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-03-01', '2019-07-01', '1', '1', 'T', '1', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-03-01', '2019-07-01', '1', '1', 'N', '1', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-03-01', '2019-07-01', '2', '2', 'M', '1', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-03-01', '2019-07-01', '2', '1', 'M', '1', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-03-01', '2019-07-01', '2', '1', 'T', '1', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-03-01', '2019-07-01', '2', '2', 'T', '1', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-03-01', '2019-07-01', '2', '2', 'N', '1', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-03-01', '2019-07-01', '2', '1', 'N', '1', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-07-01', '2019-12-01', '3', '3', 'M', '2', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-07-01', '2019-12-01', '3', '3', 'T', '2', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`comisiones` (`fecha_inicio`, `fecha_fin`, `curso_id`, `catedra_id`, `turno`, `semestre`, `anio`, `created_at`, `updated_at`) VALUES ('2019-07-01', '2019-12-01', '3', '2', 'N', '2', '2019', '2019-06-25 05:47:26', '2019-06-25 05:47:26');



INSERT INTO `uca`.`alumnos` (`persona_id`, `comision_id`, `created_at`, `updated_at`) VALUES ('41', '8', '2019-06-25 05:47:26', '2019-06-25 05:47:26');

INSERT INTO `uca`.`notas` (`descripcion`, `created_at`, `updated_at`) VALUES ('Sin nota', '2019-06-25 05:47:26', '2019-06-25 05:47:26');

INSERT INTO `uca`.`estados_alumno` (`descripcion`, `created_at`, `updated_at`) VALUES ('Regular', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
INSERT INTO `uca`.`estados_alumno` (`descripcion`, `created_at`, `updated_at`) VALUES ('Libre', '2019-06-25 05:47:26', '2019-06-25 05:47:26');
