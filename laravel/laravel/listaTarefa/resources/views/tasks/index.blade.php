@extends('layouts.main') 

@section('title', 'Tarefas') 

@section('content') 

    <div class="d-flex justify-content-between align-items-center">
        <h1>Lista de Tarefas</h1>
        <a href="/tasks/create"  type="button" class="btn btn-primary">
            <i class="bi bi-plus-square"></i>
            <span>Nova Tarefa</span>
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID TAREFA</th>
                <th>NOME</th>
                <th>DESCRIÇÃO</th>
                <th>DATA CONCLUSÃO</th>
                <th>CATEGORIA</th>
                <th colspan="2">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td> {{$task->id}}</td>
                <td> {{$task->name}}</td>
                <td> {{$task->description}}</td>
                <td> {{$task->completed_date}}</td>
                <td> {{$task->category_name}}</td>
                <td>
                    <a class='btn btn-primary' href="/tasks/edit/{{$task->id}}">
                        <i class='bi bi-pencil-square'></i>
                    </a> 
                </td>

                <td>
                    <form action="/tasks/{{$task->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir a tarefa?')" type="submit">
                        <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection