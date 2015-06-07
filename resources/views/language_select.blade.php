@if(count($settings->languages)>1)
    {!! Form::open(['id'=>'language-form', 'url'=>'language']) !!}

    {!! Form::select('lang',$settings->languages, App::getLocale(), ['class'=>'form-control', 'id'=>'language-change-select']) !!}

    {!! Form::close() !!}
@endif