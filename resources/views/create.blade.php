@if($errors->any())
    <div style="color:red">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/create" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text"name="title"></br>
    <label for="body">Body:</label>
    <textarea name="body" cols="30" rows="10"></textarea>
    <button>Send</button>
</form>