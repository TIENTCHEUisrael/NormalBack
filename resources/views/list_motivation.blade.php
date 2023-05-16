<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motivation list</title>
</head>
<body>
    <div class="title">
     <center> <h1>Bienvenue a la Gestion des motivations</h1></center>

    </div>
        <form action="" method="post">
    <div>
    <div class="ent">
        <h2>Liste des motivations</h2>       
    </div>
    @if ($list->count() > 0)
    <table class="table table-bordered" style="width: 1000px">
        <thead>
            <th>ID</th>
            <th>INTITULE</th>
        </thead>
        <tbody>
            @foreach ($list as $r)
            <tr>
                <th>{{$r->id}}</th>
                <th>{{$r->intitule}}</th>                
            </tr>
            @endforeach
        </tbody>
    </table>

    @endif

    <style>
        body{
            padding: 32px;
        }
        table{
            justify-self: center;
            margin-left: 32px;
            margin-right: 100px;
            margin-top:32px;
        }
        thead{
            background-color: black;
            color: white;

        }
        .ent{
            display: flex;
            flex-direction: row;
        }
        .tbn{
            margin-left: 43%;
        }
    </style>
</div>
</form>
</body>
</html>
