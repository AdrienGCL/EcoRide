<p class="row p-0 m-0 text-white font-12">
    <?php echo($_POST['depart']); ?>
     > 
     <?php echo($_POST['destination']); ?>
      - Départ le 
      <?php echo($_POST['dateDepart']); ?>
       - 
    <?php echo(count($searchResult)); ?>
    <?php if(count($searchResult) == 1){echo(' résultat');}else{ echo(' résultats');}?>
</p>