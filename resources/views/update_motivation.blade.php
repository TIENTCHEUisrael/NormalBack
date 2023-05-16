<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Motivation</title>
</head>
<body>
<div class="title">
    <center> <h1>Bienvenue a la Gestion des motivations</h1></center>
    
   </div>
   <div class="ent">
        <h2>Modification d'une motivation</h2>       
    </div>
   <div class="d-flex justify-content-center">
        <form action="" method="post" class="alert alert-success">
            @csrf
            <div class="form-group">
                <label for="">intitule</label><br>
                <input type="text" class="form-control" id="label" 
                    placeholder="Intitule" name="intitule"><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>