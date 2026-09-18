<!doctype html>
<html lang="pt-br" data-bs-theme="light">
    <head>
        <title>Contas a Receber</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous" />
    </head>
    <body>  

    <div class="container">
        <h1 style="text-align: center;"> Contas a Receber </h1>

        <form action="controllers/cadastrar.php" method="POST">

            <div class="row mt-4">
                <div class="col-md-6">
                    <label> * Valor da Entrada</label>
                    <input type="float" step="0.01" name="valorEntrada" class="form-control" placeholder="Ex: 10.50 , 250 (obrigatorio)" required>
                </div>

                <div class="col-md-6">
                    <label>Descrição da Entrada</label>
                    <input type="text" name="descEntrada" class="form-control" placeholder="Ex: Salário 08/2026 (opcional)">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <label>Categoria</label>
                    <input type="text" name="categEntrada"class="form-control" placeholder="Categoria que melhor se encaixa essa entrada (opcional)">
                </div>

                <div class="col-md-6">
                    <label> Data da Entrada </label>
                    <input type="date" name="dataEntrada" class="form-control"  >
                </div>
            </div>
            
            <div class="d-flex justify-content-between mt-4">
                <button type="submit" class="btn btn-success">
                    Lançar
                </button>

                <a href="views/tabela.php" class="btn btn-primary">
                    Visualizar lançamentos
                </a>
            </div>
        </form>


    </div>
    <script src="https://code.jquery.com/jquery-4.0.0.js" 
    integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U=" crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
