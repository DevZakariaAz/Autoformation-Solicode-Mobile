<div class="article-card">
    <li >
    <h5>Title :<strong>{{$article['title']}}</strong> </h5>
    <p> Content :<strong>{{$article['content']}}</strong> </p>
        <form action="/dashboard/articles/{{$article['id']}}" method="POST" style="display:inline;">
            @csrf 
            @method('DELETE') 
            <button type="submit" class="btn btn-success">Supprimer</button>
        </form>

    </li>
</div>
