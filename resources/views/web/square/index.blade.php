@extends('./app')

@section('content')
<main class="mdl-layout__content aligin-items">
    <div class="page-content">
        <ul class="mdl-list mdl-shadow--2dp square-box">
            @foreach($articles as $key => $value) 
            {{ $value }}
                <li class="mdl-list__item square-li">
                    <header>
                        <div class="user-box mdl-shadow--2dp">
                            <img src="{{ asset('./images/singledog.jpg') }}" alt="">
                        </div>
                    </header>
                    <article>
                        <p>
                        {{ $value->summery }}
                        </p>
                        <div class="bottom">
                            <p>
                                <span class="category">IOS</span>
                            </p>
                            <p>
                                <i class="material-icons">&#xE855;</i>
                                <span class="post">4小时前</span>
                            </p>
                            <p>
                                <i class="material-icons">&#xE8F4;</i>
                                <span class="views">{{ $value->views }}次</span>
                            </p>
                            <p>
                                <i class="material-icons">&#xE87E;</i>
                                <span class="like">{{ $value->likes }}次</span>
                            </p>
                        </div>
                    </article>
                </li>
            @endforeach
        </ul>
        {{ $articles->links() }}
    </div>
</main>
@endSection