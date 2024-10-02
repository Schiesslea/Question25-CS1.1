<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AjouterUtilisateur extends Vue_Composant
{
    public function donneTexte(): string
    {
        return "
<h1>Ajouter un utilisateur</h1>
<form method='post'>
    <input type='hidden' name='case' value='utilisateur'>
    <input type='hidden' name='action' value='enregistrerAjouter'>
    <label for='nom'>Nom:</label>
    <input type='text' id='nom' name='nom' required>
    <label for='prenom'>Prenom:</label>
    <input type='text' id='prenom' name='prenom' required>
    <label for='motDePasse'>Mot de passe:</label>
    <input type='password' id='motDePasse' name='motDePasse' required>
    <button type='submit'>Ajouter</button>
</form>
";
    }
}
?>