<!DOCTYPE html>
<html lang="de"> <!- gibt der Suchmaschine an das es sich um eine deutsche Seite handelt --> 
    <head>
        <title>mareen-guske</title> <!- wird im Tap vom Webbrowser angezeigt --> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>"> <!- Einbidung des Style Sheets in die HTML Datei --> 
    </head>
    <body> <!- describes the visible page content --> 
        <h1>mareen-guske</h1> <!- you can use 6 headlines, sollte auch nur für Überschriften genutzt werden --> 
        <p>NIKON D5000</p>
        <a href="http://www.fotoblog.mareen-guske.de">Alter Fotoblog mareen-guske</a> <!- benötigt immer einen Beschreibung vom Link auf diese wird dann geklickt -->
        <p title="Irland Bray"><img src="Irland_Bray_22082013-1-ba.jpg" width="1000"  height="500"></p> <!- Grössenangaben sind immer in Pixel, Einbingund von Bildern, durch das Attribut title wurde ein tooltip hinzugefügt (Information zum Bild) -->
        <h2>Über Mareen Guske</h2>
        <p>Ich fotografiere seit 3 Jahren und versuche gerade meinen Fotoblog selber in HTML zu gestalten.</p> <!- Browsers automatically add an empty line before and after a paragraph. -->
        <p>Mein Equipment ist: <hr> eine NIKON D5000 mit einem Nikon Kit-Objektiv, einem Sigma Zoomobjektiv und einem Tamron Festbrennweitenobjektiv</p> <!- es wird eine horizontale Linie erzeugt durch das hr tag -->
        <pre>
Seit November beschäftige ich mich sehr intensiv mit dem Thema Fotografie.
Während der schönen und warmen Herbsttage habe ich sehr viele Aufnahmen draußen gemacht. 
Aktuell schaue ich sehr viele YouTube Videos.</pre> <!- The text inside the pre element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks. -->
        <adress>
Mareen Guske<br>
Radlkoferstr. 11<br>
81373 München<br>
        </adress> <!- defines contact information (author, owner), The <address> element is usually displayed in italic. Most browsers will add a line break before and after the element. -->
    </body>
</html>