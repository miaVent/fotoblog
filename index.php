<!DOCTYPE html>
<html lang="de"> <!- gibt der Suchmaschine an das es sich um eine deutsche Seite handelt --> 
    <head>
        <title>mareen-guske</title> <!- wird im Tap vom Webbrowser angezeigt --> 
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>"> <!- Einbidung des Style Sheets in die HTML Datei --> 
    </head>
    <body> <!- describes the visible page content --> 
        <h5>Horizontale Liste inkl. Links</h5>
        <ul id="menu">
            <li><a href="http://fotoblog.mareen-guske.de">Alter Fotoblog</a></li>
            <li><a href="http://www.fotocommunity.de/fotografin/mareen-guske/2193252">Fotocommunity</a></li>
            <li><a href="https://500px.com/mareenguske">500px</a></li>
        </ul>
        <h1>mareen-guske</h1> <!- you can use 6 headlines, sollte auch nur für Überschriften genutzt werden --> 
        <h2>NIKON D5000</h2>
        <a href="http://www.fotoblog.mareen-guske.de" target="_blank">Alter Fotoblog mareen-guske</a> <!- benötigt immer einen Beschreibung/Symbol (visueller Teil) vom Link auf diese wird dann geklickt -->
        <p title="Mareen mit Fotoaparat"><img src="<?php echo get_template_directory_uri() ?>/images/Olympus-Elisa-10092015-26.jpg" width="240"  height="180" border="0"></p> <!- Grössenangaben sind immer in Pixel, Einbingund von Bildern, durch das Attribut title wurde ein tooltip hinzugefügt (Information zum Bild) -->
        <h3>Über Mareen Guske</h3>
        <p id="p01">Ich fotografiere seit 3 Jahren und versuche gerade meinen Fotoblog selber in HTML zu gestalten.</p> <!- Browsers automatically add an empty line before and after a paragraph. / Use id to address single elements -->
        <p><a href="#jump">Nach unten</a></p>
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
            <img src="<?php echo get_template_directory_uri() ?>/images/fotografierend_0005.jpg" alt="Fotoblog Mareen Guske"
            style="width:74px;height:57px;border:0;"> <!- bei einem Foto immer die Größenangaben mit angeben --> 
        </a>
        <p>Bild vom Fotoblog Mareen Guske einfügen (von einer anderen Webseite).</p>
        <img src="http://fotoblog.mareen-guske.de/wp-content/uploads/2015/11/Ammersee-10082015-86-ba-2.jpg" alt"Ammersee"
        style="width:301,25px;height:200px;border:0"> <! border hält den IE davon ab automatisch einen Rand um das Bild zu setzen -->
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. </p>
        <p>Anzeigen eines GIF-Bildes.</p>
        <img src="<?php echo get_template_directory_uri() ?>/images/fotokameras-0002.gif" alt"GIF Kamera"
        style="width:66px;height:66px;border:0;">
        <p>Was brauche ich für ein Fotoshooting?</p>
        <ul>
            <li>Spiegelreflexkamera</li>
            <li>Objektiv / Objektive</li>
            <li>Stativ</li>
            <li>Ersatzakku</li>
            <li>Fernauslöser</li>
        </ul>
        <p>Worüber solle ich mir im Vorfeld für ein Shooting Gedanken machen?</p>
        <ol>
            <li>Model</li>
            <li>Model Release Vertrag</li>
            <li>Indoor / Outdoor</li>
            <li>Studio</li>
            <li>Thema</li>
            <li>Klamotten Model</li>
            <li>Schminke Model</li>
            <li>Visagistin ja/nein</li>
        </ol>
        <div id="jump"></div>
    </body>
</html>