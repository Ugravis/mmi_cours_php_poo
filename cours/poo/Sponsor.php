<?php 
  class Sponsor {
    public string $name;
    public string $leader;
    public bool $uciMember;

    public function __construct(string $name, string $leader, bool $uciMember = true) {
      $this->name = $name;
      $this->leader = $leader;
      $this->uciMember = $uciMember;
    }

    public function displayInfos(): void {
      printf("Team %s. Leader: %s.", $this->name, $this->leader);
    }
  }

  // A mettre bien sûr dans un autre fichier si projet avec require()
  
  $visma = new Sponsor("Visma - Lease a bike", "Jonas");
  $visma->displayInfos();