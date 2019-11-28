<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
        <form action=\"index.php\" method=\"post\">
            <div class=\"card shadow my-3\">
                <div>
                    <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top mt-4\">
                </div>
                <div class=\"card-body\">
                    <h4 class=\"card-title\">$productname</h4>
                        <h2>
                        <span class=\"price\">R$$productprice</span>
                        </h2>
                        <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"adicionar\">Adicionar ao Carrinho<i class=\"fas fa-shopping-cart\"></i></button>
                    <input type='hidden' name='produtoID' value='$productid'>
                </div>
            </div>
        </form>
    </div>
    ";        
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    <form action=\"carrinho.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
        <div class=\"row border rounded bg-white\">
            <div class=\"col-md-5 pl-3\">
                <img src=$productimg alt=\"Image1\" class=\"mt-3\" style=\"width:250px\">
            </div>
            <div class=\"col-md-3 mt-5\">
                <h4 class=\"pt-2 text-center\">$productname</h4>
                <h2 class=\"pt-2 text-center\">R$$productprice</h2>
            </div>
            <div class=\"col-md-4 py-5\">
                <div class=\"text-center\">
                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                    <button type=\"submit\" class=\"mt-4 btn btn-danger mx-2\" name=\"remove\">Remover</button>
                </div>
            </div>
        </div>
    </form>
    ";
    echo  $element;
}