<h1>Choix</h1>
<ul>
    @foreach($categories as $cat)
        <li>{{$cat->categorie}}</li>
    @endforeach
</ul>

<h1>Categorie age</h1>
<ul>
    @foreach($categoriesAge as $cat)
        <li>{{$cat->categorieAge}}</li>
    @endforeach
</ul>