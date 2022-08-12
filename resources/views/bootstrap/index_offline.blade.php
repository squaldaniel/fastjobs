@extends("bootstrap.model")
@section("content")
    <main class="container-fluid">
        <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
              <span class="fs-4">Trabalhos Rápidos</span>
            </a>
          </header>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Divulgue e encontre trabalhos</h1>
            <p class="col-md-8 fs-4">Uma maneira rápida, gratuita, e extremamente prática de encontrar e divulgar pequenos trabalhos.</p>
            <a href="/registro" class="btn btn-primary btn-lg" type="button">Cadastrar-me</a> ou <a href="entrar" class="btn btn-outline-primary btn-lg " type="button">Entrar</a>
        </div>
    </div>
    </main>
@endsection