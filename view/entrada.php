<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../control/controleEntra.php" method="post">
            <label>Placa do Carro:</label>
            <input type="text" name="placa" placeholder="digite a placa do carro"/><br/>
            <label>Número da Vaga:</label>
            <input type="text" name="vaga" placeholder="digite o nº da vaga"/><br/>
            <label>Hora de Entrada:</label>
            <input type="time" name="entrada"/><br/>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
