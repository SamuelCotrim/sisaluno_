<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
  
<h2 style="margin-left: 500px; color:black; margin-left: 525px;">Cadastro de Aluno</h2> 
<form method="GET" action="crudaluno.php" style="height: 750px; width: 600px; background-color: rgb(227, 181, 196);border-radius: 15px; margin-left: 300px; margin-top: 20px; padding-top: px;display: flex; justify-content: center; align-items:center; flex-direction: column">
   
 
   <label for="">Nome</label> <br>
    <input type="text" name="nome" style= "width: 250px; height: 30px; border-radius: 20px; border-color: transparent;"> <br>

    <label for="">Idade</label><br>
    <input type="text" name="idade" style= "width: 250px; height: 30px; border-radius: 20px; border-color: transparent;"> <br>
    <label for="">data nascimento</label> <br>
    <input type="date" name="datanascimento" style= "width: 150px; height: 30px; border-radius: 20px; border-color: transparent;"> <br>
    <label for="">endereco</label> <br>
    <input type="text" name="endereco" style= "width: 250px; height: 30px; border-radius: 20px; border-color: transparent;"> <br>
    <br>
    <label for="">estatus</label>
    <input type="radio" name="estatus"  style= "width: 250px; height: 30px; border-radius: 20px; border-color: transparent;" value="1"> on <br>
    <input type="radio" name="estatus"   style= "width: 250px; height: 30px; border-radius: 20px; border-color: transparent;"value="2"> off <br>
    <br>
    <br>
    <label for="">matricula</label> <br>
    <input type="text" name="matricula" style= "width: 250px; height: 30px; border-radius: 20px; border-color: transparent;"> <br>
    <input type="submit" name="cadastrar" value="cadastrar" style = "height: 40px; width: 100px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 40px"><a href="cadaluno.php" style = "text-decoration: none; color: white; font-size: larger;">
    <button class="button" style = "height: 40px; width: 100px; background-color: gray; border-radius: 20px; border-color: transparent; margin-bottom: 40px"><a href="cadaluno.php" style = "text-decoration: none; color: white; font-size: larger;"><a href="cadaluno.php" ><a href="index.html">voltar</a></button>

    </form>
</body>
</html>