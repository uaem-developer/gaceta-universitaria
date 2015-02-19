<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => ":attribute debe ser aceptado.",
    "active_url"       => ":attribute no es una URL válida.",
    "after"            => ":attribute debe ser una fecha posterior a :date.",
    "alpha"            => ":attribute solo debe contener letras.",
    "alpha_dash"       => ":attribute solo debe contener letras, números y guiones.",
    "alpha_num"        => ":attribute solo debe contener letras y números.",
    "array"            => ":attribute debe ser un conjunto.",
    "before"           => ":attribute debe ser una fecha anterior a :date.",
    "between"          => array(
        "numeric" => ":attribute tiene que estar entre :min - :max.",
        "file"    => ":attribute debe pesar entre :min - :max kilobytes.",
        "string"  => ":attribute tiene que tener entre :min - :max caracteres.",
        "array"   => ":attribute tiene que tener entre :min - :max ítems.",
    ),
    "boolean"          => "El campo :attribute debe tener un valor verdadero o falso.",
    "confirmed"        => "La confirmación de :attribute no coincide.",
    "date"             => ":attribute no es una fecha válida.",
    "date_format"      => ":attribute no corresponde al formato :format.",
    "different"        => ":attribute y :other deben ser diferentes.",
    "digits"           => ":attribute debe tener :digits dígitos.",
    "digits_between"   => ":attribute debe tener entre :min y :max dígitos.",
    "email"            => ":attribute no es un correo válido",
    "exists"           => ":attribute es inválido.",
    "image"            => ":attribute debe ser una imagen.",
    "in"               => ":attribute es inválido.",
    "integer"          => ":attribute debe ser un número entero.",
    "ip"               => ":attribute debe ser una dirección IP válida.",
    "max"              => array(
        "numeric" => ":attribute no debe ser mayor a :max.",
        "file"    => ":attribute no debe ser mayor que :max kilobytes.",
        "string"  => ":attribute no debe ser mayor que :max caracteres.",
        "array"   => ":attribute no debe tener más de :max elementos.",
    ),
    "mimes"            => ":attribute debe ser un archivo con formato: :values.",
    "min"              => array(
        "numeric" => "El tamaño de :attribute debe ser de al menos :min.",
        "file"    => "El tamaño de :attribute debe ser de al menos :min kilobytes.",
        "string"  => ":attribute debe contener al menos :min caracteres.",
        "array"   => ":attribute debe tener al menos :min elementos.",
    ),
    "not_in"           => ":attribute es inválido.",
    "numeric"          => ":attribute debe ser numérico.",
    "regex"            => "El formato de :attribute es inválido.",
    "required"         => "El campo :attribute es obligatorio.",
    "required_if"      => "El campo :attribute es obligatorio cuando :other es :value.",
    "required_with"    => "El campo :attribute es obligatorio cuando :values está presente.",
    "required_with_all" => "El campo :attribute es obligatorio cuando :values está presente.",
    "required_without" => "El campo :attribute es obligatorio cuando :values no está presente.",
    "required_without_all" => "El campo :attribute es obligatorio cuando ninguno de :values estén presentes.",
    "same"             => ":attribute y :other deben coincidir.",
    "size"             => array(
        "numeric" => "El tamaño de :attribute debe ser :size.",
        "file"    => "El tamaño de :attribute debe ser :size kilobytes.",
        "string"  => ":attribute debe contener :size caracteres.",
        "array"   => ":attribute debe contener :size elementos.",
    ),
    "unique"           => ":attribute ya ha sido registrado.",
    "url"              => "El formato :attribute es inválido.",


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'error_session' => 'Sesión no valida',
    'error_paypal_unknown'  => 'Ha ocurrido un error, por favor intente de nuevo más tarde.',
    'payment_error'     => 'El pago ha fallado',
    'payment_success'     => 'El pago ha fallado',

    'attributes' => array(
            // Usuarios
            'first_name'  => 'Nombre Completo',
            'full_name'  => 'Nombre(s)',
            'first_last_name'  => 'Apellido Paterno',
            'second_last_name'  => 'Apellido Materno',
            'telephone'   => 'Teléfono',
            'last_name'   => 'Apellidos',
            'email'       => 'E-mail',
            'password'    => 'Contraseña',
            'password_confirmation' => 'Confirmar Contraseña',
            'oldpassword'    => 'Contraseña Anterior',
            'newpassword'    => 'Nueva Contraseña',
            'section_id' => 'sección',
            'title' => 'titulo',
            'order_num' => 'orden numerico',
            'slug_url' => 'URL amigable',
            'meta_description' => 'descripción corta',
            'body' => 'contenido',
            'image' => 'imagen 1',
            'image2' => 'imagen 2',
            'image3' => 'imagen 3',
            'image4' => 'imagen 4',
            'image5' => 'imagen 5',
            'attach_file' => 'adjuntar archivo',
            'published' => 'publicado',
            'promoted_front' => 'destacar publicación',
            'promoted_section' => 'destacar publicacion en sección',
            'frontpage' => 'destacar en portada',
            'authored_by' => 'autor',
            'gaceta_number' => 'número de gaceta',
            'photographer'  => 'fotógrafo',
            'photographer2' => 'fotógrafo',
            'photographer3' => 'fotógrafo',
            'photographer4' => 'fotógrafo',
            'photographer5' => 'fotógrafo'

        ),
);
