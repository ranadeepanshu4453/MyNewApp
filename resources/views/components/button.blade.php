<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
     <button><a href="{{route($url)}}">{{$text}}</a></button>
</div>

<style>
    button {
              background-color: #007BFF;
              color: white;
              border: none;
              padding: 10px 15px;
              margin: 5px;
              border-radius: 5px;
              cursor: pointer;
              transition: background-color 0.3s;
          }
          button a {
              text-decoration: none;
              color: white;
          }
          button:hover {
              background-color: #0056b3;
          }

</style>