<center>
<h1>This is About Page</h1>

<a href="/">Wellcome</a> 
<span>Normal view route ||</span>
<a href=" {{URL::to('/')}}">Wellcome</a>
<span>This is URL::to(' ') way</span>
<br>
<a href="/home">Home</a>
<span>Normal view route ||</span>
<a href="{{URL::to('home')}}">Home</a>
<span>This is URL::to(' ') way</span>

<br><br>

<h2> URL With current function</h2>

<h3>
    {{URL::current()}} 
</h3>
<br>
<h2>Havy url route with show function from #nameRouteController</h2>
<a href="show">My Name</a>

<br>

<h2>URL with full function  it is show all extra containt in the url</h2>
<h3>
    {{URL::full()}}
</h3>

<br>
<h2>This is the previous URL from where we came to this pageL</h2>
<h3>
    {{URL::previous()}}
</h3>

<a href="/user">About My Profile</a>
</center>