<?php


class config
{
  private static $pdo = null;

  public static function getConnexion()
  {
    if (!isset(self::$pdo)) {
      try {
        self::$pdo = new PDO(
          'mysql:host=localhost;dbname=crudv1',
          'root',
          '',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
          ]
        );
        echo "connected succes";
      } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
      }
    }
    return self::$pdo;
  }
}?>
<?php try { $c=new config(); $query=$c->getConnexion()->query('select * from crud');
  $list = $query->fetchAll();
  } catch (PDOException $e) {
  $e->getMessage();
  }
  ?>