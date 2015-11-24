<!DOCTYPE html>
<html lang="de"> <!- gibt der Suchmaschine an das es sich um eine deutsche Seite handelt --> 
    <head>
        <title>mareen-guske</title> <!- wird im Tap vom Webbrowser angezeigt --> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>"> <!- Einbidung des Style Sheets in die HTML Datei --> 
    </head>
    <body> <!- describes the visible page content --> 
        <h1>mareen-guske</h1> <!- you can use 6 headlines, sollte auch nur für Überschriften genutzt werden --> 
        <h2>NIKON D5000</h2>
        <a href="http://www.fotoblog.mareen-guske.de" target="_blank">Alter Fotoblog mareen-guske</a> <!- benötigt immer einen Beschreibung/Symbol (visueller Teil) vom Link auf diese wird dann geklickt -->
        <p title="Mareen mit Fotoaparat"><img src="Olympus-Elisa-10092015-26.jpg" width="1000"  height="500"></p> <!- Grössenangaben sind immer in Pixel, Einbingund von Bildern, durch das Attribut title wurde ein tooltip hinzugefügt (Information zum Bild) -->
        <h3>Über Mareen Guske</h3>
        <p id="p01">Ich fotografiere seit 3 Jahren und versuche gerade meinen Fotoblog selber in HTML zu gestalten.</p> <!- Browsers automatically add an empty line before and after a paragraph. / Use id to address single elements -->
        <p>Mein Equipment ist: <hr> eine NIKON D5000 mit einem Nikon Kit-Objektiv, einem Sigma Zoomobjektiv und einem Tamron Festbrennweitenobjektiv</p> <!- es wird eine horizontale Linie erzeugt durch das hr tag -->
        <pre>
Seit November beschäftige ich mich sehr intensiv mit dem Thema Fotografie.
Während der schönen und warmen Herbsttage habe ich sehr viele Aufnahmen draußen gemacht. 
Aktuell schaue ich sehr viele YouTube Videos.</pre> <!- The text inside the pre element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks. -->
        <p class="error">Seit September 2015 besuche ich einen Fotokurs bei dem Fotografen Werner Bauer in Dachau. Die Hausaufgaben von dem Kurs stellen mich immer wieder vo neue Herausforderungen.</p>
        <p class="error">Durch die Hausaufgaben wird meine Kreativität aktiviert, die bis jetzt leider sehr wenig zum tragen kam.</p> <!- Use class to address groups of elements. -->
        <p>Aktuell schaue ich sehr viele Videos auf YouTube. Besonders die ganzen Videos von <a href="https://www.youtube.com/user/jaworskyjpictures" target="_blank"</a>Benjamin Jaworskyj</a> Fotografie.</p> <!- das target Attribute öffnet den link in einem neuem Tab oder Browser Fenster -->
        </p><adress>
Mareen Guske<br>
Radlkoferstr. 11<br>
81373 München<br>
        </adress> <!- defines contact information (author, owner), The adress element is usually displayed in italic. Most browsers will add a line break before and after the element. -->
        <p>Klicke auf das Bild und Du gelangst zum Fotoblog von Mareen Guske.</p> 
        <a href="http://www.fotoblog.mareen-guske.de" target="_blank">
            <img src="fotografierend_0005.gif" alt="Blog Mareen Guske">
        </a>
    </body>
</html>