<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication</title>
    <link rel="stylesheet" href="css/table.css"  />
</head>
<body>
    <div class="table" >
    <h2>Table de multiplication pour {{ $number }} :</h2>
    <table style="width: 100%;">
    @for ($i = 0; $i <= 10; $i++)
        <tr style="width: 100%;">
            <td style="width: 50%;">{{ $number }} x {{ $i }} = {{ $number * $i }}</td>
        </tr>
    @endfor
    </table>
        <center>
            <a href="/">
                Revenir
                <span></span>
            </a>
        </center>    
    </div>
</body>
</html>
