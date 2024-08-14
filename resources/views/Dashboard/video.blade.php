<div>
    <h1>Video Content</h1>
    

    <form action="/addTagVideo/{{$data->id}}" method="post">
        @csrf
        <input type="text" name="title" value="{{$data->title}}"><br><br>
        <input type="text" name="url" value="{{$data->url}}"><br><br>
        <input type="text" name="tag" placeholder="Leave some tag here">
        <button type="submit">Add Tag</button>
    </form>
    <button><a href="{{route('content')}}">Back</a></button>

    <h1>Total Tags</h1>
    @foreach ($tag as $tags)
    
        <button>{{ $tags->tag_name }}</button>
    
@endforeach


<h1>All Tags</h1>
    @foreach ($alltag as $tags)
    
        <button><a href="{{route('addByClickPicture',['id'=>$data->id,'tag_name'=>$tags->tag_name])}}">{{ $tags->tag_name }}</a></button>
    
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
          background: white;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }
      h1 {
          color: #333;
      }
      input[type="text"] {
          width: 100%;
          padding: 10px;
          margin: 5px 0 20px;
          border: 1px solid #ccc;
          border-radius: 4px;
      }
      a{
        text-decoration-line: none;
        color: aliceblue;
      }
      table {
          width: 100%;
          border-collapse: collapse;
          margin-top: 20px;
      }
      table, th, td {
          border: 1px solid #ddd;
      }
      th, td {
          padding: 10px;
          text-align: left;
      }
      th {
          background-color: #f2f2f2;
          color: #333;
      }
      button {
        background-color: #4CAF50; /* Green background */
        color: white; /* White text */
        padding: 10px 20px; /* Some padding */
        border: none; /* No border */
        border-radius: 5px; /* Rounded corners */
        cursor: pointer; /* Pointer cursor on hover */
        font-size: 16px; /* Font size */
    }

    button:hover {
        background-color: #45a049; /* Darker green on hover */
    }
  </style>