<?php
include_once "_header.php";
include_once "_navbar.php";
include_once "input-helper.php";
$errors = array();
$color = 'white';
$text_color = 'black';
if (!isset($_POST['submit'])) {
?>
<body>
    <div class="header">
        <h2>R G B</h2>
    </div>
    <form action="Colorpicker.php" method='post'>

        <?php create_input("R", "Червоний", "text", $errors); ?>
        <?php create_input("G", "Зелений", "text", $errors); ?>
        <?php create_input("B", "Синій", "text", $errors); ?>
        <input type="submit" name="submit" value="Accept" class="btn">
    </form>
</body>
<?php }
    else{
    global $color;
    global $text_color;
    $red = $_POST['R'];
    $green = $_POST['G'];
    $blue = $_POST['B'];
    $color = sprintf("#%02x%02x%02x", $red, $green, $blue);
    $text_color = sprintf("#%02x%02x%02x", 255-$red, 255-$green, 255-$blue);
    // echo $text_color;
};
//?>

<span style="background: <?php echo "$color" ?>; color: <?php echo "$text_color"?> ;"> тег span с каким-либо текстом внутри</span>