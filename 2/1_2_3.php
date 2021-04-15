<!--Formularz rezerwacji hotelu:
a) stwórz formularz, który będzie pozwalał: podać z listy rozwijanej ilość osób (1-4), których dotyczy rezerwacja, wpisać dane osoby rezerwującej pobyt
np. imię, nazwisko, adres, dane karty kredytowej, e-mail, podać datę pobytu, czy godzinę przyjazdu itd. (pamiętając o odpowiedniej walidacji pól - typach),
zaznaczyć czy jest potrzeba dostawienia łóżka dla dziecka, z listy wybrać odpowiednie udogodnienia np. klimatyzacja i popielniczka dla palacza (pamiętaj określić które pola są wymagane)
b) stwórz skrypt PHP, który odbierze powyższe dane i w ładny i przejrzysty sposób wyświetli podsumowanie rezerwacji (użyć do wyświetlenia szablonu HTML
Dla zadania nr 2 dodaj krok, w którym w zależności od liczby osób wyświetli się formularz, który pozwoli uzupełnić podstawowe dane tych osób w zgrupowanych formularzach i doda tę informację do podsumowania rezerwacji.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad 2,3 zjazd 2</title>
    <style>
        body {
            background: lightblue;
            color: black;
        }
    </style>
</head>
<body>
<header>
    <h2> Make reservation in out hotel</h2>
</header>

<?php
echo('	
		<article>
			<form action="1_2_3.php" method="POST">
				<label>Select number of people: </label>
				<select name="NumberOfPeople">
				  <option value=1>1</option>
				  <option value=2>2</option>
				  <option value=3>3</option>
				  <option value=4>4</option>
				</select>
				<input type="submit" name="SendNumberOfPeople" value="Apply">
				<br>
			</form>
		</article>
	');
if(isset($_POST['NumberOfPeople'])) {
    $peopleNumber = $_POST['NumberOfPeople'];

    function numberOfForms($peopleNumber) {
        echo ('
			<form action="1_2_3.php" method="POST">
				<input type="hidden" value="'.$peopleNumber.'" name="peopleNumber" />
				<br>
				<label>First Name:</label>
				<input type="text" name="firstName0" placeholder="First Name" required>
				<br>
				<label>Last Name:</label>
				<input type="text" name="lastName0" placeholder="Last Name" required>
				<br>
				<label>Email adress:</label>
				<input type="email" name="email0" placeholder="Email" required>
				<br>
				<label>Adres:</label> 
				<input type="text" name="adress0" placeholder="Address">
				<br>
				<label>Credit Card Number</label> 
				<input type="tel" inputmode="numeric" name="CardNumber" pattern="[0-9\s]{13,19}" autocomplete="CreditCard-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required>
				<br>
				<label>Credit card valid date</label>
				<input type="month" min="2021-05" value="2021-05" name="CardValidationDate" required>
				<br>
				<label>Check in</label>
				<input type="datetime-local" min="2021-04-19T00:00" value="2021-04-19T12:30" name="CheckInDateTime" required>
				<br>
				<label>Days to stay</label>
				<input type="int" name="numberOfDays" required>
				<br>
				<label>Bed for a child </label>
				<label for=ExtraBedNo> No </label>
				<input type="radio" id="ExtraBedNo" name="ExtraChildBed value="No" checked>
				<label for=ExtraBedYes> Yes </label>
				<input type="radio" id="ExtraBedYes" name="ExtraChildBed value="Yes">
				<br>
				<label> Extras: </label>
				<br>
				<input type="checkbox" id="MiniBar" name="MiniBar" value="MiniBar">
				<label for="MiniBar"> Mini Bar</label><br>
				
				<input type="checkbox" id="AirCondition" name="AirCondition" value="AirCondition">
				<label for="AirCondition"> Air Condition</label><br>
								
				<input type="checkbox" id="balcony" name="balcony" value="balcony">
				<label for="balcony"> Balcony</label><br>
				
				<input type="checkbox" id="TV" name="TV" value="TV">
				<label for="TV"> TV</label><br><br>
				
				
				');
        if($peopleNumber>1) {
            echo ('<form>');
            for($i = 1; $i<$peopleNumber; $i++) {
                echo('
					<br>
					<h3>'.($i+1).' Person Details </h2>
					<label>Input Firstname: <input type="text" name="firstName'.$i.'"></label>
					<br>
					<label>Input Surname: <input type="text" name="lastName'.$i.'"></label>
					<br>
			    	<label>Input Email adress: <input type="email" name="email'.$i.'"></label>
					<br>
					');
            }
        }
        echo ('
				<br>
				<input type="submit" name="SubmitData" value="SubmitData">
				</form>'
        );
    }
    numberOfForms($peopleNumber);

} else {
    if(isset($_POST['SubmitData'])){
        $peopleNumber = $_POST['peopleNumber'];

        echo('<h2> Your Reservation Details </h2><br>');
        for($i = 0; $i < $peopleNumber; $i++) {
            echo ('<h3> Person: '. $_POST['firstName'.$i].' '.$_POST['lastName'.$i]. '</h3>');

            if($i==0) {
                echo 'Address: ' . $_POST['adress'.$i] . '<br>';
                echo 'Credit card: ' . $_POST['CardNumber'] . '<br>';
                echo 'Email: ' . $_POST['email'.$i] . '<br>';
                echo 'Arrival: ' . $_POST['CheckInDateTime'] . '<br>';

                if (isset($_POST['MiniBar'])) {
                    echo 'Mini Bar: Yes<br>';
                } else {
                    echo 'Mini Bar: No<br>';
                }
                if (isset($_POST['balcony'])) {
                    echo 'Balcony: Yes<br>';
                } else {
                    echo 'Balcony: No<br>';
                }
                if (isset($_POST['AirCondition'])) {
                    echo 'Air Conditioning: Yes<br>';
                } else {
                    echo 'Air Conditioning: No<br>';
                }
                if (isset($_POST['TV'])) {
                    echo 'Tv: Yes<br>';
                } else {
                    echo 'Tv: No<br>';
                }
            } else {
                echo 'Email: ' . $_POST['email'.$i] . '<br>';
            }
        }
    }
}
?>
</body>
</html>
