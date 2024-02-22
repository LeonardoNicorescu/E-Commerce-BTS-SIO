<p>Liste des utilisateurs</p>

<form style="display:inline" action="/E-Commerce-BTS-SIO/E-Commerce/user_management/searchUser" method="POST">
  <input type="text" name="search" placeholder="Search..">
  <input type="submit" value="Rechercher">
</form>
<?php

foreach($params['users'] as $user): ?>
    <div class="card mb-3">
      <div class="card-body">
        <h2> <?= $user->email ?></h2>
        <form style="display:inline"  action="/E-Commerce-BTS-SIO/E-Commerce/user_management/deleteUser/<?= $user->id; ?>" method="POST">
          <input type="submit" class="btn btn-danger" value="supprimer"> 
        </form>
        <form style="display:inline"  action="/E-Commerce-BTS-SIO/E-Commerce/user_management/changeUserRole/<?= $user->id; ?>" method="POST">
        <select name="role">
            <option <?= $user->role == 0 ? 'selected' : '' ?> value="0">Admin</option>
            <option <?= $user->role == 1 ? 'selected' : '' ?> value="1">Seller</option>
            <option <?= $user->role == 2 ? 'selected' : '' ?> value="2">Customer</option>
        </select>
          <input type="submit" class="btn btn-danger" value="Changer role"> 
        </form>
        </div>
   </div>
<?php endforeach ?>