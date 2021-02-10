<?php require 'partials/headforall.php'?>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w1150">
            <div class="card card-12">
                <div class="card-body">
                    <div class="table-responsive">
                    <?php foreach ($allMembers as $user):?>         
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="col-4" style="width: 25%;">Full name</th>
                                    <th class="col-3" style="width: 25%;">Photo</th>
                                    <th class="col-3" style="width: 25%;">Email</th>
                                    <th class="col-6" style="width: 25%;">Report subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-4" style="width: 25%;"><?php echo $user->firstname;?> <?php echo $user->lastname;?></td>
                                    <td class="col-3" style="width: 25%; text-align:center">
                                        <?php if(isset($user->photo)) :?>
                                            <img style="max-width: 80px; max-height:100px;" src="<?php echo $user->photo;?>" alt="photo">
                                        <?php else: ?>
                                            <img style="max-width: 80px;" src="<?php echo $defaultPath;?>">
                                        <?php endif; ?>
                                    </td>
                                    <td class="col-3" style="width: 25%;"><a href="#"><?php echo $user->email;?></a></td>
                                    <td class="col-6" style="width: 25%;"><?php echo $user->reportSubject;?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require 'partials/footerformain.php'?>
