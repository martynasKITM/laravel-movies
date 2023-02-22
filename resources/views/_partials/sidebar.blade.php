<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/search">Paieška</a>
        @foreach($categoriesList as $category)
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/category/{{$category->id}}">{{$category->title}}</a>
        @endforeach
    </div>
</div>
