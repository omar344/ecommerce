<?php include 'selectAllProducts.php'; ?>
<!-- <?php include('header.php') ?>
<?php include('nav.php') ?> -->
<h1>All products</h1>
<table class="table table-dark table-striped-columns">
    <thead>
        <tr>
            <th scope="col">serial</th>
            <th scope="col">img</th>
            <th scope="col">Name</th>
            <th scope="col">salary</th>
            <th scope="col">brand</th>
            <th scope="col">offer</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($products as $product) : ?>
            <tr>
                <th scope="row"><?= $product->serial ?></th>
                <td><img src="img/<?= $product->img ?>" width="50px" height="50px"></td>
                <td><?= $product->name ?></td>
                <td><?= $product->salary ?></td>
                <td><?= $product->brand ?></td>
                <td><?= $product->offer ?></td>
                <td><a href="update.php? serial=<?= $product->serial ?>">Edit</a>|<a href="delete.php? serial=<?= $product->serial ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-- <?php include('footer.php') ?> -->