<!DOCTYPE html>
<html>
<head>
    <title>Oil Change Checker</title>
</head>
<body>

    <h1>Check Oil Change</h1>

    <form method="POST" action="/check">
        @csrf

        <div>
            <label>Current Odometer</label><br>
            <input type="number" name="current_odometer" value="{{ old('current_odometer') }}" required>
        </div>

        <br>

        <div>
            <label>Previous Odometer</label><br>
            <input type="number" name="previous_odometer" value="{{ old('previous_odometer') }}" required>
        </div>

        <br>

        <div>
            <label>Previous Oil Change Date</label><br>
            <input type="date" name="previous_change_date" required>
        </div>

        <br>

        <button type="submit">Check</button>
    </form>

    @if ($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</body>
</html>