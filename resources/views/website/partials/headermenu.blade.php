<div class="header-menu d-none d-lg-block">
    <ul class="main-menu">
        @foreach($categories as $category)
        <li>
            <a href="{{$category->url}}">{{$category->name}}</a>
        </li>
        @endforeach
    </ul>
</div>
