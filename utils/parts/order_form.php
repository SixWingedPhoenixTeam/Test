<!-- ORDER FORM -->

<style>
    .order-form{
        background-color: #f3f3f3;
        text-align: center;
        padding: 10px 35px;
        border-radius: 25px;
        -moz-border-radius: 25px;
        -webkit-border-radius: 25px;
        -o-border-radius: 25px;
        -ms-border-radius: 25px;
    }
    
    .order-form .button_div{
        text-align: right;
        position: initial;
        margin-left: 75%;
    }
</style>

<div class="container order-form">
    <div>
        <h4>Order immediately! Now with 20% discount!</h4>
        <br>
    </div>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="form-group row">
            <label for="inputCredentials" class="col-sm-2 col-form-label">Credentials ::</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputCredentials" name="inputCredentials" placeholder="Name Surname">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAddress" class="col-sm-2 col-form-label">Address ::</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputAddress" placeholder="Street st., City, State">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="inlineFormCustomSelect">Flavour ::</label>
            <div class="col-sm-10">
                <select class="form-control" id="inputFlavour">
                    <option selected>Potion</option>
                    <option value="1">Soma</option>
                    <option value="2">Elixir</option>
                    <option value="3">Ether</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputAmount" class="col-2 col-form-label">Amount ::</label>
            <div class="col-10">
                <input class="form-control" type="number" value="1" min='1' max='99' id="inputAmount">
            </div>
        </div>
        <div class="form-group row button_div">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Buy!</button>
            </div>
        </div>
    </form>
</div>