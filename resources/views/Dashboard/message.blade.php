<div>
    <span>{{session('message')}}</span>

    <h1>Send Message From Here</h1>
   
    <form action="/sendMessage/{{$id}}" method="post">
        @csrf
        Sending Message To::<input type="text" value="{{Auth::user()->usertype}}"><br><br>
        <input type="text" name="msg" placeholder="Enter message"><br><br>
        <button>Send</button>
        
    </form>
    <div><x-button text="Back" url="track"/></div> 

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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        span{
            color: #4cae4c;
        }
    </style>