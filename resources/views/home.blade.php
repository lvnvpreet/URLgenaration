<center>


<h1>This is Home Page</h1>

<a href="/">Wellcome</a> 
<span>Normal view route ||</span>
<a href=" {{URL::to('/')}}">Wellcome</a>
<span>This is URL::to(' ') way</span>
<br>
<a href="/about">About</a>
<span>Normal view route ||</span>
<a href="{{URL::to('about')}}">About</a>
<span>This is URL::to(' ') way</span>

<br><br>

<h2> URL With current function</h2>

<h3>
    {{URL::current()}} 
</h3>
<br>
<h2>Use the page with havy url Route</h2>
<a href="/home/profile/user/name">My Name</a>

<br>

<h2>URL with full function  it is show all extra containt in the url</h2>
<h3>
    {{URL::full()}}
</h3>

<br>
<h2>This is the previous URL from where we came to this page</h2>
<h3>
    {{URL::previous()}}
</h3>
</center>