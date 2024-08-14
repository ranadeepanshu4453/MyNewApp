<div>
    <h3>
        Welcome {{Auth::User()->name}}<br>
        Track Activities From Here<div><x-button text="Back" url="content"/></div> 


        <table border="4">
            <tr>
                <td>Record</td>
                <td>User Type</td>
                <td>Action</td>
                <td>Date</td>
                <td>Time</td>
                <td>Operations</td>
            </tr>
            @foreach ($data as $dt)
            <tr>
                <td>{{$dt->id}}</td>
                <td>{{$dt->user_type}}</td>
                <td>{{$dt->action}}</td>
                <td>{{$dt->created_at->toDateString()}}</td>
                <td>{{$dt->created_at->toTimeString()}}</td>
                @can('canMessage', $dt)
    <td><button><a href="{{ route('message', $dt->user_id) }}">Message</a></button></td>
@else
    <td><h3>You Cannot Send a Message To Yourself</h3></td>
@endcan

            </tr>
            @endforeach
        </table>

    </h3>
</div>


<style>
   body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

h3 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 0 auto;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

table, th, td {
    border: 2px solid #007bff;
}

th, td {
    padding: 12px;
    text-align: center;
}

th {
    background-color: #007bff;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e9ecef;
}

</style>