<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .page_break {
            page-break-before: always;
        }
        .container {
        display: grid;
        grid-template-columns: 150px 150px 150px 150px;
        grid-template-rows: 150px;
        grid-gap: 0rem;
        }
        .wrapper{
            width: 1200px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .item {
        border-radius: 5px;
        border: 1px solid #171717;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="item item1"><p>Aku</p><p>saya</p></div>
            <div class="item item2"><p>Aku</p><p>saya</p></div>
            <div class="item item3"><p>Aku</p><p>saya</p></div>
            <div class="item item4"><p>Aku</p><p>saya</p></div>
            <div class="item item5"><p>Aku</p><p>saya</p></div>
            <div class="item item5"></div>
        </div>
    </div>
</body>
</html>