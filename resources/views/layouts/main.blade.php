<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Something</h1>
        @if(10>5)
            <p>A condição é true</p>
        @endif
        <p> {{ $nome }} , {{ $idade }} anos.</p>
        @if($nome=="Gabriel")
            <p>Nome correto</p>
        @else
            <p>Nome incorreto</p>
        @endif
        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }}</p>
        @endfor
        @php
            $eu = 'gabs';
            echo $eu;
        @endphp
        @foreach($arr2 as $name)
            <p>{{ $loop -> index }}</p>
            <p>{{ $name }}</p>
        @endforeach

</body>
</html>