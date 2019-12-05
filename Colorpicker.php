<?php
include_once "_header.php";
include_once "_navbar.php";
?>

<body>
    <div class="header">
        <h2>R G B</h2>
    </div>
    <form method='post'>
        <div class="input-group">
            <input name="R" type="text" value="200">
        </div>
        <div class="input-group">
            <input name="G" type="text" value="200">
        </div>
        <div class="input-group">
            <input name="B" type="text" value="200">
        </div>
        <div class="input-group">
            <button type="submit" class="btn">Accept</button>
        </div>
    </form>
</body>
<?php
//$red = $green = $blue = 255;
$red = $_POST['R'];
$green = $_POST['G'];
$blue = $_POST['B'];
$color = sprintf("#%02x%02x%02x", $red, $green, $blue);
echo "$color";
?>

<span style="background: <?php echo "$color"; ?>"> тег span с каким-либо текстом внутри</span>
