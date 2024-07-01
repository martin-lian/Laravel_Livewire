<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Livewire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @livewireStyles()
    <style>
    h1{
        text-align: center;
    }
   *{
        padding:auto;
        margin:auto;
        text-align:centre;
    }
    .container{
        margin: auto;
        width: 70%;
        border: 3px solid green;
        padding: 50px;
    }
    body{
        margin:50px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>TO-DO LIST</h1>
        @livewire('posts')
    </div>

    @livewireScripts()    
</body>
</html>