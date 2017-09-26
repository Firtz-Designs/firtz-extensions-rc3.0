## Fyyd

Fyyd ist eine Podcast Directory. Damit du deinen Podcast dort verändern kannst muss dieser verifiziert werden.


### Fyyd: verify

**1.) Das fyyd Claim:**

Melde dich bei <a target="_blank" href="https://fyyd.de/login">fyyd.de</a> an oder erstelle dir
<a target="_blank" href="https://fyyd.de/user-new">hier</a> einen neuen Account. Suche nach deinem Podcast oder
<a target="_blank" href="https://fyyd.de/add-feed">reiche den Feed hier ein</a>. Ist dein Podcast angenommen,
so findest Du auf Seite den Link "(C) Claim". Fahre fort um deine ID zu sichern.

**2.) Das fyyd Claim:**

Trage deine fyydID in der Datei <code>ext/fyyd/ext.cfg</code> unter <code>vars</code> ein:
<pre>
vars:
#: gebe hier den Claim von fyyd ein
verify 123456789012345678901234567890123456789
</pre>


**XML Beispiel:**

In jedem deiner Feeds wird nun der XML Tag eingetragen

<pre>
&lt;!-- fyyd verify -->
&lt;fyyd:verify xmlns:fyyd="https://fyyd.de/fyyd-ns/">fyydClaim&lt;/fyyd:verify>
</pre>





### Links:

- fyyd: [fyyd.de (DE)](https://fyyd.de/fragen)
- Github: [firtz extension: fyyd](https://github.com/Firtz-Designs/firtz-extensions-rc3.0/tree/master/sources/fyyd)