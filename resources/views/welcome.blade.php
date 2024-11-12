<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/">Home Page</a>
        {{-- <a href="{{route('company.contact')}}">Contact</a>
        <a href="{{}}"></a> --}}
    </nav>
    Default Home View
    <br><hr>
    <form action="/posts" method="post">
        {{csrf_field()}}
        {{-- <input type="hidden" name="" id=""  value=""> --}}
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <input type="submit" name="" id="">

    
    
    
    
    
    
    
    </form>


</body>
</html>