@if($category->categoryChild->count())
    <div class="dropdown-menu" aria-labelledby="dropdown-a">
        @foreach($category->categoryChild as $categoryChild)
            <a class="dropdown-item" href="#">{{ $categoryChild->name }}</a>
            @if($categoryChild->count())
                @include('components.menuChild',['category' => $categoryChild])
            @endif
        @endforeach
    </div>
@endif
