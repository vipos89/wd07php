<h1> Products list</h1>
<a href="/admin/products/create"> Add product</a>
<table border="1px solid black">
    <thead>
        <th>Product name</th>
        <th>Product id</th>
        <th>Actions</th>
    </thead>
    <tbody>
    <?php foreach ($products as $product):?>
        <tr>
            <td><?=$product->id?></td>
            <td><?=$product->name?></td>
            <td><a href="/admin/products/<?=$product->id?>">Edit</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
