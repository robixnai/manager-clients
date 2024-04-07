<script src="../script.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Adicionar Cliente</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="head">
        <div class="title">
            <h1>Adicionar Cliente</h1>
        </div>
    </div>

    <form class="formAdd" name="addClient" action="../controller/add-client-controller.php" method="post" onsubmit="return validateForm()">
        <div>
            <label for="code">Código:</label><br>
            <input type="text" name="code" maxlength="8" value="">
            <span id="code" class="mandatory"></span>
        </div>

        <div>
            <label for="name">Nome:</label><br>
            <input type="text" name="name" maxlength="100" value="">
            <span id="name" class="mandatory"></span>
        </div>

        <div>
            <label for="lastName">Sobrenome:</label><br>
            <input type="text" name="lastName" maxlength="200" value="">
            <span id="lastName" class="mandatory"></span>
        </div>

        <div>
            <label for="age">Idade:</label><br>
            <input type="text" name="age" maxlength="8" value="">
            <span id="age" class="mandatory"></span>
        </div>

        <div>
            <input class="btnSave" type="submit" value="Salvar">
        </div>
    </form>
</body>