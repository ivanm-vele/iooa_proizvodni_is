# iooa_proizvodni_is
IOOA Proizvodni IS

PHP Web aplikacija izrađena u Laravel frameworku sa MySQL bazom podataka.

Informacijski sustav za upravljanje proizvodnjom prvenstveno namjenjen manjim proizvodnim poduzećima za nadzor i upravljanje proizvodnih procesa.

IS razlikuje tri različite vrste korisnika sa vlastitim privilegijama radnji:

  Radnik = Zaposlenik sa operativnim funkcijama na razini stroja
      Jedina interakcija sa IS-om za kreiranje dnevnih izvješća proizvodnje
  Tehnolog = Zaposlenik za nadzornim i upravljačkim funkcijama na razini manjeg segmenta proizvodnje
      Ispunjava i provjerava izvješća
      Upravlja rasporedom radne snage i strojeva
      Provodi evidenciju protoka robe
  Upravitelj = Nadzire cijeli IS, ima uvid i sposobnost promjena za sve informacijske elemente proizvodnje
      Apsolutna kontrola nad informacijskim sustavom
      Jedini posjeduje kontrolu nad dodjeljivanjem uloga korisnicima u informacijskom sustavu
