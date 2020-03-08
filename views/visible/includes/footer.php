<!--*
    * footer.php
    * author Info2 IUT Rodez 2019-2020
    *
    * Footer présent sur toutes les pages de la partie visible du site.
    * Donne accès au copyright et également aux mentions légales.
-->
<footer class="container">
    <!-- Modal des mentions légales -->
    <?php require '_modal-MentionsLegales.php'; ?>
    <p>Les Myosotis · <a href="/views/visible/index.php" data-toggle="modal" data-target="#modal-mentionsl-legales">Mentions légales</a>
</footer>
</main>
<script src="<?php echo $RACINE; ?>/js/jquery.js"></script>
<script>window.jQuery || document.write('<script src="../js/jquery.js"><\/script>')</script><script src="../js/bootstrap.js"></script>
</body>
</html>