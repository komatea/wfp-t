<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello,{{$name}}</p>
    <img src="" alt="photo-{{$name}}">
    @if ($name='fla')
    <p> Vla pudding tidak hanya digunakan untuk siraman agar-agar juga dapat dijadikan campuran minuman dan buah-buahan.</p>
    @elseif($name='pannacota')
    <p>Panna cotta means 'cooked cream' in Italian. It includes very few ingredients, and is basically a simple mixture of cream, sugar, and vanilla. Gelatin is added to set the mixture and create a custard-like consistency</p>
    @else
        
    @endif
</body>
</html>