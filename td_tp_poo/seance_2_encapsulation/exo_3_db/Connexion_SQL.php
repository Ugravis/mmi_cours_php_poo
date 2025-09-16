<?php
  class Connexion_SQL {
    private string $adresseip;
    private string $nombase;
    private string $utilisateur;
    private string $mdp;

    public function __construct(string $adresseip, string $nombase, string $utilisateur, string $mdp) {
      $this->setAdresseip($adresseip);
      $this->nombase = $nombase;
      $this->utilisateur = $utilisateur;
      $this->mdp = $mdp;
    }

    public function setAdresseip(string $adresseip): void {
      $this->adresseip = filter_var($adresseip, FILTER_VALIDATE_IP)
        ? $adresseip
        : 'INVALIDE';
    }

    public function lire_connexion(): string {
      return 
        "Connexion actuelle : 
          <li>user DB : <b>{$this->utilisateur}</b>.</li>
          <li>nom DB : <b>{$this->nombase}</b>.</li>
          <li>ip DB : <b>{$this->adresseip}</b>.</li>
          <li>user DB : <b>{$this->utilisateur}</b>.</li>
        ";
    }
  }