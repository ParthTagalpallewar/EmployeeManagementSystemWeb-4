<link rel="stylesheet" href="<?php echo base_url(); ?>css/dashboard.css">

<section class="px-4 pt-5 mt-4 sec-main my-container">

    <div class="container py-4">

        <div class="row">

            <div>

                <?php


                if ($this->session->flashdata('failure')) {
                    echo '
                                    <div class="container">
                                    <div class="alert alert-danger">
                                        ' . $this->session->flashdata("failure") . '
                                    </div>
                                    </div>
                                    ';
                }
             ?>

                <?php


            if ($this->session->flashdata('success')) {
                echo '
                                <div class="container">
                                <div class="alert alert-success">
                                    ' . $this->session->flashdata("success") . '
                                </div>
                                </div>
                                ';
            }
            ?>
            </div>

        </div>


        <!-- Task Card -->
        <div class=" shadow-sm card-task p-3">
            <h4>List of Employees</h4>

            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Sevarth ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Accept</th>
                        <th scope="col">Decline</th>
                    </tr>

                </thead>

                <tbody>
                    <tr>

                        <?php if (!empty($principle_for_verification_from_admin)) {foreach ($principle_for_verification_from_admin as $employees) {?>
                    <tr>
                        <th scope="row"><?php echo $employees['sevarth_id'] ?></th>
                        <td><?php echo $employees['name'] ?></td>
                        <td>
                            <?php
                                if ($employees['role_id'] == -1) {
                                    echo 'Admin';
                                }else if ($employees['role_id'] == 1) {
                                    echo 'Employees';
                                } else if ($employees['role_id'] == 2) {
                                    echo 'HOD';
                                } else if ($employees['role_id'] == 3) {
                                    echo 'Principal';
                                } else if ($employees['role_id'] == 4) {
                                    echo 'Registrar';
                                } else if ($employees['role_id'] == 5) {
                                    echo 'Joint Director';
                                } else if ($employees['role_id'] == 6) {
                                    echo 'Director';
                                } else if ($employees['role_id'] == 7) {
                                    echo 'Faculty';
                                }else if ($employees['role_id'] == 8) {
                                    echo 'Non Training Officials';
                                }else if ($employees['role_id'] == 9) {
                                    echo 'Non Technical Faculty';
                                }
                            ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url() . 'Admin/AdminController/accept_principle_request/' . $employees['sevarth_id'] ?>"
                                style="font-size: 12px; border-radius: 5px" class="btn btn-primary"> Accept
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo base_url() . 'Admin/AdminController/accept_principle_request/' . $employees['sevarth_id'] ?>"
                                style="font-size: 12px;  border-radius: 5px"" class=" btn btn-danger">Decline</a>
                        </td>
                    </tr>
                    <?php }} ?>

                    </tr>

                </tbody>
            </table>
        </div>


    </div>


</section>