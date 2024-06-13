<nav class="navbar navbar-expand-lg navbar-light bg-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotéis com M</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Página Inicial</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2" href="hoteis.php">Motéis</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2" href="sobre nós.php">Sobre nós</a>
        </li>

      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3 align-right" data-bs-toggle="modal" data-bs-target="#loginModal">
  Login
</button>
      </div>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3 align-right" data-bs-toggle="modal" data-bs-target="#registerModal">
  Registrar
</button>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
      <div class="modal-header align-center">
        <h5 class="modal-title">
        <i class="bi bi-person"></i> Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
            <label class="form-label">Endereço de e-mail</label>
            <input type="email" class="form-control shadow-none">
         </div>
         <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="password" class="form-control shadow-none">
  </div>
          <div class="d-flex align-items-center justify-content-between">
<button type="submit" class="btn btn-dark shadow-none">
Entrar
</button>
<a href="javascript: void(0)" class="text-secondary text-decoration-none">Esqueci minha senha</a>
          </div>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
      <div class="modal-header align-center">
        <h5 class="modal-title">
        <i class="bi bi-person-add"></i> Registro do usuário
      </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body align-center">
          <div class="container-fluid">
            <div class="row">

              <div class="col-md-7 ps-3">
              <label class="form-label">Nome</label>
              <input type="text" class="form-control shadow-none">
            </div>

              <div class="col-md-7 ps-3">
              <label class="form-label">Endereço de e-mail</label>
              <input type="email" class="form-control shadow-none">
            </div>

              <div class="col-md-7 ps-3">
              <label class="form-label">Número de contato</label>
              <input type="number" class="form-control shadow-none">
              </div>

              <div class="col-md-7 ps-3">
              <label class="form-label">Data de nascimento</label>
              <input type="date" class="form-control shadow-none">
              </div>

              <div class="col-md-7 ps-3">
              <label class="form-label">Senha</label>
              <input type="password" class="form-control shadow-none">
              </div>

              <div class="col-md-7 ps-3">
              <label class="form-label">Confirme sua senha</label>
              <input type="password" class="form-control shadow-none">
              </div>

            </div>
          </div>
      </div>
      <div class="text-center my-1">
<button type="submit" class="btn btn-dark shadow-none">
Registrar
</button>
      </div>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>