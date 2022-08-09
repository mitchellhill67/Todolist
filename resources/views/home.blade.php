<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
   
</head>

<body>
    <header>
            <h1>To-do List</h1>
        
            <form id="new-task-form" action="{{ route('store') }}" method="post" autocomplete="off">
             @csrf
            <div id="tasks">
                <input id="new-task-input"type="text" name="content" placeholder="Add your new task">
                <button id="new-task-submit"type="submit">Add Task</button>
            </div>
            </form>
        </header>
 <main>
    <section class="task-list">
        <h2>Tasks</h2>
        <div id="tasks">
            <div class="task">
                <div class="content">
            
            @if(count($todolists))
            <ul>
            @foreach($todolists as $todolist)
            <li>
                
            <form id="new-task-input" action="{{ route('destroy', $todolist->id) }}" method="post">
            {{$todolist->content}}
            @csrf
            @method('delete')
            <div class="actions">
            <button class="delete" type="submit">Delete</button>
            </div>
            </li>
            @endforeach
            </ul>
            @else
            <p>No Tasks</p>
            @endif
                </div>
            </div>
            </div>
       </div>
       @if(count($todolists))
       <div>
        You have {{ count($todolists)}} pending tasks.
       </div>
       @endif
    </div>
       </section>

</main>

    
    
</body>
</html>