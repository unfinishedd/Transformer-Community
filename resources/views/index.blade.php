<h2>All Articles</h2>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>operation</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>
                <form action="/articles/{{$article->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>