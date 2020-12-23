<!DOCTYPE html>

<head>
    <link href="public/styles/mystyle.css" rel="stylesheet">
    <script src="public/js/myscript.js"></script>
    <?php include('views/templates/head.php'); ?>
    <?php include('views/templates/dropdown.php'); ?>
</head>


<body>
    <div class="parent">
        <img class="image1" src="public/images/main_img1.jpg" alt="This image could not load."
            style="max-width:100%;height:auto;" />
        <img class="image2" src="public/images/main_title.png" alt="This image could not load."
            style="max-width:90%;height:auto;" />

    <h1>Introducere</h1>
    <h3>
        <p class="c2">Aceasta aplicatie web va apartine unei agentii de turism cu oferte pentru calatorii in romania.</p>
    </h3>
    <br>
    <h2>Paginile aplicatiei vor fi:
        
    </h2>
    <ul>
        <h3>
            <li>Hoteluri</li>
            <li>Pachete de calatorie</li>
            <li>Favorite</li>
            <li>Orase in Romania</li>
            <li>Schi, Surf, Pescuit si alte sporturi</li>            
            <li>Contul meu</li>
            <li>Rezervari</li>
        </h3>
    </ul>
    <h3>
        In Footer o sa am date de contact, adresa, termeni si conditii etc.
    </h3>
    
    <h2>
        Roluri:
    </h2>
    <ul>
        <li>Admin (poate sa gestioneze toate datele din aplicatie, inclusiv conturi, comenzi, postari de noutati etc.)</li>
        <li>Utilizator neautentificat (poate vizita un numar limitat de pagini web ale aplicatiei)</li>
        <li>Utilizator autentificat (poate sa rezerve vacante, sa plaseze comenzi, sa aiba liste de favorite etc.)</li>
    </ul>
    <p>
        Descrierea succinta a bazei de date:
    </br></br>
        Fiecare utilizator neautentificat isi poate crea un cont.
        Un cont are adresa, nume, email, numar de telefon si, in cazul
        unei achizitii, cont bancar. De asemenea, utilizatorul are o lista de favorite in care poate
        adauga unul sau mai multe pachete de calatorii. Odata adaugate la favorite,
        utilizatorul poate plasa si o comanda pentru a rezerva un pachet. Un tip de calatorie 
        este vacanta simpla, care se poate desfasura intr-un singur oras si 
        are inchiriata camera/camere de hotel. La randul sau, hotelul poate avea restaurant, in caz contrar se
        va atribui un restaurant din apropiere. In respetivul restaurant sunt servite mai multe tipuri de 
        mancare. In afara de vacante simple, pachetele de calatorie pot include circuite (vacante desfasurarea in mai
        multe orase, hoteluri si restaurante). Exista mai multe tipuri de pachete de  calatorii in functie 
        de motiv (bussiness, relaxare, sport/hobby-uri etc.), fiecare cu specificatiile proprii.
        Fiecare oras poate avea unul sau mai multe puncte de interes. 
        Un utilizator neconectat nu poate lasa comentarii si recenzii, doar unul conectat poate.
        
    </p>
    <br>
    
    <?php include('views/templates/footer.php'); ?>

</body>