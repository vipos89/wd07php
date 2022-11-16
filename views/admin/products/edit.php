<form action="/admin/products/<?=$product->id?>" method="post">
    <input type="text" name="name" value="<?=$product->name?>">
    <input type="text" name="price" value="<?=$product->price?>">
    <button type="submit">Add</button>
</form>
