# Laravel Comics Homepage

Questo progetto Laravel mostra una homepage in stile DC Comics, con layout personalizzato, dati dinamici caricati da file di configurazione e componenti Blade personalizzati.

## Funzionalità

- Visualizzazione dinamica di una griglia di fumetti
- Uso di componenti Blade (`x-card`, `x-button`)
- Dati caricati da `config/comics.php`
- Layout riutilizzabile con `layouts.master`
- Assets gestiti tramite Vite

## Struttura del Progetto

resources/ ├── views/ │ ├── layouts/ │ │ └── master.blade.php # Layout principale │ ├── components/ │ │ ├── card.blade.php # Componente carta fumetto │ │ └── button.blade.php # Componente bottone │ └── home.blade.php # Homepage config/ └── comics.php # Dati dei fumetti

## Note

- I dati dei fumetti vengono letti da un file di configurazione: `config/comics.php`.
- Ogni fumetto è mostrato tramite un **componente Blade personalizzato** chiamato `x-card`, che riceve lo `slot` `thumb` per l’immagine e `titolo` per il nome della serie.
- Il layout della pagina è basato su `layouts.master` e usa le sezioni `@section('titolo')` e `@section('contenuto')`.
- Le immagini statiche (icone) sono gestite con **Vite**, usando `Vite::asset()`.

## Bonus

- La **sezione "Blue Strip"** in fondo alla pagina mostra una serie di icone cliccabili, con immagine e descrizione.
- L'interfaccia è **responsive** grazie a Bootstrap, ed è strutturata in griglia con `row-cols-6` per adattarsi a più dispositivi.
- Il bottone “LOAD MORE” è un componente Blade (`x-button`), utile per modularizzare l’interfaccia e facilitare il riuso del codice.
