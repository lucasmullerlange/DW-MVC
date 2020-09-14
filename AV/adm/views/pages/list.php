<table class=" table table-bordered table-hover table-dark">
  <thead>
    <tr>
      <th>
        Nome 
      </th>
      <th>
        email
      </th>
      <th>
        telefone
      </th>
      <th>
        endereço
      </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($clients as $client) : ?>
      <tr>
        <td>
          <?= $client["name"] ?>
        </td>
        <td>
          <?= $client["email"] ?>
        </td>
        <td>
          <?= $client["phone"] ?>
        </td>
        <td>
          <?= $client["address"] ?>
        </td>
      </tr>

    <?php endforeach; ?>
  </tbody>
</table>


<?php
