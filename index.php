<?php

require 'templates/header.html.php';

?>


<div class="m-2 d-flex gap-4">
    <!-- Liste de livres -->
    <div class="biblioapp-dashboard-books col-6 border rounded p-2 d-flex gap-2">
        <div class="card col-5" style="background-image: url('https://placeholder.com/200x100')">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">Voir</a>
                <a href="#" class="btn btn-sm btn-outline-primary">Réserver</a>
            </div>
        </div>
        <div class="card col-5" style="background-image: url('https://placeholder.com/200x100')">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">Voir</a>
                <a href="#" class="btn btn-sm btn-outline-primary">Réserver</a>
            </div>
        </div>
        <div class="card col-5" style="background-image: url('https://placeholder.com/200x100')">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">Voir</a>
                <a href="#" class="btn btn-sm btn-outline-primary">Réserver</a>
            </div>
        </div>
        <div class="card col-5" style="background-image: url('https://placeholder.com/200x100')">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">Voir</a>
                <a href="#" class="btn btn-sm btn-outline-primary">Réserver</a>
            </div>
        </div>
        <div class="card col-5" style="background-image: url('https://placeholder.com/200x100')">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-sm btn-outline-primary">Voir</a>
                <a href="#" class="btn btn-sm btn-outline-primary">Réserver</a>
            </div>
        </div>
    </div>
    <!-- Liste de réservations -->
    <div class="col-6 border border-rounded p-1">
        <h3 class="text-center">Réservations en cours</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php
require 'templates/footer.html.php';
