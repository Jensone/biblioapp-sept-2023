<?php
/**
 * Ficher de composant (partial) pour la liste des livres sou forme de cartes 
 */

require_once 'classes/Book.php';

foreach (Book::getBooks() as $book) { ?>

    <div class="card col-md-3 col-sm-5 col-sm-12 card-bg">
        <div class="card-body text-light">
            <h5 class="card-title">
                <?= substr($book['title'], 0, 20) ;?>...
            </h5>
            <h6 class="card-subtitle mb-2">
                <?= $book['author'] ;?>
            </h6>
            <p class="card-text">
                <?= substr($book['description'], 0, 110) ;?>...
            </p>
            <a href="/<?= $book['slug'] ;?>.php" class="btn btn-sm btn-outline-light">Voir</a>
            <a href="#" class="btn btn-sm btn-success">Réserver</a>
        </div>
    </div>

<?php }


// foreach (Book::getBooks() as $book) {
//     echo '<div class="card col-md-3 col-sm-5 col-sm-12 card-bg">';
//     echo '    <div class="card-body text-light">';
//     echo '        <h5 class="card-title">' . $book() . '</h5>';
//     echo '        <h6 class="card-subtitle mb-2">Card subtitle</h6>';
//     echo '        <p class="card-text">Some qu.</p>';
//     echo '        <a href="#" class="btn btn-sm btn-outline-light">Voir</a>';
//     echo '        <a href="#" class="btn btn-sm btn-success">Réserver</a>';
//     echo '    </div>';
//     echo '</div>';
// }

