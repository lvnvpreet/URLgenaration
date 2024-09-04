<center>
<h1>This is Wellcome Page</h1>

<a href="/home">Home</a> 
<span>Normal view route ||</span>
<a href=" {{URL::to('home')}}">Home</a>
<span>This is URL::to(' ') way</span>
<br>
<a href="/about">About</a>
<span>Normal view route ||</span>
<a href="{{URL::to('about')}}">About</a>
<span>This is URL::to(' ') way</span>
<br><br>

<h2> URL With current function</h2>

<!-- <h3>
    {{URL::current()}} 
</h3> -->

<!-- using url function -->

<h3>
    {{url()->current()}} 
</h3>
<br>
<h2>Havy url route with #nm variable name using route('nm')</h2>
<a href="{{route('nm')}}">My Name</a>
<br>

<h2>URL with full function  it is show all extra containt in the url</h2>
<!-- <h3>
    {{URL::full()}}
</h3> -->

<!-- using url function -->

<h3>
    {{url()->full()}} 
</h3>

<br>
<h2>This is the previous URL from where we came to this page</h2>
<h3>
    {{URL::previous()}}
</h3>

<h2>This is the url with child path </h2>

<a href="{{URL::to('home/profile/user/name',['Lovepreet'])}}">About My Profile</a>

</center>