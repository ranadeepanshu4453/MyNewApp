<div>
    <h1>Total Notification</h1>
    <div><x-button text="Back" url="content"/></div> 

    @foreach ($msg as $notification)
    @can('seeMessage',$notification)
        <div class="notification">
            <span class="timestamp">{{ \Carbon\Carbon::parse($notification['created_at'])->diffForHumans() }}</span>
            <p><strong>Sender ID:</strong> {{ $notification['sender_id'] }}</p>
            <p><strong>Message:</strong> {{ $notification['message'] }}</p>
        </div>
        @endcan
    @endforeach
    
</div>


<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .notification {
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px 0;
            padding: 15px;
            position: relative;
        }
        .notification .timestamp {
            font-size: 0.8em;
            color: #888;
            position: absolute;
            top: 10px;
            right: 15px;
        }
        .notification p {
            margin: 5px 0;
        }
    </style>