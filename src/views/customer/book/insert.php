<?php
$data = Message::getData();
$name = "";
$stock = "";
$price = "";
$image = "";
if($data) {
    $name = $data['name'];
    $stock = $data['stock'];
    $price = $data['price'];
    $image = $data['image'];
}
Message::flash();
?>
        <div class="main">
            <form action="<?= BASEURL . '/librarian/bookinsertproccess' ?>" method="post" enctype="multipart/form-data">
                <h1>Add Book</h1>
                <div class="forminput">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter name" autocomplete="off" value="<?= $name ?>">
                </div>
                <div class="forminput">
                    <label for="stock">Stock</label>
                    <input type="text" id="stock" name="stock" placeholder="Enter stock" autocomplete="off" value="<?= $stock ?>">
                </div>
                <div class="forminput">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" placeholder="Enter price" autocomplete="off" value="<?= $price ?>">
                </div>
                <div class="forminputimg">
                    <label for="uploadFile">Image</label>
                    <input type="file" id="uploadFile" name="uploadFile" placeholder="asdasd" autocomplete="off" value="<?= $image ?>">
                </div>
                <div class="btnn">
                    <button onclick="location.href='<?= BASEURL . '/librarian/book' ?>'" type="button" class="btnsi">Cancel</button>
                    <button type="submit" name="insert" class="btnsi">Submit</button>
                </div>
            </form>
        </div>