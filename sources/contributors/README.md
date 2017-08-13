### About Contributors Extension

Diese Extension erweitert den Feed und die Website um die "Mitwirkenden" (contributors) einer Episode.
Sie können als Type "Team" oder "Gast" definiert werden und werden so unterschiedlich
auf der Website und im Feed behandelt.

##### Konfiguration:

Um eine neue Person anzulegen, erstelle eine neue Datei mit Namen des Contributors unter:
`ext/contributors/data/<john.cfg>`

*type:*

- gebe `team` ein, wenn diese Person alleine oder mit mehreren Personen gemeinsam podcastet.
- gebe `guest` ein, wenn es sich bei der Person um einen Gast handelt.

*name:*

- gebe den Namen der Person an.

*description:*

- gebe ein oder zwei beschreibende Wörter zur Person an.

*image:*

- gebe den Link zu einer öffentlichen Website (URL) zum passenden Avatar Bild ein.

*twitter: (optional)*

- gebe den @username der Person an.

*facebook: (optional)*

- gebe den Benutzernamen zu Facebook an.

*github: (optional)*

- gebe den Benutzernamen auf Github an.

*gplus: (optional)*

- gebe den Namen bzw Nummer zu Google+ an.

*xing: (optional)*

- gebe den Benutzernamen auf Xing an.

*url:*

- gebe eine URL zur Website der Person an.

##### Beispiel: <john.cfg>

<pre>
type:
team

name:
John Dow

description:
Podcaster

image:
https://avatars2.githubusercontent.com/u/3582086?v=4&s=460

twitter:
john_dow

facebook:
john.dow

github:
JohnDow

gplus:
123456789012345678900

xing:
John_Dow125

url:
https://www.john-dow.tld
</pre>

##### Verwendung:

Um Gäste in eine Episode einzubinden, gibst Du diese unter `guest:` in der `*.epi` wie folgt an:
<pre>
guest:
john hubert
</pre>

Um alle Mitwirkenden einer Episode (auch Gäste!) einzubinden, gibst Du diese in der `*.epi`
unter `contributors:` wie folgt an:
<pre>
contributors:
mccouman eazy john hubert
</pre>

##### Links:

- Github: [firtz extension: contributors](https://github.com/Firtz-Designs/QuorX-III)