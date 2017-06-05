# iooa_proizvodni_is
IOOA Proizvodni IS

PHP Web aplikacija izrađena u Laravel frameworku sa MySQL bazom podataka.

Informacijski sustav za upravljanje proizvodnjom prvenstveno namjenjen manjim proizvodnim poduzećima za
nadzor i upravljanje proizvodnih procesa.

IS razlikuje tri različite vrste korisnika sa vlastitim privilegijama radnji:

  1) Radnik = Zaposlenik sa operativnim funkcijama na razini stroja
      1) Jedina interakcija sa IS-om za kreiranje dnevnih izvješća proizvodnje
  2) Tehnolog = Zaposlenik za nadzornim i upravljačkim funkcijama na razini manjeg segmenta proizvodnje
      1) Ispunjava i provjerava izvješća
      2) Upravlja rasporedom radne snage i strojeva
      3) Provodi evidenciju protoka robe
  3) Upravitelj = Nadzire cijeli IS, ima uvid i sposobnost promjena za sve informacijske elemente proizvodnje
      1) Apsolutna kontrola nad informacijskim sustavom
      2) Jedini posjeduje kontrolu nad dodjeljivanjem uloga korisnicima u informacijskom sustavu
