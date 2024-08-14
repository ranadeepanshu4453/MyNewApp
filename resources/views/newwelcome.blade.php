<div>
    <h1>Welcome To MY-APP</h1>
    <div>
        @cannot('isLogin')
        <button><a href="{{route('lg')}}">Log In</a></button>
        <button><a href="{{route('rj')}}">Register</a></button>
        @endcannot
        @can('isLogin')
        <button><a href="{{route('db')}}">Dashboard</a></button>
        <button><a href="{{route('logout')}}">Logout</a></button>
        @endcan

    </div>
</div>



<style>
          body {
              display: flex;
              justify-content: center;
              align-items: center;
              height: 100vh;
              background-color: #f0f4f8;
              font-family: Arial, sans-serif;
              margin: 0;
          }
          h1 {
              color: #333;
              font-size: 3em;
              margin-bottom: 20px;
          }
          div {
              text-align: center;
          }
          button {
              background-color: #007bff;
              color: white;
              border: none;
              border-radius: 5px;
              padding: 10px 20px;
              font-size: 1em;
              cursor: pointer;
              margin: 5px;
              transition: background-color 0.3s;
          }
          button:hover {
              background-color: #0056b3;
          }
          a {
              text-decoration: none;
              color: white;
          }
      </style>