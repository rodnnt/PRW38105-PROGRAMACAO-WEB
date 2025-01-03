@extends('layouts.main') 

@section('title', 'Editar Tarefa') 

@section('content') 

<h1>Editar Tarefas</h1>

    <form action='/tasks/update/{{$task->id}}' method='post'>

        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Nome Tarefa:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Informe o nome da tarefa" required value='{{$task->name}}'>
        </div>

        <div class="form-group">
            <label for="descripton">Descrição Tarefa:</label>
            <input type="text" class="form-control" name="description" id="description" value='{{$task->description}}'
                placeholder="Informe a descrição da tarefa" required>
        </div>

        <div class="form-group">
            <label for="completed_date">Data Conclusão:</label>
            <input type="date" class="form-control" name="completed_date" id="completed_date" required value='{{$task->name}}'>
        </div>

        <div class="form-group d-flex flex-column">
            <label for="category_id">Categoria:</label>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                <option value="{{$category['id']}}" {{$category['id'] == $task['category_id']? 'selected' : ''}}>
                    {{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href='/tasks' class="btn btn-secondary">Cancelar</a>
        </div>

    </form>

@endsection