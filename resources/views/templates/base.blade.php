<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
body{
    font-family: 'Outfit', sans-serif !important;
    position:relative;
  }
.erro{
    /* position:absolute;
    padding:20px;
    top: 0;
    left: 50%;

    transform: translate(-50%, -0%); */
    margin:10px;
    margin-top:20px;
}
.erroInterno {
    border-radius: 30px;
    background-color: #60c8c56b !important;}
.alert-danger {
    color: #126967;
    background-color: #f8d7da;
    border-color: transparent; */
}
.file-custom:before {
            content: "Buscar" !important;
            top:0 !important;
            right:0 !important;
            border-top-right-radius: 200px !important;
            border-bottom-right-radius: 200px !important;
            color:#4d9290 !important;
            background-color:#a5e1e0 !important;
            border:0 !important
            }
</style>
    <script>
        function attNomeArquivo(){
            var str = $('#Arquivo').val().split('\\')[$('#Arquivo').val().split('\\').length - 1];
            if(str !== ''){
                document.styleSheets[0].addRule('.file > .file-custom:after','content: "'+str+'" !important;');
            }
        }
        function validacaoCampos(e, erro){

            var inputs = $(e.target).find('input');
            var mensagemErro = '';
            for(let i = 0; i < inputs.length; i++){
                if($(inputs[i]).attr('id') !== undefined){
                    if($(inputs[i]).val() == ''){
                        mensagemErro = mensagemErro + `<div class="erroInterno alert alert-danger">Preencha Corretamente o campo ${$(inputs[i]).attr('id')}</div>` 
                    }
                }
            }
            if(mensagemErro != ''){
                e.preventDefault()
                $(erro).html('')
                $(erro).append(mensagemErro)
            }
        }
    </script>
</head>@stack('styles')
<body>

@yield('content')

</body>
@stack('scripts')
</html>