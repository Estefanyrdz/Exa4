$(document).ready(function() {
	
			$('#pais').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre del equipo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del equipo y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 48,
								message: 'El nombre del equipo debe ser mayor de 2 y menos de 48 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]*$/,
								message: 'El nombre del equipo sólo puede consistir en alfabético'
							},
						}
					},
					idciudad: {
						message: 'El idciudad no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario idciudad y no puede estar vacío'
							},
							stringLength: {
								min: 1,
								max: 1,
								message: 'El idciudad debe ser mayor de 1 y menos de 1 caracteres de largo'
							},
							regexp: {
								regexp: /^[0-9]*$/,
								message: 'El id de ciudad sólo puede consistir en número'
							},
						}
					},
					bandera: {
						message: 'La bandera no es válida',
						validators: {
							notEmpty: {
								message: 'Es necesario la bandera y no puede estar vacía'
							},
							stringLength: {
								min: 2,
								max: 45,
								message: 'La bandera debe ser mayor de 2 y menos de 45 caracteres de largo'
							},
							regexp: {
								regexp: /^(.+\.jpg|.+\.jpeg|.+\.png)*$/,
								message: 'La bandera sólo puede ser imagen'
							},
						}
					},
				}
			});//FIN FORMULARIO PAIS
			
	});//FIN DEL READY