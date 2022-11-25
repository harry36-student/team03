<div class="form-group">
    {!! Form::label('team', '球隊名稱：') !!}
    {!! Form::text('team', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('home', '主場：') !!}
    {!! Form::text('home', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('leader', '領隊：') !!}
    {!! Form::text('leader', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('history', '歷史：') !!}
    {!! Form::text('history', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('coach', '總教練：') !!}
    {!! Form::text('coach', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>