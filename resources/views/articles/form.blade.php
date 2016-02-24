<div class="form-group">
    {!! Form:: label('title','Title') !!}
    {!! Form:: text('title',null,['class' => 'form-control']) !!}

    @if ($errors->has('title'))
        <span class="help-block">{{ $errors->first('title') }}</span>
    @endif
</div>

<div class="form-group">
    {!! Form:: label('body','Body') !!}
    {!! Form:: textarea('body',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form:: label('published_at','Publish On') !!}
    {!! Form:: input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form:: submit('Add Article',['class' => 'btn btn-primary form-control']) !!}
    

</div>