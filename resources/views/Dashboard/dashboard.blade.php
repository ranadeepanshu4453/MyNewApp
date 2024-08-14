
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .nav h4, .nav h1 {
            margin: 0;
        }

        .button-container {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            display: flex;
        }

        .button-container x-button {
            flex: 1;
        }

        .logout-button {
            margin-left: auto;
        }

        h1, h4 {
            color: #333;
        }
        .button-container{
            float: right;
        }
        .user-container{
            position: absolute;
            top: 30%;
            left: 50%;

        }
        .info {
            position: absolute;
            top: 30%;
            left: 50%;
        background-color: #f9f9f9; /* Light background */
        border: 1px solid #ddd; /* Light border */
        border-radius: 5px; /* Rounded corners */
        padding: 15px; /* Spacing inside the div */
        margin: 10px 0; /* Spacing outside the div */
        font-family: Arial, sans-serif; /* Font style */
        color: #333; /* Text color */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        max-height: 400px; /* Set a maximum height for the container */
        overflow-y: auto;  /* Enable vertical scrolling */
        border: 1px solid #ccc; /* Optional: add a border for better visibility */
        padding: 10px; /* Optional: add some padding */
    
    }

    .info br {
        margin: 10px 0; /* Spacing between notifications */
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <div>
                @can('isAdmin')
                    <h4>Welcome!!! {{ Auth::user()->name }} - To Admin Dashboard</h4>
                @endcan
                @cannot('isAdmin')
                    <h4>Welcome!!! {{ Auth::user()->name }} - To User Dashboard</h4>
                @endcannot
            </div>
            
        </div>

        <div class="button-container">
            <x-button text="Next" url="demo"/>
            <x-button text="Content Management System" url="content"/>
            <x-button text="Send Email" url="sendNotify"/>
            <x-button text="BroadCast Email" url="sendbroadcast"/>
            <x-button text="Follow" url="follow"/>
            <x-button text="Logout" url="logout"/>
            <x-button text="Upload Image" url="upload"/>
        </div>

        <x-layout>
            <!-- Additional layout content can go here -->
        </x-layout>
       <div class="info">
        <h2>Notification Bar</h2>
        <h3>||Unread Notifications||</h3>
        @foreach (auth()->user()->unreadnotifications as $notification)
        
        {{$notification->data['name']}} Started following you!!! <button><a href="{{route('mark',$notification->id)}}">Mark as Read</a></button> <br><hr>
        
        @endforeach
        <h3>||read Notifications||</h3>
        @foreach (auth()->user()->readnotifications as $notification)
        
        {{$notification->data['name']}} Started following you!!! <button><a href="{{route('unread',$notification->id)}}">Mark as Unread</a></button> <br><hr>
        
        @endforeach

      
       </div>

        
    </div>
</body>



