

<!-- debut section task -->
<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">To Do List </h4>

            <form action="edit.php?mod=add" method="post" class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
              <div class="col-12">
                <div class="form-outline">
                  <input type="text" name="task" class="form-control" />
                  <label class="form-label" for="form1">Saisir une taches !</label>
                </div>
              </div>
      
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-warning">Get tasks</button>
              </div>
            </form>

            <table class="table mb-4">
            <?php
              //Récupérer les données dans la table taches

        $result = $mysqli->query("SELECT * FROM tasks ORDER BY ID DESC") ;
          ?>
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Todo item</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                

              <?php
        // Affichage des taches dans la liste avec une boucle while
        while($obj = $result->fetch_object()){

        ?>
                <tr>
                  <th scope="row">1</th>
                  <td><?php echo $obj->task ?></td>
                  <td>we can do it</td>
                  <td>

                    <a href= "edit.php?mod=del&id=<?php echo $obj->id; ?>" class="btn btn-danger">Delete</a>
                    <a href= "edit.php?mod=upd&id=<?php echo $obj->id; ?>" class="btn btn-success ms-1">Finished</a>
                  </td>
                </tr>

                <?php
}
                ?>
                
              </tbody>


            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- fin section task-->