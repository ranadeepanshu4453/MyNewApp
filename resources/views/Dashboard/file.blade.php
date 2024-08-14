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


<style>
      body {
          font-family: Arial, sans-serif;
          margin: 20px;
          background-color: #f4f4f4;
      }
      h1 {
          text-align: center;
          color: #333;
          margin-bottom: 20px;
      }
      .nav{
        display: flex;
      }
      .container {
          display: flex;
          justify-content: space-between;
          margin-top: 20px;
      }
      .posts, .video, .image {
          flex: 1;
          margin: 0 10px;
          background: #fff;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      }
      h2 {
          color: #555;
          margin-bottom: 15px;
          text-align: center;
      }
      table {
          width: 100%;
          border-collapse: collapse;
          margin-top: 10px;
      }
      th, td {
          padding: 12px;
          text-align: left;
          border: 1px solid #ddd;
      }
      th {
          background-color: #4CAF50;
          color: white;
      }
      tr:nth-child(even) {
          background-color: #f2f2f2;
      }
      tr:hover {
          background-color: #d1e7dd;
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
    a{
        text-decoration-line: none;
        color: #f4f4f4;
    }

    button:hover {
        background-color: #45a049; /* Darker green on hover */
    }
      @media (max-width: 768px) {
          .container {
              flex-direction: column;
          }
          .posts, .video, .image {
              margin: 10px 0;
          }
      }
  </style>