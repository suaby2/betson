@if($pages)
    <ul>
        @foreach($pages as $page)
            <li>
                <a href="/pages/{{$page->slug}}">
                    {{$page->title}}
                </a>
            </li>
        @endforeach
    </ul>
@endif