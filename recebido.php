<?php require_once('includes/header.php'); ?>

<main>
    <div class="container mb-5 pt-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-2"></i> Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Compra finalizada</li>
            </ul>
        </nav>
    </div>

    <section class="encomenda-bloco">
        <div class="container">
            <h1>Encomenda recebida</h1>
            <div class="underscore-title"></div>
            <h2 class="text-primary agradecimento">Obrigado. A sua encomenda foi recebida</h2>

            <div class="bg-paper">
                <div>
                    <h3>NUMERO DE ENCOMENDA</h3>
                    <p>194</p>
                </div>
                <hr>
                <div>
                    <h3>DATA</h3>
                    <p>Janeiro, 2023</p>
                </div>
                <hr>
                <div>
                    <h3>EMAIL</h3>
                    <p>front@email.com</p>
                </div>
                <hr>
                <div>
                    <h3>TOTAL</h3>
                    <p><i class="bi bi-currency me-2"></i>920</p>
                </div>
                <hr>
                <div>
                    <h3>Método de pagamento</h3>
                    <p>Transferência bancária</p>
                </div>
            </div><!---- bg paper--->

            <h2 class="titulo-paper">Os nossos dados bancários</h2>
            <div class="bg-paper">
                <div>
                    <h3>Banco</h3>
                    <p>Novo Banco</p>
                </div>
                <hr>
                <div>
                    <h3>Número de identificação bancária</h3>
                    <p>0000 0000 0000 0000 0000 0</p>
                </div>
                <hr>
                <div>
                    <h3>IBAN</h3>
                    <p>PL20 0000 0000 0000 0000 0000 0</p>
                </div>
                    
            </div>
            
            <h2 class="mb-4 titulo-paper">Detalhes da encomenda</h2>
            <div class="bg-white rounded row py-4">
                <div class="col-8">
                    <p class="mb-4">Produto</p>
                    <a href="produto-detalhe.php">Apple iphone 12 64gb</a>
                </div>
                <div class="col-4">
                    <p class="mb-4">Total</p>
                    <p><i class="bi bi-currency-dollar me-2"></i>1.200</p>
                </div>
            </div>

            <div class="bg-white rounded row py-4 mt-2">
                <div class="col-8">
                    <p class="mb-4">Subtotal</p>
                    <p class="mb-4">Envio</p>
                    <p class="mb-4">Método de pagamento</p>
                    <p class="mb-4">Total</p>
                </div>
                <div class="col-4">
                    <p class="mb-4"><i class="bi bi-currency-dollar me-2"></i>1.200</p>
                    <p class="mb-4">Envio grátis</p>
                    <p class="mb-4">Transferência bancária</p>
                    <p class="mb-4"><i class="bi bi-currency-dollar me-2"></i>1.200</p>
                </div>
            </div>

            <div class="py-5 row">
                <div class="col-5 encomenda-endereco">
                    <h3 class="mb-4">Endereço de faturamento</h3>
                    <p>
                        Front End <br> 
                        Rua da Ciência <br>
                        2213 DevFront <br>
                        1234567
                    </p>
                    <p class="mt-3">cliente@email.com</p>
                </div>
                <div class="col-5 encomenda-endereco">
                    <h3 class="mb-4">Endereço de envio</h3>
                    <p>
                        Back End <br> 
                        Rua da Computação <br>
                        1322 DevProgrammer <br>
                        9876543
                    </p>
                    <p class="mt-3">recebe@email.com</p>
                </div>
            </div>

        </div>
        
    </section>

</main>



<?php require_once('includes/footer.php'); ?>