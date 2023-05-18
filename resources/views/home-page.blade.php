<!DOCTYPE html>
<html dir='ltr' lang='en'>

<head>
    <title>Home Page</title>
    <style>
        .parent {
            display: grid;
            place-items: center;
        }

        /* Style Button */
        .button-custom {
            display: inline-block;
            background: #4285F4;
            color: #fff;
            width: 240px;
            height: 50px;
            border-radius: 5px;
            border: thin solid #888;
            box-shadow: 1px 1px 1px grey;
            white-space: nowrap;
            font-size: 16px;
            font-weight: normal;
            font-family: 'Roboto', sans-serif;
            margin: 2rem 0;
        }

        .table {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            border-collapse: collapse;
            background-color: #85A1CC;
        }

        body {
            background-color: #C1DBE6;
            font-family: sans-serif;

        }
    </style>
</head>

<!--[ <body> open ]-->

<body>

    <div class="table">
        <table cellspacing="0" cellpadding="0" border="0" align="center" width="500px">

            <tr>
                <td colspan="2" bgcolor="" align="center">
                    <h1>Private Note Docter</h1>
                    <h1>Institute Technology Del</h1>
                </td>
            </tr>
            <tr>
                <td height="50px">
                    <div class="parent">
                        <a href="/medicines-dashboard" class="custom">Medicines</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td height="50px">
                    <div class="parent">
                        <a href="/meeting-schedule-dashboard" class="custom">Meeting Schedule</a>
                    </div>
                </td>
            </tr>
            {{-- <tr>
                <td height="50px">
                    <div class="parent">
                        <a href="/recept-dashboard" class="custom">Recepts</a>
                    </div>
                </td>
            </tr> --}}
            <tr>
                <td height="50px">
                </td>
            </tr>
        </table>

    </div>


</body>
<!--[ </body> close ]-->

</html>
