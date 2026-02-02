<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Criar Conta Completa | WS-HOTELARIA</title>

    <style>
        body {
            background-color: #e7f1ff;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .card {
            border-radius: 15px;
            border: none;
        }

        .section-title {
            border-bottom: 2px solid #0056b3;
            margin-bottom: 20px;
            padding-bottom: 5px;
            color: #0056b3;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-lg p-4">

                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-primary"><i class="fas fa-hotel me-2"></i>WS-HOTELARIA</h2>
                        <p class="text-muted">Preencha os seus dados para criar a sua conta</p>
                    </div>

                    <form id="formNewCadastro" method="POST" autocomplete="off">

                        <!-- TIPO -->
                        <div class="mb-4 text-center">
                            <div class="btn-group w-50" role="group">
                                <input type="radio" class="btn-check" name="tipo" id="hospede" value="hospede" checked>
                                <label class="btn btn-outline-primary" for="hospede">Pessoa Física</label>

                                <input type="radio" class="btn-check" name="tipo" id="empresa" value="empresa">
                                <label class="btn btn-outline-primary" for="empresa">Pessoa Jurídica</label>
                            </div>
                        </div>

                        <!-- IDENTIFICAÇÃO -->
                        <div class="section-title"><i class="fas fa-id-card me-2"></i>1. Identificação</div>

                        <div class="row">

                            <!-- PF -->
                            <div id="pfFields" class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nome Completo</label>
                                    <input type="text" class="form-control" name="full_name">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">CPF</label>
                                    <input type="text" class="form-control" name="cpf">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">RG</label>
                                    <input type="text" class="form-control" name="rg">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Data de Nascimento</label>
                                    <input type="date" class="form-control" name="birth_date">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Gênero</label>
                                    <select class="form-select" name="gender">
                                        <option value="">Selecione</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
                                        <option value="outro">Outro</option>
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Etnia</label>
                                    <select class="form-select" name="ethnicity">
                                        <option value="">Selecione</option>
                                        <option value="branco">Branco</option>
                                        <option value="negro">Negro</option>
                                        <option value="pardo">Pardo</option>
                                        <option value="indigena">Indígena</option>
                                    </select>
                                </div>
                            </div>

                            <!-- PJ -->
                            <div id="pjFields" class="row d-none">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nome da Empresa</label>
                                    <input type="text" class="form-control" name="company_name">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">CNPJ</label>
                                    <input type="text" class="form-control" name="cnpj">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Data de Fundação</label>
                                    <input type="date" class="form-control" name="founding_date">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Telefone Comercial</label>
                                    <input type="text" class="form-control" name="commercial_phone">
                                </div>
                            </div>

                        </div>

                        <!-- ENDEREÇO -->
                        <div class="section-title mt-3"><i class="fas fa-map-marker-alt me-2"></i>2. Localização</div>

                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="current_country" class="form-label">País Atual</label>
                                <input type="text" class="form-control" id="current_country" name="current_country" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">CEP</label>
                                <input type="text" class="form-control" name="cep">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Rua</label>
                                <input type="text" class="form-control" name="street">
                            </div>

                            <div class="col-md-3 mb-3">
                                <label class="form-label">Número</label>
                                <input type="text" class="form-control" name="address_number">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Bairro</label>
                                <input type="text" class="form-control" name="neighborhood">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Cidade</label>
                                <input type="text" class="form-control" name="city">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Estado</label>
                                <input type="text" class="form-control" name="state">
                            </div>
                        </div>

                        <!-- ACESSO -->
                        <div class="section-title mt-3"><i class="fas fa-lock me-2"></i>3. Dados de Acesso</div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Telefone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Senha</label>
                                <input type="password" class="form-control" name="senha">
                            </div>
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-user-check me-2"></i> Finalizar Cadastro
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>




</body>

</html>

<script src="../../public/js/new_cadastro.js"></script>