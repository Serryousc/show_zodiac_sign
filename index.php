
    <?php include('header.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 

    <div class="container mt-5">
        <h1 class="h1">Qual é o Seu Signo?</h1>
        <form class="row row-cols-lg-auto g-3 align-items-center container-md" id="signo-form" method="POST" action="show_zodiac_sign.php"> 
            <div class="col-12">
            <label class="visually-hidden" for="inlineFormSelectPref"></label>   
                <div class="input-group">
                    <div class="input-group-text">Informe sua Data de Nascimento:</div>
                    <input type="date" name="dataNascimento" id="inlineFormSelectPref" class="form-control" required>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            
        </form>
    </div>
    
    <?php include('footer.php'); ?>
