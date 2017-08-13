## About Media License Extension

Diese Erweiterung ermöglicht weitere Angaben im Feed zu den verwendeten Media
(Audio Intro & Outro) und Bild (Banner & Poster) Lizenzen.


### PSML: podcast media license (XML Item)

Du kannst in jeder Episode oder einmal über die Angaben in der `feed.cfg`,
Informationen zu den Bilder- und Sound-Lizenzen machen. Sind diese festgelegt,
werden sie auch im Feed dargestellt und sind für jeden klar ersichtlich.

**XML Beispiel:**

<pre>
&lt;!-- specify PSML: podcast media license -->
&lt;psml:license version="1.0" xmlns:psml="http://www.podcast-society.org/pss/PSML/specification">
    &lt;psml:sound mode="intro"
                title="Flower 1"
                producer="John Dow"
                producerUrl="http://www.john-dow.org"
                license="CC by SA"
                licenseUrl="https://creativecommons.org/licenses/by/3.0/de/"/>
    &lt;psml:sound mode="outro"
                title="Flower 2"
                producer="John Dow"
                producerUrl="http://www.john-dow.org"
                license="CC by SA"
                licenseUrl="https://creativecommons.org/licenses/by/3.0/de/"/>
    &lt;psml:image mode="banner"
                title="Banner for Episode 004"
                type="image/"
                href="http://democast.tld/feeds/demo/004."
                creator="pexels.com"
                creatorUrl="https://www.pexels.com/de/foto/apple-laptop-macbook-pro-notizbuch-1784/"
                license="CC0"
                licenseUrl="https://www.pexels.com/de/foto/apple-laptop-macbook-pro-notizbuch-1784/"/>
    &lt;psml:image mode="poster"
                title="http://democast.tld/feeds/demo/004-cover.png"
                type="image/png"
                href="http://democast.tld/feeds/demo/004-cover.png"
                creator="John Dow"
                creatorUrl="http://democast.tld"
                license="Copyright Demo 1 - 004"
                licenseUrl="http://democast.tld/demo/show/004"/>
&lt;/psml:license>
</pre>



#### 1.) Beispiel für ein Podcast Intro: *(feed.cfg)/&lt;Episode>.epi)*

Der Eintrag in der `feed.cfg` oder in einer Episode `*.epi`
muss zwingend wie folgt aufgebaut werden:

| 1 | 2 | 3 | 4 | 5 |
|---|---|---|---|---|
| Intro Title, | Creator, | Link zum Creator, | Lizenz, | Link zur Lizenz oder Copyright Hinweis |
| <small>Flower Intro, </small> | <small>John Dow, </small> | <small>http://www.john-dow.tld, </small> | <small>CC-BY, </small> | <small>https://creativecommons.org/licenses/by/3.0/de/</small> |


<pre>
intro:
Flower Intro, John Dow, http://www.john-dow.tld, CC-by-SA, https://creativecommons.org/licenses/by/3.0/de/
</pre>

<i uk-icon="icon: info"></i> INFO: Es ist auf das "Komma mit Leerzeichen" bei manuellen
Eintragen zu achten! Wird ein Intro in einer Episode eingetragen, so wird ein bestehender Eintrag
in der `feed.cfg` überschrieben.




#### 2.) Beispiel für ein Podcast Outro: *(feed.cfg/&lt;Episode>.epi)*

Der Eintrag in der `feed.cfg` oder in einer Episode `*.epi`
muss zwingend wie folgt aufgebaut werden:

| 1 | 2 | 3 | 4 | 5 |
|---|---|---|---|---|
| Outro Title, | Creator, | Link zum Creator, | Lizenz, | Link zur Lizenz oder Copyright Hinweis |
| <small>Flower Ending, </small> | <small>John Dow, </small> | <small>http://www.john-dow.tld, </small> | <small>CC-BY, </small> | <small>https://creativecommons.org/licenses/by/3.0/de/</small> |


<pre>
outro:
Flower Ending, John Dow, http://www.john-dow.tld, CC-by-SA, https://creativecommons.org/licenses/by/3.0/de/
</pre>

<i uk-icon="icon: info"></i> INFO: Es ist auf das "Komma mit Leerzeichen" bei manuellen
Eintragen zu achten! Wird ein Intro in einer Episode eingetragen, so wird ein bestehender Eintrag
in der `feed.cfg` überschrieben.





#### 3.) Beispiel für eine Banner Lizenz: *(&lt;Episode>.epi)*

<i uk-icon="icon: info"></i> INFO: Möchtest du ein Banner als Bild für jede deiner Podcast Episoden vergeben,
so muss die Erweiterung "banner" in deinem firtz hinterlegt sein. Zum aktivieren der
Banner müssen vorab zwei Eintrag in der `template.cfg` geändert werden!

**Aktivieren der Banner für alle Episoden:**

Gehe nach hochladen der "banner" Erweiterung unter: `/src/templates/default/template.cfg`
um weitere Anpassungen vornehmen zu können.

Zum aktivieren der Erweiterung, ändere den Eintrag: `epibanner off` auf `epibanner on`<br>
Vergebe nun einen festen Dateitypen *(png, jpeg, jpg, gif)* der für alle Banner gelten soll:
`epibannertype jpg`


**Lizensangaben zum Banner in der Episode festlegen:**

Um die Lizenzangaben für einen Banner festzulegen, gehe in die Episodendatei `*.epi` und
trage folgende Informationen ein:

<pre>
bannerLicense:   //gibt die Lizenz des Banners an
CC0

bannerPage:     //gibt den Namen des Herstellers / Website an.
Pexels

bannerURL:      //gibt die exakte URL zum Bild an.
https://www.pexels.com/de/foto/apple-laptop-macbook-pro-notizbuch-1784/
</pre>



### Links:

- PSML: [PSML Specifikation (DE)](https://github.com/Podcast-Society/ps-specifications/blob/master/PSML-media-license.md)
- Github: [firtz extension: listdl](https://github.com/Firtz-Designs/QuorX-III)