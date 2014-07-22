	$(document).ready(function() {
		$('#continente').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre del continente no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del continente y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 48,
								message: 'El nombre del continente debe ser mayor de 2 y menos de 48 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]*$/,
								message: 'El nombre del continente sólo puede consistir en alfabético'
							},
						}
					},
				}
			});

		});		