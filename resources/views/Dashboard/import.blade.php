<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impport Data</title>
</head>
<body>
    <div>
    <h1>IMPORT DATA  {CSV / Text }</h1>
    <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="importfile" accept="csv" required>
        <br><br>
        <button>Show</button>
    </form>

    @if(session('data'))
        <h2>CSV Data:</h2>
        <table border="1">
            <thead>
                <tr>
                    @foreach (session('data')[0] as $key => $value)
                        <th>{{ $key }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach (session('data') as $row)
                    <tr>
                        @foreach ($row as $cell)
                            <td>{{ $cell }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    </div>

</body>
</html>