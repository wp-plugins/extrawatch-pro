<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version @VERSION@
 * @revision @REVISION@
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access');

//ExtraWatch language file - to create a new language file, just copy the english.php to eg. german.php and place into./components/com_extrawatch/lang/

// Menu główne.
DEFINE('_EW_MENU_STATS', "Statystyki");
DEFINE('_EW_MENU_GOALS', "Cele");
DEFINE('_EW_MENU_SETTINGS', "Ustawienia");
DEFINE('_EW_MENU_CREDITS', "Twórcy");
DEFINE('_EW_MENU_FAQ', "Częste pytania");
DEFINE('_EW_MENU_DOCUMENTATION', "Dokumentacja");
DEFINE('_EW_MENU_LICENSE', "Licencja");
DEFINE('_EW_MENU_DONATORS', "Darczyńcy");
DEFINE('_EW_MENU_SUPPORT', "Wesprzyj ExtraWatch i pozbądź się reklam.");

// Lewe okno panelu.
DEFINE('_EW_VISITS_VISITORS', "Goście portalu");
DEFINE('_EW_VISITS_BOTS', "Boty");
DEFINE('_EW_VISITS_CAME_FROM', "Przekierowanie z");
DEFINE('_EW_VISITS_MODULE_NOT_PUBLISHED', "Nie opublikowałeś modułu ExtraWatch, dlatego statystyki nie są rejestrowane. Przejdź do działu Moduły i opublikuj ten moduł na wszystkich stronach portalu.");
DEFINE('_EW_VISITS_PANE_LOADING', "Trwa odczyt...");

// Prawe okno panelu.
DEFINE('_EW_STATS_TITLE', "Tydzień");
DEFINE('_EW_STATS_WEEK', "Tydzień");
DEFINE('_EW_STATS_THIS_WEEK', "Bieżący tydzień");
DEFINE('_EW_STATS_UNIQUE', "unikalne");
DEFINE('_EW_STATS_LOADS', "przeładowania");
DEFINE('_EW_STATS_HITS', "kliknięcia");
DEFINE('_EW_STATS_TODAY', "Dzisiaj");
DEFINE('_EW_STATS_FOR', "&ndash;");
DEFINE('_EW_STATS_ALL_TIME', "ZBIORCZE");
DEFINE('_EW_STATS_EXPAND', "ROZWIŃ");
DEFINE('_EW_STATS_COLLAPSE', "ZWIŃ");
DEFINE('_EW_STATS_URI', "Strony");
DEFINE('_EW_STATS_COUNTRY', "Kraje");
DEFINE('_EW_STATS_USERS', "Użytkownicy");
DEFINE('_EW_STATS_REFERERS', "Przekierowania");
DEFINE('_EW_STATS_IP', "Adresy IP");
DEFINE('_EW_STATS_BROWSER', "Przeglądarki");
DEFINE('_EW_STATS_OS', "Systemy operacyjne");
DEFINE('_EW_STATS_KEYWORDS', "Słowa kluczowe");
DEFINE('_EW_STATS_GOALS', "Cele");
DEFINE('_EW_STATS_TOTAL', "Ogółem");
DEFINE('_EW_STATS_DAILY', "DZIENNE");
DEFINE('_EW_STATS_DAILY_TITLE', "Statystyki dzienne");
DEFINE('_EW_STATS_ALL_TIME_TITLE', "Statystyki zbiorcze");
DEFINE('_EW_STATS_LOADING', "Trwa odczyt...");
DEFINE('_EW_STATS_LOADING_WAIT', "Trwa odczyt danych. Czekaj...");
DEFINE('_EW_STATS_IP_BLOCKING_TITLE', "Blokowanie IP");
DEFINE('_EW_STATS_IP_BLOCKING_ENTER', "Wprowadź adres IP");
DEFINE('_EW_STATS_IP_BLOCKING_MANUALLY', "Wprowadź adres IP, który chcesz zablokować (np. 217.242.11.54, aby zablokować pojedynczy adres, lub 217.*, aby zablokować wszystkie adresy pasujące do maski).");
DEFINE('_EW_STATS_IP_BLOCKING_TOGGLE', "Czy na pewno chcesz zablokować adres ");
DEFINE('_EW_STATS_PANE_LOADING', "Trwa odczyt...");

// Ustawienia.
DEFINE('_EW_SETTINGS_TITLE', "Ustawienia");
DEFINE('_EW_SETTINGS_DEFAULT', "Domyślne");
DEFINE('_EW_SETTINGS_SAVE', "Zapisz");
DEFINE('_EW_SETTINGS_APPEARANCE', "Wygląd");
DEFINE('_EW_SETTINGS_FRONTEND', "Witryna");
DEFINE('_EW_SETTINGS_HISTORY_PERFORMANCE', "Historia i wydajność");
DEFINE('_EW_SETTINGS_ADVANCED', "Zaawansowane");
DEFINE('_EW_SETTINGS_IGNORE', "Ignorowanie");
DEFINE('_EW_SETTINGS_BLOCKING', "Blokowanie");
DEFINE('_EW_SETTINGS_EXPERT', "Tryb eksperta");
DEFINE('_EW_SETTINGS_RESET_CONFIRM', "Czy na pewno chcesz usunąć wszystkie statystyki?");
DEFINE('_EW_SETTINGS_RESET_ALL', "Usuń wszystko");
DEFINE('_EW_SETTINGS_RESET_ALL_LINK', "Usuń wszystkie staytystyki...");
DEFINE('_EW_SETTINGS_LANGUAGE', "Język");
DEFINE('_EW_SETTINGS_SAVED', "Ustawienia zostały zapisane.");
DEFINE('_EW_SETTINGS_ADD_YOUR_IP', "Dodaj swój adres IP");
DEFINE('_EW_SETTINGS_TO_THE_LIST', "do listy.");

// Inne.
DEFINE('_EW_TITLE', "AJAX. Monitor portalu Joomla!");
DEFINE('_EW_BACK', "Wstecz");
DEFINE('_EW_ACCESS_DENIED', "Nie masz uprawnień do oglądania tych danych!");
DEFINE('_EW_LICENSE_AGREE', "Akceptuję powyższe zasady.");
DEFINE('_EW_LICENSE_CONTINUE', "Kontynuuj");
DEFINE('_EW_SUCCESS', "Operacja zakończona powodzeniem.");
DEFINE('_EW_RESET_SUCCESS', "Usunięto wszystkie statystyki.");
DEFINE('_EW_RESET_ERROR', "Wystąpił błąd. Nie usunięto statystyk.");
DEFINE('_EW_CREDITS_TITLE', "Twórcy");
DEFINE('_EW_TRENDS_DAILY_WEEKLY', "Statystyki dzienne / tygodniowe &middot;");
DEFINE('_EW_AJAX_PERMISSION_DENIED_1', "AJAX - odmowa dostępu. Sprawdź te statystyki z domeny podanej w pliku configuration.php - ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_2', "Być może zapomniałeś o wpisaniu liter www na początku domeny. Javasrcipt próbuje uzyskać dostęp do ");
DEFINE('_EW_AJAX_PERMISSION_DENIED_3', "z");
DEFINE('_EW_AJAX_PERMISSION_DENIED_4', "co jest interpretowane jako inny adres.");

// Nagłówek.
DEFINE('_EW_HEADER_DOWNLOAD', "Pobierz najnowsze aktualizacje ze strony");
DEFINE('_EW_HEADER_CAST_YOUR', "Oddaj na nas swój");
DEFINE('_EW_HEADER_VOTE', "głos");

// Tooltip.
DEFINE('_EW_TOOLTIP_CLICK', "Kliknij, aby wyświetlić tooltip...");
DEFINE('_EW_TOOLTIP_MOUSE_OVER', "Wskaż myszą, aby wyświetlić tooltip");
DEFINE('_EW_TOOLTIP_YESTERDAY_INCREASE', "wczorajszy wzrost");
DEFINE('_EW_TOOLTIP_HELP', "Otwiera zewnętrzny system pomocy dla");
DEFINE('_EW_TOOLTIP_WINDOW_CLOSE', "Zamknij to okno");
DEFINE('_EW_TOOLTIP_PRINT', "Drukuj");

// Cele.
DEFINE('_EW_GOALS_INSERT', "Dodaj nowy cel");
DEFINE('_EW_GOALS_UPDATE', "Zmień cel nr");
DEFINE('_EW_GOALS_ACTION', "Akcja");
DEFINE('_EW_GOALS_TITLE', "Nowy cel");
DEFINE('_EW_GOALS_NEW', "Nowy cel");
DEFINE('_EW_GOALS_RELOAD', "Odśwież");
DEFINE('_EW_GOALS_ADVANCED', "Zaawansowane");
DEFINE('_EW_GOALS_NAME', "Nazwa");
DEFINE('_EW_GOALS_ID', "#");
DEFINE('_EW_GOALS_URI_CONDITION', "Warunek dla URI");
DEFINE('_EW_GOALS_GET_VAR', "Zmienna GET");
DEFINE('_EW_GOALS_GET_CONDITION', "Warunek dla zmiennej GET");
DEFINE('_EW_GOALS_POST_VAR', "Zmienna POST");
DEFINE('_EW_GOALS_POST_CONDITION', "Warunek dla zmiennej POST");
DEFINE('_EW_GOALS_TITLE_CONDITION', "Warunek dla tytułu");
DEFINE('_EW_GOALS_USERNAME_CONDITION', "Warunek dla nazwy użytkownika");
DEFINE('_EW_GOALS_IP_CONDITION', "Warunek dla adresu IP");
DEFINE('_EW_GOALS_CAME_FROM_CONDITION', "Warunek dla adresu wywołania");
DEFINE('_EW_GOALS_BLOCK', "Blokuj");
DEFINE('_EW_GOALS_REDIRECT', "Przekieruj do URL");
DEFINE('_EW_GOALS_HITS', "Kliknięcia");
DEFINE('_EW_GOALS_ENABLED', "Odblokowane");
DEFINE('_EW_GOALS_EDIT', "Edytuj");
DEFINE('_EW_GOALS_DELETE', "Usuń");
DEFINE('_EW_GOALS_DELETE_CONFIRM', "Skasujesz wszystkie statystyki dla tego celu. Czy na pewno chcesz usunąć cel nr");

// Frontend.
DEFINE('_EW_FRONTEND_COUNTRIES', "Kraje");
DEFINE('_EW_FRONTEND_VISITORS', "Goście");
DEFINE('_EW_FRONTEND_TODAY', "Dzisiaj");
DEFINE('_EW_FRONTEND_YESTERDAY', "Wczoraj");
DEFINE('_EW_FRONTEND_THIS_WEEK', "Bieżący tydzień");
DEFINE('_EW_FRONTEND_LAST_WEEK', "Poprzedni tydzień");
DEFINE('_EW_FRONTEND_THIS_MONTH', "Bieżący miesiąc");
DEFINE('_EW_FRONTEND_LAST_MONTH', "Poprzedni miesiąc");
DEFINE('_EW_FRONTEND_TOTAL', "Ogółem");

// Opisy ustawień.
DEFINE('_EW_DESC_DEBUG', "ExtraWatch działa w trybie debuggera. Pozwala on na wykrycie błędów. Aby wyłączyć ten tryb, zmień wartość EXTRAWATCH_DEBUG w pliku /components/com_extrawatch/config.php Z 1 na 0.");
DEFINE('_EW_DESC_STATS_MAX_ROWS', "Maksymalna liczba wierszy wyświetlanych po rozwinięciu statystyk.");
DEFINE('_EW_DESC_STATS_IP_HITS', "Liczba kliknięć powodująca usunięcie adresu IP z historii (usuwane są adresy, dla których liczba kliknięć w ostatnich dniach jest mniejsza od podanej tutaj).");
DEFINE('_EW_DESC_STATS_URL_HITS', "Liczba kliknięć powodująca usunięcie adresu URL z historii (usuwane są adresy, dla których liczba kliknięć w ostatnich dniach jest mniejsza od podanej tutaj).");
DEFINE('_EW_DESC_IGNORE_IP', "Adresy IP, które będą ignorowane w statystykach. Adresy należy rozdzielić znakami nowego wiersza. Można używać znaku gwiazdki, np. 192.* spowoduje ignorowanie adresów: 192.168.51.31, 192.168.16.2, itp.");
DEFINE('_EW_DESC_UPDATE_TIME_VISITS', "Czas odświeżania dla użytkowników (w milisekundach). Standardowo 2000. Zmieniać po dokładnym rozważeniu. Po zmianie odświeżyć panel ExtraWatch.");
DEFINE('_EW_DESC_UPDATE_TIME_STATS', "Czas odświeżania dla statystyk (w milisekundach). Standardowo 4000. Zmieniać po dokładnym rozważeniu. Po zmianie odświeżyć panel ExtraWatch.");
DEFINE('_EW_DESC_MAXID_BOTS', "Liczba odwiedzin botów przechowywanych w bazie danych.");
DEFINE('_EW_DESC_MAXID_VISITORS', "Liczba rzeczywistych odwiedzin przechowywanych w bazie danych.");
DEFINE('_EW_DESC_LIMIT_BOTS', "Liczba botów wyświetlanych w panelu.");
DEFINE('_EW_DESC_LIMIT_VISITORS', "Liczba gości wyświetlanych w panelu.");
DEFINE('_EW_DESC_TRUNCATE_VISITS', "Maksymalna liczba znaków wyświetlanych w długich tytułach i adresach URL.");
DEFINE('_EW_DESC_TRUNCATE_STATS', "Maksymalna liczba znaków wyświetlanych w prawej części panelu.");
DEFINE('_EW_DESC_STATS_KEEP_DAYS', "Czas przechowywania statystyk w bazie danych (w dniach). 0 = bezterminowo.");
DEFINE('_EW_DESC_TIMEZONE_OFFSET', "Ma zastosowanie, jeżeli czas lokalny różni się od czasu serwera. Liczba godzin różnicy.");
DEFINE('_EW_DESC_WEEK_OFFSET', "Przesunięcie tygodnia: timestamp/(3600*24*7). Daje w wyniku numer tygodnia liczony od 1.1.1970. Wartość wykorzystywana w celu rozpoczęcia zliczania od poniedziałku.");
DEFINE('_EW_DESC_DAY_OFFSET', "Przesunięcie dnia: timestamp/(3600*24). Daje w wyniku numer dnia liczony od 1.1.1970. Wartość wykorzystywana w celu rozpoczęcia zliczania od godziny 00:00.");
DEFINE('_EW_DESC_FRONTEND_HIDE_LOGO', "Zaznacz, aby w module ExtraWatch Agent wyświetlić pusty obrazek o wymiarach 1x1 px.");
DEFINE('_EW_DESC_IP_STATS', "Zaznacz, aby zbierać statytsyki dla adresów IP. W niektórych krajach dłuższe przechowywanie adresów IP jest zabronione. Wykorzystujesz na własną odpowiedzialność.");
DEFINE('_EW_DESC_HIDE_ADS', "To ustawienie ukrywa reklamy w panelu. Zachowując wyświetlanie reklam, wspomagasz rozwój tego komponentu. Dziękujemy za pomoc.");
DEFINE('_EW_DESC_TOOLTIP_ONCLICK', "Usuń zaznaczenie, aby wyświetlać tooltip po wskazaniu myszą (a nie po kliknięciu).");
DEFINE('_EW_DESC_SERVER_URI_KEY', "Domyślnie: 'REDIRECT_URL'; można zmienić na 'SCRIPT_URL', jeżeli logi zbierają tylko dane o pliku index.php.");
DEFINE('_EW_DESC_BLOCKING_MESSAGE', "Informacja wyświetlana w przypadku zablokowania adresu IP użytkownika.");
DEFINE('_EW_DESC_TOOLTIP_WIDTH', "Tooltip &ndash; szerokość w pikselach.");
DEFINE('_EW_DESC_TOOLTIP_HEIGHT', "Tooltip &ndash; wysokość w pikselach.");
DEFINE('_EW_DESC_TOOLTIP_URL', "Adres strony pokazującej lokalizację IP. Wpis {ip} zostanie zastąpiony adresem IP użytkownika. Przykład zastosowania: <b>http://somewebsite.com/query?iplookup={ip}</b>.");
DEFINE('_EW_DESC_IGNORE_URI', "URI, które mają być ignorowane w statystykach. Można stosować symbole globalne (gwiazdka i pytajnik). Przykład zastosowania: <b>/freel?n*</b>.");
DEFINE('_EW_DESC_GOALS_NAME', "Nazwa celu. Będzie ona widoczna w panelu statystyk.");
DEFINE('_EW_DESC_GOALS_URI_CONDITION', "Ciąg znaków po nazwie domeny. Np. dla <b>http://www.codegravity.com/projects/</b> URI to: <b>/projects/</b>. Przykładowe zastosowanie: <b>/projects*</b>.");
DEFINE('_EW_DESC_GOALS_GET_VAR', "Zmienna GET jest widoczna w adresie URL, zazwyczaj po znaku ? lub &amp;. Przykład: http://www.codegravity.com/index.php?<u>name</u>=peter&amp;<u>surname</u>=smith. Aby poszukiwać wielu zmiennych, można stosować znak <b>*</b> (gwiazdka). Przykładowe zastosowanie: <b>n*me</b>.");
DEFINE('_EW_DESC_GOALS_GET_CONDITION', "Warunek dla wartości z poprzedniego pola. Przykładowe zastosowanie: <b>p?t*r</b>.");
DEFINE('_EW_DESC_GOALS_POST_VAR', "Podobnie jak poprzednio, ale dla wartości przesyłanych za pośrednictwem formularzy. Przykład: jeżeli na stronie znajduje się formularz zawierający pole &lt;input type='text' name='<u>experiences</u>' /&gt;, zmienną opisuje fraza: <b>exper*ces</b>.");
DEFINE('_EW_DESC_GOALS_POST_CONDITION', " Warunek dla wartości z poprzedniego pola. Przykładowe zastosowanie: <b>*java*</b>.");
DEFINE('_EW_DESC_GOALS_TITLE_CONDITION', "Poszukiwany tytuł strony. Przykładowe zastosowanie: <b>*freelance programmers*</b>.");
DEFINE('_EW_DESC_GOALS_USERNAME_CONDITION', "Poszukiwana nazwa użytkownika. Przykładowe zastosowanie: <b>psmith*</b>.");
DEFINE('_EW_DESC_GOALS_IP_CONDITION', "Adres IP użytkownika. Przykładowe zastosowanie: <b>201.9?.*.*</b>.");
DEFINE('_EW_DESC_GOALS_CAME_FROM_CONDITION', "Adres URL użytkownika. Przykładowe zastosowanie: <b>*www.google.*</b>.");
DEFINE('_EW_DESC_GOALS_REDIRECT', "Adres, pod który ma być przekierowany użytkownik. <b>To ustawienie ma wyższy priorytet niż blokowanie.</b> Przykładowe zastosowanie: <b>http://www.codegravity.com/goaway.html</b>.");
DEFINE('_EW_DESC_TRUNCATE_GOALS', "Liczba znaków w tabeli celów.");
DEFINE('_EW_DESC_FRONTEND_NO_BACKLINK', "Odnośnik do strony codegravity.com. Można go wyłączyć, ale będziemy wdzięczni za jego zachowanie. Dziękujemy.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES', "Czy wyświetlać kraje w module ExtraWatch Visitors? Zmiana będzie widoczna po czasie zapisanym w zmiennej CACHE_FRONTEND_.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FIRST', "Czy zmienić kolejność wyświetlania gości / krajów w module ExtraWatch Visitors? Usuń zaznaczenie, aby wyświetlać gości na pierwszej pozycji.");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NUM', "Liczba krajów wyświetlanych w module ExtraWatch Visitors.");
DEFINE('_EW_DESC_FRONTEND_VISITORS', " Czy wyświetlać gości w module ExtraWatch Visitors? Zmiana będzie widoczna po czasie zapisanym w zmiennej CACHE_FRONTEND_.");
DEFINE('_EW_DESC_CACHE_FRONTEND_COUNTRIES', "Czas odświeżania danych krajów w module ExtraWatch Visitors (w sekundach).");
DEFINE('_EW_DESC_CACHE_FRONTEND_VISITORS', " Czas odświeżania danych gości w module ExtraWatch Visitors (w sekundach).");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TODAY', "Czy w module ExtraWatch Visitors wyświetlać dane gości z dnia dzisiejszego? Zmiana będzie widoczna po czasie zapisanym w zmiennej CACHE_FRONTEND_.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_YESTERDAY', "Czy w module ExtraWatch Visitors wyświetlać dane gości z dnia wczorajszego? Zmiana będzie widoczna po czasie zapisanym w zmiennej CACHE_FRONTEND_.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_WEEK', "Czy w module ExtraWatch Visitors wyświetlać dane gości z bieżącego tygodnia? Zmiana będzie widoczna po czasie zapisanym w zmiennej CACHE_FRONTEND_.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_WEEK', "Czy w module ExtraWatch Visitors wyświetlać dane gości z ubiegłego tygodnia? Zmiana będzie widoczna po czasie zapisanym w zmiennej CACHE_FRONTEND_.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_THIS_MONTH', "Czy w module ExtraWatch Visitors wyświetlać dane gości z bieżącego miesiąca? Zmiana będzie widoczna po czasie zapisanym w zmiennej CACHE_FRONTEND_.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_LAST_MONTH', "Czy w module ExtraWatch Visitors wyświetlać dane gości z ubiegłego miesiąca? Zmiana będzie widoczna po czasie zapisanym w zmiennej CACHE_FRONTEND_.");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL', "Czy w module ExtraWatch Visitors wyświetlać całkowitą liczbę zarejestrowanych odwiedzin? Zmiana będzie widoczna po czasie zapisanym w zmiennej CACHE_FRONTEND_.");
DEFINE('_EW_DESC_LANGUAGE', "Plik języka wykorzystywany do wyświetlania komunikatów w modułach portalu oraz w panelu admina. Wszystkie pliki językowe są zapisane w folderze /components/com_extrawatch/lang/. Jeżeli chcesz utworzyć nowy plik, najpierw sprawdź stronę projektu. Jeśli nie ma tam pliku Twojego języka, skopiuj plik english.php, dadając mu nową nazwę, np. polish-utf8.php. Następnie przetłumacz wszystkie napisy i zapisz plik w folderze plików językowych.");
DEFINE('_EW_DESC_GOALS', "Cele powalają na określenie szczegółowych parametrów interesujących Cię statystyk. Jeżeli wystąpi spełnienie określonych przez Ciebie warunków, zostanie zwiększony licznik dla danego celu.<br />Poprzez odpowiednie wykorzystanie celów możesz sprawdzać, czy goście odwiedzają określone adresy URL, wysyłają określone dane, czy zanotowano wizyty użytkowników o określonych nazwach, wywołania z określonych adresów itp. Możesz również blokować dostęp określonym użytkownikom lub przekierowywać ich do innych adresów URL.");
DEFINE('_EW_DESC_GOALS_INSERT', "We wszystkich polach oprócz pola nazwy możesz używać symboli globalnych (gwiazdki i pytajnika), np. ?aj (pasujące frazy: dzisiaj, wczoraj itp.),  p*e (pasujące frazy: pe, prawie, ponownie itp.)");
DEFINE('_EW_DESC_GOALS_BLOCK', "Ustaw 1, jeżeli chcesz zablokować użytkownika. Zablokowany użytkownik nie widzi zawartości strony, a jedynie komunikat o blokadzie. Jego adres IP jest dopisywany do listy zablokowanych. Przykładowe zastosowanie: <b>1</b>.");

/* Nowe tłumaczenia */
DEFINE('_EW_GOALS_COUNTRY_CONDITION', "Warunek dla kraju");
DEFINE('_EW_DESC_GOALS_COUNTRY_CONDITION', "Dwuznakowy kod kraju DUŻYMI LITERAMI, np. <b>PL</b>.");
DEFINE('_EW_STATS_INTERNAL', "Przekierowania wewnętrzne");
DEFINE('_EW_STATS_FROM', "Z");
DEFINE('_EW_STATS_TO', "Do");
DEFINE('_EW_STATS_ADD_TO_GOALS', "Dodaj do celów");
DEFINE('_EW_VISITS_ADD_GOAL_COUNTRY', "Dodaj cel dla tego kraju...");
DEFINE('_EW_MENU_REPORT_BUG', "Zgłoś błąd");
DEFINE('_EW_GOALS_COUNTRY', "Kraj");


/* Tłumaczenia dla wersji 1.2.8b_12 */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_UPPERCASE', "Nazwy krajów pisane dużymi literami (w module ExtraWatch Visitors).");
DEFINE('_EW_DESC_CACHE_FRONTEND_USERS', "Czas odświeżania danych użytkowników w module ExtraWatch Visitors (w sekundach).");
DEFINE('_EW_DESC_FRONTEND_VISITORS_TOTAL_INITIAL', "Początkowa wartość całkowitej liczby odwiedzin wyświetlanej w module ExtraWatch Visitors. Ustawienie przydatne w przypadku przejścia z innego systemu statystyk.");
DEFINE('_EW_DESC_IGNORE_USER', "Użytkownicy, których dane mają być ignorowane. Jeden wpis w wierszu. Przykładowe zastosowanie: <b>stan</b> {nowy wiersz} <b>mark_*</b>.");
DEFINE('_EW_FRONTEND_USERS_MOST', "Najbardziej aktywni użytkownicy bieżącego dnia.");
DEFINE('_EW_DESC_SPAMWORD_BANS_ENABLED', "Czy umożliwić automatyczne blokowanie użytkowników wykorzystujących słowa z poniższej listy?");
DEFINE('_EW_DESC_SPAMWORD_LIST', "Słowa najczęściej wykorzystywane przez boty rozsyłające spam. Można wykorzystywać symbole globalne, np. ph?rmac*.<br /><br />Jeżeli blokowanie spamu jest włączone, ExtraWatch sprawdzi, czy nadawca przesłał dane poprzez polecenie POST, wykorzystując formularz na Twojej stronie. <br /><br />Lista znajduje zastosowanie, jeśli formularz korzysta z zasobów Joomli (forum, komentarze), jest również przydatna do blokowania innych prób przesyłania formularzy ze spamem.");
DEFINE('_EW_SETTINGS_ANTI_SPAM', "Anty-spam");
DEFINE('_EW_DESC_FRONTEND_USER_LINK', "Odnośnik w module ExtraWatch Users. Adres URL otwierany po kliknięciu nazwy użytkownika. Musi zawierać frazę {user}, która zostanie zastąpiona właściwą nazwą użytkownika. Przykład zastosowania: <b>index.php?option=com_comprofiler&task=userProfile&user={user}</b>.");

/* translations 1.2.11b */
DEFINE('_EW_STATS_KEYPHRASE', "Frazy kluczowe");
DEFINE('_EW_DESC_HISTORY_MAX_VALUES', "Maksymalna długość listy w zakładce Historia (np. 100).");

DEFINE('_EW_DESC_ONLY_LAST_URI', "W statystykach wizyt: pokazuj tylko ostatnią wyświetloną stronę (a nie wszystkie odwiedzone).");
DEFINE('_EW_DESC_HIDE_REPETITIVE_TITLE', "W statystykach wizyt: ukryj powtarzające się tytuły stron.");
DEFINE('_EW_DESC_HISTORY_MAX_DB_RECORDS', "Maksymalna liczba wizyt przechowywanych w bazie danych (do wykorzystania w historii wizyt). Zachowaj ostrożność przy zmianie tej wartości. Jeżeli Twoja strona jest intensywnie odwiedzana, baza danych może gwałtownie rosnąć. Zawsze sprawdzaj rozmiar tabeli z danymi historycznymi w zakładce Status.");
DEFINE('_EW_DESC_UNINSTALL_KEEP_DATA', "Podczas dezinstalacji zachowaj tabele bazy danych. Zaznacz tę opcję przez dezinstalacją, jeżeli dokonujesz aktualizacji komponentu lub chcesz zachować dane.");

/* email reports */
DEFINE('_EW_DESC_EMAIL_REPORTS_ENABLED', "Zaznacz, aby system wysyłał Ci w nocy raporty za ubiegły dzień.");
DEFINE('_EW_DESC_EMAIL_REPORTS_ADDRESS', "Adres e-mail, na który mają być wysyłane raporty.");
DEFINE('_EW_DESC_EMAIL_PERCENT_HIGHER_THAN', "Uwzględnij w raporcie tylko wiersze z odsetkiem większym niż {podana wartość}. Wpisz 0, jeżeli nie chcesz używać tej funkcji. Przykład: 10.");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_POSITIVE', "Uwzględnij w raporcie tylko <b>dodatnie dzienne zmiany</b> większe niż {podana wartość}&nbsp;%. Wpisz 0, jeżeli nie chcesz używać tej funkcji. Przykład: 5.");
DEFINE('_EW_DESC_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "Uwzględnij w raporcie tylko <b>ujemne dzienne zmiany</b> mniesze niż {podana wartość}&nbsp;%. Wpisz 0, jeżeli nie chcesz używać tej funkcji. Przykład: -10.");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "Uwzględnij w raporcie tylko <b>dodatnie 7-dniowe zmiany</b> większe niż {podana wartość}&nbsp;%. Wpisz 0, jeżeli nie chcesz używać tej funkcji. Przykład: 2.");
DEFINE('_EW_DESC_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "Uwzględnij w raporcie tylko <b>ujemne 7-dniowe zmiany</b> mniesze niż {podana wartość}&nbsp;%. Wpisz 0, jeżeli nie chcesz używać tej funkcji. Przykład: -13.");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "Uwzględnij w raporcie tylko <b>dodatnie 28-dniowe zmiany</b> większe niż {podana wartość}&nbsp;%. Wpisz 0, jeżeli nie chcesz używać tej funkcji. Przykład: 2.");
DEFINE('_EW_DESC_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "Uwzględnij w raporcie tylko <b>ujemne 28-dniowe zmiany</b> mniesze niż {podana wartość}&nbsp;%. Wpisz 0, jeżeli nie chcesz używać tej funkcji. Przykład: -13.");

DEFINE('_EW_DESC_FRONTEND_NOFOLLOW', "<b>(Dotyczy wersji PRO)</b> Zaznacz, aby dodać do brazka loga atrybut rel='nofollow'.");
DEFINE('_EW_DESC_EMAIL_NAME_TRUNCATE', "Maksymalna liczba znaków w nazwie wiersza. Zmień, jeśli Twoje okno klienta poczty jest za małe.");

DEFINE('_EW_MENU_HISTORY', "Historia");
DEFINE('_EW_MENU_EMAILS', "E-mail");
DEFINE('_EW_MENU_STATUS', "Status");
DEFINE('_EW_DESC_BLOCKED', "Te adresy IP zostały zablokowane przez system ochrony antyspamowej");


DEFINE('_EW_HISTORY_VISITORS', "Historia odwiedzin");
DEFINE('_EW_HISTORY_SHOWING_ONLY', "Wyświetlono tylko %d końcowych rekordów. Aby zmienić tę wartość, przejdź do zakładki Ustawienia -&gt; Historia i wydajność i ustal nową wartość parametru HISTORY_MAX_DB_RECORDS. Bądź ostrożny, podana wartość ma wpływ na czas pobierania poniższych danych.");
DEFINE('_EW_MENU_BUG', "Zgłoś błąd");
DEFINE('_EW_MENU_FEATURE', "Zaproponuj rozszerzenie");

DEFINE('_EW_VISITS_CAME_FROM_KEYWORDS', "Słowa kluczowe");

DEFINE('_EW_BLOCKING_UNBLOCK', "odblokuj");
DEFINE('_EW_STATS_KEYPHRASE ', "Frazy kluczowe");
DEFINE('_EW_STATUS_DATABASE', "Status bazy danych");

DEFINE('_EW_STATUS_DATABASE_TABLE_NAME', "Nazwa tabeli");
DEFINE('_EW_STATUS_DATABASE_ROWS', "Wiersze");
DEFINE('_EW_STATUS_DATABASE_DATA', "Dane");
DEFINE('_EW_STATUS_DATABASE_TOTAL', "Razem");

DEFINE('_EW_EMAIL_REPORTS', "Raporty e-mail");
DEFINE('_EW_EMAIL_REPORT_GENERATED', "Przesyłki e-mail zatrzymane przez filtr w dniu wczorajszym");
DEFINE('_EW_EMAIL_REPORTS_VALUE_FILTERS', "Filtry poczty");
DEFINE('_EW_EMAIL_REPORTS_VALUE', "Wartość");
DEFINE('_EW_EMAIL_REPORTS_PERCENT', "Odsetek");
DEFINE('_EW_EMAIL_REPORTS_1DAY_CHANGE', "Zmiany &middot; 1 dzień");
DEFINE('_EW_EMAIL_REPORTS_7DAY_CHANGE', "Zmiany &middot; 7 dni");
DEFINE('_EW_EMAIL_REPORTS_28DAY_CHANGE', "Zmiany &middot; 28 dni");
DEFINE('_EW_SIZEDATABASE_28DAY', "Zmiany &middot; 28 dni");
DEFINE('_EW_EMAIL_REPORTS_30DAY_CHANGE', "Zmiany &middot; 30 dni");
DEFINE('_EW_ANTISPAM_BLOCKED', "ExtraWatch zablokował %d wizyt spamerów; razem: %d.");
DEFINE('_EW_ANTISPAM_ADDRESSES', "Zablokowany adres IP");
DEFINE('_EW_ANTISPAM_SETTINGS', "Ustanienia anty-spamowe");
DEFINE('_EW_ANTISPAM_BLOCKING_TEXT', "Aby zabezpieczenia anty-spamowe działały, musisz opublikować moduł ExtraWatch Agent ZANIM opublikujesz jakiekolwiek elementy zawartości portalu.<br />Wybierz w menu polecanie Rozszerzenia -> Moduły -> ExtraWatch Agent i opublikuj moduł.");
DEFINE('_EW_ANTISPAM_DESCRIPTION', "Aby zabezpieczenia anty-spamowe działały, musisz opublikować moduł ExtraWatch Agent ZANIM opublikujesz jakiekolwiek elementy zawartości portalu.<br />Wybierz w menu polecanie Rozszerzenia -> Moduły -> ExtraWatch Agent i opublikuj moduł.");
DEFINE('_EW_TRAFFIC_AJAX', "<br />Aktualizacje AJAX");


DEFINE('_EW_HISTORY_PREVIOUS', " poprzedni");
DEFINE('_EW_HISTORY_NEXT', "następny ");

/** additional translation for 1.2.11 for countries in more rows */
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_COLUMNS', "Liczba kolumn z danymi krajów (w module ExtraWatch Visitors).");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_MAX_ROWS', "Liczba wierszy z danymi krajów (w module ExtraWatch Visitors).");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_NAMES', "Wyświetlanie nazw krajów (w module ExtraWatch Visitors).");
DEFINE('_EW_DESC_FRONTEND_COUNTRIES_FLAGS_FIRST', "Wyświetlanie najpierw flagi, a potem procentów (w module ExtraWatch Visitors).");

/* ExtraWatch 1.2.14 translations */

DEFINE('_EW_GOALS_GET_INVERSED', "Odwrotny warunek dla zmiennej GET");
DEFINE('_EW_GOALS_POST_INVERSED', "Odwrotny warunek dla zmiennej POST");
DEFINE('_EW_GOALS_TITLE_INVERSED', "Odwrotny warunek dla tytułu");
DEFINE('_EW_GOALS_USERNAME_INVERSED', "Odwrotny warunek dla nazwy użytkownika");
DEFINE('_EW_GOALS_CAME_FROM_INVERSED', "Odwrotny warunek dla adresu wywołania");
DEFINE('_EW_GOALS_REQUIRED', "(* wymagane)");

DEFINE('_EW_STATS_MAP', "Ostatnie wizyty");
DEFINE('_EW_STATS_MAP_ENTER_KEY', "Wprowadź klucz <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>, aby wyświetlić mapę ostatnich wizyt:");
DEFINE('_EW_STATS_MAP_STORE_KEY', "Zapisz klucz");
DEFINE('_EW_STATS_MAP_INVALID_KEY', "Wprowadź prawidłowy klucz ipinfodb pobrany ze strony <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>.");

DEFINE('_EW_SIZEQUERY_BAD_REQUEST', "B�?ĘDNE WYWO�?ANIE: ");

DEFINE('_EW_VISIT_SUBMITED_FIELDS', "Przesłano z pól:");
DEFINE('_EW_VISIT_URL_PARAMETERS', "Parametry URL:");
DEFINE('_EW_VISIT_ADD_PAGE', " Dodaj stronę jako cel");
DEFINE('_EW_VISIT_BLOCK_IP', " Blokuj ten adres IP");
DEFINE('_EW_VISIT_SUBMITED_FROM_VARIABLE', " Dodaj ten formularz zmiennych jako cel");
DEFINE('_EW_VISIT_URL_PARAMETER_GOAL', " Dodaj ten parametr URL jako cel");

DEFINE('_EW_TREND_EMPTY', "Brak");

DEFINE('_EW_NOT_NUMBER', " UWAGA: Wprowadzona wartość nie jest liczbą. ExtraWatch nie będzie działać prawidłowo!");
DEFINE('_EW_EVALUATION_LEFT', "&nbsp; To jest 15-dniowa wersja testowa. Liczba dni do wygaśnięcia licencji: <b>%d</b>. Kup dla tej domeny <a href='http://www.codegravity.com/donate/extrawatch/' target='_blank'>wersję bez ograniczeń czasowych</a>.");
DEFINE('_EW_TRIAL_VERSION_EXPIRED', " Wersja testowa wygasła. Kup wersję pełną.");

DEFINE('_EW_CONFIG_LICENSE_ACTIVATED', "Aktywowano licencję. Dziękujemy.");
DEFINE('_EW_CONFIG_LICENCE_DONT_MATCH', "<b>Błąd: klucz licencji nie został wydany dla tej domeny.</b><br/>Czy podczas zakupu podałeś tę samą nazwę domeny, co widoczna poniżej? Aby wyjaśnić tę sprawę, napisz: support@codegravity.com");

DEFINE('_EW_VIEW_ADMINBODY_LONG_MESSAGE', "Jeżeli widzisz powyższy komunikat zbyt długo, bazowa nazwa domeny (live_site) może być błędna. Otwórz plik components/com_extrawatch/config.php i podaj właściwą nazwę. Przykład: define('EXTRAWATCH_LIVE_SITE', 'http://www.codegravity.com');");

DEFINE('_EW_ADMINBODY_LIVE_SITE', "Uwaga: używana domena i domena podana jako live_site (%s oraz %s) są różne.");
DEFINE('_EW_ADMINBODY_SET_LIVE_SITE', "Ustal live_site na: %s i kontynuuj...");

DEFINE('_EW_ADMINHEADER_JW', "ExtraWatch");
DEFINE('_EW_ADMINHEADER_REMOVE_BACKLINK', "Usuń odnośnik");
DEFINE('_EW_ADMINHEADER_KNOWLEDGE_BASE', "Baza wiedzy");
DEFINE('_EW_ADMINHEADER_FLOW', "Ruch");
DEFINE('_EW_ADMINHEADER_GRAPHS', "Wykresy");
DEFINE('_EW_ADMINHEADER_COMPONENTS', "Składniki");
DEFINE('_EW_ADMINHEADER_REVIEW', "recenzję");
DEFINE('_EW_ADMINHEADER_WRITE', ". Napisz ");

DEFINE('_EW_FLOW_TRAFFIC', "Ruch");
DEFINE('_EW_FLOW_SELECT_PAGE', "Wybierz stronę:");
DEFINE('_EW_FLOW_OUTG_LINKS', "Liczba odnośników ze strony głównej:");
DEFINE('_EW_FLOW_NESTING', "Poziom zagnieżdżenia:");
DEFINE('_EW_FLOW_SCALE', "Skala:");
DEFINE('_EW_FLOW_COLOR', "Kolor");
DEFINE('_EW_FLOW_PERCENTAGE', "Odsetek");
DEFINE('_EW_FLOW_FROM', "Z");
DEFINE('_EW_FLOW_TO', "Do");
DEFINE('_EW_FLOW_COUNT', "Liczba");
DEFINE('_EW_FLOW_SUM', "Suma");

DEFINE('_EW_COMERCIAL_AD_FREE', "Wersja PRO (bez reklam)");
DEFINE('_EW_COMERCIAL_THANK_DONATION', "Bardzo dziękujemy za wsparcie!");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY', "Klucz rejestracji dla domeny %s: ");
DEFINE('_EW_COMERCIAL_REGISTRATION_KEY_IS', "");
DEFINE('_EW_COMERCIAL_BACKLINKS_REMOVE', "Możesz teraz usunąć z witryny odnośnik do strony ExtraWatch lub ukryć logo (zmień parametry zakładce Ustawienia).");

DEFINE('_EW_SIZES_LAST_CHECK', "Data ostatniego sprawdzenia:");
DEFINE('_EW_SIZES_ADMINISTRATOR', "Kolor NIEBIESKI = komponent / moduł w folderze /administrator.");

DEFINE('_EW_SIZECOMPONENTS_COMPONENT', "Komponent");
DEFINE('_EW_SIZECOMPONENTS_TOTAL', "Razem:");
DEFINE('_EW_SIZECOMPONENTS_SIZE', "Rozmiar");
DEFINE('_EW_SIZECOMPONENTS_REFRESH_ALL', "Odśwież wszystko");

DEFINE('_EW_SIZEDATABASE_TABLE', "Tabela");
DEFINE('_EW_SIZEDATABASE_RECORDS', "Rekordy");
DEFINE('_EW_SIZEDATABASE_SIZE', "Rozmiar");
DEFINE('_EW_SIZEDATABASE_1DAY', "Zmiany &middot; 1 dzień");
DEFINE('_EW_SIZEDATABASE_7DAY', "Zmiany &middot; 7 dni");
DEFINE('_EW_SIZEDATABASE_30DAY', "Zmiany &middot; 30 dni");
DEFINE('_EW_SIZEDATABASE_NO_DATA', "Brak danych.");
DEFINE('_EW_SIZEDATABASE_TOTAL', "Razem:");

DEFINE('_EW_SIZEMODULES_REFRESH_ALL', "Odśwież wszystko");
DEFINE('_EW_SIZEMODULES_TOTAL', "Razem:");
DEFINE('_EW_SIZEMODULES_MODULE', "Moduł");
DEFINE('_EW_SIZEMODULES_SIZE', "Rozmiar");

DEFINE('_EW_SIZES_FILES', "Pliki i foldery");
DEFINE('_EW_SIZES_BYTES', "bajtów");
DEFINE('_EW_SIZES_KB', "KB");
DEFINE('_EW_SIZES_MB', "MB");
DEFINE('_EW_SIZES_GB', "GB");
DEFINE('_EW_SIZES_REFRESH', "Odśwież");

DEFINE('_EW_STATS_FOOTER', "ExtraWatch &copy;2006-2011 by CodeGravity.com");

DEFINE('_EW_STATUS_MB', "MB");

DEFINE('_EW_DESC_IPINFODB_KEY', "Klucz mapy wizyt ipinfodb.com pobrany ze strony <a href='http://www.ipinfodb.com/register.php' target='_blank'>ipinfodb.com</a>.");
DEFINE('_EW_SETTINGS_FORCE_TIMEZONE_OFFSET', "Uwzględnij różnicę czasu");

/* ExtraWatch 1.2.17 translations */
DEFINE('_EW_EMAIL_REPORTS_ENABLED', "Raporty e-mail");
DEFINE('_EW_EMAIL_REPORTS_ADDRESS', "Adres");
DEFINE('_EW_EMAIL_NAME_TRUNCATE', "Liczba znaków w wierszu");
DEFINE('_EW_EMAIL_PERCENT_HIGHER_THAN', "Więcej niż ... %");
DEFINE('_EW_EMAIL_ONE_DAY_CHANGE_POSITIVE', "Wzrost dzienny większy niż ... %");
DEFINE('_EW_EMAIL_ONE_DAY_CHANGE_NEGATIVE', "Spadek dzienny większy niż ... %");
DEFINE('_EW_EMAIL_SEVEN_DAY_CHANGE_POSITIVE', "Wzrost tygodniowy większy niż ... %");
DEFINE('_EW_EMAIL_SEVEN_DAY_CHANGE_NEGATIVE', "Spadek tygodniowy większy niż ... %");
DEFINE('_EW_EMAIL_TWENTY_EIGHT_DAY_CHANGE_POSITIVE', "Wzrost 28-dniowy większy niż ... %");
DEFINE('_EW_EMAIL_TWENTY_EIGHT_DAY_CHANGE_NEGATIVE', "Spadek 28-dniowy większy niż ... %");
DEFINE('_EW_EMAIL_SEO_REPORTS_ENABLED', "Raporty SEO");

DEFINE('_EW_MENU_UPDATE', "Aktualizacja");
DEFINE('_EW_MENU_UPDATE_TITLE', "Archiwizacja i aktualizacja");
DEFINE('_EW_ADMINHEADER_NA_IN_THIS_VERSION', "Niedostępne w wersji darmowej. Zachęcamy do zakupu licencji PRO.");

DEFINE('_EW_SPAMWORD_BANS_ENABLED', "Blokowanie spamu");
DEFINE('_EW_SPAMWORD_LIST', "Zakazane słowa");

DEFINE('_EW_LANGUAGE', "Język");
DEFINE('_EW_ONLY_LAST_URI', "Tylko ostatnia strona");
DEFINE('_EW_HIDE_REPETITIVE_TITLE', "Ukryj powtarzające się tytuły");
DEFINE('_EW_TRUNCATE_VISITS', "Maks. długość opisów");
DEFINE('_EW_TRUNCATE_STATS', "Maks. długość statystyk");
DEFINE('_EW_TRUNCATE_GOALS', "Maks. długość celów");
DEFINE('_EW_LIMIT_BOTS', "Maks. liczba botów");
DEFINE('_EW_LIMIT_VISITORS', "Maks. liczba gości");
DEFINE('_EW_TOOLTIP_WIDTH', "Tooltip - szerokość");
DEFINE('_EW_TOOLTIP_HEIGHT', "Tooltip - wysokość");
DEFINE('_EW_TOOLTIP_URL', "Tooltip - źródło danych");
DEFINE('_EW_TOOLTIP_ONCLICK', "Tooltip na kliknięcie");
DEFINE('_EW_IP_STATS', "Statystyki IP");
DEFINE('_EW_IPINFODB_KEY', "Klucz lokalizatora IP");

DEFINE('_EW_FRONTEND_HIDE_LOGO', "Ukryj logo");
DEFINE('_EW_FRONTEND_NOFOLLOW', "Atrybut nofollow");
DEFINE('_EW_FRONTEND_NO_BACKLINK', "Logo z odnośnikiem");
DEFINE('_EW_FRONTEND_USER_LINK', "Odnośnik użytkownika");
DEFINE('_EW_FRONTEND_COUNTRIES_FIRST', "Najpierw kraje");
DEFINE('_EW_FRONTEND_COUNTRIES_NAMES', "Nazwy krajów");
DEFINE('_EW_FRONTEND_COUNTRIES_UPPERCASE', "Kraje kapitalikami");
DEFINE('_EW_FRONTEND_COUNTRIES_FLAGS_FIRST', "Najpierw flagi");
DEFINE('_EW_FRONTEND_COUNTRIES_NUM', "Liczba krajów");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_COLUMNS', "Liczba kolumn");
DEFINE('_EW_FRONTEND_COUNTRIES_MAX_ROWS', "Liczba wierszy");

DEFINE('_EW_FRONTEND_VISITORS_TODAY', "Goście - dzisiaj");
DEFINE('_EW_FRONTEND_VISITORS_YESTERDAY', "Goście - wczoraj");
DEFINE('_EW_FRONTEND_VISITORS_THIS_WEEK', "Goście - bieżacy tydzień");
DEFINE('_EW_FRONTEND_VISITORS_LAST_WEEK', "Goście - poprzedni tydzień");
DEFINE('_EW_FRONTEND_VISITORS_THIS_MONTH', "Goście - bieżacy miesiąc");
DEFINE('_EW_FRONTEND_VISITORS_LAST_MONTH', "Goście - poprzedni miesiąc");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL', "Goście - razem");
DEFINE('_EW_FRONTEND_VISITORS_TOTAL_INITIAL', "Początkowa liczba odwiedzin");

DEFINE('_EW_HISTORY_MAX_VALUES', "Maks. długość listy");
DEFINE('_EW_HISTORY_MAX_DB_RECORDS', "Maks. liczba rekordów");
DEFINE('_EW_UPDATE_TIME_VISITS', "Czas odświeżania - wizyty");
DEFINE('_EW_UPDATE_TIME_STATS', "Czas odświeżania - statystyki");
DEFINE('_EW_STATS_MAX_ROWS', "Maks. liczba wierszy");
DEFINE('_EW_STATS_IP_HITS', "Liczba kliknięć dla adresów IP");
DEFINE('_EW_MAXID_BOTS', "Maks. liczba botów");
DEFINE('_EW_MAXID_VISITORS', "Mkas. liczba odwiedzin");
DEFINE('_EW_STATS_KEEP_DAYS', "Czas przechowywania");
DEFINE('_EW_CACHE_FRONTEND_COUNTRIES', "Czas odświeżania - kraje");
DEFINE('_EW_CACHE_FRONTEND_VISITORS', "Czas odświeżania - goście");
DEFINE('_EW_CACHE_FRONTEND_USERS', "Czas odświeżania - użytkownicy");

DEFINE('_EW_UNINSTALL_KEEP_DATA', "Zachowaj dane przy dezinstalacji");
DEFINE('_EW_IGNORE_IP', "Ignoruj IP");
DEFINE('_EW_IGNORE_URI', "Ignoruj URI");
DEFINE('_EW_IGNORE_USER', "Ignoruj użytkowników");
DEFINE('_EW_BLOCKING_MESSAGE', "Informacja");

DEFINE('_EW_SERVER_URI_KEY', "Klucz URI serwera");

DEFINE('_EW_SEO_TOP_REFERRED_PAGES', "Najczęściej odwiedzane strony (wg fraz kluczowych) - ");
DEFINE('_EW_SEO_NOT_VISITED', "Nie zanotowano dotąd żadnych odwiedzin.");

/***********EDITs*****************/
DEFINE('_EW_EMAIL_SEO_REPORTS', "Raporty SEO");
DEFINE('_EW_DESC_EMAIL_SEO_REPORTS_ENABLED', "Zaznacz, aby otrzymywać raporty SEO.");
DEFINE('_EW_WATCH_INSTALLATION_DEMO', "Demo instalacji");

/* Added by Stan */
DEFINE('_EW_REGISTERED_VISITS', "Liczba zarejestrowanych kliknięć: ");
DEFINE('_EW_REGISTERED_AT', "Ostatnie przeładowanie: ");
DEFINE('_EW_SETLOCALE', "pl_PL.utf-8");

/** JW 1.2.18 */
DEFINE('_EW_ADMINHEADER_HEATMAP', "Heatmap");
DEFINE('_EW_HEATMAP_CLICKS', "clicks");
DEFINE('_EW_HEATMAP_TITLE', "title");
DEFINE('_EW_HEATMAP_CLICK_OPEN', "Click to open heatmap");
DEFINE('_EW_NO_DATA', "This section contains no data yet ...");
DEFINE('_EW_POSITION', "Search result num.");
DEFINE('_EW_BLOCKING_REASON', 'reason');
DEFINE('_EW_BLOCKING_UNAUTHORIZED_ACCESS', 'Unauthorized Access');
DEFINE('_EW_BLOCKING_BLOCKED_MANUALLY', 'Blocked manually');
DEFINE('_EW_BLOCKING_BAD_WORD', "bad word");
DEFINE('_EW_HEATMAP_OF', "of");
DEFINE('_EW_URI', "uri");
DEFINE('_EW_COUNT', "count");
DEFINE('_EW_SEO_REPORT_FOR', "SEO report for");
DEFINE('_EW_SEO_MOST_DYNAMIC_KEYPHRASES', "Most dynamic keyphrases");
DEFINE('_EW_SEO_MIN_POSITION', "min position");
DEFINE('_EW_SEO_AVG_POSITION', "average position");
DEFINE('_EW_SEO_MAX_POSITION', "max position");
DEFINE('_EW_SEO_CHANGE', "change");
DEFINE('_EW_SEO_DATE_OF_LAST_CHANGE', "date of last change");
DEFINE('_EW_SEO_TOTAL_VISITS_FROM_SEARCH_ENGINES', "Total visits by keyphrase from search engines");
DEFINE('_EW_GOAL_ADD_SUBMITTED_VALUE', "Add submitted variable as goal");
DEFINE('_EW_RENDERED_IN', "Rendered in");
DEFINE('_EW_DESC_SEO_RENDER_ONLY_CHANGED', "Render only values which were already used in previous days (have some percentage in change column)");
DEFINE('_EW_SEO_REPORT_SETTINGS', "SEO Report Settings");


DEFINE('_EW_HTTP500_ERROR', "Could not initialize ExtraWatch javascript functions! Browser could not load: \\n%s, because it returned HTTP 500 internal server error.  \\nThis usually of security restrictions by other components/plugins. Please check your .htaccess file in your root Joomla directory.  \\nIf you use Akeeba Admin tools, you need to go \ 'Akeeba htaccess maker\ ' -> \ 'Server Protection\ ' -> \ 'Exceptions\ ' -> \ 'Allow direct access to these files\ ', and add: \\n/components/com_joomlawatch/block.php \\n/components/com_joomlawatch/img.php \\n/components/com_joomlawatch/last.php \\n/components/com_joomlawatch/lastvisit.php \\n/components/com_joomlawatch/sizequery.php \\n/components/com_joomlawatch/sizequerytotal.php \\n/components/com_joomlawatch/stats.php \\n/components/com_joomlawatch/timezone.php \\n/components/com_joomlawatch/tooltip.php \\n/components/com_joomlawatch/trendtooltip.php \\n/components/com_joomlawatch/vars.php \\n/components/com_joomlawatch/visits.php \\n/components/com_joomlawatch/js/joomlawatch.js.php \\n/components/com_joomlawatch/js/maps.js.php ");

DEFINE('_EW_AGENT_NOT_PUBLISHED_ERROR_JOOMLA',"Warning: No visits are currently being recorded. Your ExtraWatch Agent module is published, but most probably in position which does not exist in your template.
                <br/><br/>
                To fix this: <br/>
                1. go to Modules section -&gt; ExtraWatch Agent <br/>
                2. change the Position to 'left' or 'footer' (or some other position).<br/>
                3. check if new visits are being recorded
                <br/><br/>
                If this won't help, you can also: <br/>
                1. set 'Show Title' to 'Yes' in  Modules section -&gt; ExtraWatch Agent <br/>
                2. try to use some other positions of ExtraWatch agent module<br/>
                3. save<br/>
                4. after reload of your main page look for 'ExtraWatch Agent' text.<br/>
                5. this way you'll make sure the Agent module is published.<br/>
                6. after that you can set 'Show Title' back to 'No'.
                ");
/** Goals/Import IP */
DEFINE('_EW_GOALS', "Goals");
DEFINE('_EW_GOALS_IMPORT', "Import goals");
DEFINE('_EW_GOALS_IMPORT_XML', "Import XML");
DEFINE('_EW_GOALS_EXPORT', "Export goals");
DEFINE('_EW_GOALS_FILENAME', "Select goals previously exported as XML");
DEFINE('_EW_ANTISPAM_IMPORT_CSV', "import anti-spam ip csv");

DEFINE('_EW_AGENT_NOT_PUBLISHED_ERROR_WORDPRESS',"Warning: No visits are being recorded. You must go to Appearance->Widgets section, <br/>find ExtraWatchAgent widget and drag&drop it to some of the containers on the right side. <br/>You can publish also other ExtraWatch modules this way. <br/><br/>Check the demonstration video:<br/><br/><iframe id='video-player' width='800' height='468' src='http://www.youtube.com/embed/uu_luBKJ8jI?enablejsapi=1&autoplay=1&rel=0&modestbranding=1&showinfo=0&showsearch=0&vq=hd1080' frameborder='0' allowfullscreen></iframe><br/><br/>In case of any questions about installation or problems, you can take advantage of our support on <a href='http://www.extrawatch.com' target='_blank'>http://www.extrawatch.com</a>");


/** 2.1 */
DEFINE('_EW_MENU_DOWNLOADS', "Downloads");
DEFINE('_EW_DOWNLOADS_FILE_NOT_FOUND', "FILE NOT FOUND");
DEFINE('_EW_DOWNLOADS_HTACCESS_NOT_WRITABLE', "Your .htaccess is not Writable.");
DEFINE('_EW_DOWNLOADS_HTACCESS_COULD_NOT_BE_CREATED', ".htaccess could not be created, Please create your own.");
DEFINE('_EW_DOWNLOADS_ADD_EXTENSION', "Add Extension");
DEFINE('_EW_DOWNLOADS_EXTENSION_NAME', "Extension Name");
DEFINE('_EW_DOWNLOADS_WARNING', "<b>Warning:</b> always backup your .htaccess file before adding new extension or path! Do not add 'php' as monitored extension. <br/>Be also careful with adding png/jpg, the download count will be increased once someone opens your page which contains images with this extension.");
DEFINE('_EW_DOWNLOADS_ADD_FILE_PATH', "Add File/Path");
DEFINE('_EW_DOWNLOADS_FILE_PATH_NAME', "File/Path Name");
DEFINE('_EW_DOWNLOADS_DOWNLOAD_MONITOR', "Download Monitor");
DEFINE('_EW_DOWNLOADS_EXTENSIONS_BEING_MONITORED', "Extensions Being Monitored");
DEFINE('_EW_DOWNLOADS_FILES_PATHS_BEING_MONITORED', "Files/Paths Being Monitored");
DEFINE('_EW_DOWNLOADS_EDIT_EXTENSION', "Edit Extension");
DEFINE('_EW_DOWNLOADS_EDIT_FILE_PATH', "Edit File/Path");
DEFINE('_EW_DOWNLOADS_EXTENSION', "Extension");
DEFINE('_EW_DOWNLOADS_ACTION', "Action");
DEFINE('_EW_DOWNLOADS_PATH', "Path");
DEFINE('_EW_DOWNLOADS_TODAY', "Today");
DEFINE('_EW_DOWNLOADS_YESTERDAY', "Yesterday");
DEFINE('_EW_DOWNLOADS_THIS_WEEK', "This Week");
DEFINE('_EW_DOWNLOADS_LAST_WEEK', "Last Week");
DEFINE('_EW_DOWNLOADS_THIS_MONTH', "This Month");
DEFINE('_EW_DOWNLOADS_LAST_MONTH', "Last Month");
DEFINE('_EW_DOWNLOADS_INCOMPLETE', "The required Information is incomplete");

DEFINE('_EW_STATS_SOCIAL_MEDIA', "Media");
DEFINE('_EW_MENU_AVAILABLE_IN_PRO',"Available in PRO version");
DEFINE('_EW_DOWNLOADS_TOTAL',"Total Downloads");


/** 3.0 - hosted version */
DEFINE('_EW_GOALS_CLICKED_ELEMENT_XPATH_CONDITION', "xpath of clicked element condition");
DEFINE('_EW_DESC_GOALS_CLICKED_ELEMENT_XPATH_CONDITION', "xpath of clicked element condition");

DEFINE('_EW_STATS_DEVICES', "Mobile Devices");

DEFINE('_EW_BLOCKED_BASED_ON_GOAL',"Blocked based on goal no. %s");


DEFINE('_EW_TIME_BETWEEN_VISITS',"Total time spent");
DEFINE('_EW_LEFT_WEBSITE',"Left website");
DEFINE('_EW_MENU_USERS',"Users");
DEFINE('_EW_USERS_BLOCK_IP_CONFIRM',"Do you really want to block this IP address?");
DEFINE('_EW_USERS_SHARING_HEADER',"Users sharing same login");
DEFINE('_EW_USERS_SHARING_DESC',"Contains users who accessed the website from different IP addresses and/or from different country but with same login. This might be a warning for you, that they're sharing their account with someone else.");
DEFINE('_EW_USERS_ACTIVITY_HEADER',"Latest user activity");
define('_EW_DESC_SEO_LIST_ENCRYPTED_KEYWORDS', "Google hides passing particular keywords from google search to websites. This will reveal the keyword's position,<br/> but not the keyword itself. Enable this option if you want to see also position of these encrypted keywords in stats.");

DEFINE('_EW_SEO_MOST_POPULAR_KEYPHRASES',"Most popular keyphrases");
DEFINE('_EW_SEO_MOST_POPULAR_KEYPHRASES_DESC',"These are the keyphrases by which was your website found. You can copy this list and use it with some 3rd party service, which will give you an overview of SERP (Search Engine Rank Position). You can then optimize your website using SEO techniques,	and watch the increase of traffic in right upper side of main dashboard - displayed as a cyan bar");

DEFINE('_EW_USERS_ALERT_EMAIL_SUBJECT',"Alert - user '%s' uses different IP address: '%s'");
DEFINE('_EW_USERS_ALERT_EMAIL_CONTENT',"You can block this user from ExtraWatch Users section");
DEFINE('_EW_MAX_RECORDS',"Displaying max. %d records");

DEFINE('_EW_DESC_USERS_SEND_ALERT_EMAILS',"If checked, you'll get an email once user uses different IP. This can help you to detect immediately, which user shares his login with someone else. Useful, if you're using paid accounts.");
DEFINE('_EW_DESC_SEO_SHOW_ALL_TIME_REPORT', "Do not filter by particular dates, show all time SEO report");

DEFINE('_EW_DOWNLOADS_ALLOW_ONLY_REFERRER', "Allow only when referred from: ");
DEFINE('_EW_DOWNLOADS_ALLOWED_REFERRER', "Allowed Referrer");
DEFINE('_EW_DOWNLOADS_NOT_ALLOWED',"File download restricted by ExtraWatch rule. Please contact: %s");

DEFINE('_EW_DOWNLOADS_EMAIL_RESTRICTED_SUBJECT',"Download restricted for IP: %s");
DEFINE('_EW_DOWNLOADS_EMAIL_RESTRICTED_BODY',"Someone from IP: %s attempted to download file: %s referred from %s, but it's restricted by ExtraWatch download referrer check");

DEFINE('_EW_ADMINHEADER_CLICK_AREAS', "Click Areas");
DEFINE('_EW_NO_TITLE','No Title');
DEFINE('_EW_CLICK_HEATMAP_FOR','Click Heatmap for ');
DEFINE('_EW_CLICK_AREAS_FOR','Clicks Areas for ');

DEFINE('_EW_GOALS_SEND_EMAIL','Send an email');
DEFINE('_EW_DESC_GOALS_SEND_EMAIL','You will get an email everytime the goal has been reached. Email address is taken from "Emails" section.');
DEFINE('_EW_GOAL_EMAIL_SUBJECT', "Goal '%s' was achieved, count: %d");
DEFINE('_EW_VISITS_GOAL_REACHED', " Goal '%s' was reached");

DEFINE('_EW_DOWNLOADS_TOTAL_WEEKLY', "Total weekly");
DEFINE('_EW_ACTIVE', "active");
DEFINE('_EW_DOWNLOAD_PRO', "Download PRO version");
DEFINE('_EW_VISITS_HEATMAP_CLICK_COUNT', "Total clicks today: %d");
DEFINE('_EW_HEATMAP_LOADING','Loading Heatmap table ...'); 
DEFINE('_EW_ANTISPAM_INVALID_EXTENSION', "Invalid extension type, .csv expected"); 
DEFINE('_EW_ANTISPAM_NUM_IP_FROM_CSV_IMPORTED', "Imported %d IP addresses from .csv file"); 