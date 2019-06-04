<?php
include_once "templates/functions.php";
include_once "templates/header.php";
?>
<form action="result.php" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">
    </div>
    <div>
        <label for="lastname">Lastname</label>
        <input type="text" id="lastname" name="lastname" placeholder="Enter your lastname">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
    </div>

    <div>
        <label for="food">Favorite food</label>
        <input type="checkbox" name="food[]" value="pizza"> Pizza
        <input type="checkbox" name="food[]" value="burger"> Burger
        <input type="checkbox" name="food[]" value="pasta"> Pasta

    </div>

    <div>
        <label for="food">Gender</label>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
    </div>

    <div>
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment"></textarea>
    </div>

    <div>
        <label for="city">City</label>
        <select name="city" id="city">
            <option value="bgd">Belgrade</option>
            <option value="rom">Rome</option>
            <option value="lnd">London</option>
        </select>
    </div>


    <button type="submit">Send</button>
    <button type="reset">reset</button>

    <input type="number" min="10" step="5">
</form>


<?php

include_once "templates/footer.php";
