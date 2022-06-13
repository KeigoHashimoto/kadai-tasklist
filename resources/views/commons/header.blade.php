<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-light" style="background:#999;">
        <a class="navbar-brand" href="/" style="font-size:2rem;">TaskList</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                    <li class="nav-item"><a href="" class="navbar-link">{!! link_to_route('tasks.create','タスクを作成',[],['class'=>'btn btn-secondary'])!!}</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{--ログアウト画面--}}
                            <li class="dropdown-item">{!! link_to_route('logout.get','Logout',['class'=>'nav-link']) !!}</li>
                        </ul>
                    </li>
                @else
                    {{--ユーザー登録リンク--}}
                    <div class="mr-3">
                        {!! link_to_route('signup.get','Signup',['class'=>'nav-link']) !!}
                    </div>
                    {{--ログイン--}}
                    {!! link_to_route('login','Login',['class'=>'nav-link']) !!}
                @endif
            </ul>
            
        </div>
    </nav>
</header>