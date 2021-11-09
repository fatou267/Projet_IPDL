
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../public/css/register.css" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="/../../public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/../../public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/../../public/images/favicon/">
    <link rel="manifest" href="/site.webmanifest">
    <title>Inscription</title>
</head>

<body>
   

    <h1>Demande d'admission en Doctorat l'EDMI</h1>

    <div class="form">
        <small class="mandatory">* Champs obligatoires</small>
        <form action="register" method="post">
            <fieldset>
                <legend><span class="number">1</span>Identification du candidat</legend>
                <div>
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname" id="lastname"  required><br>
                </div>
                <div>
                    <label for="firstname">Prénoms</label>
                    <input type="text" name="firstname" id="firstname" required><br>
                </div>
                <div>
                    <label for="wifename">Nom d'épouse</label>
                    <input type="text" name="identification[wifename]" id="wifename" required><br>
                </div>
                <div>
                    <label for="address">Adresse domicile</label>
                    <input type="text" name="address" id="address" required><br>
                </div>
                <div>
                    <label for="phoneNumber">Téléphone</label>
                    <input type="text" name="phoneNumber" id="phoneNumber"  required><br>
                </div>
                <div>
                    <label for="email">Adresse email</label>
                    <input type="text" name="email" id="email"  required><br>
                </div>

            </fieldset>

            <fieldset>
                <legend><span class="number">2</span>Cursus universitaire du candidat</legend>
                <label for="diplomaTitle">Diplôme d'accès</label>
                <input type="text" name="cursus[diplomaTitle]" id="diplomaTitle" required><br>
                <label for="speciality">Spécialité</label>
                <input type="text" name="cursus[speciality]" id="speciality" required><br>
                <label for="diplomaInstitution">Université ayant délivré le diplôme</label>
                <input type="text" name="cursus[diplomaInstitution]" id="diplomaInstitution" required><br>
                <label for="diplomaCountry">Pays</label>
                <select name="cursus[diplomaCountry]" required id="diplomaCountry">
                    <option value="afghanistan">Afghanistan</option>
                    <option value="afrique-du-sud">Afrique du Sud</option>
                    <option value="albanie">Albanie</option>
                    <option value="algerie">Algérie</option>
                    <option value="allemagne">Allemagne</option>
                    <option value="ancienne-republique-yougoslave-de-macedoine">Ancienne République yougoslave de
                        Macédoine
                    </option>
                    <option value="andorre">Andorre</option>
                    <option value="angola">Angola</option>
                    <option value="anguilla">Anguilla</option>
                    <option value="antarctique">Antarctique</option>
                    <option value="antigua-et-barbuda">Antigua-et-Barbuda</option>
                    <option value="antilles-neerlandaises">Antilles néerlandaises</option>
                    <option value="arabie-saoudite">Arabie saoudite</option>
                    <option value="argentine">Argentine</option>
                    <option value="armenie">Arménie</option>
                    <option value="aruba">Aruba</option>
                    <option value="australie">Australie</option>
                    <option value="autriche">Autriche</option>
                    <option value="azerbaidjan">Azerbaïdjan</option>
                    <option value="bahamas">Bahamas</option>
                    <option value="bahrein">Bahreïn</option>
                    <option value="bangladesh">Bangladesh</option>
                    <option value="barbade">Barbade</option>
                    <option value="belgique">Belgique</option>
                    <option value="belize">Belize</option>
                    <option value="benin">Bénin</option>
                    <option value="bermudes">Bermudes</option>
                    <option value="bhoutan">Bhoutan</option>
                    <option value="bielorussie">Biélorussie</option>
                    <option value="bolivie">Bolivie</option>
                    <option value="bosnie-et-herzegovine">Bosnie-et-Herzégovine</option>
                    <option value="botswana">Botswana</option>
                    <option value="bresil">Brésil</option>
                    <option value="brunei-darussalam">Brunei Darussalam</option>
                    <option value="bulgarie">Bulgarie</option>
                    <option value="burkina-faso">Burkina Faso</option>
                    <option value="burundi">Burundi</option>
                    <option value="cambodge">Cambodge</option>
                    <option value="cameroun">Cameroun</option>
                    <option value="canada">Canada</option>
                    <option value="cap-vert">Cap-Vert</option>
                    <option value="chili">Chili</option>
                    <option value="chine">Chine</option>
                    <option value="chypre">Chypre</option>
                    <option value="colombie">Colombie</option>
                    <option value="comores">Comores</option>
                    <option value="congo">Congo</option>
                    <option value="costa-rica">Costa Rica</option>
                    <option value="cote-d-ivoire">Côte d'Ivoire</option>
                    <option value="croatie">Croatie</option>
                    <option value="cuba">Cuba</option>
                    <option value="danemark">Danemark</option>
                    <option value="djibouti">Djibouti</option>
                    <option value="dominique">Dominique</option>
                    <option value="egypte">Égypte</option>
                    <option value="el-salvador">El Salvador</option>
                    <option value="emirats-arabes-unis">Émirats arabes unis</option>
                    <option value="equateur">Équateur</option>
                    <option value="erythree">Érythrée</option>
                    <option value="espagne">Espagne</option>
                    <option value="estonie">Estonie</option>
                    <option value="etats-federes-de-micronesie">États fédérés de Micronésie</option>
                    <option value="etats-unis">États-Unis</option>
                    <option value="ethiopie">Éthiopie</option>
                    <option value="fidji">Fidji</option>
                    <option value="finlande">Finlande</option>
                    <option value="france">France</option>
                    <option value="gabon">Gabon</option>
                    <option value="gambie">Gambie</option>
                    <option value="georgie">Géorgie</option>
                    <option value="georgie-du-sud-et-les-iles-sandwich-du-sud">Géorgie du Sud-et-les Îles Sandwich du
                        Sud
                    </option>
                    <option value="ghana">Ghana</option>
                    <option value="gibraltar">Gibraltar</option>
                    <option value="grece">Grèce</option>
                    <option value="grenade">Grenade</option>
                    <option value="groenland">Groenland</option>
                    <option value="guadeloupe">Guadeloupe</option>
                    <option value="guam">Guam</option>
                    <option value="guatemala">Guatemala</option>
                    <option value="guinee">Guinée</option>
                    <option value="guinee-equatoriale">Guinée équatoriale</option>
                    <option value="guinee-bissau">Guinée-Bissau</option>
                    <option value="guyane">Guyane</option>
                    <option value="guyane-francaise">Guyane française</option>
                    <option value="haiti">Haïti</option>
                    <option value="honduras">Honduras</option>
                    <option value="hong-kong">Hong Kong</option>
                    <option value="hongrie">Hongrie</option>
                    <option value="ile-bouvet">Ile Bouvet</option>
                    <option value="ile-christmas">Ile Christmas</option>
                    <option value="ile-norfolk">Île Norfolk</option>
                    <option value="ile-pitcairn">Île Pitcairn</option>
                    <option value="iles-aland">Iles Aland</option>
                    <option value="iles-cayman">Iles Cayman</option>
                    <option value="iles-cocos-keeling">Iles Cocos (Keeling)</option>
                    <option value="iles-cook">Iles Cook</option>
                    <option value="iles-feroe">Îles Féroé</option>
                    <option value="iles-heard-et-macdonald">Îles Heard-et-MacDonald</option>
                    <option value="iles-malouines">Îles Malouines</option>
                    <option value="iles-mariannes-du-nord">Îles Mariannes du Nord</option>
                    <option value="iles-marshall">Îles Marshall</option>
                    <option value="iles-mineures-eloignees-des-etats-unis">Îles mineures éloignées des États-Unis
                    </option>
                    <option value="iles-salomon">Îles Salomon</option>
                    <option value="iles-turques-et-caiques">Îles Turques-et-Caïques</option>
                    <option value="iles-vierges-britanniques">Îles Vierges britanniques</option>
                    <option value="iles-vierges-des-etats-unis">Îles Vierges des États-Unis</option>
                    <option value="inde">Inde</option>
                    <option value="indonesie">Indonésie</option>
                    <option value="iraq">Iraq</option>
                    <option value="irlande">Irlande</option>
                    <option value="islande">Islande</option>
                    <option value="israel">Israël</option>
                    <option value="italie">Italie</option>
                    <option value="jamahiriya-arabe-libyenne">Jamahiriya arabe libyenne</option>
                    <option value="jamaique">Jamaïque</option>
                    <option value="japon">Japon</option>
                    <option value="jordanie">Jordanie</option>
                    <option value="kazakhstan">Kazakhstan</option>
                    <option value="kenya">Kenya</option>
                    <option value="kirghizistan">Kirghizistan</option>
                    <option value="kiribati">Kiribati</option>
                    <option value="koweit">Koweït</option>
                    <option value="lesotho">Lesotho</option>
                    <option value="lettonie">Lettonie</option>
                    <option value="liban">Liban</option>
                    <option value="liberia">Libéria</option>
                    <option value="liechtenstein">Liechtenstein</option>
                    <option value="lituanie">Lituanie</option>
                    <option value="luxembourg">Luxembourg</option>
                    <option value="macao">Macao</option>
                    <option value="madagascar">Madagascar</option>
                    <option value="malaisie">Malaisie</option>
                    <option value="malawi">Malawi</option>
                    <option value="maldives">Maldives</option>
                    <option value="mali">Mali</option>
                    <option value="malte">Malte</option>
                    <option value="maroc">Maroc</option>
                    <option value="martinique">Martinique</option>
                    <option value="maurice">Maurice</option>
                    <option value="mauritanie">Mauritanie</option>
                    <option value="mayotte">Mayotte</option>
                    <option value="mexique">Mexique</option>
                    <option value="monaco">Monaco</option>
                    <option value="mongolie">Mongolie</option>
                    <option value="montserrat">Montserrat</option>
                    <option value="mozambique">Mozambique</option>
                    <option value="myanmar">Myanmar</option>
                    <option value="namibie">Namibie</option>
                    <option value="nauru">Nauru</option>
                    <option value="nepal">Népal</option>
                    <option value="nicaragua">Nicaragua</option>
                    <option value="niger">Niger</option>
                    <option value="nigeria">Nigéria</option>
                    <option value="niue">Niué</option>
                    <option value="norvege">Norvège</option>
                    <option value="nouvelle-caledonie">Nouvelle-Calédonie</option>
                    <option value="nouvelle-zelande">Nouvelle-Zélande</option>
                    <option value="oman">Oman</option>
                    <option value="ouganda">Ouganda</option>
                    <option value="ouzbekistan">Ouzbékistan</option>
                    <option value="pakistan">Pakistan</option>
                    <option value="palaos">Palaos</option>
                    <option value="panama">Panama</option>
                    <option value="papouasie-nouvelle-guinee">Papouasie-Nouvelle-Guinée</option>
                    <option value="paraguay">Paraguay</option>
                    <option value="pays-bas">Pays-Bas</option>
                    <option value="perou">Pérou</option>
                    <option value="philippines">Philippines</option>
                    <option value="pologne">Pologne</option>
                    <option value="polynesie-francaise">Polynésie française</option>
                    <option value="porto-rico">Porto Rico</option>
                    <option value="portugal">Portugal</option>
                    <option value="province-chinoise-de-taiwan">Province chinoise de Taiwan</option>
                    <option value="qatar">Qatar</option>
                    <option value="republique-arabe-syrienne">République arabe syrienne</option>
                    <option value="republique-centrafricaine">République centrafricaine</option>
                    <option value="republique-de-coree">République de Corée</option>
                    <option value="republique-de-moldavie">République de Moldavie</option>
                    <option value="republique-democratique-du-congo">République démocratique du Congo</option>
                    <option value="republique-dominicaine">République dominicaine</option>
                    <option value="republique-islamique-d-iran">République islamique d'Iran</option>
                    <option value="republique-populaire-democratique-de-coree">République populaire démocratique de
                        Corée
                    </option>
                    <option value="republique-populaire-du-laos">République Populaire du Laos</option>
                    <option value="republique-tcheque">République tchèque</option>
                    <option value="republique-unie-de-tanzanie">République-Unie de Tanzanie</option>
                    <option value="reunion">Réunion</option>
                    <option value="roumanie">Roumanie</option>
                    <option value="royaume-uni">Royaume-Uni</option>
                    <option value="russie">Russie</option>
                    <option value="rwanda">Rwanda</option>
                    <option value="sahara-occidental">Sahara occidental</option>
                    <option value="saint-christophe-et-nieves">Saint-Christophe-et-Niévès</option>
                    <option value="saint-marin">Saint-Marin</option>
                    <option value="saint-pierre-et-miquelon">Saint-Pierre-et-Miquelon</option>
                    <option value="saint-siege-cite-du-vatican">Saint-Siège (Cité du Vatican)</option>
                    <option value="saint-vincent-et-les-grenadines">Saint-Vincent-et-les Grenadines</option>
                    <option value="sainte-helene">Sainte-Hélène</option>
                    <option value="sainte-lucie">Sainte-Lucie</option>
                    <option value="samoa">Samoa</option>
                    <option value="samoa-americaines">Samoa américaines</option>
                    <option value="sao-tome-et-principe">Sao Tomé-et-Principe</option>
                    <option value="senegal">Sénégal</option>
                    <option value="serbie-et-montenegro">Serbie-et-Monténégro</option>
                    <option value="seychelles">Seychelles</option>
                    <option value="sierra-leone">Sierra Leone</option>
                    <option value="singapour">Singapour</option>
                    <option value="slovaquie">Slovaquie</option>
                    <option value="slovenie">Slovénie</option>
                    <option value="somalie">Somalie</option>
                    <option value="soudan">Soudan</option>
                    <option value="sri-lanka">Sri Lanka</option>
                    <option value="suede">Suède</option>
                    <option value="suisse">Suisse</option>
                    <option value="suriname">Suriname</option>
                    <option value="svalbard-et-jan-mayen">Svalbard et Jan Mayen</option>
                    <option value="swaziland">Swaziland</option>
                    <option value="tadjikistan">Tadjikistan</option>
                    <option value="tchad">Tchad</option>
                    <option value="territoire-britannique-de-l-ocean-indien">Territoire britannique de l'océan Indien
                    </option>
                    <option value="territoire-francais-du-sud">Territoire Francais du Sud</option>
                    <option value="territoires-palestiniens-occupes">Territoires palestiniens occupés</option>
                    <option value="thailande">Thaïlande</option>
                    <option value="timor-oriental">Timor oriental</option>
                    <option value="togo">Togo</option>
                    <option value="tokelau">Tokelau</option>
                    <option value="tonga">Tonga</option>
                    <option value="trinite-et-tobago">Trinité-et-Tobago</option>
                    <option value="tunisie">Tunisie</option>
                    <option value="turkmenistan">Turkménistan</option>
                    <option value="turquie">Turquie</option>
                    <option value="tuvalu">Tuvalu</option>
                    <option value="ukraine">Ukraine</option>
                    <option value="uruguay">Uruguay</option>
                    <option value="vanuatu">Vanuatu</option>
                    <option value="venezuela">Vénézuéla</option>
                    <option value="vietnam">Vietnam</option>
                    <option value="wallis-et-futuna">Wallis-et-Futuna</option>
                    <option value="yemen">Yémen</option>
                    <option value="zambie">Zambie</option>
                    <option value="zimbabwe">Zimbabwe</option>

                </select><br>
                <label for="diplomaTown">Lieu d'obtention du diplôme</label>
                <input type="text" name="cursus[diplomaTown]" id="diplomaTown" required><br>
                <label for="diplomaDate">Date d'obtention du diplôme</label>
                <input type="date" name="cursus[diplomaDate]" id="diplomaDate" required><br>
                <label for="diplomaMention">Mention</label>
                <select name="cursus[mention]" id="diplomaMention" required>
                    <option value="TresBien">Très bien</option>
                    <option value="Bien">Bien</option>
                    <option value="AssezBien">Assez Bien</option>
                    <option value="Passable">Passable</option>
                </select>
            </fieldset>

            <fieldset>
                <legend><span class="number">3</span>Doctorat souhaité</legend>

                <label for="doctoratTitle">Intitulé du Doctorat</label>
                <input type="text" name="doctorat[doctoratTitle]" id="doctoratTitle" required><br>
                <label for="attachedInstitution">Etablissement de rattachement du Doctorat</label>
                <input type="text" name="doctorat[attachedInstitution]" id="attachedInstitution" required><br>
                <label for="">Ecole Doctorale</label>
                <input type="text" id="" required value="<?php echo $doctoratSchool ?>" disabled><br>
                <label for="laboratoryName">Intitulé du Laboratoire d'accueil</label>
                <input type="text" name="doctorat[laboratoryName]" id="laboratoryName" required><br>
                <label for="laboratoryAddress">Adresse du Laboratoire d'accueil</label>
                <input type="text" name="doctorat[laboratoryAddress]" id="laboratoryAddress" required><br>
                <label for="laboratoryEmail">Email du Laboratoire d'accueil</label>
                <input type="text" name="doctorat[laboratoryEmail]" id="laboratoryEmail" required><br>
                <label for="thesisSubject">Sujet de thèse</label>
                <textarea name="doctorat[thesisSubject]" id="thesisSubject" required cols="50" rows="10"></textarea>
            </fieldset>
            <br>

            <fieldset>
                <legend><span class="number">4</span>Thèse en cotutelle</legend>

                <label for="partnerInstitutionName">Nom de l'établissement universitaire partenaire</label>
                <input type="text" name="cotutelle[partnerInstitutionName]" id="partnerInstitutionName" required><br>
                <label for="partnerInstitutionAddress">Adresse de l'établissement universitaire partenaire</label>
                <input type="text" name="cotutelle[partnerInstitutionAddress]" id="partnerInstitutionAddress" required><br>
                <label for="partnerResponsibleName">Nom et prénoms du Responsable de la formation doctorale dans
                    l'établissement
                    partenaire</label>
                <input type="text" name="cotutelle[partnerResponsibleName]" id="partnerResponsibleName" required><br>
                <label for="partenerThesisDirectorName">Nom et prénoms du Directeur de thèse dans l'établissement
                    partenaire</label>
                <input type="text" name="cotutelle[partenerThesisDirectorName]" id="partenerThesisDirectorName" required><br>
                <label for="partenerThesisDirectorDegree">Grade du Directeur de thèse dans l'établissement
                    partenaire</label>
                <input type="text" name="cotutelle[partenerThesisDirectorDegree]" id="partenerThesisDirectorDegree" required><br>
                <label for="cotutelleAgreement">Convention cotutelle</label>
                <input type="file" name="cotutelle[cotutelleAgreement]" id="cotutelleAgreement" required>
            </fieldset>
            <br>

            <fieldset>
                <legend><span class="number">5</span>Documents complémentaires</legend>

                <label for="cv">CV</label>
                <input type="file" name="complement[cv]" id="cv" required><br>
                <label for="thesisCharter">Charte de thèse</label>
                <input type="file" name="complement[thesisCharter]" id="thesisCharter" required>
                <br>
                <label for=""></label>
                <label for="grantCertificate">Attestation de bourse</label>
                <input type="file" name="complement[grantCertificate]" id="grantCertificate" required>
                <label for=""></label>
            </fieldset>

            <input type="submit" value="Enregistrer" />
        </form>
    </div>
</body>

</html>