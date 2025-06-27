<script type="text/javascript" src="../assets/js/ajax.js"></script>
<link href="../assets/css/dashboard.css" rel="stylesheet"/>


<li class="list-group-item">
    <div class="row justify-content-center">
        <div class="col col-2 user-list-col">
            <?php echo $user['userID']; ?>
        </div>
        <div class="col col-2 user-list-col">
            <p><?php echo $user['name']; ?></p>
        </div>
        <div class="col col-2 user-list-col">
            <p><?php echo $user['surname']; ?></p>
        </div>
        <div class="col col-2 user-list-col">
            <button type="button" class="deleteUser btn btn-danger" data-user-id="<?php echo $user['userID']?>">
                Remove
            </button>
        </div>
    </div>


</li>
