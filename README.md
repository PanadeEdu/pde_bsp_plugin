# PanadeEdu Beispiel Extension
### Tutorial Video
https://www.youtube.com/watch?v=R257s37plKI

### Beschreibung
Diese Extension wurde im Tutorial mit Hilfe des Extensionmanagers erstellt.
Sie Beinhaltet einen einfachen Controller mit einer Action der den gegebenen Inhalt an den View,
übergibt. Der View ist dabei ein Fluid Template, welches die Werte lediglich anzeigt.

Dabei zeigt die Extension ein einfaches Plugin mit dem man beliebigen 
Content als eigenes kleines Element rendern kann.

### Installation
1. Extension Verzeichniss in "typo3conf/ext/" ablegen.
2. In "TYPO3 Backend -> Extension Manager" die Extension Installieren. 
3. Im Root Template der Seite, das Static Template einbinden. Root Template -> Edit -> Include
4. Plugin auf gewünschter Seite einbinden.

### Erweiterungs Vorschlag
- Ihr könnt versuchen in die Action euren eigenen Code zu schreiben und mehr an den View zu übergeben.
- Das verwendete Template könnt ihr nach belieben erweitern oder im TypoScript sogar CSS und JavaScript nachladen. (siehe Snippet "include Files")
