<div>
    {{session('message')}}
    <h1>Broadcast message From Here</h1>
    
    <form action="/sendbroadcast" method="post">
        @csrf
        <label>Sending Message to all users</label>
        <input type="text" name="msg" placeholder="Type your message">
        
        <br><br>
        <button type="submit">Send</button>
    </form>
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
            max-width: 400px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        select, input[type="text"], button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #4cae4c;
        }
    </style>
</style>