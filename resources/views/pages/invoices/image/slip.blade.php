@php
    // dd($pageDetails['image_slip']);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .image-container {
            width: 100%;
            /* display: flex;
            flex-direction: column;
            align-items: center; */

            display: grid;
            grid-template-columns: repeat(1, 1fr);
            /* 2 columns with equal width */
            gap: 10px;
            /* Gap between images */
        }

        .image-container img {
            width: 100%;
            max-width: 100%;
            height: auto;
            box-sizing: border-box;
            padding: 5px;
        }
    </style>
</head>

<body>
    @if (Count($pageDetails['image_slip']) > 0)
        @foreach ($pageDetails['image_slip'] as $item)
            <div class="image-container">
                <img src="{{ asset($item['img_path']) }}" alt="image">
            </div>
        @endforeach
    @else
    @endif
</body>

</html>
