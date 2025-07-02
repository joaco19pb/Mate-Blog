<?php require BASE_PATH . 'app/views/partials/head.php'?>
    <main class="container">
      <h2>Mensaje enviado</h2>
      <ul>
        <li>Nombre:<?php echo htmlspecialchars($_POST['nombre'] ?? ''); ?></li>
        <li>Apellido:<?php echo htmlspecialchars($_POST['apellido'] ?? ''); ?></li>
        <li>Mail:<?php echo htmlspecialchars($_POST['email'] ?? ''); ?></li>
        <li>Fecha de nacimiento:<?php echo htmlspecialchars($_POST['fecha_nacimiento'] ?? ''); ?></li>

        <p class="contact-resp__mesage">
          <?php echo nl2br(htmlspecialchars($_POST['mensaje'] ?? '')); ?>
        </p>
      </ul>
    </main>

<?php require BASE_PATH . 'app/views/partials/footer.php'?>
