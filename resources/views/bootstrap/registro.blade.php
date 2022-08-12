@extends("bootstrap.model")
@section("content")
    <main class="container-fluid">
        <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
              <span class="fs-4">Registre-se</span>
            </a>
          </header>
          <div class="container">
            <form action="add/actInputRegistro" method="POST">
              @csrf
              <div class="row">
                <div class="mb-3">
                  <label for="strPersonEmail" class="form-label">E-mail:</label>
                  <input type="email" class="form-control" id="strPersonEmail" name="strPersonEmail" placeholder="seuemail@emrpesa.com" required>
                </div>
                <div class="mb-3">
                  <label for="strPersonNome" class="form-label">Nome:</label>
                  <input type="text" class="form-control" id="strPersonNome" name="strPersonNome" required>
                </div>
                <div class="mb-3">
                  <label for="strPersonCep" class="form-label">Cep:</label>
                  <input type="text" class="form-control" id="strPersonCep" name="strPersonCep" required>
                </div>
                <div class="mb-3">
                  <input type="submit" class="btn btn-primary" Value="cadastrar">
                </div>
              </div>
            </form>
          </div>
    </main>
@endsection