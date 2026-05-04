<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>

    <h1>Oil Change Result</h1>

    @if($isDue)
        <h2 style="color:red;">🚗 The car IS due for an oil change.</h2>
    @else
        <h2 style="color:green;">✅ The car is NOT due for an oil change.</h2>
    @endif

    <h3>Details</h3>
    <ul>
        <li>Current Odometer: {{ $oilChange->current_odometer }}</li>
        <li>Previous Odometer: {{ $oilChange->previous_odometer }}</li>
        <li>Previous Change Date: {{ $oilChange->previous_change_date }}</li>
        <li>KM Driven: {{ $kmDiff }}</li>
        <li>Months Passed: {{ $monthsDiff }}</li>
    </ul>

    <br>

    <a href="/">← Check another car</a>

</body>
</html>