<h1>Link List Pages</h1>
<h2>Add Link<a href="/submit">Click here</a></h2>
@foreach ($links as $link)
    <li><a href="{{ $link->url }}">{{ $link->title }}</a></li>
    <ul>
        <li>{{ $link->description }}</li>
    </ul>
@endforeach
