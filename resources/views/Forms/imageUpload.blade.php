<div>
    <h1>Upload Image From Here</h1><button><a href="{{route('destroy')}}">Destroy</a></button>
    

    <form action="/uploadPhoto" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" required><br><br>
        <button type="submit">Upload</button>
    </form>

    <h2>||Uploaded Images||</h2> 
    @foreach ($images as $image)
    <img src="{{Storage::url($image->path)}}" alt="">

    
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
        max-width: 600px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input[type="file"] {
        margin: 10px 0;
    }
    a{
        text-decoration-line: none;
        color: aliceblue;
    }

    button {
        background-color: #5cb85c;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #4cae4c;
    }

    h2 {
        text-align: center;
        color: #555;
    }

    img {
        max-width: 50%;
        height: auto;
        margin: 10px 0;
        border: 2px solid #ddd;
        border-radius: 4px;
    }
</style>

