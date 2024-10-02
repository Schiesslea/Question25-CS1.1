<?php

namespace App\Modele;

use PDO;

class Modele_Utilisateur
{
    public static function Utilisateur_Select()
    {
        $pdo = \App\Utilitaire\Singleton_ConnexionPDO::getInstance();
        $stmt = $pdo->query("SELECT * FROM utilisateur");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function Utilisateur_SelectById($id)
    {
        $pdo = \App\Utilitaire\Singleton_ConnexionPDO::getInstance();
        $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function Utilisateur_Insert($nom, $prenom, $motDePasse)
    {
        $pdo = \App\Utilitaire\Singleton_ConnexionPDO::getInstance();
        $stmt = $pdo->prepare("INSERT INTO utilisateur (nom, prenom, motDePasse) VALUES (?, ?, ?)");
        $stmt->execute([$nom, $prenom, $motDePasse]);
    }

    public static function Utilisateur_Update($id, $nom, $prenom, $motDePasse)
    {
        $pdo = \App\Utilitaire\Singleton_ConnexionPDO::getInstance();
        $stmt = $pdo->prepare("UPDATE utilisateur SET nom = ?, prenom = ?, motDePasse = ? WHERE id = ?");
        $stmt->execute([$nom, $prenom, $motDePasse, $id]);
    }

    public static function Utilisateur_Delete($id)
    {
        $pdo = \App\Utilitaire\Singleton_ConnexionPDO::getInstance();
        $stmt = $pdo->prepare("DELETE FROM utilisateur WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>