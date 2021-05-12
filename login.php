<!--12hrs in-->
<!--Author: Sodolescu Teodor-Mihail-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="css/logo.png"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
    <link href="css/login.css" rel="stylesheet">
    <script src="form.js"></script>
    <script> 
        window.onload = function() {
            alert("Παρακαλόυμε υποβάλετε τα στοιχεία σας με Ελληνικά κεφαλαία, προκειμένου να εμφανιστούν οι βαθμοί σας!");
        }
    </script>
    <title>Βαθμολόγιο</title>
</head>
<body>
    <div id="container">
        <div id="left">
            <h1 id="welcome">Βαθμολόγιο</h1>
            <p id="lorem">
            Παρακαλόυμε υποβάλετε τα στοιχεία σας με <br>
            Ελληνικά κεφαλαία, προκειμένου να εμφανιστούν <br>
            οι βαθμοί σας.<br>

            </p>
        </div>
        
        <form action="process.php" method="post" name="form" id="form">
            <div id="right">
                <img id="logo" src="css/logo.png" alt="UTH Logo">
                <div id=id-group>
                    <input type="text" id="id" name="id" class="client-info">
                    <label for="id">Αριθμός Μητρώου</label>
                </div>
                <div id=surname-group>
                    <input type="text" id="surname" name="surname" class="client-info">
                    <label for="surname">Επώνυμο</label>
                </div>
                <div id=name-group>
                    <input type="text" id="name" name="name" class="client-info">
                    <label for="name">Πρώτο Όνομα</label>
                </div>
                <div id=fathername-group>
                    <input type="text" id="fathername" name="fathername" class="client-info">
                    <label for="fathername">Πατρώνυμο</label>
                </div>
                <input type="hidden" name="query" id="query" value="Pass" />
                <input type="submit" id="submit" class="client-info" value="Υποβολή">
                
            </div>
        </form>
    </div>
</body>
</html>