<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-light" style="background:#999;">
        <a class="navbar-brand" href="/" style="font-size:2rem;">TaskList</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-itenm"><a href="" class="navbar-link">{!! link_to_route('tasks.create','タスクを作成',[],['class'=>'btn btn-secondary'])!!}</a></li>
            </ul>
        </div>
    </nav>
</header>