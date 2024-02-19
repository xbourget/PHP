<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>mon super "JEUX"</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
        </style>
        <script
                src="https://code.jquery.com/jquery-3.7.1.min.js"
                integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
                crossorigin="anonymous">
        </script>
        <script>
            var NbrATrouver = 0;
            var  apiUrl = 'http://192.168.1.36:8000/api/events/';
            //php artisan serve --host=192.168.1.36 --port=8000

            
            function recordEvent( tag )
            {
                // Make a GET request using fetch
                fetch(apiUrl + tag )
                .then(response => {
                    if (!response.ok) {
                         throw new Error(`HTTP error! Status: ${response.status}`);
                    }                    
                    return response.json();
                })
                .then(data => {
                    console.log("OK >", data);
                })
                .catch(error => {
                    console.log("KO >", error);
                });
            }

            function go()
            {
                recordEvent( 'go' );
                NbrATrouver = Math.floor(Math.random() * 9) + 1;
                console.log( ">>>", NbrATrouver);
            }

            function check( val )
            {
                recordEvent( 'check' + val );
                message = "WINNNN";
                if ( val > NbrATrouver )
                    message = "MOINSS";
                else if ( val < NbrATrouver )
                    message = "PLUSS";
                else
                    recordEvent( 'win' );

                    
                $( "#message").text( message  );

                console.log( ">>>", val )
            }
        </script>
<style>

.buttonGO { 
        width:  67px;
        height:100px;
        border: 2px;
    }

.buttonDigit { 
        width:  30px;
        height:30px;
        color : red;
    }

</style>


    </head>
    <body  onload="recordEvent('load')" onunload="recordEvent('unload')" >
    {!! EuCookieConsent::getPopup() !!}
            Bonjour, choisis un chiffre entre 1 et 9
            <br>
            <button class="buttonGO" onclick="go()">GO!</button>
            <br>
            <button class="buttonDigit" onclick="check(1)">1</button>
            <button class="buttonDigit" onclick="check(2)">2</button>
            <button class="buttonDigit" onclick="check(3)">3</button>
            <button class="buttonDigit" onclick="check(4)">4</button>
            <button class="buttonDigit" onclick="check(5)">5</button>
            <button class="buttonDigit" onclick="check(6)">6</button>
            <button class="buttonDigit" onclick="check(7)">7</button>
            <button class="buttonDigit" onclick="check(8)">8</button>
            <button class="buttonDigit" onclick="check(9)">9</button>
            
            <br>
            <div id="message">RESULTAT</div>

            <script src="{{ asset('vendor/cookie-consent/cookie-consent.js') }}"></script>

    </body>
</html>
