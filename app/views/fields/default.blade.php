<div class="form-group">
    {{ Form::label($name, $label,  array('class' => 'col-sm-2 control-label')) }}
   	<div class="col-sm-10">
        {{ $control }}

        @if ($error)
            <p class="error_message">{{ $error }}</p>
        @endif
    </div>


</div>
