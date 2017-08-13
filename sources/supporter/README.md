## About Meta Extension

Diese Erweiterung ermöglicht weitere Angaben im Feed und zeigt Projekt Banner in der
Sidebar deines Podcasts an.


### Sidebar Projekt Banner (Unterstützer)

Um einen Projekt Banner für deine Sidebar nutzen zu können, gehe in deine `feed.cfg`
und trage die gewünschten Projekte dort "kommasepariert" wie folgt ein:

<pre>
supporter:
ultraschall, podlove, studio-link</pre>

**Folgende Projekte sind in dieser Version wählbar:**

- ultraschall
- studio-link
- podlove


### PSPB: Projekt Banner Support (XML Head)

Je nach Auswahl der in der `feed.cfg` getroffenen Supporter Banner werden diese,
ebenfalls im Feed dargestellt. So lassen sich auch Informationen zu den von dir gewählten
Projekte als Supporter im Feed auslesen.

**XML Beispiel:**

<pre>
&lt;!-- stecify PSPB: project banner support -->
&lt;pspb:projects version="1.0" xmlns:pspb="http://www.podcast-society.org/pss/PSPB/specification">
   &lt;pspb:project rel="http://ultraschall.fm" title="Ultraschall"/>
   &lt;pspb:project rel="https://podlove.org" title="Podlove"/>
   &lt;pspb:project rel="https://studio-link.de" title="Studio-Link"/>
&lt;/pspb:projects>
</pre>


### Links:


- PSPB: [PSPB Specifikation (DE)](https://github.com/Podcast-Society/ps-specifications/blob/master/PSPB-project-banner.md)
- Github: [firtz extension: listdl](https://github.com/Firtz-Designs/QuorX-III)