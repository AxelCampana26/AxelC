</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<footer>
<div class="card">
  <div class="card-header">
    S'inscrire a la newletter
  </div>
  <div class="card-body">
  <form method="POST">
  <div class="form-group">
    <label for="email">Login</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email ..." />
  </div>

  </form>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
  </div>
</div>
</footer>

</body>


<?php>
function new(string $email): bool
{


  // Récupération d'une instance de PDO
  $pdo = getPdo();

  // Définition, préparation et exécution 
  $query = "INSERT INTO newsletter (email) VALUES (:email)";
  $stmt = $pdo->prepare($query);
  return $stmt->execute([
    'email' => $email
  ]);
}
?>
<?php if(!empty($_POST['email'])){
    $email = $_POST['email'];
    $ajout= new($email);
}
?>
</body>

</html>