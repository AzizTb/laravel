<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    @php
        $satu = 1;
        $dua = 2;
        $tiga = 3;
        $empat = 4;
        $lima = 5;

        $status = 2;
    @endphp

    <h1> Yahalo {{ $nama_user }} </h1>
{{--
    <p> Baris ke {{ $satu }} </p>
    <p> Baris ke {{ $dua }} </p>
    <p> Baris ke {{ $tiga }} </p>
    <p> Baris ke {{ $empat }} </p>
    <p> Baris ke {{ $lima }} </p> --}}


    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2 == 1)
            Bilangan ke {{$i}} Ganjil <br>
        @else
            Bilangan ke {{$i}} Genap <br>
        @endif
        <br>
    @endfor

</body>
</html>
