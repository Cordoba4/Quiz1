<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de @yield('title') </title>
</head>
<body>
    
    <center>
    <table border=1>
        <tr>
            <td colspan={{count($artistas)}}><center><b> @yield('table') </b</center></td>
        </tr>

        @for($i=0;$i<count($artistas);$i++)
        <tr>
            <td><b> Artista{{$i+1}} </b></td>
            <td> <a href="http://www.iucesmag.edu.co/">{{$artistas[$i]}}</a> </td>
        </tr>
        @endfor

        <tr>
            <td colspan={{count($artistas)}}><center><b> @yield('footer') </b</center></td>
        </tr>
    </table>
    </center>
    
</body>
</html>