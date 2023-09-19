<?php

// Chargement de la classe Connect 

use PgSql\Lob;

require 'configuration/Connect.php';

// Chargement de la classe Slug
require 'services/Slug.php';

class Book
{
    private ?int $id;
    private ?string $title;
    private ?string $author;
    private ?string $description;
    private ?string $cover;
    private ?string $category;
    private ?int $price;
    private ?int $year;
    private ?string $editor;
    private ?string $language;
    private ?int $pages;
    private ?string $format;
    private ?string $isbn;
    private ?bool $active;
    private ?string $slug;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getCover()
    {
        return $this->cover;
    }

    public function setCover($cover)
    {
        $this->cover = $cover;
        return $this;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    public function getEditor()
    {
        return $this->editor;
    }

    public function setEditor($editor)
    {
        $this->editor = $editor;
        return $this;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function setPages($pages)
    {
        $this->pages = $pages;
        return $this;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
        return $this;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $res = Slug::toSlug($slug);
        $this->slug = $res;
        return $this;
    }

    /**
     *  Custom méthodes
     */

    // Méthode pour récupérer tous les livres
    public static function getBooks(): array
    {
        // Requête SQL pour récupérer tous les livres
        $sql = "SELECT * FROM book";

        // On récupère la connexion à la base de données
        $db = Connect::connect();

        // On prépare la requête SQL
        $query = $db->query($sql);

        // On exécute la requête SQL
        $query->execute();

        // On récupère les livres dans un tableau associatif
        $books = $query->fetchAll(
            PDO::FETCH_ASSOC,
        );

        // On retourne les livres
        return $books;
    }

    // Méthode pour ajouter un livre
    public static function addBook($obj): void
    {
        // On récupère la connexion à la base de données
        $db = Connect::connect();

        // Requête SQL pour récupérer tous les livres
        $query = $db->prepare("INSERT INTO book (title, author, category, year, isbn, slug) VALUES (:title, :author, :category, :year, :isbn, :slug);");

        // $query = $db->query($sql);

        // On lie les valeurs de l'objet aux paramètres de la requête SQL
        $query->bindValue(':title', $obj->getTitle(), PDO::PARAM_STR);
        $query->bindValue(':author', $obj->getAuthor(), PDO::PARAM_STR);
        $query->bindValue(':category', $obj->getCategory(), PDO::PARAM_STR);
        $query->bindValue(':year', $obj->getYear(), PDO::PARAM_INT);
        $query->bindValue(':isbn', $obj->getIsbn(), PDO::PARAM_STR);
        $query->bindValue(':slug', $obj->getSlug(), PDO::PARAM_STR);

        // On exécute la requête SQL
        $query->execute();

        if ($query == true) {
            // On redirige vers la même page avec un message de succès
            header('Location: books.php?success=1');
        } else {
            // On redirige vers la même page avec un message de succès
            header('Location: books.php?success=0');
        }
    }
}
