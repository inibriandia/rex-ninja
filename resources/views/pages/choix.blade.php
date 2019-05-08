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

<h1>Type Ambiances</h1>
<ul>
    @foreach($ambiance as $amb)
        <li>{{$amb->ambiance}}</li>
    @endforeach
</ul>

<h1>Type Payant/Gratuit</h1>
<ul>
    @foreach($typePayant as $prix)
        <li>{{$prix->prix}}</li>
    @endforeach
</ul>

