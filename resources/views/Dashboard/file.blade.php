<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/file.css')}}">
</head>
<body>
    <div>
    <h1>Content Management System</h1>
    <div class="nav">
        <div><x-button text="Activity" url="track"/></div> 
        <div><x-button text="Notifications" url="other"/></div> 
        <div><x-button text="Back" url="db"/></div> 

    </div>


    <div class="posts"> 

    

    </div>
    <div class="video">
<h1>Blog Content</h1>
        <table border="4">
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>URL</td>
                <td>Operations</td>
            </tr>
            @foreach ($blog as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td><button><a href="{{route('blog',$data->id)}}">View</a></button></td>
            </tr>
            
            @endforeach
        </table>
    </div>
    <div class="image">
    <h1>Picture Content</h1>

    <table border="4">
            <tr>
                <td>ID</td>
                <td>title</td>
                <td>URL</td>
                <td>Operations</td>

            </tr>
            @foreach ($picture as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->url}}</td>
                <td><button><a href="{{route('picture',$data->id)}}">View</a></button></td>


            </tr>
            
            @endforeach
        </table>

    </div>


    <div class="total_content">
        <h1>Main Table</h1>

    </div>
    

</div>
</body>
</html>