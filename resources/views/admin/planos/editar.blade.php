@extends('layout.site')

@section('conteudo')

<!-- Conteúdo -->

<main class="container mt-5 mb-5">

    <div class="row">

        <div class="col-sm-9 mx-auto">

            <h3 class="text-center m-4">Editar Plano</h3>

            <form action="#" method="post">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="titulo" name="titulo" id="titulo" class="form-control" value=""
                        placeholder="Digite o titulo" autofocus>
                    <small class="text-danger">Campo Obrigatório.</small>
                </div>

                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="valor" name='valor' id="valor" class="form-control col-sm-4 valor" value=""
                        placeholder="Digite o valor">
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" class="form-control" rows="5"></textarea>
                </div>

                <button class="btn btn-primary" type="submit">Salvar</button>
                <a class="btn btn-light" href="/admin/planos">Cancelar</a>
            </form>
        </div>
    </div>

</main>

<!-- Fim Conteúdo -->

@endsection