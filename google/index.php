<HTML>

<HEAD>
    <meta charset="UTF-8">
    <TITLE>Google</TITLE>
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <link rel="stylesheet" type="text/css" href="results.css">
    <link rel="stylesheet" type="text/css" href="autocompleter.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"
        integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="autocompleter-php.js"></script>
    <STYLE>
    </STYLE>
</HEAD>


<body>
    <div id="app" :class="[results == 1 ? 'results' : 'home']">

        <div id="homepage">
            <div class="google-navbar">
                <a class="google-navbar-login" id="smallLinkButton" href="">Zaloguj się</a>
                <a href="" class="button"><svg fill=#5f6368 class="google-navbar-apps" focusable="false" height="32"
                        width="32" viewBox="0 0 24 24">
                        <path
                            d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
                        </path>
                    </svg></a>
                <a class="google-navbar-texts" href="">Grafika</a>
                <a class="google-navbar-texts" href="">Gmail</a>
            </div>

            <div class="google-content">
                <img class="google-logo"
                    src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png">
            </div>


            <div class="google-buttons">
                <button class="google-button">Szukaj w Google</p>
                    <button class="google-button">Szczęśliwy traf</p>
            </div>

            <div class="footer">

                <div class="footer-row1">
                    <p class="footer-link">Polska</p>
                </div>

                <div class="footer-row2">
                    <div class="footer-row21">
                        <a class="footer-link" href="">O nas</a>
                        <a class="footer-link" href="">Reklamuj się</a>
                        <a class="footer-link" href="">Dla firm</a>
                        <a class="footer-link" href="">Jak działa wyszukiwarka</a>
                    </div>
                    <div class="footer-row22">
                        <img class="leaf" height="14"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAYCAMAAAAiV0Z6AAAAPFBMVEVLoEN0wU6CzFKCzFKCzFKCzFKCzFJSo0MSczNDmkCCzFJPoUMTczNdr0gmgziCzFITczMTczMTczMTczPh00jOAAAAFHRSTlPF/+bIsms8Ad///hX+//5/tXw7aMEAx10AAACaSURBVHgBbc4HDoRQCATQ33tbvf9dF9QxaCT9UQaltLHOh/golXKhMs5Xqa0xU1lyoa2fXFyQOsDG38qsLy4TaV+sFislovyhPzLJJrBu6eQOtpW0LjbJkzTuTDLRVNKa3uxJI+VdiRqXSeu6GW+Qxi29eLIi8H7EsYrT42BD+mQtNO5JMjRuC4lSY8V4hsLX0egGijvUSEP9AbylEsOkeCgWAAAAAElFTkSuQmCC">
                        <a class="footer-link" href="">Neutralność węglowa od 2007 roku</a>
                    </div>

                    <div class="footer-row23">
                        <a class="footer-link" href="">Prywatność</a>
                        <a class="footer-link" href="">Warunki</a>
                        <a class="footer-link" href="">Ustawienia</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="position-searchbar">
            <div class="searchbar">
                <v-autocompleter v-model="googleSearch" @enter="ShowResults"></v-autocompleter>
                <img class="search-searchbar-keyboard" type="image"
                    src="http://www.gstatic.com/inputtools/images/tia.png" />
                <svg class="search-searchbar-icon" xmlns="http://www.w3.org/2000/svg" fill=#4285f4 height="24"
                    viewBox="0 0 24 24" width="24">

                    <path d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                </svg></a>
                <svg class="home-searchbar-icon" xmlns="http://www.w3.org/2000/svg" fill=#A9A9A9 height="20"
                    viewBox="0 0 24 24" width="20">

                    <path d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                </svg></a>
            </div>
        </div>

        <div id="search">
            <div class="search-top">
                <a href=""><img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png"
                        alt="Google" class="search-google" height="30" width="92" data-atf="1"></a>


                <div class="search-top-right">
                    <a href="" class="button"><svg fill=#5f6368 class="search-top-right-apps" focusable="false"
                            height="32" width="32" viewBox="0 0 24 24">
                            <path
                                d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
                            </path>
                        </svg></a>
                    <a class="search-top-right-login" id="smallLinkButton" href="">Zaloguj się</a>
                </div>
            </div>


            <div class="search-undertop">
                <a class="search-filter" href="">
                    <svg class="search-undertop-icon" focusable="false" viewBox="0 0 24 24">
                        <path fill="#34a853" d="M10 2v2a6 6 0 0 1 6 6h2a8 8 0 0 0-8-8"></path>
                        <path fill="#ea4335" d="M10 4V2a8 8 0 0 0-8 8h2c0-3.3 2.7-6 6-6"></path>
                        <path fill="#fbbc04" d="M4 10H2a8 8 0 0 0 8 8v-2c-3.3 0-6-2.69-6-6"></path>
                        <path fill="#4285f4"
                            d="M22 20.59l-5.69-5.69A7.96 7.96 0 0 0 18 10h-2a6 6 0 0 1-6 6v2c1.85 0 3.52-.64 4.88-1.68l5.69 5.69L22 20.59">
                        </path>
                    </svg>
                    Wszystko
                </a>
                <a class="search-filter" href="">
                    <svg class="search-undertop-icon" focusable="false" viewBox="0 0 24 24">
                        <path
                            d="M12 11h6v2h-6v-2zm-6 6h12v-2H6v2zm0-4h4V7H6v6zm16-7.22v12.44c0 1.54-1.34 2.78-3 2.78H5c-1.64 0-3-1.25-3-2.78V5.78C2 4.26 3.36 3 5 3h14c1.64 0 3 1.25 3 2.78zM19.99 12V5.78c0-.42-.46-.78-1-.78H5c-.54 0-1 .36-1 .78v12.44c0 .42.46.78 1 .78h14c.54 0 1-.36 1-.78V12zM12 9h6V7h-6v2">
                        </path>
                    </svg>
                    Wiadomości
                </a>
                <a class="search-filter" href="">
                    <svg class="search-undertop-icon" focusable="false" viewBox="0 0 24 24">
                        <path
                            d="M14 13l4 5H6l4-4 1.79 1.78L14 13zm-6.01-2.99A2 2 0 0 0 8 6a2 2 0 0 0-.01 4.01zM22 5v14a3 3 0 0 1-3 2.99H5c-1.64 0-3-1.36-3-3V5c0-1.64 1.36-3 3-3h14c1.65 0 3 1.36 3 3zm-2.01 0a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7v-.01h7a1 1 0 0 0 1-1V5">
                        </path>
                    </svg>
                    Grafika
                </a>
                <a class="search-filter" href="">
                    <svg class="search-undertop-icon" focusable="false" viewBox="0 0 16 16">
                        <path
                            d="M7.503 0c3.09 0 5.502 2.487 5.502 5.427 0 2.337-1.13 3.694-2.26 5.05-.454.528-.906 1.13-1.358 1.734-.452.603-.754 1.508-.98 1.96-.226.452-.377.829-.904.829-.528 0-.678-.377-.905-.83-.226-.451-.527-1.356-.98-1.959-.452-.603-.904-1.206-1.356-1.734C3.132 9.121 2 7.764 2 5.427 2 2.487 4.412 0 7.503 0zm0 1.364c-2.283 0-4.14 1.822-4.14 4.063 0 1.843.86 2.873 1.946 4.177.468.547.942 1.178 1.4 1.79.34.452.596.99.794 1.444.198-.455.453-.992.793-1.445.459-.61.931-1.242 1.413-1.803 1.074-1.29 1.933-2.32 1.933-4.163 0-2.24-1.858-4.063-4.139-4.063zm0 2.734a1.33 1.33 0 11-.001 2.658 1.33 1.33 0 010-2.658">
                        </path>
                    </svg>
                    Mapy
                </a>
                <a class="search-filter" href="">
                    <svg class="search-undertop-icon" focusable="false" viewBox="0 0 24 24">
                        <path
                            d="M10 16.5l6-4.5-6-4.5v9zM5 20h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1zm14.5 2H5a3 3 0 0 1-3-3V4.4A2.4 2.4 0 0 1 4.4 2h15.2A2.4 2.4 0 0 1 22 4.4v15.1a2.5 2.5 0 0 1-2.5 2.5">
                        </path>
                    </svg>
                    Wideo
                </a>
                <a class="search-filter" href="">
                    <svg class="search-undertop-icon" id="wiecej" focusable="false" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                        </path>
                    </svg>
                    Więcej
                </a>
                <a class="search-filter" href="">
                    Ustawienia
                </a>
                <a class="search-filter" href="">
                    Narzędzia
                </a>
            </div>
            <hr>
            <div class="search-results">
                <div class="search-results-number">Około 168 000 000 wyników (0,47 s)</div>
                <div class="search-results-result">
                    <a class="path">https://support.google.com › websearch › answer <font size="3" color="grey"> &#9662
                        </font></a>
                    <br><a href="" class="title">Sprawdzanie wyników wyszukiwania podróży przez Gmaila ...</a>
                    <div class="desc">Zobacz wyniki z innego konta Google. Uwaga: aby wykonać te czynności, musisz
                        zalogować się na konto Google. Na telefonie lub tablecie z Androidem otwórz ...</div>
                    <span>
                        <font color="#70757a">Brakujące: jakiś ‎| Musi zawierać słowo: </font><a
                            class="missing">jakiś</a>
                    </span>
                </div>

                <div class="search-results-result">
                    <a class="path">https://support.google.com › websearch › answer <font size="3" color="grey"> &#9662
                        </font></a>
                    <br><a href="" class="title">Zawężanie wyników wyszukiwania - Wyszukiwarka Google ...</a>
                    <div class="desc">Możesz zwiększyć precyzję wyników wyszukiwania, używając w zapytaniu słów i
                        symboli. Wyszukiwarka Google zwykle ignoruje znaki interpunkcyjne, które nie ...</div>
                </div>


                <div class="search-results-result">
                    <a class="path">https://www.pozycjonusz.pl › rodzaje-wynikow-wyszuk...<font size="3" color="grey">
                            &#9662</font></a>
                    <br><a href="" class="title">Rodzaje wyników wyszukiwania Google - ponad 20 ...</a>
                    <div class="desc">7) Wewnętrzna wyszukiwarka. Rodzaje wyników wyszukiwania Google wzbogacono jakiś
                        czas temu o funkcję wewnętrznej wyszukiwarki. To rozwiązanie, bez ...</div>
                </div>

                <div class="search-results-result">
                    <a class="path">https://widoczni.com › blog › jak-wyszukiwac-w-google<font size="3" color="grey">
                            &#9662</font></a>
                    <br><a href="" class="title">14 sposobów wyszukiwania w Google, których 95% z Was nie ...</a>
                    <div class="desc">Szukanie frazy – zastosowanie cudzysłowu. Wyniki wyszukiwania w Google konkretnych
                        fraz mogą być bardziej trafne, gdy zastosujemy cudzysłów. Algorytmy ...</div>
                    <span>
                        <font size="4" color="#fcc200">★★★★</font>
                        <font size="4" color="#70757a">☆</font>
                        <font color="#70757a"> Ocena: 4,2 · ‎326 głosów</font>
                    </span>
                    <div class="result-list">
                        <div class="list-item">Na czym polega zaawansowane wyszukiwanie w Google?<img class="arrow"
                                src="arrow.svg"></div>
                        <div class="list-item">Jakich komend użyć do wyszukiwania w Google?<img class="arrow"
                                src="arrow.svg"></div>
                        <div class="list-item">Gdzie znaleźć informacje na temat zawężania wyników wyszukiwania?<img
                                class="arrow" src="arrow.svg"></div>
                        <div class="list-item"><img class="arrow-show-more" src="arrow.svg"> pokaż więcej</div>
                    </div>
                </div>

                <div class="search-results-result">
                    <a class="path">https://www.empressia.pl › blog › 115-rozne-wyniki-w...<font size="3" color="grey">
                            &#9662</font></a>
                    <br><a href="" class="title">Wyniki wyszukiwań Google – skąd takie rozbieżności?</a>
                    <div class="desc">21 lut 2019 — Otóż inaczej będą prezentować się wyniki wyszukiwania po wpisaniu
                        tej samej frazy przez ... Google przechwytuje adres IP i za jego pomocą generuje wyniki, np. po
                        wpisaniu frazy ... Jaki jest koszt pozycjonowania sklepu?</div>
                    <span>
                        <font size="4" color="#fcc200">★★★★</font>
                        <font size="4" color="#70757a">☆</font>
                        <font color="#70757a"> Ocena: 3,7 · ‎11 głosów</font>
                    </span>
                </div>

                <div class="search-results-result">
                    <a class="path">https://wiwi.pl › Blog<font size="3" color="grey"> &#9662</font></a>
                    <br><a href="" class="title">Wyniki wyszukiwania Google: 10 przykładów - Agencja ...</a>
                    <div class="desc">10 wrz 2020 — A jest tego dużo, dużo więcej. Poznaj przykłady, w jaki sposób
                        Google pomaga użytkownikom Internetu odnaleźć potrzebne wiadomości. Spis ...</div>
                </div>


                <div class="search-results-result">
                    <a class="path">https://www.telepolis.pl › wiadomosci › aplikacje › wys...<font size="3"
                            color="grey"> &#9662</font></a>
                    <br><a href="" class="title">Wyszukiwarka Google powie więcej o wynikach wyszukiwania ...</a>
                    <div class="desc">2 lut 2021 — Szczegóły wyników wyszukiwania w Google. W polu z informacjami o ...
                        co masz do Wikipedii? Jeśli widzisz jakiś błąd, to możesz go poprawić.</div>
                </div>


                <div class="search-results-result">
                    <a class="path">https://spidersweb.pl › 2020/01 › google-wyniki-wyszu...<font size="3" color="grey">
                            &#9662</font></a>
                    <br><a href="" class="title">Krytycy ganią Google'a za nowy wygląd wyników wyszukiwania</a>
                    <div class="desc">24 sty 2020 — Google co jakiś czas eksperymentuje z tym, jak wyglądają jego wyniki
                        wyszukiwania i w jaki sposób odróżniają się od nich reklamy. Trudno ...</div>
                </div>

                <div class="search-results-result">
                    <a class="path">https://ks.pl › jak-sprawdzic-pozycje-strony-w-google<font size="3" color="grey">
                            &#9662</font></a>
                    <br><a href="" class="title">Pozycja w Google – jak sprawdzić, na której pozycji jest moja ...</a>
                    <div class="desc">Tak naprawdę nie są znane wszystkie kryteria, jakimi kieruje się algorytm, nadając
                        stronom pozycje w wynikach wyszukiwania. W dodatku algorytm jest co jakiś ...</div>
                </div>

                <div class="search-results-result">
                    <a class="path">https://poszukaj.elektroda.pl › szukaj,wynik-google,100<font size="3" color="grey">
                            &#9662</font></a>
                    <br><a href="" class="title">Wynik google - tematy na elektroda.pl 2</a>
                    <div class="desc">Co jakiś czas przekierowuje na reklamy, poza tym wyniki wyszukiwania w google mają
                        nieco inny wygląd (inny odcień niebieskiego, brak podkreślenia).</div>
                    <span>
                        <font size="4" color="#fcc200">★★★★★</font>
                        <font color="#70757a"> Ocena: 4,9 · ‎19 głosów</font>
                    </span>
                </div>

                <div class="search-results-similar">
                    <p>
                        <font size="4">Podobne wyszukiwania</font>
                    </p>
                    <div class="search-results-similar-list">
                        <div class="search-results-similar-list-box">
                            <svg class="search-results-similar-list-box-icon" xmlns="http://www.w3.org/2000/svg"
                                height="23" viewBox="0 0 24 24" width="23">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                            <a href="" class="suggestion">Google Trends</a>
                        </div>
                        <div class="search-results-similar-list-box">
                            <svg class="search-results-similar-list-box-icon" xmlns="http://www.w3.org/2000/svg"
                                height="23" viewBox="0 0 24 24" width="23">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                            <a href="" class="suggestion">Wyszukiwanie zaawansowane definicja</a>
                        </div>
                        <div class="search-results-similar-list-box">
                            <svg class="search-results-similar-list-box-icon" xmlns="http://www.w3.org/2000/svg"
                                height="23" viewBox="0 0 24 24" width="23">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                            <a href="" class="suggestion">Zaawansowane wyszukiwanie w Google</a>
                        </div>
                        <div class="search-results-similar-list-box">
                            <svg class="search-results-similar-list-box-icon" xmlns="http://www.w3.org/2000/svg"
                                height="23" viewBox="0 0 24 24" width="23">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                            <a href="" class="suggestion">Zawężanie wyników wyszukiwania</a>
                        </div>
                        <div class="search-results-similar-list-box">
                            <svg class="search-results-similar-list-box-icon" xmlns="http://www.w3.org/2000/svg"
                                height="23" viewBox="0 0 24 24" width="23">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                            <a href="" class="suggestion">Wyszukiwanie w Internecie</a>
                        </div>
                        <div class="search-results-similar-list-box">
                            <svg class="search-results-similar-list-box-icon" xmlns="http://www.w3.org/2000/svg"
                                height="23" viewBox="0 0 24 24" width="23">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                            <a href="" class="suggestion">Oto niektóre wyniki wyszukiwania</a>
                        </div>
                        <div class="search-results-similar-list-box">
                            <svg class="search-results-similar-list-box-icon" xmlns="http://www.w3.org/2000/svg"
                                height="23" viewBox="0 0 24 24" width="23">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                            <a href="" class="suggestion">Wyniki wyszukiwania</a>
                        </div>
                        <div class="search-results-similar-list-box">
                            <svg class="search-results-similar-list-box-icon" xmlns="http://www.w3.org/2000/svg"
                                height="23" viewBox="0 0 24 24" width="23">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                            <a href="" class="suggestion">Bezpłatna wyszukiwarka osób</a>
                        </div>
                    </div>
                    <div class="pages">
                        <p><span class="color-blue">G</span></p>
                        <p><span class="color-red">o</span></p>
                        <p><span class="color-yellow">o</span></p>
                        <p><span class="color-yellow">o</span></p>
                        <p><span class="color-yellow">o</span></p>
                        <p><span class="color-yellow">o</span></p>
                        <p><span class="color-yellow">o</span></p>
                        <p><span class="color-yellow">o</span></p>
                        <p><span class="color-yellow">o</span></p>
                        <p><span class="color-yellow">o</span></p>
                        <p><span class="color-yellow">o</span></p>
                        <p><span class="color-yellow">o</span></p>
                        <p><span class="color-blue">g</span></p>
                        <p><span class="color-green">l</span></p>
                        <p><span class="color-red">e</span></p>
                    </div>
                    <div class="pages2">
                        <p><a href="" class="page-number">1</a></p>
                        <p><a href="" class="page-number">2</a></p>
                        <p><a href="" class="page-number">3</a></p>
                        <p><a href="" class="page-number">4</a></p>
                        <p><a href="" class="page-number">5</a></p>
                        <p><a href="" class="page-number">6</a></p>
                        <p><a href="" class="page-number">7</a></p>
                        <p><a href="" class="page-number">8</a></p>
                        <p><a href="" class="page-number">9</a></p>
                        <p><a href="" class="page-number">10</a></p>
                        <p><a href="" class="page-number">następna</a></p>
                    </div>
                </div>
            </div>
            <footer>
                <hr id="bottom-line">
                <div class="first-row">
                    <span class="row-item" id="country">Polska</span>
                    <span class="row-item" id="localization">&#11044 <b>Kozy</b> - Z Twojego adresu internetowego - Użyj
                        dokładnej lokalizacji - Dowiedz się więcej </span>
                </div>
                <hr id="bottom-line">
                <div class="second-row">
                    <a href="" class="row-item">Pomoc</a>
                    <a href="" class="row-item">Prześlij opinię</a>
                    <a href="" class="row-item">Prywatność</a>
                    <a href="" class="row-item">Warunki</a>
                </div>
            </footer>
        </div>
    </div>


</BODY>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            results: 0,
            googleSearch: '',
            Values: [],
        },
        methods: {
            ShowResults(Input) {
                this.Values.push(Input);
                if (this.results == 0) {
                    this.results = 1;
                } else {
                    this.$emit('input', '');
                }
            }
        }
    });
</script>

</HTML>