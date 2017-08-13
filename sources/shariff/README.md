### About Shariff Extension

Diese Erweiterung ermöglicht dir die Anzeige von Sharebuttons zu Twitter, Facebook und Google+. <br>
<i uk-icon="icon: info"></i> ACHTUNG: Du benötigst hierzu Angaben zum Datenschutz in deinem Impressum!

##### Konfiguration:

Um die Position der Share-Buttons in der Website zu ändern, gehe zur Konfigurationsdatei unter:
`ext/shariff/ext.cfg`.

**Beispiel: Position**

Es gibt drei Einstellungsmodies:

- `header`  zeigt die Share-Buttons im Kopfbereich der Episode an.
- `player`  zeigt die Share-Buttons über dem Webplayer in der Episode an.
- `footer`  zeigt die Share-Buttons am Ende der Episode an.

Trage dazu den gewünschten Modi nach dem *`hook`* ein. Achte auf die Leerzeile dazwischen!

<pre>hook footer</pre>


**Beispiel: Style**

Es gibt drei Möglichkeiten deine Buttons in Ihrer Ansicht zu verändern:

- `white` zeigt die Share-Buttons alle als weiße Buttons an.
- `color` zeigt die Share-Buttons farbig nach Ihrer Netzwerkfarbe an.
- `grey`  zeigt die Share-Buttons alle als braue Buttons an.

Trage dazu den gewünschten Style nach dem *`style`* ein. Achte auf die Leerzeile dazwischen!

<pre>style white</pre>



##### Links:

- Website: [ct.de/-2467514](https://www.heise.de/ct/artikel/Shariff-Social-Media-Buttons-mit-Datenschutz-2467514.html)
- Github: [firtz extension: shariff](https://github.com/Firtz-Designs/QuorX-III)