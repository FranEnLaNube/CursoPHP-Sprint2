# Tema 6 - PHP Avançat 
## Descripció
Posem en pràctica alguna de les funcionalitats particulars de PHP!
## - Nivell 1
### Exercici 1
Crea un formulari HTML amb els camps que vulguis (almenys un nom o username). El formulari ha de tenir com a action un document PHP. El codi d’aquest document PHP haurà de mostrar els valors dels diferents camps del formulari mitjançant variables superglobals.
### Exercici 2
Millora l’exercici anterior fent que es guardi l’username en una variable de sessió. S’haurà de mostrar l’username per pantalla mitjançant l’accés a aquesta variable de sessió.
## - Nivell 2
### Exercici 1
Crea una classe que contingui els mètodes getFile() i getDir() que torni el path sencer i el directori del fitxer utilitzant constants màgiques.
### Exercici 2
Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct)
## - Nivell 3
### Exercici 1
Crea una classe que representi un recurs didàctic d’aquesta especialitat. Els recursos hauran de tenir un nom, un tema (que només podrà ser PHP, CSS, HTML, SQL, Laravel) un URL i un tipus de recurs (Fitxer, Article web, Vídeo). Implementa tant el tema com el tipus de recurs amb enums.
### Exercici 2
Implementa una classe Car que tingui informació sobre un cotxe (marca, matrícula, tipus de combustible, velocitat màxima). A més, implementa un Trait anomenat Turbo que tingui un mètode boost() que mostri un missatge “S’ha iniciat el turbo”. Usa aquest mètode des de la classe Car.