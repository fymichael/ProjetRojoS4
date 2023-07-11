<section>
        <div class="container mt-5">
            <div class="row home-text">
                <div class="col-md-6">
                    <h1>
                        Bienvenue dans votre espace <br> Front Office.
                    </h1>
                    <p class="mt-4">
                        Ici, vous avez un contrôle total sur la gestion de vos terrains.
                        Vous pourrez parcourir rapidement et facilement l'ensemble de vos terrains.
                        Nous vous permettons de mieux gérer votre terrain. Commençons par voir tous vos terrains.
                    </p>
                    <a href="{{ route('list-fieldFoc') }}" class="btn btn-warning mt-3">Voir les terrains</a>
                </div>
                <div class="col-md-6 image-place">
                    <img src="{{ asset('imageDesign/home-client.jpg') }}" alt="Image d'accueil">
                </div>
            </div>
            <div class="fonction-list">
                <h1>Nos services</h1>
                <div class="container px-4">
                    <div class="row mt-4 gx-5">
                        <div class="col-md-4 service">
                            <div class="border p-4">
                                <div class="image-service">
                                    <img src="{{ asset('imageDesign/publicité.jpg') }}" alt="Image de publicité">
                                </div>
                                <h3 class="mt-2">Gérer vos conditions physiques</h3>
                            </div>
                        </div>

                        <div class="col-md-4 service">
                            <div class="border p-4">
                                <div class="image-service">
                                    <img src="{{ asset('imageDesign/gestion.jpg') }}" alt="Image de publicité">
                                </div>
                                <h3 class="mt-2"> Generer des regimes qui vous convient </h3>
                            </div>
                        </div>

                        <div class="col-md-4 service">
                            <div class="border p-4">
                                <div class="image-service">
                                    <img src="{{ asset('imageDesign/meilleur_prix.jpg') }}" alt="Image de publicité">
                                </div>
                                <h3 class="mt-2"> Gerer votre propre porte feuille </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>