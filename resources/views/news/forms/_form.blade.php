<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title',isset($news)?$news->title:null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::label('content') !!}
    {!! Form::textarea('content', isset($news)?$news->content:null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
</div>