<head>
    <meta charset="utf-8">
    <title>login</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body bgcolor="#FFF1F7">
  <div>
  <h5 align="center">Ingrid Yuliana Perez Rodriguez</h5>
 <img src="https://media.discordapp.net/attachments/855694063729901601/910937500292358144/CAD30925-8016-4DC9-ABFC-08B976523E0B.jpg?width=464&height=427" width=5%> </div>
 <h6 align="right">{{date('Y')}}</h6><center> <div class="btn-group" role="group" aria-label="Basic example">

<form action="{{route('validar')}}" method="POST">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="inuser" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="usuario" >
        </div>
        <div class="mb-3">
            <label for="inpass" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contra" id="contra">
        </div>
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>