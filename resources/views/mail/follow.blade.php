<div>
    <h2>Follow from here</h2>
    @foreach ($user as $users)

    <span>Name::</span>{{$users->name}} <button><a href="{{route('notify',['id' => $users->id])}}">Follow</a></button><br><br>
    
    @endforeach
</div>


<style>
    
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        div {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin-left: 25%;
        }
        h2 {
            color: #333;
        }
        span {
            font-weight: bold;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }
        button a {
            color: white;
            text-decoration: none;
        }
        button:hover {
            background-color: #0056b3;
        }
    
</style>