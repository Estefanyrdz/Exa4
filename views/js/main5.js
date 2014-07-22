	$(document).ready(function() {
		$('#integrante').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre del integrante no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del integrante y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 48,
								message: 'El nombre del integrante debe ser mayor de 2 y menos de 48 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]*$/,
								message: 'El nombre del integrante sólo puede consistir en alfabético'
							},
						}
					},
					apellido: {
						message: 'El apellido del integrante no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el apellido del integrante y no puede estar vacío'
							},
							stringLength: {
								min: 2,
								max: 48,
								message: 'El apellido del integrante debe ser mayor de 2 y menos de 48 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]*$/,
								message: 'El apellido del integrante sólo puede consistir en alfabético'
							},
						}
					},
				}
			});
			
		});		