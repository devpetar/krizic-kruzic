<!DOCTYPE html>
<html>
    <head>
        <title>Križić - kružić</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Igra križić - kružić.">
		<meta name="keywords" content="križić, kružić">
		<meta name="author" content="Petar">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="krizic-kruzic.css">
        <?php include "krizic-kruzic_controller.php" ?>
    </head>
    <body>
        <h1><?php echo $poruka ?></h1>
        <div id="main_container">
            <form method="GET">
                <header>
                    <h2>Križić - kružić</h2>
                </header>
                <div id="imena_container">
                    <label for="osobaX">Osoba x:<label>
                    <input id="osobaX" class="imena" type="text" name="osobaX" maxlength="20" placeholder="Ime 'x' osobe"/>
                    <br>
                    <label for="osobaY">Osoba y:</label>
                    <input id="osobaY" class="imena" type="text" name="osobaY" maxlength="20" placeholder="Ime 'o' osobe"/>
                </div>
                <h2>Unesite vrijednosti "x" i "o" u tabelu.</h2>
                <table>
                    <tbody>
                        <tr>
                            <td><input type="text" name="00" maxlength="1"/></td>
                            <td><input type="text" name="01" maxlength="1"/></td>
                            <td><input type="text" name="02" maxlength="1"/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="10" maxlength="1"/></td>
                            <td><input type="text" name="11" maxlength="1"/></td>
                            <td><input type="text" name="12" maxlength="1"/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="20" maxlength="1"/></td>
                            <td><input type="text" name="21" maxlength="1"/></td>
                            <td><input type="text" name="22" maxlength="1"/></td>
                        </tr>
                    </tbody>
                </table>
                <input class="submit" type="submit" value="Provjerite pobjednika!">
            </form>
        </div>
    </body>
</html>