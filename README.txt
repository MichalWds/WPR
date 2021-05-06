    1. Warsztat 1
        1.1. Napisz program, który wyświetli wiadomość: Witaj w świecie PHP!!!
        1.2. Napisz program, który oblicza pole prostokąta o bokach a i b wprowadzanych przez użytkownika (każda wartość w osobnej linii).
        1.3. Napisz program, który wyświetla na ekranie komputera pierwiastek kwadratowy z wartości z dokładnością do dwóch miejsc po przecinku. Wskazówka: Skorzystaj z funkcji pi() oraz sqrt(). W programie wypisz tylko wartość.
        1.4. Napisz program, który pobierze dwie liczby naturalne i poda ich wynik dodawania, odejmowania, mnożenia, dzielenia modulo.
        1.5. Napisz program, który pobierze od użytkownika dwa napisy (rozdzielone znakiem spacji) napis1 i napis2, a następnie wyświetlinastępujący tekst:
“%napis2 napis1%$#”
        1.6. Napisz program, który dla trzech boków podanych przez użytkownika stwierdzi czy da się z tych boków zbudować trójkąt.
Trójkąt da się zbudować z bokówwtedy i tylko wtedy gdy zachodzą następujące warunki: a+b>c, a+c>b, b+c>a.
W przypadku wprowadzenia niepoprawnych danych program ma wyrzucić komunikat: BŁĄD
        1.7. Napisz program, który dla podanej liczby z odpowiedniego zakresu wyświetli jaki to miesiąc i ile ma on dni.
Zakładamy, że rok tutaj nie jest przestępny.
W przypadku niepoprawnych danych program ma wypisać komunikat: BŁĄD
Skorzystaj tutaj z instrukcji warunkowej switch!!!
        1.8. Napisz program, który pobierze trzy liczby rzeczywiste, a następnie wyświetli je w kolejności od najmniejszej do największej, a potem od największej do najmniejszej.
Nie używaj żadnych metod sortujących.
        1.9. Napisz program, który zadeklaruje dwie tablice typu int, następnie wczyta liczby naturalne i wczyta do pierwszej tablicy liczb,następnie wczyta liczb do drugiej tablicy (wcześniej trzeba te tablice utworzyć), a następnie wykona
iloczyn skalarny tych tablic zgodnie ze wzorem:

Zastanów się, co w przypadku gdy n<m lub m<n.
W przypadku podania jakikolwiek błędnych danych program wypisuje komunikat BŁĄD, a następnie kończy działanie.
        1.10. Napisz program, który dla liczby naturalnej wypisze poniższe wzory (jeden pod drugim).
W przypadku niepoprawnych danych program ma ponownie je wczytać.
Zakładamy, że na końcu linii jest wyłącznie znak nowej linii.


Dla liczby 3:
*
**
***
***
**
*
***
 **
  *
  *
 **
***
        1.11. Pangramem nazywamy tekst, w którym każda litera alfabetu łacińskiego występuje przy najmniej raz.
Najpopularniejszym pangramem w języku angielskim jest zdanie: The quick brown fox jumps over the lazy dog.
Napisz program, który sprawdzi czy dany tekst jest pangramem.
W przypadku pozytywnej odpowiedzi program powinien wyświetlić wartość true, w przeciwnym przypadku program powinien wyrzucićwartość false.
Rozważ różne przypadki i wielkość liter (która nie powinna mieć znaczenia)!!!
        1.12. Napisz program, który będzie miał utworzoną statycznie tablicę dwuwymiarową o wymiarach AxB.
Następnie program ma pobrać od użytkownika liczby
A i B, które mają oznaczać ilość wierszy oraz kolumn tablicy.
Następnie ma pobrać AxB liczb i wypisać transpozycję tej macierzy (patrz poniższy test).
Transpozycja oznacza, że wypisujemy najpierw kolumny, a potem wiersze danej macierzy.
W przypadku sytuacji błędnych program ma wypisać komunikat: BŁĄD i zakończyć działanie.

ZJAZD 2

    1. Prosty kalkulator:
    a. stwórz formularz z miejscem na wpisanie 2 liczb oraz wyborem działania (dodawanie, odejmowanie, mnożenie, dzielenie)
    b. stwórz skrypt PHP, który obsłuży dane z formularza (na podstawie wybranego działania policzy i wyświetli wynik w przeglądarce)
    2. Formularz rezerwacji hotelu:
    a. stwórz formularz, który będzie pozwalał: podać z listy rozwijanej ilość osób (1-4), których dotyczy rezerwacja, wpisać dane osoby rezerwującej pobyt np. imię, nazwisko, adres, dane karty kredytowej, e-mail, podać datę pobytu, czy godzinę przyjazdu itd. (pamiętając o odpowiedniej walidacji pól - typach), zaznaczyć czy jest potrzeba dostawienia łóżka dla dziecka, z listy wybrać odpowiednie udogodnienia np. klimatyzacja i popielniczka dla palacza (pamiętaj określić które pola są wymagane)
    b. stwórz skrypt PHP, który odbierze powyższe dane i w ładny i przejrzysty sposób wyświetli podsumowanie rezerwacji (użyć do wyświetlenia szablonu HTML
    3. Dla zadania nr 2 dodaj krok, w którym w zależności od liczby osób wyświetli się formularz, który pozwoli uzupełnić podstawowe dane tych osób w zgrupowanych formularzach i doda tę informację do podsumowania rezerwacji.
    4. Czy dana liczba jest liczbą pierwszą?
    a. stwórz formularz z miejscem na wpisanie liczby
    b. stwórz skrypt PHP, który przyjmie liczbę z formularza (sprawdzi czy to na pewno liczba całkowita dodatnia), a następnie wywoła funkcję, sprawdzającą czy liczba jest liczbą pierwszą
    c. w swoim programie umieść zmienną, która policzy wszystkie iteracje pętli, potrzebne do wykonania obliczeń. Spróbuj tak zmodyfikować program, by było potrzeba jak najmniej iteracji (przy zachowaniu prawidłowego działania).

ZJAZD 3

1. Przerób zadanie z poprzednich zajęć, kalkulator, tak aby:
a) każde działanie (dodawanie, odejmowanie itp) było umieszczone w oddzielnej funkcji
b) wszystkie funkcje były umieszczone w innym pliku niż główny skrypt
c) główny skrypt zawierał tylko switcha, a w nim wywołanie odpowiedniej funkcji
d) (trzeba użyć include()/require() by korzystać z funkcji z innego pliku)

2. Formularz zapisujący dane do pliku:
a) ma posiadać pola tekstowe i przycisk zapisu
b) stwórz plik tekstowy, do którego będą zapisywane dane (przez skrypt)
c) skrypt, przyjmujący dane z formularza, ma zapisać tekst do pliku, dopisując go na
końcu ( jako nowa linia)
3. Pierwszy CMS:
a) Przerób zadanie z poprzednich zajęć - formularz rezerwacji, aby dane były wpisywane do pliku csv.
b) pierwsza kolumna - nazwy pól oddzielone separatorem np. ";" (nazwa1;nazwa2;nazwa3...)
c) kazdorazowe wysłanie formularza wysyła nowe dane do pliku jako nowy rekord (wartosc1;wartosc2;wartosc3...)
d) przycisk "wczytaj" pozwoli wczytać i wyswietlic dane w przeglądarce

