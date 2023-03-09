<?php
class personne
{
  private string $last_name;
  private int $id;
  private string $first_name;
  private string $gender;
  private string $email;
  private int $phonenumber;



  public function __construct(string $last_name, string $first_name, int $id, string $gender,string $email, int $phonenumber)
  {
    $this->last_name = $last_name;
    $this->first_name = $first_name;
    $this->gender = $gender;
    $this->email = $email;
    $this->id = $id;
    $this->phonenumber=$phonenumber;
  }

/*   public function saisir(string $nom, string $prenom, int $age)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age = $age;
  } */
  public function afficher()
  {
    echo "le nom de cette personne est $this->first_name <br>";
    echo "le prenom de cette personne est $this->last_name <br>";
    echo "le age de cette personne est $this->id <br>";
  }

  public function getid(): int
  {
    return $this->id;
  }

  public function getnom()
  {
    return $this->last_name;
  }
  public function getgender()
  {
    return $this->gender;
  }

  public function getprenom()
  {
    return $this->first_name;
  }
  public function getmail()
  {
    return $this->email;
  }
  public function getphonenumber()
  {
    return $this->phonenumber;
  }
  public function setid(int $id): void
  {
    $this->id = $id;
  }
  public function setlastname(string $last_name): void
  {
    $this->last_name = $last_name;
  }
  public function setfirstname(string $first_name): void
  {
    $this->first_name = $first_name;
  }
  public function setemail(string $email): void
  {
    $this->email = $email;
  }
  public function setphonenumber(int $phonenumber): void
  {
    $this->phonenumber = $phonenumber;
  }
  public function setgender(string $gender): void
  {
    $this->gender = $gender;
  }




  
}

/*  $personne1=new personne('haroun','jane',20);
$personne1->afficher();

echo $personne1->getage();  */