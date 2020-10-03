#HasznaltAru project
##tervezés, létrehozás Laravel segítségével
Előszó	2
Project létrehozása	2
Bejelentkezés, felhasználó-kezelés szolgáltatás	4
 

feladat: megtervezni a Metripond Plus Kft. inaktív termékeinek ismertető felületét, mely a metripondplus.hu honlapot egészíti ki.

terv:
1.	a metripondplus.hu aldoménje lesz: hasznaltaru.metripondplus.hu,
2.	az oldal címe: Metripond Plus Kft börze,
3.	a termékek egy oldalon jelennek meg kártyákon elhelyezve,
4.	a kártyák a kapcsolattartó adatait, elérhetőségét is tartalmazza,
5.	az oldal reszponzív,
6.	az oldal alján footer – lábléc a fődoménre mutató hivatkozásokkal, általános elérhetőséggel,
7.	az aldomén bejelentkezést tesz lehetővé, mellyel a kapcsolattartó és a termékek adatai szerkeszthetők,
Előszó

A fejlesztéshez – mivel egy dinamikus tartalmú oldalról beszélünk – adatbázis-kiszolgáló és PHP is szükséges. A Windows 10 alatt fejlesztendő projekthez MySQL adatbázis-kezelőt (8.0.20 Community) és Workbench 8.0 segédprogramot használom. A PHP 7.4 értelmezője mellett a telepítésre került a Brackets nevű szerkesztő, mellyel a projektek mappáiban könnyedén navigálhatok, a kiválasztott fájlokat szerkeszthetem.
A Laravel-t telepíteni kell a honlapján megadott útmutató szerint.
A projekt mappában megnyitott PowerShell (PS) terminállal vihetjük be a parancssoros utasításokat (pl.: php artisan serve).
A fejlesztés alatt álló oldalt a Firefox böngésző segítségével jelenítem meg, illetve használom annak Fejlesztő eszközét (F12).
Project létrehozása

Hozzuk létre a projekteket tartalmazó mappát (pl.: …Laravel)
…\Laravel> PowerShell
	Laravel new HasznaltAru
…\Laravel> cd HasznaltAru
…\Laravel\HasznaltAru> php artisan serve

(Az Avast víruskereső kártékonynak ítéli a server.php-t; hozzá kell a kivételekhez)
A fenti parancs kiadása után tájékoztat a Laravel, hogy a http://127.0.0.1:8000 címen elindult a fejlesztő szerver.
A böngészőbe beírva a címet láthatjuk az alapproject kezdőoldalát:

 

A serverszolgáltatást kikapcsolni a Ctrl+C paranccsal tudunk, melyet a PS ablakban kell használni. Ekkor visszakapjuk a projektünk útvonalát, valamint a kurzort – az exit paranccsal bezárhatjuk a PS-t.
Ha elindítjuk a Bracket szerkesztőt és kiválasztjuk a …Laravel\HasznaltAru mappát, akkor megtekinthetjük a projektünk mappaszerkezetét:

 

Erről bővebben a https://laravel.com/docs/8.x/structure oldalon olvashatunk.

Bejelentkezés, felhasználó-kezelés szolgáltatás

A HasznaltAru adminisztrációs oldalát csak bejelentkezés után lehet elérni. Ehhez a Laravel Jetstream modult használjuk.

…\Laravel\HasznaltAru> composer require laravel/jetstream

…\Laravel\HasznaltAru> php artisan jetstream:install livewire

…\Laravel\HasznaltAru> npm install

…\Laravel\HasznaltAru> npm run dev

A Brackets segítségével szerkesszük a project gyökerében lévő .env fájl:
a DB-vel kezdődő sorokban be kell állítani az adatbázisra vonatkozó paramétereket. A _DATABASE, _USERNAME, és _PASSWORD paramétert állítsuk be, majd a Workbench segítségével hozzuk létre a _DATABASE paramétereként megadott nevű adatbázist. Ezek után lefuttatható a lenti parancs:
…\Laravel\HasznaltAru> php artisan migrate

Ez létrehozza a Jetstream működéséhez szükséges adattáblákat (a …Laravel\HasznaltAru\database\migrations\ mappában található osztályok segítségével.
