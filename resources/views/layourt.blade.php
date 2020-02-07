<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fontawesome import-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--import font from google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    <body>
                    @yield('content')
        <script src="jquery-3.2.1.min.js"></script>
        <script src="jquery.ajaxchimp.min.js"></script>
        <script>
          $(function() {
            $('#action').click(function() {
              var param = 'l=' + $('#ref').val();
              $('#r').load('http://www.proverbes.php',param);
            });  
          });
        </script>
    </body>
</html>