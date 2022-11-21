<?php get_header('', 'Danh sách người dùng');
?>
<div class="content-main">
    <h3 class="title-content">Quản lý user</h3>
    <div class="list-product">
        <h4 class="list">Danh sách sản phẩm</h4>
        <div class="search-product">
            <a href="?ctr=add_user"><button class="btn btn-success">Add New Product</button></a>
        </div>
    </div>
    <table class="table-bordered table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>User Fullname</th>
                <th>User Email</th>
                <th>User Password</th>
                <th>User role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_user as $values) : ?>
                <tr>
                    <td><?php echo $values['id'] ?></td>
                    <td><?php echo $values['fullname'] ?></td>
                    <td><?php echo $values['email'] ?></td>
                    <td><?php echo $values['password'] ?></td>
                    <td><?php echo ($values['role'] == 1) ? "User" : 'Admin'?></td>
                    <td style="text-align: center;">
                        <button class="btn btn-success">Update</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
</article>
</div>
<div class="clear-both"></div>
<?php get_footer('', 'Danh sách người dùng') ?>