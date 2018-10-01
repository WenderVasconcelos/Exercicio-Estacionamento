<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../control/controleSaida.php" method="post">
            <label>Placa do Carro:</label>
            <input type="text" name="placa" placeholder="digite a placa do carro"/><br/>
            <label>Hora de Entrada:</label>
            <input type="time" name="entrada"/><br/>
            <label>Hora de Saída:</label>
            <input type="time" name="saida"/><br/>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
