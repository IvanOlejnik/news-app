<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('content') !!}
    {!! Form::textarea('content', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
</div>