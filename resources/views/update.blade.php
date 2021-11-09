@section('content')

@if($errors->any())
    <div style="color:red">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/articles/{{$article->id}}/edit" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text"name="title" value="{{$article->title}}" ></br>
    <label for="body">Body:</label>
    <textarea name="body" cols="30" rows="10">{{$article->title}}</textarea>
    <button>update</button>
</form>