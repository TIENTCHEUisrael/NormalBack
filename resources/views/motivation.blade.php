<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motivation Page</title>
    
    <style>
        *{
            padding:0px;
            margin:10px;
        }
        .title{
           margin-left:100px;
        }
        .content h2{
            color:grey;
        }
        .content .element{
            display:flex;
            flex-direction:row;
        }
        .content .box{
            padding:20px;
            border:1px solid;
            border-color:blue;
            border-radius:30px;
            width:200px;
            height:30px;
            margin-left:60px;
        }
        .content .box a{
            text-decoration:none;
            color:blue;
        }
        footer{
            margin-top:400px;
        }
    </style>
</head>
<body>
   <div class="title">
    <center> <h1>Bienvenue a la Gestion des motivations</h1></center>
    
   </div>
   <div class="content">
        <h2>Mise en place du CRUD :</h2>
        <div class="element">
            <div class="box">
                <a href="list_motivation">Liste des Motivations</a>
            </div>
            <div class="box">                
                <a href="motivation_create">Creation d'une Motivation</a>
            </div>
        </div>
   </div>
   <footer>
        <p>CopyRight May 2023 TIL Stack.</p>
   </footer>
</body>
</html>