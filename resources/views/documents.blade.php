@extends('layouts.app')

@section('content')
<div style="background-image: url(https://goteborg-kraftsportklubb.web.app/img/erik-boj.jpeg); 
height: 500px;
background-size: cover;
background-position-y: center; max-height: 50vh;" class="flex items-center">
</div>
<div class="container mx-auto">
    <div>
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8">
          <div class="space-y-12">
            <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
              <div>
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Länkar</h2>
                <div class="mt-4">
                  <i class="fa fa-link"></i>
                  <a class="underline" target="_blank" href="https://team.intersport.se/goteborg-kraftsportklubb">Webbshop klubbkläder (se till att logga in för att få rätt pris).</a>
                </div>
                <div class="mt-4">
                  <i class="fa fa-link"></i>
                  <a class="underline" target="_blank" href="https://styrkelyft.se">Svenska Styrkelyftsförbundet (SSF)</a>
                </div>
                <div class="mt-4">
                  <i class="fa fa-link"></i>
                  <a class="underline" target="_blank" href="https://www.styrkelyft.se/dokument/dokument-blanketter">Dokument för tävling mm på förbundets hemsida</a>
                </div>
                <div class="mt-4">
                  <i class="fa fa-link"></i>
                  <a class="underline" target="_blank" href="https://online.styrkelyft.se/">Databasen för resultatregistrering</a>
                </div>
              </div>

                <div>
                  <h2 class="mt-12 text-3xl font-extrabold tracking-tight sm:text-4xl">Dokument</h2>
                  <div class="mt-4">
                    <i class="fa fa-file-pdf-o"></i>
                    <a class="underline" target="_blank" href="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/documents%2FAntidopingavtal.pdf?alt=media&token=f43b48b7-62e8-405e-8b3e-f75ac2c465c6">Antidopingavtal mellan medlem och förening (PDF)</a>
                  </div>
                  <div class="mt-4">
                    <i class="fa fa-file-pdf-o"></i>
                    <a class="underline" target="_blank" href="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/documents%2FMedlemsavtal%20GKK%202022-09-20.pages.pdf?alt=media&token=52b3f7dd-e27c-49f2-a63d-0bdf2a0a0188">Medlemsavtal mellan medlem och förening (PDF)</a>
                  </div>
                  <div class="mt-4">
                    <i class="fa fa-file-pdf-o"></i>
                    <a class="underline" target="_blank" href="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/uploaded%2FN0TGPEf5Nto75XNm2Nux7Lpojez7pz.pdf?alt=media&token=3204252d-8c0c-43f0-baa2-de7b11ca277c">Föreningens stadgar, antagna 2022-02-19 (PDF)</a>
                  </div>
                  <div class="mt-4">
                    <i class="fa fa-file-pdf-o"></i>
                    <a class="underline" target="_blank" href="https://goteborg-kraftsportklubb.web.app/img/gkk-integritetspolicy.pdf">Föreningens integritetspolicy (PDF)</a>
                  </div>
                </div>

                <div>
                  <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl mt-12">Samarbete med SportRehab</h2>
                  <div class="mt-4">
                    <i class="fa fa-file-pdf-o"></i>
                    <a class="underline" target="_blank" href="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/uploaded%2FpUSeLCEIjkrZnfyjNXw7DEIrrlsBTH.pdf?alt=media&token=97fb01f5-6a40-4c7d-9d2e-8605b1893163">Samarbete med SportRehab</a>
                  </div>
                </div>
                
                <div>
                  <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl mt-12">Träningsprogram</h2>
                  <div class="flex mt-4">
                    <a target="_blank" href="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/documents%2FBeard-Press%202021-02-14.xlsx?alt=media&token=30924370-12aa-4ddf-8bf1-2fd45cc70717">
                      <img width="200px" src="https://goteborg-kraftsportklubb.web.app/img/beardpress-logo-excel.png">
                    </a>
                    <div class="p-4">
                      <b>Beard Press</b><br>
                      Ett bänkpressprogram av Karl Malmberg (@kraftkarlos)<br>
                      <span class="text-gray-500 mt-2">Excelfil</span>
                    </div>
                  </div>
                  <div class="flex mt-4">
                    <a target="_blank" href="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/documents%2FBa%CC%88nkprogram%20CalleO%CC%88berg.xlsx?alt=media&token=731f217f-fe83-4950-88b6-402515862445">
                      <img width="220px" src="https://goteborg-kraftsportklubb.web.app/img/hemside-bild.png">
                    </a>
                    <div class="p-4">
                      <b>Carl Öbergs bänkpressprogram</b><br>
                      <span class="text-gray-500 mt-2">Excelfil</span>
                    </div>
                  </div>
                </div>
                <div>
                  <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl mt-12">Grafik</h2>
                  <div class="flex items-center mt-2">
                    <img width="100px" src="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/static%2FTva%CC%8Afa%CC%88rg-pa%CC%8A-ljus-bakgrund.png?alt=media&token=be907bc2-2491-45e6-ae62-a5a78b080d41">
                    <div class="ml-2">Tvåfärg mot ljus bakgrund</div>
                  </div>
                  <div class="flex items-center mt-2">
                    <img width="100px" src="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/static%2FTva%CC%8Afa%CC%88rg-pa%CC%8A-mo%CC%88rk-bakgrund-300x300.png?alt=media&token=f1942878-84fa-4519-a051-08bbec625fa7">
                    <div class="ml-2">Tvåfärg mot mörk bakgrund (för tryck och utskrift)</div>
                  </div>
                  <div class="flex items-center mt-2">
                    <img width="100px" src="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/static%2FTva%CC%8Afa%CC%88rg-pa%CC%8A-mo%CC%88rk-bakgrund-transparent.png?alt=media&token=def700f9-01c7-4786-a246-28475a5e32f1">
                    <div class="ml-2">Tvåfärg mot mörk bakgrund (transparent)</div>
                  </div>
                  <div class="flex items-center mt-2">
                    <img width="100px" src="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/static%2FMonokrom-pa%CC%8A-mo%CC%88rk-bakgrund.png?alt=media&token=aa0b2c8a-4059-42ed-a36e-7436f7b24a39">
                    <div class="ml-2">Monokrom mot mörk bakgrund</div>
                  </div>
                  <div class="mt-4"> 
                    <i class="fa fa-file-pdf-o"></i>
                    <a class="underline" target="_blank" href="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/static%2FMonokrom-pa%CC%8A-mo%CC%88rk-bakgrund.pdf?alt=media&token=f49672e6-dc0b-4dcc-a973-bc7a2e47ffd4">Monokrom mot mörk bakgrund för tryck/utskrift (PDF)</a>
                  </div>
                  <div class="mt-4">
                    <i class="fa fa-file-pdf-o"></i>
                    <a class="underline" target="_blank" href="https://firebasestorage.googleapis.com/v0/b/goteborg-kraftsportklubb.appspot.com/o/static%2FTva%CC%8Afa%CC%88rg-pa%CC%8A-mo%CC%88rk-bakgrund.pdf?alt=media&token=e2779fa9-486f-491f-81ed-14d1b1d0d15b">Tvåfärg på mörk bakgrund för tryck/utskrift (PDF)</a>
                  </div>
                </div>
            </div>
            <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
              <li>
                <div class="space-y-4">
                  <div class="aspect-w-3 aspect-h-2">
                    <img style="height: 300px" class="object-cover shadow-lg rounded-lg" src="https://goteborg-kraftsportklubb.web.app/img/bjorn_och_klas-min.jpeg" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="space-y-4">
                  <div class="aspect-w-3 aspect-h-2">
                    <img style="height: 300px" class="object-cover shadow-lg rounded-lg" src="https://goteborg-kraftsportklubb.web.app/img/bjornlyftare-min.jpg" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="space-y-4">
                  <div class="aspect-w-3 aspect-h-2">
                    <img style="height: 300px" class="object-cover shadow-lg rounded-lg" src="https://goteborg-kraftsportklubb.web.app/img/bankpress-min.jpg" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="space-y-4">
                  <div class="aspect-w-3 aspect-h-2">
                    <img style="height: 300px" class="object-cover shadow-lg rounded-lg" src="https://goteborg-kraftsportklubb.web.app/img/tavling-min.jpg" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="space-y-4">
                  <div class="aspect-w-3 aspect-h-2">
                    <img style="height: 300px" class="object-cover shadow-lg rounded-lg" src="https://goteborg-kraftsportklubb.web.app/img/mark-min.jpg" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="space-y-4">
                  <div class="aspect-w-3 aspect-h-2">
                    <img style="height: 300px" class="object-cover shadow-lg rounded-lg" src="https://goteborg-kraftsportklubb.web.app/img/clara-min.jpg" alt="">
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            {{-- <gkk-navigation :user='@json($user)' :unanswered='@json($unanswered)'></gkk-navigation> --}}
        </div>
    </div>
</div>
@endsection
