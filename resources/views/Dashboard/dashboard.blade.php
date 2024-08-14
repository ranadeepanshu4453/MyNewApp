<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" />
</head>

<body>
@if(session('success'))
        <script>
            window.onload = function() {
                alert("{{ session('success') }}");
            };
        </script>
    @endif
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
    
    <x-button text="Logout" url="logout"/>
   
    
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
</html>