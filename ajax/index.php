<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Search User</title>

    <script>
    function showSuggetion(str) {
        if (str.length == 0) {
            document.getElementById('output').innerHTML = '';
        } else {
            //Ajax request
            var xmlhttp = new XMLHttpRequest(); //create XMLHttpRequest object and assign to xmlhttp
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }

            xmlhttp.open('GET', "suggest.php?q=" + str, true);
            xmlhttp.send();
        }
    }
    </script>
</head>

<body>
    <div class="container">
        <h1>Search User</h1>
        <form>
            Search User: <input type="text" class="form-control" onkeyup="showSuggetion(this.value)">
        </form>
        <p> Suggetions:<span id="output" style="font-weight:bold"></span></p>
    </div>
</body>

</html>