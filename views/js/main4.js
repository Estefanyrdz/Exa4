$(document).ready(function() {
	
			$('#posicion').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre de la posicion no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre de la posicion y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 48,
								message: 'El nombre de la posicion debe ser mayor de 2 y menos de 48 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]*$/,
								message: 'El nombre de la posicion sólo puede consistir en alfabético'
							},
						}
					},
					abreviatura: {
						message: 'La abreviatura de la posicion no es válida',
						validators: {
							notEmpty: {
								message: 'Es necesario la abreviaturade la posicion y no puede estar vacía'
							},
							stringLength: {
								min: 1,
								max: 3,
								message: 'El nombre de la abreviatura debe ser mayor de 1 y menos de 3 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9]*$/,
								message: 'El nombre de la abreviatura sólo puede consistir en alfabético'
							},
						}
					},
				  
				}
			});//FIN FORMULARIO estadio
			
	});//FIN DEL READY