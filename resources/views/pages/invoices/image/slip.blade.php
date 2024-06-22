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
            grid-template-columns: repeat(2, 1fr); /* 2 columns with equal width */
            gap: 10px; /* Gap between images */
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
    <div class="image-container">
        <img src="https://bamboo-bungalows.com/wp-content/uploads/2021/03/photo-1507525428034-b723cf961d3e-1536x1021.jpeg" alt="Image 1">
        {{-- <img src="https://i.pinimg.com/originals/10/ff/2f/10ff2fc7c2c8a34491c1b7a3a401f3f4.jpg" alt="Image 2"> --}}
        <img src="https://bamboo-bungalows.com/wp-content/uploads/2021/03/photo-1507525428034-b723cf961d3e-1536x1021.jpeg" alt="Image 3">
        <img src="https://bamboo-bungalows.com/wp-content/uploads/2021/03/photo-1507525428034-b723cf961d3e-1536x1021.jpeg" alt="Image 4">
        <img src="https://bamboo-bungalows.com/wp-content/uploads/2021/03/photo-1507525428034-b723cf961d3e-1536x1021.jpeg" alt="Image 5">
    </div>
</body>

</html>
