<div class="form-group">
    {!! Form::label('name', '球員姓名：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('team', '所屬球隊：') !!}
    {!! Form::select('team',$teams,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('number','球員背號:')!!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group"> 
    {!! Form::label('location','站位：') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('height', '球員身高：') !!}
    {!! Form::text('height', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('weight','球員體重：') !!}
    {!! Form::text('weight', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nation', '球員國籍：') !!}
    {!! Form::text('nation', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('habit', '投打習慣：') !!}
    {!! Form::text('habit', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rank', '順位：') !!}
    {!! Form::text('rank', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('teamid', '外部鍵：') !!}
    {!! Form::text('teamid', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>