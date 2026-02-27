<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wizard</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css">
</head>

<body>

<div class="card shadow bg-body-tertiary p-4 m-5">
  <div class="border rounded bg-primary bg-opacity-75 mb-5">
    <div class="d-flex align-items-center px-3 py-3 position-relative">

        <a href="{{ route('dashboard.findAll') }}" id="return"
           class="text-white text-decoration-none d-flex align-items-center">
            <i class="fa-solid fa-circle-arrow-left fa-xl"></i>
        </a>

        <h2 class="flex-grow-1 text-center text-white m-0">
            Cadastro de Informações
        </h2>

    </div>
</div>

  <div id="smartwizard">
    <ul class="nav">
      <li class="nav-item">
        <a href="#step-1" class="nav-link">
          <span class="num">1</span>
          <span>Dados Pessoais</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#step-2" class="nav-link">
          <span class="num">2</span>
          <span>Dados da Empresa</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#step-3" class="nav-link">
          <span class="num">3</span>
          <span>Comprovante de Energia</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#step-4" class="nav-link">
          <span class="num">4</span>
          <span>Finalizar</span>
        </a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="step-1" class="tab-pane">
        <div class="card">
          <div class="card-body row">
              <div class="col-6 mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Informe o nome completo">
              </div>
              <div class="col-6 mb-3">
                <label for="name" class="form-label">CPF</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Informe seu CPF">
              </div>
              <div class="col-6 mb-3">
                <label for="name" class="form-label">Data De Nascimento</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Informe sua Data de Nascimento">
              </div>
              <div class="col-6 mb-3">
                <label for="name" class="form-label">Naturalidade</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Informe sua Naturalidade">
              </div>
          </div>
        </div>
      </div>
      <div id="step-2" class="tab-pane">
        <div class="card">
          <div class="card-body row">
              <div class="col-6 mb-3">
                <label for="name" class="form-label">Nome Da Empresa</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Informe o nome da Empresa">
              </div>
              <div class="col-6 mb-3">
                <label for="name" class="form-label">CNPJ</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Informe o CNPJ">
              </div>
              <div class="col-6 mb-3">
                <label for="name" class="form-label">Tipo de Comercio</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Informe o Tipo de Comercio">
              </div>
              <div class="col-6 mb-3">
                <label for="name" class="form-label">Mais Alguma Coisa</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Informe sei la kskskskks">
              </div>
          </div>
        </div>
      </div>
      <div id="step-3" class="tab-pane">
        <div class="card">
          <div class="card-body row">
            <div class="border rounded p-3 bg-warning bg-opacity-75 text-center">
              <h6 class="m-0">Anexe o ultimo comprovante de Energia pago para calculos de economia que você irá ter a partir de agora!</h6>
            </div>
              <div class="col-6 my-3">
                <label class="form-label" for="inputGroupFile02">Anexo de Comprovante</label>
                  <input type="file" class="form-control" id="inputGroupFile02">
              </div>
          </div>
        </div>
      </div>
      <div id="step-4" class="tab-pane">
        teste 444444444
      </div>
    </div>
  </div>

  <div class="mt-3 d-flex justify-content-between">
    <button class="btn btn-lg btn-primary" onclick="prevStep()">Voltar</button>
    <button class="btn btn-lg btn-success" onclick="nextStep()">Próximo</button>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js"></script>

<script>
  $(document).ready(function() {
    $('#smartwizard').smartWizard({
      theme: 'dots',
      toolbar: {
        showNextButton: false,
        showPreviousButton: false
      },
      autoAdjustHeight: true,
      enableUrlHash: false,
    });
  });

  function nextStep() {
    $("#smartwizard").smartWizard("next");
  }

  function prevStep() {
    $("#smartwizard").smartWizard("prev");
  }
</script>

</body>
</html>
<style>
  #return:hover{
    transform: scale(1.05);
    transition: transform 0.3s ease
  }
  .btn:hover{
    transform: scale(1.05);
    transition: transform 0.3s ease
  }
</style>
