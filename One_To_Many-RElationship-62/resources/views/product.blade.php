<div>
    <h1>Product Form</h1>
    <form action="product" method="post">
        @csrf
        <input type="text" name="name" placeholder="Product name">
        <br>
        <input type="text" name="price" placeholder="price">
        <br>
        <input type="text" name="seller_id" placeholder="seller_id">
        <br>
        <button>Submit</button>
    </form>
</div>
