@extends('layouts.main')

@section('title', 'HDC')

@section('content')

            <h1>Algum título</h1>
            @if(10<5)
                <p>Verdadeiro</p>
            @elseif($nome == 'jaiminho')
                <p>Jaiminho is alive and he is {{$idade}} years, working with {{$profissao}}</p>
                <p>Falso</p>
            @endif
            <p>{{$nome}}</p>
            <p>
                {{--Este é um comentário do bladezadadadada--}}
                @for ($i = 0; $i < 10; $i++)
                Este é o passo {{$i}} <br>
                @endfor
            </p>
            <p>
                @foreach ($array as $value)
                    O mais brabo é o {{$value}}, da chave {{$loop->index}}<br>
                @endforeach
            </p>
@endsection