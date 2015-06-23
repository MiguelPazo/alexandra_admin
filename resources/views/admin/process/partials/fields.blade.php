<div class="form-group">
    {!! Form::label('description', 'Nombre del Proceso:') !!}
    {!! Form::text('description', null, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('description_short', 'Descripción Corta:') !!}
    {!! Form::text('description_short', null, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('date_begin', 'Fecha de Inicio:') !!}
    {!! Form::text('date_begin', null, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('date_end', 'Fecha de Fin:') !!}
    {!! Form::text('date_end', null, [ 'class' => 'form-control' ]) !!}
</div>
<div class="form-group">
    {!! Form::label('status', 'Estado:') !!}
    {!! Form::select('status', array('active' => 'Habilitado', 'inactive' => 'Deshabilitado'),
    null, ['class' => 'form-control' ]) !!}
</div>