<ul class="product-categories">
    @foreach($categories as $category)
    <li class="cat-item cat-item-45">
        <a href="{{url('/category-details', $category)}}">{{$category->name}}</a>
        <span class="count">
            <span class="post_count">{{$category->products->count()}}</span>
        </span>
    </li>
    @endforeach
</ul>