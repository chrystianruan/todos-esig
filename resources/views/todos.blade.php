<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"/>
    <title>TODOs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/todo.css" media="screen" />
</head>
<body class="p-3 m-0 border-0 bd-example bd-example-row">
  <form action="/logout" method="POST">@csrf <button class="btn btn-danger"> Sair </button></form>
    <div class="container">
      
        <div class="container text-center">
          <h3>TODOs</h3>
          <hr>
          <form action="/new/todo" method="POST" id="form-input">
            @csrf
            <input class="form-control" id="input" required name="name" placeholder="Digite um todo...">
          </form>
          <ul class="list-group list-group-light" id="list">
            @if($allTodos->count() > 0)
            @foreach($allTodos as $todo)
            <li class="list-group-item">
              <div>
              <form action="/update/realized/todo/{{$todo->id}}" method="POST">@csrf @method('PUT')
              <input class="form-check-input me-1" @if($todo->realized == 1) checked @endif value="" onChange="this.form.submit()" type="checkbox"  aria-label="..." />
              <span @if($todo->realized ==1) style="text-decoration: line-through; color: #ccc" @endif>
                {{$todo->name}}
              </span> 
              </div>
              </form>
              <div class="icons"> 
                <span class="span-icon edit" id="span-{{$todo->id}}"> <i class="fa-regular fa-pen-to-square"></i> </span>
                <form action="/delete/todo/{{$todo->id}}" method="POST"> <span class="span-icon delete">  @csrf @method('DELETE')  <button class="btn-delete"> <i class="fa-solid fa-trash"> </i> </button>  </span> </form>
              </div>

           
            </li>
            @endforeach
            @endif
          </ul>
          @if($allTodos->count() > 0) 
            @if($allTodos->count() - $todosRealized->count() > 0)
              <span>Faltam <span style="color:red; font-weight: bold">{{$allTodos->count() - $todosRealized->count()}}</span> <em>TODOs</em>   para serem realizados</span>
              <progress class="progress-bar" @if($allTodos->count() > 0) value= "{{ round(($todosRealized->count() * 100) / $allTodos->count(), 1) }}" @endif max="100"></progress>
            @else 
            <span style="color: green">Todos os <em>TODOs</em> foram realizados! </span>
            @endif
          @else 
          <span>Nenhum <em>TODO</em> cadastrado</span>
          @endif
          <hr>
          <div id="tabs">
            <ul>
              <li><a href="#active"><span>Ativos</span></a></li>
              <li><a href="#realized"><span>Realizados</span></a></li>
            </ul>
            <div id="active">
              <ul class="list-group list-group-light">
                @if($todosNotRealized->count() > 0)
                @foreach($todosNotRealized as $todo)
                  <li class="list-group-item px-3 border-0 rounded-3 list-group-item-danger mb-2">{{$todo->name}}</li>
               @endforeach
               @else 
                Nenhum todo ativo
               @endif
              </ul>
            </div>
            <div id="realized">
              <ul class="list-group list-group-light">
                @if($todosRealized->count() > 0)
                @foreach($todosRealized as $todo)
                  <li class="list-group-item px-3 border-0 rounded-3 list-group-item-success mb-2">{{$todo->name}}</li>
                @endforeach
                @else 
                Nenhum todo realizado
               @endif
              </ul>
            </div>
          </div>
           
          </div>

         
    </div>

    <div class="modal" id="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edição de todo</h5>
            <button type="button" class="btn-close" id="btn-close-1" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="POST" id="edit-form">
            @csrf
            @method('PUT')
            <div class="modal-body">
              <input name="name" id="edit-input-name" required class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" id="btn-close-2" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Salvar alterações</button>
            </div>
          </form>
        </div>
      </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="/js/todo.js"></script>
    <script>
      let spanIcon = document.getElementsByClassName("span-icon edit");
      for (let i = 0; i < spanIcon.length; i++) {
        spanIcon[i].addEventListener('click', function() {
          let idSpan = spanIcon[i].id;
          let id = idSpan.replace('span-', '');
          let editInputName = document.getElementById("edit-input-name");
          let editForm = document.getElementById("edit-form");
            $.ajax({
              type: 'GET',
              url: '{{url('/show/todo/')}}/'+id,
              dataType: 'json',
              success: dados => {
                  modal.style.display = "block";
                  editInputName.value = dados.name;
                  editForm.action = "/update/todo/"+id;
              }
            
            }) 
          });
      }

    </script>
    
</body>
</html>