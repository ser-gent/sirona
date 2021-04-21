@extends('layouts.app')

@section('content')
    <h1>Explications</h1>
    <hr>
    <div class="accordion" id="accordionAbout">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Qu'est-ce que Sirona ?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
                <div class="accordion-body">
                    Sirona est un système d'AGV (Automatic Guided Vehicle) acheminant du matériel et des médicaments entre les différents départements d'un complexe hospitalié.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    A quoi sert cette plateforme ?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionAbout">
                <div class="accordion-body">
                    Cette plateforme est un <i>proof of concept</i> d'un système permettant de gérer de la flotte de robot du système Sirona.
                    Cette application web permet de commander des produits/matériels présents dans le stock de l'hopital et de réaliser l'acheminement dans un temps record vers le département concerné.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Pourquoi le nom "Sirona" ?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionAbout">
                <div class="accordion-body">
                    <img src="./img/sirona-portrait.jpg" class="rounded mx-auto d-block mb-2" alt="portrait de sirona">
                    Sirona est une déesse celtique, adorée principalement dans le centre-oriental du pays gaulois et le long du limes danubien. Déesse de la guérison, elle est représentée avec des œufs et un serpent, des attributs forts de sens pour l'époque : les œufs symbolisent la vie tandis que le serpent détient la mort.
                    <br><i>Source : <a href="https://fr.wikipedia.org/wiki/Sirona">Wikipedia</a></i>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Comment se connecter à Sirona
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headiFour" data-bs-parent="#accordionAbout">
                <div class="accordion-body">
                    Pour vous connecter au service :
                    <ol>
                        <li>Rendez-vous sur la <a href="{{ route('login') }}">page de connexion</a></li>
                        <li>Rentrez votre email</li>
                        <li>Rentrez le mot de passe qui vous a été donné</li>
                        <li>Voilà vous êtes connecté(e)</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
