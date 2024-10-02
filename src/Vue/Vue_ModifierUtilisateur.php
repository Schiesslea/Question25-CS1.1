<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_ModifierUtilisateur extends Vue_Composant
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function donneTexte(): string
    {
        return "
<h1>Modifier un utilisateur</h1>
<form method='post'>
    <input type='hidden' name='case' value='utilisateur'>
    <input type='hidden' name='action' value='enregistrerModifier'>
    <input type='hidden' name='id' value='{$this->data['id']}'>
    <label for='nom'>Nom:</label>
    <input type='text' id='nom' name='nom' value='{$this->data['nom']}' required>
    <label for='prenom'>Prenom:</label>
    <input type='text' id='prenom' name='prenom' value='{$this->data['prenom']}' required>
    <label for='motDePasse'>Mot de passe:</label>
    <input type='password' id='motDePasse' name='motDePasse' value='{$this->data['motDePasse']}' required>
    <button type='submit'>Modifier</button>
</form>
";
    }
}
?>