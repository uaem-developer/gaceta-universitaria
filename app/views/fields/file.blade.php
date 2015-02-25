<div class="form-group col-md-4  @if ($error) has-error @endif">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 250px; height: 120px;"></div>
            <div>
                <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar archivo</span><span class="fileinput-exists">Cambiar</span>
                    {{ $control }}
                </span>
                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a>
            </div>
        </div>
        @if ($error)
            <p class="error_message">{{ $error }}</p>
        @endif
</div>