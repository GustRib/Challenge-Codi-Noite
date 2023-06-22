<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php $date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo')); ?>

<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'controllers/ControllerAdd.php'; ?>">
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>" required><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>" required><br>
    Cliente: <input type="text" name="title" id="title" required><br>
    Observações: <input type="text" name="description" id="description" required><br>
    Tipos de de serviço:
    <select name="horasAtendimento" id="horasAtendimento" required>
        <option value="">Selecione</option>
        <option value="1">Cabelo R$ 30,00</option>
        <option value="1">Barba R$ 20,00</option>
        <option value="1">Cabelo + Barbaba 40,00</option>
    </select><br>
    <input type="submit" value="AGENDAR">
</form>

<?php include(DIRREQ."lib/html/footer.php"); ?>