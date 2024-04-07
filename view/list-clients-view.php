<?php include_once('controller/list-clients-controller.php'); ?>

<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="head">
        <div class="title">
            <h1>Clientes</h1>
        </div>
        <div class="buttonNew">
            <div class="material-symbols-outlined" onclick="window.location.href='view/add-client-view.php'">add_circle</div>
        </div>
    </div>

    <?php if (!empty($clients)) : ?>
        <table class="tableList">
            <tr>
                <th class="code">Código</th>
                <th class="name">Nome</th>
                <th class="lastName">Sobrenome</th>
                <th class="age">Idade</th>
                <td class="actions"></td>
            </tr>
            <?php
            foreach ($clients as $client) {
                echo "<tr>";
                echo "<td class='code'>" . $client->get_code() . "</td>";
                echo "<td class='name'>" . $client->get_name() . "</td>";
                echo "<td class='lastName'>" . $client->get_last_name() . "</td>";
                echo "<td class='age'>" . $client->get_age() . " anos</td>";
                echo "<td class='actions'>";
                echo "<span class='material-symbols-outlined' onclick=\"window.location.href='view/alter-client-view.php?id=" .$client->get_id(). "'\">edit</span>";
                echo "<span class='material-symbols-outlined' onclick=\"window.location.href='controller/remove-client-controller.php?id=" .$client->get_id(). "'\">delete</span>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    <?php else : ?>
        <div class="empty">
            <span>Não existe cliente cadastrado!</span>
        </div>
    <?php endif ?>
</body>