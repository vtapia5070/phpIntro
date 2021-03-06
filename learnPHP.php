<html>
    <head>
        <title>Information Gathered</title>
    </head>
    <body>
        <!-- 3 Types of tags to insert PHP inside html -->

        <?php
            echo "<h1>Hello, World!</h1>";
        ?>

        <? echo "<h1>Hello, World!</h1>"; ?>

        <script language="php">
            echo "Hello, World!";
        </script>

        <?php
            // https://www.youtube.com/watch?v=7TF00hJI78Y&ab_channel=DerekBanas

            /*
                Multiline
                Comment
            */
            // Single line comments
            # Another single line comment.

            /*
                Time:
                h: 12 hr format
                H: 24hr format
                i: Minutes
                s: Seconds
                u: Microseconds
                a: Lowercase am or pm
                l: Full text for the day
                F: Full tezt for the month
                j: Day of the month.
                S: Suffix for the dat sr, nd, rs, etc.
                Y: 4 digit year.
            */

            date_default_timezone_set('UTC');
            echo date('h:i:s:u a, l F jS Y e');

            /*
                Data types:
                a. Integer: Whole Numbers
                b. loat: Decimal Number
                c. String: Strings or characters
                d.Boolean: true or false
                e. Array: Multiple Items
                f. Object: A Object defined by a class.
            */

        ?>

        <?php
            $usersName = $_POST['username'];
            $streetAddress = $_POST['streetaddress'];
            $cityAddress = $_POST['cityaddress'];

            echo $usersName . "</br>";
            echo $streetAddress . "</br>";
            echo $cityAddress . "</br>";

            # HEREDOC string method, must not be indented
            $str = <<<EOD
The customers name is
$usersName and they
live at $streetAddress
in $cityAddress </br>
EOD;

            $str2 = <<<EOT
'EOT' is also used for herdoc syntax,
and stands for 'end of text'</br>
EOT;
            # Note: EOT and EOD is comminly used as a herdoc delimiter,
            # but any uppercase keyword will work such as END
            # or PINEAPPLEPANTS
            $str3 = <<<PINEAPPLEPANTS
This is the way life goes.
Once minute you're born and
the next you're dead. What
you do on your Sunday's in between
depends on how big the dirt pile is.</br>
PINEAPPLEPANTS;

            echo $str;
            echo $str2;
            echo $str3;

        ?>

        <?php
            # constants
            define('PI', 3.1415926);
            echo "the value of pi is " . PI;
        ?>

    </body>
<html>
