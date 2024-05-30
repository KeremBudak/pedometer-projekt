die aufgaben stellung von meinem prof war wie folgt 

Pedometer
Eine Aufgabe zur objektorientierten Programmierung, die ein paar Basics abdeckt.
Abgabe:
In Moodle per GitHub-Link zu dem Repository. In dem Repo soll ein Bild von dem
Klassendiagramm, ein Text-File mit dem Pseudo-Code sowie das Programm
enthalten sein.
Bitte erstellt zuerst ein Klassendiagramm, danach den Programmablauf als PseudoCode und programmiert erst im Anschluss. Die Realisierung kann mit PHP, Python
oder Java erfolgen.
Was wird benötigt?
Klasse, Instanzvariablen (auch bekannt als Membervariablen), Methoden
Details zur Aufgabe:
Mobile Schrittzähler-Apps sind spätestens seit dem Erscheinen von Smartwatches
durchaus populär. Das Grundgerüst für eine solche App soll in dieser Aufgabe
programmiert werden. Das Programm soll jeden Schritt zählen und anschließend die
gezählten Schritte mit dem Datum ausgeben. Zwar können wir am Computer die
gegangenen Schritte lediglich simulieren, aber praktisch lässt sich das Grundgerüst
auch auf eine mobile App mit echter Schrittzählung übertragen.
Aufgabe:
Schreibe eine Klasse mit dem Namen Pedometer, dessen Konstruktor ein Datum in
Form eines Strings entgegennehmen soll. Schreibe in der Klasse die Methode
incrementSteps(), die den Schrittzähler um einen Schritt erhöhen soll. Die
Methode toString() soll anschließend eine Ausgabe in dieser Form erzeugen:
Am <Datum> bin ich <Schrittzahl> Schritte gegangen.
Die umklammerten Worte sollen Platzhalter für die entsprechenden Werte sein.
Schreibe anschließend ein Testprogramm außerhalb der Klasse, welches den
Schrittzähler testet und eine bestimmte Anzahl an Schritten simuliert.
Tipp:
Mit jedem Aufruf der Schritterhöhung muss um eins inkrementiert werden.
Es ist kein Unit-Test gemeint. Instanziiere ein Objekt, rufe Methoden auf.
Testfälle:
■ Datum: 11.11.2011 Anzahl der Schritte: 1111 Ausgabe: Am 11.11.2011 bin ich
1111 Schritte gegangen.
■ Datum: 1.9.2017 Anzahl der Schritte: 10000 Ausgabe: Am 1.9.2017 bin ich 10000
Schritte gegangen.