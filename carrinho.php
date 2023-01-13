<?php require_once('includes/header.php'); ?>

<main>

    <div class="container mb-5 pt-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-2"></i> Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Carrinho</li>
            </ul>
        </nav>
    </div>

    <section>
        <div class="container">
            <h2>Carrinho</h2>
            <div class="underscore-title"></div>

            <table class="table table-carrinho">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Produtos</th>
                        <th scope="col">Preços</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <i class="bi bi-x-circle-fill me-2"></i>
                            <img src="img/img-iphone-2.png" width="40px">
                        </th>
                        <td><a href="produto-detalhe.php">Apple iphone 12 64gb</a></td>
                        <td><i class="bi bi-currency-doller me-1">1.200</i></td>
                        <td>1</td>
                        <td><i class="bi bi-currency-doller me-1">1.200</i></td>
                    </tr>
                </tbody>
            </table>

            <div class="row py-5 justify-content-between cupom-area gap-4 gap-md-0">

                <div class="col-md-8 d-flex flex-wrap gap-3 gap-sm-0 justify-content-center justify-content-md-start">
                    <input type="text" placeholder="Código do cupom">
                    <a href="#" class="btn-cupom text-nowrap">Aplicar cupom</a>
                </div>

                <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
                     <a href="#" class="btn-cupom text-nowrap">Atualizar carrinho</a>
                </div>
               
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <h2 class="mb-4 titulo-compra">Total do carrinho</h2>
                    <div class="bg-white total-carrinho">

                        <div class="row">
                            <h3 class="col-3">Subtotal</h3>
                            <p  class="col-8">
                                <i class="bi bi-currency-dollar me-2"></i>1.200
                            </p>
                        </div>

                        <div class="row my-5">
                            <h3  class="col-3">Envio</h3>
                            <p class="col-8">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Expedita minima sunt odio. <br>
                                <a href="#">Calcular custo de envio</a> 
                            </p>
                        </div>

                        <div class="row">
                            <h3  class="col-3">Total</h3>
                            <p class="col-8"><i class="bi bi-currency-dollar me-2"></i>1.200</p>
                        </div>

                    </div><!--- bg white -->
                    <div class="d-flex mt-3 mb-5">
                        <a href="recebido.php" class="btn-card text-center w-100">Finalizar Compra</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require_once('includes/footer.php'); ?>