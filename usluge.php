<?php include 'header.php'; ?> 


<div class="container page-o_nama page">
<!--
<p><h3>Šta je catering?</h3>

Catering je organizacija i posluživanje hrane i pića prema željama klijenata. Dijeli se na posluživanje u vlastitim poslovnim jedinicama i na lokacijama. Služi se najčešće u dvije varijante:

Toplo-hladni buffet, poznatiji kao švedski sto, servira se na raznim vrstama zabava, proslava ili obilježavanja nekih drugih manifestacija. Gosti se sami poslužuju bogatim izborom ukusnih jela koja su unaprijed servirana u posebnim dekorativnim posudama ili na ogledalima.

Cocktail-party je poseban vid posluge hrane i pića. Za razliku od švedskog stola na kojem su postavljena glavna jela, hranu i piće poslužuju konobari, a jela se sastoje od malih zalogaja (finger food).</p>

<p><h3>Korporativni catering</h3>
 Organizacija i posluživanje hrane i pića prilikom seminara, kongresa, konferencija, sajmova. Obuhvata piće dobrodošlice, kafe pauze, ručak ili cocktail. U korporativni catering spada i organizacija i posluživanje poslovnih večera, kao i organizacija svih vrsta manifestacija i proslava za različite kompanije. Za više informacija o našim zadovoljnim klijentima, pogledajte referentnu listu.</p>

<p><h3>Društveni catering</h3>
 Organizacija i posluživanje hrane i pića prilikom različitih proslava: rođendani, vjenčanja i okupljanja kod mlade i mladoženje, porodična okupljanja, proslave diplomskih, magistarskih i doktorskih radova, vjerskih događaja, različite vrste privatnih zabava…</p>

 <p><h3>Specijalizirani i tematski catering</h3>
 Catering Pals ima višegodišnje iskustvo u organizaciji i posluživanju hrane i pića za filmske ekipe na udaljenim lokacijama. Do sada smo sarađivali na snimanju sljedećih filmova: „Sniper’s Valley“ i „Storm“ UG Deblokada (u njemačkoj produkciji), „Grbavica“, „Na putu“ UG Deblokada, „Kod amidže Idriza“ i „Teško je biti fin“ – Refresh production, „Untitled Bosnian War Love Story“ koji je napisala i režirala Angelina Jolie, kao i određeni broj kratkih i dokumentarnih filmova za SFF.
</p>

<p> <h3>Catering na otvorenom</h3>
 Mnogobrojne poznate lokacije bile su domaćin klijentima za koje je catering organizovao Catering Pals: bašta Zemaljskog muzeja (Uniqua osiguranje, večera nakon koncerta Ricarda Mutti-ja, Ambasada Češke, Slovačke, SAD); Bijela tabija (UG Deblokada, premijera „Grbavice“ za koju je organiziran isključivo bosanski toplo-hladni bife), Svrzina kuća, kuća Alije Đerzeleza, Despića kuća, bašta Galerije „Mak“, Konak (Otvaranje SFF-a, BH Telecom), proslava mature Bosna Sema koledža na Vracama (3000 gostiju), Atmejdan (otvaranje nakon restauracije), Ulica Bravadžiluk (otvaranje nakon restauracije), svadbe na otvorenom…

Catering Pals ima kompletnu profesionalnu ugostiteljsku opremu (mobilijar) za 3000 gostiju, nekoliko dostavnih vozila i profesionalnu prikolicu za catering na udaljenim lokacijama i otvorenom.</p>

<p>Naši principi zasnovani su na jednostavnim receptima, a to su prijateljstvo, profesionalnost, dodir inovacije i fleksibilnosti, uz veliku predanost i ljubav prema našem poslu. Naš tim se konstantno usavršava, jer kako naše spoznaje rastu, tako raste i naša mogućnost da ispunimo svaku vašu želju i budemo uvijek vaš prvi i jedini izbor za Catering.Željno iščekujemo da surađujemo sa vama, kontaktirajte nas da dogovorimo vaš slijedeći Catering bez obzira koliko on mali ili veliki bio, tu smo da vam na taj dan pružimo nezaboravno kulinarsko iskustvo.</p>

-->
<?php

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "catering";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "SELECT naslov, opis FROM post";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    echo "<table>";
		    while($row = $result->fetch_assoc()) {
		    	echo "<tr><td><h1>$row[naslov]</h1></td></tr>";
		    	echo "<tr><td><p>$row[opis]</p></td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "0 results";
		}


		$conn->close(); 
		?>

</div>

<?php include 'footer.php'; ?> 