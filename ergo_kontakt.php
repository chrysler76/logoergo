<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>LOGOERGO Praxis für Logop&auml;die und Ergotherapie</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body class="oneColElsCtr">
    <div id="container">
        <div id="header">
            <div>
                <ul id="navigation_oben">
                    <li>
                        <a href="ergo_home.html" class="home">
                            <img src="img/navi_button_home.png" alt="home" />
                        </a>
                    </li>
                    <li>
                        <a href="ergo_oeffnungszeiten.html" class="oeffnungszeiten">
                            <img src="img/navi_button_oeffnungszeiten.png" alt="&#246;ffnungszeiten" />
                        </a>
                    </li>
                    <li>
                        <a href="ergo_kontakt.html" class="kontakt active">
                            <img src="img/navi_button_kontakt.png" alt="kontakt" />
                        </a>
                    </li>
                    <li>
                        <a href="ergo_anfahrt.html" class="anfahrt">
                            <img src="img/navi_button_anfahrt.png" alt="anfahrt" />
                        </a>
                    </li>
                    <li>
                        <a href="ergo_galerie.html" class="galerie">
                            <img src="img/navi_button_galerie.png" alt="galerie" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="main_content">
            <div id="main_content_copy">
                <!--
                <p class="headline1_logo">
                    So können Sie uns erreichen
                </p>
                <br />
                <br />
                <p class="headline2_logo">Maria-Theres König</p>
                <br />
                <br />
                <p class="copy">Herthastraße 12
                    <br />22179 Hamburg  
                    <br />
                    <br />Tel.: 040/ 38 66 83 80
                    <br />Fax: 040/ 65 91 93 98
                    <br />
                    <br />Mail:
                    <a href="mailto:logopraxis.koenig_AT_gmail_PUNKT_com">logopraxis.koenig_AT_gmail_PUNKT_com</a>
                </p>
                -->
                <form action="kontakt.php" method="post">
                    <p>Name:<br/><input id="form_name" type="text" name="name" title="Name" size="20" /></p>
                    <p>EMail:<br/><input id="form_email" type="email" name="email" title="EMail" size="20" /></p>
                    <p>Betreff:<br/><input id="form_subject" type="text" name="subject" title="Betreff" size="20" /></p>
                    <p>Nachricht:<br/><textarea id="form_msg" name="text" title="Nachricht" rows="5"></textarea></p>
                    <p><input id="form_submit" type="submit" name="Senden" title="Senden" /></p>
                </form>
            </div>
        </div>
        <div id="sidebar">
            <div>
                <ul id="navi_sidebar">
                    <li>
                        <a href="ergo_kinder.html" class="kinder">
                            <img src="img/navi_button_kinder.png" alt="kinder" />
                        </a>
                    </li>
                    <li>
                        <a href="ergo_erwachsene.html" class="erwachsene">
                            <img src="img/navi_button_erwachsene.png" alt="erwachsene" />
                        </a>
                    </li>
                    <li>
                        <a href="ergo_logopaedie.html" class="wasistlogopaedie">
                            <img src="img/navi_button_was_ist_logopaedie.png" alt="was_ist_logopaedie" />
                        </a>
                    </li>
                    <li>
                        <a href="ergo_impressum.html" class="impressum">
                            <img src="img/navi_button_impressum.png" alt="impressum" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <p>&nbsp;</p>
    </div>

</body>

</html>
