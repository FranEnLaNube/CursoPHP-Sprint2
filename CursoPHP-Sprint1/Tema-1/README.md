# Entrega d'exercici: HTML i CSS (Tema 1)
## Descripció
En aquesta pràctica hauràs de fer un Layout que ha de funcionar tant en escriptori, com mòbil i tauleta.
Tingues en compte les següents consideracions.
#### Són errors habituals en els lliuraments:
- En general, mai li posem height a una capa, sinó que deixem que la capa s'adapti al seu contingut (si la capa no té contingut, li pots posar un height).
- La pàgina no hauria de tenir barra de scroll horitzontal (si et passa, hauràs d'esbrinar inspeccionant la pàgina quin bloc és més ample que la pantalla del navegador).
- Dins d'un div sol haver-hi altres divs. Els divs tenen display:block per defecte. Això fa que es vagin col·locant de manera vertical. Per tant, sovint no és necessari especificar els següents estils per a un element per ser una cosa redundant:
.element{ display:flex; flex-direction:column }
- En un div, per defecte l'ample és de la totalitat de la capa que embolica, així que normalment no serà necessari especificar width:100%
#### Lliurament per GitHub
- Crea un únic repositori de GitHub per als tres nivells, els podràs separar en carpetes.
Per exemple: nivell-1, nivell-2 i nivell-3.
- En els dos primers sprints hauràs de pujar el codi a GitHub perquè pugui veure'l el teu mentor/a.
A partir de l'sprint 3 hauràs de lliurar-lo via pull request, tal com es fa en una empresa.
-  Si no tens clar del tot com pujar el teu projecte a git, al final d'aquest enunciat hi ha un "Annex I: Pujar el teu codi a git" amb les passes que has de seguir.
---
### Objectius
- Maquetació per caixes.
- Distribució per eixos Flex.
- Diferenciar entre contenidor i item.
- Ajustar maquetació a tamany pantalla.
#### Durada:
3-5 dies
#### Lliurament:
URL del repositori